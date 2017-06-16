//Menu Toggle Function
$(document).ready(function(){
		$('#i-nav').click(function(){
			$(this).toggleClass('open');
			$('nav').toggleClass('show');
			
		});
	
});

//for admin
//Menu Toggle Function
$(document).ready(function(){
		$('#left_nav').click(function(){
			$(this).toggleClass('open');
			$('nav').toggleClass('show');
			
		});
	
});

//Ajax Methods
function ajaxObj( meth, url ) {
    var x = new XMLHttpRequest();
    x.open( meth, url, true );
    x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    return x;
}
function ajaxReturn(x){
    if(x.readyState == 4 && x.status == 200){
        return true;    
    }
}
//News Letter Validation
function newsletter(){
	var u = document.getElementById("sus_name").value;
	var e = document.getElementById("sus_email").value;
	var m =(document.URL);
	
	var status = document.getElementById("status");
	//Check if email is provided
	if(e == ""){
		status.innerHTML = "Fill out email address";
	}//check if name is provided
	else if(u == ""){
		status.innerHTML = "Please type in Your Name";	
	}//if both field are provided then run the rest
	else {
		document.getElementById("optin").style.display = "none";
		status.innerHTML = 'please wait ...';
		
		var ajax = ajaxObj("POST","newsletter.php");
		    ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
				var returnString = ajax.responseText;
				returnString = returnString.replace(/(\r\n|\n|\r)/gm,"");
	            if(returnString != "signup_success"){
					
					status.innerHTML = returnString;
					document.getElementById("optin").style.display = "inline-block";
				} else {
					document.getElementById("optin").style.display = "inline-block";
					status.innerHTML = "Thank You "+u+", for your Newsletter Subscriptions";
				}
	        }
        }
        ajax.send("u="+u+"&e="+e);
	}
}
//Weather Letter Validation
function weatherr(){
	
	var km = document.getElementById("ktmmin").value;
	var kx = document.getElementById("ktmmax").value;
	var kp = document.getElementById("ktmpcp").value;
	var pm = document.getElementById("pokmin").value;
	var px = document.getElementById("pokmax").value;
	var pp = document.getElementById("pokpcp").value;
	var bhm = document.getElementById("bhwmin").value;
	var bhx = document.getElementById("bhwmax").value;
	var bhp = document.getElementById("bhwpcp").value;
	var btm = document.getElementById("brtmin").value;
	var btx = document.getElementById("brtmax").value;
	var btp = document.getElementById("brtpcp").value;
	var nm = document.getElementById("nepmin").value;
	var nx = document.getElementById("nepmax").value;
	var np = document.getElementById("neppcp").value;
		var dat = document.getElementById("date").value;
	var m =(document.URL);
	
	var status = document.getElementById("status");
	//Check if all fields are provided
	if(km == "" || kx=="" || kp=="" || pm=="" || px=="" || pp=="" || bhm=="" || bhx=="" || bhp=="" || btm=="" || btx=="" || btp=="" || nm=="" || nx=="" || np=="" ){
		status.innerHTML = "Fill out all fields";
	}//check if date is provided
	else if(dat== ""){
		status.innerHTML = "Please Select the Date";	
	}//if both field are provided then run the rest
	else {
		document.getElementById("weather").style.display = "none";
		status.innerHTML = 'please wait ...';
		
		var ajax = ajaxObj("POST","weather.php");
		    ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
				var returnString = ajax.responseText;
				returnString = returnString.replace(/(\r\n|\n|\r)/gm,"");
	            if(returnString != "signup_success"){
					
					status.innerHTML = returnString;
					document.getElementById("weather").style.display = "inline-block";
				} else {
					document.getElementById("weather").style.display = "inline-block";
					alert("Weather for "+dat+", has been added successfully");
					window.location="manageweather.php";
					//status.innerHTML = "Weather for "+dat+", has been added successfully";
					
				}
	        }
        }
        ajax.send("k="+km+"&ka="+kx+"&kb="+kp+"&p="+pm+"&pa="+px+"&pb="+pp+"&b="+bhm+"&ba="+bhx+"&bb="+bhp+"&br="+btm+"&bra="+btx+"&brb="+btp+"&npm="+nm+"&npa="+nx+"&npb="+np+"&d="+dat);
	}
}
//Forex Validation
function forexx(){
	
	var ub = document.getElementById("usb").value;
	var us = document.getElementById("uss").value;
	var kb = document.getElementById("ukb").value;
	var ks = document.getElementById("uks").value;
	var eb = document.getElementById("eub").value;
	var es = document.getElementById("eus").value;
	var ab = document.getElementById("aus").value;
	var as = document.getElementById("aub").value;
	var cb = document.getElementById("cab").value;
	var cs = document.getElementById("cas").value;
	var sb = document.getElementById("swb").value;
	var ss = document.getElementById("sws").value;
		var datt = document.getElementById("datee").value;
	var ma =(document.URL);
	
	var statuss = document.getElementById("statuss");
	//Check if all fields are provided
	if(ub == "" || us=="" || kb=="" || ks=="" || eb=="" || es=="" || ab=="" || as=="" || cb=="" || cs=="" || sb=="" || ss==""){
		statuss.innerHTML = "Fill out all forex fields";
	}//check if date is provided
	else if(datt== ""){
		statuss.innerHTML = "Please Select the Forex Date";	
	}//if both field are provided then run the rest
	else {
		document.getElementById("forex").style.display = "none";
		statuss.innerHTML = 'please wait ...';
		
		var ajax = ajaxObj("POST","forex.php");
		    ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
				var returnString = ajax.responseText;
				returnString = returnString.replace(/(\r\n|\n|\r)/gm,"");
	            if(returnString != "signup_success"){
					
					statuss.innerHTML = returnString;
					document.getElementById("forex").style.display = "inline-block";
				} else {
				
					document.getElementById("forex").style.display = "inline-block";
					//statuss.innerHTML = "Forex for "+datt+", has been added successfully";
					alert("Forex for "+datt+", has been added successfully");
					window.location="manageforex.php";
				}
	        }
        }
        ajax.send("usdb="+ub+"&usds="+us+"&ukpb="+kb+"&ukps="+ks+"&eurob="+eb+"&euros="+es+"&ausdb="+ab+"&ausds="+as+"&canb="+cb+"&cans="+cs+"&swisb="+sb+"&swiss="+ss+"&miti="+datt);
	}
}
//Verify Staff
function verifyi(){
	
	var ve = document.getElementById("verificationcode").value;
				
	var statuss = document.getElementById("statuss");
	//Check if all fields are provided
	if(ve == ""){
		statuss.innerHTML = "Please Enter your Verify Code";
	}//if field provided then run the rest
	else {
		document.getElementById("verifyy").style.display = "none";
		statuss.innerHTML = 'please wait ...';
		
		var ajax = ajaxObj("POST","verifycode.php");
		    ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
				var returnString = ajax.responseText;
				returnString = returnString.replace(/(\r\n|\n|\r)/gm,"");
				
				var res = returnString.slice(0,14);
				var code = returnString.slice(14,56);
	            if(res != "signup_success"){
					
					statuss.innerHTML = returnString;
					document.getElementById("verifyy").style.display = "inline-block";
				} else {
					
					document.getElementById("verifyy").style.display = "inline-block";
					window.location="stafflogin.php?token="+code+"";
				}
	        }
        }
        ajax.send("veri="+ve);
	}
}