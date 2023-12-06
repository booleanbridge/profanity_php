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
  'pet' => true,
  'asss' => true,
  'boig' => true,
  'cony' => true,
  'pits' => true,
  'racó' => true,
  'sexe' => true,
  'vora' => true,
  'úter' => true,
  'boles' => true,
  'brida' => true,
  'cabró' => true,
  'dique' => true,
  'fotet' => true,
  'gatet' => true,
  'gropa' => true,
  'mugró' => true,
  'nimfa' => true,
  'orgie' => true,
  'palla' => true,
  'picar' => true,
  'pixat' => true,
  'recte' => true,
  'sàdic' => true,
  'tetas' => true,
  'бобър' => true,
  'bolera' => true,
  'coques' => true,
  'culata' => true,
  'escrot' => true,
  'fallus' => true,
  'follat' => true,
  'folles' => true,
  'furiós' => true,
  'infern' => true,
  'linxar' => true,
  'llavis' => true,
  'mamada' => true,
  'orgien' => true,
  'picant' => true,
  'recony' => true,
  'roseta' => true,
  'sodoma' => true,
  'xuclar' => true,
  'zoòfil' => true,
  'aixecar' => true,
  'arrebat' => true,
  'canalla' => true,
  'collons' => true,
  'egoisme' => true,
  'ejacula' => true,
  'erecció' => true,
  'esperma' => true,
  'fetitxe' => true,
  'follant' => true,
  'lujuria' => true,
  'oreneta' => true,
  'orgasme' => true,
  'pedòfil' => true,
  'picades' => true,
  'sadisme' => true,
  'sagnant' => true,
  'sodomia' => true,
  'urinari' => true,
  'violada' => true,
  'котенце' => true,
  'abortion' => true,
  'asesinat' => true,
  'bisexuel' => true,
  'cabronas' => true,
  'cargolar' => true,
  'clítoris' => true,
  'ejacular' => true,
  'ejaculat' => true,
  'fellació' => true,
  'femelles' => true,
  'gallines' => true,
  'hebèfils' => true,
  'mossegar' => true,
  'mossegat' => true,
  'orgasmes' => true,
  'penetrar' => true,
  'retrocãs' => true,
  'violació' => true,
  'violador' => true,
  'zoofília' => true,
  'avortista' => true,
  'borratxos' => true,
  'correguda' => true,
  'ejaculant' => true,
  'estrebada' => true,
  'harnröhre' => true,
  'hebefília' => true,
  'hebefílic' => true,
  'incestuós' => true,
  'linxament' => true,
  'pedofília' => true,
  'perversió' => true,
  'pervertir' => true,
  'pervertit' => true,
  'abortuaris' => true,
  'avortament' => true,
  'consolador' => true,
  'ejaculació' => true,
  'masoquista' => true,
  'masturbant' => true,
  'nimfomania' => true,
  'penetració' => true,
  'sodomitzar' => true,
  'sodomitzat' => true,
  'bestialitat' => true,
  'consoladors' => true,
  'escuradents' => true,
  'masturbació' => true,
  'masturbarse' => true,
  'pornografia' => true,
  'ejaculacions' => true,
  'galletejador' => true,
  'acrotomofília' => true,
  'pansexualität' => true,
  'ambisexualitat' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'armando',
      1 => 'reques',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'armando' => 1,
      'reques' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'catifa',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'catifa' => 1,
      'muncher' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'deu',
      1 => 'meu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'deu' => 1,
      'meu' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hostia',
      1 => 'puta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hostia' => 1,
      'puta' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'mare',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puta' => 1,
      'mare' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'classificat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'classificat' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'curt',
      1 => 'de',
      2 => 'gambals',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'curt' => 2,
      'de' => 1,
      'gambals' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'empacadora',
      1 => 'de',
      2 => 'llaminadures',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'empacadora' => 2,
      'de' => 1,
      'llaminadures' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ets',
      1 => 'un',
      2 => 'messi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ets' => 2,
      'un' => 1,
      'messi' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fill',
      1 => 'de',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fill' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fot',
      1 => 'el',
      2 => 'camp',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fot' => 2,
      'el' => 1,
      'camp' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'et',
      2 => 'follin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'que' => 2,
      'et' => 1,
      'follin' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'et',
      2 => 'fotin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'que' => 2,
      'et' => 1,
      'fotin' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'treure',
      1 => 'de',
      2 => 'polleguera',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'treure' => 2,
      'de' => 1,
      'polleguera' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ves',
      1 => 'a',
      2 => 'la',
      3 => 'merda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ves' => 3,
      'a' => 2,
      'la' => 1,
      'merda' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 15;

