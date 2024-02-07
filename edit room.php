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
		    if(isset($_REQUEST["rn"]))
			{
			$id = $_REQUEST["rn"];
 
			}
		?>
 
        <br/><br/>

  
            <form action="#" method="POST">
              
          
            <table cellspacing="5" cellpadding="5">
                <thead>
                  <tr>
                    
                    
                    <th>Room No</th>
                    <th>Room Type</th>
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <th><?php echo $_REQUEST['rn']?></th>
                    <th>
                        <select class="field" name="room_type">
                            <option value="Presidential Suite">Presidential Suite</option>
                            <option value="Executive Suite">Specialty Suite</option>
                            <option value="Executive Suite">Executive Suite</option>
                            <option value="Club Premier Room">Club Premier Room</option>
                            <option value="Deluxe Rooms">Deluxe Rooms</option>                                  
                        </select>
                    </th>
                    <th>
                      <select class="field" name="room_status">
                        <option value="Vacant">Vacant</option>
                        <option value="Booked">Booked</option>
                        <option value="Occupied">Occupied</option>
                        <option value="Cleaning">Cleaning</option>
                        <option value="Under Maintenance">Under Maintenance</option>
                        <option value="Cancelled">Cancelled</option>                                  
                    </select>
                    </th>

                </tr>
                </tbody>
                </table>
                <br/>
                <button id="add" name="add_room">Edit Room</button>
                <br/><br/>
            </form>

            <?php
     
     if (isset($_POST['add_room']))
     {
         $rn = $_REQUEST['rn'];
         $rt = $_POST['room_type'];
         $rs = $_POST['room_status'];

        
         if(empty($rs) || empty($rt)) {
             ?>
             <script>
                 alert("Please fill in all fields.");
             </script>
             <?php
         } 
     
        
         else
         {

         
            mysqli_query($connect, "
            UPDATE `room_status` 
            SET
            room_type = '$rt',
            room_status = '$rs'
            WHERE room_no = '$rn'");
         

             ?>
             <script type="text/javascript">
                 alert("Room status saved!");
                 window.location.href = "manage room.php";
             </script>

             <?php

         }
     }
 
     ?>



                <br/><hr/><br/>

        <table cellspacing="5" cellpadding="5">
           
              <tr>
                <th>Room No</th>
                
                <th>Room Type</th>
                <th>Status</th>
               
              </tr>
            
              <?php
    
    $result = mysqli_query($connect, "SELECT * FROM room_status");	
   while($row = mysqli_fetch_assoc($result))
      {
      
      ?>	

          
          <tr>
              <td><?php echo $row['room_no']?></td>
              <td><?php echo $row['room_type']?></td>
              <td><?php echo $row['room_status']?></td>
              
          </tr>
        <?php
        }
        ?>
          </table>


         
        
    </body>


</html>