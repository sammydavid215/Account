<?php
include "connection_link.php";

if(isset($_GET['Del'])){

    $SN = $_GET['Del'];

$sql = " delete from cashtrans where  SN = '".$SN."'";

$result = mysqli_query($con,$sql);

if($result == TRUE){
    //echo "Record Deleted Successfully.";
	header("location:Cash_Transactions.php?msg=1");
}else{
    echo "Error:" . $sql . "<br>" . $con->error;
}

}
?>