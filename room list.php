<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="room list.css">

        <title>Hotels and Resorts | KuanTan Hotels</title>
  
    </head>
    <body >
        
    <?php include('jkai_menu.php'); ?>
        </div>
        <br/>
        <div id="slideshow" class="container" >
            <img src="room a/room a 1.png" class="active">
            <img src="room a/room a 2.png">
            <img src="room a/room a 3.png">
            <img src="room a/room a 4.png">
            <img src="room a/room a 5.png">
            <img src="room b/room b 1.png">
            <img src="room b/room b 2.png">
            <img src="room b/room b 3.png">
            <img src="room b/room b 4.png">
            <img src="room c/room c 1.png">
            <img src="room c/room c 2.png">
            <img src="room c/room c 3.png">
            <img src="room c/room c 4.png">
            <img src="room d/room d 1.png">
            <img src="room d/room d 2.png">
            <img src="room d/room d 3.png">
            <img src="room e/room e 1.png">
            <img src="room e/room e 2.png">
            <img src="room e/room e 3.png">
            
        </div>

        <br/><br/>
          <div id="shipx"><u>KuanTan Hotels</u></div>
       
          <h1>Rooms & Suites</h1>
          <hr/>
    

    
    
        
    <?php
    
    $result = mysqli_query($connect, "SELECT * FROM room_category");	
     while($row = mysqli_fetch_assoc($result))
        {
        
        ?>	
        
        <table border="0"   class="formBox">
        <tr>

        
            <td >
                <span>
                    
                        <img class="picture"  src="<?php echo $row['picture']?>">

                </span>
                
            </td>
            
        </tr>
        <tr>   
            <td rowspan="1">
                
            
           
                <div id="shipx"><?php echo $row['room_type']?></div><br/>
                
                <div id="erpx" ><?php echo $row['comment']?> <br/><br/><br/>
                <b><i>Price : RM<?php echo $row['price']?> per day</i></b></div><br/><br/>
                <div><a href="<?php echo $row['page']?>"><button>View</button></a></div>
            </td>
       
            
            
        </tr>
        <br/><br/><br/><br/>
      
        
        <?php
        
        }		
    
    ?>

    
    
    
</table>
<br/><br/>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            var images = $(".container img"); // 获取所有图片

            var currentIndex = 0; // 当前图片索引

            setInterval(function() {
                images.eq(currentIndex).removeClass("active"); // 移除当前图片的 active 类

                currentIndex = (currentIndex + 1) % images.length; // 计算下一张图片的索引

                images.eq(currentIndex).addClass("active"); // 添加下一张图片的 active 类
            }, 3000); // 设置切换间隔时间，单位为毫秒
        });
    </script>
        
        </body>

        </html>
        