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
  'кок' => true,
  'упп' => true,
  'хер' => true,
  'анус' => true,
  'аслы' => true,
  'блін' => true,
  'вана' => true,
  'дуче' => true,
  'жопа' => true,
  'кран' => true,
  'лохі' => true,
  'негр' => true,
  'пяны' => true,
  'ситэ' => true,
  'сука' => true,
  'сукі' => true,
  'сэкс' => true,
  'яйкі' => true,
  'янот' => true,
  'аборт' => true,
  'дамба' => true,
  'дзюбу' => true,
  'ебарь' => true,
  'ебать' => true,
  'кисок' => true,
  'мудак' => true,
  'негры' => true,
  'пекла' => true,
  'пеніс' => true,
  'пеўні' => true,
  'порна' => true,
  'похву' => true,
  'пісае' => true,
  'сцаць' => true,
  'труць' => true,
  'цыцкі' => true,
  'шлюха' => true,
  'яечка' => true,
  'аргазм' => true,
  'бусета' => true,
  'вульва' => true,
  'віягра' => true,
  'грудзі' => true,
  'дзярмо' => true,
  'дзінка' => true,
  'дурань' => true,
  'калоць' => true,
  'клітар' => true,
  'мінэту' => true,
  'нацыст' => true,
  'садыст' => true,
  'смегма' => true,
  'сперма' => true,
  'сраный' => true,
  'ссание' => true,
  'трахал' => true,
  'уколаў' => true,
  'фланец' => true,
  'чортаў' => true,
  'ўрваць' => true,
  'анальны' => true,
  'ананізм' => true,
  'аргазмы' => true,
  'вырадак' => true,
  'годзіць' => true,
  'дристун' => true,
  'задніца' => true,
  'какание' => true,
  'крывавы' => true,
  'махорка' => true,
  'мошонка' => true,
  'праклён' => true,
  'прыклад' => true,
  'підарам' => true,
  'рагавой' => true,
  'римминг' => true,
  'шапіках' => true,
  'эякулюе' => true,
  'эякулят' => true,
  'мазахіст' => true,
  'неахайны' => true,
  'педзікам' => true,
  'прыдуркі' => true,
  'піздзіць' => true,
  'скотства' => true,
  'фелляция' => true,
  'фельчинг' => true,
  'галавешка' => true,
  'мардаваць' => true,
  'распусныя' => true,
  'скуголіць' => true,
  'траскатня' => true,
  'трахаецца' => true,
  'усклікаць' => true,
  'эякуляцыя' => true,
  'юрлівасць' => true,
  'гвалтаўнік' => true,
  'запазненне' => true,
  'прыдуракоф' => true,
  'любацерпцаў' => true,
  'парнаграфія' => true,
  'згвалтаванне' => true,
  'кранпрысоска' => true,
  'мастурбаваць' => true,
  'транссэксуал' => true,
  'фалаімітатар' => true,
  'зашрубоўвання' => true,
  'фалаімітатары' => true,
  'сабаказасранец' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'асёл',
      1 => 'прыдурак',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'асёл' => 1,
      'прыдурак' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'бог',
      1 => 'праклятая',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'бог' => 1,
      'праклятая' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'дыван',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'дыван' => 1,
      'muncher' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'маці',
      1 => 'засранец',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'маці' => 1,
      'засранец' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'палавыя',
      1 => 'вусны',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'палавыя' => 1,
      'вусны' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'помадка',
      1 => 'пакер',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'помадка' => 1,
      'пакер' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'прамая',
      1 => 'кішка',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'прамая' => 1,
      'кішка' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'сын',
      1 => 'сукін',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'сын' => 1,
      'сукін' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'х',
      1 => 'па',
      2 => 'рэйтынгу',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'х' => 2,
      'па' => 1,
      'рэйтынгу' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 9;

