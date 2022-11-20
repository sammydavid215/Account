<?php
include "config.php";

if(isset($_GET['S/N'])){

$user_id = $_GET['S/N'];

$sql = "DELETE FROM `user_admin` WHERE  `S/N` = 'user_id'";

$result = $conn->query($sql);

if($result == TRUE){
    echo "Record Deleted Successfully.";
}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}

}
?>