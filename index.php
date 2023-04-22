<?php

//function task1(){
//    $a = mt_rand(0,10);
//    $b = mt_rand(0,10);
//    echo "a=$a b=$b" . '<br>';
//
//    if($a<$b){
//        return $b;
//    }else{
//        return $a;
//    }
//}
//$c = task1();
//echo $c;

//Создать функцию, которая принимает длину двух катетов и
// возвращает значение гипотенузы прямоугольного
// треугольника.

//function task2($a,$b){
//    $c = sqrt($a*$a+$b*$b);
//    return $c;
//}
//$a = 3;
//$b = 4;
//echo task2($a,$b);

function task4()
{
    $arr4 = [];
    for ($i = 0; $i <= 10; $i++) {
        $arr4[$i] = mt_rand(0, 10);
        echo $arr4[$i] . " ";
    }
}
echo task4();
