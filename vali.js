function validate()
 {
	var u1 = document.forms["f1"]["u1"].value;
	var p1 = document.forms["f1"]["p1"].value;
	var e1 = document.forms["f1"]["e1"].value;
	if(u1=="")
	{
	//document.getElementById("p").innerHTML="** please enter password";
	alert("Enter Username");
		return false;
	}
	else if(p1=="")
	{
		alert("Enter password");
		return false;
	}
	else if (e1=="")
	{
		alert("Enter Email Address");
		return false;
	}
  else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e1))
	{
		return true;
	}
	else
	{
		alert("please enater valid email adress");
		return false;
	}
}