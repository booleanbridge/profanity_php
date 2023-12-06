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
  'huy' => true,
  'бум' => true,
  'кун' => true,
  'мяч' => true,
  'huey' => true,
  'анус' => true,
  'дупу' => true,
  'жопу' => true,
  'звір' => true,
  'корм' => true,
  'лохи' => true,
  'лінч' => true,
  'моча' => true,
  'негр' => true,
  'осли' => true,
  'секс' => true,
  'сука' => true,
  'суки' => true,
  'укол' => true,
  'член' => true,
  'чорт' => true,
  'blyat' => true,
  'hivno' => true,
  'kurva' => true,
  'layno' => true,
  'sraka' => true,
  'аборт' => true,
  'бобер' => true,
  'болок' => true,
  'дамби' => true,
  'дзьоб' => true,
  'ебать' => true,
  'збиті' => true,
  'крупа' => true,
  'лайно' => true,
  'лікар' => true,
  'матка' => true,
  'матір' => true,
  'мудак' => true,
  'мінет' => true,
  'негри' => true,
  'німфи' => true,
  'оргія' => true,
  'оргії' => true,
  'пяний' => true,
  'педик' => true,
  'пекло' => true,
  'пеніс' => true,
  'пизда' => true,
  'повія' => true,
  'порно' => true,
  'прямо' => true,
  'півні' => true,
  'піхва' => true,
  'піхви' => true,
  'ривок' => true,
  'ручка' => true,
  'ручки' => true,
  'скань' => true,
  'содом' => true,
  'сосок' => true,
  'уколи' => true,
  'фетиш' => true,
  'шлюхи' => true,
  'doopoo' => true,
  'koorva' => true,
  'kurvee' => true,
  'аборти' => true,
  'вульви' => true,
  'грудей' => true,
  'гітлер' => true,
  'дерьмо' => true,
  'диплом' => true,
  'егоїзм' => true,
  'зоофіл' => true,
  'кицьки' => true,
  'кульки' => true,
  'мокрий' => true,
  'ободок' => true,
  'оргазм' => true,
  'педаль' => true,
  'педики' => true,
  'писати' => true,
  'похоті' => true,
  'півень' => true,
  'ретард' => true,
  'садизм' => true,
  'садист' => true,
  'самець' => true,
  'синиця' => true,
  'сиськи' => true,
  'смегма' => true,
  'сперма' => true,
  'трахає' => true,
  'чортів' => true,
  'інцест' => true,
  'koorvah' => true,
  'matyook' => true,
  'perdyee' => true,
  'srackoh' => true,
  'yeebaty' => true,
  'бажання' => true,
  'веселка' => true,
  'вирвати' => true,
  'відстій' => true,
  'дрочить' => true,
  'ерекції' => true,
  'еякулює' => true,
  'задниця' => true,
  'звірина' => true,
  'какашка' => true,
  'колючка' => true,
  'кусання' => true,
  'куточок' => true,
  'мошонка' => true,
  'оргазми' => true,
  'приклад' => true,
  'риммінг' => true,
  'роговий' => true,
  'розетка' => true,
  'содомія' => true,
  'трахкав' => true,
  'ублюдок' => true,
  'фелація' => true,
  'фланець' => true,
  'nahuynik' => true,
  'peederus' => true,
  'peezdets' => true,
  'абортист' => true,
  'анальний' => true,
  'гебефіли' => true,
  'еякулята' => true,
  'еякуляту' => true,
  'збочення' => true,
  'кривавий' => true,
  'ластівка' => true,
  'мазохіст' => true,
  'meenyetka' => true,
  'vybliadok' => true,
  'zamkneseh' => true,
  'бурхливий' => true,
  'вуайерист' => true,
  'відсталий' => true,
  'відчепись' => true,
  'гебефілія' => true,
  'еякулюють' => true,
  'еякуляція' => true,
  'еякуляції' => true,
  'збоченець' => true,
  'мастурбує' => true,
  'неонацист' => true,
  'педофілія' => true,
  'пікантний' => true,
  'абортивний' => true,
  'гвалтівник' => true,
  'еякулювали' => true,
  'кунілінгус' => true,
  'лінчування' => true,
  'наркоманів' => true,
  'нацистські' => true,
  'німфоманія' => true,
  'пансексуал' => true,
  'проникнути' => true,
  'собакатрах' => true,
  'ґвалтівник' => true,
  'амбосексуал' => true,
  'амбісексуал' => true,
  'гебефільний' => true,
  'мастурбація' => true,
  'нацистський' => true,
  'порнографія' => true,
  'проникнення' => true,
  'свердловина' => true,
  'богпроклятий' => true,
  'згвалтування' => true,
  'зґвалтований' => true,
  'зґвалтування' => true,
  'мастурбувати' => true,
  'педофільські' => true,
  'сечовидільна' => true,
  'содомізувати' => true,
  'фалоімітатор' => true,
  'загвинчування' => true,
  'содомізований' => true,
  'сперматозоїди' => true,
  'фалоімітатори' => true,
  'сімявиверження' => true,
  'амбісексуальний' => true,
  'амбісексуальність' => true,
  'кровосмесітельние' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'iebana',
      1 => 'shlooha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'iebana' => 1,
      'shlooha' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lysyi',
      1 => 'didko',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lysyi' => 1,
      'didko' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slava',
      1 => 'ukraini',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'slava' => 1,
      'ukraini' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zakriy',
      1 => 'pelku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zakriy' => 1,
      'pelku' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'килим',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'килим' => 1,
      'muncher' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'пряма',
      1 => 'кишка',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'пряма' => 1,
      'кишка' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'сечовипускальний',
      1 => 'канал',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'сечовипускальний' => 1,
      'канал' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'статевих',
      1 => 'губ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'статевих' => 1,
      'губ' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sosi',
      1 => 'xyu',
      2 => 'pider',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sosi' => 2,
      'xyu' => 1,
      'pider' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'uvas',
      1 => 'melankie',
      2 => 'pisune',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'uvas' => 2,
      'melankie' => 1,
      'pisune' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'potselui',
      1 => 'meni',
      2 => 'v',
      3 => 'sraku',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'potselui' => 3,
      'meni' => 2,
      'v' => 1,
      'sraku' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 11;

