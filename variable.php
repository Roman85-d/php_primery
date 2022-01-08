<?php
$first = 5;
$second = &$first;//передача переменной по ссылке
$second = 3;
echo $first;//3
?>