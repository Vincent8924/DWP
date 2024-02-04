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
        <br/><br/><br/>
        <p><h1>Add your order into cart</h1></p>

        <table border="0" width="650px">
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
            while($row = mysqli_fetch_assoc($result)) {
            ?>	
                <tr>
                    <td><img class="picture"  src="<?php echo $row['picture']?>" ></td>
                    <td><?php echo $row['room_type']?></td>
                    <td><?php echo $row['room_quantity']?></td>
                </tr>
            <?php
            }		
            ?>
        </table>

      
        

        <?php
        if (isset($_POST['add_cart'])) 
        {
            $name = $_POST['name'];
            $cin = $_POST['check_in'];
            $cout = $_POST['check_out'];
            $days = $_POST['days'];
            $bdate = $_POST['book_date'];

            if(empty($name) || empty($cin) || empty($cout) || empty($days)) {
                ?>
                <script>
                    alert("Please fill in all fields.");
                </script>
                <?php
            } 
            else if(!preg_match("/^[a-zA-Z ]*$/", $name))
            {
                ?>
                <script>
                    alert("Please enter your name corretly");
                </script>
                <?php
            }
            else
            {
            
            //else insert into database
            mysqli_query($connect, "INSERT INTO `order` (`name`,booking_date,check_in,check_out,`days`,room_type) 
            VALUES('$name','$bdate','$cin', '$cout', '$days','$rt')");
            //need to put '' cause can't calculate

                ?>
                <script type="text/javascript">
                    alert("Record saved!");
                </script>
                <?php

            }
        }

        ?>

        <br/><br/><br/>
        
        <form name="addnewfrm" method="post" action="">
            <h1>Guest Information</h1>

            
            <p>Name: <input type="text" name="name"></p>
            <p>Days: <input type="text" name="days"></p>
            <p>booking_date : <input type="date" name="book_date"></p>
            
            <p>Date of Check-In: <input type="date" name="check_in"></p>
            <p>Date of Check-Out: <input type="date" name="check_out"></p>
            <input type="submit" name="add_cart" value="Order has been added to cart">
        </form>
    </div>
</body>
</html>
