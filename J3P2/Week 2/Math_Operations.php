<?php

$getallen = [1, 3, 5, 10];


class Calculator
{
	protected $Numbers = [];
	protected $operator = null;
	
	public function __construct($Numbers)
	{
		$this->Numbers = $Numbers;
	}
	
	public function getNumber($index)
	{
		return $this->Numbers[$index];
	}
	
	public function GetResult()
	{
		$result = null;
		
		for($i = 0; $i < count($this->Numbers); $i++)
		{
			if($i == count($this->Numbers) - 1)
			{
				$result .= $this->Numbers[$i];
			}
			else
			{
				$result .= $this->Numbers[$i] . $this->operator;
			}
		}

		return $result . ' = ' . $this->Calculate();
	}
	
	public function Calculate()
	{
		$result = null;
		
		for($i = 0; $i < count($this->Numbers); $i++)
		{
			if($result === null)
			{
				$result = $this->getCalculation($this->Numbers[$i], $this->Numbers[++$i]);
			}
			else
			{
				$result =  $this->getCalculation($result, $this->Numbers[$i]); 
			}
		}
		
		return $result;
	}	
}

class AddUp extends Calculator
{	
	protected $operator = ' + ';
	
	public function getCalculation($Number_1, $Number_2)
	{
		return $Number_1 + $Number_2;
	}
}

class Subtract extends Calculator
{	
	protected $operator = ' - ';
	
	public function getCalculation($Number_1, $Number_2)
	{
		return $Number_1 - $Number_2;
	}
}

class Multiply extends Calculator
{
	protected $operator = ' * ';
	
	public function getCalculation($Number_1, $Number_2)
	{
		return $Number_1 * $Number_2;
	}
}

class Divide  extends Calculator
{
	protected $operator = ' / ';
	
	public function getCalculation($Number_1, $Number_2)
	{
		return $Number_1 / $Number_2;
	}
}







$flikker1 = new AddUp($getallen);
echo $flikker1->GetResult();

echo '<br>';

$flikker2 = new Subtract($getallen);
echo $flikker2->GetResult();

echo '<br>';

$flikker3 = new Multiply($getallen);
echo $flikker3->GetResult();

echo '<br>';

$flikker3 = new Divide($getallen);
echo $flikker3->GetResult();


?>