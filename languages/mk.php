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
  'grk' => true,
  'газ' => true,
  'дик' => true,
  'кун' => true,
  'поп' => true,
  'тит' => true,
  'mule' => true,
  'анус' => true,
  'ванг' => true,
  'ебам' => true,
  'ебат' => true,
  'моча' => true,
  'наци' => true,
  'пубе' => true,
  'секс' => true,
  'ebise' => true,
  'galet' => true,
  'gomna' => true,
  'kurva' => true,
  'lajna' => true,
  'mozko' => true,
  'peder' => true,
  'вулва' => true,
  'граба' => true,
  'гради' => true,
  'дилдо' => true,
  'дупка' => true,
  'дупки' => true,
  'крвав' => true,
  'курва' => true,
  'кучка' => true,
  'кучки' => true,
  'мочам' => true,
  'педер' => true,
  'пекол' => true,
  'пенис' => true,
  'петел' => true,
  'пичка' => true,
  'пички' => true,
  'порно' => true,
  'пружи' => true,
  'ситни' => true,
  'срање' => true,
  'топка' => true,
  'топки' => true,
  'фанни' => true,
  'цицки' => true,
  'црнец' => true,
  'glupav' => true,
  'gomnar' => true,
  'kopile' => true,
  'kuchka' => true,
  'kurats' => true,
  'madini' => true,
  'naebav' => true,
  'smotan' => true,
  'zubeyt' => true,
  'анален' => true,
  'грабне' => true,
  'дремка' => true,
  'задник' => true,
  'копиле' => true,
  'миксер' => true,
  'нигери' => true,
  'педери' => true,
  'писење' => true,
  'пискам' => true,
  'ректум' => true,
  'садист' => true,
  'скинка' => true,
  'скитам' => true,
  'смрдеа' => true,
  'сперма' => true,
  'страст' => true,
  'тестис' => true,
  'турдар' => true,
  'ѕвонче' => true,
  'bugarin' => true,
  'абортус' => true,
  'заебана' => true,
  'кретену' => true,
  'оргазам' => true,
  'оргазми' => true,
  'петлите' => true,
  'римминг' => true,
  'силувач' => true,
  'скротум' => true,
  'уличари' => true,
  'фелатио' => true,
  'klatikur' => true,
  'motschko' => true,
  'вагината' => true,
  'глупости' => true,
  'измамник' => true,
  'клиторис' => true,
  'магариња' => true,
  'мазохист' => true,
  'посрамен' => true,
  'приколки' => true,
  'проклето' => true,
  'силување' => true,
  'kurolizac' => true,
  'бакнување' => true,
  'газfucker' => true,
  'ејакулира' => true,
  'кунилинус' => true,
  'роговиден' => true,
  'bicshlunga' => true,
  'бестијален' => true,
  'кучеfucker' => true,
  'мастурбира' => true,
  'навртување' => true,
  'петелморон' => true,
  'прирабница' => true,
  'ретардиран' => true,
  'синнакучка' => true,
  'ејакулација' => true,
  'ејакулирани' => true,
  'замаглување' => true,
  'изнервирани' => true,
  'бестијалност' => true,
  'задебелување' => true,
  'порнографија' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baksuz',
      1 => 'eden',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'baksuz' => 1,
      'eden' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'budala',
      1 => 'boodala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'budala' => 1,
      'boodala' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebi',
      1 => 'se',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ebi' => 1,
      'se' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gjorgji',
      1 => 'manik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gjorgji' => 1,
      'manik' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gjupska',
      1 => 'rabota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gjupska' => 1,
      'rabota' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gnasotia',
      1 => 'eden',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gnasotia' => 1,
      'eden' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gyupska',
      1 => 'rabota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gyupska' => 1,
      'rabota' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lizhi',
      1 => 'pichka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lizhi' => 1,
      'pichka' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lizi',
      1 => 'gz',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lizi' => 1,
      'gz' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'majku',
      1 => 'picku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'majku' => 1,
      'picku' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muggeray',
      1 => 'epice',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muggeray' => 1,
      'epice' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pickino',
      1 => 'vlakno',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pickino' => 1,
      'vlakno' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pushi',
      1 => 'kuratz',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pushi' => 1,
      'kuratz' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikter',
      1 => 'stani',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikter' => 1,
      'stani' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'veliko',
      1 => 'mandalo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'veliko' => 1,
      'mandalo' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'volim',
      1 => 'te',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'volim' => 1,
      'te' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vunasti',
      1 => 'pichkojed',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vunasti' => 1,
      'pichkojed' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'оценет',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'оценет' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yadi',
      1 => 'kuratz',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yadi' => 1,
      'kuratz' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yahya',
      1 => 'kemal',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yahya' => 1,
      'kemal' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'мајка',
      1 => 'ебе',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'мајка' => 1,
      'ебе' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'непотребен',
      1 => 'пат',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'непотребен' => 1,
      'пат' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'празни',
      1 => 'епови',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'празни' => 1,
      'епови' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'проклети',
      1 => 'бог',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'проклети' => 1,
      'бог' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'тепих',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'тепих' => 1,
      'muncher' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dati',
      1 => 'ebam',
      2 => 'majkata',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dati' => 2,
      'ebam' => 1,
      'majkata' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'idi',
      1 => 'ebi',
      2 => 'se',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'idi' => 2,
      'ebi' => 1,
      'se' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jas',
      1 => 'sum',
      2 => 'makedonec',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jas' => 2,
      'sum' => 1,
      'makedonec' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'te',
      2 => 'ebam',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ke' => 2,
      'te' => 1,
      'ebam' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'krv',
      1 => 'da',
      2 => 'seres',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'krv' => 2,
      'da' => 1,
      'seres' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'majkati',
      1 => 'je',
      2 => 'crava',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'majkati' => 2,
      'je' => 1,
      'crava' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muda',
      1 => 'za',
      2 => 'bubrezi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'muda' => 2,
      'za' => 1,
      'bubrezi' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pichka',
      1 => 'ti',
      2 => 'majchina',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pichka' => 2,
      'ti' => 1,
      'majchina' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'picka',
      1 => 'ti',
      2 => 'majcina',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'picka' => 2,
      'ti' => 1,
      'majcina' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'picka',
      1 => 'ti',
      2 => 'mater',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'picka' => 2,
      'ti' => 1,
      'mater' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suck',
      1 => 'mine',
      2 => 'dick',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'suck' => 2,
      'mine' => 1,
      'dick' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'turi',
      1 => 'mu',
      2 => 'kur',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'turi' => 2,
      'mu' => 1,
      'kur' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'u',
      1 => 'picku',
      2 => 'mater',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'u' => 2,
      'picku' => 1,
      'mater' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'mi',
      2 => 'go',
      3 => 'lapnesh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'mi' => 2,
      'go' => 1,
      'lapnesh' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'ebam',
      3 => 'crfta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'ti' => 2,
      'ebam' => 1,
      'crfta' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'ebam',
      3 => 'krvta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'ti' => 2,
      'ebam' => 1,
      'krvta' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'ebam',
      3 => 'magareto',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'ti' => 2,
      'ebam' => 1,
      'magareto' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'idi',
      1 => 'u',
      2 => 'picku',
      3 => 'majcinu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'idi' => 3,
      'u' => 2,
      'picku' => 1,
      'majcinu' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ja',
      1 => 'ebav',
      2 => 'majkati',
      3 => 'cera',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ja' => 3,
      'ebav' => 2,
      'majkati' => 1,
      'cera' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'ti',
      2 => 'frknam',
      3 => 'edna',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ke' => 3,
      'ti' => 2,
      'frknam' => 1,
      'edna' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'majka',
      2 => 'ti',
      3 => 'gazot',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'majka' => 2,
      'ti' => 1,
      'gazot' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'odi',
      1 => 'u',
      2 => 'picku',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'odi' => 3,
      'u' => 2,
      'picku' => 1,
      'mater' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pusi',
      1 => 'mi',
      2 => 'go',
      3 => 'kurot',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pusi' => 3,
      'mi' => 2,
      'go' => 1,
      'kurot' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'up',
      1 => 'your',
      2 => 'mums',
      3 => 'cunt',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'up' => 3,
      'your' => 2,
      'mums' => 1,
      'cunt' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baba',
      1 => 'ti',
      2 => 'da',
      3 => 'ja',
      4 => 'ebam',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'baba' => 4,
      'ti' => 3,
      'da' => 2,
      'ja' => 1,
      'ebam' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'mi',
      2 => 'gi',
      3 => 'lizes',
      4 => 'jajcata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'mi' => 3,
      'gi' => 2,
      'lizes' => 1,
      'jajcata' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'mi',
      2 => 'gi',
      3 => 'lizhesh',
      4 => 'topkite',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'mi' => 3,
      'gi' => 2,
      'lizhesh' => 1,
      'topkite' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'mi',
      2 => 'go',
      3 => 'pusis',
      4 => 'kurov',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'mi' => 3,
      'go' => 2,
      'pusis' => 1,
      'kurov' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'mi',
      2 => 'go',
      3 => 'yadish',
      4 => 'gazot',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'mi' => 3,
      'go' => 2,
      'yadish' => 1,
      'gazot' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'te',
      2 => 'ebam',
      3 => 'u',
      4 => 'gazot',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'te' => 3,
      'ebam' => 2,
      'u' => 1,
      'gazot' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'te',
      2 => 'ebam',
      3 => 'u',
      4 => 'gz',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'te' => 3,
      'ebam' => 2,
      'u' => 1,
      'gz' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'ebam',
      3 => 'se',
      4 => 'zivo',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'ti' => 3,
      'ebam' => 2,
      'se' => 1,
      'zivo' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'ebam',
      3 => 'toa',
      4 => 'bucukot',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'ti' => 3,
      'ebam' => 2,
      'toa' => 1,
      'bucukot' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'go',
      3 => 'ebam',
      4 => 'plemeto',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'ti' => 3,
      'go' => 2,
      'ebam' => 1,
      'plemeto' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'ja',
      3 => 'ebam',
      4 => 'majkata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'ti' => 3,
      'ja' => 2,
      'ebam' => 1,
      'majkata' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'ti',
      2 => 'ja',
      3 => 'ebam',
      4 => 'majkata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ke' => 4,
      'ti' => 3,
      'ja' => 2,
      'ebam' => 1,
      'majkata' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'ti',
      2 => 'svrsham',
      3 => 'vo',
      4 => 'usta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ke' => 4,
      'ti' => 3,
      'svrsham' => 2,
      'vo' => 1,
      'usta' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'majka',
      2 => 'ti',
      3 => 'u',
      4 => 'gz',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'na' => 4,
      'majka' => 3,
      'ti' => 2,
      'u' => 1,
      'gz' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'plemeto',
      1 => 'da',
      2 => 'ti',
      3 => 'go',
      4 => 'ebam',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'plemeto' => 4,
      'da' => 3,
      'ti' => 2,
      'go' => 1,
      'ebam' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'mi',
      2 => 'go',
      3 => 'pusis',
      4 => 'pusi',
      5 => 'kur',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'da' => 5,
      'mi' => 4,
      'go' => 3,
      'pusis' => 2,
      'pusi' => 1,
      'kur' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'se',
      3 => 'iznaseram',
      4 => 'u',
      5 => 'usta',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'da' => 5,
      'ti' => 4,
      'se' => 3,
      'iznaseram' => 2,
      'u' => 1,
      'usta' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'i',
      2 => 'go',
      3 => 'nak`kam',
      4 => 'na',
      5 => 'majcinaati',
      6 => 'vo',
      7 => 'takvijata',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'da' => 7,
      'i' => 6,
      'go' => 5,
      'nak`kam' => 4,
      'na' => 3,
      'majcinaati' => 2,
      'vo' => 1,
      'takvijata' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 67;

