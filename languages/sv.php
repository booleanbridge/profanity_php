<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('arsle' => 0, 'brutta' => 1, 'discofitta' => 2, 'dra åt helvete' => 3, 'fan' => 4, 'fitta' => 5, 'fittig' => 6, 'för helvete' => 7, 'helvete' => 8, 'hård' => 9, 'jävlar' => 10, 'knulla' => 11, 'kuk' => 12, 'kuksås' => 13, 'kötthuvud' => 14, 'köttnacke' => 15, 'moona' => 16, 'moonade' => 17, 'moonar' => 18, 'moonat' => 19, 'mutta' => 20, 'nigger' => 21, 'neger' => 22, 'olla' => 23, 'pippa' => 24, 'pitt' => 25, 'prutt' => 26, 'pök' => 27, 'runka' => 28, 'röv' => 29, 'rövhål' => 30, 'rövknulla' => 31, 'satan' => 32, 'skita' => 33, 'skit ner dig' => 34, 'skäggbiff' => 35, 'snedfitta' => 36, 'snefitta' => 37, 'stake' => 38, 'subba' => 39, 'sås' => 40, 'sätta på' => 41, 'tusan' => 42,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
