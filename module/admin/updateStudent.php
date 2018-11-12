<?php
include_once('main.php');
?>
<?php
include_once('sidebar-admin.php');
?>
        
        <div class="col-md-offset-3 p-t-100">
			  
        <center>
            <h2>Update list (only one student at a time)</h2>
            <hr>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td>
                        <input class="input100" type="text" id="mypassword" name="searchId" placeholder="Search By Name or ID"  onkeyup="getStudentForUpdate(this.value);">
                    </td>
                </tr>
            </table>

        <br/>

            <form action="#" method="post" onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                <table class="table table-hover table-responsive" border="1" cellpadding="15" id='updateStudentData'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $stuId = $_POST['id'];
    $stuName = $_POST['name'];
    $stuPassword = $_POST['password'];
    $stuPhone = $_POST['phone'];
    $stuEmail = $_POST['email'];
    $stugender = $_POST['gender'];
    $stuDOB = $_POST['dob'];
    $stuAddmissionDate = $_POST['addmissiondate'];
    $stuAddress = $_POST['address'];
    $stuParentId = $_POST['parentid'];
    $stuClassId = $_POST['classid'];
    $image = $_POST['pic'];
    $uploads_dir = "../images/student";
    move_uploaded_file($image, "$uploads_dir/$image");
    $sql = "UPDATE students SET id='$stuId', name='$stuName', password='$stuPassword', phone='$stuPhone', email='$stuEmail', sex='$stugender', dob='$stuDOB', addmissiondate='$stuAddmissionDate', address='$stuAddress', parentid='$stuParentId', classid='$stuClassId' WHERE id='$stuId'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not Update data: '.mysql_error());
    }
    echo "Update data successfully\n";
}
?>

    <script src = "JS/login_logout.js"></script>
    <script src = "JS/searchForUpdateStudent.js"></script>
