<html>
    <head>
    	<title>CIC-iota</title>
    		<meta http-equiv="x-ua-compatible" content="ie=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />

			<link rel="icon" type="image/png" href="../../images/icons/favicon.ico"/>
	        <link rel="stylesheet" href="../../source/css/style.css">
	        <link rel="stylesheet" href="../../bootstrap/bootstrap.min.css">
	        <link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
	        <link rel="stylesheet" type="text/css" href="../../vendor/css-hamburgers/hamburgers.min.css">
	        <link rel="stylesheet" type="text/css" href="../../vendor/select2/select2.min.css">
	        <link rel="stylesheet" type="text/css" href="../../css/util.css">
	        <link rel="stylesheet" type="text/css" href="../../css/main.css">
	    	<link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400">
		
			<script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
	        <script src="../../vendor/bootstrap/js/popper.js"></script>
	        <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
	        <script src="../../vendor/select2/select2.min.js"></script>
	        <script src="../../vendor/tilt/tilt.jquery.min.js"></script>
	        <script src="../../js/main.js"></script>

    		<script src = "JS/login_logout.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>

			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			
			<style type="text/css">
				body{
					background-image: linear-gradient( 109.6deg,  rgba(253,199,141,1) 11.3%, rgba(249,143,253,1) 100.2% ); /* The image used */
					  /*height: 500px;  You must set a specified height */
					  /*background-position: center;
					  background-repeat: no-repeat;
					  background-size: cover;*/
					min-height: 100vh;
				}
				#logo{
					margin-top: 100px;
				}
				#dashboard{
					margin-top: 50px;
				}
				#abnormalities{
					font-size: 120px;
					text-align: center;
				}
			</style>
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
									<a href="sendsms.php">
										<button type="button" class="btn btn-default">
											Send SMS <span class=""></span>
										</button>
									</a>
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


			<div class="col-md-8">
				<div class="container">
					<div id="logo">
					<div class="row">
						<div class="col-auto"></div>
						<div class="col" align="center">
							<img src="../../images/sms.png" class="img-responsive" width="100px">
						</div>
						<div class="col-auto"></div>
					</div>
					</div>
				</div>
				<div class="container">
					<div id="dashboard">
						<div class="row">
							<div class="col-md-8">
								<div class="row">
									<div class="col-12">
										<div class="video-player">
											<div class="title">
												Send SMS
											</div>
			<textarea rows="4" cols="4" class="form-control" id="text" onkeyup="countChars('text','charcount')" onkeydown="countChars('text','charcount')" onmouseout="countChars('text','charcount')" maxlength="160"></textarea>
			  								<br>
			  								<div class="title">
			  									Phone Numbers
			  								</div>
			  								<input type="text" name="phone" id="phone" class="form-control">
			  								<br>
			  								<button class="btn btn-default btn-lg" id="send" onclick="send_sms()">Send</button>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-12">
										<div class="faces">
											 <div class="title">
												Send Status : <span id="status"><button class="btn btn-lg btn-danger">OFFLINE</button></span>
											</div>
										</div>	
										
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="abnormal">
									<div class="title">
										Characters Remaining		
									</div>
									<div class="content" id="abnormalities">
										<span id="charcount">160</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	<script type="text/javascript">
		function countChars(countfrom,displayto) {
  var len = document.getElementById(countfrom).value.length;
  document.getElementById(displayto).innerHTML = 160-len;
}

		function send_sms(){
			var phone = $('#phone').val();
			$('#phone').val("");
			var text = $('#text').val();
			$('#text').val("");
			document.getElementById("status").innerHTML = '<button class="btn btn-lg btn-success">PROCESSING</button>';
			$.ajax({
			  type: "POST",
			  dataType: 'jsonp',
			  url: "http://api.msg91.com/api/v2/sendsms?message="+text+"&authkey=163665AYC3dGFhTz595a6de6&mobiles="+phone+"&route=4&sender=SCHMNT&country=91",
			  data: null,
			  error: function (response) {
			    console.log("Success!!");
			    document.getElementById("status").innerHTML = '<button class="btn btn-lg btn-danger">OFFLINE</button>';
			    $.notify({
	// options
					icon: 'glyphicon glyphicon-success-sign',
					title: 'SMS',
					message: 'SMS sent successfully',
					target: '_blank'
				},{
					// settings
					element: 'body',
					position: null,
					type: "success",
					allow_dismiss: true,
					newest_on_top: false,
					showProgressbar: false,
					placement: {
						from: "top",
						align: "right"
					},
					offset: 20,
					spacing: 10,
					z_index: 1031,
					delay: 2000,
					timer: 1000,
					url_target: '_blank',
					mouse_over: null,
					animate: {
						enter: 'animated fadeInDown',
						exit: 'animated fadeOutUp'
					},
					onShow: null,
					onShown: null,
					onClose: null,
					onClosed: null,
					icon_type: 'class',
					template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
						'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
						'<span data-notify="icon"></span> ' +
						'<span data-notify="title">{1}</span> ' +
						'<span data-notify="message">{2}</span>' +
						'<div class="progress" data-notify="progressbar">' +
							'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
						'</div>'+'</div>' 
				});
			  },
			  success: function (xhr, desc, err) {
			    console.log(xhr);
			    console.log("Desc: " + desc + "\nErr:" + err);
			  }
			});
		}
	</script>

	<!-- <script type="text/javascript">
		var phone = "9873006032";
		var count=0;
		var vid=0;
		var faces;
		var frame_number;
      var config = {
        apiKey: "AIzaSyBWSH1a8Ylmf-zYyJpcoUdChjMfpAN-i5c",
        authDomain: "hal-9000-inout.firebaseapp.com",
        databaseURL: "https://hal-9000-inout.firebaseio.com",
        projectId: "hal-9000-inout",
        storageBucket: "hal-9000-inout.appspot.com",
        messagingSenderId: "1098826755177"
      };
      firebase.initializeApp(config);


      var feed_json = firebase.database().ref('feed');
      var data
    
      feed_json.on('value', function(snapshot) {
        updateFeed(snapshot.val());
      });

      function updateFeed(value){
        // data = JSON.stringify(value);
        if(count > 0){
        data = value
        temp = data.feed;
        console.log(temp.processed_video_path);
        frame_number = temp.frame_number_anomaly;
        faces = temp.face_path_list;
        console.log(faces);
        var ip = 'http://192.168.43.148/notHAL/';
        $('#video-source').attr("src",ip+temp.processed_video_path);
        video.video.load();
        video.video.play();
    	}
    	count++;
        /*video.listen('frame');
        $(this).html('Pause');*/
      }

      function getAjax() {
      	        	$.ajax({
			  type: "POST",
			  dataType: 'jsonp',
			  url: "http://api.msg91.com/api/v2/sendsms?message="+text+"&authkey=163665AYC3dGFhTz595a6de6&mobiles="+phone+"&route=4&sender=NOTHAL&country=91",
			  data: null,
			  error: function (response) {
			    console.log("Success!!");
			    $.notify({
	// options
					icon: 'glyphicon glyphicon-success-sign',
					title: 'SMS',
					message: 'SMS sent successfully',
					target: '_blank'
				},{
					// settings
					element: 'body',
					position: null,
					type: "success",
					allow_dismiss: true,
					newest_on_top: false,
					showProgressbar: false,
					placement: {
						from: "top",
						align: "right"
					},
					offset: 20,
					spacing: 10,
					z_index: 1031,
					delay: 2000,
					timer: 1000,
					url_target: '_blank',
					mouse_over: null,
					animate: {
						enter: 'animated fadeInDown',
						exit: 'animated fadeOutUp'
					},
					onShow: null,
					onShown: null,
					onClose: null,
					onClosed: null,
					icon_type: 'class',
					template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
						'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
						'<span data-notify="icon"></span> ' +
						'<span data-notify="title">{1}</span> ' +
						'<span data-notify="message">{2}</span>' +
						'<div class="progress" data-notify="progressbar">' +
							'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
						'</div>'+'</div>' 
				});
			  },
			  success: function (xhr, desc, err) {
			    console.log(xhr);
			    console.log("Desc: " + desc + "\nErr:" + err);
			  }
			});
      }



		var currentFrame = $('#currentFrame');
var video = VideoFrame({
    id : 'video',
    frameRate: 29.97,
    callback : function(frame) {
        currentFrame.html(frame);
        if(frame==frame_number){
        	frame_number = null;
        	vid++;
        	var date = new Date($.now());
        	$('tbody').append("<tr><td>#"+vid+"</td><td>"+date+"</td></tr>");
        	var url2 = "http://192.168.43.148/notHAL/selfie/";
        	for(i=0;i<faces.length;i++){
        		console.log(faces[i]);
        		if(faces[i]!=null){
        			$("#facemyass").append("<img class='img-circle' src="+url2+faces[i]+" width='100px' >");
        		}
        	}
        	getAjax();
        }
    }
});

/*$('#play-pause').click(function(){
    if(video.video.paused){*/
        video.video.play();
        video.listen('frame');
        $(this).html('Pause');
   /* }else{
        video.video.pause();
        video.stopListen();
        $(this).html('Play');
    }
});*/
	$(document).ready(function(){
	    $('video').on('ended',function(){
	      	if($('#video-source').data("src") != './video/static.mp4'){
	      		$('#video-source').attr("src",'./video/static.mp4');
	      		video.video.load();
        		video.video.play();
	      	}
	      	else{
	      		$('#video-source').attr("src",'./video/static.mp4');
	      		video.video.load();
        		video.video.play();	
	      	}
	    });
	  });
	</script> -->
</body>