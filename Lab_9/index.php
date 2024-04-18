<?php session_start();

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    // if not logged in, redirect to login.php
    header("location: login.php");
} else {
    echo "Welcome to the home page, <strong>{$_SESSION['ADMIN']}</strong>";
    echo "<br> <br>";
}
?>
<button><a href="showcategory.php" style="text-decoration:none;">Categories</a></button>
<br><br>
<form method="post" action="logout.php">
    <button type="submit" name="logout">Logout</button>
</form>