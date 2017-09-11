document.querySelector("#TogglePlay").addEventListener("click", togglePlay);
document.querySelector("#Volume").addEventListener("change", volumeAdjust);
document.querySelector("#Speed").addEventListener("change", speedAdjust);
document.querySelector("#Revert10").addEventListener("click", Revert);
document.querySelector("#Skip25").addEventListener("click", Skip);

function togglePlay()
{
	var Player = document.querySelector("#Player");
	if(Player.paused)
	{
		Player.play();
		Progress();
	}
	else
	{
		Player.pause();
	}
}

function volumeAdjust()
{
	var Volume = document.querySelector("#Volume").value;
	var Player = document.querySelector("#Player");
	
	Player.volume = Volume;
}

function speedAdjust()
{
	var Speed = document.querySelector("#Speed").value;
	var Player = document.querySelector("#Player");
	
	Player.playbackRate = Speed;
}

function Skip()
{
	var Player = document.querySelector("#Player");
	Player.currentTime += 25;
}
function Revert()
{
	var Player = document.querySelector("#Player");
	Player.currentTime -= 10;
}

function Progress()
{
	
	var Player = document.querySelector("#Player");
	var Filled = document.querySelector("#progress__filled");
	var Played = 0;
	Played = (100 / (Player.duration / Player.currentTime)) 
	
	Filled.style.flexBasis = Played + "%";
	
	if(!Player.paused)
	{
		setTimeout(Progress, 500);;
	}
}
