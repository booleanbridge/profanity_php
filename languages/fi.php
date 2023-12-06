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
  'himo' => true,
  'häpy' => true,
  'imeä' => true,
  'kalu' => true,
  'mamu' => true,
  'molo' => true,
  'muna' => true,
  'noki' => true,
  'pano' => true,
  'piru' => true,
  'reva' => true,
  'aalio' => true,
  'aasit' => true,
  'hidas' => true,
  'hitto' => true,
  'huora' => true,
  'häivy' => true,
  'jutku' => true,
  'jätkä' => true,
  'kives' => true,
  'kohtu' => true,
  'kukko' => true,
  'kukot' => true,
  'kulli' => true,
  'kusta' => true,
  'kyrpä' => true,
  'lutka' => true,
  'naida' => true,
  'natsi' => true,
  'nekru' => true,
  'nupit' => true,
  'nuppi' => true,
  'nykiä' => true,
  'nymfi' => true,
  'nänni' => true,
  'orgia' => true,
  'pahus' => true,
  'palli' => true,
  'panna' => true,
  'pehko' => true,
  'pusku' => true,
  'pylly' => true,
  'reikä' => true,
  'rotta' => true,
  'rumpu' => true,
  'ryssä' => true,
  'soppi' => true,
  'tissi' => true,
  'toosa' => true,
  'turku' => true,
  'tussu' => true,
  'vanne' => true,
  'vitun' => true,
  'äpärä' => true,
  'ääliö' => true,
  'anaali' => true,
  'bylsiä' => true,
  'dildot' => true,
  'emätin' => true,
  'fallos' => true,
  'haahka' => true,
  'huoria' => true,
  'hässiä' => true,
  'jutsku' => true,
  'kilinä' => true,
  'kyrpiä' => true,
  'laippa' => true,
  'nainti' => true,
  'narttu' => true,
  'nartut' => true,
  'nussia' => true,
  'nussii' => true,
  'orgiat' => true,
  'pallit' => true,
  'pallot' => true,
  'paskoa' => true,
  'pillut' => true,
  'pimppi' => true,
  'pipari' => true,
  'pistää' => true,
  'rinnat' => true,
  'ripuli' => true,
  'runkku' => true,
  'sodoma' => true,
  'suihin' => true,
  'tavara' => true,
  'tissit' => true,
  'tussut' => true,
  'uloste' => true,
  'viiksi' => true,
  'virtsa' => true,
  'abortit' => true,
  'abortti' => true,
  'erektio' => true,
  'fetissi' => true,
  'hitosti' => true,
  'huorata' => true,
  'insesti' => true,
  'kusipää' => true,
  'lahtari' => true,
  'lynkata' => true,
  'läpäisy' => true,
  'molopää' => true,
  'mulkero' => true,
  'munapää' => true,
  'munaton' => true,
  'neekeri' => true,
  'nussija' => true,
  'orgasmi' => true,
  'pantava' => true,
  'pentele' => true,
  'perhana' => true,
  'perkele' => true,
  'raakuus' => true,
  'rohkeus' => true,
  'runkata' => true,
  'ruusuke' => true,
  'saakeli' => true,
  'saamari' => true,
  'saatana' => true,
  'sadismi' => true,
  'sadisti' => true,
  'samperi' => true,
  'siepata' => true,
  'sodomia' => true,
  'töppäys' => true,
  'verinen' => true,
  'vitusti' => true,
  'vitutus' => true,
  'helvetin' => true,
  'helvetti' => true,
  'hinttari' => true,
  'idiootti' => true,
  'klitoris' => true,
  'kusaista' => true,
  'kuseksia' => true,
  'kusettaa' => true,
  'kyrvitys' => true,
  'kännissä' => true,
  'lynkkaus' => true,
  'neekerit' => true,
  'nussinta' => true,
  'pahuksen' => true,
  'panettaa' => true,
  'paskapää' => true,
  'persläpi' => true,
  'perspano' => true,
  'persvako' => true,
  'pystyssä' => true,
  'raiskata' => true,
  'raiskaus' => true,
  'raivoava' => true,
  'runkkari' => true,
  'runkkaus' => true,
  'rättipää' => true,
  'siittiöt' => true,
  'tussukka' => true,
  'uusnatsi' => true,
  'vakipano' => true,
  'vammanen' => true,
  'vittuilu' => true,
  'vituttaa' => true,
  'väsyttää' => true,
  'zoofiili' => true,
  'zoofilia' => true,
  'fellaatio' => true,
  'hebefilia' => true,
  'huudahtaa' => true,
  'itsekkyys' => true,
  'jumalauta' => true,
  'kiimainen' => true,
  'kuppainen' => true,
  'kusipaeae' => true,
  'masokisti' => true,
  'masturboi' => true,
  'mulkvisti' => true,
  'mutakuono' => true,
  'mutiainen' => true,
  'orgasmeja' => true,
  'paljaalla' => true,
  'paskaaivo' => true,
  'paskainen' => true,
  'paskantaa' => true,
  'paskapuhe' => true,
  'paskattaa' => true,
  'pedofiili' => true,
  'pedofilia' => true,
  'perversio' => true,
  'peräaukko' => true,
  'peräsuoli' => true,
  'pienoisen' => true,
  'pyllyvako' => true,
  'pääskynen' => true,
  'raiskaaja' => true,
  'raiskattu' => true,
  'sukupuoli' => true,
  'tumputtaa' => true,
  'tunkeutua' => true,
  'tutkainta' => true,
  'vittuilla' => true,
  'asskusipää' => true,
  'hatullinen' => true,
  'hebefiilit' => true,
  'helvetisti' => true,
  'hevonkuusi' => true,
  'hevonpaska' => true,
  'hevonperse' => true,
  'hevonvittu' => true,
  'häpyhuulet' => true,
  'kananpaska' => true,
  'kilinvittu' => true,
  'kivespussi' => true,
  'kullinaama' => true,
  'kyrpiintyä' => true,
  'kyrpänaama' => true,
  'nymfomania' => true,
  'pallinaama' => true,
  'pallokassi' => true,
  'paneskella' => true,
  'paskanaama' => true,
  'paskiainen' => true,
  'paskiaiset' => true,
  'persereikä' => true,
  'perseääliö' => true,
  'saatanasti' => true,
  'turpasauna' => true,
  'vittuuntua' => true,
  'ejakulaatio' => true,
  'koiranpaska' => true,
  'masturboida' => true,
  'paskamainen' => true,
  'perkeleesti' => true,
  'persaukinen' => true,
  'pornografia' => true,
  'ruuvaamalla' => true,
  'siemenneste' => true,
  'sodomisoida' => true,
  'sodomisoitu' => true,
  'tuhkaluukku' => true,
  'virtsaputki' => true,
  'vittumainen' => true,
  'vääristellä' => true,
  'eläimellinen' => true,
  'hebefiilinen' => true,
  'itsetyydytys' => true,
  'koirakusipää' => true,
  'kukkotikkari' => true,
  'kyrpiintynyt' => true,
  'panseksuaali' => true,
  'paskanmarjat' => true,
  'prostituoitu' => true,
  'siemensyöksy' => true,
  'suklaaosasto' => true,
  'tirkistelijä' => true,
  'vittuuntunut' => true,
  'akrotomofilia' => true,
  'ambiseksuaali' => true,
  'amboseksuaali' => true,
  'eläimellisyys' => true,
  'fudgepakkaaja' => true,
  'kullinluikaus' => true,
  'pilkunnussija' => true,
  'ripsipiirakka' => true,
  'risukimppuina' => true,
  'siemensyöksyn' => true,
  'siemensyöksyt' => true,
  'sukurutsainen' => true,
  'perseennuolija' => true,
  'siemensyöksyjä' => true,
  'hevonvitunperse' => true,
  'ulkosynnyttimet' => true,
  'kehitysvammainen' => true,
  'ambiseksuaalisuus' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abortin',
      1 => 'kannattaja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'abortin' => 1,
      'kannattaja' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alfred',
      1 => 'nussi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alfred' => 1,
      'nussi' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'haista',
      1 => 'paska',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'haista' => 1,
      'paska' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'haista',
      1 => 'vittu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'haista' => 1,
      'vittu' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hevon',
      1 => 'vittu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hevon' => 1,
      'vittu' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'homon',
      1 => 'perse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'homon' => 1,
      'perse' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ime',
      1 => 'parsaa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ime' => 1,
      'parsaa' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ime',
      1 => 'paskaa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ime' => 1,
      'paskaa' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'juosten',
      1 => 'kustu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'juosten' => 1,
      'kustu' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maton',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maton' => 1,
      'muncher' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mee',
      1 => 'hervantaan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mee' => 1,
      'hervantaan' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mita',
      1 => 'vittua',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mita' => 1,
      'vittua' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nuolla',
      1 => 'persettä',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nuolla' => 1,
      'persettä' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nussi',
      1 => 'mutsias',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nussi' => 1,
      'mutsias' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'painu',
      1 => 'helvettin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'painu' => 1,
      'helvettin' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'painu',
      1 => 'vittuun',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'painu' => 1,
      'vittuun' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pasko',
      1 => 'kahvikuppiin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pasko' => 1,
      'kahvikuppiin' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'perseet',
      1 => 'olalla',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'perseet' => 1,
      'olalla' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'perseraiskattu',
      1 => 'pirihuora',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'perseraiskattu' => 1,
      'pirihuora' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suksi',
      1 => 'vittuun',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'suksi' => 1,
      'vittuun' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vetää',
      1 => 'käteen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vetää' => 1,
      'käteen' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'voi',
      1 => 'paska',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'voi' => 1,
      'paska' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'voi',
      1 => 'vittu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'voi' => 1,
      'vittu' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'mitoitettu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'mitoitettu' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yebo',
      1 => 'tim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yebo' => 1,
      'tim' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ime',
      1 => 'mun',
      2 => 'munaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ime' => 2,
      'mun' => 1,
      'munaa' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuin',
      1 => 'esterin',
      2 => 'perseestä',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kuin' => 2,
      'esterin' => 1,
      'perseestä' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'voi',
      2 => 'vittu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'no' => 2,
      'voi' => 1,
      'vittu' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nuolla',
      1 => 'pillua',
      2 => 'puhdistaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nuolla' => 2,
      'pillua' => 1,
      'puhdistaa' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'do',
      1 => 'stomen',
      2 => 'stinken',
      3 => 'grease',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'do' => 3,
      'stomen' => 2,
      'stinken' => 1,
      'grease' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nuole',
      1 => 'mutsis',
      2 => 'likaista',
      3 => 'pillua',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nuole' => 3,
      'mutsis' => 2,
      'likaista' => 1,
      'pillua' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'hasten',
      2 => 'malitt',
      3 => 'soon',
      4 => 'nomeulus',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'hasten' => 3,
      'malitt' => 2,
      'soon' => 1,
      'nomeulus' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 32;

