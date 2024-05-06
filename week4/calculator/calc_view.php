<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Result</title>
  </head>
  <body>
    <h2> Calculation using MVC </h2>
    <p> <?php
    echo "Result: " . $calc_model->first_num . " " . $op_sign[$operation] . " " . $calc_model->second_num . " = ";
    echo $calc_model->result; ?></p>
  </body>
</html>