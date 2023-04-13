<?php

//$a = 4;
//while ($a <=12 ){
//        $a++;
//        echo $a.'<br>';
//    }
//
//
//$num = 1000;
//$n=0;
//while ($num>=50)
//{
//    $num=$num/2;
//    $n++;
//}
//echo $n.'<br>' ;
//
//
//$num=1000;
//for($m=0; $m>-1; $m++){
//    if($num>=50){
//        $num/=2;
//    }
//    else{
//        break;
//    }
//}
//echo $m.'<br>' ;
//
//
//
//$i = 8;
//
//switch ($i) {
//    case 0:
//        echo '0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10';
//        break;
//    case 1:
//        echo '0,1, 2, 3, 4, 5, 6, 7, 8, 9';
//        break;
//    case 2:
//        echo '0,1, 2, 3, 4, 5, 6, 7, 8';
//        break;
//    case 3:
//        echo '0,1, 2, 3, 4, 5, 6, 7';
//        break;
//    case 4:
//        echo '0,1, 2, 3, 4, 5, 6';
//        break;
//    case 5:
//        echo '0,1, 2, 3, 4, 5';
//        break;
//    case 6:
//        echo '0,1, 2, 3, 4';
//        break;
//    case 7:
//        echo '0,1, 2, 3';
//        break;
//    case 8:
//        echo '0,1, 2';
//        break;
//    case 9:
//        echo '0,1';
//        break;
//    case 10:
//        echo '0';
//        break;
//}

//echo "1 задание 23 слайд <br>";
//for ($i = 1; $i <= 30; $i++) {
//    if ($i % 2 == 0) {
//        echo $i;
//        echo "<br>";
//    }
//}
//
//echo "2 задание 23 слайд <br>";
//for ($i = 1; $i <= 50; $i++) {
//
//    if ($i % 3 == 0 and $i % 5 != 0) {
//        echo "<i>$i</i>";
//        echo "<br>";
//    } elseif ($i % 5 == 0 and $i % 3 == 0) {
//        echo "<b>$i</b>";
//        echo "<br>";
//    } else {
//        echo $i;
//        echo "<br>";
//    }
//}
//echo "3 задание 23 слайд <br>";
//$pi4 = 1;
//$num = 3;
//for ($i = 0; $i < 500; $i++) {
//    if ($i % 2 != 0) {
//        $pi4 += 1 / $num;
//    } else {
//        $pi4 -= 1 / $num;
//    }
//    $num += 2;
//}
//echo 4 * $pi4;
//echo '<br>';
//echo strlen(stristr(strval($pi4), '.'));
//echo '<br>';
//
//echo "4 задание 23 слайд <br>";
//$arr1 = array();
//for ($i = 0; $i < 100; $i++) {
//    if ($i == 0) {
//        $arr1[$i] = 1;
//    } else {
//        $arr1[$i] = ($arr1[$i - 1] + 3) / ($arr1[$i - 1] + 1);
//    }
//}
//
//$sum = 0;
//for ($i = 0; $i < count($arr1); $i++) {
//    $sum += $arr1[$i];
//    if ($sum > 10) {
//        echo $i;
//        break;
//    }
//}
//
////print_r($arr1);
//
//echo " <br> 1 задание 24 слайд <br>";
//$k = 10;
//$sum = 0;
//for ($i = 0; $i <= $k; $i++) {
//    if ($i % 2 == 0){
//        $sum += $i;
//    }
//}
//echo $sum;

//УРОК 5-6
echo " <br> 1 задание 15 слайда <br>";
$j = 50;
$arr3 = [];
$result = 0;
for ($i = 0; $i < 5; $i++) {
    $arr3[$i] = $j - $i * 5;//$arr3[0] = 50 - 0*5 = 50 $arr3[1] = 50-1*5=45
    echo $arr3[$i] . " ";
//$result = $j + $arr3[1] + $arr3[2] + $arr3[3] + $arr3[4];
    $result += $arr3[$i];
}
echo $result;
echo '<br>';

echo " <br> 2 задание 15 слайда <br>";
$arr4 = [];
for ($i = 0; $i <= 10; $i++) {
    $arr4[$i] = mt_rand(0, 10);
    echo $arr4[$i] . " ";
}
echo '<br>';
for ($i = count($arr4) - 1; $i >= 0; $i--) {
    echo $arr4[$i] . " ";
}
echo '<br>';

echo " <br> 3 задание 15 слайда <br>";
$arr5 = ['1.png', '2.png', '3.png', '4.png'];
$d = mt_rand(0, 3);
echo $arr5[$d];
echo '<br>';

echo " <br> 4 задание 15 слайда <br>";
$arr6 = [];
$p = mt_rand(-100, 100);
$n = 10;
for ($i = 0; $i <= $n; $i++) {
    $arr6[$i] = mt_rand(-100, 100);
}
sort($arr6);
$min = 0;
$max = 0;
for ($i = 0; $i < count($arr6) - 1; $i++) {
    if ($arr6[$i] >= 0 and $min < $arr6[$i]) {
        $max = max($arr6[$i], $arr6[$i + 1]);
    }
    else {
        $min = min($arr6[$i], $arr6[$i + 1]);
    }
}
print_r($arr6);
echo $min;
echo "<br>";
echo $max;
