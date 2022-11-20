<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','inventory');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
$qry="SELECT * FROM registrition ";
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
    $sn = $_POST['SN'];
	
	//$fname = ($_POST['UserID']);
	//$lname = ($_POST['Full_Name']);
	//$role = ($_POST['Email']);
	
		//Create query
	$qry="SELECT * FROM registrition WHERE SN='$sn' ";
	$result=mysqli_query($db,$qry);
	
	
if($result)
 {
		if(mysqli_num_rows($result) > 0 ) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['Userid'] = $member['Userid'];
			//$_SESSION['Fullname'] = $member['Fullname'];
			//$_SESSION['UserID'] = $member['UserID'];
			//$_SESSION['Full_Name'] = $member['Full_Name'];
			//$_SESSION['Email'] = $member['Email'];			
			
			session_write_close();
			
$value1 = $_POST['Fname'];
$value  = $_POST['SN'];
$value2 = $_POST['Lname'];
$value3 = $_POST['Adress'];
$value4 = $_POST['Date'];
$value5 = $_POST['Pwork'];
$value6 = $_POST['Design'];
$value7 = $_POST['Location']; 
$value8 = $_POST['Particular'];
$value9 = $_POST['Cbalance1'];
$value10 = $_POST['Cash1'];
$value11 = $_POST['Bank_name'];
$value12 = $_POST['Ledger'];
$value13 = $_POST['Amount1'];
			
			
			//header("location: Update.html?");
			exit();
			}
		
		else
		 {
			echo "Record Not Found!";
			//header("location: login_error.php");
			//exit();
		}
		}
else
	{
	die("Query failed");
	}	
?>
<?php
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            
        <td><?php echo $row['SN'];?></td>
        <td><?php echo $row['Date'];?></td>
        <td><?php echo $row['Fname'];?></td>
        <td><?php echo $row['Lname'];?></td>    
        <td><?php echo $row['Particular'];?></td>
        <td><?php echo $row['Cbalance1'];?></td>
        <td><?php echo $row['Cash1'];?></td>
        <td><?php echo $row['Bank_name'];?></td>
        <td><?php echo $row['Amount1'];?></td>
        <td><?php echo $row['Debit'];?></td>
      
        <td><a class="btn btn-info" href="update.php?S/N<?php echo $row['SN']; ?>">
    Edit</a>&nbsp;<a
    class="btn btn-danger" href="delete.php?S/N=<?php echo $row['SN'];?>">Delete</a></td>
    </tr>
   <?php }
}
?>
</tbody>
</table>