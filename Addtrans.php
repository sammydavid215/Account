<?php
$con = mysqli_connect("localhost", "root", "", "Inventory");

if(!$con){
die("Connection Error");
$result = mysqli_query($con);
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
$lfid=$_POST['lfid'];
$year=$_POST['year'];

$sql="insert into cashtrans (parti,lf,cash,amount,date,parti1,lf1,cash1,amount1,date1,month,lfid,year) values ('$parti','$lf','$cash','$bank','$date','$party','$lff','$cashs','$banks','$ndate','$select','$lfid','$year')";
header('location:Cash_Transactions.php?message=1');
$error = '<label> Record Added</lable>';
if(!mysqli_query($con,$sql)){

die('Error');
}

echo "Saved Successfully!";
//mysqli_close($sql);
?>