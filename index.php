<?php

if (file_exists(__DIR__."/vendor/autoload.php")) {
    require __DIR__."/vendor/autoload.php";
}

use Osipov\Log;
use Osipov\QuadraticSolve;
use Osipov\MyException;

$eq=new QuadraticSolve();

$a=0;
$b=0;
$c=0;

try {
    function checkdata($num,$letter)
    {
        $pattern = '#^[0-9]*[.]?[0-9]+$#';
        for (;;) {
            $num=readline("Enter $letter=");
            echo "\n";
            if(preg_match($pattern,$num))
            {
                return $num;
            }
            else {
                echo "Inappropriate symbols. Can only type numbers and dot\n";
            }
        }
        return $num;
    }

    $a=checkdata($a,'a');
    $b=checkdata($b,'b');
    $c=checkdata($c,'c');

    $eq->solve($a,$b,$c);
} catch (MyException $e) {
    Log::log("Error: ".$e->getMessage());
}

Log::write();