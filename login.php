<?php
// Include the database connection file
include('connection.php');



// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the user (you should replace this with your actual validation logic)
    // Sanitize user input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database to check if the user exists
    $query = "SELECT * FROM project WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // User found, check if the password is correct
        $user_data = mysqli_fetch_assoc($result);

        if ($password == $user_data['password']) {
            // Password is correct, login successful
            $loginStatus = "Login successful!";
        
            // Start a session and store user information
            session_start();
            $_SESSION['email'] = $user_data['email'];
            $_SESSION['profilephoto'] = $user_data['profilephoto'];
        } else {
            // Password is incorrect
            $loginStatus = "Invalid email or password!";
        }
    }        
}

// Close the database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Government Development Projects Tracker</title>
    <!-- Include Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-50">
                <h2 class="mb-4">Login</h2>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <br><br>
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                   
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Include JavaScript for showing a pop-up message and redirection -->
    <script>
        // Check the login status and display a pop-up accordingly
        <?php
    if (!empty($loginStatus) && $loginStatus == "Login successful!") {
        echo "alert('$loginStatus');";
        // Redirect to sidebar.php after displaying the pop-up
        echo "window.location.href = 'side bar.php';";
        
    } elseif (!empty($loginStatus)) {
        echo "alert('$loginStatus');";
    }
    ?>
    </script>
</body>
</html>

