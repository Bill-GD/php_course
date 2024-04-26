<?php
include "../global/database.php";
function getUser(string $name = ''): array {
  global $conn;

  $query = "select * from qlnv";
  if (!empty($name)) {
    $query .= " where username like '%$name%'";
  }

  $result = mysqli_query($conn, $query);

  if ($result) {
    $result = $result->fetch_all(MYSQLI_ASSOC);
  }

  return $result;
}

include "../global/back_button.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Account</title>
  </head>
  <body>
    <form method="post">
      <label for="name">Search Users</label>
      <input type="text" name="name" id="name">
      <input type="submit" value="Search">
    </form>
    <?php
    if ($_POST && $_POST['name']) {
      $users = getUser($_POST['name']);
      if (count($users) <= 0)
        echo 'No user found';

      foreach ($users as $user) {
        echo $user['username'] . "<br>";
      }
    }
    ?>
  </body>
</html>