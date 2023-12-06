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
  'qqu' => true,
  'qqan' => true,
  'qqiɣ' => true,
  'qquɣ' => true,
  'uqan' => true,
  'abbuc' => true,
  'qqant' => true,
  'taxna' => true,
  'ajeḥniḍ' => true,
  'aqerqur' => true,
  'asxuẓeḍ' => true,
  'awellaq' => true,
  'axuzziḍ' => true,
  'aεeṭṭuḍ' => true,
  'aḥeččun' => true,
  'iḥeččan' => true,
  'tteqqun' => true,
  'tteqqunt' => true,
  'iwellaqen' => true,
  'iḥeččunen' => true,
  'taḥeččunt' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 0;

