
function validateForm() {
	var i = document.forms["myForm"]["aiubid"].value;
	var n = document.forms["myForm"]["fname"].value;
	var e = document.forms["myForm"]["email"].value;
	var m = document.forms["myForm"]["phone"].value;
	var p = document.forms["myForm"]["password"].value;
    var cp = document.forms["myForm"]["Conpassword"].value;
	
	sidregex =/[0-9]{2}-[0-9]{5}-[1-3]{1}/
	sid = i.match(sidregex);
	
	if (i != sid)
	{
        alert("Please provide ID in the format ##-#####-#.(numbers only)white spaces are not allowed");
        document.myForm.aiubid.focus();
        return false;
	}
	
	fnameregex =/^[a-zA-Z ]+$/
	fname = n.match(fnameregex);
	
	
	if (n == "" || n != fname)
	{
        alert("Your full name is not valid. Only characters A-Z, a-z are  acceptable.");
        document.myForm.fname.focus();
        return false;
	}
	if (e == "")
	{
        alert("Email is required");
        document.myForm.email.focus();
        return false;
	}
	
	phnregex =/[0-9]{11}/
	phn = m.match(phnregex);
	
	if (m != phn)
	{
        alert("Please provide your valid phone number with 11 digit. white spaces are not allowed");
        document.myForm.phone.focus();
        return false;
	}
	
	if (p == "")
	{
        alert("Enter a password");
        document.myForm.password.focus();
        return false;
	}
	
	if (cp != p)
	{
        alert("Password don't match");
        document.myForm.Conpassword.focus();
        return false;
	}
	if (cp == p)
	{
        alert("Registration Successful");
        document.myForm.Conpassword.focus();
		
        
	}
	

    

	
}