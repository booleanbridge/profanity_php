<?php

if (!function_exists("preferred_language")) {
    function prefered_language(array $available_languages, $http_accept_language)
    {
        $langs = array();
        preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($http_accept_language), $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {

            list($a, $b) = explode('-', $match[1]) + array('', '');
            $value = isset($match[2]) ? (float) $match[2] : 1.0;

            if (isset($available_languages[$match[1]])) {
                $langs[$match[1]] = $value;
                continue;
            }

            if (isset($available_languages[$a])) {
                $langs[$a] = $value - 0.1;
            }
        }
        arsort($langs);

        return $langs;
    }
}

// get request languages 
$http_accept_language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

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
print_r($langs);

// get the json data for each language in langs
$bad_words = array();
foreach ($langs as $lang => $value) {
    include("./languages/" . $lang . ".php");
}

// function to check if the text contains bad words using the bad words array
function is_profanity($text, $bad_words)
{
    $languages_with_values_only = ["ar", "fa"];
    $text = strtolower($text);
    // convert $text to array
    $text = explode(" ", $text);
    // check if the text contains bad words
    foreach ($text as $word) {
        foreach ($bad_words as $key => $value) {
            echo $key . " " . $value . " " . $word . "<br>";
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

assert(is_profanity("hello", $bad_words) == false);
assert(is_profanity("tum ek number ke madharchod ho", $bad_words) == true);
assert(is_profanity("tum ek randi ke madharchod ho", $bad_words) == true);
