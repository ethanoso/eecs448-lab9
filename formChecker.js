function validate()
{
	
	let email = document.getElementById("user").value
	function validateEmail(email) 
	{
        var re = /\S+@\S+\.\S+/;	//regex email format
        return re.test(email);		//tests the email against the regex
    }
	if(!validateEmail(email))		//checks if the email is valid
	{
		alert("You must enter a valid email.");
		return false;
	}
	
	let pass = document.getElementById("password").value
	if(pass == "")			//checks if the password is empty
	{
		alert("You must enter a password.");
		return false;
	}
	
	let q1 = document.getElementById("quantity1").value
	let q2 = document.getElementById("quantity2").value
	let q3 = document.getElementById("quantity3").value
	if(q1 == 0 && q2 == 0 && q3 == 0)			//checks if a product is selected
	{
		alert("You must select a quantity for a product.");
		return false;
	}
	if(q1 < 0 || q2 < 0 || q3 < 0)				//checks if a quantity is negative
	{
		alert("You cannot select a negative quantity for a product.");
		return false;
	}
	
	let checked_shipping = document.querySelector('input[name = "shipping"]:checked');
	if(checked_shipping == null){  //Test if no shipping was selected
		alert('Please Select a shipping option'); //Alert, nothing was checked.
		return false;
	}
}