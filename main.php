<?php

// GLOBALS
// HOLD two letter language codes like en, fr, hi etc
$languages = array();
$supportedLanguages = array();

/**
 * Returns the supported languages based on the input HTTP_ACCEPT_LANGUAGE header or similarly formatted string of language codes.
 * @param string $httpAcceptLanguage The HTTP_ACCEPT_LANGUAGE header
 * @param array $detectedLanguages An array of detected languages in the format array('en' , 'hi')
 * @return array of supported languages, formatted like array(en => 1), or empty Array if not found
 */
function getSupportedLanguages(string $httpAcceptLanguage, array $detectedLanguages = []): array
{
    $langs = array();
    $availableLanguages = array("ar" => 1, "cs" => 1, "da" => 1, "de" => 1, "en" => 1, "eo" => 1, "es" => 1, "fa" => 1, "fi" => 1, "fil" => 1, "fr" => 1, "fr-CA-u-sd-caqc" => 1, "hi" => 1, "hi-Latn" => 1, "hu" => 1, "it" => 1, "ja" => 1, "kab" => 1, "ko" => 1, "nl" => 1, "no" => 1, "pl" => 1, "pt" => 1, "ru" => 1, "sv" => 1, "th" => 1, "tlh" => 1, "tr" => 1, "zh" => 1);

    if (count($detectedLanguages) > 0) {
        foreach ($detectedLanguages as $detectedLanguage) {
            if (isset($availableLanguages[$detectedLanguage])) {
                $langs[] = $detectedLanguage;
            }
        }
    } else {
        preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($httpAcceptLanguage), $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            list($a, $b) = explode('-', $match[1]) + array('', '');

            if (isset($availableLanguages[$match[1]])) {
                $langs[] = $match[1];
            } elseif (isset($availableLanguages[$a])) {
                $langs[] = $a;
            }
        }
    }
    return $langs;
}

/**
 * Use the country code to determine the language
 * @param $countryCode ISO 3166-2-alpha 2 country code
 * @return void
 */
function countryCodeToLanguage(string $countryCode = ""): void
{
    global $languages;

    // find the country code from cloudflare header only if $countryCode is empty
    if (empty($countryCode)) {
        if (isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
            $countryCode = $_SERVER["HTTP_CF_IPCOUNTRY"];
        } else {
            $countryCode = "IN";
        }
    }

    // Locale list taken from:
    // http://stackoverflow.com/questions/3191664/
    // list-of-all-locales-and-their-short-codes
    $countryCodeToLocale = array(
        'ZA' =>
        array(
            0 => 'af',
            1 => 'en',
            2 => 'ns',
            3 => 'tn',
            4 => 'xh',
            5 => 'zu',
        ),
        'ET' =>
        array(
            0 => 'am',
        ),
        'AE' =>
        array(
            0 => 'ar',
        ),
        'BH' =>
        array(
            0 => 'ar',
        ),
        'DZ' =>
        array(
            0 => 'ar',
            1 => 'tz',
        ),
        'EG' =>
        array(
            0 => 'ar',
        ),
        'IQ' =>
        array(
            0 => 'ar',
        ),
        'JO' =>
        array(
            0 => 'ar',
        ),
        'KW' =>
        array(
            0 => 'ar',
        ),
        'LB' =>
        array(
            0 => 'ar',
        ),
        'LY' =>
        array(
            0 => 'ar',
        ),
        'MA' =>
        array(
            0 => 'ar',
        ),
        'CL' =>
        array(
            0 => 'ar',
            1 => 'es',
        ),
        'OM' =>
        array(
            0 => 'ar',
        ),
        'QA' =>
        array(
            0 => 'ar',
        ),
        'SA' =>
        array(
            0 => 'ar',
        ),
        'SY' =>
        array(
            0 => 'ar',
            1 => 'sy',
        ),
        'TN' =>
        array(
            0 => 'ar',
        ),
        'YE' =>
        array(
            0 => 'ar',
        ),
        'IN' =>
        array(
            0 => 'as',
            1 => 'bn',
            2 => 'en',
            3 => 'gu',
            4 => 'hi',
            5 => 'kn',
            6 => 'ko',
            7 => 'ml',
            8 => 'mr',
            9 => 'or',
            10 => 'pa',
            11 => 'sa',
            12 => 'ta',
            13 => 'te',
        ),
        'AZ' =>
        array(
            0 => 'az',
            1 => 'az',
        ),
        'RU' =>
        array(
            0 => 'ba',
            1 => 'ru',
            2 => 'sa',
            3 => 'tt',
        ),
        'BY' =>
        array(
            0 => 'be',
        ),
        'BG' =>
        array(
            0 => 'bg',
        ),
        'BD' =>
        array(
            0 => 'bn',
        ),
        'CN' =>
        array(
            0 => 'bo',
            1 => 'ii',
            2 => 'mn',
            3 => 'ug',
            4 => 'zh',
        ),
        'FR' =>
        array(
            0 => 'br',
            1 => 'co',
            2 => 'fr',
            3 => 'gs',
            4 => 'oc',
        ),
        'BA' =>
        array(
            0 => 'bs',
            1 => 'bs',
            2 => 'hr',
            3 => 'sr',
            4 => 'sr',
        ),
        'ES' =>
        array(
            0 => 'ca',
            1 => 'es',
            2 => 'eu',
            3 => 'gl',
        ),
        'CZ' =>
        array(
            0 => 'cs',
        ),
        'GB' =>
        array(
            0 => 'cy',
            1 => 'en',
            2 => 'gd',
        ),
        'DK' =>
        array(
            0 => 'da',
        ),
        'AT' =>
        array(
            0 => 'de',
        ),
        'CH' =>
        array(
            0 => 'de',
            1 => 'fr',
            2 => 'it',
            3 => 'rm',
        ),
        'DE' =>
        array(
            0 => 'de',
            1 => 'ds',
            2 => 'hs',
        ),
        'LI' =>
        array(
            0 => 'de',
        ),
        'LU' =>
        array(
            0 => 'de',
            1 => 'fr',
            2 => 'lb',
        ),
        'MV' =>
        array(
            0 => 'dv',
        ),
        'GR' =>
        array(
            0 => 'el',
        ),
        29 =>
        array(
            0 => 'en',
        ),
        'AU' =>
        array(
            0 => 'en',
        ),
        'BZ' =>
        array(
            0 => 'en',
        ),
        'CA' =>
        array(
            0 => 'en',
            1 => 'fr',
            2 => 'iu',
            3 => 'iu',
            4 => 'mo',
        ),
        'IE' =>
        array(
            0 => 'en',
            1 => 'ga',
        ),
        'JM' =>
        array(
            0 => 'en',
        ),
        'MY' =>
        array(
            0 => 'en',
            1 => 'ms',
        ),
        'NZ' =>
        array(
            0 => 'en',
            1 => 'mi',
        ),
        'PH' =>
        array(
            0 => 'en',
            1 => 'fi',
        ),
        'SG' =>
        array(
            0 => 'en',
            1 => 'zh',
        ),
        'TT' =>
        array(
            0 => 'en',
        ),
        'US' =>
        array(
            0 => 'en',
            1 => 'es',
        ),
        'ZW' =>
        array(
            0 => 'en',
        ),
        'AR' =>
        array(
            0 => 'es',
        ),
        'BO' =>
        array(
            0 => 'es',
            1 => 'qu',
        ),
        'CO' =>
        array(
            0 => 'es',
        ),
        'CR' =>
        array(
            0 => 'es',
        ),
        'DO' =>
        array(
            0 => 'es',
        ),
        'EC' =>
        array(
            0 => 'es',
            1 => 'qu',
        ),
        'GT' =>
        array(
            0 => 'es',
            1 => 'qu',
        ),
        'HN' =>
        array(
            0 => 'es',
        ),
        'MX' =>
        array(
            0 => 'es',
        ),
        'NI' =>
        array(
            0 => 'es',
        ),
        'PA' =>
        array(
            0 => 'es',
        ),
        'PE' =>
        array(
            0 => 'es',
            1 => 'qu',
        ),
        'PR' =>
        array(
            0 => 'es',
        ),
        'PY' =>
        array(
            0 => 'es',
        ),
        'SV' =>
        array(
            0 => 'es',
        ),
        'UY' =>
        array(
            0 => 'es',
        ),
        'VE' =>
        array(
            0 => 'es',
        ),
        'EE' =>
        array(
            0 => 'et',
        ),
        'IR' =>
        array(
            0 => 'fa',
        ),
        'FI' =>
        array(
            0 => 'fi',
            1 => 'se',
            2 => 'sm',
            3 => 'sm',
            4 => 'sv',
        ),
        'FO' =>
        array(
            0 => 'fo',
        ),
        'BE' =>
        array(
            0 => 'fr',
            1 => 'nl',
        ),
        'MC' =>
        array(
            0 => 'fr',
        ),
        'NL' =>
        array(
            0 => 'fy',
            1 => 'nl',
        ),
        'NG' =>
        array(
            0 => 'ha',
            1 => 'ig',
            2 => 'yo',
        ),
        'IL' =>
        array(
            0 => 'he',
        ),
        'HR' =>
        array(
            0 => 'hr',
        ),
        'HU' =>
        array(
            0 => 'hu',
        ),
        'AM' =>
        array(
            0 => 'hy',
        ),
        'ID' =>
        array(
            0 => 'id',
        ),
        'IS' =>
        array(
            0 => 'is',
        ),
        'IT' =>
        array(
            0 => 'it',
        ),
        'JP' =>
        array(
            0 => 'ja',
        ),
        'GE' =>
        array(
            0 => 'ka',
        ),
        'KZ' =>
        array(
            0 => 'kk',
        ),
        'GL' =>
        array(
            0 => 'kl',
        ),
        'KH' =>
        array(
            0 => 'km',
        ),
        'KR' =>
        array(
            0 => 'ko',
        ),
        'KG' =>
        array(
            0 => 'ky',
        ),
        'LA' =>
        array(
            0 => 'lo',
        ),
        'LT' =>
        array(
            0 => 'lt',
        ),
        'LV' =>
        array(
            0 => 'lv',
        ),
        'MK' =>
        array(
            0 => 'mk',
        ),
        'MN' =>
        array(
            0 => 'mn',
        ),
        'BN' =>
        array(
            0 => 'ms',
        ),
        'MT' =>
        array(
            0 => 'mt',
        ),
        'NO' =>
        array(
            0 => 'nb',
            1 => 'nn',
            2 => 'se',
            3 => 'sm',
            4 => 'sm',
        ),
        'NP' =>
        array(
            0 => 'ne',
        ),
        'PL' =>
        array(
            0 => 'pl',
        ),
        'AF' =>
        array(
            0 => 'pr',
            1 => 'ps',
        ),
        'BR' =>
        array(
            0 => 'pt',
        ),
        'PT' =>
        array(
            0 => 'pt',
        ),
        'RO' =>
        array(
            0 => 'ro',
        ),
        'RW' =>
        array(
            0 => 'rw',
        ),
        'SE' =>
        array(
            0 => 'se',
            1 => 'sm',
            2 => 'sm',
            3 => 'sv',
        ),
        'LK' =>
        array(
            0 => 'si',
        ),
        'SK' =>
        array(
            0 => 'sk',
        ),
        'SI' =>
        array(
            0 => 'sl',
        ),
        'AL' =>
        array(
            0 => 'sq',
        ),
        'CS' =>
        array(
            0 => 'sr',
            1 => 'sr',
        ),
        'ME' =>
        array(
            0 => 'sr',
            1 => 'sr',
        ),
        'RS' =>
        array(
            0 => 'sr',
            1 => 'sr',
        ),
        'KE' =>
        array(
            0 => 'sw',
        ),
        'TJ' =>
        array(
            0 => 'tg',
        ),
        'TH' =>
        array(
            0 => 'th',
        ),
        'TM' =>
        array(
            0 => 'tk',
        ),
        'TR' =>
        array(
            0 => 'tr',
        ),
        'UA' =>
        array(
            0 => 'uk',
        ),
        'PK' =>
        array(
            0 => 'ur',
        ),
        'UZ' =>
        array(
            0 => 'uz',
            1 => 'uz',
        ),
        'VN' =>
        array(
            0 => 'vi',
        ),
        'SN' =>
        array(
            0 => 'wo',
        ),
        'HK' =>
        array(
            0 => 'zh',
        ),
        'MO' =>
        array(
            0 => 'zh',
        ),
        'TW' =>
        array(
            0 => 'zh',
        ),
    );

    if (isset($countryCodeToLocale[$countryCode])) {
        array_push($languages, ...$countryCodeToLocale[$countryCode]);
    }
}

/**
 * Get HTTP_ACCEPT_LANGUAGE and add additional languages to it
 * @return string $httpAcceptLanguage
 */

function getHttpAcceptLanguage(): string
{
    // Base languages
    $httpAcceptLanguage = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? $_SERVER["HTTP_ACCEPT_LANGUAGE"] : '';
    return $httpAcceptLanguage;
}

/**
 * adds additional languages to the $httpAcceptLanguage
 * @param $languagesToCheck string
 * @param $additionalLanguages array
 * @return void
 */
function addAdditionalLanguages(string &$languagesToCheck, array $additionalLanguages): void
{
    foreach ($additionalLanguages as $language) {
        if (strpos($languagesToCheck, $language) == false) {
            // if not, add the laguage to the start of the $httpAcceptLanguage
            $languagesToCheck = $language . ", " . $languagesToCheck;
        }
    }
}

/**
 * Check if the text contains profanity
 * @param string $text the text to check
 * @param array $exploded the text exploded into an array (optional)
 * @param array $detectedLanguages the languages detected in the text (optional)
 * @return bool true if the text contains profanity, false if not
 */
function isProfanity(string &$text, array $detectedLanguages = [], array &$exploded = []): bool
{
    $badWords = array();
    $badWordsArabic = array();

    if ($detectedLanguages === []) {
        $langs = getSupportedLanguages(getHttpAcceptLanguage());
    } else {
        $langs = getSupportedLanguages("", $detectedLanguages);
    }

    // get the json data for each language in langs
    foreach ($langs as $lang) {
        // only works when include or require is used
        include __DIR__ . "/languages/" . $lang . ".php";
    }

    $check_arabic = $badWordsArabic !== [];

    // convert $text to array
    if ($exploded == []) {
        // remove emojis, punctuations and digits and convert to array
        $cleanText = explode(" ", preg_replace('/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1F900}-\x{1F9FF}\x{1F1E0}-\x{1F1FF}]|[[:punct:]]|[[:digit:]]/u', '', $text));
    } else {
        $cleanText = $exploded;
    }

    // check if the text contains bad words
    foreach ($cleanText as $word) {
        $word = strtolower($word);
        if (key_exists($word, $badWords)) {
            return true;
        }
        if ($check_arabic) {
            if (in_array($word, $badWordsArabic)) {
                return true;
            }
        }
    }
    return false;
}

/**
 * Backward compatibility for v1.0.2
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

// RUN this only when the file is run directly and not when included
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    try {
        $message = "hello";
        assert(isProfanity($message) == false);
        assert($message == "hello");

        $message = "tum ek number ke madharchod ho";
        assert(isProfanity($message) == true);
        assert($message == "tum ek number ke madharchod ho");

        $message = "tum ek randi ke madharchod ho";
        assert(isProfanity($message) == true);
        assert($message == "tum ek randi ke madharchod ho");

        // Test empty message
        $message = "";
        assert(isProfanity($message) == false);
        assert($message == "");

        // Test message with only one profanity word
        $message = "bastard";
        assert(isProfanity($message) == true);
        assert($message == "bastard");

        // Test message with multiple profanity words
        $message = "what the hell is wrong with you, you motherfucker?";
        assert(isProfanity($message) == true);
        assert($message == "what the hell is wrong with you, you motherfucker?");

        // Test message with profanity word inside a non-profanity word
        $message = "classy";
        assert(isProfanity($message) == false);
        assert($message == "classy");

        // Test message with profanity word partially censored
        $message = "you f***ing idiot";
        assert(isProfanity($message) == false);
        assert($message == "you f***ing idiot");

        // Test message with profanity word fully censored
        $message = "you ***********";
        assert(isProfanity($message) == false);
        assert($message == "you ***********");

        // Test message with profanity word at the beginning
        $message = "shit happens";
        assert(isProfanity($message) == true);
        assert($message == "shit happens");

        // Test message with profanity word at the end
        $message = "that's bullshit";
        assert(isProfanity($message) == true);
        assert($message == "that's bullshit");

        // Test message with multiple sentences
        $message = "you fucking asshole! I can't believe you did this to me.";
        assert(isProfanity($message) == true);
        assert($message == "you fucking asshole! I can't believe you did this to me.");

        echo "All tests passed" . PHP_EOL;
    } catch (\Throwable $th) {
        echo "Tests failed" . PHP_EOL;
        echo $th->getMessage();
    }
}
