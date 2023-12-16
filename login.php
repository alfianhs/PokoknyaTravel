<?php
require('koneksi.php');
if (isset($_SESSION['username'])) {
    header('location:detaillogin.php');
}
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, md5($_POST['password']));
    setcookie('username', $username, time() + 300);
    setcookie('password', $password, time() + 300);
    session_start();
    $_SESSION['username'] = $username;
if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    echo "<script>
            document.getElementById('username').value = '$username'
            document.getElementById('password').value = '$password'
          </script>";
      }


    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: detaillogin.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="login.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->


</head>
<body>

<main id="main">
  <section id="services" class="services">
    <div class="wrapper fadeInDown zero-raduis">
          <div id="formContent">


            <div class="fadeIn first">
              <h2 class="my-5">Log In</h2>
            </div>

            <form method="POST">
                <input type="text" class="fadeIn second zero-raduis" name="username" placeholder="Username">
                <input type="password" id="password" class="fadeIn third zero-raduis" name="password" placeholder="Password">
                <input type="submit" class="fadeIn fourth zero-raduis" value="login" name="submit">
                <h2>You don't have an account ?</h2>
                <a href="register.php"><input type="button" class="fadeIn fourth zero-raduis pc" value="register"></a>
            </form>
            

          </div>
      </div>
  </section>
</main>

</body>
</html>