<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PAYMENT</title>
        <link rel="icon" type="image/x-icon" href="image/title logo.ico">
        <link rel="stylesheet" href="payment.css">
    </head>
    <?php
    $error = 0;
    include("dataconnection_payment.php");
    if(isset($_REQUEST['submit']))
    {
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $method = $_REQUEST['method'];
        $card_name = $_REQUEST['card_name'];
        $card_number = $_REQUEST['card_number'];
        $card_expire_date = $_REQUEST['card_expire_date'];
        $card_CVV = $_REQUEST['card_CVV'];

        $phone_length = strlen($phone);
        $card_number_length = strlen($card_number);
        $card_CVV_length = strlen($card_CVV);

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
    else if($phone_length >20)
    {
        $phone_error ="Invalid Phone Number";
        $error = 1;
    }

   
    if(empty($card_name))
    {
        $card_name_error ="Card Name Required";
        $error = 1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/", $card_name))
    {
        $card_name_error = "Only Letter are allowed";
        $error = 1;
    }

    if(empty($card_number))
    {
        $card_number_error = "Card Number Required";
        $error =1;
    }
    else if($card_number_length != 16){
        $card_number_error = "Invalid Card Number";
        $error = 1;
    }
    
    if(empty($card_expire_date))
    {
        $card_expire_date_error = "Card Expire Date Required";
        $error = 1;
    }
    if(empty($card_CVV))
    {
        $card_CVV_error = "Card CVV Required";
    }
    else if($card_CVV_length != 3)
    {
        $card_CVV_error ="Invalid Card CVV";
    }
   
    

    if($error == 0)
    {
        $insert_query = mysqli_query($connect, "INSERT into payment set first_name ='$first_name',last_name ='$last_name', email ='$email', phone ='$phone', method ='$method', card_name ='$card_name', card_number ='$card_number',card_expire_date='$card_expire_date', card_CVV = '$card_CVV' ");
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
        <div class="Payment">
            <div class="title">
                 <h2>PAYMENT</h2>
                 <br/>
                 <p>You may use any payment method by filling in our payment form.</p>
            </div>
            <br/><br/>

            <div class="payment">
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
                        <br/>
                        <div id ="slideshow" class="container">
                            <h3>Card Accepted:</h3>
                            <br/>
                            <div class="method-image">
                                <img src="master-card.png" class="active">
                               <img src="CIMB.png">
                                <img src="Paypal.png">
                                <img src="visa.png">          
                        </div>
                        </div>
                        <br/>
                        <select class ="" name="method" required>
                            <option value="" selected hidden>Select Your Payment Method</option>
                            <option value="MASTER CARD">MASTER CARD</option>                       
                            <option value="CIMB">CIMB</option> 
                            <option value="PAYPAL">PAYPAL</option> 
                            <option value="VISA">VISA</option> 
                        </select>
                                            
                        <div class="row50">
                            <div class="inputBox">
                                <label for="card_name">Card Name</label>
                                <input type="text" name="card_name" placeholder="Enter your Card Name">
                                <span class="text-danger"><?php if(!empty($card_name_error)){echo $card_name_error;}?></span>
                            </div>
                            <div class="inputBox">
                                <label for="card_number">Card Number</label>
                                <input type="text" name="card_number" placeholder="Enter your Card Number">
                                <span class="text-danger"><?php if(!empty($card_number_error)){echo $card_number_error;}?></span>
                            </div>                     
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <label for="card_expire_date">Card Expire Date</label>
                                <input type="date" name="card_expire_date">
                                <span class="text-danger"><?php if(!empty($card_expire_date_error)){echo $card_expire_date_error;}?></span>
                            </div>
                            <div class="inputBox">
                                <label for="card_CVV">CVV</label>
                                <input type="text" name="card_CVV" placeholder="Enter your Card CVV">
                                <span class="text-danger"><?php if(!empty($card_CVV_error)){echo $card_CVV_error;}?></span>
                            </div>                     
                        </div>
                        <div class="button-area">
                            <input type="submit" name="submit" value="SUBMIT">
                            <p id="success"></p> 
                            <div class="error"><?php if(!empty($msg)){echo $msg;}?></div>                                 
                        </div> 
                        </div>                       
                    </div>
                    
                </form>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(function() {
            var images = $(".container img"); 

            var currentIndex = 0; 

            setInterval(function() {
                images.eq(currentIndex).removeClass("active"); 

                currentIndex = (currentIndex + 1) % images.length; 

                images.eq(currentIndex).addClass("active");
            }, 3000); 
        });
    </script>
    </body>
    </html>