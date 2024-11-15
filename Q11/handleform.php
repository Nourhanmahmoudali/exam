<?php
$color=$_POST['color'];


setcookie('backgroundcolor',$color,time()+60*60*2);



header("location:p.php");


