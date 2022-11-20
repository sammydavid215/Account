<?php
require_once("connection_link.php");
//$query = " select * from individualledgger";
//$result = mysqli_query($con,$query);
$cemail = "";
$ccontact = "";
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
            <button onClick="window.location.href='./General_Ledger.php'"class="Home">Previous</button>
        </div>
    </div>
    </div>
	 
<body>
<div class="form_Client2" >
        <div>
        <form method="GET" action="" class="Serch_client">  
        <button class="Preg1">GENERAL LEDGER</button><br><br>
		<div class="serch_LF">
        
        <!-- <label for="Month">Choose Month </label><select class="Pnum" value="<?php if(isset($_GET['Month'])){echo $_GET['Month'];}?>"  name="Month">
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
      </select> -->
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"  placeholder="Enter LF" required/>
        <!-- //<label for="date">Date </label><input type="date" name="new_date"> -->
        <!-- <input type="text" name="Year" value="<?php if(isset($_GET['Year'])){echo $_GET['Year'];}?>" placeholder="Enter Year" required/>
        <input type="text" name="Month" value="<?php if(isset($_GET['Month'])){echo $_GET['Month'];}?>" placeholder="Enter Month" required/> -->
        <?php
       $con = mysqli_connect("localhost", "root", "", "Inventory");
   
       if(isset($_GET['search'])){
           $filtervalues = $_GET['search'];
           //$filtervalues1 = $_GET['Year'];
           //$filtervalues2 = $_GET['Month'];
           
          // $qry="SELECT * FROM individualledgger WHERE CONCAT(comp_number) LIKE '%$filtervalues%' ";
          $qry="SELECT * FROM genledger WHERE Lfid ='$filtervalues'";
           $result = mysqli_query($con,$qry); 
           while($row=mysqli_fetch_assoc($result))
           {
           //echo '<image style="height:82px; width:82px;" src="data:image;base64,'. $row['clogo'].' "> ';
          // $cname = $row['Fullname'];
            $cemail = $row['Lfid'];
            $ccontact = $row['LF_name'];
            //   $clocation = $row['clocation'];
           }}
           ?>
        <button name="submit" id="submit" class="Home2">Search Record</button>
    </div>
</form>
</div>
           </div> 
    </div>
    <table id="table" style="width:90%" class="table" border="1">
          <thead>
            <tr>
    <th colspan="9">IKA MPCU-MICRO FINANCE SCHEME</th>
    </tr>
    <tr><th colspan="9">GENERAL LEDGER:<?php echo $cemail?></th></tr>
    <tr><th colspan="9"><?php echo $ccontact?></th></tr>
    <!-- <tr>
            <th colspan="8"><input type="text" value="" class="File"></th> 
            </tr> -->
            <tr>
              <th scope="col">DATE</th>
              <th scope="col">PARTICULARS</th>
              <!-- <th scope="col">TRANSACTION NAME</th> -->
              <th scope="col">L/F</th>
              <th scope="col">AMOUNT(=N=)</th>
              <th scope="col">DATE</th>
              <th scope="col">PARTICULARS</th>
              <th scope="col">L/F</th>
              <th scope="col">AMOUNT(=N=)</th>
            </tr>
          </thead>
          <tbody>
    <?php
    $con = mysqli_connect("localhost", "root", "", "Inventory");

    if(isset($_GET['search'])){
        $filtervalues = $_GET['search'];
        //$filtervalues1 = $_GET['Year'];
       // $filtervalues2 = $_GET['Month'];
       // $qry="SELECT * FROM individualledgger WHERE CONCAT(comp_number) LIKE '%$filtervalues%' ";
       $qry="SELECT * FROM genledger WHERE Lfid ='$filtervalues'";
        $result = mysqli_query($con,$qry);

        if(mysqli_num_rows($result) > 0){
           foreach($result as $items){
               ?>
               <tr><td><?= $items['date'];?></td>
                   <td><?= $items['parti'];?></td>
                   <!-- <td><?= $items['LF_name'];?></td> -->
                   <td><?= $items['lf'];?></td> 
                   <td><?= number_format($items['cash'],3);?></td>
                   <td><?= $items['date1'];?></td>
                   <td><?= $items['parti1'];?></td>
                   <td><?= $items['lf1'];?></td>
                   <td><?= number_format($items['cash1'],3);?></td>
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
	 </table>
    
	</div>
	<div>
	<button onclick="exportToExcel('table')" name="creat_excel" id="create_excel" class="Home2">Create Excel File</button>
	</div>
</body>
</html>
</body>
<table>
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
</html>
