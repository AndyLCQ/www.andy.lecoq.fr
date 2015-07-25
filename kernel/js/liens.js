function desafficher(divID)
{
	document.getElementById(divID).style.display="none";
}
function afficher(divID)
{
	desafficher(divID);
	document.getElementById(divID).style.display="visible";
}
