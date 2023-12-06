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
  'ب' => true,
  'خ' => true,
  'ل' => true,
  'ن' => true,
  'ه' => true,
  'و' => true,
  'ک' => true,
  'ی' => true,
  'ان' => true,
  'ای' => true,
  'بی' => true,
  'تر' => true,
  'تو' => true,
  'جق' => true,
  'خب' => true,
  'خر' => true,
  'خز' => true,
  'خل' => true,
  'خی' => true,
  'دن' => true,
  'ده' => true,
  'رن' => true,
  'سگ' => true,
  'شق' => true,
  'شل' => true,
  'شو' => true,
  'عن' => true,
  'قس' => true,
  'كص' => true,
  'لا' => true,
  'لر' => true,
  'لز' => true,
  'لش' => true,
  'مغ' => true,
  'نا' => true,
  'نو' => true,
  'هی' => true,
  'پا' => true,
  'چت' => true,
  'چس' => true,
  'کث' => true,
  'کس' => true,
  'کش' => true,
  'کص' => true,
  'گه' => true,
  'گو' => true,
  'گی' => true,
  'ید' => true,
  'ین' => true,
  'cos' => true,
  'goh' => true,
  'kir' => true,
  'kos' => true,
  'sag' => true,
  'آلت' => true,
  'ابن' => true,
  'اده' => true,
  'ارت' => true,
  'اسب' => true,
  'انی' => true,
  'اوی' => true,
  'باش' => true,
  'بدم' => true,
  'بکن' => true,
  'تخم' => true,
  'ترک' => true,
  'توش' => true,
  'تپل' => true,
  'جقی' => true,
  'جلق' => true,
  'جکس' => true,
  'حشر' => true,
  'خار' => true,
  'خان' => true,
  'خرس' => true,
  'خری' => true,
  'خطا' => true,
  'خفه' => true,
  'خنگ' => true,
  'خور' => true,
  'خون' => true,
  'خیس' => true,
  'داف' => true,
  'داگ' => true,
  'درا' => true,
  'دله' => true,
  'دهن' => true,
  'دوش' => true,
  'دول' => true,
  'دکل' => true,
  'دیک' => true,
  'زدن' => true,
  'زنا' => true,
  'ساک' => true,
  'سکس' => true,
  'سگی' => true,
  'شاش' => true,
  'شدن' => true,
  'صفت' => true,
  'صیک' => true,
  'عرب' => true,
  'عرق' => true,
  'عفت' => true,
  'عمه' => true,
  'فاج' => true,
  'فاک' => true,
  'فیس' => true,
  'لاس' => true,
  'لاش' => true,
  'لجن' => true,
  'لخت' => true,
  'لگن' => true,
  'لیس' => true,
  'مال' => true,
  'ماچ' => true,
  'مرض' => true,
  'ممه' => true,
  'منی' => true,
  'نتو' => true,
  'نشو' => true,
  'ننت' => true,
  'ننه' => true,
  'هیز' => true,
  'ولد' => true,
  'ولو' => true,
  'پدر' => true,
  'پپه' => true,
  'کاس' => true,
  'کرم' => true,
  'کله' => true,
  'کنت' => true,
  'کوث' => true,
  'کوس' => true,
  'کوص' => true,
  'کون' => true,
  'کیر' => true,
  'گاو' => true,
  'گهی' => true,
  'گوز' => true,
  'گوش' => true,
  'گوه' => true,
  'dool' => true,
  'keer' => true,
  'khar' => true,
  'kiri' => true,
  'koni' => true,
  'ابله' => true,
  'احمق' => true,
  'اسبی' => true,
  'اسنی' => true,
  'اسکل' => true,
  'اسگل' => true,
  'الاغ' => true,
  'الاق' => true,
  'انگل' => true,
  'باسن' => true,
  'باله' => true,
  'بمال' => true,
  'بوتا' => true,
  'بکنش' => true,
  'بیضه' => true,
  'تخمم' => true,
  'تخمی' => true,
  'توله' => true,
  'جاکش' => true,
  'جنده' => true,
  'جنسی' => true,
  'جهنم' => true,
  'جوون' => true,
  'حروم' => true,
  'حشری' => true,
  'خانم' => true,
  'خایه' => true,
  'خرفت' => true,
  'خروس' => true,
  'خوار' => true,
  'دادن' => true,
  'داری' => true,
  'دایک' => true,
  'دلقک' => true,
  'دهنت' => true,
  'دینک' => true,
  'دیوث' => true,
  'دیوس' => true,
  'دیوص' => true,
  'رشتی' => true,
  'روحت' => true,
  'ریدن' => true,
  'ریدی' => true,
  'زارت' => true,
  'زنتو' => true,
  'زنشو' => true,
  'سسکی' => true,
  'سوپر' => true,
  'سکسی' => true,
  'شهوت' => true,
  'صیغه' => true,
  'عمتو' => true,
  'عنتر' => true,
  'عوضی' => true,
  'غیرت' => true,
  'فارس' => true,
  'فانی' => true,
  'فلنج' => true,
  'فیلم' => true,
  'قرتی' => true,
  'لاشی' => true,
  'لاپا' => true,
  'لختی' => true,
  'لعنت' => true,
  'مادر' => true,
  'مقعد' => true,
  'ملنگ' => true,
  'منگل' => true,
  'نازی' => true,
  'نجار' => true,
  'نعشه' => true,
  'نکبت' => true,
  'نیکه' => true,
  'هرزه' => true,
  'وانگ' => true,
  'واژن' => true,
  'پرده' => true,
  'پسون' => true,
  'پفیو' => true,
  'پلشت' => true,
  'پنیر' => true,
  'پورن' => true,
  'پیچش' => true,
  'پیکر' => true,
  'چنده' => true,
  'کردن' => true,
  'کسخل' => true,
  'کسکش' => true,
  'کصخل' => true,
  'کصده' => true,
  'کصکش' => true,
  'کلفت' => true,
  'کونن' => true,
  'کونی' => true,
  'کوون' => true,
  'کیرر' => true,
  'کیرم' => true,
  'کیری' => true,
  'گاوی' => true,
  'گربه' => true,
  'گردن' => true,
  'گریه' => true,
  'گشاد' => true,
  'گنده' => true,
  'گوزو' => true,
  'گوشت' => true,
  'bokon' => true,
  'jende' => true,
  'olagh' => true,
  'tokhm' => true,
  'آشغال' => true,
  'اسپرم' => true,
  'اسگول' => true,
  'انزال' => true,
  'اوسکل' => true,
  'اوسگل' => true,
  'اوصکل' => true,
  'اوصگل' => true,
  'بخورش' => true,
  'بدبخت' => true,
  'برهنه' => true,
  'بولاک' => true,
  'بکارت' => true,
  'بکنمت' => true,
  'تجاوز' => true,
  'تقدیر' => true,
  'توراد' => true,
  'جیندا' => true,
  'خارکس' => true,
  'دختره' => true,
  'دودول' => true,
  'رشتیf' => true,
  'رکتوم' => true,
  'زرنزن' => true,
  'زنیکه' => true,
  'سرخور' => true,
  'سرویس' => true,
  'سرکیر' => true,
  'سوخته' => true,
  'سوراخ' => true,
  'سولاخ' => true,
  'سکسیم' => true,
  'سکسیی' => true,
  'سیکیم' => true,
  'شلخته' => true,
  'شنگول' => true,
  'شهوتی' => true,
  'فاحشه' => true,
  'فاصله' => true,
  'كصننه' => true,
  'كصپدر' => true,
  'لامصب' => true,
  'لعنتی' => true,
  'مشروب' => true,
  'مهاجم' => true,
  'ناموس' => true,
  'نرکده' => true,
  'پدرتو' => true,
  'پدرسگ' => true,
  'پریود' => true,
  'پستان' => true,
  'پشمام' => true,
  'پفیوز' => true,
  'پورنو' => true,
  'پوسیر' => true,
  'پوفیو' => true,
  'پیزوف' => true,
  'چاغال' => true,
  'چاقال' => true,
  'چنبره' => true,
  'چوچول' => true,
  'کاسده' => true,
  'کاسکش' => true,
  'کثافت' => true,
  'کثافط' => true,
  'کردنی' => true,
  'کسشعر' => true,
  'کسکیر' => true,
  'کصافت' => true,
  'کصافط' => true,
  'کصلیس' => true,
  'کلوچه' => true,
  'کونده' => true,
  'کونشو' => true,
  'کونکش' => true,
  'کیرنا' => true,
  'گاگول' => true,
  'گایدن' => true,
  'گایدی' => true,
  'jendeh' => true,
  'khayeh' => true,
  'neghal' => true,
  'ravani' => true,
  'seyyed' => true,
  'ارگاسم' => true,
  'استایل' => true,
  'اسموتی' => true,
  'اسمگما' => true,
  'اسکانک' => true,
  'باشگاه' => true,
  'بپرروش' => true,
  'بپرسرش' => true,
  'بیشعور' => true,
  'ترسناک' => true,
  'تناسلی' => true,
  'جادوگر' => true,
  'جانوری' => true,
  'جوانان' => true,
  'حیوانی' => true,
  'خایمال' => true,
  'دوجنسه' => true,
  'ریمینگ' => true,
  'سادیست' => true,
  'ساکونی' => true,
  'سیهدیر' => true,
  'سیکتیر' => true,
  'شاخدار' => true,
  'شاسگول' => true,
  'شهوانی' => true,
  'شونبول' => true,
  'صلواتی' => true,
  'غرمساق' => true,
  'غرمصاق' => true,
  'قرمساق' => true,
  'قرمصاق' => true,
  'لاپایی' => true,
  'لاکونی' => true,
  'لیسیدن' => true,
  'مادرتو' => true,
  'مادرسگ' => true,
  'مرتیکه' => true,
  'مردیکه' => true,
  'مشاعره' => true,
  'نجارها' => true,
  'نگایدم' => true,
  'ولدزنا' => true,
  'ویاگرا' => true,
  'پرونده' => true,
  'پوسیدن' => true,
  'کیردرا' => true,
  'کیردوس' => true,
  'کیرناز' => true,
  'کیروکس' => true,
  'گاییدن' => true,
  'گاییده' => true,
  'گوسفند' => true,
  'گیخوار' => true,
  'akhoond' => true,
  'ashghal' => true,
  'atabaki' => true,
  'bishour' => true,
  'dayyoos' => true,
  'koskesh' => true,
  'qazvini' => true,
  'shompot' => true,
  'استمناء' => true,
  'بیناموس' => true,
  'حیوانات' => true,
  'خارکسده' => true,
  'خارکسّه' => true,
  'خداحافظ' => true,
  'درازگوش' => true,
  'زنازاده' => true,
  'سادیسمی' => true,
  'قورباغه' => true,
  'مالوندن' => true,
  'مرضداری' => true,
  'مروارید' => true,
  'میخوریش' => true,
  'ناموستو' => true,
  'نگاییدم' => true,
  'چرندیات' => true,
  'کیردراز' => true,
  'bachabus' => true,
  'divooneh' => true,
  'khoyamal' => true,
  'pedarsag' => true,
  'اسکروتوم' => true,
  'بیابخورش' => true,
  'حرامزاده' => true,
  'حرومزاده' => true,
  'حروملقمه' => true,
  'دخترجنده' => true,
  'دخترقرتی' => true,
  'قورومساق' => true,
  'مادرجنده' => true,
  'مادرخراب' => true,
  'مادرقهوه' => true,
  'مادرکونی' => true,
  'مازوکیست' => true,
  'کیرمکیدن' => true,
  'گورومساخ' => true,
  'gaeedamet' => true,
  'korrekhar' => true,
  'shaholahi' => true,
  'خواهرجنده' => true,
  'دهنتوببند' => true,
  'کیرمصنوعی' => true,
  'پورنوگرافی' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ahai',
      1 => 'duffyie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ahai' => 1,
      'duffyie' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'arabe',
      1 => 'kassif',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'arabe' => 1,
      'kassif' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bezar',
      1 => 'dahanam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bezar' => 1,
      'dahanam' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chie',
      1 => 'goftie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chie' => 1,
      'goftie' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chira',
      1 => 'ckhar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chira' => 1,
      'ckhar' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'davar',
      1 => 'veiseh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'davar' => 1,
      'veiseh' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ghorom',
      1 => 'saagh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ghorom' => 1,
      'saagh' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'haroum',
      1 => 'zaade',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'haroum' => 1,
      'zaade' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'irani',
      1 => 'kosforosh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'irani' => 1,
      'kosforosh' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ja',
      1 => 'kesh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ja' => 1,
      'kesh' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khaar',
      1 => 'kosde',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khaar' => 1,
      'kosde' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khaar',
      1 => 'kosdeh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khaar' => 1,
      'kosdeh' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kharet',
      1 => 'gayidam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kharet' => 1,
      'gayidam' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khareto',
      1 => 'gaeedam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khareto' => 1,
      'gaeedam' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khodeto',
      1 => 'bokun',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'khodeto' => 1,
      'bokun' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kiram',
      1 => 'dahanet',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kiram' => 1,
      'dahanet' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kireto',
      1 => 'mikhoram',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kireto' => 1,
      'mikhoram' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kon',
      1 => 'kesh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kon' => 1,
      'kesh' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koon',
      1 => 'kesh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'koon' => 1,
      'kesh' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kosamo',
      1 => 'belis',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kosamo' => 1,
      'belis' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kose',
      1 => 'nanat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kose' => 1,
      'nanat' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kun',
      1 => 'kesh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kun' => 1,
      'kesh' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'madareto',
      1 => 'gayidam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'madareto' => 1,
      'gayidam' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mader',
      1 => 'zagh',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mader' => 1,
      'zagh' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'man',
      1 => 'zanam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'man' => 1,
      'zanam' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'soolakh',
      1 => 'koon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'soolakh' => 1,
      'koon' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'torke',
      1 => 'char',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'torke' => 1,
      'char' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'valade',
      1 => 'zenaa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'valade' => 1,
      'zenaa' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'امتیاز',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'امتیاز' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'برنامه',
      1 => 'نویس',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'برنامه' => 1,
      'نویس' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'توپ',
      1 => 'ها',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'توپ' => 1,
      'ها' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'خنده',
      1 => 'دار',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'خنده' => 1,
      'دار' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'دمدمی',
      1 => 'مزاجی',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'دمدمی' => 1,
      'مزاجی' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'دوست',
      1 => 'دختر',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'دوست' => 1,
      'دختر' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'دوست',
      1 => 'پسر',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'دوست' => 1,
      'پسر' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'سقط',
      1 => 'جنین',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'سقط' => 1,
      'جنین' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'سینه',
      1 => 'ها',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'سینه' => 1,
      'ها' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'شورتم',
      1 => 'ماسکت',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'شورتم' => 1,
      'ماسکت' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'عقب',
      1 => 'مانده',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'عقب' => 1,
      'مانده' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'قیمت',
      1 => 'ها',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'قیمت' => 1,
      'ها' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'موکن',
      1 => 'فرش',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'موکن' => 1,
      'فرش' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'کمان',
      1 => 'توپ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'کمان' => 1,
      'توپ' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'beriz',
      1 => 'roo',
      2 => 'sooratam',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'beriz' => 2,
      'roo' => 1,
      'sooratam' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cheh',
      1 => 'gohei',
      2 => 'khordie',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cheh' => 2,
      'gohei' => 1,
      'khordie' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khak',
      1 => 'too',
      2 => 'saret',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'khak' => 2,
      'too' => 1,
      'saret' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kiram',
      1 => 'to',
      2 => 'dahanet',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kiram' => 2,
      'to' => 1,
      'dahanet' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kiram',
      1 => 'to',
      2 => 'sibilet',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kiram' => 2,
      'to' => 1,
      'sibilet' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kiram',
      1 => 'too',
      2 => 'damaghet',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kiram' => 2,
      'too' => 1,
      'damaghet' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kiram',
      1 => 'tu',
      2 => 'kunet',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kiram' => 2,
      'tu' => 1,
      'kunet' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koset',
      1 => 'bekar',
      2 => 'et',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'koset' => 2,
      'bekar' => 1,
      'et' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'koskeshe',
      1 => 'bi',
      2 => 'pedar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'koskeshe' => 2,
      'bi' => 1,
      'pedar' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kunam',
      1 => 'mah',
      2 => 'doore',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kunam' => 2,
      'mah' => 1,
      'doore' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kune',
      1 => 'babato',
      2 => 'gaidam',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kune' => 2,
      'babato' => 1,
      'gaidam' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'madar',
      1 => 'be',
      2 => 'khta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'madar' => 2,
      'be' => 1,
      'khta' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'man',
      1 => 'chaghookairdam',
      2 => 'kiret',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'man' => 2,
      'chaghookairdam' => 1,
      'kiret' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'reedam',
      1 => 'be',
      2 => 'heykalet',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'reedam' => 2,
      'be' => 1,
      'heykalet' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ridam',
      1 => 'to',
      2 => 'saret',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ridam' => 2,
      'to' => 1,
      'saret' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'بسته',
      1 => 'بندی',
      2 => 'فوج',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'بسته' => 2,
      'بندی' => 1,
      'فوج' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'لب',
      1 => 'به',
      2 => 'لب',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'لب' => 0,
      'به' => 1,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ann',
      1 => 'ru',
      2 => 'sar',
      3 => 'et',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ann' => 3,
      'ru' => 2,
      'sar' => 1,
      'et' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avazi',
      1 => 'ashghale',
      2 => 'bishoore',
      3 => 'kesafat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'avazi' => 3,
      'ashghale' => 2,
      'bishoore' => 1,
      'kesafat' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'be',
      1 => 'roohe',
      2 => 'pedaret',
      3 => 'miridam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'be' => 3,
      'roohe' => 2,
      'pedaret' => 1,
      'miridam' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kose',
      1 => 'nanato',
      2 => 'jer',
      3 => 'dadam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'kose' => 3,
      'nanato' => 2,
      'jer' => 1,
      'dadam' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nanato',
      1 => 'ta',
      2 => 'tah',
      3 => 'gaidam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nanato' => 3,
      'ta' => 2,
      'tah' => 1,
      'gaidam' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'دمار',
      1 => 'از',
      2 => 'روزگارمان',
      3 => 'درآورد',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'دمار' => 3,
      'از' => 2,
      'روزگارمان' => 1,
      'درآورد' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khwar',
      1 => 'o',
      2 => 'madari',
      3 => 'ta',
      4 => 'gaiam',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'khwar' => 4,
      'o' => 3,
      'madari' => 2,
      'ta' => 1,
      'gaiam' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kiram',
      1 => 'mizoram',
      2 => 'tu',
      3 => 'yeh',
      4 => 'kunet',
      5 => 'saget',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'kiram' => 5,
      'mizoram' => 4,
      'tu' => 3,
      'yeh' => 2,
      'kunet' => 1,
      'saget' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mameet',
      1 => 'kerakoor',
      2 => 'ee',
      3 => 'ners',
      4 => 'jaj',
      5 => 'ktam',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'mameet' => 5,
      'kerakoor' => 4,
      'ee' => 3,
      'ners' => 2,
      'jaj' => 1,
      'ktam' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 68;

