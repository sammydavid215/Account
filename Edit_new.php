<?php
require_once("connection_link.php");
define('var', 'UPD');
//if(isset($_GET['SN']))
$SN ="";
$Fname="";
$Lname="";
$Adress="";
$Phone="";
$Date="";
$Pwork="";
$Design="";
$Location="";
$Particular="";
$Cbalance1="";
$Cash1="";

$SN = $_GET['UPD'];

$query = "select * from cashtrans where SN = '".$SN."'";
$result = mysqli_query($con, $query);

while($row=mysqli_fetch_assoc($result))
{
	$SN = $row['SN'];
	$Fname = $row['parti'];
    $Lname = $row['lf'];
    $Adress = $row['cash'];
	$Phone = $row['amount'];
    $Date = $row['date'];
    $Pwork = $row['parti1'];
    $Design = $row['lf1'];
    $Location = $row['cash1'];
    $Particular = $row['amount1'];
	$Cbalance1 = $row['date1'];
    $Cash1 = $row['month'];
    // $Bank_name = $row['Bank_name'];
	// $Debit = $row['Debit'];
    // $Facility = $row['Facility'];
    // $Amount1 = $row['Amount1'];

  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Update Record</title>
</head>

<body>

 <form> 
	
            <form action ="update2.php?UPD=<?php echo $SN ?>" method="post">
		    <input placeholder="First Name" name="Firstname" class="File" type="text" value="<?php echo $Fname?>" >
            <input placeholder="Last Name" name="Lasttname"  class="File" type="text" value="<?php echo $Lname ?>">
            <input placeholder="Address"  name="Adress"  class="File" type="text" value="<?php echo $Adress?>"><br><br>
			<input placeholder="Phone"  name="Phone"  class="File" type="text" value="<?php echo $Phone?>"><br><br>
            <label>==>Old Trans Date</label><input value="<?php echo $Date?>" type="date"> <label>==>New Trans Date</label><input type="date" name="Date"><br><br>
            <input placeholder="Place Of Work" class="File"  name="PlaceofWork" type="text" value="<?php echo $Pwork?>">
            <input placeholder="Designation" class="File"  name="Designation" type="text" value="<?php echo $Design?>">
            <input placeholder="Location" class="File"  name="Location" type="text" value="<?php echo $Location?>"><br><br>
            <input placeholder="Client Particular"  name="Particular" class="File" type="text" value="<?php echo $Particular?>">
            <input placeholder="Cash Balance Before" name="Cashbefore" class="File" type="text" value="<?php echo $Cbalance1?>" >
            <input placeholder="Current Cash" class="File" name="Currentcash" type="text" value="<?php echo $Cash1 ?>" ><br><br>
            <!-- <input placeholder="Bank Name" class="File"  name="Bankname" type="text" value="<?php echo $Bank_name?>">
   			<input placeholder="Balance Before" class="File"  name="Balance" type="text" value="<?php echo $Debit?>">
			<input placeholder="Facility" class="File"  name="Facility" type="text" value="<?php echo $Facility?>">
            <input placeholder="Amount" class="File"  name="Amount" type="text" value="<?php echo $Amount1?>"><br><br> -->
            <button name="update" class="Home1">Update Record</button>
        </form>  
		
		</form>
</body>
</html>
