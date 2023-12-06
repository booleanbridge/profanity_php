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
  'pa' => true,
  'sui' => true,
  'tae' => true,
  'usi' => true,
  'bali' => true,
  'huhu' => true,
  'kota' => true,
  'lemu' => true,
  'siko' => true,
  'toho' => true,
  'avate' => true,
  'fulei' => true,
  'shole' => true,
  'tenga' => true,
  'kasele' => true,
  'mafuke' => true,
  'masoli' => true,
  'matausi' => true,
  'tohotoho' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ava',
      1 => 'elo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ava' => 1,
      'elo' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fai',
      1 => 'hoosi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fai' => 1,
      'hoosi' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'faka',
      1 => 'leiti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'faka' => 1,
      'leiti' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ho',
      1 => 'fae',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ho' => 1,
      'fae' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hoka',
      1 => 'niu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hoka' => 1,
      'niu' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kai',
      1 => 'akau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kai' => 1,
      'akau' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kai',
      1 => 'pali',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kai' => 1,
      'pali' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kai',
      1 => 'dahi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kai' => 1,
      'dahi' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'komo',
      1 => 'ule',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'komo' => 1,
      'ule' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mata',
      1 => 'palaku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mata' => 1,
      'palaku' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mene',
      1 => 'tetee',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mene' => 1,
      'tetee' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mohe',
      1 => 'mimi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mohe' => 1,
      'mimi' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ngutu',
      1 => 'elo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ngutu' => 1,
      'elo' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pali',
      1 => 'elo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pali' => 1,
      'elo' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pumasaesae',
      1 => 'pololapoa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pumasaesae' => 1,
      'pololapoa' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'fai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ta' => 1,
      'fai' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taahine',
      1 => 'maalahi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'taahine' => 1,
      'maalahi' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tunaiku',
      1 => 'mingimingi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tunaiku' => 1,
      'mingimingi' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tungaiku',
      1 => 'elo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tungaiku' => 1,
      'elo' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dae',
      1 => 'hoosi',
      2 => 'pali',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dae' => 2,
      'hoosi' => 1,
      'pali' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hau',
      1 => 'kaii',
      2 => 'au',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hau' => 2,
      'kaii' => 1,
      'au' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kai',
      1 => 'my',
      2 => 'uto',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kai' => 2,
      'my' => 1,
      'uto' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'komoi',
      1 => 'oku',
      2 => 'mene',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'komoi' => 2,
      'oku' => 1,
      'mene' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taahine',
      1 => 'foi',
      2 => 'lole',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'taahine' => 2,
      'foi' => 1,
      'lole' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'u',
      1 => 'ki',
      2 => 'laho',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'u' => 2,
      'ki' => 1,
      'laho' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pai',
      1 => 'you',
      2 => 'to',
      3 => 'shiko',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pai' => 3,
      'you' => 2,
      'to' => 1,
      'shiko' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sai',
      1 => 'ke',
      2 => 'tau',
      3 => 'ilo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sai' => 3,
      'ke' => 2,
      'tau' => 1,
      'ilo' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'you',
      1 => 'look',
      2 => 'very',
      3 => 'fat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'you' => 3,
      'look' => 2,
      'very' => 1,
      'fat' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alu',
      1 => 'o',
      2 => 'fai',
      3 => 'ho',
      4 => 'tamai',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'alu' => 4,
      'o' => 3,
      'fai' => 2,
      'ho' => 1,
      'tamai' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mai',
      1 => 'ho',
      2 => 'ava',
      3 => 'ke',
      4 => 'hoka',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'mai' => 4,
      'ho' => 3,
      'ava' => 2,
      'ke' => 1,
      'hoka' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alu',
      1 => 'o',
      2 => 'kaukau',
      3 => 'ke',
      4 => 'namu',
      5 => 'te',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'alu' => 5,
      'o' => 4,
      'kaukau' => 3,
      'ke' => 2,
      'namu' => 1,
      'te' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hau',
      1 => 'ki',
      2 => 'heni',
      3 => 'ke',
      4 => 'tau',
      5 => 'fai',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'hau' => 5,
      'ki' => 4,
      'heni' => 3,
      'ke' => 2,
      'tau' => 1,
      'fai' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 32;

