<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="manage room.css">

        <title>Admin Manage Room</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
          
        
        
        
        
    <?php
		    if(isset($_REQUEST["rt"]))
			{
			$id = $_REQUEST["rt"];
 
			}
		?>
 
        <br/><br/>

  
        <form method="POST">
            <table cellspacing="5" cellpadding="5">
                
                  <tr>
                    
                    <th>Room Type</th>
                    <th>Picture Address</th>
                    
                    <th>Quantity of the Rooms</th>
                    <th>Price</th>
                    <th>Page</th>
                    <th>Comments</th>
                  </tr>
               
                  <tr>
                  <th><?php echo $_REQUEST["rt"]?></th>
                    
                  <th><input type="text" class="field" placeholder="Picture Address" name="picture"></th>
                    
                    <th><input type="text" class="field" placeholder="Quantity of the Rooms" name="qty"></th>
                    <th><input type="text" class="field" placeholder="Price" name="price"></th>
                    <th><input type="text" class="field" placeholder="Page Address" name="page"></th>
                    <th><input type="text" class="field" placeholder="Comment" name="comment"></th>
                  
                  </tr>
                
                </table>
                <br/>
                <button id="add" name="edit">Edit</button>

                </form>
                <?php
                if (isset($_POST['edit']))
                  {
              $pic = $_POST['picture'];
              $rt = $_REQUEST['rt'];
              $qty = $_POST['qty'];
              $price = $_POST['price'];
              $page = $_POST['page'];
              $com = $_POST['comment'];

              
              if(empty($qty) || empty($price)) {
                  ?>
                  <script>
                      alert("Please fill in all fields.");
                  </script>
                  <?php
              } 
          
              
              else
              {

              
                mysqli_query($connect, "
                UPDATE `room_category` 
                SET
                picture = '$pic',
                room_quantity = '$qty',
                price = '$price',
                page = '$page',
                comment = '$com'
                WHERE room_type = '$rt'");
              

                  ?>
                  <script type="text/javascript">
                      alert("Room Type saved!");
                      window.location.href = "manage category.php";
                  </script>

                  <?php

              }
          }
      
          ?>



                <br/><hr/><br/>

                <table cellspacing="5" cellpadding="5">
           
           <tr>
             
             
             <th>Picture</th>
             <th>Room Type</th>
             <th>Quantity of the Rooms</th>
             <th>Price</th>
             <th>Page</th>
             <th>Comment</th>
            
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
           
       </tr>
     <?php
     }
     ?>
       </table>


          
        
    </body>


</html>