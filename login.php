<?php
session_start();

if (isset($_POST['login'])) {
    // Authenticate user (replace with your authentication logic)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sample authentication (replace with your own)
    if ($username == 'tannu' && $password == 'password') {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <form method="POST">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
    <?php if (isset($error)) {
        echo $error;
    } ?>
</body>

</html>