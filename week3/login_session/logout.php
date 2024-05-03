<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login success</title>
  </head>
  <body>
    <?php
    echo 'Welcome, ' . $_SESSION['username'];
    ?>
    <form action="login.htm" method="post">
      <input type="submit" value="Logout" name="logout">
    </form>
    <?php
    if (isset($_POST['logout'])) {
      $_SESSION['isLogin'] = false;
    }
    ?>
  </body>
</html>