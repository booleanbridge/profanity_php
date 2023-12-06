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
  'jab' => true,
  'nam' => true,
  'aawd' => true,
  'atta' => true,
  'hawi' => true,
  'nami' => true,
  'sorm' => true,
  'sowa' => true,
  'tizz' => true,
  'zebb' => true,
  'zibi' => true,
  'zouk' => true,
  'kerfa' => true,
  'naiek' => true,
  'nakch' => true,
  'naqsh' => true,
  'nouna' => true,
  'sawwa' => true,
  'terma' => true,
  'zaaka' => true,
  'zntit' => true,
  'bassas' => true,
  'gahaba' => true,
  'kaboul' => true,
  'kahhba' => true,
  'khareg' => true,
  'malhat' => true,
  'nahwik' => true,
  'nikmok' => true,
  'ssossi' => true,
  'baranek' => true,
  'nbanyat' => true,
  'tahhann' => true,
  'zabzoub' => true,
  'spontchi' => true,
  'tetzaber' => true,
  'yetzaber' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alhasli',
      1 => 'klawiya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alhasli' => 1,
      'klawiya' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ardaali',
      1 => 'bzazli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ardaali' => 1,
      'bzazli' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bara',
      1 => 'naik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bara' => 1,
      'naik' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bosli',
      1 => 'teremti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bosli' => 1,
      'teremti' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bzazel',
      1 => 'kellba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bzazel' => 1,
      'kellba' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'engatalek',
      1 => 'nountek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'engatalek' => 1,
      'nountek' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hatchoun',
      1 => 'yemak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hatchoun' => 1,
      'yemak' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mok',
      1 => 'kahba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mok' => 1,
      'kahba' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mossli',
      1 => 'krarzi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mossli' => 1,
      'krarzi' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nabou',
      1 => 'babak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nabou' => 1,
      'babak' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naahachoun',
      1 => 'yemak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naahachoun' => 1,
      'yemak' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naadine',
      1 => 'rabbak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naadine' => 1,
      'rabbak' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naan',
      1 => 'dirabek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naan' => 1,
      'dirabek' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nhabtik',
      1 => 'chicha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nhabtik' => 1,
      'chicha' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nik',
      1 => 'ommouk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nik' => 1,
      'ommouk' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nik',
      1 => 'rabbak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nik' => 1,
      'rabbak' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nik',
      1 => 'ymack',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nik' => 1,
      'ymack' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nik',
      1 => 'ymak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nik' => 1,
      'ymak' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'niklek',
      1 => 'bzezlek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'niklek' => 1,
      'bzezlek' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'niklik',
      1 => 'omik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'niklik' => 1,
      'omik' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ras',
      1 => 'kalwa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ras' => 1,
      'kalwa' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'roh',
      1 => 'taati',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'roh' => 1,
      'taati' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'roh',
      1 => 'tnayyek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'roh' => 1,
      'tnayyek' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'roh',
      1 => 'tqawwed',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'roh' => 1,
      'tqawwed' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sayeb',
      1 => 'zebi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sayeb' => 1,
      'zebi' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shbi',
      1 => 'dirrabek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shbi' => 1,
      'dirrabek' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sidd',
      1 => 'bih',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sidd' => 1,
      'bih' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'waala',
      1 => 'zeu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'waala' => 1,
      'zeu' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wjah',
      1 => 'zebi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wjah' => 1,
      'zebi' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'kahba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'kahba' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'miboun',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'miboun' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yaatik',
      1 => 'namm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yaatik' => 1,
      'namm' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zabour',
      1 => 'omek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zabour' => 1,
      'omek' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'asba',
      1 => 'ala',
      2 => 'sormek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'asba' => 2,
      'ala' => 1,
      'sormek' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dayar',
      1 => 'ki',
      2 => 'ssowa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dayar' => 2,
      'ki' => 1,
      'ssowa' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dayer',
      1 => 'ki',
      2 => 'zabi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dayer' => 2,
      'ki' => 1,
      'zabi' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'emshi',
      1 => 'nik',
      2 => 'ommek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'emshi' => 2,
      'nik' => 1,
      'ommek' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naan',
      1 => 'zok',
      2 => 'omek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'naan' => 2,
      'zok' => 1,
      'omek' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nik',
      1 => 'souwet',
      2 => 'mok',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nik' => 2,
      'souwet' => 1,
      'mok' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ommek',
      1 => 'malhet',
      2 => 'kbir',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ommek' => 2,
      'malhet' => 1,
      'kbir' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'raas',
      1 => 'el',
      2 => 'asba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'raas' => 2,
      'el' => 1,
      'asba' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rouh',
      1 => 'nik',
      2 => 'omek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rouh' => 2,
      'nik' => 1,
      'omek' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'would',
      1 => 'al',
      2 => 'kahba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'would' => 2,
      'al' => 1,
      'kahba' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yedek',
      1 => 'fi',
      2 => 'zebi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yedek' => 2,
      'fi' => 1,
      'zebi' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'arthali',
      1 => 'zebbi',
      2 => 'ya',
      3 => 'kahba',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'arthali' => 3,
      'zebbi' => 2,
      'ya' => 1,
      'kahba' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rani',
      1 => 'skhouun',
      2 => 'ki',
      3 => 'narrr',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'rani' => 3,
      'skhouun' => 2,
      'ki' => 1,
      'narrr' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mani',
      1 => 'fehem',
      2 => 'zeb',
      3 => 'man',
      4 => 'fi',
      5 => 'zaaket',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'mani' => 5,
      'fehem' => 4,
      'zeb' => 3,
      'man' => 2,
      'fi' => 1,
      'zaaket' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 47;

