<?php
if (!isset($bad_words)) {
    $bad_words = array();
}

$temp = array('burdel' => 0, 'burdelmama' => 1, 'chuj' => 2, 'chujnia' => 3, 'ciota' => 4, 'cipa' => 5, 'cyc' => 6, 'debil' => 7, 'dmuchać' => 8, 'do kurwy nędzy' => 9, 'dupa' => 10, 'dupek' => 11, 'duperele' => 12, 'dziwka' => 13, 'fiut' => 14, 'gówno' => 15, 'gówno prawda' => 16, 'huj' => 17, 'huj ci w dupę' => 18, 'jajco' => 19, 'jajko' => 20, 'ja pierdolę' => 21, 'jebać' => 22, 'jebany' => 23, 'kurwa' => 24, 'kurwy' => 25, 'kutafon' => 26, 'kutas' => 27, 'lizać pałę' => 28, 'obciągać chuja' => 29, 'obciągać fiuta' => 30, 'obciągać loda' => 31, 'pieprzyć' => 32, 'pierdolec' => 33, 'pierdolić' => 34, 'pierdolnąć' => 35, 'pierdolnięty' => 36, 'pierdoła' => 37, 'pierdzieć' => 38, 'pizda' => 39, 'pojeb' => 40, 'pojebany' => 41, 'popierdolony' => 42, 'robic loda' => 43, 'robić loda' => 44, 'ruchać' => 45, 'rzygać' => 46, 'skurwysyn' => 47, 'sraczka' => 48, 'srać' => 49, 'suka' => 50, 'syf' => 51, 'wkurwiać' => 52, 'zajebisty' => 53,);
// add temp to bad words
$bad_words = array_merge($bad_words, $temp);