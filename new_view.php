<?php
require_once("connection_link.php");
$query = " select * from registrition";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table>
<tr>
<td>USERID</td>
<td>DATE</td>
<td>FIRSTNAME</td>
<td>LASTNAME</td>
<td>ADDRESS</td>
<td>PHONE</td>
<td>WORK_PLACE</td>
<td>DESIGNATION</td>
<td>LOCATION</td>
<td>PARTICULARS</td>
<td>CASH_BALANCE</td>
<td>CASH</td>
<td>DEBIT</td>
<td>FACILITY</td>
<td>BANK_NAME</td>
<td>AMOUNT</td>
<td>EDIT</td>
<td>DELETE</td>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{
	
	$Fname = $row['Fname'];
    $Lname = $row['Lname'];
    $Adress = $row['Adress'];
    $Date = $row['Date'];
   $Pwork = $row['Pwork'];
    $Design = $row['Design'];
   $Location = $row['Location'];
    $Particular = $row['Particular'];
	$Cbalance1 = $row['Cbalance1'];
    $Cash1 = $row['Cash1'];
    $Bank_name = $row['Bank_name'];
	$Debit = $row['Debit'];
    $Facility = $row['Facility'];
    $Amount1 = $row['Amount1'];
?>
<tr> 
        <td><?php echo $row['SN'];?></td>
		<td><?php echo $row['Date']?></td> 
        <td><?php echo $row['Fname'];?></td>
        <td><?php echo $row['Lname']?></td>
        <td><?php echo $row['Adress'] ?></td>
		<td><?php echo $row['Phone'] ?></td>
        <td><?php echo $row['Pwork'];?></td>
        <td><?php echo $row['Design'];?></td>
        <td><?php echo $row['Location'];?></td>
        <td><?php echo $row['Particular'];?></td>
        <td><?php echo $row['Cbalance1'];?></td>
        <td><?php echo $row['Cash1'];?></td>
		<td><?php echo $row['Debit'];?></td>
		 <td><?php echo $row['Facility'];?></td>
        <td><?php echo $row['Bank_name'];?></td>
		 <td><?php echo $row['Amount1']?></td>
        
		
		 <td><a href="Edit_new.php?GetID=<?php echo $row['Phone'];?>">Edit</a></td>
        <td><a href="delete.php?Del=<?php echo $row['Phone']; ?>">Delete</a></td>
	</tr>

<?php
}

?>
</table>
</body>
</html>
