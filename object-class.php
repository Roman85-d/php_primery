<?php
require_once "class.php";
$point = new Point;//создание объекта на основании класса
$point -> x = 5;//обращение к переменным объекта
$point -> y = 6;
echo $point -> x;//вывод переменной x объекта point
?>