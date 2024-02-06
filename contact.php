<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CONTACT US</title>
        <link rel="icon" type="image/x-icon" href="image/title logo.ico">
        <link rel="stylesheet" href="contact.css">
    </head>
    <?php
    $error = 0;
    include("dataconnection.php");
    if(isset($_REQUEST['submit']))
    {
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $message = $_REQUEST['message'];
        if(empty($first_name))
    {
        $first_name_error ="First Name Required";
        $error = 1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/", $first_name))
    {
        $first_name_error = "Only Letter are allowed";
        $error = 1;
    }
    if(empty($last_name))
    {
        $last_name_error ="Last Name Required";
        $error = 1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/", $last_name))
    {
        $last_name_error = "Only Letter are allowed";
        $error = 1;
    }
    if(empty($email))
    {
        $email_error ="Email Required";
        $error = 1;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $email_error = "Invalid Email";
        $error =1;
    }

    if(empty($phone))
    {
        $phone_error ="Phone Number Required";
        $error = 1;
    }
    if(empty($message))
    {
        $message_error ="Message Required";
        $error = 1;
    }
    if($error == 0)
    {
        $insert_query = mysqli_query($connect, "INSERT into contact set first_name ='$first_name',last_name ='$last_name', email ='$email', phone ='$phone', message ='$message'");
        if($insert_query)
        {
            $msg = "Your Message has been sent";
        }
        else
        {
            $msg = "Your Message has not been sent";
        }   
    } 
    else{
        $msg = "Please fill all fields";
    }
    }
    
   
?>
    <body>

        <img src="image/KuanTan Hotels2.png" style="height: 50px;"/>
        <br/>
        <div id="line" class="choice">
          <a href="About us.html" >ABOUT US</a>
          <a href="room.html" >ROOM</a>
          <a href="food.html" >FOOD</a>
          <a href="experience.html" >EXPERIENCE</a>
          <a href="event.html" >EVENT</a>
          <a href="Gallery.html" >GALLERY</a>
        </div></div>
                    <br/><br/>
                    <div class="Contact">
                        <div class="title">
                             <h2>CONTACT US</h2>
                             <br/>
                             <p>You may contact us by filling in our contact form.</p>
                        </div>
                        <br/>

                        <div class="box">
                            <div class="contact form">
                                <h3>Send your message</h3>
                                <br/>

                                <form>
                                    <div class="formBox">
                                        <div class="row50">
                                            <div class="inputBox">
                                                <label for="first_name">First Name</label>
                                                <input type="text" name="first_name" placeholder="Enter your First Name">
                                                <span class="text-danger"><?php if(!empty($first_name_error)){ echo $first_name_error; }?></span>
                                            </div>
                                            <div class="inputBox">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" name="last_name" placeholder="Enter your Last Name">
                                                <span class="text-danger"><?php if(!empty($last_name_error)){echo $last_name_error;}?></span>
                                            </div>
                                        </div>
                                        <div class="row50">
                                            <div class="inputBox">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" placeholder="Enter your Email">
                                                <span class="text-danger"><?php if(!empty($email_error)){echo $email_error;}?></span>
                                            </div>
                                            <div class="inputBox">
                                                <label for="phone">Phone</label>
                                                <input type="text" name="phone" placeholder="Enter your Phone Number">
                                                <span class="text-danger"><?php if(!empty($phone_error)){echo $phone_error;}?></span>
                                            </div>
                                        </div>
                                        <div class="row100">
                                            <div class="inputBox">
                                                <label for="message">Message</label>
                                                <textarea name="message"  placeholder="Write your message here..."></textarea>
                                                <span class="text-danger"><?php if(!empty($message_error)){echo $message_error;}?></span>
                                            </div>
                                           
                                        </div>

                                        <div class="row100">
                                        <div class="button-area">
                                        <input type="submit" name="submit" onclick="return confirmation();" value="SUBMIT">
                                        <p id="success"></p> 
                                        <div class="error"><?php if(!empty($msg)){echo $msg;}?></div>                                 
                        </div>                                           
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="contact address">
                                <h3>Address</h3>
                                <br/>
                                <div class="addressBox">
                                    <div>
                                        <span><ion-icon name="location-outline"></ion-icon></span>
                                        <br/>
                                        <p> Teluk Cempedak, 25050 Kuantan, Pahang, Malaysia.</p>
                                    </div>
                                    <br/>
                                    <div>
                                        <span><ion-icon name="call-outline"></ion-icon></span>
                                        <br/>
                                        <p> +601163056102</p>
                                    </div>
                                    <br/>
                                    <div>
                                        <span><ion-icon name="mail-outline"></ion-icon></span>
                                        <br/>
                                        <p> ljvkuantan@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="contact map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7973.5428783378!2d102.28077820711455!3d2.2393216074320024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1e572c43f3e8b%3A0x81e09df4127e42e6!2sPantai%20Hospital%20Ayer%20Keroh!5e0!3m2!1sen!2smy!4v1700529618214!5m2!1sen!2smy" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                            </div>

                                </div>   
    </body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>     
<script>
function confirmation()
{
	answer = confirm("Do you want to submit your contact?");
	return answer;
}
    </script>          
</html>
