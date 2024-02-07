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
              <a href="userlist.html" class="nowpage">Member</a>
              <a href="adminlist.html" >Admin</a>
              <a href="manage order.html" >Order</a>   
              <a href="manage room.html" >Room Status</a>   
              <a href="manage order.html" >Room Category</a>
              <a href="sales report.html" >Sales Report</a>    
        </div>

  <div class="container">
    <h1>Member List</h1>

    <table>
      
        <tr>
          <th>User's ID</th>
          <th>User's First Name</th>
          <th>User's Last Name</th>
          <th>User's Email</th>

        </tr>

        <?php
			
        $result = mysqli_query($connect, "SELECT * FROM member");	
        if (!$result) {
          die("Query failed: " . mysqli_error($connect));
        }
        $count = mysqli_num_rows($result);
        
        while($row = mysqli_fetch_assoc($result))
        {
        
        ?>			

        <tr>
          <td><?php echo $row["UserID"] ?></td>
          <td><?php echo $row["UserName"] ?></td>
          <td><?php echo $row["UserLastName"] ?></td>
          <td><?php echo $row["UserEmail"] ?></td>
        </tr>
        <?php
        
        }
        
        ?>
    </Table>
      

