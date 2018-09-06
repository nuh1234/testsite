//An Example of form validation using PHP
<?php
$firstname_error = "";
$lastname_error = "";
$phonenumber_error = "";
$email_error = "";
$file_error = "";
$firstname = "";
$lastname = "";
$phonenumber = "";
$email = "";
$file = "";
$success = "";

//Send email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  print_r($_POST);
  # code...
  if (empty($_POST["firstname"])) {
    $firstname_error = "Enter your firstname";
  }else {
    $firstname = test_input($_POST["firstname"]);
     //if this data isn't letters
    if (!preg_match("/^[a-zA-Z]+$/",$firstname)) {
      $firstname_error = "Only letters please :)";
    }
  }
  if (empty($_POST["lastname"])) {
    $lastname_error = "Enter your last name";
  }else {
    $lastname = test_input($_POST["lastname"]);
    //if this data isn't letters
    if (!preg_match("/^[a-zA-Z]+$/",$lastname)) {
      $lastname_error = "Only letters please :)";
    }
  }
  if (empty($_POST["email"])) {
    $email_error = "Enter a valid email address";
  }else {
    $email = test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid Email";
    }
  }
  if(empty($_POST["phonenumber"])){
    $phonenumber_error = "Phone number required";
  }else {
    $phonenumber = test_input($_POST["phonenumber"]);
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i", $phonenumber)) {
      $phonenumber_error = "Please enter a valid phone number";
    }
  }
  if (empty($_POST["resumeFile"])) {
    $file_error = "Please include your (.doc .pdf) resume";
  }else {
    $file = test_input($_POST["resumeFile"]);
  }
  if ($firstname_error == "" and $lastname_error == "" and $phonenumber_error == "" and $email_error == "" and $file_error == "") {
    $message = '';
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) {
      $message .= "$key: $value\n";
    }
    $to = 'nuh.mohamud@gmail.com';
    $subject = "YT Website Submission";
    if(mail($to, $subject, $message)){
      $success = "Application Sent!";
      $firstname = $lastname = $phonenumber = $email = $file = "";
      //Note to self set variables to null on the way out
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


 ?>
