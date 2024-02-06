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
            <img src="room c/room c 1.png" class="active">
            <img src="room c/room c 2.png">
            <img src="room c/room c 3.png">
            <img src="room c/room c 4.png">
        </div>






        <br/><br/>
        <div id="shipx">KuanTan Hotels</div>
        <br/>
        <span id="wupx">Executive Suite</span>
        <a href="order.php?buy&room_type=Executive Suite"><button>book now</button></a>


        <br/><p><hr/></p><br/>
        <div id="sanpx">Enchanting details and enough liberty.</div>
        <br/>
        <div id="erpx">Exquisite in its natural hues, the Executive Suite boasts a sophisticated modern atmosphere spanning across generous proportions. There is a sizable area set aside for work in the separate lounge, as well as plenty of comfortable seats. The Club Lounge is open to guests and offers all of its amenities.</div>
        
        

        
        <br/><br/>
        <h1>Features</h1>
            <ul id="erpx">
                <li>There is 68 sqm / 731 sqf of independence in each suite.</li>
                <br/>
                <li>Each Executive Suite, which ranges in floor count from 12 to 19, features a roomy and cosy lounge and dining area.</li>
                <br/>
                <li>The big marble bathroom features a separate shower and a wide glass-enclosed bath that is fully furnished with design bath goods.</li>
                <br/>
                <li>The Club Lounge is open to guests and offers all of its amenities.</li>
                <br/>
                <li>WiFi</li>
            </ul>

    
        <br/><h1>Facilities</h1>     
        <p>
                <h2>Personal Care & Bathing</h2>
            <ul id="erpx"> 
                <li>Multifunctional automatic washlet</li>
                <br/>
                <li>TV in the bathroom mirror with digital clock</li>
                <br/>
                <li>Menu for pillows and duvets</li>
                <br/>
                <li>amenities for bathrooms</li>
                <br/>
                <li>Showers of rain</li>
            </ul>
        </p>


        
        <p>
            <h2>Entertainment & Media</h2>
        <ul id="erpx"> 
            <li>40-inch LCD flat screen TV with DVD player</li>
            <br/>
            <li>internal channels for films</li>
            <br/>
            <li>A sound system with iPod docking station</li>
            <br/>
            <li>Cable or satellite TV</li>
            <br/>
            <li>Audio system</li>
        </ul>
        </p>




        <p>
            <h2>Office Supplies & Equipment</h2>
        <ul id="erpx"> 
            <li>Executive writing desk with many electrical sockets and an electronic safe</li>
            <br/>
            <li>Dual-line international direct dial phone</li>
            <br/>
            <li>Multipurpose copy, fax, print, and scan device</li>
            <br/>
            <li>Voice mail</li>
        </ul>
        </p>
        


        <p>
            <h2>Drinks</h2>
        <ul id="erpx"> 
            <li>Facilities for brewing coffee and tea</li>
            <br/>
            <li>tiny bar</li>
            <br/>
            <li>Nespresso coffee machine</li>
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