<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','inventory');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if($db->connect_error){
die("connection failed".$db_connect_error);}
$query = "SELECT * FROM registrition";
$result = $db->query($sql);
?>
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
	
	 <?php
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        ?>
	$value =$_POST['SN']
	$value1=$_POST['Fname'];
    $value2=$_POST['Lname'];
    $value3=$_POST['Adress'];
    $value4=$_POST['Date'];
    $value5=$_POST['Pwork'];
    $value6=$_POST['Design'];
    $value7=$_POST['Location'];
    $value8=$_POST['Particular'];
	$value9=$_POST['Cbalance1'];
    $value10=$_POST['Cash1'];
    $value11=$_POST['Bank_name'];
	$value12=$_POST['Debit'];
    $value13=$_POST['Facility'];
    $value14=$_POST['Amount1'];
	
	
	mysqli_close($db);
	

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Update Client</title>
    </head>
    <body>
        <div class="flex_cont">
            <div class="flex_grid">
                <button onClick="window.location.href='./Home.html'"class="Home">Home Page</button>
                <button onClick="window.location.href='./Admin.html'" class="Home">Register User</button>
                <button onClick="window.location.href='./Registration.html'"class="Home">Register Client</button>
                 <button onClick="window.location.href='./Report_view.php'"class="Home">Prepare Report</button>
                <button onClick="window.location.href='./Search.html'"class="Home">Search Client</button>
                <button onClick="window.location.href='./SavingsLoan.html'" class="Home">Savings and Loans</button>
                <button onClick="window.location.href='./index.html'" class="Home">Log Out</button>
            </div>
        </div>
        <div class="profile">
            <div class="marg">
            <form class="form_reg"action="" method="post">
            <button class="Preg">Update Client Profie </button><br><br>
            <form class="form_reg1" action="Sarch_New.php" method="post">
        <button class="Preg">Search Client</button>
        <input placeholder="Enter User ID" name="Userid" class="File" type="text">
       <button onClick="update.html" class="Home1">Search</button><br><br>
	 
    </form> 
	
           <form action ="update.php" method="post">
		    <input placeholder="First Name" name="Firstname" value="<?php echo $row['SN'] ?>" class="File" type="text">
            <input placeholder="Last Name" name="Lasttname" value="<?php echo $value2; ?>" class="File" type="text">
            <input placeholder="Address"  name="Adress" value="<?php echo $value3; ?>" class="File" type="text"><br><br>
            <label>==>Old Trans Date</label><input value="<?php echo $value4; ?>" type="date"> <label>==>New Trans Date</label><input type="date" name="Date"><br><br>
            <input placeholder="Place Of Work" class="File" value='<?php echo $value5; ?>' name="PlaceofWork" type="text">
            <input placeholder="Designation" class="File" value="<?php echo $value6; ?>" name="Designation" type="text">
            <input placeholder="Location" class="File" value="<?php echo $value7; ?>" name="Location" type="text"><br><br>
            <input placeholder="Client Particular" value="<?php echo $value8; ?>" name="Particular" class="File" type="text">
            <input placeholder="Cash Balance Before" value="<?php echo $value9; ?>" name="Cashbefore" class="File" type="text">
            <input placeholder="Current Cash" class="File" value="<?php echo $value10; ?>" name="Currentcash" type="text"><br><br>
            <input placeholder="Bank Name" class="File" value="<?php echo $value11; ?>" name="Bankname" type="text">
   			<input placeholder="Balance Before" class="File" value="<?php echo $value12; ?>" name="Balance" type="text">
            <input placeholder="Amount" class="File" value="<?php echo $value13; ?>" name="Amount" type="text"><br><br>
            <button name="update" class="Home1">Update Record</button><button name="delete" class="Home1">Delete Record</button><button onClick="window.location.href='./Search.html'" class="Home1">Close</button>
        </form> </form>
        </div>
		<?
    </div>
</body>
</html>   
    }