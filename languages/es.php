<?php
if (!isset($badWords)) {
    $badWords = array();
}
$temp = array('Asesinato' => 0, 'asno' => 1, 'bastardo' => 2, 'Bollera' => 3, 'Cabrón' => 4, 'Caca' => 5, 'Chupada' => 6, 'Chupapollas' => 7, 'Chupetón' => 8, 'concha' => 9, 'Concha de tu madre' => 10, 'Coño' => 11, 'Coprofagía' => 12, 'Culo' => 13, 'Drogas' => 14, 'Esperma' => 15, 'Fiesta de salchichas' => 16, 'Follador' => 17, 'Follar' => 18, 'Gilipichis' => 19, 'Gilipollas' => 20, 'Hacer una paja' => 21, 'Haciendo el amor' => 22, 'Heroína' => 23, 'Hija de puta' => 24, 'Hijaputa' => 25, 'Hijo de puta' => 26, 'Hijoputa' => 27, 'Idiota' => 28, 'Imbécil' => 29, 'infierno' => 30, 'Jilipollas' => 31, 'Kapullo' => 32, 'Lameculos' => 33, 'Maciza' => 34, 'Macizorra' => 35, 'maldito' => 36, 'Mamada' => 37, 'Marica' => 38, 'Maricón' => 39, 'Mariconazo' => 40, 'martillo' => 41, 'Mierda' => 42, 'Nazi' => 43, 'Orina' => 44, 'Pedo' => 45, 'Pendejo' => 46, 'Pervertido' => 47, 'Pezón' => 48, 'Pinche' => 49, 'Pis' => 50, 'Prostituta' => 51, 'Puta' => 52, 'Racista' => 53, 'Ramera' => 54, 'Sádico' => 55, 'Semen' => 56, 'Sexo' => 57, 'Sexo oral' => 58, 'Soplagaitas' => 59, 'Soplapollas' => 60, 'Tetas grandes' => 61, 'Tía buena' => 62, 'Travesti' => 63, 'Trio' => 64, 'Verga' => 65, 'vete a la mierda' => 66, 'Vulva' => 67,);
// add temp to bad words
$badWords = array_merge($badWords, $temp);
