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
  'ur' => true,
  'huh' => true,
  'qoh' => true,
  'veq' => true,
  'baqa' => true,
  'doha' => true,
  'ptok' => true,
  'urwi' => true,
  'iqnah' => true,
  'mucus' => true,
  'petaq' => true,
  'pujwi' => true,
  'qiyah' => true,
  'sahut' => true,
  'baktag' => true,
  'hutegh' => true,
  'pahtak' => true,
  'tahqeq' => true,
  'todsah' => true,
  'bihnuch' => true,
  'buequet' => true,
  'ghuycha' => true,
  'hadibah' => true,
  'ngachuq' => true,
  'quvatlh' => true,
  'yintagh' => true,
  'qovpatlh' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'denib',
      1 => 'qatlh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'denib' => 1,
      'qatlh' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ynt',
      1 => 'yalagochukof',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ynt' => 1,
      'yalagochukof' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bijatlh',
      1 => 'e',
      2 => 'yimev',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bijatlh' => 2,
      'e' => 1,
      'yimev' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hab',
      1 => 'sosli',
      2 => 'quch',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hab' => 2,
      'sosli' => 1,
      'quch' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 4;

