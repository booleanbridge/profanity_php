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
  'tae' => true,
  'bulok' => true,
  'sekso' => true,
  'bigaon' => true,
  'nakingsekso' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gabqq',
      1 => 'ka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gabqq' => 1,
      'ka' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kayatas',
      1 => 'buang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kayatas' => 1,
      'buang' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mananap',
      1 => 'ka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mananap' => 1,
      'ka' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yabag',
      1 => 'ka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yabag' => 1,
      'ka' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yawa',
      1 => 'ka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yawa' => 1,
      'ka' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anak',
      1 => 'sa',
      2 => 'kayat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'anak' => 2,
      'sa' => 1,
      'kayat' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buwisit',
      1 => 'kang',
      2 => 'dako',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'buwisit' => 2,
      'kang' => 1,
      'dako' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lungag',
      1 => 'sa',
      2 => 'asno',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lungag' => 2,
      'sa' => 1,
      'asno' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tambok',
      1 => 'nga',
      2 => 'asno',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tambok' => 2,
      'nga' => 1,
      'asno' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yawa',
      1 => 'kang',
      2 => 'dako',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yawa' => 2,
      'kang' => 1,
      'dako' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baho',
      1 => 'ka',
      2 => 'ug',
      3 => 'bilat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'baho' => 3,
      'ka' => 2,
      'ug' => 1,
      'bilat' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gabaan',
      1 => 'pa',
      2 => 'unta',
      3 => 'ka',
      4 => 'karun',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'gabaan' => 4,
      'pa' => 3,
      'unta' => 2,
      'ka' => 1,
      'karun' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yawa',
      1 => 'pa',
      2 => 'ka',
      3 => 'sa',
      4 => 'tanang',
      5 => 'yawa',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'yawa' => 0,
      'pa' => 4,
      'ka' => 3,
      'sa' => 2,
      'tanang' => 1,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 13;

