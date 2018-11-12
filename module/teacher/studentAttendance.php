<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM students where id not in (select attendedid from attendance where date=CURDATE())";
$res= mysql_query($sql);
$string = "";
while($row = mysql_fetch_array($res)){
    $string .= "<form action='attendStudent.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Present'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td></tr></form>';
}
?>

<?php
include_once('main.php');
?>
<?php
include_once('sidebar-teacher.php');
?>
        
    <div class="col-md-offset-3 p-t-100">
        <center>
            <h2>Student Attandance List</h2><hr/>
              <table class="table table-hover" border="1">
                <tr>
                    <th>Click For Attendance</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>
