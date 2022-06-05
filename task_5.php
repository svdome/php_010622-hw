<?php

/** 5 Задание.
 * Дан массив с произвольными целыми числами. Сделайте так, чтобы первый элемент стал 
 * ключом второго элемента, третий элемент - ключом четвертого и так далее. Пример: [1, 2, 3, 4, 5, 6] 
 * превратится в [1=>2, 3=>4, 5=>6]
 */

$my_arr = [1, 2, 3, 4, 5, 6];

function keysElems($my_arr)
{
    $i = 0;
    foreach ($my_arr as $num) {
        $list[$i][] = $num;
        $i = 1 - $i;
    }
    $keys = $list[0];
    $elems = $list[1];
    $results = array_combine($keys, $elems);
    return $results;
};
print_r(keysElems($my_arr));
