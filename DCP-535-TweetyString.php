<?php 

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d", $T);

while($T--)
{
    fscanf(STDIN, "%s", $S);
    $N = strlen($S);
    $sum=0;
    for($i=0; $i<$N; $i++)
    {
        $sum += ord($S[$i]);
    }
    
    if($sum%20===0) echo "Yes\n";
    else echo "No\n";
}