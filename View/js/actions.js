function logintest(){
	document.getElementById("formLog").style.display = "inline";
}

function show_hide(id)
{
    if(document.getElementById(id).style.visibility=="hidden")
    {
        document.getElementById(id).style.visibility="visible";
    }
    else
    {
        document.getElementById(id).style.visibility="hidden";
    }
    return true;
}

show_hide('info');
