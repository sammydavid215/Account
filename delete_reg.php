<?php
include "connection_link.php";

if(isset($_GET['Del'])){

    $SN = $_GET['Del'];

$sql = " delete from registrition where  SN = '".$SN."'";

$result = mysqli_query($con,$sql);

if($result == TRUE){
    //echo "Record Deleted Successfully.";
	header("location:view_client.php");
}else{
    echo "Error:" . $sql . "<br>" . $con->error;
}

}
?>