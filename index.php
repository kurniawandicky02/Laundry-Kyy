<?php
session_start();
$conn = mysqli_connect('localhost','root', '', 'laundry');
?>
<! DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/laun.png" sizes="16x16 32x32" type="image/png">
<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    
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
<!--===============================================================================================--></head>
<body>
	<form action="" method="post">
    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/p.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41" style="color:aqua; text-shadow:0 0 4px deeppink,
              0 0 4px deeppink,
              0 0 8px deeppink,
              0 0 8px deeppink,
              0 0 40px deeppink,
              0 0 40px deeppink,
              0 0 40px deeppink,
              0 0 80px rgba(105, 243, 87, 0.65),
              0 0 80px rgba(105, 243, 87, 0.65);">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input 
                        name="user"
                        type="text"
                        class="input100"   placeholder="Username" >
						<span class="focus-input100"  data-placeholder=""><i class='fa fa-users' style="color: blue; position: relative; top:45px; left:30px; width:25px;"></i></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input 
                        name="pass" 
                        type="password"
                        class="input100"  placeholder="Password">
						<span class="focus-input100" data-placeholder=""><i class="fa-solid fa-user-lock" style="color: blue; position: relative; top:45px; left:30px; width:25px;"></i></span>
					</div>

					<div class="container-login100-form-btn m-t-32" style="position:relative; right:90px;">
						<button class="login100-form-btn" type="submit" name="login" value="LOGIN" style="color:aqua; font-size:17px;">
                        Login
						</button>
                        
					</div>
                    <div class="container-login100-form-btn m-t-32" style="position:relative; left:90px; top:-73px; ">
						<button class="login100-form-btn"><a href="daftar.php" style="color:aqua; font-size:17px;"> 
                       Daftar
						</button>
                        
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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
<?php
if (isset($_POST['login'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$data_user = mysqli_query($conn, "SELECT * FROM login WHERE username = '$user' AND password = '$pass'");
    $r = mysqli_fetch_array($data_user);

	$username = $r['username'];
	$password = $r['password'];
	$level = $r['level'];
	if($user == $username && $pass == $password){
		$_SESSION['level'] = $level;
		 $_SESSION['nama'] = $r['nama'];

    echo "

    <script>alert('Login Berhasil');
    window.location='menu.php'</script>";

	}else{
		Echo "<script language='javascript'>alert('login Gagal !');window.location='login.php'</script>";


}
}
?>
</body>
</html>
