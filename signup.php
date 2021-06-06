<?php
session_start();


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="stylee.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>VIBES-CHECK</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</head>

<body style="background-image: url(image.jpg);">
  <?php
  include 'connection.php';
  if(isset($_POST['submit'])){
    $na= mysqli_real_escape_string($con,$_POST['name']);
    $em= mysqli_real_escape_string($con,$_POST['email']);
    $mob= mysqli_real_escape_string($con,$_POST['number']);
    $pass= mysqli_real_escape_string($con,$_POST['pass']);
    $passc= mysqli_real_escape_string($con,$_POST['passc']);

    $pa = password_hash($pass, PASSWORD_BCRYPT);
    $pac = password_hash($passc, PASSWORD_BCRYPT);
    $emquery = " select * from login where EMAIL='$em' ";
    $quer = mysqli_query($con,$emquery);
    $emco = mysqli_num_rows($quer);
    if($emco>0){
      ?>
      <script>
        alert("e-mail already exist");
      </script>
      <?php
    }else{
      if($pass===$passc){
        $insertquery = "insert into login(NAME ,EMAIL ,NUMBER ,PASSWORD ,CPASSWORD) values('$na','$em','$mob','$pa','$pac')";
        $iquery = mysqli_query($con,$insertquery);
        if($iquery){
         ?>
        <script>
          alert("inserted");
        </script>
          <?php
        }else{
          ?>
          <script>
            alert("not inserted");
          </script>
          <?php
        }
      }else{
        ?>
        <script>
          alert("password not matching");
        </script>
        <?php
      }
    }
  }
  ?>
  <div class="container">
    <!-- <h2><b>VIBEZ</b></MEET-BOOK></h2> -->


    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
      <div class="formgroup">
        <i class="fa fa-user-circle fa-2x" aria-hidden="true" id="ic"></i>
        <input type="text" class="names" id="name" name="name" placeholder="Full name" required>
        </input>
      </div>
      <div class="formgroup">
        <i class="fa fa-envelope fa-2x" aria-hidden="true" id="ico"></i>
        <input type="email" class="emailc" id="email" name="email" placeholder="E-mail address" required>
      </div>
      <div class="formgroup">
        <i class="fa fa-mobile fa-2x" aria-hidden="true" id="icc"></i>
        <input type="tel" class="no" id="num" name="number" placeholder="Phone number" required>
      </div>
      <div class="formgroup">
        <i class="fa fa-key fa-2x" aria-hidden="true" id="icon"></i>
        <input type="password" class="passc" id="pwd" name="pass" placeholder="Create password" required>
      </div>
      <div class="formgroup">
        <i class="fa fa-key fa-2x" aria-hidden="true" id="icon"></i>
        <input type="password" class="passc" id="pwd" name="passc" placeholder="Confirm password" required>
      </div>
      <div class="formgrou">
        <input type="submit" name="submit" value="Create account" id="but">
      </div>

    </form>
    <div class="logi">
      <b>Have an account? </b><a href="login.php" style="color:red;"> Log in </a>
    </div>


    
  </div>

</body>

</html> -->