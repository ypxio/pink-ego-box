<?php

session_start();

echo "SESSION CHECK";

echo "<pre>";
print_r($_SESSION);
print_r($_COOKIE);
// echo $_SESSION['login'];