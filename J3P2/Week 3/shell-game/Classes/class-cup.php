<?php

class cup
{
	public $color = null;
	public $type = null;
	public $positionUp = false;
	public $ball = null;
	public $id = null;
	
	public function __construct($color,  $type, $id)
	{
		$this->color = $color;
		$this->type = $type;
		$this->id = $id;
	}
	
	public function liftUp()
	{
		$this->positionUp = true;
	}
	
	public function putDown()
	{
		$this->positionUp = false;
	}
	
	public function show()
	{
		if($this->positionUp === true)
		{
			return "<a href='?show_cup=$this->id' class='cup $this->color liftup'>$this->ball</a>";
		}
		else if($this->positionUp === false)
		{
			return "<a href='?show_cup=$this->id' class='cup $this->color putdown'>$this->ball</a>";
		}
	}
	
	
}

?>