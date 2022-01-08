<?php
$arr = array('hello', 'world');//создание массива
echo gettype($arr);
echo "<pre>";
print_r($arr);//вывод массива
echo "</pre>";

$arr = [10 => 'hello', 'world'];//создание массива
$arr[12] = '!';
echo '<pre>';
print_r($arr);
echo '</pre>';

$arr1 = 'hello world';
$arr2 = (array)$arr1;//преобразование к массиву
echo '<pre>';
print_r($arr2);
echo '</pre>';

$arr3 = ['one' => 1, 'two' => 2];//ассоацивный массив
echo '<pre>';
print_r($arr3);
echo '</pre>';
echo $arr3['one'];//обращение к элементу массива

$arr4 = [   //многомерный массив  
'123' => [1,2,3],
'456' => [4,5,6],
'789' => [7,8,9]
];

echo '<pre>';
print_r($arr4);
echo '</pre>';

echo $arr4['789'][1];//обращение к элементу многомерного массива
echo "Это событие произошло {$arr4['456'][2]} дней назад";//элемент массива в строке

$arr5 = [1,2,3];
list($one, $two, $three) = $arr5;//элементы массива как значения переменных
echo $two;

//count количество элементов массива
for ($i=0; $i < count($arr5); $i++) {//обход массива
echo "<p style='background-color:green;color:red'>$arr5[$i]</p>";
}

$arr6 = ['one' => 1, 'two' => 2, 'three' => 3];
foreach ($arr6 as $key => $value) {
    echo "Ключ - $key и значение - $value<br>";
}

foreach ($arr4 as $keyarr4 => $valuearr4) {//обход многомерного массива
    echo "$keyarr4<br>";
    foreach ($valuearr4 as $value) {
        echo "<li>$value</li>";
    }
}

$arr6 = ['one' => 1, 'two' => 2, 'three' => 3];
$arr7 = ['four' => 4, 'five' => 5];
$newarr = $arr6 + $arr7;//сложение массивов

echo '<pre>';
print_r($newarr);
echo '</pre>';

foreach ($newarr as $key => $value) {
    echo "<li>$value</li>";
}

$arr8 = [1,2,3];
$arr9 = [4,5,6];
$arr89 = array_merge($arr8, $arr9);//слияние массивов

echo '<pre>';
print_r($arr89);
echo '</pre>';

$arr10 = [1,2,3,4,5];
$arr11 = [1,2,3,4,5];
$arr12 = [1,2,3,4,5,6];

if($arr10 == $arr11){//сравнение массивов
    echo 'Массивы равны';
} else {
    echo 'Массивы не равны';
}

if($arr10 == $arr12){//сравнение массивов
    echo 'Массивы равны';
} else {
    echo 'Массивы не равны';
}

foreach ($arr10 as $key => $value) {//проверка существования элементов в массиве
    if(isset($value)){
        echo "Элемент $value существует";
    } else {
        echo "Элемент $value не существует";
    }
}





