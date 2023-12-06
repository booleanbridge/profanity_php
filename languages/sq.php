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
  'nã' => true,
  'gji' => true,
  'kar' => true,
  'mut' => true,
  'qij' => true,
  'zar' => true,
  'bole' => true,
  'buce' => true,
  'digë' => true,
  'epsh' => true,
  'ferr' => true,
  'gjel' => true,
  'inat' => true,
  'kari' => true,
  'kelp' => true,
  'koqe' => true,
  'pidh' => true,
  'pupë' => true,
  'rrok' => true,
  'sqep' => true,
  'swag' => true,
  'vrug' => true,
  'çipa' => true,
  'abort' => true,
  'bakti' => true,
  'bytha' => true,
  'gabim' => true,
  'gomar' => true,
  'idiot' => true,
  'kurvë' => true,
  'nakun' => true,
  'orgji' => true,
  'pidhi' => true,
  'plasë' => true,
  'shpoj' => true,
  'simge' => true,
  'thith' => true,
  'vonoj' => true,
  'vulvë' => true,
  'zezak' => true,
  'zuskë' => true,
  'dshtoj' => true,
  'gomarë' => true,
  'hidhet' => true,
  'hovoff' => true,
  'kurvar' => true,
  'lapeci' => true,
  'lavire' => true,
  'mitrës' => true,
  'nazist' => true,
  'penisi' => true,
  'pshurr' => true,
  'ropqir' => true,
  'spermë' => true,
  'uretra' => true,
  'urinar' => true,
  'vaginë' => true,
  'xhufkë' => true,
  'zoofil' => true,
  'abortet' => true,
  'derdhje' => true,
  'dorezat' => true,
  'egoizëm' => true,
  'gjinjtë' => true,
  'hitleri' => true,
  'linçimi' => true,
  'mallkim' => true,
  'orgazma' => true,
  'orgazmë' => true,
  'orgazëm' => true,
  'orgjitë' => true,
  'pedofil' => true,
  'pervers' => true,
  'sadizëm' => true,
  'soditës' => true,
  'sodomia' => true,
  'testiku' => true,
  'thithka' => true,
  'abortist' => true,
  'ejakulon' => true,
  'ereksion' => true,
  'fllanxhë' => true,
  'hebefili' => true,
  'klitoris' => true,
  'penetrim' => true,
  'vidhosje' => true,
  'zoofilia' => true,
  'abortuari' => true,
  'bythëqirë' => true,
  'ejakulimi' => true,
  'ejakuluar' => true,
  'hebefilia' => true,
  'hebefilët' => true,
  'incestuoz' => true,
  'masturbim' => true,
  'mazoshist' => true,
  'pedofilia' => true,
  'prapanicë' => true,
  'përdhunim' => true,
  'qenfucker' => true,
  'shkertate' => true,
  'shtazarak' => true,
  'brutalitet' => true,
  'depërtojnë' => true,
  'ejakulatet' => true,
  'gjelpiston' => true,
  'masturbimi' => true,
  'panseksual' => true,
  'pedofiliak' => true,
  'prostitutë' => true,
  'përdhunimi' => true,
  'përdhunuar' => true,
  'përdhunues' => true,
  'testikular' => true,
  'masturbohem' => true,
  'pornografia' => true,
  'akrotomophilia' => true,
  'djaliinjekurvë' => true,
  'spermatozoidet' => true,
  'ambiseksualiteti' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'allahu',
      1 => 'akbar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'allahu' => 1,
      'akbar' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fis',
      1 => 'derr',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fis' => 1,
      'derr' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hajde',
      1 => 'majmun',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hajde' => 1,
      'majmun' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'i',
      1 => 'dehur',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'i' => 1,
      'dehur' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'i',
      1 => 'ndyrë',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'i' => 1,
      'ndyrë' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'i',
      1 => 'përgjakshëm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'i' => 1,
      'përgjakshëm' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kok',
      1 => 'derr',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kok' => 1,
      'derr' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lavdi',
      1 => 'hitlerit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lavdi' => 1,
      'hitlerit' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lëndë',
      1 => 'djegëse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lëndë' => 1,
      'djegëse' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mqifsh',
      1 => 'karin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mqifsh' => 1,
      'karin' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'brirë',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'me' => 1,
      'brirë' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mjegull',
      1 => 'qilim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mjegull' => 1,
      'qilim' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nanajote',
      1 => 'ehankarin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nanajote' => 1,
      'ehankarin' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ngrit',
      1 => 'nervat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ngrit' => 1,
      'nervat' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'në',
      1 => 'rregull',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'në' => 1,
      'rregull' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nëna',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nëna' => 1,
      'fucker' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paketues',
      1 => 'karamel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'paketues' => 1,
      'karamel' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qifsha',
      1 => 'robt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qifsha' => 1,
      'robt' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rrac',
      1 => 'qir',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rrac' => 1,
      'qir' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shko',
      1 => 'nkar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shko' => 1,
      'nkar' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'të',
      1 => 'ndenjura',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'të' => 1,
      'ndenjura' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'vlerësuarat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'vlerësuarat' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zoti',
      1 => 'dënuar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zoti' => 1,
      'dënuar' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'guxha',
      1 => 'e',
      2 => 'karit',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'guxha' => 2,
      'e' => 1,
      'karit' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lëshoj',
      1 => 'një',
      2 => 'fjalë',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lëshoj' => 2,
      'një' => 1,
      'fjalë' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'ha',
      2 => 'karin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ma' => 2,
      'ha' => 1,
      'karin' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'qifsh',
      2 => 'karin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ma' => 2,
      'qifsh' => 1,
      'karin' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mi',
      1 => 'rrofsh',
      2 => 'bolet',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mi' => 2,
      'rrofsh' => 1,
      'bolet' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qese',
      1 => 'e',
      2 => 'herdheve',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'qese' => 2,
      'e' => 1,
      'herdheve' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qift',
      1 => 'qeni',
      2 => 'nonen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'qift' => 2,
      'qeni' => 1,
      'nonen' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tqift',
      1 => 'dreqi',
      2 => 'nonen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tqift' => 2,
      'dreqi' => 1,
      'nonen' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qifsha',
      2 => 'nanen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ta' => 2,
      'qifsha' => 1,
      'nanen' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qifsha',
      2 => 'pidhin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ta' => 2,
      'qifsha' => 1,
      'pidhin' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'dhjefsha',
      2 => 'racãn',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'te' => 2,
      'dhjefsha' => 1,
      'racãn' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'hangert',
      2 => 'dreqi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'te' => 2,
      'hangert' => 1,
      'dreqi' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'qifsha',
      2 => 'motren',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'te' => 2,
      'qifsha' => 1,
      'motren' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'qifsha',
      2 => 'kurve',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'te' => 2,
      'qifsha' => 1,
      'kurve' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ti',
      1 => 'qifsha',
      2 => 'byth',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ti' => 2,
      'qifsha' => 1,
      'byth' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shkã',
      1 => 'rdhat',
      2 => 'e',
      3 => 'qelbur',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'shkã' => 3,
      'rdhat' => 2,
      'e' => 1,
      'qelbur' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'cift',
      2 => 'pengameri',
      3 => 'motren',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'cift' => 2,
      'pengameri' => 1,
      'motren' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qi',
      2 => 'antarsimin',
      3 => 'familjar',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'qi' => 2,
      'antarsimin' => 1,
      'familjar' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qifsha',
      2 => 'qeni',
      3 => 'nanen',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'qifsha' => 2,
      'qeni' => 1,
      'nanen' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qift',
      2 => 'bota',
      3 => 'nanen',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'qift' => 2,
      'bota' => 1,
      'nanen' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qift',
      2 => 'zoti',
      3 => 'nanen',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'qift' => 2,
      'zoti' => 1,
      'nanen' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qifte',
      2 => 'derri',
      3 => 'nonen',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'qifte' => 2,
      'derri' => 1,
      'nonen' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qifsha',
      2 => 'fãfãrdakin',
      3 => 'e',
      4 => 'non',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ta' => 4,
      'qifsha' => 3,
      'fãfãrdakin' => 2,
      'e' => 1,
      'non' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qifsha',
      2 => 'jeten',
      3 => 'e',
      4 => 'nanes',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ta' => 4,
      'qifsha' => 3,
      'jeten' => 2,
      'e' => 1,
      'nanes' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'qifsha',
      2 => 'pythin',
      3 => 'e',
      4 => 'nans',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ta' => 4,
      'qifsha' => 3,
      'pythin' => 2,
      'e' => 1,
      'nans' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'qifsha',
      2 => 'drasat',
      3 => 'e',
      4 => 'vorit',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'te' => 4,
      'qifsha' => 3,
      'drasat' => 2,
      'e' => 1,
      'vorit' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'qifsha',
      2 => 'pidhin',
      3 => 'e',
      4 => 'mamit',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'te' => 4,
      'qifsha' => 3,
      'pidhin' => 2,
      'e' => 1,
      'mamit' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zoti',
      1 => 'i',
      2 => 'bekofte',
      3 => 'topat',
      4 => 'tuaja',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'zoti' => 4,
      'i' => 3,
      'bekofte' => 2,
      'topat' => 1,
      'tuaja' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ubi',
      1 => 'zakolji',
      2 => 'da',
      3 => 'siptar',
      4 => 'ne',
      5 => 'postoji',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'ubi' => 5,
      'zakolji' => 4,
      'da' => 3,
      'siptar' => 2,
      'ne' => 1,
      'postoji' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 52;

