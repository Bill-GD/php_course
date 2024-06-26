<?php
include "../global/back_button.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Normalize text</title>
  </head>
  <body>
    <?php
    function sanitizeText(string $text): string {
      while (str_contains($text, "  ")) {
        $text = str_replace("  ", " ", $text);
      }
      return trim($text);
    }

    if (isset($_POST) && isset($_POST["rawText"])) {
      echo "Original text (len=" . strlen($_POST['rawText']) . "): <pre>" . $_POST['rawText'] . "</pre> <br>";
      $newStr = sanitizeText($_POST['rawText']);
      echo "Normalized text (len=" . strlen($newStr) . "): $newStr<br>";
    }
    ?>
  </body>
</html>