<?php
define('DB_NAME','inventory');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
define('DB_CONNECTION', 'link');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$link){
die('Could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);
if(!$db_selected){
die('can\t use' . DB_NAME .':' .mysql_error());
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

if(!mysql_query($sql)){
 
 die('Error:'.mysql_error());
 }

echo "Saved Successfully!";
mysql_close();


?>
