<?php
session_start();
if (empty($_SESSION['id'])) {
    header("location:../Views/login.php");
    exit;
}
require_once('../Models/userModel.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $success = deleteStudentById($id);

    if ($success) {
        $_SESSION['success'] = "Student deleted successfully.";
    } else {
        $_SESSION['errors'] = ["Error deleting student."];
    }
    header("Location: ../Views/viewStudent.php");
    exit;
} else {

    header("Location: ../Views/viewStudent.php");
    exit;
}

?>
