document.body.addEventListener('keydown', function(e){flikker(e)});

function flikker(e)
{	
	document.querySelector("div[data-key='" + e.keyCode + "']").style.borderColor = "yellow";
	document.querySelector("audio[data-key='" + e.keyCode + "']").play();
	setTimeout(function(){document.querySelector("div[data-key='" + e.keyCode + "']").style.borderColor = "black";}, 200);
}