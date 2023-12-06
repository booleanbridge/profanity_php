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
  'bou' => true,
  'cur' => true,
  'fut' => true,
  'iad' => true,
  'koi' => true,
  'piş' => true,
  'beli' => true,
  'bile' => true,
  'cacă' => true,
  'chec' => true,
  'colț' => true,
  'labă' => true,
  'pișa' => true,
  'pulă' => true,
  'rect' => true,
  'snop' => true,
  'suge' => true,
  'sugi' => true,
  'uter' => true,
  'vacă' => true,
  'viol' => true,
  'ţâţe' => true,
  'buton' => true,
  'coaie' => true,
  'cocoş' => true,
  'covor' => true,
  'curaj' => true,
  'curva' => true,
  'curve' => true,
  'curvă' => true,
  'câcat' => true,
  'cârpă' => true,
  'căcat' => true,
  'căţea' => true,
  'falus' => true,
  'furie' => true,
  'futui' => true,
  'idiot' => true,
  'jantă' => true,
  'jegos' => true,
  'loden' => true,
  'muist' => true,
  'negru' => true,
  'nimfă' => true,
  'orgie' => true,
  'orgii' => true,
  'peşte' => true,
  'pizde' => true,
  'pizdă' => true,
  'prost' => true,
  'rahat' => true,
  'sadic' => true,
  'sfârc' => true,
  'sânii' => true,
  'tarfa' => true,
  'vagin' => true,
  'cioroi' => true,
  'curule' => true,
  'dement' => true,
  'egoism' => true,
  'flanșă' => true,
  'frisca' => true,
  'futute' => true,
  'gurist' => true,
  'linşaj' => true,
  'mârlan' => true,
  'nazist' => true,
  'pisată' => true,
  'rozetă' => true,
  'sloboz' => true,
  'smulge' => true,
  'sodoma' => true,
  'spermă' => true,
  'trăgea' => true,
  'tzatze' => true,
  'tâmpit' => true,
  'uretra' => true,
  'urinar' => true,
  'violat' => true,
  'zoofil' => true,
  'butoane' => true,
  'cocalar' => true,
  'dorință' => true,
  'ejacula' => true,
  'erecție' => true,
  'escortă' => true,
  'excitat' => true,
  'exclama' => true,
  'felatie' => true,
  'felație' => true,
  'gaozari' => true,
  'hebefil' => true,
  'inpulit' => true,
  'labagiu' => true,
  'lingema' => true,
  'ofticat' => true,
  'orgasme' => true,
  'pedofil' => true,
  'pervers' => true,
  'pițigoi' => true,
  'poponar' => true,
  'pulaman' => true,
  'sodomie' => true,
  'abortuar' => true,
  'avortist' => true,
  'avorturi' => true,
  'balconar' => true,
  'bulangiu' => true,
  'clinchet' => true,
  'corupție' => true,
  'corvoadă' => true,
  'cățelele' => true,
  'dildouri' => true,
  'dracului' => true,
  'ejaculat' => true,
  'hebefili' => true,
  'idiotule' => true,
  'labiilor' => true,
  'martalog' => true,
  'panarama' => true,
  'panaramă' => true,
  'pizdălău' => true,
  'poponari' => true,
  'porcarie' => true,
  'păsărică' => true,
  'pătrunde' => true,
  'savarina' => true,
  'sfarcuri' => true,
  'sângeros' => true,
  'testicul' => true,
  'vagabond' => true,
  'vertical' => true,
  'violator' => true,
  'zdreanta' => true,
  'zdreanţă' => true,
  'zoofilie' => true,
  'îmbinare' => true,
  'întârzia' => true,
  'șarlatan' => true,
  'cocoșilor' => true,
  'ejaculare' => true,
  'ejaculari' => true,
  'ejaculări' => true,
  'fundurile' => true,
  'hebefilie' => true,
  'istovitor' => true,
  'nenorocit' => true,
  'opritoare' => true,
  'pedofilie' => true,
  'penetrare' => true,
  'rândunică' => true,
  'smucitură' => true,
  'sodomizat' => true,
  'ejaculeaza' => true,
  'ejaculează' => true,
  'fofoloanca' => true,
  'fundfucker' => true,
  'insurubare' => true,
  'intepaturi' => true,
  'lingurista' => true,
  'masturbare' => true,
  'masturbezi' => true,
  'nimfomanie' => true,
  'rapanosule' => true,
  'înțepătură' => true,
  'cocoșfraier' => true,
  'câinefucker' => true,
  'descreierat' => true,
  'futangiilor' => true,
  'incestuoasă' => true,
  'masturbeaza' => true,
  'pornografie' => true,
  'prostituată' => true,
  'transexuali' => true,
  'bestialitate' => true,
  'ciocănitoare' => true,
  'nenorocitule' => true,
  'smuciturăoff' => true,
  'acrotomofilie' => true,
  'spermatozoizi' => true,
  'ambisexualitate' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'belimiai',
      1 => 'pula',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'belimiai' => 1,
      'pula' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'daten',
      1 => 'sange',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'daten' => 1,
      'sange' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dai',
      1 => 'dracu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dai' => 1,
      'dracu' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'de',
      1 => 'pulărie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'de' => 1,
      'pulărie' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dute',
      1 => 'dracu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dute' => 1,
      'dracu' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'flavia',
      1 => 'brandabur',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'flavia' => 1,
      'brandabur' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'futate',
      1 => 'cangurii',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'futate' => 1,
      'cangurii' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututen',
      1 => 'gura',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fututen' => 1,
      'gura' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'halimiai',
      1 => 'pizda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'halimiai' => 1,
      'pizda' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'dracu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'la' => 1,
      'dracu' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'naiba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'la' => 1,
      'naiba' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'nenorocită',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'nenorocită' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancamiai',
      1 => 'coaiele',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancamiai' => 1,
      'coaiele' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancamiai',
      1 => 'curu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancamiai' => 1,
      'curu' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancamiai',
      1 => 'pula',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancamiai' => 1,
      'pula' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancamiai',
      1 => 'slobozul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancamiai' => 1,
      'slobozul' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancamiai',
      1 => 'pizda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancamiai' => 1,
      'pizda' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancamiai',
      1 => 'pula',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancamiai' => 1,
      'pula' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancatasi',
      1 => 'curu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancatasi' => 1,
      'curu' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mancatasi',
      1 => 'pizda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mancatasi' => 1,
      'pizda' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'material',
      1 => 'seminal',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'material' => 1,
      'seminal' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mortii',
      1 => 'matii',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mortii' => 1,
      'matii' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pisatiai',
      1 => 'tamponul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pisatiai' => 1,
      'tamponul' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'jegoasa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 1,
      'jegoasa' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'matii',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 1,
      'matii' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pizda',
      1 => 'proasta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pizda' => 1,
      'proasta' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slobozitias',
      1 => 'fata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'slobozitias' => 1,
      'fata' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'evaluat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'evaluat' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'zeual',
      1 => 'naibii',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'zeual' => 1,
      'naibii' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'avortalai',
      1 => 'pe',
      2 => 'fratetu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'avortalai' => 2,
      'pe' => 1,
      'fratetu' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bagateas',
      1 => 'in',
      2 => 'mormant',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bagateas' => 2,
      'in' => 1,
      'mormant' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boratias',
      1 => 'pulan',
      2 => 'gat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'boratias' => 2,
      'pulan' => 1,
      'gat' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cacat',
      1 => 'cu',
      2 => 'ochi',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cacat' => 2,
      'cu' => 1,
      'ochi' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'du',
      1 => 'te',
      2 => 'dracu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'du' => 2,
      'te' => 1,
      'dracu' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duten',
      1 => 'pizda',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'duten' => 2,
      'pizda' => 1,
      'matii' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duten',
      1 => 'mortii',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'duten' => 2,
      'mortii' => 1,
      'matii' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duten',
      1 => 'pula',
      2 => 'mea',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'duten' => 2,
      'pula' => 1,
      'mea' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duten',
      1 => 'pula',
      2 => 'calului',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'duten' => 2,
      'pula' => 1,
      'calului' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'sicriu',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'sicriu' => 1,
      'matii' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'biserica',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'biserica' => 1,
      'matii' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'ceapa',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'ceapa' => 1,
      'matii' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'coliva',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'coliva' => 1,
      'matii' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'cristosu',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'cristosu' => 1,
      'matii' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'crucea',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'crucea' => 1,
      'matii' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'dumnezeii',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'dumnezeii' => 1,
      'matii' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'gura',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'gura' => 1,
      'matii' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'mortii',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'mortii' => 1,
      'matii' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'mortii',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'mortii' => 1,
      'matii' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'pastele',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'pastele' => 1,
      'matii' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'soarele',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'soarele' => 1,
      'matii' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fututi',
      1 => 'rasa',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fututi' => 2,
      'rasa' => 1,
      'matii' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'intrerupere',
      1 => 'de',
      2 => 'sarcina',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'intrerupere' => 2,
      'de' => 1,
      'sarcina' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'luamiai',
      1 => 'coaielen',
      2 => 'gura',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'luamiai' => 2,
      'coaielen' => 1,
      'gura' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'luatias',
      1 => 'neamun',
      2 => 'pula',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'luatias' => 2,
      'neamun' => 1,
      'pula' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'manuel',
      1 => 'milfuti',
      2 => 'hojda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'manuel' => 2,
      'milfuti' => 1,
      'hojda' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mori',
      1 => 'in',
      2 => 'cancer',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mori' => 2,
      'in' => 1,
      'cancer' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'proptitias',
      1 => 'pulan',
      2 => 'gaoz',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'proptitias' => 2,
      'pulan' => 1,
      'gaoz' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sugator',
      1 => 'de',
      2 => 'pwla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sugator' => 2,
      'de' => 1,
      'pwla' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tuti',
      1 => 'ceaiul',
      2 => 'matii',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tuti' => 2,
      'ceaiul' => 1,
      'matii' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bag',
      1 => 'pulan',
      2 => 'gatu',
      3 => 'tau',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bag' => 3,
      'pulan' => 2,
      'gatu' => 1,
      'tau' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bagamias',
      1 => 'pula',
      2 => 'in',
      3 => 'mata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bagamias' => 3,
      'pula' => 2,
      'in' => 1,
      'mata' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bagamiash',
      1 => 'pula',
      2 => 'in',
      3 => 'tine',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bagamiash' => 3,
      'pula' => 2,
      'in' => 1,
      'tine' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bagamias',
      1 => 'pula',
      2 => 'in',
      3 => 'mata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bagamias' => 3,
      'pula' => 2,
      'in' => 1,
      'mata' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cacamas',
      1 => 'in',
      2 => 'gura',
      3 => 'ta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'cacamas' => 3,
      'in' => 2,
      'gura' => 1,
      'ta' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'da',
      1 => 'te',
      2 => 'n',
      3 => 'sange',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'da' => 3,
      'te' => 2,
      'n' => 1,
      'sange' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dute',
      1 => 'frate',
      2 => 'si',
      3 => 'impuscate',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'dute' => 3,
      'frate' => 2,
      'si' => 1,
      'impuscate' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'esti',
      1 => 'o',
      2 => 'laba',
      3 => 'trista',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'esti' => 3,
      'o' => 2,
      'laba' => 1,
      'trista' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lingeameai',
      1 => 'cateaua',
      2 => 'in',
      3 => 'pizda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'lingeameai' => 3,
      'cateaua' => 2,
      'in' => 1,
      'pizda' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'luatias',
      1 => 'mortii',
      2 => 'in',
      3 => 'pula',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'luatias' => 3,
      'mortii' => 2,
      'in' => 1,
      'pula' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mars',
      1 => 'in',
      2 => 'pula',
      3 => 'mea',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mars' => 3,
      'in' => 2,
      'pula' => 1,
      'mea' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'neachate',
      1 => 'pe',
      2 => 'o',
      3 => 'pula',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'neachate' => 3,
      'pe' => 2,
      'o' => 1,
      'pula' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'proptimiasi',
      1 => 'bastonul',
      2 => 'de',
      3 => 'mata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'proptimiasi' => 3,
      'bastonul' => 2,
      'de' => 1,
      'mata' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slobozimas',
      1 => 'pe',
      2 => 'mormantu',
      3 => 'matii',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'slobozimas' => 3,
      'pe' => 2,
      'mormantu' => 1,
      'matii' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slobozitear',
      1 => 'lumea',
      2 => 'in',
      3 => 'fata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'slobozitear' => 3,
      'lumea' => 2,
      'in' => 1,
      'fata' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'slobozitear',
      1 => 'lumea',
      2 => 'in',
      3 => 'gura',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'slobozitear' => 3,
      'lumea' => 2,
      'in' => 1,
      'gura' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'statiar',
      1 => 'flocii',
      2 => 'matiin',
      3 => 'gat',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'statiar' => 3,
      'flocii' => 2,
      'matiin' => 1,
      'gat' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'ling',
      2 => 'in',
      3 => 'pizda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'te' => 3,
      'ling' => 2,
      'in' => 1,
      'pizda' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'trag',
      2 => 'in',
      3 => 'pula',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'te' => 3,
      'trag' => 2,
      'in' => 1,
      'pula' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ti=o',
      1 => 'dau',
      2 => 'la',
      3 => 'buci',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ti=o' => 3,
      'dau' => 2,
      'la' => 1,
      'buci' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bagamias',
      1 => 'pula',
      2 => 'in',
      3 => 'fata',
      4 => 'ta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'bagamias' => 4,
      'pula' => 3,
      'in' => 2,
      'fata' => 1,
      'ta' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'inecateai',
      1 => 'cu',
      2 => 'sperma',
      3 => 'lu',
      4 => 'tactu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'inecateai' => 4,
      'cu' => 3,
      'sperma' => 2,
      'lu' => 1,
      'tactu' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'las',
      1 => 'copacii',
      2 => 'sa',
      3 => 'te',
      4 => 'futa',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'las' => 4,
      'copacii' => 3,
      'sa' => 2,
      'te' => 1,
      'futa' => 0,
    ),
  ),
  82 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pula',
      1 => 'calului',
      2 => 'in',
      3 => 'virful',
      4 => 'dealului',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'pula' => 4,
      'calului' => 3,
      'in' => 2,
      'virful' => 1,
      'dealului' => 0,
    ),
  ),
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sa',
      1 => 'iti',
      2 => 'dau',
      3 => 'la',
      4 => 'muie',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'sa' => 4,
      'iti' => 3,
      'dau' => 2,
      'la' => 1,
      'muie' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sa',
      1 => 'te',
      2 => 'pis',
      3 => 'in',
      4 => 'freza',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'sa' => 4,
      'te' => 3,
      'pis' => 2,
      'in' => 1,
      'freza' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sati',
      1 => 'dau',
      2 => 'muie',
      3 => 'cu',
      4 => 'lopata',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'sati' => 4,
      'dau' => 3,
      'muie' => 2,
      'cu' => 1,
      'lopata' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sati',
      1 => 'iau',
      2 => 'familia',
      3 => 'in',
      4 => 'pula',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'sati' => 4,
      'iau' => 3,
      'familia' => 2,
      'in' => 1,
      'pula' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sati',
      1 => 'iau',
      2 => 'mortii',
      3 => 'la',
      4 => 'baieram',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'sati' => 4,
      'iau' => 3,
      'mortii' => 2,
      'la' => 1,
      'baieram' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sati',
      1 => 'scot',
      2 => 'ochii',
      3 => 'cu',
      4 => 'pula',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'sati' => 4,
      'scot' => 3,
      'ochii' => 2,
      'cu' => 1,
      'pula' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sa',
      1 => 'ti',
      2 => 'dau',
      3 => 'muie',
      4 => 'cu',
      5 => 'galeata',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'sa' => 5,
      'ti' => 4,
      'dau' => 3,
      'muie' => 2,
      'cu' => 1,
      'galeata' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sami',
      1 => 'tarai',
      2 => 'coaiele',
      3 => 'pe',
      4 => 'fatza',
      5 => 'ta',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'sami' => 5,
      'tarai' => 4,
      'coaiele' => 3,
      'pe' => 2,
      'fatza' => 1,
      'ta' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'spalate',
      1 => 'pe',
      2 => 'dinti',
      3 => 'cu',
      4 => 'slobozii',
      5 => 'mei',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'spalate' => 5,
      'pe' => 4,
      'dinti' => 3,
      'cu' => 2,
      'slobozii' => 1,
      'mei' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ti',
      1 => 'sa',
      2 => 'copacii',
      3 => 'sa',
      4 => 'ta',
      5 => 'futu',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'ti' => 5,
      'sa' => 2,
      'copacii' => 3,
      'ta' => 1,
      'futu' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 93;

