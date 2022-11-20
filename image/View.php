<?php
include "config.php";
$sql = "SELECT *FROM user_admin";
$result = $conn->query($sql);
?>


        <body>
            <div class="container">
                <table class="table">
                    <head>
                        <tr>
              <th scope="col">S/N</th>
              <th scope="col">DATE</th>
              <th scope="col">FULL NAME</th>
              <th scope="col">PARTICULARS</th>
              <th scope="col">DEBIT</th>
              <th scope="col">INITIAL CREDIT</th>
              <th scope="col">FINAL CREDIT</th>
              <th scope="col">CASH BALANCE</th>
              <th scope="col">INTEREST</th>
              <th scope="col">LEDGER</th>
              <th scope="col">AMOUNT</th>
              <th scope="col">L/F</th>
                        </tr>
    </thread>
    </body>
    <?php
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            
        <td><?php echo $row['S/N'];?></td>
        <td><?php echo $row['DATE'];?></td>
        <td><?php echo $row['NAME'];?></td>
        <td><?php echo $row['PART'];?></td>    
        <td><?php echo $row['DEBIT'];?></td>
        <td><?php echo $row['INITCRED'];?></td>
        <td><?php echo $row['FINCRED'];?></td>
        <td><?php echo $row['CASHBAL'];?></td>
        <td><?php echo $row['INTEREST'];?></td>
        <td><?php echo $row['LEDGER'];?></td>
        <td><?php echo $row['AMOUNT'];?></td>
        <td><?php echo $row['LF'];?></td>
        <td><a class="btn btn-info" href="update.php?S/N<?php echo $row['S/N']; ?>">
    Edit</a>&nbsp;<a
    class="btn btn-danger" href="delete.php?S/N=<?php echo $row['S/N'];?>">Delete</a></td>
    </tr>
   <?php }
}
?>
</tbody>
</table>
</div>
</body>
</html>
