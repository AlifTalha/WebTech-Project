<?php
session_start();
include_once 'include/class.user.php';
$user = new User();

if (isset($_POST['submit'])) {
    $emailusername = $_POST['emailusername'];
    $password = $_POST['password'];

    // Check login
    if ($user->check_login($emailusername, $password)) {
        $_SESSION['user'] = $emailusername; // Store user in session
        echo "<script>location='../admin.php';</script>";
        exit;
    } else {
        $error_message = "Wrong username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://t4.ftcdn.net/jpg/08/15/78/47/360_F_815784772_RJWNG7S80zkl2j5SARZkHQ2GEX6rk8jw.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }

        .jumbotron {
            padding: 20px;
            text-align: center;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }

        .btn {
            font-size: 18px;
            padding: 10px;
            border-radius: 5px;
            background-color: #007bff;
            border: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        #wrong_id {
            margin-top: 10px;
        }
    </style>
    <script language="javascript" type="text/javascript">
        function validateLogin() {
            var form = document.login;
            if (form.emailusername.value.trim() === "") {
                alert("Enter email or username.");
                return false;
            }
            if (form.password.value.trim() === "") {
                alert("Enter Password.");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Log In</h2>
            <hr>
            <form action="" method="post" name="login" onsubmit="return validateLogin();">
                <div class="form-group">
                    <label for="emailusername">Username or Email:</label>
                    <input type="text" name="emailusername" class="form-control" placeholder="Enter username or email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>
                <!-- Display error message -->
                <?php if (isset($error_message)) : ?>
                    <p id="wrong_id" style="color: red; font-size: 12px;"><?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>

                <button type="submit" name="submit" value="Login" class="btn btn-lg btn-primary btn-block">Submit</button>
                <br>
                <p style="text-align: center; font-size: 14px;"><a href="../index.php">Back To Home</a></p>
            </form>
        </div>
    </div>
</body>

</html>
