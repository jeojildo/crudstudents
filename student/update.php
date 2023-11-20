<?
include "../config/connection.php";
mysqli_query($conn, "UPDATE student SET srn='$_POST[srn]',
studentname	='$_POST[studentname]'	
WHERE srn	='$_POST[srn]'");
echo"<meta http-equiv=refresh content='1; url=../index.php'>";
?>