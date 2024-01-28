<?php
// Include your connection.php file to connect to the database
include "connection.php";

// Check if the project title parameter is set in the URL
if (isset($_GET['title'])) {
    $projectTitle = $_GET['title'];

    // Fetch project details from the database based on the project title
    $sql = "SELECT * FROM project_table WHERE title = '$projectTitle'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Assuming there is only one project with the same title
        $project = $result->fetch_assoc();

        // Display project details
        echo "<h2>{$project['title']}</h2>";
        echo "<p>{$project['description']}</p>";
        echo "<p>{$project['details']}</p>";

        // You can add more project details as needed
    } else {
        echo "Project not found.";
    }
} else {
    echo "Invalid request. Project title not specified.";
}
?>
