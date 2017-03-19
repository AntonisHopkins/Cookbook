<?php

echo "<!DOCTYPE html >
<html >
<head>
<meta http-equiv='Content-Type' content='text/html charset=utf-8' />

<title>Cook Book</title>
    <link rel='stylesheet' type ='text/css' href='index.css' />
    <script src='index.js'> </script>
</head>
<body background='./imgs/img1.jpg'>

<div class='container'>
  <div class='header'><a href='index.php'><img src='imgs/cookbook.jpg' alt='Insert Logo Here' name='Insert_logo' width='180' height='90' id='Insert_logo' style='background: #C6D580; display:block;' /></a> 
    </div>
  <div class='sidebar1'>
    <ul class='nav'>
      <li><a href='login.php'>Log in</a></li>
      <li><a href='signin.php'>Sign in</a></li>
      <li><a href='main.php'>Cook Book Search</a></li>
      <li><a href='#'>Link four</a></li>
    </ul>
	<p> <b> Πληροφορίες για την ιστοσελίδα </b> </p>
    <p> Αν θέλετε να κάνετε log in ή sign in στην ιστοσελίδα μας τότε πατήστε αντίστοιχα το πρώτο ή το δεύτερο κουμπί για να δώσετε τα στοιχεία σας και να συνδεθείτε.</p>
    <p> Αν επιθυμείτε να αναζητήσετε μια συνταγή είτε μέσω των υλικών που διαθέτετε είτε μέσω του χρόνου διαρκείας των συνταγών μεταβείτε το τρίτο κούμπι.</p>
    </div>
  <p>&nbsp;</p>
  <div class='content'>
    <h1><u>Cook book </u></h1>
    <p></p>
    <h2>Τι είναι το cook book;</h2>
    <p> Το cook book είναι μια ιστοσελίδα που δημιουργήθικε από φοιτητές στα πλαίσια ενός project.</p>
    <h3>Σκοπός της σελίδας</h3>
    <p>Ο σκοπός μας ήταν να δημιουργήσουμε μια φιλόξενη, γεμάτη ζωντάνια και αρκετές υπηρεσίες προς τον χρήστη σελίδα ώστε να τον βοηθήσουμε μέσα από αυτές τις υπηρεσίες να βρει την συνταγή φαγητού που αναζητά.</p>
    <h4></h4>
    <p>Ευχαριστούμε για την επίσκεψή σας.</p>
  </div>
  <div class='footer'>
    <p>Copyrights reserved to cook book developers</p>
    </div>
  </div>
</body>
</html>";
$_SESSION["msg"]=null;
?>