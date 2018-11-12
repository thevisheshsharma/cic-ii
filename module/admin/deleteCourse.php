<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM course;";
$res= mysql_query($sql);
$string = "";
while($row = mysql_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteCourseTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['name'].'</td><td>'.$row['teacherid'].
    '</td><td>'.$row['studentid'].'</td><td>'.$row['classid'].'</td></tr></form>';
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
            <h2>Delete Course</h2><hr/>
              <table class="table table-hover w-auto table-responsive-sm" border="1">
                <tr>
                    <th>Select For Delete</th>
                    <th>Name</th>
                    <th>Teacher Id</th>
                    <th>Student Id</th>
                    <th>Class Id</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>
