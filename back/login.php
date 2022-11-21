<?php

include './backend/koneksi.php';
session_start();

if (isset($_SESSION['username'])) {
  header("Location: /backend/index.php");
}

error_reporting(0);

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM user WHERE email='$username' AND password='$password'";
  $result = mysqli_query($db, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['email'];
    $_SESSION['nama'] = $row['nama'];
    header("Location: /backend/index.php");
  } else {
    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Padang | Login</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <form action="" method="POST">
    <h3>Login</h3>

    <label for="username">Username</label>
    <input type="text" placeholder="Username" name="username" required />

    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" required />
    <button name="submit">Login</button>
    <?php if (isset($_SESSION['error'])) {
      echo "<div class='error'>" . $_SESSION['error'] . "</div>";
    } ?>
  </form>
</body>

</html>