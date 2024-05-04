<?php

session_start();

if (!$_REQUEST) {
  if ($_SESSION['isLogin'] === true) {
    header('Location: logout.php');
    exit;
  }
  header('Location: login.htm');
  exit;
}

if (!isset($_REQUEST['usernameInput']) || !isset($_REQUEST['passwordInput'])) {
  header("Location: login.htm");
  exit;
}

$username = $_REQUEST['usernameInput'];
$password = $_REQUEST['passwordInput'];

$conn = mysqli_connect("localhost", "root", "AMinecraftPlayer!", "php_practice");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = 'select * from qlnv where username = "' . $username . '" and password = "';
if (isset($_REQUEST['loginWithSHA1'])) $query .= sha1($password) . '"';
else $query .= $password . '"';

$db_result = $conn->query($query)->fetch_assoc();

if ($db_result === false || $db_result === null) {
  header('Location: login.htm');
  exit;
}

$_SESSION['username'] = $username;
$_SESSION['isLogin'] = true;

header('Location: logout.php');