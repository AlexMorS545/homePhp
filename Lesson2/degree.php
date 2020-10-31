<?php
function power($val, $pow) {
  if($pow == 1) {
    return $val;
  } elseif ($pow == 0){
    return $val = 1;
  } else {
    return $val * power($val, $pow - 1);
  }
}
echo power(2, 0);