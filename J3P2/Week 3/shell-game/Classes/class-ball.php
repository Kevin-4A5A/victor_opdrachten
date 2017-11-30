<?php

interface ballInterface
{
	public function show();
	
	public function __toString(); 
}


final class ball implements ballInterface
{
	public $color = null;
	
	public function __construct($color)
	{
		$this->color = $color;
	}
	
	public function show()
	{
		return "<div class='ball $this->color'></div>";
	}
	
	public function __toString() 
	{
		return $this->show();
	}
}

?>