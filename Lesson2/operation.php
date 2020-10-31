<?php
/**
 * Функция сложения
 */
function sum($a, $b) {
  return $a + $b;
}

/*
 * Функция вычитания
 */
function subtract($a, $b) {
  return $a - $b;
}

/*
 * Функция умножения
 */
function multi($a, $b) {
  return $a * $b;
}

/*
 * Функция деления
 */
function division($a, $b) {
  return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case "+":
      return sum($arg1, $arg2);
    case "-":
      return subtract($arg1, $arg2);
    case "*":
      return multi($arg1, $arg2);
    case "/":
      return division($arg1, $arg2);
  }
}

$result = mathOperation(14, 3, "+");
echo $result;