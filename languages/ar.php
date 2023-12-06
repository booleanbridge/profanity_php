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
  'أ' => true,
  'ا' => true,
  'ب' => true,
  'ة' => true,
  'ر' => true,
  'ز' => true,
  'ض' => true,
  'ف' => true,
  'ك' => true,
  'ل' => true,
  'م' => true,
  'ن' => true,
  'as' => true,
  'el' => true,
  'ra' => true,
  'aa' => true,
  'la' => true,
  'اء' => true,
  'ان' => true,
  'بخ' => true,
  'بد' => true,
  'بز' => true,
  'بط' => true,
  'بغ' => true,
  'بن' => true,
  'به' => true,
  'حه' => true,
  'زب' => true,
  'زق' => true,
  'زك' => true,
  'زه' => true,
  'زى' => true,
  'سى' => true,
  'عط' => true,
  'كس' => true,
  'كك' => true,
  'كم' => true,
  'لة' => true,
  'مة' => true,
  'مص' => true,
  'نك' => true,
  'ars' => true,
  'ass' => true,
  'eer' => true,
  'ara' => true,
  'orm' => true,
  'aba' => true,
  'abd' => true,
  'air' => true,
  'bal' => true,
  'bad' => true,
  'bez' => true,
  'cos' => true,
  'far' => true,
  'jab' => true,
  'jru' => true,
  'kus' => true,
  'las' => true,
  'nam' => true,
  'wra' => true,
  'zab' => true,
  'zac' => true,
  'zak' => true,
  'zeb' => true,
  'zeg' => true,
  'zep' => true,
  'zib' => true,
  'zip' => true,
  'zok' => true,
  'zuk' => true,
  'اتن' => true,
  'احا' => true,
  'احه' => true,
  'اغب' => true,
  'الش' => true,
  'الن' => true,
  'امش' => true,
  'امك' => true,
  'اير' => true,
  'ببز' => true,
  'بظر' => true,
  'بعص' => true,
  'بها' => true,
  'تفو' => true,
  'تمص' => true,
  'ثدي' => true,
  'جلخ' => true,
  'خدك' => true,
  'خرا' => true,
  'خرة' => true,
  'خرى' => true,
  'خري' => true,
  'خول' => true,
  'دلخ' => true,
  'زبر' => true,
  'زبه' => true,
  'زبي' => true,
  'زها' => true,
  'سكس' => true,
  'شاذ' => true,
  'شرج' => true,
  'طيز' => true,
  'عرص' => true,
  'فرج' => true,
  'قحب' => true,
  'قذر' => true,
  'لحس' => true,
  'لعق' => true,
  'نجس' => true,
  'نيك' => true,
  'وسخ' => true,
  'asba' => true,
  'ayba' => true,
  'anza' => true,
  'awal' => true,
  'amka' => true,
  'omar' => true,
  'aars' => true,
  'aers' => true,
  'airi' => true,
  'airy' => true,
  'arsa' => true,
  'ayre' => true,
  'bazr' => true,
  'cheb' => true,
  'chlb' => true,
  'drat' => true,
  'farg' => true,
  'fash' => true,
  'frkh' => true,
  'gema' => true,
  'gird' => true,
  'hawi' => true,
  'hmar' => true,
  'hway' => true,
  'kaba' => true,
  'kalb' => true,
  'kiss' => true,
  'koos' => true,
  'mara' => true,
  'masa' => true,
  'moak' => true,
  'moss' => true,
  'namm' => true,
  'neek' => true,
  'neik' => true,
  'neka' => true,
  'ntak' => true,
  'qird' => true,
  'qooq' => true,
  'shaz' => true,
  'soak' => true,
  'sorm' => true,
  'sowa' => true,
  'surm' => true,
  'taan' => true,
  'teiz' => true,
  'tina' => true,
  'wara' => true,
  'wskh' => true,
  'zeby' => true,
  'zega' => true,
  'zegg' => true,
  'zibi' => true,
  'zizi' => true,
  'zmal' => true,
  'zobr' => true,
  'zouk' => true,
  'أطرش' => true,
  'أعمى' => true,
  'أهبل' => true,
  'احمق' => true,
  'احيه' => true,
  'اختك' => true,
  'اخذك' => true,
  'اخرس' => true,
  'اصمت' => true,
  'اطرش' => true,
  'اطفح' => true,
  'اعمى' => true,
  'اقرع' => true,
  'الزب' => true,
  'الكس' => true,
  'الله' => true,
  'انذل' => true,
  'انكح' => true,
  'انيك' => true,
  'اهبل' => true,
  'ايري' => true,
  'بامك' => true,
  'بزاز' => true,
  'بزرك' => true,
  'بستك' => true,
  'بعبص' => true,
  'بغاي' => true,
  'بلطج' => true,
  'تافه' => true,
  'جماع' => true,
  'حقير' => true,
  'حلمة' => true,
  'حمير' => true,
  'خراء' => true,
  'خراي' => true,
  'خسيس' => true,
  'خنثي' => true,
  'خنيث' => true,
  'داشر' => true,
  'داعر' => true,
  'ديوث' => true,
  'ديود' => true,
  'زبار' => true,
  'زراط' => true,
  'زناة' => true,
  'ساذج' => true,
  'سافل' => true,
  'سحاق' => true,
  'سكسي' => true,
  'سيكس' => true,
  'شلقة' => true,
  'شلكة' => true,
  'شهوة' => true,
  'صايع' => true,
  'ضاتى' => true,
  'عاهر' => true,
  'عبيط' => true,
  'غتصب' => true,
  'فاجر' => true,
  'فاسق' => true,
  'فجور' => true,
  'قحاب' => true,
  'قحبة' => true,
  'قضيب' => true,
  'قلبك' => true,
  'كحبة' => true,
  'كذاب' => true,
  'كسمك' => true,
  'كسها' => true,
  'كلام' => true,
  'لبوة' => true,
  'لعنك' => true,
  'لعين' => true,
  'لواط' => true,
  'لوطي' => true,
  'مخنث' => true,
  'مدلس' => true,
  'منيك' => true,
  'ناكك' => true,
  'واطي' => true,
  'يلعن' => true,
  'adeeb' => true,
  'abeet' => true,
  'agala' => true,
  'ahera' => true,
  'attay' => true,
  'anith' => true,
  'anzer' => true,
  'oneth' => true,
  'akeer' => true,
  'alama' => true,
  'aqeer' => true,
  'aywan' => true,
  'ahbal' => true,
  'attaï' => true,
  'ayaar' => true,
  'baghl' => true,
  'bakri' => true,
  'bayra' => true,
  'bedan' => true,
  'bedat' => true,
  'besht' => true,
  'bezaz' => true,
  'bizaz' => true,
  'chalb' => true,
  'daara' => true,
  'daera' => true,
  'daish' => true,
  'darat' => true,
  'dilla' => true,
  'dyoos' => true,
  'eacha' => true,
  'fasha' => true,
  'gahba' => true,
  'gawad' => true,
  'gewad' => true,
  'ghabi' => true,
  'hajia' => true,
  'haker' => true,
  'hbiba' => true,
  'hbila' => true,
  'himar' => true,
  'homar' => true,
  'horia' => true,
  'humar' => true,
  'hwiha' => true,
  'hwini' => true,
  'ihmar' => true,
  'jamal' => true,
  'kalet' => true,
  'kawad' => true,
  'kawed' => true,
  'kerfa' => true,
  'khara' => true,
  'khood' => true,
  'labwa' => true,
  'looti' => true,
  'louat' => true,
  'louty' => true,
  'lubia' => true,
  'makwa' => true,
  'manek' => true,
  'matny' => true,
  'mozza' => true,
  'msota' => true,
  'naiek' => true,
  'naqal' => true,
  'naqsh' => true,
  'nouna' => true,
  'nwaan' => true,
  'qahba' => true,
  'qahbi' => true,
  'qawad' => true,
  'qlawi' => true,
  'qodok' => true,
  'qybah' => true,
  'soowa' => true,
  'surum' => true,
  'tabon' => true,
  'tarma' => true,
  'teezo' => true,
  'terma' => true,
  'tezak' => true,
  'tizak' => true,
  'wskha' => true,
  'wydad' => true,
  'zaaka' => true,
  'zamel' => true,
  'zebak' => true,
  'zegga' => true,
  'zibbe' => true,
  'zippy' => true,
  'zobry' => true,
  'zubih' => true,
  'zubra' => true,
  'ابعتل' => true,
  'افسخك' => true,
  'العرص' => true,
  'العمى' => true,
  'القرف' => true,
  'انذال' => true,
  'انقلع' => true,
  'انكحك' => true,
  'انيكك' => true,
  'اونطي' => true,
  'بابوك' => true,
  'باختك' => true,
  'بعبوص' => true,
  'بندوق' => true,
  'بهيمة' => true,
  'بيضان' => true,
  'تتناك' => true,
  'تجليخ' => true,
  'ترهيط' => true,
  'تزغيب' => true,
  'تنتاك' => true,
  'حرامي' => true,
  'حلبتو' => true,
  'حلمات' => true,
  'حيوان' => true,
  'دعارة' => true,
  'زبالة' => true,
  'زباله' => true,
  'سربوط' => true,
  'سفالة' => true,
  'سيكسي' => true,
  'شرمها' => true,
  'شرموط' => true,
  'صياعة' => true,
  'عاهرة' => true,
  'عايبة' => true,
  'قضيبي' => true,
  'كسمكم' => true,
  'لقحاب' => true,
  'مأجور' => true,
  'مبادل' => true,
  'مبعوص' => true,
  'متناك' => true,
  'مجنون' => true,
  'معوهر' => true,
  'مفسوخ' => true,
  'مكسكس' => true,
  'ملعون' => true,
  'ممحون' => true,
  'منايك' => true,
  'منيوك' => true,
  'نياكة' => true,
  'نياكه' => true,
  'akroot' => true,
  'arbagy' => true,
  'anzeer' => true,
  'oneeth' => true,
  'alaabi' => true,
  'badeen' => true,
  'bakraa' => true,
  'bassas' => true,
  'boofta' => true,
  'dayoos' => true,
  'dayoth' => true,
  'dhasho' => true,
  'doonie' => true,
  'duroot' => true,
  'etesab' => true,
  'ethwel' => true,
  'faqhaa' => true,
  'farasa' => true,
  'faseel' => true,
  'fashkh' => true,
  'gahaba' => true,
  'gahbeh' => true,
  'gahhba' => true,
  'gamosa' => true,
  'gawwad' => true,
  'ghaben' => true,
  'ghouzo' => true,
  'hakeer' => true,
  'hamama' => true,
  'haqeer' => true,
  'haygan' => true,
  'haywan' => true,
  'hbeela' => true,
  'jarrar' => true,
  'jeefah' => true,
  'kaboul' => true,
  'kahwad' => true,
  'kakhba' => true,
  'karrak' => true,
  'kawwad' => true,
  'khajaf' => true,
  'khanez' => true,
  'khanza' => true,
  'khareg' => true,
  'khawal' => true,
  'kowwad' => true,
  'labawy' => true,
  'louteh' => true,
  'mzroob' => true,
  'marras' => true,
  'maaras' => true,
  'marasa' => true,
  'maabol' => true,
  'malhat' => true,
  'mamsoo' => true,
  'manyak' => true,
  'manyok' => true,
  'masota' => true,
  'masaho' => true,
  'masasa' => true,
  'maybon' => true,
  'metnak' => true,
  'mfalas' => true,
  'miboun' => true,
  'mkauda' => true,
  'mngala' => true,
  'mothaa' => true,
  'naghal' => true,
  'nahwik' => true,
  'nakech' => true,
  'neekni' => true,
  'nfokho' => true,
  'nikmok' => true,
  'salgot' => true,
  'scaget' => true,
  'shahwa' => true,
  'shaksh' => true,
  'sharag' => true,
  'shayet' => true,
  'shayta' => true,
  'sobisa' => true,
  'sormak' => true,
  'ssossi' => true,
  'taboon' => true,
  'tahhan' => true,
  'teezak' => true,
  'teezha' => true,
  'zammel' => true,
  'zebala' => true,
  'zippak' => true,
  'zobrak' => true,
  'zwamel' => true,
  'zwimel' => true,
  'احتلام' => true,
  'اغتصاب' => true,
  'الأحمق' => true,
  'الحمار' => true,
  'الخرائ' => true,
  'السافل' => true,
  'الساقط' => true,
  'العايب' => true,
  'القحبة' => true,
  'الكحبة' => true,
  'الكحبه' => true,
  'الكلبة' => true,
  'اللعنة' => true,
  'باترون' => true,
  'حلبتها' => true,
  'خوازيق' => true,
  'زناطير' => true,
  'سحاقية' => true,
  'سرموتا' => true,
  'شرموطة' => true,
  'شرموطه' => true,
  'متخوزق' => true,
  'متناكة' => true,
  'مخانيث' => true,
  'مفلقسة' => true,
  'مكوتها' => true,
  'ezgetek' => true,
  'aakrout' => true,
  'adabsez' => true,
  'adoosik' => true,
  'althady' => true,
  'baaboos' => true,
  'baaroor' => true,
  'balboul' => true,
  'bandook' => true,
  'banjote' => true,
  'baranek' => true,
  'barboog' => true,
  'barbook' => true,
  'batrona' => true,
  'batroun' => true,
  'berkaka' => true,
  'bmasesk' => true,
  'btetnak' => true,
  'bzazlha' => true,
  'cosotak' => true,
  'cosomak' => true,
  'dayooth' => true,
  'dayouth' => true,
  'deiouse' => true,
  'fakahtk' => true,
  'gamoosa' => true,
  'garager' => true,
  'hafyaan' => true,
  'hanekak' => true,
  'kaneeth' => true,
  'kawwazi' => true,
  'khanith' => true,
  'khanzer' => true,
  'khorong' => true,
  'khrnteh' => true,
  'kosotak' => true,
  'kosomak' => true,
  'kulsoum' => true,
  'kusomak' => true,
  'lehbila' => true,
  'madhara' => true,
  'mahbool' => true,
  'manukey' => true,
  'manyoka' => true,
  'manyoke' => true,
  'manyook' => true,
  'marioah' => true,
  'masteje' => true,
  'maybona' => true,
  'mayboon' => true,
  'mennuke' => true,
  'metnaak' => true,
  'metnaka' => true,
  'metrama' => true,
  'mfalasa' => true,
  'mfannes' => true,
  'moanath' => true,
  'nethell' => true,
  'ntokbek' => true,
  'qahabah' => true,
  'qaraqir' => true,
  'qusamak' => true,
  'sambool' => true,
  'shadome' => true,
  'shalaga' => true,
  'sharmot' => true,
  'sheikha' => true,
  'shlekke' => true,
  'shlokeh' => true,
  'skayrey' => true,
  'sopessa' => true,
  'sormaha' => true,
  'tabonak' => true,
  'tabonek' => true,
  'teezhom' => true,
  'tintaki' => true,
  'tkaffat' => true,
  'zabbour' => true,
  'zabzoub' => true,
  'zacomak' => true,
  'zakomak' => true,
  'zanboor' => true,
  'العربان' => true,
  'barbooqa' => true,
  'beyetnak' => true,
  'dagoombe' => true,
  'dakcdook' => true,
  'dewangee' => true,
  'eghtesab' => true,
  'firshaeh' => true,
  'hadbahak' => true,
  'haneikak' => true,
  'hynityou' => true,
  'imlowatt' => true,
  'khaneeth' => true,
  'khanzeer' => true,
  'lehbeela' => true,
  'majdoube' => true,
  'mamsookh' => true,
  'mamsoukh' => true,
  'mayboona' => true,
  'mazloula' => true,
  'mehaijeh' => true,
  'menaswen' => true,
  'mfannesa' => true,
  'motaalef' => true,
  'nikkabuk' => true,
  'shanbora' => true,
  'sharmoot' => true,
  'sharmota' => true,
  'shlokkeh' => true,
  'soakeyya' => true,
  'spontchi' => true,
  'taboonak' => true,
  'taboonek' => true,
  'tetzaber' => true,
  'yetzaber' => true,
  'bertouche' => true,
  'charmouta' => true,
  'fakahtoki' => true,
  'khanneeth' => true,
  'mamsoukha' => true,
  'metfarswa' => true,
  'motasawel' => true,
  'nghtasbek' => true,
  'rozsomack' => true,
  'shaloteya' => true,
  'sharameet' => true,
  'sharmoota' => true,
  'sharmotah' => true,
  'shoowathi' => true,
  'skayreyya' => true,
  'beskeletta' => true,
  'betetrakab' => true,
  'beyetrakab' => true,
  'dakcdookca' => true,
  'karakhaneh' => true,
  'metfarswaa' => true,
  'mishtaheek' => true,
  'motakhalef' => true,
  'narcoossee' => true,
  'sharmootah' => true,
  'sharmootta' => true,
  'shloomfuss' => true,
  'zaghnaboot' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'nagrik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'a' => 1,
      'nagrik' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aad',
      1 => 'aleh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aad' => 1,
      'aleh' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abn',
      1 => 'alkahba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'abn' => 1,
      'alkahba' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abn',
      1 => 'elghbeh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'abn' => 1,
      'elghbeh' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abu',
      1 => 'ayoura',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'abu' => 1,
      'ayoura' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abul',
      1 => 'eyora',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'abul' => 1,
      'eyora' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'adreb',
      1 => 'pipa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'adreb' => 1,
      'pipa' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aere',
      1 => 'feek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aere' => 1,
      'feek' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ah',
      1 => 'kesi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ah' => 1,
      'kesi' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'akhu',
      1 => 'shlukeh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'akhu' => 1,
      'shlukeh' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alaa',
      1 => 'zibay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alaa' => 1,
      'zibay' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'alhs',
      1 => 'khuswani',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'alhs' => 1,
      'khuswani' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'allah',
      1 => 'mamhuun',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'allah' => 1,
      'mamhuun' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'an',
      1 => 'nhwik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'an' => 1,
      'nhwik' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ane',
      1 => 'chek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ane' => 1,
      'chek' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anech',
      1 => 'akhtk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anech' => 1,
      'akhtk' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anech',
      1 => 'amk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anech' => 1,
      'amk' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aneek',
      1 => 'ummak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aneek' => 1,
      'ummak' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anik',
      1 => 'ardak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anik' => 1,
      'ardak' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anta',
      1 => 'jameel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anta' => 1,
      'jameel' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anta',
      1 => 'kalbee',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anta' => 1,
      'kalbee' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'asai',
      1 => 'tie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'asai' => 1,
      'tie' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'assam',
      1 => 'alaykom',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'assam' => 1,
      'alaykom' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'atsheer',
      1 => 'mukhik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'atsheer' => 1,
      'mukhik' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ba',
      1 => 'neekak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ba' => 1,
      'neekak' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'banik',
      1 => 'immak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'banik' => 1,
      'immak' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bara',
      1 => 'naik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bara' => 1,
      'naik' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'barra',
      1 => 'nayiek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'barra' => 1,
      'nayiek' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bashokh',
      1 => 'aleek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bashokh' => 1,
      'aleek' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baydati',
      1 => 'fik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'baydati' => 1,
      'fik' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedak',
      1 => 'tentak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bedak' => 1,
      'tentak' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedi',
      1 => 'nikak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bedi' => 1,
      'nikak' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'beef',
      1 => 'strokie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'beef' => 1,
      'strokie' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'beit',
      1 => 'sharamit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'beit' => 1,
      'sharamit' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bin',
      1 => 'almukhanifa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bin' => 1,
      'almukhanifa' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'binnt',
      1 => 'himaar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'binnt' => 1,
      'himaar' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bou',
      1 => 'aswad',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bou' => 1,
      'aswad' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bous',
      1 => 'tize',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bous' => 1,
      'tize' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dahri',
      1 => 'alik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dahri' => 1,
      'alik' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dakhlah',
      1 => 'killah',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dakhlah' => 1,
      'killah' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'deen',
      1 => 'abook',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'deen' => 1,
      'abook' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'deen',
      1 => 'omak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'deen' => 1,
      'omak' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'doul',
      1 => 'fodjfoh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'doul' => 1,
      'fodjfoh' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebn',
      1 => 'algahbe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ebn' => 1,
      'algahbe' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebn',
      1 => 'almanyooke',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ebn' => 1,
      'almanyooke' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebn',
      1 => 'alsharmoota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ebn' => 1,
      'alsharmoota' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebn',
      1 => 'alblaaaa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ebn' => 1,
      'alblaaaa' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ebn',
      1 => 'elmara',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ebn' => 1,
      'elmara' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'elsheitan',
      1 => 'alaykom',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'elsheitan' => 1,
      'alaykom' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'elhas',
      1 => 'kussi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'elhas' => 1,
      'kussi' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'emak',
      1 => 'dlale',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'emak' => 1,
      'dlale' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'engatalek',
      1 => 'nountek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'engatalek' => 1,
      'nountek' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'entak',
      1 => 'seflo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'entak' => 1,
      'seflo' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eyre',
      1 => 'fik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'eyre' => 1,
      'fik' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gah',
      1 => 'ba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gah' => 1,
      'ba' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hatchoun',
      1 => 'yemak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hatchoun' => 1,
      'yemak' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hey',
      1 => 'berboog',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hey' => 1,
      'berboog' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hoi',
      1 => 'mouk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hoi' => 1,
      'mouk' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hwi',
      1 => 'muk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hwi' => 1,
      'muk' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibin',
      1 => 'himaar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ibin' => 1,
      'himaar' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibin',
      1 => 'shlukeh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ibin' => 1,
      'shlukeh' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibn',
      1 => 'elkalb',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ibn' => 1,
      'elkalb' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibn',
      1 => 'elsharmoota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ibn' => 1,
      'elsharmoota' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibn',
      1 => 'haram',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ibn' => 1,
      'haram' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibnl',
      1 => 'kondara',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ibnl' => 1,
      'kondara' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ilhas',
      1 => 'teeze',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ilhas' => 1,
      'teeze' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'imak',
      1 => 'ibtintak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'imak' => 1,
      'ibtintak' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kaifa',
      1 => 'haluka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kaifa' => 1,
      'haluka' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kanker',
      1 => 'zemmer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kanker' => 1,
      'zemmer' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kbirt',
      1 => 'lkhab',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kbirt' => 1,
      'lkhab' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kes',
      1 => 'ekhtak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kes' => 1,
      'ekhtak' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kes',
      1 => 'emmak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kes' => 1,
      'emmak' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kes',
      1 => 'omok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kes' => 1,
      'omok' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kess',
      1 => 'emak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kess' => 1,
      'emak' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kess',
      1 => 'emmak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kess' => 1,
      'emmak' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kess',
      1 => 'ihktak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kess' => 1,
      'ihktak' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kess',
      1 => 'oumok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kess' => 1,
      'oumok' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kharay',
      1 => 'alek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kharay' => 1,
      'alek' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kharaye',
      1 => 'feek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kharaye' => 1,
      'feek' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kis',
      1 => 'ardhich',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kis' => 1,
      'ardhich' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kis',
      1 => 'khaltak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kis' => 1,
      'khaltak' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kis',
      1 => 'naychik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kis' => 1,
      'naychik' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kisik',
      1 => 'darda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kisik' => 1,
      'darda' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kol',
      1 => 'eyre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kol' => 1,
      'eyre' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kol',
      1 => 'zabri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kol' => 1,
      'zabri' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kolaveri',
      1 => 'didi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kolaveri' => 1,
      'didi' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koll',
      1 => 'zakk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koll' => 1,
      'zakk' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koom',
      1 => 'bee',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koom' => 1,
      'bee' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koosich',
      1 => 'jayef',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koosich' => 1,
      'jayef' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koosich',
      1 => 'simeen',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koosich' => 1,
      'simeen' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'abo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kos' => 1,
      'abo' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'amk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kos' => 1,
      'amk' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'okhtak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kos' => 1,
      'okhtak' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'omak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kos' => 1,
      'omak' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'ommak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kos' => 1,
      'ommak' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'sittak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kos' => 1,
      'sittak' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kosma',
      1 => 'yara',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kosma' => 1,
      'yara' => 0,
    ),
  ),
  97 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koss',
      1 => 'omak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koss' => 1,
      'omak' => 0,
    ),
  ),
  98 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kussik',
      1 => 'emaffin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kussik' => 1,
      'emaffin' => 0,
    ),
  ),
  99 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lhass',
      1 => 'baydeteh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lhass' => 1,
      'baydeteh' => 0,
    ),
  ),
  100 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lhwa',
      1 => 'dwa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lhwa' => 1,
      'dwa' => 0,
    ),
  ),
  101 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maalish',
      1 => 'lulu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maalish' => 1,
      'lulu' => 0,
    ),
  ),
  102 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mass',
      1 => 'zebbi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mass' => 1,
      'zebbi' => 0,
    ),
  ),
  103 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mchi',
      1 => 'thawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mchi' => 1,
      'thawa' => 0,
    ),
  ),
  104 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mok',
      1 => 'kahba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mok' => 1,
      'kahba' => 0,
    ),
  ),
  105 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mos',
      1 => 'zbi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mos' => 1,
      'zbi' => 0,
    ),
  ),
  106 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mos',
      1 => 'zibby',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mos' => 1,
      'zibby' => 0,
    ),
  ),
  107 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mossi',
      1 => 'eri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mossi' => 1,
      'eri' => 0,
    ),
  ),
  108 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mossli',
      1 => 'krarzi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mossli' => 1,
      'krarzi' => 0,
    ),
  ),
  109 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mosss',
      1 => 'ereee',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mosss' => 1,
      'ereee' => 0,
    ),
  ),
  110 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mqawda',
      1 => 'elik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mqawda' => 1,
      'elik' => 0,
    ),
  ),
  111 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muss',
      1 => 'zebby',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muss' => 1,
      'zebby' => 0,
    ),
  ),
  112 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naahachoun',
      1 => 'yemak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naahachoun' => 1,
      'yemak' => 0,
    ),
  ),
  113 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naan',
      1 => 'dirabek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naan' => 1,
      'dirabek' => 0,
    ),
  ),
  114 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayaak',
      1 => 'ghbar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nayaak' => 1,
      'ghbar' => 0,
    ),
  ),
  115 => 
  array (
    'badPhrase' => 
    array (
      0 => 'naych',
      1 => 'raask',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'naych' => 1,
      'raask' => 0,
    ),
  ),
  116 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayek',
      1 => 'ekhtak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nayek' => 1,
      'ekhtak' => 0,
    ),
  ),
  117 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayek',
      1 => 'emmak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nayek' => 1,
      'emmak' => 0,
    ),
  ),
  118 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayek',
      1 => 'hareemek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nayek' => 1,
      'hareemek' => 0,
    ),
  ),
  119 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nayket',
      1 => 'bat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nayket' => 1,
      'bat' => 0,
    ),
  ),
  120 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nekah',
      1 => 'sahraoe',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nekah' => 1,
      'sahraoe' => 0,
    ),
  ),
  121 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nela',
      1 => 'aboka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nela' => 1,
      'aboka' => 0,
    ),
  ),
  122 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nhabtik',
      1 => 'chicha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nhabtik' => 1,
      'chicha' => 0,
    ),
  ),
  123 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nik',
      1 => 'jedak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nik' => 1,
      'jedak' => 0,
    ),
  ),
  124 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nikit',
      1 => 'immak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nikit' => 1,
      'immak' => 0,
    ),
  ),
  125 => 
  array (
    'badPhrase' => 
    array (
      0 => 'niklek',
      1 => 'bzezlek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'niklek' => 1,
      'bzezlek' => 0,
    ),
  ),
  126 => 
  array (
    'badPhrase' => 
    array (
      0 => 'niklik',
      1 => 'omik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'niklik' => 1,
      'omik' => 0,
    ),
  ),
  127 => 
  array (
    'badPhrase' => 
    array (
      0 => 'njibo',
      1 => 'fik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'njibo' => 1,
      'fik' => 0,
    ),
  ),
  128 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nock',
      1 => 'nullah',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nock' => 1,
      'nullah' => 0,
    ),
  ),
  129 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nwassaaha',
      1 => 'lik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nwassaaha' => 1,
      'lik' => 0,
    ),
  ),
  130 => 
  array (
    'badPhrase' => 
    array (
      0 => 'omak',
      1 => 'mesasa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'omak' => 1,
      'mesasa' => 0,
    ),
  ),
  131 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ommak',
      1 => 'fasya',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ommak' => 1,
      'fasya' => 0,
    ),
  ),
  132 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qalab',
      1 => 'wighek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qalab' => 1,
      'wighek' => 0,
    ),
  ),
  133 => 
  array (
    'badPhrase' => 
    array (
      0 => 'raey',
      1 => 'isbayan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'raey' => 1,
      'isbayan' => 0,
    ),
  ),
  134 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ras',
      1 => 'alair',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ras' => 1,
      'alair' => 0,
    ),
  ),
  135 => 
  array (
    'badPhrase' => 
    array (
      0 => 'roh',
      1 => 'intak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'roh' => 1,
      'intak' => 0,
    ),
  ),
  136 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rooh',
      1 => 'entak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rooh' => 1,
      'entak' => 0,
    ),
  ),
  137 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rooh',
      1 => 'etnak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rooh' => 1,
      'etnak' => 0,
    ),
  ),
  138 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rouh',
      1 => 'entak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rouh' => 1,
      'entak' => 0,
    ),
  ),
  139 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sayeb',
      1 => 'zebi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sayeb' => 1,
      'zebi' => 0,
    ),
  ),
  140 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shaarat',
      1 => 'mook',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shaarat' => 1,
      'mook' => 0,
    ),
  ),
  141 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shbi',
      1 => 'dirrabek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shbi' => 1,
      'dirrabek' => 0,
    ),
  ),
  142 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shim',
      1 => 'baydati',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shim' => 1,
      'baydati' => 0,
    ),
  ),
  143 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shrbe',
      1 => 'mneh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shrbe' => 1,
      'mneh' => 0,
    ),
  ),
  144 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shufte',
      1 => 'binta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'shufte' => 1,
      'binta' => 0,
    ),
  ),
  145 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sidd',
      1 => 'bih',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sidd' => 1,
      'bih' => 0,
    ),
  ),
  146 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sir',
      1 => 'taawad',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sir' => 1,
      'taawad' => 0,
    ),
  ),
  147 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sir',
      1 => 'thawa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sir' => 1,
      'thawa' => 0,
    ),
  ),
  148 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sir',
      1 => 'tkaoud',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sir' => 1,
      'tkaoud' => 0,
    ),
  ),
  149 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sir',
      1 => 'tkawed',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sir' => 1,
      'tkawed' => 0,
    ),
  ),
  150 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sur',
      1 => 'muk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sur' => 1,
      'muk' => 0,
    ),
  ),
  151 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taa',
      1 => 'erdaa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'taa' => 1,
      'erdaa' => 0,
    ),
  ),
  152 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taa',
      1 => 'meaoo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'taa' => 1,
      'meaoo' => 0,
    ),
  ),
  153 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taa',
      1 => 'mos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'taa' => 1,
      'mos' => 0,
    ),
  ),
  154 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tabaarek',
      1 => 'yadaak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tabaarek' => 1,
      'yadaak' => 0,
    ),
  ),
  155 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tabbon',
      1 => 'mok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tabbon' => 1,
      'mok' => 0,
    ),
  ),
  156 => 
  array (
    'badPhrase' => 
    array (
      0 => 'taboune',
      1 => 'mok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'taboune' => 1,
      'mok' => 0,
    ),
  ),
  157 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telhas',
      1 => 'bekhshi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'telhas' => 1,
      'bekhshi' => 0,
    ),
  ),
  158 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telhas',
      1 => 'bokhshi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'telhas' => 1,
      'bokhshi' => 0,
    ),
  ),
  159 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telhas',
      1 => 'teezi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'telhas' => 1,
      'teezi' => 0,
    ),
  ),
  160 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telhas',
      1 => 'zebbi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'telhas' => 1,
      'zebbi' => 0,
    ),
  ),
  161 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telhass',
      1 => 'tizi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'telhass' => 1,
      'tizi' => 0,
    ),
  ),
  162 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tilhahs',
      1 => 'teezi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tilhahs' => 1,
      'teezi' => 0,
    ),
  ),
  163 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tilhas',
      1 => 'tizi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tilhas' => 1,
      'tizi' => 0,
    ),
  ),
  164 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tint',
      1 => 'rabbok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tint' => 1,
      'rabbok' => 0,
    ),
  ),
  165 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tobon',
      1 => 'imak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tobon' => 1,
      'imak' => 0,
    ),
  ),
  166 => 
  array (
    'badPhrase' => 
    array (
      0 => 'us',
      1 => 'kut',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'us' => 1,
      'kut' => 0,
    ),
  ),
  167 => 
  array (
    'badPhrase' => 
    array (
      0 => 'waala',
      1 => 'zeu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'waala' => 1,
      'zeu' => 0,
    ),
  ),
  168 => 
  array (
    'badPhrase' => 
    array (
      0 => 'waa',
      1 => 'abooy',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'waa' => 1,
      'abooy' => 0,
    ),
  ),
  169 => 
  array (
    'badPhrase' => 
    array (
      0 => 'waa',
      1 => 'faqri',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'waa' => 1,
      'faqri' => 0,
    ),
  ),
  170 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'dhroot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wald' => 1,
      'dhroot' => 0,
    ),
  ),
  171 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'il',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wald' => 1,
      'il' => 0,
    ),
  ),
  172 => 
  array (
    'badPhrase' => 
    array (
      0 => 'weld',
      1 => 'elgahba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'weld' => 1,
      'elgahba' => 0,
    ),
  ),
  173 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'arse',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'arse' => 0,
    ),
  ),
  174 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'baara',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'baara' => 0,
    ),
  ),
  175 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'batroneh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'batroneh' => 0,
    ),
  ),
  176 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'bgal',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'bgal' => 0,
    ),
  ),
  177 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'bokhesh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'bokhesh' => 0,
    ),
  ),
  178 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ehmar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'ehmar' => 0,
    ),
  ),
  179 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'gizma',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'gizma' => 0,
    ),
  ),
  180 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'hayawan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'hayawan' => 0,
    ),
  ),
  181 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'kahba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'kahba' => 0,
    ),
  ),
  182 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'mnashef',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'mnashef' => 0,
    ),
  ),
  183 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'noori',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'noori' => 0,
    ),
  ),
  184 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'wati',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'wati' => 0,
    ),
  ),
  185 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'zebbala',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'zebbala' => 0,
    ),
  ),
  186 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yaa',
      1 => 'raabi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yaa' => 1,
      'raabi' => 0,
    ),
  ),
  187 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yakhrab',
      1 => 'baytak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yakhrab' => 1,
      'baytak' => 0,
    ),
  ),
  188 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yalean',
      1 => 'maytink',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yalean' => 1,
      'maytink' => 0,
    ),
  ),
  189 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ybn',
      1 => 'elmitneka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ybn' => 1,
      'elmitneka' => 0,
    ),
  ),
  190 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yefdah',
      1 => 'ardak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yefdah' => 1,
      'ardak' => 0,
    ),
  ),
  191 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yekhrib',
      1 => 'betak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yekhrib' => 1,
      'betak' => 0,
    ),
  ),
  192 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yelan',
      1 => 'fatsak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'yelan' => 1,
      'fatsak' => 0,
    ),
  ),
  193 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ylaan',
      1 => 'haramak',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ylaan' => 1,
      'haramak' => 0,
    ),
  ),
  194 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zabour',
      1 => 'omek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zabour' => 1,
      'omek' => 0,
    ),
  ),
  195 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zaml',
      1 => 'bok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zaml' => 1,
      'bok' => 0,
    ),
  ),
  196 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zebi',
      1 => 'fek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zebi' => 1,
      'fek' => 0,
    ),
  ),
  197 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zob',
      1 => 'kbeer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zob' => 1,
      'kbeer' => 0,
    ),
  ),
  198 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zobi',
      1 => 'kbeer',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zobi' => 1,
      'kbeer' => 0,
    ),
  ),
  199 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zrba',
      1 => 'abteezk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zrba' => 1,
      'abteezk' => 0,
    ),
  ),
  200 => 
  array (
    'badPhrase' => 
    array (
      0 => 'أحط',
      1 => 'رجل',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'أحط' => 1,
      'رجل' => 0,
    ),
  ),
  201 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'الاحبة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'الاحبة' => 0,
    ),
  ),
  202 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'البلاعة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'البلاعة' => 0,
    ),
  ),
  203 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'الشرموطة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'الشرموطة' => 0,
    ),
  ),
  204 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'العاهرة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'العاهرة' => 0,
    ),
  ),
  205 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'الفشخة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'الفشخة' => 0,
    ),
  ),
  206 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'اللبوة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'اللبوة' => 0,
    ),
  ),
  207 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'المتناكة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'المتناكة' => 0,
    ),
  ),
  208 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'المرا',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'المرا' => 0,
    ),
  ),
  209 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'المرة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'المرة' => 0,
    ),
  ),
  210 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'الممحونة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'الممحونة' => 0,
    ),
  ),
  211 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'النيك',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'النيك' => 0,
    ),
  ),
  212 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'الوسخة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'الوسخة' => 0,
    ),
  ),
  213 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'حمار',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'حمار' => 0,
    ),
  ),
  214 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابن',
      1 => 'كلب',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابن' => 1,
      'كلب' => 0,
    ),
  ),
  215 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابو',
      1 => 'شخة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابو' => 1,
      'شخة' => 0,
    ),
  ),
  216 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابو',
      1 => 'شخه',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابو' => 1,
      'شخه' => 0,
    ),
  ),
  217 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابو',
      1 => 'فص',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابو' => 1,
      'فص' => 0,
    ),
  ),
  218 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ابو',
      1 => 'قرعة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ابو' => 1,
      'قرعة' => 0,
    ),
  ),
  219 => 
  array (
    'badPhrase' => 
    array (
      0 => 'احترم',
      1 => 'نفسك',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'احترم' => 1,
      'نفسك' => 0,
    ),
  ),
  220 => 
  array (
    'badPhrase' => 
    array (
      0 => 'احلي',
      1 => 'كث',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'احلي' => 1,
      'كث' => 0,
    ),
  ),
  221 => 
  array (
    'badPhrase' => 
    array (
      0 => 'اخو',
      1 => 'القحبه',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'اخو' => 1,
      'القحبه' => 0,
    ),
  ),
  222 => 
  array (
    'badPhrase' => 
    array (
      0 => 'اقلب',
      1 => 'وجهك',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'اقلب' => 1,
      'وجهك' => 0,
    ),
  ),
  223 => 
  array (
    'badPhrase' => 
    array (
      0 => 'الحس',
      1 => 'ط',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'الحس' => 1,
      'ط' => 0,
    ),
  ),
  224 => 
  array (
    'badPhrase' => 
    array (
      0 => 'الحس',
      1 => 'مكوت',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'الحس' => 1,
      'مكوت' => 0,
    ),
  ),
  225 => 
  array (
    'badPhrase' => 
    array (
      0 => 'انت',
      1 => 'غبي',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'انت' => 1,
      'غبي' => 0,
    ),
  ),
  226 => 
  array (
    'badPhrase' => 
    array (
      0 => 'انتا',
      1 => 'كلبى',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'انتا' => 1,
      'كلبى' => 0,
    ),
  ),
  227 => 
  array (
    'badPhrase' => 
    array (
      0 => 'انعل',
      1 => 'ابو',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'انعل' => 1,
      'ابو' => 0,
    ),
  ),
  228 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بارا',
      1 => 'نا',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بارا' => 1,
      'نا' => 0,
    ),
  ),
  229 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بالسم',
      1 => 'الهار',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بالسم' => 1,
      'الهار' => 0,
    ),
  ),
  230 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ببخش',
      1 => 'ط',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ببخش' => 1,
      'ط' => 0,
    ),
  ),
  231 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بسم',
      1 => 'الهار',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بسم' => 1,
      'الهار' => 0,
    ),
  ),
  232 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بشخ',
      1 => 'عل',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بشخ' => 1,
      'عل' => 0,
    ),
  ),
  233 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'الشرموطة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'الشرموطة' => 0,
    ),
  ),
  234 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'العاهرة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'العاهرة' => 0,
    ),
  ),
  235 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'الفشخة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'الفشخة' => 0,
    ),
  ),
  236 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'اللبوة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'اللبوة' => 0,
    ),
  ),
  237 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'المتناكة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'المتناكة' => 0,
    ),
  ),
  238 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'الممحونة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'الممحونة' => 0,
    ),
  ),
  239 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'المنتاكة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'المنتاكة' => 0,
    ),
  ),
  240 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'الوسخة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'الوسخة' => 0,
    ),
  ),
  241 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'حمار',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'حمار' => 0,
    ),
  ),
  242 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بنت',
      1 => 'كلب',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بنت' => 1,
      'كلب' => 0,
    ),
  ),
  243 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بوس',
      1 => 'ط',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'بوس' => 1,
      'ط' => 0,
    ),
  ),
  244 => 
  array (
    'badPhrase' => 
    array (
      0 => 'زا',
      1 => 'لامك',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'زا' => 1,
      'لامك' => 0,
    ),
  ),
  245 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ضرب',
      1 => 'عشرة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ضرب' => 1,
      'عشرة' => 0,
    ),
  ),
  246 => 
  array (
    'badPhrase' => 
    array (
      0 => 'طان',
      1 => 'عل',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'طان' => 1,
      'عل' => 0,
    ),
  ),
  247 => 
  array (
    'badPhrase' => 
    array (
      0 => 'طز',
      1 => 'في',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'طز' => 1,
      'في' => 0,
    ),
  ),
  248 => 
  array (
    'badPhrase' => 
    array (
      0 => 'عديم',
      1 => 'الشرف',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'عديم' => 1,
      'الشرف' => 0,
    ),
  ),
  249 => 
  array (
    'badPhrase' => 
    array (
      0 => 'عيال',
      1 => 'الحرام',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'عيال' => 1,
      'الحرام' => 0,
    ),
  ),
  250 => 
  array (
    'badPhrase' => 
    array (
      0 => 'كول',
      1 => 'خر',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'كول' => 1,
      'خر' => 0,
    ),
  ),
  251 => 
  array (
    'badPhrase' => 
    array (
      0 => 'لان',
      1 => 'كتاب',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'لان' => 1,
      'كتاب' => 0,
    ),
  ),
  252 => 
  array (
    'badPhrase' => 
    array (
      0 => 'نعل',
      1 => 'ابوك',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'نعل' => 1,
      'ابوك' => 0,
    ),
  ),
  253 => 
  array (
    'badPhrase' => 
    array (
      0 => 'نعل',
      1 => 'ابوكم',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'نعل' => 1,
      'ابوكم' => 0,
    ),
  ),
  254 => 
  array (
    'badPhrase' => 
    array (
      0 => 'نكت',
      1 => 'اخته',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'نكت' => 1,
      'اخته' => 0,
    ),
  ),
  255 => 
  array (
    'badPhrase' => 
    array (
      0 => 'نكت',
      1 => 'امه',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'نكت' => 1,
      'امه' => 0,
    ),
  ),
  256 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ولد',
      1 => 'القحبه',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ولد' => 1,
      'القحبه' => 0,
    ),
  ),
  257 => 
  array (
    'badPhrase' => 
    array (
      0 => 'يا',
      1 => 'هبيلة',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'يا' => 1,
      'هبيلة' => 0,
    ),
  ),
  258 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'seleta',
      2 => 'bok',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'a' => 2,
      'seleta' => 1,
      'bok' => 0,
    ),
  ),
  259 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aairy',
      1 => 'eb',
      2 => 'gathek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'aairy' => 2,
      'eb' => 1,
      'gathek' => 0,
    ),
  ),
  260 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abn',
      1 => 'al',
      2 => 'kalaaab',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'abn' => 2,
      'al' => 1,
      'kalaaab' => 0,
    ),
  ),
  261 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abn',
      1 => 'ballat',
      2 => 'aleora',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'abn' => 2,
      'ballat' => 1,
      'aleora' => 0,
    ),
  ),
  262 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abous',
      1 => 'ksa',
      2 => 'lmemee',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'abous' => 2,
      'ksa' => 1,
      'lmemee' => 0,
    ),
  ),
  263 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ad',
      1 => 'l',
      2 => 'mehaleh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ad' => 2,
      'l' => 1,
      'mehaleh' => 0,
    ),
  ),
  264 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ahot',
      1 => 'rijly',
      2 => 'btizak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ahot' => 2,
      'rijly' => 1,
      'btizak' => 0,
    ),
  ),
  265 => 
  array (
    'badPhrase' => 
    array (
      0 => 'akhu',
      1 => 'al',
      2 => 'manukeh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'akhu' => 2,
      'al' => 1,
      'manukeh' => 0,
    ),
  ),
  266 => 
  array (
    'badPhrase' => 
    array (
      0 => 'allahi',
      1 => 'yekhrib',
      2 => 'beitak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'allahi' => 2,
      'yekhrib' => 1,
      'beitak' => 0,
    ),
  ),
  267 => 
  array (
    'badPhrase' => 
    array (
      0 => 'awlad',
      1 => 'il',
      2 => 'kara',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'awlad' => 2,
      'il' => 1,
      'kara' => 0,
    ),
  ),
  268 => 
  array (
    'badPhrase' => 
    array (
      0 => 'badi',
      1 => 'aneek',
      2 => 'kosik',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'badi' => 2,
      'aneek' => 1,
      'kosik' => 0,
    ),
  ),
  269 => 
  array (
    'badPhrase' => 
    array (
      0 => 'balaa',
      1 => 'il',
      2 => 'aair',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'balaa' => 2,
      'il' => 1,
      'aair' => 0,
    ),
  ),
  270 => 
  array (
    'badPhrase' => 
    array (
      0 => 'balaaa',
      1 => 'al',
      2 => 'eyre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'balaaa' => 2,
      'al' => 1,
      'eyre' => 0,
    ),
  ),
  271 => 
  array (
    'badPhrase' => 
    array (
      0 => 'balaab',
      1 => 'ala',
      2 => 'imak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'balaab' => 2,
      'ala' => 1,
      'imak' => 0,
    ),
  ),
  272 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bashokh',
      1 => 'alaa',
      2 => 'imak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bashokh' => 2,
      'alaa' => 1,
      'imak' => 0,
    ),
  ),
  273 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedadti',
      1 => 'yeltmo',
      2 => 'wshik',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bedadti' => 2,
      'yeltmo' => 1,
      'wshik' => 0,
    ),
  ),
  274 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedi',
      1 => 'masmes',
      2 => 'bazbozek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bedi' => 2,
      'masmes' => 1,
      'bazbozek' => 0,
    ),
  ),
  275 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedi',
      1 => 'neck',
      2 => 'tizzak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bedi' => 2,
      'neck' => 1,
      'tizzak' => 0,
    ),
  ),
  276 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedi',
      1 => 'nik',
      2 => 'kesik',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bedi' => 2,
      'nik' => 1,
      'kesik' => 0,
    ),
  ),
  277 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bniik',
      1 => 'boksh',
      2 => 'tizzak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bniik' => 2,
      'boksh' => 1,
      'tizzak' => 0,
    ),
  ),
  278 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dayer',
      1 => 'ki',
      2 => 'zebbi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dayer' => 2,
      'ki' => 1,
      'zebbi' => 0,
    ),
  ),
  279 => 
  array (
    'badPhrase' => 
    array (
      0 => 'doomboog',
      1 => 'il',
      2 => 'err',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'doomboog' => 2,
      'il' => 1,
      'err' => 0,
    ),
  ),
  280 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ekhtak',
      1 => 'bade',
      2 => 'neeka',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ekhtak' => 2,
      'bade' => 1,
      'neeka' => 0,
    ),
  ),
  281 => 
  array (
    'badPhrase' => 
    array (
      0 => 'emshi',
      1 => 'nik',
      2 => 'ommek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'emshi' => 2,
      'nik' => 1,
      'ommek' => 0,
    ),
  ),
  282 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eri',
      1 => 'b',
      2 => 'rasak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'eri' => 2,
      'b' => 1,
      'rasak' => 0,
    ),
  ),
  283 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eri',
      1 => 'be',
      2 => 'ketabak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'eri' => 2,
      'be' => 1,
      'ketabak' => 0,
    ),
  ),
  284 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fuck',
      1 => 'me',
      2 => 'baby',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fuck' => 2,
      'me' => 1,
      'baby' => 0,
    ),
  ),
  285 => 
  array (
    'badPhrase' => 
    array (
      0 => 'garage',
      1 => 'al',
      2 => 'aeir',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'garage' => 2,
      'al' => 1,
      'aeir' => 0,
    ),
  ),
  286 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hittou',
      1 => 'fi',
      2 => 'teesak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hittou' => 2,
      'fi' => 1,
      'teesak' => 0,
    ),
  ),
  287 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibin',
      1 => 'al',
      2 => 'tarka',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ibin' => 2,
      'al' => 1,
      'tarka' => 0,
    ),
  ),
  288 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibin',
      1 => 'al',
      2 => 'yamani',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ibin' => 2,
      'al' => 1,
      'yamani' => 0,
    ),
  ),
  289 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibn',
      1 => 'al',
      2 => 'ahra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ibn' => 2,
      'al' => 1,
      'ahra' => 0,
    ),
  ),
  290 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibn',
      1 => 'al',
      2 => 'aahra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ibn' => 2,
      'al' => 1,
      'aahra' => 0,
    ),
  ),
  291 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibn',
      1 => 'al',
      2 => 'ghahba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ibn' => 2,
      'al' => 1,
      'ghahba' => 0,
    ),
  ),
  292 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibn',
      1 => 'il',
      2 => 'tinayich',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ibn' => 2,
      'il' => 1,
      'tinayich' => 0,
    ),
  ),
  293 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ila',
      1 => 'an',
      2 => 'sharafak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ila' => 2,
      'an' => 1,
      'sharafak' => 0,
    ),
  ),
  294 => 
  array (
    'badPhrase' => 
    array (
      0 => 'imak',
      1 => 'wahdi',
      2 => 'btoklo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'imak' => 2,
      'wahdi' => 1,
      'btoklo' => 0,
    ),
  ),
  295 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jamalick',
      1 => 'cil',
      2 => 'jahash',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jamalick' => 2,
      'cil' => 1,
      'jahash' => 0,
    ),
  ),
  296 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kahba',
      1 => 'di',
      2 => 'omo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kahba' => 2,
      'di' => 1,
      'omo' => 0,
    ),
  ),
  297 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kel',
      1 => 'khrak',
      2 => 'omak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kel' => 2,
      'khrak' => 1,
      'omak' => 0,
    ),
  ),
  298 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kelb',
      1 => 'a',
      2 => 'swag',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kelb' => 2,
      'a' => 1,
      'swag' => 0,
    ),
  ),
  299 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khosh',
      1 => 'fi',
      2 => 'teezi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'khosh' => 2,
      'fi' => 1,
      'teezi' => 0,
    ),
  ),
  300 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khosh',
      1 => 'fi',
      2 => 'teizi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'khosh' => 2,
      'fi' => 1,
      'teizi' => 0,
    ),
  ),
  301 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kis',
      1 => 'em',
      2 => 'ick',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kis' => 2,
      'em' => 1,
      'ick' => 0,
    ),
  ),
  302 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kod',
      1 => 'ras',
      2 => 'aerri',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kod' => 2,
      'ras' => 1,
      'aerri' => 0,
    ),
  ),
  303 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'ahlak',
      2 => 'manayek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kos' => 2,
      'ahlak' => 1,
      'manayek' => 0,
    ),
  ),
  304 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kuss',
      1 => 'omak',
      2 => 'qimae',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kuss' => 2,
      'omak' => 1,
      'qimae' => 0,
    ),
  ),
  305 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mart',
      1 => 'al',
      2 => 'tkawid',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mart' => 2,
      'al' => 1,
      'tkawid' => 0,
    ),
  ),
  306 => 
  array (
    'badPhrase' => 
    array (
      0 => 'miloud',
      1 => 'weld',
      2 => 'habiba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'miloud' => 2,
      'weld' => 1,
      'habiba' => 0,
    ),
  ),
  307 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mostankaa',
      1 => 'al',
      2 => 'chaba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mostankaa' => 2,
      'al' => 1,
      'chaba' => 0,
    ),
  ),
  308 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mrtoo',
      1 => 'ao',
      2 => 'mltoo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mrtoo' => 2,
      'ao' => 1,
      'mltoo' => 0,
    ),
  ),
  309 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nekni',
      1 => 'ana',
      2 => 'sharyaana',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nekni' => 2,
      'ana' => 1,
      'sharyaana' => 0,
    ),
  ),
  310 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nouri',
      1 => 'al',
      2 => 'maliki',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nouri' => 2,
      'al' => 1,
      'maliki' => 0,
    ),
  ),
  311 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oja',
      1 => 'gu',
      2 => 'chinnj',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'oja' => 2,
      'gu' => 1,
      'chinnj' => 0,
    ),
  ),
  312 => 
  array (
    'badPhrase' => 
    array (
      0 => 'okht',
      1 => 'al',
      2 => 'tkawid',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'okht' => 2,
      'al' => 1,
      'tkawid' => 0,
    ),
  ),
  313 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ommek',
      1 => 'malhet',
      2 => 'kbir',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ommek' => 2,
      'malhet' => 1,
      'kbir' => 0,
    ),
  ),
  314 => 
  array (
    'badPhrase' => 
    array (
      0 => 'raas',
      1 => 'il',
      2 => 'zub',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'raas' => 2,
      'il' => 1,
      'zub' => 0,
    ),
  ),
  315 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rbayb',
      1 => 'rabbak',
      2 => 'zwiml',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rbayb' => 2,
      'rabbak' => 1,
      'zwiml' => 0,
    ),
  ),
  316 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rouh',
      1 => 'nik',
      2 => 'omek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rouh' => 2,
      'nik' => 1,
      'omek' => 0,
    ),
  ),
  317 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shakl',
      1 => 'il',
      2 => 'nahaan',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'shakl' => 2,
      'il' => 1,
      'nahaan' => 0,
    ),
  ),
  318 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shof',
      1 => 'hal',
      2 => 'kisas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'shof' => 2,
      'hal' => 1,
      'kisas' => 0,
    ),
  ),
  319 => 
  array (
    'badPhrase' => 
    array (
      0 => 'shoof',
      1 => 'kalba',
      2 => 'tneekak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'shoof' => 2,
      'kalba' => 1,
      'tneekak' => 0,
    ),
  ),
  320 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tel',
      1 => 'has',
      2 => 'tisee',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tel' => 2,
      'has' => 1,
      'tisee' => 0,
    ),
  ),
  321 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telab',
      1 => 'be',
      2 => 'resli',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'telab' => 2,
      'be' => 1,
      'resli' => 0,
    ),
  ),
  322 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telhas',
      1 => 'bekhsh',
      2 => 'zobe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'telhas' => 2,
      'bekhsh' => 1,
      'zobe' => 0,
    ),
  ),
  323 => 
  array (
    'badPhrase' => 
    array (
      0 => 'telhas',
      1 => 'ma',
      2 => 'tinaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'telhas' => 2,
      'ma' => 1,
      'tinaa' => 0,
    ),
  ),
  324 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'il',
      2 => 'dhuroot',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'wald' => 2,
      'il' => 1,
      'dhuroot' => 0,
    ),
  ),
  325 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'il',
      2 => 'hawyaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'wald' => 2,
      'il' => 1,
      'hawyaa' => 0,
    ),
  ),
  326 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'il',
      2 => 'klaab',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'wald' => 2,
      'il' => 1,
      'klaab' => 0,
    ),
  ),
  327 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'il',
      2 => 'qahbaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'wald' => 2,
      'il' => 1,
      'qahbaa' => 0,
    ),
  ),
  328 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'il',
      2 => 'zinaa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'wald' => 2,
      'il' => 1,
      'zinaa' => 0,
    ),
  ),
  329 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wald',
      1 => 'qahbat',
      2 => 'qureesh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'wald' => 2,
      'qahbat' => 1,
      'qureesh' => 0,
    ),
  ),
  330 => 
  array (
    'badPhrase' => 
    array (
      0 => 'would',
      1 => 'al',
      2 => 'kahba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'would' => 2,
      'al' => 1,
      'kahba' => 0,
    ),
  ),
  331 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'abo',
      2 => 'somar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'abo' => 1,
      'somar' => 0,
    ),
  ),
  332 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'bint',
      2 => 'elharam',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'bint' => 1,
      'elharam' => 0,
    ),
  ),
  333 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'bint',
      2 => 'elkhinzir',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'bint' => 1,
      'elkhinzir' => 0,
    ),
  ),
  334 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ebn',
      2 => 'jiranak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'ebn' => 1,
      'jiranak' => 0,
    ),
  ),
  335 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ibn',
      2 => 'elfashkha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'ibn' => 1,
      'elfashkha' => 0,
    ),
  ),
  336 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'walden',
      2 => 'kabah',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'walden' => 1,
      'kabah' => 0,
    ),
  ),
  337 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'weld',
      2 => 'elgahba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ya' => 2,
      'weld' => 1,
      'elgahba' => 0,
    ),
  ),
  338 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yalla',
      1 => 'maal',
      2 => 'saham',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yalla' => 2,
      'maal' => 1,
      'saham' => 0,
    ),
  ),
  339 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yddek',
      1 => 'fi',
      2 => 'zob',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yddek' => 2,
      'fi' => 1,
      'zob' => 0,
    ),
  ),
  340 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yelaan',
      1 => 'naik',
      2 => 'emak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yelaan' => 2,
      'naik' => 1,
      'emak' => 0,
    ),
  ),
  341 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yelan',
      1 => 'deen',
      2 => 'omak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yelan' => 2,
      'deen' => 1,
      'omak' => 0,
    ),
  ),
  342 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yelan',
      1 => 'abo',
      2 => 'taareesak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yelan' => 2,
      'abo' => 1,
      'taareesak' => 0,
    ),
  ),
  343 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yelan',
      1 => 'taaris',
      2 => 'ardak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yelan' => 2,
      'taaris' => 1,
      'ardak' => 0,
    ),
  ),
  344 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yenaan',
      1 => 'kusha',
      2 => 'ommak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yenaan' => 2,
      'kusha' => 1,
      'ommak' => 0,
    ),
  ),
  345 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zobbi',
      1 => 'be',
      2 => 'ommok',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'zobbi' => 2,
      'be' => 1,
      'ommok' => 0,
    ),
  ),
  346 => 
  array (
    'badPhrase' => 
    array (
      0 => 'اذهب',
      1 => 'الى',
      2 => 'الجح',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'اذهب' => 2,
      'الى' => 1,
      'الجح' => 0,
    ),
  ),
  347 => 
  array (
    'badPhrase' => 
    array (
      0 => 'اصبع',
      1 => 'على',
      2 => 'صرمك',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'اصبع' => 2,
      'على' => 1,
      'صرمك' => 0,
    ),
  ),
  348 => 
  array (
    'badPhrase' => 
    array (
      0 => 'امروج',
      1 => 'فى',
      2 => 'ع',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'امروج' => 2,
      'فى' => 1,
      'ع' => 0,
    ),
  ),
  349 => 
  array (
    'badPhrase' => 
    array (
      0 => 'تناك',
      1 => 'فى',
      2 => 'ط',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'تناك' => 2,
      'فى' => 1,
      'ط' => 0,
    ),
  ),
  350 => 
  array (
    'badPhrase' => 
    array (
      0 => 'allah',
      1 => 'dialk',
      2 => 'kayrde',
      3 => 'zebbi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'allah' => 3,
      'dialk' => 2,
      'kayrde' => 1,
      'zebbi' => 0,
    ),
  ),
  351 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ana',
      1 => 'howa',
      2 => 'rab',
      3 => 'dialk',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ana' => 3,
      'howa' => 2,
      'rab' => 1,
      'dialk' => 0,
    ),
  ),
  352 => 
  array (
    'badPhrase' => 
    array (
      0 => 'arthali',
      1 => 'zebbi',
      2 => 'ya',
      3 => 'kahba',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'arthali' => 3,
      'zebbi' => 2,
      'ya' => 1,
      'kahba' => 0,
    ),
  ),
  353 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayeree',
      1 => 'fee',
      2 => 'wij',
      3 => 'imaak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ayeree' => 3,
      'fee' => 2,
      'wij' => 1,
      'imaak' => 0,
    ),
  ),
  354 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayri',
      1 => 'belli',
      2 => 'tara',
      3 => 'ak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ayri' => 3,
      'belli' => 2,
      'tara' => 1,
      'ak' => 0,
    ),
  ),
  355 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bade',
      1 => 'naykak',
      2 => 'l',
      3 => 'fejle',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bade' => 3,
      'naykak' => 2,
      'l' => 1,
      'fejle' => 0,
    ),
  ),
  356 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bde',
      1 => 'amroj',
      2 => 'fe',
      3 => 'enak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bde' => 3,
      'amroj' => 2,
      'fe' => 1,
      'enak' => 0,
    ),
  ),
  357 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedi',
      1 => 'nik',
      2 => 'bzez',
      3 => 'emak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bedi' => 3,
      'nik' => 2,
      'bzez' => 1,
      'emak' => 0,
    ),
  ),
  358 => 
  array (
    'badPhrase' => 
    array (
      0 => 'coos',
      1 => 'okt',
      2 => 'al',
      3 => 'laglesh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'coos' => 3,
      'okt' => 2,
      'al' => 1,
      'laglesh' => 0,
    ),
  ),
  359 => 
  array (
    'badPhrase' => 
    array (
      0 => 'din',
      1 => 'dialkom',
      2 => 'dial',
      3 => 'zwaml',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'din' => 3,
      'dialkom' => 2,
      'dial' => 1,
      'zwaml' => 0,
    ),
  ),
  360 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ibin',
      1 => 'al',
      2 => 'sayer',
      3 => 'naal',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ibin' => 3,
      'al' => 2,
      'sayer' => 1,
      'naal' => 0,
    ),
  ),
  361 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kanmseh',
      1 => 'lkhra',
      2 => 'biloran',
      3 => 'lkarih',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kanmseh' => 3,
      'lkhra' => 2,
      'biloran' => 1,
      'lkarih' => 0,
    ),
  ),
  362 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kes',
      1 => 'en',
      2 => 'neck',
      3 => 'eighty',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kes' => 3,
      'en' => 2,
      'neck' => 1,
      'eighty' => 0,
    ),
  ),
  363 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khalil',
      1 => 'aire',
      2 => 'wa',
      3 => 'kloo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'khalil' => 3,
      'aire' => 2,
      'wa' => 1,
      'kloo' => 0,
    ),
  ),
  364 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khchi',
      1 => 'sebaak',
      2 => 'f',
      3 => 'tremtek',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'khchi' => 3,
      'sebaak' => 2,
      'f' => 1,
      'tremtek' => 0,
    ),
  ),
  365 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kis',
      1 => 'em',
      2 => 'eli',
      3 => 'nafadak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kis' => 3,
      'em' => 2,
      'eli' => 1,
      'nafadak' => 0,
    ),
  ),
  366 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nahwi',
      1 => 'lik',
      2 => 'titiza',
      3 => 'dialk',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nahwi' => 3,
      'lik' => 2,
      'titiza' => 1,
      'dialk' => 0,
    ),
  ),
  367 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nboul',
      1 => 'lik',
      2 => 'fi',
      3 => 'wajhek',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nboul' => 3,
      'lik' => 2,
      'fi' => 1,
      'wajhek' => 0,
    ),
  ),
  368 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nkhshih',
      1 => 'fik',
      2 => 'bla',
      3 => 'dfal',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nkhshih' => 3,
      'fik' => 2,
      'bla' => 1,
      'dfal' => 0,
    ),
  ),
  369 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nrsam',
      1 => 'lik',
      2 => 'tabone',
      3 => 'fwajhek',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nrsam' => 3,
      'lik' => 2,
      'tabone' => 1,
      'fwajhek' => 0,
    ),
  ),
  370 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nyak',
      1 => 'al',
      2 => 'nana',
      3 => 'tabak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nyak' => 3,
      'al' => 2,
      'nana' => 1,
      'tabak' => 0,
    ),
  ),
  371 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rassol',
      1 => 'dialk',
      2 => 'akbar',
      3 => 'zaml',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'rassol' => 3,
      'dialk' => 2,
      'akbar' => 1,
      'zaml' => 0,
    ),
  ),
  372 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rassol',
      1 => 'lkalb',
      2 => 'kayrde',
      3 => 'zbouba',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'rassol' => 3,
      'lkalb' => 2,
      'kayrde' => 1,
      'zbouba' => 0,
    ),
  ),
  373 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rou',
      1 => 'wa',
      2 => 'nek',
      3 => 'alek',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'rou' => 3,
      'wa' => 2,
      'nek' => 1,
      'alek' => 0,
    ),
  ),
  374 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sambooli',
      1 => 'maa',
      2 => 'indi',
      3 => 'ghairoo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sambooli' => 3,
      'maa' => 2,
      'indi' => 1,
      'ghairoo' => 0,
    ),
  ),
  375 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sir',
      1 => 'lanhwi',
      2 => 'lik',
      3 => 'rabbak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sir' => 3,
      'lanhwi' => 2,
      'lik' => 1,
      'rabbak' => 0,
    ),
  ),
  376 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sir',
      1 => 'oula',
      2 => 'ghan',
      3 => 'houik',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sir' => 3,
      'oula' => 2,
      'ghan' => 1,
      'houik' => 0,
    ),
  ),
  377 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sir',
      1 => 'thwi',
      2 => 'kahbat',
      3 => 'mok',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sir' => 3,
      'thwi' => 2,
      'kahbat' => 1,
      'mok' => 0,
    ),
  ),
  378 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tfo',
      1 => 'ala',
      2 => 'kos',
      3 => 'omak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tfo' => 3,
      'ala' => 2,
      'kos' => 1,
      'omak' => 0,
    ),
  ),
  379 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'abn',
      2 => 'al',
      3 => 'shrmota',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ya' => 3,
      'abn' => 2,
      'al' => 1,
      'shrmota' => 0,
    ),
  ),
  380 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'akho',
      2 => 'l',
      3 => 'mentakeh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ya' => 3,
      'akho' => 2,
      'l' => 1,
      'mentakeh' => 0,
    ),
  ),
  381 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ebn',
      2 => 'l',
      3 => 'balaa',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ya' => 3,
      'ebn' => 2,
      'l' => 1,
      'balaa' => 0,
    ),
  ),
  382 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ebn',
      2 => 'l',
      3 => 'mesealeh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ya' => 3,
      'ebn' => 2,
      'l' => 1,
      'mesealeh' => 0,
    ),
  ),
  383 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ebn',
      2 => 'l',
      3 => 'mintakeh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ya' => 3,
      'ebn' => 2,
      'l' => 1,
      'mintakeh' => 0,
    ),
  ),
  384 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'ibn',
      2 => 'il',
      3 => 'daareh',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ya' => 3,
      'ibn' => 2,
      'il' => 1,
      'daareh' => 0,
    ),
  ),
  385 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yelan',
      1 => 'abo',
      2 => 'taarees',
      3 => 'immak',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'yelan' => 3,
      'abo' => 2,
      'taarees' => 1,
      'immak' => 0,
    ),
  ),
  386 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بحشى',
      1 => 'رجلى',
      2 => 'فى',
      3 => 'ط',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'بحشى' => 3,
      'رجلى' => 2,
      'فى' => 1,
      'ط' => 0,
    ),
  ),
  387 => 
  array (
    'badPhrase' => 
    array (
      0 => 'allah',
      1 => 'i',
      2 => 'naal',
      3 => 'dine',
      4 => 'mok',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'allah' => 4,
      'i' => 3,
      'naal' => 2,
      'dine' => 1,
      'mok' => 0,
    ),
  ),
  388 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bahshi',
      1 => 'rejlee',
      2 => 'fee',
      3 => 'teez',
      4 => 'imak',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'bahshi' => 4,
      'rejlee' => 3,
      'fee' => 2,
      'teez' => 1,
      'imak' => 0,
    ),
  ),
  389 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedi',
      1 => 'fawit',
      2 => 'eyri',
      3 => 'bi',
      4 => 'tizik',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'bedi' => 4,
      'fawit' => 3,
      'eyri' => 2,
      'bi' => 1,
      'tizik' => 0,
    ),
  ),
  390 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eyre',
      1 => 'b',
      2 => 'wejjak',
      3 => 'chou',
      4 => 'meref',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'eyre' => 4,
      'b' => 3,
      'wejjak' => 2,
      'chou' => 1,
      'meref' => 0,
    ),
  ),
  391 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ila',
      1 => 'an',
      2 => 'abu',
      3 => 'taaris',
      4 => 'ohtak',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ila' => 4,
      'an' => 3,
      'abu' => 2,
      'taaris' => 1,
      'ohtak' => 0,
    ),
  ),
  392 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kos',
      1 => 'em',
      2 => 'yele',
      3 => 'bazarak',
      4 => 'mentak',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'kos' => 4,
      'em' => 3,
      'yele' => 2,
      'bazarak' => 1,
      'mentak' => 0,
    ),
  ),
  393 => 
  array (
    'badPhrase' => 
    array (
      0 => 'llah',
      1 => 'dialk',
      2 => 'kaymoss',
      3 => 'liya',
      4 => 'zabbi',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'llah' => 4,
      'dialk' => 3,
      'kaymoss' => 2,
      'liya' => 1,
      'zabbi' => 0,
    ),
  ),
  394 => 
  array (
    'badPhrase' => 
    array (
      0 => 'llah',
      1 => 'dialk',
      2 => 'ngalsso',
      3 => 'ala',
      4 => 'zabbi',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'llah' => 4,
      'dialk' => 3,
      'ngalsso' => 2,
      'ala' => 1,
      'zabbi' => 0,
    ),
  ),
  395 => 
  array (
    'badPhrase' => 
    array (
      0 => 'malla',
      1 => 'ras',
      2 => 'eyr',
      3 => 'yaleh',
      4 => 'alek',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'malla' => 4,
      'ras' => 3,
      'eyr' => 2,
      'yaleh' => 1,
      'alek' => 0,
    ),
  ),
  396 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mos',
      1 => 'hozy',
      2 => 'wa',
      3 => 'enta',
      4 => 'sakt',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'mos' => 4,
      'hozy' => 3,
      'wa' => 2,
      'enta' => 1,
      'sakt' => 0,
    ),
  ),
  397 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rab',
      1 => 'dialk',
      2 => 'kanwih',
      3 => 'min',
      4 => 'zkko',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'rab' => 4,
      'dialk' => 3,
      'kanwih' => 2,
      'min' => 1,
      'zkko' => 0,
    ),
  ),
  398 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rouh',
      1 => 'wa',
      2 => 'sittin',
      3 => 'erd',
      4 => 'maak',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'rouh' => 4,
      'wa' => 3,
      'sittin' => 2,
      'erd' => 1,
      'maak' => 0,
    ),
  ),
  399 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bedi',
      1 => 'nik',
      2 => 'tiz',
      3 => 'emak',
      4 => 'l',
      5 => 'mamhoneh',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'bedi' => 5,
      'nik' => 4,
      'tiz' => 3,
      'emak' => 2,
      'l' => 1,
      'mamhoneh' => 0,
    ),
  ),
  400 => 
  array (
    'badPhrase' => 
    array (
      0 => 'i',
      1 => 'love',
      2 => 'you',
      3 => 'soo',
      4 => 'much',
      5 => 'bitch',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'i' => 5,
      'love' => 4,
      'you' => 3,
      'soo' => 2,
      'much' => 1,
      'bitch' => 0,
    ),
  ),
  401 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ghati',
      1 => 'il',
      2 => 'face',
      3 => 'oo',
      4 => 'doos',
      5 => 'il',
      6 => 'race',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'ghati' => 6,
      'il' => 1,
      'face' => 4,
      'oo' => 3,
      'doos' => 2,
      'race' => 0,
    ),
  ),
  402 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yelan',
      1 => 'ekht',
      2 => 'yali',
      3 => 'khalafak',
      4 => 'bi',
      5 => 'ayree',
      6 => 'akit',
      7 => 'manyookee',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'yelan' => 7,
      'ekht' => 6,
      'yali' => 5,
      'khalafak' => 4,
      'bi' => 3,
      'ayree' => 2,
      'akit' => 1,
      'manyookee' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 403;

