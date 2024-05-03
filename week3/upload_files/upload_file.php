<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Upload File</title>
  </head>
  <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      File upload:
      <br>
      <input type="file" name="file_upload" id="">
      <input type="submit" value="Upload">
    </form>
    <form action="view_files.php" method="post">
      <input type="submit" value="View Files">
    </form>
  </body>
</html>