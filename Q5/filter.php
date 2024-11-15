<?php
$array=[2,7,8,4,9,5];
for($i=0;$i<count($array);$i++){
    if($array[$i]%2==0){
        unset($array[$i]);
    }
}
print_r($array);