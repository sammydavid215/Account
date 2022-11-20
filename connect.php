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
    $value1=$_POST['Full_name'];
    $value2=$_POST['Particulars'];
    $value3=$_POST['Interest'];
    $value4=$_POST['Date'];
    $value5=$_POST['Debit'];
    $value6=$_POST['Icredit'];
    $value7=$_POST['Fcredit'];
    $value8=$_POST['Balance'];

    $sql="insert into savingsloan (Full_Name,Particulars,Interest,Date,Debit,Initial_Credit,Final_Credit,Balance)
    values ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8')";

if(!mysql_query($sql)){
 
 die('Error:'.mysql_error());
 }

echo "Saved Successfully!";

mysql_close();

?>

