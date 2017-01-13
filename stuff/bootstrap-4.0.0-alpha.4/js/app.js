
function validate()
{
	var getId = document.getElementById('email').value;
	var getPwd = document.getElementById('pwd').value;
	
	if(getId == ""){
		
		//alert("Please Enter your name");
		var p = document.getElementById('demo');
		p.innerHTML = "Enter Valid Email";
		document.getElementById('email').style.borderColor = "red";
		document.getElementById('email').focus();
		document.getElementById('email').addEventListener("mouseover", mouseOver);
		document.getElementById('email').addEventListener("mouseout", mouseOut);
		
	
		return false;
	} 
	
	
	
	/*if(getId.indexOf(' ') != -1){ //if input type is text than this code will uncomment
		
		alert("No spaces Allowed")
		document.getElementById('email').style.borderColor = "red";
		document.getElementById('email').addEventListener("mouseover", mouseOver);
		document.getElementById('email').addEventListener("mouseout", mouseOut);
		document.getElementById('email').focus();
		return false;
		
	}*/ 
	
	else if(getPwd.length === 0  )
		{
			var p = document.getElementById('demo');
			p.innerHTML = "Enter Valid Password";
			document.getElementById('pwd').style.borderColor = "red";
			document.getElementById('pwd').focus();
			document.getElementById('pwd').addEventListener("mouseover", mouseOver);
			document.getElementById('pwd').addEventListener("mouseout", mouseOut);
		
	
		return false;
		}
	
	else if(getPwd.indexOf(' ') !=-1)
		{
			
			var p = document.getElementById('demo');
			p.innerHTML = "Spaces not Allowed in Password";
			document.getElementById('pwd').style.borderColor = "red";
			document.getElementById('pwd').focus();
			document.getElementById('pwd').addEventListener("mouseover", mouseOver);
			document.getElementById('pwd').addEventListener("mouseout", mouseOut);
		
	
		return false;
		} 
	
	else if(getPwd.length < 8)
		{
			
			var p = document.getElementById('demo');
			p.innerHTML = "Password Should contains more than 8 characters";
			document.getElementById('pwd').style.borderColor = "red";
			document.getElementById('pwd').focus();
			document.getElementById('pwd').addEventListener("mouseover", mouseOver);
			document.getElementById('pwd').addEventListener("mouseout", mouseOut);
		
	
		return false;
		}
	
	else{
		
		localStorage.setItem('userEmail', getId);
		localStorage.setItem('userPwd', getPwd);
		alert("Registeration Completed");
		
	}
}

	function mouseOver() {
    document.getElementById("email").style.backgroundColor = "yellow";
    document.getElementById("pwd").style.backgroundColor = "yellow";
    
	}

	function mouseOut() {
    document.getElementById("email").style.backgroundColor ="white";
    document.getElementById("pwd").style.backgroundColor ="white";
    
	}

//For Login

function login()
{
	var getId = document.getElementById('email').value;
	var getPwd = document.getElementById('pwd').value;
	var uEmail = localStorage.getItem('userEmail');
	var uPassword = localStorage.getItem('userPwd');
	
	if(getId == ""){
		
		
		var p = document.getElementById('demo');
		p.innerHTML = "Enter Valid Email";
		document.getElementById('email').style.borderColor = "red";
		document.getElementById('email').focus();
		document.getElementById('email').addEventListener("mouseover", mouseOver);
		document.getElementById('email').addEventListener("mouseout", mouseOut);
		
	
		return false;
	} 
	
	
	else if(getPwd.length === 0  )
		{
			var p = document.getElementById('demo');
			p.innerHTML = "Enter Valid Password";
			document.getElementById('pwd').style.borderColor = "red";
			document.getElementById('pwd').focus();
			document.getElementById('pwd').addEventListener("mouseover", mouseOver);
			document.getElementById('pwd').addEventListener("mouseout", mouseOut);
		
	
		return false;
		}
	
	else if(getPwd.indexOf(' ') !=-1)
		{
			
			var p = document.getElementById('demo');
			p.innerHTML = "Spaces not Allowed in Password";
			document.getElementById('pwd').style.borderColor = "red";
			document.getElementById('pwd').focus();
			document.getElementById('pwd').addEventListener("mouseover", mouseOver);
			document.getElementById('pwd').addEventListener("mouseout", mouseOut);
		
	
		return false;
		} 
	
	else if(getPwd.length < 8)
		{
			
			var p = document.getElementById('demo');
			p.innerHTML = "Password Should contains more than 8 characters";
			document.getElementById('pwd').style.borderColor = "red";
			document.getElementById('pwd').focus();
			document.getElementById('pwd').addEventListener("mouseover", mouseOver);
			document.getElementById('pwd').addEventListener("mouseout", mouseOut);
		
	
		return false;
		}
	
	else if(getId != uEmail || getPwd != uPassword)
		{
			var p = document.getElementById('demo');
			p.innerHTML = "dklf";
			document.getElementById('pwd').style.borderColor = "red";
			document.getElementById('pwd').focus();
		}
	
}

