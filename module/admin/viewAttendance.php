<?php
include_once('main.php');
?>
<?php
include_once('sidebar-admin.php');
?>

    <div class="col-md-offset-3 p-t-100">    
    	<center>
	    <body  onload="ajaxRequestToGetAttendanceTeacherPresentThisMonth();">
	    	<h2>View Attendance</h2>
			  <hr/>
			  <div align="center" style="background-color:orange;">			  
			   Select your Teacher:<select id="teaid" name="teaid" onchange="ajaxRequestToGetAttendanceTeacherPresentThisMonth();" style="background-color:white;"><?php  


$classget = "SELECT  * FROM teachers ";
$res= mysql_query($classget);

while($cln=mysql_fetch_array($res))
{
	
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}

?>

</select>

	<hr/>
Select Attendance Teacher present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceTeacherPresentThisMonth();"   value="thismonth" id="teapresent" name="teapresent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherPresentAll();" value="all" id="teapresent" name="teapresent"/>
</div>	
<hr/>
<div align="center" >
<table id="myteapresent" border="1">

</table>
</div>
<hr/>
<div align="center" style="background-color:gray;">
	
Select Attendance  Teacher absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceTeacherAbsentThisMonth();"   value="thismonth" id="teaabsent" name="teaabsent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherAbsentAll();" value="all" id="teaabsent" name="teaabsent"/>
</div>	
<hr/>
<div align="center" >
<table id="myteaabsent" border="1">

</table>
</div>

	<hr/>
	  <div align="center" style="background-color:orange;">
	Select your Staff:<select id="staffid" name="staffid" onchange="ajaxRequestToGetAttendanceStaffPresentThisMonth();" style="background-color:white;"><?php  


$classget = "SELECT  * FROM staff ";
$res= mysql_query($classget);
while($cln=mysql_fetch_array($res))
{
	
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}

?>

</select>
<hr/>
Select Attendance Staff present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceStaffPresentThisMonth();"   value="thismonth" id="staffpresent" name="staffpresent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceStaffPresentAll();" value="all" id="staffpresent" name="staffpresent"/>
</div>	
<hr/>
<div align="center" >
<table id="mystaffpresent" border="1">

</table>
</div>
<hr/>
<div align="center" style="background-color:gray;">
	
Select Attendance  Staff absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceStaffAbsentThisMonth();"   value="thismonth" id="staffabsent" name="staffabsent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceStaffAbsentAll();" value="all" id="staffabsent" name="staffabsent"/>
</div>	
<hr/>
<div align="center" >
<table id="mystaffabsent" border="1">

</table>
</div>											
		</body>
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="Attendance.js"></script>
			<script src = "JS/login_logout.js"></script>
</html>