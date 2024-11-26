<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    
    <style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }


        /* Slide container style */
.w3-content {
    position: relative;
    max-width: 100%;
    margin: auto;
}

/* Image fade animation */
.w3-animate-fading {
    animation: fade 5s infinite;
}

/* Phone bubble styling */
.phone-bubble {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #ffbb2b; /* Bubble color */
    padding: 10px 20px;
    border-radius: 50px;
    font-size: 18px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    animation: bubble-fade 5s infinite;
}

.phone-bubble a {
    color: white;
    font-size: 18px;
    text-decoration: none;
}

.phone-bubble a:hover {
    text-decoration: underline;
}

/* Fade animation for sliding images */
@keyframes fade {
    0% { opacity: 0; }
    10% { opacity: 1; }
    30% { opacity: 1; }
    40% { opacity: 0; }
    100% { opacity: 0; }
}

/* Make phone number bubbles appear one by one */
@keyframes bubble-fade {
    0% { opacity: 0; }
    10% { opacity: 1; }
    30% { opacity: 1; }
    50% { opacity: 0; }
    100% { opacity: 0; }
}

		
    </style>


<script>
    var slideIndex = 0;

    function showSlides() {
        var slides = document.getElementsByClassName("mySlides");
        var bubbles = document.getElementsByClassName("phone-bubble");
        
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            bubbles[i].style.display = "none";
        }
        
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        
        slides[slideIndex - 1].style.display = "block";
        bubbles[slideIndex - 1].style.display = "block";
        
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    }

    showSlides(); // Call the function to start the slideshow
</script>

    
    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="images/home.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse" style="background-color: black; border-color: black;">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><b>Home</b></a></li>
                    <li><a href="room.php"><b>Room &amp; Facilities</b></a></li>
                    <li><a href="reservation.php"><b>Online Reservation</b></a></li>
                    <li><a href="review.php"><b>Review</b></a></li>
                    <li><a href="admin.php"><b>Admin</b></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://www.facebook.com/alifhossaintalha19"><img src="images/fb.png"><b>Facebook</b></a></li>
                    <li><a href="https://www.linkedin.com/in/aliftalha/"><img src="images/in.png"><b>LinkedIn</b></li>                    
                </ul>
            </div>
        </nav>

<!--      
        <div class="jumbotron">
        <div class="w3-content w3-section">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/1.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/2.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/3.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/4.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/5.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/6.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/11.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/12.jpg" style="width:100%; height:450px;">

        </div>    
        </div> -->


        <div class="jumbotron">
    <div class="w3-content w3-section">
        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/1.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                    <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>

        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/2.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>

        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/3.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>

        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/4.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>

        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/5.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>

        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/6.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>

        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/11.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>

        <div class="w3-container mySlides w3-animate-fading">
            <img src="images/home_gallary/12.jpg" style="width:100%; height:450px;">
            <div class="phone-bubble">
                <a href="https://www.linkedin.com/in/aliftalha/" style="color: white; text-decoration: none; font-size: 18px;">
                <span style="font-weight: bold; font-size: 20px;">Dev: </span>Alif Hosain Talha
                </a>
            </div>
        </div>
    </div>
</div>






        <hr>
        <div class="row" style="color: #99A3A3">
    <div class="col-md-12 well">
    <h4><strong style="color: #ffbb2b; font-size: 28px;">About</strong></h4><br>
        <p style="font-size: 18px;">The <strong>Hotel Management System</strong> is a comprehensive platform designed to streamline the operations of a hotel, ensuring an efficient and seamless experience for both the hotel staff and guests.This system is tailored to meet the demands of modern hospitality, offering 
        functionalities that enhance the overall management process and customer satisfaction.</p>
        <br>
        <p style="font-size: 18px;">
            <strong style=" color: #7FFFD4">Room and Facilities Management:</strong><br>
            Efficiently manage room bookings, availability, and facilities. The system ensures that guests can easily select their preferred room type and access detailed information about available amenities.
        </p>
        <br>
        <p style="font-size: 18px;">
            <strong style=" color: #7FFFD4">Online Reservation System:</strong><br>
            A user-friendly online reservation portal allows guests to book rooms from anywhere, at any time. This feature integrates payment gateways for secure and hassle-free transactions.
        </p>
        <br>
        <p style="font-size: 18px;">
            <strong style=" color: #7FFFD4">Admin Panel:</strong><br>
            A powerful backend interface for hotel administrators to manage bookings, customer details, room availability, and staff information. The admin panel ensures that operations run smoothly.
        </p>
        <br>
        <p style="font-size: 18px;">
            <strong style=" color: #7FFFD4">Customer Management:</strong><br>
            Store and manage customer profiles, preferences, and feedback, allowing the hotel to provide personalized services to enhance guest experiences.
        </p>
    </div>
</div>

        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
              <h4><strong>Contact Us</strong></h4><hr>
              Address : Dhaka,Bangladesh<br>
              Mail :hossainalif696@gmail.com <br>
              GitHub:https://github.com/AlifTalha
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <a href="#">ALIF HOSSAIN TALHA</a>

            </div>
        </div>
        



    </div>
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>