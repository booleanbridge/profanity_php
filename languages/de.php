<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('analritter' => 0, 'arsch' => 1, 'arschficker' => 2, 'arschlecker' => 3, 'arschloch' => 4, 'bimbo' => 5, 'bratze' => 6, 'bumsen' => 7, 'bonze' => 8, 'dödel' => 9, 'fick' => 10, 'ficken' => 11, 'flittchen' => 12, 'fotze' => 13, 'fratze' => 14, 'hackfresse' => 15, 'hure' => 16, 'hurensohn' => 17, 'ische' => 18, 'kackbratze' => 19, 'kacke' => 20, 'kacken' => 21, 'kackwurst' => 22, 'kampflesbe' => 23, 'kanake' => 24, 'kimme' => 25, 'lümmel' => 26, 'MILF' => 27, 'möpse' => 28, 'morgenlatte' => 29, 'möse' => 30, 'mufti' => 31, 'muschi' => 32, 'nackt' => 33, 'neger' => 34, 'nigger' => 35, 'nippel' => 36, 'nutte' => 37, 'onanieren' => 38, 'orgasmus' => 39, 'penis' => 40, 'pimmel' => 41, 'pimpern' => 42, 'pinkeln' => 43, 'pissen' => 44, 'pisser' => 45, 'popel' => 46, 'poppen' => 47, 'porno' => 48, 'reudig' => 49, 'rosette' => 50, 'schabracke' => 51, 'schlampe' => 52, 'scheiße' => 53, 'scheisser' => 54, 'schiesser' => 55, 'schnackeln' => 56, 'schwanzlutscher' => 57, 'schwuchtel' => 58, 'tittchen' => 59, 'titten' => 60, 'vögeln' => 61, 'vollpfosten' => 62, 'wichse' => 63, 'wichsen' => 64, 'wichser' => 65,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
