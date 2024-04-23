<?php
// require_once "./week1_extra.php";

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

function sanitizeText(string $text): string {
  while (str_contains($text, "  ")) {
    $text = str_replace("  ", " ", $text);
  }
  return trim($text);
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
    <form method="post">
      Sanitize Text <input type="text" name="rawText">
      <input type="submit">
    </form>
    <?php
    if (isset($_POST) && isset($_POST["rawText"])) {
      echo "Original text (len=" . strlen($_POST['rawText']) . "): <pre>" . $_POST['rawText'] . "</pre> <br>";
      $newStr = sanitizeText($_POST['rawText']);
      echo "Sanitized text (len=" . strlen($newStr) . "): $newStr<br>";
    }
    ?>
  </body>
</html>