<?php
require ("connection.php");
if (isset($_POST['signIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE user_name = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = true;   // for logout or other pages to avoid url entry
        $_SESSION['ADMIN'] = $username;
        header('location: index.php'); // redirect to index.php
        die();
    } else {
        echo "Please enter correct details.";
    }
}
?>

<form method="post">
    <label>Username</label>
    <input type="text" name="username"><br><br>

    <label>Password</label>
    <input type="password" name="password"><br><br>

    <button type="submit" name="signIn">Sign In</button>
</form>