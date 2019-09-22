<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $T);

while($T--)
{
  fscanf(STDIN, "%d\n", $n);
  
  $isPrime = isPrime($n);
  if($isPrime==1) echo "Yes\n";
  else echo "No\n";
}

function isPrime($number)
{
  if(($number==0)||($number==1)) return 0;
  for($i=2; $i<=$number/2; $i++)
  {
    if($number%$i==0) return 0;
  }
  return 1;
}