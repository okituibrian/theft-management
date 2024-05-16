
    <!-- admin_registration.html -->
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h2>Admin Registration</h2>
      <form id="adminRegistrationForm" method="post" action="register_admin.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </body>
</html>
