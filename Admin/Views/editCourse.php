<?php
    
    session_start();

    $_SESSION['name'];

    if(empty($_SESSION['id']))
    {       
        header("location:../Views/login.php");
    }

    $courseId = isset($_GET['id']) ? $_GET['id'] : null;
    require_once('../Models/userModel.php');
    $course = getCourseById($courseId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/adminStyle.css">
    <link rel="stylesheet" href="../../css/addTeacher.css">
    <title>Edit Course</title>
<style>

.dashboard-table {
    margin-bottom: 20px;
    float: center; 
    max-width: 70%; 
    margin-right: 20px; 
}

.dashboard-table table {
    width: 100%;
    border-collapse: collapse;
}

.dashboard-table th,
.dashboard-table td {
    border: 1px solid #ccc;
    padding: 8px;
}

.dashboard-table th {
    background-color: #5bc0de;
    text-align: center; 
}

.dashboard-table tbody tr:nth-child(even) {
    background-color: white;
}

.dashboard-table tbody tr:hover {
    background-color: #ddd;
}

.brand-name {
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #0056b3;
    border-bottom: 1px solid black;
    border-top: 1px solid black;
}

.brand-name h1 {
    font-size: 24px;
    margin: 0;
    color: #fff;
}

.side-menu {
    width: 250px;
    background-color: #165aaa;
    padding-top: 5px;
    padding-left: 0px;
    text-align: center;
    float: left; 
}

.content {
    flex-grow: 1;
    padding: 10px;
    margin-left: 270px; 
}

.dashboard-table {
    margin-bottom: 5px;
    max-width: 100%;
}

.dashboard-table td a {
    display: inline-block;
    padding: 8px 16px;
    margin: 0 5px;
    text-decoration: none;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.dashboard-table td a:hover {
    background-color: #45a049;
}

.dashboard-table td {
    text-align: center;
}

.search-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}

.search-container h2 {
    margin-bottom: 10px;
}

.search-container input[type="text"] {
    width: 300px; 
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.search-container input[type="button"] {
    background-color: #4CAF50; 
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.search-container input[type="button"]:hover {
    background-color: #45a049; 
}

.form-group {
    text-align: center;
}
.form-group button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

</style>

</head>
<body>
    <div class="header">
    <h1>Creative International School Management System</h1>
    </div>

    <div class="brand-name">
        <h1>Welcome Admin,<?php echo $_SESSION['name']; ?></h1>
    </div>

    <form action="">
    <div class="side-menu">
        <ul>
            <li><a href="adminDash.php"><img src="../../images/dashboard (2).png" alt=""> Dashboard</a></li>
			<li class="dropdown">
                <a href="addTeacher.php"><img src="../../images/teacher2.png" alt=""> Teacher</a>
                <div class="dropdown-content">
                    <a href="viewTeacher.php">View Teacher</a>
                </div>
            </li>
			<li class="dropdown">
                <a href="addStudent.php"><img src="../../images/student-32.png" alt=""> Student</a>
                <div class="dropdown-content">
                    <a href="viewStudent.php">View Student</a>
                </div>
            </li>
            <li><a href="fees.php"><img src="../../images/income.png" alt=""> Fees Section</a></li>
			<li class="dropdown">
                <a href="addLibrarian.php"><img src="../../images/library-32.png" alt=""> Librarian</a>
                <div class="dropdown-content">
                    <a href="viewLibrarian.php">View Librarian</a>
                </div>
            </li>
            <li><a href="noticePost.php"><img src="../../images/clipboard-2-32.png" alt=""> Notice Board</a></li>
            <li><a href="libraryBookInfo.php"><img src="../../images/reading-book (1).png" alt=""> Library Book Details</a></li>
            <li class="dropdown">
                <a href="../Controllers/addCourseController.php"><img src="../../images/book-2-32.png" alt=""> Courses</a>
                <div class="dropdown-content">
                    <a href="viewCourse.php">View Courses</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="viewProfile.php"><img src="../../images/settings.png" alt=""> Profile</a>
                <div class="dropdown-content">
                    <a href="changePassword.php">Change Password</a>
                </div>
            </li>
            <li><a href="../Controllers/logout.php"><img src="../../images/account-logout-32.png" alt=""> Logout</a></li>
        </ul>
    </div>
    </form>
    
    <div class="content">
        <form action="../Controllers/editCourseCheckController.php" method="POST" id="edit-course-form">
            <h2 align="center">Edit Course</h2>
            <input type="hidden" name="id" value="<?php echo ($course) ? $course['id'] : ''; ?>">
            
            <label for="name">Course Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo ($course) ? $course['name'] : ''; ?>"><br>

            <label for="class">Class:</label><br>
            <select name="class" id="class">
                <option value="6" <?php echo ($course && $course['class'] == '6') ? 'selected' : ''; ?>>6</option>
                <option value="7" <?php echo ($course && $course['class'] == '7') ? 'selected' : ''; ?>>7</option>
                <option value="8" <?php echo ($course && $course['class'] == '8') ? 'selected' : ''; ?>>8</option>
                <option value="9" <?php echo ($course && $course['class'] == '9') ? 'selected' : ''; ?>>9</option>
                <option value="10" <?php echo ($course && $course['class'] == '10') ? 'selected' : ''; ?>>10</option>
            </select><br>

            <label for="description">Description:</label><br>
            <input type="text" id="description" name="description" value="<?php echo ($course) ? $course['description'] : ''; ?>"><br>

            <div class="form-group">
                <button type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>
    
</body>
</html>


