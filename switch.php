<?php
$answer = 'yes';
switch($answer){
    case 'yes' : echo 'yes';
         break;
    case 'no' : echo 'no';
         break;
    default : echo 'error';
         break;
}

$num = 100;
switch(true){
    case ($num > 0 && $num < 20) : echo 'Больше 0 и меньше 20';
         break;
    case ($num > 0 && $num < 120) : echo 'Больше 0 и меньше 120';
         break;
    default : echo 'error';
         break;
}
?>