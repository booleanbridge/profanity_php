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
  'fan' => true,
  'kåt' => true,
  'kön' => true,
  'mes' => true,
  'pök' => true,
  'röv' => true,
  'sås' => true,
  'tik' => true,
  'vrå' => true,
  'bajs' => true,
  'fita' => true,
  'fälg' => true,
  'hjon' => true,
  'hora' => true,
  'hård' => true,
  'körd' => true,
  'nymf' => true,
  'olla' => true,
  'pigg' => true,
  'pitt' => true,
  'porr' => true,
  'pung' => true,
  'ryck' => true,
  'saab' => true,
  'skit' => true,
  'suga' => true,
  'abort' => true,
  'arsel' => true,
  'arsle' => true,
  'balle' => true,
  'fitta' => true,
  'fläns' => true,
  'hämma' => true,
  'jugge' => true,
  'jävla' => true,
  'knopp' => true,
  'kulor' => true,
  'luder' => true,
  'lusta' => true,
  'mesar' => true,
  'miffo' => true,
  'mongo' => true,
  'moona' => true,
  'mutta' => true,
  'nasse' => true,
  'neger' => true,
  'ollon' => true,
  'onani' => true,
  'orgie' => true,
  'pajas' => true,
  'pippa' => true,
  'prutt' => true,
  'pucko' => true,
  'pulla' => true,
  'rasse' => true,
  'rumpa' => true,
  'runka' => true,
  'rycka' => true,
  'sarre' => true,
  'skita' => true,
  'slyna' => true,
  'sosse' => true,
  'stake' => true,
  'stick' => true,
  'subba' => true,
  'tikar' => true,
  'tusan' => true,
  'åsnor' => true,
  'arslen' => true,
  'attans' => true,
  'blatte' => true,
  'blodig' => true,
  'bollar' => true,
  'brutta' => true,
  'dumfan' => true,
  'egoism' => true,
  'fallos' => true,
  'fittig' => true,
  'fjolla' => true,
  'jarvla' => true,
  'jävlar' => true,
  'knulla' => true,
  'kuksås' => true,
  'lyncha' => true,
  'moonar' => true,
  'moonat' => true,
  'nazist' => true,
  'orgier' => true,
  'pattar' => true,
  'rattar' => true,
  'rosett' => true,
  'rövhål' => true,
  'slampa' => true,
  'sodomi' => true,
  'sticka' => true,
  'stånga' => true,
  'svälja' => true,
  'tuppar' => true,
  'tuttar' => true,
  'våldta' => true,
  'zoofil' => true,
  'abortör' => true,
  'fetisch' => true,
  'hebefil' => true,
  'horunge' => true,
  'knubbis' => true,
  'kåtbock' => true,
  'luffare' => true,
  'moderat' => true,
  'moonade' => true,
  'onanera' => true,
  'pedofil' => true,
  'pervers' => true,
  'rasande' => true,
  'runkare' => true,
  'särbarn' => true,
  'tattare' => true,
  'tidelag' => true,
  'upprätt' => true,
  'urinrör' => true,
  'urinväg' => true,
  'zoofili' => true,
  'ändtarm' => true,
  'abortuär' => true,
  'cocksuga' => true,
  'dumhuvud' => true,
  'ejakulat' => true,
  'erektion' => true,
  'fittslem' => true,
  'hebefili' => true,
  'klitoris' => true,
  'knullare' => true,
  'kukhuvud' => true,
  'livmoder' => true,
  'nynazist' => true,
  'onanerar' => true,
  'orgasmer' => true,
  'pedofili' => true,
  'runkhora' => true,
  'sliddjur' => true,
  'snefitta' => true,
  'spermier' => true,
  'testikel' => true,
  'våldtäkt' => true,
  'zigenare' => true,
  'avsugning' => true,
  'bollväska' => true,
  'ejakulera' => true,
  'finnjävel' => true,
  'fittnylle' => true,
  'förbannad' => true,
  'hebefiler' => true,
  'kuksugare' => true,
  'kötthuvud' => true,
  'köttnacke' => true,
  'lynchning' => true,
  'nymfomani' => true,
  'parmiddag' => true,
  'penetrera' => true,
  'pissluder' => true,
  'rövknulla' => true,
  'skitsnack' => true,
  'skruvning' => true,
  'skäggbiff' => true,
  'snedfitta' => true,
  'sonofatik' => true,
  'tomteporr' => true,
  'tratthora' => true,
  'utlösning' => true,
  'våldtagen' => true,
  'abortuärer' => true,
  'bestialisk' => true,
  'bröstvårta' => true,
  'discofitta' => true,
  'ejakulerar' => true,
  'fördämning' => true,
  'hundfucker' => true,
  'incestuösa' => true,
  'missfoster' => true,
  'pansexuell' => true,
  'pornografi' => true,
  'sandknulla' => true,
  'träskluder' => true,
  'ambisexuell' => true,
  'ambosexuell' => true,
  'bestialitet' => true,
  'blygdläppar' => true,
  'efterbliven' => true,
  'ejakulation' => true,
  'ejakulerade' => true,
  'sodomiserad' => true,
  'sädesvätska' => true,
  'utlösningar' => true,
  'akrotomofili' => true,
  'ejakulerande' => true,
  'prostituerad' => true,
  'våldtäktsman' => true,
  'mammaknullare' => true,
  'ambisexualitet' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'babianbak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'din' => 1,
      'babianbak' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'mamma',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'din' => 1,
      'mamma' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'för',
      1 => 'helvete',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'för' => 1,
      'helvete' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hor',
      1 => 'unge',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hor' => 1,
      'unge' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'javla',
      1 => 'helveta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'javla' => 1,
      'helveta' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamma',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mamma' => 1,
      'fucker' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mattan',
      1 => 'mattan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mattan' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'runkar',
      1 => 'snoppen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'runkar' => 1,
      'snoppen' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sätta',
      1 => 'på',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sätta' => 1,
      'på' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'betygsatt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'betygsatt' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'gamla',
      2 => 'toyota',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'din' => 2,
      'gamla' => 1,
      'toyota' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'variga',
      2 => 'grisfitta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'din' => 2,
      'variga' => 1,
      'grisfitta' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dra',
      1 => 'åt',
      2 => 'helvete',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dra' => 2,
      'åt' => 1,
      'helvete' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'för',
      1 => 'i',
      2 => 'helvete',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'för' => 2,
      'i' => 1,
      'helvete' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gå',
      1 => 'och',
      2 => 'dö',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gå' => 2,
      'och' => 1,
      'dö' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sug',
      1 => 'en',
      2 => 'grodkuk',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sug' => 2,
      'en' => 1,
      'grodkuk' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sug',
      1 => 'min',
      2 => 'kuk',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sug' => 2,
      'min' => 1,
      'kuk' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cp',
      1 => 'prenounced',
      2 => 'sae',
      3 => 'pae',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'cp' => 3,
      'prenounced' => 2,
      'sae' => 1,
      'pae' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'mammas',
      2 => 'ã¤ckliga',
      3 => 'fittkuk',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'din' => 3,
      'mammas' => 2,
      'ã¤ckliga' => 1,
      'fittkuk' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jag',
      1 => 'knullar',
      2 => 'din',
      3 => 'mamma',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jag' => 3,
      'knullar' => 2,
      'din' => 1,
      'mamma' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jag',
      1 => 'knullar',
      2 => 'din',
      3 => 'melon',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jag' => 3,
      'knullar' => 2,
      'din' => 1,
      'melon' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jag',
      1 => 'knullar',
      2 => 'din',
      3 => 'syster',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jag' => 3,
      'knullar' => 2,
      'din' => 1,
      'syster' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'min',
      1 => 'kuk',
      2 => 'i',
      3 => 'dig',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'min' => 3,
      'kuk' => 2,
      'i' => 1,
      'dig' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slicka',
      1 => 'rent',
      2 => 'din',
      3 => 'morsas',
      4 => 'anus',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'slicka' => 4,
      'rent' => 3,
      'din' => 2,
      'morsas' => 1,
      'anus' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'inte',
      1 => 'ens',
      2 => 'din',
      3 => 'mamma',
      4 => 'gillar',
      5 => 'dig',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'inte' => 5,
      'ens' => 4,
      'din' => 3,
      'mamma' => 2,
      'gillar' => 1,
      'dig' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jag',
      1 => 'hoppas',
      2 => 'att',
      3 => 'du',
      4 => 'knullas',
      5 => 'av',
      6 => 'satan',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'jag' => 6,
      'hoppas' => 5,
      'att' => 4,
      'du' => 3,
      'knullas' => 2,
      'av' => 1,
      'satan' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jag',
      1 => 'knullar',
      2 => 'ditt',
      3 => 'barn',
      4 => 'med',
      5 => 'en',
      6 => 'melon',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'jag' => 6,
      'knullar' => 5,
      'ditt' => 4,
      'barn' => 3,
      'med' => 2,
      'en' => 1,
      'melon' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 27;

