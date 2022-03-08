<?php

require_once("db.php");
session_start();



if (in_array($_POST['login'], LOGIN))
{
  $i = array_search($_POST['login'], LOGIN);
  if (password_verify($_POST['password'], PASSWORD[$i]))
  {
    if (password_verify(substr($_POST['otp'],0,12), KEY[$i]))
    {
      $ch = file_get_contents("https://api.yubico.com/wsapi/2.0/verify?id=1&otp=".$_POST['otp']."&nonce=aef3a7835277a28da831005c2ae3b919e2076a62");
      if (strpos($ch,"status=OK")!==false)
      {
        $_SESSION['user'] = htmlspecialchars($_POST['login']);
        header('Location: http://localhost:3000/index.php');
      }
      elseif (strpos($ch,"status=REPLAYED_OTP")!==false || strpos($ch,"status=REPLAYED_REQUEST")!==false)
      {
        $status ="Klucz został już wykorzystany";
        echo "<script type='text/javascript'>alert('$status');
        window.location.replace(\"./index.php\")</script>";
      }
      elseif (strpos($ch,"status=BAD_OTP")!==false)
      {
        $status = "Klucz jest niepoprawny";
        echo "<script type='text/javascript'>alert('$status');
        window.location.replace(\"./index.php\")</script>";
      }
      else
      {
        $status = "Coś poszło nie tak...";
        echo "<script type='text/javascript'>alert('$status');
        window.location.replace(\"./index.php\")</script>";
      }
    }
    else
    {
      $status = "Klucz nie pasuje do podanego użytkownika";
      echo "<script type='text/javascript'>alert('$status');
      window.location.replace(\"./index.php\")</script>";
    }
  }
  else
  {
    $status = "Niepoprawne hasło";
    echo "<script type='text/javascript'>alert('$status');
    window.location.replace(\"./index.php\")</script>";
  }
}
else
{
  $status = "Użytkownik nie istnieje";
  echo "<script type='text/javascript'>alert('$status');
  window.location.replace(\"./index.php\")</script>";
}