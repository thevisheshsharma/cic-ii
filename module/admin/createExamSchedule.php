<?php
include_once('main.php');
?>
<?php
include_once('sidebar-admin.php');
?>
    <div class="col-md-offset-3 p-t-100">
        <center>
            <h2>Exam Schedule List</h2><hr>
            <form action="#" method="post">
              <table class="table table-hover table-responsive" cellpadding="6">
                  <tr>
                      <td>Exam Schedule Id:</td>
                      <td><input type="text" name="id" placeholder="Exam Schedule ID"></td>
                  </tr>
                  <tr>
                      <td>Exam Date:</td>
                      <td><input type="text" name="examDate" placeholder="Exam Date(y-m-d)"></td>
                  </tr>
                  <tr>
                      <td>Exam Time:</td>
                      <td><input type="text" name="examTime" placeholder="Exam Time(H:M - H:M)"></td>
                  </tr>
                  <tr>
                      <td>Course ID:</td>
                      <td><input type="text" name="courseId" placeholder="Course ID"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>
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
    $examDate = $_POST['examDate'];
    $examTime = $_POST['examTime'];
    $courseId = $_POST['courseId'];
    $sql = "INSERT INTO examschedule VALUES('$id','$examDate','$examTime','$courseId')";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    echo "Entered data successfully\n";
}
?>
