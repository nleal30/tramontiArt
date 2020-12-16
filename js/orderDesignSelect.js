var oldSelect = null;
function buttonSelectionFormat(selection){
	if (oldSelect != null)
	{
		oldSelect.style.border = "0";	
	}
	selection.style.border = "5px solid #6ea054";
    oldSelect = selection;  
}