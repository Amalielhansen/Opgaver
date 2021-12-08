<?php
function lommeregner($num1, $num2, $type){
    if($type == "-"){
        echo $num1 - $num2;
    }
else if($type == "*"){
    echo $num1 * $num2;
}
else if($type == "+"){
    echo $num1+$num2;
}
else if($type == "/"){
    echo $num1 / $num2;
}
}
echo lommeregner(5, 23, "/");
?>