<?php
include_once('main.php');
?>
<?php
include_once('sidebar-student.php');
?>

	<div class="col-md-offset-3 p-t-100">
		<center>

		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
    		<body  onload="ajaxRequestToGetCourseCurrentExamSchedule();">

    			<h2>My Exam schedule</h2>
    			<hr/>
    			<div align="center" style="background-color:orange;">
	
Select Runing Course Exam Schedule:<select id="curcourse" onchange="ajaxRequestToGetCourseCurrentExamSchedule();" name="curcourse"><?php  


$classget = "SELECT  DISTINCT id,name FROM course where classid in(select DISTINCT classid from students where id='$check') and studentid='$check'";
$res= mysql_query($classget);

while($clnn=mysql_fetch_array($res))
{
 echo '<option value="',$clnn['id'],'" >',$clnn['name'],'</option>';
   
}


?>
</select>
</div>	
<hr/>
<div align="center">
<table class="table table-hover" id="mycourseexamschedule" border="1" >
</table>
</div>


							
							
		</body>
</html>

