<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>RATING & COMMENT</title>
        <link rel="icon" type="image/x-icon" href="image/title logo.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    </head>
    <style>
        *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
        #line 
{
    border: 0px;
    background-image: url('image/black.png');
    background-repeat: repeat-x;
    height: 40px;
}

.choice a
{
  font-size: 20px;
  text-decoration: none; 
  color: white; 
  margin-left: 50px;
  position: relative;
  top: 8px; 
}

.RC .title
{
    text-align: center;

}

.RC .title h2{
    font-weight: bold;
    font-size: 27px;
}

.RC .title p{
    font-size: 23px;
    margin:0 auto;
}
.rc{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;  
}
.formBox{
    position: relative;
    width: 70%;
    background-color: orange;
    box-shadow: 0 5px 35px black;
    padding:30px 40px;
    border-radius: 10px;
}
.formBox .row50
{
    display: flex;
    gap:20px;
}

.inputBox{
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    width: 50%;
}

.inputBox label{
    color:blue;
    margin-top: 10px;
    margin-bottom: 5px;
    font-weight: bold;
    display: block;
}

.inputBox input{
    padding: 10px;
    font-size: 1.1em;
    outline: none;
    border: 1px solid black;
}

.button-area input[type="submit"]
{
    background: gray;
    color: white;
    border: none;
    font-size: 1.1em;
    max-width: 120px;
    font-weight: 500;
    cursor: pointer;
    padding: 14px 15px;
    
}

.button-area span{
    margin-left: 20px;
    color: blue;
    font-weight: bold;
    
}

.text-danger{
    color:red;
}

.error
{
    color:red;
  
}
select{
    border: 1px solid black;
    padding:10px 40px;
}

.formBox .row100 .inputBox
{
    width: 100%;
}
.inputBox textarea{
    padding: 10px;
    font-size: 1.1em;
    outline: none;
    border: 1px solid black;
    resize: none;
    min-height: 220px;
    margin-bottom: 10px;
}



.stars {
    cursor: pointer;
}

.star {
    font-size: 30px;
    color: gray;
    margin: 0 5px;
}

.star:hover,
.star.active {
    color: yellow;
}


    </style>
    <?php
    $error = 0;
    include("dataconnection.php");
    if(isset($_REQUEST['submit']))
    {
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $room_type = $_REQUEST['room_type'];
        $rating = $_REQUEST['rating'];
        $comment = $_REQUEST['comment'];

        if(empty($first_name))
        {
            $first_name_error ="First Name Required";
            $error = 1;
        }
        else if(!preg_match("/^[a-zA-Z ]*$/", $first_name))
        {
            $first_name_error = "Only Letter are allowed";
            $error = 1;
        }
        if(empty($last_name))
        {
            $last_name_error ="Last Name Required";
            $error = 1;
        }
        else if(!preg_match("/^[a-zA-Z ]*$/", $last_name))
        {
            $last_name_error = "Only Letter are allowed";
            $error = 1;
        }
        if(empty($comment))
    {
        $comment_error ="Comment Required";
        $error = 1;
    }

        if($error == 0)
    {
        $insert_query = mysqli_query($connect, "INSERT into `Rating & Comment` SET first_name ='$first_name', last_name ='$last_name', room_type ='$room_type',rating ='$rating', comment ='$comment'");
        if($insert_query)
        {
            $msg = "Your Rating and Comment has been sent";
        }
        else
        {
            $msg = "Your Message has not been sent";
        }   
    } 
    else{
        $msg = "Please fill all fields";
    }
    }
    ?>
    <body>
    <img src="image/KuanTan Hotels2.png" style="height: 50px;"/>
        <br/>
        <div id="line" class="choice">
          <a href="About us.html" >ABOUT US</a>
          <a href="room.html" >ROOM</a>
          <a href="food.html" >FOOD</a>
          <a href="experience.html" >EXPERIENCE</a>
          <a href="event.html" >EVENT</a>
          <a href="Gallery.html" >GALLERY</a>
        </div></div>
                    <br/><br/>
                    <div class="RC">
                        <div class="title">
                             <h2>RATING & COMMENT</h2>
                             <br/>
                             <p>Please rate your room experience for our following comment.</p>
                        </div>
                        <br/>
                        <form>
                            <div class= "rc">
                                <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" placeholder="Enter your First Name">
                                <span class="text-danger"><?php if(!empty($first_name_error)){ echo $first_name_error; }?></span>
                            </div>
                            <div class="inputBox">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" placeholder="Enter your Last Name">
                                <span class="text-danger"><?php if(!empty($last_name_error)){echo $last_name_error;}?></span>
                            </div>
                        </div>
                        <br/>
                        <select class ="" name="room_type" required>
                            <option value="" selected hidden>Select Your Room Type you need to rate and comment</option>
                            <option value="Presidential Suite">ROOM A</option>                       
                            <option value="Specialty Suite">ROOM B</option> 
                            <option value="Executive Suite">ROOM C</option> 
                            <option value="Club Premier Room">ROOM D</option> 
                            <option value="Deluxe Rooms">ROOM E</option> 
                        </select>
                        <br/>
                     
                        <div class="stars" data-rating="0">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                        <p id="rating" name ="rating">Your rating: <span id="selected-rating" name ="rating">0</span></p>
                        <input type="hidden" id="selected-rating-input" name="rating" value="0">

                        </div>
                        <div class="row100">
                                <div class="inputBox">
                                <label for="comment">Other Comment</label>
                                <textarea name="comment"  placeholder="Write your comment here..."></textarea>
                                <span class="text-danger"><?php if(!empty($comment_error)){echo $comment_error;}?></span>
                                </div>
                        </div>
                        <div class="row100">
                                <div class="button-area">
                                <input type="submit" name="submit" onclick="return confirmation();" value="SUBMIT" >
                                <p id="success"></p>                                  
                                </div>                                           
                        </div>
                        <br/>
                        <div class="error"><?php if(!empty($msg)){echo $msg;}?></div>
                    </div>
                    
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
    let stars = document.querySelectorAll('.star');
let ratingValue = document.getElementById('rating');
let selectedRating = 0;

stars.forEach(function(star, index) {
    star.addEventListener('click', function() {
        selectedRating = index + 1;
        updateStars();
    });
});

function updateStars() {
    stars.forEach(function(star, index) {
        if (index < selectedRating) {
            star.classList.add('active');
        } else {
            star.classList.remove('active');
        }
    });

    ratingValue.textContent = 'Your rating: ' + selectedRating;

    document.getElementById('selected-rating-input').value = selectedRating;
}

function submitRating() {
    if (selectedRating > 0) {
        alert('Rating submitted: ' + selectedRating);
        selectedRating = 0;
        updateStars();
    } else {
        alert('Please select a rating before submitting.');
    }
}
function confirmation()
{
	answer = confirm("Do you want to submit your comment?");
	return answer;
}

</script>
                    
    </body>
