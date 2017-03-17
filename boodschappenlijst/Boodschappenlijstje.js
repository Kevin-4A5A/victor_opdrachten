function maakLijst()
{
	var lijst = document.getElementById("inputLijst").value;
	
	var lijstigeLijst = lijst.split(", ");
	console.log(lijstigeLijst);
	var lijstLenght = lijstigeLijst.length;
	
	for(var i=0; i<lijstLenght; i++)
	{
		document.getElementById("Lijst").innerHTML = lijstigeLijst[i]+"<br>";
	}
}
		