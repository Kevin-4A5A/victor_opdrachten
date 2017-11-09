document.getElementById('commitComment').addEventListener("keyup", CreateComment);

document.getElementById('CommitCommandCopy').addEventListener("click", function(){CopyToClipboard('commitCommand')});
document.getElementById('GitStatusCopy').addEventListener("click", function(){CopyToClipboard('GitStatus')});
document.getElementById('GitAddCopy').addEventListener("click", function(){CopyToClipboard('GitAdd')});


function CreateComment()
{
	var Comment = document.getElementById('commitComment').value;
	document.getElementById('commitCommand').value = 'git commit -a -m "' +  Comment + '"';
}

