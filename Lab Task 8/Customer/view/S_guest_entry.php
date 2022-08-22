</head>
<body>
<head>
    <title>Guest Details Entry</title>

</head>
<body>

<fieldset>
Doggo Sage Day Care Center
<div align=right>
<?php include 'C:/xampp/htdocs/project/Lab Task 8/Security/Navigation/header.php';?>
</div>
</fieldset>

<?php


$gnameErr = "" ;
$flatErr =""; 
$gname = $flatname = "";
$errCount = 0;
 $message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
if (empty($_POST["gname"]))
{
$gErr = "Guest Name is required";
$errCount = $errCount + 1;	
}
else
{
$gname = $_POST["gname"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$gname))
	{
      $gnameErr = "Only letters and white space allowed";
	  $errCount = $errCount + 1;
    }

	if (strlen($gname) <2 )
	{
		$gnameErr = "Name must contains at least two words";
		$errCount = $errCount + 1;
	}
	
}


//Flat validation
if (empty($_POST["flatname"]))
{
  $flatErr = "Flat number is required";
  $errCount = $errCount + 1;
}
	else 
	{
		$flatname = $_POST["flatname"];
	}
	
	//json works
	if($errCount > 0) {
      $message = "<span class='error'>Sorry ! Error occurred!</span>";
      } else {
	if(file_exists("C:/xampp/htdocs/project/Final Project/Security_data/Entry_security.json"))  
           {  
                $current_data = file_get_contents("C:/xampp/htdocs/project/Final Project/Security_data/Entry_security.json");  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'GuestName'               =>     $_POST['gname'],  
                     'FlatNo'          =>     $_POST["flatname"],  		
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents("C:/xampp/htdocs/project/Final Project/Security_data/Entry_security.json", $final_data))  
                {  
                     $message = "<label class='text-success'>Submission Successful</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
	}
} 

function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

 <fieldset>
<h2>Guest Details Entry</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Guest Name: <input type="text" name="gname" value="<?php echo $gname;?>">
  <span class="error">* <?php echo $gnameErr;?></span>
  <br><br>
  
 Choose a Flat Number:

<select name="flatname" id="flatname">
  <option value="A1">Flat A1</option>
  <option value="A2">Flat A2</option>
  <option value="B1">Flat B1</option>
  <option value="B2">Flat B2</option>
  <option value="C1">Flat C1</option>
  <option value="C2">Flat C2</option>
  <span class="error">* <?php echo $flatErr;?></span>
</select>
  
<br><br>
 <input type="submit" value="Submit">
<br>
<br>
<?php  
        if(isset($message))  
        {  
         echo $message;  
        }  
?>
<br>
Go to <a href ="/project/Final Project/Security/view/securityDashboard.php">Dashboard</a>
</form>
</fieldset>

<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/Final Project/Security/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>