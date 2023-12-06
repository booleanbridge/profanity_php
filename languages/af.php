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
  'fk' => true,
  'kk' => true,
  'gat' => true,
  'her' => true,
  'kak' => true,
  'nai' => true,
  'pes' => true,
  'tos' => true,
  'befk' => true,
  'bekk' => true,
  'doos' => true,
  'drug' => true,
  'fken' => true,
  'foks' => true,
  'jags' => true,
  'kaks' => true,
  'klit' => true,
  'kont' => true,
  'luna' => true,
  'naai' => true,
  'piel' => true,
  'poes' => true,
  'pomp' => true,
  'teef' => true,
  'tewe' => true,
  'befok' => true,
  'bekak' => true,
  'devil' => true,
  'drugs' => true,
  'etter' => true,
  'fkkff' => true,
  'foken' => true,
  'fokof' => true,
  'hoers' => true,
  'kkker' => true,
  'klits' => true,
  'naier' => true,
  'neger' => true,
  'shrek' => true,
  'breast' => true,
  'donner' => true,
  'doosis' => true,
  'eunuch' => true,
  'fokken' => true,
  'fokker' => true,
  'fokkol' => true,
  'heroin' => true,
  'kakker' => true,
  'moffie' => true,
  'negers' => true,
  'poepol' => true,
  'poesis' => true,
  'spyker' => true,
  'terror' => true,
  'tikkop' => true,
  'wicked' => true,
  'aborsie' => true,
  'blerrie' => true,
  'bliksem' => true,
  'cocaine' => true,
  'dopkaas' => true,
  'ecstasy' => true,
  'fokkers' => true,
  'fokkoff' => true,
  'kakhuis' => true,
  'kakspul' => true,
  'kontkop' => true,
  'kotskop' => true,
  'lesbian' => true,
  'naaiers' => true,
  'naipoes' => true,
  'penisse' => true,
  'pielkop' => true,
  'poefter' => true,
  'poeskak' => true,
  'skommel' => true,
  'tietkop' => true,
  'vaginas' => true,
  'voetsek' => true,
  'aborsies' => true,
  'bisexual' => true,
  'donnerse' => true,
  'etterkop' => true,
  'fokenwil' => true,
  'kwaaikat' => true,
  'manaaier' => true,
  'masapiel' => true,
  'morphine' => true,
  'pielkops' => true,
  'poefters' => true,
  'poesklap' => true,
  'seksueel' => true,
  'seksuele' => true,
  'soutpiel' => true,
  'syphilis' => true,
  'vaginale' => true,
  'addiction' => true,
  'bloederig' => true,
  'holnaaier' => true,
  'moerskont' => true,
  'polygamie' => true,
  'rioolboor' => true,
  'terrorist' => true,
  'boudkapper' => true,
  'godverdoem' => true,
  'homosexual' => true,
  'maaifoedie' => true,
  'menstruate' => true,
  'pielsuiger' => true,
  'poeslekker' => true,
  'polysexual' => true,
  'transsexual' => true,
  'verkragters' => true,
  'draadtrekker' => true,
  'heterosexual' => true,
  'menstruation' => true,
  'microphallus' => true,
  'transvestite' => true,
  'verkragtings' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anale',
      1 => 'seks',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anale' => 1,
      'seks' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blaas',
      1 => 'werk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blaas' => 1,
      'werk' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blaas',
      1 => 'werks',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blaas' => 1,
      'werks' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dawid',
      1 => 'jonker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dawid' => 1,
      'jonker' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dawie',
      1 => 'joubert',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dawie' => 1,
      'joubert' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fok',
      1 => 'jou',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fok' => 1,
      'jou' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hol',
      1 => 'bossel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hol' => 1,
      'bossel' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'homoseksuele',
      1 => 'seks',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'homoseksuele' => 1,
      'seks' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'kafferkont',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jou' => 1,
      'kafferkont' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'tief',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jou' => 1,
      'tief' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'tollie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jou' => 1,
      'tollie' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kettie',
      1 => 'kop',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kettie' => 1,
      'kop' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kompos',
      1 => 'stamper',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kompos' => 1,
      'stamper' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mal',
      1 => 'fok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mal' => 1,
      'fok' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mal',
      1 => 'vark',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mal' => 1,
      'vark' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mod',
      1 => 'soka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mod' => 1,
      'soka' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oom',
      1 => 'gert',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oom' => 1,
      'gert' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orale',
      1 => 'seks',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'orale' => 1,
      'seks' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slet',
      1 => 'neer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'slet' => 1,
      'neer' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slym',
      1 => 'sloot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'slym' => 1,
      'sloot' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vok',
      1 => 'jou',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vok' => 1,
      'jou' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'poeslike',
      2 => 'kanker',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jou' => 2,
      'poeslike' => 1,
      'kanker' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'saat',
      2 => 'sokkie',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jou' => 2,
      'saat' => 1,
      'sokkie' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'sluimsloot',
      2 => 'bewonderaar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jou' => 2,
      'sluimsloot' => 1,
      'bewonderaar' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'woers',
      2 => 'gemors',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jou' => 2,
      'woers' => 1,
      'gemors' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jy',
      1 => 'is',
      2 => 'mal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jy' => 2,
      'is' => 1,
      'mal' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jys',
      1 => 'n',
      2 => 'hondenaaier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jys' => 2,
      'n' => 1,
      'hondenaaier' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kom',
      1 => 'ons',
      2 => 'stoot',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kom' => 2,
      'ons' => 1,
      'stoot' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'looi',
      1 => 'n',
      2 => 'plooi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'looi' => 2,
      'n' => 1,
      'plooi' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mank',
      1 => 'genaaide',
      2 => 'bergbok',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mank' => 2,
      'genaaide' => 1,
      'bergbok' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'om',
      1 => 'te',
      2 => 'kots',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'om' => 2,
      'te' => 1,
      'kots' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'spaiker',
      1 => 'you',
      2 => 'self',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'spaiker' => 2,
      'you' => 1,
      'self' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'speel',
      1 => 'met',
      2 => 'jouself',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'speel' => 2,
      'met' => 1,
      'jouself' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suig',
      1 => 'my',
      2 => 'balle',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'suig' => 2,
      'my' => 1,
      'balle' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suig',
      1 => 'my',
      2 => 'neute',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'suig' => 2,
      'my' => 1,
      'neute' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ag',
      1 => 'jou',
      2 => 'hol',
      3 => 'man',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ag' => 3,
      'jou' => 2,
      'hol' => 1,
      'man' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gaan',
      1 => 'fok',
      2 => 'n',
      3 => 'bok',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gaan' => 3,
      'fok' => 2,
      'n' => 1,
      'bok' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gaan',
      1 => 'pluk',
      2 => 'jou',
      3 => 'riem',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gaan' => 3,
      'pluk' => 2,
      'jou' => 1,
      'riem' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hoe',
      1 => 'om',
      2 => 'te',
      3 => 'moor',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hoe' => 3,
      'om' => 2,
      'te' => 1,
      'moor' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hy',
      1 => 'is',
      2 => 'n',
      3 => 'duiwel',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hy' => 3,
      'is' => 2,
      'n' => 1,
      'duiwel' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'ma',
      2 => 'se',
      3 => 'bloedpoes',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jou' => 3,
      'ma' => 2,
      'se' => 1,
      'bloedpoes' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'ma',
      2 => 'se',
      3 => 'moer',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jou' => 3,
      'ma' => 2,
      'se' => 1,
      'moer' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'pa',
      2 => 'se',
      3 => 'perd',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jou' => 3,
      'pa' => 2,
      'se' => 1,
      'perd' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jy',
      1 => 'is',
      2 => 'n',
      3 => 'damduiker',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jy' => 3,
      'is' => 2,
      'n' => 1,
      'damduiker' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jy',
      1 => 'is',
      2 => 'n',
      3 => 'moeraspadda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jy' => 3,
      'is' => 2,
      'n' => 1,
      'moeraspadda' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jy',
      1 => 'sal',
      2 => 'wys',
      3 => 'raak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jy' => 3,
      'sal' => 2,
      'wys' => 1,
      'raak' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'om',
      1 => 'vel',
      2 => 'te',
      3 => 'klap',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'om' => 3,
      'vel' => 2,
      'te' => 1,
      'klap' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ek',
      1 => 'is',
      2 => 'n',
      3 => 'dom',
      4 => 'boer',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ek' => 4,
      'is' => 3,
      'n' => 2,
      'dom' => 1,
      'boer' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hoe',
      1 => 'om',
      2 => 'dood',
      3 => 'te',
      4 => 'maak',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hoe' => 4,
      'om' => 3,
      'dood' => 2,
      'te' => 1,
      'maak' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'ma',
      2 => 'se',
      3 => 'chit',
      4 => 'stink',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jou' => 4,
      'ma' => 3,
      'se' => 2,
      'chit' => 1,
      'stink' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jou',
      1 => 'vokken',
      2 => 'stuk',
      3 => 'geaborteerde',
      4 => 'fetus',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jou' => 4,
      'vokken' => 3,
      'stuk' => 2,
      'geaborteerde' => 1,
      'fetus' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'you',
      1 => 'are',
      2 => 'a',
      3 => 'uncle',
      4 => 'fucker',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'you' => 4,
      'are' => 3,
      'a' => 2,
      'uncle' => 1,
      'fucker' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ek',
      1 => 'gee',
      2 => 'nie',
      3 => 'n',
      4 => 'fok',
      5 => 'nie',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'ek' => 5,
      'gee' => 4,
      'nie' => 0,
      'n' => 2,
      'fok' => 1,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fok',
      1 => 'my',
      2 => 'soos',
      3 => 'n',
      4 => 'porn',
      5 => 'stere',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'fok' => 5,
      'my' => 4,
      'soos' => 3,
      'n' => 2,
      'porn' => 1,
      'stere' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ek',
      1 => 'gee',
      2 => 'nie',
      3 => 'n',
      4 => 'moer',
      5 => 'om',
      6 => 'nie',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'ek' => 6,
      'gee' => 5,
      'nie' => 0,
      'n' => 3,
      'moer' => 2,
      'om' => 1,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wie',
      1 => 'de',
      2 => 'fok',
      3 => 'dink',
      4 => 'jy',
      5 => 'is',
      6 => 'jy',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'wie' => 6,
      'de' => 5,
      'fok' => 4,
      'dink' => 3,
      'jy' => 0,
      'is' => 1,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 56;

