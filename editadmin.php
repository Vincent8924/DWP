<?php include("Vincentdataconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminaction.css">
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
    </div>
      
<!-- EDIT -->
    <div>
        <form class="edit" method="POST">
            <h2>Edit Admin's Information</h2>
            <table>
                <tr> 
                    <th>Admin's ID</th>
                    <th>Admin's Frist Name</th>
                    <th>Admin's Last Name</th>
                    <th>Admin's Age</th>
                    <th>Admin's Email</th>
                    <th>Admin's Contact Number</th>
                    <th>Admin's Password</th>
                </tr>
                <tr>
                    
                    <th><input type="text" placeholder="ID" name="id" required></th>
                    <th><input type="text" placeholder="First Name" name="firstname" required></th>
                    <th><input type="text" placeholder="Last Name" name="lastname" required></th>
                    <th><input type="number" placeholder="Age" name="age" required></th>
                    <th><input type="email" placeholder="Email" name="email" required></th>
                    <th><input type="text" placeholder="Contact Number" name="contactnum" required></th>
                    <th><input type="password" placeholder="Password" name="password" required ></th>
                  
                </tr>
                
                </table>
                
                <div class="button">
                    
                    <button name="edit">Edit</button>
                </div>

        </form>
        <div class="buttonback"><a href="adminlist.php" ><button class="back">Back</button></a></div>
        
    </div>
    <?php
    if (isset($_POST['edit']))
     {
         $ID = $_POST['id'];
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $age = $_POST['age'];
         $email = $_POST['email']; 
         $contactnum = $_POST['contactnum'];
         $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

         
        $result= mysqli_query($connect, "UPDATE `admin` SET 
            `adminname`='$firstname',
            `adminlastname`='$lastname',
            `adminage`=$age,
            `adminemail`='$email',
            `admincontactnum`='$contactnum',
            `adminpassword`='$password'
            WHERE `adminID`=$ID");
       
         

      
       if($result && mysqli_affected_rows($connect) > 0)
       {
           ?>
           <script type="text/javascript">
                 alert("Admin information have been update!");
                 window.location.href = "editadmin.php";
             </script>
        
            <?php
       }
       else
       {
           echo"<script>alert('Admin does not exist!'); history.go(-1);</script>;";
       }



     }
 
     ?>


    

</body>
    

