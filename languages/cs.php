<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('bordel' => 0, 'buzna' => 1, 'čumět' => 2, 'čurák' => 3, 'debil' => 4, 'do piče' => 5, 'do prdele' => 6, 'dršťka' => 7, 'držka' => 8, 'flundra' => 9, 'hajzl' => 10, 'hovno' => 11, 'chcanky' => 12, 'chuj' => 13, 'jebat' => 14, 'kokot' => 15, 'kokotina' => 16, 'koňomrd' => 17, 'kunda' => 18, 'kurva' => 19, 'mamrd' => 20, 'mrdat' => 21, 'mrdka' => 22, 'mrdník' => 23, 'oslošoust' => 24, 'piča' => 25, 'píčus' => 26, 'píchat' => 27, 'pizda' => 28, 'prcat' => 29, 'prdel' => 30, 'prdelka' => 31, 'sračka' => 32, 'srát' => 33, 'šoustat' => 34, 'šulin' => 35, 'vypíčenec' => 36, 'zkurvit' => 37, 'zkurvysyn' => 38, 'zmrd' => 39, 'žrát' => 40,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
