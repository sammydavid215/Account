<?php
define('DB_NAME', 'inventory');
define('DB_USER', 'inventory');
define('DB_PASSWORD', 'inventory');
define('DB_HOST', 'inventory');

$link = mysql_connect(DB_HOST, DB_PASSWORD, DB_USER, DB_NAME);
if (!$link){
    die('could not connect:'. mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);
if(!$db_selected){
    die('could not use'.DB_NAME. ':'. mysql_error());
}
$usernid = $_POST['txtUser'];
$fullname = $_POST['txtname'];
$UserName = $_POST['txtUserN'];
$Password = $_POST['txtPword'];
$Cpword = $_POST['txtCpword'];
$Email = $_POST['txtEmail'];
$Day = $_POST['Day'];

$sql="INSERT INTO user_admin(txtUser,txtname,txtUserN,txtPword,txtCpword,txtEmail,Day)
    VALUES('$usernid','$fullname','$UserName','$Password','$Cpword','$Email','$Day')";

if(!mysql_query($sql)){
    die('Error:'. mysql_error());
}

echo "successful";
mysql_closed();
?>