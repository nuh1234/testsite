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

if ($_SERVER["REQUEST_METHOD"] == "POST") { //POST FUNC
  # code...
  if (empty($_POST)["firstname"]) {
    $firstname_error = "Enter your firstname";
  }else {
    $firstname = test_input($_POST["firstname"]);
    if (preg) {
      # code...
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
