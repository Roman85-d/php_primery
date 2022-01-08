<?php

function getSum(){
    $sum = 5 + 10;
    return $sum;
}
echo getSum();

function getSum1(){
    $sum = 52 + 10;
    echo $sum;
}

getSum1();

if($flag){
    function getSum(){
        $sum = 5 + 10;
        return $sum;
    }

}

if($flag){
    echo getSum();
        
    }

$flag = true;
$result = $flag == true ? 1 : 2;
echo $result;

function getSum2($left, $right){//параметры функции
    $sum = $left + $right;
    return $sum;
}
$a = 20;
$b = 16;


echo "<b>".getSum2($a,$b)."</b>";//аргументы функции

function getSum3($left, $right, $rile){
    echo "$left<br>";
    echo "$right<br>";
    echo "$rile<br>";
}
$a = 20;
getSum3(++$a, $a * 2, $a+= 4);//выражения в агрументах функции

function getSum4(int $first, int $second) : int {//тип параметров и тип возвращаемого значения

    $sum = $first + $second;
    return $sum;

}

echo getSum4(2.2, 3.6);//5

$param = 30;

function getSum5(&$first) {//передача параметра по ссылке

    $first = $first * 2;
    return $first;//60

}

echo getSum5($param);//60
echo '<br>';
echo $param;//60

function getSum6($first = 10, $second = 17) {//необязательные параметры

    
    $result = $first * $second;
    return $result;

}

echo getSum6();//170
echo getSum6(20);//340
echo getSum6(4,2);//8

function toManyArgs($one, $two, $three, $four){

echo "Первый параметр $one<br>";
echo "Второй параметр $two<br>";
echo "Третий параметр $three<br>";
echo "Четвертый параметр $four<br>";

}

$arr = ['one', 'two', 'three', 'four'];

toManyArgs(...$arr);//передача параметров в виде массива

function toManyArgss(...$arg){
    foreach ($arg as $sh) {
        echo "$sh<br>";
    }
}
    
toManyArgss(1,2,3,4,5);

function glParam(){
    global $vr;//глобальная переменная в меняется в функции
    $vr = 5;
    return $vr;
}
$vr = 10;
echo glParam();
echo $vr;

?>