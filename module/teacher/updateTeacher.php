<?php
include_once('main.php');
?>
<?php
include_once('sidebar-teacher.php');
?>      
        <div class="col-md-offset-3 p-t-100">
            <center>
            <h2>Update your profile</h2>
            <hr>

        <br/>
            <form action="#" method="post">
                <table class="table table-hover" border="1" cellpadding="15" id='updateTeacherData'>
                    <?php include ('searchForUpdateTeacher.php'); ?>
                </table>
                <input class="container-login100-form-btn login100-form-btn txt2" type="Submit" name="submit" value="Submit" onsubmit="newTeacherValidation();">
            </form>
        </center>


<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $teaId = $_POST['id'];
    $teaName = $_POST['name'];
    $teaPassword = $_POST['password'];
    $teaPhone = $_POST['phone'];
    $teaEmail = $_POST['email'];
    $teagender = $_POST['gender'];
    $teaDOB = $_POST['dob'];
    $teaAddress = $_POST['address'];
    $sql = "UPDATE teachers SET id='$teaId', name='$teaName', password='$teaPassword', phone='$teaPhone', email='$teaEmail', sex='$teagender', dob='$teaDOB',address='$teaAddress' WHERE id='$teaId'";
	$sql1="UPDATE users SET password='$teaPassword' where userid='$teaId'";
	
    $success = mysql_query( $sql,$link );
	$success1=mysql_query( $sql1,$link );
    if(!$success||!$success1) {
        die('Could not Update data: '.mysql_error());
    }
    echo "\nUpdate data successfully\n";
	
}
?>
   <script src = "JS/searchForUpdateTeacher.js"></script>