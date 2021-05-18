<?php 

// connect to database
$dsn='mysql:host=localhost;dbname=dreamnmotion';
$user='root';
$pass='';
try{
    $con = new PDO ($dsn,$user,$pass);
    
}catch(PDOException $e){
    echo " connect database";
   
}  
// exemple de véification;
//$q="ALTER TABLE admin drop id1";
//$con->exec($q);
// methode POST  
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST ['user'];
    $password=$_POST['pass'];
    //echo $hashedpass;
     $stmt=$con->prepare("SELECT*FROM admin WHERE username='$username' AND Password='$password'");
    $stmt->execute(array($username,$password));
    $count=$stmt->rowCount();
    //echo $count;
  
    if($count>0){
               header('location:location.php'); 
               exit();     
    } 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login DREAMNMOTION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/image.png" alt="IMG">
				</div>

				<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>
                     
					<div class="wrap-input100 validate-input" data-validate = "Valid username is required">
						<input class="input100" type="text" name="user" placeholder="username" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" autocomplete="new-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Login">
					</div>
                    
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>