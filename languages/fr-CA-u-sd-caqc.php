<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('noune' => 0, 'osti' => 1, 'criss' => 2, 'crisse' => 3, 'calice' => 4, 'tabarnak' => 5, 'viarge' => 6,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
