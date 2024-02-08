<?php include("Vincentdataconnection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminaction.css">
  <title>Edit Member | KuanTan Hotels</title>
</head>
<body>

  <?php include("jkai_admin_menu.php"); ?>
  <br/><br/>

  <div class="container">
    <h1>Member List</h1>

    <table>
      
        <tr>
          <th>Member's ID</th>
          <th>Member's First Name</th>
          <th>Member's Last Name</th>
          <th>Member's Email</th>

        </tr>

        <?php
			
        $result = mysqli_query($connect, "SELECT * FROM member");
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
    </div>
      
<!-- EDIT -->
    <div>
        <form class="edit" method="POST">
            <h2>Edit Member's Information</h2>
            <table>
                <tr> 
                    <th>Member's ID</th>
                    <th>Member's Frist Name</th>
                    <th>Member's Last Name</th>
                    <th>Member's Email</th>
                    <th>Member's Password</th>
                </tr>
                <tr>
                    
                    <th><input type="text" placeholder="ID" name="id" required></th>
                    <th><input type="text" placeholder="First Name" name="firstname" required></th>
                    <th><input type="text" placeholder="Last Name" name="lastname" required></th>
                    <th><input type="email" placeholder="Email" name="email" required></th>
                    <th><input type="password" placeholder="Password" name="password" required ></th>
                  
                </tr>
                
                </table>
                
                <div class="button">
                    
                    <button name="edit">Edit</button>
                </div>

        </form>
        <div class="buttonback"><a href="memberlist.php" ><button class="back">Back</button></a></div>
        
    </div>
    <?php
    if (isset($_POST['edit']))
     {
         $ID = $_POST['id'];
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $email = $_POST['email'];
         $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

         
        $result= mysqli_query($connect, "UPDATE `member` SET 
            `username`='$firstname',
            `userlastname`='$lastname',
            `useremail`='$email',
            `userpassword`='$password'
            WHERE `userID`=$ID");
       
         

      
       if($result && mysqli_affected_rows($connect) > 0)
       {
           ?>
           <script type="text/javascript">
                 alert("Member information have been update!");
                 window.location.href = "editmember.php";
             </script>
        
            <?php
       }
       else
       {
           echo"<script>alert('Member does not exist!'); history.go(-1);</script>;";
       }



     }
 
     ?>


    

</body>
    

