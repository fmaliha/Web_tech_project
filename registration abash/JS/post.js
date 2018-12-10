s
function validateForm() {
	var n = document.forms["myForm"]["name"].value;
	var em = document.forms["myForm"]["email"].value;
	var ph = document.forms["myForm"]["phn"].value;
	 var add = document.forms["myForm"]["address"].value;
	 var r = document.forms["myForm"]["rnp"].value;
	var i = document.forms["myForm"]["image"].value;
	

	
	if (n == "")
	{
        alert("Enter a name");
        document.myForm.name.focus();
        return false;
	}
	
	if (i == "")
	{
        alert("Enter Picture");
        document.myForm.name.focus();
        return false;
	}
	
	if (r == "")
	{
        alert("Enter Rent Price");
        document.myForm.usern.focus();
        return false;
	}
	
	if (em == "")
	{
        alert("Enter a user email");
        document.myForm.usern.focus();
        return false;
	}
	
	if (ph == "")
	{
        alert("Enter a contact no");
        document.myForm.address.focus();
        return false;
	}
	if (add == "")
	{
        alert("Enter a Address");
        document.myForm.address.focus();
        return false;
	}
	
	

	if (n != "" && r != "" && em != "" && ph != "" && add != "" && i != "")
	{
        alert("Insert Successful");
        
		
        
	}
	

    

	
}