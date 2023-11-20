<!DOCTYPE html>
<html>
<head>
	<title>CRUD With PHP</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/jquery-3.7.0.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
<body>
<?php
include "../config/connection.php";
$edit = mysqli_query($conn, "SELECT * FROM student WHERE srn='$_GET[srn]'");
$row = mysqli_fetch_array($edit);
echo "<form method=POST action='update.php'>
<table class='table' cellpadding='0' cellspacing='0' border='0'>
<tr><td colspan='2'>Form Update Data Student</td></tr>
<tr><td>SRN</td>  <td><input type=text name=srn readonly value='$row[srn]' size=7></td></tr>
<tr><td>Student Name</td>  <td><input type=text name=studentname value='$row[studentname]'></td></tr>
<tr><td></td><td colspan='2'><button class='btn btn-sm btn-success'>Update</button> &nbsp; <button class='btn btn-sm btn-warning' onclick=self.history.back()> Cancel</button></tr>
</table>
</form>";
?>
</body>
</html>