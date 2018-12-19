<?php
$servername = "localhost";
$username = "manas";
$password = "Manas@113198";

$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE IF NOT EXISTS CONTACT";

mysqli_close($conn);

$dbname = "CONTACT";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS DETAILS (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
subject VARCHAR(50),
message TEXT
)";

mysqli_query($conn, $sql);

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO DETAILS(name,email,subject,message) VALUES('$name', '$email', '$subject', '$message')";

mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>Contact - Sent</title>
  </head>
  <body>

    <div class="hero shadow">
      <h1>Your Message</h1>
    </div>
    <div class="main">
      <div class="main-heading">
        Thank you for sending us a message, here is a review of what you sent:
      </div>
      <br>
      <div class="container lead main-body">

        <?php
        echo "<i>Name:</i> $name <br><br><i>E-mail:</i> $email <br><br><i>Subject:</i> $subject <br><br><i>Message:</i> $message";
        ?>

      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<?php

mysqli_close($conn);

?>
