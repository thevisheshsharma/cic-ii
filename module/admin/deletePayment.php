<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM students;";
$res= mysql_query($sql);
$string = "";
$images_dir = "../images/";
//<input type="checkbox" name="vehicle" value="Car">
while($row = mysql_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteStudentTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['sex'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['addmissiondate'].'</td><td>'.$row['address'].
    '</td><td>'.$row['parentid'].'</td><td>'.$row['classid'].
    "</td><td><img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>".'</td></tr></form>';
}
?>


<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$string = "<tr>
    <th>Click To Dlete</th>
    <th>ID</th>
    <th>Student Id</th>
    <th>Amount</th>
    <th>Month</th>
    <th>Year</th>
    </tr>";
$sql = "SELECT * FROM payment WHERE month = MONTH(curdate()) AND year = YEAR(curdate())";
$res = mysql_query($sql);

while($row = mysql_fetch_array($res)){
    $string .= "<form action='deletePaymentableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    "</td><td>".$row['id']."</td><td>".$row['studentid']."</td><td>".$row['amount'].
    "</td><td>".$row['month']."</td><td>".$row['year']."</td></tr></form>";
}
?>

<?php
include_once('main.php');
?>

<?php
include_once('sidebar-admin.php');
?>
        
        <div class="col-md-offset-3 p-t-100">

        	<center>
            <h2>Delete Payment</h2><hr/>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td>
                        <input class="input100" type="text" id="mypassword" name="searchId" placeholder="Search By Name or ID"  onkeyup="getPayment(this.value);">
                    </td>
                </tr>
                <br>
            </table>
              <table id="paymentList" class="table table-hover w-auto table-responsive-sm table-inverted" border="1">
                <tr>
                    
                </tr>
                <?php echo $string;?>
              </table>
        </center>
	</body>
</html>
