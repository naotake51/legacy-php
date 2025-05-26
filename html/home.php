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

<hr />

<p>B User Login Email: <?php echo ($_SESSION['b_user_email'] ?? ''); ?></p>

<form action="b_login.php" method="post">
    <button>Login B</button>
</form>

<form action="b_logout.php" method="post">
    <button>Logout B</button>
</form>

<form action="new/b" method="get">
    <button>Go To B Page</button>
</form>