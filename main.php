<?php
// GLOBALS
// HOLD two/three letter language codes like en=>true, fr=>true, hi=>true etc
// It only holds the languages that we support. It omits every other language.
$supportedLanguages = array();
include __DIR__ . "/languages/availableLanguages.php";

/**
 * Fills supportedLanguages global variable with languages supported by us based on what user may support
 * 
 * @param array $detectedLanguages An array of detected languages in the format array('en' , 'hi')
 * @param bool $all If true, then all languages are supported
 */
function getSupportedLanguages(array $detectedLanguages = [], bool $all = false): void
{
    global $supportedLanguages, $availableLanguages;

    if ($all) {
        $supportedLanguages = $availableLanguages;
        return;
    }
    if (!empty($detectedLanguages)) {
        foreach ($detectedLanguages as $detectedLanguage) {
            // handle cases like hi-Latn, en-GB etc and 3 letter codes like fil, tlh etc
            if (strlen($detectedLanguage) > 2) {
                $detectedLanguage = explode("-", $detectedLanguage)[0];
            }
            if (isset($availableLanguages[$detectedLanguage])) {
                $supportedLanguages[$detectedLanguage] = true;
            }
        }
    } else {
        getHttpAcceptLanguages();
        countryCodeToLanguage();
    }
}

/**
 * Get the supported language code for a country code
 *
 * @param $string $countryCode
 * @param $array $supportedLanguages
 * @return void
 */
function getSupportedLanguageCode(string $countryCode, array &$supportedLanguages): void
{
    include_once __DIR__ . "/countryToSupportedLanguageCodes.php";
    if (isset($countryToSupportedLanguageCodes[$countryCode])) {
        foreach ($countryToSupportedLanguageCodes[$countryCode] as $languageCode => $value) {
            $supportedLanguages[$languageCode] = true;
        }
    }
}

/**
 * Use the country code to determine the language
 * 
 * @param $countryCode ISO 3166-2-alpha 2 country code
 * @return void
 */
function countryCodeToLanguage(string $countryCode = ""): void
{
    global $supportedLanguages, $languages;

    // find the country code from cloudflare header only if $countryCode is empty
    if (empty($countryCode)) {
        if (isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
            $countryCode = $_SERVER["HTTP_CF_IPCOUNTRY"];
        } else {
            $countryCode = "IN";
        }
    }
    getSupportedLanguageCode($countryCode, $supportedLanguages);
}

/**
 * Get HTTP_ACCEPT_LANGUAGE and extract the languages
 * 
 * @return void
 */
function getHttpAcceptLanguages(): void
{
    global $supportedLanguages, $availableLanguages;
    // Base languages
    $httpAcceptLanguage = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? $_SERVER["HTTP_ACCEPT_LANGUAGE"] : '';
    if (empty($httpAcceptLanguage)) {
        return;
    }
    // Parse the accept language header and extracts the 2/3 letter language code
    preg_match_all('~([a-z]{2,3})~i', strtolower($httpAcceptLanguage), $matches, PREG_SET_ORDER);
    foreach ($matches as $match) {
        // add to languages if not exists
        if (isset($availableLanguages[$match[1]])) {
            $supportedLanguages[$match[1]] = true;
        }
    }
}

/**
 * Check if a string contains profanity, it uses methods to make sure that it is fast.
 * 
 * @param string &$text The string to check. Optional. If not provided, then $exploded must be provided.
 * @param array $detectedLanguages = [] The languages that were detected in the string. Optional.
 * @param array &$exploded = [] The exploded and cleaned string to remove punctuations and emojis. Optional. If not provided, then $text must be provided.
 * @param int &explodedLength = 0 The length of the exploded string. Optional.
 * @param bool $all = false If true, it will check for all the languages available. Optional. 
 * @return bool true if the string contains profanity, false if not.
 */
function isProfanity(&$text = "", $detectedLanguages = [], &$exploded = [], &$explodedLength = 0, $all = false): bool
{
    if (empty($text) && empty($exploded)) {
        return false;
    }
    global $supportedLanguages;
    $badWords = array(
        "badWords" => array(),
        "badWordsLength" => 0,
    );
    $badPhrases = array(
        "badPhrases" => array(),
        "badPhrasesLength" => 0,
    );

    getSupportedLanguages($detectedLanguages, $all);

    if (empty($supportedLanguages)) {
        return false;
    }

    // get the json data for each language in langs
    foreach ($supportedLanguages as $lang => $value) {
        $filePath = __DIR__ . "/languages/" . $lang . ".php";
        if (file_exists($filePath)) {
            include $filePath;
        }
    }

    // convert $text to array
    if (empty($exploded)) {
        // remove emojis, punctuations and digits and convert to array
        $cleanText = explode(" ", preg_replace("/[0-9\p{P}\p{So}]/u", '', $text));
        // lowercase all the words
        $cleanText = array_map('mb_strtolower', $cleanText);
        $cleanTextLength = count($cleanText);
        if ($cleanTextLength == 0) {
            throw new Exception("No words found in the text");
        }
    } else {
        $cleanText = $exploded;
        $cleanTextLength = $explodedLength;
    }

    $badWords = $badWords["badWords"];
    $badPhrases = $badPhrases["badPhrases"];

    // check if the arrays are empty
    if (empty($badWords) && empty($badPhrases)) {
        return false;
    }

    // check for bad words using Hash Table
    foreach ($cleanText as $word) {
        if (isset($badWords[$word]) && $badWords[$word]) {
            return true;
        }
    }

    // check for badPhrases
    foreach ($badPhrases as $badPhrase) {
        if (boyerMooreSearch($cleanText, $cleanTextLength, $badPhrase['badPhrase'], $badPhrase['badPhraseLength'], $badPhrase['badPhraseArrayTable'])) {
            return true;
        }
    }

    return false;
}

/**
 * An Implementation of the Boyer-Moore algorithm. It treats arrays as strings.
 * The algorithm is modified to work with arrays.
 * Also, the Array Table is precomputed and passed to the function.
 * 
 * @param array $haystack
 * @param integer $haystackLength
 * @param array $needle
 * @param integer $needleLength
 * @param array $table
 * @return boolean
 */
function boyerMooreSearch(array &$haystack, int &$haystackLength, array &$needle, int &$needleLength, array &$table): bool
{
    for ($i = $needleLength - 1; $i < $haystackLength;) {
        $t = $i;

        for ($j = $needleLength - 1; $haystack[$t] == $needle[$j]; $j--, $t--) {
            if ($j == 0) {
                return true;
            }
        }
        $i += max((isset($table[$haystack[$i]]) ? $table[$haystack[$i]] : $needleLength), 1);
    }

    return false;
}


/**
 * Backward compatibility for v1.0.2
 * 
 * @param string $text the text to check
 * @param array $exploded the text exploded into an array (optional)
 * @return bool true if the text contains profanity, false if not
 * @deprecated
 * @see isProfanity
 */

function is_profanity(string &$text,  array &$exploded = []): bool
{
    return isProfanity($text, $exploded);
}
