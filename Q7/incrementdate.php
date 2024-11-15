<?php
$day=21;
$month=12;
$year=2012;
$monthAfterIncrement;
if($month==12){
    $monthAfterIncrement=1;
    $year=$year+1;
}
else{
    $monthAfterIncrement=$month+1;
}
echo $year."-". $monthAfterIncrement."-".$day;