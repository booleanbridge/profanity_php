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
  'ko' => true,
  'fjs' => true,
  'køn' => true,
  'pik' => true,
  'røv' => true,
  'sæd' => true,
  'tøs' => true,
  'dige' => true,
  'flis' => true,
  'fælg' => true,
  'hane' => true,
  'knop' => true,
  'kran' => true,
  'krog' => true,
  'lort' => true,
  'tã¸s' => true,
  'tæve' => true,
  'urin' => true,
  'abort' => true,
  'agger' => true,
  'begær' => true,
  'bolde' => true,
  'brian' => true,
  'fisse' => true,
  'haner' => true,
  'kusse' => true,
  'lorte' => true,
  'luder' => true,
  'nymfe' => true,
  'onani' => true,
  'orgie' => true,
  'rejse' => true,
  'roset' => true,
  'rumpe' => true,
  'skide' => true,
  'skrue' => true,
  'sluge' => true,
  'sutte' => true,
  'svans' => true,
  'tæver' => true,
  'æsler' => true,
  'blodig' => true,
  'dyrisk' => true,
  'fallos' => true,
  'fanden' => true,
  'orgier' => true,
  'pikhår' => true,
  'pungen' => true,
  'røvhul' => true,
  'skider' => true,
  'snuppe' => true,
  'sodoma' => true,
  'sodomi' => true,
  'udbrød' => true,
  'zoofil' => true,
  'aborter' => true,
  'brokker' => true,
  'bryster' => true,
  'dildoer' => true,
  'egoisme' => true,
  'hebefil' => true,
  'helvede' => true,
  'jylland' => true,
  'klaphat' => true,
  'knapper' => true,
  'niggere' => true,
  'onanere' => true,
  'orgasme' => true,
  'osteged' => true,
  'pervers' => true,
  'pokkers' => true,
  'prikker' => true,
  'pædofil' => true,
  'rasende' => true,
  'røvskæg' => true,
  'sadisme' => true,
  'spjætte' => true,
  'sprække' => true,
  'tudefjs' => true,
  'zoofili' => true,
  'abortist' => true,
  'blodskam' => true,
  'bøsserøv' => true,
  'endetarm' => true,
  'erektion' => true,
  'fissehår' => true,
  'hebefili' => true,
  'hestepik' => true,
  'klitoris' => true,
  'liderlig' => true,
  'livmoder' => true,
  'orgasmer' => true,
  'pikhoved' => true,
  'pædofili' => true,
  'skiderik' => true,
  'svensker' => true,
  'testikel' => true,
  'vagabond' => true,
  'voldtage' => true,
  'voldtægt' => true,
  'ã˜lfisse' => true,
  'babykanon' => true,
  'bestialsk' => true,
  'bãskubber' => true,
  'ejakulere' => true,
  'hebefiler' => true,
  'jyllandsk' => true,
  'nymfomani' => true,
  'pikansjos' => true,
  'rã¸vbanan' => true,
  'røvfucker' => true,
  'røvhuller' => true,
  'røvspræke' => true,
  'skamlæber' => true,
  'sædafgang' => true,
  'urinrøret' => true,
  'voldtaget' => true,
  'agterstavn' => true,
  'brystvorte' => true,
  'bã¸sserã¸v' => true,
  'ejakulerer' => true,
  'forbandede' => true,
  'hundfucker' => true,
  'incestuøse' => true,
  'luderhoved' => true,
  'panseksuel' => true,
  'pikslugeri' => true,
  'pikspiller' => true,
  'piksutteri' => true,
  'pornografi' => true,
  'rulletobak' => true,
  'rã¸vguitar' => true,
  'sædafgange' => true,
  'ambiseksuel' => true,
  'amboseksuel' => true,
  'bestialitet' => true,
  'ejakulation' => true,
  'ejakulerede' => true,
  'nynazistisk' => true,
  'pikantilope' => true,
  'sjofelheder' => true,
  'sodomiseret' => true,
  'sønofabitch' => true,
  'kussekryller' => true,
  'prostitueret' => true,
  'ejakulationer' => true,
  'voldtægtsmand' => true,
  'ambiseksualitet' => true,
  'voldtægtsforbryder' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'mor',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'din' => 1,
      'mor' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dumme',
      1 => 'klling',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dumme' => 1,
      'klling' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dumme',
      1 => 'svin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dumme' => 1,
      'svin' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'for',
      1 => 'pokker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'for' => 1,
      'pokker' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'for',
      1 => 'satan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'for' => 1,
      'satan' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'forpulede',
      1 => 'rovhul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'forpulede' => 1,
      'rovhul' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grimme',
      1 => 'klling',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'grimme' => 1,
      'klling' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hold',
      1 => 'kft',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hold' => 1,
      'kft' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klamme',
      1 => 'luderso',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'klamme' => 1,
      'luderso' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klamme',
      1 => 'so',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'klamme' => 1,
      'so' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mor',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mor' => 1,
      'fucker' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pisse',
      1 => 'af',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pisse' => 1,
      'af' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trænge',
      1 => 'ind',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'trænge' => 1,
      'ind' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tæppe',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tæppe' => 1,
      'muncher' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'bedømt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'bedømt' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bolle',
      1 => 'din',
      2 => 'mor',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bolle' => 2,
      'din' => 1,
      'mor' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'dumme',
      2 => 'idiot',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'din' => 2,
      'dumme' => 1,
      'idiot' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'fucking',
      2 => 'idiot',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'din' => 2,
      'fucking' => 1,
      'idiot' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fuck',
      1 => 'din',
      2 => 'far',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fuck' => 2,
      'din' => 1,
      'far' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'knep',
      1 => 'dig',
      2 => 'selv',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'knep' => 2,
      'dig' => 1,
      'selv' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'skrid',
      1 => 'med',
      2 => 'dig',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'skrid' => 2,
      'med' => 1,
      'dig' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sut',
      1 => 'min',
      2 => 'dolk',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sut' => 2,
      'min' => 1,
      'dolk' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'er',
      1 => 'du',
      2 => 'fucking',
      3 => 'retarderet',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'er' => 3,
      'du' => 2,
      'fucking' => 1,
      'retarderet' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jeg',
      1 => 'knepper',
      2 => 'din',
      3 => 'familie',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jeg' => 3,
      'knepper' => 2,
      'din' => 1,
      'familie' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jeg',
      1 => 'knepper',
      2 => 'din',
      3 => 'mor',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jeg' => 3,
      'knepper' => 2,
      'din' => 1,
      'mor' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slik',
      1 => 'omkring',
      2 => 'mit',
      3 => 'pikhovede',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'slik' => 3,
      'omkring' => 2,
      'mit' => 1,
      'pikhovede' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 26;

