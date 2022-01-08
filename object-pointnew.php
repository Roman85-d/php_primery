<?php
require_once "PointNew.php";
$first = new PointNew;
$first -> x = 3;
$first -> y = 3;

// $second = new PointNew;
// $second -> x = 5;
// $second -> y = 5;


// echo "Значение переменной x объекта first равно {$first -> x}";
// echo "<br>";
// echo "Значение переменной x объекта second равно {$second -> x}";

$second = $first;

$second -> x = 54;
$second -> y = 89;

echo $first -> x;//54
?>