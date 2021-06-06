<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>
	<link rel="stylesheet" href="log.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  
</head>
<body>
	<?php
	include "connection.php";
	if(isset($_POST['submitt'])){
		$ema=$_POST['email'];
		$pas=$_POST['pass'];
		$esearch="select * from login where EMAIL='$ema' ";
		$quer=mysqli_query($con,$esearch);
		$co=mysqli_num_rows($quer);
		if($co){
			$empass=mysqli_fetch_assoc($quer);
			$dbpass=$empass['PASSWORD'];
			$_SESSION['names']=$empass['NAME'];
			$dec=password_verify($pas, $dbpass);
			if($dec){
				?>
				<script>
					alert("login successful");
					location.replace("home.php");
				</script>
				<?php
			}else{
				?>
				<script>
					alert("login unsuccessful");
				</script>
			    <?php
			}
		}else{
			?>
			<script>
				alert("Invalid E-mail");
			</script>
			   <?php
		}

	}
	?>
	<div class="containe">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		<div class="formgroup">
        <i class="fa fa-envelope fa-2x" aria-hidden="true" id="ico"></i>
        <input type="email" class="emailc" id="email" name="email" placeholder="E-mail address" required>
      </div>
		<div class="formgroup">
        <i class="fa fa-key fa-2x" aria-hidden="true" id="icon"></i>
        <input type="password" class="passc" id="pwd" name="pass" placeholder="password" required>
      </div>
      <div class="formgrou">
        <input type="submit" name="submitt" value="Login" id="but">
      </div>
     </form>
	

     <div class="logi">
      <b>Not have an account? </b><a href="signup.php" style="color:red;"> Sign up here </a>
     </div>
   </div>


</body>
</html>