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
  'fek' => true,
  'fik' => true,
  'fiki' => true,
  'fiku' => true,
  'gejo' => true,
  'kaco' => true,
  'piĉo' => true,
  'åœit' => true,
  'bugri' => true,
  'bugru' => true,
  'damne' => true,
  'feken' => true,
  'fiulo' => true,
  'kacen' => true,
  'piĉen' => true,
  'bugren' => true,
  'diable' => true,
  'diofek' => true,
  'fekulo' => true,
  'fikado' => true,
  'fikema' => true,
  'fikfek' => true,
  'fikilo' => true,
  'fikiĝi' => true,
  'fikiĝu' => true,
  'fikota' => true,
  'idioto' => true,
  'kojono' => true,
  'putino' => true,
  'diofeka' => true,
  'fiulino' => true,
  'forfiki' => true,
  'forfiku' => true,
  'forpisi' => true,
  'forpisu' => true,
  'furzulo' => true,
  'kreteno' => true,
  'viringo' => true,
  'ĉiesulo' => true,
  'forfurzu' => true,
  'zamenfek' => true,
  'feklekulo' => true,
  'fikklaŭno' => true,
  'forfikiĝu' => true,
  'kacsuĉulo' => true,
  'ĉiesulino' => true,
  'fekfikanto' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'iru',
      1 => 'inferen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'iru' => 1,
      'inferen' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 1;

