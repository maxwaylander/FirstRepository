<?php

$a = 4;
while ($a <=12 ){
        $a++;
        echo $a.'<br>';
    }


$num = 1000;
$n=0;
while ($num>=50)
{
    $num=$num/2;
    $n++;
}
echo $n.'<br>' ;


$num=1000;
for($m=0; $m>-1; $m++){
    if($num>=50){
        $num/=2;
    }
    else{
        break;
    }
}
echo $m.'<br>' ;



$i = 8;

switch ($i) {
    case 0:
        echo '0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10';
        break;
    case 1:
        echo '0,1, 2, 3, 4, 5, 6, 7, 8, 9';
        break;
    case 2:
        echo '0,1, 2, 3, 4, 5, 6, 7, 8';
        break;
    case 3:
        echo '0,1, 2, 3, 4, 5, 6, 7';
        break;
    case 4:
        echo '0,1, 2, 3, 4, 5, 6';
        break;
    case 5:
        echo '0,1, 2, 3, 4, 5';
        break;
    case 6:
        echo '0,1, 2, 3, 4';
        break;
    case 7:
        echo '0,1, 2, 3';
        break;
    case 8:
        echo '0,1, 2';
        break;
    case 9:
        echo '0,1';
        break;
    case 10:
        echo '0';
        break;
}