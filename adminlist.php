<?php include("Vincentdataconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminlist.css">
  <title>Manger Admin | KuanTan Hotels</title>
</head>
<body>

  <?php include("jkai_admin_menu.php"); ?>
  <br/><br/>

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
          <th>Delete</th>
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
          <td>
                  <form method="post" >
                    <button type="submit" name="deleteadmin">Delete</button>
                    <input type="hidden" name="delete" value="<?php echo $row['adminID']; ?>">
                      
                  </form>
          </td>
        </tr>
        <?php
        
        }
        
        ?>
    </Table>

    <div class="button">
      <a href="editadmin.php"><button>Edit</button></a>
      <a href="addadmin.php"><button>Add</button></a>
    </div>
    

    </div>

    <?php
                if (isset($_POST['deleteadmin'])) 
                {
                    $delete = $_POST['delete'];
                    mysqli_query($connect, "DELETE FROM admin WHERE adminID = '$delete'");
                
                ?>
                
                <script type="text/javascript">
                    alert("Record has been deleted!");
                    window.location.href = "adminlist.php";
                </script>

            <?php
                }
            ?>
      

