document.getElementById("showButton").addEventListener("click", addUrl);


function addUrl(){
  id = '?output=xml&id='+document.getElementById('input').value;
  document.getElementById('output').innerHTML = getResponse('api-countries.php'+id);
}

  function getResponse(url){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, false);
    xhr.send();

    return xhr.responseText;
  }




