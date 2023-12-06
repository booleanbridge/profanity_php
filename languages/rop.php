<?php
if (!isset($badWords) || empty($badWords)) {
    $badWords = array(
        "badWords" => array(),
        "badWordsLength" => 0,
    );
}
if (!isset($badPhrases) || empty($badPhrases)) {
    $badPhrases = array(
        "badPhrases" => array(),
        "badPhrasesLength" => 0,
    );
}
$badWords['badWords'] = array_merge_recursive($badWords['badWords'], array (
  'sik' => true,
  'bibi' => true,
  'gura' => true,
  'reng' => true,
  'wada' => true,
  'munga' => true,
  'bungga' => true,
  'mungga' => true,
  'ruding' => true,
  'jainaman' => true,
  'kilinskin' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 0;

