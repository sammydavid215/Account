<?php
$con = mysqli_connect("localhost", "root", "", "Inventory");
define('phone', 'GetID');
$error ='';
if(!$con){
die("Connection Error");
$result = mysqli_query($con,$sql);
}
$value14=$_POST['new_date'];
$value1=$_POST['Fullname'];
$value2=$_POST['LF'];
$value3=$_POST['comp_number'];
$value4=$_POST['parti'];
$value5=$_POST['debit'];
$value6=$_POST['credit'];
$value7=$_POST['balance'];
$value8=$_POST['debitN'];
$value9=$_POST['creditN'];
$value10=$_POST['balanceN'];
$value11=$_POST['interest'];
$value12=$_POST['Pselect'];
$value13=$_POST['year'];


$sql="insert into individualledgger (Date,Fullname,LF,comp_number,parti,debit,credit,cash,debit1,credit1,cash1,interest,month,year)
values ('$value14','$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13')";
if($result == TRUE){$error.='<p><label>Record Added!</label></p>';}
//if($result == TRUE){echo "Record Insert: -" .$con ->insert_id;}
header('location:New_ledger_trans.php?message=1');
if(!mysqli_query($con, $sql)){
    
die('Error');
}
echo "Record Insert: -" .$con ->insert_id;
//echo "Saved Successfully!";
//mysqli_close($sql);
?>