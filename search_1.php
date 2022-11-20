<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','inventory');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
$query = "SELECT * FROM registrition";
$result = mysqli_query($db, $query);
//Start session
session_start();

	//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Report Page</title>
</head>
<body>
    <div class="header_new">
        <div class="flex_cont">
            <div class="flex_grid">
            <button onClick="window.location.href='./Home.html'"class="Home">Home Page</button>
            <button onClick="window.location.href='./Admin.html'" class="Home">Register User</button>
            <button onClick="window.location.href='./Registration.html'"class="Home">Register Client</button>
            <button onClick="window.location.href='./Report_view.php'"class="Home">Prepare Report</button>
            <button onClick="window.location.href='./Cash_Transactions.php'"class="Home">Cash Trasaction</button>
            <button onClick="window.location.href='./Savings_Loan.php'" class="Home">Savings and Loans</button>
            <button onClick="window.location.href='./index.html'" class="Home">Log Out</button>
            
            </div>
        </div>
        <div class="form_Client" >
        
        <form class="form_reg1" action="search.php" method="post">
        <button class="Preg">Search Client</button><br><br>
        <input placeholder="User ID" name="Userid" class="File" type="text"><br><br>
        <input placeholder="Full Name" name="Fullname" class="File" type="text"><br><br>
       <button onClick="" class="Home1">Search</button>
    </form> 
	
    
</div>
 <div class="container">
                <table style="width:100%" class="table">
                    <head>
                        <tr>
              <th scope="col">SN</th>
              <th scope="col">DATE</th>
              <th scope="col">FIRST NAME</th>
			  <th scope="col">LAST NAME</th>
              <th scope="col">PARTICULARS</th>
              <th scope="col">DEBIT</th>
              <th scope="col">INITIAL CREDIT</th>
              <th scope="col">CASH</th>
              <th scope="col">CASH BALANCE</th>
              <th scope="col">BANK NAME</th>
              <th scope="col">AMOUNT</th>
              
                        </tr>
	
    </thread>
	<?php
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            
        <td><?php echo $row['SN'];?></td>
        <td><?php echo $row['Date'];?></td>
        <td><?php echo $row['Fname'];?></td>
        <td><?php echo $row['Lname'];?></td>    
        <td><?php echo $row['Particular'];?></td>
        <td><?php echo $row['Cbalance1'];?></td>
        <td><?php echo $row['Cash1'];?></td>
        <td><?php echo $row['Bank_name'];?></td>
        <td><?php echo $row['Amount1'];?></td>
        <td><?php echo $row['Debit'];?></td>
      
        <td><a class="btn btn-info" href="update2.php?S/N<?php echo $row['SN']; ?>">
    Edit</a>&nbsp;<a
    class="btn btn-danger" href="delete.php?S/N=<?php echo $row['S/N'];?>">Delete</a></td>
    </tr>
	   <?php }
}
?>
    <div></div>
</body>
</html>