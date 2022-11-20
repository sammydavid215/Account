
<?php

$txtUser = $_POST['txtUser'];
$txtname = $_POST['txtname'];
$txtUserN = $_POST['txtUserN'];
$txtPword = $_POST['txtPword'];
$txtCpword = $_POST['txtCpword'];
$txtEmail = $_POST['txtEmail'];
$Day = $_POST['Day'];
$conn = new mysqli('localhost','root','','inventory');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert inot user_admin(UserID,Full_Name,UserName,Password,C_Password,Email)values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssss",$txtNum, $txtUser, $txtname, $txtUserN, $txtPword, $txtCpword, $txtEmail, $Day);
    $stmt->execute();
    echo "Save Successfully!";
    $stmt->close();
    $stmt->close();
}
?>