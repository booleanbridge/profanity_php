<?php
if (!isset($bad_words)) {
    $bad_words = array();
}
$temp = array('alfred nussi' => 0, 'bylsiä' => 1, 'haahka' => 2, 'haista paska' => 3, 'haista vittu' => 4, 'hatullinen' => 5, 'helvetisti' => 6, 'hevonkuusi' => 7, 'hevonpaska' => 8, 'hevonperse' => 9, 'hevonvittu' => 10, 'hevonvitunperse' => 11, 'hitosti' => 12, 'hitto' => 13, 'huorata' => 14, 'hässiä' => 15, 'juosten kustu' => 16, 'jutku' => 17, 'jutsku' => 18, 'jätkä' => 19, 'kananpaska' => 20, 'koiranpaska' => 21, 'kuin esterin perseestä' => 22, 'kulli' => 23, 'kullinluikaus' => 24, 'kuppainen' => 25, 'kusaista' => 26, 'kuseksia' => 27, 'kusettaa' => 28, 'kusi' => 29, 'kusipää' => 30, 'kusta' => 31, 'kyrpiintynyt' => 32, 'kyrpiintyä' => 33, 'kyrpiä' => 34, 'kyrpä' => 35, 'kyrpänaama' => 36, 'kyrvitys' => 37, 'lahtari' => 38, 'lutka' => 39, 'molo' => 40, 'molopää' => 41, 'mulkero' => 42, 'mulkku' => 43, 'mulkvisti' => 44, 'muna' => 45, 'munapää' => 46, 'munaton' => 47, 'mutakuono' => 48, 'mutiainen' => 49, 'naida' => 50, 'nainti' => 51, 'narttu' => 52, 'neekeri' => 53, 'nekru' => 54, 'nuolla persettä' => 55, 'nussia' => 56, 'nussija' => 57, 'nussinta' => 58, 'paljaalla' => 59, 'palli' => 60, 'pallit' => 61, 'paneskella' => 62, 'panettaa' => 63, 'panna' => 64, 'pano' => 65, 'pantava' => 66, 'paska' => 67, 'paskainen' => 68, 'paskamainen' => 69, 'paskanmarjat' => 70, 'paskantaa' => 71, 'paskapuhe' => 72, 'paskapää' => 73, 'paskattaa' => 74, 'paskiainen' => 75, 'paskoa' => 76, 'pehko' => 77, 'pentele' => 78, 'perkele' => 79, 'perkeleesti' => 80, 'persaukinen' => 81, 'perse' => 82, 'perseennuolija' => 83, 'perseet olalla' => 84, 'persereikä' => 85, 'perseääliö' => 86, 'persläpi' => 87, 'perspano' => 88, 'persvako' => 89, 'pilkunnussija' => 90, 'pillu' => 91, 'pillut' => 92, 'pipari' => 93, 'piru' => 94, 'pistää' => 95, 'pyllyvako' => 96, 'reikä' => 97, 'reva' => 98, 'ripsipiirakka' => 99, 'runkata' => 100, 'runkkari' => 101, 'runkkaus' => 102, 'runkku' => 103, 'ryssä' => 104, 'rättipää' => 105, 'saatanasti' => 106, 'suklaaosasto' => 107, 'tavara' => 108, 'toosa' => 109, 'tuhkaluukku' => 110, 'tumputtaa' => 111, 'turpasauna' => 112, 'tussu' => 113, 'tussukka' => 114, 'tussut' => 115, 'vakipano' => 116, 'vetää käteen' => 117, 'viiksi' => 118, 'vittu' => 119, 'vittuilla' => 120, 'vittuilu' => 121, 'vittumainen' => 122, 'vittuuntua' => 123, 'vittuuntunut' => 124, 'vitun' => 125, 'vitusti' => 126, 'vituttaa' => 127, 'vitutus' => 128, 'äpärä' => 129,);
// add temp to bad words
$bad_words = array_merge($bad_words, $temp);