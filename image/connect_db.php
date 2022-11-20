<?php
$Dbconnect=mysqli_connect("localhost","root","","inventory");
$usernid = $_POST['txtUser'];
$fullname = $_POST['txtname'];
$UserName = $_POST['txtUserN'];
$Password = $_POST['txtPword'];
$Cpword = $_POST['txtCpword'];
$Email = $_POST['txtEmail'];
$Day = $_POST['Day'];

if(mysqli_connect_error($Dbconnect)){
  echo "fail to connect"; 
}
else{
    $sql="INSERT INTO `user_admin`(`UserID`,`Full_Name`,`UserName`,`Password`,`C_Password`,txtEmail,`Control`)
    VALUES('txtUser','txtname','txtUserN','txtPword','txtCpword','txtEmail','Day')";

    $rs = mysqli_query($Dbconnect,$sql);
    echo " connect";

}?>