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
  'ms' => true,
  'ajg' => true,
  'asu' => true,
  'bot' => true,
  'cct' => true,
  'eek' => true,
  'ewe' => true,
  'fak' => true,
  'mek' => true,
  'pea' => true,
  'tae' => true,
  'tai' => true,
  'tol' => true,
  'vcs' => true,
  'alay' => true,
  'babi' => true,
  'bani' => true,
  'beer' => true,
  'bego' => true,
  'bgsd' => true,
  'biji' => true,
  'bisu' => true,
  'bodo' => true,
  'bola' => true,
  'bool' => true,
  'buta' => true,
  'cabo' => true,
  'coli' => true,
  'crot' => true,
  'cuki' => true,
  'cumi' => true,
  'cupu' => true,
  'edan' => true,
  'eneg' => true,
  'enti' => true,
  'fakk' => true,
  'gblk' => true,
  'gelo' => true,
  'gila' => true,
  'hina' => true,
  'inex' => true,
  'itil' => true,
  'judi' => true,
  'kere' => true,
  'klik' => true,
  'kntl' => true,
  'kotl' => true,
  'leak' => true,
  'maho' => true,
  'mani' => true,
  'mati' => true,
  'meki' => true,
  'nete' => true,
  'nono' => true,
  'noob' => true,
  'nyuk' => true,
  'onta' => true,
  'peju' => true,
  'pele' => true,
  'pler' => true,
  'puki' => true,
  'sial' => true,
  'susu' => true,
  'taek' => true,
  'taex' => true,
  'tahi' => true,
  'taik' => true,
  'tipu' => true,
  'tolo' => true,
  'udik' => true,
  'ampas' => true,
  'anjir' => true,
  'antek' => true,
  'asing' => true,
  'ateis' => true,
  'autis' => true,
  'bacot' => true,
  'bakka' => true,
  'banci' => true,
  'bawel' => true,
  'bebon' => true,
  'bedon' => true,
  'begok' => true,
  'bejat' => true,
  'berak' => true,
  'bikin' => true,
  'binal' => true,
  'bloon' => true,
  'bodoh' => true,
  'bogel' => true,
  'bokep' => true,
  'boker' => true,
  'borok' => true,
  'buaya' => true,
  'budeg' => true,
  'budek' => true,
  'bugil' => true,
  'burik' => true,
  'butoh' => true,
  'cabul' => true,
  'cabut' => true,
  'cacat' => true,
  'caper' => true,
  'celah' => true,
  'cocot' => true,
  'cokil' => true,
  'cotok' => true,
  'culun' => true,
  'curut' => true,
  'dafuq' => true,
  'dajal' => true,
  'dekil' => true,
  'detik' => true,
  'dodol' => true,
  'dubur' => true,
  'dungu' => true,
  'entot' => true,
  'flens' => true,
  'gagah' => true,
  'gelud' => true,
  'germo' => true,
  'grepe' => true,
  'iblis' => true,
  'inses' => true,
  'intip' => true,
  'jadah' => true,
  'jaman' => true,
  'jaran' => true,
  'jayus' => true,
  'jelek' => true,
  'jijik' => true,
  'jimat' => true,
  'kacau' => true,
  'kadal' => true,
  'kejam' => true,
  'kesal' => true,
  'kimak' => true,
  'kimax' => true,
  'kolor' => true,
  'konti' => true,
  'kunti' => true,
  'lebay' => true,
  'lebok' => true,
  'lesbi' => true,
  'lonte' => true,
  'mabuk' => true,
  'memek' => true,
  'memex' => true,
  'mesum' => true,
  'modar' => true,
  'nafsu' => true,
  'najis' => true,
  'nenen' => true,
  'ngewe' => true,
  'nimfa' => true,
  'nista' => true,
  'njing' => true,
  'nonok' => true,
  'norak' => true,
  'nyame' => true,
  'nyoli' => true,
  'onani' => true,
  'ozawa' => true,
  'pecun' => true,
  'pejuh' => true,
  'pekok' => true,
  'pelek' => true,
  'peler' => true,
  'pepek' => true,
  'pepet' => true,
  'perek' => true,
  'picek' => true,
  'pulsa' => true,
  'rahim' => true,
  'rejim' => true,
  'rezim' => true,
  'robot' => true,
  'roset' => true,
  'ruang' => true,
  'sange' => true,
  'sarap' => true,
  'silet' => true,
  'silit' => true,
  'sipit' => true,
  'sitip' => true,
  'tetek' => true,
  'titit' => true,
  'tokai' => true,
  'toket' => true,
  'tolol' => true,
  'ublag' => true,
  'vodka' => true,
  'zakar' => true,
  'aborsi' => true,
  'akouka' => true,
  'analex' => true,
  'anjeng' => true,
  'anjing' => true,
  'anjink' => true,
  'azizay' => true,
  'bajang' => true,
  'bandar' => true,
  'bandot' => true,
  'bangke' => true,
  'biadab' => true,
  'bispak' => true,
  'bisyar' => true,
  'bokong' => true,
  'burung' => true,
  'cebong' => true,
  'celaka' => true,
  'celeng' => true,
  'celsit' => true,
  'centil' => true,
  'chleng' => true,
  'cilaka' => true,
  'colmek' => true,
  'congek' => true,
  'congor' => true,
  'dancok' => true,
  'dongok' => true,
  'dunguk' => true,
  'ectasy' => true,
  'ereksi' => true,
  'erotis' => true,
  'fergay' => true,
  'ganjen' => true,
  'geblek' => true,
  'gembel' => true,
  'gendut' => true,
  'genjit' => true,
  'goblog' => true,
  'goblok' => true,
  'goyang' => true,
  'jablay' => true,
  'jalang' => true,
  'jamban' => true,
  'jancok' => true,
  'jancuk' => true,
  'jelaga' => true,
  'jembel' => true,
  'jembud' => true,
  'jembut' => true,
  'kacrut' => true,
  'kancut' => true,
  'kanjut' => true,
  'kasian' => true,
  'katrok' => true,
  'kentut' => true,
  'kimcil' => true,
  'kokang' => true,
  'kondom' => true,
  'kontol' => true,
  'koreng' => true,
  'kunyuk' => true,
  'laknat' => true,
  'madura' => true,
  'maling' => true,
  'mampos' => true,
  'mampus' => true,
  'mampuz' => true,
  'mandul' => true,
  'matamu' => true,
  'miyabi' => true,
  'moddar' => true,
  'monyet' => true,
  'munyuk' => true,
  'najong' => true,
  'neraka' => true,
  'ngenti' => true,
  'ngepet' => true,
  'ngewek' => true,
  'ngocok' => true,
  'nyemot' => true,
  'nyolot' => true,
  'otakmu' => true,
  'palaji' => true,
  'palkon' => true,
  'pantat' => true,
  'pantek' => true,
  'puting' => true,
  'sampah' => true,
  'sempak' => true,
  'sendal' => true,
  'sepong' => true,
  'serbet' => true,
  'sialan' => true,
  'sodomi' => true,
  'sundal' => true,
  'tampol' => true,
  'taplak' => true,
  'tempik' => true,
  'tholit' => true,
  'tobrut' => true,
  'tombol' => true,
  'united' => true,
  'abortus' => true,
  'alkohol' => true,
  'bangkai' => true,
  'bangsat' => true,
  'bedebah' => true,
  'bencong' => true,
  'betting' => true,
  'buritan' => true,
  'cangcut' => true,
  'ccookkk' => true,
  'cerewet' => true,
  'cheleng' => true,
  'citikus' => true,
  'citykus' => true,
  'dikirim' => true,
  'egoisme' => true,
  'ganyang' => true,
  'gembrot' => true,
  'goblokk' => true,
  'jahanam' => true,
  'jiancux' => true,
  'kambing' => true,
  'kampang' => true,
  'kampret' => true,
  'kaparat' => true,
  'kasiann' => true,
  'kasihan' => true,
  'keledai' => true,
  'kencing' => true,
  'keparat' => true,
  'komunis' => true,
  'kotoran' => true,
  'lengser' => true,
  'martole' => true,
  'masokis' => true,
  'menelan' => true,
  'menusuk' => true,
  'merebut' => true,
  'monyong' => true,
  'munafik' => true,
  'munyuuk' => true,
  'murahan' => true,
  'narkoba' => true,
  'ngaceng' => true,
  'ngecrot' => true,
  'ngentot' => true,
  'ngeseks' => true,
  'orgasme' => true,
  'pedofil' => true,
  'pelacur' => true,
  'pelakor' => true,
  'perawan' => true,
  'perkosa' => true,
  'pukimai' => true,
  'pukimak' => true,
  'sadisme' => true,
  'sinting' => true,
  'sompret' => true,
  'songong' => true,
  'tanggul' => true,
  'tusukan' => true,
  'arsundal' => true,
  'bajingan' => true,
  'bercinta' => true,
  'berdarah' => true,
  'bernafsu' => true,
  'binatang' => true,
  'blahbloh' => true,
  'brengsek' => true,
  'brengsex' => true,
  'chealeng' => true,
  'chellenk' => true,
  'chelshit' => true,
  'disodomi' => true,
  'downline' => true,
  'heunceut' => true,
  'jangkrik' => true,
  'kelentit' => true,
  'klitoris' => true,
  'krempeng' => true,
  'menembus' => true,
  'mengamuk' => true,
  'mengisap' => true,
  'mengutuk' => true,
  'meniduri' => true,
  'mucikari' => true,
  'panastak' => true,
  'payudara' => true,
  'pengemis' => true,
  'persetan' => true,
  'senggama' => true,
  'settubuh' => true,
  'terkutuk' => true,
  'zoofilia' => true,
  'berengsek' => true,
  'bodooohhh' => true,
  'chealshit' => true,
  'cungkring' => true,
  'dengkulmu' => true,
  'diperkosa' => true,
  'ejakulasi' => true,
  'hebefilia' => true,
  'hebefilik' => true,
  'kalempong' => true,
  'kampungan' => true,
  'kecepirit' => true,
  'kengerian' => true,
  'loserfool' => true,
  'mampoooos' => true,
  'menyodomi' => true,
  'munyukers' => true,
  'narkotika' => true,
  'panasbung' => true,
  'parafilia' => true,
  'pedofilia' => true,
  'pemerkosa' => true,
  'penetrasi' => true,
  'penggemar' => true,
  'sontoloyo' => true,
  'telanjang' => true,
  'brengsexxx' => true,
  'cabecabean' => true,
  'intercouse' => true,
  'keberanian' => true,
  'maaampooos' => true,
  'manasturbo' => true,
  'masturbasi' => true,
  'memperkosa' => true,
  'mendirikan' => true,
  'menggerutu' => true,
  'nekrofilia' => true,
  'paedofilia' => true,
  'panseksual' => true,
  'pornografi' => true,
  'terangsang' => true,
  'ambiseksual' => true,
  'amboseksual' => true,
  'gelandangan' => true,
  'keperawanan' => true,
  'menyebalkan' => true,
  'pemerkosaan' => true,
  'terbelakang' => true,
  'xhamstercom' => true,
  'berejakulasi' => true,
  'gobloookkkkk' => true,
  'kebinatangan' => true,
  'memperlambat' => true,
  'penyimpangan' => true,
  'selangkangan' => true,
  'akrotomofilia' => true,
  'anjingkeparat' => true,
  'ambiseksualitas' => true,
  'transgendertuyul' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aditya',
      1 => 'tata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'aditya' => 1,
      'tata' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anak',
      1 => 'haram',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anak' => 1,
      'haram' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'anak',
      1 => 'yatim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'anak' => 1,
      'yatim' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayam',
      1 => 'kampus',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ayam' => 1,
      'kampus' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bagas',
      1 => 'lo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bagas' => 1,
      'lo' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buah',
      1 => 'dada',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buah' => 1,
      'dada' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buah',
      1 => 'pelir',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buah' => 1,
      'pelir' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buang',
      1 => 'hajat',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buang' => 1,
      'hajat' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bujang',
      1 => 'inam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bujang' => 1,
      'inam' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bukit',
      1 => 'bagas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bukit' => 1,
      'bagas' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cabe',
      1 => 'lo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cabe' => 1,
      'lo' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foto',
      1 => 'hot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'foto' => 1,
      'hot' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'foto',
      1 => 'panas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'foto' => 1,
      'panas' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grogol',
      1 => 'grogol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'grogol' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gukguk',
      1 => 'mu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gukguk' => 1,
      'mu' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hajar',
      1 => 'buntut',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hajar' => 1,
      'buntut' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hot',
      1 => 'girl',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hot' => 1,
      'girl' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hot',
      1 => 'model',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hot' => 1,
      'model' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hot',
      1 => 'picture',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hot' => 1,
      'picture' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hot',
      1 => 'video',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hot' => 1,
      'video' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hubungan',
      1 => 'intim',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hubungan' => 1,
      'intim' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'isap',
      1 => 'konek',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'isap' => 1,
      'konek' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'juan',
      1 => 'cipta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'juan' => 1,
      'cipta' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kayu',
      1 => 'bakar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kayu' => 1,
      'bakar' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'main',
      1 => 'belakang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'main' => 1,
      'belakang' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'main',
      1 => 'burit',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'main' => 1,
      'burit' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mak',
      1 => 'lu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mak' => 1,
      'lu' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'make',
      1 => 'love',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'make' => 1,
      'love' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamakmu',
      1 => 'berkontol',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mamakmu' => 1,
      'berkontol' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muka',
      1 => 'boros',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muka' => 1,
      'boros' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muka',
      1 => 'plastik',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muka' => 1,
      'plastik' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orang',
      1 => 'kampung',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'orang' => 1,
      'kampung' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orang',
      1 => 'negro',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'orang' => 1,
      'negro' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'orang',
      1 => 'pria',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'orang' => 1,
      'pria' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otak',
      1 => 'melayu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otak' => 1,
      'melayu' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otak',
      1 => 'miring',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otak' => 1,
      'miring' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'otak',
      1 => 'udang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'otak' => 1,
      'udang' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pasukan',
      1 => 'nasi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pasukan' => 1,
      'nasi' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pengepakan',
      1 => 'fudge',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pengepakan' => 1,
      'fudge' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pengisap',
      1 => 'ayam',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pengisap' => 1,
      'ayam' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pengunyah',
      1 => 'karpet',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pengunyah' => 1,
      'karpet' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pesta',
      1 => 'pora',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pesta' => 1,
      'pora' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pesta',
      1 => 'seks',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pesta' => 1,
      'seks' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sakit',
      1 => 'jiwa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sakit' => 1,
      'jiwa' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'self',
      1 => 'service',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'self' => 1,
      'service' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tampang',
      1 => 'tua',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tampang' => 1,
      'tua' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tengkorak',
      1 => 'hidup',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tengkorak' => 1,
      'hidup' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'terima',
      1 => 'kasih',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'terima' => 1,
      'kasih' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiko',
      1 => 'busuk',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tiko' => 1,
      'busuk' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiko',
      1 => 'lu',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tiko' => 1,
      'lu' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tokek',
      1 => 'belang',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tokek' => 1,
      'belang' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tukang',
      1 => 'bohong',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tukang' => 1,
      'bohong' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'video',
      1 => 'hot',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'video' => 1,
      'hot' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'video',
      1 => 'panas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'video' => 1,
      'panas' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wanita',
      1 => 'miskin',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wanita' => 1,
      'miskin' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ya',
      1 => 'tuhan',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ya' => 1,
      'tuhan' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'binor',
      1 => 'bini',
      2 => 'orang',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'binor' => 2,
      'bini' => 1,
      'orang' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dasar',
      1 => 'cabe',
      2 => 'lo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dasar' => 2,
      'cabe' => 1,
      'lo' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grogol',
      1 => 'grogol',
      2 => 'munyak',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'grogol' => 1,
      'munyak' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hantam',
      1 => 'lobang',
      2 => 'kencingnya',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hantam' => 2,
      'lobang' => 1,
      'kencingnya' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'terkutuklah',
      1 => 'engkau',
      2 => 'semua',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'terkutuklah' => 2,
      'engkau' => 1,
      'semua' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'diberi',
      2 => 'peringkat',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'x' => 2,
      'diberi' => 1,
      'peringkat' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'aku',
      1 => 'suka',
      2 => 'ngentotin',
      3 => 'ibumu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'aku' => 3,
      'suka' => 2,
      'ngentotin' => 1,
      'ibumu' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'istrimu',
      1 => 'adalah',
      2 => 'penjilat',
      3 => 'pelerku',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'istrimu' => 3,
      'adalah' => 2,
      'penjilat' => 1,
      'pelerku' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'saya',
      1 => 'akan',
      2 => 'hajar',
      3 => 'kamu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'saya' => 3,
      'akan' => 2,
      'hajar' => 1,
      'kamu' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 65;

