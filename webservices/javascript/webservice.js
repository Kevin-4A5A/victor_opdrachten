document.getElementById("showButton").addEventListener("click", addUrl);

function addUrl(){
  var idNumber = document.getElementById('input').value;
  var id = '?output=xml&id=' + idNumber;
  
  var xml = getResponse('api-countries.php' + id);
  
  xml = xml.match(/<name[^>]*>([^<]+)<\/name>/)[0];
  
  var output = '<tr><td>' + idNumber + '</td> <td>' + xml + '</td></tr>';
  
  document.getElementById('output').innerHTML += output;
}

function getResponse(url){
  var xhr = new XMLHttpRequest();
  xhr.open("GET", url, false);
  xhr.send();

  return xhr.responseText;
}




