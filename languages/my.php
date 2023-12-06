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
  'လု' => true,
  'ငရဲ' => true,
  'တမံ' => true,
  'ဒစ်' => true,
  'ကြက်' => true,
  'စအို' => true,
  'တဏှာ' => true,
  'နာဇီ' => true,
  'လိင်' => true,
  'သုက်' => true,
  'အစေ့' => true,
  'depar' => true,
  'maylo' => true,
  'ခှေးမ' => true,
  'မြည်း' => true,
  'သေရော' => true,
  'ဒွိုက်' => true,
  'ရင်သား' => true,
  'သတောပဲ' => true,
  'ဂှေးစေ့' => true,
  'ညစ်ညမ်း' => true,
  'တင်းပါး' => true,
  'ဖောက်ရာ' => true,
  'ဘောလုံး' => true,
  'လူပျင်း' => true,
  'သုတ်ရည်' => true,
  'ခွေးမသား' => true,
  'မြည်းသည်' => true,
  'အနားကွပ်' => true,
  'အော်ဂဇင်' => true,
  'ခွေးကောင်' => true,
  'သေနာကောင်' => true,
  'သှေးပါသော' => true,
  'ကပ်ပယ်အိတ်' => true,
  'ကြက်sucker' => true,
  'ခွေးfucker' => true,
  'မိန်းမပေါ့' => true,
  'လူရှုပ်off' => true,
  'နှောင့်နှေး' => true,
  'မုဒိမ်းကျင့်' => true,
  'သုတ်ရည်လွှတ်' => true,
  'ကင်လုပ်ခိုင်း' => true,
  'သားလြှောခွငျး' => true,
  'အဓမ္မပြုကျင့်' => true,
  'မြည်းကိုfucker' => true,
  'ဘုရားသူကပြောတယ်' => true,
  'အစုတ်ပလုတ်ကောင်' => true,
  'ယောကျ်ားအင်္ဂါဇါတ်' => true,
  'မိန်းမအင်္ဂါအခေါင်း' => true,
  'လွန်စွာမှရက်စက်ကြမ်းကြုတ်' => true,
  'ဝတ်လစ်စလစ်ရုပ်ရေးခြွယ်ခြင်း' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gway',
      1 => 'htoot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gway' => 1,
      'htoot' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lee',
      1 => 'bel',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lee' => 1,
      'bel' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lee',
      1 => 'gon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lee' => 1,
      'gon' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lee',
      1 => 'sar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lee' => 1,
      'sar' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lee',
      1 => 'sok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lee' => 1,
      'sok' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qui',
      1 => 'kaung',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qui' => 1,
      'kaung' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qui',
      1 => 'ma',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qui' => 1,
      'ma' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sou',
      1 => 'ko',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sou' => 1,
      'ko' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'ကအဆင့်သတ်မှတ်ထားသော',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'ကအဆင့်သတ်မှတ်ထားသော' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zarni',
      1 => 'esker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zarni' => 1,
      'esker' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ကော်ဇော',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ကော်ဇော' => 1,
      'muncher' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'မိခင်',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'မိခင်' => 1,
      'fucker' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ball',
      1 => 'pyar',
      2 => 'ma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ball' => 2,
      'pyar' => 1,
      'ma' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'khant',
      1 => 'te',
      2 => 'kyi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'khant' => 2,
      'te' => 1,
      'kyi' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lee',
      1 => 'sok',
      2 => 'pay',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lee' => 2,
      'sok' => 1,
      'pay' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'loo',
      1 => 'ma',
      2 => 'thar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'loo' => 2,
      'ma' => 1,
      'thar' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'ma',
      2 => 'low',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'na' => 2,
      'ma' => 1,
      'low' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'par',
      1 => 'tal',
      2 => 'ma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'par' => 2,
      'tal' => 1,
      'ma' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sa',
      1 => 'pud',
      2 => 'sar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sa' => 2,
      'pud' => 1,
      'sar' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sou',
      1 => 'ko',
      2 => 'ma',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sou' => 2,
      'ko' => 1,
      'ma' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'min',
      1 => 'may',
      2 => 'sat',
      3 => 'pat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'min' => 3,
      'may' => 2,
      'sat' => 1,
      'pat' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'minn',
      1 => 'may',
      2 => 'minn',
      3 => 'lo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'minn' => 1,
      'may' => 2,
      'lo' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nea',
      1 => 'hmea',
      2 => 'sout',
      3 => 'put',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nea' => 3,
      'hmea' => 2,
      'sout' => 1,
      'put' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'phay',
      1 => 'loe',
      2 => 'ma',
      3 => 'thar',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'phay' => 3,
      'loe' => 2,
      'ma' => 1,
      'thar' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pin',
      1 => 'lo',
      2 => 'thar',
      3 => 'mar',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pin' => 3,
      'lo' => 2,
      'thar' => 1,
      'mar' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'saut',
      1 => 'pat',
      2 => 'ka',
      3 => 'lar',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'saut' => 3,
      'pat' => 2,
      'ka' => 1,
      'lar' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nea',
      1 => 'nga',
      2 => 'yea',
      3 => 'lee',
      4 => 'thwa',
      5 => 'sout',
      6 => 'liet',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'nea' => 6,
      'nga' => 5,
      'yea' => 4,
      'lee' => 3,
      'thwa' => 2,
      'sout' => 1,
      'liet' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ngar',
      1 => 'lee',
      2 => 'min',
      3 => 'tat',
      4 => 'poe',
      5 => 'kyi',
      6 => 'tal',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'ngar' => 6,
      'lee' => 5,
      'min' => 4,
      'tat' => 3,
      'poe' => 2,
      'kyi' => 1,
      'tal' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ngar',
      1 => 'min',
      2 => 'may',
      3 => 'ko',
      4 => 'loe',
      5 => 'chin',
      6 => 'tal',
    ),
    'badPhraseLength' => 7,
    'badPhraseArrayTable' => 
    array (
      'ngar' => 6,
      'min' => 5,
      'may' => 4,
      'ko' => 3,
      'loe' => 2,
      'chin' => 1,
      'tal' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'min',
      1 => 'may',
      2 => 'sat',
      3 => 'pat',
      4 => 'ko',
      5 => 'nite',
      6 => 'tar',
      7 => 'par',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'min' => 7,
      'may' => 6,
      'sat' => 5,
      'pat' => 4,
      'ko' => 3,
      'nite' => 2,
      'tar' => 1,
      'par' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 30;

