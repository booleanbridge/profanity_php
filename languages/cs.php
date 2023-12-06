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
  'kok' => true,
  'mrd' => true,
  'prt' => true,
  'pyj' => true,
  'ser' => true,
  'sát' => true,
  'řiť' => true,
  'šuk' => true,
  'fela' => true,
  'fena' => true,
  'feny' => true,
  'hráz' => true,
  'kout' => true,
  'kozy' => true,
  'křik' => true,
  'negr' => true,
  'osel' => true,
  'osly' => true,
  'piča' => true,
  'prsa' => true,
  'píča' => true,
  'srát' => true,
  'sráč' => true,
  'vole' => true,
  'zmrd' => true,
  'žrát' => true,
  'buzna' => true,
  'chcát' => true,
  'chtíč' => true,
  'coura' => true,
  'debil' => true,
  'dildy' => true,
  'držka' => true,
  'děvka' => true,
  'fetiš' => true,
  'hajzl' => true,
  'hovno' => true,
  'jebat' => true,
  'kadit' => true,
  'kokot' => true,
  'koule' => true,
  'kripl' => true,
  'kunda' => true,
  'kurva' => true,
  'mamrd' => true,
  'mrdat' => true,
  'mrdka' => true,
  'negři' => true,
  'nymfa' => true,
  'orgie' => true,
  'peklo' => true,
  'pičus' => true,
  'prcat' => true,
  'prdel' => true,
  'pysky' => true,
  'píčus' => true,
  'ráfek' => true,
  'sakra' => true,
  'sraní' => true,
  'varle' => true,
  'voleh' => true,
  'zadek' => true,
  'čubka' => true,
  'čumět' => true,
  'čurat' => true,
  'čurák' => true,
  'čůrák' => true,
  'šukat' => true,
  'šulin' => true,
  'anální' => true,
  'batich' => true,
  'blbost' => true,
  'bordel' => true,
  'chcaní' => true,
  'churak' => true,
  'dement' => true,
  'dršťka' => true,
  'děloha' => true,
  'erekce' => true,
  'fagoty' => true,
  'felace' => true,
  'kohout' => true,
  'kraavo' => true,
  'kretén' => true,
  'krvavý' => true,
  'mezery' => true,
  'močení' => true,
  'mrdník' => true,
  'nahoru' => true,
  'nasrat' => true,
  'odvaha' => true,
  'otýpka' => true,
  'peecha' => true,
  'peehat' => true,
  'piicha' => true,
  'posrat' => true,
  'potrat' => true,
  'průser' => true,
  'píchat' => true,
  'rozeta' => true,
  'sodoma' => true,
  'sračka' => true,
  'vagína' => true,
  'vysrat' => true,
  'zasrat' => true,
  'zesrat' => true,
  'zkazit' => true,
  'zmrdat' => true,
  'zoofil' => true,
  'zprcat' => true,
  'zuřící' => true,
  'úryvek' => true,
  'šourek' => true,
  'šukání' => true,
  'bodnutí' => true,
  'chcanec' => true,
  'chcanky' => true,
  'flundra' => true,
  'imbecil' => true,
  'knoflík' => true,
  'kohouty' => true,
  'kouření' => true,
  'koòomrd' => true,
  'koňomrd' => true,
  'kreténi' => true,
  'kuřbuřt' => true,
  'nacista' => true,
  'odvážný' => true,
  'orgasmy' => true,
  'pedofil' => true,
  'pochcat' => true,
  'pohlaví' => true,
  'polykat' => true,
  'potraty' => true,
  'prdelka' => true,
  'příruba' => true,
  'sadista' => true,
  'sodomie' => true,
  'spermie' => true,
  'synovec' => true,
  'teplouš' => true,
  'trhnout' => true,
  'vyjebat' => true,
  'zasraný' => true,
  'zkurvit' => true,
  'šoustat' => true,
  'bradavka' => true,
  'buzerant' => true,
  'ejakulát' => true,
  'incestní' => true,
  'klitoris' => true,
  'knoflíky' => true,
  'kohoutek' => true,
  'kokotina' => true,
  'konečník' => true,
  'koniomrd' => true,
  'lynčovat' => true,
  'nadržený' => true,
  'naštvaný' => true,
  'násilník' => true,
  'orgasmus' => true,
  'pikantní' => true,
  'pitomost' => true,
  'pičovina' => true,
  'počínání' => true,
  'píčovina' => true,
  'sadismus' => true,
  'shinging' => true,
  'souložit' => true,
  'zajebaný' => true,
  'zkurvený' => true,
  'zoofilie' => true,
  'zpomalit' => true,
  'štěrbina' => true,
  'bestiální' => true,
  'ejakulace' => true,
  'ejakuluje' => true,
  'ejakuláty' => true,
  'hebefilie' => true,
  'hebefilní' => true,
  'ješitnost' => true,
  'lynčování' => true,
  'oslošoust' => true,
  'pedofilie' => true,
  'pedofilní' => true,
  'pesfucker' => true,
  'pronikání' => true,
  'showstaat' => true,
  'vybudovat' => true,
  'vypíčenec' => true,
  'zatraceně' => true,
  'zkurvysyn' => true,
  'znásilněn' => true,
  'bestialita' => true,
  'ejakulovat' => true,
  'hebefilové' => true,
  'masochista' => true,
  'masturbace' => true,
  'nacistický' => true,
  'nymfomanie' => true,
  'odprejskni' => true,
  'proniknout' => true,
  'rozkrojení' => true,
  'znásilnění' => true,
  'zvrácenost' => true,
  'šroubování' => true,
  'ejakulovaný' => true,
  'ejakulováno' => true,
  'ejakulující' => true,
  'kobercovník' => true,
  'masturbovat' => true,
  'pansexuální' => true,
  'pornografie' => true,
  'prostitutka' => true,
  'sodomizovat' => true,
  'ambisexuální' => true,
  'ambosexuální' => true,
  'bůhzatracený' => true,
  'masturbující' => true,
  'sodomizovaný' => true,
  'akrotomofilie' => true,
  'ambisexualita' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'do',
      1 => 'piče',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'do' => 1,
      'piče' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'do',
      1 => 'prdele',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'do' => 1,
      'prdele' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fuc',
      1 => 'ty',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fuc' => 1,
      'ty' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klovaný',
      1 => 'pták',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'klovaný' => 1,
      'pták' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'matka',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'matka' => 1,
      'fucker' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'močová',
      1 => 'trubice',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'močová' => 1,
      'trubice' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'v',
      1 => 'prdeli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'v' => 1,
      'prdeli' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'hodnocen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'hodnocen' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'řitní',
      1 => 'otvor',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'řitní' => 1,
      'otvor' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'biezh',
      1 => 'do',
      2 => 'haaye',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'biezh' => 2,
      'do' => 1,
      'haaye' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'di',
      1 => 'do',
      2 => 'hajzlu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'di' => 2,
      'do' => 1,
      'hajzlu' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jdi',
      1 => 'do',
      2 => 'prdele',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jdi' => 2,
      'do' => 1,
      'prdele' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'men',
      1 => 'are',
      2 => 'assholes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'men' => 2,
      'are' => 1,
      'assholes' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vyser',
      1 => 'si',
      2 => 'voko',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vyser' => 2,
      'si' => 1,
      'voko' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 14;

