function showOtherBox(name) {
  if(name == 'Other') {
    document.getElementById('OtherBox').innerHTML = 'Other: <input type="text" name="other" />';
  } else {
    document.getElementById('OtherBox').innerHTML = '';
  }
}
function showOtherBox2(name) {
  if(name == 'Other') {
    document.getElementById('OtherBox2').innerHTML = 'Other 2: <input type="text" name="other2" />';
  } else {
    document.getElementById('OtherBox2').innerHTML = '';
  }
}
function showCourseTextBox() {
  var value = document.getElementsByName('CompletedCSCourse');
  if(value.checked) {
    document.getElementById('CompletedCourseBox').innerHTML = 'Please list course name: <input type="text" name="courseName" />';
  } else {
    document.getElementById('CompletedCourseBox').innerHTML = '';
  }
}
