<?php 

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $T);

for($i=0; $i<$T; $i++){
  fscanf(STDIN, "%s\n", $str);
  $str = strtolower($str);
  $strRev = strrev($str);
  if(strcmp($str, $strRev) === 0)
    echo "Yes\n";
  else 
    echo "No\n"; 
}