
<?php include("Vincentdataconnection.php"); ?>
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
        <form id="registrationForm">
        <img src="KuanTan Hotels2.png" alt="KuanTan Hotels Logo">
        <h1>Welcome to Kuantan Hotel</h1>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <p id="password-confirm-message"></p>

        <button type="submit">Log-in </button>
        <p><a href="#">Forget password?</a></p>
        <p>New to Our System? <a href="#">Sign up now!</a></p>
    </div>
    
    </form>

</body>
</html>
