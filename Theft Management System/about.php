<?php
//check if the update link has been clicked
if(isset($_GET["id"])){
    //start receiving the data from the link
    $receiveName = $_GET["name"];
    $receiveRegNo = $_GET["reg"];
    $receivePhone= $_GET["phone"];
    $receiveEmail = $_GET["email"];
    $receiveGender = $_GET["gender"];
    $receiveDate = $_GET["date"];
    $receiveCategory= $_GET["cate"];
    $receiveMissing= $_GET["missing"];

}else{
    //redirect the user back to user.php for them to click on the update link
    header("location:Theft Reported.php");
}
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Discorps Theft Solutions</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 
<style>
    a:hover {
  color: blueviolet;
}
body {
      background-color: black;
      font-family: sans-serif Verdana, Geneva, Tahoma, sans-serif;
    }
    .glow {
      font-size: 20px;
      color: #fff;
      text-align: center;
      animation: glow 1s ease-in-out infinite alternate;
    }
    @-webkit-keyframes glow {
      from {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
      }
      to {
        text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
      }
    }
    </style>

<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->

<link rel="stylesheet" href="fonts">

<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />

<link rel="stylesheet" href="assets/bootstrap/css/custom.css">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="bg-secondary">
<!-- banner -->


<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
  <div class="container-fluid">
    <a class="navbar-brand glow" href="Report.php" style="margin-bottom: 20px;color: #000;">

        <img class="rounded-circle" src="Images/img6.jpg" alt="Logo" 
        style="height: 60px;width: 60px;margin-left: 4px;margin-bottom:-30px">

        <h5 style="margin-left: 70px;margin-bottom:80px"><b>Discorps Theft Solutions</b></h5>
	</a>	
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav" style="margin-top: 4em;margin-left:2em">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Home</b></h6></a>
          </li>
      <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>About</b></h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Gallery</b></h6></a>
          </li> 
          <li class="nav-item">
        <a class="nav-link" href="#" style="text-align: center;">
          <i class="material-icons glow">notifications_active</i></a>
        </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="index.php" style="margin-left:50px;text-align: 
            center;color: #fff;"><h6><b>Sign Out</b></h6></a>
          </li>     
    </ul> 
    </div>
  </div>
  </nav>
<br>
   
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<div class="spinner-border text-muted text-center"></div>
<div class="spinner-border text-primary"></div>
<div class="spinner-border text-success"></div>
<div class="spinner-border text-info"></div>
<div class="spinner-border text-warning"></div>
<div class="spinner-border text-danger"></div>
<div class="spinner-border text-info"></div>
<div class="spinner-border text-dark"></div>
<div class="spinner-border text-light"></div>
        </div>
        <div class="col-md-4"></div>
    </div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    <div class="header-w3l">
				<h3 class="text-danger"></h3>
				<h4>Update Lost And Found Items Form</h4>
				<form action="alert.php" method="POST" class="mod2 bg-dark rounded">
					<div class="col-md-6 col-xs-6 w3l-left-mk">
            <br>
						<ul>
							<li class="text text-white">Name:  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
              <input  value="<?php echo $receiveName;?>" name="name" type="text" required=""></li>
							<li class="text text-white">Registration  Number:  </li>
							<li class="agileits-main"><i class="fa fa-user" aria-hidden="true"></i>
              <input  value="<?php echo $receiveRegNo;?>" class="date" id="datepicker" name="reg" type="text" value="" required="" /></li>
							<li class="text text-white">Phone Number :  </li>
							<li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i>
              <input   value="<?php echo $receiveName;?>" name="phone" type="text" required=""></li>
              <li class="text text-white">Email:  </li>
              <br>
							<li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i>
              <input  value="<?php echo $receiveEmail;?>" name="email" type="text" required=""></li>
              
            </ul>
					</div>
					<div class="col-md-6 col-xs-6 w3l-right-mk">
            <br>
						<ul>
            <li class="text text-white">Gender  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
              <input  value="<?php echo $receiveGender;?>" name="gender" type="text" required=""></li>
						    
              <li class="text text-white">Date of Submission :  </li>
							<li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true">

                                </i><input  value="<?php echo $receiveDate;?>" class="date" id="datepicker" name="date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" /></li>
							<li class="text text-white">Your Category  :  </li>
              <li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i>
              <input  value="<?php echo $receiveCategory;?>"name="cate" type="text" required=""></li>
							  <li class="text text-white"style="margin-left: 1em;" >What are you missing in details?  :  </li>
							<li class="agileits-main"style="margin-left: 1em;margin-right: 1em;"><i class="fa fa-lock" aria-hidden="true"></i><input
               name="missing" type="text" required=""></li>
						</ul>
          </div>
					<div class="clearfix"></div>
					<div class="agile-submit rounded">
						<input name="btn_Add" type="submit" value="submit">
					</div>
          <br>
				</form>
        <br><br>
    </div>
    <div class="col-md-3"></div>
</div>
<br><br>
<div class="footer text-center bg-dark">
    <div class="container">
      <br>
        <b class="copyright" style="color: #fff;">&copy; 2023 Brought To You By Puea Computer Science Students</b> All rights reserved.
   
      </div> 
      <br>
</div>
</body>
</html>