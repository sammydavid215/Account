<?php
require_once("connection_link.php");
$query = " select * from cashtrans";
$result = mysqli_query($con,$query);

if(isset($_SESSION['search'])){
    $_SESSION['msg'] = "You Must Log in";
    header("location:index.html");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<?php
    if(isset($_GET['message'])){
        echo "<script type='text/javascript'>
                    alert( 'New Record Added!');
                    </script>";
        
    }
    // if(isset($_GET['msg'])){
    //     echo "<script type='text/javascript'>
    //                 alert( 'Record Deleted!');
    //                 </script>";
        
    // }
?>
<script type="text/javascript">
    function updateTextView(obj) {
    var n = getNumber(obj,val());
    if(n==0){
        obj.val('');
    }else{
        obj.val(n.toLocaleString());

    }
    
}
function getNumber(str) {
    var arr = str.split('');
    var out = new Arrray();
    for(var cnt=0;cnt<arr.length;cnt++){
        if(isNaN(arr[cnt])==false){
            out.push(arr[cnt]);

        }
    }
    return Number(out.join(''));
}
$(document).ready(function () {
    $('input[type=text]').on('keyup',function () {
        updateTextView($(this));
        
    });
    
});
    </script>
<div>
      <div class=""> 
      
      <div class="div_gen">
      <form  action="Addtrans.php" method="post">
      <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>NOTICE: Please Avoid Puting Comma to numbers and All field Must Be Entered!</b></p>
      <button class="Preg1">CASH TRANSACTIONS</button><input type="text" name="lfid" placeholder="Title Number"/><br><br>
               
                <label for="Particulars">Particulars</label>
                <input type="text" name="parti" placeholder="Particulars" required/>
                <label for="lf">L/F</label>
                <input type="text" name="lf" placeholder="L/F" required/>
                <label for="cash">Cash</label>
                <input type="text" name="cash" placeholder="Cash" required/>
                <label for="bank">Bank</label>
                <input type="text" name="bankname" placeholder="Bank"/>
                <label for="date">Date  </label>
                <input type="date" name="date">===>DEBIT<br><br>
                <label for="Particulars">Particulars</label>
                <input type="text" name="parti1" placeholder="Particulars" required/>
                <label for="lf">L/F</label>
                <input type="text" name="lf1" placeholder="L/F" required/>
                <label for="cash">Cash</label>
                <input type="text" name="cash1" placeholder="Cash" />
                <label for="bank">Bank</label>
                <input type="text" name="bankname1" placeholder="Bank" />
                <label for="date">Date </label>
                <input type="date" name="new_date">===>CREDIT<br><br>
                <label for="Month">Choose Month </label>
                <select class="Pnum" name="Pselect">
          <option value="Select">Select Month </option>
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
          <input type="text" name="year" placeholder="Enter Year" />
          <!-- <select class="Pnum" name="year">
          <option value="Select">Select Year </option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
      </select>-->
    <div class="exp_div"><button name="submit" id="submit" class="Home2">Add Record</button> 
      <button name="submit" id="submit" onClick="window.location.href='./Cash_report.php'" class="Home2">Print Trans</button></div>
               </form>
               </div>
           </div> 
    </div>
<body>
<div>
<?php

?>
</div>
<div class="table" id="table">
<table id="tableexport" style="width:100%" class="table" border="1">
<thead>
    <tr>
    <th colspan="11">IKA MPCU-MICRO FINANCE SCHEME</th>
    </tr>
    <tr><th colspan="11">CASH TRANSACTION</th></tr>
<tr>
    <th colspan="6">DEBIT</th>
    <th colspan="5">CREDIT</th>
   
<tr>
<b><td>DATE</td>
<td>MONTH</td>
<td>PARTICULARS</td>
<td>L/F</td>
<td>CASH(=N=)</td>
<td>BANK(=N=)</td>
<td>DATE</td>
<td>PARTICULARS</td>
<td>L/F</td>
<td>CASH(=N=)</td>
<td>BANK(=N=)</td>
<!-- <td>EDIT</td> -->
<td>DELETE</td></b>
</tr>        
</thead>

<?php
// $Cash1 = "";
// number_format(10000, 2);
// // $total_qty = 0;
// $total_qty1 = 0;


while($row = mysqli_fetch_assoc($result))
{
	
	// $Fname = $row['Fname'];
    // $Lname = $row['Lname'];
    // $Adress = $row['Adress'];
     $SN = $row['SN'];
	// $Phone = $row['Phone'];
    // $Pwork = $row['Pwork'];
    // $Design = $row['Design'];
    // $Location = $row['Location'];
    // $Particular = $row['Particular'];
	// $Cbalance1 = $row['Cbalance1'];
     //$Cash1 = $row['amount'];
    // $Bank_name = $row['Bank_name'];
	// $Debit = $row['Debit'];
    // $Facility = $row['Facility'];
    // $Amount1 = $row['Amount1'];
    
?>

<tr> 
        
		<td><?php echo $row['date']?></td> 
        <td><?php echo $row['month']?></td> 
        <td><?php echo $row['parti'];?></td>
		
        <td><?php echo $row['lf'];?></td>
        <td><?php echo number_format($row['cash'],3);?></td>
        <td><?php echo number_format($row['amount'],3);?></td>
        <td><?php echo $row['date1']?></td> 
       
        <td><?php echo $row['parti1'];?></td>
        <td><?php echo $row['lf1'];?></td>
        <td><?php echo number_format($row['cash1'],3);?></td>
		<td><?php echo number_format($row['amount1'],3);?></td>
        <!-- <td><a href ="Edit_new.php?UPD=<?php echo $SN?>">Edit</a></td> -->
        <td><a href ="delete_csh.php?Del=<?php echo $SN ?>">Delete</a></td>
       
	</tr>

<?php
// $total_qty += $row['cash'];
// $total_qty1 += $row['cash1'];

}

?>
<!-- <tr>
<td></td>
<td>TOTAL(=N=)</td>
<td></td>
<td><?php echo $total_qty; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><?php echo $total_qty1; ?></td>
<td></td>
	</tr> -->
</table>
<button onclick="exportToExcel('tableexport')" class="Home2" >Export record</button>
</div>
<script type="text/javascript">
    function exportToExcel(tableexport, filename=''){
    var downloadurl;
    var dataFileType ='application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableexport);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g,'%20');

    filename = filename?filename+'.xls':'Export_Cash_transactions.xls';

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
        $('#tableexport').dataTable();
    });
</script>
</body>
<script src="/js/script.js"></script>
</html>
