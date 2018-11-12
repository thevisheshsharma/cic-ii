<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM teachers;";
$res= mysql_query($sql);
$string = "";
$images_dir = "../../images/";
while($row = mysql_fetch_array($res)){
    $picname = $row['id'];
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['address'].'</td><td>'.$row['sex'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['hiredate'].'</td><td>'.$row['salary'].
    "</td><td><img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>".'</td></tr>';
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
            <h2>Teachers List</h2>
            <hr>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td>
                        <input class="input100" type="text" id="mypassword" name="searchId" placeholder="Search By Name or ID"  onkeyup="getTeacher(this.value);">
                    </td>
                </tr>
            </table>
        <br/>
            <table class="table table-hover" border="1" id='teacherList'>
                <tr>
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

        <script src = "JS/searchTeacher.js"></script>
		</body>
</html>
