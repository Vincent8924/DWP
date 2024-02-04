<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="room.css">

        <title>Hotels and Resorts | KuanTan Hotels</title>
  
    </head>
    <body >
        
        <img src="KuanTan Hotels2.png" id="logo"/>
        <br/>
        <div id="line" class="choice">

          <a href="about us.html" >ABOUT US</a>
          <a href="c room.html" class="nowpage">ROOM</a>   
          <a href="food.html" >FOOD</a>
          <a href="experience.html" >EXPERIENCE</a>
          <a href="event.html" >EVENT</a>
          <a href="gallery.html" >GALLERY</a>
          

          <h1>List of Room</h1>

    <table border="0" width="650px" >
    

    <?php
    
    $result = mysqli_query($connect, "SELECT * FROM room_category");	
     while($row = mysqli_fetch_assoc($result))
        {
        
        ?>	
                
        <tr>
        <td><img class="picture"  src="  <?php echo $row['picture']?>" ></td>
            <td><?php echo $row['room_type']?></td>
            <td><?php echo $row['room_quantity']?></td>
            <td class="text"><a href="order.php?buy&room_type=<?php echo $row['room_type']; ?>">Buy Now</a></td>
            
        </tr>
        <?php
        
        }		
    
    ?>

    
    
    
</table>

        
        </body>

        </html>
        