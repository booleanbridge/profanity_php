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
  'కం' => true,
  'బం' => true,
  'అంగ' => true,
  'ఫక్' => true,
  'బట్' => true,
  'మూల' => true,
  'మృగ' => true,
  'సక్' => true,
  'teja' => true,
  'ఒంటి' => true,
  'కంట్' => true,
  'కాక్' => true,
  'కామం' => true,
  'కూన్' => true,
  'ఛాతీ' => true,
  'టిట్' => true,
  'డిక్' => true,
  'డూష్' => true,
  'తునక' => true,
  'దూరు' => true,
  'నరకం' => true,
  'నాజీ' => true,
  'నీతి' => true,
  'బిచ్' => true,
  'బూబ్' => true,
  'యోని' => true,
  'రంప్' => true,
  'రిమ్' => true,
  'రేప్' => true,
  'రేసీ' => true,
  'వృషణ' => true,
  'హోర్' => true,
  'bochu' => true,
  'bokka' => true,
  'daddu' => true,
  'dengu' => true,
  'dimma' => true,
  'erugu' => true,
  'gudda' => true,
  'kojja' => true,
  'lanja' => true,
  'modda' => true,
  'nihar' => true,
  'pappa' => true,
  'pooku' => true,
  'sulii' => true,
  'అచ్చు' => true,
  'ఆర్గ్' => true,
  'గాడిద' => true,
  'గుదము' => true,
  'గుబ్బ' => true,
  'చింక్' => true,
  'చెత్త' => true,
  'డైక్' => true,
  'నింఫ్' => true,
  'పెదవి' => true,
  'ఫక్స్' => true,
  'బ్లడీ' => true,
  'రాపర్' => true,
  'లింగం' => true,
  'లించ్' => true,
  'వాంగ్' => true,
  'వృషణం' => true,
  'వేశ్య' => true,
  'శిశ్న' => true,
  'షైట్' => true,
  'స్మట్' => true,
  'bosudi' => true,
  'lavada' => true,
  'puthhi' => true,
  'shaata' => true,
  'sravan' => true,
  'అశ్లీల' => true,
  'కాక్స్' => true,
  'కుదుపు' => true,
  'చనుమొన' => true,
  'జూఫైల్' => true,
  'టిట్స్' => true,
  'తిట్టు' => true,
  'నవుకరు' => true,
  'నాబ్స్' => true,
  'పాయువు' => true,
  'పుస్సీ' => true,
  'పోర్నో' => true,
  'ప్యూబ్' => true,
  'ఫకర్స్' => true,
  'ఫకింగ్' => true,
  'ఫాగాట్' => true,
  'ఫెటిష్' => true,
  'బుడతడు' => true,
  'బొచ్చు' => true,
  'బోల్లక' => true,
  'మింగడం' => true,
  'రోసెట్' => true,
  'వీర్యం' => true,
  'శాడిజం' => true,
  'శృంగార' => true,
  'షిట్స్' => true,
  'షీమేల్' => true,
  'సెక్స్' => true,
  'సోడోమి' => true,
  'సోడోమ్' => true,
  'స్కలనం' => true,
  'స్ఖలనం' => true,
  'స్నాచ్' => true,
  'స్పంకీ' => true,
  'స్పంక్' => true,
  'aathulu' => true,
  'vattalu' => true,
  'vedhava' => true,
  'అహంకారం' => true,
  'ఆర్గీస్' => true,
  'కుడుచుట' => true,
  'జననాంగం' => true,
  'నిగ్గర్' => true,
  'పిస్సర్' => true,
  'ఫగాట్స్' => true,
  'యూరినరీ' => true,
  'విసర్జన' => true,
  'వృషణాలు' => true,
  'వ్యాంక్' => true,
  'స్లట్స్' => true,
  'హిట్లర్' => true,
  'vattakai' => true,
  'గర్భాశయం' => true,
  'గాడ్డామ్' => true,
  'జూఫిలియా' => true,
  'డిల్డోస్' => true,
  'నిటారుగా' => true,
  'పిస్సాఫ్' => true,
  'పిస్సీస్' => true,
  'పీడోఫైల్' => true,
  'ప్రిక్స్' => true,
  'ఫకింగ్స్' => true,
  'బంతుల్లో' => true,
  'యురేత్రా' => true,
  'రిటార్డ్' => true,
  'రేపిస్ట్' => true,
  'శాడిస్ట్' => true,
  'శ్రేష్ఠత' => true,
  'షగ్గింగ్' => true,
  'షిట్టెడ్' => true,
  'సోడోమైజ్' => true,
  'స్కాన్క్' => true,
  'స్ఖలనాలు' => true,
  'స్ఖలించు' => true,
  'స్పెర్మా' => true,
  'స్పెర్మ్' => true,
  'jinniappa' => true,
  'konamodda' => true,
  'magatanam' => true,
  'marmangam' => true,
  'muchchika' => true,
  'sachinoda' => true,
  'అంగస్తంభన' => true,
  'అత్యాచారం' => true,
  'ఆర్గాసిమ్' => true,
  'జెర్క్ఆఫ్' => true,
  'నిగ్గర్స్' => true,
  'పిస్సింగ్' => true,
  'పురీషనాళం' => true,
  'పురుషాంగం' => true,
  'ఫాగ్గింగ్' => true,
  'ఫెల్చింగ్' => true,
  'బాస్టర్డ్' => true,
  'బిట్చింగ్' => true,
  'బెల్లెండ్' => true,
  'బెస్టియల్' => true,
  'మూకదాడులు' => true,
  'రిమ్మింగ్' => true,
  'వికృతత్వం' => true,
  'షిట్టింగ్' => true,
  'స్క్రోటమ్' => true,
  'lanjakodka' => true,
  'కాక్సక్కర్' => true,
  'క్లిటోరిస్' => true,
  'గర్భస్రావం' => true,
  'పెడోఫీలియా' => true,
  'బాల్బ్యాగ్' => true,
  'వక్షోజాలను' => true,
  'సోడోమైజ్డ్' => true,
  'హెబిఫిల్స్' => true,
  'హెబెఫిలిక్' => true,
  'హెబెఫీలియా' => true,
  'కుక్కfucker' => true,
  'గాడిదfucker' => true,
  'నింఫోమానియా' => true,
  'పోర్నోగ్రఫీ' => true,
  'భావప్రాప్తి' => true,
  'హస్తప్రయోగం' => true,
  'ఆత్మవిశ్వాసం' => true,
  'కున్నిలింగస్' => true,
  'పెడోఫిలియాక్' => true,
  'బెస్టియాలిటీ' => true,
  'రగిలిపోతోంది' => true,
  'అంబిసెక్సువల్' => true,
  'అంబోసెక్సువల్' => true,
  'ఎజాక్యులేటెడ్' => true,
  'ఎజాక్యులేట్స్' => true,
  'గర్భస్రావవాది' => true,
  'చొచ్చుకుపోవడం' => true,
  'పాన్సెక్సువల్' => true,
  'ఎరాక్యులేటింగ్' => true,
  'క్యునిల్లింగస్' => true,
  'అక్రోటోమోఫిలియా' => true,
  'ఆంబిసెక్సువాలిటీ' => true,
  'స్త్రీగుహ్యాంకురము' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aati',
      1 => 'mokka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aati' => 1,
      'mokka' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aritipandu',
      1 => 'mogga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aritipandu' => 1,
      'mogga' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chanu',
      1 => 'mona',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chanu' => 1,
      'mona' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chilipiga',
      1 => 'thittatam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chilipiga' => 1,
      'thittatam' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chitthu',
      1 => 'pooka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chitthu' => 1,
      'pooka' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'erri',
      1 => 'pooka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'erri' => 1,
      'pooka' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gaadida',
      1 => 'pichaloda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gaadida' => 1,
      'pichaloda' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gaja',
      1 => 'madda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gaja' => 1,
      'madda' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'guddha',
      1 => 'cheeku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'guddha' => 1,
      'cheeku' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'guddha',
      1 => 'naku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'guddha' => 1,
      'naku' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kukka',
      1 => 'pooka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kukka' => 1,
      'pooka' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kukka',
      1 => 'sulli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kukka' => 1,
      'sulli' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninnu',
      1 => 'dengutha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ninnu' => 1,
      'dengutha' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paaki',
      1 => 'munda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'paaki' => 1,
      'munda' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pedda',
      1 => 'salladhi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pedda' => 1,
      'salladhi' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pichi',
      1 => 'pukoda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pichi' => 1,
      'pukoda' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pichi',
      1 => 'pukudaana',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pichi' => 1,
      'pukudaana' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'piyya',
      1 => 'thinnu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'piyya' => 1,
      'thinnu' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poooku',
      1 => 'chinchu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'poooku' => 1,
      'chinchu' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pukku',
      1 => 'naaku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pukku' => 1,
      'naaku' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sallu',
      1 => 'dengutha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sallu' => 1,
      'dengutha' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sanalo',
      1 => 'bochho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sanalo' => 1,
      'bochho' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sulli',
      1 => 'pattu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sulli' => 1,
      'pattu' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thurku',
      1 => 'valagodtha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thurku' => 1,
      'valagodtha' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'verri',
      1 => 'puka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'verri' => 1,
      'puka' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'రేట్',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'రేట్' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'అక్రమ',
      1 => 'సంబంధం',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'అక్రమ' => 1,
      'సంబంధం' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'అసాంఘిక',
      1 => 'కార్యకలాపాలు',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'అసాంఘిక' => 1,
      'కార్యకలాపాలు' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ఇబ్బంది',
      1 => 'పెట్టాడు',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ఇబ్బంది' => 1,
      'పెట్టాడు' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ఉన్నప్పటికీ',
      1 => 'బలాత్కారం',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ఉన్నప్పటికీ' => 1,
      'బలాత్కారం' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'కార్పెట్',
      1 => 'ముంచర్',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'కార్పెట్' => 1,
      'ముంచర్' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'తల్లి',
      1 => 'ఫెకర్',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'తల్లి' => 1,
      'ఫెకర్' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'దేవతలా',
      1 => 'మంచిది',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'దేవతలా' => 1,
      'మంచిది' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'పీడన',
      1 => 'కాముకత',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'పీడన' => 1,
      'కాముకత' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ఫడ్జ్',
      1 => 'ప్యాకర్',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ఫడ్జ్' => 1,
      'ప్యాకర్' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'సిగ్',
      1 => 'హీల్',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'సిగ్' => 1,
      'హీల్' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'హస్త',
      1 => 'ప్రయోగం',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'హస్త' => 1,
      'ప్రయోగం' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'హిట్లర్ను',
      1 => 'స్తుతించు',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'హిట్లర్ను' => 1,
      'స్తుతించు' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aatu',
      1 => 'leni',
      2 => 'mogga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'aatu' => 2,
      'leni' => 1,
      'mogga' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dengithe',
      1 => 'dayyalu',
      2 => 'pudatai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dengithe' => 2,
      'dayyalu' => 1,
      'pudatai' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'guddha',
      1 => 'pagala',
      2 => 'dengutha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'guddha' => 2,
      'pagala' => 1,
      'dengutha' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hasta',
      1 => 'prayogam',
      2 => 'chai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hasta' => 2,
      'prayogam' => 1,
      'chai' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'langa',
      1 => 'vippavae',
      2 => 'lanjaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'langa' => 2,
      'vippavae' => 1,
      'lanjaa' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'akkaani',
      2 => 'dengaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'akkaani' => 1,
      'dengaa' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'akkanu',
      2 => 'denga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'akkanu' => 1,
      'denga' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'alini',
      2 => 'dengaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'alini' => 1,
      'dengaa' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'ammani',
      2 => 'dengaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'ammani' => 1,
      'dengaa' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'ammanu',
      2 => 'denga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'ammanu' => 1,
      'denga' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'ammanu',
      2 => 'dnegu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'ammanu' => 1,
      'dnegu' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'pallu',
      2 => 'super',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'pallu' => 1,
      'super' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'pellaanni',
      2 => 'denga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nee' => 2,
      'pellaanni' => 1,
      'denga' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poi',
      1 => 'voungu',
      2 => 'ra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'poi' => 2,
      'voungu' => 1,
      'ra' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pucci',
      1 => 'na',
      2 => 'kodaka',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pucci' => 2,
      'na' => 1,
      'kodaka' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puku',
      1 => 'peka',
      2 => 'adistha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'puku' => 2,
      'peka' => 1,
      'adistha' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'మనసు',
      1 => 'పడ్డట్లు',
      2 => 'చిత్రించారు',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'మనసు' => 2,
      'పడ్డట్లు' => 1,
      'చిత్రించారు' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'golli',
      1 => 'cheeku',
      2 => 'ra',
      3 => 'kodaka',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'golli' => 3,
      'cheeku' => 2,
      'ra' => 1,
      'kodaka' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gudha',
      1 => 'kindha',
      2 => 'kovvu',
      3 => 'pattindha',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gudha' => 3,
      'kindha' => 2,
      'kovvu' => 1,
      'pattindha' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muddy',
      1 => 'lo',
      2 => 'velu',
      3 => 'petuko',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'muddy' => 3,
      'lo' => 2,
      'velu' => 1,
      'petuko' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'akka',
      2 => 'nu',
      3 => 'denga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ne' => 3,
      'akka' => 2,
      'nu' => 1,
      'denga' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'amma',
      2 => 'ni',
      3 => 'denga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ne' => 3,
      'amma' => 2,
      'ni' => 1,
      'denga' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'jathini',
      2 => 'kukka',
      3 => 'denga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ne' => 3,
      'jathini' => 2,
      'kukka' => 1,
      'denga' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'notlo',
      2 => 'naa',
      3 => 'suli',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ne' => 3,
      'notlo' => 2,
      'naa' => 1,
      'suli' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'pookula',
      2 => 'na',
      3 => 'sulli',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ne' => 3,
      'pookula' => 2,
      'na' => 1,
      'sulli' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'aali',
      2 => 'pookulo',
      3 => 'rampam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nee' => 3,
      'aali' => 2,
      'pookulo' => 1,
      'rampam' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'amma',
      2 => 'guddani',
      3 => 'denga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nee' => 3,
      'amma' => 2,
      'guddani' => 1,
      'denga' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'amma',
      2 => 'kuttani',
      3 => 'denga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nee' => 3,
      'amma' => 2,
      'kuttani' => 1,
      'denga' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'kooturu',
      2 => 'ni',
      3 => 'denga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nee' => 3,
      'kooturu' => 2,
      'ni' => 1,
      'denga' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'notlo',
      2 => 'naa',
      3 => 'sulli',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nee' => 3,
      'notlo' => 2,
      'naa' => 1,
      'sulli' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'pukulo',
      2 => 'naa',
      3 => 'sulli',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nee' => 3,
      'pukulo' => 2,
      'naa' => 1,
      'sulli' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ni',
      1 => 'akkani',
      2 => 'pandulu',
      3 => 'denga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ni' => 3,
      'akkani' => 2,
      'pandulu' => 1,
      'denga' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ni',
      1 => 'pukla',
      2 => 'na',
      3 => 'madda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ni' => 3,
      'pukla' => 2,
      'na' => 1,
      'madda' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nuvvu',
      1 => 'nee',
      2 => 'yendipoyina',
      3 => 'sulli',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nuvvu' => 3,
      'nee' => 2,
      'yendipoyina' => 1,
      'sulli' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cutlet',
      1 => 'etthi',
      2 => 'guddha',
      3 => 'lo',
      4 => 'pettuko',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'cutlet' => 4,
      'etthi' => 3,
      'guddha' => 2,
      'lo' => 1,
      'pettuko' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ne',
      1 => 'akkan',
      2 => 'ma',
      3 => 'kukka',
      4 => 'dengha',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ne' => 4,
      'akkan' => 3,
      'ma' => 2,
      'kukka' => 1,
      'dengha' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nee',
      1 => 'payal',
      2 => 'madhyalo',
      3 => 'na',
      4 => 'sulli',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'nee' => 4,
      'payal' => 3,
      'madhyalo' => 2,
      'na' => 1,
      'sulli' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ni',
      1 => 'gudha',
      2 => 'la',
      3 => 'gudu',
      4 => 'pedtha',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ni' => 4,
      'gudha' => 3,
      'la' => 2,
      'gudu' => 1,
      'pedtha' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'లైంగిక',
      1 => 'సంతృప్తి',
      2 => 'కోసం',
      3 => 'స్త్రీలు',
      4 => 'ఉపయోగించే',
      5 => 'పురుషాంగము',
      6 => 'వంటి',
      7 => 'పరికరము',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'లైంగిక' => 7,
      'సంతృప్తి' => 6,
      'కోసం' => 5,
      'స్త్రీలు' => 4,
      'ఉపయోగించే' => 3,
      'పురుషాంగము' => 2,
      'వంటి' => 1,
      'పరికరము' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 77;

