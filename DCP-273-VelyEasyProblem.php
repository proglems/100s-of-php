<?php 

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d", $T);

while($T--)
{
    fscanf(STDIN, "%s", $str);
    $strLength=strlen($str);
    $result=false;
    for($i=0; $i<$strLength; $i++)
    {
        if($str[$i]=='r')
        {
            $result = true;
        }
    }
    if($result==true)
    {
        echo "Not vely easy\n";
    } 
    else
    {
        echo "Vely easy\n";
    }
}