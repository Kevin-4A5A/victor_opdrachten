<?php


class Person
{
	public $name;
	private $age;

	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function ShowInfo()
	{
		return 'Dit is ' . $this->name . ', en zijn/haar leeftijd is ' . $this->age . '.<br>';
	}
	
	public function setAge($age)
	{
		if(($age >= 0 ) && ($age <= 150))
		{
			$this->age = $age;
		}
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function CheckAge()
	{
		if($this->age < 18)
		{
			return false;
		}
		else 
		{
			return true;
		}
	}
	
}

//Main Code

$Will = new Person('Will Poulter');
$Bassie = new Person('Bassie de clown');
$Will->setAge(24);
$Bassie->setAge(82);

echo $Will->ShowInfo();
echo $Bassie->ShowInfo();


?>