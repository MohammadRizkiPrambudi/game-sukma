<?php

session_start();

include '../koneksi.php';

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = mysqli_query($koneksi, "SELECT * FROM tbl_login WHERE username_login='$username' AND password_login='$password'");
  $data = mysqli_fetch_assoc($query);
  $baris = mysqli_num_rows($query);

  if ($baris > 0) {
    $_SESSION["login_admin"] = true;
    $_SESSION["username_login"] = $data["username_login"];
    $_SESSION["foto"] = $data["foto"];
    header('Location: index.php');
    
  }else{
    echo "
    <script>
    alert('Username atau password salah');
    document.location = 'login.php'
    </script>
    ";

  }
}

?>