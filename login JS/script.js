
function validateForm() {
	var un = document.forms["myForm"]["username"].value;
	var p = document.forms["myForm"]["password"].value;

	
	
	
	if (un == "")
	{
        alert("Enter a user name");
        document.myForm.username.focus();
        return false;
	}
	
	
	if (p == "")
	{
        alert("Enter a password");
        document.myForm.password.focus();
        return false;
	}
	

	if (un != "" && p != "")
	{
        alert("Login Successful");
        
		
        
	}
	

    

	
}