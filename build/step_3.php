<?php
foreach (glob("languages/*.php") as $filename) {
    // get filename
    $languageCode = explode(".", explode("/", $filename)[1])[0];
    // if three letter, print it
    if (mb_strlen($languageCode) > 2) {
        echo "$languageCode\n";
    }
}
