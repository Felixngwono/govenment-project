<?php
// Include the database connection file
include('connection.php');

// Assume you have a session started and user information stored in session variables
session_start();

// Initialize default values
$email = 'email';
$profilephoto = 'dala.jpg';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST["email"];

    // Validate the user (you should replace this with your actual validation logic)
    // Sanitize user input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    // Query the database to check if the user exists
    $query = "SELECT * FROM project WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'default_email@example.com';
    $profilephoto = isset($_SESSION['profilephoto']) ? $_SESSION['profilephoto'] : 'default_profile.jpg';
    
    // Check if a result is obtained
    if ($result) {
        $user_data = mysqli_fetch_assoc($result);

        // Retrieve user data
        $email = $user_data['email'];
        $profilephoto = $user_data['profilephoto'];
    } // No need for an else statement here
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects Tracker</title>
    <link rel="stylesheet" href="main.css">
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <style>
    /* Custom CSS for the scrollable sidebar */
    .sidebar-sticky {
        height: 100vh;
        overflow-y: auto;
    }
    
    /* Adjust the iframe size */
    iframe {
        width: 100%;
        height: 100%; /* Cover the rest of the page */
        border: none; /* Remove iframe border */
    }

    /* Make the carousel images smaller */
    .carousel-inner img {
        max-height: 100px; /* Set the maximum height as per your preference */
        width: 100px; /* Maintain the aspect ratio */
        margin: auto; /* Center the images */
    }
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar navigation -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                    <li class="profile">
                <!-- Update the src attribute with the actual profile photo URL -->
                <img src="<?php echo $profilephoto; ?>" alt="Profilephoto">
                <!-- Display the user's email -->
                <p>felixgwono@gmail.com</p>
            </li>
                        <br><br>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard/Home
                            </a>
                            <!-- Submenu content here -->
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="overview.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Project Status.php">Project Status</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Budget Analysis.php">Budget Analysis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Perfomance Metrix.php">Performance Metrics</a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <!-- Projects -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-project-diagram"></i> Projects
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="Ongoing Projects.php">Ongoing Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Completed Projects.php">Completed Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Upcoming Projects.php">Upcoming Projects</a>
                                </li>
                                
                            </ul>
                        </li>
                        <br>
                        <!-- Reports -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar"></i> Reports
                            </a>
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="project details.php">Project Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="project report.php">Progress Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="related document.php">Related Documents</a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <!-- Budget and Funding -->
                        <li class="nav-item">
                            <a class="nav-link" href="budget and funding.php">
                                <i class="fas fa-money-bill-wave"></i> Budget and Funding
                            </a>
                            <!-- Submenu content here -->
                        </li>
                        <!-- Government Agencies -->
                        <li class="nav-item">
                            <a class="nav-link" href="government agencies.php">
                                <i class="fas fa-building"></i> Government Agencies
                            </a>
                            <!-- Submenu content here -->
                        </li>
                        
                        
                       
                       
                            <!-- Submenu content here -->
                        </li>
                        <!-- Help and Support -->
                        <li class="nav-item">
                            <a class="nav-link" href="help and support.php">
                                <i class="fas fa-question-circle"></i> Help and Support
                            </a>
                            <!-- Submenu content here -->
                        </li>
                       
                        <!-- Logout -->
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                
                    </ul>
                </div>
            </nav>
            <!-- Your main content area -->
            <div class="col-md-10">
                <iframe src="index.php" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
