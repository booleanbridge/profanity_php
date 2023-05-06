<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('anus' => 0, 'bøsserøv' => 1, 'cock' => 2, 'fisse' => 3, 'fissehår' => 4, 'fuck' => 5, 'hestepik' => 6, 'kussekryller' => 7, 'lort' => 8, 'luder' => 9, 'pik' => 10, 'pikhår' => 11, 'pikslugeri' => 12, 'piksutteri' => 13, 'pis' => 14, 'røv' => 15, 'røvhul' => 16, 'røvskæg' => 17, 'røvspræke' => 18, 'shit' => 19,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
