<!DOCTYPE>
<html>
<head>
		<title>Join</title>
        <meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
        <div align="center">
			<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method='get' action='join_action.php'>
						<span class="login100-form-title p-b-43">
						Join
						</span>	
						
						<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
							<input class="input100" type="text" name="id">
							<span class="label-input100">Username</span>
						</div>
						
						<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="pw">
							<span class="label-input100">Password</span>
						</div>
					
						<div class="wrap-input100 rs2 validate-input" data-validate="Birth is required">
							<input class="input100" type="text" name="birth">
							<span class="label-input100">Birth</span>
						</div>
					
						<div class="wrap-input100 rs2 validate-input" data-validate="E-mail is required">
							<input class="input100" type="text" name="E-mail">
							<span class="label-input100">E-mail</span>
						</div>

						<div class="container-login100-form-btn">
							<input class="login100-form-btn" type="submit" value="Submit">
						</div>
				</form>
			</div>
		</div>
				<!--
                <p>회원가입</p>
                <form method='get' action='join_action.php'>
                        <p>ID: <input type="text" name="id"></p>
                        <p>PW: <input type="password" name="pw"></p>
                        <p>Birth: <input type="Birth" name="Birth"></p>
                        <input type="submit" value="회원가입">
                </form>
				-->
        </div>
		
		
		
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
