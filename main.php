<?php


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
 * Returns a locale from a country code that is provided.
 * @param $countryCode  ISO 3166-2-alpha 2 country code
 * @return array of locales, formatted like en-US, or empty Array if not found
 */
function countryCodeToLocale(string $countryCode): array
{
    // Locale list taken from:
    // http://stackoverflow.com/questions/3191664/
    // list-of-all-locales-and-their-short-codes
    $locales = array(
        'af-ZA',
        'am-ET',
        'ar-AE',
        'ar-BH',
        'ar-DZ',
        'ar-EG',
        'ar-IQ',
        'ar-JO',
        'ar-KW',
        'ar-LB',
        'ar-LY',
        'ar-MA',
        'arn-CL',
        'ar-OM',
        'ar-QA',
        'ar-SA',
        'ar-SY',
        'ar-TN',
        'ar-YE',
        'as-IN',
        'az-Cyrl-AZ',
        'az-Latn-AZ',
        'ba-RU',
        'be-BY',
        'bg-BG',
        'bn-BD',
        'bn-IN',
        'bo-CN',
        'br-FR',
        'bs-Cyrl-BA',
        'bs-Latn-BA',
        'ca-ES',
        'co-FR',
        'cs-CZ',
        'cy-GB',
        'da-DK',
        'de-AT',
        'de-CH',
        'de-DE',
        'de-LI',
        'de-LU',
        'dsb-DE',
        'dv-MV',
        'el-GR',
        'en-029',
        'en-AU',
        'en-BZ',
        'en-CA',
        'en-GB',
        'en-IE',
        'en-IN',
        'en-JM',
        'en-MY',
        'en-NZ',
        'en-PH',
        'en-SG',
        'en-TT',
        'en-US',
        'en-ZA',
        'en-ZW',
        'es-AR',
        'es-BO',
        'es-CL',
        'es-CO',
        'es-CR',
        'es-DO',
        'es-EC',
        'es-ES',
        'es-GT',
        'es-HN',
        'es-MX',
        'es-NI',
        'es-PA',
        'es-PE',
        'es-PR',
        'es-PY',
        'es-SV',
        'es-US',
        'es-UY',
        'es-VE',
        'et-EE',
        'eu-ES',
        'fa-IR',
        'fi-FI',
        'fil-PH',
        'fo-FO',
        'fr-BE',
        'fr-CA',
        'fr-CH',
        'fr-FR',
        'fr-LU',
        'fr-MC',
        'fy-NL',
        'ga-IE',
        'gd-GB',
        'gl-ES',
        'gsw-FR',
        'gu-IN',
        'ha-Latn-NG',
        'he-IL',
        'hi-IN',
        'hr-BA',
        'hr-HR',
        'hsb-DE',
        'hu-HU',
        'hy-AM',
        'id-ID',
        'ig-NG',
        'ii-CN',
        'is-IS',
        'it-CH',
        'it-IT',
        'iu-Cans-CA',
        'iu-Latn-CA',
        'ja-JP',
        'ka-GE',
        'kk-KZ',
        'kl-GL',
        'km-KH',
        'kn-IN',
        'kok-IN',
        'ko-KR',
        'ky-KG',
        'lb-LU',
        'lo-LA',
        'lt-LT',
        'lv-LV',
        'mi-NZ',
        'mk-MK',
        'ml-IN',
        'mn-MN',
        'mn-Mong-CN',
        'moh-CA',
        'mr-IN',
        'ms-BN',
        'ms-MY',
        'mt-MT',
        'nb-NO',
        'ne-NP',
        'nl-BE',
        'nl-NL',
        'nn-NO',
        'nso-ZA',
        'oc-FR',
        'or-IN',
        'pa-IN',
        'pl-PL',
        'prs-AF',
        'ps-AF',
        'pt-BR',
        'pt-PT',
        'qut-GT',
        'quz-BO',
        'quz-EC',
        'quz-PE',
        'rm-CH',
        'ro-RO',
        'ru-RU',
        'rw-RW',
        'sah-RU',
        'sa-IN',
        'se-FI',
        'se-NO',
        'se-SE',
        'si-LK',
        'sk-SK',
        'sl-SI',
        'sma-NO',
        'sma-SE',
        'smj-NO',
        'smj-SE',
        'smn-FI',
        'sms-FI',
        'sq-AL',
        'sr-Cyrl-BA',
        'sr-Cyrl-CS',
        'sr-Cyrl-ME',
        'sr-Cyrl-RS',
        'sr-Latn-BA',
        'sr-Latn-CS',
        'sr-Latn-ME',
        'sr-Latn-RS',
        'sv-FI',
        'sv-SE',
        'sw-KE',
        'syr-SY',
        'ta-IN',
        'te-IN',
        'tg-Cyrl-TJ',
        'th-TH',
        'tk-TM',
        'tn-ZA',
        'tr-TR',
        'tt-RU',
        'tzm-Latn-DZ',
        'ug-CN',
        'uk-UA',
        'ur-PK',
        'uz-Cyrl-UZ',
        'uz-Latn-UZ',
        'vi-VN',
        'wo-SN',
        'xh-ZA',
        'yo-NG',
        'zh-CN',
        'zh-HK',
        'zh-MO',
        'zh-SG',
        'zh-TW',
        'zu-ZA',
    );

    $languageCodes = array();
    foreach ($locales as $locale) {
        $localeRegion = locale_get_region($locale);
        $localeLanguage = locale_get_primary_language($locale);
        $localeArray = array(
            'language' => $localeLanguage,
            'region' => $localeRegion
        );

        if (
            strtoupper($countryCode) == $localeRegion
        ) {
            array_push($languageCodes, join('-', $localeArray));
        }
    }
    return $languageCodes;
}

/**
 * Get HTTP_ACCEPT_LANGUAGE and add additional languages to it
 * @return string $httpAcceptLanguage
 */

function getHttpAcceptLanguage(): string
{
    // Base languages
    $httpAcceptLanguage = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? $_SERVER["HTTP_ACCEPT_LANGUAGE"] : '';

    // find the country code from cloudflare header
    if (!isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
        // for testing. won't run when deployed.
        $_SERVER["HTTP_CF_IPCOUNTRY"] = "IN";
    }
    if (isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
        $countryCode = $_SERVER["HTTP_CF_IPCOUNTRY"];
        $languages = countryCodeToLocale($countryCode);
        addAdditionalLanguages($httpAcceptLanguage, $languages);
    }

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
