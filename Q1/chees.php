<?php
for($row=1;$row<=8;$row++){
 for($col=1;$col<=8;$col++){
    $num=$col+$row;
   if(($num)%2==0){
       echo" w "; 
    }
    else{
        echo " b ";
    }
}
  echo"<br>";
}