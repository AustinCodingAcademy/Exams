<?php

$x = 10;
$y = true;

if($x > 10){
    if($x == 10 && $x % 2 == 0){
        echo "$x is even and equal to 10";
    }
}
else if($y){
    echo '$y was true';
}
else if($x == 10){
    echo '$x was 10';
}
else{
    echo "Nothing happened";
}

?>
