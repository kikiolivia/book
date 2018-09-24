<?php

session_start();
if (isset($_SESSION["admin_username"])) header("location: index.php");
include 'koneksi.php';

if (isset($_POST['submit'])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $login = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");

  if(mysqli_num_rows($login)>0) {
    $row_admin = mysqli_fetch_array($login);
    $_SESSION['admin_id'] = $row_admin["id"];
    $_SESSION['admin_username'] = $row_admin["username"];
    header("location: admin.php");
  } else {
      header("location: login.php");
  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="file/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="file/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST">
      <img class="mb-4" src="img/logo.png" alt="" width="92" height="92">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="name" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input class="btn btn-lg btn-dark btn-block" type="submit" name="submit">Sign in</input>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>