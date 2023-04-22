<?php
//global $style;
//$date = new DateTime('NOW');
//$hour = $date->format('G');
//if ( ($hour > 10) && ($hour < 22) ) {
//    $style = './Styles/Style.css';
//} else {
//    $style = './Styles/StylesNight.css';
//
//}
//$dochtml = new domDocument();
//$dochtml ->loadHTML('homwrk.php');
//$self = $dochtml ->getElementById("self");
//$reply = $dochtml ->getElementById("reply");


$str = strip_tags(file_get_contents("homwrk.php"));
echo $str;
$patt = '~(?<vowels>[аеёиоуыэюя])|~iu';
$Vovels = preg_match_all($patt, $str);
echo 'Количество гласных букв' . $Vovels . '<br>';
$word = str_word_count($str);
echo 'Количество слов' . $word;