var buttons = document.querySelectorAll(".timer__button");
buttons.forEach(function(element)
{
	element.addEventListener("click", function(){init(this.dataset.time);});
});



document.querySelector("#custom input").addEventListener("change", function(){init(document.querySelector("#custom input").value * 60);});

var Time;
var now;
var endTime;
var x;

function init(Count)
{
	Count = Count * 1000;
	clearInterval(x);
	Time = Count;
	x = setInterval(CountDown, 1000)
	now = new Date().getTime();
	endTime = now + Time;
	Endtime(endTime);
}

function CountDown(Count)
{
	var minutes = Math.floor(Time / (1000 * 60));
	var seconds = Math.floor((Time % (1000 * 60)) / 1000);
	
	if(minutes == 0){minutes = '00'}
	if(minutes.toString().length == 1){minutes = '0' + minutes}
	if(seconds == 0 ){seconds = '00'}
	
	document.querySelector("div .display__time-left").innerHTML = minutes + ':' + seconds;
	
	if (new Date().getTime() >= endTime) {
		clearInterval(x);
		document.querySelector("div .display__time-left").innerHTML =  '00:00';
	}
	else
	{
		Time -= 1000;
	}
}

function Endtime(endtime)
{
	var hours = Math.floor((endtime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((endtime % (1000 * 60 * 60)) / (1000 * 60));
	
	document.querySelector("div .display__end-time").innerHTML = "Done at " + (hours+2) + ":" + minutes;
	
}