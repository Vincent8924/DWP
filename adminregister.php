<?php include("Vincentdataconnection.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | KuanTan Hotels</title>
    <link rel="stylesheet" type="text/css" href="adminregister.css">
</head>
<body>
    
    <div id="form">
    <?php
    
        if(isset($_POST['login'])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $age = $_POST["age"];
            $email = $_POST["email"];
            $contactnum = $_POST["contactnum"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            mysqli_query($connect,"INSERT INTO admin(adminname, adminlastname, adminage, adminemail, admincontactnum, adminpassword) VALUES ('$firstname','$lastname','$age','$email','$contactnum','$password')");
            
             ?>
            
            <script type="text/javascript">
                    alert("Registration successful. You can now proceed to log in.");
                    window.location.href = 'memberlogin.php';
                </script>
            <?php
    
        }
    
    ?>




<form id="reg" method="post">
            <div >
                <img src="KuanTan Hotels.png" id="logo" />
            </div>
            <p>
                <br/><br/>
                <div id="reg-form">
                    <form name="regfrm">

                        <p><input type="text" name="firstname" placeholder="Please Enter your firstname" required/></p>
                      
                        <p><input type="text" name="lastname" placeholder="Please Enter your lastname" required/></p>
                        
                        <p><input type="number" name="age" placeholder="Please Enter your age" required/></p>
                        
                        <p><input type="email" name="email" placeholder="Please Enter your email" required/></p>
                        
                        <p><input type="text" name="contactnum" placeholder="Please Enter your contact number" required/></p>
                        
                        <p><input type="password" id="password" name="password" placeholder="Please Enter your password" required  oninput="checkPasswordLength()"/></p>
                        
                        <p><input type="password" id="confirmPassword" name="confirmpassword" placeholder="Please Enter your password again" required  oninput="checkPasswordMatch()"/></p>
                        
                        <div  class="alert">
                        <p id="password-length-message"></p>
                        <p id="password-confirm-message" ></p>
                        </div>

                        <button type="submit" name="login">Login</button>
                    </form>


                    <p><a href="adminlogin.php">Already have account?Login now.</a></p>
                    
                    
                </div>
            </p>

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
            var message = document.getElementById("password-length-message");

            if (password.length < 8) {
                message.textContent = "Password must be at least 8 characters long!";
            } else {
                message.textContent = "";
            }
        }

    </script>
</body>
</html>
