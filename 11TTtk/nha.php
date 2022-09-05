<?php
$msg = 'codegym';
for($x = 4; $x < strlen($msg) + 1; $x++)
{
    if(strlen($msg) == 3)
    {
        for ( $i = 2; $i < 7; $i++)
        {
            echo $i;
        }
    }
    else
    {
        for ($i = strlen($msg);  $i > (strlen($msg) - 3); $i--)
        {
            echo $i;
        }
    }
}