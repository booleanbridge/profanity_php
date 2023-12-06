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
  'फट' => true,
  'बट' => true,
  'बम' => true,
  'सह' => true,
  'उभे' => true,
  'कॉक' => true,
  'गिळ' => true,
  'घाट' => true,
  'चूस' => true,
  'टिट' => true,
  'डंक' => true,
  'डिक' => true,
  'दुख' => true,
  'देव' => true,
  'नरक' => true,
  'नॉब' => true,
  'फॅग' => true,
  'बोब' => true,
  'भडक' => true,
  'मंद' => true,
  'रंप' => true,
  'रसी' => true,
  'रिम' => true,
  'शेग' => true,
  'कांट' => true,
  'कॉनन' => true,
  'खूनी' => true,
  'गाढव' => true,
  'गुदा' => true,
  'चिंक' => true,
  'टर्ड' => true,
  'डाईक' => true,
  'नाझी' => true,
  'निगर' => true,
  'पिसर' => true,
  'पेशी' => true,
  'फॅनी' => true,
  'योनी' => true,
  'रॅपर' => true,
  'लिंग' => true,
  'लिंच' => true,
  'वांग' => true,
  'विंक' => true,
  'शिंग' => true,
  'शिशी' => true,
  'सिपा' => true,
  'स्मट' => true,
  'होरे' => true,
  'laudu' => true,
  'puchi' => true,
  'ऑर्गी' => true,
  'कॉक्स' => true,
  'चापटी' => true,
  'चेंडू' => true,
  'दुःखी' => true,
  'दृश्य' => true,
  'निकला' => true,
  'निगार' => true,
  'नॉब्स' => true,
  'पिसोफ' => true,
  'प्यूब' => true,
  'फॅगॉट' => true,
  'फेटिश' => true,
  'बकवास' => true,
  'बसीटा' => true,
  'बिट्स' => true,
  'बोलोक' => true,
  'मांजर' => true,
  'मुरुम' => true,
  'मुर्ख' => true,
  'रोझेट' => true,
  'वल्वा' => true,
  'वासना' => true,
  'विकृत' => true,
  'वीर्य' => true,
  'शिश्न' => true,
  'शेमले' => true,
  'सुगंध' => true,
  'सेक्स' => true,
  'सोडोम' => true,
  'स्खलन' => true,
  'हिटलर' => true,
  'हिसका' => true,
  'aandya' => true,
  'chinal' => true,
  'gandoo' => true,
  'hepari' => true,
  'muttha' => true,
  'zavnya' => true,
  'अंडकोश' => true,
  'अंडकोष' => true,
  'अप्सरा' => true,
  'अश्लील' => true,
  'अहंकार' => true,
  'आसंवेग' => true,
  'उद्गार' => true,
  'ऑर्गीज' => true,
  'कुत्री' => true,
  'गांडुळ' => true,
  'गुदाशय' => true,
  'छेडछाड' => true,
  'झूफाइल' => true,
  'डिल्डो' => true,
  'पिसिंग' => true,
  'प्रवेश' => true,
  'फॅगिंग' => true,
  'फेलिंग' => true,
  'बेलेंड' => true,
  'लॅबिया' => true,
  'वेश्या' => true,
  'शीर्षक' => true,
  'सोडोमी' => true,
  'स्पंकी' => true,
  'bhosada' => true,
  'chhinal' => true,
  'kanadal' => true,
  'lavadya' => true,
  'marathi' => true,
  'shattya' => true,
  'shebnya' => true,
  'yadzava' => true,
  'zavadya' => true,
  'zavkhor' => true,
  'इरेक्शन' => true,
  'उत्साही' => true,
  'गर्भपात' => true,
  'गर्भाशय' => true,
  'गुप्तचर' => true,
  'घाणेरडा' => true,
  'धिक्कार' => true,
  'निओनाझी' => true,
  'परीक्षक' => true,
  'प्रिक्स' => true,
  'फॅगॉट्स' => true,
  'फॅलेटीओ' => true,
  'फेलेटिओ' => true,
  'लिंचिंग' => true,
  'विचित्र' => true,
  'हरामखोर' => true,
  'bhadavya' => true,
  'chhaiyla' => true,
  'foknicha' => true,
  'jhavadya' => true,
  'yadzavya' => true,
  'उत्सुकता' => true,
  'ऑर्गॅसिम' => true,
  'ऑर्गेज्म' => true,
  'कनिलिंगस' => true,
  'गुदद्वार' => true,
  'झूफिलिया' => true,
  'तिरस्कार' => true,
  'देवशापित' => true,
  'पीडोफाइल' => true,
  'बलात्कार' => true,
  'बॅस्टर्ड' => true,
  'बेस्टियल' => true,
  'मूत्रकोश' => true,
  'विपर्यास' => true,
  'वियाग्रा' => true,
  'व्यभिचार' => true,
  'शिश्निका' => true,
  'शुक्राणू' => true,
  'सोडोमाइझ' => true,
  'स्क्रोटम' => true,
  'स्तनाग्र' => true,
  'madarchod' => true,
  'randechya' => true,
  'क्लिटोरिस' => true,
  'बलात्कारी' => true,
  'मांसाहारी' => true,
  'मासोचिस्ट' => true,
  'हस्तमैथुन' => true,
  'हेबेफिलिक' => true,
  'fodricchya' => true,
  'fokanchidy' => true,
  'lingapisat' => true,
  'madarchoth' => true,
  'raandichya' => true,
  'कन्निलिंगस' => true,
  'पीडोफिलिया' => true,
  'मूत्रमार्ग' => true,
  'वीर्यस्खलन' => true,
  'सोडोमाइज्ड' => true,
  'हिबेफिलिया' => true,
  'हेबेफाइल्स' => true,
  'पीडोफिलियाक' => true,
  'पॅनसेक्शुअल' => true,
  'बेस्टिअलिटी' => true,
  'phodarphatya' => true,
  'कानाकोपऱ्यात' => true,
  'टेस्टिक्युलर' => true,
  'निम्फोमेनिया' => true,
  'पोर्नोग्राफी' => true,
  'मुलगाएककुत्री' => true,
  'अॅम्बिसेक्शुअल' => true,
  'अॅम्बोसेक्शुअल' => true,
  'प्राण्यांबरोबर' => true,
  'अम्बिसेक्शुअलिटी' => true,
  'अॅक्रोटोमोफिलिया' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aai',
      1 => 'ghalya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aai' => 1,
      'ghalya' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aai',
      1 => 'javada',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aai' => 1,
      'javada' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ai',
      1 => 'zawlee',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ai' => 1,
      'zawlee' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'akkar',
      1 => 'mashi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'akkar' => 1,
      'mashi' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aye',
      1 => 'jhaatu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aye' => 1,
      'jhaatu' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayica',
      1 => 'dana',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ayica' => 1,
      'dana' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'badak',
      1 => 'zawarya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'badak' => 1,
      'zawarya' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhikaar',
      1 => 'chot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bhikaar' => 1,
      'chot' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bin',
      1 => 'gotyaachya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bin' => 1,
      'gotyaachya' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bulli',
      1 => 'chokya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bulli' => 1,
      'chokya' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinaal',
      1 => 'maichya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chinaal' => 1,
      'maichya' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'choco',
      1 => 'ghe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'choco' => 1,
      'ghe' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chut',
      1 => 'marichya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chut' => 1,
      'marichya' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dukkar',
      1 => 'chod',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dukkar' => 1,
      'chod' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fodri',
      1 => 'pisaat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fodri' => 1,
      'pisaat' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gand',
      1 => 'khaya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gand' => 1,
      'khaya' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gandit',
      1 => 'ghuslo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gandit' => 1,
      'ghuslo' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gandit',
      1 => 'pai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gandit' => 1,
      'pai' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gav',
      1 => 'zawadi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gav' => 1,
      'zawadi' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khargatya',
      1 => 'gandicha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khargatya' => 1,
      'gandicha' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khullya',
      1 => 'lavdyacchya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khullya' => 1,
      'lavdyacchya' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lal',
      1 => 'gandya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lal' => 1,
      'gandya' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lauda',
      1 => 'sandhwa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lauda' => 1,
      'sandhwa' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maay',
      1 => 'zavya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maay' => 1,
      'zavya' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paadar',
      1 => 'gandichya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'paadar' => 1,
      'gandichya' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'phodree',
      1 => 'pisat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'phodree' => 1,
      'pisat' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pucchi',
      1 => 'khajvya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pucchi' => 1,
      'khajvya' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shanya',
      1 => 'lavdyacchya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shanya' => 1,
      'lavdyacchya' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telkat',
      1 => 'randi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'telkat' => 1,
      'randi' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tondaat',
      1 => 'gay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tondaat' => 1,
      'gay' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yeda',
      1 => 'lavdya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yeda' => 1,
      'lavdya' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'आई',
      1 => 'माकड',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'आई' => 1,
      'माकड' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'आत',
      1 => 'घुसणे',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'आत' => 1,
      'घुसणे' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'कार्पेट',
      1 => 'मुन्चर',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'कार्पेट' => 1,
      'मुन्चर' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'झटका',
      1 => 'बंद',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'झटका' => 1,
      'बंद' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'पुरुषाचे',
      1 => 'जननेंद्रिय',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'पुरुषाचे' => 1,
      'जननेंद्रिय' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'फडगे',
      1 => 'पॅकर',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'फडगे' => 1,
      'पॅकर' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'सीग',
      1 => 'हेल',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'सीग' => 1,
      'हेल' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aai',
      1 => 'chi',
      2 => 'gand',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'aai' => 2,
      'chi' => 1,
      'gand' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aaichya',
      1 => 'gavat',
      2 => 'pay',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'aaichya' => 2,
      'gavat' => 1,
      'pay' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gand',
      1 => 'phatli',
      2 => 'bhenchod',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gand' => 2,
      'phatli' => 1,
      'bhenchod' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lavda',
      1 => 'chok',
      2 => 'majha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lavda' => 2,
      'chok' => 1,
      'majha' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maushi',
      1 => 'chi',
      2 => 'gaand',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'maushi' => 2,
      'chi' => 1,
      'gaand' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pachi',
      1 => 'bota',
      2 => 'bhundyat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pachi' => 2,
      'bota' => 1,
      'bhundyat' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shata',
      1 => 'ki',
      2 => 'chutney',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'shata' => 2,
      'ki' => 1,
      'chutney' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tujhi',
      1 => 'aai',
      2 => 'takli',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tujhi' => 2,
      'aai' => 1,
      'takli' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tujhya',
      1 => 'aaicha',
      2 => 'gho',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tujhya' => 2,
      'aaicha' => 1,
      'gho' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tujhya',
      1 => 'gaanditla',
      2 => 'goo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tujhya' => 2,
      'gaanditla' => 1,
      'goo' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tujya',
      1 => 'aaicha',
      2 => 'puchha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tujya' => 2,
      'aaicha' => 1,
      'puchha' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuza',
      1 => 'baap',
      2 => 'dhandewala',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuza' => 2,
      'baap' => 1,
      'dhandewala' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaicha',
      2 => 'foda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 2,
      'aaicha' => 1,
      'foda' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaicha',
      2 => 'lavda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 2,
      'aaicha' => 1,
      'lavda' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaichi',
      2 => 'gand',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 2,
      'aaichi' => 1,
      'gand' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaichi',
      2 => 'pucchi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 2,
      'aaichi' => 1,
      'pucchi' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'gaandit',
      2 => 'paay',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 2,
      'gaandit' => 1,
      'paay' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'एक्स',
      1 => 'रेट',
      2 => 'केले',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'एक्स' => 2,
      'रेट' => 1,
      'केले' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tujha',
      1 => 'aila',
      2 => 'kutryawani',
      3 => 'zawin',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tujha' => 3,
      'aila' => 2,
      'kutryawani' => 1,
      'zawin' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tujhya',
      1 => 'nana',
      2 => 'chi',
      3 => 'taang',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tujhya' => 3,
      'nana' => 2,
      'chi' => 1,
      'taang' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuji',
      1 => 'aiee',
      2 => 'chi',
      3 => 'gaand',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tuji' => 3,
      'aiee' => 2,
      'chi' => 1,
      'gaand' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tula',
      1 => 'kutrya',
      2 => 'sarkha',
      3 => 'badadel',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tula' => 3,
      'kutrya' => 2,
      'sarkha' => 1,
      'badadel' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzi',
      1 => 'aai',
      2 => 'padli',
      3 => 'madkyat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tuzi' => 3,
      'aai' => 2,
      'padli' => 1,
      'madkyat' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aai',
      2 => 'chi',
      3 => 'phodree',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 3,
      'aai' => 2,
      'chi' => 1,
      'phodree' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaichya',
      2 => 'gandit',
      3 => 'mungya',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 3,
      'aaichya' => 2,
      'gandit' => 1,
      'mungya' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuji',
      1 => 'ai',
      2 => 'mutli',
      3 => 'madkyat',
      4 => 'phalaphala',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuji' => 4,
      'ai' => 3,
      'mutli' => 2,
      'madkyat' => 1,
      'phalaphala' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzi',
      1 => 'aai',
      2 => 'padli',
      3 => 'tuzya',
      4 => 'tondat',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuzi' => 4,
      'aai' => 3,
      'padli' => 2,
      'tuzya' => 1,
      'tondat' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzua',
      1 => 'aaichi',
      2 => 'pucchi',
      3 => 'viskatli',
      4 => 'ekrat',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuzua' => 4,
      'aaichi' => 3,
      'pucchi' => 2,
      'viskatli' => 1,
      'ekrat' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaichya',
      2 => 'pucchila',
      3 => 'chavla',
      4 => 'kutra',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 4,
      'aaichya' => 3,
      'pucchila' => 2,
      'chavla' => 1,
      'kutra' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaichya',
      2 => 'pucchila',
      3 => 'chavla',
      4 => 'sap',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 4,
      'aaichya' => 3,
      'pucchila' => 2,
      'chavla' => 1,
      'sap' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aaila',
      2 => 'zavla',
      3 => 'kala',
      4 => 'kutra',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 4,
      'aaila' => 3,
      'zavla' => 2,
      'kala' => 1,
      'kutra' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'aii',
      2 => 'zavneya',
      3 => 'tuzya',
      4 => 'baapla',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 1,
      'aii' => 3,
      'zavneya' => 2,
      'baapla' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzya',
      1 => 'bapacha',
      2 => 'pay',
      3 => 'adakla',
      4 => 'sandasat',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tuzya' => 4,
      'bapacha' => 3,
      'pay' => 2,
      'adakla' => 1,
      'sandasat' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuzhya',
      1 => 'aai',
      2 => 'cha',
      3 => 'chut',
      4 => 'madhye',
      5 => 'munglya',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'tuzhya' => 5,
      'aai' => 4,
      'cha' => 3,
      'chut' => 2,
      'madhye' => 1,
      'munglya' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 72;

