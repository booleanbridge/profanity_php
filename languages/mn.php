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
  'ану' => true,
  'бөх' => true,
  'ван' => true,
  'дик' => true,
  'дур' => true,
  'там' => true,
  'хөх' => true,
  'шаг' => true,
  'шив' => true,
  'huts' => true,
  'kami' => true,
  'meem' => true,
  'shaa' => true,
  'suga' => true,
  'zail' => true,
  'новш' => true,
  'смит' => true,
  'турс' => true,
  'хярс' => true,
  'хүйс' => true,
  'цуст' => true,
  'өдөр' => true,
  'matar' => true,
  'teneg' => true,
  'гичий' => true,
  'далан' => true,
  'илжиг' => true,
  'порно' => true,
  'титэм' => true,
  'хоног' => true,
  'хяруу' => true,
  'шодой' => true,
  'үтрээ' => true,
  'bosson' => true,
  'gechii' => true,
  'gichii' => true,
  'yanhan' => true,
  'бөмбөг' => true,
  'дасгал' => true,
  'дуртай' => true,
  'садист' => true,
  'сунгах' => true,
  'хөмсөг' => true,
  'үйрмэг' => true,
  'bilguun' => true,
  'динамик' => true,
  'писсинг' => true,
  'сэгсрэх' => true,
  'шившлэг' => true,
  'эрхлэгч' => true,
  'etsegtei' => true,
  'hulgaich' => true,
  'илжигчин' => true,
  'ирэгжсэн' => true,
  'буулгасан' => true,
  'порнограф' => true,
  'тогоонууд' => true,
  'тэнүүлчин' => true,
  'хулгайлах' => true,
  'ялгаруулах' => true,
  'нохойfucker' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'al',
      1 => 'min',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'al' => 1,
      'min' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alna',
      1 => 'shoo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alna' => 1,
      'shoo' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alna',
      1 => 'shuu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alna' => 1,
      'shuu' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amaa',
      1 => 'tat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'amaa' => 1,
      'tat' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boovni',
      1 => 'ohin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'boovni' => 1,
      'ohin' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boovoo',
      1 => 'saa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'boovoo' => 1,
      'saa' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gomo',
      1 => 'al',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gomo' => 1,
      'al' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'goy',
      1 => 'pisstar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'goy' => 1,
      'pisstar' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gulig',
      1 => 'miin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gulig' => 1,
      'miin' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hogain',
      1 => 'pisstar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hogain' => 1,
      'pisstar' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'novsh',
      1 => 'min',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'novsh' => 1,
      'min' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tsusaar',
      1 => 'gooj',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tsusaar' => 1,
      'gooj' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'үнэлгээтэй',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'үнэлгээтэй' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xopom',
      1 => 'bebnos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xopom' => 1,
      'bebnos' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'бурханлиг',
      1 => 'шүү',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'бурханлиг' => 1,
      'шүү' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'бөхийж',
      1 => 'байна',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'бөхийж' => 1,
      'байна' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'гэж',
      1 => 'хэлэв',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'гэж' => 1,
      'хэлэв' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'луйвар',
      1 => 'хийх',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'луйвар' => 1,
      'хийх' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'харилцаа',
      1 => 'холбоо',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'харилцаа' => 1,
      'холбоо' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'хивсний',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'хивсний' => 1,
      'muncher' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'хүсэл',
      1 => 'тачаал',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'хүсэл' => 1,
      'тачаал' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'хүчингийн',
      1 => 'хэрэг',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'хүчингийн' => 1,
      'хэрэг' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'хүүгийнхээ',
      1 => 'тухай',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'хүүгийнхээ' => 1,
      'тухай' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'шулуун',
      1 => 'гэдсээр',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'шулуун' => 1,
      'гэдсээр' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'эгч',
      1 => 'нар',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'эгч' => 1,
      'нар' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ээж',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ээж' => 1,
      'fucker' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'үр',
      1 => 'хөндөлт',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'үр' => 1,
      'хөндөлт' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'үрийн',
      1 => 'шингэн',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'үрийн' => 1,
      'шингэн' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'booviig',
      1 => 'min',
      2 => 'huh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'booviig' => 2,
      'min' => 1,
      'huh' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chi',
      1 => 'chi',
      2 => 'bo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chi' => 1,
      'bo' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ehiig',
      1 => 'chn',
      2 => 'shaay',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ehiig' => 2,
      'chn' => 1,
      'shaay' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gii',
      1 => 'chii',
      2 => 'pizda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gii' => 2,
      'chii' => 1,
      'pizda' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hol',
      1 => 'ochij',
      2 => 'xuts',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hol' => 2,
      'ochij' => 1,
      'xuts' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'nig',
      2 => 'pizda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'te' => 2,
      'nig' => 1,
      'pizda' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yavj',
      1 => 'boovoo',
      2 => 'saa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yavj' => 2,
      'boovoo' => 1,
      'saa' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'хамгийн',
      1 => 'сайн',
      2 => 'сайхан',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'хамгийн' => 2,
      'сайн' => 1,
      'сайхан' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 36;

