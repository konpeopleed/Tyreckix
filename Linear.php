<?php
namespace Tyreckix;
class Linear
{
	protected $x;
	function linear($a, $b)
	{
        Log::log("Equation: $a*x + $b = 0");
		if ($a != 0) 
		{
			$x = -1*$b/$a;
			$this->x = $x;
            Log::log("This is line ur");

			return array($x);
		}
		throw new TyreckixException("The equation is not");
	}
}