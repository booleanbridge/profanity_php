<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('asshole' => 0, 'dritt' => 1, 'drittsekk' => 2, 'faen' => 3, 'faen i helvete' => 4, 'fan' => 5, 'fanken' => 6, 'fitte' => 7, 'forbanna' => 8, 'forbannet' => 9, 'forjævlig' => 10, 'fuck' => 11, 'fy faen' => 12, 'føkk' => 13, 'føkka' => 14, 'føkkings' => 15, 'jævla' => 16, 'jævlig' => 17, 'helvete' => 18, 'helvetet' => 19, 'kuk' => 20, 'kukene' => 21, 'kuker' => 22, 'morraknuller' => 23, 'morrapuler' => 24, 'nigger' => 25, 'pakkis' => 26, 'pikk' => 27, 'pokker' => 28, 'ræva' => 29, 'ræven' => 30, 'satan' => 31, 'shit' => 32, 'sinnsykt' => 33, 'skitt' => 34, 'sotrør' => 35, 'ståpikk' => 36, 'ståpikkene' => 37, 'ståpikker' => 38, 'svartheiteste' => 39,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
