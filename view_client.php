<?php

$con = mysqli_connect("localhost", "root", "", "Inventory");
//define('phone', 'GetID');
if(!$con){
die("Connection Error");
$result = mysqli_query($con,$sql);
}
$query = " select * from registrition";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<script src="/js/script.js"></script>
<link rel="stylesheet" href="./css/style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Home Page</title>
</head>
    <div class="header_new">
    <div class="flex_cont">
       
    </div>
    </div>
    
</body>
<div  class="view_client">
<table id=tableexport style="width:100%" class="table" border="1">
    <thead>
        <tr>
        <th colspan="17">GENERAL CLIENT RECORD</th>
        </tr>
    <tr>
    <b>
    <th>APPLICANT</th>
    <th>WORK ADDRESS</th>
    <th>HOME ADDRESS</th>
    <th>PHONE</th>
    <th>REG_DATE</th>
    <th>AMOUNT(=N=)</th>
    <th>R/SCHEDULE</th>
    <th>COMP_NUM</th>
    <th>DATE_OF_APP</th>
    <th>DATE_OF_R</th>
    <th>MINISTRY</th>
    <th>SURETY NAME</th>
    <th>W/ADDRESS</th>
    <th>DATE_OF_R</th>
    <th>S/PHONE</th>
    <th>COMP_NUM</th>
    <th>DELETE</th></b>
    </tr>
    
             
    <thead>
    
    <?php
    
    // $total_qty = 0;
    // $total_qty1 = 0;
    
    
    while($row = mysqli_fetch_assoc($result))
    {
        $SN = $row['SN'];
        $Fname = $row['Fname'];
        $Lname = $row['Lname'];
        $Adress = $row['Adress'];
        $Date = $row['Phone'];
        $Phone = $row['comp_number'];
        $Pwork = $row['Design'];
        $Design = $row['Interest'];
        $Location = $row['Particular'];
        $Particular = $row['Credit'];
        $comp_number = $row['reg'];
        $Cash1 = $row['Cbalance1'];
        $Bank_name = $row['Cash1'];
        $Bank = $row['Bank_name'];
        $Debit = $row['DOR'];
        $Facility = $row['Facility'];
        $Amount1 = $row['Amount1'];
    ?>
    <tr> 
            
            <td><?php echo $row['Fname']?></td> 
            <td><?php echo $row['Lname'];?></td>
            <td><?php echo $row['Adress'];?></td>
            <td><?php echo $row['Phone'];?></td>
            <td><?php echo $row['reg']?></td> 
            <td><?php echo $row['comp_number'];?></td>
            <td><?php echo $row['Design'] ?></td>
            <td><?php echo $row['Interest'] ?></td>
            <td><?php echo $row['Particular']?></td> 
            <td><?php echo $row['Credit'] ?></td>
            <td><?php echo $row['Cbalance1']?></td> 
            <td><?php echo $row['Cash1'];?></td>
            <td><?php echo $row['Bank_name'];?></td>
            <td><?php echo $row['DOR']?></td>
            <td><?php echo $row['Facility'] ?></td>
            <td><?php echo $row['Amount1']?></td> 
            
            <td><a href ="delete_reg.php?Del=<?php echo $SN ?>">Delete</a></td>
           
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
    <button onclick="exportToExcel('tableexport')" class="Home2" >Export record</button><button onClick="window.location.href='./Registration.html'"class="Home">Back</button>
    </div>
    <div class="flex_grid">
            
            <!-- <button onClick="window.location.href='./Home.html'"class="Home">Home Page</button> -->
            <!-- <button onClick="window.location.href='./Admin.html'" class="Home">Register User</button>
            <button onClick="window.location.href='./Registration.html'"class="Home">Register Client</button>
            <button onClick="window.location.href='./Report_view.php'"class="Home">General Ledger</button>
            <button onClick="window.location.href='./Cash_Transactions.php'"class="Home">Cash Transaction</button>
            <button onClick="window.location.href='./Savings_Loan.php'" class="Home">Individaul Ledger</button>
            <button onClick="window.location.href='./index.html'" class="Home">Log Out</button>
             -->
        </div>
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
    
    
    <script src="/js/script.js"></script>
    </html>
</html>