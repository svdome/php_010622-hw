<?php

// 1 Задание. Дан следующий массив: 
$arr = [
    ['href' => 'page1.html', 'text' => 'text1'],
    ['href' => 'page2.html', 'text' => 'text2'],
    ['href' => 'page3.html', 'text' => 'text3'],
];

//  Сформируйте с его помощью следующий HTML код: 
    /** <ul>
    *     <li><a href="page1.html">text1</a></li>
    *     <li><a href="page2.html">text2</a></li>
    *     <li><a href="page3.html">text3</a></li>
    *    </ul>
    */   

/** Функция вывода на экран генерации списка ссылок
 * @param $arr - массив
 */

function printGenerateList($arr)
{
    $link = '<ul>';
    foreach ($arr as $list) {
        echo '<li><a href=' . $list['href'] . '>' . $list['text'] . '</a>' . '</li>' . '<br>';
    }
    $link .= '</ul>';
};
printGenerateList($arr);