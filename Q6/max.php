<?php
$numbers=[10,20,30];
 $max;
 for($i=0;$i<=count($numbers)-1;$i++){
    if($numbers[$i]>$numbers[$i+1]){
        $max=$numbers[$i];
    }

 }
print_r($max);