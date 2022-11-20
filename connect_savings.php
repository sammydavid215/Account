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
    $value1=$_POST['Firstname'];
    $value2=$_POST['Lastname'];
    $value3=$_POST['Address'];
    $value4=$_POST['Date'];
    $value5=$_POST['Placework'];
    $value6=$_POST['Designation'];
    $value7=$_POST['Location'];
    $value8=$_POST['Particulars'];
	$value9=$_POST['Cashbalance'];
    $value10=$_POST['Cash'];
    $value11=$_POST['Bankname'];
	$value12=$_POST['Debit'];
    $value13=$_POST['Facility'];
    $value14=$_POST['Amount'];
   

    $sql="insert into registrition (Fname,Lname,Adress,Date,Pwork,Design,Location,Particular,Cbalance1,Cash1,Bank_name,Debit,Facility,Amount1)
    values ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13','$value14')";

if(!mysql_query($sql)){
 
 die('Error:'.mysql_error());
 }

echo "Saved Successfully!";

 	$value1="";
    $value2="";
    $value3="";
    $value4="";
    $value5="";
    $value6="";
    $value7="";
    $value8="";
	$value9="";
    $value10="";
    $value11="";
    $value12="";
    $value13="";

mysql_close();

?>

