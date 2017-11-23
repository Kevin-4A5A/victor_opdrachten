<?php
class User
{
	private $username = null;
	private $password = null;
	
	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = md5($password);
	}
	
	public function getUsername()
	{
		return $this->username;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function setPassword($password)
	{
		$this->password = md5($password);
	}
	
	public function checkPassword($password)
	{
		if($this->password == md5($password))
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}

class Supervisor extends User
{
	public function doSuperviserStuff()
	{
		return 'Doing supervisor stuff!';
	}
}

class NormalUser extends User
{
	public function doNormalUserStuff()
	{
		return 'Doing normal stuff!';
	}
}

$tomas = new Supervisor('tomas', 'legend32');
$anna = new NormalUser('anna', 'whatevah96');

echo $tomas->getUsername() . '<br>';
echo $tomas->getPassword() . '<br>';
echo $tomas->doSuperviserStuff() . '<br>';
echo $tomas->checkPassword('legend32') . '<br><br>';

echo $anna->getUsername() . '<br>';
echo $anna->getPassword() . '<br>';
echo $anna->doNormalUserStuff() . '<br>';
echo $anna->checkPassword('flikker') . '<br><br>';
?>