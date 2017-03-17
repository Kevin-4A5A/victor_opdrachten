var beoordeling;
function toonCijfer(cijferNummer)
{
	var cijfer = document.getElementById("cijfer"+cijferNummer).value;

	if ((cijfer > 100) || (cijfer < 0))
	{
		cijferNummer = 0;
		document.getElementById("resultaat").innerHTML += "Dit is niet een geldig cijfer!<br>";
	}
	else if(cijfer <= 49)
	{
		beoordeling = "onvoldoende";
	}
	else if(cijfer <=59)
	{
		beoordeling = "matig";
	}
	else if(cijfer <=74)
	{
		beoordeling = "voldoende";
	}
	else if(cijfer >74)
	{
		beoordeling = "goed";
	}
	
	
	if (cijferNummer == 1)
	{
		document.getElementById("resultaat").innerHTML += "Het cijfer is " + cijfer + " en is dus " + beoordeling + ".<br>";	
	}
	else if (cijferNummer == 2)
	{
		document.getElementById("resultaat").innerHTML += "De beoordeling is " + beoordeling + ", want het cijfer is " + cijfer + ".<br>";
	}
}