<?php
$conn = mysqli_connect("localhost", "root", "AMinecraftPlayer!", "php_practice");

if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}

mysqli_set_charset($conn, "utf8");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Visual Studio Code :: PHP</title>
  </head>
  <body style="background-color: lightgray">
    <form action="main.php" method="post">
      <input type="submit" value="Back">
    </form>
    <form method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
      <input type="submit" value="Login">
    </form>
    <?php

    if ($_POST && isset($_POST['username'])) {
      $query = "select * from qlnv where username = 'users'";
      $result = mysqli_query($conn, $query)->fetch_array();

      $username = $_POST['username'];
      $password = $_POST['password'];
      if ($username == $result['username'] && $password == $result['password']) {
        echo '<span style="font-family: Tahoma; color: red;">Welcome, ' . $username . '</span>';
      } else {
        echo '<span>Wrong username or password</span>';
      }
    }
    ?>
  </body>
</html>