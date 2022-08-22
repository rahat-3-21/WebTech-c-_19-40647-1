
<?php 
session_start();
if (isset($_SESSION['password'])) {
    echo '<span>Logged in as '.$_SESSION['username'] .'</span> | ';
    echo '<a href="/project/Lab Task 6/User/view/Logout.php" style="color:red" >Logout</a> |';
    echo '<hr>';
} else {
    echo '
    <a href="/project/Lab Task 6/Home.php" style="color:red" >Home</a> <br>
    <a href="/project/Lab Task 6/User/view/Login.php" style="color:red" >Login</a><br>
	<a href="/project/Lab Task 6/User/view/User_registration.php" style="color:red" >Registration</a> |
  <hr>
';

}
?>


