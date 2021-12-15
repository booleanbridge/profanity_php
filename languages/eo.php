<?php
if (!isset($bad_words)) {
    $bad_words = array();
}
$temp = array('bugren' => 0, 'bugri' => 1, 'bugru' => 2, 'ĉiesulino' => 3, 'ĉiesulo' => 4, 'diofek' => 5, 'diofeka' => 6, 'fek' => 7, 'feken' => 8, 'fekfikanto' => 9, 'feklekulo' => 10, 'fekulo' => 11, 'fik' => 12, 'fikado' => 13, 'fikema' => 14, 'fikfek' => 15, 'fiki' => 16, 'fikiĝi' => 17, 'fikiĝu' => 18, 'fikilo' => 19, 'fikklaŭno' => 20, 'fikota' => 21, 'fiku' => 22, 'forfiki' => 23, 'forfikiĝu' => 24, 'forfiku' => 25, 'forfurzu' => 26, 'forpisi' => 27, 'forpisu' => 28, 'furzulo' => 29, 'kacen' => 30, 'kaco' => 31, 'kacsuĉulo' => 32, 'kojono' => 33, 'piĉen' => 34, 'piĉo' => 35, 'zamenfek' => 36,);
// add temp to bad words
$bad_words = array_merge($bad_words, $temp);