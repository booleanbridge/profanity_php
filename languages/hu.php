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
  'búr' => true,
  'far' => true,
  'gát' => true,
  'kúr' => true,
  'méh' => true,
  'tat' => true,
  'zug' => true,
  'buzi' => true,
  'fasz' => true,
  'fing' => true,
  'geci' => true,
  'here' => true,
  'náci' => true,
  'pele' => true,
  'pina' => true,
  'pisi' => true,
  'pofa' => true,
  'pöcs' => true,
  'segg' => true,
  'szar' => true,
  'szex' => true,
  'vágy' => true,
  'épít' => true,
  'barom' => true,
  'buzik' => true,
  'búrok' => true,
  'csikk' => true,
  'csöcs' => true,
  'fasza' => true,
  'faszt' => true,
  'franc' => true,
  'fétis' => true,
  'gecik' => true,
  'gecit' => true,
  'golyó' => true,
  'kakas' => true,
  'korom' => true,
  'kurva' => true,
  'köteg' => true,
  'kúrás' => true,
  'majom' => true,
  'marha' => true,
  'nimfa' => true,
  'néger' => true,
  'orgia' => true,
  'pelék' => true,
  'perem' => true,
  'picsa' => true,
  'pinák' => true,
  'pinát' => true,
  'pofát' => true,
  'pokol' => true,
  'pornó' => true,
  'punci' => true,
  'szart' => true,
  'véres' => true,
  'önzés' => true,
  'anális' => true,
  'barmok' => true,
  'barmot' => true,
  'baszat' => true,
  'baszik' => true,
  'baszni' => true,
  'baszás' => true,
  'bazmeg' => true,
  'bozont' => true,
  'buksza' => true,
  'cinege' => true,
  'csikló' => true,
  'elbasz' => true,
  'faszok' => true,
  'fattyú' => true,
  'fecske' => true,
  'fingok' => true,
  'fingot' => true,
  'gecibb' => true,
  'gombok' => true,
  'hüvely' => true,
  'idióta' => true,
  'karima' => true,
  'kemény' => true,
  'kurafi' => true,
  'kurvák' => true,
  'kurvát' => true,
  'köcsög' => true,
  'lófasz' => true,
  'lövell' => true,
  'marhák' => true,
  'marhát' => true,
  'mellek' => true,
  'orgiák' => true,
  'ostoba' => true,
  'picsát' => true,
  'puncik' => true,
  'pénisz' => true,
  'pöcsök' => true,
  'pöcsöt' => true,
  'recska' => true,
  'ringyo' => true,
  'részeg' => true,
  'seggek' => true,
  'segget' => true,
  'sodoma' => true,
  'szajha' => true,
  'szamár' => true,
  'szarik' => true,
  'szarni' => true,
  'szarok' => true,
  'szaros' => true,
  'szopás' => true,
  'szukák' => true,
  'végbél' => true,
  'zoofil' => true,
  'balfasz' => true,
  'baszott' => true,
  'behatol' => true,
  'bukszák' => true,
  'bukszát' => true,
  'csöcsök' => true,
  'csöcsöt' => true,
  'erekció' => true,
  'erőszak' => true,
  'fajankó' => true,
  'fallosz' => true,
  'faszfej' => true,
  'felbasz' => true,
  'francok' => true,
  'francot' => true,
  'geciket' => true,
  'geciség' => true,
  'harkály' => true,
  'hebefil' => true,
  'húgycső' => true,
  'kakasok' => true,
  'kukkoló' => true,
  'kurafik' => true,
  'kurafit' => true,
  'neonáci' => true,
  'pedofil' => true,
  'perverz' => true,
  'pinákat' => true,
  'pofákat' => true,
  'rohadék' => true,
  'rozetta' => true,
  'seggfej' => true,
  'szajhák' => true,
  'szajhát' => true,
  'szarabb' => true,
  'tomboló' => true,
  'vizelet' => true,
  'abortusz' => true,
  'balfaszt' => true,
  'balfácán' => true,
  'barmokat' => true,
  'baszdmeg' => true,
  'bunkóoff' => true,
  'bátorság' => true,
  'cicageci' => true,
  'ejakulál' => true,
  'elbaszás' => true,
  'faszokat' => true,
  'felláció' => true,
  'fingokat' => true,
  'fogantyú' => true,
  'kurvákat' => true,
  'köcsögök' => true,
  'magömlés' => true,
  'marhaság' => true,
  'marhákat' => true,
  'megragad' => true,
  'niggerek' => true,
  'orgazmus' => true,
  'picsákat' => true,
  'pöcsöket' => true,
  'seggeket' => true,
  'szadista' => true,
  'szarokat' => true,
  'szarozom' => true,
  'szodómia' => true,
  'vibrátor' => true,
  'zoofília' => true,
  'átkozott' => true,
  'abortusok' => true,
  'balfaszok' => true,
  'baszottul' => true,
  'behatolás' => true,
  'bestiális' => true,
  'bukszákat' => true,
  'cockbalek' => true,
  'csöcsöket' => true,
  'ejakulált' => true,
  'elbaszott' => true,
  'faszfejek' => true,
  'faszfejet' => true,
  'faszkalap' => true,
  'felbaszni' => true,
  'felbaszás' => true,
  'francokat' => true,
  'hebefilek' => true,
  'hebefília' => true,
  'hímvessző' => true,
  'ingyenélő' => true,
  'kibaszott' => true,
  'kiáltotta' => true,
  'kurafikat' => true,
  'leggecibb' => true,
  'lincselés' => true,
  'megdöglik' => true,
  'mellbimbó' => true,
  'mosómedve' => true,
  'pedofília' => true,
  'perverzió' => true,
  'seggfejek' => true,
  'seggfejet' => true,
  'szadizmus' => true,
  'szajhákat' => true,
  'abortuáris' => true,
  'bagolygeci' => true,
  'baromállat' => true,
  'csavarozás' => true,
  'ejakuláció' => true,
  'ejakulátum' => true,
  'herezacskó' => true,
  'kurbantyãº' => true,
  'kutyafasza' => true,
  'legszarabb' => true,
  'maszturbál' => true,
  'mazochista' => true,
  'meglincsel' => true,
  'nimfománia' => true,
  'ombrekutya' => true,
  'seggbekuki' => true,
  'seggnyalás' => true,
  'szemetlada' => true,
  'szodomizál' => true,
  'vérfertőző' => true,
  'balfaszokat' => true,
  'bestialitás' => true,
  'erőszaktevő' => true,
  'faszfejeket' => true,
  'fiaofakurva' => true,
  'kibaszottul' => true,
  'pornográfia' => true,
  'prostituált' => true,
  'seggfejeket' => true,
  'szodomizált' => true,
  'vérfertőzés' => true,
  'állatiasság' => true,
  'kibaszottabb' => true,
  'maszturbáció' => true,
  'pánszexuális' => true,
  'szeméremajak' => true,
  'tönkreteszed' => true,
  'végbélnyílás' => true,
  'akrotomofília' => true,
  'ambiszexuális' => true,
  'amboszexuális' => true,
  'megerőszakolt' => true,
  'szeméremajkak' => true,
  'magzatelhajtás' => true,
  'megerőszakolás' => true,
  'ambiszexualitás' => true,
  'legkibaszottabb' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'csudiba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'a' => 1,
      'csudiba' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'budos',
      1 => 'cigany',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'budos' => 1,
      'cigany' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hamis',
      1 => 'csomagoló',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hamis' => 1,
      'csomagoló' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kabd',
      1 => 'be',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kabd' => 1,
      'be' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'labda',
      1 => 'táska',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'labda' => 1,
      'táska' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'macska',
      1 => 'okadek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'macska' => 1,
      'okadek' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rohad',
      1 => 's',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rohad' => 1,
      's' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sunyi',
      1 => 'gazember',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sunyi' => 1,
      'gazember' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'szőnyeg',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'szőnyeg' => 1,
      'muncher' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'névleges',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'névleges' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'macska',
      2 => 'sperma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'a' => 2,
      'macska' => 1,
      'sperma' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baszd',
      1 => 'meg',
      2 => 'magad',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'baszd' => 2,
      'meg' => 1,
      'magad' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kend',
      1 => 'a',
      2 => 'hajadba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kend' => 2,
      'a' => 1,
      'hajadba' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lofasz',
      1 => 'a',
      2 => 'seggedbe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lofasz' => 2,
      'a' => 1,
      'seggedbe' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baszd',
      1 => 'szajba',
      2 => 'az',
      3 => 'anyadat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'baszd' => 3,
      'szajba' => 2,
      'az' => 1,
      'anyadat' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nyald',
      1 => 'ki',
      2 => 'a',
      3 => 'seggem',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nyald' => 3,
      'ki' => 2,
      'a' => 1,
      'seggem' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'huzd',
      1 => 'bele',
      2 => 'a',
      3 => 'faszod',
      4 => 'anyadba',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'huzd' => 4,
      'bele' => 3,
      'a' => 2,
      'faszod' => 1,
      'anyadba' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hogy',
      1 => 'az',
      2 => 'isten',
      3 => 'basszon',
      4 => 'meg',
      5 => 'teged',
      6 => 'a',
      7 => 'seggednel',
      8 => 'fogva',
    ),
    'badPhraseLength' => 9,
    'badPhraseArrayTable' => 
    array (
      'hogy' => 8,
      'az' => 7,
      'isten' => 6,
      'basszon' => 5,
      'meg' => 4,
      'teged' => 3,
      'a' => 2,
      'seggednel' => 1,
      'fogva' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 18;

