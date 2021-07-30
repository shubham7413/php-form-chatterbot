<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<meta name="robots" content="noindex, follow">
</head>

<body>
<?php 
	
	require_once('connectvars.php');

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Unable to connect to dB");

    if (isset($_POST['submit'])){
		echo 'hello';
        $ques = mysqli_real_escape_string($dbc,trim($_POST['question']));
        $ans = mysqli_real_escape_string($dbc,trim($_POST['answer']));
        $error = false;

        if (!empty($ques) && !empty($ans)){

            $query = "INSERT INTO chatterbot (ques, ans) VALUES ('$ques', '$ans')";
            $result = mysqli_query($dbc, $query) or die('Error querying database.');  
        }
        mysqli_close($dbc);
    }

?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span>
					<div class="wrap-input100 validate-input m-t-85 m-b-35" style="border-bottom: none;" data-validate="Enter username">
						<!-- <input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span> -->
						<textarea name="question" id="ques" cols="40" rows="3" placeholder="Enter Question"></textarea>
					</div>
					<div class="wrap-input100 validate-input m-b-50" style="border-bottom: none;" data-validate="Enter password">
						<!-- <input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span> -->
						<textarea name="answer" id="ans" cols="40" rows="3" placeholder="Enter possible Answer"></textarea>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="submit">
							
					</div>
					<!-- <ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>
							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>
						<li>
							<span class="txt1">
								Don’t have an account?
							</span>
							<a href="#" class="txt2">
								Sign up
							</a>
						</li>
					</ul> -->
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js"
		data-cf-beacon='{"rayId":"676c18469bc928cd","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
</body>

</html>