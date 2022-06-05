<?php

// 2 Задание. Дан следующий массив: Сформируйте с его помощью HTML таблицу. 
$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];
/** Функция вывода на экран товаров в виде таблицы
 * @param $products - Товары
 */

function printGenerateTable($products)
{
    $resultStringProd = "";
    foreach ($products as $prod) {
        $resultStringProd .= '<p>Наименование товара:' . $prod['name'] . '</p>' . PHP_EOL;
        $resultStringProd .= '<p>Цена товара:' . $prod['price'] . '</p>' . PHP_EOL;
        $resultStringProd .= '<p>Сумма в товаре:' . $prod['amount'] . '</p>' . PHP_EOL . PHP_EOL . PHP_EOL;
    }
    echo $resultStringProd;
};
printGenerateTable($products);