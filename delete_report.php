<?php
include "connection_link.php";

if(isset($_GET['Del'])){

    $SN = $_GET['Del'];

$sql = " delete from genledger where  SN = '".$SN."'";

$result = mysqli_query($con,$sql);

if($result == TRUE){
    //echo "Record Deleted Successfully.";
	header("location:General_Ledger.php");
}else{
    echo "Error:" . $sql . "<br>" . $con->error;
}

}
?>