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
  'ብድ' => true,
  'ጀላ' => true,
  'ጋላ' => true,
  'ጲላ' => true,
  'ቅምጥ' => true,
  'በዱኝ' => true,
  'ብዱኝ' => true,
  'ደደብ' => true,
  'ጀላው' => true,
  'ahya' => true,
  'aram' => true,
  'ልብዳህ' => true,
  'ልብዳሽ' => true,
  'ልብዳቹ' => true,
  'መበዳት' => true,
  'መባዳት' => true,
  'መብዳት' => true,
  'ቂንጥር' => true,
  'በዳችው' => true,
  'ብዳታም' => true,
  'አበዳድ' => true,
  'dedeb' => true,
  'kebte' => true,
  'wusha' => true,
  'ልብዳቹህ' => true,
  'ቂንጥሬን' => true,
  'ቂንጥፘን' => true,
  'assama' => true,
  'dedabe' => true,
  'tebeda' => true,
  'bidatam' => true,
  'busheti' => true,
  'gimatam' => true,
  'kularas' => true,
  'kuletam' => true,
  'shermuta' => true,
  'sharmatey' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dingaye',
      1 => 'iras',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dingaye' => 1,
      'iras' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'enatehin',
      1 => 'libdat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'enatehin' => 1,
      'libdat' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gela',
      1 => 'tebi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gela' => 1,
      'tebi' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kitehen',
      1 => 'lebdaw',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kitehen' => 1,
      'lebdaw' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kula',
      1 => 'teba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kula' => 1,
      'teba' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yeboka',
      1 => 'ems',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yeboka' => 1,
      'ems' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yegema',
      1 => 'ems',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yegema' => 1,
      'ems' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yenatih',
      1 => 'emis',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yenatih' => 1,
      'emis' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ye',
      1 => 'ems',
      2 => 'kemal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ye' => 2,
      'ems' => 1,
      'kemal' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ye',
      1 => 'ems',
      2 => 'til',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ye' => 2,
      'ems' => 1,
      'til' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ye',
      1 => 'ahiya',
      2 => 'jela',
      3 => 'yigbabih',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ye' => 3,
      'ahiya' => 2,
      'jela' => 1,
      'yigbabih' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 11;

