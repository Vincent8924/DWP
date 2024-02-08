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
    <?php
        $result = mysqli_query($connect, "SELECT SUM(price) AS tsales FROM user_order;");
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $tsales =  $row["tsales"];
        }
        else
        {
            echo"tsales error";
        }
    ?>
        <div class="grid">

            <a href="member.php">
            <div id="member"class="grid_container">
                    <h2>
                        <?php echo $tmember?>
                    </h2>
                    
                    <p>
                        MEMBER
                    </p>
                    
                    
                </div>
            </a>
            <a href="adminlist.php">
            <div  id="admin"class="grid_container">
                <h2>
                    <?php echo $tadmin?>
                </h2>
                <p>
                    ADMIN
                </p>
            </div>
            </a>
            <a href="manage category.php">
                <div id="room" class="grid_container">
                    <h2>
                        <?php echo $troom?>
                    </h2>
                    <p>
                        ROOM
                    </p>
                </div>
            </a>
            <a href="manage order.php">
                <div id="order"class="grid_container">
                    <h2>
                        <?php echo $torder?>
                    </h2>
                    <p>
                        ORDER
                    </p>
                </div>
            </a>
            <a href="sale report.php">
                <div id="sales"class="grid_container">
                    <h2>
                        RM <?php echo $tsales ?>
                    </h2>
                    <p>
                        SALES
                    </p>
                </div>
            </a>
            
        </div>

        
        
        
        
    </body>
    