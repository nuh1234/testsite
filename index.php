
<?php include('sendForm.php'); ?>
<link rel="stylesheet" href="main.css" type="text/css">
<div class="container">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
  </head>
  <h1>file test build3</h1>
  <body>
    <form action="index.html">
      Resume:<br>
      <input type="file" name="resumeFile", accept=".pdf, .doc"/ required><br>
      First Name:<br>
      <input placeholder="First" type="text" name="firstname"><br>
      Last Name:<br>
      <input placeholder="Last" type="text" name="lastname"><br>
      Email:<br>
      <input placeholder="Your Email" type="text" name="email"><br>
      </p>
      <input type="submit" value="Submit">
    </form>
  </body>
</div>
