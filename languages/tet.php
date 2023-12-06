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
  'huin' => true,
  'lasan' => true,
  'manuoan' => true,
  'kidunkuak' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ba',
      1 => 'het',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ba' => 1,
      'het' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kidun',
      1 => 'kuak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kidun' => 1,
      'kuak' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'manu',
      1 => 'oan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'manu' => 1,
      'oan' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oin',
      1 => 'lulik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oin' => 1,
      'lulik' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'relasaun',
      1 => 'seksuál',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'relasaun' => 1,
      'seksuál' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'het',
      1 => 'o',
      2 => 'nia',
      3 => 'inan',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'het' => 3,
      'o' => 2,
      'nia' => 1,
      'inan' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'het',
      1 => 'o',
      2 => 'nian',
      3 => 'aman',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'het' => 3,
      'o' => 2,
      'nian' => 1,
      'aman' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 7;

