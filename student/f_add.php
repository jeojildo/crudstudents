<!DOCTYPE html>
<html>
<head>
	<title>CRUD With PHP</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/jquery-3.7.0.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
<body>

<form method="POST" action="add.php">
<table class="table" cellpadding="0" cellspacing="0" border="0">
<tr><td colspan="3">Form Student</td></tr>
<td>Student Regitstration Number</td><td><input type="text" name="srn"  placeholder="SRN" size="8" required autofocus></td>
</tr>
<tr>
<td>Name</td><td><input type="text" name="studentname"  placeholder="Student Name" size="30" required></td>
</tr>
<tr>
<tr>
</tr>
<tr> <td></td>
<td colspan="2"><button class='btn btn-sm btn-success'>Save</button> &nbsp; <button class='btn btn-sm btn-warning' onclick=self.history.back()> Cancel</button></tr>
</table>
</form>
</body>
</html>