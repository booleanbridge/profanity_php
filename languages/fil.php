<?php
if (!isset($bad_words)) {
    $bad_words = array();
}
$temp = array('puta ka' => 0, 'putang ina' => 1, 'tang ina' => 2, 'tangina' => 3, 'burat' => 4, 'bayag' => 5, 'bobo' => 6, 'nognog' => 7, 'tanga' => 8, 'ulol' => 12, 'kantot' => 10, 'anak ka ng puta' => 11, 'jakol' => 13,);
// add temp to bad words
$bad_words = array_merge($bad_words, $temp);