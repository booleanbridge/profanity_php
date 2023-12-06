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
  'cu' => true,
  'cú' => true,
  'pau' => true,
  'biba' => true,
  'bixa' => true,
  'bobo' => true,
  'boco' => true,
  'bocó' => true,
  'buca' => true,
  'caga' => true,
  'coco' => true,
  'cocô' => true,
  'cona' => true,
  'falo' => true,
  'feia' => true,
  'feio' => true,
  'foda' => true,
  'fode' => true,
  'fufa' => true,
  'galo' => true,
  'mané' => true,
  'mesa' => true,
  'mija' => true,
  'mijo' => true,
  'naba' => true,
  'peru' => true,
  'pica' => true,
  'pila' => true,
  'piru' => true,
  'poia' => true,
  'rabo' => true,
  'rata' => true,
  'reto' => true,
  'rola' => true,
  'saco' => true,
  'teso' => true,
  'toba' => true,
  'toto' => true,
  'vaca' => true,
  'xana' => true,
  'xixi' => true,
  'xota' => true,
  'ânus' => true,
  'bagos' => true,
  'bebum' => true,
  'besta' => true,
  'bicha' => true,
  'bilha' => true,
  'bisca' => true,
  'bobão' => true,
  'bolas' => true,
  'bosta' => true,
  'botão' => true,
  'bugre' => true,
  'bunda' => true,
  'burra' => true,
  'burro' => true,
  'cabra' => true,
  'cagao' => true,
  'cagar' => true,
  'cagão' => true,
  'carai' => true,
  'chota' => true,
  'coito' => true,
  'comer' => true,
  'conas' => true,
  'corna' => true,
  'corno' => true,
  'cuzao' => true,
  'cuzão' => true,
  'debil' => true,
  'doida' => true,
  'doido' => true,
  'débil' => true,
  'ereto' => true,
  'fenda' => true,
  'fiofó' => true,
  'fodao' => true,
  'foder' => true,
  'fodão' => true,
  'fuder' => true,
  'gaita' => true,
  'galos' => true,
  'gozar' => true,
  'grelo' => true,
  'jossa' => true,
  'kenga' => true,
  'ladra' => true,
  'lalau' => true,
  'mamas' => true,
  'meita' => true,
  'mijar' => true,
  'ninfa' => true,
  'orgia' => true,
  'parvo' => true,
  'peido' => true,
  'pemba' => true,
  'pinto' => true,
  'pornô' => true,
  'porra' => true,
  'pênis' => true,
  'queca' => true,
  'rabão' => true,
  'racia' => true,
  'rolas' => true,
  'rosca' => true,
  'sêmen' => true,
  'tetas' => true,
  'tezão' => true,
  'troxa' => true,
  'vadia' => true,
  'veada' => true,
  'veado' => true,
  'viada' => true,
  'viado' => true,
  'víado' => true,
  'xibiu' => true,
  'útero' => true,
  'aborto' => true,
  'amador' => true,
  'aranha' => true,
  'ariano' => true,
  'babaca' => true,
  'bacura' => true,
  'bichas' => true,
  'boceta' => true,
  'boiola' => true,
  'botões' => true,
  'breque' => true,
  'brioco' => true,
  'broche' => true,
  'bronha' => true,
  'bumbum' => true,
  'cabrao' => true,
  'cabrão' => true,
  'caceta' => true,
  'cacete' => true,
  'cadela' => true,
  'calate' => true,
  'chupar' => true,
  'cuzuda' => true,
  'cuzudo' => true,
  'ereção' => true,
  'fedida' => true,
  'fedido' => true,
  'feiosa' => true,
  'feioso' => true,
  'feioza' => true,
  'feiozo' => true,
  'fodase' => true,
  'fodace' => true,
  'fodete' => true,
  'fodida' => true,
  'fodido' => true,
  'frango' => true,
  'fudida' => true,
  'fudido' => true,
  'gaiata' => true,
  'gaiato' => true,
  'gozada' => true,
  'grelho' => true,
  'grelos' => true,
  'idiota' => true,
  'ladrao' => true,
  'ladrão' => true,
  'lábios' => true,
  'macaco' => true,
  'machao' => true,
  'machão' => true,
  'mamada' => true,
  'mamilo' => true,
  'meleca' => true,
  'merdas' => true,
  'mijada' => true,
  'mijado' => true,
  'minete' => true,
  'mizera' => true,
  'mocrea' => true,
  'mocréa' => true,
  'orgias' => true,
  'otaria' => true,
  'otario' => true,
  'otária' => true,
  'otário' => true,
  'otãrio' => true,
  'peidar' => true,
  'peitos' => true,
  'pepeka' => true,
  'piroca' => true,
  'rabuda' => true,
  'rabudo' => true,
  'ramela' => true,
  'rolona' => true,
  'roseta' => true,
  'safada' => true,
  'safado' => true,
  'sodoma' => true,
  'sádico' => true,
  'tarada' => true,
  'tarado' => true,
  'tesuda' => true,
  'tesudo' => true,
  'tezuda' => true,
  'tezudo' => true,
  'tiriça' => true,
  'trocha' => true,
  'trolxa' => true,
  'trouxa' => true,
  'uretra' => true,
  'urinar' => true,
  'vadias' => true,
  'veadao' => true,
  'veadão' => true,
  'viadao' => true,
  'viadão' => true,
  'xereca' => true,
  'xexeca' => true,
  'xoxota' => true,
  'alcatra' => true,
  'babaovo' => true,
  'baitola' => true,
  'balalao' => true,
  'bichano' => true,
  'biscate' => true,
  'bixinha' => true,
  'boazuda' => true,
  'boquete' => true,
  'bosseta' => true,
  'bostana' => true,
  'bunduda' => true,
  'busseta' => true,
  'cadelas' => true,
  'cagando' => true,
  'calçado' => true,
  'canalha' => true,
  'caralho' => true,
  'casseta' => true,
  'cassete' => true,
  'cerveja' => true,
  'chereca' => true,
  'choncho' => true,
  'colhoes' => true,
  'consolo' => true,
  'coragem' => true,
  'cornuda' => true,
  'cralhes' => true,
  'cretina' => true,
  'defunto' => true,
  'demonio' => true,
  'demônio' => true,
  'egoísmo' => true,
  'ejacula' => true,
  'engolir' => true,
  'enrabar' => true,
  'escrota' => true,
  'escroto' => true,
  'esporra' => true,
  'esporro' => true,
  'estupro' => true,
  'felação' => true,
  'fetiche' => true,
  'fodasse' => true,
  'fudendo' => true,
  'fuleira' => true,
  'furioso' => true,
  'galinha' => true,
  'idiotas' => true,
  'imbecil' => true,
  'incesto' => true,
  'inferno' => true,
  'iscrota' => true,
  'iscroto' => true,
  'ladrona' => true,
  'leprosa' => true,
  'leproso' => true,
  'luxúria' => true,
  'lésbico' => true,
  'machona' => true,
  'maldito' => true,
  'mijando' => true,
  'mocreia' => true,
  'mocréia' => true,
  'nazista' => true,
  'orgasmo' => true,
  'pachaxa' => true,
  'pancada' => true,
  'peituda' => true,
  'peixota' => true,
  'picadas' => true,
  'pichota' => true,
  'pilinha' => true,
  'pininho' => true,
  'piranha' => true,
  'pirocao' => true,
  'pirocão' => true,
  'punheta' => true,
  'putaria' => true,
  'rabudao' => true,
  'rabudão' => true,
  'ramelão' => true,
  'recanto' => true,
  'rolinha' => true,
  'sadismo' => true,
  'sapatão' => true,
  'senaita' => true,
  'sujeira' => true,
  'testuda' => true,
  'testudo' => true,
  'tomates' => true,
  'transar' => true,
  'trepada' => true,
  'troucha' => true,
  'tubassa' => true,
  'viadona' => true,
  'violado' => true,
  'xaninha' => true,
  'xavasca' => true,
  'xibumba' => true,
  'xochota' => true,
  'zbuceta' => true,
  'zoófilo' => true,
  'bichanos' => true,
  'bolagato' => true,
  'borrarse' => true,
  'bostinha' => true,
  'bussanga' => true,
  'cachorra' => true,
  'cachorro' => true,
  'cagalhao' => true,
  'cagalhão' => true,
  'canalhas' => true,
  'checheca' => true,
  'chibumba' => true,
  'chibumbo' => true,
  'chifruda' => true,
  'chifrudo' => true,
  'chochota' => true,
  'chupamos' => true,
  'clitóris' => true,
  'cobiçoso' => true,
  'desgraça' => true,
  'ejacular' => true,
  'enrabame' => true,
  'estúpido' => true,
  'grelinho' => true,
  'idiotice' => true,
  'lambecus' => true,
  'machorra' => true,
  'orgasmos' => true,
  'pachacha' => true,
  'paspalha' => true,
  'paspalho' => true,
  'pedófilo' => true,
  'penetrar' => true,
  'pentelha' => true,
  'pentelho' => true,
  'perereca' => true,
  'pilantra' => true,
  'porcaria' => true,
  'precheca' => true,
  'punhetao' => true,
  'punhetão' => true,
  'puxasaco' => true,
  'rabudona' => true,
  'ramelona' => true,
  'rapariga' => true,
  'retardar' => true,
  'ridicula' => true,
  'ridiculo' => true,
  'ridícula' => true,
  'ridículo' => true,
  'sapatona' => true,
  'siririca' => true,
  'testudão' => true,
  'torneira' => true,
  'viadinha' => true,
  'viadinho' => true,
  'vibrador' => true,
  'violação' => true,
  'xerereca' => true,
  'zoofilia' => true,
  'abortista' => true,
  'arrebatar' => true,
  'arrombada' => true,
  'arrombado' => true,
  'badalhoca' => true,
  'badalhoco' => true,
  'bardajona' => true,
  'camisinha' => true,
  'chochonho' => true,
  'chuparola' => true,
  'debiloide' => true,
  'ejaculado' => true,
  'escarumba' => true,
  'esporrada' => true,
  'fedorenta' => true,
  'fedorento' => true,
  'hebefilia' => true,
  'hebefilos' => true,
  'masturbar' => true,
  'paneleiro' => true,
  'paspalhao' => true,
  'paspalhão' => true,
  'pedofilia' => true,
  'perversão' => true,
  'piriguete' => true,
  'recalcada' => true,
  'recalcado' => true,
  'retardada' => true,
  'retardado' => true,
  'sacanagem' => true,
  'sangrento' => true,
  'testudona' => true,
  'testículo' => true,
  'transando' => true,
  'vagabunda' => true,
  'vagabundo' => true,
  'vagaranha' => true,
  'abortuário' => true,
  'aparafusar' => true,
  'caralhinho' => true,
  'desgraçada' => true,
  'desgraçado' => true,
  'ejaculando' => true,
  'ejaculação' => true,
  'estuprador' => true,
  'hebefílico' => true,
  'homosexual' => true,
  'incestuoso' => true,
  'masoquista' => true,
  'masturbase' => true,
  'ninfomania' => true,
  'paspalhona' => true,
  'penetração' => true,
  'prostituta' => true,
  'prostituto' => true,
  'punheteira' => true,
  'punheteiro' => true,
  'sodomizado' => true,
  'abortuários' => true,
  'ejaculações' => true,
  'homoerótico' => true,
  'linchamento' => true,
  'masturbarse' => true,
  'masturbação' => true,
  'peidorreira' => true,
  'peidorreiro' => true,
  'pornografia' => true,
  'bestialidade' => true,
  'acrotomofilia' => true,
  'espermatozóide' => true,
  'testudaotrolha' => true,
  'ambissexualidade' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ango',
      1 => 'assado',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ango' => 1,
      'assado' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bate',
      1 => 'uma',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bate' => 1,
      'uma' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bebe',
      1 => 'merda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bebe' => 1,
      'merda' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'com',
      1 => 'tesão',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'com' => 1,
      'tesão' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'coma',
      1 => 'merda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'coma' => 1,
      'merda' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'come',
      1 => 'merda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'come' => 1,
      'merda' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dum',
      1 => 'raio',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dum' => 1,
      'raio' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'homem',
      1 => 'gay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'homem' => 1,
      'gay' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'come',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'me' => 1,
      'come' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'enraba',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'me' => 1,
      'enraba' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'erra',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'me' => 1,
      'erra' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'merda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puta' => 1,
      'merda' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'salve',
      1 => 'hitler',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'salve' => 1,
      'hitler' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sua',
      1 => 'puta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sua' => 1,
      'puta' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'avaliado',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'avaliado' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'assfilho',
      1 => 'da',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'assfilho' => 2,
      'da' => 1,
      'puta' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'borrar',
      1 => 'as',
      2 => 'calças',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'borrar' => 2,
      'as' => 1,
      'calças' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'braulio',
      1 => 'de',
      2 => 'borracha',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'braulio' => 2,
      'de' => 1,
      'borracha' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cala',
      1 => 'a',
      2 => 'boca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cala' => 2,
      'a' => 1,
      'boca' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chuchame',
      1 => 'a',
      2 => 'tola',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chuchame' => 2,
      'a' => 1,
      'tola' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'me',
      2 => 'a',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'me' => 1,
      'a' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'comedor',
      1 => 'de',
      2 => 'tapetes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'comedor' => 2,
      'de' => 1,
      'tapetes' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dogfilho',
      1 => 'da',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dogfilho' => 2,
      'da' => 1,
      'puta' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'drogado',
      1 => 'de',
      2 => 'merda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'drogado' => 2,
      'de' => 1,
      'merda' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'empacotador',
      1 => 'de',
      2 => 'fudge',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'empacotador' => 2,
      'de' => 1,
      'fudge' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'esgalhar',
      1 => 'o',
      2 => 'pessegeiro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'esgalhar' => 2,
      'o' => 1,
      'pessegeiro' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fazer',
      1 => 'um',
      2 => 'bico',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fazer' => 2,
      'um' => 1,
      'bico' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'filha',
      1 => 'da',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'filha' => 2,
      'da' => 1,
      'puta' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'filho',
      1 => 'da',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'filho' => 2,
      'da' => 1,
      'puta' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'filhos',
      1 => 'da',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'filhos' => 2,
      'da' => 1,
      'puta' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'monte',
      1 => 'de',
      2 => 'merda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'monte' => 2,
      'de' => 1,
      'merda' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'não',
      1 => 'me',
      2 => 'chateies',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'não' => 2,
      'me' => 1,
      'chateies' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'passar',
      1 => 'um',
      2 => 'cheque',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'passar' => 2,
      'um' => 1,
      'cheque' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'de',
      2 => 'merda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'puta' => 2,
      'de' => 1,
      'merda' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'que',
      2 => 'pareu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'puta' => 2,
      'que' => 1,
      'pareu' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'que',
      2 => 'pariu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'puta' => 2,
      'que' => 1,
      'pariu' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'bater',
      2 => 'punhetas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vai' => 2,
      'bater' => 1,
      'punhetas' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'pa',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vai' => 2,
      'pa' => 1,
      'puta' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vinte',
      1 => 'e',
      2 => 'quatro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vinte' => 2,
      'e' => 1,
      'quatro' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'puta',
      2 => 'de',
      3 => 'mae',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'a' => 3,
      'puta' => 2,
      'de' => 1,
      'mae' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'filho',
      1 => 'de',
      2 => 'mil',
      3 => 'putas',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'filho' => 3,
      'de' => 2,
      'mil' => 1,
      'putas' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'filho',
      1 => 'de',
      2 => 'trinta',
      3 => 'putas',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'filho' => 3,
      'de' => 2,
      'trinta' => 1,
      'putas' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'aqui',
      2 => 'oh',
      3 => 'puta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mama' => 3,
      'aqui' => 2,
      'oh' => 1,
      'puta' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pita',
      1 => 'que',
      2 => 'te',
      3 => 'pariu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pita' => 3,
      'que' => 2,
      'te' => 1,
      'pariu' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'que',
      2 => 'o',
      3 => 'pariu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'puta' => 3,
      'que' => 2,
      'o' => 1,
      'pariu' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'que',
      2 => 'te',
      3 => 'pariu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'puta' => 3,
      'que' => 2,
      'te' => 1,
      'pariu' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'seu',
      1 => 'cara',
      2 => 'de',
      3 => 'merda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'seu' => 3,
      'cara' => 2,
      'de' => 1,
      'merda' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'puta',
      2 => 'da',
      3 => 'tua',
      4 => 'tia',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'a' => 4,
      'puta' => 3,
      'da' => 2,
      'tua' => 1,
      'tia' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupame',
      1 => 'o',
      2 => 'forro',
      3 => 'aos',
      4 => 'colhãµes',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'chupame' => 4,
      'o' => 3,
      'forro' => 2,
      'aos' => 1,
      'colhãµes' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mas',
      1 => 'que',
      2 => 'filho',
      3 => 'da',
      4 => 'puta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'mas' => 4,
      'que' => 3,
      'filho' => 2,
      'da' => 1,
      'puta' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'os',
      1 => 'cornos',
      2 => 'do',
      3 => 'teu',
      4 => 'pai',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'os' => 4,
      'cornos' => 3,
      'do' => 2,
      'teu' => 1,
      'pai' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'que',
      2 => 'pariu',
      3 => 'esta',
      4 => 'merda',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'puta' => 4,
      'que' => 3,
      'pariu' => 2,
      'esta' => 1,
      'merda' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'de',
      2 => 'fudder',
      3 => 'teu',
      4 => 'mai',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'vai' => 4,
      'de' => 3,
      'fudder' => 2,
      'teu' => 1,
      'mai' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vá',
      1 => 'pro',
      2 => 'quinto',
      3 => 'dos',
      4 => 'infernos',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'vá' => 4,
      'pro' => 3,
      'quinto' => 2,
      'dos' => 1,
      'infernos' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'pra',
      2 => 'puta',
      3 => 'que',
      4 => 'te',
      5 => 'pariu',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'vai' => 5,
      'pra' => 4,
      'puta' => 3,
      'que' => 2,
      'te' => 1,
      'pariu' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 55;

