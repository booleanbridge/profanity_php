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
  'himu' => true,
  'jama' => true,
  'jobi' => true,
  'jobu' => true,
  'kukk' => true,
  'libu' => true,
  'lits' => true,
  'munn' => true,
  'nats' => true,
  'nibu' => true,
  'nupp' => true,
  'nümf' => true,
  'pede' => true,
  'puts' => true,
  'põrm' => true,
  'sitt' => true,
  'sugu' => true,
  'suhu' => true,
  'sund' => true,
  'tupe' => true,
  'tuss' => true,
  'türa' => true,
  'velg' => true,
  'vitt' => true,
  'äkki' => true,
  'blääd' => true,
  'hirve' => true,
  'imeda' => true,
  'kraav' => true,
  'kurat' => true,
  'lööma' => true,
  'nupud' => true,
  'oinas' => true,
  'orgia' => true,
  'pärak' => true,
  'põrgu' => true,
  'raibe' => true,
  'sibul' => true,
  'tibla' => true,
  'uriin' => true,
  'äärik' => true,
  'buketa' => true,
  'eeslid' => true,
  'egoism' => true,
  'emakas' => true,
  'emased' => true,
  'fallos' => true,
  'halvik' => true,
  'hälvik' => true,
  'kiimas' => true,
  'klapid' => true,
  'koerad' => true,
  'kuradi' => true,
  'kusema' => true,
  'kusiti' => true,
  'loovus' => true,
  'munand' => true,
  'natsid' => true,
  'orgiad' => true,
  'pallid' => true,
  'peenis' => true,
  'perses' => true,
  'pihkur' => true,
  'päraku' => true,
  'rinnad' => true,
  'rosett' => true,
  'sittur' => true,
  'särtsu' => true,
  'tihane' => true,
  'tissid' => true,
  'verine' => true,
  'ballett' => true,
  'fagotid' => true,
  'kahmama' => true,
  'kliitor' => true,
  'löömine' => true,
  'nikkuma' => true,
  'nussima' => true,
  'orgasmi' => true,
  'pissima' => true,
  'pritsid' => true,
  'pärilik' => true,
  'pääsuke' => true,
  'sitapea' => true,
  'sittuma' => true,
  'soodoma' => true,
  'tagumik' => true,
  'torkima' => true,
  'tungida' => true,
  'tyrapea' => true,
  'tõmbama' => true,
  'türapea' => true,
  'värdjas' => true,
  'zoofiil' => true,
  'hüüatama' => true,
  'kliitori' => true,
  'munandid' => true,
  'munandit' => true,
  'pedofiil' => true,
  'perseauk' => true,
  'püstised' => true,
  'raevukas' => true,
  'sitapead' => true,
  'sodoomia' => true,
  'varjatud' => true,
  'kruvimine' => true,
  'masohhist' => true,
  'pelgupaik' => true,
  'persevest' => true,
  'pissimine' => true,
  'pärasoole' => true,
  'tungimist' => true,
  'vägistaja' => true,
  'zoofiilia' => true,
  'erektsioon' => true,
  'hebefiilia' => true,
  'hebefiilid' => true,
  'hebefiilne' => true,
  'kinnismõte' => true,
  'pedofiilia' => true,
  'perverssus' => true,
  'prostituut' => true,
  'vägistatud' => true,
  'abortuaarid' => true,
  'kukkimetaja' => true,
  'masturboida' => true,
  'munandikott' => true,
  'nümfomaania' => true,
  'panseksuaal' => true,
  'vägistamine' => true,
  'abordijaanus' => true,
  'aborditegija' => true,
  'aeglustamine' => true,
  'pornograafia' => true,
  'ejakulatsioon' => true,
  'ejakuleeritud' => true,
  'intsestuaalne' => true,
  'jumalakartlik' => true,
  'verepilastuse' => true,
  'akrotomofiilia' => true,
  'ambiseksuaalne' => true,
  'masturbatsioon' => true,
  'sodomiseeritud' => true,
  'ambiseksuaalsus' => true,
  'ejakulatsioonid' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'emane',
      1 => 'poeg',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'emane' => 1,
      'poeg' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ime',
      1 => 'lahti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ime' => 1,
      'lahti' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kaksteist',
      1 => 'kuud',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kaksteist' => 1,
      'kuud' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'keri',
      1 => 'persse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'keri' => 1,
      'persse' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'laksa',
      1 => 'kotte',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'laksa' => 1,
      'kotte' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lappa',
      1 => 'kotte',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lappa' => 1,
      'kotte' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lita',
      1 => 'poeg',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lita' => 1,
      'poeg' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mida',
      1 => 'vittu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mida' => 1,
      'vittu' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mine',
      1 => 'perse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mine' => 1,
      'perse' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mine',
      1 => 'persse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mine' => 1,
      'persse' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mine',
      1 => 'putsi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mine' => 1,
      'putsi' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'minge',
      1 => 'pãµrgu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'minge' => 1,
      'pãµrgu' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'peksa',
      1 => 'pihku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'peksa' => 1,
      'pihku' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'särav',
      1 => 'pakendaja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'särav' => 1,
      'pakendaja' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tõmba',
      1 => 'nahhui',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tõmba' => 1,
      'nahhui' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vaip',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vaip' => 1,
      'muncher' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vitu',
      1 => 'imeja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vitu' => 1,
      'imeja' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'hinnatud',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'hinnatud' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kepi',
      1 => 'oma',
      2 => 'ema',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kepi' => 2,
      'oma' => 1,
      'ema' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'laku',
      1 => 'mu',
      2 => 'mune',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'laku' => 2,
      'mu' => 1,
      'mune' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mind',
      1 => 'ei',
      2 => 'koti',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mind' => 2,
      'ei' => 1,
      'koti' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tao',
      1 => 'pihku',
      2 => 'tonn',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tao' => 2,
      'pihku' => 1,
      'tonn' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mine',
      1 => 'ja',
      2 => 'keppi',
      3 => 'ennast',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mine' => 3,
      'ja' => 2,
      'keppi' => 1,
      'ennast' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 23;

