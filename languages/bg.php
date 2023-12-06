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
  'ад' => true,
  'eba' => true,
  'gus' => true,
  'kur' => true,
  'ãÿã' => true,
  'ако' => true,
  'гаѥ' => true,
  'кок' => true,
  'кѣр' => true,
  'рим' => true,
  'ѣан' => true,
  'ѥѥѥ' => true,
  'kles' => true,
  'umri' => true,
  'анус' => true,
  'анѣѡ' => true,
  'ванк' => true,
  'дига' => true,
  'динк' => true,
  'линч' => true,
  'румп' => true,
  'секс' => true,
  'ѡекѡ' => true,
  'ѥоѣр' => true,
  'ѧиѧа' => true,
  'ѧиѧи' => true,
  'ѧѣка' => true,
  'ebach' => true,
  'govno' => true,
  'laino' => true,
  'luyno' => true,
  'minet' => true,
  'pedal' => true,
  'putka' => true,
  'sirak' => true,
  'tapak' => true,
  'zaebi' => true,
  'аборт' => true,
  'аборѣ' => true,
  'бобър' => true,
  'бозки' => true,
  'вѣлва' => true,
  'гѫрди' => true,
  'килим' => true,
  'копче' => true,
  'кѣраж' => true,
  'кѣрва' => true,
  'кѣрви' => true,
  'кѣѧка' => true,
  'кѣѧки' => true,
  'лайно' => true,
  'лайнഀ' => true,
  'мамкഀ' => true,
  'матка' => true,
  'негри' => true,
  'негѫр' => true,
  'нимфа' => true,
  'оргии' => true,
  'оргия' => true,
  'пенис' => true,
  'пениѡ' => true,
  'пеѣел' => true,
  'пеѣли' => true,
  'пикаѯ' => true,
  'порно' => true,
  'поѥоѣ' => true,
  'пѣѣки' => true,
  'рапър' => true,
  'рогов' => true,
  'смуча' => true,
  'содом' => true,
  'строя' => true,
  'урина' => true,
  'фалос' => true,
  'фетиш' => true,
  'ѡераѣ' => true,
  'ѣопки' => true,
  'ѣрѫни' => true,
  'ѩибан' => true,
  'dirnik' => true,
  'govedo' => true,
  'gultay' => true,
  'kopele' => true,
  'kuchka' => true,
  'lainar' => true,
  'mangal' => true,
  'mastiq' => true,
  'svirka' => true,
  'tsitsi' => true,
  'vushka' => true,
  'аборти' => true,
  'анален' => true,
  'вагина' => true,
  'воайор' => true,
  'гѫзове' => true,
  'задник' => true,
  'зоофил' => true,
  'кокаин' => true,
  'копеле' => true,
  'кѫрвав' => true,
  'лайнѯн' => true,
  'нацист' => true,
  'педали' => true,
  'рекѣѣм' => true,
  'садист' => true,
  'сперма' => true,
  'тестис' => true,
  'уретра' => true,
  'хитлер' => true,
  'цианис' => true,
  'ѡадиѡѣ' => true,
  'ѡвирка' => true,
  'ѡмегма' => true,
  'ѡперма' => true,
  'ѡпѫвам' => true,
  'ѣеѡѣиѡ' => true,
  'ѥланеѧ' => true,
  'coochka' => true,
  'mamkamu' => true,
  'бушуващ' => true,
  'вбеѡѯва' => true,
  'гълтане' => true,
  'друсане' => true,
  'егоизъм' => true,
  'ерекция' => true,
  'еякулат' => true,
  'зърното' => true,
  'копчета' => true,
  'коѣенѧе' => true,
  'неонази' => true,
  'оргазми' => true,
  'оргазмഀ' => true,
  'оргазъм' => true,
  'оргазѫм' => true,
  'педофил' => true,
  'пикаене' => true,
  'преѧака' => true,
  'приклад' => true,
  'проклеѣ' => true,
  'пролѣка' => true,
  'розетка' => true,
  'садизъм' => true,
  'скротум' => true,
  'содомиз' => true,
  'содомия' => true,
  'фелацио' => true,
  'хранене' => true,
  'ѡкиѣник' => true,
  'ѡкроѣѣм' => true,
  'ѥелаѧио' => true,
  'ѥелѧинг' => true,
  'ѥѫджѫри' => true,
  'ѧинизми' => true,
  'ѩибанѯк' => true,
  'ѩимейлѡ' => true,
  'pederast' => true,
  'pederuga' => true,
  'utepliak' => true,
  'абортист' => true,
  'вибраѣор' => true,
  'глѣпоѡѣи' => true,
  'дѯволиѧа' => true,
  'еякулаци' => true,
  'еякулира' => true,
  'еѯкѣлира' => true,
  'забавяне' => true,
  'зоофилия' => true,
  'клиѣор਍ഀ' => true,
  'магареѣа' => true,
  'мазохист' => true,
  'мазоѥиѡѣ' => true,
  'наѡилник' => true,
  'наѧиѡѣкഀ' => true,
  'оплакваѩ' => true,
  'педераѡഀ' => true,
  'поѡѯгане' => true,
  'празнене' => true,
  'развалям' => true,
  'расистки' => true,
  'хебефили' => true,
  'ѣбождане' => true,
  'ѣлиѧниѧа' => true,
  'ѩибанѯѧи' => true,
  'chikidziq' => true,
  'dupedavec' => true,
  'makedonec' => true,
  'oligofren' => true,
  'shibaniak' => true,
  'tzepenyak' => true,
  'вибраѣори' => true,
  'еякулации' => true,
  'еякулация' => true,
  'еѯкѣлираѣ' => true,
  'изѥвѫрлѯм' => true,
  'педофилия' => true,
  'перверзия' => true,
  'пиѯнзалѯн' => true,
  'проникнат' => true,
  'хебефилия' => true,
  'chickidjya' => true,
  'podqvolite' => true,
  'putkolizec' => true,
  'брѣѣалноѡѣ' => true,
  'еякулирани' => true,
  'живоѣинѡки' => true,
  'завинѣване' => true,
  'изнасилвач' => true,
  'изнасилени' => true,
  'нимфомания' => true,
  'проклеѣаѣа' => true,
  'проникване' => true,
  'хебефилски' => true,
  'prostitutka' => true,
  'бисексуални' => true,
  'вѫзклиѧание' => true,
  'изнасилване' => true,
  'изнаѡилване' => true,
  'кѣѧеѩибанѯк' => true,
  'мастурбация' => true,
  'мастурбирам' => true,
  'мастурбираш' => true,
  'маѡѣрѣбирам' => true,
  'порнография' => true,
  'порнограѥиѯ' => true,
  'проститутка' => true,
  'содомизиран' => true,
  'пансексуален' => true,
  'пожелаванеѣо' => true,
  'акротомофилия' => true,
  'амбисексуален' => true,
  'амбосексуален' => true,
  'кръвосмешение' => true,
  'амбисексуалност' => true,
  'кръвосмесителна' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
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
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grozna',
      1 => 'kurva',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'grozna' => 1,
      'kurva' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'huy',
      1 => 'spleskan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'huy' => 1,
      'spleskan' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koochi',
      1 => 'sin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koochi' => 1,
      'sin' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurovi',
      1 => 'glavi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kurovi' => 1,
      'glavi' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lainyano',
      1 => 'magare',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lainyano' => 1,
      'magare' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mainata',
      1 => 'ti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mainata' => 1,
      'ti' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamka',
      1 => 'mu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mamka' => 1,
      'mu' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mrusna',
      1 => 'koochka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mrusna' => 1,
      'koochka' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mrusna',
      1 => 'kurventiq',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mrusna' => 1,
      'kurventiq' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pleshiv',
      1 => 'gei',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pleshiv' => 1,
      'gei' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'putko',
      1 => 'mirizliva',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'putko' => 1,
      'mirizliva' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shibai',
      1 => 'se',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shibai' => 1,
      'se' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tupa',
      1 => 'choochka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tupa' => 1,
      'choochka' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'оѧенен',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'оѧенен' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yaka',
      1 => 'kaka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yaka' => 1,
      'kaka' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yash',
      1 => 'maquera',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yash' => 1,
      'maquera' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'заедно',
      1 => 'ѡ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'заедно' => 1,
      'ѡ' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'зиг',
      1 => 'хайл',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'зиг' => 1,
      'хайл' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'идиоѣ',
      1 => 'изклѯѧване',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'идиоѣ' => 1,
      'изклѯѧване' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'миеѩа',
      1 => 'меѧка',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'миеѩа' => 1,
      'меѧка' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ѡрамни',
      1 => 'ѣѡѣни',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ѡрамни' => 1,
      'ѣѡѣни' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cuni',
      1 => 'mi',
      2 => 'gaza',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cuni' => 2,
      'mi' => 1,
      'gaza' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dulgo',
      1 => 'probna',
      2 => 'kurva',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dulgo' => 2,
      'probna' => 1,
      'kurva' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebe',
      1 => 'mi',
      2 => 'se',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ebe' => 2,
      'mi' => 1,
      'se' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebi',
      1 => 'si',
      2 => 'maikata',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ebi' => 2,
      'si' => 1,
      'maikata' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gori',
      1 => 'v',
      2 => 'ada',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gori' => 2,
      'v' => 1,
      'ada' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'iaz',
      1 => 'mi',
      2 => 'huia',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'iaz' => 2,
      'mi' => 1,
      'huia' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lapai',
      1 => 'mi',
      2 => 'kura',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lapai' => 2,
      'mi' => 1,
      'kura' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'kolene',
      2 => 'kurvo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'na' => 2,
      'kolene' => 1,
      'kurvo' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pichka',
      1 => 'ti',
      2 => 'lelina',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pichka' => 2,
      'ti' => 1,
      'lelina' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pitchka',
      1 => 'ti',
      2 => 'lelina',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pitchka' => 2,
      'ti' => 1,
      'lelina' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qzsh',
      1 => 'mi',
      2 => 'kuro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'qzsh' => 2,
      'mi' => 1,
      'kuro' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tap',
      1 => 'kato',
      2 => 'guz',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tap' => 2,
      'kato' => 1,
      'guz' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yash',
      1 => 'mee',
      2 => 'huya',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yash' => 2,
      'mee' => 1,
      'huya' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ѡин',
      1 => 'на',
      2 => 'кѣѧиഀ',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ѡин' => 2,
      'на' => 1,
      'кѣѧиഀ' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ciganin',
      1 => 'da',
      2 => 'te',
      3 => 'ebe',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ciganin' => 3,
      'da' => 2,
      'te' => 1,
      'ebe' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'mi',
      2 => 'qdesh',
      3 => 'kuro',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'mi' => 2,
      'qdesh' => 1,
      'kuro' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'go',
      3 => 'nahakam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'ti' => 2,
      'go' => 1,
      'nahakam' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'ishnat',
      3 => 'madyata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'ti' => 2,
      'ishnat' => 1,
      'madyata' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'umre',
      3 => 'semeistvoto',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'ti' => 2,
      'umre' => 1,
      'semeistvoto' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dog',
      1 => 'without',
      2 => 'a',
      3 => 'breed',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'dog' => 3,
      'without' => 2,
      'a' => 1,
      'breed' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebe',
      1 => 'li',
      2 => 'ti',
      3 => 'se',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ebe' => 3,
      'li' => 2,
      'ti' => 1,
      'se' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebi',
      1 => 'se',
      2 => 'v',
      3 => 'duza',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ebi' => 3,
      'se' => 2,
      'v' => 1,
      'duza' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kon',
      1 => 'da',
      2 => 'te',
      3 => 'ebe',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kon' => 3,
      'da' => 2,
      'te' => 1,
      'ebe' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lizhi',
      1 => 'ciganska',
      2 => 'sperma',
      3 => 'govnarche',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'lizhi' => 3,
      'ciganska' => 2,
      'sperma' => 1,
      'govnarche' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mlukvay',
      1 => 'zatvaryay',
      2 => 'si',
      3 => 'ustata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mlukvay' => 3,
      'zatvaryay' => 2,
      'si' => 1,
      'ustata' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'kutcheto',
      2 => 'v',
      3 => 'gaza',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'kutcheto' => 2,
      'v' => 1,
      'gaza' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'maika',
      2 => 'ti',
      3 => 'klitora',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'maika' => 2,
      'ti' => 1,
      'klitora' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rak',
      1 => 'da',
      2 => 'te',
      3 => 'iziade',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'rak' => 3,
      'da' => 2,
      'te' => 1,
      'iziade' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shta',
      1 => 'iba',
      2 => 'kat',
      3 => 'magare',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'shta' => 3,
      'iba' => 2,
      'kat' => 1,
      'magare' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'whoi',
      1 => 'splesscan',
      2 => 'hui',
      3 => 'spleskan',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'whoi' => 3,
      'splesscan' => 2,
      'hui' => 1,
      'spleskan' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yako',
      1 => 'me',
      2 => 'se',
      3 => 'ebe',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'yako' => 3,
      'me' => 2,
      'se' => 1,
      'ebe' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'pikam',
      3 => 'na',
      4 => 'vejdite',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'ti' => 3,
      'pikam' => 2,
      'na' => 1,
      'vejdite' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'pikam',
      3 => 'v',
      4 => 'ustata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'ti' => 3,
      'pikam' => 2,
      'v' => 1,
      'ustata' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'sera',
      3 => 'vuv',
      4 => 'ustata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'da' => 4,
      'ti' => 3,
      'sera' => 2,
      'vuv' => 1,
      'ustata' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lapai',
      1 => 'mi',
      2 => 'huia',
      3 => 'duhai',
      4 => 'mi',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'lapai' => 4,
      'mi' => 0,
      'huia' => 2,
      'duhai' => 1,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'maika',
      2 => 'ti',
      3 => 'u',
      4 => 'putkata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'na' => 4,
      'maika' => 3,
      'ti' => 2,
      'u' => 1,
      'putkata' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'sestra',
      2 => 'ti',
      3 => 'u',
      4 => 'ustencata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'na' => 4,
      'sestra' => 3,
      'ti' => 2,
      'u' => 1,
      'ustencata' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'q',
      1 => 'hodi',
      2 => 'se',
      3 => 'ebi',
      4 => 'be',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'q' => 4,
      'hodi' => 3,
      'se' => 2,
      'ebi' => 1,
      'be' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'iba',
      2 => 'v',
      3 => 'gaza',
      4 => 'grozen',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ta' => 4,
      'iba' => 3,
      'v' => 2,
      'gaza' => 1,
      'grozen' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ti',
      1 => 'sa',
      2 => 'tocha',
      3 => 'na',
      4 => 'vejdite',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ti' => 4,
      'sa' => 3,
      'tocha' => 2,
      'na' => 1,
      'vejdite' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'go',
      3 => 'nachookam',
      4 => 'v',
      5 => 'ustichkata',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'da' => 5,
      'ti' => 4,
      'go' => 3,
      'nachookam' => 2,
      'v' => 1,
      'ustichkata' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'go',
      3 => 'nachukam',
      4 => 'v',
      5 => 'ushite',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'da' => 5,
      'ti' => 4,
      'go' => 3,
      'nachukam' => 2,
      'v' => 1,
      'ushite' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebal',
      1 => 'sum',
      2 => 'te',
      3 => 'i',
      4 => 'si',
      5 => 'lyagam',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'ebal' => 5,
      'sum' => 4,
      'te' => 3,
      'i' => 2,
      'si' => 1,
      'lyagam' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shte',
      1 => 'ti',
      2 => 'go',
      3 => 'nabutam',
      4 => 'v',
      5 => 'slivicite',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'shte' => 5,
      'ti' => 4,
      'go' => 3,
      'nabutam' => 2,
      'v' => 1,
      'slivicite' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shte',
      1 => 'ti',
      2 => 'go',
      3 => 'tura',
      4 => 'na',
      5 => 'babati',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'shte' => 5,
      'ti' => 4,
      'go' => 3,
      'tura' => 2,
      'na' => 1,
      'babati' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'ti',
      2 => 'go',
      3 => 'nachukam',
      4 => 'otpred',
      5 => 'i',
      6 => 'otzad',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'da' => 6,
      'ti' => 5,
      'go' => 4,
      'nachukam' => 3,
      'otpred' => 2,
      'i' => 1,
      'otzad' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 68;

