<?php
global $style;
$date = new DateTime('NOW');
$hour = $date->format('G');
if ( ($hour > 10) && ($hour < 22) ) {
    $style = './Styles/Style.css';
} else {
    $style = './Styles/StylesNight.css';

}
$dochtml = new domDocument();
$dochtml ->loadHTML('homwrk.php');
$self = $dochtml ->getElementById("self");
$reply = $dochtml ->getElementById("reply");

