<?php

session_start();

$_SESSION['b_user_email'] = 'b1@example.com';

header('Location: b_home.php');
