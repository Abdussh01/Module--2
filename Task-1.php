<?php
function printEvenForLoop(int $start=1,int $end=20){
    for($i=$start;$i<=$end;$i++){
        if($i % 2 == 0){
            echo $i." ";
        }
    }
}
echo "for loop : ";
printEvenForLoop();



function printEvenWhile($start =1, $end =20) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i ++;
    }
}
echo "while loop :";
printEvenWhile();

function printEvenDoWhile($start=1,$end=20){
    $i = $start;
    do{
        if($i % 2 == 0){
            echo $i." ";

        }$i ++;
    }while($i<=$end);
}
echo "Do while loop : ";
printEvenDoWhile();
