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
  'dupe' => true,
  'jaja' => true,
  'krma' => true,
  'kuja' => true,
  'kuje' => true,
  'ljut' => true,
  'maca' => true,
  'obod' => true,
  'sere' => true,
  'sisa' => true,
  'sise' => true,
  'ubod' => true,
  'usne' => true,
  'čmar' => true,
  'čvor' => true,
  'bijes' => true,
  'crnci' => true,
  'dabar' => true,
  'falus' => true,
  'fetiš' => true,
  'govno' => true,
  'grudi' => true,
  'hljeb' => true,
  'jeben' => true,
  'krvav' => true,
  'kurva' => true,
  'kutak' => true,
  'kučka' => true,
  'lincc' => true,
  'ljuti' => true,
  'nasip' => true,
  'nimfa' => true,
  'obruč' => true,
  'pakao' => true,
  'peder' => true,
  'pićka' => true,
  'rakun' => true,
  'sjeme' => true,
  'trzaj' => true,
  'uboda' => true,
  'vijak' => true,
  'šupak' => true,
  'šupci' => true,
  'analan' => true,
  'guzica' => true,
  'jebani' => true,
  'jebati' => true,
  'jebeni' => true,
  'jebeno' => true,
  'jebiga' => true,
  'jebote' => true,
  'kopile' => true,
  'kreten' => true,
  'kundak' => true,
  'kvragu' => true,
  'odjebi' => true,
  'orgije' => true,
  'pederi' => true,
  'pišati' => true,
  'podići' => true,
  'požuda' => true,
  'rektum' => true,
  'rozeta' => true,
  'rožnat' => true,
  'ručice' => true,
  'sodoma' => true,
  'sranje' => true,
  'testis' => true,
  'uretra' => true,
  'usrani' => true,
  'voajer' => true,
  'zoofil' => true,
  'abortus' => true,
  'crnčuga' => true,
  'felacio' => true,
  'karanje' => true,
  'kurvice' => true,
  'lučenje' => true,
  'mokraća' => true,
  'montaža' => true,
  'orgazam' => true,
  'orgazme' => true,
  'pedofil' => true,
  'pičkice' => true,
  'proklet' => true,
  'sadista' => true,
  'sadizam' => true,
  'sjebano' => true,
  'sjenica' => true,
  'skrotum' => true,
  'čuperak' => true,
  'hebefili' => true,
  'hrabrost' => true,
  'jebačica' => true,
  'klitoris' => true,
  'magaraca' => true,
  'mazohist' => true,
  'nasilnik' => true,
  'orgazama' => true,
  'pasjebač' => true,
  'prokleto' => true,
  'silovana' => true,
  'sodomija' => true,
  'stidnica' => true,
  'tumaralo' => true,
  'usporiti' => true,
  'zvjerski' => true,
  'abortuari' => true,
  'bradavica' => true,
  'drkadžija' => true,
  'ejakulati' => true,
  'ejakulira' => true,
  'izopačiti' => true,
  'lastavica' => true,
  'linčovati' => true,
  'maternica' => true,
  'mazohista' => true,
  'prodirati' => true,
  'silovanje' => true,
  'zoofilija' => true,
  'abortusist' => true,
  'djevojčura' => true,
  'ejakulirao' => true,
  'hebefilija' => true,
  'izbacivati' => true,
  'masturbira' => true,
  'nacistički' => true,
  'pedofilija' => true,
  'pizdolizac' => true,
  'prodiranje' => true,
  'silovatelj' => true,
  'sinofakuja' => true,
  'stražnjica' => true,
  'ejakulacija' => true,
  'ejakulacije' => true,
  'ejakulirana' => true,
  'ejakulirati' => true,
  'hebefilična' => true,
  'incestuozno' => true,
  'izopačenost' => true,
  'nimfomanija' => true,
  'prostitutka' => true,
  'bestijalnost' => true,
  'masturbacija' => true,
  'masturbirati' => true,
  'panseksualac' => true,
  'penisdojilja' => true,
  'pornografija' => true,
  'sodomizirano' => true,
  'ambiseksualac' => true,
  'amboseksualac' => true,
  'magaracfucker' => true,
  'samodopadnost' => true,
  'akrotomofilija' => true,
  'ambiseksualnost' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dobra',
      1 => 'picka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dobra' => 1,
      'picka' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'glupi',
      1 => 'majmune',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'glupi' => 1,
      'majmune' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'idi',
      1 => 'do',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'idi' => 1,
      'do' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebena',
      1 => 'seljacina',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebena' => 1,
      'seljacina' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebi',
      1 => 'ga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebi' => 1,
      'ga' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebi',
      1 => 'se',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jebi' => 1,
      'se' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jedi',
      1 => 'govna',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jedi' => 1,
      'govna' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jedi',
      1 => 'kurac',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jedi' => 1,
      'kurac' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurvin',
      1 => 'sin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kurvin' => 1,
      'sin' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurvin',
      1 => 'sine',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kurvin' => 1,
      'sine' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pakirač',
      1 => 'gluposti',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pakirač' => 1,
      'gluposti' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pas',
      1 => 'mater',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pas' => 1,
      'mater' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'smrdljiva',
      1 => 'picka',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'smrdljiva' => 1,
      'picka' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tepih',
      1 => 'muncher',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tepih' => 1,
      'muncher' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'ocijenjeno',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'ocijenjeno' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bog',
      1 => 'te',
      2 => 'jebo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bog' => 2,
      'te' => 1,
      'jebo' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boli',
      1 => 'me',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'boli' => 2,
      'me' => 1,
      'kurac' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'djava',
      1 => 'te',
      2 => 'odnija',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'djava' => 2,
      'te' => 1,
      'odnija' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebal',
      1 => 'te',
      2 => 'bik',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebal' => 2,
      'te' => 1,
      'bik' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebao',
      1 => 'ga',
      2 => 'japanac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebao' => 2,
      'ga' => 1,
      'japanac' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'te',
      2 => 'glupa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'te' => 1,
      'glupa' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'boga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'boga' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'kru',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'kru' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'kruh',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'kruh' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'krv',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'krv' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mater',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'mater' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'oca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'oca' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'pleme',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'pleme' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'strinu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 2,
      'ti' => 1,
      'strinu' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebi',
      1 => 'se',
      2 => 'pitcka',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebi' => 2,
      'se' => 1,
      'pitcka' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebi',
      1 => 'si',
      2 => 'mater',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebi' => 2,
      'si' => 1,
      'mater' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'sliku',
      2 => 'svoju',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'sliku' => 1,
      'svoju' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'dedo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'te' => 1,
      'dedo' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'ja',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'te' => 1,
      'ja' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'te',
      2 => 'patak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 2,
      'te' => 1,
      'patak' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurac',
      1 => 'od',
      2 => 'ovce',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kurac' => 2,
      'od' => 1,
      'ovce' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kurvo',
      1 => 'jedna',
      2 => 'izlizana',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kurvo' => 2,
      'jedna' => 1,
      'izlizana' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mater',
      1 => 'te',
      2 => 'sahranila',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mater' => 2,
      'te' => 1,
      'sahranila' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popusi',
      1 => 'mi',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'popusi' => 2,
      'mi' => 1,
      'kurac' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popuši',
      1 => 'mi',
      2 => 'kurac',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'popuši' => 2,
      'mi' => 1,
      'kurac' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zajebi',
      1 => 'to',
      2 => 'stari',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'zajebi' => 2,
      'to' => 1,
      'stari' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'å',
      1 => 'ugavi',
      2 => 'cigo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'å' => 2,
      'ugavi' => 1,
      'cigo' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'djava',
      1 => 'ti',
      2 => 'glavu',
      3 => 'izija',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'djava' => 3,
      'ti' => 2,
      'glavu' => 1,
      'izija' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'li',
      2 => 'ti',
      3 => 'mamicu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'li' => 2,
      'ti' => 1,
      'mamicu' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'cicu',
      3 => 'materinu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'cicu' => 1,
      'materinu' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'krvavo',
      3 => 'jaje',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'krvavo' => 1,
      'jaje' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'milijun',
      3 => 'bogova',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'milijun' => 1,
      'bogova' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mliko',
      3 => 'materino',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'mliko' => 1,
      'materino' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mrtvu',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 3,
      'ti' => 2,
      'mrtvu' => 1,
      'mater' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'bog',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'bog' => 1,
      'mater' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'isus',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'isus' => 1,
      'mater' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'konj',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'konj' => 1,
      'mater' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'pas',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'pas' => 1,
      'mater' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'pas',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'pas' => 1,
      'mater' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'vrag',
      3 => 'mater',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 3,
      'ti' => 2,
      'vrag' => 1,
      'mater' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jedi',
      1 => 'govna',
      2 => 'pusi',
      3 => 'kurac',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'jedi' => 3,
      'govna' => 2,
      'pusi' => 1,
      'kurac' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ko',
      1 => 'te',
      2 => 'jebe',
      3 => 'glupane',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ko' => 3,
      'te' => 2,
      'jebe' => 1,
      'glupane' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ma',
      1 => 'tko',
      2 => 'te',
      3 => 'jebe',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ma' => 3,
      'tko' => 2,
      'te' => 1,
      'jebe' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mars',
      1 => 'u',
      2 => 'picku',
      3 => 'materinu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mars' => 3,
      'u' => 2,
      'picku' => 1,
      'materinu' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'alatki',
      2 => 'te',
      3 => 'nosam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'alatki' => 2,
      'te' => 1,
      'nosam' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nabijem',
      1 => 'te',
      2 => 'na',
      3 => 'kurac',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'nabijem' => 3,
      'te' => 2,
      'na' => 1,
      'kurac' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'poljubi',
      1 => 'me',
      2 => 'u',
      3 => 'guzicu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'poljubi' => 3,
      'me' => 2,
      'u' => 1,
      'guzicu' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'popusi',
      1 => 'mi',
      2 => 'ga',
      3 => 'pizdo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'popusi' => 3,
      'mi' => 2,
      'ga' => 1,
      'pizdo' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pusi',
      1 => 'duvaj',
      2 => 'ovce',
      3 => 'cuvaj',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pusi' => 3,
      'duvaj' => 2,
      'ovce' => 1,
      'cuvaj' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rane',
      1 => 'te',
      2 => 'zaletile',
      3 => 'ljute',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'rane' => 3,
      'te' => 2,
      'zaletile' => 1,
      'ljute' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vrag',
      1 => 'ti',
      2 => 'kosti',
      3 => 'glodao',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'vrag' => 3,
      'ti' => 2,
      'kosti' => 1,
      'glodao' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dabogda',
      1 => 'ti',
      2 => 'se',
      3 => 'ruke',
      4 => 'osušile',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'dabogda' => 4,
      'ti' => 3,
      'se' => 2,
      'ruke' => 1,
      'osušile' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'krv',
      3 => 'mlade',
      4 => 'rode',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'krv' => 2,
      'mlade' => 1,
      'rode' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'mater',
      3 => 'u',
      4 => 'usta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'mater' => 2,
      'u' => 1,
      'usta' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'sve',
      3 => 'po',
      4 => 'spisku',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 4,
      'ti' => 3,
      'sve' => 2,
      'po' => 1,
      'spisku' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'bog',
      3 => 'mrtvu',
      4 => 'majku',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 4,
      'ti' => 3,
      'bog' => 2,
      'mrtvu' => 1,
      'majku' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'bog',
      3 => 'mrtvu',
      4 => 'mater',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 4,
      'ti' => 3,
      'bog' => 2,
      'mrtvu' => 1,
      'mater' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebo',
      1 => 'ti',
      2 => 'ja',
      3 => 'mater',
      4 => 'glupu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'jebo' => 4,
      'ti' => 3,
      'ja' => 2,
      'mater' => 1,
      'glupu' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ko',
      1 => 'te',
      2 => 'napravija',
      3 => 'tako',
      4 => 'glupa',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ko' => 4,
      'te' => 3,
      'napravija' => 2,
      'tako' => 1,
      'glupa' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ko',
      1 => 'ti',
      2 => 'je',
      3 => 'cha',
      4 => 'cha',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ko' => 4,
      'ti' => 3,
      'je' => 2,
      'cha' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'piã',
      1 => 'ka',
      2 => 'ti',
      3 => 'se',
      4 => 'zgadila',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'piã' => 4,
      'ka' => 3,
      'ti' => 2,
      'se' => 1,
      'zgadila' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tvoja',
      1 => 'sestre',
      2 => 'ima',
      3 => 'velike',
      4 => 'kurac',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tvoja' => 4,
      'sestre' => 3,
      'ima' => 2,
      'velike' => 1,
      'kurac' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zakachis',
      1 => 'mi',
      2 => 'se',
      3 => 'za',
      4 => 'kitu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'zakachis' => 4,
      'mi' => 3,
      'se' => 2,
      'za' => 1,
      'kitu' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dabog',
      1 => 'da',
      2 => 'ti',
      3 => 'se',
      4 => 'noge',
      5 => 'osušile',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'dabog' => 5,
      'da' => 4,
      'ti' => 3,
      'se' => 2,
      'noge' => 1,
      'osušile' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jebem',
      1 => 'ti',
      2 => 'smrt',
      3 => 'do',
      4 => 'smrti',
      5 => 'pa',
      6 => 'ne',
      7 => 'mogu',
      8 => 'umrijeti',
    ),
    'badPhraseLength' => 9,
    'badPhraseArrayTable' => 
    array (
      'jebem' => 8,
      'ti' => 7,
      'smrt' => 6,
      'do' => 5,
      'smrti' => 4,
      'pa' => 3,
      'ne' => 2,
      'mogu' => 1,
      'umrijeti' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 80;

