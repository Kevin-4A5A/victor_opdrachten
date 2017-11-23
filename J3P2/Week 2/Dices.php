<style>
img{
	width:50px;
	height:50px;
}
</style>
<?php

abstract class Dice
{
	
	protected $Number = null;
	
	public function getNumber()
	{
		return $this->Number;
	}
	
	public function roll()
	{
		$this->Number = rand(1,6);
		return $this->showDice();
	}
	abstract protected function showDice();
}

class Dice_Inverted extends Dice
{
	protected function showDice()
	{
		return '<img src="Dice_Icons/inverted-dice-'.$this->Number.'.png"></img>';
	}
}

class Dice_White extends Dice
{
	protected function showDice()
	{
		return '<img src="Dice_Icons/white-'.$this->Number.'.png"></img>';
	}
}

class Dice_3d_dot extends Dice
{
	protected function showDice()
	{
		return '<img src="Dice_Icons/3d-dot-'.$this->Number.'.png"></img>';
	}
}

class Dice_3d_number extends Dice
{
	protected function showDice()
	{
		return '<img src="Dice_Icons/3d-number-'.$this->Number.'.png"></img>';
	}
}

for($i=0; $i<10000; $i++)
{
	$rando = rand(1,4);
	if($rando === 1)
	{
		${"flikker$i"} = new Dice_Inverted();
	}
	else if($rando === 2)
	{
		${"flikker$i"} = new Dice_White();
	}
	else if($rando === 3)
	{
		${"flikker$i"} = new Dice_3d_number();
	}
	else if($rando === 4)
	{
		${"flikker$i"} = new Dice_3d_dot();
	}
	
	echo ${"flikker$i"}->roll();
}
?>

