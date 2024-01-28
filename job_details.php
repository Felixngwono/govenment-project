<?php
session_start();

// Check if the admin is logged in (you should implement an admin login system)
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Retrieve the job title from the query string
if (isset($_GET['title'])) {
    $title = urldecode($_GET['title']);
} else {
    header("Location: admin.php"); // Redirect to the admin dashboard if the title is not provided
    exit();
}

// Simulated job details (you can replace this with real job data)
$jobDetails = array(
    'title' => 'Job 1',
    'description' => 'Description of Job 1',
    'location' => 'Location of Job 1',
    'deadline' => '2023-12-31'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details - Government Development Projects Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation Bar (you can customize as needed) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Job Details</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Back to Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Job Details Content -->
    <div class="container mt-5">
        <h2><?= $jobDetails['title'] ?></h2>
        <p><strong>Description:</strong> <?= $jobDetails['description'] ?></p>
        <p><strong>Location:</strong> <?= $jobDetails['location'] ?></p>
        <p><strong>Application Deadline:</strong> <?= $jobDetails['deadline'] ?></p>
    </div>

    <!-- Include Bootstrap JS and Popper.js (you can add custom JavaScript if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
