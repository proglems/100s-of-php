<?php 

$r = readline();
for($i=0; $i<$r; $i++){
  $str = readline();
  
  $start = 0;
  $end = strlen($str)-1;

  echo reverseSimpleString($str, $start, $end) . PHP_EOL;
}

function reverseSimpleString($str, $start, $end) {
  while ($start < $end) {
    $_temp = $str[$start];
    $str[$start] = $str[$end];
    $str[$end] = $_temp;
    $start++;
    $end--;
  }
  return $str;
}