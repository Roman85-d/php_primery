<?php
file_put_contents('./infp.txt', `php -h`);//запись в файл
$str = file_get_contents('./infp.txt');//чтение из файла
echo $str;
?>