<?php include("Vincentdataconnection.php"); ?> 
<!DOCTYPE html>
<html>

    <head>
        <title>Admin Login</title>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="adminlogin.css">

    </head>
    <body>

        <?php
        if(isset($_POST['login'])) {
            $ID = $_POST["id"];
            $result = mysqli_query($connect,"SELECT adminpassword FROM admin WHERE adminID='$ID'");
            $row = mysqli_fetch_assoc($result);
            if($row)
            {
                if(password_verify($_POST["password"],$row["adminpassword"]))
                {
                    echo'<script>alert("Login successful!");window.location.href="admindashboard.php"</script>;';
                }
                else
                {
                    echo"<script>alert('Password invalid!Please Try Again!'); history.go(-1);</script>;";
                }
                
                
            }
            else
            {
                echo"<script>alert('Admin does not exist!'); history.go(-1);</script>;";
            }

        }
        ?>
        <form id="login" method="post">
        <?php include("Vincentdataconnection.php"); ?>

            <div >
                <img src="KuanTan Hotels.png" id="logo" />
            </div>
            <p>
                <br/><br/>
                <div id="login-form">
                    <form name="loginfrm">
                        <p><input type="text" name="id" placeholder="Please Enter your ID"/></p>
                        <p><input type="password" name="password" placeholder="Please Enter your Password"/></p>
                        <button type="submit" name="login">Login</button>
                    </form>
                    
                    <p><a href="#">Forgot your password?</a></p>
                    <p><a href="adminregister.php">New admin?Register now.</a></p>
                    
                </div>
            </p>

        </form>




    </body>
</html>