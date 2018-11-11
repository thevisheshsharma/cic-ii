<html>
    <head>
    	<title>CIC-iota</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../../images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../source/css/style.css">
        <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/util.css">
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
    	<link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">

    	<script src = "JS/login_logout.js"></script>
    </head>

    <body>
    	<div class="row">
    		<div class="col-md-3 sidenav pos-fixed">
				<div class="container-login100">
					<div class="login100-pic">
						<img src="../../source/images/iota-logo-white.png" alt="IMG"> <hr>
						<span class="login100-form-title">
							<h4 class="text-white">Hi! Admin <br> <?php echo $check." ";?></h4><hr>
						</span>
					</div>

					<ul>
						<li class="">

							<div class="btn-group">
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Manage Student
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">New Student</a>
									<a class="dropdown-item" href="#">View Student</a>
									<a class="dropdown-item" href="#">UpdateStudent</a>
									<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Delete Student</a>
									</div>
								</div>
<br>

<div class="dropdown">
  <a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    Dropdown trigger
    <span class="caret"></span>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dLabel">
  	
  </ul>
</div>
<br>


							<a class ="text-white" href="manageStudent.php">Manage Student</a> <br>
							<a class ="text-white" href="manageTeacher.php">Manage Teacher</a> <br>
							<a class ="text-white" href="course.php">Course</a> <br>
							<a class ="text-white" href="attendance.php">Attendance</a> <br>
							<a class ="text-white" href="examSchedule.php">Exam Schedule</a> <br>
							<a class ="text-white" href="salary.php">Salary</a> <br>
							<a class ="text-white" href="report.php">Report</a> <br>
							<a class ="text-white" href="payment.php">Payment</a>

							<a class="container-login100-form-btn" href="logout.php">
	                            <button class="login100-form-btn txt2">
	                            	Logout
	                            </button>
	                        </a>

						</li>
					</ul>
				</div>
			</div>
