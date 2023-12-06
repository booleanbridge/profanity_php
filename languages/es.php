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
  'es' => true,
  'hit' => true,
  'ano' => true,
  'api' => true,
  'fea' => true,
  'tío' => true,
  'ahua' => true,
  'anda' => true,
  'andá' => true,
  'aniz' => true,
  'asno' => true,
  'bien' => true,
  'blog' => true,
  'bobo' => true,
  'boyo' => true,
  'cipá' => true,
  'cita' => true,
  'coca' => true,
  'cola' => true,
  'come' => true,
  'copa' => true,
  'coso' => true,
  'coña' => true,
  'coño' => true,
  'cuca' => true,
  'dona' => true,
  'duro' => true,
  'falo' => true,
  'foda' => true,
  'homo' => true,
  'jode' => true,
  'joto' => true,
  'kuka' => true,
  'lela' => true,
  'loco' => true,
  'mear' => true,
  'meco' => true,
  'mico' => true,
  'mota' => true,
  'nabo' => true,
  'naco' => true,
  'nuez' => true,
  'open' => true,
  'orto' => true,
  'paja' => true,
  'palo' => true,
  'pata' => true,
  'pato' => true,
  'pene' => true,
  'pico' => true,
  'pija' => true,
  'pijo' => true,
  'pipe' => true,
  'piro' => true,
  'popa' => true,
  'poto' => true,
  'pozo' => true,
  'puño' => true,
  'rabo' => true,
  'raja' => true,
  'rola' => true,
  'ruca' => true,
  'sata' => true,
  'sobo' => true,
  'teta' => true,
  'toto' => true,
  'trio' => true,
  'trío' => true,
  'vete' => true,
  'zote' => true,
  'ñema' => true,
  'adufe' => true,
  'ambia' => true,
  'azada' => true,
  'benga' => true,
  'bicho' => true,
  'bolas' => true,
  'bollo' => true,
  'brida' => true,
  'bruta' => true,
  'bucha' => true,
  'bunda' => true,
  'burro' => true,
  'cabra' => true,
  'cacha' => true,
  'cafre' => true,
  'cagar' => true,
  'cagon' => true,
  'cagón' => true,
  'chola' => true,
  'cholo' => true,
  'chulo' => true,
  'cocos' => true,
  'coger' => true,
  'coito' => true,
  'cojer' => true,
  'comer' => true,
  'coyos' => true,
  'coã±o' => true,
  'coños' => true,
  'creta' => true,
  'crica' => true,
  'cucon' => true,
  'cueco' => true,
  'cuero' => true,
  'culia' => true,
  'culos' => true,
  'cutis' => true,
  'cuzao' => true,
  'dique' => true,
  'domos' => true,
  'ducha' => true,
  'facha' => true,
  'fifar' => true,
  'fleto' => true,
  'folla' => true,
  'forro' => true,
  'gallo' => true,
  'gañan' => true,
  'gañán' => true,
  'golpe' => true,
  'gomas' => true,
  'gonad' => true,
  'gordo' => true,
  'grupa' => true,
  'guebo' => true,
  'güebo' => true,
  'hawky' => true,
  'horre' => true,
  'hueco' => true,
  'huevo' => true,
  'japón' => true,
  'joder' => true,
  'kumbo' => true,
  'kúmer' => true,
  'leche' => true,
  'lerdo' => true,
  'lolas' => true,
  'mamar' => true,
  'mamey' => true,
  'mamón' => true,
  'mando' => true,
  'mecos' => true,
  'melon' => true,
  'melón' => true,
  'mojar' => true,
  'mongo' => true,
  'moras' => true,
  'ninfa' => true,
  'ninfo' => true,
  'ojete' => true,
  'orate' => true,
  'orgía' => true,
  'orina' => true,
  'ovejo' => true,
  'pargo' => true,
  'patan' => true,
  'patán' => true,
  'pelma' => true,
  'perma' => true,
  'perro' => true,
  'pezon' => true,
  'pezón' => true,
  'pinga' => true,
  'pisar' => true,
  'playo' => true,
  'plomo' => true,
  'polvo' => true,
  'porra' => true,
  'putas' => true,
  'putos' => true,
  'putso' => true,
  'putón' => true,
  'rajoy' => true,
  'reata' => true,
  'recto' => true,
  'riata' => true,
  'rifle' => true,
  'senos' => true,
  'sonso' => true,
  'sosco' => true,
  'terms' => true,
  'tetas' => true,
  'tirar' => true,
  'tirón' => true,
  'tizón' => true,
  'tocho' => true,
  'tolai' => true,
  'tonga' => true,
  'tonto' => true,
  'topar' => true,
  'tordo' => true,
  'traga' => true,
  'trola' => true,
  'trolo' => true,
  'vadia' => true,
  'viado' => true,
  'volar' => true,
  'wacha' => true,
  'yegua' => true,
  'zunga' => true,
  'ñorro' => true,
  'útero' => true,
  'abanto' => true,
  'aborto' => true,
  'aduana' => true,
  'afilar' => true,
  'aldaba' => true,
  'atarre' => true,
  'ayotes' => true,
  'baboso' => true,
  'basura' => true,
  'besugo' => true,
  'boludo' => true,
  'bombin' => true,
  'bombín' => true,
  'brisca' => true,
  'brisco' => true,
  'brizna' => true,
  'brocha' => true,
  'buscar' => true,
  'cabrón' => true,
  'cachar' => true,
  'cadela' => true,
  'cajeta' => true,
  'calduo' => true,
  'caldúo' => true,
  'carajo' => true,
  'cariño' => true,
  'cenizo' => true,
  'cerota' => true,
  'cerote' => true,
  'chacon' => true,
  'chacón' => true,
  'chango' => true,
  'chiche' => true,
  'chichi' => true,
  'chifar' => true,
  'chimar' => true,
  'chimba' => true,
  'chocha' => true,
  'chocho' => true,
  'cholas' => true,
  'cholos' => true,
  'chucha' => true,
  'chupar' => true,
  'cipote' => true,
  'clavar' => true,
  'cogote' => true,
  'cojido' => true,
  'cojudo' => true,
  'concha' => true,
  'conejo' => true,
  'corota' => true,
  'corozo' => true,
  'correa' => true,
  'cuacha' => true,
  'cuates' => true,
  'cucona' => true,
  'culata' => true,
  'culeao' => true,
  'culear' => true,
  'culero' => true,
  'culiao' => true,
  'culiar' => true,
  'curtir' => true,
  'cuzã£o' => true,
  'córneo' => true,
  'erecto' => true,
  'estaca' => true,
  'fachar' => true,
  'fierro' => true,
  'footer' => true,
  'forrar' => true,
  'frijol' => true,
  'gallos' => true,
  'gandul' => true,
  'gonads' => true,
  'guacho' => true,
  'gueona' => true,
  'guineo' => true,
  'huevón' => true,
  'idiota' => true,
  'issues' => true,
  'jockey' => true,
  'jodete' => true,
  'jodido' => true,
  'jódete' => true,
  'labios' => true,
  'leches' => true,
  'lesado' => true,
  'letrin' => true,
  'letrín' => true,
  'llanta' => true,
  'maciza' => true,
  'mahmaw' => true,
  'mamada' => true,
  'mamona' => true,
  'maraca' => true,
  'maraco' => true,
  'marica' => true,
  'marujo' => true,
  'mayate' => true,
  'menaje' => true,
  'momada' => true,
  'montar' => true,
  'moreno' => true,
  'nalgas' => true,
  'niñata' => true,
  'niñato' => true,
  'nojoda' => true,
  'nudoso' => true,
  'orgías' => true,
  'pajara' => true,
  'pajaro' => true,
  'pajero' => true,
  'palomo' => true,
  'panoli' => true,
  'payaso' => true,
  'pedazo' => true,
  'pedejo' => true,
  'pelele' => true,
  'pelusa' => true,
  'petero' => true,
  'pinche' => true,
  'pipian' => true,
  'pipián' => true,
  'pirobo' => true,
  'piruja' => true,
  'pollas' => true,
  'pupila' => true,
  'putada' => true,
  'putica' => true,
  'putona' => true,
  'pájara' => true,
  'pájaro' => true,
  'quejas' => true,
  'rabano' => true,
  'remame' => true,
  'retazo' => true,
  'rincón' => true,
  'rizado' => true,
  'roseta' => true,
  'sadico' => true,
  'serote' => true,
  'singao' => true,
  'singar' => true,
  'skonka' => true,
  'sodoma' => true,
  'sorete' => true,
  'sádico' => true,
  'tanate' => true,
  'tarado' => true,
  'tarugo' => true,
  'tereso' => true,
  'tetona' => true,
  'tolete' => true,
  'tontas' => true,
  'totona' => true,
  'tuerca' => true,
  'uretra' => true,
  'vejiga' => true,
  'verija' => true,
  'violar' => true,
  'webear' => true,
  'zamugo' => true,
  'zerote' => true,
  'zurron' => true,
  'acabada' => true,
  'agallas' => true,
  'aguayon' => true,
  'aguayón' => true,
  'alocate' => true,
  'andorga' => true,
  'apestar' => true,
  'arenoso' => true,
  'arepera' => true,
  'argolla' => true,
  'arrecho' => true,
  'artaban' => true,
  'artabán' => true,
  'asarozo' => true,
  'aspirar' => true,
  'aweonao' => true,
  'balurde' => true,
  'bandido' => true,
  'bellaco' => true,
  'belloto' => true,
  'biscate' => true,
  'bollito' => true,
  'boniato' => true,
  'borraja' => true,
  'borrico' => true,
  'bostazo' => true,
  'bujarra' => true,
  'bullyke' => true,
  'cabilla' => true,
  'cabracx' => true,
  'cabrona' => true,
  'cacalán' => true,
  'cachilo' => true,
  'cacorra' => true,
  'cacorro' => true,
  'cafetão' => true,
  'cagadas' => true,
  'cagadón' => true,
  'cagando' => true,
  'cagarla' => true,
  'cagueta' => true,
  'callate' => true,
  'campana' => true,
  'capullo' => true,
  'caralho' => true,
  'cazurro' => true,
  'ceporro' => true,
  'chancay' => true,
  'chancla' => true,
  'charran' => true,
  'charrán' => true,
  'chichis' => true,
  'chiflar' => true,
  'chimbar' => true,
  'chingar' => true,
  'chingow' => true,
  'chorizo' => true,
  'chupada' => true,
  'chúpelo' => true,
  'cochina' => true,
  'cochino' => true,
  'cocones' => true,
  'cogollo' => true,
  'cojiste' => true,
  'colison' => true,
  'colisón' => true,
  'collofe' => true,
  'colloma' => true,
  'conejos' => true,
  'copeton' => true,
  'copetón' => true,
  'corneta' => true,
  'coronta' => true,
  'corotas' => true,
  'corrida' => true,
  'cotorra' => true,
  'coyoles' => true,
  'coyones' => true,
  'cracudo' => true,
  'cremita' => true,
  'cuchara' => true,
  'culamen' => true,
  'culeado' => true,
  'culiolo' => true,
  'cuyones' => true,
  'cállate' => true,
  'desnudo' => true,
  'enojado' => true,
  'erótico' => true,
  'escolta' => true,
  'escroto' => true,
  'espacio' => true,
  'esperma' => true,
  'estulto' => true,
  'extremo' => true,
  'eyacula' => true,
  'fariseo' => true,
  'fetiche' => true,
  'fieltro' => true,
  'follada' => true,
  'furioso' => true,
  'fóllame' => true,
  'ganapan' => true,
  'ganapio' => true,
  'ganapán' => true,
  'garchar' => true,
  'garompa' => true,
  'gorrino' => true,
  'graznar' => true,
  'grencho' => true,
  'heroina' => true,
  'herrero' => true,
  'imbecil' => true,
  'imbécil' => true,
  'incesto' => true,
  'jiromba' => true,
  'kapullo' => true,
  'ladilla' => true,
  'ldnoobw' => true,
  'linchar' => true,
  'lujuria' => true,
  'maconha' => true,
  'maganto' => true,
  'maldita' => true,
  'maldito' => true,
  'maleton' => true,
  'maletón' => true,
  'mamadas' => true,
  'mamando' => true,
  'mamarla' => true,
  'manchas' => true,
  'mapache' => true,
  'maricas' => true,
  'maricos' => true,
  'melones' => true,
  'mentira' => true,
  'merluzo' => true,
  'molesto' => true,
  'mordida' => true,
  'morlaco' => true,
  'nalgona' => true,
  'orgasmo' => true,
  'pajeado' => true,
  'palerma' => true,
  'palinga' => true,
  'palurdo' => true,
  'panarra' => true,
  'paquete' => true,
  'parcera' => true,
  'pasmado' => true,
  'pedorro' => true,
  'pendaho' => true,
  'pendeja' => true,
  'percebe' => true,
  'perilla' => true,
  'picante' => true,
  'picazón' => true,
  'piojoso' => true,
  'piranha' => true,
  'piroboa' => true,
  'pistola' => true,
  'platano' => true,
  'polvazo' => true,
  'poronga' => true,
  'pricing' => true,
  'pringao' => true,
  'privacy' => true,
  'puchero' => true,
  'puchika' => true,
  'pudrete' => true,
  'racista' => true,
  'repisas' => true,
  'rulacho' => true,
  'sadismo' => true,
  'sodomía' => true,
  'sonajas' => true,
  'sopenco' => true,
  'tajarse' => true,
  'timonel' => true,
  'tirarse' => true,
  'tontaco' => true,
  'transar' => true,
  'traveco' => true,
  'trincar' => true,
  'tunante' => true,
  'vendejo' => true,
  'venirse' => true,
  'violada' => true,
  'volarse' => true,
  'zangano' => true,
  'zopenco' => true,
  'zopupla' => true,
  'zoquete' => true,
  'zoófilo' => true,
  'zurullo' => true,
  'zángano' => true,
  'acojonar' => true,
  'adefesio' => true,
  'aguebado' => true,
  'aguevado' => true,
  'atembado' => true,
  'barrabas' => true,
  'barrabás' => true,
  'basurero' => true,
  'berzotas' => true,
  'bizcocho' => true,
  'bofetada' => true,
  'botarate' => true,
  'bromista' => true,
  'bufarron' => true,
  'bufarrón' => true,
  'bujarron' => true,
  'bujarrón' => true,
  'cabestro' => true,
  'cabrones' => true,
  'cacheteo' => true,
  'cachimba' => true,
  'cachorra' => true,
  'calabazo' => true,
  'caliente' => true,
  'caraculo' => true,
  'carajote' => true,
  'carapapa' => true,
  'carapijo' => true,
  'careculo' => true,
  'casquete' => true,
  'cenutrio' => true,
  'chaqueta' => true,
  'chichona' => true,
  'chiflado' => true,
  'chingalo' => true,
  'chingate' => true,
  'chupador' => true,
  'chuparla' => true,
  'chupeton' => true,
  'chupetón' => true,
  'clítoris' => true,
  'cocheche' => true,
  'cojieron' => true,
  'colgados' => true,
  'colgazon' => true,
  'colgazón' => true,
  'colipato' => true,
  'comadres' => true,
  'conchuda' => true,
  'conchudo' => true,
  'correrse' => true,
  'cuchillo' => true,
  'cundango' => true,
  'dondiego' => true,
  'donnadie' => true,
  'egotismo' => true,
  'emputado' => true,
  'enculada' => true,
  'ensartar' => true,
  'erección' => true,
  'erotismo' => true,
  'estúpido' => true,
  'exprimir' => true,
  'eyacular' => true,
  'fantoche' => true,
  'felación' => true,
  'foligoso' => true,
  'follador' => true,
  'follando' => true,
  'frijoles' => true,
  'fulastre' => true,
  'fundillo' => true,
  'gonorrea' => true,
  'guaranga' => true,
  'guitarro' => true,
  'gurriato' => true,
  'gustarle' => true,
  'habahela' => true,
  'habahelá' => true,
  'hediondo' => true,
  'heterito' => true,
  'hijaputa' => true,
  'infierno' => true,
  'insights' => true,
  'jablador' => true,
  'mterbato' => true,
  'maestrob' => true,
  'majadero' => true,
  'malandro' => true,
  'malditos' => true,
  'mameluco' => true,
  'mamplora' => true,
  'mandraga' => true,
  'mapaches' => true,
  'maricona' => true,
  'mariposa' => true,
  'martillo' => true,
  'meapilas' => true,
  'mendrugo' => true,
  'metemelo' => true,
  'metijaco' => true,
  'mojaneta' => true,
  'morfarse' => true,
  'morrongo' => true,
  'orgasmos' => true,
  'orinando' => true,
  'pajeador' => true,
  'pajeando' => true,
  'pajearse' => true,
  'papayona' => true,
  'papirote' => true,
  'pardillo' => true,
  'parguela' => true,
  'pazguato' => true,
  'pechugas' => true,
  'pedófilo' => true,
  'pelotudo' => true,
  'pendejos' => true,
  'penetrar' => true,
  'percanta' => true,
  'perillas' => true,
  'peterete' => true,
  'piltrafa' => true,
  'pinchazo' => true,
  'pinguero' => true,
  'pitañoso' => true,
  'projects' => true,
  'punetero' => true,
  'retardar' => true,
  'sapatã£o' => true,
  'security' => true,
  'tagarote' => true,
  'tontucio' => true,
  'training' => true,
  'trompada' => true,
  'urinario' => true,
  'valiente' => true,
  'vergallo' => true,
  'violador' => true,
  'visajoso' => true,
  'zamacuco' => true,
  'zambombo' => true,
  'zoofilia' => true,
  'zullenco' => true,
  'abortista' => true,
  'abortivos' => true,
  'aguacates' => true,
  'agueonado' => true,
  'alcahuete' => true,
  'alfeñique' => true,
  'alimentos' => true,
  'arrebatar' => true,
  'asaltante' => true,
  'asesinato' => true,
  'bigulinho' => true,
  'bobalicon' => true,
  'bobalicón' => true,
  'bocabuzon' => true,
  'bocabuzón' => true,
  'borrachos' => true,
  'butifarra' => true,
  'cachapera' => true,
  'cagarruta' => true,
  'calambuco' => true,
  'calamidad' => true,
  'cansalmas' => true,
  'caraflema' => true,
  'carajaula' => true,
  'careverga' => true,
  'cebollino' => true,
  'cernicalo' => true,
  'cernícalo' => true,
  'chichotas' => true,
  'chupamela' => true,
  'chuperson' => true,
  'chupãmela' => true,
  'chúpamela' => true,
  'cocinando' => true,
  'cojonazos' => true,
  'comadreja' => true,
  'comepinga' => true,
  'compañero' => true,
  'coprófago' => true,
  'coquetear' => true,
  'culogorro' => true,
  'culopollo' => true,
  'culorroto' => true,
  'dickleche' => true,
  'dirección' => true,
  'estafiate' => true,
  'eyaculado' => true,
  'fijándose' => true,
  'filiberto' => true,
  'gaznapiro' => true,
  'gaznápiro' => true,
  'genitales' => true,
  'goregasmo' => true,
  'gorrumino' => true,
  'hebefilia' => true,
  'hijueputa' => true,
  'ignorante' => true,
  'imbeciles' => true,
  'imbéciles' => true,
  'lamecoños' => true,
  'lumbreras' => true,
  'materbato' => true,
  'macizorra' => true,
  'maldición' => true,
  'malparida' => true,
  'malparido' => true,
  'mamabicho' => true,
  'mamaguebo' => true,
  'mamahuevo' => true,
  'manegueta' => true,
  'mangarran' => true,
  'mangarrán' => true,
  'maricones' => true,
  'mariposon' => true,
  'mariposón' => true,
  'mariquita' => true,
  'mastuerzo' => true,
  'masturbar' => true,
  'mentecato' => true,
  'pamplinas' => true,
  'papafrita' => true,
  'papallona' => true,
  'papanatas' => true,
  'pasmarote' => true,
  'pavitonto' => true,
  'pecholata' => true,
  'pedofilia' => true,
  'pelagatos' => true,
  'petimetre' => true,
  'pinchazos' => true,
  'pitofloro' => true,
  'platanazo' => true,
  'pollasuka' => true,
  'pollopera' => true,
  'quebracho' => true,
  'renacuajo' => true,
  'retardado' => true,
  'rieleches' => true,
  'robaperas' => true,
  'sabandija' => true,
  'sobarsela' => true,
  'sobársela' => true,
  'sodomizar' => true,
  'testículo' => true,
  'tompeates' => true,
  'tonterías' => true,
  'tontísimo' => true,
  'vagabunda' => true,
  'violación' => true,
  'zarzamora' => true,
  'zascandil' => true,
  'acojonardo' => true,
  'alcornoque' => true,
  'atornillar' => true,
  'avergallon' => true,
  'avergallón' => true,
  'bocallanta' => true,
  'borondanga' => true,
  'burundanga' => true,
  'cabezapipe' => true,
  'cachivache' => true,
  'cachufleta' => true,
  'cagalindes' => true,
  'calzamonas' => true,
  'caracarton' => true,
  'caracartón' => true,
  'carechimba' => true,
  'chinchilla' => true,
  'chupamelos' => true,
  'chupoptero' => true,
  'chupóptero' => true,
  'codiciando' => true,
  'comebolsas' => true,
  'comechapas' => true,
  'comeflores' => true,
  'comestacas' => true,
  'compañeros' => true,
  'consolador' => true,
  'coprofagia' => true,
  'coprofagía' => true,
  'coprofilia' => true,
  'cuaresmeño' => true,
  'culopirata' => true,
  'digitación' => true,
  'dominación' => true,
  'dominatriz' => true,
  'echacantos' => true,
  'emputecido' => true,
  'energumeno' => true,
  'energúmeno' => true,
  'esclavitud' => true,
  'escolimoso' => true,
  'eyaculando' => true,
  'folladores' => true,
  'frotándose' => true,
  'gilipichis' => true,
  'golondrina' => true,
  'hebefílico' => true,
  'incestuoso' => true,
  'jilipollas' => true,
  'lamehuevos' => true,
  'lameplatos' => true,
  'lechuguino' => true,
  'lloramigas' => true,
  'longanizas' => true,
  'maconheiro' => true,
  'malasangre' => true,
  'malasombra' => true,
  'mamporrero' => true,
  'mangurrian' => true,
  'mangurrián' => true,
  'mariconazo' => true,
  'mariconear' => true,
  'masoquista' => true,
  'mequetrefe' => true,
  'ninfomanía' => true,
  'pagafantas' => true,
  'pataliebre' => true,
  'pelagallos' => true,
  'pelagambas' => true,
  'pelatigres' => true,
  'pelazarzas' => true,
  'perversión' => true,
  'pervertido' => true,
  'pichabrava' => true,
  'pinchauvas' => true,
  'pintamonas' => true,
  'pocasluces' => true,
  'prostituta' => true,
  'punheteiro' => true,
  'quebrachon' => true,
  'quebrachón' => true,
  'quejándose' => true,
  'quitahipos' => true,
  'rastrapajo' => true,
  'rompeculos' => true,
  'sacamuelas' => true,
  'sangriento' => true,
  'sodomizado' => true,
  'sopladores' => true,
  'tortillera' => true,
  'tragaleche' => true,
  'vergallito' => true,
  'agarraderas' => true,
  'andurriasmo' => true,
  'autoerotico' => true,
  'bebecharcos' => true,
  'bestialidad' => true,
  'bocachancla' => true,
  'boquimuelle' => true,
  'cabecipelao' => true,
  'cabezabuque' => true,
  'cabezahueca' => true,
  'cantimplora' => true,
  'caracaballo' => true,
  'chirimbaina' => true,
  'chupacables' => true,
  'chupasangre' => true,
  'chúpamedias' => true,
  'cibernético' => true,
  'cierrabares' => true,
  'coquimbanos' => true,
  'dendrofilia' => true,
  'empiernarse' => true,
  'estupideces' => true,
  'eyaculación' => true,
  'fanfosquero' => true,
  'filimincias' => true,
  'gilipuertas' => true,
  'hamburguesa' => true,
  'homoerótico' => true,
  'impermeable' => true,
  'lamecharcos' => true,
  'lanzallamas' => true,
  'maestrobate' => true,
  'masturbador' => true,
  'masturbando' => true,
  'masturbarse' => true,
  'metemuertos' => true,
  'morroestufa' => true,
  'peinaovejas' => true,
  'penetración' => true,
  'perrocostra' => true,
  'perroflauta' => true,
  'picapleitos' => true,
  'pillavispas' => true,
  'pornografía' => true,
  'sanguijuela' => true,
  'sinentraero' => true,
  'soplagaitas' => true,
  'tiralevitas' => true,
  'tontopollas' => true,
  'tragaldabas' => true,
  'tragasables' => true,
  'tuercebotas' => true,
  'zampabollos' => true,
  'barriobajero' => true,
  'cantamañanas' => true,
  'chupatrancas' => true,
  'ciberfuckers' => true,
  'conchetumare' => true,
  'consoladores' => true,
  'conversation' => true,
  'descerebrado' => true,
  'desgraciarse' => true,
  'ejarramantas' => true,
  'giraesquinas' => true,
  'huelegateras' => true,
  'linchamiento' => true,
  'masterbación' => true,
  'masturbación' => true,
  'matacandiles' => true,
  'pasmasuegras' => true,
  'persiguiendo' => true,
  'sinsustancia' => true,
  'soplaguindas' => true,
  'abrazafarolas' => true,
  'acrotomofilia' => true,
  'cabezaalberca' => true,
  'conchetumadre' => true,
  'escornacabras' => true,
  'eyaculaciones' => true,
  'rebañasandias' => true,
  'rebañasandías' => true,
  'traseropirata' => true,
  'zarrapastroso' => true,
  'ambisexualidad' => true,
  'arrastracueros' => true,
  'calientahielos' => true,
  'chiquilicuatre' => true,
  'cuerpoescombro' => true,
  'desgarracalzas' => true,
  'esbaratabailes' => true,
  'masterbaciones' => true,
  'muerdesartenes' => true,
  'peinabombillas' => true,
  'revientabaules' => true,
  'zurcefrenillos' => true,
  'desmoronamiento' => true,
  'espermatozoides' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'pelo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'a' => 1,
      'pelo' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'acción',
      1 => 'morena',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'acción' => 1,
      'morena' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'acción',
      1 => 'rubia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'acción' => 1,
      'rubia' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'almohadas',
      1 => 'sucias',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'almohadas' => 1,
      'sucias' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'apenas',
      1 => 'legal',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'apenas' => 1,
      'legal' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bang',
      1 => 'bros',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'bang' => 1,
      'bros' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buena',
      1 => 'caca',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buena' => 1,
      'caca' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buena',
      1 => 'chica',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buena' => 1,
      'chica' => 0,
    ),
  ),
  8 => 
  array (
    'badPhrase' => 
    array (
      0 => 'buscador',
      1 => 'de',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'buscador' => 1,
      'de' => 0,
    ),
  ),
  9 => 
  array (
    'badPhrase' => 
    array (
      0 => 'care',
      1 => 'picha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'care' => 1,
      'picha' => 0,
    ),
  ),
  10 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'cagada',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cara' => 1,
      'cagada' => 0,
    ),
  ),
  11 => 
  array (
    'badPhrase' => 
    array (
      0 => 'care',
      1 => 'crika',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'care' => 1,
      'crika' => 0,
    ),
  ),
  12 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chica',
      1 => 'en',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chica' => 1,
      'en' => 0,
    ),
  ),
  13 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chile',
      1 => 'pelon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chile' => 1,
      'pelon' => 0,
    ),
  ),
  14 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chingada',
      1 => 'madre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chingada' => 1,
      'madre' => 0,
    ),
  ),
  15 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chorros',
      1 => 'femeninos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chorros' => 1,
      'femeninos' => 0,
    ),
  ),
  16 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chorros',
      1 => 'masculinos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chorros' => 1,
      'masculinos' => 0,
    ),
  ),
  17 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'guasca',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 1,
      'guasca' => 0,
    ),
  ),
  18 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'pau',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 1,
      'pau' => 0,
    ),
  ),
  19 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'verga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 1,
      'verga' => 0,
    ),
  ),
  20 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cojes',
      1 => 'delfinos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'cojes' => 1,
      'delfinos' => 0,
    ),
  ),
  21 => 
  array (
    'badPhrase' => 
    array (
      0 => 'como',
      1 => 'asesinar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'como' => 1,
      'asesinar' => 0,
    ),
  ),
  22 => 
  array (
    'badPhrase' => 
    array (
      0 => 'como',
      1 => 'matar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'como' => 1,
      'matar' => 0,
    ),
  ),
  23 => 
  array (
    'badPhrase' => 
    array (
      0 => 'conyo',
      1 => 'sueseeyo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'conyo' => 1,
      'sueseeyo' => 0,
    ),
  ),
  24 => 
  array (
    'badPhrase' => 
    array (
      0 => 'contact',
      1 => 'github',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'contact' => 1,
      'github' => 0,
    ),
  ),
  25 => 
  array (
    'badPhrase' => 
    array (
      0 => 'conyo',
      1 => 'sucio',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'conyo' => 1,
      'sucio' => 0,
    ),
  ),
  26 => 
  array (
    'badPhrase' => 
    array (
      0 => 'culo',
      1 => 'gay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'culo' => 1,
      'gay' => 0,
    ),
  ),
  27 => 
  array (
    'badPhrase' => 
    array (
      0 => 'culo',
      1 => 'mono',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'culo' => 1,
      'mono' => 0,
    ),
  ),
  28 => 
  array (
    'badPhrase' => 
    array (
      0 => 'culo',
      1 => 'roto',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'culo' => 1,
      'roto' => 0,
    ),
  ),
  29 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dale',
      1 => 'puneta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dale' => 1,
      'puneta' => 0,
    ),
  ),
  30 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dame',
      1 => 'cabesa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dame' => 1,
      'cabesa' => 0,
    ),
  ),
  31 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dame',
      1 => 'culo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dame' => 1,
      'culo' => 0,
    ),
  ),
  32 => 
  array (
    'badPhrase' => 
    array (
      0 => 'de',
      1 => 'mierda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  33 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dedo',
      1 => 'follado',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'dedo' => 1,
      'follado' => 0,
    ),
  ),
  34 => 
  array (
    'badPhrase' => 
    array (
      0 => 'doble',
      1 => 'polla',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'doble' => 1,
      'polla' => 0,
    ),
  ),
  35 => 
  array (
    'badPhrase' => 
    array (
      0 => 'duchas',
      1 => 'marrones',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'duchas' => 1,
      'marrones' => 0,
    ),
  ),
  36 => 
  array (
    'badPhrase' => 
    array (
      0 => 'el',
      1 => 'cabron',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'el' => 1,
      'cabron' => 0,
    ),
  ),
  37 => 
  array (
    'badPhrase' => 
    array (
      0 => 'el',
      1 => 'ella',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'el' => 1,
      'ella' => 0,
    ),
  ),
  38 => 
  array (
    'badPhrase' => 
    array (
      0 => 'enano',
      1 => 'mental',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'enano' => 1,
      'mental' => 0,
    ),
  ),
  39 => 
  array (
    'badPhrase' => 
    array (
      0 => 'estilo',
      1 => 'perrito',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'estilo' => 1,
      'perrito' => 0,
    ),
  ),
  40 => 
  array (
    'badPhrase' => 
    array (
      0 => 'estupito',
      1 => 'puta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'estupito' => 1,
      'puta' => 0,
    ),
  ),
  41 => 
  array (
    'badPhrase' => 
    array (
      0 => 'file',
      1 => 'filter',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'file' => 1,
      'filter' => 0,
    ),
  ),
  42 => 
  array (
    'badPhrase' => 
    array (
      0 => 'files',
      1 => 'changed',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'files' => 1,
      'changed' => 0,
    ),
  ),
  43 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fucking',
      1 => 'dumbass',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'fucking' => 1,
      'dumbass' => 0,
    ),
  ),
  44 => 
  array (
    'badPhrase' => 
    array (
      0 => 'garganta',
      1 => 'profunda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'garganta' => 1,
      'profunda' => 0,
    ),
  ),
  45 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ghiata',
      1 => 'puto',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ghiata' => 1,
      'puto' => 0,
    ),
  ),
  46 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gofre',
      1 => 'azul',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gofre' => 1,
      'azul' => 0,
    ),
  ),
  47 => 
  array (
    'badPhrase' => 
    array (
      0 => 'gran',
      1 => 'mierda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'gran' => 1,
      'mierda' => 0,
    ),
  ),
  48 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grandes',
      1 => 'aldabas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'grandes' => 1,
      'aldabas' => 0,
    ),
  ),
  49 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hazme',
      1 => 'llegar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hazme' => 1,
      'llegar' => 0,
    ),
  ),
  50 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijue',
      1 => 'puta',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'hijue' => 1,
      'puta' => 0,
    ),
  ),
  51 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jam',
      1 => 'ding',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'jam' => 1,
      'ding' => 0,
    ),
  ),
  52 => 
  array (
    'badPhrase' => 
    array (
      0 => 'joroba',
      1 => 'seca',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'joroba' => 1,
      'seca' => 0,
    ),
  ),
  53 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kaka',
      1 => 'deltaro',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'kaka' => 1,
      'deltaro' => 0,
    ),
  ),
  54 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'cage',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'la' => 1,
      'cage' => 0,
    ),
  ),
  55 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'hostia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'la' => 1,
      'hostia' => 0,
    ),
  ),
  56 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'ingle',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'la' => 1,
      'ingle' => 0,
    ),
  ),
  57 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lambe',
      1 => 'bolsa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lambe' => 1,
      'bolsa' => 0,
    ),
  ),
  58 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lambe',
      1 => 'culo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lambe' => 1,
      'culo' => 0,
    ),
  ),
  59 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lambe',
      1 => 'huevos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lambe' => 1,
      'huevos' => 0,
    ),
  ),
  60 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lame',
      1 => 'bolsas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lame' => 1,
      'bolsas' => 0,
    ),
  ),
  61 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lame',
      1 => 'bota',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lame' => 1,
      'bota' => 0,
    ),
  ),
  62 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lame',
      1 => 'botas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lame' => 1,
      'botas' => 0,
    ),
  ),
  63 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lame',
      1 => 'culo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'lame' => 1,
      'culo' => 0,
    ),
  ),
  64 => 
  array (
    'badPhrase' => 
    array (
      0 => 'los',
      1 => 'cojones',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'los' => 1,
      'cojones' => 0,
    ),
  ),
  65 => 
  array (
    'badPhrase' => 
    array (
      0 => 'los',
      1 => 'pechos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'los' => 1,
      'pechos' => 0,
    ),
  ),
  66 => 
  array (
    'badPhrase' => 
    array (
      0 => 'madre',
      1 => 'folladora',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'madre' => 1,
      'folladora' => 0,
    ),
  ),
  67 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maestro',
      1 => 'murciélago',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'maestro' => 1,
      'murciélago' => 0,
    ),
  ),
  68 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mal',
      1 => 'cogida',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mal' => 1,
      'cogida' => 0,
    ),
  ),
  69 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mal',
      1 => 'parido',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mal' => 1,
      'parido' => 0,
    ),
  ),
  70 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'culo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'culo' => 0,
    ),
  ),
  71 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'guaebo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'guaebo' => 0,
    ),
  ),
  72 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'guaevo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'guaevo' => 0,
    ),
  ),
  73 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'guevo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'guevo' => 0,
    ),
  ),
  74 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'huevos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'huevos' => 0,
    ),
  ),
  75 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'melo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'melo' => 0,
    ),
  ),
  76 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'verga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'verga' => 0,
    ),
  ),
  77 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'vergas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'vergas' => 0,
    ),
  ),
  78 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'yema',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'mama' => 1,
      'yema' => 0,
    ),
  ),
  79 => 
  array (
    'badPhrase' => 
    array (
      0 => 'manda',
      1 => 'huevos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'manda' => 1,
      'huevos' => 0,
    ),
  ),
  80 => 
  array (
    'badPhrase' => 
    array (
      0 => 'masca',
      1 => 'verga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'masca' => 1,
      'verga' => 0,
    ),
  ),
  81 => 
  array (
    'badPhrase' => 
    array (
      0 => 'masticar',
      1 => 'trasero',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'masticar' => 1,
      'trasero' => 0,
    ),
  ),
  82 => 
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
  83 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'jodã­',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'me' => 1,
      'jodã­' => 0,
    ),
  ),
  84 => 
  array (
    'badPhrase' => 
    array (
      0 => 'muncher',
      1 => 'alfombra',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'muncher' => 1,
      'alfombra' => 0,
    ),
  ),
  85 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'jodas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'no' => 1,
      'jodas' => 0,
    ),
  ),
  86 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'mames',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'no' => 1,
      'mames' => 0,
    ),
  ),
  87 => 
  array (
    'badPhrase' => 
    array (
      0 => 'panocha',
      1 => 'hedionda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'panocha' => 1,
      'hedionda' => 0,
    ),
  ),
  88 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pechos',
      1 => 'grandes',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pechos' => 1,
      'grandes' => 0,
    ),
  ),
  89 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pelota',
      1 => 'lamiendo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pelota' => 1,
      'lamiendo' => 0,
    ),
  ),
  90 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pequeno',
      1 => 'pito',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pequeno' => 1,
      'pito' => 0,
    ),
  ),
  91 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pinch',
      1 => 'mamon',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pinch' => 1,
      'mamon' => 0,
    ),
  ),
  92 => 
  array (
    'badPhrase' => 
    array (
      0 => 'polla',
      1 => 'gigante',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'polla' => 1,
      'gigante' => 0,
    ),
  ),
  93 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pull',
      1 => 'requests',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pull' => 1,
      'requests' => 0,
    ),
  ),
  94 => 
  array (
    'badPhrase' => 
    array (
      0 => 'punta',
      1 => 'pincha',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'punta' => 1,
      'pincha' => 0,
    ),
  ),
  95 => 
  array (
    'badPhrase' => 
    array (
      0 => 'punto',
      1 => 'g',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'punto' => 1,
      'g' => 0,
    ),
  ),
  96 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pura',
      1 => 'mierda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'pura' => 1,
      'mierda' => 0,
    ),
  ),
  97 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'madre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puta' => 1,
      'madre' => 0,
    ),
  ),
  98 => 
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
  99 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'sucia',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'puta' => 1,
      'sucia' => 0,
    ),
  ),
  100 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'bacano',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'que' => 1,
      'bacano' => 0,
    ),
  ),
  101 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'culo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'que' => 1,
      'culo' => 0,
    ),
  ),
  102 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rata',
      1 => 'inmunda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'rata' => 1,
      'inmunda' => 0,
    ),
  ),
  103 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sacwe',
      1 => 'salop',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sacwe' => 1,
      'salop' => 0,
    ),
  ),
  104 => 
  array (
    'badPhrase' => 
    array (
      0 => 'se',
      1 => 'corre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'se' => 1,
      'corre' => 0,
    ),
  ),
  105 => 
  array (
    'badPhrase' => 
    array (
      0 => 'seen',
      1 => 'berguensa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'seen' => 1,
      'berguensa' => 0,
    ),
  ),
  106 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sexo',
      1 => 'gay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sexo' => 1,
      'gay' => 0,
    ),
  ),
  107 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sexo',
      1 => 'oral',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sexo' => 1,
      'oral' => 0,
    ),
  ),
  108 => 
  array (
    'badPhrase' => 
    array (
      0 => 'señor',
      1 => 'gay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'señor' => 1,
      'gay' => 0,
    ),
  ),
  109 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sin',
      1 => 'vergüenza',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sin' => 1,
      'vergüenza' => 0,
    ),
  ),
  110 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sucio',
      1 => 'sanchez',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'sucio' => 1,
      'sanchez' => 0,
    ),
  ),
  111 => 
  array (
    'badPhrase' => 
    array (
      0 => 'suge',
      1 => 'mangile',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'suge' => 1,
      'mangile' => 0,
    ),
  ),
  112 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tardo',
      1 => 'gay',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tardo' => 1,
      'gay' => 0,
    ),
  ),
  113 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'eploto',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'te' => 1,
      'eploto' => 0,
    ),
  ),
  114 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'mato',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'te' => 1,
      'mato' => 0,
    ),
  ),
  115 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'odio',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'te' => 1,
      'odio' => 0,
    ),
  ),
  116 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tengo',
      1 => 'ganas',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tengo' => 1,
      'ganas' => 0,
    ),
  ),
  117 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tetillas',
      1 => 'laser',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tetillas' => 1,
      'laser' => 0,
    ),
  ),
  118 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tia',
      1 => 'buena',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tia' => 1,
      'buena' => 0,
    ),
  ),
  119 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tio',
      1 => 'bueno',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tio' => 1,
      'bueno' => 0,
    ),
  ),
  120 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tirando',
      1 => 'pedos',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tirando' => 1,
      'pedos' => 0,
    ),
  ),
  121 => 
  array (
    'badPhrase' => 
    array (
      0 => 'trabajo',
      1 => 'manual',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'trabajo' => 1,
      'manual' => 0,
    ),
  ),
  122 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'madre',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tu' => 1,
      'madre' => 0,
    ),
  ),
  123 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tía',
      1 => 'buena',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'tía' => 1,
      'buena' => 0,
    ),
  ),
  124 => 
  array (
    'badPhrase' => 
    array (
      0 => 'un',
      1 => 'pedo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'un' => 1,
      'pedo' => 0,
    ),
  ),
  125 => 
  array (
    'badPhrase' => 
    array (
      0 => 'un',
      1 => 'polvito',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'un' => 1,
      'polvito' => 0,
    ),
  ),
  126 => 
  array (
    'badPhrase' => 
    array (
      0 => 'un',
      1 => 'putero',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'un' => 1,
      'putero' => 0,
    ),
  ),
  127 => 
  array (
    'badPhrase' => 
    array (
      0 => 'una',
      1 => 'mierda',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'una' => 1,
      'mierda' => 0,
    ),
  ),
  128 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vales',
      1 => 'verga',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vales' => 1,
      'verga' => 0,
    ),
  ),
  129 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vali',
      1 => 'cayampa',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vali' => 1,
      'cayampa' => 0,
    ),
  ),
  130 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vamos',
      1 => 'trepar',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'vamos' => 1,
      'trepar' => 0,
    ),
  ),
  131 => 
  array (
    'badPhrase' => 
    array (
      0 => 'wele',
      1 => 'melo',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'wele' => 1,
      'melo' => 0,
    ),
  ),
  132 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'clasificado',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'clasificado' => 0,
    ),
  ),
  133 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'cuatro',
      2 => 'patas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'a' => 2,
      'cuatro' => 1,
      'patas' => 0,
    ),
  ),
  134 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'a' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  135 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'que',
      2 => 'chirlo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'a' => 2,
      'que' => 1,
      'chirlo' => 0,
    ),
  ),
  136 => 
  array (
    'badPhrase' => 
    array (
      0 => 'abrazaderas',
      1 => 'de',
      2 => 'trébol',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'abrazaderas' => 2,
      'de' => 1,
      'trébol' => 0,
    ),
  ),
  137 => 
  array (
    'badPhrase' => 
    array (
      0 => 'acostarse',
      1 => 'con',
      2 => 'rosemaria',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'acostarse' => 2,
      'con' => 1,
      'rosemaria' => 0,
    ),
  ),
  138 => 
  array (
    'badPhrase' => 
    array (
      0 => 'agujero',
      1 => 'de',
      2 => 'tapón',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'agujero' => 2,
      'de' => 1,
      'tapón' => 0,
    ),
  ),
  139 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bajo',
      1 => 'a',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bajo' => 2,
      'a' => 1,
      'culo' => 0,
    ),
  ),
  140 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bajo',
      1 => 'a',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bajo' => 2,
      'a' => 1,
      'mierda' => 0,
    ),
  ),
  141 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bastardo',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bastardo' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  142 => 
  array (
    'badPhrase' => 
    array (
      0 => 'baño',
      1 => 'de',
      2 => 'oro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'baño' => 2,
      'de' => 1,
      'oro' => 0,
    ),
  ),
  143 => 
  array (
    'badPhrase' => 
    array (
      0 => 'besa',
      1 => 'me',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'besa' => 2,
      'me' => 1,
      'culo' => 0,
    ),
  ),
  144 => 
  array (
    'badPhrase' => 
    array (
      0 => 'besame',
      1 => 'el',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'besame' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  145 => 
  array (
    'badPhrase' => 
    array (
      0 => 'beso',
      1 => 'mi',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'beso' => 2,
      'mi' => 1,
      'culo' => 0,
    ),
  ),
  146 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boca',
      1 => 'de',
      2 => 'pedo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'boca' => 2,
      'de' => 1,
      'pedo' => 0,
    ),
  ),
  147 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boca',
      1 => 'de',
      2 => 'tonel',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'boca' => 2,
      'de' => 1,
      'tonel' => 0,
    ),
  ),
  148 => 
  array (
    'badPhrase' => 
    array (
      0 => 'boca',
      1 => 'de',
      2 => 'trapo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'boca' => 2,
      'de' => 1,
      'trapo' => 0,
    ),
  ),
  149 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bola',
      1 => 'de',
      2 => 'grasa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bola' => 2,
      'de' => 1,
      'grasa' => 0,
    ),
  ),
  150 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bolsa',
      1 => 'de',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bolsa' => 2,
      'de' => 1,
      'culo' => 0,
    ),
  ),
  151 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bolsa',
      1 => 'de',
      2 => 'pelota',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bolsa' => 2,
      'de' => 1,
      'pelota' => 0,
    ),
  ),
  152 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bolsillo',
      1 => 'de',
      2 => 'coã±os',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bolsillo' => 2,
      'de' => 1,
      'coã±os' => 0,
    ),
  ),
  153 => 
  array (
    'badPhrase' => 
    array (
      0 => 'botones',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'botones' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  154 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bueno',
      1 => 'pa',
      2 => 'nada',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'bueno' => 2,
      'pa' => 1,
      'nada' => 0,
    ),
  ),
  155 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cabeza',
      1 => 'de',
      2 => 'chorlito',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cabeza' => 2,
      'de' => 1,
      'chorlito' => 0,
    ),
  ),
  156 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cabeza',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cabeza' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  157 => 
  array (
    'badPhrase' => 
    array (
      0 => 'caja',
      1 => 'de',
      2 => 'vaca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'caja' => 2,
      'de' => 1,
      'vaca' => 0,
    ),
  ),
  158 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'cona',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'cona' => 0,
    ),
  ),
  159 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'cucuy',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'cucuy' => 0,
    ),
  ),
  160 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'culo' => 0,
    ),
  ),
  161 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  162 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'monda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'monda' => 0,
    ),
  ),
  163 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'muerto',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'muerto' => 0,
    ),
  ),
  164 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'pupu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'pupu' => 0,
    ),
  ),
  165 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'de',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'de' => 1,
      'verga' => 0,
    ),
  ),
  166 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cara',
      1 => 'e',
      2 => 'semilla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cara' => 2,
      'e' => 1,
      'semilla' => 0,
    ),
  ),
  167 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cayate',
      1 => 'la',
      2 => 'boca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cayate' => 2,
      'la' => 1,
      'boca' => 0,
    ),
  ),
  168 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinga',
      1 => 'a',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chinga' => 2,
      'a' => 1,
      'madre' => 0,
    ),
  ),
  169 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinga',
      1 => 'su',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chinga' => 2,
      'su' => 1,
      'madre' => 0,
    ),
  ),
  170 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinga',
      1 => 'tu',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chinga' => 2,
      'tu' => 1,
      'madre' => 0,
    ),
  ),
  171 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chingas',
      1 => 'tu',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chingas' => 2,
      'tu' => 1,
      'madre' => 0,
    ),
  ),
  172 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chingue',
      1 => 'su',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chingue' => 2,
      'su' => 1,
      'madre' => 0,
    ),
  ),
  173 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinko',
      1 => 'me',
      2 => 'dinga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chinko' => 2,
      'me' => 1,
      'dinga' => 0,
    ),
  ),
  174 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'me',
      2 => 'pito',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'me' => 1,
      'pito' => 0,
    ),
  ),
  175 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'me',
      2 => 'puto',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'me' => 1,
      'puto' => 0,
    ),
  ),
  176 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'meu',
      2 => 'pau',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'meu' => 1,
      'pau' => 0,
    ),
  ),
  177 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'mi',
      2 => 'pito',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'mi' => 1,
      'pito' => 0,
    ),
  ),
  178 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'mi',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'mi' => 1,
      'verga' => 0,
    ),
  ),
  179 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'mi',
      2 => 'vierga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'mi' => 1,
      'vierga' => 0,
    ),
  ),
  180 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'mis',
      2 => 'lluevos',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 2,
      'mis' => 1,
      'lluevos' => 0,
    ),
  ),
  181 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupame',
      1 => 'el',
      2 => 'pito',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupame' => 2,
      'el' => 1,
      'pito' => 0,
    ),
  ),
  182 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupame',
      1 => 'la',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupame' => 2,
      'la' => 1,
      'mierda' => 0,
    ),
  ),
  183 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupame',
      1 => 'la',
      2 => 'turca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupame' => 2,
      'la' => 1,
      'turca' => 0,
    ),
  ),
  184 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupame',
      1 => 'la',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupame' => 2,
      'la' => 1,
      'verga' => 0,
    ),
  ),
  185 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupas',
      1 => 'mis',
      2 => 'huevos',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupas' => 2,
      'mis' => 1,
      'huevos' => 0,
    ),
  ),
  186 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupeme',
      1 => 'la',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chupeme' => 2,
      'la' => 1,
      'verga' => 0,
    ),
  ),
  187 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chúpame',
      1 => 'la',
      2 => 'polla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'chúpame' => 2,
      'la' => 1,
      'polla' => 0,
    ),
  ),
  188 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cono',
      1 => 'su',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cono' => 2,
      'su' => 1,
      'madre' => 0,
    ),
  ),
  189 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cómeme',
      1 => 'el',
      2 => 'ccabrón',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'cómeme' => 2,
      'el' => 1,
      'ccabrón' => 0,
    ),
  ),
  190 => 
  array (
    'badPhrase' => 
    array (
      0 => 'de',
      1 => 'puta',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'de' => 2,
      'puta' => 1,
      'madre' => 0,
    ),
  ),
  191 => 
  array (
    'badPhrase' => 
    array (
      0 => 'dedo',
      1 => 'de',
      2 => 'camello',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'dedo' => 2,
      'de' => 1,
      'camello' => 0,
    ),
  ),
  192 => 
  array (
    'badPhrase' => 
    array (
      0 => 'devorador',
      1 => 'de',
      2 => 'semen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'devorador' => 2,
      'de' => 1,
      'semen' => 0,
    ),
  ),
  193 => 
  array (
    'badPhrase' => 
    array (
      0 => 'el',
      1 => 'puto',
      2 => 'ese',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'el' => 2,
      'puto' => 1,
      'ese' => 0,
    ),
  ),
  194 => 
  array (
    'badPhrase' => 
    array (
      0 => 'empacador',
      1 => 'de',
      2 => 'chocolate',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'empacador' => 2,
      'de' => 1,
      'chocolate' => 0,
    ),
  ),
  195 => 
  array (
    'badPhrase' => 
    array (
      0 => 'empaquetador',
      1 => 'de',
      2 => 'dulces',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'empaquetador' => 2,
      'de' => 1,
      'dulces' => 0,
    ),
  ),
  196 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eres',
      1 => 'un',
      2 => 'pendejo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'eres' => 2,
      'un' => 1,
      'pendejo' => 0,
    ),
  ),
  197 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eres',
      1 => 'una',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'eres' => 2,
      'una' => 1,
      'puta' => 0,
    ),
  ),
  198 => 
  array (
    'badPhrase' => 
    array (
      0 => 'eres',
      1 => 'una',
      2 => 'zorra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'eres' => 2,
      'una' => 1,
      'zorra' => 0,
    ),
  ),
  199 => 
  array (
    'badPhrase' => 
    array (
      0 => 'estupido',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'estupido' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  200 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fetichismo',
      1 => 'de',
      2 => 'pies',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fetichismo' => 2,
      'de' => 1,
      'pies' => 0,
    ),
  ),
  201 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fiesta',
      1 => 'de',
      2 => 'limon',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fiesta' => 2,
      'de' => 1,
      'limon' => 0,
    ),
  ),
  202 => 
  array (
    'badPhrase' => 
    array (
      0 => 'fiesta',
      1 => 'de',
      2 => 'salchichas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'fiesta' => 2,
      'de' => 1,
      'salchichas' => 0,
    ),
  ),
  203 => 
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
  204 => 
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
  205 => 
  array (
    'badPhrase' => 
    array (
      0 => 'filhoa',
      1 => 'da',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'filhoa' => 2,
      'da' => 1,
      'puta' => 0,
    ),
  ),
  206 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grande',
      1 => 'y',
      2 => 'negro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'grande' => 2,
      'y' => 1,
      'negro' => 0,
    ),
  ),
  207 => 
  array (
    'badPhrase' => 
    array (
      0 => 'haciendo',
      1 => 'el',
      2 => 'amor',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'haciendo' => 2,
      'el' => 1,
      'amor' => 0,
    ),
  ),
  208 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hija',
      1 => 'de',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hija' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  209 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'perra',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 2,
      'de' => 1,
      'perra' => 0,
    ),
  ),
  210 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'e',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 2,
      'e' => 1,
      'puta' => 0,
    ),
  ),
  211 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijos',
      1 => 'de',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hijos' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  212 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hueles',
      1 => 'a',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'hueles' => 2,
      'a' => 1,
      'mierda' => 0,
    ),
  ),
  213 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ir',
      1 => 'a',
      2 => 'tientas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ir' => 2,
      'a' => 1,
      'tientas' => 0,
    ),
  ),
  214 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jo',
      1 => 'de',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jo' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  215 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jugo',
      1 => 'de',
      2 => 'bebe',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jugo' => 2,
      'de' => 1,
      'bebe' => 0,
    ),
  ),
  216 => 
  array (
    'badPhrase' => 
    array (
      0 => 'jugo',
      1 => 'de',
      2 => 'polla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'jugo' => 2,
      'de' => 1,
      'polla' => 0,
    ),
  ),
  217 => 
  array (
    'badPhrase' => 
    array (
      0 => 'kayate',
      1 => 'la',
      2 => 'boka',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'kayate' => 2,
      'la' => 1,
      'boka' => 0,
    ),
  ),
  218 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ladron',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ladron' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  219 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ladrón',
      1 => 'de',
      2 => 'traseros',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ladrón' => 2,
      'de' => 1,
      'traseros' => 0,
    ),
  ),
  220 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lamer',
      1 => 'el',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lamer' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  221 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lang',
      1 => 'susune',
      2 => 'mamaw',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lang' => 2,
      'susune' => 1,
      'mamaw' => 0,
    ),
  ),
  222 => 
  array (
    'badPhrase' => 
    array (
      0 => 'lavate',
      1 => 'ese',
      2 => 'culo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'lavate' => 2,
      'ese' => 1,
      'culo' => 0,
    ),
  ),
  223 => 
  array (
    'badPhrase' => 
    array (
      0 => 'llamada',
      1 => 'de',
      2 => 'botín',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'llamada' => 2,
      'de' => 1,
      'botín' => 0,
    ),
  ),
  224 => 
  array (
    'badPhrase' => 
    array (
      0 => 'llámeme',
      1 => 'la',
      2 => 'polla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'llámeme' => 2,
      'la' => 1,
      'polla' => 0,
    ),
  ),
  225 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'si',
      2 => 'haya',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mama' => 2,
      'si' => 1,
      'haya' => 0,
    ),
  ),
  226 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mama',
      1 => 'si',
      2 => 'higa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mama' => 2,
      'si' => 1,
      'higa' => 0,
    ),
  ),
  227 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamame',
      1 => 'el',
      2 => 'chile',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mamame' => 2,
      'el' => 1,
      'chile' => 0,
    ),
  ),
  228 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamame',
      1 => 'el',
      2 => 'guevo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mamame' => 2,
      'el' => 1,
      'guevo' => 0,
    ),
  ),
  229 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mamame',
      1 => 'la',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mamame' => 2,
      'la' => 1,
      'verga' => 0,
    ),
  ),
  230 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mara',
      1 => 'dicki',
      2 => 'sackaro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mara' => 2,
      'dicki' => 1,
      'sackaro' => 0,
    ),
  ),
  231 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maricon',
      1 => 'de',
      2 => 'playa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'maricon' => 2,
      'de' => 1,
      'playa' => 0,
    ),
  ),
  232 => 
  array (
    'badPhrase' => 
    array (
      0 => 'maricon',
      1 => 'de',
      2 => 'playa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'maricon' => 2,
      'de' => 1,
      'playa' => 0,
    ),
  ),
  233 => 
  array (
    'badPhrase' => 
    array (
      0 => 'masa',
      1 => 'para',
      2 => 'bebes',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'masa' => 2,
      'para' => 1,
      'bebes' => 0,
    ),
  ),
  234 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mascador',
      1 => 'de',
      2 => 'alfombras',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mascador' => 2,
      'de' => 1,
      'alfombras' => 0,
    ),
  ),
  235 => 
  array (
    'badPhrase' => 
    array (
      0 => 'masticador',
      1 => 'de',
      2 => 'alfombras',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'masticador' => 2,
      'de' => 1,
      'alfombras' => 0,
    ),
  ),
  236 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'la',
      2 => 'pelas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'me' => 2,
      'la' => 1,
      'pelas' => 0,
    ),
  ),
  237 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'lo',
      2 => 'chupa',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'me' => 2,
      'lo' => 1,
      'chupa' => 0,
    ),
  ),
  238 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'vale',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'me' => 2,
      'vale' => 1,
      'madre' => 0,
    ),
  ),
  239 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'vale',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'me' => 2,
      'vale' => 1,
      'verga' => 0,
    ),
  ),
  240 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'valle',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'me' => 2,
      'valle' => 1,
      'verga' => 0,
    ),
  ),
  241 => 
  array (
    'badPhrase' => 
    array (
      0 => 'metase',
      1 => 'el',
      2 => 'dedo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'metase' => 2,
      'el' => 1,
      'dedo' => 0,
    ),
  ),
  242 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mierdamierdahijo',
      1 => 'de',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mierdamierdahijo' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  243 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mogolico',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mogolico' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  244 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mordaza',
      1 => 'de',
      2 => 'bola',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'mordaza' => 2,
      'de' => 1,
      'bola' => 0,
    ),
  ),
  245 => 
  array (
    'badPhrase' => 
    array (
      0 => 'nadie',
      1 => 'te',
      2 => 'quiere',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'nadie' => 2,
      'te' => 1,
      'quiere' => 0,
    ),
  ),
  246 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'me',
      2 => 'jodas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'no' => 2,
      'me' => 1,
      'jodas' => 0,
    ),
  ),
  247 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'me',
      2 => 'jodás',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'no' => 2,
      'me' => 1,
      'jodás' => 0,
    ),
  ),
  248 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'seas',
      2 => 'gilipollas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'no' => 2,
      'seas' => 1,
      'gilipollas' => 0,
    ),
  ),
  249 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'seas',
      2 => 'mamon',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'no' => 2,
      'seas' => 1,
      'mamon' => 0,
    ),
  ),
  250 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ojala',
      1 => 'que',
      2 => 'mueras',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'ojala' => 2,
      'que' => 1,
      'mueras' => 0,
    ),
  ),
  251 => 
  array (
    'badPhrase' => 
    array (
      0 => 'oleoducto',
      1 => 'de',
      2 => 'alaska',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'oleoducto' => 2,
      'de' => 1,
      'alaska' => 0,
    ),
  ),
  252 => 
  array (
    'badPhrase' => 
    array (
      0 => 'patear',
      1 => 'la',
      2 => 'pelota',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'patear' => 2,
      'la' => 1,
      'pelota' => 0,
    ),
  ),
  253 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pau',
      1 => 'no',
      2 => 'cu',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pau' => 2,
      'no' => 1,
      'cu' => 0,
    ),
  ),
  254 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pedaso',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pedaso' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  255 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pellejo',
      1 => 'de',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pellejo' => 2,
      'de' => 1,
      'verga' => 0,
    ),
  ),
  256 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pendejo',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pendejo' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  257 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pintche',
      1 => 'de',
      2 => 'madre',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'pintche' => 2,
      'de' => 1,
      'madre' => 0,
    ),
  ),
  258 => 
  array (
    'badPhrase' => 
    array (
      0 => 'por',
      1 => 'la',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'por' => 2,
      'la' => 1,
      'mierda' => 0,
    ),
  ),
  259 => 
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
  260 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'lo',
      2 => 'pario',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'que' => 2,
      'lo' => 1,
      'pario' => 0,
    ),
  ),
  261 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'den',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'que' => 2,
      'te' => 1,
      'den' => 0,
    ),
  ),
  262 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'follen',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'que' => 2,
      'te' => 1,
      'follen' => 0,
    ),
  ),
  263 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'jodan',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'que' => 2,
      'te' => 1,
      'jodan' => 0,
    ),
  ),
  264 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'jodas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'que' => 2,
      'te' => 1,
      'jodas' => 0,
    ),
  ),
  265 => 
  array (
    'badPhrase' => 
    array (
      0 => 'qué',
      1 => 'te',
      2 => 'jodan',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'qué' => 2,
      'te' => 1,
      'jodan' => 0,
    ),
  ),
  266 => 
  array (
    'badPhrase' => 
    array (
      0 => 'racimo',
      1 => 'de',
      2 => 'mierda',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'racimo' => 2,
      'de' => 1,
      'mierda' => 0,
    ),
  ),
  267 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rapa',
      1 => 'tu',
      2 => 'mai',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rapa' => 2,
      'tu' => 1,
      'mai' => 0,
    ),
  ),
  268 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rosquilla',
      1 => 'de',
      2 => 'gelatina',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'rosquilla' => 2,
      'de' => 1,
      'gelatina' => 0,
    ),
  ),
  269 => 
  array (
    'badPhrase' => 
    array (
      0 => 'saco',
      1 => 'de',
      2 => 'pelota',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'saco' => 2,
      'de' => 1,
      'pelota' => 0,
    ),
  ),
  270 => 
  array (
    'badPhrase' => 
    array (
      0 => 'saco',
      1 => 'de',
      2 => 'weas',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'saco' => 2,
      'de' => 1,
      'weas' => 0,
    ),
  ),
  271 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sexo',
      1 => 'en',
      2 => 'grupo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sexo' => 2,
      'en' => 1,
      'grupo' => 0,
    ),
  ),
  272 => 
  array (
    'badPhrase' => 
    array (
      0 => 'singa',
      1 => 'la',
      2 => 'puta',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'singa' => 2,
      'la' => 1,
      'puta' => 0,
    ),
  ),
  273 => 
  array (
    'badPhrase' => 
    array (
      0 => 'skip',
      1 => 'to',
      2 => 'content',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'skip' => 2,
      'to' => 1,
      'content' => 0,
    ),
  ),
  274 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sopla',
      1 => 'tu',
      2 => 'carga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sopla' => 2,
      'tu' => 1,
      'carga' => 0,
    ),
  ),
  275 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sopletiamela',
      1 => 'la',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'sopletiamela' => 2,
      'la' => 1,
      'verga' => 0,
    ),
  ),
  276 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'aruno',
      2 => 'malvado',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'te' => 2,
      'aruno' => 1,
      'malvado' => 0,
    ),
  ),
  277 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tirado',
      1 => 'un',
      2 => 'pedo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tirado' => 2,
      'un' => 1,
      'pedo' => 0,
    ),
  ),
  278 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tiraste',
      1 => 'un',
      2 => 'pedo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tiraste' => 2,
      'un' => 1,
      'pedo' => 0,
    ),
  ),
  279 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tirate',
      1 => 'un',
      2 => 'tiro',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'tirate' => 2,
      'un' => 1,
      'tiro' => 0,
    ),
  ),
  280 => 
  array (
    'badPhrase' => 
    array (
      0 => 'toca',
      1 => 'mi',
      2 => 'cucuy',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'toca' => 2,
      'mi' => 1,
      'cucuy' => 0,
    ),
  ),
  281 => 
  array (
    'badPhrase' => 
    array (
      0 => 'toca',
      1 => 'mi',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'toca' => 2,
      'mi' => 1,
      'verga' => 0,
    ),
  ),
  282 => 
  array (
    'badPhrase' => 
    array (
      0 => 'un',
      1 => 'pedo',
      2 => 'viejo',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'un' => 2,
      'pedo' => 1,
      'viejo' => 0,
    ),
  ),
  283 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'pro',
      2 => 'inferno',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vai' => 2,
      'pro' => 1,
      'inferno' => 0,
    ),
  ),
  284 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'se',
      2 => 'foder',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vai' => 2,
      'se' => 1,
      'foder' => 0,
    ),
  ),
  285 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'te',
      2 => 'fuder',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vai' => 2,
      'te' => 1,
      'fuder' => 0,
    ),
  ),
  286 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vales',
      1 => 'pura',
      2 => 'rriata',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vales' => 2,
      'pura' => 1,
      'rriata' => 0,
    ),
  ),
  287 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vales',
      1 => 'pura',
      2 => 'verga',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vales' => 2,
      'pura' => 1,
      'verga' => 0,
    ),
  ),
  288 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vapor',
      1 => 'de',
      2 => 'cleveland',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vapor' => 2,
      'de' => 1,
      'cleveland' => 0,
    ),
  ),
  289 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vayase',
      1 => 'al',
      2 => 'demonio',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vayase' => 2,
      'al' => 1,
      'demonio' => 0,
    ),
  ),
  290 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vibra',
      1 => 'de',
      2 => 'bala',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'vibra' => 2,
      'de' => 1,
      'bala' => 0,
    ),
  ),
  291 => 
  array (
    'badPhrase' => 
    array (
      0 => 'voltearse',
      1 => 'la',
      2 => 'rosca',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'voltearse' => 2,
      'la' => 1,
      'rosca' => 0,
    ),
  ),
  292 => 
  array (
    'badPhrase' => 
    array (
      0 => 'voltearse',
      1 => 'la',
      2 => 'tortilla',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'voltearse' => 2,
      'la' => 1,
      'tortilla' => 0,
    ),
  ),
  293 => 
  array (
    'badPhrase' => 
    array (
      0 => 'voy',
      1 => 'a',
      2 => 'matarte',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'voy' => 2,
      'a' => 1,
      'matarte' => 0,
    ),
  ),
  294 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yo',
      1 => 'quiero',
      2 => 'rapar',
    ),
    'badPhraseLength' => 3,
    'badPhraseArrayTable' => 
    array (
      'yo' => 2,
      'quiero' => 1,
      'rapar' => 0,
    ),
  ),
  295 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'la',
      2 => 'gran',
      3 => 'puta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'a' => 3,
      'la' => 2,
      'gran' => 1,
      'puta' => 0,
    ),
  ),
  296 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'tomar',
      2 => 'por',
      3 => 'culo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'a' => 3,
      'tomar' => 2,
      'por' => 1,
      'culo' => 0,
    ),
  ),
  297 => 
  array (
    'badPhrase' => 
    array (
      0 => 'a',
      1 => 'tomar',
      2 => 'por',
      3 => 'saco',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'a' => 3,
      'tomar' => 2,
      'por' => 1,
      'saco' => 0,
    ),
  ),
  298 => 
  array (
    'badPhrase' => 
    array (
      0 => 'andate',
      1 => 'a',
      2 => 'las',
      3 => 'rechucha',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'andate' => 3,
      'a' => 2,
      'las' => 1,
      'rechucha' => 0,
    ),
  ),
  299 => 
  array (
    'badPhrase' => 
    array (
      0 => 'bendehol',
      1 => 'ben',
      2 => 'dea',
      3 => 'hole',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'bendehol' => 3,
      'ben' => 2,
      'dea' => 1,
      'hole' => 0,
    ),
  ),
  300 => 
  array (
    'badPhrase' => 
    array (
      0 => 'besa',
      1 => 'mi',
      2 => 'culo',
      3 => 'puto',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'besa' => 3,
      'mi' => 2,
      'culo' => 1,
      'puto' => 0,
    ),
  ),
  301 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ce',
      1 => 'pasa',
      2 => 'ce',
      3 => 'cono',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ce' => 1,
      'pasa' => 2,
      'cono' => 0,
    ),
  ),
  302 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cebo',
      1 => 'de',
      2 => 'la',
      3 => 'cárcel',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'cebo' => 3,
      'de' => 2,
      'la' => 1,
      'cárcel' => 0,
    ),
  ),
  303 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinga',
      1 => 'tu',
      2 => 'madre',
      3 => 'puta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chinga' => 3,
      'tu' => 2,
      'madre' => 1,
      'puta' => 0,
    ),
  ),
  304 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinga',
      1 => 'tu',
      2 => 'madre',
      3 => 'pendejo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chinga' => 3,
      'tu' => 2,
      'madre' => 1,
      'pendejo' => 0,
    ),
  ),
  305 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'la',
      2 => 'que',
      3 => 'cuelga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 3,
      'la' => 2,
      'que' => 1,
      'cuelga' => 0,
    ),
  ),
  306 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'me',
      2 => 'la',
      3 => 'peha',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 3,
      'me' => 2,
      'la' => 1,
      'peha' => 0,
    ),
  ),
  307 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'me',
      2 => 'la',
      3 => 'verga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 3,
      'me' => 2,
      'la' => 1,
      'verga' => 0,
    ),
  ),
  308 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chupa',
      1 => 'verga',
      2 => 'un',
      3 => 'caballo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'chupa' => 3,
      'verga' => 2,
      'un' => 1,
      'caballo' => 0,
    ),
  ),
  309 => 
  array (
    'badPhrase' => 
    array (
      0 => 'comeme',
      1 => 'el',
      2 => 'puto',
      3 => 'culo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'comeme' => 3,
      'el' => 2,
      'puto' => 1,
      'culo' => 0,
    ),
  ),
  310 => 
  array (
    'badPhrase' => 
    array (
      0 => 'conejito',
      1 => 'hijo',
      2 => 'de',
      3 => 'puta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'conejito' => 3,
      'hijo' => 2,
      'de' => 1,
      'puta' => 0,
    ),
  ),
  311 => 
  array (
    'badPhrase' => 
    array (
      0 => 'esa',
      1 => 'me',
      2 => 'la',
      3 => 'cojo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'esa' => 3,
      'me' => 2,
      'la' => 1,
      'cojo' => 0,
    ),
  ),
  312 => 
  array (
    'badPhrase' => 
    array (
      0 => 'follar',
      1 => 'con',
      2 => 'los',
      3 => 'dedos',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'follar' => 3,
      'con' => 2,
      'los' => 1,
      'dedos' => 0,
    ),
  ),
  313 => 
  array (
    'badPhrase' => 
    array (
      0 => 'grande',
      1 => 'culo',
      2 => 'de',
      3 => 'panda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'grande' => 3,
      'culo' => 2,
      'de' => 1,
      'panda' => 0,
    ),
  ),
  314 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'gran',
      3 => 'puta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 3,
      'de' => 2,
      'gran' => 1,
      'puta' => 0,
    ),
  ),
  315 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'la',
      3 => 'chingada',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 3,
      'de' => 2,
      'la' => 1,
      'chingada' => 0,
    ),
  ),
  316 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'la',
      3 => 'verga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 3,
      'de' => 2,
      'la' => 1,
      'verga' => 0,
    ),
  ),
  317 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'mil',
      3 => 'cojeros',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 3,
      'de' => 2,
      'mil' => 1,
      'cojeros' => 0,
    ),
  ),
  318 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'puta',
      3 => 'cabron',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 3,
      'de' => 2,
      'puta' => 1,
      'cabron' => 0,
    ),
  ),
  319 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'remil',
      3 => 'puta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 3,
      'de' => 2,
      'remil' => 1,
      'puta' => 0,
    ),
  ),
  320 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'dios',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'me' => 3,
      'cago' => 2,
      'en' => 1,
      'dios' => 0,
    ),
  ),
  321 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'ti',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'me' => 3,
      'cago' => 2,
      'en' => 1,
      'ti' => 0,
    ),
  ),
  322 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'encanta',
      2 => 'tu',
      3 => 'culo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'me' => 3,
      'encanta' => 2,
      'tu' => 1,
      'culo' => 0,
    ),
  ),
  323 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'importa',
      2 => 'una',
      3 => 'mierda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'me' => 3,
      'importa' => 2,
      'una' => 1,
      'mierda' => 0,
    ),
  ),
  324 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'la',
      2 => 'trae',
      3 => 'floja',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'me' => 3,
      'la' => 2,
      'trae' => 1,
      'floja' => 0,
    ),
  ),
  325 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'lleva',
      2 => 'la',
      3 => 'chingada',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'me' => 3,
      'lleva' => 2,
      'la' => 1,
      'chingada' => 0,
    ),
  ),
  326 => 
  array (
    'badPhrase' => 
    array (
      0 => 'metetelo',
      1 => 'en',
      2 => 'el',
      3 => 'culo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'metetelo' => 3,
      'en' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  327 => 
  array (
    'badPhrase' => 
    array (
      0 => 'mi',
      1 => 'coniao',
      2 => 'de',
      3 => 'ass',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'mi' => 3,
      'coniao' => 2,
      'de' => 1,
      'ass' => 0,
    ),
  ),
  328 => 
  array (
    'badPhrase' => 
    array (
      0 => 'métetelo',
      1 => 'por',
      2 => 'el',
      3 => 'culo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'métetelo' => 3,
      'por' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  329 => 
  array (
    'badPhrase' => 
    array (
      0 => 'niña',
      1 => 'en',
      2 => 'la',
      3 => 'cima',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'niña' => 3,
      'en' => 2,
      'la' => 1,
      'cima' => 0,
    ),
  ),
  330 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ongalo',
      1 => 'en',
      2 => 'su',
      3 => 'boca',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ongalo' => 3,
      'en' => 2,
      'su' => 1,
      'boca' => 0,
    ),
  ),
  331 => 
  array (
    'badPhrase' => 
    array (
      0 => 'peeson',
      1 => 'ku',
      2 => 'mar',
      3 => 'pleas',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'peeson' => 3,
      'ku' => 2,
      'mar' => 1,
      'pleas' => 0,
    ),
  ),
  332 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pelos',
      1 => 'de',
      2 => 'los',
      3 => 'huevos',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pelos' => 3,
      'de' => 2,
      'los' => 1,
      'huevos' => 0,
    ),
  ),
  333 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pongalo',
      1 => 'en',
      2 => 'su',
      3 => 'puta',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'pongalo' => 3,
      'en' => 2,
      'su' => 1,
      'puta' => 0,
    ),
  ),
  334 => 
  array (
    'badPhrase' => 
    array (
      0 => 'puta',
      1 => 'de',
      2 => 'la',
      3 => 'cam',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'puta' => 3,
      'de' => 2,
      'la' => 1,
      'cam' => 0,
    ),
  ),
  335 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'haz',
      2 => 'dicho',
      3 => 'mierda',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'que' => 3,
      'haz' => 2,
      'dicho' => 1,
      'mierda' => 0,
    ),
  ),
  336 => 
  array (
    'badPhrase' => 
    array (
      0 => 'quiero',
      1 => 'comerte',
      2 => 'la',
      3 => 'panocha',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'quiero' => 3,
      'comerte' => 2,
      'la' => 1,
      'panocha' => 0,
    ),
  ),
  337 => 
  array (
    'badPhrase' => 
    array (
      0 => 'rubia',
      1 => 'sobre',
      2 => 'rubia',
      3 => 'acción',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'rubia' => 1,
      'sobre' => 2,
      'acción' => 0,
    ),
  ),
  338 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sigue',
      1 => 'con',
      2 => 'tu',
      3 => 'vaina',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sigue' => 3,
      'con' => 2,
      'tu' => 1,
      'vaina' => 0,
    ),
  ),
  339 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sigue',
      1 => 'con',
      2 => 'tu',
      3 => 'viana',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'sigue' => 3,
      'con' => 2,
      'tu' => 1,
      'viana' => 0,
    ),
  ),
  340 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ta',
      1 => 'mamo',
      2 => 'la',
      3 => 'panocha',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'ta' => 3,
      'mamo' => 2,
      'la' => 1,
      'panocha' => 0,
    ),
  ),
  341 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'mamo',
      2 => 'el',
      3 => 'culo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'te' => 3,
      'mamo' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  342 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'mamo',
      2 => 'la',
      3 => 'vierga',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'te' => 3,
      'mamo' => 2,
      'la' => 1,
      'vierga' => 0,
    ),
  ),
  343 => 
  array (
    'badPhrase' => 
    array (
      0 => 'te',
      1 => 'voy',
      2 => 'a',
      3 => 'romper',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'te' => 3,
      'voy' => 2,
      'a' => 1,
      'romper' => 0,
    ),
  ),
  344 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tienes',
      1 => 'un',
      2 => 'pito',
      3 => 'chiquito',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tienes' => 3,
      'un' => 2,
      'pito' => 1,
      'chiquito' => 0,
    ),
  ),
  345 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tirate',
      1 => 'a',
      2 => 'un',
      3 => 'poso',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tirate' => 3,
      'a' => 2,
      'un' => 1,
      'poso' => 0,
    ),
  ),
  346 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'eres',
      2 => 'un',
      3 => 'cucuy',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'tu' => 3,
      'eres' => 2,
      'un' => 1,
      'cucuy' => 0,
    ),
  ),
  347 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vai',
      1 => 'tomar',
      2 => 'no',
      3 => 'cu',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'vai' => 3,
      'tomar' => 2,
      'no' => 1,
      'cu' => 0,
    ),
  ),
  348 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vaya',
      1 => 'lavese',
      2 => 'el',
      3 => 'culo',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'vaya' => 3,
      'lavese' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  349 => 
  array (
    'badPhrase' => 
    array (
      0 => 'y',
      1 => 'tu',
      2 => 'mama',
      3 => 'tambien',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'y' => 3,
      'tu' => 2,
      'mama' => 1,
      'tambien' => 0,
    ),
  ),
  350 => 
  array (
    'badPhrase' => 
    array (
      0 => 'yo',
      1 => 'quiero',
      2 => 'tu',
      3 => 'peto',
    ),
    'badPhraseLength' => 4,
    'badPhraseArrayTable' => 
    array (
      'yo' => 3,
      'quiero' => 2,
      'tu' => 1,
      'peto' => 0,
    ),
  ),
  351 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cagate',
      1 => 'en',
      2 => 'tu',
      3 => 'puta',
      4 => 'madre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'cagate' => 4,
      'en' => 3,
      'tu' => 2,
      'puta' => 1,
      'madre' => 0,
    ),
  ),
  352 => 
  array (
    'badPhrase' => 
    array (
      0 => 'capullos',
      1 => 'de',
      2 => 'rosa',
      3 => 'de',
      4 => 'chocolate',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'capullos' => 4,
      'de' => 1,
      'rosa' => 2,
      'chocolate' => 0,
    ),
  ),
  353 => 
  array (
    'badPhrase' => 
    array (
      0 => 'de',
      1 => 'culo',
      2 => 'contra',
      3 => 'el',
      4 => 'viento',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'de' => 4,
      'culo' => 3,
      'contra' => 2,
      'el' => 1,
      'viento' => 0,
    ),
  ),
  354 => 
  array (
    'badPhrase' => 
    array (
      0 => 'el',
      1 => 'puto',
      2 => 'que',
      3 => 'te',
      4 => 'pario',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'el' => 4,
      'puto' => 3,
      'que' => 2,
      'te' => 1,
      'pario' => 0,
    ),
  ),
  355 => 
  array (
    'badPhrase' => 
    array (
      0 => 'el',
      1 => 'puto',
      2 => 'que',
      3 => 'te',
      4 => 'parió',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'el' => 4,
      'puto' => 3,
      'que' => 2,
      'te' => 1,
      'parió' => 0,
    ),
  ),
  356 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hija',
      1 => 'de',
      2 => 'la',
      3 => 'gran',
      4 => 'puta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hija' => 4,
      'de' => 3,
      'la' => 2,
      'gran' => 1,
      'puta' => 0,
    ),
  ),
  357 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hija',
      1 => 'de',
      2 => 'la',
      3 => 'grandísima',
      4 => 'puta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hija' => 4,
      'de' => 3,
      'la' => 2,
      'grandísima' => 1,
      'puta' => 0,
    ),
  ),
  358 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'la',
      3 => 'chingada',
      4 => 'madre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 4,
      'de' => 3,
      'la' => 2,
      'chingada' => 1,
      'madre' => 0,
    ),
  ),
  359 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'la',
      3 => 'gran',
      4 => 'punta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 4,
      'de' => 3,
      'la' => 2,
      'gran' => 1,
      'punta' => 0,
    ),
  ),
  360 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'la',
      3 => 'gran',
      4 => 'puta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 4,
      'de' => 3,
      'la' => 2,
      'gran' => 1,
      'puta' => 0,
    ),
  ),
  361 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'la',
      3 => 'grandísima',
      4 => 'puta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 4,
      'de' => 3,
      'la' => 2,
      'grandísima' => 1,
      'puta' => 0,
    ),
  ),
  362 => 
  array (
    'badPhrase' => 
    array (
      0 => 'hijo',
      1 => 'de',
      2 => 'tu',
      3 => 'puta',
      4 => 'madre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'hijo' => 4,
      'de' => 3,
      'tu' => 2,
      'puta' => 1,
      'madre' => 0,
    ),
  ),
  363 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'madre',
      2 => 'que',
      3 => 'te',
      4 => 'parió',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'madre' => 3,
      'que' => 2,
      'te' => 1,
      'parió' => 0,
    ),
  ),
  364 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'puta',
      2 => 'que',
      3 => 'te',
      4 => 'pario',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'puta' => 3,
      'que' => 2,
      'te' => 1,
      'pario' => 0,
    ),
  ),
  365 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'puta',
      2 => 'que',
      3 => 'te',
      4 => 'parió',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'puta' => 3,
      'que' => 2,
      'te' => 1,
      'parió' => 0,
    ),
  ),
  366 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'puta',
      2 => 'que',
      3 => 'te',
      4 => 'recontrapario',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'puta' => 3,
      'que' => 2,
      'te' => 1,
      'recontrapario' => 0,
    ),
  ),
  367 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'puta',
      2 => 'que',
      3 => 'te',
      4 => 'recontraparió',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'puta' => 3,
      'que' => 2,
      'te' => 1,
      'recontraparió' => 0,
    ),
  ),
  368 => 
  array (
    'badPhrase' => 
    array (
      0 => 'la',
      1 => 'resinga',
      2 => 'de',
      3 => 'tu',
      4 => 'madre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'la' => 4,
      'resinga' => 3,
      'de' => 2,
      'tu' => 1,
      'madre' => 0,
    ),
  ),
  369 => 
  array (
    'badPhrase' => 
    array (
      0 => 'las',
      1 => 'chicas',
      2 => 'se',
      3 => 'volvieron',
      4 => 'locas',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'las' => 4,
      'chicas' => 3,
      'se' => 2,
      'volvieron' => 1,
      'locas' => 0,
    ),
  ),
  370 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'la',
      4 => 'hostia',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'cago' => 3,
      'en' => 2,
      'la' => 1,
      'hostia' => 0,
    ),
  ),
  371 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'la',
      4 => 'puta',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'cago' => 3,
      'en' => 2,
      'la' => 1,
      'puta' => 0,
    ),
  ),
  372 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'tu',
      4 => 'madre',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'cago' => 3,
      'en' => 2,
      'tu' => 1,
      'madre' => 0,
    ),
  ),
  373 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'tu',
      4 => 'raza',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'cago' => 3,
      'en' => 2,
      'tu' => 1,
      'raza' => 0,
    ),
  ),
  374 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'tus',
      4 => 'muelas',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'cago' => 3,
      'en' => 2,
      'tus' => 1,
      'muelas' => 0,
    ),
  ),
  375 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'tus',
      4 => 'muertos',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'cago' => 3,
      'en' => 2,
      'tus' => 1,
      'muertos' => 0,
    ),
  ),
  376 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'in',
      3 => 'tus',
      4 => 'muertos',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'me' => 4,
      'cago' => 3,
      'in' => 2,
      'tus' => 1,
      'muertos' => 0,
    ),
  ),
  377 => 
  array (
    'badPhrase' => 
    array (
      0 => 'no',
      1 => 'me',
      2 => 'cages',
      3 => 'los',
      4 => 'huevos',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'no' => 4,
      'me' => 3,
      'cages' => 2,
      'los' => 1,
      'huevos' => 0,
    ),
  ),
  378 => 
  array (
    'badPhrase' => 
    array (
      0 => 'pon',
      1 => 'lo',
      2 => 'en',
      3 => 'tu',
      4 => 'culo',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'pon' => 4,
      'lo' => 3,
      'en' => 2,
      'tu' => 1,
      'culo' => 0,
    ),
  ),
  379 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'llamo',
      2 => 'a',
      3 => 'los',
      4 => 'preemos',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'que' => 4,
      'llamo' => 3,
      'a' => 2,
      'los' => 1,
      'preemos' => 0,
    ),
  ),
  380 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'den',
      3 => 'por',
      4 => 'culo',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'que' => 4,
      'te' => 3,
      'den' => 2,
      'por' => 1,
      'culo' => 0,
    ),
  ),
  381 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'folle',
      3 => 'un',
      4 => 'pez',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'que' => 4,
      'te' => 3,
      'folle' => 2,
      'un' => 1,
      'pez' => 0,
    ),
  ),
  382 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'follo',
      3 => 'un',
      4 => 'pez',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'que' => 4,
      'te' => 3,
      'follo' => 2,
      'un' => 1,
      'pez' => 0,
    ),
  ),
  383 => 
  array (
    'badPhrase' => 
    array (
      0 => 'sin',
      1 => 'mo',
      2 => 'nef',
      3 => 'co',
      4 => 'pef',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'sin' => 4,
      'mo' => 3,
      'nef' => 2,
      'co' => 1,
      'pef' => 0,
    ),
  ),
  384 => 
  array (
    'badPhrase' => 
    array (
      0 => 'singa',
      1 => 'tu',
      2 => 'madre',
      3 => 'mama',
      4 => 'guevo',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'singa' => 4,
      'tu' => 3,
      'madre' => 2,
      'mama' => 1,
      'guevo' => 0,
    ),
  ),
  385 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'cono',
      2 => 'huele',
      3 => 'a',
      4 => 'mierda',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tu' => 4,
      'cono' => 3,
      'huele' => 2,
      'a' => 1,
      'mierda' => 0,
    ),
  ),
  386 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'crees',
      2 => 'que',
      3 => 'no',
      4 => 'puedo',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'tu' => 4,
      'crees' => 3,
      'que' => 2,
      'no' => 1,
      'puedo' => 0,
    ),
  ),
  387 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vou',
      1 => 'te',
      2 => 'pagar',
      3 => 'um',
      4 => 'boquete',
    ),
    'badPhraseLength' => 5,
    'badPhraseArrayTable' => 
    array (
      'vou' => 4,
      'te' => 3,
      'pagar' => 2,
      'um' => 1,
      'boquete' => 0,
    ),
  ),
  388 => 
  array (
    'badPhrase' => 
    array (
      0 => 'andã',
      1 => 'a',
      2 => 'hacerte',
      3 => 'ver',
      4 => 'el',
      5 => 'culo',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'andã' => 5,
      'a' => 4,
      'hacerte' => 3,
      'ver' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  389 => 
  array (
    'badPhrase' => 
    array (
      0 => 'cagaste',
      1 => 'y',
      2 => 'saltaste',
      3 => 'en',
      4 => 'la',
      5 => 'caca',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'cagaste' => 5,
      'y' => 4,
      'saltaste' => 3,
      'en' => 2,
      'la' => 1,
      'caca' => 0,
    ),
  ),
  390 => 
  array (
    'badPhrase' => 
    array (
      0 => 'chinga',
      1 => 'tu',
      2 => 'madre',
      3 => 'y',
      4 => 'muerte',
      5 => 'puto',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'chinga' => 5,
      'tu' => 4,
      'madre' => 3,
      'y' => 2,
      'muerte' => 1,
      'puto' => 0,
    ),
  ),
  391 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'tu',
      4 => 'puta',
      5 => 'madre',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'me' => 5,
      'cago' => 4,
      'en' => 3,
      'tu' => 2,
      'puta' => 1,
      'madre' => 0,
    ),
  ),
  392 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'lo',
      2 => 'pones',
      3 => 'en',
      4 => 'la',
      5 => 'boca',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'me' => 5,
      'lo' => 4,
      'pones' => 3,
      'en' => 2,
      'la' => 1,
      'boca' => 0,
    ),
  ),
  393 => 
  array (
    'badPhrase' => 
    array (
      0 => 'que',
      1 => 'te',
      2 => 'den',
      3 => 'por',
      4 => 'el',
      5 => 'culo',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'que' => 5,
      'te' => 4,
      'den' => 3,
      'por' => 2,
      'el' => 1,
      'culo' => 0,
    ),
  ),
  394 => 
  array (
    'badPhrase' => 
    array (
      0 => 'tu',
      1 => 'hermano',
      2 => 'no',
      3 => 'tiene',
      4 => 'la',
      5 => 'ingle',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'tu' => 5,
      'hermano' => 4,
      'no' => 3,
      'tiene' => 2,
      'la' => 1,
      'ingle' => 0,
    ),
  ),
  395 => 
  array (
    'badPhrase' => 
    array (
      0 => 'vamos',
      1 => 'a',
      2 => 'em',
      3 => 'borrachar',
      4 => 'esta',
      5 => 'noche',
    ),
    'badPhraseLength' => 6,
    'badPhraseArrayTable' => 
    array (
      'vamos' => 5,
      'a' => 4,
      'em' => 3,
      'borrachar' => 2,
      'esta' => 1,
      'noche' => 0,
    ),
  ),
  396 => 
  array (
    'badPhrase' => 
    array (
      0 => 'me',
      1 => 'cago',
      2 => 'en',
      3 => 'el',
      4 => 'corazã³n',
      5 => 'de',
      6 => 'tu',
      7 => 'madre',
    ),
    'badPhraseLength' => 8,
    'badPhraseArrayTable' => 
    array (
      'me' => 7,
      'cago' => 6,
      'en' => 5,
      'el' => 4,
      'corazã³n' => 3,
      'de' => 2,
      'tu' => 1,
      'madre' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 397;

