<?php

if (!function_exists("preferred_language")) {
    // It takes all the languages accepted by the browser and all the languages supported by isProfanity function.
    // It returns the languages array.
    function prefered_language(array $available_languages, $http_accept_language)
    {
        $langs = array();
        preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($http_accept_language), $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            list($a, $b) = explode('-', $match[1]) + array('', '');
            $value = isset($match[2]) ? (float) $match[2] : 1.0;

            if (isset($available_languages[$match[1]])) {
                $langs[$match[1]] = 1;
            } elseif (isset($available_languages[$a])) {
                $langs[$a] = 1;
            }
        }
        return $langs;
    }
}

if (!function_exists("country_code_to_locale")) {
    //
    //  Returns a locale from a country code that is provided.
    // 
    //  @param $country_code  ISO 3166-2-alpha 2 country code
    //  @returns  array of locales, formatted like en-US, or empty Array if not found
    //
    function country_code_to_locale($country_code)
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

        $language_codes = array();
        foreach ($locales as $locale) {
            $locale_region = locale_get_region($locale);
            $locale_language = locale_get_primary_language($locale);
            $locale_array = array(
                'language' => $locale_language,
                'region' => $locale_region
            );

            if (
                strtoupper($country_code) == $locale_region
            ) {
                array_push($language_codes, join('-', $locale_array));
            }
        }
        return $language_codes;
    }
}

// get request languages 
$http_accept_language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

// find the country code from cloudflare header
if (!isset($_SERVER["HTTP_CF_IPCOUNTRY"])){
    $_SERVER["HTTP_CF_IPCOUNTRY"] = "IN"; // for testing. won't run when deployed.
}

if (isset($_SERVER["HTTP_CF_IPCOUNTRY"])) {
    $country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];

    $languages = country_code_to_locale($country_code);

    // find if the $language already exists in the $http_accept_language based on string comparison
    foreach ($languages as $language) {
        if (strpos($http_accept_language, $language) == false) {
            // if not, add the laguage to the start of the $http_accept_language
            $http_accept_language = $language . ", " . $http_accept_language;
        }
    }
}

$available_languages = array();

// add all the available languages with bad word lists
$available_languages["ar"] = 1;
$available_languages["cs"] = 1;
$available_languages["da"] = 1;
$available_languages["de"] = 1;
$available_languages["en"] = 1;
$available_languages["eo"] = 1;
$available_languages["es"] = 1;
$available_languages["fa"] = 1;
$available_languages["fi"] = 1;
$available_languages["fil"] = 1;
$available_languages["fr"] = 1;
$available_languages["fr-CA-u-sd-caqc"] = 1;
$available_languages["hi"] = 1;
$available_languages["hu"] = 1;
$available_languages["it"] = 1;
$available_languages["ja"] = 1;
$available_languages["kab"] = 1;
$available_languages["ko"] = 1;
$available_languages["nl"] = 1;
$available_languages["no"] = 1;
$available_languages["pl"] = 1;
$available_languages["pt"] = 1;
$available_languages["ru"] = 1;
$available_languages["sv"] = 1;
$available_languages["th"] = 1;
$available_languages["tlh"] = 1;
$available_languages["tr"] = 1;
$available_languages["zh"] = 1;

$langs = prefered_language($available_languages, $http_accept_language);

// get the json data for each language in langs
$bad_words = array();
foreach ($langs as $lang => $value) {
    include("./languages/" . $lang . ".php");
}

// function to check if the text contains bad words using the bad words array
function is_profanity($text)
{
    global $bad_words;
    $languages_with_values_only = ["ar", "fa"];
    $text = strtolower($text);
    // convert $text to array
    $text = explode(" ", $text);
    // check if the text contains bad words
    foreach ($text as $word) {
        foreach ($bad_words as $key => $value) {
            if (in_array($key, $languages_with_values_only)) {
                // checks each value in the array linearly
                if (in_array($word, $value)) {
                    return true;
                }
            } else {
                // checks if the key exists
                if (array_key_exists($word, $value)) {
                    return true;
                }
            }
        }
    }
    return false;
}


// try {
//     assert(is_profanity("hello", $bad_words) == false);
//     assert(is_profanity("tum ek number ke madharchod ho", $bad_words) == true);
//     assert(is_profanity("tum ek randi ke madharchod ho", $bad_words) == true);
//     echo "All tests passed";
// } catch (\Throwable $th) {
//     echo $th->getMessage();
// }
