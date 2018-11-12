<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM students;";
$res= mysql_query($sql);
$string = "";
$images_dir = "../../images/";
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
?>

<?php
include_once('sidebar-admin.php');
?>
        
        <div class="col-md-offset-3 p-t-100">

        <center>
            <h2>Delete Student</h2><hr/>
              <table class="table table-hover w-auto table-responsive-sm table-inverted" border="1">
                <tr>
                    <th>Select For Delete</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Addmission Date</th>
                    <th>Address</th>
                    <th>Parent Id</th>
                    <th>Class Id</th>
                    <th>Picture</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
        <script src = "JS/login_logout.js"></script>
		</body>
</html>
