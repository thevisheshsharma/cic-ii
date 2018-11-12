<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Please Login !";
	  $color="green";
}
?>

<!doctype html>
<html>
    <head>
        <title>CIC-iota</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <link rel="stylesheet" href="source/css/style.css">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    </head>

    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="source/images/iota-sq.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" action="service/check.access.php" onsubmit="return loginValidate();" method="post">
                        <span class="login100-form-title">
                        	<img src="source/images/1.png" class="img-fluid" width="80%" alt="Responsive image">
                            <hr>IOTA | CIC.<br>
                            <?php echo "<font size='4' color='$color'>$login_message</font>";?>
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" id="myid" name="myid" placeholder="username" autofocus=""   />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" id="mypassword" name="mypassword" placeholder="secret-key"  />
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        <div class="container-login100-form-btn p-t-136">
                            <button class="login100-form-btn txt2">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-136">
                            <span class="txt2" href="#">
                                Made with
                                <i class="fa fa-heart" aria-hidden="true"></i>   for Cluster Innovation Centre.
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="js/main.js"></script>

            
    </body>
</html>
