<?php

function counter()
{
    static $counter = 0;//статическая переменная
    return ++$counter;
}

echo counter();

function formatSize($a){
 
    $a2 = $a * 2;//4
    $a3 = $a * 3;//6
    $a4 = $a * 4;//8
    $a5 = $a * 5;//10
    return [$a2, $a3, $a4, $a5];//функция возвращает массив 

}

$result = formatSize(2);

echo '<pre>';
print_r($result);
echo '</pre>';

foreach ($result as $key => $value) {
    
    echo "$key - $value<br>";

}

function callSync($counter)//функция вызывает сама себя
{
    if($counter > 0)
    {
        echo($counter--);
        callSync($counter);
    }

    else
    {
        return; 
    }
}

callSync(6);

function in1()//вложенные функции
{

    function in2()
    {
        echo "hell";
    }

}

in1();
in2();

function rom()
{
    echo "Rom";
}

function vik()
{
    echo "Vik";
}

$func = rand(0,1) ? 'rom' : 'vik';//динамический вызов функции
$func();

$an = function(){//анонимная функция
    echo "!!!";
};

$an();//вызов анонимной функции

echo function_exists('rom');//проверка существования функции

// function odd(int $num)//если число не четное то true
// {
//     if($num % 2 == 1)
//     {
//         return true;
//     }

//     else
//     {
//         return false;
//     }
// }
// echo '<br>';

// echo odd(15);

function dimSum(...$arr)
{
    $arrn = array_sum($arr);
    return $arrn;
}

echo dimSum(1,2,3,4,5);




