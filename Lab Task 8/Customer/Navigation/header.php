
<?php 
session_start();
if (isset($_SESSION['password'])) {
    echo '<span>Logged in as '.$_SESSION['username'] .'</span> | ';
    echo '<a href="/project/Lab Task 8/Customer/view/Logout.php" style="color:red" >Logout</a> |';
    echo '<hr>';
} else {
    echo '
    <a href="/project/Lab Task 8/Home.php" style="color:orange" >Home</a> |
    <a href="/project/Lab Task 8/Customer/view/Login.php" style="color:orange" >Login</a> |
	
	
  <hr>
';

}
?>


