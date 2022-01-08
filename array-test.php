<?php
$arr =  [ 'fst', 'snd', 'thd' , 'fth' ];
$keyrd = array_rand($arr);//случайный ключ в массиве
echo $arr[$keyrd];

$arr1 =  [ 'fst' => 1, 'snd' => 2, 'thd' => 3 , 'fth' => 4 ];//поменять местами ключи и значения в массиве
$newarr = array_flip($arr1);
echo '<pre>';
print_r($newarr);
echo '</pre>';

$arr2 = [ 'fst' , 'snd', 'thd' , 'fth' , 'snd', 'thd' ];//уникальные значения массива
$arr2new = array_unique($arr2);
echo '<pre>';
print_r($arr2new);
echo '</pre>';

for ($i=0; $i < 10; $i++) { 
    $arr3[] = rand(5,10);
}
echo '<pre>';
print_r($arr3);
echo '</pre>';




?>