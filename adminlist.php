<?php include("Vincentdataconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminlist.css">
  <title>Manger Member | KuanTan Hotels</title>
</head>
<body>

    <img src="KuanTan Hotels2.png" id="logo"/>
            <br/>
            <div id="line" class="choice">
              <a href="admindashboard.html" >Dashboard</a>
              <a href="userlist.html" >Member</a>
              <a href="adminlist.html"class="nowpage" >Admin</a>
              <a href="manage order.html" >Order</a>   
              <a href="manage room.html" >Room Status</a>   
              <a href="manage order.html" >Room Category</a>
              <a href="sales report.html" >Sales Report</a>    
        </div>

  <div class="container">
    <h1>Admin List</h1>

    <table>
      
        <tr>
          <th>Admin's ID</th>
          <th>Admin's First Name</th>
          <th>Admin's Last Name</th>
          <th>Admin's Age</th>
          <th>Admin's Email</th>
          <th>Admin's Contact Number</th>

        </tr>

        <?php
			
        $result = mysqli_query($connect, "SELECT * FROM admin");
        $count = mysqli_num_rows($result);
        
        while($row = mysqli_fetch_assoc($result))
        {
        
        ?>			

        <tr>
          <td><?php echo $row["adminID"] ?></td>
          <td><?php echo $row["adminname"] ?></td>
          <td><?php echo $row["adminlastname"] ?></td>
          <td><?php echo $row["adminage"] ?></td>
          <td><?php echo $row["adminemail"] ?></td>
          <td><?php echo $row["admincontactnum"] ?></td>
        </tr>
        <?php
        
        }
        
        ?>
    </Table>
      

