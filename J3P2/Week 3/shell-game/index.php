<?php
session_start();

if(!isset($_COOKIE['Amount']))
{
	setcookie('Amount', 100, time() + (86400 * 30), "/");
}

if(isset($_GET['reset_amount']))
{
	$_COOKIE['Amount'] = 100;
}


require('Classes/class-cup.php');
require('Classes/class-player.php');
require('Classes/class-ball.php');
require('Classes/class-game.php');

$game = new game(20);

$ball = new ball('red');
$cups[1] = new cup('yellow', 'glass', 1);
$cups[2] = new cup('blue', 'glass', 2);
$cups[3] = new cup('red', 'glass', 3);




if(isset($_SESSION['ballposition']))
{
	$cups[$_SESSION['ballposition']]->ball = $ball->show();
}


if(isset($_GET['show_cup']))
{
	$cups[$_GET['show_cup']]->liftUp();
	if ($_GET['show_cup'] == $_SESSION['ballposition'])
	{
		$_COOKIE['Amount'] = $_COOKIE['Amount'] + $game->amountPerGame;
		echo $_COOKIE['Amount'];
		echo '<script type="text/javascript">alert("Goed gegokt!");</script>';
	}
	else
	{
		$_COOKIE['Amount'] = $_COOKIE['Amount'] - $game->amountPerGame;
		echo '<script type="text/javascript">alert("Fout gegokt!");</script>';
	}
}
$player = new HumanPlayer('WillPoulter', $_COOKIE['Amount']);

if(isset($_GET['startGame']))
{
	$rando = rand(1,3);
	$cups[$rando]->setBall($ball->show());
	$_SESSION['ballposition'] = $rando;
	echo '<script type="text/javascript">alert("Kies een beker!");</script>';
}





require('Images/view.php');

?>