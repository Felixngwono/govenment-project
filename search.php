<?php
session_start();
include "connection.php";

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Define filter and search criteria (you can expand this)
$type = $_GET['type'] ?? '';
$status = $_GET['status'] ?? '';
$keywords = $_GET['keywords'] ?? '';

// Build SQL query based on criteria
$sql = "SELECT * FROM search WHERE 1=1";

if (!empty($type)) {
    // Use prepared statements to prevent SQL injection
    $sql .= " AND type = ?";
}

if (!empty($status)) {
    $sql .= " AND status = ?";
}

if (!empty($keywords)) {
    // Use prepared statements to prevent SQL injection
    $sql .= " AND (title LIKE ? OR description LIKE ?)";
}

// Prepare the statement
$stmt = $mysqli->prepare($sql);

// Bind parameters for prepared statements
if (!empty($type)) {
    $stmt->bind_param("s", $type);
}

if (!empty($status)) {
    $stmt->bind_param("s", $status);
}

if (!empty($keywords)) {
    $keywordsParam = "%$keywords%";
    $stmt->bind_param("ss", $keywordsParam, $keywordsParam);
}

// Execute the prepared statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Close the statement
$stmt->close();

// Close the database connection
$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Government Development Projects</h1>

        <!-- Filter Options (You can expand this) -->
        <form action="index.php" method="GET">
            <div class="form-group">
                <label for="type">Project Type:</label>
                <select class="form-control" id="type" name="type">
                    <option value="">All Types</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Education">Education</option>
                    <!-- Add more options -->
                </select>
            </div>
            <div class="form-group">
                <label for="status">Project Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="">All Statuses</option>
                    <option value="Upcoming">Upcoming</option>
                    <option value="Ongoing">Ongoing</option>
                    <option value="Completed">Completed</option>
                    <!-- Add more options -->
                </select>
            </div>
            <div class="form-group">
                <label for="keywords">Search Keywords:</label>
                <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter keywords">
            </div>
            <button type="submit" class="btn btn-primary">Filter/Search</button>
        </form>

        <!-- Search Results -->
        <div class="mt-4">
            <h2>Search Results</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Status</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display search results
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['title']}</td>";
                        echo "<td>{$row['description']}</td>";
                        echo "<td>{$row['type']}</td>";
                        echo "<td>{$row['status']}</td>";
                        // Add more columns as needed
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap and JavaScript Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your Custom JavaScript -->
    <script>
        // Add your custom JavaScript here
    </script>
</body>
</html>
