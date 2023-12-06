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
  'hū' => true,
  'aus' => true,
  'sot' => true,
  'akua' => true,
  'babi' => true,
  'bana' => true,
  'bola' => true,
  'jubo' => true,
  'kote' => true,
  'loba' => true,
  'nate' => true,
  'pene' => true,
  'puki' => true,
  'sial' => true,
  'taik' => true,
  'uaua' => true,
  'barua' => true,
  'bodoh' => true,
  'burit' => true,
  'butoh' => true,
  'butuh' => true,
  'cibai' => true,
  'dubur' => true,
  'faraj' => true,
  'helah' => true,
  'kacau' => true,
  'kicap' => true,
  'konek' => true,
  'korok' => true,
  'liwat' => true,
  'lolok' => true,
  'marah' => true,
  'nafsu' => true,
  'pelir' => true,
  'pepek' => true,
  'ragut' => true,
  'rahim' => true,
  'rogol' => true,
  'setan' => true,
  'sohai' => true,
  'zakar' => true,
  'aleuto' => true,
  'bajang' => true,
  'batang' => true,
  'bohsia' => true,
  'chipap' => true,
  'jalang' => true,
  'kairau' => true,
  'keldai' => true,
  'kōroto' => true,
  'lancau' => true,
  'menipu' => true,
  'neraka' => true,
  'pantat' => true,
  'pondan' => true,
  'ritori' => true,
  'sialan' => true,
  'uretra' => true,
  'canggar' => true,
  'cerewet' => true,
  'dirogol' => true,
  'gampang' => true,
  'janggut' => true,
  'kencing' => true,
  'kotoran' => true,
  'masokis' => true,
  'meliwat' => true,
  'menelan' => true,
  'pelacur' => true,
  'perogol' => true,
  'pukimak' => true,
  'sadisme' => true,
  'shalwan' => true,
  'skodeng' => true,
  'skrotum' => true,
  'tongeng' => true,
  'tusukan' => true,
  'whakatū' => true,
  'bajingan' => true,
  'berdarah' => true,
  'haukotia' => true,
  'kelentit' => true,
  'lakhanat' => true,
  'melancap' => true,
  'menampar' => true,
  'mengamuk' => true,
  'payudara' => true,
  'pīphilia' => true,
  'tentelur' => true,
  'terencat' => true,
  'torotoro' => true,
  'uruhanga' => true,
  'ejakulasi' => true,
  'hingaatio' => true,
  'menghisap' => true,
  'menyengat' => true,
  'merangkap' => true,
  'tahuringa' => true,
  'mengongkek' => true,
  'panseksual' => true,
  'tuhantuhan' => true,
  'tōkaiawaha' => true,
  'tōkaitanga' => true,
  'whakatūnga' => true,
  'ambiseksual' => true,
  'amboseksual' => true,
  'pemerkosaan' => true,
  'pengguguran' => true,
  'anjingfucker' => true,
  'disingkirkan' => true,
  'whakakotahitanga' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abah',
      1 => 'kau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'abah' => 1,
      'kau' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'air',
      1 => 'mani',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'air' => 1,
      'mani' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ale',
      1 => 'uto',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ale' => 1,
      'uto' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anak',
      1 => 'anjing',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anak' => 1,
      'anjing' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anak',
      1 => 'haram',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anak' => 1,
      'haram' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anjing',
      1 => 'liar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anjing' => 1,
      'liar' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anu',
      1 => 'hang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anu' => 1,
      'hang' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anwar',
      1 => 'ibrahim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anwar' => 1,
      'ibrahim' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayam',
      1 => 'jantan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ayam' => 1,
      'jantan' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayam',
      1 => 'sabung',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ayam' => 1,
      'sabung' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buah',
      1 => 'dada',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buah' => 1,
      'dada' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buduh',
      1 => 'mu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buduh' => 1,
      'mu' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinapek',
      1 => 'bangsat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chinapek' => 1,
      'bangsat' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dit',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dit' => 1,
      'me' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'haera',
      1 => 'hitler',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'haera' => 1,
      'hitler' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hisap',
      1 => 'ahh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hisap' => 1,
      'ahh' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibu',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ibu' => 1,
      'fucker' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'isap',
      1 => 'telur',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'isap' => 1,
      'telur' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jimbet',
      1 => 'lu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jimbet' => 1,
      'lu' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kai',
      1 => 'whakatahe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kai' => 1,
      'whakatahe' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'keling',
      1 => 'mahadey',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'keling' => 1,
      'mahadey' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kemaluan',
      1 => 'wanita',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kemaluan' => 1,
      'wanita' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kepala',
      1 => 'buto',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kepala' => 1,
      'buto' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kepala',
      1 => 'pituk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kepala' => 1,
      'pituk' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kotek',
      1 => 'kambing',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kotek' => 1,
      'kambing' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maa',
      1 => 'hai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maa' => 1,
      'hai' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muncher',
      1 => 'permaidani',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muncher' => 1,
      'permaidani' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nasi',
      1 => 'kangkang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nasi' => 1,
      'kangkang' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'omong',
      1 => 'kosong',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'omong' => 1,
      'kosong' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pala',
      1 => 'buto',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pala' => 1,
      'buto' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pembungkus',
      1 => 'fudge',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pembungkus' => 1,
      'fudge' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'penis',
      1 => 'ayam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'penis' => 1,
      'ayam' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'perempuan',
      1 => 'murahan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'perempuan' => 1,
      'murahan' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pergi',
      1 => 'mampus',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pergi' => 1,
      'mampus' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'po',
      1 => 'en',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'po' => 1,
      'en' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tet',
      1 => 'tet',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tet' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tino',
      1 => 'pai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tino' => 1,
      'pai' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuhinga',
      1 => 'āhuaatua',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tuhinga' => 1,
      'āhuaatua' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wak',
      1 => 'lu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wak' => 1,
      'lu' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'whakapeau',
      1 => 'ke',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'whakapeau' => 1,
      'ke' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anak',
      1 => 'botak',
      2 => 'perrbaharan',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'anak' => 2,
      'botak' => 1,
      'perrbaharan' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bei',
      1 => 'yan',
      2 => 'diu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bei' => 2,
      'yan' => 1,
      'diu' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chikaro',
      1 => 'or',
      2 => 'karo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chikaro' => 2,
      'or' => 1,
      'karo' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'diu',
      1 => 'nia',
      2 => 'hai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'diu' => 2,
      'nia' => 1,
      'hai' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'esap',
      1 => 'tetek',
      2 => 'aku',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'esap' => 2,
      'tetek' => 1,
      'aku' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hisap',
      1 => 'telur',
      2 => 'aku',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hisap' => 2,
      'telur' => 1,
      'aku' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kepala',
      1 => 'hotak',
      2 => 'kau',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kepala' => 2,
      'hotak' => 1,
      'kau' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kongkek',
      1 => 'mak',
      2 => 'kau',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kongkek' => 2,
      'mak' => 1,
      'kau' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mak',
      1 => 'kau',
      2 => 'hijau',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mak' => 2,
      'kau' => 1,
      'hijau' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mampus',
      1 => 'loe',
      2 => 'tai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mampus' => 2,
      'loe' => 1,
      'tai' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'najib',
      1 => 'kongkek',
      2 => 'anwar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'najib' => 2,
      'kongkek' => 1,
      'anwar' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pak',
      1 => 'chor',
      2 => 'cheng',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pak' => 2,
      'chor' => 1,
      'cheng' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tah',
      1 => 'fei',
      2 => 'kei',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tah' => 2,
      'fei' => 1,
      'kei' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tino',
      1 => 'nui',
      2 => 'rawa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tino' => 2,
      'nui' => 1,
      'rawa' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiu',
      1 => 'nia',
      2 => 'ma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tiu' => 2,
      'nia' => 1,
      'ma' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tok',
      1 => 'hang',
      2 => 'kamjat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tok' => 2,
      'hang' => 1,
      'kamjat' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'diberi',
      2 => 'nilai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'x' => 2,
      'diberi' => 1,
      'nilai' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bo',
      1 => 'dai',
      2 => 'mou',
      3 => 'lou',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bo' => 3,
      'dai' => 2,
      'mou' => 1,
      'lou' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'indon',
      1 => 'bangang',
      2 => 'otak',
      3 => 'indon',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'indon' => 0,
      'bangang' => 2,
      'otak' => 1,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ju',
      1 => 'tou',
      2 => 'mo',
      3 => 'lo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ju' => 3,
      'tou' => 2,
      'mo' => 1,
      'lo' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kua',
      1 => 'oti',
      2 => 'te',
      3 => 'whakangao',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kua' => 3,
      'oti' => 2,
      'te' => 1,
      'whakangao' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'perkosa',
      1 => 'ibumu',
      2 => 'sodomi',
      3 => 'bapakmu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'perkosa' => 3,
      'ibumu' => 2,
      'sodomi' => 1,
      'bapakmu' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'diu',
      1 => 'nia',
      2 => 'ma',
      3 => 'cau',
      4 => 'hai',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'diu' => 4,
      'nia' => 3,
      'ma' => 2,
      'cau' => 1,
      'hai' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 63;

