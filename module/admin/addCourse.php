<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$session=mysql_query("SELECT name  FROM admin WHERE id='$check' ");
$row=mysql_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>


<?php
include_once('sidebar-admin.php');
?>

<body onload="getClassNameAndId();">
  
        <div class="col-md-offset-4 p-t-100">


        <center>
            <h2>Course Registration For Student.</h2><hr/>
            <form action="#" method="post">
                <table class="table table-hover table-responsive" cellpadding="6">
                    <tr>
                        <td>Class ID:</td>
                        <td><select id="className" onchange="getCourseNameAndId();"></select></td>
                    </tr>
                    <tr>
                        <td>Course Name:</td>
                        <td><select id="courseName" onchange="setCourseId()"></select></td>
                    </tr>
                    <tr>
                        <td><input id="courseId"type="hidden" name="name" placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td>Teacher ID:</td>
                        <td><select id="teacherId" onchange=""></select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="container-login100-form-btn login100-form-btn txt2" type="button" name="submit" value="Submit" onclick="getAllCourseStudentAndSubmit();">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>

        <script src = "JS/currentDate.js"></script>
        <script src = "JS/getClassName.js"></script>
        <script src = "JS/getCourseIdAndNAme.js"></script>
</html>
