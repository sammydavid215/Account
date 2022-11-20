<?php
include "config.php";

if(isset($_POST['submit'])){
$txtUser = $_POST['txtUser'];
$txtname = $_POST['txtname'];
$txtUserN = $_POST['txtUserN'];
$txtPword = $_POST['txtPword'];
$txtCpword = $_POST['txtCpword'];
$txtEmail = $_POST['txtEmail'];
$Day = $_POST['Day'];
}
$sql="INSERT INTO 'user_admin' ('UserID','Full_Name','UserName','Password','C_Password','Control')
    VALUES ('txtUser','txtname','txtUserN','txtPword','txtEmail','Day')";
    $result = $conn->query($sql);
    if($result == TRUE){
        echo "New record Created";
    }
    else{
        echo "Error:" . $sql . "<br>". $conn->error;
    }
    $conn->closed();
?>