<?php

class magicBall extends ball
{
	private $size = null;
	protected $type = null;
	
	public function __construct($color, $size, $type)
	{
		$this->color = $color;
		$this->size = $size;
		$this->type = $type;
	}
	
	public function show()
	{
		return $this->color;
	}
}

?>