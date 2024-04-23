<?php
function showIntList() {
  for ($i = 0; $i < 200; $i++) {
    echo $i + 1 . " ";
  }
}

function showIntListWithColors() {
  for ($i = 0; $i < 200; $i++) {
    $style = ($i % 2 != 0) ? "font-weight: bold; color: red;" : "font-style: italic; color: blue;";
    echo "<font style='" . $style . "'>" . ($i + 1) . "</font> ";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Visual Studio Code :: PHP</title>
  </head>
  <body style="background-color: lightgray">
    <form method="post">
      Printing numbers from 1 to 200
      <button type="submit" name="normal">Print</button>

      <br>

      Printing numbers from 1 to 200 (even: bold red, odd: italic blue)
      <button type="submit" name="styled">Print</button>

    </form>
    <?php
    if (isset($_POST["normal"])) {
      showIntList();
    }
    if (isset($_POST["styled"])) {
      showIntListWithColors();
    }
    ?>
    <form action="sanitize_text.php" method="post">
      Sanitize Text <input type="text" name="rawText">
      <input type="submit">
    </form>
    <form action="login_form.php" method="post">
      <input type="submit" value="Login">
    </form>
  </body>
</html>