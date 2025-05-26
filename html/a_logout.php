<?php

session_start();

$_SESSION['a_user_email'] = null;

header('Location: home.php');
