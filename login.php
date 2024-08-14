<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Password Encryption & Verification | Canon Code </title> 
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Login | Sign in</h2>
    <form action="login_processor.php" method="POST" enctype="multipart/form-data">
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit_btn" value="Login Now">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="#">Register now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>