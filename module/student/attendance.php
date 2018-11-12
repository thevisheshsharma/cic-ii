<?php
include_once('main.php');
?>
<?php
include_once('sidebar-student.php');
?>

	<div class="col-md-offset-3 p-t-100">
		<center>
			<h2>My Attendence:</h2>
			<hr/>
			<body  onload="ajaxRequestToGetAttendancePresentThisMonth();">
				<div align="center" style="background-color:violet;">
					Select Attendance that you are present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendancePresentThisMonth();"   value="thismonth" id="present" name="present" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendancePresentAll();" value="all" id="present" name="present"/>
				</div>	
				<hr/>
				<div align="center" >
					<table class="table table-hover" id="mypresent" border="1">
					</table>
				</div>
				<hr/>

				<div align="center" style="background-color:gray;">
					Select Attendance that you are absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceAbsentThisMonth();"   value="thismonth" id="absent" name="absent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceAbsentAll();" value="all" id="absent" name="absent"/>
				</div>	
				<hr/>
				<div align="center" >
					<table class="table table-hover" id="myabsent" border="1">
						
					</table>
				</div>
							
	</body>
		<script type="text/javascript" src="jquery-1.12.3.js"></script>
		<script type="text/javascript" src="studentAttendance.js"></script>
		<script src = "JS/login_logout.js"></script>
			
</html>

