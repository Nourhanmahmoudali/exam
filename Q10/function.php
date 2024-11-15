<?php
function checkprimenumber($num){
    if($num<=1){
        echo "is not prime";
    }
    if($num==2){
    echo "is prime";
    }
    if($num%2==0){
        echo"is not prime";
    }

        for($i=3;$i<$num;$i=$i+2){
            if($num%$i==0){
            return "is not prime number";
            }
            }
        return"the number is prime"; 

  }
 

echo checkprimenumber(27);