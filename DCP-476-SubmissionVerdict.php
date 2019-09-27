<?php 

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $T);

while($T--)
{
    fscanf(STDIN, "%s", $str);
    if($str=="ac")
    {
        echo "Accepted\n";
    }
    elseif($str=="wa")
    {
        echo "Wrong Answer\n";
    }
    elseif($str=="rte")
    {
        echo "Run Time Error\n";
    }
    elseif($str=="tle")
    {
        echo "Time Limit Exceeded\n";
    }
}