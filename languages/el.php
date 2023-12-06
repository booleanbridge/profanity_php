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
  'κοκ' => true,
  'ναι' => true,
  'bazo' => true,
  'hyno' => true,
  'mule' => true,
  'muni' => true,
  'paok' => true,
  'γαμώ' => true,
  'θηλή' => true,
  'ναζί' => true,
  'ουρώ' => true,
  'πέος' => true,
  'φύλο' => true,
  'χαλί' => true,
  'ψωλή' => true,
  'bines' => true,
  'kavla' => true,
  'kolos' => true,
  'βυζιά' => true,
  'γωνιά' => true,
  'επάνω' => true,
  'κώλος' => true,
  'μήτρα' => true,
  'μουνί' => true,
  'νύμφη' => true,
  'νύχια' => true,
  'πόρνη' => true,
  'ράπερ' => true,
  'σκατά' => true,
  'σκύλα' => true,
  'στήθη' => true,
  'τόλμη' => true,
  'φετίχ' => true,
  'όργια' => true,
  'όργιο' => true,
  'όρχις' => true,
  'όσχεο' => true,
  'arxidi' => true,
  'gamisi' => true,
  'gomena' => true,
  'lougra' => true,
  'malaka' => true,
  'mounee' => true,
  'αλήτης' => true,
  'αράπης' => true,
  'αρπάζω' => true,
  'αρχίδι' => true,
  'βαρέλι' => true,
  'γάιδες' => true,
  'δεκάρα' => true,
  'καπνιά' => true,
  'κόλαση' => true,
  'κόλπος' => true,
  'κόπωση' => true,
  'πούτσα' => true,
  'πρύμνη' => true,
  'πόμολο' => true,
  'ροζέτα' => true,
  'σιωπής' => true,
  'σπέρμα' => true,
  'σπαθιά' => true,
  'σόδομα' => true,
  'φαλλός' => true,
  'χίτλερ' => true,
  'χείλος' => true,
  'gamozoo' => true,
  'kariola' => true,
  'vazelos' => true,
  'villara' => true,
  'άμβλωση' => true,
  'έκτρωση' => true,
  'ανάχωμα' => true,
  'αναφωνώ' => true,
  'αρχίδια' => true,
  'βιασμός' => true,
  'βιαστής' => true,
  'δονητές' => true,
  'ευτυχώς' => true,
  'κινέζος' => true,
  'κόκορας' => true,
  'κόπανος' => true,
  'λαγνεία' => true,
  'μαλάκας' => true,
  'μαλάκες' => true,
  'νεοναζί' => true,
  'ουρήθρα' => true,
  'πουτάνα' => true,
  'πούστης' => true,
  'πούτσος' => true,
  'πρωκτός' => true,
  'σβουνιά' => true,
  'σκυλάκι' => true,
  'τραχύνω' => true,
  'φλάντζα' => true,
  'χτύπημα' => true,
  'autistas' => true,
  'bastarde' => true,
  'bourdelo' => true,
  'bouxhesa' => true,
  'kotsiros' => true,
  'mastaria' => true,
  'ανέγερση' => true,
  'ανεγείρω' => true,
  'βιάστηκε' => true,
  'γάιδαρος' => true,
  'γαμιόλης' => true,
  'διαπερνώ' => true,
  'εγωισμός' => true,
  'ζωοφιλία' => true,
  'ζωόφιλος' => true,
  'ηβηφιλία' => true,
  'καριόλης' => true,
  'καταπιεί' => true,
  'κουτάβια' => true,
  'κτηνωδία' => true,
  'κτηνώδης' => true,
  'λιντσάρω' => true,
  'μαίνεται' => true,
  'νευρικός' => true,
  'οργασμός' => true,
  'πατήσαμε' => true,
  'σαδισμός' => true,
  'σαδιστής' => true,
  'σκουλήκι' => true,
  'σοδομίζω' => true,
  'ambalatos' => true,
  'kolotripa' => true,
  'mounopano' => true,
  'αγριότητα' => true,
  'αιματηρός' => true,
  'αιμομιξία' => true,
  'αμβλώσεις' => true,
  'αυνανισμό' => true,
  'γαμημένος' => true,
  'διαστρέφω' => true,
  'διαστροφή' => true,
  'διείσδυση' => true,
  'καυλιάρης' => true,
  'κλειτορίς' => true,
  'κουνώντας' => true,
  'κωλόπαιδο' => true,
  'μουνόπανο' => true,
  'οργασμούς' => true,
  'παγίδευση' => true,
  'πεολειξία' => true,
  'πρωκτικός' => true,
  'συνάδελφο' => true,
  'σφαιρίδιο' => true,
  'geopoutani' => true,
  'kavlomenos' => true,
  'mounoskilo' => true,
  'olympiacos' => true,
  'αυνανισμός' => true,
  'βιδώνοντας' => true,
  'διαστήματα' => true,
  'εξογκώματα' => true,
  'επιβραδύνω' => true,
  'κλειτορίδα' => true,
  'μαζοχιστής' => true,
  'μπάσταρδος' => true,
  'νυμφομανία' => true,
  'παιδοφιλία' => true,
  'πιπιλίζουν' => true,
  'σοδομισμός' => true,
  'στρόφιγγες' => true,
  'τρεξίματος' => true,
  'τσιμπήματα' => true,
  'kolodaktilo' => true,
  'mounotricha' => true,
  'αυνανίζομαι' => true,
  'καθυστερούν' => true,
  'κωλοτρυπίδα' => true,
  'λιντσάρισμα' => true,
  'μουντζούρες' => true,
  'παιδεραστής' => true,
  'πορνογραφία' => true,
  'archimalakas' => true,
  'αιμομικτικός' => true,
  'εκσπερμάτιση' => true,
  'εκσπερμάτωση' => true,
  'ηδονοβλεψίας' => true,
  'ουροποιητικό' => true,
  'σκύλοςfucker' => true,
  'σοδομισμένος' => true,
  'panathinaikos' => true,
  'ακροτομοφιλία' => true,
  'αμβοφυλόφιλος' => true,
  'αμφιφυλοφιλία' => true,
  'εκσπερμάτισης' => true,
  'εκσπερματώνει' => true,
  'κόκορακορόιδο' => true,
  'παιδεραστικός' => true,
  'εκσπερματώσεις' => true,
  'πανσεξουαλικός' => true,
  'σπερματοζωάρια' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ai',
      1 => 'gamisou',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ai' => 1,
      'gamisou' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ante',
      1 => 'gamisou',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ante' => 1,
      'gamisou' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ay',
      1 => 'gamisou',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ay' => 1,
      'gamisou' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ayde',
      1 => 'hesou',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ayde' => 1,
      'hesou' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cartra',
      1 => 'mano',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cartra' => 1,
      'mano' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gameta',
      1 => 'skata',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gameta' => 1,
      'skata' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'palio',
      1 => 'arhidi',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'palio' => 1,
      'arhidi' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pana',
      1 => 'gamethie',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pana' => 1,
      'gamethie' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pane',
      1 => 'gamisou',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pane' => 1,
      'gamisou' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'ονομαστική',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'ονομαστική' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'αιδοίο',
      1 => 'θήλεος',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'αιδοίο' => 1,
      'θήλεος' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'μητέρα',
      1 => 'fucker',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'μητέρα' => 1,
      'fucker' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'νευριάζω',
      1 => 'κάποιον',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'νευριάζω' => 1,
      'κάποιον' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ο',
      1 => 'θεόςκαταδικασμένος',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ο' => 1,
      'θεόςκαταδικασμένος' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'τα',
      1 => 'κορίτσια',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'τα' => 1,
      'κορίτσια' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'τα',
      1 => 'χείλη',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'τα' => 1,
      'χείλη' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ade',
      1 => 'sto',
      2 => 'diaolo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ade' => 2,
      'sto' => 1,
      'diaolo' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ante',
      1 => 'gamisou',
      2 => 'paliopousta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ante' => 2,
      'gamisou' => 1,
      'paliopousta' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'as',
      1 => 'to',
      2 => 'thialo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'as' => 2,
      'to' => 1,
      'thialo' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'erre',
      1 => 'es',
      2 => 'korakas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'erre' => 2,
      'es' => 1,
      'korakas' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nupidio',
      1 => 'tis',
      2 => 'kinonias',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nupidio' => 2,
      'tis' => 1,
      'kinonias' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'o',
      1 => 're',
      2 => 'pousti',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'o' => 2,
      're' => 1,
      'pousti' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oipho',
      1 => 'ancient',
      2 => 'greek',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'oipho' => 2,
      'ancient' => 1,
      'greek' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pa',
      1 => 'na',
      2 => 'gamythees',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pa' => 2,
      'na' => 1,
      'gamythees' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'υπέρμαχος',
      1 => 'των',
      2 => 'αμβλώσεων',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'υπέρμαχος' => 2,
      'των' => 1,
      'αμβλώσεων' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'akka',
      1 => 'tin',
      2 => 'villa',
      3 => 'mou',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'akka' => 3,
      'tin' => 2,
      'villa' => 1,
      'mou' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fae',
      1 => 'ena',
      2 => 'kouva',
      3 => 'skata',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'fae' => 3,
      'ena' => 2,
      'kouva' => 1,
      'skata' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fila',
      1 => 'mou',
      2 => 'to',
      3 => 'kolo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'fila' => 3,
      'mou' => 2,
      'to' => 1,
      'kolo' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamisa',
      1 => 'ti',
      2 => 'mana',
      3 => 'sou',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gamisa' => 3,
      'ti' => 2,
      'mana' => 1,
      'sou' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamo',
      1 => 'tin',
      2 => 'katadiki',
      3 => 'mou',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gamo' => 3,
      'tin' => 2,
      'katadiki' => 1,
      'mou' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamo',
      1 => 'tin',
      2 => 'panagia',
      3 => 'sou',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gamo' => 3,
      'tin' => 2,
      'panagia' => 1,
      'sou' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamo',
      1 => 'to',
      2 => 'kerato',
      3 => 'sou',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gamo' => 3,
      'to' => 2,
      'kerato' => 1,
      'sou' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamoto',
      1 => 'mouni',
      2 => 'tis',
      3 => 'laspis',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gamoto' => 3,
      'mouni' => 2,
      'tis' => 1,
      'laspis' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamw',
      1 => 'ten',
      2 => 'psyche',
      3 => 'su',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'gamw' => 3,
      'ten' => 2,
      'psyche' => 1,
      'su' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'glipse',
      1 => 'tin',
      2 => 'poutsamou',
      3 => 'skila',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'glipse' => 3,
      'tin' => 2,
      'poutsamou' => 1,
      'skila' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'mou',
      2 => 'klaseis',
      3 => 'tarxidia',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'mou' => 2,
      'klaseis' => 1,
      'tarxidia' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'pari',
      2 => 'i',
      3 => 'eychi',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'na' => 3,
      'pari' => 2,
      'i' => 1,
      'eychi' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'o',
      1 => 're',
      2 => 'pousti',
      3 => 'mu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'o' => 3,
      're' => 2,
      'pousti' => 1,
      'mu' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ο',
      1 => 'γιος',
      2 => 'της',
      3 => 'σκύλας',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ο' => 3,
      'γιος' => 2,
      'της' => 1,
      'σκύλας' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'i',
      1 => 'mana',
      2 => 'sou',
      3 => 'ine',
      4 => 'putana',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'i' => 4,
      'mana' => 3,
      'sou' => 2,
      'ine' => 1,
      'putana' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kavli',
      1 => 'or',
      2 => 'putsa',
      3 => 'or',
      4 => 'putsos',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'kavli' => 4,
      'or' => 1,
      'putsa' => 2,
      'putsos' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'na',
      1 => 'sou',
      2 => 'sheso',
      3 => 'sta',
      4 => 'moutra',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'na' => 4,
      'sou' => 3,
      'sheso' => 2,
      'sta' => 1,
      'moutra' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'o',
      1 => 'gamo',
      2 => 'ton',
      3 => 'christo',
      4 => 'mu',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'o' => 4,
      'gamo' => 3,
      'ton' => 2,
      'christo' => 1,
      'mu' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamo',
      1 => 'tis',
      2 => 'thias',
      3 => 'sou',
      4 => 'ton',
      5 => 'bougadokofti',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'gamo' => 5,
      'tis' => 4,
      'thias' => 3,
      'sou' => 2,
      'ton' => 1,
      'bougadokofti' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamo',
      1 => 'to',
      2 => 'mouni',
      3 => 'tis',
      4 => 'manas',
      5 => 'sou',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'gamo' => 5,
      'to' => 4,
      'mouni' => 3,
      'tis' => 2,
      'manas' => 1,
      'sou' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gamw',
      1 => 'to',
      2 => 'mouni',
      3 => 'pou',
      4 => 'se',
      5 => 'petage',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'gamw' => 5,
      'to' => 4,
      'mouni' => 3,
      'pou' => 2,
      'se' => 1,
      'petage' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'i',
      1 => 'mana',
      2 => 'sou',
      3 => 'en',
      4 => 'se',
      5 => 'xeri',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'i' => 5,
      'mana' => 4,
      'sou' => 3,
      'en' => 2,
      'se' => 1,
      'xeri' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 47;

