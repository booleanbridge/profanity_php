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
  'aas' => true,
  'fak' => true,
  'pala' => true,
  'podi' => true,
  'puri' => true,
  'faken' => true,
  'faket' => true,
  'shiti' => true,
  'fakken' => true,
  'fakket' => true,
  'shitii' => true,
  'poethoel' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blaadi',
      1 => 'hel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blaadi' => 1,
      'hel' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 1;

