<?php
session_start();
include "connection.php";
include "htmlDomParser.php";
// Check if the admin is logged in (you should implement an admin login system)
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Function to display a user message
function displayUserMessage($message, $messageId) {
    echo "<div class='alert alert-info'><strong>User Message:</strong><br>$message</div>";
    echo "<a href='admin.php?view=$messageId'>View Message</a><br><br>";
}

if (isset($_GET['view'])) {
    $messageId = $_GET['view'];
    $messageContent = isset($userMessages[$messageId]) ? $userMessages[$messageId] : "Message not found.";
}

// Fetch user messages from the "feedback" table
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

$userMessages = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userMessages[$row['id']] = "Name: " . $row['name'] . "<br>Email: " . $row['email'] . "<br>Message: " . $row['message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Government Development Projects Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
            </ul>
        </div>
    </nav>

    <!-- Admin Dashboard Content -->
    <div class="container mt-5">
        <h2>Government Jobs</h2>
        <div id="job-listings">
            <!-- Job listings will be displayed here -->
        </div>

        <button id="refresh-jobs" class="btn btn-primary">Refresh Job Listings</button>

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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to load and display job listings
        function loadJobListings() {
            $.ajax({
                type: "GET",
                url: https://www.careerpointkenya.co.ke/
                dataType: "json",
                success: function (jobs) {
                    // Clear existing job listings
                    $("#job-listings").html("");

                    // Display the refreshed job listings
                    if (jobs.length > 0) {
                        var html = "<table class='table'>";
                        html += "<thead><tr><th>Job Title</th><th>Description</th></tr></thead><tbody>";

                        $.each(jobs, function (index, job) {
                            html += "<tr>";
                            html += "<td>" + job.title + "</td>";
                            html += "<td>" + job.description + "</td>";
                            html += "</tr>";
                        });

                        html += "</tbody></table>";
                        $("#job-listings").html(html);
                    } else {
                        $("#job-listings").html("No job listings available.");
                    }
                },
                error: function () {
                    $("#job-listings").html("Failed to load job listings.");
                }
            });
        }

        // Load job listings when the page loads
        $(document).ready(function () {
            loadJobListings();
        });

        // Refresh job listings when the "Refresh Job Listings" button is clicked
        $("#refresh-jobs").click(function () {
            loadJobListings();
        });
    </script>
</body>
</html>
