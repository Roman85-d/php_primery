<?php
//параметр precission в файле php.ini количество символов в числе
$num = 5 / 3;
$num = (integer)$num;//приведение к целому числу
echo $num;

$num1 = 14;
if($num1 % 2 == 0){//проверка числа на четность
    echo 'Число четное';
}
else{
    echo 'Число нечетное';
}

$a = 5;
$b = 6;
$a += $b;//сокращенная запись $a = $a + $b
echo $a;

$var = 1;
echo $var++;//1 постфиксная форма

$var1 = 4;
echo ++$var1;//5 префиксная форма
?>