<?php
$j = 0;
echo "<table><tr><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th></tr>";
while(true){

    $j++;
    if($j > 5) break;

    $i = 0;
    while(true){
        $i++;
        if($i > 5) break;
        echo "<tr><td>$i</td><td>$i</td><td>$i</td><td>$i</td><td>$i</td></tr>";
    }
}
echo "</table>";

$k = 5;
while(--$k){
    echo "$k<br>";
}


?>