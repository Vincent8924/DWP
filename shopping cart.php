<?php include("dataconnection.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SHOPPING CART</title>
        <link rel="icon" type="image/x-icon" href="image/title logo.ico">
        <style type="text/css">

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

              
                .order h1{
                    font-weight:bold;
                    text-align:center;
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

                .right-bar{
                    flex:25%;
                    margin-left: 20px;
                    padding: 20px;
                    border-radius: 5px;
                    background: yellow;
                    box-shadow: black 0 7px 29px 0;
                }

                .right-bar hr{
                    margin-bottom: 25px;
                }
                .right-bar p{
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 30px;
                    font-size: 20px;
                }
                .right-bar a{
                    background-color: green;
                    color: white;
                    text-decoration: none;
                    display: block;
                    text-align: center;
                    height: 40px;
                    line-height: 40px;
                    font-weight: 900;
                }

                img{
                    width:100px;
                    height:100px;
                }

                button{
                    justify-content: center;
                    align-items: center;
                    background-color:red;
                    font-weight:bold;
                    color:white;
                    width:100%;
                    height:100%;
                    
                }

                #total{
    text-align:center;
    font-weight:bold;
    color:green;
}

#total a{
    background-color: green;
                    color: white;
                    text-decoration: none;
                    display: block;
                    text-align: center;
                    height: 40px;
                    line-height: 40px;
                    font-weight: 900;
}
        
        </style>
        </head>
    <body>
    <?php include("user_menu.php");?>
       
    <div class="order">
                <h1>Shopping Cart</h1>
                
                       
                <table>
            <tr>
				<th>Room Type</th>
                <th>Booking Date</th>
				<th>Check-in-Date</th>	
                <th>Check-out-Date</th>
                <th>Day</th>		
                <th>Price(RM)</th>		
				<th>Action</th>
			</tr>
            <?php
            mysqli_select_db($connect,"hotel");
            if (isset($_POST['remove'])) {
                $roomTypeToRemove = $_POST['room_type'];
                $query = "DELETE FROM `order` WHERE room_type = '$roomTypeToRemove'";
                mysqli_query($connect, $query);
            }
			$result = mysqli_query($connect, "SELECT * FROM `order`");
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
					<td><form method="post" action="">
                        
                <input type="hidden" name="room_type" value="<?php echo $row["room_type"]; ?>">
                <button type="submit" name="remove" onclick="return confirmation();">REMOVE</button>
            </form></td>
				</tr>
                
                <?php
}


if ($totalPrice > 0) {
    ?>
    </table> 
    <div id="total">
    <p>Total: RM <?php echo number_format($totalPrice);?></p>
        <a href="payment.php">Checkout</a>
    <?php
} else {
    echo "<p>Your shopping cart is empty. Add items to your cart before proceeding to checkout.</p>";
}
?>

</div>

                 
          
                </div>                
            
            <script>
            function confirmation()
{
	answer = confirm("Do you want to delete this order?");
	return answer;
}
</script>          
</body>
</html>
