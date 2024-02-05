<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="room.css">

        <title>Hotels and Resorts | KuanTan Hotels</title>
  
    </head>
    <body >
        
        <img src="KuanTan Hotels2.png" id="logo"/>
        <br/>
        <div id="line" class="choice">

          <a href="about us.html" >ABOUT US</a>
          <a href="room list.php" class="nowpage">ROOM</a>   
          <a href="food.html" >FOOD</a>
          <a href="experience.html" >EXPERIENCE</a>
          <a href="event.html" >EVENT</a>
          <a href="gallery.html" >GALLERY</a>
          
        
        
        
        
        </div>
 
        <br/><br/>
        
        
        
        
        <div id="slideshow" class="container" >
            <img src="room a/room a 1.png" class="active">
            <img src="room a/room a 2.png">
            <img src="room a/room a 3.png">
            <img src="room a/room a 4.png">
            <img src="room a/room a 5.png">
        </div>





        <br/><br/>
        <div id="shipx" >KuanTan Hotels</div>
        <br/>
        <span id="wupx" >Presidential Suite</span>

        <a href="order.php?buy&room_type=Presidential Suite"><button>book now</button></a>

        
   
      
        
        <br/>
        <br/><p><hr/></p><br/>
        <div  id="sanpx" >Luxurious furniture with a modern twist.</div>
        <br/>
        <div  id="erpx" >The Presidential Suite is the most spectacular lodging option available in Beijing at the Kerry Hotel. The suite is perfect for business meetings or elegant social events. With its chic decor, it exudes the perfect amount of luxury and elegance.</div>
        

        <br/><br/>
        <h1>Features</h1>
            <ul id="erpx">
                <li>The space in the suite is 224 sqm / 2,411 sqf.</li>
                <br/>
                <li>The Club Lounge is open to guests and offers all of its amenities.</li>
                <br/>
                <li>Large panel doors lead to the roomy living room and master bedroom.</li>
                <br/>
                <li>Within the open living space are a formal reception area, a presidential study, a formal dining room with a feature kitchen, and a casual TV lounge.</li>
                <br/>
                <li>Huge modern bathroom with loft-style elements, complete with a huge steam shower and sauna, bathrobes and extra large towels. Also included in the bathroom area are a sofa and a cheval dressing mirror.</li>
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
                <li>Rainshower with shower jets</li>
                <br/>
                <li>Sauna</li>
                <br/>
                <li>Steam bath</li>
                <br/>
                <li>Bathtub with spa jets</li>
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