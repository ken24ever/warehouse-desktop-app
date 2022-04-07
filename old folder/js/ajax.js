function ajaxObj (meth, url){
	var XMLhttp;
	if(window.XMLHttpRequest)
	{
		XMLhttp = new XMLHttpRequest();
		XMLhttp.open(meth, url, true);
		XMLhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
		return XMLhttp;
    }
	
}

function ajaxReturn(XMLhttp)
{
	if(XMLhttp.readyState==4 && XMLhttp.status==200){
	return true;
	}
	
}