<?php
session_start();
include "connection.php";

// Check if the admin is logged in (you should implement an admin login system)
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Function to fetch and parse government projects from a URL
function fetchGovernmentProjects($url) {
    // Use cURL or another method to fetch the webpage content from the URL
    // Parse the webpage content to extract government projects information
    // Return the project data as an array
    // You may use libraries like Simple HTML DOM Parser for parsing
    // Example code for fetching data will be provided below
}

// Fetch and parse government projects
$projects = fetchGovernmentProjects("http://www.resilience.go.ke");

// Function to display a user message
function displayUserMessage($message, $messageId) {
    echo "<div class='alert alert-info'><strong>User Message:</strong><br>$message</div>";
    echo "<a href='admin.php?view=$messageId'>View Message</a><br><br>";
}

if (isset($_GET['view'])) {
    $messageId = $_GET['view'];
    $messageContent = isset($userMessages[$messageId]) ? $userMessages[$messageId] : "Message not found.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Government Development Projects Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation Bar (you can customize as needed) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="admin.php">Admin Dashboard</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin_logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="arefresh.php">Refresh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="submit.php">Submit</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Admin Dashboard Content -->
    <div class="container mt-5">
        <h2>Government Jobs</h2>
        <!-- Sample government jobs table (customize as needed) -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Project Title</th>
                    <th>Description</th>
                    <th>View Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($projects as $project) {
                    echo "<tr>";
                    echo "<td>{$project['title']}</td>";
                    echo "<td>{$project['description']}</td>";
                    echo "<td><a href='project_details.php?title=" . urlencode($project['title']) . "' class='btn btn-primary'>View Details</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <h2>User Messages</h2>
        <?php
        if (!empty($userMessages)) {
            foreach ($userMessages as $messageId => $message) {
                displayUserMessage($message, $messageId);
            }
        } else {
            echo "No user messages available.";
        }
        ?>
    </div>

    <!-- Include Bootstrap JS and Popper.js (you can add custom JavaScript if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
