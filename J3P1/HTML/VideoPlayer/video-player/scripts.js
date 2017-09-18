document.querySelector("#TogglePlay").addEventListener("click", togglePlay);
document.querySelector("#Volume").addEventListener("change", volumeAdjust);
document.querySelector("#Speed").addEventListener("change", speedAdjust);
document.querySelector("#Revert10").addEventListener("click", Revert);
document.querySelector("#Skip25").addEventListener("click", Skip);
document.querySelector("#Progress").addEventListener("click", SkipTo);

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
		setTimeout(Progress, 100);;
	}
}

function SkipTo()
{
	var Player = document.querySelector("#Player");
	var Filled = document.querySelector("#progress__filled"); 
	
	var position = window.event.clientX;
	var Offset = (window.innerWidth - document.getElementById("Progress").offsetWidth) / 2;
	var progress = 100 / (window.innerWidth / (position + Offset));
	Filled.style.flexBasis = progress + "%";
	Player.currentTime = (Player.duration / 100) * progress;
}

var video = document.querySelector("video.viewer");
video.addEventListener("dblclick",toggleFullScreen);

    var fullscreen = false;

    function toggleFullScreen() {
        if(fullscreen == false) {
            var requestFullScreen = video.requestFullscreen || video.msRequestFullscreen || video.mozRequestFullScreen || video.webkitRequestFullscreen;
            requestFullScreen.call(video);
            fullscreen = true;
        } else if (fullscreen == true){
            var exitFullScreen = video.exitFullscreen || video.msExitFullscreen || video.mozExitFullScreen || video.webkitExitFullscreen;
            exitFullScreen.call(video);
            fullscreen = false;
        }
    }
