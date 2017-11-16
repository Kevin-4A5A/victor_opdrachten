<?php


class Car
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
	
	public function setColor($color)
	{
		$this->color = $color;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	public function setAttribute($attribute, $value)
	{
		$this->$attribute = $value;
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
	
	public function __destruct()
	{
		
	}
	
}

//Main Code

$Ford = new Car('Green', 'Ford', 'Mustang', 'Gasoline');
$Toyota = new Car('Red', 'Toyota', 'Prius', 'Electricity');
$Volkswagen = new Car('Blue', 'Volkswagen', 'Golf', 'Diesel');
$Toyota->setColor('Paars');
$Toyota->setAttribute('brand', 'Flikker');

echo $Ford->ShowInfo();
echo $Toyota->ShowInfo();
echo $Volkswagen->ShowInfo();
echo '<br>';
echo $Ford->DuurzaamCheck() . '<br>';
echo $Toyota->DuurzaamCheck() . '<br>';
echo $Volkswagen->DuurzaamCheck() . '<br>';

?>