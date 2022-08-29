
function previewPost()
{
	var titleSource = document.forms["makePost"]["postTitle"].value;
	var textSource = document.forms["makePost"]["postText"].value;
	
	var h4 = document.getElementById("tempTitle");
	var p = document.getElementById("tempText");
	var text = document.createTextNode(textSource);
	var title = document.createTextNode(titleSource);
	p.appendChild(text);
	h4.appendChild(title);

}

function clearPreviewPost()
{
	var h4 = document.getElementById("tempTitle");
	var p = document.getElementById("tempText");
	
	h4.innerHTML = "";
	p.innerHTML = "";
}

function clearPost()
{
	document.getElementById('formText').value = '';
	document.getElementById('formTitle').value = '';
}

function validation()
{
	var title = document.forms["makePost"]["postTitle"].value;
	var text = document.forms["makePost"]["postText"].value;

	var check1 = false;
	var check2 = false;

	if(title =="")
	{
			document.getElementById("missing1").style.visibility = "visible";
	}
	else
	{
			document.getElementById("missing1").style.visibility = "hidden";
			check1 = true;
	}

	if(text =="")
	{
			document.getElementById("missing2").style.visibility = "visible";
	}
	else
	{
			document.getElementById("missing2").style.visibility = "hidden";
			check2 = true;
	}

	if(check1 && check2)
	{
		return true;
	}
	else
	{
		return false;
	}
}


function preventDefault(e){
	e.preventDefault();
    if ($("#formTitle")[0].value === "") {
        return false;
    }

    if ($("#formText")[0].value === "") {
        return false;
    }
}