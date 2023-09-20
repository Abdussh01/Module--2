<?php
$old = 0;
$new = 1;
for($i=0;$i<=10;$i++){
    $fibonacci = $old+$new;
    if($fibonacci>100){
        break;
    }
    echo $fibonacci." ";
    $old = $new;
    $new = $fibonacci;
}