<?php include('dataconnection.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="admindashboard.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Admin Dashbaord | KuanTan Hotels</title><img>
        
    </head>
    <?php include('jkai_admin_menu.php'); ?>
    
    <?php
        $result = mysqli_query($connect, "SELECT count(*) AS tmember FROM member;");
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $tmember = $row["tmember"];
        }
        else
        {
            echo"tmember error";
        }
    ?>
    <?php
        $result = mysqli_query($connect, "SELECT count(*) AS tadmin FROM admin;");
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $tadmin = $row["tadmin"];
        }
        else
        {
            echo"tadmin error";
        }
    ?>
    <?php
        $result = mysqli_query($connect, "SELECT SUM(room_quantity) AS troom FROM room_category;");
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $troom = $row["troom"];
        }
        else
        {
            echo"troom error";
        }
    ?>

    <?php
        $result = mysqli_query($connect, "SELECT count(*)AS torder FROM user_order;");
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $torder = $row["torder"];
        }
        else
        {
            echo"torder error";
        }
    ?>
        <div class="grid">
            
            <div id="member" class="grid_container ">
                <img src="memberlogo.jpn" alt="member">
                <h2>
                    <?php echo $tmember?>
                </h2>
                <a href="member.php" id="member">
                    <p>
                        member
                    </p>
                </a>
                
            </div>
            <div id="admin" class="grid_container ">
                <h2>
                    <?php echo $tadmin?>
                </h2>
                <p>
                    admin
                </p>
            </div>
            <div id="room" class="grid_container ">
                <h2>
                    <?php echo $troom?>
                </h2>
                <p>
                    Room
                </p>
            </div>
            <div id="order"class="grid_container ">
                <h2>
                    <?php echo $torder?>
                </h2>
                <p>
                    Order
                </p>
            </div>
        </div>


        
        
        
    </body>
    