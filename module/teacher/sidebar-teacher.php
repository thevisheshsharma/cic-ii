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
							<h4 class="text-white">Hi! Professor <br> <?php echo $check." ";?></h4><hr>
						</span>
					</div>
						<ul>
							<li class="">
								<div class="btn-group">
									<a href="updateTeacher.php">
										<button type="button" class="btn btn-default">
											Update Profile <span class=""></span>
										</button>
									</a>
								</div>
								<br> <br>

								<div class="btn-group">
									<a href="exam.php">
										<button type="button" class="btn btn-default">
											Upcoming exams <span class=""></span>
										</button>
									</a>
								</div>
								<br> <br>


								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Grades <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="addStudent.php">Under development</a></li>
									</ul>
								</div>
								<br> <br>



								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Attendance <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="studentAttendance.php">Student's Attendence</a></li>
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
