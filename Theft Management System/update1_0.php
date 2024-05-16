<?php
//check if the update link has been clicked
if(isset($_GET["id"])){
    //start receiving the data from the link
    $receiveName=$_GET["name"];
    $receiveEmail=$_GET["email"];
    $receiveRegNo=$_GET["number"];
    $receivePassword=$_GET["password"];
    $receivePhone=$_GET["phone"];

}else{
    //redirect the user back to user.php for them to click on the update link
    header("location:update1.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discorps Theft Solutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    a:hover {
  color: blueviolet;
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
     
     <!--    Start of connection to bootstrap js-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!--    End of connection bootstrap js-->

    <!--    start of connection to bootstrap css-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
    <!--    End of connection to bootstrap css-->

    <!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->

</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand glow" href="index.php" style="margin-bottom: 5px;color: #000;">

        <img class="rounded-circle" src="Images/img6.jpg" alt="Logo" 
        style="height: 60px;width: 60px;margin-left: 4px;">
        <b>Discorps Theft Solutions</b></a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="Report.php" style="margin-left:50px;text-align: center;margin-top: 
            20px;color: #fff;"><h6><b>Update Report</b></h6></a>
          </li>   
    
      <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link" href="#" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #fff;"><h6><b>Update Registered Users</b></h6></a>
          </li>  
    </li>
      <li class="nav-item">
            <a class="nav-link" href="Login.php" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #fff;"><h6><b>Resolved Theft Cases </b></h6></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="index.php" style="margin-left:50px;text-align: 
            center;margin-top: 20px;color: #fff;"><h6><b>Sign Out</b></h6></a>
          </li>
    </ul> 
    </div>
  </div>
</nav>
<br>
<h1 class="text-info text-center h1 text-warning">Registered Users</h1>
<hr>

<br><br>
      <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
        <div class="container rounded" style="background-color: rgba(87, 157, 179, 0.185);border:1px solid #57ffee;">
            <form class="form-login hover" method="POST" action="Registration1.php">
                                <a href="index.php"><img class="rounded-circle" 
                                src="Images/img6.jpg" alt="Logo" style="height: 80px;width: 80px;margin-left: 40%;"></a>
                <h6 class="form-login-heading h4 text-center glow" style="color: #000;"><b>Student Registration Form</b></h6>
              <p style="padding-left: 1%; color: green">
              </p>
              <br>
              <div class="login-wrap">
               <input value="<?php echo $receiveName;?>" type="text" class="form-control" placeholder="Student Full Name" name="name" required="required" autofocus>
                  <br>
                  <input value="<?php echo $receiveEmail;?>" type="email" class="form-control" placeholder="Student Email" id="email"
                         onBlur="userAvailability()" name="email" required="required">
                   <span id="user-availability-status1" style="font-size:12px;"></span>
                  <br>
                  <input value="<?php echo $receiveRegNo;?>" type="name" class="form-control" placeholder="Student Registration Number" id="number"
                         onBlur="userAvailability()" name="number" required="required">
                   <span id="user-availability-status1" style="font-size:12px;"></span>
                  <br>
                  <input value="<?php echo $receivePassword;?>" type="password" class="form-control" placeholder="Student Password"
                         required="required" name="password"><br >
                   <input value="<?php echo $receivePhone;?>"type="number" class="form-control" name="phone" 
                   placeholder="Student Phone Number" required="required">
                  <br>
                  
                  <button class="btn btn-theme btn-block form-control btn-success rounded"  type="submit"
                          name="btn_Add" id="submit"><i class="fa fa-user"></i> Update User</button>
                  <br>
                  <div class="text-primary text-sm-right " style="margin-right: 30px">
                      Already Registered?<a href="Login.php"> Sign in
                      </a>
                  </div>
                </div>
            </form>	  	
        </div>
    </div>
  <script>
      $.backstretch("assets/img/login-bg.jpg", {speed: 500});
  </script>
       </div>
       <div class="col-md-4"></div>
      </div>  
  </div>
  <div class="footer text-center bg-dark">
    <div class="container">
        <b class="copyright" style="color: #fff;">&copy; 2023 Brought To You By Puea Computer Science Student</b> All rights reserved.
    </div>
</div>	
  </body>
</html>



