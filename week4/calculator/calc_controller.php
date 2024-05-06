<?php

include_once 'calc_model.php';

if (!$_REQUEST) {
  header('Location: calc_main.php');
  exit;
}

if (!isset($_REQUEST['first_number']) || !isset($_REQUEST['second_number'])) {
  echo 'Invalid request: missing a number';
  exit;
}

$first_num = $_REQUEST['first_number'];
$second_num = $_REQUEST['second_number'];

if (!is_numeric($first_num) || !is_numeric($second_num)) {
  echo 'Invalid request: numbers must be numeric';
  exit;
}

if (!isset($_REQUEST['operation'])) {
  echo 'Invalid request: missing operator';
  exit;
}

$operation = $_REQUEST['operation'];

$op_sign = array('add' => '+', 'subtract' => '-', 'multiply' => '*', 'divide' => '/');

$calc_model = new CalcModel($first_num, $second_num);
$calc_model->calculate($operation);

include_once 'calc_view.php';