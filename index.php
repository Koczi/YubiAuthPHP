<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login yubi</title>
  <link rel="stylesheet" href="login.css">
</head> 
<body>
<?php if(empty($_SESSION['user'])) : ?>
  <form action="login.php" method="post">
    <div class="container">
      <label for="uname"><b>Login</b></label>
      <input type="text" placeholder="Wprowadź Login" name="login" required>
  
      <label for="psw"><b>Hasło</b></label>
      <input type="password" placeholder="Wprowadź Password" name="password" required>

      <label for="otp"><b>OTP</b></label>
      <input type="password" placeholder="Naciśnij klucz USB" name="otp" required>

      <button type="submit">Wyślij</button>
      <br><a href="registration_page.php">Zarejestruj</a>
    </div>
  </form>
  <?php else : ?>
    <form action="logout.php" method="post">
    <div class="container">
      <label>Witaj <?=$_SESSION['user']?> zalogowałeś się pomyślnie!</label>
      <button type="submit">Wyloguj</button>
    </div>
    <?php endif; ?>
</body>
</html>