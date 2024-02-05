<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="room.css">

        <title>Hotels and Resorts | KuanTan Hotels</title>
   
    </head>
    <body>
        <img src="KuanTan Hotels2.png" id="logo"/>
        <br/>
        <div id="line" class="choice">

            <a href="aboutus.html" >ABOUT US</a>
            <a href="room list.php"  class="nowpage">ROOM</a>
            <a href="food.html" >FOOD</a>
            <a href="experience.html" >EXPERIENCE</a>
            <a href="event.html" >EVENT</a>
            <a href="gallery.html" >GALLERY</a>
            
          
          
          
          
          </div>
        <br/><br/>
        
        
        
        
        <div id="slideshow" class="container" >
            
            <img src="room b/room b 1.png" class="active">
            <img src="room b/room b 2.png">
            <img src="room b/room b 3.png">
            <img src="room b/room b 4.png">
        </div>
        <br/><br/>
        <div id="shipx">KuanTan Hotels</div>
        <br/>
        <span id="wupx">Specialty Suite</span>

        <a href="order.php?buy&room_type=Specialty Suite"><button>book now</button></a>
        <br/><p><hr/></p><br/>
        <div id="sanpx">Spacious comfort with exquisite garden views.</div>
        <br/>
        <div id="erpx">For those requiring extra space and who may wish to entertain guests of their own, the Specialty Suite is the ideal option. It features a stylish integrated sitting room and dining area, along with a well-equipped kitchenette.</div>
        

        
        <br/><br/>
        <h1>Features</h1>
            <ul id="erpx">
                <li>There is 104 sqm / 1,119 sqf of flexibility in each suite.</li>
                <br/>
                <li>Gorgeous vistas of the garden</li>
                <br/>
                <li>One-bedroom apartments with a dining space, kitchenette, and large, cosy living room.</li>
                <br/>
                <li>Huge, contemporary bathrooms including extra big towels and bathrobes.</li>
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
            <li>DVD player</li>
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
            <li>Electronic safe</li>
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