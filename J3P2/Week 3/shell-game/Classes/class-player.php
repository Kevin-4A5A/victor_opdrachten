<?php

abstract class player
{
	public $name = null;
	public $amount = null;
	
	public function __construct( $name,  $amount)
	{
		$this->name = $name;
		$this->amount = $amount;
	}
	
	public function show()
	{
		return "<div class='player'> <strong>$this->name: $this->amount</strong> </div>";
	}
	
	abstract function __toString();

}


class HumanPlayer extends player
{
	public function __toString() 
	{
		return $this->show();
	}
}

class ComputerPlayer extends player
{
	public function __toString() 
	{
		return '';
	}
}

?>