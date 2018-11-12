<?php
include_once('main.php');
?>
<?php
include_once('sidebar-student.php');
?>
	<div class="col-md-offset-3 p-t-100">
		<center>
				
		    <body  onload="ajaxRequestToGetCourse();">
		    	<h2>Performance</h2><hr/>
		    	<div align="center">
		    		Select Class:<select id="myclass" name="myclass" onchange="ajaxRequestToGetCourse();"><?php  

$classget = "SELECT  name FROM class where id in(select DISTINCT classid from course where studentid='$check')";
$res= mysql_query($classget);

while($cln=mysql_fetch_array($res))
{
 echo '<option value="',$cln['name'],'" >',$cln['name'],'</option>';  
}

?>
</select>
<br><br>
Select Course<select id="mycourse" onchange="ajaxRequestToGetCourseInfo();" name="mycourse">

</select>
<hr>
<h4>Course Information:<hr/></br><label id="mycourseteacher"></label><br/>
<table class="table-hover" id="mycourseinfo">
</table>
<hr/>



			</div>					
							
	</body>
		<script type="text/javascript" src="jquery-1.12.3.js"></script>
		<script type="text/javascript" src="studentClassCourse.js"></script>
		<script src = "JS/login_logout.js"></script>
			
</html>

