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
  'बट' => true,
  'मल' => true,
  'सह' => true,
  'ඇට' => true,
  'ටෞ' => true,
  'තන' => true,
  'පක' => true,
  'esi' => true,
  'eta' => true,
  'huk' => true,
  'jda' => true,
  'jra' => true,
  'tau' => true,
  'कून' => true,
  'कॉक' => true,
  'गधे' => true,
  'नरक' => true,
  'बुत' => true,
  'मैल' => true,
  'रंप' => true,
  'रिम' => true,
  'हवस' => true,
  'होर' => true,
  'ඒසි' => true,
  'පකට' => true,
  'පකය' => true,
  'පකේ' => true,
  'පකෝ' => true,
  'පුක' => true,
  'වැල' => true,
  'සක්' => true,
  'ෆක්' => true,
  'aand' => true,
  'ammt' => true,
  'anta' => true,
  'badu' => true,
  'bsdk' => true,
  'burr' => true,
  'chod' => true,
  'chut' => true,
  'goli' => true,
  'huka' => true,
  'kari' => true,
  'keri' => true,
  'loda' => true,
  'lodu' => true,
  'lund' => true,
  'maal' => true,
  'paca' => true,
  'paka' => true,
  'pake' => true,
  'pako' => true,
  'puka' => true,
  'sdom' => true,
  'suar' => true,
  'tauk' => true,
  'tofa' => true,
  'topa' => true,
  'vela' => true,
  'vesa' => true,
  'vesi' => true,
  'wela' => true,
  'wesa' => true,
  'wesi' => true,
  'अंडा' => true,
  'उग्र' => true,
  'कोना' => true,
  'गुदा' => true,
  'चंचल' => true,
  'चिंक' => true,
  'चुभन' => true,
  'चूची' => true,
  'चोंच' => true,
  'झटका' => true,
  'नाजी' => true,
  'निगल' => true,
  'फटना' => true,
  'बांध' => true,
  'योनि' => true,
  'योनी' => true,
  'लिंग' => true,
  'लिंच' => true,
  'वहशी' => true,
  'वृषण' => true,
  'वैंग' => true,
  'साहस' => true,
  'උරපං' => true,
  'කැරි' => true,
  'ටඉකේ' => true,
  'ටොපා' => true,
  'ටෞක්' => true,
  'පකයා' => true,
  'පම්ක' => true,
  'පයිය' => true,
  'ලබ්බ' => true,
  'වල්ල' => true,
  'හුක්' => true,
  'හුකා' => true,
  'aandu' => true,
  'balli' => true,
  'belli' => true,
  'boobe' => true,
  'chodu' => true,
  'choot' => true,
  'chude' => true,
  'gaand' => true,
  'gandu' => true,
  'gasti' => true,
  'hawas' => true,
  'hijda' => true,
  'hijra' => true,
  'hutta' => true,
  'jhaat' => true,
  'jhant' => true,
  'junda' => true,
  'kimba' => true,
  'kukku' => true,
  'kutta' => true,
  'kutte' => true,
  'labba' => true,
  'lolla' => true,
  'mayil' => true,
  'mutth' => true,
  'paiya' => true,
  'pakaa' => true,
  'payya' => true,
  'ponna' => true,
  'raand' => true,
  'randi' => true,
  'saala' => true,
  'taike' => true,
  'tatte' => true,
  'tatti' => true,
  'thana' => true,
  'valla' => true,
  'walla' => true,
  'आरएसी' => true,
  'उल्लू' => true,
  'घुंडी' => true,
  'घुसना' => true,
  'चूतड़' => true,
  'चूसना' => true,
  'छीनना' => true,
  'नितंब' => true,
  'पेशाब' => true,
  'पॉर्न' => true,
  'फूहड़' => true,
  'बकवास' => true,
  'भगशेफ' => true,
  'मंदता' => true,
  'मलाशय' => true,
  'मूत्र' => true,
  'मूर्ख' => true,
  'रोसेट' => true,
  'वीर्य' => true,
  'सेक्स' => true,
  'स्खलन' => true,
  'हिटलर' => true,
  'උත්ති' => true,
  'උරනවා' => true,
  'උරපන්' => true,
  'කැරිය' => true,
  'කිම්බ' => true,
  'ටහිකේ' => true,
  'පයියා' => true,
  'පොල්ල' => true,
  'හුකපං' => true,
  'හුත්ත' => true,
  'baduwa' => true,
  'besige' => true,
  'besike' => true,
  'bhadva' => true,
  'bhadve' => true,
  'bhangi' => true,
  'bhosad' => true,
  'bhosdi' => true,
  'bhundi' => true,
  'bihari' => true,
  'camina' => true,
  'chakke' => true,
  'chinki' => true,
  'choope' => true,
  'chuche' => true,
  'chuchi' => true,
  'chutad' => true,
  'chutan' => true,
  'chutia' => true,
  'gaandu' => true,
  'gashti' => true,
  'ghassa' => true,
  'ghasti' => true,
  'gucchi' => true,
  'gucchu' => true,
  'gujjar' => true,
  'harami' => true,
  'humtha' => true,
  'huptho' => true,
  'huttik' => true,
  'jhantu' => true,
  'jhatoo' => true,
  'kamine' => true,
  'kanjar' => true,
  'kariya' => true,
  'kuthri' => true,
  'lodapa' => true,
  'loolla' => true,
  'lundoo' => true,
  'mayila' => true,
  'pacaya' => true,
  'pakata' => true,
  'pakaya' => true,
  'pataka' => true,
  'payiya' => true,
  'tahike' => true,
  'tharak' => true,
  'tharki' => true,
  'urapan' => true,
  'vesawa' => true,
  'vesige' => true,
  'wesawa' => true,
  'wesige' => true,
  'अंडकोश' => true,
  'अंडकोष' => true,
  'अप्सरा' => true,
  'अश्लील' => true,
  'अहंभाव' => true,
  'कमबख्त' => true,
  'किन्नर' => true,
  'कुतिया' => true,
  'गड़बड़' => true,
  'गेंदों' => true,
  'डिल्डो' => true,
  'निप्पल' => true,
  'प्रवेश' => true,
  'बिल्ली' => true,
  'भगनासा' => true,
  'मुर्गा' => true,
  'लुटेरा' => true,
  'लेबिया' => true,
  'वहशीता' => true,
  'विकृति' => true,
  'वेश्या' => true,
  'सिगरेट' => true,
  'स्खलित' => true,
  'स्तनों' => true,
  'අම්ම්ට' => true,
  'කැරියා' => true,
  'කුක්කු' => true,
  'ජුන්ඩා' => true,
  'ටඋකනවා' => true,
  'ටෞකණ්ඩ' => true,
  'ටෞකන්න' => true,
  'තොංගලේ' => true,
  'පම්කයා' => true,
  'බැල්ලි' => true,
  'බේසිකෙ' => true,
  'බේසිගෙ' => true,
  'ලොල්ලා' => true,
  'ලොවනවා' => true,
  'වටඇල්ල' => true,
  'වේසාවා' => true,
  'හුකනවා' => true,
  'හුකන්න' => true,
  'හුත්තා' => true,
  'හුප්තා' => true,
  'හුම්කන' => true,
  'හුම්තා' => true,
  'attimba' => true,
  'badzaat' => true,
  'bellige' => true,
  'besikge' => true,
  'bhandve' => true,
  'chinaal' => true,
  'chooche' => true,
  'choochi' => true,
  'chootia' => true,
  'chudaap' => true,
  'chudasi' => true,
  'chutadd' => true,
  'chutiya' => true,
  'hukanna' => true,
  'hukapan' => true,
  'huththa' => true,
  'huttige' => true,
  'jackson' => true,
  'kaminey' => true,
  'kuttiya' => true,
  'lundure' => true,
  'mutthal' => true,
  'najayaz' => true,
  'pakayaa' => true,
  'pamkaya' => true,
  'patakha' => true,
  'pettiya' => true,
  'ponnaya' => true,
  'randaap' => true,
  'sakkili' => true,
  'uranawa' => true,
  'ओगाज़्म' => true,
  'गर्भपात' => true,
  'गर्भाशय' => true,
  'ज़ूफाइल' => true,
  'निर्माण' => true,
  'पिछाड़ी' => true,
  'फेलटियो' => true,
  'लिंचिंग' => true,
  'शिश्नमल' => true,
  'सैडिज्म' => true,
  'सैडिस्ट' => true,
  'ඇරගනින්' => true,
  'උත්තියේ' => true,
  'කොනකපාල' => true,
  'කොයිපටා' => true,
  'ජැක්සන්' => true,
  'ටහුකන්න' => true,
  'පයිකොටා' => true,
  'පෙට්ටිය' => true,
  'පොන්නයා' => true,
  'ලෙවකනවා' => true,
  'වලත්තයා' => true,
  'සක්කිලි' => true,
  'හුකන්නා' => true,
  'araganin' => true,
  'balatkar' => true,
  'betichod' => true,
  'bhosdike' => true,
  'chootiya' => true,
  'eraganin' => true,
  'gaandfat' => true,
  'hukanawa' => true,
  'hukannaa' => true,
  'huththik' => true,
  'lovanawa' => true,
  'lowanawa' => true,
  'lundaapa' => true,
  'lundtopi' => true,
  'taukanda' => true,
  'taukanna' => true,
  'thongale' => true,
  'wataella' => true,
  'ईन्सेस्त' => true,
  'गर्भपातक' => true,
  'पाशविकता' => true,
  'पीडोफाइल' => true,
  'बलात्कार' => true,
  'बिगाड़ना' => true,
  'बेवकूफों' => true,
  'मुखमैथुन' => true,
  'यौनसंबंध' => true,
  'व्यभिचार' => true,
  'शुक्राणु' => true,
  'ඇට්ටිම්බ' => true,
  'කැස්පුරි' => true,
  'කෑස්පුරි' => true,
  'කිඹිසිඹා' => true,
  'කොනකපාලා' => true,
  'බේසික්ගෙ' => true,
  'වේසෞත්තා' => true,
  'හැමිනෙනව' => true,
  'ambakissa' => true,
  'bakrichod' => true,
  'balatkaar' => true,
  'balatkari' => true,
  'bursungha' => true,
  'chorichod' => true,
  'chudpagal' => true,
  'gaandufad' => true,
  'gandfattu' => true,
  'gandmasti' => true,
  'haramzade' => true,
  'humkanawa' => true,
  'huththige' => true,
  'kespuriya' => true,
  'kukarchod' => true,
  'madarchod' => true,
  'pukmantha' => true,
  'sakkiliya' => true,
  'tahukanna' => true,
  'taukanawa' => true,
  'valattaya' => true,
  'कामोन्माद' => true,
  'ज़ूफिलिया' => true,
  'दृश्यरतिक' => true,
  'नियोनाज़ी' => true,
  'बलात्कारी' => true,
  'रक्तरंजित' => true,
  'सोडोमाइज़' => true,
  'हस्तमैथुन' => true,
  'हेबेफिलिक' => true,
  'අම්බකිස්ස' => true,
  'පුක්මන්තා' => true,
  'සක්කිලියා' => true,
  'හැමිනෙනවා' => true,
  'gaandmasti' => true,
  'haminenava' => true,
  'haminenawa' => true,
  'konakapala' => true,
  'lewakanawa' => true,
  'madhavchod' => true,
  'wallapatta' => true,
  'wesauththa' => true,
  'पीडोफिलिया' => true,
  'भगवानशापित' => true,
  'मूत्रमार्ग' => true,
  'हेबेफाइल्स' => true,
  'हेबेफिलिया' => true,
  'valaththaya' => true,
  'walaththaya' => true,
  'कुत्तेकमीने' => true,
  'पीडोफिलियाक' => true,
  'पैनसेक्सुअल' => true,
  'सोडोमाइज़्ड' => true,
  'पीड़ासुखभोगी' => true,
  'होमोसेक्सुअल' => true,
  'एम्बोसेक्सुअल' => true,
  'एंबिसेक्सुअलिटी' => true,
  'एक्रोटोमोफिलिया' => true,
  'स्त्रीकामोन्माद' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ake',
      1 => 'purinawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ake' => 1,
      'purinawa' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ake',
      1 => 'purinna',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ake' => 1,
      'purinna' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ammage',
      1 => 'redda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ammage' => 1,
      'redda' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'back',
      1 => 'gahanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'back' => 1,
      'gahanawa' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'backside',
      1 => 'okay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'backside' => 1,
      'okay' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bada',
      1 => 'wenawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bada' => 1,
      'wenawa' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bek',
      1 => 'gahanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bek' => 1,
      'gahanawa' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bell',
      1 => 'bula',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bell' => 1,
      'bula' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhootni',
      1 => 'ke',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bhootni' => 1,
      'ke' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhosadi',
      1 => 'ke',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bhosadi' => 1,
      'ke' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhosdee',
      1 => 'kay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bhosdee' => 1,
      'kay' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chudai',
      1 => 'khanaa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chudai' => 1,
      'khanaa' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chudam',
      1 => 'chudai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chudam' => 1,
      'chudai' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chudan',
      1 => 'chudai',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chudan' => 1,
      'chudai' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'diwa',
      1 => 'danawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'diwa' => 1,
      'danawa' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ganu',
      1 => 'hora',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ganu' => 1,
      'hora' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'genu',
      1 => 'hora',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'genu' => 1,
      'hora' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'geta',
      1 => 'mirikanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'geta' => 1,
      'mirikanawa' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gon',
      1 => 'bijja',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gon' => 1,
      'bijja' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'haram',
      1 => 'zaadaa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'haram' => 1,
      'zaadaa' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hukanawane',
      1 => 'ithin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hukanawane' => 1,
      'ithin' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jack',
      1 => 'gahanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jack' => 1,
      'gahanawa' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jack',
      1 => 'gahapan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jack' => 1,
      'gahapan' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jack',
      1 => 'ghpn',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jack' => 1,
      'ghpn' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jhat',
      1 => 'lahergaya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jhat' => 1,
      'lahergaya' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kaali',
      1 => 'kutti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kaali' => 1,
      'kutti' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kalu',
      1 => 'badda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kalu' => 1,
      'badda' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kanna',
      1 => 'pori',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kanna' => 1,
      'pori' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kanna',
      1 => 'poriya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kanna' => 1,
      'poriya' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kas',
      1 => 'puriya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kas' => 1,
      'puriya' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kenna',
      1 => 'poriya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kenna' => 1,
      'poriya' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kes',
      1 => 'puri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kes' => 1,
      'puri' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kibi',
      1 => 'juse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kibi' => 1,
      'juse' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kibi',
      1 => 'kavayya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kibi' => 1,
      'kavayya' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kibi',
      1 => 'siba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kibi' => 1,
      'siba' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kimbi',
      1 => 'juice',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kimbi' => 1,
      'juice' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kimbi',
      1 => 'kawaiya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kimbi' => 1,
      'kawaiya' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kimbi',
      1 => 'simba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kimbi' => 1,
      'simba' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koi',
      1 => 'pata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koi' => 1,
      'pata' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kona',
      1 => 'kapanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kona' => 1,
      'kapanawa' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kutha',
      1 => 'sala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kutha' => 1,
      'sala' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuttan',
      1 => 'chooty',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kuttan' => 1,
      'chooty' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuttan',
      1 => 'chuti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kuttan' => 1,
      'chuti' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'luv',
      1 => 'juce',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'luv' => 1,
      'juce' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'luv',
      1 => 'juice',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'luv' => 1,
      'juice' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'ate',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ma' => 1,
      'ate' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'mala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ma' => 1,
      'mala' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maa',
      1 => 'chuda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maa' => 1,
      'chuda' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mae',
      1 => 'ate',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mae' => 1,
      'ate' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mae',
      1 => 'mala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mae' => 1,
      'mala' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nilmanel',
      1 => 'huththi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nilmanel' => 1,
      'huththi' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pai',
      1 => 'chooty',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pai' => 1,
      'chooty' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pai',
      1 => 'kota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pai' => 1,
      'kota' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'palam',
      1 => 'koka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'palam' => 1,
      'koka' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'payi',
      1 => 'kota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'payi' => 1,
      'kota' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pi',
      1 => 'chooti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pi' => 1,
      'chooti' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pol',
      1 => 'kavayya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pol' => 1,
      'kavayya' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pol',
      1 => 'kawaiya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pol' => 1,
      'kawaiya' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'polim',
      1 => 'danawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'polim' => 1,
      'danawa' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'polimak',
      1 => 'danawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'polimak' => 1,
      'danawa' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poro',
      1 => 'para',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'poro' => 1,
      'para' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puke',
      1 => 'arinawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puke' => 1,
      'arinawa' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puke',
      1 => 'hila',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puke' => 1,
      'hila' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puke',
      1 => 'mail',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puke' => 1,
      'mail' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puke',
      1 => 'maila',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puke' => 1,
      'maila' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'redda',
      1 => 'ussagena',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'redda' => 1,
      'ussagena' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'redda',
      1 => 'ussanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'redda' => 1,
      'ussanawa' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'saali',
      1 => 'kutti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'saali' => 1,
      'kutti' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'than',
      1 => 'deka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'than' => 1,
      'deka' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thoge',
      1 => 'ammata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thoge' => 1,
      'ammata' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tomba',
      1 => 'hila',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tomba' => 1,
      'hila' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'chuda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tu' => 1,
      'chuda' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'umbe',
      1 => 'amma',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'umbe' => 1,
      'amma' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'umbe',
      1 => 'ammage',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'umbe' => 1,
      'ammage' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'umbe',
      1 => 'ammata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'umbe' => 1,
      'ammata' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wate',
      1 => 'yanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wate' => 1,
      'yanawa' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'watey',
      1 => 'yanawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'watey' => 1,
      'yanawa' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'अरे',
      1 => 'नहीं',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'अरे' => 1,
      'नहीं' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'एक्स',
      1 => 'रेटेड',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'एक्स' => 1,
      'रेटेड' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'काम',
      1 => 'करना',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'काम' => 1,
      'करना' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'कामोद्दीपक',
      1 => 'चित्र',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'कामोद्दीपक' => 1,
      'चित्र' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'गधा',
      1 => 'कमीने',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'गधा' => 1,
      'कमीने' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'घटिया',
      1 => 'इंसान',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'घटिया' => 1,
      'इंसान' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ठगना',
      1 => 'पैकर',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ठगना' => 1,
      'पैकर' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'नंगा',
      1 => 'नाच',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'नंगा' => 1,
      'नाच' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'पंगा',
      1 => 'लेना',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'पंगा' => 1,
      'लेना' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'पीड़न',
      1 => 'कामुक',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'पीड़न' => 1,
      'कामुक' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'पृथ्वी',
      1 => 'पर',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'पृथ्वी' => 1,
      'पर' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'बहुत',
      1 => 'मदहोश',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'बहुत' => 1,
      'मदहोश' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'बेल',
      1 => 'अंत',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'बेल' => 1,
      'अंत' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'बोल',
      1 => 'पड़ना',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'बोल' => 1,
      'पड़ना' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'माँ',
      1 => 'कमीने',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'माँ' => 1,
      'कमीने' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'लानत',
      1 => 'है',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'लानत' => 1,
      'है' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'वो',
      1 => 'साले',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'वो' => 1,
      'साले' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'शिफ़्ट',
      1 => 'को',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'शिफ़्ट' => 1,
      'को' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'संभोग',
      1 => 'सुख',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'संभोग' => 1,
      'सुख' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'सबसे',
      1 => 'अच्छा',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'सबसे' => 1,
      'अच्छा' => 0,
    ),
  ),
  97 => 
  array (
    'badPhrase' => 
    array (
      0 => 'අකේ',
      1 => 'පුරිනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'අකේ' => 1,
      'පුරිනවා' => 0,
    ),
  ),
  98 => 
  array (
    'badPhrase' => 
    array (
      0 => 'අකේ',
      1 => 'පුරින්නා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'අකේ' => 1,
      'පුරින්නා' => 0,
    ),
  ),
  99 => 
  array (
    'badPhrase' => 
    array (
      0 => 'අම්මගෙ',
      1 => 'රෙද්ද',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'අම්මගෙ' => 1,
      'රෙද්ද' => 0,
    ),
  ),
  100 => 
  array (
    'badPhrase' => 
    array (
      0 => 'අම්මාගේ',
      1 => 'රෙද්ද',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'අම්මාගේ' => 1,
      'රෙද්ද' => 0,
    ),
  ),
  101 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ඇන්ට',
      1 => 'පාර',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ඇන්ට' => 1,
      'පාර' => 0,
    ),
  ),
  102 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ඇහැළමල්',
      1 => 'වේසි',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ඇහැළමල්' => 1,
      'වේසි' => 0,
    ),
  ),
  103 => 
  array (
    'badPhrase' => 
    array (
      0 => 'උත්තික්',
      1 => 'කොල්ලා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'උත්තික්' => 1,
      'කොල්ලා' => 0,
    ),
  ),
  104 => 
  array (
    'badPhrase' => 
    array (
      0 => 'උඹෙ',
      1 => 'අම්මගෙ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'උඹෙ' => 1,
      'අම්මගෙ' => 0,
    ),
  ),
  105 => 
  array (
    'badPhrase' => 
    array (
      0 => 'උඹෙ',
      1 => 'අම්මට',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'උඹෙ' => 1,
      'අම්මට' => 0,
    ),
  ),
  106 => 
  array (
    'badPhrase' => 
    array (
      0 => 'උඹෙ',
      1 => 'අම්මා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'උඹෙ' => 1,
      'අම්මා' => 0,
    ),
  ),
  107 => 
  array (
    'badPhrase' => 
    array (
      0 => 'උඹේ',
      1 => 'අම්මා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'උඹේ' => 1,
      'අම්මා' => 0,
    ),
  ),
  108 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කළු',
      1 => 'බඩ්ඩ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කළු' => 1,
      'බඩ්ඩ' => 0,
    ),
  ),
  109 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කැන්න',
      1 => 'පොරි',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කැන්න' => 1,
      'පොරි' => 0,
    ),
  ),
  110 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කැන්න',
      1 => 'පොරියා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කැන්න' => 1,
      'පොරියා' => 0,
    ),
  ),
  111 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කැස්',
      1 => 'පුරි',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කැස්' => 1,
      'පුරි' => 0,
    ),
  ),
  112 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කෑස්',
      1 => 'පුරියා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කෑස්' => 1,
      'පුරියා' => 0,
    ),
  ),
  113 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කිඹි',
      1 => 'කාවයියා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කිඹි' => 1,
      'කාවයියා' => 0,
    ),
  ),
  114 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කිඹි',
      1 => 'ජූස්',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කිඹි' => 1,
      'ජූස්' => 0,
    ),
  ),
  115 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කිඹි',
      1 => 'සිඹා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කිඹි' => 1,
      'සිඹා' => 0,
    ),
  ),
  116 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කුට්ටං',
      1 => 'චූටි',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කුට්ටං' => 1,
      'චූටි' => 0,
    ),
  ),
  117 => 
  array (
    'badPhrase' => 
    array (
      0 => 'කොන',
      1 => 'කපනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'කොන' => 1,
      'කපනවා' => 0,
    ),
  ),
  118 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ගැට',
      1 => 'මිරිකනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ගැට' => 1,
      'මිරිකනවා' => 0,
    ),
  ),
  119 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ගැනු',
      1 => 'හොරා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ගැනු' => 1,
      'හොරා' => 0,
    ),
  ),
  120 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ගෑණු',
      1 => 'හොරා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ගෑණු' => 1,
      'හොරා' => 0,
    ),
  ),
  121 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ගොං',
      1 => 'බිජ්ජා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ගොං' => 1,
      'බිජ්ජා' => 0,
    ),
  ),
  122 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ජැක්',
      1 => 'ගහපන්',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ජැක්' => 1,
      'ගහපන්' => 0,
    ),
  ),
  123 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ටොම්බ',
      1 => 'හිල',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ටොම්බ' => 1,
      'හිල' => 0,
    ),
  ),
  124 => 
  array (
    'badPhrase' => 
    array (
      0 => 'තන්',
      1 => 'දෙක',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'තන්' => 1,
      'දෙක' => 0,
    ),
  ),
  125 => 
  array (
    'badPhrase' => 
    array (
      0 => 'තොගෙ',
      1 => 'අම්මට',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'තොගෙ' => 1,
      'අම්මට' => 0,
    ),
  ),
  126 => 
  array (
    'badPhrase' => 
    array (
      0 => 'දාර',
      1 => 'බඩුව',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'දාර' => 1,
      'බඩුව' => 0,
    ),
  ),
  127 => 
  array (
    'badPhrase' => 
    array (
      0 => 'දිව',
      1 => 'දානව',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'දිව' => 1,
      'දානව' => 0,
    ),
  ),
  128 => 
  array (
    'badPhrase' => 
    array (
      0 => 'දිව',
      1 => 'දානවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'දිව' => 1,
      'දානවා' => 0,
    ),
  ),
  129 => 
  array (
    'badPhrase' => 
    array (
      0 => 'නිල්මානෙල්',
      1 => 'හුත්ති',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'නිල්මානෙල්' => 1,
      'හුත්ති' => 0,
    ),
  ),
  130 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පට්ට',
      1 => 'වේසි',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පට්ට' => 1,
      'වේසි' => 0,
    ),
  ),
  131 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පයි',
      1 => 'චූටි',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පයි' => 1,
      'චූටි' => 0,
    ),
  ),
  132 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පර',
      1 => 'වේසි',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පර' => 1,
      'වේසි' => 0,
    ),
  ),
  133 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පාලම්',
      1 => 'කොකා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පාලම්' => 1,
      'කොකා' => 0,
    ),
  ),
  134 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පුකේ',
      1 => 'අරිනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පුකේ' => 1,
      'අරිනවා' => 0,
    ),
  ),
  135 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පුකේ',
      1 => 'මයිල්',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පුකේ' => 1,
      'මයිල්' => 0,
    ),
  ),
  136 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පුකේ',
      1 => 'මයිලා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පුකේ' => 1,
      'මයිලා' => 0,
    ),
  ),
  137 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පුකේ',
      1 => 'හිල',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පුකේ' => 1,
      'හිල' => 0,
    ),
  ),
  138 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පොන්න',
      1 => 'පකා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පොන්න' => 1,
      'පකා' => 0,
    ),
  ),
  139 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පොරෝ',
      1 => 'පාර',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පොරෝ' => 1,
      'පාර' => 0,
    ),
  ),
  140 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පොල්',
      1 => 'කාවයිය',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පොල්' => 1,
      'කාවයිය' => 0,
    ),
  ),
  141 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පොල්',
      1 => 'කාවයියා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පොල්' => 1,
      'කාවයියා' => 0,
    ),
  ),
  142 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පෝලිමක්',
      1 => 'දානවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පෝලිමක්' => 1,
      'දානවා' => 0,
    ),
  ),
  143 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පෝලිම්',
      1 => 'දානවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'පෝලිම්' => 1,
      'දානවා' => 0,
    ),
  ),
  144 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බඩ',
      1 => 'වෙනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බඩ' => 1,
      'වෙනවා' => 0,
    ),
  ),
  145 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බඩු',
      1 => 'ආව',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බඩු' => 1,
      'ආව' => 0,
    ),
  ),
  146 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බඩු',
      1 => 'ආවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බඩු' => 1,
      'ආවා' => 0,
    ),
  ),
  147 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බඩු',
      1 => 'කාරයා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බඩු' => 1,
      'කාරයා' => 0,
    ),
  ),
  148 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බැක්',
      1 => 'ගහනව',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බැක්' => 1,
      'ගහනව' => 0,
    ),
  ),
  149 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බැක්',
      1 => 'ගහනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බැක්' => 1,
      'ගහනවා' => 0,
    ),
  ),
  150 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බැක්සයිඩ්',
      1 => 'ඕකේ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බැක්සයිඩ්' => 1,
      'ඕකේ' => 0,
    ),
  ),
  151 => 
  array (
    'badPhrase' => 
    array (
      0 => 'බැල්ලිගෙ',
      1 => 'පුතා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'බැල්ලිගෙ' => 1,
      'පුතා' => 0,
    ),
  ),
  152 => 
  array (
    'badPhrase' => 
    array (
      0 => 'මෑ',
      1 => 'ඇටේ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'මෑ' => 1,
      'ඇටේ' => 0,
    ),
  ),
  153 => 
  array (
    'badPhrase' => 
    array (
      0 => 'මෑ',
      1 => 'මල',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'මෑ' => 1,
      'මල' => 0,
    ),
  ),
  154 => 
  array (
    'badPhrase' => 
    array (
      0 => 'රෙද්ද',
      1 => 'උස්සගෙන',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'රෙද්ද' => 1,
      'උස්සගෙන' => 0,
    ),
  ),
  155 => 
  array (
    'badPhrase' => 
    array (
      0 => 'රෙද්ද',
      1 => 'උස්සනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'රෙද්ද' => 1,
      'උස්සනවා' => 0,
    ),
  ),
  156 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ලව්',
      1 => 'ජූස්',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ලව්' => 1,
      'ජූස්' => 0,
    ),
  ),
  157 => 
  array (
    'badPhrase' => 
    array (
      0 => 'වටේ',
      1 => 'යනවා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'වටේ' => 1,
      'යනවා' => 0,
    ),
  ),
  158 => 
  array (
    'badPhrase' => 
    array (
      0 => 'වේස',
      1 => 'බල්ලා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'වේස' => 1,
      'බල්ලා' => 0,
    ),
  ),
  159 => 
  array (
    'badPhrase' => 
    array (
      0 => 'වේසිගෙ',
      1 => 'පුතා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'වේසිගෙ' => 1,
      'පුතා' => 0,
    ),
  ),
  160 => 
  array (
    'badPhrase' => 
    array (
      0 => 'වේසිගේ',
      1 => 'පුතා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'වේසිගේ' => 1,
      'පුතා' => 0,
    ),
  ),
  161 => 
  array (
    'badPhrase' => 
    array (
      0 => 'හුකනව',
      1 => 'දාලා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'හුකනව' => 1,
      'දාලා' => 0,
    ),
  ),
  162 => 
  array (
    'badPhrase' => 
    array (
      0 => 'හුකනවනෙ',
      1 => 'ඉතින්',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'හුකනවනෙ' => 1,
      'ඉතින්' => 0,
    ),
  ),
  163 => 
  array (
    'badPhrase' => 
    array (
      0 => 'හුකනවනේ',
      1 => 'ඉතින්',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'හුකනවනේ' => 1,
      'ඉතින්' => 0,
    ),
  ),
  164 => 
  array (
    'badPhrase' => 
    array (
      0 => 'හුත්තික්',
      1 => 'කොල්ලා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'හුත්තික්' => 1,
      'කොල්ලා' => 0,
    ),
  ),
  165 => 
  array (
    'badPhrase' => 
    array (
      0 => 'හුත්තිගෙ',
      1 => 'කොල්ලා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'හුත්තිගෙ' => 1,
      'කොල්ලා' => 0,
    ),
  ),
  166 => 
  array (
    'badPhrase' => 
    array (
      0 => 'හුත්තිගෙ',
      1 => 'පුතා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'හුත්තිගෙ' => 1,
      'පුතා' => 0,
    ),
  ),
  167 => 
  array (
    'badPhrase' => 
    array (
      0 => 'හුත්තිගේ',
      1 => 'පුතා',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'හුත්තිගේ' => 1,
      'පුතා' => 0,
    ),
  ),
  168 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baap',
      1 => 'ke',
      2 => 'lavde',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'baap' => 2,
      'ke' => 1,
      'lavde' => 0,
    ),
  ),
  169 => 
  array (
    'badPhrase' => 
    array (
      0 => 'behen',
      1 => 'ke',
      2 => 'laude',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'behen' => 2,
      'ke' => 1,
      'laude' => 0,
    ),
  ),
  170 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhaand',
      1 => 'me',
      2 => 'jaao',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bhaand' => 2,
      'me' => 1,
      'jaao' => 0,
    ),
  ),
  171 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhadwe',
      1 => 'ki',
      2 => 'nasal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bhadwe' => 2,
      'ki' => 1,
      'nasal' => 0,
    ),
  ),
  172 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhen',
      1 => 'chhod',
      2 => 'bhaynchod',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bhen' => 2,
      'chhod' => 1,
      'bhaynchod' => 0,
    ),
  ),
  173 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhen',
      1 => 'ke',
      2 => 'lode',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bhen' => 2,
      'ke' => 1,
      'lode' => 0,
    ),
  ),
  174 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bolti',
      1 => 'bandh',
      2 => 'kar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bolti' => 2,
      'bandh' => 1,
      'kar' => 0,
    ),
  ),
  175 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bulle',
      1 => 'ke',
      2 => 'baal',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bulle' => 2,
      'ke' => 1,
      'baal' => 0,
    ),
  ),
  176 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gand',
      1 => 'marne',
      2 => 'wala',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gand' => 2,
      'marne' => 1,
      'wala' => 0,
    ),
  ),
  177 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gand',
      1 => 'mein',
      2 => 'louda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'gand' => 2,
      'mein' => 1,
      'louda' => 0,
    ),
  ),
  178 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ja',
      1 => 'gand',
      2 => 'mara',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ja' => 2,
      'gand' => 1,
      'mara' => 0,
    ),
  ),
  179 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mooh',
      1 => 'mein',
      2 => 'le',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mooh' => 2,
      'mein' => 1,
      'le' => 0,
    ),
  ),
  180 => 
  array (
    'badPhrase' => 
    array (
      0 => 'कालीन',
      1 => 'का',
      2 => 'चूरा',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'कालीन' => 2,
      'का' => 1,
      'चूरा' => 0,
    ),
  ),
  181 => 
  array (
    'badPhrase' => 
    array (
      0 => 'गेंद',
      1 => 'का',
      2 => 'थैला',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'गेंद' => 2,
      'का' => 1,
      'थैला' => 0,
    ),
  ),
  182 => 
  array (
    'badPhrase' => 
    array (
      0 => 'चाकलेट',
      1 => 'का',
      2 => 'रंग',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'चाकलेट' => 2,
      'का' => 1,
      'रंग' => 0,
    ),
  ),
  183 => 
  array (
    'badPhrase' => 
    array (
      0 => 'धत्',
      1 => 'तेरे',
      2 => 'की',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'धत्' => 2,
      'तेरे' => 1,
      'की' => 0,
    ),
  ),
  184 => 
  array (
    'badPhrase' => 
    array (
      0 => 'निकला',
      1 => 'हुआ',
      2 => 'किनारा',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'निकला' => 2,
      'हुआ' => 1,
      'किनारा' => 0,
    ),
  ),
  185 => 
  array (
    'badPhrase' => 
    array (
      0 => 'පොන්න',
      1 => 'වේස',
      2 => 'මනමාලි',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'පොන්න' => 2,
      'වේස' => 1,
      'මනමාලි' => 0,
    ),
  ),
  186 => 
  array (
    'badPhrase' => 
    array (
      0 => 'teri',
      1 => 'maa',
      2 => 'ka',
      3 => 'bhosada',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'teri' => 3,
      'maa' => 2,
      'ka' => 1,
      'bhosada' => 0,
    ),
  ),
  187 => 
  array (
    'badPhrase' => 
    array (
      0 => 'teri',
      1 => 'maa',
      2 => 'ki',
      3 => 'behenchod',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'teri' => 3,
      'maa' => 2,
      'ki' => 1,
      'behenchod' => 0,
    ),
  ),
  188 => 
  array (
    'badPhrase' => 
    array (
      0 => 'गोली',
      1 => 'चलाने',
      2 => 'की',
      3 => 'आवाज़',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'गोली' => 3,
      'चलाने' => 2,
      'की' => 1,
      'आवाज़' => 0,
    ),
  ),
  189 => 
  array (
    'badPhrase' => 
    array (
      0 => 'जी',
      1 => 'में',
      2 => 'आये',
      3 => 'करो',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'जी' => 3,
      'में' => 2,
      'आये' => 1,
      'करो' => 0,
    ),
  ),
  190 => 
  array (
    'badPhrase' => 
    array (
      0 => 'सींग',
      1 => 'का',
      2 => 'बना',
      3 => 'हुआ',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'सींग' => 3,
      'का' => 2,
      'बना' => 1,
      'हुआ' => 0,
    ),
  ),
  191 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bhen',
      1 => 'ke',
      2 => 'lode',
      3 => 'maa',
      4 => 'chuda',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'bhen' => 4,
      'ke' => 3,
      'lode' => 2,
      'maa' => 1,
      'chuda' => 0,
    ),
  ),
  192 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chipkali',
      1 => 'ke',
      2 => 'jhat',
      3 => 'ka',
      4 => 'baal',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'chipkali' => 4,
      'ke' => 3,
      'jhat' => 2,
      'ka' => 1,
      'baal' => 0,
    ),
  ),
  193 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gandi',
      1 => 'fuddi',
      2 => 'ki',
      3 => 'gandi',
      4 => 'auladd',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'gandi' => 1,
      'fuddi' => 3,
      'ki' => 2,
      'auladd' => 0,
    ),
  ),
  194 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuthta',
      1 => 'buraanahe',
      2 => 'kandaa',
      3 => 'nahi',
      4 => 'pattaahe',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'kuthta' => 4,
      'buraanahe' => 3,
      'kandaa' => 2,
      'nahi' => 1,
      'pattaahe' => 0,
    ),
  ),
  195 => 
  array (
    'badPhrase' => 
    array (
      0 => 'teri',
      1 => 'maa',
      2 => 'ka',
      3 => 'boba',
      4 => 'chusu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'teri' => 4,
      'maa' => 3,
      'ka' => 2,
      'boba' => 1,
      'chusu' => 0,
    ),
  ),
  196 => 
  array (
    'badPhrase' => 
    array (
      0 => 'दूर',
      1 => 'जाने',
      2 => 'का',
      3 => 'अभद्र',
      4 => 'संकेत',
      5 => 'देना',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'दूर' => 5,
      'जाने' => 4,
      'का' => 3,
      'अभद्र' => 2,
      'संकेत' => 1,
      'देना' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 197;

