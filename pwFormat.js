
/* Notice that we are setting the function to call when submit is selected */

window.onsubmit=validateForm;



/* This function must return true or false */
/* If true the data will be sent to the server */
/* If false the data will not be sent to the server */
function validateForm() {
	/* Retrieving the values */
    var pw = document.getElementById("password").value;


    
	/* Validating numeric values */    
	var invalidMessages = "";
    if (pw.length < 3) {
        invalidMessages += "Password must be at least 3 characters long.\n";
    }


    if (pw.length > 18) {
        invalidMessages += "Password must be less than 19 characters.\n";
    }
	
	if (countUpperCaseChars(pw) < 1) {
        invalidMessages += "Password must contain at least one Upper Case Character.\n";
    }
	
	if (countNums(pw) < 1) {
        invalidMessages += "Password must contain at least one Number.\n";
    }


	
    if (invalidMessages !== "") {
        alert(invalidMessages);
        return false;
    } else {
            return true;
    }
}

function countUpperCaseChars(str) {
  var count=0,len=str.length;
  for(var i=0;i<len;i++) {
    if(/[A-Z]/.test(str.charAt(i))) count++;
  }
  return count;
}


function countNums(str) {
  var count=0,len=str.length;
  for(var i=0;i<len;i++) {
    if(/[0-9]/.test(str.charAt(i))) count++;
  }
  return count;
}