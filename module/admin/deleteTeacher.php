<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM teachers;";
$res= mysql_query($sql);
$string = "";
$images_dir = "../images/";
while($row = mysql_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteTeacherTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['address'].
    '</td><td>'.$row['sex'].'</td><td>'.$row['dob'].'</td><td>'.$row['hiredate'].
    '</td><td>'.$row['salary'].
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
                <h2>Delete Teacher</h2><hr/>
                  <table class="table table-hover w-auto table-responsive-sm" border="1">
                    <tr>
                        <th>Select For Delete</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Hire Date</th>
                        <th>Salary</th>
                        <th>Picture</th>
                    </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>
