<?php
include "../config/connection.php";
$sql =("Delete FROM student where srn='$_GET[srn]'");
$query	= mysqli_query($conn,$sql);
echo"<meta http-equiv=refresh content='1; url=../index.php'>";
?>
