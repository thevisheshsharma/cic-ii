<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM course;";
$res= mysql_query($sql);
$string = "";
while($row = mysql_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['teacherid'].'</td><td>'.$row['studentid'].
    '</td><td>'.$row['classid'].'</td></tr>';
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
            <h2>Course List</h2>
            <hr>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td>
                        <input class="input100" type="text" id="mypassword" name="searchId" placeholder="Search By Name or ID"  onkeyup="getCourse(this.value);">
                    </td>
                </tr>
            </table>
        <br/>
            <table class="table table-hover" border="1" id='courseList'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Teacher ID</th>
                    <th>Student ID Name</th>
                    <th>Class ID</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
	</body>
</html>
