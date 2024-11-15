<?php
if(isset($_COOKIE['backgroundcolor'])){
    $cookie=$_COOKIE["backgroundcolor"];
}
?>
<html>
    <body style="background-color:<?php echo $cookie?>">
</body>
</html>