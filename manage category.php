<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="manage room.css">

        <title>Admin Manage Category</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
 
        <br/><br/>

  

            <form method="POST">
            <table cellspacing="5" cellpadding="5">
                
                  <tr>
                    
                    
                    <th>Picture Address</th>
                    <th>Room Type</th>
                    <th>Quantity of the Rooms</th>
                    <th>Price</th>
                    <th>Page</th>
                    <th>Comments</th>
                  </tr>
               
                  <tr>
                    
                  <th><input type="text" class="field" placeholder="Picture Address" name="picture"></th>
                  <th><input type="text" class="field" placeholder="Room Type" name="room_type"></th>
                  
                    <th><input type="text" class="field" placeholder="Quantity of the Rooms" name="qty"></th>
                    <th><input type="text" class="field" placeholder="Price" name="price"></th>
                    <th><input type="text" class="field" placeholder="Page Address" name="page"></th>
                    <th><input type="text" class="field" placeholder="Comment" name="comment"></th>
                  
                  </tr>
                
                </table>
                <br/>
                <button id="add" name="add_room">Add Room</button>

                </form>
                <?php
                if (isset($_POST['add_room']))
                  {
              $pic = $_POST['picture'];
              $rt = $_POST['room_type'];
              $qty = $_POST['qty'];
              $price = $_POST['price'];
              $page = $_POST['page'];
              $com = $_POST['comment'];

              
              if(empty($qty) || empty($price) || empty($rt)) {
                  ?>
                  <script>
                      alert("Please fill in all fields.");
                  </script>
                  <?php
              } 
          
              
              else
              {

              
              mysqli_query($connect, "INSERT INTO `room_category` (room_type,room_quantity,picture,price,`page`,comment) 
              VALUES('$rt','$qty','$pic','$price','$page','$comment')");
              

                  ?>
                  <script type="text/javascript">
                      alert("Room Type saved!");
                      window.location.href = "manage category.php";
                  </script>

                  <?php

              }
          }
      
          ?>






                <br/><br/>
                <br/><hr/><br/>

        <table cellspacing="5" cellpadding="5">
           
              <tr>
                
                
                <th>Picture</th>
                <th>Room Type</th>
                <th>Quantity of the Rooms</th>
                <th>Price</th>
                <th>Page</th>
                <th>Comment</th>
                <th>Action</th>
              </tr>
              
              <?php
       
            $result = mysqli_query($connect,"SELECT * FROM `room_category`");	
            while($row = mysqli_fetch_assoc($result))
          {
      
      ?>	

          
          <tr>
              <td><img src="<?php echo $row['picture']?>" class="size"><br/><?php echo $row['picture']?></td>
              <td><?php echo $row['room_type']?></td>
              <td><?php echo $row['room_quantity']?></td>
              <td><?php echo $row['price']?></td>
              <td><?php echo $row['page']?></td>
              <td><?php echo $row['comment']?></td>
              <td>
                  <form method="post" >
                  
                  <button><a href="edit type.php?rt&rt=<?php echo $row['room_type'];?>" class="white">Edit</a></button><button type="submit" name="delete_room">Delete</button>
                      
                      <input type="hidden" name="delete" value="<?php echo $row['room_type']; ?>">
                      
                  </form>
              </td>
          </tr>
        <?php
        }
        ?>
          </table>

          <?php
                if (isset($_POST['delete_room'])) 
                {
                    $delete = $_POST['delete'];
                    mysqli_query($connect, "DELETE FROM room_category WHERE room_type = '$delete'");
                
                ?>
                
                <script type="text/javascript">
                    alert("Record has been deleted!");
                    window.location.href = "manage category.php";
                </script>

            <?php
                }
            ?>
        
    </body>


</html>