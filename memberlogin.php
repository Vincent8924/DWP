<?php
include("Vincentdataconnection.php");

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $password = mysqli_real_escape_string($connect, $_POST["password"]);

    $query = "SELECT * FROM member WHERE UserEmail='$email'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['UserPassword'])) {
            echo "Login successful. Welcome!";
            // 可以将用户信息存储在 session 中等其他处理
        } else {
            echo "Incorrect email or password. Please try again.";
        }
    } else {
        echo "Error in query: " . mysqli_error($connect);
    }

    mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in | KuanTan Hotels</title>
    <link rel="stylesheet" type="text/css" href="userlogin.css">
</head>
<body>
    <div id="form">
        <?php include("Vincentdataconnection.php"); ?>

        <form id="loginForm" action="" method="post">
            <img src="KuanTan Hotels2.png" alt="KuanTan Hotels Logo">
            <h1>Welcome to Kuantan Hotel</h1>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <p id="password-confirm-message"></p>

            <button type="submit" name="login">Log-in </button>
            <p><a href="#">Forget password?</a></p>
            <p>New to Our System? <a href="membersignup.php">Sign up now!</a></p>
        </form>
    </div>
</body>
</html>
