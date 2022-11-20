<?php
$con = mysqli_connect("localhost", "root", "", "Inventory");

if(!$con){
die("Connection Error");
$result = mysqli_query($con,$sql);
}

$value1=$_POST['parti'];
$value2=$_POST['lf'];
$value3=$_POST['cash'];
$value4=$_POST['old_date'];
$value5=$_POST['parti1'];
$value6=$_POST['lf1'];
$value7=$_POST['cash1'];
$value8=$_POST['new_date'];
$value10=$_POST['LF_name'];
$value9=$_POST['Pselect'];
$value11=$_POST['Lfid'];

$sql="insert into genledger (parti,lf,cash,date,parti1,lf1,cash1,date1,LF_name,month,Lfid)
values ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value10','$value9','$value11')";
header('location:General_Ledger.php?message=1');
if(!mysqli_query($con, $sql)){

die('Error');
}

echo "Saved Successfully!";
//mysqli_close($sql);
?>