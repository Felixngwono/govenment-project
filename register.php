<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $profilephoto = $_FILES["profilephoto"]["name"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // Check if full name or email already exists
    $duplicate = mysqli_query($conn, "SELECT * FROM project WHERE Fullname = '$fullname' OR email = '$email'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Full name or email already exists');</script>";
    } else {
        if (!empty($fullname) && !empty($email) && !empty($profilephoto) && !empty($password) && !empty($confirmpassword) && $password == $confirmpassword) {
            // Upload profile photo to a directory
            $target_dir = "profile_photos/";
            $target_file = $target_dir . basename($_FILES["profilephoto"]["name"]);
            move_uploaded_file($_FILES["profilephoto"]["tmp_name"], $target_file);

            // Insert user data into the database without hashing the password
            $stmt = $conn->prepare("INSERT INTO project (Fullname, email, profilephoto, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $fullname, $email, $profilephoto, $password);

            if ($stmt->execute()) {
                echo "<script>alert('Successfully registered');</script>";
                header('location: login.php');
                exit(); // Add this to stop further execution after redirection
            } else {
                echo "<script>alert('Registration failed');</script>";
            }
        } else {
            echo "<script>alert('Please enter valid information or ensure passwords match');</script>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Government Development Projects Tracker</title>
    <!-- Include Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-30">
                <h2 class="mb-4">Register</h2>
                <form action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="fullname">Full Name</label> 
                        <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="profilephoto">Profile Photo</label>
                        <input type="file" name="profilephoto" class="form-control-file" id="profilephoto">
                    </div>
                    <div class="form-group">
                        <label for="password"><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Confirm password" required>
                        <span id="password-error" style="color: red;"></span>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                    <br>
                    <p>Already have an account? <a href="login.php"> Login</p>
                  
                   
                </form>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="register.js"></script>
</body>
</html>