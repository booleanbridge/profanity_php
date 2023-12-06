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
  'elo' => true,
  'kae' => true,
  'kio' => true,
  'tio' => true,
  'ufa' => true,
  'bolo' => true,
  'fiki' => true,
  'gefe' => true,
  'kefe' => true,
  'komo' => true,
  'polo' => true,
  'tioi' => true,
  'tuai' => true,
  'aikae' => true,
  'alelo' => true,
  'faaai' => true,
  'faatu' => true,
  'itupa' => true,
  'moepi' => true,
  'moipe' => true,
  'pukio' => true,
  'valea' => true,
  'bukioo' => true,
  'faamau' => true,
  'fagota' => true,
  'hitila' => true,
  'meaola' => true,
  'sotoma' => true,
  'foloina' => true,
  'kelefua' => true,
  'mulielo' => true,
  'paumuku' => true,
  'faatuina' => true,
  'matautia' => true,
  'susupipi' => true,
  'susupoki' => true,
  'tulimanu' => true,
  'faapiopio' => true,
  'feusuaiga' => true,
  'paumumuku' => true,
  'ponokalafi' => true,
  'siosiomaga' => true,
  'faamalieina' => true,
  'faamaualuga' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ai',
      1 => 'kaepu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ai' => 1,
      'kaepu' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'faamalosi',
      1 => 'teine',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'faamalosi' => 1,
      'teine' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'faapau',
      1 => 'pepe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'faapau' => 1,
      'pepe' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fafine',
      1 => 'talitane',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fafine' => 1,
      'talitane' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fasioti',
      1 => 'tagata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fasioti' => 1,
      'tagata' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'le',
      1 => 'kipi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'le' => 1,
      'kipi' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'moe',
      1 => 'kolo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'moe' => 1,
      'kolo' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muli',
      1 => 'lapoa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muli' => 1,
      'lapoa' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poga',
      1 => 'ua',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'poga' => 1,
      'ua' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sei',
      1 => 'sei',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sei' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sow',
      1 => 'mikioy',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sow' => 1,
      'mikioy' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'susu',
      1 => 'kaukau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'susu' => 1,
      'kaukau' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'susu',
      1 => 'poki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'susu' => 1,
      'poki' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suu',
      1 => 'poki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'suu' => 1,
      'poki' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuiina',
      1 => 'atu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tuiina' => 1,
      'atu' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ai',
      1 => 'lau',
      2 => 'mea',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ai' => 2,
      'lau' => 1,
      'mea' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ai',
      1 => 'lauu',
      2 => 'mea',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ai' => 2,
      'lauu' => 1,
      'mea' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'e',
      1 => 'le',
      2 => 'gata',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'e' => 2,
      'le' => 1,
      'gata' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'faaaoaoga',
      1 => 'o',
      2 => 'manu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'faaaoaoga' => 2,
      'o' => 1,
      'manu' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kipi',
      1 => 'lou',
      2 => 'pau',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kipi' => 2,
      'lou' => 1,
      'pau' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kissi',
      1 => 'lau',
      2 => 'muli',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kissi' => 2,
      'lau' => 1,
      'muli' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'siko',
      1 => 'lemo',
      2 => 'daai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'siko' => 2,
      'lemo' => 1,
      'daai' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tagata',
      1 => 'e',
      2 => 'matamata',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tagata' => 2,
      'e' => 1,
      'matamata' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ah',
      1 => 'ee',
      2 => 'ka',
      3 => 'eh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ah' => 3,
      'ee' => 2,
      'ka' => 1,
      'eh' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alu',
      1 => 'fufu',
      2 => 'lou',
      3 => 'kiga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'alu' => 3,
      'fufu' => 2,
      'lou' => 1,
      'kiga' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'melo',
      1 => 'melo',
      2 => 'lou',
      3 => 'pi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'melo' => 2,
      'lou' => 1,
      'pi' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sau',
      1 => 'ai',
      2 => 'lau',
      3 => 'mea',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sau' => 3,
      'ai' => 2,
      'lau' => 1,
      'mea' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ulu',
      1 => 'atu',
      2 => 'i',
      3 => 'ai',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ulu' => 3,
      'atu' => 2,
      'i' => 1,
      'ai' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'makasi',
      1 => 'pu',
      2 => 'ili',
      3 => 'mo',
      4 => 'i',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'makasi' => 4,
      'pu' => 3,
      'ili' => 2,
      'mo' => 1,
      'i' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tagata',
      1 => 'e',
      2 => 'fiafia',
      3 => 'i',
      4 => 'tamaiti',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tagata' => 4,
      'e' => 3,
      'fiafia' => 2,
      'i' => 1,
      'tamaiti' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tagata',
      1 => 'e',
      2 => 'fiafia',
      3 => 'i',
      4 => 'le',
      5 => 'hebephiles',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'tagata' => 5,
      'e' => 4,
      'fiafia' => 3,
      'i' => 2,
      'le' => 1,
      'hebephiles' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 31;

