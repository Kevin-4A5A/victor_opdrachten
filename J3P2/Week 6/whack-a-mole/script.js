
var holes = document.querySelectorAll('.hole');
var scoreBoard = document.querySelector('.score');
var moles = document.querySelectorAll('.mole');

var startButton = document.querySelector('[data-action="startGame"]');

var Score = 0;

startButton.addEventListener('click', function () {
    startGame();
});


moles.forEach(function (item, index, arr) 
{
	moles[index].addEventListener('click', function () 
	{
		AddScore();
		GoDown(index+1);
	});
});

function AddScore()
{
	scoreBoard.innerHTML = ++Score;
}

function startGame() {
    Score = 0;
	holes[0].className = "hole hole1 ";
	
	var game = setInterval(function (){
		var Random = Math.floor((Math.random() * 6) + 1);
		holes[Random - 1].className = "hole hole" + Random + " up";
		setTimeout(function(){
			GoDown(Random);
		}, 1000);
	}, 1000)
	
	setTimeout(function(){
		clearInterval(game);
	}, 15000);
}

function GoDown(index)
{
	holes[index - 1].className = "hole hole" + index;	
}