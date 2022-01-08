<?php
echo "<link rel='stylesheet' href='style.css'>";
echo "<ul>";
function getEl(...$arr){
    foreach ($arr as $el) {

        echo "<li>$el</li>";

    }
}
echo "</ul>";

getEl('one', 'two', 'three', 'four');



?>