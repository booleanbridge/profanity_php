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
  'hū' => true,
  'aus' => true,
  'ure' => true,
  'mimi' => true,
  'reta' => true,
  'roke' => true,
  'tehe' => true,
  'teka' => true,
  'teke' => true,
  'tiko' => true,
  'tino' => true,
  'uaua' => true,
  'wero' => true,
  'pouri' => true,
  'tātea' => true,
  'tūtae' => true,
  'hamuti' => true,
  'horomi' => true,
  'hītara' => true,
  'kairau' => true,
  'ngongo' => true,
  'pakaru' => true,
  'peneis' => true,
  'pōkākā' => true,
  'toperu' => true,
  'wahine' => true,
  'haurehu' => true,
  'kaihaha' => true,
  'pūtaiao' => true,
  'rapunga' => true,
  'whakatū' => true,
  'haukotia' => true,
  'kaikarau' => true,
  'kararehe' => true,
  'karihika' => true,
  'pīphilia' => true,
  'pūphilia' => true,
  'toretore' => true,
  'torotoro' => true,
  'upokōhua' => true,
  'uruhanga' => true,
  'whakanui' => true,
  'hingaatio' => true,
  'pokokōhua' => true,
  'tahuringa' => true,
  'whakaparo' => true,
  'whakatūnga' => true,
  'whakakōhuru' => true,
  'whakakotahitanga' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kua',
      1 => 'whakamoea',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kua' => 1,
      'whakamoea' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tau',
      1 => 'waenga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tau' => 1,
      'waenga' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuhinga',
      1 => 'āhuaatua',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tuhinga' => 1,
      'āhuaatua' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'whakaaro',
      1 => 'nui',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'whakaaro' => 1,
      'nui' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'whakaputa',
      1 => 'mōhio',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'whakaputa' => 1,
      'mōhio' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kai',
      1 => 'a',
      2 => 'te',
      3 => 'ahi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kai' => 3,
      'a' => 2,
      'te' => 1,
      'ahi' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kai',
      1 => 'a',
      2 => 'te',
      3 => 'kurī',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kai' => 3,
      'a' => 2,
      'te' => 1,
      'kurī' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 7;

