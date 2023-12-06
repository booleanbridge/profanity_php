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
  'bum' => true,
  'cum' => true,
  'fag' => true,
  'anal' => true,
  'butt' => true,
  'cipa' => true,
  'cunt' => true,
  'dick' => true,
  'dink' => true,
  'dyke' => true,
  'fuck' => true,
  'hewu' => true,
  'nazi' => true,
  'piss' => true,
  'porn' => true,
  'shag' => true,
  'shit' => true,
  'slut' => true,
  'smut' => true,
  'tits' => true,
  'titt' => true,
  'wang' => true,
  'wank' => true,
  'bamba' => true,
  'chink' => true,
  'duche' => true,
  'fagot' => true,
  'fanny' => true,
  'fucks' => true,
  'iboob' => true,
  'icoon' => true,
  'ikock' => true,
  'ipube' => true,
  'iturd' => true,
  'igazi' => true,
  'ipeni' => true,
  'linda' => true,
  'porno' => true,
  'shite' => true,
  'shits' => true,
  'skank' => true,
  'sluts' => true,
  'udoti' => true,
  'bollok' => true,
  'flange' => true,
  'fucked' => true,
  'fucker' => true,
  'ibitch' => true,
  'idildo' => true,
  'ihorny' => true,
  'ipussy' => true,
  'ispunk' => true,
  'ibhola' => true,
  'iqhude' => true,
  'nigger' => true,
  'shitty' => true,
  'smegma' => true,
  'thinta' => true,
  'ukuthi' => true,
  'uthuvi' => true,
  'amabele' => true,
  'amalabi' => true,
  'bellend' => true,
  'fuckers' => true,
  'fucking' => true,
  'goddamn' => true,
  'ibuceta' => true,
  'iorgasm' => true,
  'ipecker' => true,
  'ipisser' => true,
  'irectum' => true,
  'isadist' => true,
  'iviagra' => true,
  'iphoswe' => true,
  'isifebe' => true,
  'isihogo' => true,
  'isineke' => true,
  'niggers' => true,
  'shitted' => true,
  'ubulili' => true,
  'ukufisa' => true,
  'ukujula' => true,
  'ukuqeda' => true,
  'amaboobs' => true,
  'amacocks' => true,
  'amabhola' => true,
  'fellatio' => true,
  'fuckings' => true,
  'iasshole' => true,
  'iblowjob' => true,
  'icumshot' => true,
  'ijerkoff' => true,
  'iorgasim' => true,
  'iscrotum' => true,
  'ishemale' => true,
  'isihloko' => true,
  'isikhala' => true,
  'isilwane' => true,
  'shitting' => true,
  'ukubamba' => true,
  'ukugubha' => true,
  'ukuhleka' => true,
  'ukuphoqa' => true,
  'ukuphosa' => true,
  'amadildos' => true,
  'amapisses' => true,
  'amafagots' => true,
  'iclitoris' => true,
  'itesticle' => true,
  'imbongolo' => true,
  'ukujibula' => true,
  'amabitches' => true,
  'amaorgasms' => true,
  'amapussies' => true,
  'ejaculated' => true,
  'ejaculates' => true,
  'iejaculate' => true,
  'imasochist' => true,
  'injafucker' => true,
  'ukukhanuka' => true,
  'amaassholes' => true,
  'cunillingus' => true,
  'ejaculating' => true,
  'icocksucker' => true,
  'izimbongolo' => true,
  'umdlwenguli' => true,
  'ukudlwengula' => true,
  'indodanaofabitch' => true,
  'unkulunkuluwehlisiwe' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'icarpet',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'icarpet' => 1,
      'muncher' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ifudge',
      1 => 'packer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ifudge' => 1,
      'packer' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ukukhipha',
      1 => 'isisu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ukukhipha' => 1,
      'isisu' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ukushaya',
      1 => 'indlwabu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ukushaya' => 1,
      'indlwabu' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'ulinganisiwe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'ulinganisiwe' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'awu',
      1 => 'hambe',
      2 => 'la',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'awu' => 2,
      'hambe' => 1,
      'la' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'izithombe',
      1 => 'zobulili',
      2 => 'ezingcolile',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'izithombe' => 2,
      'zobulili' => 1,
      'ezingcolile' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 7;

