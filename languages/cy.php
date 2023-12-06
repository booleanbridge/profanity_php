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
  'ast' => true,
  'bys' => true,
  'coc' => true,
  'hŵr' => true,
  'tra' => true,
  'ysg' => true,
  'anws' => true,
  'asyn' => true,
  'cach' => true,
  'codi' => true,
  'dwrn' => true,
  'ffag' => true,
  'ffyc' => true,
  'gast' => true,
  'orau' => true,
  'rhyw' => true,
  'sedd' => true,
  'tomi' => true,
  'wain' => true,
  'bidyn' => true,
  'brawf' => true,
  'bweta' => true,
  'cachu' => true,
  'chwyn' => true,
  'fwlfa' => true,
  'gachu' => true,
  'gwain' => true,
  'hwren' => true,
  'natsi' => true,
  'nymff' => true,
  'pidyn' => true,
  'prics' => true,
  'pêlau' => true,
  'sberm' => true,
  'sugno' => true,
  'butain' => true,
  'clawdd' => true,
  'erotig' => true,
  'fagina' => true,
  'ffagio' => true,
  'ffagod' => true,
  'ffagot' => true,
  'ffycin' => true,
  'hiliol' => true,
  'llyncu' => true,
  'nigwyr' => true,
  'rapiwr' => true,
  'sberma' => true,
  'sodomi' => true,
  'tafarn' => true,
  'tresio' => true,
  'uffern' => true,
  'ysgwyd' => true,
  'blychau' => true,
  'bronnau' => true,
  'bronten' => true,
  'ceiliog' => true,
  'cilfach' => true,
  'ffagots' => true,
  'ffetish' => true,
  'gwyriad' => true,
  'rhywiol' => true,
  'sgriwio' => true,
  'sgrotwm' => true,
  'treisio' => true,
  'wrethra' => true,
  'adferiad' => true,
  'bwbechni' => true,
  'cnuchiwr' => true,
  'cnuchwyr' => true,
  'gwaedlyd' => true,
  'holocost' => true,
  'llosgach' => true,
  'mariwana' => true,
  'môrleidr' => true,
  'natsïaid' => true,
  'treiddio' => true,
  'treisiwr' => true,
  'erthyliad' => true,
  'mabybitch' => true,
  'mastyrbio' => true,
  'natsïaeth' => true,
  'pedoffeil' => true,
  'puteindra' => true,
  'trawswyro' => true,
  'chwistrell' => true,
  'cogwrsiwgr' => true,
  'homoerotig' => true,
  'pedoffilia' => true,
  'cyfrifiadur' => true,
  'cynddeiriog' => true,
  'pedoffiliag' => true,
  'pedoffilydd' => true,
  'pornograffi' => true,
  'treiddgarwch' => true,
  'llofruddiaeth' => true,
  'methamffetamin' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bag',
      1 => 'bêl',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bag' => 1,
      'bêl' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bwytawr',
      1 => 'cyri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bwytawr' => 1,
      'cyri' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'caethiwed',
      1 => 'cyffuriau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'caethiwed' => 1,
      'cyffuriau' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'carped',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'carped' => 1,
      'muncher' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cawod',
      1 => 'euraidd',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cawod' => 1,
      'euraidd' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cyfathrach',
      1 => 'rywiol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cyfathrach' => 1,
      'rywiol' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gweithred',
      1 => 'rywiol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gweithred' => 1,
      'rywiol' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'joci',
      1 => 'camel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'joci' => 1,
      'camel' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'joci',
      1 => 'gamel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'joci' => 1,
      'gamel' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mam',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mam' => 1,
      'fucker' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mwnci',
      1 => 'porth',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mwnci' => 1,
      'porth' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paciwr',
      1 => 'cyffug',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'paciwr' => 1,
      'cyffug' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pecyn',
      1 => 'fudge',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pecyn' => 1,
      'fudge' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pen',
      1 => 'crac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pen' => 1,
      'crac' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pen',
      1 => 'tywel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pen' => 1,
      'tywel' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pŵer',
      1 => 'du',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pŵer' => 1,
      'du' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pŵer',
      1 => 'gwyn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pŵer' => 1,
      'gwyn' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'siagwir',
      1 => 'defaid',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'siagwir' => 1,
      'defaid' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'siagwr',
      1 => 'defaid',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'siagwr' => 1,
      'defaid' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sudd',
      1 => 'pêl',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sudd' => 1,
      'pêl' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sugnwr',
      1 => 'pêl',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sugnwr' => 1,
      'pêl' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wedii',
      1 => 'ffitio',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wedii' => 1,
      'ffitio' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'graddio',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'graddio' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yn',
      1 => 'cwympo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yn' => 1,
      'cwympo' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yn',
      1 => 'gwisgo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yn' => 1,
      'gwisgo' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yn',
      1 => 'torri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yn' => 1,
      'torri' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bwyta',
      1 => 'fy',
      2 => 'mwtyn',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bwyta' => 2,
      'fy' => 1,
      'mwtyn' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'clod',
      1 => 'i',
      2 => 'hitler',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'clod' => 2,
      'i' => 1,
      'hitler' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gwlyb',
      1 => 'yn',
      2 => 'ôl',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gwlyb' => 2,
      'yn' => 1,
      'ôl' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sut',
      1 => 'i',
      2 => 'ladd',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sut' => 2,
      'i' => 1,
      'ladd' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sut',
      1 => 'i',
      2 => 'lofruddio',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sut' => 2,
      'i' => 1,
      'lofruddio' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 31;

