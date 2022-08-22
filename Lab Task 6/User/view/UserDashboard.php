<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

</head>
<body>

<fieldset>
DOGGO SAGE DAY CARE CENTER
<div align=right>
<?php include 'C:/xampp/htdocs/project/Lab Task 6/User/Navigation/header.php';?>
</div>
</fieldset>


<fieldset>
	
<br>
<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/Lab Task 6/User/Navigation/sidebar.php';
?>

</div>

<center>
<?php
if (isset($_SESSION['username'])) {
    echo "<h3> Welcome ".$_SESSION['username']." to the Dashboard </h3>";
} 

?>
</center>
</fieldset>


<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/Lab Task 6/User/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>