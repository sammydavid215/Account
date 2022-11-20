<?php
require_once("connection_link.php");
$query = " select * from individualledgger";
$result = mysqli_query($con,$query);
$items='';
// $val1 = 0;
 $val3 = '';
// $val = 0;
if(isset($_GET['message'])){
    echo "<script type='text/javascript'>
    alert( 'New Record Inserted!');
    </script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

<title>Monthly Cash Transtion</title>
</head>
    <div class="header_new1">
    <div class="flex_cont">
        <div class="flex_grid">
        <button onClick="window.location.href='./Home.html'"class="Home">Home Page</button>
            <button onClick="window.location.href='./Admin.html'" class="Home">Register User</button>
            <button onClick="window.location.href='./Registration.html'"class="Home">Register Client</button>
            <button onClick="window.location.href='./General_Ledger.php'"class="Home">General Ledger</button>
            <button onClick="window.location.href='./Cash_Transactions.php'"class="Home">Cash Transaction</button>
            <button onClick="window.location.href='./Savings_Loan.php'" class="Home">Individual Ledger</button>
            <button onClick="window.location.href='./index.html'" class="Home">Log Out</button>
        </div>
    </div>
    </div>
	 
<body>
<div class="form_Client2" >
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>NOTICE: Please Avoid Puting Comma to numbers and All field Must Be Entered!</b></p>
        <div>
        <button class="Preg1">INDIVIDUAL LEDGER</button><br><br>
        <!-- <form action="" method="GET">
        <div class="">
        <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"  placeholder="Enter Computer Number" required/>
        <button name="submit" id="submit" class="Home2">Search Record</button>
    </div>
</form> -->
    <?php
    $con = mysqli_connect("localhost", "root", "", "Inventory");
    if(isset($_GET['search'])){
        $filtervalues = $_GET['search'];
       $qry="SELECT * FROM individualledgger WHERE comp_number='$filtervalues'";
        $result = mysqli_query($con,$qry); 
        if(mysqli_num_rows($result) > 0){

            foreach($result as $items){
            }}}
               ?>
               
    </div>
    <script>
            function Add() {
                //  var num = parseInt(document.getElementById("Num1").value);
                //  var num1 = parseInt(document.getElementById("Num").value);
                //  var Sum = parseInt(document.getElementById("Sum").value);
                //  document.getElementById("Sum").value = num1 + num;
                // // var a = document.getElementById("Num").value;
                // var b = document.getElementById("Num1").value;
                // var c = parseInt(a) + parseInt(b);

        }
    </script>
    <div class="search_cash"> 
               <form action="Addledger.php" method="post">
               <label for="Fullname">Full Name</label>
                <input type="text" name="Fullname" placeholder="Full Name" required/>
                <label for="LF">L/F</label>
                <input type="text"  name="LF" placeholder="L/F" required/>
                <label for="Comp_number">Computer Number</label>
                <input type="text" name="comp_number" placeholder="Computer Number" required/><br><br>
                <label for="Particulars">Particulars</label>
                <input type="text" name="parti" placeholder="Particulars" required/>
                <label for="Particulars">Debit</label>
                <input type="text" onblur="Add();" id="Num" name="debit" value="" id ="debit" placeholder="Debit" required/>
                <label for="Particulars">Credit</label>
                <input type="text" onblur="Add();" id="Num1" value="" name="credit" id="credit" placeholder="Credit" required/>
                <label for="Particulars">Balance</label>
                <input type="text"id="" name="balance" value="" placeholder="Balance" required/>===> SAVINGS<br><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="Particulars">Debit</label>
                <input type="text" value="" name="debitN" placeholder="Debit" required/>
                <label for="Particulars">Credit</label>
                <input type="text" name="creditN" placeholder="Credit" required/>
                <label for="Particulars">Balance</label>
                <input type="text" value="" name="balanceN" placeholder="Balance" required/>
                <label for="Particulars">Interest</label>
                <input type="text" name="interest" placeholder="Interest" required/>===> LOANS<br><br>
                <label for="Month">Choose Month</label> <select class="Pnum" name="Pselect">
          <option value="">Select Month</option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="Aprial">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
      </select><label for="date">Date  </label><input type="date" name="new_date">
      <label for="Year">Enter Year</label>
                <input type="text" name="Year" placeholder="Year" required/>
                <button name="submit" id="submit" class="Home2">Add Record</button>__<button onClick="window.location.href='./New_ledger_trans.php'" name="submit" id="new_trans" class="Home2">Export Ledger</button>
               </form>
               <!-- <button onClick = "function Add()"> Add</button> -->
           </div> 
        
    </div>

<div class="table" id="table">
<table id="table" style="width:100%" class="table" border="1">
<thead>
<tr>
    <th colspan="9">IKA MPCU-MICRO FINANCE SCHEME</th>
    
    </tr>
    <tr><th colspan="9">INDIVIDUAL LEDGER</th></tr>
<tr>
  
  <th colspan="5">SAVINGS:</th>
  <th colspan="4">LOANS:</th>
  
</tr>
<b><tr>
<td>DATE</td>
<td>PARTICULARS</td>
<td>DEBIT(=N=)</td>
<td>CREDIT(=N=)</td>
<td>BALANCE(=N=)</td>
<td>DEBIT(=N=)</td>
<td>CREDIT(=N=)</td>
<td>BALANCE(=N=)</td>
<td>INTEREST(=N=)</td>
</tr></b>
<thead>
    
<?php
// $total_qty = 0;
// $total_qty1 = 0;
// $total_qty2 = 0;
// $total_qty3 = 0;
// $total_qty4 = 0;
// $total_qty5 = 0;
$total_qty6 = 0;

while($row = mysqli_fetch_assoc($result))
{
	// $Fullname = $items['Fullname'];
    // $LF = $items['LF'];
    // $comp_number = $items['comp_number'];
	// $Fname = $row['Fname'];
    //  $Lname = $row['Lname'];
    //  $Adress = $row['Adress'];
      $SN = $row['SN'];
 	// $Phone = $row['Phone'];
    // $Pwork = $row['Pwork'];
    //  $Design = $row['Design'];
    // $Location = $row['Location'];
     $Interest = $row['interest'];
    //  $Particular = $row['Particular'];
 	// $Credit = $row['Credit'];
 	// $Cbalance1 = $row['Cbalance1'];
    //  $Cash1 = $row['Cash1'];
    //  $Bank_name = $row['Bank_name'];
 	// $Debit = $row['Debit'];
    //  $Facility = $row['Facility'];
    //  $Amount1 = $row['Amount1'];
    //  $month = $ro['month'];
?>
<tr> 
        
		<td><?php echo $row['Date']?></td> 
        <td><?php echo $row['parti']?></td>
        <td><?php echo number_format($row['debit'], 3);?></td>
        <td><?php echo number_format($row['credit'], 3);?></td>
        <td><?php echo number_format($row['cash'], 3);?></td>
        <td><?php echo number_format($row['debit1'], 3);?></td>
        <td><?php echo number_format($row['credit1'], 3);?></td>
        <td><?php echo number_format($row['cash1'], 3);?></td>
        <td><?php echo number_format($row['interest'], 3);?></td>
        <td><a href ="delete_n.php?Del=<?php echo $SN ?>">Delete</a></td>
        
	</tr>

<?php

//$total_qty += $row['debit'];
//$total_qty1 += $row['credit'];
//$total_qty2 += $row['cash'];
//$total_qty3 += $row['debit1'];
//$total_qty4 += $row['credit1'];
//$total_qty5 += $row['cash1'];
$total_qty6 += $Interest;
}

?>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><?php echo number_format($total_qty6, 3); ?></td>
	
	</tr>

<?php
    
?>
</table>
<button onclick="exportToExcel('table')"  class="Home2">Export Transaction</button>
</div>
</body>
<script type="text/javascript">
    function exportToExcel(table, filename=''){
    var downloadurl;
    var dataFileType ='application/vnd.ms-excel';
    var tableSelect = document.getElementById(table);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g,'%20');

    filename = filename?filename+'.xls':'Export_Individual_Ledger.xls';

    downloadurl = document.createElement("a");
    document.body.appendChild(downloadurl);

    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff',tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob(blob,filename);
    }else{
            downloadurl.href = 'data:' + dataFileType + ','+ tableHTMLData;
            downloadurl.download = filename;
            //downloan.real;
            downloadurl.click();
        }
    }

</script>
<script>
    $(document).ready(function(){
        $('#table').dataTable();
    });
</script>
</html>
