<?php
  echo '<!DOCTYPE html>
  <html lang="it" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Vinyl - About</title>
      <link rel="shortcut icon" type="image/png" href="../resources/logo/favicon.png"> <!-- Set site icon/favicon  -->
      <link rel="stylesheet" href="../css/default.css"> <!-- Link to style/css file -->
      <script type="text/javascript"> // Load header into the page
        fetch("../default/header.html")
          .then(response => {
            return response.text()
          })
          .then(data => {
            document.querySelector("header").innerHTML = data;
        });
      </script>
    </head>
    <header></header>
  </html>
';
  $name = $_POST['uname'];
  $password = $_POST['psw'];
  echo "<br><br><br><br><br><br>Username: $name <br>";
  echo "Password: $password <br>";
 ?>
