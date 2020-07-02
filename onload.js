function timeout()
		{
           var minut=Math.floor(timeleft/60);
           var second=timeleft%60;
           if(timeleft<17)
           {
           	clearTimeout(tm);
           	document.getElementById("hw").submit();
           	//alert("ksdjnsdkvnsd");
           //	window.location.href="http://localhost/quiz2/check.php";
           }
           else
           {
           //	document.getElementById("time").innerHTML=minut+":"+second;
           
           	document.getElementById("time").value=+second;
           }
           timeleft--;
           var tm=setTimeout(function(){timeout()},1000);
		}