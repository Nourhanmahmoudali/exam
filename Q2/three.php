<?php
$row=3;
for($i=1;$i<=$row;$i++){
for($j=1;$j<=2*$i-1;$j++){
    echo "*";
}
echo"<br>";
}
for($i=$row-1;$i>=1;$i--){
    for($j=1;$j<=2*$i-1;$j++){
        echo "*";
    }
    echo"<br>";
    }