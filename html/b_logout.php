<?php

session_start();

$_SESSION['b_user_email'] = null;

header('Location: home.php');
