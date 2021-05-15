function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var first_name = document.contactForm.first_name.value;
    var last_name = document.contactForm.last_name.value;
    var email = document.contactForm.email.value;
    var password = document.contactForm.password.value;
    var address = document.contactForm.address.value;
    var postcode = document.contactForm.postcode.value;
    var mobile = document.contactForm.mobile.value;
    var country = document.contactForm.country.value;


    // Defining error variables with a default value
    var firstnameErr = lastnameErr = emailErr = passwordErr = addressErr = postcodeErr = mobileErr  = true;

    // Validate name
    if (first_name == "") {
        printError("nameErr", "Please enter first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(first_name) === false) {
            printError("nameErr", "Please enter a valid first name");
        } else {
            printError("nameErr", "");
            firstnameErr = false;
        }
    }

    if (last_name == "") {
        printError("nameErr", "Please enter last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(last_name) === false) {
            printError("nameErr", "Please enter a valid last name");
        } else {
            printError("nameErr", "");
            lastnameErr = false;
        }
    }


    // Validate email address
    if (email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // Validate mobile number
    if (mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if (regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else {
            printError("mobileErr", "");
            mobileErr = false;
        }
    }

    // Prevent the form from being submitted if there are any errors
    if ((firstnameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
        return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
            "Full Name: " + first_name + "\n" +
            "Email Address: " + email + "\n" +
            "Mobile Number: " + mobile + "\n" +
            "Country: " + country + "\n" +
            "Gender: " + gender + "\n";
        if (hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};