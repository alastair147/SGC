<!DOCTYPE html>
<?php
require('assets/steamauth/steamauth.php');
?>
<html lang="en">
<head>
    <title>SGC Logistics Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../public/assets/img/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/main.css">
    <!--===============================================================================================-->

</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('../../public/assets/img/bg.png');">
        <div class="wrap-login100">
<span class="login100-form-logo">
						<i class="zmdi zmdi-truck"></i>
					</span>

            <span class="login100-form-title p-b-34 p-t-27">
						Log in
                </span>

            <?php
            if(!isset($_SESSION['steamid'])) {

                echo "<br><br> <div class='text-center'>";
                loginbutton(); //login button
                echo "</div>";

            }  else {
                include('assets/steamauth/userInfo.php');

                //Protected content
                echo "<br><br> <div class='text-center'>";
                echo "Welcome back " . $steamprofile['personaname'] . "</br>";
                echo "Click your photo to login to the hub! </br>" . '<a href=\'index.php\'> <img src="'.$steamprofile['avatarfull'].'" title="" alt="" /></a><br>'; // Display their avatar!

                logoutbutton();
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../../public/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/bootstrap/js/popper.js"></script>
<script src="../../public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/daterangepicker/moment.min.js"></script>
<script src="../../public/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../../public/assets/js/main.js"></script>

</body>
</html>