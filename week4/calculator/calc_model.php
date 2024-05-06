<?php

class CalcModel {
  public string $result;
  public string $first_num;
  public string $second_num;

  function __construct(string $first_num, string $second_num) {
    $this->first_num = $first_num;
    $this->second_num = $second_num;
  }

  public function calculate(string $operation): void {
    switch ($operation) {
      case "add":
        $this->result = $this->first_num + $this->second_num;
        break;
      case "subtract":
        $this->result = $this->first_num - $this->second_num;
        break;
      case "multiply":
        $this->result = $this->first_num * $this->second_num;
        break;
      case "divide":
        $this->result = $this->first_num / $this->second_num;
        break;
      default:
        $this->result = "Invalid request: invalid operator";
        exit;
    }
  }
}