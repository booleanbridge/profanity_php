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
  'alua' => true,
  'kaka' => true,
  'beltz' => true,
  'bular' => true,
  'errea' => true,
  'inoiz' => true,
  'sexua' => true,
  'arraio' => true,
  'astoen' => true,
  'pornoa' => true,
  'zakila' => true,
  'abortua' => true,
  'arraioa' => true,
  'beltzak' => true,
  'ipurdia' => true,
  'kabroia' => true,
  'narrasa' => true,
  'oilarra' => true,
  'pedriza' => true,
  'ubarroi' => true,
  'artaburu' => true,
  'barrabil' => true,
  'infernua' => true,
  'ipurdian' => true,
  'odoltsua' => true,
  'putakume' => true,
  'putaseme' => true,
  'amilotxak' => true,
  'baginaren' => true,
  'hegaletan' => true,
  'prononcés' => true,
  'bortxaketa' => true,
  'kakamutiko' => true,
  'madarikatu' => true,
  'txortalari' => true,
  'madarikatua' => true,
  'semeofaputa' => true,
  'urbanístico' => true,
  'jainkodamned' => true,
  'txakurfucker' => true,
  'ipurdianfucker' => true,
  'oilarrasalmenta' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alfonbra',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alfonbra' => 1,
      'muncher' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ama',
      1 => 'arruga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ama' => 1,
      'arruga' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gixajo',
      1 => 'gisarajo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gixajo' => 1,
      'gisarajo' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'txortan',
      1 => 'egin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'txortan' => 1,
      'egin' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'baloratu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'baloratu' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 5;

