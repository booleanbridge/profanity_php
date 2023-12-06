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
  'bil' => true,
  'leg' => true,
  'með' => true,
  'tik' => true,
  'asna' => true,
  'hora' => true,
  'hani' => true,
  'hóra' => true,
  'klám' => true,
  'rass' => true,
  'skít' => true,
  'sæði' => true,
  'belja' => true,
  'dildó' => true,
  'eista' => true,
  'faggi' => true,
  'felga' => true,
  'flans' => true,
  'hanar' => true,
  'hugsa' => true,
  'kúkur' => true,
  'kúlur' => true,
  'mella' => true,
  'pabbi' => true,
  'pissa' => true,
  'reisa' => true,
  'reisn' => true,
  'sjúga' => true,
  'tussa' => true,
  'tíkur' => true,
  'þvagi' => true,
  'blóðug' => true,
  'dildós' => true,
  'eistum' => true,
  'gleypa' => true,
  'hnúðar' => true,
  'hnúður' => true,
  'hrifsa' => true,
  'komast' => true,
  'kynlíf' => true,
  'nauðga' => true,
  'orgíur' => true,
  'pungur' => true,
  'reiður' => true,
  'skrúfa' => true,
  'skítur' => true,
  'snípur' => true,
  'sáðlát' => true,
  'sódóma' => true,
  'typpið' => true,
  'aftökur' => true,
  'druslan' => true,
  'helvíti' => true,
  'hnykkur' => true,
  'hugaður' => true,
  'leggöng' => true,
  'nasisti' => true,
  'nauðgað' => true,
  'nauðgun' => true,
  'rassgat' => true,
  'rassinn' => true,
  'sadismi' => true,
  'sadisti' => true,
  'skotinu' => true,
  'sáðkorn' => true,
  'þvagrás' => true,
  'fjandinn' => true,
  'hóruungi' => true,
  'jerkburt' => true,
  'klitoris' => true,
  'nauðgari' => true,
  'vitleysa' => true,
  'öfuguggi' => true,
  'bastarður' => true,
  'bobbingar' => true,
  'dýrslegur' => true,
  'endaþarmi' => true,
  'endaþarms' => true,
  'geirvarta' => true,
  'gleðikona' => true,
  'guðdæmdur' => true,
  'innilegur' => true,
  'leggöngum' => true,
  'masókisti' => true,
  'munngælur' => true,
  'andskotinn' => true,
  'dýraníðing' => true,
  'nymfómanía' => true,
  'sifjaspell' => true,
  'tíkarsonur' => true,
  'endaþarmsop' => true,
  'fullnægingu' => true,
  'hanisogskál' => true,
  'ofsafenginn' => true,
  'sjálfselska' => true,
  'sjálfsfróun' => true,
  'dýraníðingur' => true,
  'fóstureyðing' => true,
  'hundurfucker' => true,
  'pankynhneigð' => true,
  'skarpskyggni' => true,
  'skepnuskapur' => true,
  'sonuraftíkur' => true,
  'tvíkynhneigð' => true,
  'þroskaheftur' => true,
  'barnaníðingur' => true,
  'fóstureyðingu' => true,
  'getnaðarlimur' => true,
  'fóstureyðingar' => true,
  'tvíkynhneigður' => true,
  'öfuguggaháttur' => true,
  'fóstureyðingasinni' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bj',
      1 => 'ni',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bj' => 1,
      'ni' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'david',
      1 => 'oddson',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'david' => 1,
      'oddson' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'drullu',
      1 => 'kunta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'drullu' => 1,
      'kunta' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ettu',
      1 => 'skit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ettu' => 1,
      'skit' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'f',
      1 => 'viti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'f' => 1,
      'viti' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fokkadu',
      1 => 'ther',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fokkadu' => 1,
      'ther' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'frussdrullandi',
      1 => 'apaeysta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'frussdrullandi' => 1,
      'apaeysta' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fudge',
      1 => 'pakki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fudge' => 1,
      'pakki' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'h',
      1 => 'lfviti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'h' => 1,
      'lfviti' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunntan',
      1 => 'thin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kunntan' => 1,
      'thin' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'modur',
      1 => 'ridill',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'modur' => 1,
      'ridill' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'móður',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'móður' => 1,
      'fucker' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sonur',
      1 => 'prumps',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sonur' => 1,
      'prumps' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'teppi',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'teppi' => 1,
      'muncher' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'hlutfall',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'hlutfall' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'horu',
      1 => 'drullan',
      2 => 'thin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'horu' => 2,
      'drullan' => 1,
      'thin' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'heill',
      1 => 'þér',
      2 => 'hitler',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'heill' => 2,
      'þér' => 1,
      'hitler' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kl',
      1 => 'm',
      2 => 'hundur',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kl' => 2,
      'm' => 1,
      'hundur' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vesalings',
      1 => 'svínið',
      2 => 'þitt',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vesalings' => 2,
      'svínið' => 1,
      'þitt' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'farðu',
      1 => 'að',
      2 => 'mjólka',
      3 => 'kú',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'farðu' => 3,
      'að' => 2,
      'mjólka' => 1,
      'kú' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'þú',
      1 => 'ert',
      2 => 'loðin',
      3 => 'górilla',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'þú' => 3,
      'ert' => 2,
      'loðin' => 1,
      'górilla' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hoppadu',
      1 => 'upp',
      2 => 'i',
      3 => 'rassgatid',
      4 => 'a',
      5 => 'ther',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'hoppadu' => 5,
      'upp' => 4,
      'i' => 3,
      'rassgatid' => 2,
      'a' => 1,
      'ther' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gleymdu',
      1 => 'því',
      2 => 'ég',
      3 => 'hleyp',
      4 => 'uppí',
      5 => 'rassgatið',
      6 => 'á',
      7 => 'þér',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'gleymdu' => 7,
      'því' => 6,
      'ég' => 5,
      'hleyp' => 4,
      'uppí' => 3,
      'rassgatið' => 2,
      'á' => 1,
      'þér' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 23;

