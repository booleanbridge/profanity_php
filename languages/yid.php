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
  'kus' => true,
  'nod' => true,
  'arab' => true,
  'drek' => true,
  'efes' => true,
  'putz' => true,
  'sigi' => true,
  'zona' => true,
  'aravi' => true,
  'baren' => true,
  'batul' => true,
  'hamor' => true,
  'harah' => true,
  'kalba' => true,
  'semek' => true,
  'shtok' => true,
  'tahat' => true,
  'tamut' => true,
  'tkach' => true,
  'zayan' => true,
  'zayin' => true,
  'zevel' => true,
  'zonah' => true,
  'bulbul' => true,
  'fagala' => true,
  'kinish' => true,
  'kussit' => true,
  'mamzer' => true,
  'maniak' => true,
  'shtoop' => true,
  'tamuti' => true,
  'toches' => true,
  'tzitzi' => true,
  'beheima' => true,
  'beitsim' => true,
  'benzona' => true,
  'fakakta' => true,
  'faltzan' => true,
  'imascha' => true,
  'klafteh' => true,
  'kusemak' => true,
  'malshin' => true,
  'mastool' => true,
  'menayek' => true,
  'sarsour' => true,
  'shmenah' => true,
  'coksinel' => true,
  'koksinel' => true,
  'masriach' => true,
  'muhhamed' => true,
  'sharlila' => true,
  'sharmuta' => true,
  'shmundie' => true,
  'meshugana' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ahu',
      1 => 'sharmoota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ahu' => 1,
      'sharmoota' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alta',
      1 => 'cocker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alta' => 1,
      'cocker' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ben',
      1 => 'kalbah',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ben' => 1,
      'kalbah' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ben',
      1 => 'kelev',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ben' => 1,
      'kelev' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ben',
      1 => 'sharmoota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ben' => 1,
      'sharmoota' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'charah',
      1 => 'beleben',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'charah' => 1,
      'beleben' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dafuk',
      1 => 'barosh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dafuk' => 1,
      'barosh' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hatichat',
      1 => 'hara',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hatichat' => 1,
      'hara' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kafin',
      1 => 'kup',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kafin' => 1,
      'kup' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koos',
      1 => 'emek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koos' => 1,
      'emek' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koos',
      1 => 'megoolach',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koos' => 1,
      'megoolach' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koos',
      1 => 'sair',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koos' => 1,
      'sair' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ku',
      1 => 'fartzer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ku' => 1,
      'fartzer' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuhni',
      1 => 'lemmel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kuhni' => 1,
      'lemmel' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lech',
      1 => 'lehizdayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lech' => 1,
      'lehizdayen' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lech',
      1 => 'tiezdayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lech' => 1,
      'tiezdayen' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lech',
      1 => 'tizdayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lech' => 1,
      'tizdayen' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'leh',
      1 => 'lehizdayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'leh' => 1,
      'lehizdayen' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lehi',
      1 => 'lehizdayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lehi' => 1,
      'lehizdayen' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lekes',
      1 => 'loche',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lekes' => 1,
      'loche' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lekh',
      1 => 'teezedayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lekh' => 1,
      'teezedayen' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lekh',
      1 => 'tezdayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lekh' => 1,
      'tezdayen' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lekh',
      1 => 'tizdayen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lekh' => 1,
      'tizdayen' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lekhi',
      1 => 'tizdayni',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lekhi' => 1,
      'tizdayni' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maflitz',
      1 => 'koteg',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maflitz' => 1,
      'koteg' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nimas',
      1 => 'li',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nimas' => 1,
      'li' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'noshech',
      1 => 'kariot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'noshech' => 1,
      'kariot' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ochel',
      1 => 'batachat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ochel' => 1,
      'batachat' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ochel',
      1 => 'batachat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ochel' => 1,
      'batachat' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ohel',
      1 => 'hara',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ohel' => 1,
      'hara' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'omed',
      1 => 'li',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'omed' => 1,
      'li' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'or',
      1 => 'hodeda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'or' => 1,
      'hodeda' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pot',
      1 => 'ratuv',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pot' => 1,
      'ratuv' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'safta',
      1 => 'shelca',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'safta' => 1,
      'shelca' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shakli',
      1 => 'btahat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shakli' => 1,
      'btahat' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'stom',
      1 => 'tapeh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'stom' => 1,
      'tapeh' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tmtzetzi',
      1 => 'li',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tmtzetzi' => 1,
      'li' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tilhas',
      1 => 'tizi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tilhas' => 1,
      'tizi' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuchas',
      1 => 'leker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tuchas' => 1,
      'leker' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vayrga',
      1 => 'hargit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vayrga' => 1,
      'hargit' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'manyak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'manyak' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yeled',
      1 => 'kaka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yeled' => 1,
      'kaka' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zain',
      1 => 'baain',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zain' => 1,
      'baain' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'al',
      1 => 'taatzben',
      2 => 'otti',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'al' => 2,
      'taatzben' => 1,
      'otti' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ani',
      1 => 'ekraa',
      2 => 'othaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ani' => 2,
      'ekraa' => 1,
      'othaa' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ani',
      1 => 'ekraa',
      2 => 'othaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ani' => 2,
      'ekraa' => 1,
      'othaa' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayin',
      1 => 'kafin',
      2 => 'yan',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ayin' => 2,
      'kafin' => 1,
      'yan' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ben',
      1 => 'elef',
      2 => 'zonot',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ben' => 2,
      'elef' => 1,
      'zonot' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bosh',
      1 => 'a',
      2 => 'krapah',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bosh' => 2,
      'a' => 1,
      'krapah' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ein',
      1 => 'lecha',
      2 => 'zyn',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ein' => 2,
      'lecha' => 1,
      'zyn' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gai',
      1 => 'in',
      2 => 'drerde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gai' => 2,
      'in' => 1,
      'drerde' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ima',
      1 => 'shelcha',
      2 => 'meta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ima' => 2,
      'shelcha' => 1,
      'meta' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'imasha',
      1 => 'karpada',
      2 => 'mesumemet',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'imasha' => 2,
      'karpada' => 1,
      'mesumemet' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kish',
      1 => 'mein',
      2 => 'touchess',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kish' => 2,
      'mein' => 1,
      'touchess' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koos',
      1 => 'akhotkha',
      2 => 'hatsolaat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'koos' => 2,
      'akhotkha' => 1,
      'hatsolaat' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuss',
      1 => 'ima',
      2 => 'shelcha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kuss' => 2,
      'ima' => 1,
      'shelcha' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lech',
      1 => 'timkor',
      2 => 'kerach',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lech' => 2,
      'timkor' => 1,
      'kerach' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lechen',
      1 => 'mein',
      2 => 'loche',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lechen' => 2,
      'mein' => 1,
      'loche' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'leh',
      1 => 'timzoz',
      2 => 'laapiphior',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'leh' => 2,
      'timzoz' => 1,
      'laapiphior' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'ata',
      2 => 'mefager',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ma' => 2,
      'ata' => 1,
      'mefager' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mitromem',
      1 => 'mizdayen',
      2 => 'batahat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mitromem' => 2,
      'mizdayen' => 1,
      'batahat' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mtsetsi',
      1 => 'li',
      2 => 'tazain',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mtsetsi' => 2,
      'li' => 1,
      'tazain' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mtsots',
      1 => 'li',
      2 => 'tazain',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mtsots' => 2,
      'li' => 1,
      'tazain' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ohel',
      1 => 'ba',
      2 => 'tachat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ohel' => 2,
      'ba' => 1,
      'tachat' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'red',
      1 => 'li',
      2 => 'meagav',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'red' => 2,
      'li' => 1,
      'meagav' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'red',
      1 => 'li',
      2 => 'meavrid',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'red' => 2,
      'li' => 1,
      'meavrid' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'savta',
      1 => 'shelha',
      2 => 'mefageret',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'savta' => 2,
      'shelha' => 1,
      'mefageret' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shak',
      1 => 'li',
      2 => 'batahat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'shak' => 2,
      'li' => 1,
      'batahat' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taase',
      1 => 'li',
      2 => 'tova',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'taase' => 2,
      'li' => 1,
      'tova' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tipesh',
      1 => 'kmo',
      2 => 'naal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tipesh' => 2,
      'kmo' => 1,
      'naal' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tisaref',
      1 => 'b',
      2 => 'azazel',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tisaref' => 2,
      'b' => 1,
      'azazel' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tistom',
      1 => 'tapeh',
      2 => 'yanaal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tistom' => 2,
      'tapeh' => 1,
      'yanaal' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ben',
      2 => 'elef',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'ben' => 1,
      'elef' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'hor',
      2 => 'tachat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'hor' => 1,
      'tachat' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zianti',
      1 => 'et',
      2 => 'ahotha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'zianti' => 2,
      'et' => 1,
      'ahotha' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amen',
      1 => 'yavo',
      2 => 'lech',
      3 => 'sartan',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'amen' => 3,
      'yavo' => 2,
      'lech' => 1,
      'sartan' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ani',
      1 => 'evat',
      2 => 'lecha',
      3 => 'babeitzim',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ani' => 3,
      'evat' => 2,
      'lecha' => 1,
      'babeitzim' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anni',
      1 => 'rotze',
      2 => 'lechaki',
      3 => 'alecha',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'anni' => 3,
      'rotze' => 2,
      'lechaki' => 1,
      'alecha' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ata',
      1 => 'al',
      2 => 'hazain',
      3 => 'sheli',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ata' => 3,
      'al' => 2,
      'hazain' => 1,
      'sheli' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gai',
      1 => 'kukken',
      2 => 'afen',
      3 => 'yam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gai' => 3,
      'kukken' => 2,
      'afen' => 1,
      'yam' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gay',
      1 => 'kacken',
      2 => 'afen',
      3 => 'yam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gay' => 3,
      'kacken' => 2,
      'afen' => 1,
      'yam' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hatichat',
      1 => 'hara',
      2 => 'mizdayen',
      3 => 'batachat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hatichat' => 3,
      'hara' => 2,
      'mizdayen' => 1,
      'batachat' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ima',
      1 => 'shelha',
      2 => 'mozzezzet',
      3 => 'li',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ima' => 3,
      'shelha' => 2,
      'mozzezzet' => 1,
      'li' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lakek',
      1 => 'et',
      2 => 'hatahat',
      3 => 'sheli',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'lakek' => 3,
      'et' => 2,
      'hatahat' => 1,
      'sheli' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'timtzotz',
      1 => 'li',
      2 => 'et',
      3 => 'hazyn',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'timtzotz' => 3,
      'li' => 2,
      'et' => 1,
      'hazyn' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ben',
      2 => 'shel',
      3 => 'kahba',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ya' => 3,
      'ben' => 2,
      'shel' => 1,
      'kahba' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yah',
      1 => 'pin',
      2 => 'noteph',
      3 => 'ziva',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'yah' => 3,
      'pin' => 2,
      'noteph' => 1,
      'ziva' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dee',
      1 => 'bist',
      2 => 'an',
      3 => 'alte',
      4 => 'kocker',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'dee' => 4,
      'bist' => 3,
      'an' => 2,
      'alte' => 1,
      'kocker' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ima',
      1 => 'shelcha',
      2 => 'matzetza',
      3 => 'li',
      4 => 'etmol',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ima' => 4,
      'shelcha' => 3,
      'matzetza' => 2,
      'li' => 1,
      'etmol' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kacken',
      1 => 'zee',
      2 => 'ahf',
      3 => 'deh',
      4 => 'levanah',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'kacken' => 4,
      'zee' => 3,
      'ahf' => 2,
      'deh' => 1,
      'levanah' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lech',
      1 => 'hapes',
      2 => 'me',
      3 => 'yenaana',
      4 => 'otcha',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'lech' => 4,
      'hapes' => 3,
      'me' => 2,
      'yenaana' => 1,
      'otcha' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'leh',
      1 => 'tezayen',
      2 => 'et',
      3 => 'aba',
      4 => 'shelha',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'leh' => 4,
      'tezayen' => 3,
      'et' => 2,
      'aba' => 1,
      'shelha' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'leh',
      1 => 'tezayen',
      2 => 'et',
      3 => 'ima',
      4 => 'shelcha',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'leh' => 4,
      'tezayen' => 3,
      'et' => 2,
      'ima' => 1,
      'shelcha' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'meanyen',
      1 => 'li',
      2 => 'et',
      3 => 'ha',
      4 => 'zaiyn',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'meanyen' => 4,
      'li' => 3,
      'et' => 2,
      'ha' => 1,
      'zaiyn' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'she',
      1 => 'elohim',
      2 => 'yikach',
      3 => 'otcha',
      4 => 'kvar',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'she' => 4,
      'elohim' => 3,
      'yikach' => 2,
      'otcha' => 1,
      'kvar' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'timtsots',
      1 => 'li',
      2 => 'et',
      3 => 'habeitsim',
      4 => 'haseyrot',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'timtsots' => 4,
      'li' => 3,
      'et' => 2,
      'habeitsim' => 1,
      'haseyrot' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lech',
      1 => 'hapes',
      2 => 'et',
      3 => 'haverim',
      4 => 'shelcha',
      5 => 'basivuv',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'lech' => 5,
      'hapes' => 4,
      'et' => 3,
      'haverim' => 2,
      'shelcha' => 1,
      'basivuv' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 97;

