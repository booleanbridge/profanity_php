<?php

/**
 * date: 03-12-2023
 * Prompt to quickly generate this is below, copy the three letter codes from the terminal here and ask it to bing.com/chat
 */
// ceb
// fil
// kab
// pih
// piy
// rop
// tet
// tlh
// yid
// for all these three letter language code, find the two letter country code they are spoken in, a language can be in multiple country. If the language is fictional and is not spoken in any country, add it to the arrays of country where there fan base is situated. Output a php array similar to this format:
// ```php
// $countryToSupportedThreeLetterLanguageCodes = array(
//     "COUNTRY_CODE" => array(
//         "0" => "LANGUAGE_CODE",
//     ),
// );
// ```


$countryToSupportedThreeLetterLanguageCodes = array(
    "PH" => array(
        "0" => "ceb",
        "1" => "fil",
    ),
    "DZ" => array(
        "0" => "kab",
    ),
    "NF" => array(
        "0" => "pih",
    ),
    "PN" => array(
        "0" => "pih",
    ),
    "CM" => array(
        "0" => "piy",
    ),
    "AU" => array(
        "0" => "rop",
    ),
    "TL" => array(
        "0" => "tet",
    ),
    "ID" => array(
        "0" => "tet",
    ),
    "IL" => array(
        "0" => "yid",
    ),
    "US" => array(
        "0" => "yid",
        "1" => "tlh",
    ),
    "RU" => array(
        "0" => "yid",
    ),
    "UA" => array(
        "0" => "yid",
    ),
);
