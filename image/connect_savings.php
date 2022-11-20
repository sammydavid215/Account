<?php
$hostname="localhost";
$username="root";
$dbname="inventory";
$password="";

$conn=mysqli_connect($hostname,$username,$password,$dbname)
or Die ("Connection Failed");

if(isset($_POST['submit'])){
    $Full_name=$_POST['Full_name'];
    $Particulars=$_POST['Particulars'];
    $Interest=$_POST['Interest'];
    $Date=$_POST['Date'];
    $Debit=$_POST['Debit'];
    $Icredit=$_POST['Icredit'];
    $Fcredit=$_POST['Fcredit'];
    $Balance=$_POST['Balance'];

    $sql="insert into savingsloan (Full_Name,Particulars,Interest,Date,Debit,Initial_Credit,Final_Credit,Balance)
    values ('$Full_name','$Particulars','$Interest','$Date','$Debit','$Icredit','$Fcredit','$Balance',)";
    if($conn -> query($sql) === TRUE){
        echo "New Record Added with : -" .$conn-> insert_id;
    }else{
        echo "Not Added";
    }
    $conn->close();
}

?>