<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: detaillogin.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi akun berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Maaf. Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Maaf. Username Sudah Terdaftar. Harap ganti username anda.')</script>";
        }
         
    } else {
        echo "<script>alert('Kedua Password Tidak Sesuai. Harap isikan dengan benar.')</script>";
    }
}
 
?>

<script src="jquery.js"></script>
	<script>
	$(document).ready(function(){
		$('#username').blur(function(){
			$('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
			var username = $(this).val();

			$.ajax({
				type	: 'POST',
				url 	: 'ajaxregis.php',
				data 	: 'username='+username,
				success	: function(data){
					$('#pesan').html(data);
				}
			})

		});
	});
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="login.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->


</head>
<body>

<section id="services" class="services">
<div class="wrapper fadeInDown zero-raduis">
  	  <div id="formContent">
  	    <!-- Tabs Titles -->

  	    <!-- Icon -->
  	    <div class="fadeIn first">
  	      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
  	      <h2 class="my-5">REGISTER</h2>
  	    </div>

  	    <!-- Login Form -->
  	    <form method="POST">
            <input type="text" id="username" class="fadeIn second zero-raduis" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
            <span id="pesan"></span>
            <input type="password" id="password" class="fadeIn third zero-raduis" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
            <input type="password" id="cpassword" class="fadeIn third zero-raduis" name="cpassword" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
            <input type="submit" class="fadeIn fourth zero-raduis" value="register" name="submit">
            <h2>Sudah Mempunyai Akun?</h2>
            <a href="login.php"><input type="button" class="fadeIn fourth zero-raduis pc" value="log in"></a>
  	    </form>
  	    

  	  </div>
  </div>

</body>
</html>