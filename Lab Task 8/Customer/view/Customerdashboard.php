<!DOCTYPE html>
<html>
<head>
    <title>Customer Dashboard</title>

</head>
<body style="background-color:#ccffff;">

<fieldset>
Dogo Sage Day Care Center
<div align=right>
<?php include 'C:/xampp/htdocs/project/Lab Task 8/Customer/Navigation/header.php';?>
</div>
</fieldset>


<fieldset>
	<div align=left><img src='/project/Lab Task 8/logo.jpg' alt="DOGO" width="70" height="70"></div>

Account <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/Lab Task 8/Customer/Navigation/sidebar.php';
?>

</div>

<center>
<?php
if (isset($_SESSION['username'])) {
    echo "<h3> Welcome ".$_SESSION['username']." to the Customer Panel </h3>";
} 

?>
</center>
</fieldset>


<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/Lab Task 8/Customer/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>