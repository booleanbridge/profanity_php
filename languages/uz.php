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
  'dik' => true,
  'jim' => true,
  'kok' => true,
  'lol' => true,
  'pupa' => true,
  'vang' => true,
  'ablah' => true,
  'chipa' => true,
  'eshak' => true,
  'ititi' => true,
  'jalap' => true,
  'loyiq' => true,
  'qonli' => true,
  'xoroz' => true,
  'bokira' => true,
  'chinni' => true,
  'gamgin' => true,
  'jinnah' => true,
  'kokrak' => true,
  'kosmik' => true,
  'kotikh' => true,
  'mushuk' => true,
  'osiroq' => true,
  'qanjiq' => true,
  'tentak' => true,
  'teshik' => true,
  'xashak' => true,
  'amsikar' => true,
  'bachcha' => true,
  'boshcha' => true,
  'chochok' => true,
  'fohisha' => true,
  'gardish' => true,
  'noqulay' => true,
  'otaonam' => true,
  'pidaraz' => true,
  'qochish' => true,
  'shahvat' => true,
  'sharlar' => true,
  'sherlar' => true,
  'tajovuz' => true,
  'yaramas' => true,
  'becerdin' => true,
  'jahannam' => true,
  'jingalak' => true,
  'jinnilar' => true,
  'moyaklar' => true,
  'nigerlar' => true,
  'ostirish' => true,
  'qutobosh' => true,
  'siqilish' => true,
  'ustunlar' => true,
  'xorozlar' => true,
  'yukxalta' => true,
  'itvachcha' => true,
  'kechikish' => true,
  'musluklar' => true,
  'orgazmlar' => true,
  'pichoqlar' => true,
  'yomonsoff' => true,
  'bulbulcha`' => true,
  'ejaklangan' => true,
  'shitirlash' => true,
  'shivirlash' => true,
  'tajovuzkor' => true,
  'vidalanish' => true,
  'ejakulatlar' => true,
  'chorvachilik' => true,
  'sharmandalik' => true,
  'ejakulyatsiya' => true,
  'ejekulyatsiya' => true,
  'fohishaxonada' => true,
  'shafqatsizlik' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abort',
      1 => 'qilish',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'abort' => 1,
      'qilish' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'am',
      1 => 'latta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'am' => 1,
      'latta' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eng',
      1 => 'yaxshi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'eng' => 1,
      'yaxshi' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foydalanuvchi',
      1 => 'bilan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'foydalanuvchi' => 1,
      'bilan' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gilam',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gilam' => 1,
      'muncher' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gul',
      1 => 'fokhsha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gul' => 1,
      'fokhsha' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ishdan',
      1 => 'haydaldi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ishdan' => 1,
      'haydaldi' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jin',
      1 => 'ursin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jin' => 1,
      'ursin' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jinsiy',
      1 => 'aloqa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jinsiy' => 1,
      'aloqa' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jum',
      1 => 'bilan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jum' => 1,
      'bilan' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ogzinga',
      1 => 'qotogim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ogzinga' => 1,
      'qotogim' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oneni',
      1 => 'ami',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oneni' => 1,
      'ami' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oneni',
      1 => 'ski',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oneni' => 1,
      'ski' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otni',
      1 => 'qotagi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otni' => 1,
      'qotagi' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otti',
      1 => 'qotagi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otti' => 1,
      'qotagi' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qo`taq',
      1 => 'ali',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qo`taq' => 1,
      'ali' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'soxta',
      1 => 'paketli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'soxta' => 1,
      'paketli' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suiqasd',
      1 => 'qilish',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'suiqasd' => 1,
      'qilish' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tugyonga',
      1 => 'ketgan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tugyonga' => 1,
      'ketgan' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'baholandi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'baholandi' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xudo',
      1 => 'lanati',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xudo' => 1,
      'lanati' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayeyni',
      1 => 'ishak',
      2 => 'siksin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ayeyni' => 2,
      'ishak' => 1,
      'siksin' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mast',
      1 => 'qilib',
      2 => 'oling',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mast' => 2,
      'qilib' => 1,
      'oling' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oneni',
      1 => 'eshshe',
      2 => 'siksin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'oneni' => 2,
      'eshshe' => 1,
      'siksin' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 24;

