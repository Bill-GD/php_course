<?php

$dir = 'upload/';

if ($_FILES['file_upload']['name'] === '') {
  echo "Please select a file to upload";
  exit;
}

$uploaded_file = $dir . $_FILES['file_upload']['name'];

if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $uploaded_file)) {
  echo "File uploaded successfully";
} else {
  echo "Error uploading file";
  echo "Error: " . $_FILES['file_upload']['error'];
}