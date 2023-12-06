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
  'ஓத' => true,
  'ஊபு' => true,
  'ஊமல' => true,
  'ஓலு' => true,
  'கேன' => true,
  'kaai' => true,
  'kena' => true,
  'naii' => true,
  'oolu' => true,
  'otha' => true,
  'கூதி' => true,
  'பாடு' => true,
  'பூலே' => true,
  'baadu' => true,
  'gotha' => true,
  'kanji' => true,
  'kundi' => true,
  'kunju' => true,
  'molai' => true,
  'oobhu' => true,
  'pochu' => true,
  'poole' => true,
  'punda' => true,
  'sunni' => true,
  'கோத்த' => true,
  'chunni' => true,
  'erumbu' => true,
  'kadiki' => true,
  'koodhi' => true,
  'mayire' => true,
  'oomala' => true,
  'குஞ்சு' => true,
  'சுன்னி' => true,
  'தையொலி' => true,
  'புண்டை' => true,
  'போச்சு' => true,
  'ஓதாளக்க' => true,
  'தேவடியா' => true,
  'amarjith' => true,
  'kaluthae' => true,
  'kamnaati' => true,
  'pochandi' => true,
  'thaiyoli' => true,
  'thevdiya' => true,
  'தேவுடியா' => true,
  'புண்டரணி' => true,
  'kandaloli' => true,
  'othalakka' => true,
  'pundarani' => true,
  'கண்டாலொழி' => true,
  'கம்னாட்டி' => true,
  'போச்சண்டி' => true,
  'mollamaari' => true,
  'pundanakki' => true,
  'savugraaki' => true,
  'thaevudiya' => true,
  'சவுக்கிராகி' => true,
  'புண்டைனாக்கி' => true,
  'ungathaalaokku' => true,
  'உங்காத்தாலவ்க்கு' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alugina',
      1 => 'papali',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alugina' => 1,
      'papali' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anaathai',
      1 => 'kaluthai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anaathai' => 1,
      'kaluthai' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'auvusaari',
      1 => 'koodi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'auvusaari' => 1,
      'koodi' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avuthu',
      1 => 'kami',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'avuthu' => 1,
      'kami' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blousei',
      1 => 'thukkudy',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blousei' => 1,
      'thukkudy' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gajak',
      1 => 'kol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gajak' => 1,
      'kol' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hakka',
      1 => 'kudi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hakka' => 1,
      'kudi' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kala',
      1 => 'viridi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kala' => 1,
      'viridi' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kalai',
      1 => 'viridi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kalai' => 1,
      'viridi' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kalati',
      1 => 'podri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kalati' => 1,
      'podri' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kandaara',
      1 => 'oli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kandaara' => 1,
      'oli' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'karum',
      1 => 'pundai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'karum' => 1,
      'pundai' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'keeshan',
      1 => 'appa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'keeshan' => 1,
      'appa' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ki',
      1 => 'adi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ki' => 1,
      'adi' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koothi',
      1 => 'mayir',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koothi' => 1,
      'mayir' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koothi',
      1 => 'nuckie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koothi' => 1,
      'nuckie' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunja',
      1 => 'thingira',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kunja' => 1,
      'thingira' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunji',
      1 => 'payalae',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kunji' => 1,
      'payalae' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mairu',
      1 => 'pudungi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mairu' => 1,
      'pudungi' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mayiru',
      1 => 'poodunghi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mayiru' => 1,
      'poodunghi' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mola',
      1 => 'sappi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mola' => 1,
      'sappi' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'monna',
      1 => 'naaye',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'monna' => 1,
      'naaye' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mukree',
      1 => 'chodho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mukree' => 1,
      'chodho' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'munda',
      1 => 'kalappai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'munda' => 1,
      'kalappai' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'munni',
      1 => 'thalai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'munni' => 1,
      'thalai' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'narum',
      1 => 'pundai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'narum' => 1,
      'pundai' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'arivu',
      1 => 'ketta',
      2 => 'koothi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'arivu' => 2,
      'ketta' => 1,
      'koothi' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blue',
      1 => 'satta',
      2 => 'maran',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'blue' => 2,
      'satta' => 1,
      'maran' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ennoda',
      1 => 'poola',
      2 => 'oombuda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ennoda' => 2,
      'poola' => 1,
      'oombuda' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'karung',
      1 => 'kuthi',
      2 => 'mavale',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'karung' => 2,
      'kuthi' => 1,
      'mavale' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuthi',
      1 => 'kolutha',
      2 => 'thevdia',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kuthi' => 2,
      'kolutha' => 1,
      'thevdia' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuthia',
      1 => 'virikira',
      2 => 'thevdia',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kuthia' => 2,
      'virikira' => 1,
      'thevdia' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'malayalathan',
      1 => 'atha',
      2 => 'oli',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'malayalathan' => 2,
      'atha' => 1,
      'oli' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naara',
      1 => 'kudhi',
      2 => 'pethadha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'naara' => 2,
      'kudhi' => 1,
      'pethadha' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'akkula',
      1 => 'thukki',
      2 => 'kami',
      3 => 'di',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'akkula' => 3,
      'thukki' => 2,
      'kami' => 1,
      'di' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'arippu',
      1 => 'edutha',
      2 => 'kuthi',
      3 => 'mavale',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'arippu' => 3,
      'edutha' => 2,
      'kuthi' => 1,
      'mavale' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'enna',
      1 => 'oombuda',
      2 => 'elvedutha',
      3 => 'koodi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'enna' => 3,
      'oombuda' => 2,
      'elvedutha' => 1,
      'koodi' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'molaikku',
      1 => 'naduvule',
      2 => 'uttu',
      3 => 'okka',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'molaikku' => 3,
      'naduvule' => 2,
      'uttu' => 1,
      'okka' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayee',
      1 => 'soothile',
      2 => 'un',
      3 => 'kunji',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nayee' => 3,
      'soothile' => 2,
      'un' => 1,
      'kunji' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuthi',
      1 => 'mudiya',
      2 => 'thadavi',
      3 => 'kami',
      4 => 'di',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'kuthi' => 4,
      'mudiya' => 3,
      'thadavi' => 2,
      'kami' => 1,
      'di' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'molaikku',
      1 => 'naduvule',
      2 => 'utu',
      3 => 'olu',
      4 => 'da',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'molaikku' => 4,
      'naduvule' => 3,
      'utu' => 2,
      'olu' => 1,
      'da' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nalla',
      1 => 'thukki',
      2 => 'kami',
      3 => 'di',
      4 => 'nara',
      5 => 'kuthia',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'nalla' => 5,
      'thukki' => 4,
      'kami' => 3,
      'di' => 2,
      'nara' => 1,
      'kuthia' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 42;

