<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="room.css">

        <title>Hotels and Resorts | KuanTan Hotels</title>
        
    </head>
    <body>

    <?php include('jkai_menu.php'); ?>
          
        
        
        
        
        </div>

        <br/><br/>
        
        
        
        
        <div id="slideshow" class="container">
            <img src="room e/room e 1.png" class="active">
            <img src="room e/room e 2.png">
            <img src="room e/room e 3.png">
        </div>







        <br/><br/>
        <div id="shipx">KuanTan Hotels</div>
        <br/>
        <span id="wupx">Deluxe Rooms</span>
        <a href="order.php?buy&room_type=Deluxe Rooms"><button>book now</button></a>


        <br/><p><hr/></p><br/>
        <div id="sanpx">Elegant interiors with breathtaking views of the city.</div>
        <br/>
        <div id="erpx">Deluxe Rooms are characterised by high ceilings and polished wood finishes, which give off a cosy elegance. Every room is well equipped with an abundance of opulent amenities.</div>
        <br/><br/>
        <h1>Features</h1>
            <ul id="erpx">
                <li>There is 34 sqm / 365 sqf of independence in each room.</li>
                <br/>
                <li>amazing views of the city.</li>
                <br/>
                <li>A bed with a comforter and a marble bathroom including a separate shower.</li>
                <br/>
                <li>WiFi</li>
            </ul>
            
        <br/><h1>Facilities</h1>     
        <p>
                <h2>Personal Care & Bathing</h2>
            <ul id="erpx"> 
                <li>Menu for pillows and duvets</li>
                <br/>
                <li>amenities for bathrooms</li>
            </ul>
        </p>

        <p>
            <h2>Entertainment & Media</h2>
        <ul id="erpx"> 
            <li>Cable or satellite TV</li>
            <br/>
            <li>A 40-inch LCD flat screen TV</li>
            <br/>
            <li>internal channels for movies</li>
        </ul>
        </p>

        <p>
            <h2>Office Supplies & Equipment</h2>
        <ul id="erpx"> 
            <li>Desk for executive writing featuring many electric sockets</li>
            <br/>
            <li>Dual-line international direct dial phone</li>
            <br/>
            <li>Electronic secure Voice mail</li>
        </ul>
        </p>
  
        <p>
            <h2>Drinks</h2>
        <ul id="erpx"> 
            <li>Facilities for brewing coffee and tea</li>
            <br/>
            <li>tiny bar</li>
        </ul>
        </p>
   
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