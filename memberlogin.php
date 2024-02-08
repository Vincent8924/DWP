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
    <?php
        if(isset($_POST['login'])) {
            $email = $_POST["email"];
            $result = mysqli_query($connect,"SELECT userpassword FROM member WHERE useremail='$email'");
            $row = mysqli_fetch_assoc($result);
            if($row)
            {
                if(password_verify($_POST["password"],$row["userpassword"]))
                {
                    echo'<script>alert("Login successful!");window.location .href="index.html"</script>;';
                }
                else
                {
                    echo"<script>alert('Password invalid!'); history.go(-1);</script>;";
                }
                
                
            }
            else
            {
                echo"<script>alert('User does not exist!'); history.go(-1);</script>;";
            }

        }

       
    ?>
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
