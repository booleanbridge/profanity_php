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
  'асс' => true,
  'ккк' => true,
  'сеx' => true,
  'сек' => true,
  'тит' => true,
  'фаг' => true,
  'цум' => true,
  'љут' => true,
  'alim' => true,
  'linи' => true,
  'some' => true,
  'анал' => true,
  'анус' => true,
  'бооб' => true,
  'бутт' => true,
  'ванг' => true,
  'ванк' => true,
  'дике' => true,
  'динк' => true,
  'дицк' => true,
  'коцк' => true,
  'лини' => true,
  'нази' => true,
  'оргy' => true,
  'пооп' => true,
  'порн' => true,
  'пубе' => true,
  'рацy' => true,
  'румп' => true,
  'слут' => true,
  'смут' => true,
  'спац' => true,
  'суцк' => true,
  'схаг' => true,
  'титс' => true,
  'титт' => true,
  'турд' => true,
  'хоре' => true,
  'ципа' => true,
  'цоон' => true,
  'чмар' => true,
  'besni' => true,
  'falus' => true,
  'felne' => true,
  'fetiљ' => true,
  'kugla' => true,
  'kurva' => true,
  'kurvo' => true,
  'kutak' => true,
  'kvake' => true,
  'nimfa' => true,
  'ассес' => true,
  'баллс' => true,
  'бесни' => true,
  'бообс' => true,
  'дилдо' => true,
  'дуцхе' => true,
  'кваке' => true,
  'кугла' => true,
  'курац' => true,
  'курва' => true,
  'кутак' => true,
  'кучка' => true,
  'лабиа' => true,
  'нимфа' => true,
  'пакао' => true,
  'пенис' => true,
  'пичка' => true,
  'порно' => true,
  'прицк' => true,
  'пусси' => true,
  'рапер' => true,
  'семен' => true,
  'сканк' => true,
  'слутс' => true,
  'спунк' => true,
  'срање' => true,
  'схите' => true,
  'схитс' => true,
  'фагот' => true,
  'фалус' => true,
  'фанни' => true,
  'фелне' => true,
  'фетиљ' => true,
  'фуцкс' => true,
  'хорни' => true,
  'цоцкс' => true,
  'цхинк' => true,
  'kopile' => true,
  'kreten' => true,
  'lastiš' => true,
  'odjebi' => true,
  'prodre' => true,
  'shupak' => true,
  'sodoma' => true,
  'sranje' => true,
  'usrani' => true,
  'voajer' => true,
  'боллок' => true,
  'буцета' => true,
  'вагина' => true,
  'виагра' => true,
  'воајер' => true,
  'гузица' => true,
  'дилдос' => true,
  'дркање' => true,
  'инцест' => true,
  'копиле' => true,
  'крваво' => true,
  'кретен' => true,
  'ластиш' => true,
  'ниггер' => true,
  'одјеби' => true,
  'оргиес' => true,
  'пецкер' => true,
  'писсер' => true,
  'писсес' => true,
  'пишање' => true,
  'пожуда' => true,
  'прицкс' => true,
  'продре' => true,
  'ректум' => true,
  'ретард' => true,
  'садист' => true,
  'смегма' => true,
  'снатцх' => true,
  'содома' => true,
  'спункy' => true,
  'схитти' => true,
  'фаготс' => true,
  'фланге' => true,
  'фуцкед' => true,
  'фуцкер' => true,
  'хитлер' => true,
  'јебати' => true,
  'јебено' => true,
  'abortus' => true,
  'egoizam' => true,
  'orgazam' => true,
  'orgazme' => true,
  'pedofil' => true,
  'peechka' => true,
  'rozetna' => true,
  'sadizam' => true,
  'seronjo' => true,
  'абортус' => true,
  'ассхоле' => true,
  'баллбаг' => true,
  'белленд' => true,
  'бестиал' => true,
  'битцхес' => true,
  'бловјоб' => true,
  'егоизам' => true,
  'лустинг' => true,
  'мокраћа' => true,
  'неонази' => true,
  'ниггерс' => true,
  'оргазам' => true,
  'оргазме' => true,
  'оргасим' => true,
  'педофил' => true,
  'проклет' => true,
  'пуссиес' => true,
  'римминг' => true,
  'розетна' => true,
  'садизам' => true,
  'скротум' => true,
  'схемале' => true,
  'схиттед' => true,
  'сцротум' => true,
  'уретхра' => true,
  'фаггинг' => true,
  'фелатио' => true,
  'фелацио' => true,
  'фуцкерс' => true,
  'цумсхот' => true,
  'abortusi' => true,
  'erekcija' => true,
  'hebefili' => true,
  'klitoris' => true,
  'materica' => true,
  'silovana' => true,
  'sodomija' => true,
  'urinarno' => true,
  'абортуси' => true,
  'ассхолес' => true,
  'битцхинг' => true,
  'ерекција' => true,
  'ејакулат' => true,
  'завртање' => true,
  'зоопхиле' => true,
  'клиторис' => true,
  'материца' => true,
  'проклети' => true,
  'силована' => true,
  'силовање' => true,
  'скитница' => true,
  'содомизе' => true,
  'содомија' => true,
  'схаггинг' => true,
  'схиттинг' => true,
  'тестицле' => true,
  'уринарно' => true,
  'фелцхинг' => true,
  'фуцкингс' => true,
  'хебефили' => true,
  'bradavica' => true,
  'drkadzijo' => true,
  'ejakulira' => true,
  'mazohista' => true,
  'picketina' => true,
  'silovanje' => true,
  'supcetina' => true,
  'zoofilija' => true,
  'брадавица' => true,
  'ендлöсунг' => true,
  'ејакулира' => true,
  'зоофилија' => true,
  'линчовање' => true,
  'мазохиста' => true,
  'масоцхист' => true,
  'пансеxуал' => true,
  'силоватељ' => true,
  'hebefilija' => true,
  'linčovanje' => true,
  'pedofilija' => true,
  'perverzija' => true,
  'silovatelj' => true,
  'амбисеxуал' => true,
  'амбосеxуал' => true,
  'ејацулатед' => true,
  'ејацулатес' => true,
  'инцестуоус' => true,
  'мастурбате' => true,
  'педофилија' => true,
  'перверзија' => true,
  'перверзњак' => true,
  'хебефилија' => true,
  'цоцксуцкер' => true,
  'ejakulacija' => true,
  'ejakulacije' => true,
  'ejakulirano' => true,
  'hebefiličar' => true,
  'masturbiram' => true,
  'masturbirao' => true,
  'nimfomanija' => true,
  'penetracija' => true,
  'perverznjak' => true,
  'prostitutka' => true,
  'ејакулација' => true,
  'ејакулације' => true,
  'ејакулирано' => true,
  'мастурбирам' => true,
  'мастурбирао' => true,
  'нимфоманија' => true,
  'пенетрација' => true,
  'проститутка' => true,
  'хебефиличар' => true,
  'цуниллингус' => true,
  'цуннилингус' => true,
  'bestijalnost' => true,
  'ejakulirajte' => true,
  'masturbacije' => true,
  'pornografija' => true,
  'sodomizovano' => true,
  'бестијалност' => true,
  'ејакулирајте' => true,
  'мастурбације' => true,
  'порнографија' => true,
  'содомизовано' => true,
  'ejakulirajući' => true,
  'spermatozoidi' => true,
  'ејакулирајући' => true,
  'сперматозоиди' => true,
  'akrotomofilija' => true,
  'акротомофилија' => true,
  'ambiseksualnost' => true,
  'амбисексуалност' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'djubre',
      1 => 'jedno',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'djubre' => 1,
      'jedno' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duckaj',
      1 => 'ga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'duckaj' => 1,
      'ga' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dudlaj',
      1 => 'ga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dudlaj' => 1,
      'ga' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duvaj',
      1 => 'ga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'duvaj' => 1,
      'ga' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'entarte',
      1 => 'kunst',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'entarte' => 1,
      'kunst' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'govno',
      1 => 'yedno',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'govno' => 1,
      'yedno' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hajl',
      1 => 'hitler',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hajl' => 1,
      'hitler' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jando',
      1 => 'kar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jando' => 1,
      'kar' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jando',
      1 => 'pele',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jando' => 1,
      'pele' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebi',
      1 => 'ga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebi' => 1,
      'ga' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebi',
      1 => 'se',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebi' => 1,
      'se' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jedi',
      1 => 'kurac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jedi' => 1,
      'kurac' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurac',
      1 => 'sir',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kurac' => 1,
      'sir' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurafte',
      1 => 'dija',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kurafte' => 1,
      'dija' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurafte',
      1 => 'ming',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kurafte' => 1,
      'ming' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'majku',
      1 => 'picku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'majku' => 1,
      'picku' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamlaj',
      1 => 'ga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mamlaj' => 1,
      'ga' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'najebo',
      1 => 'si',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'najebo' => 1,
      'si' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'seri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ne' => 1,
      'seri' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'peecko',
      1 => 'smrdlyeeva',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'peecko' => 1,
      'smrdlyeeva' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pickin',
      1 => 'dim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pickin' => 1,
      'dim' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'picko',
      1 => 'jedna',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'picko' => 1,
      'jedna' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'picko',
      1 => 'rutava',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'picko' => 1,
      'rutava' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'picku',
      1 => 'majku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'picku' => 1,
      'majku' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popooshie',
      1 => 'kurchienoo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'popooshie' => 1,
      'kurchienoo' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popusi',
      1 => 'kurcinu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'popusi' => 1,
      'kurcinu' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pushie',
      1 => 'kurac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pushie' => 1,
      'kurac' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pusi',
      1 => 'kurac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pusi' => 1,
      'kurac' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'raspala',
      1 => 'droljo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'raspala' => 1,
      'droljo' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sise',
      1 => 'rob',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sise' => 1,
      'rob' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yebachu',
      1 => 'te',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yebachu' => 1,
      'te' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yebie',
      1 => 'se',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yebie' => 1,
      'se' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ентарте',
      1 => 'кунст',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ентарте' => 1,
      'кунст' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'к',
      1 => 'ратед',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'к' => 1,
      'ратед' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'кучкин',
      1 => 'син',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'кучкин' => 1,
      'син' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'псећи',
      1 => 'јебач',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'псећи' => 1,
      'јебач' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'сиег',
      1 => 'хеил',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'сиег' => 1,
      'хеил' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'фудге',
      1 => 'пацкер',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'фудге' => 1,
      'пацкер' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'царпет',
      1 => 'мунцхер',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'царпет' => 1,
      'мунцхер' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bog',
      1 => 'te',
      2 => 'jebo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bog' => 2,
      'te' => 1,
      'jebo' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dete',
      1 => 'ti',
      2 => 'jebem',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dete' => 2,
      'ti' => 1,
      'jebem' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'glup',
      1 => 'ko',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'glup' => 2,
      'ko' => 1,
      'kurac' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grob',
      1 => 'te',
      2 => 'jebo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'grob' => 2,
      'te' => 1,
      'jebo' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grom',
      1 => 'te',
      2 => 'spalio',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'grom' => 2,
      'te' => 1,
      'spalio' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'idi',
      1 => 'do',
      2 => 'djavola',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'idi' => 2,
      'do' => 1,
      'djavola' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'idi',
      1 => 'u',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'idi' => 2,
      'u' => 1,
      'kurac' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'izes',
      1 => 'mi',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'izes' => 2,
      'mi' => 1,
      'kurac' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'izes',
      1 => 'mi',
      2 => 'spermu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'izes' => 2,
      'mi' => 1,
      'spermu' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'izhoblujesh',
      1 => 'mi',
      2 => 'ga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'izhoblujesh' => 2,
      'mi' => 1,
      'ga' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebacu',
      1 => 'te',
      2 => 'loshe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebacu' => 2,
      'te' => 1,
      'loshe' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'mu',
      2 => 'miša',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'mu' => 1,
      'miša' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'usta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'te' => 1,
      'usta' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'familiju',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'familiju' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'lebac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'lebac' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'majku',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'majku' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mamicu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'mamicu' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mater',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'mater' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'nebo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'nebo' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'poreklo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'poreklo' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'sušu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'sušu' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'usta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'usta' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'zivot',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'zivot' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'zoru',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'zoru' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'mater',
      2 => 'svoju',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'mater' => 1,
      'svoju' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'siljat',
      2 => 'kolac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'siljat' => 1,
      'kolac' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'isus',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'te' => 1,
      'isus' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'konj',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'te' => 1,
      'konj' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'otac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'te' => 1,
      'otac' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'patak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'te' => 1,
      'patak' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'krv',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'ti' => 1,
      'krv' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebote',
      1 => 'u',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebote' => 2,
      'u' => 1,
      'kurac' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jedi',
      1 => 'govna',
      2 => 'muljava',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jedi' => 2,
      'govna' => 1,
      'muljava' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'krv',
      1 => 'ti',
      2 => 'jebem',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'krv' => 2,
      'ti' => 1,
      'jebem' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurac',
      1 => 'od',
      2 => 'ovce',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kurac' => 2,
      'od' => 1,
      'ovce' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurafte',
      1 => 'mulo',
      2 => 'kokalo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kurafte' => 2,
      'mulo' => 1,
      'kokalo' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'libo',
      1 => 'me',
      2 => 'ckura',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'libo' => 2,
      'me' => 1,
      'ckura' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamu',
      1 => 'ti',
      2 => 'jebem',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mamu' => 2,
      'ti' => 1,
      'jebem' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nanu',
      1 => 'ti',
      2 => 'jebem',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nanu' => 2,
      'ti' => 1,
      'jebem' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'sviraj',
      2 => 'kurcu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ne' => 2,
      'sviraj' => 1,
      'kurcu' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oližeš',
      1 => 'mi',
      2 => 'jaja',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'oližeš' => 2,
      'mi' => 1,
      'jaja' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'opalim',
      1 => 'te',
      2 => 'golim',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'opalim' => 2,
      'te' => 1,
      'golim' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pichku',
      1 => 'te',
      2 => 'mater',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pichku' => 2,
      'te' => 1,
      'mater' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'picku',
      1 => 'ti',
      2 => 'mater',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'picku' => 2,
      'ti' => 1,
      'mater' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'ti',
      2 => 'materina',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 2,
      'ti' => 1,
      'materina' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pojedi',
      1 => 'govna',
      2 => 'seratoru',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pojedi' => 2,
      'govna' => 1,
      'seratoru' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popushish',
      1 => 'mi',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'popushish' => 2,
      'mi' => 1,
      'kurac' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'posaftash',
      1 => 'mi',
      2 => 'dzamutku',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'posaftash' => 2,
      'mi' => 1,
      'dzamutku' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sajsi',
      1 => 'ga',
      2 => 'loma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sajsi' => 2,
      'ga' => 1,
      'loma' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trnu',
      1 => 'mi',
      2 => 'jajca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'trnu' => 2,
      'mi' => 1,
      'jajca' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuchkash',
      1 => 'li',
      2 => 'ga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuchkash' => 2,
      'li' => 1,
      'ga' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yebeni',
      1 => 'kuchkin',
      2 => 'sin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yebeni' => 2,
      'kuchkin' => 1,
      'sin' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'мéнаге',
      1 => 'à',
      2 => 'троис',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'мéнаге' => 2,
      'à' => 1,
      'троис' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ides',
      2 => 'u',
      3 => 'kurac',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'ides' => 2,
      'u' => 1,
      'kurac' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dabogda',
      1 => 'komsiji',
      2 => 'crkla',
      3 => 'krava',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'dabogda' => 3,
      'komsiji' => 2,
      'crkla' => 1,
      'krava' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'idi',
      1 => 'u',
      2 => 'picku',
      3 => 'materinu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'idi' => 3,
      'u' => 2,
      'picku' => 1,
      'materinu' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'pas',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'pas' => 1,
      'mater' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'u',
      3 => 'kurac',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'te' => 2,
      'u' => 1,
      'kurac' => 0,
    ),
  ),
  97 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'u',
      3 => 'mozak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'te' => 2,
      'u' => 1,
      'mozak' => 0,
    ),
  ),
  98 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'u',
      3 => 'usta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'te' => 2,
      'u' => 1,
      'usta' => 0,
    ),
  ),
  99 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'crkvena',
      3 => 'vrata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'crkvena' => 1,
      'vrata' => 0,
    ),
  ),
  100 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'decu',
      3 => 'retardiranu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'decu' => 1,
      'retardiranu' => 0,
    ),
  ),
  101 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'dete',
      3 => 'neokupano',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'dete' => 1,
      'neokupano' => 0,
    ),
  ),
  102 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'detetovo',
      3 => 'dete',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'detetovo' => 1,
      'dete' => 0,
    ),
  ),
  103 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'familiju',
      3 => 'cigansku',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'familiju' => 1,
      'cigansku' => 0,
    ),
  ),
  104 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'jetru',
      3 => 'krvavu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'jetru' => 1,
      'krvavu' => 0,
    ),
  ),
  105 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'krvavu',
      3 => 'majku',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'krvavu' => 1,
      'majku' => 0,
    ),
  ),
  106 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'kucni',
      3 => 'prag',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'kucni' => 1,
      'prag' => 0,
    ),
  ),
  107 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'lebac',
      3 => 'krvavi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'lebac' => 1,
      'krvavi' => 0,
    ),
  ),
  108 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'majku',
      3 => 'krvavu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'majku' => 1,
      'krvavu' => 0,
    ),
  ),
  109 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'majku',
      3 => 'pizdalizec',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'majku' => 1,
      'pizdalizec' => 0,
    ),
  ),
  110 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mater',
      3 => 'nenormalnu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'mater' => 1,
      'nenormalnu' => 0,
    ),
  ),
  111 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'nerodjeno',
      3 => 'dete',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'nerodjeno' => 1,
      'dete' => 0,
    ),
  ),
  112 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'seme',
      3 => 'krvavo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'seme' => 1,
      'krvavo' => 0,
    ),
  ),
  113 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'slavski',
      3 => 'kolac',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'slavski' => 1,
      'kolac' => 0,
    ),
  ),
  114 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'sto',
      3 => 'majki',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'sto' => 1,
      'majki' => 0,
    ),
  ),
  115 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'sunce',
      3 => 'kalajisano',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'sunce' => 1,
      'kalajisano' => 0,
    ),
  ),
  116 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'sunce',
      3 => 'krvavo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'sunce' => 1,
      'krvavo' => 0,
    ),
  ),
  117 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'otac',
      3 => 'ludi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'te' => 2,
      'otac' => 1,
      'ludi' => 0,
    ),
  ),
  118 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'nos',
      3 => 'govno',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'nos' => 1,
      'govno' => 0,
    ),
  ),
  119 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'otac',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'otac' => 1,
      'mater' => 0,
    ),
  ),
  120 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'svoga',
      3 => 'mali',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'svoga' => 1,
      'mali' => 0,
    ),
  ),
  121 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jedi',
      1 => 'govna',
      2 => 'od',
      3 => 'ovna',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jedi' => 3,
      'govna' => 2,
      'od' => 1,
      'ovna' => 0,
    ),
  ),
  122 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jedi',
      1 => 'muda',
      2 => 'ciganska',
      3 => 'dlakava',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jedi' => 3,
      'muda' => 2,
      'ciganska' => 1,
      'dlakava' => 0,
    ),
  ),
  123 => 
  array (
    'badPhrase' => 
    array (
      0 => 'krv',
      1 => 'ti',
      2 => 'majcinu',
      3 => 'jebem',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'krv' => 3,
      'ti' => 2,
      'majcinu' => 1,
      'jebem' => 0,
    ),
  ),
  124 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mame',
      1 => 'ti',
      2 => 'ga',
      3 => 'iznabutam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mame' => 3,
      'ti' => 2,
      'ga' => 1,
      'iznabutam' => 0,
    ),
  ),
  125 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mrsh',
      1 => 'u',
      2 => 'pichku',
      3 => 'materinu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mrsh' => 3,
      'u' => 2,
      'pichku' => 1,
      'materinu' => 0,
    ),
  ),
  126 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mrtvu',
      1 => 'ti',
      2 => 'majku',
      3 => 'jebem',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mrtvu' => 3,
      'ti' => 2,
      'majku' => 1,
      'jebem' => 0,
    ),
  ),
  127 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muda',
      1 => 'mi',
      2 => 'se',
      3 => 'napasesh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'muda' => 3,
      'mi' => 2,
      'se' => 1,
      'napasesh' => 0,
    ),
  ),
  128 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'kurac',
      2 => 'te',
      3 => 'nasadim',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'kurac' => 2,
      'te' => 1,
      'nasadim' => 0,
    ),
  ),
  129 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'kurcu',
      2 => 'te',
      3 => 'nosam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'kurcu' => 2,
      'te' => 1,
      'nosam' => 0,
    ),
  ),
  130 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nabijem',
      1 => 'te',
      2 => 'na',
      3 => 'kurac',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nabijem' => 3,
      'te' => 2,
      'na' => 1,
      'kurac' => 0,
    ),
  ),
  131 => 
  array (
    'badPhrase' => 
    array (
      0 => 'napasi',
      1 => 'mi',
      2 => 'se',
      3 => 'jaja',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'napasi' => 3,
      'mi' => 2,
      'se' => 1,
      'jaja' => 0,
    ),
  ),
  132 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nataknem',
      1 => 'te',
      2 => 'na',
      3 => 'ckura',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nataknem' => 3,
      'te' => 2,
      'na' => 1,
      'ckura' => 0,
    ),
  ),
  133 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ode',
      1 => 'sve',
      2 => 'u',
      3 => 'kurac',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ode' => 3,
      'sve' => 2,
      'u' => 1,
      'kurac' => 0,
    ),
  ),
  134 => 
  array (
    'badPhrase' => 
    array (
      0 => 'picka',
      1 => 'ti',
      2 => 'se',
      3 => 'ogadila',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'picka' => 3,
      'ti' => 2,
      'se' => 1,
      'ogadila' => 0,
    ),
  ),
  135 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'ti',
      2 => 'kurvina',
      3 => 'materina',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 3,
      'ti' => 2,
      'kurvina' => 1,
      'materina' => 0,
    ),
  ),
  136 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popusis',
      1 => 'mi',
      2 => 'kurac',
      3 => 'krasni',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'popusis' => 3,
      'mi' => 2,
      'kurac' => 1,
      'krasni' => 0,
    ),
  ),
  137 => 
  array (
    'badPhrase' => 
    array (
      0 => 'samo',
      1 => 'smrt',
      2 => 'spasava',
      3 => 'srbiju',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'samo' => 3,
      'smrt' => 2,
      'spasava' => 1,
      'srbiju' => 0,
    ),
  ),
  138 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sednes',
      1 => 'mi',
      2 => 'na',
      3 => 'moj',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sednes' => 3,
      'mi' => 2,
      'na' => 1,
      'moj' => 0,
    ),
  ),
  139 => 
  array (
    'badPhrase' => 
    array (
      0 => 'spalim',
      1 => 'ti',
      2 => 'ga',
      3 => 'majke',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'spalim' => 3,
      'ti' => 2,
      'ga' => 1,
      'majke' => 0,
    ),
  ),
  140 => 
  array (
    'badPhrase' => 
    array (
      0 => 'steram',
      1 => 'ti',
      2 => 'ga',
      3 => 'majci',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'steram' => 3,
      'ti' => 2,
      'ga' => 1,
      'majci' => 0,
    ),
  ),
  141 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sunce',
      1 => 'te',
      2 => 'ne',
      3 => 'grejalo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sunce' => 3,
      'te' => 2,
      'ne' => 1,
      'grejalo' => 0,
    ),
  ),
  142 => 
  array (
    'badPhrase' => 
    array (
      0 => 'svrshim',
      1 => 'ti',
      2 => 'u',
      3 => 'pupak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'svrshim' => 3,
      'ti' => 2,
      'u' => 1,
      'pupak' => 0,
    ),
  ),
  143 => 
  array (
    'badPhrase' => 
    array (
      0 => 'u',
      1 => 'dupe',
      2 => 'te',
      3 => 'jebem',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'u' => 3,
      'dupe' => 2,
      'te' => 1,
      'jebem' => 0,
    ),
  ),
  144 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yehboh',
      1 => 'te',
      2 => 'pahs',
      3 => 'mahtehr',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'yehboh' => 3,
      'te' => 2,
      'pahs' => 1,
      'mahtehr' => 0,
    ),
  ),
  145 => 
  array (
    'badPhrase' => 
    array (
      0 => 'izdrkam',
      1 => 'ti',
      2 => 'se',
      3 => 'u',
      4 => 'usta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'izdrkam' => 4,
      'ti' => 3,
      'se' => 2,
      'u' => 1,
      'usta' => 0,
    ),
  ),
  146 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebacu',
      1 => 'ti',
      2 => 'sunce',
      3 => 'iz',
      4 => 'neba',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebacu' => 4,
      'ti' => 3,
      'sunce' => 2,
      'iz' => 1,
      'neba' => 0,
    ),
  ),
  147 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'li',
      2 => 'ti',
      3 => 'sunce',
      4 => 'zarko',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'li' => 3,
      'ti' => 2,
      'sunce' => 1,
      'zarko' => 0,
    ),
  ),
  148 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'u',
      3 => 'dzepove',
      4 => 'krvave',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'te' => 3,
      'u' => 2,
      'dzepove' => 1,
      'krvave' => 0,
    ),
  ),
  149 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'u',
      3 => 'glavu',
      4 => 'ãâuntavu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'te' => 3,
      'u' => 2,
      'glavu' => 1,
      'ãâuntavu' => 0,
    ),
  ),
  150 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'u',
      3 => 'usta',
      4 => 'grbava',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'te' => 3,
      'u' => 2,
      'usta' => 1,
      'grbava' => 0,
    ),
  ),
  151 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'drsku',
      3 => 'od',
      4 => 'tave',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'drsku' => 2,
      'od' => 1,
      'tave' => 0,
    ),
  ),
  152 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'majku',
      3 => 'kurvu',
      4 => 'prostitutku',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'majku' => 2,
      'kurvu' => 1,
      'prostitutku' => 0,
    ),
  ),
  153 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'seme',
      3 => 'i',
      4 => 'pleme',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'seme' => 2,
      'i' => 1,
      'pleme' => 0,
    ),
  ),
  154 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'sestru',
      3 => 'u',
      4 => 'picku',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'sestru' => 2,
      'u' => 1,
      'picku' => 0,
    ),
  ),
  155 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'si',
      2 => 'jeza',
      3 => 'u',
      4 => 'ledja',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 4,
      'si' => 3,
      'jeza' => 2,
      'u' => 1,
      'ledja' => 0,
    ),
  ),
  156 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'ko',
      3 => 'te',
      4 => 'dade',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 4,
      'te' => 1,
      'ko' => 2,
      'dade' => 0,
    ),
  ),
  157 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'ko',
      3 => 'te',
      4 => 'poslo',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 4,
      'te' => 1,
      'ko' => 2,
      'poslo' => 0,
    ),
  ),
  158 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'ja',
      3 => 'pas',
      4 => 'mater',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 4,
      'ti' => 3,
      'ja' => 2,
      'pas' => 1,
      'mater' => 0,
    ),
  ),
  159 => 
  array (
    'badPhrase' => 
    array (
      0 => 'karam',
      1 => 'te',
      2 => 'dok',
      3 => 'ne',
      4 => 'umres',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'karam' => 4,
      'te' => 3,
      'dok' => 2,
      'ne' => 1,
      'umres' => 0,
    ),
  ),
  160 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nabodem',
      1 => 'ti',
      2 => 'devojku',
      3 => 'na',
      4 => 'kurcinu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'nabodem' => 4,
      'ti' => 3,
      'devojku' => 2,
      'na' => 1,
      'kurcinu' => 0,
    ),
  ),
  161 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oca',
      1 => 'ti',
      2 => 'jebem',
      3 => 'u',
      4 => 'dupe',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'oca' => 4,
      'ti' => 3,
      'jebem' => 2,
      'u' => 1,
      'dupe' => 0,
    ),
  ),
  162 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otac',
      1 => 'ti',
      2 => 'je',
      3 => 'debilcina',
      4 => 'bolesna',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'otac' => 4,
      'ti' => 3,
      'je' => 2,
      'debilcina' => 1,
      'bolesna' => 0,
    ),
  ),
  163 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popisam',
      1 => 'ti',
      2 => 'se',
      3 => 'na',
      4 => 'drzavu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'popisam' => 4,
      'ti' => 3,
      'se' => 2,
      'na' => 1,
      'drzavu' => 0,
    ),
  ),
  164 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popisam',
      1 => 'ti',
      2 => 'se',
      3 => 'na',
      4 => 'to',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'popisam' => 4,
      'ti' => 3,
      'se' => 2,
      'na' => 1,
      'to' => 0,
    ),
  ),
  165 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poserem',
      1 => 'ti',
      2 => 'se',
      3 => 'u',
      4 => 'ruku',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'poserem' => 4,
      'ti' => 3,
      'se' => 2,
      'u' => 1,
      'ruku' => 0,
    ),
  ),
  166 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poserem',
      1 => 'ti',
      2 => 'se',
      3 => 'u',
      4 => 'usta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'poserem' => 4,
      'ti' => 3,
      'se' => 2,
      'u' => 1,
      'usta' => 0,
    ),
  ),
  167 => 
  array (
    'badPhrase' => 
    array (
      0 => 'serem',
      1 => 'ti',
      2 => 'se',
      3 => 'u',
      4 => 'carapu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'serem' => 4,
      'ti' => 3,
      'se' => 2,
      'u' => 1,
      'carapu' => 0,
    ),
  ),
  168 => 
  array (
    'badPhrase' => 
    array (
      0 => 'serem',
      1 => 'ti',
      2 => 'se',
      3 => 'u',
      4 => 'drzavu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'serem' => 4,
      'ti' => 3,
      'se' => 2,
      'u' => 1,
      'drzavu' => 0,
    ),
  ),
  169 => 
  array (
    'badPhrase' => 
    array (
      0 => 'serem',
      1 => 'ti',
      2 => 'se',
      3 => 'u',
      4 => 'usta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'serem' => 4,
      'ti' => 3,
      'se' => 2,
      'u' => 1,
      'usta' => 0,
    ),
  ),
  170 => 
  array (
    'badPhrase' => 
    array (
      0 => 'serem',
      1 => 'ti',
      2 => 'se',
      3 => 'za',
      4 => 'vrat',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'serem' => 4,
      'ti' => 3,
      'se' => 2,
      'za' => 1,
      'vrat' => 0,
    ),
  ),
  171 => 
  array (
    'badPhrase' => 
    array (
      0 => 'u',
      1 => 'bulju',
      2 => 'ti',
      3 => 'ga',
      4 => 'zaboravim',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'u' => 4,
      'bulju' => 3,
      'ti' => 2,
      'ga' => 1,
      'zaboravim' => 0,
    ),
  ),
  172 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dabogda',
      1 => 'ti',
      2 => 'majka',
      3 => 'prdnula',
      4 => 'na',
      5 => 'roditeljskom',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'dabogda' => 5,
      'ti' => 4,
      'majka' => 3,
      'prdnula' => 2,
      'na' => 1,
      'roditeljskom' => 0,
    ),
  ),
  173 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'tecu',
      3 => 'u',
      4 => 'dlakavu',
      5 => 'nosinu',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 5,
      'ti' => 4,
      'tecu' => 3,
      'u' => 2,
      'dlakavu' => 1,
      'nosinu' => 0,
    ),
  ),
  174 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'onaj',
      3 => 'ko',
      4 => 'te',
      5 => 'napravio',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 5,
      'te' => 1,
      'onaj' => 3,
      'ko' => 2,
      'napravio' => 0,
    ),
  ),
  175 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'onaj',
      3 => 'sto',
      4 => 'te',
      5 => 'gleda',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 5,
      'te' => 1,
      'onaj' => 3,
      'sto' => 2,
      'gleda' => 0,
    ),
  ),
  176 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'li',
      2 => 'ti',
      3 => 'mleko',
      4 => 'kojim',
      5 => 'si',
      6 => 'zadojen',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 6,
      'li' => 5,
      'ti' => 4,
      'mleko' => 3,
      'kojim' => 2,
      'si' => 1,
      'zadojen' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 177;

