<?php

interface ShowInfoInterface
{
	/**
	*@return string
	*/
	public function ShowInfo();
}


interface CarInterface
{
	/**
	*@param string $color
	*@param string $brand
	*@param string $type
	*@param string $fuelType
	*/
	public function __construct($color, $brand, $type, $fuelType);	
	
	/**
	*@return boolean 
	*/
	public function DuurzaamCheck();	
}


class Car implements CarInterface, ShowInfoInterface
{
	private $color;
	private $brand;
	private $type;
	private $fuelType;

	public function __construct($color, $brand, $type, $fuelType)
	{
		$this->color = $color;
		$this->brand = $brand;
		$this->type = $type;
		$this->fuelType = $fuelType;
	}
	
	public function __set($name, $value)
	{
		if($name === 'color')
		{
			if(($value === 'Red') || ($value === 'Blue') || ($value === 'Green'))
			{
				$this->$name = $value;
			}
		}
	}
	
	public function __get($name)
	{
		return $this->$name;
	}
	
	public function ShowInfo()
	{
		return 'Brand: ' . $this->brand . '<br>Color: ' . $this->color . '<br>Type: ' . $this->type . '<br>Fueltype: ' . $this->fuelType . '<br><br>';
	}
	
	public function DuurzaamCheck()
	{
		if(($this->fuelType === 'Electricity') || ($this->fuelType === 'Hybrid'))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}



$Ford = new Car('Green', 'Ford', 'Mustang', 'Gasoline');
$Toyota = new Car('Red', 'Toyota', 'Prius', 'Electricity');
$Volkswagen = new Car('Blue', 'Volkswagen', 'Golf', 'Diesel');
$Toyota->color = 'Purple';
$Volkswagen->color = 'Red';

echo $Ford->ShowInfo();
echo $Toyota->ShowInfo();
echo $Volkswagen->ShowInfo();
echo '<br>';
echo $Ford->DuurzaamCheck() . '<br>';
echo $Toyota->DuurzaamCheck() . '<br>';
echo $Volkswagen->DuurzaamCheck() . '<br>';

?>