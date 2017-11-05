
<?php include('sendForm.php'); ?>
<link rel="stylesheet" href="main.css" type="text/css">
<div class="container">
  <head>
    <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
  </head>
  <h1>file test build3</h1>
  <body>
    <form action="index.html">
      Resume:<br>
      <input type="file" name="resumeFile", accept=".pdf, .doc"/><br>
      <fieldset>
      First Name:<br>
      <input placeholder="First" type="text" name="firstname">
      <span class="error"><?= firstname_error ?></span>
      </fieldset>
      Last Name:<br>
      <input placeholder="Last" type="text" name="lastname">
      <span class="error"><?= lastname_error ?></span>
      Email:<br>
      <input placeholder="Your Email" type="text" name="email">
      <span class="error"><?= $email_error ?></span>
      </p>
      <input type="submit" value="Submit">
      <div class="success"><?= $success ?></div>
    </form>

    </div>
  </body>
</div>
