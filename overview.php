<?php
session_start();
include("connection.php");



// Handle adding a new project
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["projectType"]) && isset($_POST["projectTitle"]) && isset($_POST["projectDescription"])) {
        // Retrieve project details from the form
        $projectType = $_POST["projectType"];
        $projectTitle = $_POST["projectTitle"];
        $projectDescription = $_POST["projectDescription"];

        // Insert the project into the respective table based on the project type
        $insertSql = "";
        switch ($projectType) {
            case "ongoing":
                $insertSql = "INSERT INTO government_projects (`Project Title`, `Description`,`Project Location`,`Implementing Agency`,`Project Duration`,`Budget`) VALUES (?, ?, ?, ?, ?, ?)";
                break;
            case "upcoming":
                $insertSql = "INSERT INTO upcoming_projects (`Project Title`, `Description`,`Project Location`,`Implementing Agency`,`Project Duration`,`Budget`) VALUES (?, ?, ?, ?, ?, ?)";
            case "completed":
                $insertSql = "INSERT INTO completed_projects (`Project Title`, `Description`,`Project Location`,`Implementing Agency`,`Project Duration`,`Budget`) VALUES (?, ?, ?, ?, ?, ?)";
                break;
            default:
                echo "Invalid project type";
                exit();
        }

        $stmt = $conn->prepare($insertSql);
        if ($projectType == "upcoming" || $projectType == "completed") {
            $ProjectTitle= $_POST["Project Title"];
            $Description = $_POST["Description"];
            $ProjectLocation = $_POST["Project Location"];
            $ImplementingAgency = $_POST["Implementing Agency"];
            $ProjectDuration = $_POST["Project Duration"];
            $Budget = $_POST["Budget"];
            $stmt->bind_param("sssssss", $projectTitle, $Description, $projectLocation, $implementingAgency, $projectDuration, $Budget, );
        } else {
            $stmt->bind_param("ss", $projectTitle, $Description, $ProjectLocation , $ImplementingAgency, $ProjectDuration, $Budget,);
        }



        if ($stmt->bind_param("ss", $projectTitle, $projectDescription) && $stmt->execute()) {
            // Redirect back to admin.php after successful insertion
            header("Location: admin dashboard.php");
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
    <title>Admin Dashboard - Government Development Projects Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
        /* Add your custom CSS styles here */
        .add-project-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .add-project-button button {
            background-color: #28a745; /* Green color, you can change it */
            color: #fff; /* White text, you can change it */
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar (you can customize as needed) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
           <h1 ><span style='color: violet;'>User View</span> </h1>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcoming page.php"> <span style="color: skyblue;">Logout</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="https://www.constructionkenya.com/999/major-construction-projects/"><span style="color: skyblue;">Search</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Admin Dashboard Content -->
    <div class="container mt-5">
        <h2><span style="color: #28a745;">Ongoing Government Projects</span></h2>
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
        $projectsSql = "SELECT * FROM government_projects";
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
       
        </div>
  <div class="container mt-5">
        <h2><span style="color: cyan;">upcoming Government Projects</span></h2>
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
        $projectsSql = "SELECT * FROM upcoming_projects";
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
       
        </div>
  <div class="container mt-5">
        <h2><span style="color: blue;">Completed Government Projects</span></h2>
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
 

    </div>
    <?php
    include "footer.php"
    ?>
    <!-- Include Bootstrap JS and Popper.js (you can add custom JavaScript if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
