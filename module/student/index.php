<?php
include_once('main.php');

$st=mysql_query("SELECT *  FROM students WHERE id='$check' ");
$stinfo=mysql_fetch_array($st);
?>

<?php
include_once('sidebar-student.php');
?>

	<div class="col-md-offset-3 p-t-100">

			  <hr/>
			  
			  <div align="center">
			  	<h1>My Information</h1>
			  <table class="table table-hover" border="1">
			  <tr>
			  
			  <th>Student ID</th>
			  <th>Student Name</th>
			  <th>Student Phone</th>
			  <th>Student Email</th>
			  <th>Student Gender</th>
			  <th>Student DOB</th>
			  <th>Student Admission Date</th>
			  <th>Student Address</th>
			  <th>Student Parent ID</th>
			  <th>Student class ID</th>
			  <th>Student Picture</th>
			  
			  </tr>
			  <tr>
			  
			  <td><?php echo $stinfo['id'];?></td>
			  <td><?php echo $stinfo['name'];?></td>
			  <td><?php echo $stinfo['phone'];?></td>
			  <td><?php echo $stinfo['email'];?></td>
			  <td><?php echo $stinfo['sex'];?></td>
			  <td><?php echo $stinfo['dob'];?></td>
			  <td><?php echo $stinfo['addmissiondate'];?></td>
			  <td><?php echo $stinfo['address'];?></td>
			  <td><?php echo $stinfo['parentid'];?></td>
			  <td><?php echo $stinfo['classid'];?></td>
			  <td><img src="../images/<?php echo $check.".jpg";?>" height="95" width="95" alt="<?php echo $check." photo";?> "/></td>
			  </tr>
			  
			  
			  </table>
								
								</div>
		</body>
</html>

