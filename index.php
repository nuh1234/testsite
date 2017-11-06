
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
      <p> Resume:<br>
      <input type="file" name="resumeFile", accept=".pdf, .doc" value="<?= $file ?>"><br>
      <span class="underline"></span>
      <span class="error"><?= $file_error ?></span></p>
      <p>
      <input class= "input" placeholder="First" type="text" name="firstname" value="<?= $firstname ?>"><br>
      <span class="underline"></span>
      <span class="error"><?= $firstname_error ?></span></p>
      <p>
      <input class = "input" placeholder="Last" type="text" name="lastname" value="<?= $lastname ?>"><br>
      <span class="underline"></span>
      <span class="error"><?= $lastname_error ?></span></p>
      <p>
      <input class= "input" placeholder="Your Email" type="text" name="email" value="<?= $email ?>">
      <span class="underline"></span>
      <span class="error"><?= $email_error ?></span></p>
      <p><input type="submit" value="Submit">
      <div class="success"><?= $success ?></div></p>
  </form>
</div>
