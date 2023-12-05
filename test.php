<?php
// This file will have all the tests. First it will test the generated language files.

// print the length of the badWords and badPhrases arrays for each language
foreach (glob("./languages/*.php") as $filename) {
    if (strpos($filename, "availableLanguages") !== false) {
        continue;
    }

    $languageCode = explode(".", explode("/", $filename)[1])[0];
    // include the file
    include $filename;
    // print the length of the arrays
    echo "Language code: $languageCode\n";
    echo "badWordsLength: " . count($badWords["badWords"]) . "\n";
    echo "badPhrasesLength: " . $badPhrases["badPhrasesLength"] . "\n";
    echo "badPhrasesLength: " . count($badPhrases["badPhrases"]) . "\n";
    echo "\n\n\n";
    // reset the variables using unset
    unset($badWords);
    unset($badPhrases);
}

// include all files in the languages directory
foreach (glob("./languages/*.php") as $filename) {
    include $filename;
}

// also include the three letter language codes and countryToSupportedLanguageCodes
include "./countryToSupportedLanguageCodes.php";

// assertions for the language files
$assertions = [
    '$badPhrases["badPhrasesLength"] === count($badPhrases["badPhrases"])',
    'is_array($badWords)',
    'is_array($badPhrases)',
    'is_array($badWords["badWords"])',
    'is_array($badPhrases["badPhrases"])',
    'is_int($badPhrases["badPhrasesLength"])',
    'is_array($availableLanguages)',
    '!empty($availableLanguages)',
    'is_array($countryToSupportedLanguageCodes)',
    '!empty($countryToSupportedLanguageCodes)',
];

foreach ($assertions as $assertion) {
    try {
        assert(eval("return $assertion;"));
        if (mb_strpos("===", $assertion) !== false) {
            list($left, $right) = explode('===', $assertion);

            // Evaluate each part
            $leftValue = eval("return $left;");
            $rightValue = eval("return $right;");

            // Print the values
            echo "✅ Assertion passed: $assertion. $left: $leftValue, $right: $rightValue\n";
        } else {
            echo "✅ Assertion passed: $assertion\n";
        }
    } catch (AssertionError $e) {
        // Split the assertion into two parts
        if (mb_strpos("===", $assertion) !== false) {
            list($left, $right) = explode('===', $assertion);

            // Evaluate each part
            $leftValue = eval("return $left;");
            $rightValue = eval("return $right;");

            // Print the values
            echo "❌ Assertion failed: $assertion. $left: $leftValue, $right: $rightValue\n";
        } else {
            echo "❌ Assertion failed: $assertion\n";
        }
    }
}

$assertions = [
    // check if all the function are set
    'function_exists("getSupportedLanguages")',
    'function_exists("getSupportedLanguageCode")',
    'function_exists("countryCodeToLanguage")',
    'function_exists("getHttpAcceptLanguages")',
    'function_exists("isProfanity")',
    'function_exists("boyerMooreSearch")',
    'function_exists("is_profanity")',
    // check if the global variables are set
    'isset($supportedLanguages)',
    'isset($availableLanguages)',
];

// Check Profanity Filter for different languages
$parameters = array();
$parameter = array(
    'text' => '',
    'detectedLanguages' => [],
    'exploded' => [],
    'explodedLength' => 0,
    'all' => false,
);
$returnValue = false;

$gibberishSentence = "Lorem ffug fiusagfiu siufguas uisfusaf ugisgfias gfsugf aius sfiasgfiuasgfi isfgiaufgas iufgaiusgfas asiufgsufga fssfsguf asfuisgf";
$gibberishSentenceArray = explode(" ", $gibberishSentence);

// logic to generate the True tests
for ($i = 0; $i <= 50; $i++) {
    $badWord = array_rand($badWords["badWords"]);

    $randomPosition = mt_rand(0, count($gibberishSentenceArray) - 1);
    $modifiedSentence = implode(" ", array_merge(array_slice($gibberishSentenceArray, 0, $randomPosition), array($badWord), array_slice($gibberishSentenceArray, $randomPosition)));

    $parameter['text'] = $modifiedSentence;
    $parameter['detectedLanguages'] = [];
    $parameter['exploded'] = [];
    $parameter['explodedLength'] = 0;
    $parameter['all'] = true;
    $parameters[] =  array(
        'test' => $parameter,
        'returnValue' => true,
    );
    $randomBadPhrase = $badPhrases["badPhrases"][mt_rand(0, $badPhrases["badPhrasesLength"] - 1)]["badPhrase"];
    $modifiedSentence = implode(" ", array_merge(array_slice($gibberishSentenceArray, 0, $randomPosition), $randomBadPhrase, array_slice($gibberishSentenceArray, $randomPosition)));
    $parameter['text'] = $modifiedSentence;
    $parameters[] =  array(
        'test' => $parameter,
        'returnValue' => true,
    );
}

// one false test using gibberish sentence
$parameter['text'] = $gibberishSentence;
$parameter['detectedLanguages'] = [];
$parameter['exploded'] = [];
$parameter['explodedLength'] = 0;
$parameter['all'] = true;
$parameters[] =  array(
    'test' => $parameter,
    'returnValue' => false,
);

foreach ($parameters as $key => $parameter) {
    $assertions[] = 'isProfanity($parameters[' . $key . ']["test"]["text"], $parameters[' . $key . ']["test"]["detectedLanguages"], $parameters[' . $key . ']["test"]["exploded"], $parameters[' . $key . ']["test"]["explodedLength"], $parameters[' . $key . ']["test"]["all"]) === $parameters[' . $key . ']["returnValue"]';
}

// reset included variables
unset($badPhrases);
unset($badWords);
unset($availableLanguages);
unset($countryToSupportedLanguageCodes);

// Include the main.php and test it's functions
// include "./main.php";

// var_dump($assertions);

foreach ($assertions as $assertion) {
    try {
        $start = microtime(true);
        assert(eval("global \$parameters, \$availableLanguages, \$supportedLanguages; include_once './main.php' ; return $assertion;"));
        $end = microtime(true);
        // append to the time file
        $file = fopen("./time.txt", "a");
        fwrite($file, $end - $start . "\n");
        fclose($file);

        if (mb_strpos("===", $assertion) !== false) {
            list($left, $right) = explode('===', $assertion);

            // Evaluate each part
            $leftValue = eval("global \$parameters, \$availableLanguages, \$supportedLanguages; return $left;");
            $rightValue = eval("global \$parameters, \$availableLanguages, \$supportedLanguages; return $right;");

            // Print the values
            echo "✅ Assertion passed: $assertion. $left: $leftValue, $right: $rightValue\n";
        } else {
            echo "✅ Assertion passed: $assertion\n";
        }
    } catch (AssertionError $e) {
        $end = microtime(true);
        // append to the time file
        $file = fopen("./time.txt", "a");
        fwrite($file, floatval($end - $start) . "\n");
        fclose($file);

        // Split the assertion into two parts
        if (mb_strpos("===", $assertion) !== false) {
            list($left, $right) = explode('===', $assertion);

            // Evaluate each part
            $leftValue = eval("global \$parameters, \$availableLanguages, \$supportedLanguages; return $left;");
            $rightValue = eval("global \$parameters, \$availableLanguages, \$supportedLanguages; return $right;");

            // Print the values
            echo "❌ Assertion failed: $assertion. $left: $leftValue, $right: $rightValue\n";
        } else {
            echo "❌ Assertion failed: $assertion\n";
        }
    }
}
