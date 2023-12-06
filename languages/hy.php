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
  'boz' => true,
  'jaj' => true,
  'poz' => true,
  'vor' => true,
  'բոբ' => true,
  'դիք' => true,
  'երք' => true,
  'էշի' => true,
  'հոր' => true,
  'շիթ' => true,
  'ռաք' => true,
  'սաք' => true,
  'տաք' => true,
  'տիտ' => true,
  'blig' => true,
  'ccox' => true,
  'gyot' => true,
  'qatz' => true,
  'rakm' => true,
  'անալ' => true,
  'բլիթ' => true,
  'բում' => true,
  'դինք' => true,
  'խլել' => true,
  'կնոբ' => true,
  'կուլ' => true,
  'մեզի' => true,
  'նազի' => true,
  'նիպլ' => true,
  'սեքս' => true,
  'տիտտ' => true,
  'ցում' => true,
  'belek' => true,
  'boots' => true,
  'bouts' => true,
  'chent' => true,
  'esheg' => true,
  'gogov' => true,
  'gomik' => true,
  'sriga' => true,
  'vorig' => true,
  'xaxpa' => true,
  'աբորտ' => true,
  'անուս' => true,
  'դայակ' => true,
  'դժոխք' => true,
  'դուչե' => true,
  'մղում' => true,
  'նիգեր' => true,
  'նուոկ' => true,
  'պենիս' => true,
  'պղինձ' => true,
  'պոռնո' => true,
  'ռապեր' => true,
  'ռումփ' => true,
  'սեքսը' => true,
  'սոդոմ' => true,
  'սրիկա' => true,
  'վոլվա' => true,
  'փոստը' => true,
  'փրչոտ' => true,
  'ֆագոտ' => true,
  'ֆետիշ' => true,
  'aboosh' => true,
  'agarka' => true,
  'bornig' => true,
  'khawal' => true,
  'matpuc' => true,
  'pornik' => true,
  'poshde' => true,
  'takank' => true,
  'ածական' => true,
  'բլանկը' => true,
  'բուետա' => true,
  'գաղտնի' => true,
  'դրսում' => true,
  'զոոֆիլ' => true,
  'լատեքս' => true,
  'լեգենդ' => true,
  'ծածկոց' => true,
  'կեղծիք' => true,
  'կեղտոտ' => true,
  'հենթաի' => true,
  'հիտլեր' => true,
  'մանանա' => true,
  'մկնիկը' => true,
  'նացիստ' => true,
  'պեկկեր' => true,
  'պերսեր' => true,
  'պոռնիկ' => true,
  'ռապինգ' => true,
  'սադիզմ' => true,
  'սադիստ' => true,
  'սոդոմի' => true,
  'սպերմա' => true,
  'վագինա' => true,
  'ցնցում' => true,
  'փխրուն' => true,
  'օրգազմ' => true,
  'ֆլանկը' => true,
  'anasoon' => true,
  'gondone' => true,
  'ndzrevs' => true,
  'pozavak' => true,
  'tstsogh' => true,
  'voradoo' => true,
  'ամուսին' => true,
  'բասթարդ' => true,
  'բոյֆլես' => true,
  'բռնարար' => true,
  'էգոտիզմ' => true,
  'էրեկցիա' => true,
  'լինխինգ' => true,
  'կոկորդը' => true,
  'հագնված' => true,
  'հուզված' => true,
  'նեոնազի' => true,
  'շիկահեր' => true,
  'շիկացած' => true,
  'շնչափող' => true,
  'պեդոֆիլ' => true,
  'ռեկտուս' => true,
  'սոդոմիզ' => true,
  'վիագրան' => true,
  'ֆալլուս' => true,
  'pezeveng' => true,
  'ամուսինս' => true,
  'անջատում' => true,
  'առնանդամ' => true,
  'արգումեն' => true,
  'արյունոտ' => true,
  'բիթերներ' => true,
  'գնդակներ' => true,
  'դոշիկներ' => true,
  'զոոֆիլիա' => true,
  'թափթփված' => true,
  'կլիտորիս' => true,
  'հեբեոֆիլ' => true,
  'մազոխիստ' => true,
  'մասոխիստ' => true,
  'նիգերներ' => true,
  'տեստիկլե' => true,
  'ֆագոտներ' => true,
  'ֆանտազիա' => true,
  'աբորտաբան' => true,
  'աբորտուար' => true,
  'բախումներ' => true,
  'բորբոքում' => true,
  'բուլդոզեր' => true,
  'բռնաբարող' => true,
  'բրիտանացի' => true,
  'թափանցում' => true,
  'լաբիացիան' => true,
  'կլիտորներ' => true,
  'կոտլետներ' => true,
  'հեբեֆիլիա' => true,
  'հեգնանքով' => true,
  'մորուքներ' => true,
  'պեդոֆիլիա' => true,
  'պտուտակով' => true,
  'սերմնացան' => true,
  'սիրողական' => true,
  'ստրուկներ' => true,
  'փչացնելով' => true,
  'օրգազմներ' => true,
  'gandeleesh' => true,
  'բռնաբարված' => true,
  'էյակուլյաժ' => true,
  'կոկտեյլներ' => true,
  'ուշացումով' => true,
  'աստվածուհին' => true,
  'հեբեոֆիլներ' => true,
  'պանսեքսուալ' => true,
  'պոռնոգրաֆիա' => true,
  'ցանկություն' => true,
  'աբորտուարներ' => true,
  'ամբիսեքսուալ' => true,
  'էյակուլացված' => true,
  'էյակուլյացիա' => true,
  'մաստուրբացիա' => true,
  'ներթափանցում' => true,
  'շնչառություն' => true,
  'սոդոմիզացված' => true,
  'սպերմատոզոիդ' => true,
  'ակրոտոմոֆիլիա' => true,
  'կուննիլինգուս' => true,
  'բռնաբարություն' => true,
  'դավաճանություն' => true,
  'էյակուլյացիաներ' => true,
  'անչափահասություն' => true,
  'ամբիսեքսուալություն' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'agarki',
      1 => 'cnunt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'agarki' => 1,
      'cnunt' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'barab',
      1 => 'gelir',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'barab' => 1,
      'gelir' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bozi',
      1 => 'tghah',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bozi' => 1,
      'tghah' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bozi',
      1 => 'txa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bozi' => 1,
      'txa' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bozi',
      1 => 'vastak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bozi' => 1,
      'vastak' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eshi',
      1 => 'klir',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'eshi' => 1,
      'klir' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eshoo',
      1 => 'klookh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'eshoo' => 1,
      'klookh' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gandon',
      1 => 'pchogh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gandon' => 1,
      'pchogh' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gelirs',
      1 => 'dzedze',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gelirs' => 1,
      'dzedze' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'glirs',
      1 => 'beraned',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'glirs' => 1,
      'beraned' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kakeh',
      1 => 'geradzes',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kakeh' => 1,
      'geradzes' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kilirit',
      1 => 'kunem',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kilirit' => 1,
      'kunem' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klirs',
      1 => 'cces',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'klirs' => 1,
      'cces' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klirs',
      1 => 'tstses',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'klirs' => 1,
      'tstses' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klirus',
      1 => 'tstsi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'klirus' => 1,
      'tstsi' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunem',
      1 => 'azged',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kunem' => 1,
      'azged' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunem',
      1 => 'cext',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kunem' => 1,
      'cext' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunem',
      1 => 'voret',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kunem' => 1,
      'voret' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lavet',
      1 => 'kunem',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lavet' => 1,
      'kunem' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lureh',
      1 => 'eshookuloukh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lureh' => 1,
      'eshookuloukh' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamat',
      1 => 'kounem',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mamat' => 1,
      'kounem' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mayr',
      1 => 'koonadz',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mayr' => 1,
      'koonadz' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mayr',
      1 => 'koonogh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mayr' => 1,
      'koonogh' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mayr',
      1 => 'koonvadz',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mayr' => 1,
      'koonvadz' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mayret',
      1 => 'kounem',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mayret' => 1,
      'kounem' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'metz',
      1 => 'dzizik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'metz' => 1,
      'dzizik' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mored',
      1 => 'tsake',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mored' => 1,
      'tsake' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'okdtagorcac',
      1 => 'gandon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'okdtagorcac' => 1,
      'gandon' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'peraned',
      1 => 'kaknem',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'peraned' => 1,
      'kaknem' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'porniki',
      1 => 'bala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'porniki' => 1,
      'bala' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ptsi',
      1 => 'maz',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ptsi' => 1,
      'maz' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putzi',
      1 => 'maz',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'putzi' => 1,
      'maz' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qaqem',
      1 => 'glkhid',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qaqem' => 1,
      'glkhid' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qunem',
      1 => 'beranet',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qunem' => 1,
      'beranet' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shan',
      1 => 'tula',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shan' => 1,
      'tula' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tapem',
      1 => 'yeresid',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tapem' => 1,
      'yeresid' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'գնահատված',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'գնահատված' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'գորգի',
      1 => 'մուշտակ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'գորգի' => 1,
      'մուշտակ' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'էշլին',
      1 => 'բրուք',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'էշլին' => 1,
      'բրուք' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'կեցցե',
      1 => 'հիտլերը',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'կեցցե' => 1,
      'հիտլերը' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'մեդիսոն',
      1 => 'պարկեր',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'մեդիսոն' => 1,
      'պարկեր' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'շաղ',
      1 => 'տալ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'շաղ' => 1,
      'տալ' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'շան',
      1 => 'շագանակագույն',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'շան' => 1,
      'շագանակագույն' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'որդին',
      1 => 'որդին',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'որդին' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'սեռական',
      1 => 'հարաբերություն',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'սեռական' => 1,
      'հարաբերություն' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'սուտ',
      1 => 'է',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'սուտ' => 1,
      'է' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'քորթնի',
      1 => 'քամմզ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'քորթնի' => 1,
      'քամմզ' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bizdeg',
      1 => 'glir',
      2 => 'unice',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bizdeg' => 2,
      'glir' => 1,
      'unice' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cces',
      1 => 'hors',
      2 => 'kliry',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cces' => 2,
      'hors' => 1,
      'kliry' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'choratsats',
      1 => 'ookhti',
      2 => 'poots',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'choratsats' => 2,
      'ookhti' => 1,
      'poots' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'de',
      1 => 'nah',
      2 => 'hoy',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'de' => 2,
      'nah' => 1,
      'hoy' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eh',
      1 => 'shoo',
      2 => 'dtzak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'eh' => 2,
      'shoo' => 1,
      'dtzak' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hima',
      1 => 'glires',
      2 => 'lezeh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hima' => 2,
      'glires' => 1,
      'lezeh' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kakem',
      1 => 'beranit',
      2 => 'mech',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kakem' => 2,
      'beranit' => 1,
      'mech' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kakes',
      1 => 'ger',
      2 => 'merakoun',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kakes' => 2,
      'ger' => 1,
      'merakoun' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klris',
      1 => 'glookh',
      2 => '­',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'klris' => 2,
      'glookh' => 1,
      '­' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunem',
      1 => 'lavid',
      2 => 'beran',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kunem' => 2,
      'lavid' => 1,
      'beran' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunem',
      1 => 'mored',
      2 => 'tsake',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kunem' => 2,
      'mored' => 1,
      'tsake' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunem',
      1 => 'mored',
      2 => 'vore',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kunem' => 2,
      'mored' => 1,
      'vore' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putads',
      1 => 'suinc',
      2 => 'caca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'putads' => 2,
      'suinc' => 1,
      'caca' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'toon',
      1 => 'esh',
      2 => 'es',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'toon' => 2,
      'esh' => 1,
      'es' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'կատարվում',
      1 => 'է',
      2 => 'քննություն',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'կատարվում' => 2,
      'է' => 1,
      'քննություն' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vorid',
      1 => 'mech',
      2 => 'ge',
      3 => 'tenem',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'vorid' => 3,
      'mech' => 2,
      'ge' => 1,
      'tenem' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klirs',
      1 => 'koxem',
      2 => 'hamapatasxan',
      3 => 'texy',
      4 => 'organizmit',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'klirs' => 4,
      'koxem' => 3,
      'hamapatasxan' => 2,
      'texy' => 1,
      'organizmit' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 64;

