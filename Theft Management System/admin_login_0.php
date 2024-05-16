
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Discorps Theft Solutions | Student Registration</title>
      <!--    Start of connection to bootstrap js-->
      <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
      <script src="assets/bootstrap/js/popper.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
      <!--    End of connection bootstrap js-->

      <!--    start of connection to bootstrap css-->
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
      <style>
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

    .nav-link{
    text-decoration: #57ffee;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  </head>
  <body>
    <br><br>
      <div class="row">
      <div class="col-md-4"></div>
       <div class="col-md-4 bg-dark rounded">
        <div class="container rounded">
            <form class="form-login hover" method="post" action="admin2.php">
                  <a href="index.php"><img class="rounded-circle" src="Images/img6.jpg" alt="Logo" style="height: 80px;width: 80px;margin-left: 40%;"></a>
                <h4 class="form-login-heading h4 text-center glow" style="color: #fff;"><b>Admin Login</b></h4>
              <p style="padding-left: 1%; color: green">
              </p>
              <div class="login-wrap">
                <label  class="text-white" for="">Username:</label>
                  <input type="email" class="form-control" placeholder="Student Email" 
                  id="email" onBlur="userAvailability()" name="username" required="required">
                   <span id="user-availability-status1" style="font-size:12px;"></span>
                  <br>
                  <label  class="text-white" for="">Password:</label>
                  <input type="password" class="form-control" placeholder="Student Password"
                   required="required" name="password">
                   <br>
                   <button class="btn btn-theme btn-block form-control btn-primary rounded"  type="submit"
                           id="submit"><i class="fa fa-user"></i>Login</button>
                </div>
                <br>
                <br>
                  <button class="btn btn-block bg-warning"><a href="index.php">Back Home</a></button>
                  <br>
                  <br>
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
	  	
  </body>
</html>