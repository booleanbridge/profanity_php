<?php

/**
 * This script removes all the unsupported languages and country codes from the array
 */

// include three_letter_codes.php
include_once __DIR__ . "/three_letter_codes.php";

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

// if COUNTRY_CODE key is not set, merge the array to the country code array recursively
if (!isset($countryCodeToLocale["COUNTRY_CODE"])) {
    $countryCodeToLocale = array_merge_recursive($countryCodeToLocale, $countryToSupportedThreeLetterLanguageCodes);
}

$availableLanguages = array(
    'af' => true,
    'am' => true,
    'ar' => true,
    'az' => true,
    'be' => true,
    'bg' => true,
    'ca' => true,
    'ceb' => true,
    'cs' => true,
    'cy' => true,
    'da' => true,
    'de' => true,
    'dz' => true,
    'el' => true,
    'en' => true,
    'eo' => true,
    'es' => true,
    'et' => true,
    'eu' => true,
    'fa' => true,
    'fi' => true,
    'fil' => true,
    'fr' => true,
    'gd' => true,
    'gl' => true,
    'hi' => true,
    'hr' => true,
    'hu' => true,
    'hy' => true,
    'id' => true,
    'is' => true,
    'it' => true,
    'ja' => true,
    'kab' => true,
    'kh' => true,
    'ko' => true,
    'la' => true,
    'lt' => true,
    'lv' => true,
    'mi' => true,
    'mk' => true,
    'ml' => true,
    'mn' => true,
    'mr' => true,
    'ms' => true,
    'mt' => true,
    'my' => true,
    'nl' => true,
    'no' => true,
    'pih' => true,
    'piy' => true,
    'pl' => true,
    'pt' => true,
    'ro' => true,
    'rop' => true,
    'ru' => true,
    'sk' => true,
    'sl' => true,
    'sm' => true,
    'sq' => true,
    'sr' => true,
    'sv' => true,
    'ta' => true,
    'te' => true,
    'tet' => true,
    'th' => true,
    'tlh' => true,
    'to' => true,
    'tr' => true,
    'uk' => true,
    'uz' => true,
    'vi' => true,
    'yid' => true,
    'zh' => true,
    'zu' => true,
);

$originalCount = count($countryCodeToLocale, COUNT_RECURSIVE);

foreach ($countryCodeToLocale as $countryCode => $locales) {
    foreach ($locales as $key => $locale) {
        if (!array_key_exists(strtolower($locale), array_change_key_case($availableLanguages, CASE_LOWER))) {
            unset($countryCodeToLocale[$countryCode][$key]);
        }
    }
    if (empty($countryCodeToLocale[$countryCode])) {
        unset($countryCodeToLocale[$countryCode]);
    } else {
        $flipped = array_flip($countryCodeToLocale[$countryCode]);
        $countryCodeToLocale[$countryCode] = array_fill_keys(array_keys($flipped), true);
    }
}


$reducedCount = count($countryCodeToLocale, COUNT_RECURSIVE);
echo "Difference: " . strval($originalCount - $reducedCount);
// Convert the array to a string
$arrayString = var_export($countryCodeToLocale, true);

// Create the PHP code
$phpCode = "<?php\n\$countryToSupportedLanguageCodes = $arrayString;\n";
$phpCode .= "\n";

// Write the code to a new PHP file
file_put_contents(__DIR__ . '/../countryToSupportedLanguageCodes.php', $phpCode);
