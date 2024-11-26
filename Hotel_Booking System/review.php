<?php
session_start();
include_once 'admin/include/class.user.php'; 

// Create an instance of the user class
$user = new user();

// Handle form submission
$message = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_review'])) {
    $name = $_POST['name'];
    $contact_number = $_POST['contact_number'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    // Call the submit_review method
    $result = $user->submit_review($name, $contact_number, $comment, $rating);

    // Set a message based on the result
    if ($result) {
        $message = "Review submitted successfully!";
    } else {
        $message = "Failed to submit review. Please try again.";
    }
}

// Fetch reviews for display
$reviews = $user->fetch_reviews();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Review</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
        }
        .container {
            margin-top: 50px;
        }
        .well {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border: none;
        }
        .review-item {
            border-bottom: 1px solid #fff;
            margin-bottom: 15px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
<div class="container">
      
      
      <img class="img-responsive" src="images/home.jpg" style="width:100%; height:180px;">      
       <nav class="navbar navbar-inverse" style="background-color: black; border-color: black;">
           <div class="container-fluid">
               <ul class="nav navbar-nav">
                   <li><a href="index.php"><b>Home</b></a></li>
                   <li><a href="room.php"><b>Room &amp; Facilities</b></a></li>
                   <li><a href="reservation.php"><b>Online Reservation</b></a></li>
                   <li class="active"><a href="review.php"><b>Review</b></a></li>
                   <li><a href="admin.php"><b>Admin</b></a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
               <li><a href="https://www.facebook.com/alifhossaintalha19"><img src="images/fb.png"><b>Facebook</b></a></li>
               <li><a href="https://www.linkedin.com/in/aliftalha/"><img src="images/in.png"><b>LinkedIn</b></a></li>                   
               </ul>
           </div>
       </nav>

    
       
       



   </div>
   
   
   
   
  
        
        <h1 class="text-center" style="background-color: black; color: while">Submit Your Review</h1>

        <?php if ($message) { echo "<p class='alert alert-info'>$message</p>"; } ?>

        <div class="well">
            <form action="review.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Enter your nick name" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" id="contact_number" placeholder="ENter your Contact Number" name="contact_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" placeholder="Fill free to comment here" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="rating">Rating (1-5):</label>
                    <select id="rating" name="rating" class="form-control" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <button type="submit" name="submit_review" class="btn btn-primary btn-block">Submit Review</button>
            </form>
        </div>

        <h2 class="text-center">Customer Reviews</h2>
        <div class="well">
            <?php
            if ($reviews && mysqli_num_rows($reviews) > 0) {
                while ($row = mysqli_fetch_assoc($reviews)) {
                    echo "<div class='review-item'>";
                    echo "<h4>{$row['name']} (Rating: {$row['rating']}/5)</h4>";
                    echo "<p>{$row['comment']}</p>";
                    echo "<small>Contact: {$row['contact_number']} | Submitted on: {$row['created_at']}</small>";
                    echo "</div>";
                }
            } else {
                echo "<p>No reviews yet. Be the first to review!</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>
