<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?=base_url("assets/certificate/")?>images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url("assets/certificate/")?>css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('<?=base_url("assets/certificate/")?>images/bg-01.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Hestia'19 Certificate
					</span>
                <span class="p-b-53">
						<h3>Participant : <?=$record->fullname?></h3><br>
<h3>Event : <?=$record->title?></h3>
					</span>










            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="<?=base_url("assets/certificate/")?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url("assets/certificate/")?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url("assets/certificate/")?>vendor/bootstrap/js/popper.js"></script>
<script src="<?=base_url("assets/certificate/")?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url("assets/certificate/")?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url("assets/certificate/")?>vendor/daterangepicker/moment.min.js"></script>
<script src="<?=base_url("assets/certificate/")?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url("assets/certificate/")?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url("assets/certificate/")?>js/main.js"></script>

</body>
</html>