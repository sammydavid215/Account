<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "test_1";

$id = "";
$fname = "";
$lname = "";
$age = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
$connect = mysqli_connect($host, $user, $password, $database); 

}catch (Exception $ex){

echo 'Error';}

function getPosts(){

$posts = array();
$posts[0] = $_POST['id'];
$posts[1] = $_POST['fname'];
$posts[2] = $_POST['lname'];
$posts[3] = $_POST['age'];

return $posts;

}
//search
if(isset($_POST['search'])){

$data = getPosts();

$search_Query = "SELECT * FROM users WHERE id = $data[0]";

$search_Result = mysqli_query($connect, $search_Query);
if($search_Result){
if(mysqli_num_rows($search_Result)){

while($row = mysqli_fetch_array($search_Result)){
}}}}
//$id = $row['id']
//$fname = $row['fname']
//$lname = $row['lname']
//$age = $row['age']
//}
//}else{
//echo 'No record found';
//}
//}else{
//echo 'No record found';}

//}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">

<input type="number" name="id" placeholder="id" value="<?php echo $id;?>"><br><br><br>
<input type="text" name="fname" placeholder="first name" value="<?php echo $fname;?>"><br><br><br>
<input type="text" name="lname" placeholder="last name" value="<?php echo $lname;?>"><br><br><br>
<input type="number" name="age" placeholder="age" value="<?php echo $age;?>"><br><br><br>
<div>
<input type="submit" name="insert" Value="add">
<input type="submit" name="update" Value="update">
<input type="submit" name="delete" Value="delete">
<input type="submit" name="search" Value="search">
</div>

</form>
</body>
</html>
