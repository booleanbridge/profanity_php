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
  'പേ' => true,
  'ബം' => true,
  'സി' => true,
  'അവൾ' => true,
  'കോൺ' => true,
  'ഡൈൻ' => true,
  'മടി' => true,
  'റിം' => true,
  'വാൻ' => true,
  'ശവം' => true,
  'appi' => true,
  'kuch' => true,
  'masa' => true,
  'mola' => true,
  'myir' => true,
  'myre' => true,
  'vada' => true,
  'vali' => true,
  'vedi' => true,
  'കഴുത' => true,
  'ഗുദം' => true,
  'ഡൈകെ' => true,
  'നരകം' => true,
  'നാബ്' => true,
  'നാസി' => true,
  'നിഗർ' => true,
  'ഫാനി' => true,
  'ബീജം' => true,
  'ബോബ്' => true,
  'മോഹം' => true,
  'യോനി' => true,
  'രോഷം' => true,
  'റംപ്' => true,
  'റേസി' => true,
  'വാങ്' => true,
  'വാൽവ' => true,
  'വേദന' => true,
  'സിപാ' => true,
  'kandi' => true,
  'kandu' => true,
  'kanni' => true,
  'keepu' => true,
  'kundi' => true,
  'kunna' => true,
  'mandu' => true,
  'myrru' => true,
  'ookki' => true,
  'ootan' => true,
  'parii' => true,
  'petty' => true,
  'pooru' => true,
  'puchi' => true,
  'umman' => true,
  'veshi' => true,
  'ഊമ്പി' => true,
  'ഊമ്പൽ' => true,
  'കഷ്ടം' => true,
  'ചുംബ്' => true,
  'ഡച്ച്' => true,
  'ഡിൽഡോ' => true,
  'നിംഫ്' => true,
  'ഫക്കർ' => true,
  'ലാബിയ' => true,
  'ലിംഗം' => true,
  'വഞ്ചന' => true,
  'വഞ്ചി' => true,
  'വിരസത' => true,
  'വൃഷണം' => true,
  'വേശ്യ' => true,
  'സൊഡോം' => true,
  'സ്കാൻ' => true,
  'beejam' => true,
  'chandi' => true,
  'coondi' => true,
  'kettal' => true,
  'koothi' => true,
  'kotham' => true,
  'kundan' => true,
  'oomban' => true,
  'oooomb' => true,
  'poochi' => true,
  'poorri' => true,
  'thendi' => true,
  'veshya' => true,
  'ഓർഗീസ്' => true,
  'കിക്ക്' => true,
  'കോക്ക്' => true,
  'കോക്സ്' => true,
  'ഗോഡ്ഡം' => true,
  'ടിത്ത്' => true,
  'ഡിക്ക്' => true,
  'തുടരുക' => true,
  'നാബ്സ്' => true,
  'നൂക്ക്' => true,
  'നർമ്മം' => true,
  'പിസ്സർ' => true,
  'പുല്ല്' => true,
  'പൂക്കൾ' => true,
  'പെക്കർ' => true,
  'പ്യൂബ്' => true,
  'പ്രാവി' => true,
  'ഫല്ലസ്' => true,
  'ബിച്ച്' => true,
  'മലാശയം' => true,
  'മൃഗീയത' => true,
  'റേപ്പർ' => true,
  'വരാഗ്ര' => true,
  'വൈകൃതം' => true,
  'ശുക്ലം' => true,
  'ഷീറ്റ്' => true,
  'ഷൈറ്റി' => true,
  'സാഡിസം' => true,
  'സെക്സ്' => true,
  'സ്ഖലനം' => true,
  'സ്പെർമ' => true,
  'aanvedi' => true,
  'dushtan' => true,
  'kushukk' => true,
  'mlechan' => true,
  'shandan' => true,
  'thayoli' => true,
  'theetam' => true,
  'അശ്ലീലം' => true,
  'അശ്ലീലത' => true,
  'ആശ്വാസം' => true,
  'ആസ്ഹോൾ' => true,
  'കഴുതകളെ' => true,
  'തുളച്ച്' => true,
  'പന്തുകൾ' => true,
  'പിസ്സകൾ' => true,
  'ബലോക്ക്' => true,
  'ബോൾബാഗ്' => true,
  'മുഷിഞ്ഞ' => true,
  'മോഹഭംഗം' => true,
  'വിശപ്പ്' => true,
  'ഷാഗിംഗ്' => true,
  'ഷോർട്ട്' => true,
  'സ്നെഗമാ' => true,
  'koothara' => true,
  'koyimani' => true,
  'kundimol' => true,
  'mundachi' => true,
  'thaayoli' => true,
  'thayolee' => true,
  'theettam' => true,
  'veppatti' => true,
  'അഹങ്കാരം' => true,
  'ഉദ്ധാരണം' => true,
  'ക്രാപ്പ്' => true,
  'നായഫക്കർ' => true,
  'നിയോനാസി' => true,
  'നിവർത്തി' => true,
  'പിസ്സോഫ്' => true,
  'പീഡോഫീല്' => true,
  'പുഞ്ചിരി' => true,
  'പുരുഷാരം' => true,
  'ഫെറ്റിഷ്' => true,
  'ബലാൽസംഗം' => true,
  'ബിച്ചുകൾ' => true,
  'ബ്യൂട്ടാ' => true,
  'മന്ദഹസരം' => true,
  'മലദ്വാരം' => true,
  'മൃഗീയമായ' => true,
  'റോസെറ്റ്' => true,
  'വയ്ക്കുക' => true,
  'ഷെയ്റ്റ്' => true,
  'സ്തനങ്ങൾ' => true,
  'സ്പെയ്ക്' => true,
  'ഹിറ്റ്ലർ' => true,
  'amminhnha' => true,
  'appikunna' => true,
  'avaraathi' => true,
  'kolekkeri' => true,
  'koothichi' => true,
  'kunnappal' => true,
  'panniyoli' => true,
  'pooranddi' => true,
  'poottaavi' => true,
  'vayilitto' => true,
  'vettukili' => true,
  'ഗർഭഛിദ്രം' => true,
  'ഗർഭപാത്രം' => true,
  'പിടിക്കുക' => true,
  'പീഡോഫീലിയ' => true,
  'ബലാത്സംഗം' => true,
  'ബിപിഡിംഗ്' => true,
  'ബെല്ലെൻഡ്' => true,
  'മണ്ടത്തരം' => true,
  'മൂത്രനാളി' => true,
  'മൂത്രാശയം' => true,
  'രതിമൂർച്ഛ' => true,
  'റിമ്മിംഗ്' => true,
  'വികാരങ്ങൾ' => true,
  'സചിസ്റ്റ്' => true,
  'സ്വയംഭോഗം' => true,
  'ഹെബെഫീലിയ' => true,
  'kulamavuka' => true,
  'moonchikko' => true,
  'thallayoli' => true,
  'thalleyoli' => true,
  'thevadichi' => true,
  'അശ്ളീലങ്ങൾ' => true,
  'ക്ലോറിസിസ്' => true,
  'ബെസ്റ്റിയൽ' => true,
  'മന്ദബുദ്ധി' => true,
  'മുലക്കണ്ണ്' => true,
  'മോഷ്ടിച്ചു' => true,
  'സാഡിസ്റ്റ്' => true,
  'ഹെബെഫിലിക്' => true,
  'ഹെബെഫിലുകൾ' => true,
  'അവിഹിതബന്ധം' => true,
  'കുണ്ണലിംഗസ്' => true,
  'കുഴപ്പമില്ല' => true,
  'ഗർഭച്ഛിദ്രം' => true,
  'ദൈവംകൊള്ളിത' => true,
  'പാൻസെക്ഷ്വൽ' => true,
  'ഫെല്ലറ്റിയോ' => true,
  'മസോചിസ്റ്റ്' => true,
  'വിസർജ്യങ്ങൾ' => true,
  'വൃത്തികെട്ട' => true,
  'ആംബിസെക്ഷ്വൽ' => true,
  'ആംബോസെക്ഷ്വൽ' => true,
  'ക്ലിറ്റോറിസ്' => true,
  'തുളച്ചുകയറുക' => true,
  'പെഡോഫീലിയാക്' => true,
  'റേപ്പിസ്റ്റ്' => true,
  'ശമിപ്പിക്കുക' => true,
  'തിന്നിട്ടില്ല' => true,
  'നുഴഞ്ഞുകയറ്റം' => true,
  'മാസോച്ചിസ്റ്റ്' => true,
  'മൂത്രമൊഴിക്കുക' => true,
  'രക്തരൂക്ഷിതമായ' => true,
  'അമ്പിളിസെക്ഷ്വൽ' => true,
  'കുഴഞ്ഞുവീഴുന്നു' => true,
  'ക്ഷീണിപ്പിക്കുക' => true,
  'തന്തയില്ലാത്തവൻ' => true,
  'മയക്കുമരുന്നുകൾ' => true,
  'അക്രോട്ടോമോഫീലിയ' => true,
  'ബെസ്റ്റിയാലിറ്റി' => true,
  'വെറുക്കപ്പെട്ടയാൾ' => true,
  'ആമ്പിസെക്ഷ്വാലിറ്റി' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'achante',
      1 => 'andi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'achante' => 1,
      'andi' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'achinga',
      1 => 'kunnan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'achinga' => 1,
      'kunnan' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'adichu',
      1 => 'poli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'adichu' => 1,
      'poli' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'andi',
      1 => 'pidiyan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'andi' => 1,
      'pidiyan' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'arjun',
      1 => 'shambu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'arjun' => 1,
      'shambu' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avarathi',
      1 => 'mone',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'avarathi' => 1,
      'mone' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chalam',
      1 => 'nakki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chalam' => 1,
      'nakki' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cheekoothi',
      1 => 'mon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cheekoothi' => 1,
      'mon' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cheekoothi',
      1 => 'mone',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cheekoothi' => 1,
      'mone' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chokka',
      1 => 'lingam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chokka' => 1,
      'lingam' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chotta',
      1 => 'kunnan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chotta' => 1,
      'kunnan' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chotta',
      1 => 'tha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chotta' => 1,
      'tha' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'patti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'da' => 1,
      'patti' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'johninte',
      1 => 'andi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'johninte' => 1,
      'andi' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kaatu',
      1 => 'poori',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kaatu' => 1,
      'poori' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kallel',
      1 => 'oouuki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kallel' => 1,
      'oouuki' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kandara',
      1 => 'oli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kandara' => 1,
      'oli' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'karim',
      1 => 'pooran',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'karim' => 1,
      'pooran' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kodam',
      1 => 'nakiii',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kodam' => 1,
      'nakiii' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunji',
      1 => 'kunnan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kunji' => 1,
      'kunnan' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maratel',
      1 => 'ooki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maratel' => 1,
      'ooki' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mattanga',
      1 => 'poore',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mattanga' => 1,
      'poore' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mayiradi',
      1 => 'mon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mayiradi' => 1,
      'mon' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mula',
      1 => 'adi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mula' => 1,
      'adi' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mula',
      1 => 'chappu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mula' => 1,
      'chappu' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mula',
      1 => 'kashakku',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mula' => 1,
      'kashakku' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mula',
      1 => 'mol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mula' => 1,
      'mol' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naayi',
      1 => 'meedan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naayi' => 1,
      'meedan' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naayinte',
      1 => 'mone',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naayinte' => 1,
      'mone' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayinte',
      1 => 'mone',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nayinte' => 1,
      'mone' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayinte',
      1 => 'monne',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nayinte' => 1,
      'monne' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oombi',
      1 => 'mon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'oombi' => 1,
      'mon' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pacha',
      1 => 'tayolli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pacha' => 1,
      'tayolli' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pachila',
      1 => 'pooran',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pachila' => 1,
      'pooran' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paiku',
      1 => 'vetti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'paiku' => 1,
      'vetti' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pallinedayil',
      1 => 'kanthu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pallinedayil' => 1,
      'kanthu' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pambara',
      1 => 'kutichi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pambara' => 1,
      'kutichi' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pandi',
      1 => 'kallan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pandi' => 1,
      'kallan' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'para',
      1 => 'kutichi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'para' => 1,
      'kutichi' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paternal',
      1 => 'andi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'paternal' => 1,
      'andi' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pathala',
      1 => 'poor',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pathala' => 1,
      'poor' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pazhatoli',
      1 => 'janaki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pazhatoli' => 1,
      'janaki' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pela',
      1 => 'molichi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pela' => 1,
      'molichi' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pezhachu',
      1 => 'pettavan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pezhachu' => 1,
      'pettavan' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'podda',
      1 => 'patti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'podda' => 1,
      'patti' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pola',
      1 => 'vettu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pola' => 1,
      'vettu' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poori',
      1 => 'mone',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'poori' => 1,
      'mone' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poottile',
      1 => 'mathycurry',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'poottile' => 1,
      'mathycurry' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poyi',
      1 => 'oombada',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'poyi' => 1,
      'oombada' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'praa',
      1 => 'thayolli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'praa' => 1,
      'thayolli' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pudti',
      1 => 'puliyadi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pudti' => 1,
      'puliyadi' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pulayadi',
      1 => 'monae',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pulayadi' => 1,
      'monae' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pundachi',
      1 => 'mone',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pundachi' => 1,
      'mone' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rainayude',
      1 => 'poore',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rainayude' => 1,
      'poore' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'santhosh',
      1 => 'pandit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'santhosh' => 1,
      'pandit' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shukla',
      1 => 'mughan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shukla' => 1,
      'mughan' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shuklam',
      1 => 'dheeni',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shuklam' => 1,
      'dheeni' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shuklam',
      1 => 'nakki',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shuklam' => 1,
      'nakki' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thabala',
      1 => 'pooran',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thabala' => 1,
      'pooran' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thalleotha',
      1 => 'thalleoli',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'thalleotha' => 1,
      'thalleoli' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'theetta',
      1 => 'moran',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'theetta' => 1,
      'moran' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'viral',
      1 => 'iduka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'viral' => 1,
      'iduka' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'റേറ്റുചെയ്തു',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'റേറ്റുചെയ്തു' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ആൾക്കൂട്ട',
      1 => 'കൊലപാതകം',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ആൾക്കൂട്ട' => 1,
      'കൊലപാതകം' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ഗര്',
      1 => 'ഭച്ഛിദ്രം',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ഗര്' => 1,
      'ഭച്ഛിദ്രം' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ഗർഭച്ഛിദ്ര',
      1 => 'വിദഗ്ധൻ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ഗർഭച്ഛിദ്ര' => 1,
      'വിദഗ്ധൻ' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ജെർക്',
      1 => 'ഓഫ്',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ജെർക്' => 1,
      'ഓഫ്' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'പരവതാനി',
      1 => 'മാൻച്ചർ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'പരവതാനി' => 1,
      'മാൻച്ചർ' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ഫഡ്ജ്',
      1 => 'പാക്കർ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ഫഡ്ജ്' => 1,
      'പാക്കർ' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'രതിമൂര്',
      1 => 'ച്ഛ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'രതിമൂര്' => 1,
      'ച്ഛ' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'സംഭോഗം',
      1 => 'ചെയ്യുക',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'സംഭോഗം' => 1,
      'ചെയ്യുക' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ajoli',
      1 => 'ka',
      2 => 'thajoli',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ajoli' => 2,
      'ka' => 1,
      'thajoli' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ammaudi',
      1 => 'pootil',
      2 => 'poocha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ammaudi' => 2,
      'pootil' => 1,
      'poocha' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chathavante',
      1 => 'andi',
      2 => 'oombiya',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chathavante' => 2,
      'andi' => 1,
      'oombiya' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ettukali',
      1 => 'patti',
      2 => 'pooran',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ettukali' => 2,
      'patti' => 1,
      'pooran' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kazhappu',
      1 => 'perutha',
      2 => 'mairan',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kazhappu' => 2,
      'perutha' => 1,
      'mairan' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kundaroli',
      1 => 'poori',
      2 => 'mone',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kundaroli' => 2,
      'poori' => 1,
      'mone' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninde',
      1 => 'andi',
      2 => 'maire',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ninde' => 2,
      'andi' => 1,
      'maire' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninte',
      1 => 'ammaku',
      2 => 'vetu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ninte' => 2,
      'ammaku' => 1,
      'vetu' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninte',
      1 => 'ammeda',
      2 => 'tar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ninte' => 2,
      'ammeda' => 1,
      'tar' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninte',
      1 => 'ammede',
      2 => 'kothil',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ninte' => 2,
      'ammede' => 1,
      'kothil' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninte',
      1 => 'appante',
      2 => 'andi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ninte' => 2,
      'appante' => 1,
      'andi' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'paik',
      1 => 'keriko',
      2 => 'myra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'paik' => 2,
      'keriko' => 1,
      'myra' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pala',
      1 => 'thanthakkundaya',
      2 => 'thaoli',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pala' => 2,
      'thanthakkundaya' => 1,
      'thaoli' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'para',
      1 => 'andi',
      2 => 'oomba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'para' => 2,
      'andi' => 1,
      'oomba' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'patti',
      1 => 'poori',
      2 => 'mon',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'patti' => 2,
      'poori' => 1,
      'mon' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'thokolli',
      1 => 'kalla',
      2 => 'sami',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'thokolli' => 2,
      'kalla' => 1,
      'sami' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ആള്',
      1 => 'ക്കൂട്ട',
      2 => 'കൊലപാതകം',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ആള്' => 2,
      'ക്കൂട്ട' => 1,
      'കൊലപാതകം' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'മൂന്നു',
      1 => 'വര്',
      2 => 'ഷത്തിനുള്ളില്',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'മൂന്നു' => 2,
      'വര്' => 1,
      'ഷത്തിനുള്ളില്' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'arraykku',
      1 => 'chuttum',
      2 => 'poorruu',
      3 => 'ullaval',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'arraykku' => 3,
      'chuttum' => 2,
      'poorruu' => 1,
      'ullaval' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninte',
      1 => 'ama',
      2 => 'koondi',
      3 => 'ishtima',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ninte' => 3,
      'ama' => 2,
      'koondi' => 1,
      'ishtima' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninte',
      1 => 'ammede',
      2 => 'thenga',
      3 => 'mairu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ninte' => 3,
      'ammede' => 2,
      'thenga' => 1,
      'mairu' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ninte',
      1 => 'ammakku',
      2 => 'vettu',
      3 => 'nayinte',
      4 => 'mone',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ninte' => 4,
      'ammakku' => 3,
      'vettu' => 2,
      'nayinte' => 1,
      'mone' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poore',
      1 => 'ennayil',
      2 => 'tenni',
      3 => 'veetil',
      4 => 'poda',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'poore' => 4,
      'ennayil' => 3,
      'tenni' => 2,
      'veetil' => 1,
      'poda' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 94;

