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
  'gnè' => true,
  'pit' => true,
  'acht' => true,
  'asal' => true,
  'cait' => true,
  'cona' => true,
  'gort' => true,
  'gowl' => true,
  'pìos' => true,
  'asail' => true,
  'bròin' => true,
  'ceart' => true,
  'slore' => true,
  'brògan' => true,
  'dhanhe' => true,
  'fodder' => true,
  'ifrinn' => true,
  'sèidse' => true,
  'trogra' => true,
  'banainn' => true,
  'carallo' => true,
  'gàrradh' => true,
  'lamecus' => true,
  'phitean' => true,
  'shinach' => true,
  'spiorad' => true,
  'tilgeil' => true,
  'asfucker' => true,
  'bochlach' => true,
  'caracona' => true,
  'coileach' => true,
  'cùfucker' => true,
  'marlatio' => true,
  'pricsean' => true,
  'saoghail' => true,
  'sgoltadh' => true,
  'adharcach' => true,
  'bòidheach' => true,
  'deuchainn' => true,
  'fuilteach' => true,
  'macabitch' => true,
  'sìorrachd' => true,
  'bàlaichean' => true,
  'bòidhchead' => true,
  'còcaichean' => true,
  'sgaoileadh' => true,
  'athdhreuchd' => true,
  'èigneachadh' => true,
  'seallaidhean' => true,
  'taighseinnse' => true,
  'farsaingeachd' => true,
  'coileachsiùcair' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'phit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'a' => 1,
      'phit' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'air',
      1 => 'adhart',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'air' => 1,
      'adhart' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ceann',
      1 => 'cac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ceann' => 1,
      'cac' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'diadhaidh',
      1 => 'diadhaidh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'diadhaidh' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duemiengi',
      1 => 'floras',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'duemiengi' => 1,
      'floras' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'langr',
      1 => 'n',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'langr' => 1,
      'n' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'màthair',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'màthair' => 1,
      'fucker' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pol',
      1 => 'thoin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pol' => 1,
      'thoin' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pàipeir',
      1 => 'donn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pàipeir' => 1,
      'donn' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'huile',
      2 => 'càil',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'a' => 2,
      'huile' => 1,
      'càil' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aborto',
      1 => 'de',
      2 => 'calamar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'aborto' => 2,
      'de' => 1,
      'calamar' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buille',
      1 => 'an',
      2 => 'leathair',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'buille' => 2,
      'an' => 1,
      'leathair' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cabeza',
      1 => 'de',
      2 => 'nabo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cabeza' => 2,
      'de' => 1,
      'nabo' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'falbh',
      1 => 's',
      2 => 'tarraing',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'falbh' => 2,
      's' => 1,
      'tarraing' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fillo',
      1 => 'de',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fillo' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ith',
      1 => 'mo',
      2 => 'chac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ith' => 2,
      'mo' => 1,
      'chac' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'krol',
      1 => 'ze',
      2 => 'bealailia',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'krol' => 2,
      'ze' => 1,
      'bealailia' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pog',
      1 => 'mo',
      2 => 'thoin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pog' => 2,
      'mo' => 1,
      'thoin' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pog',
      1 => 'mo',
      2 => 'toin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pog' => 2,
      'mo' => 1,
      'toin' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 's',
      1 => 'an',
      2 => 'iar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      's' => 2,
      'an' => 1,
      'iar' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 's',
      1 => 'an',
      2 => 'iardheas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      's' => 2,
      'an' => 1,
      'iardheas' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sasanach',
      1 => 'ithean',
      2 => 'cac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sasanach' => 2,
      'ithean' => 1,
      'cac' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'awa',
      1 => 'tae',
      2 => 'fu',
      3 => 'cunt',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'awa' => 3,
      'tae' => 2,
      'fu' => 1,
      'cunt' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puch',
      1 => 'ma',
      2 => 'ho',
      3 => 'in',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'puch' => 3,
      'ma' => 2,
      'ho' => 1,
      'in' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taigh',
      1 => 'nam',
      2 => 'gasta',
      3 => 'ort',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'taigh' => 3,
      'nam' => 2,
      'gasta' => 1,
      'ort' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tha',
      1 => 'thu',
      2 => 'nad',
      3 => 'fhaighean',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tha' => 3,
      'thu' => 2,
      'nad' => 1,
      'fhaighean' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tha',
      1 => 'thu',
      2 => 'nad',
      3 => 'luid',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tha' => 3,
      'thu' => 2,
      'nad' => 1,
      'luid' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'air',
      2 => 'a',
      3 => 'rangachadh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'x' => 3,
      'air' => 2,
      'a' => 1,
      'rangachadh' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 's',
      1 => 'e',
      2 => 'faighean',
      3 => 'a',
      4 => 'thannad',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      's' => 4,
      'e' => 3,
      'faighean' => 2,
      'a' => 1,
      'thannad' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 's',
      1 => 'e',
      2 => 'luid',
      3 => 'a',
      4 => 'thannad',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      's' => 4,
      'e' => 3,
      'luid' => 2,
      'a' => 1,
      'thannad' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shlak',
      1 => 'be',
      2 => 'de',
      3 => 'be',
      4 => 'trafia',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'shlak' => 4,
      'be' => 1,
      'de' => 2,
      'trafia' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anda',
      1 => 'que',
      2 => 'che',
      3 => 'den',
      4 => 'pelo',
      5 => 'cu',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'anda' => 5,
      'que' => 4,
      'che' => 3,
      'den' => 2,
      'pelo' => 1,
      'cu' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rach',
      1 => 'thu',
      2 => 'agus',
      3 => 'a',
      4 => 'sgaoil',
      5 => 'am',
      6 => 'leathar',
      7 => 'de',
      8 => 'bhur',
      9 => 'paithar',
    ),
    'badPhraseLength' => 10,
    'badPhraseArrayTable' => 
    array (
      'rach' => 9,
      'thu' => 8,
      'agus' => 7,
      'a' => 6,
      'sgaoil' => 5,
      'am' => 4,
      'leathar' => 3,
      'de' => 2,
      'bhur' => 1,
      'paithar' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 33;

