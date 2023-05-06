<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('ghuy\'cha\'' => 0, 'QI\'yaH' => 1, 'Qu\'vatlh' => 2,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
