<?php
namespace Osipov;
class LinearSolve 
{
	function solvel($a,$b)
	{
		if ($a==0) 
		{
			throw new MyException("Equation does not exist", 1);
		}
		$x=(-1*$b)/$a;
		$this->x=$x;
        Log::log("Linear equation ({$a}x+{$b}) root: {$x}");
		return $x;
	}
}