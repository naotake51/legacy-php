<?php
session_start();
?>

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