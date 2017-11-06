
<?php include('sendForm.php'); ?>
<link rel="stylesheet" href="main.css" type="text/css">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
  </head>
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h1>testing file input build</h1>
      <div class="wrapper">
        <input class= "input" placeholder="First" type="text" name="firstname" value="<?= $firstname ?>">
        <span class="underline"></span><br>
        <span class="error"><?= $firstname_error ?></span></p>
        <p>
        <input class = "input" placeholder="Last" type="text" name="lastname" value="<?= $lastname ?>">
        <span class="underline"></span><br>
        <span class="error"><?= $lastname_error ?></span></p>
        <p>
        <input class= "input" placeholder="Your Email" type="text" name="email" value="<?= $email ?>">
        <span class="underline"></span><br>
        <span class="error"><?= $email_error ?></span></p>
        <p>
          <input type="file" name="resumeFile", accept=".pdf, .doc" value="<?= $file ?>"><br>
          <span class="error"><?= $file_error ?></span></p>
          <input type="submit" value="Apply">
        <p>
        <div class="success"><?= $success ?></div></p>
      </div>
  </form>
