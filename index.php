

<head>
  <link rel="stylesheet" href="main.css" type="text/css">
  <script src="main.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application</title>
</head>
<form name = "Application" onsubmit="return validateForm()">
  <h1>Application Validation</h1>
  <div class="wrapper">
    Upload your resume <input type="file" id = "file" name="resumeFile", accept = ".pdf, .doc"><br>
    <span class="error" id = "fileError"></span><br>

    <div>
      <input class= "input" placeholder="First" type="text" id = "firstname">
      <span class="underline"></span><br>
      <span class="error" id = "firstnameError"></span><br>
      <input class = "input" placeholder="Last" type="text" id = "lastname">
      <span class="underline"></span><br>
      <span class="error" id = "lastnameError"></span><br>
    </div>

    <input class= "input" placeholder="Permanent Address" type="text" id = "address">
    <span class="underline"></span><br>
    <span class="error" id = "addressError"></span><br>
    <input class= "input" placeholder="Email Address" type="text" id = "email">
    <span class="underline"></span><br>
    <span class="error" id = "emailError"></span><br>
    <input class= "input" placeholder="Phone ex: (555)-555-5555" type = "text" id ="phonenumber">
    <span class="underline"></span><br>
    <span class="error" id = "phoneError"></span><br>
    <input class= "input" placeholder="School Name" type="text" id ="schoolname">
    <span class="underline"></span><br>
    <span class="error" id = "schoolError"></span><br>

    <div>
      <h4>Major/s or Intended Major/s</h4>

      <label name="PrimaryMajor"> Primary</label>
      <select name="selectMajor1" id = "primarymajor" onchange = "showOtherBox(this.options[this.selectedIndex].value)">
        <option value="CS">Computer: Science or Engineering</option>
        <option value="EE">Electrical Engineering</option>
        <option value="HCI">Human Computer Interaction</option>
        <option value="Other">Other</option>
      </select>
      <div id ="OtherBox"></div><br>
      <span class="error" id = "majorOneError"></span><br>


      <label name="SecondaryMajor"> Secondary</label>
      <select name="selectMajor2" id = "secondarymajor" onchange = "showOtherBox2(this.options[this.selectedIndex].value)">
        <option value="CS">Computer: Science or Engineering</option>
        <option value="EE">Electrical Engineering</option>
        <option value="HCI">Human Computer Interaction</option>
        <option value="Other">Other</option>
      </select>
      <div id ="OtherBox2"></div><br>
      <span class="error" id = "majorTwoError"></span><br>

    </div>

    <h5>Year in School during 2017-2018</h5>

    <input type="radio" name = "Year" id = "YearInSchool" value="Freshman"> Freshman
    <input type="radio" name = "Year" id = "YearInSchool" value="Sophomore"> Sophomore <br>
    <span class="error" id = "yearError"></span><br>

    <h5>Have you completed Introduction to Computer Science or an equivalent course?</h5>
    <input type="radio" name = "CompletedCSCourse" value="true" id = "csYes" onclick = "showCourseTextBox()"> Yes
    <input type="radio" name = "CompletedCSCourse" value="false" id = "csNo" onclick = "showCourseTextBox()"> No
    <div id ="CompletedCourseBox"></div> <br>
    <span class="error" id = "csCourseError"></span><br>


    <h5>Have you completed College Algebra or an equivalent course?</h5>
    <input type="radio" name = "Math" id = "CompletedMathCourse" value="true"> Yes
    <input type="radio" name = "Math" id = "CompletedMathCourse" value="false"> No <br>
    <span class="error" id = "mathCourseError"></span><br>


    <h4>Optional Demographics:</h4>

    <h5>Ethnic Background (Check as many as apply)</h5>
    <input class = "raceCheckBox" type="checkbox" name="AfricanAmerican" value="AfricanAmerican"> Black or African American
    <input class = "raceCheckBox" type="checkbox" name="AsianAmerican" value="AsianAmerican"> Asian American
    <input class = "raceCheckBox" type="checkbox" name="White" value="White"> White
    <input class = "raceCheckBox" type="checkbox" name="LatinoHispanic" value= "LatinoHispanic"> Hispanic, Latino or Spanish origin <br>
    <input class = "raceCheckBox" type="checkbox" name="Native" value="Native"> Native American/Alaskan Native
    <input class = "raceCheckBox" type="checkbox" name="PacificIslander" value="PacificIslander"> Pacific Islander
    <input class = "raceCheckBox" type="checkbox" name="Other" value="Other" id = "otherCheckBox" onclick="showOtherBox3()"> Other <br>
    <div id ="OtherBox3"></div> <br>
    <span class="error" id = "otherRaceError"></span><br>


    <div>
      <h5>Gender Identity</h5>
      <input type="radio" name="Gender" value="Male"> Male
      <input type="radio" name="Gender" value="Female"> Female
      <input type="radio" name="Gender" value="Other"> Other
    </div>

    <div>
      <input type="submit" value="Apply" id="submitHover">
    </div>
  </div>
</form>
