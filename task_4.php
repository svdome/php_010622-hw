<?php

// 4 Задание. Дана строка. Поменяйте ее первый символ на второй и наоборот, третий на четвертый и наоборот, 
// пятый на шестой и наоборот и так далее. То есть из строки '12345678' нужно сделать '21436587'

/** перестроение местами элементов строки
 * @param $str  - первоначальное значение
 * @param $str1 - преобразованное значение (один из вариантов)
 * @param $str2 - возврат в первоначальное значение (один из вариантов)
 */
$str = '12345678' . '<br>';
print($str);

$str1 = str_split($str, 2); 
$str1 = strrev($str1[0]) . strrev($str1[1]) . strrev($str1[2]) . strrev($str1[3])  . '<br>';  
 
print($str1);

$str2 = str_split($str1, 1); 
list($str2[0], $str2[1]) = [$str2[1], $str2[0]]; 
list($str2[2], $str2[3]) = [$str2[3], $str2[2]];
list($str2[4], $str2[5]) = [$str2[5], $str2[4]];
list($str2[6], $str2[7]) = [$str2[7], $str2[6]];   
$str2 = implode('', $str2);

print($str2);    