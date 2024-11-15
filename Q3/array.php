<?php
$array=[2,4,3,6,7,5,8,0,9];
$temp;

for($i=0;$i<=count($array)-1;$i++){
   for($j=$i+1;$j<=count($array)-1;$j++)
    if($array[$i]<$array[$j]){
       $temp=$array[$j];
       $array[$j]=$array[$i];
       $array[$i]=$temp;
    }

}
print_r($array);
echo"<hr>";


for($i=0;$i<=count($array)-1;$i++){
    for($j=$i+1;$j<=count($array)-1;$j++)
     if($array[$i]>$array[$j]){
        $temp=$array[$j];
        $array[$j]=$array[$i];
        $array[$i]=$temp;
     }
 
 }
     print_r($array);