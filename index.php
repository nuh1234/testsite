
<?php include('sendForm.php'); ?>
<link rel="stylesheet" href="main.css" type="text/css">
<div class="container">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
  </head>
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h1>testing file input build</h1>
    <body>
      <p> Resume:<br>
      <input type="file" name="resumeFile", accept=".pdf, .doc"/><br>
      <span class="error"><?= $file_error ?></span></p>
      <p> First Name:<br>
      <input placeholder="First" type="text" name="firstname">
      <span class="error"><?= $firstname_error ?></span></p>
      <p> Last Name:<br>
      <input placeholder="Last" type="text" name="lastname">
      <span class="error"><?= $lastname_error ?></span></p>
      <p> Email:<br>
      <input placeholder="Your Email" type="text" name="email">
      <span class="error"><?= $email_error ?></span></p>
      <p><input type="submit" value="Submit">
      <div class="success"><?= $success ?></div></p>
    </body>
  </form>
</div>
