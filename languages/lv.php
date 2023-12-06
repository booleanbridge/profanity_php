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
  'ellē' => true,
  'kuce' => true,
  'kule' => true,
  'lohs' => true,
  'loka' => true,
  'lops' => true,
  'lose' => true,
  'muca' => true,
  'mīzt' => true,
  'pupi' => true,
  'suds' => true,
  'sūdi' => true,
  'zīle' => true,
  'dirsâ' => true,
  'kakls' => true,
  'kakts' => true,
  'kucēm' => true,
  'kārts' => true,
  'maita' => true,
  'mauka' => true,
  'nikns' => true,
  'nimfa' => true,
  'norīt' => true,
  'pauti' => true,
  'pirst' => true,
  'pogām' => true,
  'sekss' => true,
  'somas' => true,
  'sūkāt' => true,
  'tūpļa' => true,
  'urīns' => true,
  'ēzeļi' => true,
  'aborts' => true,
  'atloks' => true,
  'bezdçt' => true,
  'bomzis' => true,
  'cirvis' => true,
  'dambis' => true,
  'daunis' => true,
  'dzemde' => true,
  'fetišs' => true,
  'gailis' => true,
  'gaiļus' => true,
  'idiots' => true,
  'iekāre' => true,
  'iekļūt' => true,
  'krūtis' => true,
  'kucēns' => true,
  'maksts' => true,
  'nopelt' => true,
  'pakaļa' => true,
  'pakaļu' => true,
  'paraut' => true,
  'petene' => true,
  'pipele' => true,
  'pislis' => true,
  'retums' => true,
  'rozete' => true,
  'rumpis' => true,
  'slampa' => true,
  'sodoma' => true,
  'spermu' => true,
  'sûdîgs' => true,
  'uzcelt' => true,
  'vafele' => true,
  'anālais' => true,
  'daunene' => true,
  'dzimums' => true,
  'dūriens' => true,
  'egoisms' => true,
  'hitlers' => true,
  'incītis' => true,
  'izdrāzt' => true,
  'izšļākt' => true,
  'jāšanās' => true,
  'kapsula' => true,
  'kavorka' => true,
  'klitors' => true,
  'kroplis' => true,
  'maukurs' => true,
  'nacisti' => true,
  'nacists' => true,
  'niggeri' => true,
  'orgasma' => true,
  'orģijas' => true,
  'padauza' => true,
  'pipïuks' => true,
  'prikuļi' => true,
  'reperis' => true,
  'rimšana' => true,
  'sadisms' => true,
  'sadists' => true,
  'satvert' => true,
  'smirdēt' => true,
  'sunītis' => true,
  'ujobaks' => true,
  'zoofils' => true,
  'asiņaina' => true,
  'atpisies' => true,
  'atšujies' => true,
  'biedrība' => true,
  'bumbiņas' => true,
  'ejakulēt' => true,
  'erekcija' => true,
  'hebefili' => true,
  'izvarots' => true,
  'klitoris' => true,
  'krunciet' => true,
  'kverplis' => true,
  'nomocīts' => true,
  'pajobaks' => true,
  'pedofils' => true,
  'piderass' => true,
  'ragveida' => true,
  'sasodīts' => true,
  'sodomija' => true,
  'abortists' => true,
  'dzindzele' => true,
  'ejakulāti' => true,
  'ejakulēts' => true,
  'izplatība' => true,
  'labestība' => true,
  'masohists' => true,
  'masturbēt' => true,
  'palēnināt' => true,
  'piedraazt' => true,
  'pimpausis' => true,
  'pïûtîzers' => true,
  'sapisiens' => true,
  'studzinât' => true,
  'zoofilija' => true,
  'asinsgrēks' => true,
  'dievbijīgs' => true,
  'dingidongs' => true,
  'hebefilija' => true,
  'izdomājums' => true,
  'izvarotājs' => true,
  'izvarošana' => true,
  'izvirtulis' => true,
  'labsirdīgs' => true,
  'palaistuve' => true,
  'pedofilija' => true,
  'pedofiliju' => true,
  'perversija' => true,
  'prostitūta' => true,
  'skrūvēšana' => true,
  'sodomizēts' => true,
  'sûdcaurums' => true,
  'sēklinieki' => true,
  'ejakulācija' => true,
  'hebefilisks' => true,
  'nimfomānija' => true,
  'panseksuāls' => true,
  'ambiseksuāls' => true,
  'amboseksuāls' => true,
  'bestialitāte' => true,
  'ejakulācijas' => true,
  'gailiszīdējs' => true,
  'masturbācija' => true,
  'pornogrāfija' => true,
  'saraustīties' => true,
  'dzimumlocekļa' => true,
  'akrotomofīlija' => true,
  'dzimumloceklis' => true,
  'urīnizvadkanāls' => true,
  'ambiseksualitāte' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aapsha',
      1 => 'tauks',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aapsha' => 1,
      'tauks' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aizpis',
      1 => 'muti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aizpis' => 1,
      'muti' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aizver',
      1 => 'muti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aizver' => 1,
      'muti' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aizver',
      1 => 'zhaunas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aizver' => 1,
      'zhaunas' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'beidz',
      1 => 'pljutit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'beidz' => 1,
      'pljutit' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dirsas',
      1 => 'caurums',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dirsas' => 1,
      'caurums' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ej',
      1 => 'bekot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ej' => 1,
      'bekot' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ej',
      1 => 'dirst',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ej' => 1,
      'dirst' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ej',
      1 => 'nahuj',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ej' => 1,
      'nahuj' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ej',
      1 => 'pist',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ej' => 1,
      'pist' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'izdraaz',
      1 => 'sevi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'izdraaz' => 1,
      'sevi' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kapeikas',
      1 => 'piseejs',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kapeikas' => 1,
      'piseejs' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kazu',
      1 => 'draazejs',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kazu' => 1,
      'draazejs' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'krūts',
      1 => 'zirnītis',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'krūts' => 1,
      'zirnītis' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'laizi',
      1 => 'dirsu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'laizi' => 1,
      'dirsu' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'man',
      1 => 'pajât',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'man' => 1,
      'pajât' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maukas',
      1 => 'gabals',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maukas' => 1,
      'gabals' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'māte',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'māte' => 1,
      'fucker' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paklāju',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'paklāju' => 1,
      'muncher' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pie',
      1 => 'dirsas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pie' => 1,
      'dirsas' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'piizdaa',
      1 => 'miizeejs',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'piizdaa' => 1,
      'miizeejs' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pimpja',
      1 => 'dzîsla',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pimpja' => 1,
      'dzîsla' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pisies',
      1 => 'dirst',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pisies' => 1,
      'dirst' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pistais',
      1 => 'narkomaans',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pistais' => 1,
      'narkomaans' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suudu',
      1 => 'ruukis',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'suudu' => 1,
      'ruukis' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sûdu',
      1 => 'stûmçjs',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sûdu' => 1,
      'stûmçjs' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'pis',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ta' => 1,
      'pis' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taisnās',
      1 => 'zarnas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'taisnās' => 1,
      'zarnas' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'nominālā',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'nominālā' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pidars',
      1 => 'or',
      2 => 'pidarass',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pidars' => 2,
      'or' => 1,
      'pidarass' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 30;

