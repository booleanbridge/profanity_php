<?php
if (!isset($bad_words)) {
    $bad_words = array();
}
$temp = array('abbuc' => 0, 'aεeṭṭuḍ' => 1, 'aḥeččun' => 2, 'taḥeččunt' => 3, 'axuzziḍ' => 4, 'asxuẓeḍ' => 5, 'qqu' => 6, 'qquɣ' => 7, 'qqiɣ' => 8, 'qqan' => 9, 'qqant' => 10, 'tteqqun' => 13, 'tteqqunt' => 12, 'aqerqur' => 14, 'ajeḥniḍ' => 15, 'awellaq' => 16, 'iwellaqen' => 17, 'iḥeččan' => 18, 'iḥeččunen' => 19, 'uqan' => 20, 'taxna' => 21,);
// add temp to bad words
$bad_words = array_merge($bad_words, $temp);