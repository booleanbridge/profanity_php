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
  'auka' => true,
  'blet' => true,
  'kalė' => true,
  'bybis' => true,
  'falas' => true,
  'gimda' => true,
  'kalės' => true,
  'kekše' => true,
  'myžti' => true,
  'nacių' => true,
  'nimfa' => true,
  'papai' => true,
  'šunys' => true,
  'šūdas' => true,
  'asilai' => true,
  'asilas' => true,
  'atstok' => true,
  'gaidys' => true,
  'išangė' => true,
  'kakoti' => true,
  'nuryti' => true,
  'orgija' => true,
  'prizai' => true,
  'rozetė' => true,
  'seksas' => true,
  'sodoma' => true,
  'tarpas' => true,
  'varpos' => true,
  'abortai' => true,
  'abortas' => true,
  'flanšas' => true,
  'gaudyti' => true,
  'geismas' => true,
  'gerkite' => true,
  'gerumas' => true,
  'išangės' => true,
  'kapšelį' => true,
  'krepšys' => true,
  'makštis' => true,
  'orgijos' => true,
  'pakimba' => true,
  'pylimas' => true,
  'stačias' => true,
  'sušikti' => true,
  'sėklidė' => true,
  'varputė' => true,
  'čiulpti' => true,
  'šiknius' => true,
  'šlaplės' => true,
  'žaizdos' => true,
  'žioplys' => true,
  'žudikai' => true,
  'abugelis' => true,
  'analinis' => true,
  'atsipisk' => true,
  'barakuda' => true,
  'bendrija' => true,
  'bletstva' => true,
  'egoizmas' => true,
  'erekcija' => true,
  'felacija' => true,
  'gaidžiai' => true,
  'hitleris' => true,
  'kapšelis' => true,
  'klitoris' => true,
  'kruvinas' => true,
  'krūtinės' => true,
  'makšties' => true,
  'nardymas' => true,
  'nustumta' => true,
  'nustumti' => true,
  'orgazmas' => true,
  'orgazmus' => true,
  'pedofilų' => true,
  'pragaras' => true,
  'pūlingas' => true,
  'raguotas' => true,
  'rankenos' => true,
  'rutuliai' => true,
  'sadistas' => true,
  'sadizmas' => true,
  'sodomija' => true,
  'spenẽlis' => true,
  'sėklidės' => true,
  'užkampis' => true,
  'zoofilas' => true,
  'įsukimas' => true,
  'šlapimas' => true,
  'atsiknisk' => true,
  'benkartas' => true,
  'bezdalius' => true,
  'dieviškas' => true,
  'hebefilai' => true,
  'kilimėlis' => true,
  'pakabinti' => true,
  'pakliuvom' => true,
  'plaktukas' => true,
  'rankenėlė' => true,
  'ratlankis' => true,
  'rimavimas' => true,
  'skverbtis' => true,
  'užpakalis' => true,
  'zoofilija' => true,
  'abortistas' => true,
  'apskretėlė' => true,
  'atsikabink' => true,
  'bybgrauzys' => true,
  'chiulpedra' => true,
  'geriausias' => true,
  'hebefilija' => true,
  'iškrypimas' => true,
  'iškrypėlis' => true,
  'pedofilija' => true,
  'prakeiktas' => true,
  'priedurnis' => true,
  'prostitutė' => true,
  'hebefilinis' => true,
  'kraujomaiša' => true,
  'masochistas' => true,
  'masturbuoti' => true,
  'priekvailis' => true,
  'siautėjimas' => true,
  'subingalvis' => true,
  'ejakuliacija' => true,
  'ejakuliuotas' => true,
  'išžagintojas' => true,
  'kraujomaišos' => true,
  'masturbacija' => true,
  'panseksualus' => true,
  'pornografija' => true,
  'shiknaskilea' => true,
  'sodomizuotas' => true,
  'ambiseksualus' => true,
  'amboseksualus' => true,
  'beebgrawzhees' => true,
  'ejakuliacijos' => true,
  'prasiskverbti' => true,
  'akrotomofilija' => true,
  'išprievartauta' => true,
  'prievartavimas' => true,
  'spermatozoidai' => true,
  'ambiseksualumas' => true,
  'masturbuojantis' => true,
  'prievartautojas' => true,
  'išprievartavimas' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'apsishik',
      1 => 'stachias',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'apsishik' => 1,
      'stachias' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bezdalu',
      1 => 'maishas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bezdalu' => 1,
      'maishas' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bibio',
      1 => 'galva',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bibio' => 1,
      'galva' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bletsva',
      1 => 'tu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bletsva' => 1,
      'tu' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bybi',
      1 => 'dejau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bybi' => 1,
      'dejau' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bybi',
      1 => 'nuvanok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bybi' => 1,
      'nuvanok' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chiulpk',
      1 => 'beebee',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chiulpk' => 1,
      'beebee' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ciulpk',
      1 => 'bybi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ciulpk' => 1,
      'bybi' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiesiosios',
      1 => 'žarnos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tiesiosios' => 1,
      'žarnos' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'įvertintas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'įvertintas' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'švelnus',
      1 => 'pakuotojas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'švelnus' => 1,
      'pakuotojas' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ciulpk',
      1 => 'byby',
      2 => 'kause',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ciulpk' => 2,
      'byby' => 1,
      'kause' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 12;

