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
  'aq' => true,
  'am' => true,
  'ami' => true,
  'bok' => true,
  'dik' => true,
  'göt' => true,
  'kiç' => true,
  'kıç' => true,
  'pic' => true,
  'piç' => true,
  'sik' => true,
  'çük' => true,
  'esek' => true,
  'ezik' => true,
  'göte' => true,
  'götü' => true,
  'ibne' => true,
  'jant' => true,
  'kaka' => true,
  'linç' => true,
  'meni' => true,
  'popo' => true,
  'sike' => true,
  'siki' => true,
  'yeah' => true,
  'ýbne' => true,
  'amlar' => true,
  'bamya' => true,
  'cesur' => true,
  'düğme' => true,
  'emmek' => true,
  'fetiş' => true,
  'flans' => true,
  'götte' => true,
  'götün' => true,
  'horoz' => true,
  'kanli' => true,
  'keriz' => true,
  'kolza' => true,
  'makat' => true,
  'nüfuz' => true,
  'orosp' => true,
  'rahim' => true,
  'rozet' => true,
  'sakso' => true,
  'salak' => true,
  'sidik' => true,
  'sikin' => true,
  'sikte' => true,
  'tasak' => true,
  'veled' => true,
  'yarak' => true,
  'zenci' => true,
  'amciga' => true,
  'amcigi' => true,
  'boktan' => true,
  'bozmak' => true,
  'budala' => true,
  'cimbom' => true,
  'dikmek' => true,
  'ensest' => true,
  'fahise' => true,
  'götler' => true,
  'götten' => true,
  'isemek' => true,
  'kaltak' => true,
  'kapmak' => true,
  'kurmak' => true,
  'kürtaj' => true,
  'orgazm' => true,
  'orosbu' => true,
  'perisi' => true,
  'pislik' => true,
  'pisuar' => true,
  'sadizm' => true,
  'sarhos' => true,
  'sehvet' => true,
  'sikler' => true,
  'sikmek' => true,
  'sikten' => true,
  'siktir' => true,
  'siçmak' => true,
  'sürtük' => true,
  'tasaga' => true,
  'tasagi' => true,
  'testis' => true,
  'topuzu' => true,
  'yaraga' => true,
  'yaragi' => true,
  'yavsak' => true,
  'öfkeli' => true,
  'üretra' => true,
  'amcigin' => true,
  'amcikta' => true,
  'amsalak' => true,
  'asılmak' => true,
  'bosalma' => true,
  'boşalma' => true,
  'boşalır' => true,
  'cesaret' => true,
  'dallama' => true,
  'esekler' => true,
  'götlere' => true,
  'götleri' => true,
  'hayvani' => true,
  'ibneler' => true,
  'kaltaga' => true,
  'kaltagi' => true,
  'memeler' => true,
  'otuzbir' => true,
  'palavra' => true,
  'saksocu' => true,
  'serseri' => true,
  'sikkafa' => true,
  'siklere' => true,
  'sikleri' => true,
  'tasagin' => true,
  'tasakta' => true,
  'tecavüz' => true,
  'yaragin' => true,
  'yarakta' => true,
  'zoofili' => true,
  'çingene' => true,
  'amciklar' => true,
  'amciktan' => true,
  'becerdin' => true,
  'besiktas' => true,
  'bosalmak' => true,
  'boşalmak' => true,
  'boşalmış' => true,
  'cehennem' => true,
  'dalyarak' => true,
  'dangalak' => true,
  'dildolar' => true,
  'gögüsler' => true,
  'götlerde' => true,
  'götlerin' => true,
  'götveren' => true,
  'hayvanca' => true,
  'hebefili' => true,
  'kalantor' => true,
  'kaltagin' => true,
  'kaltakta' => true,
  'kizdiran' => true,
  'klitoris' => true,
  'kürtajcı' => true,
  'mazosist' => true,
  'mazoşist' => true,
  'orospuda' => true,
  'orospuya' => true,
  'orospuyu' => true,
  'pedofili' => true,
  'pezevenk' => true,
  'sapıklık' => true,
  'sevismek' => true,
  'siklerde' => true,
  'siklerin' => true,
  'sikmemek' => true,
  'sübyancı' => true,
  'tasaklar' => true,
  'tasaktan' => true,
  'travesti' => true,
  'vidalama' => true,
  'yaraklar' => true,
  'yaraktan' => true,
  'zenciler' => true,
  'agaçkakan' => true,
  'amciklara' => true,
  'amciklari' => true,
  'atyarragi' => true,
  'bencillik' => true,
  'ereksiyon' => true,
  'fahiseler' => true,
  'gotoglani' => true,
  'götlerden' => true,
  'götverene' => true,
  'götvereni' => true,
  'hassiktir' => true,
  'hebefilik' => true,
  'kahretsin' => true,
  'kahrolasi' => true,
  'kaltaklar' => true,
  'kaltaktan' => true,
  'kürtajlar' => true,
  'kırlangıç' => true,
  'musluklar' => true,
  'müstehcen' => true,
  'nemfomani' => true,
  'orospudan' => true,
  'orospular' => true,
  'orospunun' => true,
  'otuzbirci' => true,
  'pislikler' => true,
  'röntgenci' => true,
  'saksocuda' => true,
  'saksocuya' => true,
  'saksocuyu' => true,
  'siklerden' => true,
  'tasaklara' => true,
  'tasaklari' => true,
  'yaraklara' => true,
  'yaraklari' => true,
  'çingenede' => true,
  'çingeneye' => true,
  'çingeneyi' => true,
  'amciklarda' => true,
  'amciklarin' => true,
  'bastankara' => true,
  'boşalmalar' => true,
  'canavarlik' => true,
  'canavarlık' => true,
  'gerizekalý' => true,
  'götverende' => true,
  'götverenin' => true,
  'kaltaklara' => true,
  'kaltaklari' => true,
  'orospulara' => true,
  'orospulari' => true,
  'panseksüel' => true,
  'pornografi' => true,
  'saksocudan' => true,
  'saksocular' => true,
  'saksocunun' => true,
  'tasaklarda' => true,
  'tasaklarin' => true,
  'yaraklarda' => true,
  'yaraklarin' => true,
  'çingeneden' => true,
  'çingeneler' => true,
  'çingenenin' => true,
  'ambiseksüel' => true,
  'amboseksüel' => true,
  'amciklardan' => true,
  'geciktirmek' => true,
  'götverenden' => true,
  'götverenler' => true,
  'kaltaklarda' => true,
  'kaltaklarin' => true,
  'kararsızlık' => true,
  'orospularda' => true,
  'orospularin' => true,
  'penetrasyon' => true,
  'saksoculara' => true,
  'saksoculari' => true,
  'tasaklardan' => true,
  'transeksüel' => true,
  'yaraklardan' => true,
  'çingenelere' => true,
  'çingeneleri' => true,
  'akrotomofili' => true,
  'götverenlere' => true,
  'götverenleri' => true,
  'kaltaklardan' => true,
  'mastürbasyon' => true,
  'orospulardan' => true,
  'saksocularda' => true,
  'saksocularin' => true,
  'çingenelerde' => true,
  'çingenelerin' => true,
  'götverenlerde' => true,
  'götverenlerin' => true,
  'saksoculardan' => true,
  'çingenelerden' => true,
  'götverenlerden' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'agazina',
      1 => 'siciyim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'agazina' => 1,
      'siciyim' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'agzina',
      1 => 'isiyim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'agzina' => 1,
      'isiyim' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amcik',
      1 => 'agizli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'amcik' => 1,
      'agizli' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amcik',
      1 => 'hosafi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'amcik' => 1,
      'hosafi' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amin',
      1 => 'oglu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'amin' => 1,
      'oglu' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amina',
      1 => 'koyayim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'amina' => 1,
      'koyayim' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amina',
      1 => 'osuraym',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'amina' => 1,
      'osuraym' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anani',
      1 => 'sikerim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anani' => 1,
      'sikerim' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anne',
      1 => 'herif',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anne' => 1,
      'herif' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ass',
      1 => 'tulip',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ass' => 1,
      'tulip' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'at',
      1 => 'yarragi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'at' => 1,
      'yarragi' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'beyinsiz',
      1 => 'aptal',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'beyinsiz' => 1,
      'aptal' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chukumu',
      1 => 'yala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chukumu' => 1,
      'yala' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'corcinin',
      1 => 'amý',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'corcinin' => 1,
      'amý' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eshek',
      1 => 'siken',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'eshek' => 1,
      'siken' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gece',
      1 => 'siker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gece' => 1,
      'siker' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gece',
      1 => 'sikicileri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gece' => 1,
      'sikicileri' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'geri',
      1 => 'zekalı',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'geri' => 1,
      'zekalı' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gevsek',
      1 => 'got',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gevsek' => 1,
      'got' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'girsin',
      1 => 'sana',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'girsin' => 1,
      'sana' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'god',
      1 => 'lanetli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'god' => 1,
      'lanetli' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'got',
      1 => 'siken',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'got' => 1,
      'siken' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'got',
      1 => 'veren',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'got' => 1,
      'veren' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gotunu',
      1 => 'sikeyim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gotunu' => 1,
      'sikeyim' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hali',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hali' => 1,
      'muncher' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hayvanat',
      1 => 'bahçesi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hayvanat' => 1,
      'bahçesi' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'inci',
      1 => 'siker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'inci' => 1,
      'siker' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'irz',
      1 => 'düsmani',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'irz' => 1,
      'düsmani' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kicimi',
      1 => 'op',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kicimi' => 1,
      'op' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'köpek',
      1 => 'beceren',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'köpek' => 1,
      'beceren' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lanet',
      1 => 'olasi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lanet' => 1,
      'olasi' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lanet',
      1 => 'olsun',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lanet' => 1,
      'olsun' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'masturbasyon',
      1 => 'yapmak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'masturbasyon' => 1,
      'yapmak' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'meme',
      1 => 'başı',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'meme' => 1,
      'başı' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oral',
      1 => 'seks',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oral' => 1,
      'seks' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orospu',
      1 => 'cocugu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'orospu' => 1,
      'cocugu' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orospu',
      1 => 'çocugu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'orospu' => 1,
      'çocugu' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orospu',
      1 => 'çocuðu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'orospu' => 1,
      'çocuðu' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oruspu',
      1 => 'cucugu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oruspu' => 1,
      'cucugu' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'birci',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'birci' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'bircide',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'bircide' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'birciden',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'birciden' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'birciler',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'birciler' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'bircilerde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'bircilerde' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'bircilerden',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'bircilerden' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'bircilere',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'bircilere' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'bircileri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'bircileri' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'bircilerin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'bircilerin' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'bircinin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'bircinin' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'birciye',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'birciye' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otuz',
      1 => 'birciyi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otuz' => 1,
      'birciyi' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sekerleme',
      1 => 'makinesi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sekerleme' => 1,
      'makinesi' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'seks',
      1 => 'partileri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'seks' => 1,
      'partileri' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'seks',
      1 => 'partisi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'seks' => 1,
      'partisi' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'seni',
      1 => 'sikeyim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'seni' => 1,
      'sikeyim' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'siker',
      1 => 'sikmez',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'siker' => 1,
      'sikmez' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikik',
      1 => 'hayvan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikik' => 1,
      'hayvan' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikilir',
      1 => 'sikilmez',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikilir' => 1,
      'sikilmez' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikilmis',
      1 => 'eksisozluk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikilmis' => 1,
      'eksisozluk' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikimde',
      1 => 'degil',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikimde' => 1,
      'degil' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikimin',
      1 => 'siktisi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikimin' => 1,
      'siktisi' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikimin',
      1 => 'suyu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sikimin' => 1,
      'suyu' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'siktirir',
      1 => 'siktirmez',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'siktirir' => 1,
      'siktirmez' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sodomize',
      1 => 'edilmiş',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sodomize' => 1,
      'edilmiş' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sodomize',
      1 => 'etmek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sodomize' => 1,
      'etmek' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sürme',
      1 => 'hastaligi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sürme' => 1,
      'hastaligi' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tecavüze',
      1 => 'uğradı',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tecavüze' => 1,
      'uğradı' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'top',
      1 => 'çantasi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'top' => 1,
      'çantasi' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yapay',
      1 => 'penis',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yapay' => 1,
      'penis' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yaragimin',
      1 => 'basi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yaragimin' => 1,
      'basi' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yarragimin',
      1 => 'anteni',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yarragimin' => 1,
      'anteni' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yarrak',
      1 => 'agizli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yarrak' => 1,
      'agizli' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yarrak',
      1 => 'anteni',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yarrak' => 1,
      'anteni' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'amina',
      1 => 'yumruk',
      2 => 'attigim',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'amina' => 2,
      'yumruk' => 1,
      'attigim' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'annenin',
      1 => 'osurugunu',
      2 => 'sikerim',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'annenin' => 2,
      'osurugunu' => 1,
      'sikerim' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bacinin',
      1 => 'amina',
      2 => 'geciririm',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bacinin' => 2,
      'amina' => 1,
      'geciririm' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bizirina',
      1 => 'dil',
      2 => 'atarim',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bizirina' => 2,
      'dil' => 1,
      'atarim' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gel',
      1 => 'cukume',
      2 => 'takil',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gel' => 2,
      'cukume' => 1,
      'takil' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'git',
      1 => 'kendini',
      2 => 'parmakla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'git' => 2,
      'kendini' => 1,
      'parmakla' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikik',
      1 => 'orospu',
      2 => 'cocugu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sikik' => 2,
      'orospu' => 1,
      'cocugu' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikilik',
      1 => 'lanet',
      2 => 'herif',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sikilik' => 2,
      'lanet' => 1,
      'herif' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikimin',
      1 => 'kurma',
      2 => 'kolu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sikimin' => 2,
      'kurma' => 1,
      'kolu' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'turk',
      1 => 'bozi',
      2 => 'tgha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'turk' => 2,
      'bozi' => 1,
      'tgha' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'oy',
      2 => 'verildi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'x' => 2,
      'oy' => 1,
      'verildi' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ekmek',
      1 => 'kafali',
      2 => 'orospu',
      3 => 'cocugu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ekmek' => 3,
      'kafali' => 2,
      'orospu' => 1,
      'cocugu' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'girsin',
      1 => 'gotune',
      2 => 'keman',
      3 => 'yayi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'girsin' => 3,
      'gotune' => 2,
      'keman' => 1,
      'yayi' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orospu',
      1 => 'cocugu',
      2 => 'erman',
      3 => 'dinkay',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'orospu' => 3,
      'cocugu' => 2,
      'erman' => 1,
      'dinkay' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sikem',
      1 => 'chichen',
      2 => 'chech',
      3 => 'ha',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sikem' => 3,
      'chichen' => 2,
      'chech' => 1,
      'ha' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tassakli',
      1 => 'krallar',
      2 => 'siksin',
      3 => 'ebeni',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tassakli' => 3,
      'krallar' => 2,
      'siksin' => 1,
      'ebeni' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yedi',
      1 => 'ceddini',
      2 => 'siktigimin',
      3 => 'oglu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'yedi' => 3,
      'ceddini' => 2,
      'siktigimin' => 1,
      'oglu' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alt',
      1 => 'sinif',
      2 => 'ögrencilerini',
      3 => 'usak',
      4 => 'gibi',
      5 => 'kullanma',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'alt' => 5,
      'sinif' => 4,
      'ögrencilerini' => 3,
      'usak' => 2,
      'gibi' => 1,
      'kullanma' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 91;

