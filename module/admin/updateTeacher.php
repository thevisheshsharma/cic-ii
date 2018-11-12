<?php
include_once('main.php');
?>
<?php
include_once('sidebar-admin.php');
?>
        
        <div class="col-md-offset-3 p-t-100">

            <center>
            <h2>Update list (only one teacher at a time)</h2>
            <hr>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td>
                        <input class="input100" type="text" id="mypassword" name="searchId" placeholder="Search By Name or ID"  onkeyup="getTeacherForUpdate(this.value);">
                    </td>
                </tr>
            </table>

        <br/>

            <form action="#" method="post" onsubmit="return newTeacherValidation();" enctype="multipart/form-data">
                <table class="table table-hover table-responsive" border="1" cellpadding="15" id='updateTeacherData'>
                </table>
            </form>
        </center>

		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Password = $_POST['password'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $gender = $_POST['gender'];
    $DOB = $_POST['dob'];
    $hiredate = $_POST['hiredate'];
    $stuAddress = $_POST['address'];
    $salary = $_POST['salary'];
    $image = $_POST['pic'];
    $uploads_dir = "../images";
    move_uploaded_file($image, "$uploads_dir/$image");
    $sql = "UPDATE teachers SET id='$Id', name='$Name', password='$Password', phone='$Phone', email='$Email', address='$Address', sex='$gender', dob='$DOB', hiredate='$hiredate', salary='$salary' WHERE id='$Id'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not Update data: '.mysql_error());
    }
    echo "Update data successfully\n";
}
?>
<script src = "JS/searchForUpdateTeacher.js"></script>
