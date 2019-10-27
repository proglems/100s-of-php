<?php 

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testCases);

for($i=0; $i<$testCases; $i++) {
  fscanf(STDIN, "%s\n", $name);

  switch($name){
    case 'Quill':
      echo "I am going to ask you this one time, where is Gamora?\n"; 
      break;
    case 'Stark':
      echo "I will do you one better, who is Gamora?\n";
      break;
    case 'Drax':
      echo "I will do you one better, why is Gamora?\n";
      break;
    default:
      echo "What is Gamora?\n";
  }
}