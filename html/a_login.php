<?php

session_start();

$_SESSION['a_user_email'] = 'a1@example.com';

header('Location: a_home.php');
