function showOtherBox(name) {
  if(name == 'Other') {
    document.getElementById('OtherBox').innerHTML = 'Other: <input type="text" name="other" id = "majorOne" />';
  } else {
    document.getElementById('OtherBox').innerHTML = '';
  }
}
function showOtherBox2(name) {
  if(name == 'Other') {
    document.getElementById('OtherBox2').innerHTML = 'Other 2: <input type="text" name="other2" id = "majorTwo" />';
  } else {
    document.getElementById('OtherBox2').innerHTML = '';
  }
}
function showCourseTextBox() {
  var value = document.getElementById('csYes');
  if(value.checked) {
    document.getElementById('CompletedCourseBox').innerHTML = 'Please list course name: <input type="text" name="courseName" id = "OtherCourse"/>';
  } else {
    document.getElementById('CompletedCourseBox').innerHTML = '';
  }
}
function checkFirstName() {
  var firstName = document.getElementById('firstname').value;
  if(firstName == "" || !/^[a-zA-Z ]*$/.test(firstName) || !firstName.replace(/\s/g, '').length) {
    alert("Name must be filled out");
    return false;
  }
  return firstName;
}
function checkLastName() {
  var lastName = document.getElementById('lastname').value;
  if(lastName == "" || !/^[a-zA-Z ]*$/.test(lastName) || !lastName.replace(/\s/g, '').length) {
    alert("Last Name must be filled out");
    return false;
  }
  return lastName;
}
function checkAddress() {
  var address = document.getElementById('address').value;
  if(address == "" || !address.replace(/\s/g, '').length) {
    alert("Address must be filled out");
    return false;
  }
  return address;
}
function checkEmail() {
  var email = document.getElementById('email').value;
  if(email == "" || !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
    alert("Email Address must be filled out");
    return false;
  }
  return email;
}
function checkPhone() {
  var phoneNumber = document.getElementById('phonenumber').value;
  if(phoneNumber == "" || !/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/.test(phoneNumber)) {
    alert("Please enter a valid phone number");
    return false;
  }
  return phoneNumber;
}
function checkSchool() {
  var school = document.getElementById('schoolname').value;
  if(school == "" || !school.replace(/\s/g, '').length) {
    alert("Please enter a school");
    return false;
  }
  return school;
}

function checkMajorOne() {
  var major = document.getElementById('primarymajor').value;
  if(major == "Other") {
    var otherInput = document.getElementById('majorOne').value;
    if(otherInput == "" || !otherInput.replace(/\s/g, '').length) { //This checks if an input is all spaces
      alert("Please finish");
      return false;
    }
    return otherInput;
  }
  return major;
}
function checkMajorTwo() {
  var major = document.getElementById('secondarymajor').value;
  if(major == "Other") {
    var otherInput = document.getElementById('majorTwo').value;
    if(otherInput == "" || !otherInput.replace(/\s/g, '').length) {
      alert("Please finish");
      return false;
    }
    return otherInput;
  }
  return major;
}
