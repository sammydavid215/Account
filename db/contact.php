<?php


$txtUser = $_POST['txtUser'];
$txtname = $_POST['txtname'];
$txtUserN = $_POST['txtUserN'];
$txtPword = $_POST['txtPword'];
$txtCpword = $_POST['txtCpword'];
$txtEmail = $_POST['txtEmail'];

if (!empty($txtUser) || !empty($txtname)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "inventory";

    $conn = new mysqli($host, $dbPassword, $dbPassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
}else{
    $SELECT = "SELECT UserID From admin Where UserID = ? Limit 1";
    $INSERT = "INSERT Into admin (S/N, UserId, Full_Name, UserName, PassWord, Confirm_PassWord) values (?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $txtUser);
    $stmt->execute();
    $stmt->bind_result($txtUser);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0){
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param('ssssii', $txtUser, $txtname, $txtUserN, $txtPword, $txtCpword);
        $stmt->execute();
        echo "New Record Saved!";
    }else{
        echo "someone already registered with the ID";
    }
    $stmt->close();
    $conn->close();

}
}else{
    echo "All Feild Are Required";
    die();
}