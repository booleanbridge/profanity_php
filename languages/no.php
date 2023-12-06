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
  'sæd' => true,
  'dust' => true,
  'felg' => true,
  'føkk' => true,
  'jvel' => true,
  'pikk' => true,
  'ræva' => true,
  'suge' => true,
  'urin' => true,
  'abort' => true,
  'dritt' => true,
  'fetta' => true,
  'fitte' => true,
  'føkka' => true,
  'jævla' => true,
  'knott' => true,
  'kuker' => true,
  'mordi' => true,
  'nymfe' => true,
  'orgie' => true,
  'rykke' => true,
  'ræven' => true,
  'skitt' => true,
  'fallos' => true,
  'fanken' => true,
  'fattig' => true,
  'fetisj' => true,
  'hstkuk' => true,
  'jævlig' => true,
  'kukene' => true,
  'kukost' => true,
  'livmor' => true,
  'ludder' => true,
  'lynsje' => true,
  'orgier' => true,
  'pakkis' => true,
  'pokker' => true,
  'pungen' => true,
  'rosett' => true,
  'sodoma' => true,
  'sodomi' => true,
  'sotrør' => true,
  'svelge' => true,
  'zoofil' => true,
  'aborter' => true,
  'egoisme' => true,
  'hebefil' => true,
  'hestkuk' => true,
  'knotter' => true,
  'onanert' => true,
  'orgasme' => true,
  'pedofil' => true,
  'pervers' => true,
  'pikkhue' => true,
  'rasende' => true,
  'sdsprut' => true,
  'sadisme' => true,
  'skitliv' => true,
  'slyngel' => true,
  'steikje' => true,
  'ståpikk' => true,
  'trekukk' => true,
  'urinrør' => true,
  'zoofili' => true,
  'ereksjon' => true,
  'forbanna' => true,
  'føkkings' => true,
  'hebefile' => true,
  'hebefili' => true,
  'helvetet' => true,
  'herregud' => true,
  'klitoris' => true,
  'kuktryne' => true,
  'lassaron' => true,
  'lynsjing' => true,
  'nynazist' => true,
  'oppreist' => true,
  'orgasmer' => true,
  'pedofili' => true,
  'rasshull' => true,
  'rasstapp' => true,
  'rottpung' => true,
  'sinnsykt' => true,
  'voldtatt' => true,
  'voldtekt' => true,
  'bestialsk' => true,
  'drittsekk' => true,
  'ejakulere' => true,
  'ejakulert' => true,
  'fittefaen' => true,
  'forbannet' => true,
  'forjævlig' => true,
  'homsebull' => true,
  'jukkegutt' => true,
  'kukskalle' => true,
  'nymfomani' => true,
  'onanering' => true,
  'ronkefjes' => true,
  'sdgurgler' => true,
  'sjettsjur' => true,
  'ståpikker' => true,
  'testikkel' => true,
  'breiddjame' => true,
  'brystvorte' => true,
  'fittesnerk' => true,
  'fittetryne' => true,
  'masturbere' => true,
  'morrapuler' => true,
  'perversjon' => true,
  'pornografi' => true,
  'sodomisert' => true,
  'ståpikkene' => true,
  'bestialitet' => true,
  'ejakulasjon' => true,
  'panseksuell' => true,
  'prostituert' => true,
  'utløsninger' => true,
  'akrotomofili' => true,
  'ambiseksuell' => true,
  'amboseksuell' => true,
  'morraknuller' => true,
  'slingrefitte' => true,
  'ejakulasjoner' => true,
  'gjennomtrenge' => true,
  'svartheiteste' => true,
  'voldtektsmann' => true,
  'ambiseksualitet' => true,
  'gjennomtrengning' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bretter',
      1 => 'deg',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bretter' => 1,
      'deg' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ditt',
      1 => 'eple',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ditt' => 1,
      'eple' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dumme',
      1 => 'faen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dumme' => 1,
      'faen' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'faen',
      1 => 'ta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'faen' => 1,
      'ta' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fett',
      1 => 'hore',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fett' => 1,
      'hore' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fy',
      1 => 'faen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fy' => 1,
      'faen' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'helvetes',
      1 => 'hore',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'helvetes' => 1,
      'hore' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jvla',
      1 => 'bonde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jvla' => 1,
      'bonde' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jvla',
      1 => 'hore',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jvla' => 1,
      'hore' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kug',
      1 => 'sugar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kug' => 1,
      'sugar' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kukk',
      1 => 'suger',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kukk' => 1,
      'suger' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lille',
      1 => 'satan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lille' => 1,
      'satan' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'soppspiste',
      1 => 'pitbulkukkforhud',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'soppspiste' => 1,
      'pitbulkukkforhud' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'svart',
      1 => 'faen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'svart' => 1,
      'faen' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'utpulte',
      1 => 'slappfitte',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'utpulte' => 1,
      'slappfitte' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'barometeret',
      1 => 'ten',
      2 => 'far',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'barometeret' => 2,
      'ten' => 1,
      'far' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'brenn',
      1 => 'i',
      2 => 'helvete',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'brenn' => 2,
      'i' => 1,
      'helvete' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dra',
      1 => 'til',
      2 => 'helvete',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dra' => 2,
      'til' => 1,
      'helvete' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'drit',
      1 => 'i',
      2 => 'det',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'drit' => 2,
      'i' => 1,
      'det' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'et',
      1 => 'en',
      2 => 'kuk',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'et' => 2,
      'en' => 1,
      'kuk' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'faen',
      1 => 'i',
      2 => 'helvete',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'faen' => 2,
      'i' => 1,
      'helvete' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'faen',
      1 => 'ta',
      2 => 'deg',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'faen' => 2,
      'ta' => 1,
      'deg' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'innerst',
      1 => 'i',
      2 => 'helvete',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'innerst' => 2,
      'i' => 1,
      'helvete' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puler',
      1 => 'deg',
      2 => 'herfra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'puler' => 2,
      'deg' => 1,
      'herfra' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'skyldig',
      1 => 'i',
      2 => 'incest',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'skyldig' => 2,
      'i' => 1,
      'incest' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sug',
      1 => 'kukken',
      2 => 'min',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sug' => 2,
      'kukken' => 1,
      'min' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sug',
      1 => 'zebben',
      2 => 'min',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sug' => 2,
      'zebben' => 1,
      'min' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hold',
      1 => 'for',
      2 => 'faen',
      3 => 'kjeft',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hold' => 3,
      'for' => 2,
      'faen' => 1,
      'kjeft' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jeg',
      1 => 'gir',
      2 => 'blanke',
      3 => 'faen',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jeg' => 3,
      'gir' => 2,
      'blanke' => 1,
      'faen' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kyss',
      1 => 'meg',
      2 => 'i',
      3 => 'raeva',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kyss' => 3,
      'meg' => 2,
      'i' => 1,
      'raeva' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'morra',
      1 => 'di',
      2 => 'er',
      3 => 'hore',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'morra' => 3,
      'di' => 2,
      'er' => 1,
      'hore' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pikkantilope',
      1 => 'og',
      2 => 'firkant',
      3 => 'raev',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pikkantilope' => 3,
      'og' => 2,
      'firkant' => 1,
      'raev' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'deg',
      2 => 'en',
      3 => 'bolle',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'deg' => 2,
      'en' => 1,
      'bolle' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'det',
      1 => 'stinker',
      2 => 'hore',
      3 => 'i',
      4 => 'motvind',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'det' => 4,
      'stinker' => 3,
      'hore' => 2,
      'i' => 1,
      'motvind' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jeg',
      1 => 'driter',
      2 => 'i',
      3 => 'melka',
      4 => 'di',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jeg' => 4,
      'driter' => 3,
      'i' => 2,
      'melka' => 1,
      'di' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jeg',
      1 => 'har',
      2 => 'runka',
      3 => 'bestefaren',
      4 => 'din',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jeg' => 4,
      'har' => 3,
      'runka' => 2,
      'bestefaren' => 1,
      'din' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 36;

