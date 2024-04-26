<?php
include "../global/back_button.php";

$conn = mysqli_connect("localhost", "root", "AMinecraftPlayer!", "pka_s");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Result</title>
  </head>
  <body>
    <?php
    $query = "select st.StudentID, st.StudentName, co.Term, c.CourseName from courseoffer as co, student as st, course as c where co.StudentID = st.StudentID and co.CourseID = c.CourseID;";
    $result = mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC);

    foreach ($result as $row) {
      echo $row['StudentID'] . " " . $row['StudentName'] . " " . $row['Term'] . " " . $row['CourseName'] . "<br>";
    }
    ?>
  </body>
</html>