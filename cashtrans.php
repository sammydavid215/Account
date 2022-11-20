<?php
$con = mysqli_connect("localhost", "root", "", "Inventory");
define('phone', 'GetID');
if(!$con){
die("Connection Error");
$result = mysqli_query($con,$sql);
}
$parti=$_POST['parti'];
$lf=$_POST['lf'];
$cash=$_POST['cash'];
$bank=$_POST['bankname'];
$date=$_POST['date'];
$party=$_POST['parti1'];
$lff=$_POST['lf1'];
$cashs=$_POST['cash1'];
$banks=$_POST['bankname1'];
$ndate=$_POST['new_date'];
$select=$_POST['Pselect'];

$sql="insert into cash_trans (parti,lf,cash,bank,date,parti1,lf1,cash1,bank1,date1,month)
values ('$parti','$lf','$cash','$bank','$date','$party','$lff','$cashs','$banks','$ndate','$select')";
//header('location:Savings_Loan.php');
if(!mysqli_query($con,$sql)){

die('Error');
}

echo "Saved Successfully!";
mysqli_close($sql);
?>