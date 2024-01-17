function validateForm() {
  // Implement your form validation logic here
  var fullName = document.getElementById("fullName").value;
  var email = document.getElementById("email").value;
  var phoneNumber = document.getElementById("phoneNumber").value;
  var city = document.getElementById("city").value;
  var occupation = document.querySelector('input[name="occupation"]:checked');
  var otherOccupation = document.getElementById("otherOccupation").value;
  var details = document.getElementById("details").value;

  // Example: Check if required fields are not empty
  if (!fullName || !email || !phoneNumber || !city || !occupation || !details) {
    alert("Please fill in all required fields.");
    return;
  }

  // Example: Validate email format
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address.");
    return;
  }

  // Example: Validate phone number format
  var phoneRegex = /^\d{10,}$/;
  if (!phoneRegex.test(phoneNumber)) {
    alert("Please enter a valid phone number.");
    return;
  }

  // Your additional validation logic goes here...

  // If all validations pass, you can submit the form or perform other actions
  alert("Form validated successfully. Submitting...");
}
