<?php
session_start();
?>

<p>A User Login Email: <?php echo ($_SESSION['a_user_email'] ?? ''); ?></p>

<form action="a_login.php" method="post">
    <button>Login A</button>
</form>

<form action="a_logout.php" method="post">
    <button>Logout A</button>
</form>

<form action="new/a" method="get">
    <button>Go To A Page</button>
</form>