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
            <img src="room d/room d 1.png"  class="active">
            <img src="room d/room d 2.png">
            <img src="room d/room d 3.png">
        </div>







        <br/><br/>
        <div id="shipx">KuanTan Hotels</div>
        <br/>
        <span id="wupx">Club Premier Room</span>
        <a href="order.php?buy&room_type=Club Premier Room"><button>book now</button></a>

        <br/><p><hr/></p><br/>
        <div id="sanpx">Large area with individualised services.</div>
        <br/>
        <div id="erpx">Club Premier Rooms provide the most comfort in a very roomy, non-suite setting for working or relaxing. Premier Rooms provide superior comfort and special Club benefits, making them a great option for those who want a little more personalised attention.</div>
        
    
        <br/><br/>
        <h1>Features</h1>
            <ul id="erpx">
                <li>There's 52 sqm / 560 sqf of space available each room.</li>
                <br/>
                <li>expansive vistas of KuanTan's urban landscape.</li>
                <br/>
                <li>A marble-topped bathroom featuring:
                    <br/><br/>
                    separate shower and bathtub
                    <br/><br/>
                    Multifunctional automatic washlet
                    <br/><br/>
                    TV in the bathroom mirror with digital clock
                </li>
                <br/>
                <li>WiFi</li>
                <br/>
                <li>Access to the Club Lounge and all related benefits is granted to guests.</li>
            </ul>

            
        <br/><h1>Facilities</h1>     
        <p>
                <h2>Personal Care & Bathing</h2>
            <ul id="erpx"> 
                <li>Menu for pillows and duvets</li>
                <br/>
                <li>opulent bathroom fixtures</li>
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
            <br/>
            <li>iPod docking station</li>
            <br/>
            <li>Audio system</li>
        </ul>
        </p>

        <p>
            <h2>Office Supplies & Equipment</h2>
        <ul id="erpx"> 
            <li>Executive writing desk including an electronic panel with many sockets</li>
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