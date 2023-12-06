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
  'ano' => true,
  'pau' => true,
  'asas' => true,
  'asno' => true,
  'coño' => true,
  'fode' => true,
  'galo' => true,
  'pene' => true,
  'asnos' => true,
  'bolas' => true,
  'bolso' => true,
  'dique' => true,
  'filla' => true,
  'foder' => true,
  'picar' => true,
  'recto' => true,
  'tetas' => true,
  'tirón' => true,
  'aborto' => true,
  'cariño' => true,
  'culata' => true,
  'durmir' => true,
  'femias' => true,
  'follas' => true,
  'labios' => true,
  'mamada' => true,
  'peitos' => true,
  'pálido' => true,
  'sádico' => true,
  'viagra' => true,
  'corrida' => true,
  'ejacula' => true,
  'enojado' => true,
  'escroto' => true,
  'falando' => true,
  'foderos' => true,
  'follada' => true,
  'galiñas' => true,
  'lujuria' => true,
  'maldito' => true,
  'orgasmo' => true,
  'retraso' => true,
  'cachonda' => true,
  'clítoris' => true,
  'ejacular' => true,
  'mentiras' => true,
  'molestar' => true,
  'orgasmos' => true,
  'violador' => true,
  'arrebatar' => true,
  'ejaculado' => true,
  'galopante' => true,
  'maldición' => true,
  'pinchazos' => true,
  'sanguento' => true,
  'testículo' => true,
  'violación' => true,
  'atornillar' => true,
  'confundido' => true,
  'consolador' => true,
  'ejaculando' => true,
  'ejaculação' => true,
  'masoquista' => true,
  'masturbarse' => true,
  'bestialidade' => true,
  'consoladores' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'can',
      1 => 'fuck',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'can' => 1,
      'fuck' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'deus',
      1 => 'condenado',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'deus' => 1,
      'condenado' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'o',
      1 => 'inferno',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'o' => 1,
      'inferno' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'avaliado',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'avaliado' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'empacadora',
      1 => 'de',
      2 => 'fudge',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'empacadora' => 2,
      'de' => 1,
      'fudge' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fillo',
      1 => 'de',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fillo' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mochilete',
      1 => 'de',
      2 => 'alfombras',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mochilete' => 2,
      'de' => 1,
      'alfombras' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'de',
      2 => 'nai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'puta' => 2,
      'de' => 1,
      'nai' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 8;

