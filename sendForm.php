<?php
$firstname_error = "";
$lastname_error = "";
$email_error = "";
$file_error = "";
$firstname = "";
$lastname = "";
$email = "";
$file = "";
$success = "";
//Send email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # code...
  if (empty($_POST["firstname"])) {
    $firstname_error = "Enter your firstname";
  }else {
    $firstname = test_input($_POST["firstname"]);
     //if this data isn't letters
    if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
      $firstname_error = "Your first name please";
    }
  }
  if (empty($_POST["lastname"])) {
    $lastname_error = "Enter your last name";
  }else {
    $lastname = test_input($_POST["lastname"]);
    //if this data isn't letters
    if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
      $lastname_error = "Your last name please";
    }
  }
  if (empty($_POST["email"])) {
    $lastname_error = "Enter a valid email address";
  }else {
    $email = test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid Email";
    }
  }
  if (firstname_error == "" and lastname_error == "" and email_error == "") {
    $message = '';
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) {
      $message .= "$key: $value\n";
    }

    $to = 'nuh.mohamud@gmail.com';
    $subject = "YT Website Submission";
    if(mail($to, $subject, $message)){
      $success = "Application Sent!";
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
