<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$string = "<tr>
    <th>Teacher</th>
    <th>Course Id</th>
    <th>Class</th>
    <th>#OF Students</th>
    </tr>";
$sql = "select t.name as teacher,ac.name as course,ac.classid as class,count(g.id) as no_of_std from teachers t,takencoursebyteacher tc,availablecourse ac,grade g where t.id=tc.teacherid and ac.id=tc.courseid and tc.courseid=g.courseid and g.grade not in('A+','A','A-','B+','B','B-')group by ac.id";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
    $string .= "<tr><td>".$row['teacher']."</td><td>".$row['course']."</td><td>".$row['class'].
    "</td><td>".$row['no_of_std']."</td></tr>";
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
            <h2>Teacher Evaluation</h2><hr>
            <table class="table table-hover" border="1">
                <?php echo $string;?>
            </table>
        </center>
	</body>
</html>
