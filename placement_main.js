function checkvalue(val)
{

    if(val==="other")
       document.getElementById('ocollage').style.display='block';
    else
       document.getElementById('ocollage').style.display='none'; 
}

//form validaiton funciton starts here


function formValidator(){
	// Make quick references to our fields
	var name = document.getElementById('Name');
	var fname = document.getElementById('Fname');
	var address = document.getElementById('Address');
	var email = document.getElementById('Email');
	var phone = document.getElementById('Phone');
	var degree = document.getElementById('Degree');
	var branch = document.getElementById('Branch');
	var college = document.getElementById('College');
	var yopassing = document.getElementById('YOPassing');
	var gcp = document.getElementById('Gcp');
        var Mobile = document.getElementById('Mobile');   
	
	// Check each input in the order that it appears in the form!
	if(notEmpty(name,"Please enter your Name")&&isAlphabet(name,"Please enter only letters for your Name")){
	if(notEmpty(fname,"Please enter your Father's Name")&&isAlphabet(fname,"Please enter only letters for your Father's name")){
	if(notEmpty(address,"Please enter your address")){
	if(notEmpty(address,"Please enter your email address")&&emailValidator(email, "Please enter a valid email address")){
	if(notEmpty(phone,"Please enter your phone number")&&isNumeric(phone, "Please enter a valid Mobile Number")){
		if(SelectionDegree(degree,"Please select your degree")){
		if(SelectionBranch(branch,"Please select your degree branch")){
		if(notEmpty(college,"Please enter your Institute/College Name")&&isAlphabet(college,"Please enter only letters for your Institue/College")){
				if(notEmpty(name,"Please enter your year of passing degree")&&isNumeric(yopassing, "Please enter only  number on Year of passing")){
				if(notEmpty(gcp,"Please enter your Class/GCP")&&isNumeric(gcp, "Please enter only  number on GCP")){
							return true;
						}
					}
				}
			}
		}
		}
		}
		}
		}
		}
	return false;
	
}


function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function SelectionDegree(elem, helperMsg){
	if(elem.value ==="---------select---------"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function SelectionBranch(elem, helperMsg){
	if(elem.value === "--------------select---------------"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z ]*$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
