document.getElementById('folder').addEventListener("keyup", ZoekFolder);
document.getElementById('cloneUrl').addEventListener("keyup", GitClone);

document.getElementById('ZoekFolderCopy').addEventListener("click", function(){CopyToClipboard('zoekFolderCommando')});
document.getElementById('CloneCommandCopy').addEventListener("click", function(){CopyToClipboard('cloneCommand')});


function ZoekFolder()
{
	var folder = document.getElementById('folder').value;
	if (folder.indexOf(' ') > 0)
	{
		folder = '"' + folder + '"';
	}
	document.getElementById('zoekFolderCommando').value = 'cd ' +  folder;
}

function GitClone()
{
	var clone = document.getElementById('cloneUrl').value;
	if (clone.indexOf(' ') > 0)
	{
		clone = '"' + clone + '"';
	}
	document.getElementById('cloneCommand').value = 'git clone ' +  clone;
}

