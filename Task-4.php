<?php
function fibonacci($veryold,$old,$new){
    for($i = 0; $i<15 ; $i++){
        echo $veryold." ";
        $old=$new;
        $new = $old + $veryold;
        $veryold = $old;
    }
}
fibonacci(0,1,1);