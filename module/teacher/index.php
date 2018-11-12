<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
?>
<?php
include_once('sidebar-teacher.php');
?>
	<div class="col-md-offset-3 p-t-100">
		<center>
			<h2>Wecome to iota.</h2>
				<hr/>

				<div class="card card-img-top" align="center">
					<img class="img-responsive" width="20%" src="../../images/<?php echo $check ?>.jpg" alt="<?php echo $check ?>"/>

					<div class ="header">
					<?php
						$sql = "SELECT * FROM teachers WHERE id='$check';";
						$res = mysql_query($sql);
						while($row = mysql_fetch_array($res)){
						   echo "<center>";
						   echo "ID: ".$row['id']."<br />";
						   echo "Name: ".$row['name']."<br />";
						   echo "Phone: ".$row['phone']."<br />";
						   echo "Date of Birth: ".$row['dob']."<br />";
						   echo "Phone ".$row['phone']."<br />";
						   echo "Email Address: ".$row['email']."<br />";
						   echo "Sex: ".$row['sex']."<br />";
						   echo "Hire DAte: ".$row['hiredate']."<br />";
						   echo "Salary: ".$row['salary']."<br />";
						   echo "</center>";
						}
					?>
					</div>
				</div>
		</body>
</html>
