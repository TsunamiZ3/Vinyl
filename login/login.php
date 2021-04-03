<?php
  echo '<!DOCTYPE html>
  <html lang="it" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Vinyl - About</title>
      <link rel="shortcut icon" type="image/png" href="../resources/logo/favicon.png"> <!-- Set site icon/favicon  -->
      <link rel="stylesheet" href="../css/default.css"> <!-- Link to style/css file --> <!-- Load default css into the page -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- Load jquery into the page -->
      <script src="../script/load-header-footer.js"> // Load header into the page</script>
    </head>
    <header></header>
  </html>
';
  $name = $_POST['uname'];
  $password = $_POST['psw'];
  echo "<br><br><br><br><br><br>Username: $name <br>";
  echo "Password: $password <br>";
 ?>
