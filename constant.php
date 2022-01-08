<?php
define("STR", "Строка");//обьявление константы
define("NUM", "Число");
// echo STR;
if(defined("STR")){//проверка существования константы
    echo 'Константа STR уже создана и ее значение '.STR;
}
else{echo 'Константы STR не существует';}

print_r(get_defined_constants());//доступные константы
?>