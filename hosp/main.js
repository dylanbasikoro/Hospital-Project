alert("Welcome to our hospital website!");

function validateSubmit() {
	var x = document.forms.formCnt.sub.value;
	if (x ==" "){
		alert("Form must be filled out!");
		return false;
	}else{
		alert("Submitting Form");
		return true;
	}
}



