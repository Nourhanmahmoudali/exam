<?php
$month=10;
$monthbefore;

if($month-1<=0){
    $monthbefore=12;
}
else{
   $monthbefore=$month-1;
}
echo $monthbefore;