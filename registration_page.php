<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login yubi</title>
  <link rel="stylesheet" href="login.css">
</head> 
<body>
  <form action="registration.php" method="post">
    <div class="container">
      <label for="uname"><b>Login</b></label>
      <input type="text" placeholder="Wprowadź Login" name="new_login" required>
  
      <label for="psw"><b>Hasło</b></label>
      <input type="password" placeholder="Wprowadź Password" name="new_password" required>

      <label for="otp"><b>OTP</b></label>
      <input type="password" placeholder="Naciśnij klucz USB" name="new_otp" required>

      <button type="submit">Zarejestruj</button>
    </div>
  </form>
</body>
</html>