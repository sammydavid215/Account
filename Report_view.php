<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','inventory');
$db=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
$query = "SELECT * FROM genledger";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Report Page</title>
</head>
    <div class="header_new">
        <div class="flex_cont">
            <div class="flex_grid">
            <button onClick="window.location.href='./Home.html'"class="Home">Home Page</button>
            <button onClick="window.location.href='./Admin.html'" class="Home">Register User</button>
            <button onClick="window.location.href='./Registration.html'"class="Home">Register Client</button>
            <button onClick="window.location.href='./Report_view.php'"class="Home">General Ledger</button>
            <button onClick="window.location.href='./Cash_Transactions.php'"class="Home">Cash Transaction</button>
            <button onClick="window.location.href='./Savings_Loan.php'" class="Home">Individual Ledger</button>
            <button onClick="window.location.href='./index.html'" class="Home">Log Out</button>
            </div>
        </div>
        
        <div class="gen_n">
        <div class="Gen_cash"> 
        <button left="40cm" class="Preg1">GENERAL LEDGER</button>
          <div class="div_gen">
               <form action="Addnewledger.php" method="post">
                <label for="Particulars">Particulars</label>
                <input type="text" name="parti" placeholder="Particulars" required/>
                <label for="Particulars">L/F</label>
                <input type="text" name="lf" placeholder="Ledger Facility"/>
                <label for="Particulars">Amount</label>
                <input type="text" name="cash" placeholder="Amount"/>
                <label for="Particulars">Date</label>
                <input type="date" name="old_date" placeholder="Old Date">==> LOAN GRANTED<br><br>
                <label for="Particulars">Particulars</label>
                <input type="text" name="parti1" placeholder="Particulars"/>
                <label for="Particulars">L/F</label>
                <input type="text" name="lf1" placeholder="Ledger Facility"/>
                <label for="Particulars">Amount</label>
                <input type="text" name="cash1" placeholder="Amount"/>
                <label for="date">Date</label><input type="date" name="new_date">==> LOAN REFUND<br><br>
                <label for="Month">Choose Month </label><select class="Pnum" name="Pselect">
          <option value="">Select Month </option>
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
      </select>
      <label for="trans">LF Transaction Name</label>
                <input type="text" name="LF_name" placeholder="LF Transaction Name"/>
      <div class="buttonN">
      <button  name="submit" id="submit" class="Home2">Add Record</button> <button  name="" onClick="window.location.href='./Print_lf.php'" id="REPORT" class="Home2">Select LF</button>
      </div>
               </form>
               
</div>
           </div> 
           
    
    </div>
    <div class="table" id="table">
    <body>
      <table id="table" style="width:90%" class="table" border="1">
          <thead>
            <tr>
    <th colspan="8">IKA MPCU-MICRO FINANCE SCHEME</th>
    </tr>
    <tr><th colspan="8">GENERAL LEDGER</th></tr>
    
            <tr>
              <th scope="col">DATE</th>
              <th scope="col">PARTICULARS</th>
              <th scope="col">L/F</th>
              <th scope="col">AMOUNT(=N=)</th>
              <th scope="col">DATE</th>
              <th scope="col">PARTICULARS</th>
              <th scope="col">L/F</th>
              <th scope="col">AMOUNT(=N=)</th>
              <th scope="col">DELETE</th>
            </tr>
           
          </thead>
	<?php

// $total_qty = 0;
// $total_qty1 = 0;

    while($row = mysqli_fetch_array($result))
	{
    $SN = $row['SN'];
        ?>
        <tr> 
        
        <td><?php echo $row['date'];?></td>  
        <td><?php echo $row['parti'];?></td>
        <td><?php echo $row['lf'];?></td>
        <td><?php echo $row['cash'];?></td>
        <td><?php echo $row['date1'];?></td>
        <td><?php echo $row['parti1'];?></td>
        <td><?php echo $row['lf1'];?></td>
        <td><?php echo $row['cash1'];?></td>
        <td><a href ="delete_report.php?Del=<?php echo $SN ?>">Delete</a></td>
        
	</tr>
	<?php

// $total_qty += $row['cash'];
// $total_qty1 += $row['cash1'];
	}

	?>
  <!-- <tr>
<td></td>
<td>TOTAL</td>
<td></td>
<td><?php echo $total_qty; ?></td>

<td></td>
<td></td>
<td></td>
<td><?php echo $total_qty1; ?></td>

	</tr> -->
	 </table>
    
	</div>
	<div>
	<button onclick="exportToExcel('table')" name="creat_excel" id="create_excel" class="Home2">Create Excel File</button>
	</div>
<!-- </body>
</html> -->
<script type="text/javascript">
    function exportToExcel(table, filename=''){
    var downloadurl;
    var dataFileType ='application/vnd.ms-excel';
    var tableSelect = document.getElementById(table);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g,'%20');

    filename = filename?filename+'.xls':'Export_General_Ledger.xls';

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
      
</body>
<script src="/js/script.js"></script>
</html>
