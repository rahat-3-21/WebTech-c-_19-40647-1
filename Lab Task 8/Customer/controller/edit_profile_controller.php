<?php 
	
		
		$con = mysqli_connect('127.0.0.1', 'root', '', 'hms');
		
		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:2;	url=../views/View_profile.php");
		}
		
		else
		{
 
        $sql ="UPDATE s_registration SET fname = '$_POST[name]', email = '$_POST[email]', gender = '$_POST[gender]', nid = '$_POST[nid]'";
        
			if(mysqli_query($con, $sql))
			{
				echo "Data is updated to ~users~ table!";	
				header("refresh:4;	url=../view/adminDashboard.php");
			}
			else
			{
				echo "!! Error !!";
			}
		
		}
		
?>