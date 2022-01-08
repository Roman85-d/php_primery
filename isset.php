<?php
$text = "text";
if(isset($text)){//проверка существования переменной
    echo 'Переменная $text существует'; 
}
unset($text);//уничтожение переменной
if(isset($text)){
    echo 'Переменная $text существует'; 
}
else{echo 'Переменная $text не существует';}

?>