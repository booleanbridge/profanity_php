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
  'pum' => true,
  'vit' => true,
  'diga' => true,
  'haqq' => true,
  'kelb' => true,
  'loxx' => true,
  'pajp' => true,
  'pene' => true,
  'pumi' => true,
  'qarn' => true,
  'sess' => true,
  'utru' => true,
  'ċpar' => true,
  'ħmar' => true,
  'ħmir' => true,
  'abort' => true,
  'anali' => true,
  'harra' => true,
  'isdra' => true,
  'kamin' => true,
  'kelba' => true,
  'ostja' => true,
  'pufta' => true,
  'tibla' => true,
  'tħobb' => true,
  'ħanek' => true,
  'ħażin' => true,
  'ħmieġ' => true,
  'bagħal' => true,
  'blalen' => true,
  'infern' => true,
  'inċest' => true,
  'ixkora' => true,
  'orġija' => true,
  'orġiji' => true,
  'stupru' => true,
  'uretra' => true,
  'vaġina' => true,
  'beżżula' => true,
  'eġakula' => true,
  'ilostja' => true,
  'imdemmi' => true,
  'nażista' => true,
  'orgażmi' => true,
  'orgażmu' => true,
  'sriedak' => true,
  'stuprat' => true,
  'tħawwir' => true,
  'abortivi' => true,
  'bestjali' => true,
  'egotiżmu' => true,
  'eġakulat' => true,
  'imbuttat' => true,
  'imfarrak' => true,
  'imqaxxar' => true,
  'inċestuż' => true,
  'klitoris' => true,
  'pedofelu' => true,
  'sodomija' => true,
  'ħaffiefa' => true,
  'abortarji' => true,
  'abortista' => true,
  'erdahhuli' => true,
  'erezzjoni' => true,
  'eġakulati' => true,
  'kkritikat' => true,
  'testikoli' => true,
  'bestjalità' => true,
  'pedofelija' => true,
  'prostituta' => true,
  'purcinella' => true,
  'ħmarfucker' => true,
  'ittestikoli' => true,
  'jippenetraw' => true,
  'perverżjoni' => true,
  'testikolari' => true,
  'ambisesswali' => true,
  'ambosesswali' => true,
  'bestjonalità' => true,
  'pornografija' => true,
  'eġakulazzjoni' => true,
  'penetrazzjoni' => true,
  'masturbazzjoni' => true,
  'lambisesswalità' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'assedju',
      1 => 'heil',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'assedju' => 1,
      'heil' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'busli',
      1 => 'sormi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'busli' => 1,
      'sormi' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dahhlu',
      1 => 'fsormok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dahhlu' => 1,
      'fsormok' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'damned',
      1 => 'alla',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'damned' => 1,
      'alla' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'kruhitek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 1,
      'kruhitek' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'ommok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 1,
      'ommok' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'qalbek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 1,
      'qalbek' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'ruhek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 1,
      'ruhek' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fox',
      1 => 'kollox',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fox' => 1,
      'kollox' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hudu',
      1 => 'fsormok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hudu' => 1,
      'fsormok' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'iben',
      1 => 'talkelba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'iben' => 1,
      'talkelba' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ilaqli',
      1 => 'lbajd',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ilaqli' => 1,
      'lbajd' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'klieb',
      1 => 'ilbaħar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'klieb' => 1,
      'ilbaħar' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'liba',
      1 => 'maquda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'liba' => 1,
      'maquda' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muncher',
      1 => 'tattwapet',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muncher' => 1,
      'tattwapet' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mur',
      1 => 'inhexa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mur' => 1,
      'inhexa' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mur',
      1 => 'tnejjek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mur' => 1,
      'tnejjek' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nahxilek',
      1 => 'lommok',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'nahxilek' => 1,
      'lommok' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'omm',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'omm' => 1,
      'fucker' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qahba',
      1 => 'fxalata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qahba' => 1,
      'fxalata' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qisek',
      1 => 'zobbi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'qisek' => 1,
      'zobbi' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'ratata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'ratata' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xghala',
      1 => 'biebi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xghala' => 1,
      'biebi' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xghala',
      1 => 'zobbi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xghala' => 1,
      'zobbi' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'xizzobb',
      1 => 'trid',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'xizzobb' => 1,
      'trid' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fghoxx',
      1 => 'kemm',
      2 => 'ghandek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fghoxx' => 2,
      'kemm' => 1,
      'ghandek' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'iddundjan',
      2 => 'alla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 2,
      'iddundjan' => 1,
      'alla' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'madre',
      2 => 'teresa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 2,
      'madre' => 1,
      'teresa' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fóxx',
      1 => 'ommok',
      2 => 'liba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fóxx' => 2,
      'ommok' => 1,
      'liba' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ja',
      1 => 'haga',
      2 => 'mgandra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ja' => 2,
      'haga' => 1,
      'mgandra' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ja',
      1 => 'liba',
      2 => 'hadra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ja' => 2,
      'liba' => 1,
      'hadra' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'liba',
      1 => 'pron',
      2 => 'leeba',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'liba' => 2,
      'pron' => 1,
      'leeba' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mur',
      1 => 'hudu',
      2 => 'fsormok',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mur' => 2,
      'hudu' => 1,
      'fsormok' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'dak',
      2 => 'larbi',
      3 => 'missierek',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 3,
      'dak' => 2,
      'larbi' => 1,
      'missierek' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'il',
      2 => 'maxtura',
      3 => 'talla',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 3,
      'il' => 2,
      'maxtura' => 1,
      'talla' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'illiba',
      2 => 'msalba',
      3 => 'talla',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 3,
      'illiba' => 2,
      'msalba' => 1,
      'talla' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ilaqli',
      1 => 'zobbi',
      2 => 'kollu',
      3 => 'liba',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ilaqli' => 3,
      'zobbi' => 2,
      'kollu' => 1,
      'liba' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'busli',
      1 => 'il',
      2 => 'bajd',
      3 => 'min',
      4 => 'wara',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'busli' => 4,
      'il' => 3,
      'bajd' => 2,
      'min' => 1,
      'wara' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ejja',
      1 => 'nahxu',
      2 => 'lill',
      3 => 'anna',
      4 => 'fsorma',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'ejja' => 4,
      'nahxu' => 3,
      'lill' => 2,
      'anna' => 1,
      'fsorma' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'dik',
      2 => 'il',
      3 => 'qahba',
      4 => 'ommok',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 4,
      'dik' => 3,
      'il' => 2,
      'qahba' => 1,
      'ommok' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'illiba',
      2 => 'li',
      3 => 'xorbot',
      4 => 'ommok',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 4,
      'illiba' => 3,
      'li' => 2,
      'xorbot' => 1,
      'ommok' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'dawk',
      2 => 'illiba',
      3 => 'moffa',
      4 => 'talfurjana',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 4,
      'dawk' => 3,
      'illiba' => 2,
      'moffa' => 1,
      'talfurjana' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'dawk',
      2 => 'illiba',
      3 => 'tal',
      4 => 'belt',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 4,
      'dawk' => 3,
      'illiba' => 2,
      'tal' => 1,
      'belt' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'materja',
      1 => 'ddelek',
      2 => 'ta',
      3 => 'mal',
      4 => 'garetta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'materja' => 4,
      'ddelek' => 3,
      'ta' => 2,
      'mal' => 1,
      'garetta' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'dik',
      2 => 'ilqahba',
      3 => 'li',
      4 => 'ghandkom',
      5 => 'tallaqxija',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 5,
      'dik' => 4,
      'ilqahba' => 3,
      'li' => 2,
      'ghandkom' => 1,
      'tallaqxija' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foxx',
      1 => 'dak',
      2 => 'ilgemel',
      3 => 'li',
      4 => 'ghandkom',
      5 => 'ha',
      6 => 'demel',
      7 => 'immufati',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'foxx' => 7,
      'dak' => 6,
      'ilgemel' => 5,
      'li' => 4,
      'ghandkom' => 3,
      'ha' => 2,
      'demel' => 1,
      'immufati' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 46;

