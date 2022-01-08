<?php
//12345
$i = 0;
while($i <= 4){
    $i++;
    echo "$i<br>";
}
//12345678910
$i = 0;
while(true){
    $i++;
    if($i > 10) break;
    echo "$i<br>";
}

//5678910
$i = 0;
while(true){
    $i++;
    if($i < 5) continue;
    if($i > 10) break;
    echo "$i<br>";
}

?>