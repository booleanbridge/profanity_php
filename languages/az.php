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
  'gic' => true,
  'meme' => true,
  'pokh' => true,
  'axmaq' => true,
  'mumla' => true,
  'qehbe' => true,
  'safeh' => true,
  'sikim' => true,
  'dindiq' => true,
  'faishe' => true,
  'iyrenj' => true,
  'mongol' => true,
  'sikmek' => true,
  'siktir' => true,
  'oghrash' => true,
  'chalmagh' => true,
  'qanchikh' => true,
  'gijdillaq' => true,
  'sikishmek' => true,
  'dombaltmaq' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'agzyva',
      1 => 'tyokerem',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'agzyva' => 1,
      'tyokerem' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amcyghyna',
      1 => 'goyum',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'amcyghyna' => 1,
      'goyum' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dashagymy',
      1 => 'yala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dashagymy' => 1,
      'yala' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gyotumu',
      1 => 'ye',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gyotumu' => 1,
      'ye' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gyotyuve',
      1 => 'goyum',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gyotyuve' => 1,
      'goyum' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'it',
      1 => 'oghlu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'it' => 1,
      'oghlu' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'meymun',
      1 => 'fars',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'meymun' => 1,
      'fars' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'necheye',
      1 => 'chykhyrsan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'necheye' => 1,
      'chykhyrsan' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pokhuvu',
      1 => 'ye',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pokhuvu' => 1,
      'ye' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pox',
      1 => 'yeme',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pox' => 1,
      'yeme' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikime',
      1 => 'ki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikime' => 1,
      'ki' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikimi',
      1 => 'yala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikimi' => 1,
      'yala' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikimin',
      1 => 'bashy',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikimin' => 1,
      'bashy' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sokh',
      1 => 'ichive',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sokh' => 1,
      'ichive' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'memeni',
      1 => 'yeyim',
      2 => 'az',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'memeni' => 2,
      'yeyim' => 1,
      'az' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'terkereh',
      1 => 'bozi',
      2 => 'lagooten',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'terkereh' => 2,
      'bozi' => 1,
      'lagooten' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 16;

