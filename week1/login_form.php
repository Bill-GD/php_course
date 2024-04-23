<?php
function checkLoginInfo(string $username, string $password): bool {
  return $username === 'admin' && $password === '12345';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
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
    if ($_POST && $_POST['username']) {
      if (checkLoginInfo($_POST['username'], $_POST['password'])) {
        echo '<span style="font-family: Tahoma; color: red;">Welcome, ' . $_POST['username'] . '</span>';
      } else {
        echo 'Username or password is incorrect';
      }
    }
    ?>
  </body>
</html>