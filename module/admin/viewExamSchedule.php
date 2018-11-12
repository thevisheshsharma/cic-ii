<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');

$sql = "SELECT * FROM examschedule WHERE  MONTH(examdate) = MONTH(CURRENT_DATE) AND YEAR(examdate)=YEAR(CURRENT_DATE)";
$res= mysql_query($sql);
$string = "<tr>
               <th>ID</th>
               <th>Exam Date</th>
               <th>Time</th>
               <th>Course Id</th>
           </tr>";
while($row = mysql_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['examdate'].
    '</td><td>'.$row['time'].'</td><td>'.$row['courseid'].'</td></tr>';
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

            <h2>Exam Schedule List</h2>
            <hr>
            <table class="table table-hover" border="1">
                <?php echo $string; ?>
            </table>
        </center>
		</body>
</html>
