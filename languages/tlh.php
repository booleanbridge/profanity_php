<?php
if (!isset($bad_words)) {
    $bad_words = array();
}
$temp = array('ghuy\'cha\'' => 0, 'QI\'yaH' => 1, 'Qu\'vatlh' => 2,);
// add temp to bad words
$bad_words = array_merge($bad_words, $temp);
