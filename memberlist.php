<?php include("dataconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminlist.css">
  <title>Manger Member | KuanTan Hotels</title>
</head>
<body>

<?php include('jkai_admin_menu.php'); ?>

  <div class="container">
    <h1>Member List</h1>

    <table>
      
        <tr>
          <th>User's ID</th>
          <th>User's Name</th>
          <th>User's Email</th>
          <th>User's Gender</th>
          <th>User's Password</th>
        </tr>

        <?php
			
        $result = mysqli_query($connect, "SELECT * FROM member");	//$ result
        $count = mysqli_num_rows($result);//used to count number of rows
        
        while($row = mysqli_fetch_assoc($result))//$ row is based on each row in the table
        {
        
        ?>			

        <tr>
          <td><?php echo $row["UserID"] ?></td>
          <td><?php echo $row["UserName"] ?></td>
          <td><?php echo $row["UserLastName"] ?></td>
          <td><?php echo $row["UserEmail"] ?></td>
          <td><?php echo $row["UserPassword"] ?></td>
          
          
        </tr>
        <?php
        
        }
        
        ?>
    </Table>
      

