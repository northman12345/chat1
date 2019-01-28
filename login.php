<!DOCTYPE html>
<html>
<?php

session_start();
?>
<head>
	<title>code squad</title>


<style type="text/css">

  /* unvisited link */
a:link {
    color: blue;
}

/* visited link */
a:visited {
    color: red;
}

/* mouse over link */
 a:hover {
    color: black;
}

/* selected link */
a:active {
     color: blue;
}
</style>
	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.php?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TFC5925');</script>
    <!-- End Google Tag Manager -->
    <title>Hotel Alpha - Hotel Booking php Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/bootstrap-datepicker.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/blue-light-2.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

   
</head>
<body style="background-image: url('img/facilties/facilties-2.jpg') ;">





<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5  align" align="center" >
    
            <form action="code\login.php" method="post" class="form-group space">

        <?php if(!isset($_SESSION['msg'])=='') echo $_SESSION['msg']; echo $_SESSION['msg']='';?>
               <h3>Sign into your Account</h3><br>

        <div class="">
          <input type="" name="email" class="" placeholder="Email">
        </div>
        <div class="">
          <input type="" name="password" class="" placeholder="pasword">
        </div>
        <div class="row">
          <div class="col-md-6 " align="left"><label><input type="checkbox"></label> Remember Me</div>
          <div class="col-md-6"align="right"><a href="forgetpassword.php" >  Forgot Password</a></div>

        </div>
        
        <div class="">
    

          <button class=" ">Login</button>
    
      </div>
      <div class="align2">
        <hr>
          Don't have an account ? <a href="signup.php">Register here</a>
    
      </div>
      </form>

    </div>
    <div class="col-md-3"></div>
  </div>
</div>








<div >
     


















                    <!-- Copy end right-->

<script  src="js/jquery-2.2.0.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/wow.min.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/bootstrap-datepicker.min.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->

</body>
</html>
