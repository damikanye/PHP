<?php 

$temp = 20;

if ($temp <= 20){
    echo "It is really cold today.";
}else if ($temp > 20  &&  $temp <= 30) {
    echo "The weather is just perfect.";
}else if ($temp >= 30 && $temp < 40) {
    echo "It's so hot";
}else if ($temp >= 40) {
    echo "Am I in Sahara Desert?!";
}else {
    echo "Terrible weather";
}


?>