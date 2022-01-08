<?php
$str = file_get_contents('./hello.txt');//считывание содержимого файла
echo $str;
$str1 = 'hello world';
file_put_contents('./hello1.txt', $str1);//запись данных в файл

$dat = date('d-m-y');
file_put_contents('./'.$dat.'.txt', rand(1,100));//запись данных в файл
?>