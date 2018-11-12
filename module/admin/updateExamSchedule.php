<?php
include_once('main.php');
?>
<?php
include_once('sidebar-admin.php');
?>
        
    <div class="col-md-offset-3 p-t-100">
    	<center>
                <h2>Update list (only one schedule at a time)</h2>
            <hr>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td>
                        <input class="input100" type="text" id="mypassword" name="searchId" placeholder="Search By Name or ID"  onkeyup="getExamScheduleForUpdate(this.value);">
                    </td>
                </tr>
            </table>

        <br/>

            <form action="#" method="post" onsubmit="return newTeacherValidation();" enctype="multipart/form-data">
                <table class="table table-hover table-responsive" border="1" cellpadding="15" id='updateExamSchedule'>
                </table>
            </form>
        </center>

		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $examdate = $_POST['examdate'];
    $examtime = $_POST['examtime'];
    $courseid = $_POST['courseid'];
    $sql = "UPDATE examschedule SET id='$id', examdate='$examdate', time='$examtime', courseid='$courseid' WHERE id='$id'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not Update data: '.mysql_error());
    }
    echo "Update data successfully\n";
}
?>

<script src = "JS/searchForUpdateExamSchedule.js"></script>
