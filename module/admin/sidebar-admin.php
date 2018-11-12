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

    	<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="../../vendor/bootstrap/js/popper.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../vendor/select2/select2.min.js"></script>
        <script src="../../vendor/tilt/tilt.jquery.min.js"></script>
        <script src="../../js/main.js"></script>


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
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Manage Student <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="addStudent.php">New Student</a></li>
										<li><a href="updateStudent.php">Update Student</a></li>
										<li><a href="deleteStudent.php">Delete Student</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="viewStudent.php">View Student</a></li>
									</ul>
								</div>
								<br> <br>

								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Manage Teacher <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="addTeacher.php">New Teacher</a></li>
										<li><a href="updateTeacher.php">Update Teacher</a></li>
										<li><a href="deleteTeacher.php">Delete Teacher</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="viewTeacher.php">View Teacher</a></li>
									</ul>
								</div>
								<br> <br>

								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Manage Courses <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="addCourse.php">New Course</a></li>
										<li><a href="deleteCourse.php">Delete Course</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="viewCourse.php">View Course</a></li>
									</ul>
								</div>
								<br> <br>

								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Attendance <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="teacherAttendance.php">Teacher's attedance</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="viewAttendance.php">View attendance</a></li>
									</ul>
								</div>
								<br> <br>

								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Exam Schedule <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="createExamSchedule.php">Create schedule</a></li>
										<li><a href="updateExamSchedule.php">Update schedule</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="viewExamSchedule.php">View schedule</a></li>
									</ul>
								</div>
								<br> <br>

								<div class="btn-group">
									<a href="report.php">
										<button type="button" class="btn btn-default">
											Teacher's report <span class=""></span>
										</button>
									</a>
								</div>
								<br> <br>

								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Payment <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="addPayment.php">Add Payment</a></li>
										<li><a href="deletePayment.php">Delete Payment</a></li>
									</ul>
								</div>
								<br> <br>

							</li>
						</ul>

							<a class="container-login100-form-btn" href="logout.php">
	                            <button class="login100-form-btn txt2">
	                            	Logout
	                            </button>
	                        </a>

						</li>
					</ul>
				</div>
			</div>
