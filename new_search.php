<?php

DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','inventory');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

//Start session
session_start();

	//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	
		//Sanitize the POST values
    $username = $_POST['Pnum'];
	//$password = $_POST['pword'];
	//$fname = ($_POST['UserID']);
	//$lname = ($_POST['Full_Name']);
	//$role = ($_POST['Email']);
	
		//Create query
	$qry="SELECT * FROM registrition WHERE Phone='$username'";
	$result=mysqli_query($db,$qry);
	
	
if($result)
 {
		if(mysqli_num_rows($result) > 0 ) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['uname'] = $member['uname'];
			$_SESSION['pword'] = $member['pword'];
			//$_SESSION['UserID'] = $member['UserID'];
			//$_SESSION['Full_Name'] = $member['Full_Name'];
			//$_SESSION['Email'] = $member['Email'];			
			
			session_write_close();
			header("location: Home.html?");
			exit();
			}
		
		else
		 {
			echo "Login failed";
			//header("location: login_error.php");
			//exit();
		}
		}
else
	{
	die("Query failed");
	}	
?>

