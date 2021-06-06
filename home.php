<?php
session_start();
if(!isset($_SESSION['names'])){
    ?>
    <script>
        alert("You are logged out");
    </script>
    <?php
    header('location:login.php');
}

?>    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header style="position: relative;">

    <ul class="nav justify-content-center" style=" background-color: rgba(67, 90, 88, 0.5); height: 50px; align-items: center;">
        <div class="se" style="position: absolute; left: 4px;">
            <h1>VIBES</h1>

        </div>
        <form>
            <input type="text" placeholder="Search" name="text">
            
        </form>
        <div class="home" style="position: absolute; right: 191px;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <i class="fa fa-home fa-2x" aria-hidden="true" style="color: black"></i>
                </a>
            </li>

        </div>
        <div class="mess" style="position: absolute; right: 80px;">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-commenting-o fa-2x" aria-hidden="true"
                        style="color: black;"></i></a>
            </li>

        </div>
        <div class="like" style="position: fixed; right:135px ;">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-heart fa-2x" aria-hidden="true"
                        style="color: black;"></i></a>
            </li>

        </div>


        <div class="right" style="right: 10px; position: absolute;">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"style="color: rgba(67, 90, 88, 0.5);">
                    <i class="fa fa-user-circle-o fa-2x" aria-hidden="true" style="color: black;"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                    style="background-color: rgba(67, 90, 88, 0.5);">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="logout.php" class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
        </div>
    </ul>


</header>

<body>

</body>

</html>