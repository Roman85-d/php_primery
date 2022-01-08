<?php
require_once "PointNew.php";
$first = new PointNew;
$first -> x = 3;
$first -> y = 3;
$second = clone $first;//клонирование объекта
$second -> x = 5;
$second -> y = 5;
echo $first -> x;//3
?>