<?php
if (!isset($badWords)) {
    $badWords = array();
}

$temp = array('aborto' => 0, 'amador' => 1, 'ânus' => 2, 'aranha' => 3, 'ariano' => 4, 'balalao' => 5, 'bastardo' => 6, 'bicha' => 7, 'biscate' => 8, 'bissexual' => 9, 'boceta' => 10, 'boob' => 11, 'bosta' => 12, 'braulio de borracha' => 13, 'bumbum' => 14, 'burro' => 15, 'cabrao' => 16, 'cacete' => 17, 'cagar' => 18, 'camisinha' => 19, 'caralho' => 20, 'cerveja' => 21, 'chochota' => 22, 'chupar' => 23, 'clitoris' => 24, 'cocaína' => 25, 'coito' => 26, 'colhoes' => 27, 'comer' => 28, 'cona' => 29, 'consolo' => 30, 'corno' => 31, 'cu' => 32, 'dar o rabo' => 33, 'dum raio' => 34, 'esporra' => 35, 'fecal' => 36, 'filho da puta' => 37, 'foda' => 38, 'foda-se' => 39, 'foder' => 40, 'frango assado' => 41, 'gozar' => 42, 'grelho' => 43, 'heroína' => 44, 'heterosexual' => 45, 'homem gay' => 46, 'homoerótico' => 47, 'homosexual' => 48, 'inferno' => 49, 'lésbica' => 50, 'lolita' => 51, 'mama' => 52, 'merda' => 53, 'paneleiro' => 54, 'passar um cheque' => 55, 'pau' => 56, 'peidar' => 57, 'pênis' => 58, 'pinto' => 59, 'porra' => 60, 'puta' => 61, 'puta que pariu' => 62, 'puta que te pariu' => 63, 'queca' => 64, 'sacanagem' => 65, 'saco' => 66, 'torneira' => 67, 'transar' => 68, 'vadia' => 69, 'vai-te foder' => 70, 'vai tomar no cu' => 71, 'veado' => 72, 'vibrador' => 73, 'xana' => 74, 'xochota' => 75,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
