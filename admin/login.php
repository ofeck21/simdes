<?php  
require_once 'config.php';

if (!empty($_SESSION['simdes'])) {
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <title>Login - Simdes</title>
      <link rel="stylesheet" href="css/login-style.css">
</head>
<body>

<div class="logo">Sistem Informasi Desa Jambringin</div>
<div class="login-block">
    <h1>Login</h1>
    <form method="POST" action="">
    <input type="text" placeholder="Username" id="username" name="username" />
    <input type="password" placeholder="Password" id="password" name="password" />
    <button type="submit" name="login">Submit</button>
    </form>
    <br>
    <a href="../index.php" style="text-decoration: none; color: #27ae60;">Kembali Ke Halaman Depan.</a>
</div>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
require_once 'login-proses.php';
?>