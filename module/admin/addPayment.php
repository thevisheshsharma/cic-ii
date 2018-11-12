<?php
include_once('main.php');
?>

<?php
include_once('sidebar-admin.php');
?>
        
        <div class="col-md-offset-4 p-t-100">

          <center>
              <h2>Student Tuition Fees</h2>
              <hr>
              <form action="#" method="post">
                  <table class="table table-hover table-responsive" cellpadding="6">
                    <tr>
                        <td>Student ID:</td>
                        <td><input type="text" name="id" placeholder="Enter Student Id."></td>
                    </tr>
                    <tr>
                        <td>Ammount:</td>
                        <td><input type="text" name="ammount" placeholder="Enter Ammount."></td>
                    </tr>
                    <tr>
                        <td>Month:</td>
                        <td><input type="text" name="month" placeholder="Enter Month.(April as 4)"></td>
                    </tr>
                    <tr>
                        <td>Year:</td>
                        <td><input type="text" name="year" placeholder="Enter Year.(2016)"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="p-t-50">
                            <input class="container-login100-form-btn login100-form-btn txt2" type="submit" name="submit" value="Submit">
                        </td>
                    </tr>
                  </table>
              </form>
          </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $ammount = $_POST['ammount'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $sql = "INSERT INTO payment VALUES('','$id','$ammount','$month','$year')";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    echo "Transaction successfull\n";
}
?>
