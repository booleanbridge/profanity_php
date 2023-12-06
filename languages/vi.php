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
  '`' => true,
  'd' => true,
  'đ' => true,
  'b`' => true,
  'cl' => true,
  'cu' => true,
  'có' => true,
  'cỏ' => true,
  'dm' => true,
  'gà' => true,
  'l`' => true,
  'lờ' => true,
  'ml' => true,
  'má' => true,
  'mé' => true,
  'nỉ' => true,
  'vl' => true,
  'v~' => true,
  'xé' => true,
  'xó' => true,
  'ôm' => true,
  'đm' => true,
  'đê' => true,
  'đĩ' => true,
  'đụ' => true,
  'asu' => true,
  'biz' => true,
  'bìu' => true,
  'bòi' => true,
  'cac' => true,
  'cak' => true,
  'cmm' => true,
  'cmn' => true,
  'cuk' => true,
  'cđĩ' => true,
  'cặc' => true,
  'cặk' => true,
  'cứk' => true,
  'cứt' => true,
  'dcm' => true,
  'dek' => true,
  'del' => true,
  'deo' => true,
  'dis' => true,
  'dit' => true,
  'diz' => true,
  'di~' => true,
  'djt' => true,
  'dkm' => true,
  'dml' => true,
  'dmm' => true,
  'dou' => true,
  'dái' => true,
  'ewe' => true,
  'goo' => true,
  'gái' => true,
  'hãm' => true,
  'kac' => true,
  'kak' => true,
  'kiu' => true,
  'lon' => true,
  'loz' => true,
  'lìn' => true,
  'lắp' => true,
  'lồn' => true,
  'lừa' => true,
  'mọe' => true,
  'ngu' => true,
  'nug' => true,
  'núm' => true,
  'phò' => true,
  'sml' => true,
  'tai' => true,
  'tml' => true,
  'vcc' => true,
  'vcl' => true,
  'vãi' => true,
  'zái' => true,
  'đcm' => true,
  'đel' => true,
  'đis' => true,
  'đit' => true,
  'đjt' => true,
  'đkm' => true,
  'đmm' => true,
  'đuỹ' => true,
  'đái' => true,
  'đél' => true,
  'đéo' => true,
  'đìu' => true,
  'đếk' => true,
  'đết' => true,
  'đệt' => true,
  'địt' => true,
  'ajig' => true,
  'asyu' => true,
  'babi' => true,
  'bego' => true,
  'buoi' => true,
  'buồi' => true,
  'cacc' => true,
  'cdi~' => true,
  'châm' => true,
  'clgt' => true,
  'cmnl' => true,
  'coli' => true,
  'dcmm' => true,
  'dech' => true,
  'dell' => true,
  'dime' => true,
  'diml' => true,
  'dkmm' => true,
  'dmcs' => true,
  'dmmm' => true,
  'doma' => true,
  'gelo' => true,
  'giái' => true,
  'giật' => true,
  'giựt' => true,
  'homo' => true,
  'itil' => true,
  'kiêm' => true,
  'lozz' => true,
  'lông' => true,
  'lồng' => true,
  'maho' => true,
  'meki' => true,
  'mông' => true,
  'ndas' => true,
  'ngực' => true,
  'nulo' => true,
  'nuốt' => true,
  'nứng' => true,
  'peju' => true,
  'phân' => true,
  'puki' => true,
  'quái' => true,
  'sial' => true,
  'sảng' => true,
  'sừng' => true,
  'taik' => true,
  'tete' => true,
  'thml' => true,
  'tinh' => true,
  'udik' => true,
  'vleu' => true,
  'vlol' => true,
  'vlon' => true,
  'vloz' => true,
  'xhct' => true,
  'xoac' => true,
  'xoạc' => true,
  'đcmm' => true,
  'điếm' => true,
  'đkmm' => true,
  'đmmm' => true,
  'đách' => true,
  'đếch' => true,
  'đệch' => true,
  'ancok' => true,
  'ancuk' => true,
  'anjay' => true,
  'anjir' => true,
  'bacol' => true,
  'bacot' => true,
  'banci' => true,
  'bloon' => true,
  'bodoh' => true,
  'bucak' => true,
  'budug' => true,
  'buduk' => true,
  'buscu' => true,
  'chich' => true,
  'chích' => true,
  'chịch' => true,
  'cibai' => true,
  'cibay' => true,
  'cocot' => true,
  'cokil' => true,
  'colai' => true,
  'colay' => true,
  'concu' => true,
  'condi' => true,
  'conge' => true,
  'dcmmm' => true,
  'dilol' => true,
  'dilon' => true,
  'diloz' => true,
  'disme' => true,
  'dmmmm' => true,
  'duoma' => true,
  'entot' => true,
  'ewean' => true,
  'germo' => true,
  'goblo' => true,
  'jurig' => true,
  'kehed' => true,
  'kentu' => true,
  'kimak' => true,
  'kirik' => true,
  'konti' => true,
  'kopet' => true,
  'kurap' => true,
  'lacur' => true,
  'lebok' => true,
  'lonte' => true,
  'memek' => true,
  'ngehe' => true,
  'ngewe' => true,
  'occho' => true,
  'pante' => true,
  'patek' => true,
  'pecun' => true,
  'pejuh' => true,
  'peler' => true,
  'pepek' => true,
  'silit' => true,
  'tetek' => true,
  'titit' => true,
  'toket' => true,
  'tolol' => true,
  'ublag' => true,
  'đcmmm' => true,
  'đilol' => true,
  'đilon' => true,
  'điloz' => true,
  'đmmmm' => true,
  'anjing' => true,
  'anying' => true,
  'bagong' => true,
  'bangke' => true,
  'beloon' => true,
  'boloho' => true,
  'cailon' => true,
  'celeng' => true,
  'chetme' => true,
  'chóchó' => true,
  'cocote' => true,
  'colmek' => true,
  'concac' => true,
  'concak' => true,
  'condi~' => true,
  'congek' => true,
  'congor' => true,
  'cuccut' => true,
  'cukima' => true,
  'cutcut' => true,
  'dancok' => true,
  'dauboi' => true,
  'dauboy' => true,
  'dcmmmm' => true,
  'dismia' => true,
  'dismje' => true,
  'dmmmmm' => true,
  'genjik' => true,
  'goblog' => true,
  'goblok' => true,
  'hencet' => true,
  'jablay' => true,
  'jalang' => true,
  'jancok' => true,
  'jancuk' => true,
  'jembut' => true,
  'jilmek' => true,
  'kacung' => true,
  'kenthu' => true,
  'kentot' => true,
  'kintil' => true,
  'kontol' => true,
  'koplok' => true,
  'kunyuk' => true,
  'matlol' => true,
  'matlon' => true,
  'matloz' => true,
  'monyet' => true,
  'ndasmu' => true,
  'ngocok' => true,
  'nuglol' => true,
  'nuglon' => true,
  'pantek' => true,
  'pathek' => true,
  'pukima' => true,
  'sampah' => true,
  'sepong' => true,
  'sialan' => true,
  'tempek' => true,
  'tempik' => true,
  'vailol' => true,
  'vailon' => true,
  'đcmmmm' => true,
  'đmmmmm' => true,
  'balegug' => true,
  'bangsat' => true,
  'bedebah' => true,
  'belegug' => true,
  'bencong' => true,
  'condime' => true,
  'congean' => true,
  'cukimai' => true,
  'cukimay' => true,
  'daubuoi' => true,
  'dimemay' => true,
  'entotan' => true,
  'henceut' => true,
  'jiancok' => true,
  'kampang' => true,
  'kampret' => true,
  'keparat' => true,
  'ngentot' => true,
  'nungcak' => true,
  'nyepong' => true,
  'pelacur' => true,
  'pelakor' => true,
  'pukimae' => true,
  'pukimak' => true,
  'pukimay' => true,
  'sinting' => true,
  'thangml' => true,
  'xephinh' => true,
  'babangus' => true,
  'bajingan' => true,
  'bedegong' => true,
  'cailonme' => true,
  'condicho' => true,
  'condimay' => true,
  'conmemay' => true,
  'ditconme' => true,
  'ditmemay' => true,
  'dmconcho' => true,
  'heunceut' => true,
  'nggateli' => true,
  'wingkeng' => true,
  'địtconmẹ' => true,
  'caiconcac' => true,
  'caiconcak' => true,
  'caidauboi' => true,
  'caidauboy' => true,
  'ditchimay' => true,
  'kampungan' => true,
  'pecundang' => true,
  'sapmatlol' => true,
  'sapmatlon' => true,
  'sapmatloz' => true,
  'sontoloyo' => true,
  'tiembokne' => true,
  'caidaubuoi' => true,
  'condimemay' => true,
  'ditmecondi' => true,
  'cailonmemay' => true,
  'ditconmemay' => true,
  'ditmeconcho' => true,
  'thangmatlon' => true,
  'địtconmẹmày' => true,
  'dellnoinhieu' => true,
  'deohieukieugi' => true,
  'ditmecondicho' => true,
  'nhucaidaubuoi' => true,
  'dellhieukieugi' => true,
  'ditmemayconcho' => true,
  'ditmethangoccho' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'an',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'an' => 1,
      'lol' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anj',
      1 => 'cuc',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anj' => 1,
      'cuc' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'banh',
      1 => 'háng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'banh' => 1,
      'háng' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'banh',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'banh' => 1,
      'lol' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bo',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bo' => 1,
      'me' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bo',
      1 => 'mia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bo' => 1,
      'mia' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bo',
      1 => 'mie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bo' => 1,
      'mie' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bo',
      1 => 'mja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bo' => 1,
      'mja' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bo',
      1 => 'mje',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bo' => 1,
      'mje' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bít',
      1 => 'chi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bít' => 1,
      'chi' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bạo',
      1 => 'dâm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bạo' => 1,
      'dâm' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bỏ',
      1 => 'bú',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bỏ' => 1,
      'bú' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bỏ',
      1 => 'mja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bỏ' => 1,
      'mja' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bỏ',
      1 => 'mje',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bỏ' => 1,
      'mje' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bỏ',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bỏ' => 1,
      'mẹ' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bỏ',
      1 => 'mịa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bỏ' => 1,
      'mịa' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bỏ',
      1 => 'mịe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bỏ' => 1,
      'mịe' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bố',
      1 => 'láo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bố' => 1,
      'láo' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bực',
      1 => 'mình',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bực' => 1,
      'mình' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cai',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cai' => 1,
      'lol' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cao',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cao' => 1,
      'lol' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chet',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chet' => 1,
      'me' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chet',
      1 => 'mia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chet' => 1,
      'mia' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chet',
      1 => 'mie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chet' => 1,
      'mie' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chet',
      1 => 'mja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chet' => 1,
      'mja' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chet',
      1 => 'mje',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chet' => 1,
      'mje' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chó',
      1 => 'cái',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chó' => 1,
      'cái' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chó',
      1 => 'điên',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chó' => 1,
      'điên' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chết',
      1 => 'mie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chết' => 1,
      'mie' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chết',
      1 => 'mja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chết' => 1,
      'mja' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chết',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chết' => 1,
      'mẹ' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chết',
      1 => 'mịa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chết' => 1,
      'mịa' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chết',
      1 => 'mịe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chết' => 1,
      'mịe' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chết',
      1 => 'tiệt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chết' => 1,
      'tiệt' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chỉ',
      1 => 'trích',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chỉ' => 1,
      'trích' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'bic',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'bic' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'bíc',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'bíc' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'bích',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'bích' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'bít',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'bít' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'di',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'di' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'hoang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'hoang' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'lol' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'mẹ' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'trai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'con' => 1,
      'trai' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cào',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cào' => 1,
      'lol' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cái',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cái' => 1,
      'lol' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cười',
      1 => 'ẻ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cười' => 1,
      'ẻ' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cười',
      1 => 'ỉa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cười' => 1,
      'ỉa' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cờ',
      1 => 'hó',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cờ' => 1,
      'hó' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'củ',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'củ' => 1,
      'lol' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cực',
      1 => 'khoái',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cực' => 1,
      'khoái' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dach',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dach' => 1,
      'lol' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dau',
      1 => 'boi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dau' => 1,
      'boi' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dau',
      1 => 'boy',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dau' => 1,
      'boy' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dee',
      1 => 'chaw',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dee' => 1,
      'chaw' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'di',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'di' => 1,
      'me' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'ma',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'du' => 1,
      'ma' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dính',
      1 => 'máu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dính' => 1,
      'máu' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dương',
      1 => 'vật',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dương' => 1,
      'vật' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'giao',
      1 => 'hợp',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'giao' => 1,
      'hợp' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'giới',
      1 => 'tính',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'giới' => 1,
      'tính' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ham',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ham' => 1,
      'lol' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ham',
      1 => 'muốn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ham' => 1,
      'muốn' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hiếp',
      1 => 'dâm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hiếp' => 1,
      'dâm' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hoa',
      1 => 'hồng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hoa' => 1,
      'hồng' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hoành',
      1 => 'hành',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hoành' => 1,
      'hành' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'húp',
      1 => 'sò',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'húp' => 1,
      'sò' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hậu',
      1 => 'môn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hậu' => 1,
      'môn' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hắc',
      1 => 'chủng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hắc' => 1,
      'chủng' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ke' => 1,
      'me' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'mia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ke' => 1,
      'mia' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'mie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ke' => 1,
      'mie' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'mja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ke' => 1,
      'mja' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ke',
      1 => 'mje',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ke' => 1,
      'mje' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khiêu',
      1 => 'dâm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khiêu' => 1,
      'dâm' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khổ',
      1 => 'dâm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khổ' => 1,
      'dâm' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kệ',
      1 => 'mja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kệ' => 1,
      'mja' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kệ',
      1 => 'mje',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kệ' => 1,
      'mje' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kệ',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kệ' => 1,
      'mẹ' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kệ',
      1 => 'mịa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kệ' => 1,
      'mịa' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kệ',
      1 => 'mịe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kệ' => 1,
      'mịe' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'liếm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'la' => 1,
      'liếm' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lao',
      1 => 'cho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lao' => 1,
      'cho' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'loi',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'loi' => 1,
      'lol' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'loạn',
      1 => 'luân',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'loạn' => 1,
      'luân' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'láo',
      1 => 'chó',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'láo' => 1,
      'chó' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lòi',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lòi' => 1,
      'lol' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lòng',
      1 => 'tốt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lòng' => 1,
      'tốt' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lếu',
      1 => 'lều',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lếu' => 1,
      'lều' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lỗ',
      1 => 'đít',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lỗ' => 1,
      'đít' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lộn',
      1 => 'xuống',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lộn' => 1,
      'xuống' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mat',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mat' => 1,
      'lol' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mom',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mom' => 1,
      'lol' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mu',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mu' => 1,
      'lol' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mát',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mát' => 1,
      'lol' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mâu',
      1 => 'thuẫn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mâu' => 1,
      'thuẫn' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'môi',
      1 => 'âm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'môi' => 1,
      'âm' => 0,
    ),
  ),
  97 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mõm',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mõm' => 1,
      'lol' => 0,
    ),
  ),
  98 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mả',
      1 => 'cha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mả' => 1,
      'cha' => 0,
    ),
  ),
  99 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mả',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mả' => 1,
      'mẹ' => 0,
    ),
  ),
  100 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mặt',
      1 => 'bích',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mặt' => 1,
      'bích' => 0,
    ),
  ),
  101 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mặt',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mặt' => 1,
      'lol' => 0,
    ),
  ),
  102 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mẹ',
      1 => 'bà',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mẹ' => 1,
      'bà' => 0,
    ),
  ),
  103 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mẹ',
      1 => 'kiếp',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mẹ' => 1,
      'kiếp' => 0,
    ),
  ),
  104 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mồm',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mồm' => 1,
      'lol' => 0,
    ),
  ),
  105 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mục',
      1 => 'sư',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mục' => 1,
      'sư' => 0,
    ),
  ),
  106 => 
  array (
    'badPhrase' => 
    array (
      0 => 'người',
      1 => 'mổ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'người' => 1,
      'mổ' => 0,
    ),
  ),
  107 => 
  array (
    'badPhrase' => 
    array (
      0 => 'người',
      1 => 'tàu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'người' => 1,
      'tàu' => 0,
    ),
  ),
  108 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nhu',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nhu' => 1,
      'lol' => 0,
    ),
  ),
  109 => 
  array (
    'badPhrase' => 
    array (
      0 => 'như',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'như' => 1,
      'lol' => 0,
    ),
  ),
  110 => 
  array (
    'badPhrase' => 
    array (
      0 => 'niệu',
      1 => 'đạo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'niệu' => 1,
      'đạo' => 0,
    ),
  ),
  111 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nung',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nung' => 1,
      'lol' => 0,
    ),
  ),
  112 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nốn',
      1 => 'lừng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nốn' => 1,
      'lừng' => 0,
    ),
  ),
  113 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nữ',
      1 => 'thần',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nữ' => 1,
      'thần' => 0,
    ),
  ),
  114 => 
  array (
    'badPhrase' => 
    array (
      0 => 'phá',
      1 => 'thai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'phá' => 1,
      'thai' => 0,
    ),
  ),
  115 => 
  array (
    'badPhrase' => 
    array (
      0 => 'phốc',
      1 => 'phốc',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'phốc' => 0,
    ),
  ),
  116 => 
  array (
    'badPhrase' => 
    array (
      0 => 'quần',
      1 => 'lót',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'quần' => 1,
      'lót' => 0,
    ),
  ),
  117 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ranh',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ranh' => 1,
      'lol' => 0,
    ),
  ),
  118 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rảnh',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rảnh' => 1,
      'lol' => 0,
    ),
  ),
  119 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sap',
      1 => 'mat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sap' => 1,
      'mat' => 0,
    ),
  ),
  120 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sấp',
      1 => 'mặt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sấp' => 1,
      'mặt' => 0,
    ),
  ),
  121 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sủa',
      1 => 'bậy',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sủa' => 1,
      'bậy' => 0,
    ),
  ),
  122 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sủa',
      1 => 'càn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sủa' => 1,
      'càn' => 0,
    ),
  ),
  123 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sủa',
      1 => 'tiếp',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sủa' => 1,
      'tiếp' => 0,
    ),
  ),
  124 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sủa',
      1 => 'đi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sủa' => 1,
      'đi' => 0,
    ),
  ),
  125 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sứt',
      1 => 'mẻ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sứt' => 1,
      'mẻ' => 0,
    ),
  ),
  126 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tet',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tet' => 1,
      'lol' => 0,
    ),
  ),
  127 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thang',
      1 => 'cho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thang' => 1,
      'cho' => 0,
    ),
  ),
  128 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thang',
      1 => 'cho',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thang' => 1,
      'cho' => 0,
    ),
  ),
  129 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thang',
      1 => 'dien',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thang' => 1,
      'dien' => 0,
    ),
  ),
  130 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thay',
      1 => 'me',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thay' => 1,
      'me' => 0,
    ),
  ),
  131 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thay',
      1 => 'mia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thay' => 1,
      'mia' => 0,
    ),
  ),
  132 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thay',
      1 => 'mie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thay' => 1,
      'mie' => 0,
    ),
  ),
  133 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thâm',
      1 => 'nhập',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thâm' => 1,
      'nhập' => 0,
    ),
  ),
  134 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thú',
      1 => 'tính',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thú' => 1,
      'tính' => 0,
    ),
  ),
  135 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thảm',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thảm' => 1,
      'muncher' => 0,
    ),
  ),
  136 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thấm',
      1 => 'thía',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thấm' => 1,
      'thía' => 0,
    ),
  ),
  137 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thất',
      1 => 'bại',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thất' => 1,
      'bại' => 0,
    ),
  ),
  138 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thấy',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thấy' => 1,
      'mẹ' => 0,
    ),
  ),
  139 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thấy',
      1 => 'mịa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thấy' => 1,
      'mịa' => 0,
    ),
  ),
  140 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thấy',
      1 => 'mịe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thấy' => 1,
      'mịe' => 0,
    ),
  ),
  141 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thằng',
      1 => 'chó',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thằng' => 1,
      'chó' => 0,
    ),
  ),
  142 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thằng',
      1 => 'điên',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thằng' => 1,
      'điên' => 0,
    ),
  ),
  143 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thủ',
      1 => 'dâm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thủ' => 1,
      'dâm' => 0,
    ),
  ),
  144 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiết',
      1 => 'niệu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tiết' => 1,
      'niệu' => 0,
    ),
  ),
  145 => 
  array (
    'badPhrase' => 
    array (
      0 => 'toàn',
      1 => 'tính',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'toàn' => 1,
      'tính' => 0,
    ),
  ),
  146 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trich',
      1 => 'khong',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'trich' => 1,
      'khong' => 0,
    ),
  ),
  147 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trực',
      1 => 'tràng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'trực' => 1,
      'tràng' => 0,
    ),
  ),
  148 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tung',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tung' => 1,
      'lol' => 0,
    ),
  ),
  149 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuoi',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tuoi' => 1,
      'lol' => 0,
    ),
  ),
  150 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuyệt',
      1 => 'vời',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tuyệt' => 1,
      'vời' => 0,
    ),
  ),
  151 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuổi',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tuổi' => 1,
      'lol' => 0,
    ),
  ),
  152 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tàn',
      1 => 'bạo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tàn' => 1,
      'bạo' => 0,
    ),
  ),
  153 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tào',
      1 => 'lao',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tào' => 1,
      'lao' => 0,
    ),
  ),
  154 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tét',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tét' => 1,
      'lol' => 0,
    ),
  ),
  155 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tình',
      1 => 'dục',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tình' => 1,
      'dục' => 0,
    ),
  ),
  156 => 
  array (
    'badPhrase' => 
    array (
      0 => 'túi',
      1 => 'bóng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'túi' => 1,
      'bóng' => 0,
    ),
  ),
  157 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tổ',
      1 => 'cha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tổ' => 1,
      'cha' => 0,
    ),
  ),
  158 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tổ',
      1 => 'sư',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tổ' => 1,
      'sư' => 0,
    ),
  ),
  159 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tử',
      1 => 'cung',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tử' => 1,
      'cung' => 0,
    ),
  ),
  160 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vach',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vach' => 1,
      'lol' => 0,
    ),
  ),
  161 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vai' => 1,
      'lol' => 0,
    ),
  ),
  162 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vành',
      1 => 'đai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vành' => 1,
      'đai' => 0,
    ),
  ),
  163 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ván',
      1 => 'trượt',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ván' => 1,
      'trượt' => 0,
    ),
  ),
  164 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vạch',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vạch' => 1,
      'lol' => 0,
    ),
  ),
  165 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vặn',
      1 => 'vít',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vặn' => 1,
      'vít' => 0,
    ),
  ),
  166 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xam',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xam' => 1,
      'lol' => 0,
    ),
  ),
  167 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xao',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xao' => 1,
      'lol' => 0,
    ),
  ),
  168 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xàm',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xàm' => 1,
      'lol' => 0,
    ),
  ),
  169 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xáo',
      1 => 'trộn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xáo' => 1,
      'trộn' => 0,
    ),
  ),
  170 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xây',
      1 => 'dựng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xây' => 1,
      'dựng' => 0,
    ),
  ),
  171 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xéo',
      1 => 'háng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xéo' => 1,
      'háng' => 0,
    ),
  ),
  172 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xì',
      1 => 'trum',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xì' => 1,
      'trum' => 0,
    ),
  ),
  173 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xạo',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xạo' => 1,
      'lol' => 0,
    ),
  ),
  174 => 
  array (
    'badPhrase' => 
    array (
      0 => 'á',
      1 => 'đù',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'á' => 1,
      'đù' => 0,
    ),
  ),
  175 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ái',
      1 => 'nhi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ái' => 1,
      'nhi' => 0,
    ),
  ),
  176 => 
  array (
    'badPhrase' => 
    array (
      0 => 'âm',
      1 => 'môn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'âm' => 1,
      'môn' => 0,
    ),
  ),
  177 => 
  array (
    'badPhrase' => 
    array (
      0 => 'âm',
      1 => 'vật',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'âm' => 1,
      'vật' => 0,
    ),
  ),
  178 => 
  array (
    'badPhrase' => 
    array (
      0 => 'âm',
      1 => 'đạo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'âm' => 1,
      'đạo' => 0,
    ),
  ),
  179 => 
  array (
    'badPhrase' => 
    array (
      0 => 'óc',
      1 => 'chó',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'óc' => 1,
      'chó' => 0,
    ),
  ),
  180 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ăn',
      1 => 'lol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ăn' => 1,
      'lol' => 0,
    ),
  ),
  181 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ăn',
      1 => 'mày',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ăn' => 1,
      'mày' => 0,
    ),
  ),
  182 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đi',
      1 => 'tiểu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đi' => 1,
      'tiểu' => 0,
    ),
  ),
  183 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đã',
      1 => 'ngủ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đã' => 1,
      'ngủ' => 0,
    ),
  ),
  184 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đóng',
      1 => 'băng',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đóng' => 1,
      'băng' => 0,
    ),
  ),
  185 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đù',
      1 => 'cha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đù' => 1,
      'cha' => 0,
    ),
  ),
  186 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đù',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đù' => 1,
      'mẹ' => 0,
    ),
  ),
  187 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đù',
      1 => 'mịa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đù' => 1,
      'mịa' => 0,
    ),
  ),
  188 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đù',
      1 => 'mịe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đù' => 1,
      'mịe' => 0,
    ),
  ),
  189 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đú',
      1 => 'cha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đú' => 1,
      'cha' => 0,
    ),
  ),
  190 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đú',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đú' => 1,
      'mẹ' => 0,
    ),
  ),
  191 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đút',
      1 => 'đít',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đút' => 1,
      'đít' => 0,
    ),
  ),
  192 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đầu',
      1 => 'bòy',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đầu' => 1,
      'bòy' => 0,
    ),
  ),
  193 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đầu',
      1 => 'bùi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đầu' => 1,
      'bùi' => 0,
    ),
  ),
  194 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đầu',
      1 => 'khăn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đầu' => 1,
      'khăn' => 0,
    ),
  ),
  195 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đậu',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đậu' => 1,
      'mẹ' => 0,
    ),
  ),
  196 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đến',
      1 => 'trể',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đến' => 1,
      'trể' => 0,
    ),
  ),
  197 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đề',
      1 => 'mama',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đề' => 1,
      'mama' => 0,
    ),
  ),
  198 => 
  array (
    'badPhrase' => 
    array (
      0 => 'địa',
      1 => 'ngục',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'địa' => 1,
      'ngục' => 0,
    ),
  ),
  199 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đồ',
      1 => 'khỉ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đồ' => 1,
      'khỉ' => 0,
    ),
  ),
  200 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đồ',
      1 => 'khốn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đồ' => 1,
      'khốn' => 0,
    ),
  ),
  201 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đồ',
      1 => 'điên',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đồ' => 1,
      'điên' => 0,
    ),
  ),
  202 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đổ',
      1 => 'vỏ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đổ' => 1,
      'vỏ' => 0,
    ),
  ),
  203 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đỗn',
      1 => 'lì',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đỗn' => 1,
      'lì' => 0,
    ),
  ),
  204 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đờ',
      1 => 'mama',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đờ' => 1,
      'mama' => 0,
    ),
  ),
  205 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đờ',
      1 => 'mờ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đờ' => 1,
      'mờ' => 0,
    ),
  ),
  206 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đủ',
      1 => 'cha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đủ' => 1,
      'cha' => 0,
    ),
  ),
  207 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đủ',
      1 => 'mia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đủ' => 1,
      'mia' => 0,
    ),
  ),
  208 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đủ',
      1 => 'mie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đủ' => 1,
      'mie' => 0,
    ),
  ),
  209 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đủ',
      1 => 'mía',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đủ' => 1,
      'mía' => 0,
    ),
  ),
  210 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đủ',
      1 => 'mẹ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đủ' => 1,
      'mẹ' => 0,
    ),
  ),
  211 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đủ',
      1 => 'mịa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đủ' => 1,
      'mịa' => 0,
    ),
  ),
  212 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đủ',
      1 => 'mịe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'đủ' => 1,
      'mịe' => 0,
    ),
  ),
  213 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ấu',
      1 => 'dâm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ấu' => 1,
      'dâm' => 0,
    ),
  ),
  214 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ầm',
      1 => 'ầm',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ầm' => 0,
    ),
  ),
  215 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bà',
      1 => 'cha',
      2 => 'mày',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bà' => 2,
      'cha' => 1,
      'mày' => 0,
    ),
  ),
  216 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chậm',
      1 => 'phát',
      2 => 'triển',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chậm' => 2,
      'phát' => 1,
      'triển' => 0,
    ),
  ),
  217 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'bán',
      2 => 'hoa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'con' => 2,
      'bán' => 1,
      'hoa' => 0,
    ),
  ),
  218 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'di',
      2 => 'cho',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'con' => 2,
      'di' => 1,
      'cho' => 0,
    ),
  ),
  219 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'di',
      2 => 'cho',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'con' => 2,
      'di' => 1,
      'cho' => 0,
    ),
  ),
  220 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'me',
      2 => 'may',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'con' => 2,
      'me' => 1,
      'may' => 0,
    ),
  ),
  221 => 
  array (
    'badPhrase' => 
    array (
      0 => 'con',
      1 => 'mẹ',
      2 => 'mày',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'con' => 2,
      'mẹ' => 1,
      'mày' => 0,
    ),
  ),
  222 => 
  array (
    'badPhrase' => 
    array (
      0 => 'công',
      1 => 'việc',
      2 => 'thổi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'công' => 2,
      'việc' => 1,
      'thổi' => 0,
    ),
  ),
  223 => 
  array (
    'badPhrase' => 
    array (
      0 => 'deet',
      1 => 'miee',
      2 => 'maii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'deet' => 2,
      'miee' => 1,
      'maii' => 0,
    ),
  ),
  224 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'ma',
      2 => 'may',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'du' => 2,
      'ma' => 1,
      'may' => 0,
    ),
  ),
  225 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'ma',
      2 => 'nhieu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'du' => 2,
      'ma' => 1,
      'nhieu' => 0,
    ),
  ),
  226 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'me',
      2 => 'may',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'du' => 2,
      'me' => 1,
      'may' => 0,
    ),
  ),
  227 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'mot',
      2 => 'minh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'du' => 2,
      'mot' => 1,
      'minh' => 0,
    ),
  ),
  228 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dương',
      1 => 'vật',
      2 => 'giả',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dương' => 2,
      'vật' => 1,
      'giả' => 0,
    ),
  ),
  229 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kẻ',
      1 => 'hiếp',
      2 => 'dâm',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kẻ' => 2,
      'hiếp' => 1,
      'dâm' => 0,
    ),
  ),
  230 => 
  array (
    'badPhrase' => 
    array (
      0 => 'liếm',
      1 => 'đít',
      2 => 'tôi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'liếm' => 2,
      'đít' => 1,
      'tôi' => 0,
    ),
  ),
  231 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'cha',
      2 => 'may',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ma' => 2,
      'cha' => 1,
      'may' => 0,
    ),
  ),
  232 => 
  array (
    'badPhrase' => 
    array (
      0 => 'may',
      1 => 'dep',
      2 => 'trai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'may' => 2,
      'dep' => 1,
      'trai' => 0,
    ),
  ),
  233 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cha',
      2 => 'may',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'me' => 2,
      'cha' => 1,
      'may' => 0,
    ),
  ),
  234 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mả',
      1 => 'cha',
      2 => 'mày',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mả' => 2,
      'cha' => 1,
      'mày' => 0,
    ),
  ),
  235 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mẹ',
      1 => 'cha',
      2 => 'anh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mẹ' => 2,
      'cha' => 1,
      'anh' => 0,
    ),
  ),
  236 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mẹ',
      1 => 'cha',
      2 => 'mày',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mẹ' => 2,
      'cha' => 1,
      'mày' => 0,
    ),
  ),
  237 => 
  array (
    'badPhrase' => 
    array (
      0 => 'người',
      1 => 'da',
      2 => 'đen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'người' => 2,
      'da' => 1,
      'đen' => 0,
    ),
  ),
  238 => 
  array (
    'badPhrase' => 
    array (
      0 => 'người',
      1 => 'hâm',
      2 => 'mộ',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'người' => 2,
      'hâm' => 1,
      'mộ' => 0,
    ),
  ),
  239 => 
  array (
    'badPhrase' => 
    array (
      0 => 'người',
      1 => 'mách',
      2 => 'nước',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'người' => 2,
      'mách' => 1,
      'nước' => 0,
    ),
  ),
  240 => 
  array (
    'badPhrase' => 
    array (
      0 => 'người',
      1 => 'tàn',
      2 => 'bạo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'người' => 2,
      'tàn' => 1,
      'bạo' => 0,
    ),
  ),
  241 => 
  array (
    'badPhrase' => 
    array (
      0 => 'những',
      1 => 'quả',
      2 => 'bóng',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'những' => 2,
      'quả' => 1,
      'bóng' => 0,
    ),
  ),
  242 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rầm',
      1 => 'rầm',
      2 => 'rầm',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rầm' => 0,
    ),
  ),
  243 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sự',
      1 => 'phá',
      2 => 'thai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sự' => 2,
      'phá' => 1,
      'thai' => 0,
    ),
  ),
  244 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thằng',
      1 => 'chó',
      2 => 'đẻ',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'thằng' => 2,
      'chó' => 1,
      'đẻ' => 0,
    ),
  ),
  245 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiên',
      1 => 'sư',
      2 => 'bố',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tiên' => 2,
      'sư' => 1,
      'bố' => 0,
    ),
  ),
  246 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'đánh',
      2 => 'giá',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'x' => 2,
      'đánh' => 1,
      'giá' => 0,
    ),
  ),
  247 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đóng',
      1 => 'gói',
      2 => 'fudge',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'đóng' => 2,
      'gói' => 1,
      'fudge' => 0,
    ),
  ),
  248 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đú',
      1 => 'con',
      2 => 'mẹ',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'đú' => 2,
      'con' => 1,
      'mẹ' => 0,
    ),
  ),
  249 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đề',
      1 => 'ma',
      2 => 'ma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'đề' => 2,
      'ma' => 0,
    ),
  ),
  250 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đốn',
      1 => 'cửa',
      2 => 'lòng',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'đốn' => 2,
      'cửa' => 1,
      'lòng' => 0,
    ),
  ),
  251 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đồ',
      1 => 'ăn',
      2 => 'vặt',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'đồ' => 2,
      'ăn' => 1,
      'vặt' => 0,
    ),
  ),
  252 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đờ',
      1 => 'ma',
      2 => 'ma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'đờ' => 2,
      'ma' => 0,
    ),
  ),
  253 => 
  array (
    'badPhrase' => 
    array (
      0 => 'đức',
      1 => 'quốc',
      2 => 'xã',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'đức' => 2,
      'quốc' => 1,
      'xã' => 0,
    ),
  ),
  254 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bú',
      1 => 'bi',
      2 => 'của',
      3 => 'tôi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bú' => 3,
      'bi' => 2,
      'của' => 1,
      'tôi' => 0,
    ),
  ),
  255 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cái',
      1 => 'lề',
      2 => 'gì',
      3 => 'thốn',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'cái' => 3,
      'lề' => 2,
      'gì' => 1,
      'thốn' => 0,
    ),
  ),
  256 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lam',
      1 => 'ye',
      2 => 'mo',
      3 => 'ye',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'lam' => 3,
      'ye' => 0,
      'mo' => 1,
    ),
  ),
  257 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lời',
      1 => 'nói',
      2 => 'dâm',
      3 => 'dục',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'lời' => 3,
      'nói' => 2,
      'dâm' => 1,
      'dục' => 0,
    ),
  ),
  258 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'cha',
      2 => 'nha',
      3 => 'may',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ma' => 3,
      'cha' => 2,
      'nha' => 1,
      'may' => 0,
    ),
  ),
  259 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cha',
      2 => 'nha',
      3 => 'may',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'me' => 3,
      'cha' => 2,
      'nha' => 1,
      'may' => 0,
    ),
  ),
  260 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mút',
      1 => 'hạt',
      2 => 'của',
      3 => 'tôi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mút' => 3,
      'hạt' => 2,
      'của' => 1,
      'tôi' => 0,
    ),
  ),
  261 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mả',
      1 => 'cha',
      2 => 'nhà',
      3 => 'mày',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mả' => 3,
      'cha' => 2,
      'nhà' => 1,
      'mày' => 0,
    ),
  ),
  262 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mẹ',
      1 => 'cha',
      2 => 'nhà',
      3 => 'anh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mẹ' => 3,
      'cha' => 2,
      'nhà' => 1,
      'anh' => 0,
    ),
  ),
  263 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mẹ',
      1 => 'cha',
      2 => 'nhà',
      3 => 'mày',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mẹ' => 3,
      'cha' => 2,
      'nhà' => 1,
      'mày' => 0,
    ),
  ),
  264 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nội',
      1 => 'dung',
      2 => 'khiêu',
      3 => 'dâm',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nội' => 3,
      'dung' => 2,
      'khiêu' => 1,
      'dâm' => 0,
    ),
  ),
  265 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiên',
      1 => 'sư',
      2 => 'nhà',
      3 => 'mày',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tiên' => 3,
      'sư' => 2,
      'nhà' => 1,
      'mày' => 0,
    ),
  ),
  266 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tự',
      1 => 'cao',
      2 => 'tự',
      3 => 'đại',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tự' => 1,
      'cao' => 2,
      'đại' => 0,
    ),
  ),
  267 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ăn',
      1 => 'miếng',
      2 => 'trả',
      3 => 'miếng',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ăn' => 3,
      'miếng' => 0,
      'trả' => 1,
    ),
  ),
  268 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bú',
      1 => 'dương',
      2 => 'vật',
      3 => 'của',
      4 => 'tôi',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'bú' => 4,
      'dương' => 3,
      'vật' => 2,
      'của' => 1,
      'tôi' => 0,
    ),
  ),
  269 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cheemban',
      1 => 'twee',
      2 => 'nyu',
      3 => 'lawor',
      4 => 'deet',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'cheemban' => 4,
      'twee' => 3,
      'nyu' => 2,
      'lawor' => 1,
      'deet' => 0,
    ),
  ),
  270 => 
  array (
    'badPhrase' => 
    array (
      0 => 'door',
      1 => 'an',
      2 => 'nyu',
      3 => 'cuit',
      4 => 'choor',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'door' => 4,
      'an' => 3,
      'nyu' => 2,
      'cuit' => 1,
      'choor' => 0,
    ),
  ),
  271 => 
  array (
    'badPhrase' => 
    array (
      0 => 'liếm',
      1 => 'âm',
      2 => 'hộ',
      3 => 'của',
      4 => 'tôi',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'liếm' => 4,
      'âm' => 3,
      'hộ' => 2,
      'của' => 1,
      'tôi' => 0,
    ),
  ),
  272 => 
  array (
    'badPhrase' => 
    array (
      0 => 'liếm',
      1 => 'âm',
      2 => 'đạo',
      3 => 'của',
      4 => 'tôi',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'liếm' => 4,
      'âm' => 3,
      'đạo' => 2,
      'của' => 1,
      'tôi' => 0,
    ),
  ),
  273 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'ma',
      2 => 'may',
      3 => 'con',
      4 => 'di',
      5 => 'ngua',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'du' => 5,
      'ma' => 4,
      'may' => 3,
      'con' => 2,
      'di' => 1,
      'ngua' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 274;

