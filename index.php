<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pr1</title>
    <style>
        .title{
            font-size: 18px;
            line-height: 1.5;
            color:blue;
        }
    </style>
</head>
<body>
<?php

echo '<h2 class="title">', '1. Дан массив $arr. С помощью функции count выведите последний элемент данного массива.', '</h2>';
$arr = [
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5
    ];
echo '<p class="result">', 'Последний элемент массива: ', count($arr), '</p>';
echo '<br>';

echo '<h2 class="title">', '2. Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.', '</h2>';
$arr2 = array(
    1 => 'text',
    2 => 3,
    3 => 2617
);
if (in_array(3, $arr2)){
    echo '<p class="result">', 'Число 3 найдено', '</p>';
}
else{
    echo 'Число 3 не найдено';
}
echo '<br>';

echo '<h2 class="title">', '3. Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.', '</h2>';
$arr3 = [1, 2, 3, 4, 5];
echo '<p class="result">', 'Сумма массива = ', array_sum($arr3), '</p>';
echo '<br>';

echo '<h2 class="title">', '4. Дан массив $arr. С помощью функций array_sum и count найдите среднее
арифметическое элементов (сумма элементов делить на их количество) данного
массива.', '</h2>';
$arr4 = [1, 2, 3, 4, 5, 6];
$count_mas4 = count($arr4);
$sum_mas4 = array_sum($arr4);
echo '<p class="result">', 'Среднее арифметическое массива - ', $sum_mas4/$count_mas4, '</p>';
echo '<br>';

echo '<h2 class="title">', '5. Создайте массив, заполненный числами от 1 до 100', '</h2>';
$arr5 = range(1, 100);
echo '<p class="result">', print_r($arr5), '</p>';
echo '<br>';


echo '<h2 class="title">', '6. Создайте массив, заполненный буквами от a до z.', '</h2>';
$arr6 = range('a', 'z');
echo '<p class="result">', print_r($arr6), '</p>';
echo '<br>';


echo '<h2 class="title">', '7. Найдите сумму чисел от 1 до 100 не используя цикл.', '</h2>';
echo '<p class="result">', 'от 1 до 100 сумма = ', array_sum(range(1, 100)), '</p>';
echo '<br>';


echo '<h2 class="title">', "8. Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'.
 Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.", '</h2>';
$arr81 = [1, 2, 3];
$arr82 = ['a', 'b', 'c'];
$res8182 = array_merge($arr81, $arr82);
echo '<p class="result">', print_r($res8182), '</p>';
echo '<br>';


echo '<h2 class="title">', '9. Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice создайте
 из него массив $result с элементами 2, 3, 4.', '</h2>';
$arr9 = [1, 2, 3, 4, 5];
$result = array_slice($arr9, 1, 3);
echo '<p class="result">', print_r($result), '</p>';
echo '<br>';


echo '<h2 class="title">', '10. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив в [1, 4, 5].', '</h2>';
$arr10 = [1, 2, 3, 4, 5];
array_splice($arr10, 1, 2);
echo '<p class="result">', var_dump($arr10), '</p>';
echo '<br>';


echo '<h2 class="title">', "11. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него
 массив [1, 2, 3, 'a', 'b', 'c', 4, 5].", '</h2>';
$arr11 = [1, 2, 3, 4, 5];
array_splice($arr11, 3, 0, array('a', 'b', 'c'));
echo '<p class="result">', print_r($arr11), '</p>';
echo '<br>';

echo '<h2 class="title">', "12. Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива,
а в $values – значения.", '</h2>';
$arr12 = [
    'a' => 1,
    'b' => 2,
    'c' => 3
];
$keys = array_keys($arr12);
$values = array_values($arr12);
echo '<p class="result">', print_r($keys), '</p>';
echo '<p class="result">', print_r($values), '</p>';
echo '<br>';


echo '<h2 class="title">', "13. Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив
 'a'=>1, 'b'=>2, 'c'=>3'", '</h2>';
$arr13_1 = ['a', 'b', 'c'];
$arr13_2 = [1, 2, 3];
echo '<p class="result">', print_r(array_combine($arr13_1, $arr13_2)), '</p>';
echo '<br>';


echo '<h2 class="title">', "14. Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения", '</h2>';
$arr14 = [
    'a' => 1,
    'b' => 2,
    'c' => 3
];
$flipped = array_flip($arr14);
echo '<p class="result">', print_r($flipped), '</p>';
echo '<br>';


echo '<h2 class="title">', "15. Дан массив с элементами 1, 2, 3, 4, 5. Сделайте из него массив с элементами 5, 4, 3, 2, 1.", '</h2>';
$arr15 = [1, 2, 3, 4, 5];
print_r(array_reverse($arr15));
echo '<br>';


echo '<h2 class="title">', "16. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'", '</h2>';
$arr16 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$arr_search = array_search('-', $arr16);
echo '<p class="result">', $arr_search, '</p>';
echo '<br>';


echo '<h2 class="title">', "17. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите
 его с помощью функции array_splice.", '</h2>';
$arr17 = ['a', '-', 'b', '-', 'c', '-', 'd'];
$arr17_del = array_search('-', $arr17);
array_splice($arr17, $arr17_del, 1);
echo '<p class="result">', print_r($arr17), '</p>';
echo '<br>';


echo '<h2 class="title">', "18. Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с
// ключом 3 - на '!!'.", '</h2>';
$arr18 = ['a', 'b', 'c', 'd', 'e'];
$arr18_repl = [0 => '!', 3 => '!!'];
$arr18_res = array_replace($arr18, $arr18_repl);
echo '<p class="result">', print_r($arr18_res), '</p>';
echo '<br>';


echo '<h2 class="title">', "19. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.", '</h2>';
$arr19 = [
    '3'=>'a',
    '1'=>'c',
    '2'=>'e',
    '4'=>'b'
];
asort($arr19); // по значению по возрастанию
arsort($arr19); // по значению по убыванию
ksort($arr19); // по ключу по возрастанию
krsort($arr19); // по ключу по убыванию
print_r($arr19);
echo '<br>';


echo '<h2 class="title">', "20. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран
 случайный ключ из данного массива.", '</h2>';
$arr20 = ['a'=>1, 'b'=>2, 'c'=>3];
echo '<p class="result">', print_r(array_rand($arr20)), '</p>';
echo '<br>';


echo '<h2 class="title">', "21. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран 
случайный элемент данного массива.", '</h2>';
$arr21 = ['a'=>1, 'b'=>2, 'c'=>3];
echo '<p class="result">', print_r(array_rand($arr20, 1)), '</p>';
echo 'вопросик', '<br>';


echo '<h2 class="title">', "22. Дан массив $arr. Перемешайте его элементы в случайном порядке.", '</h2>';
$arr22 = [1, 2, 3, 4, 5];
shuffle($arr22);
echo '<p class="result">', print_r($arr22), '</p>';
echo '<br>';


echo '<h2 class="title">', "23. Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его
 элементы в случайном порядке.", '</h2>';
$arr23 = range(1, 25);
shuffle($arr23);
echo '<p class="result">', print_r($arr23), '</p>';
echo '<br>';


echo '<h2 class="title">', "24. Сделайте строку длиной 6 символов, состоящую из маленьких английских букв,
// расположенных в случайном порядке. Буквы не должны повторяться.", '</h2>';
$arr24 = range('a', 'z');
$rand_keys = array_rand($arr24, 6);
$string = '';
foreach ($rand_keys as $key=>$elem){
	$string .= $arr24[$elem];
}
echo '<p class="result">', print_r($string), '</p>';
echo '<br>';


echo '<h2 class="title">', "25. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.", '</h2>';
$arr25 = ['a', 'b', 'c', 'b', 'a'];
$newarr25 = array_unique($arr25);
echo '<p class="result">', print_r($newarr25), '</p>';
echo '<br>';


echo '<h2 class="title">', "26. Дан массив с элементами 1, 2, 3, 4, 5. Выведите на экран его первый и последний
элемент, причем так, чтобы в исходном массиве они исчезли.", '</h2>';
$arr26 = [1, 2, 3, 4, 5];
$newarr26_1 = array_shift($arr26);
print_r($newarr26_1);
echo '<br>';
$newarr26_2 = array_pop($arr26);
print_r($newarr26_2);
echo '<br>';
print_r($arr26);


echo '<h2 class="title">', "27. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8. С помощью цикла и
функций array_shift и array_pop выведите на экран его элементы в следующем
порядке: 18273645.", '</h2>';
$arr27 = [1, 2, 3, 4, 5, 6, 7, 8];
$count_arr27 = count($arr27);
while ($count_arr27 > 0){
    $newarr27_1 = array_shift($arr27);
    print_r($newarr27_1);
    $newarr27_2 = array_pop($arr27);
    print_r($newarr27_2);
    $count_arr27--;
}

echo '<h2 class="title">', "28. Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b',
'c', '-', '-', '-'.", '</h2>';
$arr28 = ['a', 'b', 'c'];
$res_arr28 = array_pad($arr28, 6, '-');
print_r($res_arr28);


echo '<h2 class="title">', "29. Создайте массив, заполненный целыми числами от 1 до 20. С помощью
функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7,
8] и т.д.).", '</h2>';
$arr29 = range(1, 20);
print_r(array_chunk($arr29, 5));


echo '<h2 class="title">', "30. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается
каждая из букв", '</h2>';
$arr30 = ['a', 'b', 'c', 'b', 'a'];
print_r(array_count_values($arr30));


echo '<h2 class="title">', "31. Дан массив с элементами 1, 2, 3, 4, 5. Создайте новый массив, в котором будут
лежать квадратные корни данных элементов", '</h2>';
$arr31 = [1, 2, 3, 4, 5];

function square($n){
    return ($n * $n);
}

$newarr31 = array_map('square', $arr31);
print_r($newarr31);


echo '<h2 class="title">', "32. Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в
котором из элементов будут удалены теги.", '</h2>';
$arr32 = ['<b>php</b>', '<i>html</i>'];
$newarr32 = array_map(function($v){
    return trim(strip_tags($v));
}, $arr32);
print_r($newarr32);


echo '<h2 class="title">', "33. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. Запишите
в новый массив элементы, которые есть и в том, и в другом массиве.", '</h2>';
$arr33_1 = [1, 2, 3, 4, 5];
$arr33_2 = [3, 4, 5, 6, 7];
$res33 = array_intersect($arr33_1, $arr33_2);
print_r($res33);


echo '<h2 class="title">', "34. Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7. Запишите
в новый массив элементы, которые не присутствуют в обоих массивах
одновременно", '</h2>';
$arr34_1 = [1, 2, 3, 4, 5];
$arr34_2 = [3, 4, 5, 6, 7];
$res34 = array_diff($arr34_1, $arr34_2);
print_r($res34);

?>
</body>
</html>
