<?php

/**
 * Create a PHP file for each language in the /data directory
 * Output the file in the /languages directory
 * Each file will contain a $badWords and $badPhrases array
 * The $badWords array will contain all the bad words for that language and will be used as a hash table
 * The $badPhrases array will contain all the bad phrases for that language and will be used in Boyer-Moore algorithm
 * We are using mb functions to support UTF-8
 */

/**
 * Calculate the bad phrase array table. This is used in the Boyer-Moore algorithm
 * @param array $array
 * @return array
 */
function calculateBadPhraseArrayTable(array $array): array
{
    $length = count($array);
    $table = array();

    for ($i = 0; $i < $length; $i++) {
        $distance = $length - $i - 1;
        $table[$array[$i]] = $distance;
    }

    return $table;
}


/**
 * Generate the PHP code for the badWords and badPhrases arrays
 *
 * @param array $badWords
 * @param array $badPhrasesArray
 * @return string the PHP code
 */
function generatePhpCode(array &$badWords, array &$badPhrasesArray): string
{
    $phpCode = <<<PHP
<?php
if (!isset(\$badWords) || empty(\$badWords)) {
    \$badWords = array(
        "badWords" => array(),
        "badWordsLength" => 0,
    );
}
if (!isset(\$badPhrases) || empty(\$badPhrases)) {
    \$badPhrases = array(
        "badPhrases" => array(),
        "badPhrasesLength" => 0,
    );
}

PHP;

    // Add the hardcoded arrays and lengths
    $phpCode .= "\$badWords['badWords'] = array_merge_recursive(\$badWords['badWords'], " . var_export($badWords['badWords'], true) . ");\n";
    $phpCode .= "\n";
    $phpCode .= "\$badPhrases['badPhrases'] = array_merge_recursive(\$badPhrases['badPhrases'], " . var_export($badPhrasesArray["badPhrases"], true) . ");\n";
    $phpCode .= "\$badPhrases['badPhrasesLength'] = \$badPhrases['badPhrasesLength'] + " . $badPhrasesArray["badPhrasesLength"] . ";\n";
    $phpCode .= "\n";
    return $phpCode;
}

/**
 * Process the text file and generate the PHP code
 *
 * @param string $filePath
 * @return void
 */
function processTextFile(string $filePath): void
{
    $languageCode = pathinfo($filePath, PATHINFO_FILENAME);
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $badWords = array(
        "badWords" => array(),
        "badWordsLength" => 0,
    );
    $badPhrasesArray = array(
        "badPhrases" => array(),
        "badPhrasesLength" => 0,
    );

    foreach ($lines as $line) {
        $line = trim($line);
        // remove numbers, punctuation and symbols
        $line = preg_replace("/[0-9\p{P}\p{So}]/u", "", $line);

        $line = explode(" ", $line);

        // remove trailing spaces
        $line = array_map("trim", $line);

        // lowercase all words
        $line = array_map("mb_strtolower", $line);

        // remove empty words
        $line = array_values(array_filter($line, function ($word) {
            return $word !== "";
        }));

        // if the line is empty, skip it
        if (count($line) === 0) {
            continue;
        }

        if (count($line) === 1) {
            $badWords["badWords"][] = strval($line[0]);
        } else {
            $badPhrasesArray["badPhrases"][] = array(
                "badPhrase" => $line,
                "badPhraseLength" => count($line),
                "badPhraseArrayTable" => calculateBadPhraseArrayTable($line),
            );
        }
    }

    // remove duplicates
    $badWords["badWords"] = array_unique($badWords["badWords"], SORT_REGULAR);


    // Remove the $badPhrasesArray["badPhrases"] value when it contains any word from badWords
    foreach ($badWords["badWords"] as $word) {
        $badPhrasesArray["badPhrases"] = array_filter($badPhrasesArray["badPhrases"], function ($phrase) use ($word) {
            return !in_array($word, $phrase["badPhrase"]);
        });
    }


    // Ascending sort by length
    usort($badWords["badWords"], function ($a, $b) {
        return mb_strlen($a) - mb_strlen($b);
    });

    usort($badPhrasesArray["badPhrases"], function ($a, $b) {
        return count($a["badPhrase"]) - count($b["badPhrase"]);
    });

    // Convert to associative array
    $badWords["badWords"] = array_flip($badWords["badWords"]);
    foreach ($badWords["badWords"] as $key => $value) {
        $badWords["badWords"][$key] = true;
    }

    // Adjust the lengths, since we removed duplicates
    $badPhrasesArray["badPhrasesLength"] = count($badPhrasesArray["badPhrases"]);
    $badWords["badWordsLength"] = count($badWords["badWords"]);

    $phpCode = generatePhpCode($badWords, $badPhrasesArray);

    // store in /languages directory if it exists or create it
    $outputDirectory = __DIR__ . "/../languages";
    if (!is_dir($outputDirectory)) {
        mkdir($outputDirectory, 0777, true);
    }

    $outputFilePath = $outputDirectory . "/" . $languageCode . ".php";
    file_put_contents($outputFilePath, $phpCode);

    echo "PHP file generated successfully at: $outputFilePath\n";
}

$availableLanguages = array();
// loop over all the text files in the data directory
foreach (glob(__DIR__ . "/../List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2/data/*.txt") as $filePath) {
    processTextFile($filePath);
    $availableLanguages[pathinfo($filePath, PATHINFO_FILENAME)] = true;
}
// store the available languages in a php file as an array
$phpCode = "<?php\n\$availableLanguages = " . var_export($availableLanguages, true) . ";\n";
file_put_contents(__DIR__ . "/../languages/availableLanguages.php", $phpCode);
echo "PHP file generated successfully at: " . __DIR__ . "/../languages/availableLanguages.php\n";
