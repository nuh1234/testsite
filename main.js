
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

function checkMajorOne() { //If the major is other, I also check the other input box
  var major = document.getElementById('primarymajor').value;
  if(major == "Other") {
    var otherInput = document.getElementById('majorOne').value;
    if(otherInput == "" || !otherInput.replace(/\s/g, '').length) {
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

function checkYearInSchool() { //radio values have to be extracted from an array :/
  var year = document.getElementsByName('Year');
  if(year[0].checked) {
    alert(year[0].value);
    return year[0].value;
  }else if (year[1].checked) {
    alert(year[1].value);
    return year[1].value;
  }
  alert("Select a year");
  return false;
}

function checkCSCourse() { //If they've completed a cs course, I also check the text box
var csRadio = document.getElementsByName('CompletedCSCourse');
if(csRadio[0].checked) {
  var courseName = document.getElementById('OtherCourse').value;
  if (courseName == "" || !courseName.replace(/\s/g, '').length) {
    alert("Please enter CS course name");
    return false;
  }
  alert(courseName);
  return courseName;
}else if (csRadio[1].checked) {
  alert(csRadio[1].value);
  return csRadio[1].value;
}
alert("Select Yes or No for CS course");
return false;
}

function checkMathCourse() {
  var mathRadio = document.getElementsByName('Math');
  if(mathRadio[0].checked) {
    alert(mathRadio[0].value);
    return mathRadio[0].value;
  }else if (mathRadio[1].checked) {
    alert(mathRadio[1].value);
    return mathRadio[1].value;
  }
  alert("Select a math course");
  return false;
}

function getGender() {
  var genderRadio = document.getElementsByName('Gender');
  if(genderRadio[0].checked) {
    return genderRadio[0].value;
  }else if(genderRadio[1].checked) {
    return genderRadio[1].value;
  }else if (genderRadio[2].checked) {
    return genderRadio[2].value;
  }
  return "";
}

function getRace() {
  var race = [];
  var boxes = document.getElementsByClassName('raceCheckBox');
  for (var i = 0; boxes[i]; i++) {
    if (boxes[i].checked) {
      if(boxes[i].value == "Other") {
        var other = document.getElementById('otherRace').value;
        if(other == "" || !other.replace(/\s/g, '').length) {
          alert("Please enter text");
          return false;
        }
        race.push(other);
      } else {
        race.push(boxes[i].value);
      }
    }
  }
  alert(race.toString());
  //Api might want all strings, in that case return race.toString();
  return race;
}

function checkFileUploaded() {
  var file = document.getElementById('file');
  if(!file.files.length) {
    alert("Please attach file");
    return false;
  }
  return file;
}
//These 4 functions below make text boxes appear
function showOtherBox(name) {
  if(name == 'Other') {
    document.getElementById('OtherBox').innerHTML = 'Other: <input type="text" name="other" id = "majorOne" />';
  } else {
    document.getElementById('OtherBox').innerHTML = '';
  }
}
function showOtherBox2(name) {
  if(name == 'Other') {
    document.getElementById('OtherBox2').innerHTML = 'Other: <input type="text" name="other2" id = "majorTwo" />';
  } else {
    document.getElementById('OtherBox2').innerHTML = '';
  }
}
function showOtherBox3() {
  var otherCheckBox = document.getElementById('otherCheckBox');
  if(otherCheckBox.checked) {
    document.getElementById('OtherBox3').innerHTML = 'Other: <input type="text" name="otherRace" id = "otherRace" />';
  } else {
    document.getElementById('OtherBox3').innerHTML = '';
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
