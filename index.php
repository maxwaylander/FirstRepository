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

//function task4()
//{
//    $arr4 = [];
//    for ($i = 0; $i <= 10; $i++) {
//        $arr4[$i] = mt_rand(0, 10);
//        echo $arr4[$i] . " ";
//    }
//}


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
//echo " <br> 1 задание 15 слайда <br>";
//$j = 50;
//$arr3 = [];
//$result = 0;
//for ($i = 0; $i < 5; $i++) {
//    $arr3[$i] = $j - $i * 5;//$arr3[0] = 50 - 0*5 = 50 $arr3[1] = 50-1*5=45
//    echo $arr3[$i] . " ";
////$result = $j + $arr3[1] + $arr3[2] + $arr3[3] + $arr3[4];
//    $result += $arr3[$i];
//}
//echo $result;
//echo '<br>';
//
//echo " <br> 2 задание 15 слайда <br>";
//$arr4 = [];
//for ($i = 0; $i <= 10; $i++) {
//    $arr4[$i] = mt_rand(0, 10);
//    echo $arr4[$i] . " ";
//}
//echo '<br>';
//for ($i = count($arr4) - 1; $i >= 0; $i--) {
//    echo $arr4[$i] . " ";
//}
//echo '<br>';
//
//echo " <br> 3 задание 15 слайда <br>";
//$arr5 = ['1.png', '2.png', '3.png', '4.png'];
//$d = mt_rand(0, 3);
//echo $arr5[$d];
//echo '<br>';
//

//echo " <br> 4 задание 15 слайда <br>";
//$arr6 = [];
//$p = mt_rand(-100, 100);
//$n = 10;
//for ($i = 0; $i <= $n; $i++) {
//    $arr6[$i] = mt_rand(-100, 100);
//}
//
//$min = 100;
//$max = -100;
//for ($i = 0; $i < count($arr6); $i++) {
//    if ($arr6[$i] > 0 and $min > $arr6[$i]) {
//        $min = $arr6[$i];
//    }
//    elseif($arr6[$i] < 0 and $max < $arr6[$i]) {
//        $max = $arr6[$i];
//    }
//}
//print_r($arr6);
//echo "<br>";
////echo $min;
////echo "<br>";
//echo "min = " . $min . '<br>' ." max = " . $max;
//
////УРОК 7-8
//echo " <br> 3 задание 22 слайд <br>";
//$str = "Привет, мир!";
//$arr1 = mb_str_split($str);
//print_r($arr1);
//$sum = 0;
//for ($i = 0; $i < count($arr1) - 1; $i++ ){
//    if ($arr1[$i] == 'и')
//        $sum++;
//}
//echo $sum;

//echo " <br> 4 задание 22 слайд <br>";
//$str = 'html css php';
//$arr1 = explode(" ",$str);
//echo '<br>';
//print_r($arr1[0]);
//echo '<br>';
//print_r($arr1[1]);
//echo '<br>';
//print_r($arr1[2]);

//echo " <br> 5 задание 22 слайд <br>";
//$str = 'file.jpeg';
//$arr1 = explode('.', $str);
//print_r($arr1);
//foreach ($arr1 as $item){
//    if($item == "png"){
//        echo "да"; break;
//    }
//    else echo "нет"; break;
//}

//echo " <br> 8 задание 17 слайд <br>";
//
//$arr1 = [["банан", "ананас", "яблоко"], ["андромеда", "бельтегейзе", "альдебаран"]];
//foreach ($arr1 as $key => $value) {
//    foreach ($value as $item) {
//        $a = mb_str_split($item);
//        if ($a[0] == 'а') {
//            echo $item . '<br>';
//        }
//    }
//}
//
//echo " <br> 9 задание 17 слайд <br>";
//$arr2 = [[1,2,3],[2,3]];
//$arr2Count = 0;
//foreach ($arr2 as $key => $value){
//    if($arr2Count == 0){
//        $arr2Count = count($arr2);
//        echo "Количество элементов массива:".$arr2Count.'</br>';
//    }
//    foreach($value as $item ){
//        echo "Количество элементов измерения:".count($value).'</br>';
//        break;
//    }
//}

