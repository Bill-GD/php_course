<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>MVC Calculator</title>
  </head>
  <body>
    <form action="calc_controller.php" method="post">
      <h2> MVC Model - Calculator </h2>
      <table>
        <tr>
          <td>First Number</td>
          <td><input type="text" name="first_number"></td>
        </tr>
        <tr>
          <td>Second Number</td>
          <td><input type="text" name="second_number"></td>
        </tr>
        <tr>
          <td>Operation</td>
          <td>
            <select name="operation">
              <option value="add">Add</option>
              <option value="subtract">Subtract</option>
              <option value="multiply">Multiply</option>
              <option value="divide">Divide</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><input type="submit" value="Send"></td>
          <td></td>
        </tr>
      </table>
    </form>
  </body>
</html>