<?php
include "config.php";

if(isset($_POST['update'])){
    $txtUser = $_POST['txtUser'];
$txtname = $_POST['txtname'];
$txtUserN = $_POST['txtUserN'];
$txtPword = $_POST['txtPword'];
$txtCpword = $_POST['txtCpword'];
$txtEmail = $_POST['txtEmail'];
$Day = $_POST['Day']; 
$sql = "UPDATE 'user_admin' 
SET 'txtname'='$txtname',
'txtUserN'='$txtUserN',
'txtUser'='$txtUser',
'txtPword'='$txtPword',
'txtCpword'='$txtCpword',
'txtEmail'='$txtEmail',
'Day'='$Day',
'txtname'='$txtname',
'txtname'='$txtname', ";

$result = $conn->query($sql);

if($result == TRUE){
    echo "Record Updated Successfully";
} else {
    echo "Error:". $sql . "<br>" . $conn->error;
}
}

if(isset($_GET['S/N'])){
    $user_id = $_GET['S/N'];
    $sql = "SELECT *FROM 'user_admin' WHERE 'S/N' = '$user_id'";

    $esult = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $txtUser = $row['UserID'];
            $txtname = $row['Full_Name'];
            $txtUserN = $row['UserName'];
            $txtPword = $row['Password'];
            $txtCpword = $row['C_Password'];
            $txtEmail = $row['Email'];
            $Day = $row['Control']; 
        }
        
    }
}
?>
<form name="frmAdmin" class="form_reg1" method="POST" action="connect_db.php">
        <button class="Preg">Administrator Portal</button><br><br>
        <input <?php echo $txtUser?> placeholder="User ID" class="File" name="txtUser" id="txtUser" type="text" required ><br><br>
        <input <?php echo $txtname?> placeholder="Full Name" class="File" name="txtname" id="txtname" type="text" required><br><br>
        <input <?php echo $txtUserN?> placeholder="User Name" class="File"name="txtUserN" id="txtUserN" type="text" required><br><br>
        <input <?php echo $txtPword?> placeholder="Password" class="File" name="txtPword" id="txtPword" type="text" required><br><br>
        <input <?php echo $txtCword?> placeholder="Comfirm Password" name="txtCpword" id="txtCpword" class="File" type="text" required><br><br>
        <input <?php echo $txtEmail?> placeholder="Email Address" name="txtEmail" id="txtEmail" class="File" type="text" required><br><br>
        <label for="day">  ==>Control Level</label> <select class="day1" name="Day" id="Day" required>
            <option value="">Admin</option>
            <option value="">Cashier</option>
            <option value="">User</option>
            
        </select>
       
        <button name="submit" id="submit" value="submit" class="Home1">Save</button>
    </form>   