<?php
session_start();

if (isset($_POST['login'])) {
    $username = 'StoryTeller';
    $password = 'Ngwono123'; 

    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Replace this with your actual password verification logic
    if ($entered_username === $username && $entered_password === $password) {
        $_SESSION['admin'] = $username;
        echo '<script>alert("Login successful!"); window.location.href = "dashboard.php";</script>';
        exit();
    } else {
        $login_error = "Invalid username or password. Please try again.";
        echo '<script>alert("Invalid username or password!"); window.location.href = "admin_login.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Government Development Projects Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(wel.avif);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            flex: 1;
        }

        .footer {
            background-color: #f8f9fa; /* Set your desired background color */
            padding: 2px;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Admin Login</h2>
                <?php
                if (isset($login_error)) {
                    echo '<div class="alert alert-danger" role="alert">' . $login_error . '</div>';
                }
                ?>
                <form action="admin_login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <section>
    
    </section>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
