<?php include('dataconnection.php'); ?>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/x-icon" href="title logo.ico">
    <link rel="stylesheet" type="text/css" href="order.css">

   



    <title>Hotels and Resorts | KuanTan Hotels</title>
</head>
<body>
    <img src="KuanTan Hotels2.png" id="logo"/>
    <br/>
    <div id="line" class="choice">
        <a href="about us.html">ABOUT US</a>
        <a href="c room.html" class="nowpage">ROOM</a>   
        <a href="food.html">FOOD</a>
        <a href="experience.html">EXPERIENCE</a>
        <a href="event.html">EVENT</a>
        <a href="gallery.html">GALLERY</a>
        <br/><br/><br/> <br/><br/><br/>
        <div class="wupx"><u>Add your order into cart</u></div>
        

        
            <?php
            $row = [];
            if(isset($_GET["buy"])) {
                $rt = $_GET["room_type"];
                $result = mysqli_query($connect, "SELECT * FROM room_category WHERE room_type = '$rt'");
                $row = mysqli_fetch_assoc($result);
            }
            ?>

            <?php
            $result = mysqli_query($connect, "SELECT * FROM room_category");	
            
            ?>	

<table border="0"   class="formBox">
        <tr>

        
            <td >
                <span>
                    
                        <img class="picture"  src="<?php echo $row['picture']?>">

                </span>
                
            </td>
            
        </tr>
        <tr>   
            <td rowspan="1">
                
            
           
                <div class="shipx"><?php echo $row['room_type']?></div><br/>
                <div class="erpx" ><?php echo $row['comment']?> <br/><br/><br/>
                
                <b><i>Price : RM<?php echo $row['price']?> per day</i></b></div>
                
            </td>
       
            
            
        </tr>
        <br/><br/><br/><br/>
      
        
        <?php
        
        		
    
    ?>



        </table>

      
        

        <?php
        if (isset($_POST['add_cart'])) 
        {

            $result = mysqli_query($connect, "SELECT price FROM room_category WHERE room_type = '$rt'");
            $row = mysqli_fetch_assoc($result);
            $baseprice = $row['price'];
            
            $cin = $_POST['check_in'];
            $cout = $_POST['check_out'];
            $days = ['days'];
            $total = ['total_price'];
            $bdate = $_POST['book_date'];

            if(empty($bdate) || empty($cin) || empty($cout) || empty($days)) {
                ?>
                <script>
                    alert("Please fill in all fields.");
                </script>
                <?php
            } 
           
            else
            {

                $checkInDate = new DateTime($cin);
                $checkOutDate = new DateTime($cout);

                $dateDifference = $checkOutDate->diff($checkInDate);

                $days = $dateDifference->days;

                $total = $baseprice * $days;
            
            //else insert into database
            mysqli_query($connect, "INSERT INTO `order` (booking_date,check_in,check_out,`days`,room_type,total_price) 
            VALUES('$bdate','$cin', '$cout', '$days','$rt','$total')");
            //need to put '' cause can't calculate

                ?>
                <script type="text/javascript">
                    alert("Record saved!");
                    window.location.href = "room list.php";
                </script>

                <?php

            }
        }

        ?>

        <br/><br/><br/>
        
        <form name="addnewfrm" method="post" action="">
            <h1>Please fill in the order information below</h1>
            <br/><hr/><br/><br/><br/>

            
            
            <div  class="formbox">
            <p class="erpx">Booking Date : <input type="date" name="book_date"></p>
            
            <p class="erpx">Date of Check-In: <input type="date" name="check_in"></p>
            <p class="erpx">Date of Check-Out: <input type="date" name="check_out"></p>
            <br/><hr/><br/><br/><br/>
            <button type="submit" name="add_cart" value="Add to cart">Add to cart</button>
            </div>
        </form>
        <br/><br/><br/><br/>
</body>
</html>
