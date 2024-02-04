<?php include("Vincentdataconnection.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | KuanTan Hotels</title>
    <link rel="stylesheet" type="text/css" href="usersignup.css">
</head>
<body>
    
    <div id="form">
    <?php
    
        if(isset($_POST['submit'])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];

            
            mysqli_query($connect,"INSERT INTO member(UserName, UserLastName, UserEmail, UserPassword) VALUES ('$firstname', '$lastname', '$email', '$password')");
	
            if (mysqli_error($connect)) {
                echo "MySQL Error: " . mysqli_error($connect);
            } else {
                echo "Saved";
            }
    //        $errors = array();
        }
    /*        if(empty($firstname) OR empty($lastname) OR empty($email) OR empty($password) OR empty($confirmPassword))
            {
                array_push($errors, "All fields are required!");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                array_push($errors, "Email is not valid!");
            }
            if(strlen($password) < 8)
            {
                array_push($errors, "Password must be at least 8 characters long.");
            }
            if($password !== $confirmPassword)
            {
                array_push($errors, "Password does not match!");
            }

            if (count($errors) > 0)
            {
                echo "<div>";
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
                echo "</div>";
            }
            else
            {
                
            }
        }
        */
        ?>




        <form id="registrationForm" action="" method="post">
        <img src="KuanTan Hotels2.png" alt="KuanTan Hotels Logo">
        <h1>Welcome to Kuantan Hotel</h1>

        <label for="firstname">Fisrt Name :</label>
        <input type="text" id="firstname" name="firstname" required>
        <label for="lastname">Last Namer :</label>
        <input type="text" id="lastname" name="lastname" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password" required oninput="checkPasswordLength()">

        <label for="confirmPassword">Confirm Password :</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required oninput="checkPasswordMatch()">
        
        <div  class="alert">
            <p id="password-length-message"></p>
            <p id="password-confirm-message" ></p>
        </div>
        

        <button type="submit" name="summit">Sign Up</button>
        <p><a href="memberlogin.php">Already have an account?</a></p>
    </div>
    
    </form>

    <script>
        function checkPasswordMatch() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var message = document.getElementById("password-confirm-message");

            if (password !== confirmPassword) {
                message.textContent = "Passwords do not match!";
            } else {
                message.textContent = "";
            }
        }
        function checkPasswordLength() {
            var password = document.getElementById("password").value;
            var message = document.getElementById("password-length-message"); // 请替换为实际的元素 ID

            if (password.length < 8) {
                message.textContent = "Password must be at least 8 characters long!";
            } else {
                message.textContent = "";
            }
        }

    </script>
</body>
</html>
