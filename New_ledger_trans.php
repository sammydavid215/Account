<?php
require_once("connection_link.php");
//$query = " select * from individualledgger";
//$result = mysqli_query($con,$query);
$val="";
$val1=$val;
$items=0;
$cname = "";
$ccontact = "";
$cemail = "";
$cash= "0";
$cash1="0";
$debit = "";
$credit = "";
$input = "0";

if(isset($_GET['message'])){
    echo "<script type='text/javascript'>
    alert( 'One New Record Added');
    </script>";
    
}

?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script  src="">
$('input').val('.00');

$('input').on('click', function(){
  var val = $(this).val();
  
  if(val.replace('.00', '').length === 0) {
    $(this)[0].setSelectionRange(0, 0);
  }
});

$('input').on('keyup', function(e){
  var val = $(this).val();
  
  val = val.replace('.00', '').toString().replace(/\D/g,'').replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")+'.00';
  
  $(this).val(val);
  
  var strLength = val.length - 3;
   
  
  $(this).focus();
  $(this)[0].setSelectionRange(strLength, strLength);
  
  
});


$('.tongue').on('click', function(){
  $('.informations').toggleClass('active');
});
</script>

<title>Monthly Cash Transtion</title>
</head>
    <div class="header_new1">
    <div class="flex_cont">
        <div class="flex_grid">
            <button onClick="window.location.href='./Savings_Loan.php'"class="Home">Previous</button>
        </div>
    </div>
    </div>	 
<body>
<div class="form_Client2" >
        <div>
        <form method="GET" action="" class="Serch_client">  
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>NOTICE: Please Avoid Puting Comma to numbers and All field Must Be Entered!</b></p>
        <button class="Preg1">PERSONAL LEDGER</button><br><br>
        
		<div class="search_ledger">
        <label for="">Computer Number</label>
        <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"  placeholder="Enter Computer Number" required/>
        <!-- //<label for="date">Date </label><input type="date" name="new_date"> -->
        <label for="">LF</label>
        <input type="text" name="Year" value="<?php if(isset($_GET['Year'])){echo $_GET['Year'];}?>" placeholder="Enter LF" required/>
        <!-- <input type="text" name="Month" value="<?php if(isset($_GET['Month'])){echo $_GET['Month'];}?>" placeholder="Enter Month" required/> -->
        <!-- <select class="Pnum" name="Month" value="<?php if(isset($_GET['Month'])){echo $_GET['Month'];}?>">
          <option value="">Select Month </option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="Aprial">Aprial</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
      </select> -->
      <script>
            function Add() {
                 var num = parseFloat(document.getElementById("Num1").value);
                 var num1 = parseFloat(document.getElementById("Num").value);
                 //var Sum = parseInt(document.getElementById("Sum").value);
                 document.getElementById("Sum").value = num1 + num;
                 var num2 = parseFloat(document.getElementById("Num2").value);
                 var num3 = parseFloat(document.getElementById("Num3").value);
                 document.getElementById("Sub").value = num2 - num3;
                //  var a = document.getElementById("a").value;
                //  a.toLocaleString();
                // var b = document.getElementById("Num1").value;
                // var c = parseInt(a) + parseInt(b);
               //document.getElementById('Sum').value = "";
        }
   
        </script>
      <?php
       $con = mysqli_connect("localhost", "root", "", "Inventory");
   
       if(isset($_GET['search'])){
           $filtervalues = $_GET['search'];
           $filtervalues1 = $_GET['Year'];
           //$filtervalues2 = $_GET['Month'];
           //$input = $_GET['debit'];
          
          // $qry="SELECT * FROM individualledgger WHERE CONCAT(comp_number) LIKE '%$filtervalues%' ";
          $qry="SELECT * FROM individualledgger WHERE comp_number='$filtervalues' AND LF ='$filtervalues1'";
           $result = mysqli_query($con,$qry); 
           while($row=mysqli_fetch_assoc($result))
           {
           //echo '<image style="height:82px; width:82px;" src="data:image;base64,'. $row['clogo'].' "> ';
           $SN = $row['SN'];
           $cname = $row['Fullname'];
            $cemail = $row['LF'];
             $ccontact = $row['comp_number'];
            $credit = $row['credit'];
            $cash = $row['cash'];
            $debit = $row['debit1'];
            $cash1 = $row['cash1'];
            //   $clocation = $row['clocation'];
            
           }}
           
           ?>
      <!-- //?> -->
        <button name="submit" id="submit" class="Home2">Search Record</button>
    </div>
</form>
</div>
    <div class="search_cash"> 
               <form action="AddnewPerson.php" method="post">
                   
               <label for="Fullname">Full Name</label><input type="hidden"  id="Num" onblur="Add();" value="<?php echo $cash?>"/><input type="hidden"  id="Num2" onblur="Add();" value="<?php echo $cash1?>"/>
                <input type="text" value="<?php echo $cname?>" name="Fullname" placeholder="Full Name" required/>
                <label for="LF">L/F</label>
                <input type="text" value="<?php echo $cemail?>" name="LF" placeholder="L/F" required/>
                <label for="Comp_number">Computer Number</label>
                <input type="text" value="<?php echo $ccontact?>" name="comp_number" placeholder="Computer Number" required/><br><br>
                <label for="Particulars">Particulars</label>
                <input type="text" name="parti" placeholder="Particulars" required/>
                <label for="Particulars">Debit</label>
                <input type="text" name="debit" value="<?php echo number_format("0",3);?>" id="debit" placeholder="Debit" required/>
                <label for="Particulars">Credit</label>
                <input type="text" name="credit" onblur="Add();" id="Num1" placeholder="Credit" required/>
                <label for="Particulars">Balance</label>
                <input type="text" step="0.01" name="balance" id="Sum" value="<?php echo number_format($cash,3);?>" placeholder="Balance" required/>==><a>SAVINGS</a><br><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="Particulars">Debit</label>
                <input type="text" name="debitN" placeholder="Debit" required/>
                <label for="Particulars">Credit</label>
                <input type="text" name="creditN" onblur="Add();" id="Num3" placeholder="Credit" required/>
                <label for="Particulars">Balance</label>
                <input type="text" name="balanceN" id="Sub" value="<?php echo number_format($cash1,3);?>" placeholder="Balance" required/>
                <label for="Particulars">Interest</label>
                <input type="text" name="interest" placeholder="Interest" required/>==><a>LOANS</a><br><br>
                <label for="Month">Choose Month</label> <select class="Pnum" name="Pselect">
          <option value="">Select Month</option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="Aprial">Aprial</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
      </select>
      <input type="text" name="year" placeholder="Enter Year" required/>
      <label for="date">Date  </label><input type="date" name="new_date">
                <button name="submit" id="submit" class="Home2">Add Record</button>
               </form>
           </div> 
    </div>
<div class="table" id="table">
<table id="table" style="width:100%" class="table" border="1">
<thead>
<tr>
    <th colspan="11">IKA MPCU-MICRO FINANCE SCHEME</th>
    
    </tr>
    <tr><th colspan="11">INDIVIDUAL LEDGER</th></tr>
<!-- <tr>
   <td rowspan="2"></td>
  <th colspan="1">NAME:</th>
  <th colspan="2"><input type="text" placeholder="<?=$val1?>" name="name" class="File" value ="<?=$val?>"></th>
  <th colspan="2">L/F:</th>
  
  <th colspan="2">COMP-NUMBER:</th>
  <th colspan="1"></th>
</tr>-->
<tr>
<th colspan="2">FULL NAME: <?php echo $cname?></th>
  <th colspan="4">COMPUTER NUMBER: <?php echo $ccontact?></th>
  <th colspan="4">LF: <?php echo $cemail?></th>
  
</tr>
<tr>
<th colspan="2"></th>
  <th colspan="4">SAVINGS:</th>
  <th colspan="4">LOANS:</th>
  
</tr>

<tr>
<th>DATE</th>
<!-- <th>FULL NAME</th> -->
<th>LF</td>
<th>PARTICULARS</th>
<th>DEBIT(=N=)</th>
<th>CREDIT(=N=)</th>
<th>BALANCE(=N=)</th>
<th>DEBIT(=N=)</th>
<th>CREDIT(=N=)</th>
<th>BALANCE(=N=)</th>
<th>INTEREST(=N=)</th>
</tr>
<thead>
<tbody border="1" >
    <?php
    $con = mysqli_connect("localhost", "root", "", "Inventory");
    if(isset($_GET['search'])){
        $filtervalues = $_GET['search'];
        $filtervalues1 = $_GET['Year'];
        //$filtervalues2 = $_GET['Month'];
        
       // $qry="SELECT * FROM individualledgger WHERE CONCAT(comp_number) LIKE '%$filtervalues%' ";
       $qry="SELECT * FROM individualledgger WHERE comp_number='$filtervalues' AND LF ='$filtervalues1'";
        $result = mysqli_query($con,$qry); 
        if(mysqli_num_rows($result) > 0){
           foreach($result as $items){
               ?>
               <tr>
                   <td><?= $items['Date'];?></td>
                   <!-- <td><?= $items['Fullname'];?></td> -->
                   <td><?= $items['LF'];?></td>
                   <!-- <td><?php echo $row['Date']?></td>  -->
        <td><?php echo $items['parti']?></td>
        <td><?php echo number_format($items['debit'], 3);?></td>
        <td><?php echo number_format($items['credit'], 3);?></td>
        <td><?php echo number_format($items['cash'], 3);?></td>
        <td><?php echo number_format($items['debit1'], 3);?></td>
        <td><?php echo number_format($items['credit1'], 3);?></td>
        <td><?php echo number_format($items['cash1'], 3);?></td>
        <td><?php echo number_format($items['interest'], 3);?></td>
                   <!-- <td><?= $items['interest'];?></td> -->
               </tr>
               <?php
    
           }  
            
           
        }
        else{
            ?>
            <tr>
                   <td>
                       No Record Found!
                   </td>
               </tr>
               <?php
        }
    }
    ?>
</tbody>

<?php
 

$item=0;

//while($row = mysqli_fetch_assoc($result))
{
	
	 //$SN = $row['SN'];
    //  $Lname = $row['Lname'];
    //  $Adress = $row['Adress'];
     // $Date = $row['Date'];
 	// $Phone = $row['Phone'];
    // $Pwork = $row['Pwork'];
    //  $Design = $row['Design'];
    // $Location = $row['Location'];
    // $Interest = $row['Interest'];
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
<!-- <input type="text" name="Fullname" value="<?php echo $items['Fullname']?>">
<input type="text" value="<?php echo $items['LF']?>">
<input type="text" value="<?php echo $items['comp_number']?>"> -->
<?php

?>
<!-- <tr>   
		 <td><?php echo $row['Date']?></td> 
        <td><?php echo $row['parti']?></td>
        <td><?php echo $row['debit']?></td>
        <td><?php echo $row['credit']?></td>
        <td><?php echo $row['cash'];?></td>
        <td><?php echo $row['debit1']?></td>
        <td><?php echo $row['credit1']?></td>
        <td><?php echo $row['cash1'];?></td>
        <td><?php echo $row['interest'];?></td>
        <td><a href ="delete.php?Del=<?php echo $Date ?>">Delete</a></td>
         
	</tr> -->
    
<?php
$item =+ $items['interest'];
}
?>
<!-- <tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><?php echo $item; ?></td>
	
	</tr> -->
    
<?php

?>
</table>

</div>
</body>
<table><td><a href ="delete.php?Del=<?php echo $SN ?>">Delete</a></td></table>
<button onclick="exportToExcel('table')"  class="Home2">Export Transaction</button>

<script type="text/javascript">
    function exportToExcel(table, filename=''){
    var downloadurl;
    var dataFileType ='application/vnd.ms-excel';
    var tableSelect = document.getElementById(table);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g,'%20');

    filename = filename?filename+'.xls':'Export_Personnal_Ledger.xls';

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

<!-- <script src="/js/script.js">
$('input[type=number]').each(function(){
        $this.change(function(){
            var $replace = $(this).val().toString().replace(/,/g, '.');
            $(this).val($replace);


        })
    });
    </script> -->
</html>
