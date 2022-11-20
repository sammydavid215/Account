<?php
$con = mysqli_connect("localhost", "root", "", "Inventory");
//define('phone', 'GetID');
if(!$con){
die("Connection Error");
$result = mysqli_query($con,$sql);
}
$value1=$_POST['Firstname'];
$value2=$_POST['Lastname'];
$value3=$_POST['Address'];
$value4=$_POST['Phone'];
$value5=$_POST['Date'];
$value6=$_POST['Comp_num'];
$value7=$_POST['Placework'];
$value8=$_POST['Designation'];
$value9=$_POST['Location'];
$value10=$_POST['Interest'];
$value11=$_POST['LF'];
$value12=$_POST['Amount'];
$value21=$_POST['reg'];
$value13=$_POST['Particulars'];
$value14=$_POST['Credit'];
$value15=$_POST['Cashbalance'];
$value16=$_POST['Cash'];
$value17=$_POST['Bankname'];
$value18=$_POST['Debit'];
$value19=$_POST['DOF'];
$value20=$_POST['DOR'];


$sql="insert into registrition (Fname,Lname,Adress,Phone,Date,comp_number,Pwork,Design,Location,Interest,Particular,Credit,reg,Cbalance1,Cash1,Bank_name,Debit,Facility,Amount1,DOF,DOR)
values ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value21','$value13','$value14','$value15','$value16','$value17','$value18','$value19','$value20')";
// echo "Saved Successfully!";

if(!mysqli_query($con,$sql)){

die('Error');
}
//header('location:Registration.html');
echo "Saved Successfully!";

//mysqli_close($sql);
?>
<br><br><button onClick="window.location.href='./Registration.html'" id="view" name="view" class="Home1">Back</button>