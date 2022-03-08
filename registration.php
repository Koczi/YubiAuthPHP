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
<form action="index.php" method="post">
    <div class="container">
      <label><p>Niestety proces rejestracji jest dosyć prymitywny... bardzo prymitywny.
        Aby dodać konto trzeba wejść w plik db.php i do tablic LOGIN, PASSWORD i KEY dodać: 
        <br><b>LOGIN: </b><?=$_POST['new_login']?> 
        <br><b>PASSWORD: </b><?=password_hash($_POST['new_password'],PASSWORD_BCRYPT)?>
        <br><b>KEY: </b><?=password_hash(substr($_POST['new_otp'],0,12),PASSWORD_BCRYPT)?>
        <br>a następnie zrestartować serwer. Za niedogodności przepraszam. :)</label>
      <button type="submit">Powrót do logowania</button>
    </div>
  </form>
</body>
</html>