<?php
$row=7;
for($i=1;$i<=$row;$i++){
for($j=1;$j<=$i;$j++){
    echo "*";
}
echo"<br>";
}
for($i=$row;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo"<br>";
    }