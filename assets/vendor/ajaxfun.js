/*function signup(){
	var u = _("username").value;
	var e = _("email").value;
	var p1 = _("pass1").value;
	var p2 = _("pass2").value;
	var c = _("country").value;
	var g = _("gender").value;
	var status = _("status");
	if(u == "" || e == "" || p1 == "" || p2 == "" || c == "" || g == ""){
		status.innerHTML = "Fill out all of the form data";
	} else if(p1 != p2){
		status.innerHTML = "Your password fields do not match";
	} else if( _("terms").style.display == "none"){
		status.innerHTML = "Please view the terms of use";
	} else {
		_("signupbtn").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "signup.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText != "signup_success"){
					status.innerHTML = ajax.responseText;
					_("signupbtn").style.display = "block";
				} else {
					window.scrollTo(0,0);
					_("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.";
				}
	        }
        }
        ajax.send("u="+u+"&e="+e+"&p="+p1+"&c="+c+"&g="+g);
	}
}*/

function newslettery(){
	var u = document.getElementById("sus_name").value;
	var e = document.getElementById("sus_email").value;
	var m =(document.URL);
	
	var status = document.getElementById("status");
	if(u == "" || e == ""){
		status.innerHTML = "Fill out all of the form data";
	} else {
		document.getElementById("optin").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST","(document.URL)");
		    ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
				
	            if(ajax.responseText != "signup_success"){
					
					status.innerHTML = ajax.responseText;
					document.getElementById("optin").style.display = "block";
				} else {
					window.scrollTo(0,0);
					document.getElementById("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> ";
				}
	        }
        }
        ajax.send("u="+u+"&e="+e);
	}
}