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
    include("dataconnection.php");
    if(isset($_REQUEST['submit']))
    {
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $method = $_REQUEST['method'];
        $card_name = $_REQUEST['card_name'];
        $card_number = $_REQUEST['card_number'];
        $card_expire_date = $_REQUEST['card_expire_date'];
        $card_CVV = $_REQUEST['card_CVV'];
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
   
    if ($error == 0) {
        // Copy data from the order table to user_order table
        $result = mysqli_query($connect, "SELECT * FROM order");
        
        while ($row = mysqli_fetch_assoc($result)) {
            $room_type = $row['room_type'];
            $booking_date = $row['booking_date'];
            $check_in = $row['check_in'];
            $check_out = $row['check_out'];
            $days = $row['days'];
            $total_price = $row['total_price'];
    
            // Insert each order into user_order table
            $insert_query = mysqli_query($connect, "INSERT INTO user_order (first_name, last_name, room_type, booking_date, check_in, check_out, days, method, price) 
                                                    VALUES ('$first_name', '$last_name', '$room_type', '$booking_date', '$check_in', '$check_out', '$days', '', $total_price)");
            
            if (!$insert_query) {
                $error = 1;
                $msg = "Failed to insert order";
                break; 
            }
        }
    
        if ($error == 0) {
            $update_query = mysqli_query($connect, "UPDATE user_order 
                                                    SET method = '$method'
                                                    WHERE first_name = '$first_name' AND last_name = '$last_name'");
            
            if ($update_query) {
                $msg = "Your orders have been processed successfully";
                $delete_query = mysqli_query($connect, "DELETE FROM order");
                if (!$delete_query) {
                    $msg .= ", but failed to delete orders";
                }
            } else {
                $msg = "Failed to update method";
            }
        }
    } else {
        $msg = "Please fill all fields";
    }

}
    
   
?>
<style>
    *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


.order{
    margin: 0 auto;
    position: relative;
    width: 60%;
    justify-content: center;
    align-items: center;
    box-shadow: 0 5px 35px black;
    padding:30px 40px;
    border-radius: 10px;
    background-color:lightblue;
}
.order h3{
    text-align: center;
}

table, tr, th, td
{
    display:flex;
    flex:75%;
    border:2px solid black;
    border-collapse: collapse;
    width:700px;
    text-align: center;
    margin:0 auto;
}
th{
    background-color: gray;
    
}
td{
    background-color:white;
}

.Payment .title
{
    text-align: center;

}

.Payment .title h2{
    font-weight: bold;
    font-size: 27px;
}

.Payment .title p{
    font-size: 23px;
    margin:0 auto;
}

.payment{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;  
}

.formBox{
    position: relative;
    width: 100%;
    background-color: orange;
    box-shadow: 0 5px 35px black;
    padding:30px 40px;
    border-radius: 10px;
}
.formBox .row50
{
    display: flex;
    gap:20px;
}

.inputBox{
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    width: 50%;
}

.inputBox label{
    color:blue;
    margin-top: 10px;
    margin-bottom: 5px;
    font-weight: bold;
    display: block;
}

.inputBox input{
    padding: 10px;
    font-size: 1.1em;
    outline: none;
    border: 1px solid black;
}

.container {
    color:green;
    height:100%;
    width:100%;
    text-align: center;
    justify-content: center;
    align-items: center;
}

img{
    width:100px;
    height:60px;
}


   
#slideshow img:not(.active) 
{
    display: none;
}  

select{
    border: 1px solid black;
    padding:10px 150px;
}
.button-area input[type="submit"]
{
    background: gray;
    color: white;
    border: none;
    font-size: 1.1em;
    max-width: 120px;
    font-weight: 500;
    cursor: pointer;
    padding: 14px 15px;
    
}

.button-area span{
    margin-left: 20px;
    color: blue;
    font-weight: bold;
    
}

.text-danger{
    color:red;
}

.error
{
    color:red;
  
}

#total{
    text-align:center;
    font-weight:bold;
    color:green;
}
</style>
    <body>
    <?php include("user_menu.php");?>

        <div class="Payment">
            <div class="title">
                 <h2>PAYMENT</h2>
                 <br/>
                 <p>You may use any payment method by filling in our payment form.</p>
            </div></br/>
            <div class="order">
                <h3>Order Details:</h3>
                <br/>
            <table>
            <tr>
				<th>Room Type</th>
                <th>Booking Date</th>
				<th>Check-in-Date</th>	
                <th>Check-out-Date</th>
                <th>Day</th>		
                <th>Price(RM)</th>
		
			</tr>
            <?php 
                mysqli_select_db($connect,"hotel");
                $result = mysqli_query($connect, "SELECT * FROM order");
                $totalPrice = 0;	
                while($row = mysqli_fetch_assoc($result))
                   {
                       $totalPrice += $row["total_price"];
                   ?>	
                    <tr>
					<td><?php echo $row["room_type"]; ?></td>
                    <td><?php echo $row["booking_date"]; ?></td>					
                    <td><?php echo $row["check_in"]; ?></td>
                    <td><?php echo $row["check_out"]; ?></td>
                    <td><?php echo $row["days"]; ?></td>
					<td><?php echo $row["total_price"]; ?></td>
			</tr>
            <?php
				}		
			
			?>   
                </table>
                <br/>
                <div id="total">
                    <p name="price">Total: RM <?php echo number_format($totalPrice);?></p>
            </div>
            </div><br/><br/>
        

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
                            <input type="submit" name="submit" value="SUBMIT" onclick="return confirmation();">
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
        function confirmation()
{
	answer = confirm("Do you want to submit your payment?");
	return answer;
}
    </script>
    </body>
    </html>