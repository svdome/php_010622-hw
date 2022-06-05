<?php

// 3 Задание. Сделайте функцию, противоположную функции array_unique. 
// Ваша функция должна оставлять дубли и удалять элементы, не имеющие дублей.


$array = [1, 1, 2, 3, 4, 5, 4, 3, 9, 9];

function ArrayDoubles($array)
{
    $arr_val = array_count_values($array);
    $array_res = array();
    foreach ($arr_val as $key => $value) {
        if ($value < 2) {
            $index = array_search($key, $array);
            $array_res[$index] = $key;
            unset($array[$index]);
        }
    }
    return $array;
};
print_r(ArrayDoubles($array));