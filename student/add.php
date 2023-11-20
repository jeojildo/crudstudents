<?php
include"../config/connection.php";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$stmt =("INSERT INTO student(srn, studentname)
VALUES ('$_POST[srn]','$_POST[studentname]')");
if(!mysqli_query($conn,$stmt))
	{
	die('Error: '.mysqli_error($conn));
	}
if($stmt){
?>

<script language="javaScript">
alert('Data Student Saved, Thanks!');
document.location="../index.php";
</script>
<?php
}
  mysqli_close($conn);
?>