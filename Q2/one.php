<?php
$row=5;
for($i=1;$i<=$row;$i++){
    for($x=0;$x<=$row-$i;$x++)
    echo "&nbsp;";
for($y=1;$y<=$i;$y++)
 echo"*";
echo"<br>";
}

for($i=$row-1;$i>=1;$i--){
    for($x=0;$x<=$row-$i;$x++)
    echo "&nbsp;";
for($y=1;$y<=$i ;$y++)
 echo"*";
echo"<br>";
}