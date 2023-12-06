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
  're' => true,
  'cit' => true,
  'sag' => true,
  'mæna' => true,
  'rima' => true,
  'coles' => true,
  'culus' => true,
  'idest' => true,
  'irata' => true,
  'sexus' => true,
  'turci' => true,
  'ubera' => true,
  'asinus' => true,
  'cunnus' => true,
  'dolium' => true,
  'efutue' => true,
  'euadit' => true,
  'futete' => true,
  'futuit' => true,
  'gallus' => true,
  'iaciat' => true,
  'labium' => true,
  'libris' => true,
  'abortum' => true,
  'cinaede' => true,
  'corneum' => true,
  'cruento' => true,
  'damnare' => true,
  'gaudens' => true,
  'licisci' => true,
  'locutus' => true,
  'rapiunt' => true,
  'scortum' => true,
  'spurius' => true,
  'stercus' => true,
  'stuprum' => true,
  'fossatum' => true,
  'gallorum' => true,
  'habuerit' => true,
  'infernum' => true,
  'irrumabo' => true,
  'libidine' => true,
  'meientis' => true,
  'pessumae' => true,
  'stercore' => true,
  'catamitus' => true,
  'fellatrix' => true,
  'ficedulae' => true,
  'fututorum' => true,
  'irrumator' => true,
  'malleolis' => true,
  'pedicator' => true,
  'retardant' => true,
  'sterculus' => true,
  'clitoridis' => true,
  'masturbari' => true,
  'cupiditatis' => true,
  'offinprobus' => true,
  'purgamentum' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ani',
      1 => 'figuratur',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ani' => 1,
      'figuratur' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ano',
      1 => 'est',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ano' => 1,
      'est' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bovine',
      1 => 'faecies',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bovine' => 1,
      'faecies' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cacat',
      1 => 'olim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cacat' => 1,
      'olim' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cacata',
      1 => 'carta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cacata' => 1,
      'carta' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'christmas',
      1 => 'cruises',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'christmas' => 1,
      'cruises' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'coitus',
      1 => 'te',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'coitus' => 1,
      'te' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'de',
      1 => 'asinis',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'de' => 1,
      'asinis' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'defricatus',
      1 => 'urina',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'defricatus' => 1,
      'urina' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lupae',
      1 => 'filius',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lupae' => 1,
      'filius' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mane',
      1 => 'mingentem',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mane' => 1,
      'mingentem' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'opprimentis',
      1 => 'explendam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'opprimentis' => 1,
      'explendam' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pedica',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pedica' => 1,
      'me' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rectum',
      1 => 'iri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rectum' => 1,
      'iri' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'reiteratis',
      1 => 'dissectionibus',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'reiteratis' => 1,
      'dissectionibus' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'scrotum',
      1 => 'milij',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'scrotum' => 1,
      'milij' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sine',
      1 => 'priore',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sine' => 1,
      'priore' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'stimulum',
      1 => 'calcitrare',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'stimulum' => 1,
      'calcitrare' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tapete',
      1 => 'fanfare',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tapete' => 1,
      'fanfare' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'testiculum',
      1 => 'nervumque',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'testiculum' => 1,
      'nervumque' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tua',
      1 => 'esque',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tua' => 1,
      'esque' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ut',
      1 => 'felacio',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ut' => 1,
      'felacio' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vaca',
      1 => 'stutta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vaca' => 1,
      'stutta' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vacca',
      1 => 'foeda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vacca' => 1,
      'foeda' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'futue',
      1 => 'te',
      2 => 'ipsum',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'futue' => 2,
      'te' => 1,
      'ipsum' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'globos',
      1 => 'meos',
      2 => 'lambe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'globos' => 2,
      'meos' => 1,
      'lambe' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'matrem',
      1 => 'tuam',
      2 => 'pedicavi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'matrem' => 2,
      'tuam' => 1,
      'pedicavi' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naturale',
      1 => 'eius',
      2 => 'debent',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'naturale' => 2,
      'eius' => 1,
      'debent' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pallas',
      1 => 'meas',
      2 => 'lambe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pallas' => 2,
      'meas' => 1,
      'lambe' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'quidam',
      1 => 'latinorum',
      2 => 'praesumtores',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'quidam' => 2,
      'latinorum' => 1,
      'praesumtores' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'scronium',
      2 => 'es',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tu' => 2,
      'scronium' => 1,
      'es' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'turpia',
      1 => 'scripta',
      2 => 'imaginesque',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'turpia' => 2,
      'scripta' => 1,
      'imaginesque' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mater',
      1 => 'tua',
      2 => 'caligas',
      3 => 'gerit',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mater' => 3,
      'tua' => 2,
      'caligas' => 1,
      'gerit' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mater',
      1 => 'tua',
      2 => 'lupa',
      3 => 'est',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mater' => 3,
      'tua' => 2,
      'lupa' => 1,
      'est' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mater',
      1 => 'tua',
      2 => 'me',
      3 => 'irrumavit',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mater' => 3,
      'tua' => 2,
      'me' => 1,
      'irrumavit' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 35;

