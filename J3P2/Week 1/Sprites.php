<?php

class Character
{
	protected $Character_Type = null;
	
	public function __construct($type)
	{
		$this->Character_Type = $type;
	}
	
	public function getCharacterType()
	{
		return $this->Character_Type;
	}
}

class MarioCharacter extends Character
{
	protected $CharacterName = null;

	public function __construct($name)
	{
		$this->Character_Type = 'mario_character';
		$this->CharacterName = $name;
	}
	
	public function __tostring()
	{
		return $this->getCharacter();
	}
	
	public function getName()
	{
		return $this->CharacterName;
	}
	
	public function getCharacter()
	{
		return '<span class="' . $this->Character_Type . ' ' . $this->getName() . ' "></span><br>';
	}
	
	public function __destruct()
	{
		
	}	
}

class MarioCharacterForm extends MarioCharacter
{
	private $Form = null;

	public function __construct($name, $form = 'Normal')
	{
		$this->Character_Type = 'mario_character';
		$this->CharacterName = $name;
		$this->Form = $form;
	}
	
	public function __tostring()
	{
		return $this->getCharacter();
	}
	
	public function getForm()
	{
		return $this->Form;
	}
	
	public function getCharacter()
	{
		return '<div>' . $this->getForm() . ' ' . $this->getName() .' : <span class="' . $this->Character_Type . ' ' . $this->getName() . $this->getForm() . ' "></span><br><br><br></div><br>';
	}
	
	public function jump()
	{
		if($this->Form === 'Cat')
		{
			echo $this->getForm() . ' ' . $this->getName() . ' is jumping higher!<br>';
		}
		else 
		{
			echo $this->getForm() . ' ' . $this->getName() . ' is Jumping!<br>';
		}
	}
	
	public function __destruct()
	{
		
	}	
	
}

$LuigiFireFlower = new MarioCharacterForm ('Luigi', 'Flower');
$MarioFireFlower = new MarioCharacterForm ('Mario', 'Flower');
$LuigiNormal = new MarioCharacterForm ('Luigi');
$MarioNormal = new MarioCharacterForm ('Mario', 'Normal');
$MarioCat = new MarioCharacterForm ('Mario', 'Cat');

?>
<!DOCTYPE html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="Sprites.css">
<script>

setTimeout(Animate, 100);

Sprite_Index = 1;

function Animate()
{
	document.querySelector(".jump"+Sprite_Index).style.visibility = 'hidden';
	Sprite_Index++;
	if(Sprite_Index >= 8)
	{
		Sprite_Index = 1;
	}
	document.querySelector(".jump"+Sprite_Index).style.visibility = 'visible';
	
	setTimeout(Animate, 100);
}

</script>
</head>
<body>

<span class="slime jump1"></span>
<span class="slime jump2"></span>
<span class="slime jump3"></span>
<span class="slime jump4"></span>
<span class="slime jump5"></span>
<span class="slime jump6"></span>
<span class="slime jump7"></span>


<?php

echo $LuigiFireFlower->getCharacter();
echo $MarioFireFlower;
echo $MarioNormal->getCharacter();
echo $LuigiNormal->getCharacter();
$MarioNormal->jump();
$MarioCat->jump();
?>

</body>
</html>
