<?php
$con = mysqli_connect("localhost", "root", "", "Inventory");

if(!$con){
die("Connection Error");
}
$query = " select * from cashtrans";
$result = mysqli_query($con,$query);

if(isset($_POST['update']))
{
	//$SN = $_GET['SN'];
	$Fname =$_POST['Firstname'];
    $Lname =$_POST['Lastname'];
    $Adress =$_POST['Address'];
    $Phone =$_POST['Phone'];
    $Date =$_POST['Date'];
    $Pwork =$_POST['Placework'];
    $Design =$_POST['Designation'];
    $Location =$_POST['Location'];
	$Particular =$_POST['Particulars'];
    $Cbalance1 =$_POST['Cashbalance'];
  	$Cash1 =$_POST['Cash'];
	// $Bank_name =$_POST['Bankname'];
    // $Debit =$_POST['Debit'];
    // $Facility =$_POST['Facility'];
	// $Amount1 =$_POST['Amount'];
	
	$query = "UPDATE 'cashtrans'  SET 'parti' = '".$Fname."', 'lf' = '".$Lname."', 'cash' = '".$Adress."', 'amount' = '".$Phone."', 'date' = '".$Date."', 'parti1' = '".$Pwork."', 'lf1' = '".$Design."',
	'cash1' = '".$Location."', 'amount1' = '".$Particular."', 'date1' = '".$Cbalance1."', 'month' = '".$Cash1."' where 'SN' = '".$SN."'" ;
	
	
	$result = mysqli_query($con,$query);
	
	if($result == TRUE)
	{
    echo "Record Updated Successfully!";
	//header("location:new_view.php");
	}

}else{

//header("location:new_view.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
