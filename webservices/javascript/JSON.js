
document.getElementById("Stap_1_Button").addEventListener("click", stap1);
document.getElementById("Stap_2_Button").addEventListener("click", stap2);
document.getElementById("Stap_3_Button").addEventListener("click", stap3);


function stap1()
{
	var Jsoneke = getResponse('api-employees.php?output=json');
	
	document.getElementById('output_1').innerHTML = Jsoneke;	
}


var Company;

function stap2()
{
	var output;
	var Jsoneke = getResponse('api-employees.php?output=json');
	
	Jsoneke = JSON.parse(Jsoneke);
	output = Jsoneke.employees[0].company;
	
	document.getElementById('output_2').innerHTML = output;	
	
	Company = output;
}


function stap3()
{
	var output;
	var Jsoneke = getResponse('api-employees.php?output=json&amount=-1');
	
	Jsoneke = JSON.parse(Jsoneke);
	sortData(Jsoneke);
}

function sortData(Jsoneke) 
{
	var i;
	var output = "";
	for(i = 0; i < 99; i++)
	{
		console.log(Jsoneke.employees[i].company);
		if(Jsoneke.employees[i].company == Company)
		{
			output += '<tr><td>' + Company+ '</td> <td>' + Jsoneke.employees[i].name + '</td></tr>';
		}
		
	}
	
	if(output != "")
	{
		document.getElementById('output_3').innerHTML += output;
		document.getElementById('Message').innerHTML = "";
	}
	else
	{
		document.getElementById('Message').innerHTML = "Geen werknemer bij dit bedrijf gevonden!";
	}
	
	
}

function getResponse(url)
{
	var xhr = new XMLHttpRequest();
	xhr.open("GET", url, false);
	xhr.send();

	return xhr.responseText;
}



