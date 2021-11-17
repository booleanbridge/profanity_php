<?php

$available_languages = array();
$available_languages["ar"] = file_get_contents("./ar.json");
$available_languages["cs"] = file_get_contents("./cs.json");
$available_languages["da"] = file_get_contents("./da.json");
$available_languages["de"] = file_get_contents("./de.json");
$available_languages["en"] = file_get_contents("./en.json");
$available_languages["eo"] = file_get_contents("./eo.json");
$available_languages["es"] = file_get_contents("./es.json");
$available_languages["fa"] = file_get_contents("./fa.json");
$available_languages["fi"] = file_get_contents("./fi.json");
$available_languages["fil"] = file_get_contents("./fil.json");
$available_languages["fr"] = file_get_contents("./fr.json");
$available_languages["fr-CA-u-sd-caqc"] = file_get_contents(
    "./fr-CA-u-sd-caqc.json"
);
$available_languages["hi"] = file_get_contents("./hi.json");
$available_languages["hu"] = file_get_contents("./hu.json");
$available_languages["it"] = file_get_contents("./it.json");
$available_languages["ja"] = file_get_contents("./ja.json");
$available_languages["kab"] = file_get_contents("./kab.json");
$available_languages["ko"] = file_get_contents("./ko.json");
$available_languages["nl"] = file_get_contents("./nl.json");
$available_languages["no"] = file_get_contents("./no.json");
$available_languages["pl"] = file_get_contents("./pl.json");
$available_languages["pt"] = file_get_contents("./pt.json");
$available_languages["ru"] = file_get_contents("./ru.json");
$available_languages["sv"] = file_get_contents("./sv.json");
$available_languages["th"] = file_get_contents("./th.json");
$available_languages["tlh"] = file_get_contents("./tlh.json");
$available_languages["tr"] = file_get_contents("./tr.json");
$available_languages["zh"] = file_get_contents("./zh.json");

foreach ($available_languages as $key => $value) {
    $lang = $key;
    $words = json_decode($value, true);
    $words = array_flip($words);
    // echo the array

    echo "$" . "available_languages['" . $lang . "'] = " . var_export($words, true) . ";\n";
    // foreach ($words as $key => $value) {
    //     echo $key . " => " . $value . ", <br>";
    // }
    echo "<br><br>";
}
