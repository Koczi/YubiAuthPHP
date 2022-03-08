<?php

session_start();

unset($_SESSION['user']);

session_destroy();

$status = 0;

header("Location: http://localhost:3000/index.php");