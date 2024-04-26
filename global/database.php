<?php
$conn = mysqli_connect("localhost", "root", "AMinecraftPlayer!", "php_practice");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}