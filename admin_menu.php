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
    margin-left: 40px;
    position: relative;
    top: 8px;
    display: inline-block; 
}

</style>

<body>
    <img src="KuanTan Hotels.png" style="height: 50px;" />
    <div id="line">
        <div class="choice">
            <?php
            echo "<a href='admindashboard.php'>DASHBOARD</a>";
            echo "<a href='memberlist.php'>MEMBER</a>";
            echo "<a href='aboutus.php'>ADMIN</a>";
            echo "<a href='manage order.php'>ORDER</a>";
            echo "<a href='manage room.php'>ROOM STATUS</a>";
            echo "<a href='manage category.php'>ROOM CATEGORY</a>";
            echo "<a href='sales report.php'>SALES REPORT</a>";
            echo "<a href='index.php' onclick='return adminconfirmation();'><img src='image/logout.png' style='width: 20px; height: 20px;'>LOG OUT</a>";   
            ?>
        </div>
    </div>
    <br/><br/>
</body>
<script>
function adminconfirmation()
{
	answer = confirm("Do you want to log out?");
	return answer;
}
</script>
