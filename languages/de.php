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
  'aas' => true,
  'lms' => true,
  'depp' => true,
  'ecke' => true,
  'fick' => true,
  'homo' => true,
  'huan' => true,
  'hure' => true,
  'lick' => true,
  'lude' => true,
  'milf' => true,
  'mist' => true,
  'möse' => true,
  'nepp' => true,
  'puff' => true,
  'ruck' => true,
  'after' => true,
  'arsch' => true,
  'bimbo' => true,
  'bonze' => true,
  'bulle' => true,
  'dumme' => true,
  'dödel' => true,
  'ficke' => true,
  'fotze' => true,
  'hoden' => true,
  'horst' => true,
  'huren' => true,
  'idiot' => true,
  'ische' => true,
  'jumbo' => true,
  'kacke' => true,
  'kamel' => true,
  'kimme' => true,
  'knopf' => true,
  'lesbe' => true,
  'luder' => true,
  'mufti' => true,
  'möpse' => true,
  'mösen' => true,
  'nackt' => true,
  'neger' => true,
  'nutte' => true,
  'orgie' => true,
  'penis' => true,
  'pisse' => true,
  'pisst' => true,
  'popel' => true,
  'porno' => true,
  'rowdy' => true,
  'titte' => true,
  'tunte' => true,
  'tussi' => true,
  'zicke' => true,
  'bordel' => true,
  'bratze' => true,
  'bumsen' => true,
  'felgen' => true,
  'ficken' => true,
  'ficker' => true,
  'fotzen' => true,
  'fratze' => true,
  'fresse' => true,
  'gesöff' => true,
  'inzest' => true,
  'kacken' => true,
  'kanake' => true,
  'knöpfe' => true,
  'kotzen' => true,
  'lellek' => true,
  'lusche' => true,
  'lümmel' => true,
  'macker' => true,
  'miefen' => true,
  'muschi' => true,
  'nigger' => true,
  'nippel' => true,
  'nymphe' => true,
  'orgien' => true,
  'penner' => true,
  'piefke' => true,
  'pimmel' => true,
  'pissen' => true,
  'pisser' => true,
  'poppen' => true,
  'rassig' => true,
  'reudig' => true,
  'saufen' => true,
  'saugen' => true,
  'schein' => true,
  'schwul' => true,
  'shaisa' => true,
  'spasti' => true,
  'teufel' => true,
  'titten' => true,
  'transe' => true,
  'tunten' => true,
  'vögeln' => true,
  'wichse' => true,
  'wütend' => true,
  'zickig' => true,
  'zombie' => true,
  'ätzend' => true,
  'bastard' => true,
  'duncauf' => true,
  'fetisch' => true,
  'flasche' => true,
  'gammler' => true,
  'gefickt' => true,
  'knacker' => true,
  'lynchen' => true,
  'notgeil' => true,
  'piefkes' => true,
  'pimpern' => true,
  'pinkeln' => true,
  'plinzen' => true,
  'quatsch' => true,
  'reihern' => true,
  'rosette' => true,
  'scheide' => true,
  'scheiss' => true,
  'scheiße' => true,
  'schwanz' => true,
  'sheisse' => true,
  'sodomie' => true,
  'spargel' => true,
  'spießig' => true,
  'spinnen' => true,
  'spinner' => true,
  'spinnst' => true,
  'transen' => true,
  'trottel' => true,
  'voegeln' => true,
  'weichei' => true,
  'wichsen' => true,
  'wichser' => true,
  'zoophil' => true,
  'aasgeier' => true,
  'abdrehen' => true,
  'abortuar' => true,
  'abschaum' => true,
  'abticken' => true,
  'aufrecht' => true,
  'babyface' => true,
  'beinhart' => true,
  'blödmann' => true,
  'blödsinn' => true,
  'drecksau' => true,
  'dummbatz' => true,
  'dummkopf' => true,
  'egoismus' => true,
  'erektion' => true,
  'feigling' => true,
  'fettsack' => true,
  'fickdich' => true,
  'filzlaus' => true,
  'fregatte' => true,
  'giftzahn' => true,
  'hebephil' => true,
  'huansohn' => true,
  'hänfling' => true,
  'klitoris' => true,
  'klobesen' => true,
  'lutschen' => true,
  'lutscher' => true,
  'mannweib' => true,
  'mistkerl' => true,
  'muschies' => true,
  'nilpferd' => true,
  'orgasmen' => true,
  'orgasmus' => true,
  'sadismus' => true,
  'scheisse' => true,
  'schisser' => true,
  'schlampe' => true,
  'schwuler' => true,
  'tittchen' => true,
  'transuse' => true,
  'trantüte' => true,
  'verdammt' => true,
  'vielfraß' => true,
  'witzbold' => true,
  'anzugaffe' => true,
  'arschloch' => true,
  'arschkeks' => true,
  'arschmade' => true,
  'aufgeilen' => true,
  'blödarsch' => true,
  'bruchbude' => true,
  'bumslokal' => true,
  'drecksack' => true,
  'drecksgör' => true,
  'dösbaddel' => true,
  'erarschen' => true,
  'fettarsch' => true,
  'fettbacke' => true,
  'fischkopp' => true,
  'flittchen' => true,
  'giftzwerg' => true,
  'hebephile' => true,
  'hodensack' => true,
  'hornochse' => true,
  'hurensohn' => true,
  'inzestuös' => true,
  'kackwurst' => true,
  'kackarsch' => true,
  'knalltüte' => true,
  'lahmarsch' => true,
  'lustmolch' => true,
  'miststück' => true,
  'onanieren' => true,
  'perverser' => true,
  'pissnelke' => true,
  'pissgurke' => true,
  'rotzfahne' => true,
  'sackratte' => true,
  'saftladen' => true,
  'scheissen' => true,
  'scheisser' => true,
  'schiesser' => true,
  'schlampen' => true,
  'schluffig' => true,
  'schwuchtl' => true,
  'schönling' => true,
  'shishkoff' => true,
  'ungeheuer' => true,
  'verarsche' => true,
  'verpissen' => true,
  'vollidiot' => true,
  'xbewertet' => true,
  'zimtzicke' => true,
  'zoophilie' => true,
  'abspritzen' => true,
  'affenarsch' => true,
  'ambiguität' => true,
  'ameisenbär' => true,
  'analritter' => true,
  'anscheißer' => true,
  'arschgeige' => true,
  'arschbacke' => true,
  'arschfotze' => true,
  'ausstoßend' => true,
  'beschissen' => true,
  'bettbrunza' => true,
  'brustwarze' => true,
  'dreckskerl' => true,
  'drecksnest' => true,
  'dumpfbacke' => true,
  'eindringen' => true,
  'ekelfresse' => true,
  'fettqualle' => true,
  'fickfehler' => true,
  'fickfresse' => true,
  'geschissen' => true,
  'hackfresse' => true,
  'hebephilie' => true,
  'hirnrissig' => true,
  'homofuerst' => true,
  'huhrensohn' => true,
  'hungerturm' => true,
  'kackbratze' => true,
  'kampflesbe' => true,
  'kotnascher' => true,
  'kümmerling' => true,
  'missgeburt' => true,
  'muterfiker' => true,
  'nebelkrähe' => true,
  'nuttensohn' => true,
  'pansexuell' => true,
  'pestbaeule' => true,
  'pissnelken' => true,
  'pädophiler' => true,
  'pädophilie' => true,
  'rotzlöffel' => true,
  'sackratten' => true,
  'sacktreter' => true,
  'schabracke' => true,
  'scheißhaus' => true,
  'schnackeln' => true,
  'schwuchtel' => true,
  'stinkfotze' => true,
  'sumpfgurke' => true,
  'verdammter' => true,
  'abtreibende' => true,
  'ambisexuell' => true,
  'ambosexuell' => true,
  'armleuchter' => true,
  'arschficker' => true,
  'arschlecker' => true,
  'arschlöcher' => true,
  'arschbolzen' => true,
  'arschkrampe' => true,
  'auberfeiger' => true,
  'ausgestoßen' => true,
  'bestialisch' => true,
  'blasenbonze' => true,
  'dorftrampel' => true,
  'dreckhammel' => true,
  'ejakulation' => true,
  'ejakulieren' => true,
  'furzgesicht' => true,
  'gebärmutter' => true,
  'hundeficker' => true,
  'hungerhaken' => true,
  'kotzbrocken' => true,
  'käsequanten' => true,
  'labertasche' => true,
  'lotterliese' => true,
  'lynchjustiz' => true,
  'morgenlatte' => true,
  'nymphomanie' => true,
  'pferdearsch' => true,
  'plattmachen' => true,
  'pornografie' => true,
  'proletensau' => true,
  'quacksalber' => true,
  'sackgesicht' => true,
  'scheisskerl' => true,
  'scheisskopf' => true,
  'scheißspiel' => true,
  'schwuchteln' => true,
  'sodomisiert' => true,
  'verfluchter' => true,
  'vollpfosten' => true,
  'volltrottel' => true,
  'wabbelbauch' => true,
  'waschlappen' => true,
  'wurzelzwerk' => true,
  'zimperliese' => true,
  'abtreibungen' => true,
  'affenschwanz' => true,
  'arschgesicht' => true,
  'bohnenstange' => true,
  'donnerwetter' => true,
  'dorfmatratze' => true,
  'fickschnitte' => true,
  'flachwichser' => true,
  'fleischklops' => true,
  'fotzenlecker' => true,
  'gewitterhexe' => true,
  'gottverdammt' => true,
  'kackschlampe' => true,
  'klugscheißer' => true,
  'masturbieren' => true,
  'mutterficker' => true,
  'pimmelberger' => true,
  'scheissdreck' => true,
  'scheissekopf' => true,
  'schnarchsack' => true,
  'schneepisser' => true,
  'schweinehund' => true,
  'staßenstrich' => true,
  'stinkstiefel' => true,
  'tratschtante' => true,
  'vergewaltigt' => true,
  'vollscheißen' => true,
  'arschkriecher' => true,
  'bauerntrampel' => true,
  'ejakulationen' => true,
  'fickschnitten' => true,
  'masturbierend' => true,
  'prostituierte' => true,
  'schnapsleiche' => true,
  'schweinebacke' => true,
  'spargeltarzan' => true,
  'vergewaltiger' => true,
  'vogelscheuche' => true,
  'akrotomophilie' => true,
  'arschgefickter' => true,
  'gehsteigpanzer' => true,
  'hosenscheisser' => true,
  'korintenkacker' => true,
  'schlappschwanz' => true,
  'teppichmuncher' => true,
  'vergewaltigung' => true,
  'brillenschlange' => true,
  'korinthenkacker' => true,
  'mastdarmakrobat' => true,
  'schleimscheißer' => true,
  'schreckschraube' => true,
  'schwanzlutscher' => true,
  'aushilfsnasenbär' => true,
  'schießbudenfigur' => true,
  'schweinepriester' => true,
  'bordsteinschwalbe' => true,
  'hängebauchschwein' => true,
  'randsteinschwalbe' => true,
  'backpfeifengesicht' => true,
  'solariumgrillhenne' => true,
  'hasenfußhosenscheißer' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anal',
      1 => 'ritter',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anal' => 1,
      'ritter' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bauern',
      1 => 'trampel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bauern' => 1,
      'trampel' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bloede',
      1 => 'kuh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bloede' => 1,
      'kuh' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blutige',
      1 => 'sau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blutige' => 1,
      'sau' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blöde',
      1 => 'gans',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blöde' => 1,
      'gans' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blöde',
      1 => 'kuh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blöde' => 1,
      'kuh' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'blöde',
      1 => 'stinkpot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'blöde' => 1,
      'stinkpot' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'breit',
      1 => 'sein',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'breit' => 1,
      'sein' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dreck',
      1 => 'sack',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dreck' => 1,
      'sack' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dreck',
      1 => 'sau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dreck' => 1,
      'sau' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'sau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'du' => 1,
      'sau' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'schwein',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'du' => 1,
      'schwein' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dummes',
      1 => 'huhn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dummes' => 1,
      'huhn' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dumpf',
      1 => 'backe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dumpf' => 1,
      'backe' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fauler',
      1 => 'sack',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fauler' => 1,
      'sack' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fauler',
      1 => 'zauber',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fauler' => 1,
      'zauber' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'feiger',
      1 => 'hund',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'feiger' => 1,
      'hund' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'flatter',
      1 => 'machen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'flatter' => 1,
      'machen' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'geile',
      1 => 'sau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'geile' => 1,
      'sau' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'geiler',
      1 => 'bock',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'geiler' => 1,
      'bock' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'halts',
      1 => 'maul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'halts' => 1,
      'maul' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hirnlose',
      1 => 'ochse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hirnlose' => 1,
      'ochse' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hässliger',
      1 => 'ziegenficker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hässliger' => 1,
      'ziegenficker' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ist',
      1 => 'was',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ist' => 1,
      'was' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kack',
      1 => 'wurst',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kack' => 1,
      'wurst' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kot',
      1 => 'nascher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kot' => 1,
      'nascher' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lahme',
      1 => 'ente',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lahme' => 1,
      'ente' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'leck',
      1 => 'mich',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'leck' => 1,
      'mich' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'links',
      1 => 'traeger',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'links' => 1,
      'traeger' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mieser',
      1 => 'stricher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mieser' => 1,
      'stricher' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'morgen',
      1 => 'latte',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'morgen' => 1,
      'latte' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'not',
      1 => 'geil',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'not' => 1,
      'geil' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ohne',
      1 => 'scheiß',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ohne' => 1,
      'scheiß' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'piss',
      1 => 'nelke',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'piss' => 1,
      'nelke' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'piss',
      1 => 'nelken',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'piss' => 1,
      'nelken' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'schnoodle',
      1 => 'noodle',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'schnoodle' => 1,
      'noodle' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'schwarzer',
      1 => 'affe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'schwarzer' => 1,
      'affe' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sturer',
      1 => 'bock',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sturer' => 1,
      'bock' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'teppich',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'teppich' => 1,
      'muncher' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'varpiss',
      1 => 'dich',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'varpiss' => 1,
      'dich' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'verdammte',
      1 => 'scheiãÿe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'verdammte' => 1,
      'scheiãÿe' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'verhurtes',
      1 => 'drecksgãr',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'verhurtes' => 1,
      'drecksgãr' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'verpiss',
      1 => 'dich',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'verpiss' => 1,
      'dich' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'verrückter',
      1 => 'mann',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'verrückter' => 1,
      'mann' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'voll',
      1 => 'pfosten',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'voll' => 1,
      'pfosten' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wertlos',
      1 => 'kind',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wertlos' => 1,
      'kind' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wichs',
      1 => 'container',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wichs' => 1,
      'container' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'bewertet',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'bewertet' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zieh',
      1 => 'leine',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zieh' => 1,
      'leine' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ah',
      1 => 'du',
      2 => 'schwein',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ah' => 2,
      'du' => 1,
      'schwein' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'stinkt',
      2 => 'mir',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'das' => 2,
      'stinkt' => 1,
      'mir' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fahr',
      1 => 'zur',
      2 => 'holle',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fahr' => 2,
      'zur' => 1,
      'holle' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fahr',
      1 => 'zur',
      2 => 'hölle',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fahr' => 2,
      'zur' => 1,
      'hölle' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'geh',
      1 => 'staub',
      2 => 'fressen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'geh' => 2,
      'staub' => 1,
      'fressen' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'halt',
      1 => 'deinen',
      2 => 'mund',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'halt' => 2,
      'deinen' => 1,
      'mund' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'halt',
      1 => 'die',
      2 => 'klappe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'halt' => 2,
      'die' => 1,
      'klappe' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ich',
      1 => 'hasse',
      2 => 'dich',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ich' => 2,
      'hasse' => 1,
      'dich' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ich',
      1 => 'liebe',
      2 => 'dich',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ich' => 2,
      'liebe' => 1,
      'dich' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ist',
      1 => 'mir',
      2 => 'scheißegal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ist' => 2,
      'mir' => 1,
      'scheißegal' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kannst',
      1 => 'mich',
      2 => 'mal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kannst' => 2,
      'mich' => 1,
      'mal' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lutsch',
      1 => 'meine',
      2 => 'eier',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lutsch' => 2,
      'meine' => 1,
      'eier' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'musst',
      1 => 'selbstmord',
      2 => 'begehen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'musst' => 2,
      'selbstmord' => 1,
      'begehen' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'schmeckst',
      1 => 'so',
      2 => 'gut',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'schmeckst' => 2,
      'so' => 1,
      'gut' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'so',
      1 => 'ein',
      2 => 'beschiß',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'so' => 2,
      'ein' => 1,
      'beschiß' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'so',
      1 => 'ein',
      2 => 'beschiãÿ',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'so' => 2,
      'ein' => 1,
      'beschiãÿ' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sohn',
      1 => 'einer',
      2 => 'hündin',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sohn' => 2,
      'einer' => 1,
      'hündin' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'spritz',
      1 => 'mich',
      2 => 'voll',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'spritz' => 2,
      'mich' => 1,
      'voll' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tick',
      1 => 'nicht',
      2 => 'ab',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tick' => 2,
      'nicht' => 1,
      'ab' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'was',
      1 => 'zur',
      2 => 'hölle',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'was' => 2,
      'zur' => 1,
      'hölle' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'am',
      1 => 'blitz',
      2 => 'geleckt',
      3 => 'haben',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'am' => 3,
      'blitz' => 2,
      'geleckt' => 1,
      'haben' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'ist',
      2 => 'ja',
      3 => 'kinderkacke',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'ist' => 2,
      'ja' => 1,
      'kinderkacke' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'ist',
      2 => 'mir',
      3 => 'furzegal',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'ist' => 2,
      'mir' => 1,
      'furzegal' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'ist',
      2 => 'mir',
      3 => 'scheißegal',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'ist' => 2,
      'mir' => 1,
      'scheißegal' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'ist',
      2 => 'mir',
      3 => 'scheiãÿegal',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'ist' => 2,
      'mir' => 1,
      'scheiãÿegal' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'ist',
      2 => 'voll',
      3 => 'nervig',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'ist' => 2,
      'voll' => 1,
      'nervig' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'macht',
      2 => 'mich',
      3 => 'verrückt',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'macht' => 2,
      'mich' => 1,
      'verrückt' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'stört',
      2 => 'mich',
      3 => 'total',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'stört' => 2,
      'mich' => 1,
      'total' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'das',
      1 => 'war',
      2 => 'zu',
      3 => 'einfach',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'das' => 3,
      'war' => 2,
      'zu' => 1,
      'einfach' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'geh',
      1 => 'ne',
      2 => 'kuh',
      3 => 'melken',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'geh' => 3,
      'ne' => 2,
      'kuh' => 1,
      'melken' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'geh',
      1 => 'ne',
      2 => 'kuh',
      3 => 'melken',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'geh' => 3,
      'ne' => 2,
      'kuh' => 1,
      'melken' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ich',
      1 => 'bin',
      2 => 'einfach',
      3 => 'abgedreht',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ich' => 3,
      'bin' => 2,
      'einfach' => 1,
      'abgedreht' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ist',
      1 => 'mir',
      2 => 'doch',
      3 => 'scheissegal',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ist' => 3,
      'mir' => 2,
      'doch' => 1,
      'scheissegal' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'luft',
      1 => 'im',
      2 => 'sack',
      3 => 'haben',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'luft' => 3,
      'im' => 2,
      'sack' => 1,
      'haben' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nur',
      1 => 'luft',
      2 => 'im',
      3 => 'sack',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nur' => 3,
      'luft' => 2,
      'im' => 1,
      'sack' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zeig',
      1 => 'mir',
      2 => 'deine',
      3 => 'pflaume',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'zeig' => 3,
      'mir' => 2,
      'deine' => 1,
      'pflaume' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zur',
      1 => 'holle',
      2 => 'mit',
      3 => 'dir',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'zur' => 3,
      'holle' => 2,
      'mit' => 1,
      'dir' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zur',
      1 => 'hölle',
      2 => 'mit',
      3 => 'dir',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'zur' => 3,
      'hölle' => 2,
      'mit' => 1,
      'dir' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'deine',
      1 => 'oma',
      2 => 'masturbiert',
      3 => 'im',
      4 => 'stehen',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'deine' => 4,
      'oma' => 3,
      'masturbiert' => 2,
      'im' => 1,
      'stehen' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hat',
      1 => 'wohl',
      2 => 'am',
      3 => 'blitz',
      4 => 'geleckt',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hat' => 4,
      'wohl' => 3,
      'am' => 2,
      'blitz' => 1,
      'geleckt' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'gehst',
      2 => 'mir',
      3 => 'auf',
      4 => 'den',
      5 => 'sack',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'du' => 5,
      'gehst' => 4,
      'mir' => 3,
      'auf' => 2,
      'den' => 1,
      'sack' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'gehst',
      2 => 'mir',
      3 => 'voll',
      4 => 'auf',
      5 => 'den',
      6 => 'sack',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'du' => 6,
      'gehst' => 5,
      'mir' => 4,
      'voll' => 3,
      'auf' => 2,
      'den' => 1,
      'sack' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ich',
      1 => 'werde',
      2 => 'dich',
      3 => 'lecken',
      4 => 'bis',
      5 => 'du',
      6 => 'schreist',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'ich' => 6,
      'werde' => 5,
      'dich' => 4,
      'lecken' => 3,
      'bis' => 2,
      'du' => 1,
      'schreist' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ich',
      1 => 'will',
      2 => 'dass',
      3 => 'du',
      4 => 'mich',
      5 => 'hier',
      6 => 'anfasst',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'ich' => 6,
      'will' => 5,
      'dass' => 4,
      'du' => 3,
      'mich' => 2,
      'hier' => 1,
      'anfasst' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kannst',
      1 => 'mit',
      2 => 'mir',
      3 => 'machen',
      4 => 'was',
      5 => 'du',
      6 => 'willst',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'kannst' => 6,
      'mit' => 5,
      'mir' => 4,
      'machen' => 3,
      'was' => 2,
      'du' => 1,
      'willst' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ich',
      1 => 'will',
      2 => 'dass',
      3 => 'du',
      4 => 'mir',
      5 => 'ins',
      6 => 'gesicht',
      7 => 'spritzt',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'ich' => 7,
      'will' => 6,
      'dass' => 5,
      'du' => 4,
      'mir' => 3,
      'ins' => 2,
      'gesicht' => 1,
      'spritzt' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'siehst',
      1 => 'so',
      2 => 'sexy',
      3 => 'aus',
      4 => 'wenn',
      5 => 'du',
      6 => 'das',
      7 => 'tust',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'siehst' => 7,
      'so' => 6,
      'sexy' => 5,
      'aus' => 4,
      'wenn' => 3,
      'du' => 2,
      'das' => 1,
      'tust' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sie',
      1 => 'sind',
      2 => 'das',
      3 => 'essen',
      4 => 'und',
      5 => 'wir',
      6 => 'sind',
      7 => 'die',
      8 => 'jã¤ger',
    ),
    'badPhraseLength' => 9,
    'badPhraseArrayTable' => 
    array (
      'sie' => 8,
      'sind' => 2,
      'das' => 6,
      'essen' => 5,
      'und' => 4,
      'wir' => 3,
      'die' => 1,
      'jã¤ger' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 97;

