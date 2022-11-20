<?php
$con = mysqli_connect("localhost", "root", "", "Inventory");
define('phone', 'GetID');
$error = '';
if(!$con){
die("Connection Error");
$result = mysqli_query($con,$sql);
}
$value1=$_POST['txtUser'];
$value2=$_POST['txtname'];
$value3=$_POST['txtUserN'];
$value4=$_POST['txtPword'];
$value5=$_POST['txtCpword'];
$value6=$_POST['txtEmail'];
$value7=$_POST['Day'];


$sql="insert into user_admin (UserID,Full_Name,UserName,Password,C_Password,Email,Control)
values ('$value1','$value2','$value3','$value4','$value5','$value6','$value7')";
// if($result == TRUE){
//     echo "Saved Successfully!";
// }
// else{
// //     echo "Not saved";
// }
if(!mysqli_query($con,$sql)){

die('Error');
}
header("location: Admin.html");
echo "Saved Successfully!";
//mysqli_close($con,$sql);
?>
<button onClick="window.location.href='./Admin.html'"class="Home">Back</button>