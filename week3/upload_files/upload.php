<?php

$dir = 'upload/';

if ($_FILES['file_upload']['name'] === '') {
  echo "Please select a file to upload";
  exit;
}

$total_size = $_FILES['file_upload']['size'];
if ($total_size > 2097152) {
  echo "File size is over limit";
  exit;
}

$ext = pathinfo($_FILES['file_upload']['name'], PATHINFO_EXTENSION);

$uploaded_file_path = '21011405_' . substr(bin2hex(sha1($_FILES['file_upload']['name'], true)), 0, 7) . '.' . $ext;

if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $dir . $uploaded_file_path)) {
  echo "File uploaded successfully as " . $uploaded_file_path;
} else {
  echo "Error uploading file";
  echo "Error: " . $_FILES['file_upload']['error'];
}