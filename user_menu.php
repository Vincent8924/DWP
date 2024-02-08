<style>
#line {
    border: 0px;
    background-image: url('image/black.png');
    background-repeat: repeat-x;
    height: 40px;
}

.choice a {
    font-size: 20px;
    text-decoration: none;
    color: white;
    margin-left: 100px;
    position: relative;
    top: 8px;
    display: inline-block; 
}

</style>

<body>
    <img src="image/KuanTan Hotels2.png" style="height: 50px;" />
    <br /><br />
    <div id="line">
        <div class="choice">
            <?php
            echo "<a href='index.php'>HOME</a>";
            echo "<a href='room list.php'>ROOM</a>";
            echo "<a href='aboutus.php'>ABOUT</a>";
            echo "<a href='contact.php'>CONTACT</a>";
            echo "<a href='rating&comment.php'>RATING & COMMENT</a>";
            echo "<a href='shopping cart.php'>CART</a>";
            ?>
        </div>
    </div>
    <br/><br/>
</body>