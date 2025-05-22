<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="../styles/_loginModal.css">
</head>
<body>
  <div class="login-container">
    <h3 class="login-title"><center>Login As Admin<center></h3>
    <form action="_handleLogin.php" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <div class="form-text">We'll never share your password with anyone else.</div>
      </div>
      <button type="submit" class="btn btn-primary btn-login" name="submit">Login</button>
    </form>
  </div>
</body>
</html>