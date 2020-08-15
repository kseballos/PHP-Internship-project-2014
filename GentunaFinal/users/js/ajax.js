// JavaScript Document
var XMLHttpRequestObject=false;
function display(state_id)
{
if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
} 
XMLHttpRequestObject.onreadystatechange=function()
{
if (XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
document.getElementById("show").innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.open("GET","getcity.php?tid="+tid,true);
XMLHttpRequestObject.send();
}