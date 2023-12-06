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
  'cu' => true,
  'buk' => true,
  'idz' => true,
  'kút' => true,
  'moč' => true,
  'pes' => true,
  'rit' => true,
  'riť' => true,
  'sto' => true,
  'crkn' => true,
  'drbo' => true,
  'drek' => true,
  'fena' => true,
  'geno' => true,
  'gumb' => true,
  'jeba' => true,
  'jebe' => true,
  'jebo' => true,
  'kozy' => true,
  'križ' => true,
  'muca' => true,
  'odrb' => true,
  'ojeb' => true,
  'osli' => true,
  'pica' => true,
  'piča' => true,
  'puša' => true,
  'rasy' => true,
  'scal' => true,
  'seme' => true,
  'sere' => true,
  'spol' => true,
  'srac' => true,
  'srat' => true,
  'stat' => true,
  'suky' => true,
  'ujeb' => true,
  'urin' => true,
  'vtak' => true,
  'zlom' => true,
  'číča' => true,
  'besni' => true,
  'blbec' => true,
  'brzda' => true,
  'buzik' => true,
  'buzna' => true,
  'bučať' => true,
  'cecky' => true,
  'chtíč' => true,
  'chuja' => true,
  'cikať' => true,
  'coura' => true,
  'curak' => true,
  'debil' => true,
  'degen' => true,
  'dilda' => true,
  'drbat' => true,
  'fajka' => true,
  'falus' => true,
  'fetiš' => true,
  'gumbi' => true,
  'hovno' => true,
  'jajca' => true,
  'jebat' => true,
  'jebač' => true,
  'jebot' => true,
  'jezen' => true,
  'joške' => true,
  'kakec' => true,
  'kohút' => true,
  'kokot' => true,
  'krava' => true,
  'krysa' => true,
  'kunda' => true,
  'kurba' => true,
  'kurbe' => true,
  'kurva' => true,
  'lincc' => true,
  'lopty' => true,
  'mater' => true,
  'mrdat' => true,
  'mrdna' => true,
  'mýval' => true,
  'nasip' => true,
  'neger' => true,
  'negri' => true,
  'nimfo' => true,
  'nymfa' => true,
  'orgie' => true,
  'otepy' => true,
  'pažba' => true,
  'peder' => true,
  'pekel' => true,
  'peklo' => true,
  'pizde' => true,
  'prdel' => true,
  'psice' => true,
  'pysky' => true,
  'ráfik' => true,
  'sadze' => true,
  'smrad' => true,
  'somár' => true,
  'somãr' => true,
  'splav' => true,
  'tchor' => true,
  'trdlo' => true,
  'trtko' => true,
  'trulo' => true,
  'vtaka' => true,
  'zadok' => true,
  'zasun' => true,
  'črnci' => true,
  'črnuh' => true,
  'čurák' => true,
  'análny' => true,
  'baraba' => true,
  'blbosť' => true,
  'buchty' => true,
  'chmulo' => true,
  'chruno' => true,
  'chumaj' => true,
  'cicina' => true,
  'cicinu' => true,
  'cundra' => true,
  'curaka' => true,
  'dement' => true,
  'dievky' => true,
  'fagoti' => true,
  'fajcit' => true,
  'filcka' => true,
  'frcina' => true,
  'frcinu' => true,
  'gombík' => true,
  'hajzel' => true,
  'hrádza' => true,
  'jebači' => true,
  'jebivo' => true,
  'kohúty' => true,
  'kokota' => true,
  'kreten' => true,
  'kretén' => true,
  'krista' => true,
  'krvavo' => true,
  'krvavý' => true,
  'miešok' => true,
  'nacist' => true,
  'odjebi' => true,
  'odvaha' => true,
  'orgija' => true,
  'orgije' => true,
  'papluh' => true,
  'pichat' => true,
  'piäka' => true,
  'podjeb' => true,
  'potkan' => true,
  'potrat' => true,
  'prasec' => true,
  'prdiet' => true,
  'prodor' => true,
  'rektum' => true,
  'rozeta' => true,
  'sodoma' => true,
  'somáre' => true,
  'spizdi' => true,
  'splavi' => true,
  'sranje' => true,
  'teploš' => true,
  'trapko' => true,
  'trkvas' => true,
  'trtkat' => true,
  'tulpas' => true,
  'ujebat' => true,
  'usrano' => true,
  'vagine' => true,
  'vagína' => true,
  'voajer' => true,
  'vrzgat' => true,
  'vsivak' => true,
  'zarásť' => true,
  'zjebať' => true,
  'zoofil' => true,
  'zúrivý' => true,
  'škrata' => true,
  'asszmrd' => true,
  'bukvica' => true,
  'bzdocha' => true,
  'courvar' => true,
  'dojebat' => true,
  'dojebať' => true,
  'drbacka' => true,
  'dristat' => true,
  'egoizem' => true,
  'erekcia' => true,
  'felacio' => true,
  'felácie' => true,
  'flandra' => true,
  'frcguma' => true,
  'fľandra' => true,
  'gombíky' => true,
  'imbecil' => true,
  'jebacka' => true,
  'jebemti' => true,
  'jeblina' => true,
  'jebnuty' => true,
  'koberec' => true,
  'kokotko' => true,
  'kotiček' => true,
  'kreténi' => true,
  'mačička' => true,
  'nacista' => true,
  'nasávať' => true,
  'odjebat' => true,
  'orgazem' => true,
  'orgazmy' => true,
  'patchor' => true,
  'pedofil' => true,
  'petelin' => true,
  'picifuz' => true,
  'picovat' => true,
  'pohoten' => true,
  'pojebať' => true,
  'pokokot' => true,
  'poprsie' => true,
  'potraty' => true,
  'prasica' => true,
  'prasivy' => true,
  'preklet' => true,
  'príruba' => true,
  'ropucha' => true,
  'sadista' => true,
  'sadizem' => true,
  'sesanje' => true,
  'sečnica' => true,
  'shlapka' => true,
  'skatula' => true,
  'skrotum' => true,
  'skurvit' => true,
  'sodomia' => true,
  'spermie' => true,
  'spomait' => true,
  'súložiť' => true,
  'sýkorka' => true,
  'truhlik' => true,
  'vygrcok' => true,
  'vyhŕkol' => true,
  'vyjebať' => true,
  'výstrek' => true,
  'zadnjik' => true,
  'zajebal' => true,
  'zajebať' => true,
  'zasraný' => true,
  'zatúžil' => true,
  'zvratok' => true,
  'zvrhlík' => true,
  'záprdok' => true,
  'štrbina' => true,
  'blbecoff' => true,
  'bodnutie' => true,
  'bradavka' => true,
  'bukvicak' => true,
  'buzerant' => true,
  'chamajda' => true,
  'divjanje' => true,
  'doparoma' => true,
  'egoizmus' => true,
  'ejakulat' => true,
  'ejakulát' => true,
  'erekcija' => true,
  'felacija' => true,
  'hebefili' => true,
  'incestan' => true,
  'incestní' => true,
  'jebovina' => true,
  'klitoris' => true,
  'kokotina' => true,
  'kokotsky' => true,
  'konečník' => true,
  'lastovka' => true,
  'lynčovať' => true,
  'mazohist' => true,
  'nadrbany' => true,
  'nadrzany' => true,
  'nadržaný' => true,
  'najebany' => true,
  'nakazeny' => true,
  'násilník' => true,
  'ojebavat' => true,
  'orgazmov' => true,
  'orgazmus' => true,
  'ozembuch' => true,
  'pakirnik' => true,
  'panchart' => true,
  'petelini' => true,
  'pichanie' => true,
  'picovina' => true,
  'picovsky' => true,
  'pirdolic' => true,
  'platišče' => true,
  'podrbany' => true,
  'pojebany' => true,
  'pokončna' => true,
  'postaviť' => true,
  'potratár' => true,
  'prejebat' => true,
  'prekleto' => true,
  'preproga' => true,
  'prijebať' => true,
  'prodreti' => true,
  'ritopich' => true,
  'sadizmus' => true,
  'semenník' => true,
  'skurveny' => true,
  'sodomija' => true,
  'spomaliť' => true,
  'urinarno' => true,
  'vydrbany' => true,
  'vyjebany' => true,
  'zajebany' => true,
  'zapiceny' => true,
  'zoofília' => true,
  'živalski' => true,
  'beštiálne' => true,
  'beštiálny' => true,
  'bradavico' => true,
  'brutalita' => true,
  'chňapnout' => true,
  'cicinbrus' => true,
  'ejakuluje' => true,
  'hebefilna' => true,
  'hebefilné' => true,
  'hebefília' => true,
  'kmetavzar' => true,
  'maternica' => true,
  'nadávanie' => true,
  'nahnevaný' => true,
  'narazniky' => true,
  'nedojebok' => true,
  'nedomrdok' => true,
  'objebavac' => true,
  'ochechula' => true,
  'pansexuál' => true,
  'pedofília' => true,
  'pedofílik' => true,
  'pichnutie' => true,
  'pobehlica' => true,
  'podpicnik' => true,
  'popicovka' => true,
  'posilstva' => true,
  'posilstvo' => true,
  'poželenje' => true,
  'prejebany' => true,
  'preniknúť' => true,
  'prijebany' => true,
  'pripiceny' => true,
  'razjeziti' => true,
  'skokoteny' => true,
  'skurvysyn' => true,
  'ugrabitev' => true,
  'vijačenje' => true,
  'vyjebanec' => true,
  'vykurveny' => true,
  'vytrtkany' => true,
  'vzkliknil' => true,
  'zabitseba' => true,
  'zkurvysyn' => true,
  'zoofilija' => true,
  'ambisexuál' => true,
  'ambosexuál' => true,
  'beštialita' => true,
  'ejakulatov' => true,
  'ejakuliran' => true,
  'ejakulácia' => true,
  'ejakulácie' => true,
  'hebefilija' => true,
  'lastovička' => true,
  'lynčovanie' => true,
  'masochista' => true,
  'masturbira' => true,
  'masturbuje' => true,
  'nacistický' => true,
  'nacistično' => true,
  'nymfománia' => true,
  'pedofilijo' => true,
  'pedofilski' => true,
  'perverznež' => true,
  'podjebavat' => true,
  'prenikanie' => true,
  'prijebanec' => true,
  'prirobnico' => true,
  'striekanie' => true,
  'synofafena' => true,
  'vykokoteny' => true,
  'vypatlanec' => true,
  'znásilnený' => true,
  'zvrátenosť' => true,
  'bestialnost' => true,
  'ejakulacija' => true,
  'ejakulacije' => true,
  'ejakulacijo' => true,
  'ejakulovaný' => true,
  'hebefilovia' => true,
  'masturbovať' => true,
  'masturbácia' => true,
  'nimfomanija' => true,
  'perverznost' => true,
  'pornografia' => true,
  'prostitutka' => true,
  'prostitútka' => true,
  'rozhoďnožka' => true,
  'sodomiziran' => true,
  'sodomizovať' => true,
  'znásilnenia' => true,
  'znásilnenie' => true,
  'ambisexuálne' => true,
  'kohútvýhonok' => true,
  'masturbirati' => true,
  'panseksualni' => true,
  'pornografija' => true,
  'posiljevalec' => true,
  'sakramentsky' => true,
  'skrutkovanie' => true,
  'sodomizovaný' => true,
  'testisularno' => true,
  'akrotomofília' => true,
  'ambiseksualni' => true,
  'ambisexualita' => true,
  'amboseksualec' => true,
  'neonacistický' => true,
  'akrotomofilija' => true,
  'ambiseksualnost' => true,
  'samozadovoljevanje' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boha',
      1 => 'jeho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'boha' => 1,
      'jeho' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boha',
      1 => 'vyjebaneho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'boha' => 1,
      'vyjebaneho' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bohom',
      1 => 'prekliaty',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bohom' => 1,
      'prekliaty' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'do',
      1 => 'boha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'do' => 1,
      'boha' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'do',
      1 => 'pice',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'do' => 1,
      'pice' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'do',
      1 => 'riti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'do' => 1,
      'riti' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'drz',
      1 => 'hubu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'drz' => 1,
      'hubu' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'drz',
      1 => 'papulu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'drz' => 1,
      'papulu' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'drz',
      1 => 'picu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'drz' => 1,
      'picu' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fudge',
      1 => 'balič',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fudge' => 1,
      'balič' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fuki',
      1 => 'se',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fuki' => 1,
      'se' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jak',
      1 => 'najebanych',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jak' => 1,
      'najebanych' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebela',
      1 => 'cesta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebela' => 1,
      'cesta' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'boha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 1,
      'boha' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebena',
      1 => 'piã¨ka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebena' => 1,
      'piã¨ka' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebnut',
      1 => 'niekomu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebnut' => 1,
      'niekomu' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kmet',
      1 => 'zarukan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kmet' => 1,
      'zarukan' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koji',
      1 => 'kurac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koji' => 1,
      'kurac' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurbin',
      1 => 'sin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kurbin' => 1,
      'sin' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mat',
      1 => 'kurja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mat' => 1,
      'kurja' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mat',
      1 => 'popici',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mat' => 1,
      'popici' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'matka',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'matka' => 1,
      'fucker' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'močová',
      1 => 'trubica',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'močová' => 1,
      'trubica' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'picu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'na' => 1,
      'picu' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nadrbat',
      1 => 'sa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nadrbat' => 1,
      'sa' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'odrbat',
      1 => 'niekoho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'odrbat' => 1,
      'niekoho' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pismo',
      1 => 'konja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pismo' => 1,
      'konja' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'po',
      1 => 'pici',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'po' => 1,
      'pici' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pojeb',
      1 => 'sa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pojeb' => 1,
      'sa' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popici',
      1 => 'front',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'popici' => 1,
      'front' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'prijebat',
      1 => 'niekomu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'prijebat' => 1,
      'niekomu' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'proklet',
      1 => 'cigan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'proklet' => 1,
      'cigan' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'psie',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'psie' => 1,
      'fucker' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puši',
      1 => 'kurac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puši' => 1,
      'kurac' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'robit',
      1 => 'chujoviny',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'robit' => 1,
      'chujoviny' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'robit',
      1 => 'kokotiny',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'robit' => 1,
      'kokotiny' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'robit',
      1 => 'picoviny',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'robit' => 1,
      'picoviny' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'satan',
      1 => 'dieå¥a',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'satan' => 1,
      'dieå¥a' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sramne',
      1 => 'ustnice',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sramne' => 1,
      'ustnice' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'stratã­å',
      1 => 'ä¾udstvo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'stratã­å' => 1,
      'ä¾udstvo' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tristo',
      1 => 'hrmenych',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tristo' => 1,
      'hrmenych' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tristo',
      1 => 'kosmatih',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tristo' => 1,
      'kosmatih' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tvoja',
      1 => 'matka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tvoja' => 1,
      'matka' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ty',
      1 => 'sedlak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ty' => 1,
      'sedlak' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ty',
      1 => 'vyskrab',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ty' => 1,
      'vyskrab' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ty',
      1 => 'zebrak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ty' => 1,
      'zebrak' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ujebavat',
      1 => 'sa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ujebavat' => 1,
      'sa' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vydrnkat',
      1 => 'si',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vydrnkat' => 1,
      'si' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vyhon',
      1 => 'si',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vyhon' => 1,
      'si' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vykokotit',
      1 => 'sa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vykokotit' => 1,
      'sa' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vysuchat',
      1 => 'zenu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vysuchat' => 1,
      'zenu' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'hodnotené',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'hodnotené' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'ocenjeno',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'ocenjeno' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zadrbat',
      1 => 'nieco',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zadrbat' => 1,
      'nieco' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zasunut',
      1 => 'zasuvat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zasunut' => 1,
      'zasuvat' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zjebat',
      1 => 'sa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zjebat' => 1,
      'sa' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zobanie',
      1 => 'vták',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zobanie' => 1,
      'vták' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bodaj',
      1 => 'ta',
      2 => 'porantalo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bodaj' => 2,
      'ta' => 1,
      'porantalo' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'byt',
      1 => 'v',
      2 => 'pici',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'byt' => 2,
      'v' => 1,
      'pici' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chod',
      1 => 'do',
      2 => 'matere',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chod' => 2,
      'do' => 1,
      'matere' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hodit',
      1 => 'si',
      2 => 'dlanovku',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hodit' => 2,
      'si' => 1,
      'dlanovku' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'andela',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'andela' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'hrob',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'hrob' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'kurvu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'kurvu' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mamu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'mamu' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'otca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'otca' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'picu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'picu' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'skoricu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'skoricu' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'tvojho',
      2 => 'anciasa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'tvojho' => 1,
      'anciasa' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'tvojho',
      2 => 'ancikrista',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'tvojho' => 1,
      'ancikrista' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lestit',
      1 => 'si',
      2 => 'bambus',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lestit' => 2,
      'si' => 1,
      'bambus' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamu',
      1 => 'ti',
      2 => 'nabijem',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mamu' => 2,
      'ti' => 1,
      'nabijem' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'o',
      1 => 'picny',
      2 => 'chlp',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'o' => 2,
      'picny' => 1,
      'chlp' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oh',
      1 => 'dopeckla',
      2 => 'nie',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'oh' => 2,
      'dopeckla' => 1,
      'nie' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pal',
      1 => 'do',
      2 => 'riti',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pal' => 2,
      'do' => 1,
      'riti' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pejt',
      1 => 'u',
      2 => 'rt',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pejt' => 2,
      'u' => 1,
      'rt' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'si',
      2 => 'prifuknjen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 2,
      'si' => 1,
      'prifuknjen' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'ti',
      2 => 'bosanska',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 2,
      'ti' => 1,
      'bosanska' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'ti',
      2 => 'materna',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 2,
      'ti' => 1,
      'materna' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'potegn',
      1 => 'mi',
      2 => 'ga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'potegn' => 2,
      'mi' => 1,
      'ga' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slak',
      1 => 'to',
      2 => 'trafil',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'slak' => 2,
      'to' => 1,
      'trafil' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'to',
      1 => 'je',
      2 => 'gay',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'to' => 2,
      'je' => 1,
      'gay' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tristo',
      1 => 'kosmatih',
      2 => 'medvedov',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tristo' => 2,
      'kosmatih' => 1,
      'medvedov' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ty',
      1 => 'suka',
      2 => 'vyjebana',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ty' => 2,
      'suka' => 1,
      'vyjebana' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vrečka',
      1 => 'z',
      2 => 'žogo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vrečka' => 2,
      'z' => 1,
      'žogo' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vyser',
      1 => 'si',
      2 => 'oko',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vyser' => 2,
      'si' => 1,
      'oko' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'z',
      1 => 'kurvy',
      2 => 'syn',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'z' => 2,
      'kurvy' => 1,
      'syn' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chod',
      1 => 'materi',
      2 => 'do',
      3 => 'pice',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chod' => 3,
      'materi' => 2,
      'do' => 1,
      'pice' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'do',
      1 => 'pice',
      2 => 'vyjebanej',
      3 => 'skurvenej',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'do' => 3,
      'pice' => 2,
      'vyjebanej' => 1,
      'skurvenej' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fuki',
      1 => 'se',
      2 => 'u',
      3 => 'rt',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'fuki' => 3,
      'se' => 2,
      'u' => 1,
      'rt' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'picu',
      2 => 'tvojej',
      3 => 'matere',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'picu' => 2,
      'tvojej' => 1,
      'matere' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ta',
      2 => 'do',
      3 => 'huby',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ta' => 2,
      'do' => 1,
      'huby' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ta',
      2 => 'do',
      3 => 'papule',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ta' => 2,
      'do' => 1,
      'papule' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ta',
      2 => 'ty',
      3 => 'chuj',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ta' => 2,
      'ty' => 1,
      'chuj' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'picu',
      3 => 'materinu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'picu' => 1,
      'materinu' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'osral',
      1 => 'som',
      2 => 'ti',
      3 => 'picu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'osral' => 3,
      'som' => 2,
      'ti' => 1,
      'picu' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pojeb',
      1 => 'sa',
      2 => 'do',
      3 => 'huby',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pojeb' => 3,
      'sa' => 2,
      'do' => 1,
      'huby' => 0,
    ),
  ),
  97 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pojeb',
      1 => 'sa',
      2 => 'do',
      3 => 'papule',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pojeb' => 3,
      'sa' => 2,
      'do' => 1,
      'papule' => 0,
    ),
  ),
  98 => 
  array (
    'badPhrase' => 
    array (
      0 => 'strela',
      1 => 'ti',
      2 => 'do',
      3 => 'matere',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'strela' => 3,
      'ti' => 2,
      'do' => 1,
      'matere' => 0,
    ),
  ),
  99 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tih',
      1 => 'bod',
      2 => 'pa',
      3 => 'fafi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tih' => 3,
      'bod' => 2,
      'pa' => 1,
      'fafi' => 0,
    ),
  ),
  100 => 
  array (
    'badPhrase' => 
    array (
      0 => 'u',
      1 => 'rt',
      2 => 'se',
      3 => 'kausn',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'u' => 3,
      'rt' => 2,
      'se' => 1,
      'kausn' => 0,
    ),
  ),
  101 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ja',
      2 => 'tvojho',
      3 => 'boha',
      4 => 'vyjebaneho',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ja' => 3,
      'tvojho' => 2,
      'boha' => 1,
      'vyjebaneho' => 0,
    ),
  ),
  102 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'svatu',
      3 => 'mariu',
      4 => 'kurvu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'svatu' => 2,
      'mariu' => 1,
      'kurvu' => 0,
    ),
  ),
  103 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'vam',
      2 => 'ho',
      3 => 'tam',
      4 => 'az',
      5 => 'po',
      6 => 'koren',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 6,
      'vam' => 5,
      'ho' => 4,
      'tam' => 3,
      'az' => 2,
      'po' => 1,
      'koren' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 104;

