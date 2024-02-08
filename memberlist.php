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

<?php include("jkai_admin_menu.php"); ?>

  <div class="container">
    <h1>Member List</h1>

    <table>
      
        <tr>
          <th>User's ID</th>
          <th>User's First Name</th>
          <th>User's Last Name</th>
          <th>User's Email</th>
          <th>Delete</th>

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
          <td>
                  <form method="post" >
                    <button type="submit" name="deletemember">Delete</button>
                    <input type="hidden" name="delete" value="<?php echo $row['UserID']; ?>">
                      
                  </form>
          </td>
        </tr>
        <?php
        
        }
        
        ?>

      
    </Table>

    <div class="button">
      <a href="editmember.php"><button>Edit</button></a>
      <a href="addmember.php"><button>Add</button></a>
     
    </div>

    <?php
                if (isset($_POST['deletemember'])) 
                {
                    $delete = $_POST['delete'];
                    mysqli_query($connect, "DELETE FROM member WHERE UserID = '$delete'");
                
                ?>
                
                <script type="text/javascript">
                    alert("Record has been deleted!");
                    window.location.href = "memberlist.php";
                </script>

            <?php
                }
            ?>
    
      