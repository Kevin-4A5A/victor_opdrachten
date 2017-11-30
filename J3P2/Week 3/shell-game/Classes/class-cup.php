<?php
interface cupInterface
{
	public function liftUp();
	public function putDown();
	public function show();
	public function __toString();	
	public function setBall($ball);
}


class cup implements cupInterface
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
	
	public function setBall($ball)
	{
		$this->ball = $ball;
	}
	
	public function putDown()
	{
		$this->positionUp = false;
	}
	
	public function show()
	{
		if($this->positionUp === true)
		{
			if($this->type == 'glass')
			{
				return "<a href='?show_cup=$this->id' class='cup liftup'>$this->ball</a>";
			}
			else 
			{
				return "<a href='?show_cup=$this->id' class='cup $this->color liftup'>$this->ball</a>";
			}
		}
		else if($this->positionUp === false)
		{
			if($this->type == 'glass')
			{
				return "<a href='?show_cup=$this->id' class='cup putdown'>$this->ball</a>";
			}
			else 
			{
				return "<a href='?show_cup=$this->id' class='cup $this->color putdown'>$this->ball</a>";
			}
		}
	}
	
	public function __toString() 
	{
		return $this->show();
	}
	
}

?>