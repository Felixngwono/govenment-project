<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["projectTitle"]) && isset($_POST["projectDescription"])) {
        // Retrieve project details from the form
        $projectTitle = $_POST["projectTitle"];
        $projectDescription = $_POST["projectDescription"];

        // Insert the project into the database
        $insertSql = "INSERT INTO completed_projects (project_title, description) VALUES (?, ?)";
        $stmt = $conn->prepare($insertSql);

        if ($stmt->bind_param("ss", $projectTitle, $projectDescription) && $stmt->execute()) {
            // Redirect back to upcoming projects.php after successful insertion
            header("Location: completed projects.php");
            exit();
        } else {
            // Handle SQL error
            echo "Error executing SQL statement: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Government Development Project</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
       body{
        font-size: 14px;
    }
    </style>
</head>
<body>
<div class="container mt-5">
        <h2>Completed Government Projects</h2>
       <!-- Sample government jobs table (customize as needed) -->
<table class="table table-bordered" id="projectTable">
    <thead>
        <tr>
            <th>User ID</th>
            <th>Project Title</th>
            <th>Description</th>
            <th>Project Location</th>
            <th>Implementing Agency</th>
            <th>Project Duration</th>
            <th>Budget</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Retrieve government development projects from the database
        $projectsSql = "SELECT * FROM completed_projects";
        $resultProjects = $conn->query($projectsSql);

        if ($resultProjects !== false && $resultProjects->num_rows > 0) {
            while ($rowProject = $resultProjects->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$rowProject['user_id']}</td>";
                echo "<td>{$rowProject['Project Title']}</td>";
                echo "<td>{$rowProject['Description']}</td>";
                echo "<td>{$rowProject['Project Location']}</td>";
                echo "<td>{$rowProject['Implementing Agency']}</td>";
                echo "<td>{$rowProject['Project Duration']}</td>";
                echo "<td>{$rowProject['Budget']}</td>";
               
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No projects found.</td></tr>";
        }
        ?>
    </tbody>
</table>
<br>
<div class="mt-4">
            <h2>Project Documentation</h2>
            <ul>
                <li><a href="http://www.parliament.go.ke/sites/default/files/2021-05/FY%202021-22%20LIST%20OF%20PROJECTS%20OF%20THE%20NATIONAL%20GOVERNMENT%20OF%20KENYA%20%281%29.pdf">Final Project Report</a></li>
                <li><a href="http://www.nema.go.ke/index.php?option=com_content&view=article&id=119&Itemid=144">Environmental Impact Assessment</a></li>
                <li><a href="https://corporatefinanceinstitute.com/resources/accounting/audited-financial-statements/">Audited Financial Statements</a></li>
            </ul>
        </div>
    </div>
    <?php
    include ("footer.php");
    ?>

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
