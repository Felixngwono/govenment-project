<?php
session_start();
include("connection.php");

// Check if the admin is logged in (you should implement an admin login system)
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
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

// Function to display a user message
function displayUserMessage($message, $messageId) {
    echo "<div class='alert alert-info'><strong>User Message:</strong><br>$message</div>";
    echo "<a href='admin.php?view=$messageId'>View Message</a><br><br>";
}

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
    body{
        font-size: 14px;
    }
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
           <h1 ><span style='color: orange;'>Admin Dashboard</span> </h1>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin_logout.php">Logout</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="https://www.constructionkenya.com/999/major-construction-projects/">Search</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Admin Dashboard Content -->
    <div class="container mt-5">
        <h2>Ongoing Government Projects</h2>
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
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProjectModal">Add Ongoing Project</button>
         
        </div>
  <div class="container mt-5">
        <h2>upcoming Government Projects</h2>
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
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProjectModal">Add Upcoming Project</button>
              
          
        </div>
  <div class="container mt-5">
        <h2><span</span>Completed Government Projects</h2>
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
 
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProjectModal">Add Completed Project</button>
           
<br><br>

        <h2>User Messages</h2>
        <?php
        if (!empty($userMessages)) {
            foreach ($userMessages as $messageId => $message) {
                displayUserMessage($message, $messageId);
            }
        } else {
            echo "You've successfully submitted your request.";
        }
        ?>

      <!-- Add  ongoing Project Modal -->
<div class="modal" id="addProjectModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Ongoing Project</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="add_project.php">
                    <div class="form-group">
                        <label for="projectTitle">Project Title:</label>
                        <input type="text" class="form-control" id="projectTitle" name="projectTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="projectDescription">Description:</label>
                        <textarea class="form-control" id="projectDescription" name="projectDescription" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="projectLocation">Project Location:</label>
                        <input type="text" class="form-control" id="projectLocation" name="projectLocation" required>
                    </div>
                    <div class="form-group">
                        <label for="implementingAgency">Implementing Agency:</label>
                        <input type="text" class="form-control" id="implementingAgency" name="implementingAgency" required>
                    </div>
                    <div class="form-group">
                        <label for="projectDuration">Project Duration:</label>
                        <input type="text" class="form-control" id="projectDuration" name="projectDuration" required>
                    </div>
                    <div class="form-group">
                        <label for="budget">Budget:</label>
                        <input type="text" class="form-control" id="budget" name="budget" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Project</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Add Project Modal -->
<!-- Add Upcoming Project Modal -->
<div class="modal" id="addUpcomingProjectModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Upcoming Project</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="add_upcomingproject.php">
                    <div class="form-group">
                        <label for="upcomingProjectTitle">Project Title:</label>
                        <input type="text" class="form-control" id="upcomingProjectTitle" name="upcomingProjectTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="upcomingProjectDescription">Description:</label>
                        <textarea class="form-control" id="upcomingProjectDescription" name="upcomingProjectDescription" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="upcomingProjectLocation">Project Location:</label>
                        <input type="text" class="form-control" id="upcomingProjectLocation" name="upcomingProjectLocation" required>
                    </div>
                    <div class="form-group">
                        <label for="upcomingImplementingAgency">Implementing Agency:</label>
                        <input type="text" class="form-control" id="upcomingImplementingAgency" name="upcomingImplementingAgency" required>
                    </div>
                    <div class="form-group">
                        <label for="upcomingProjectDuration">Project Duration:</label>
                        <input type="text" class="form-control" id="upcomingProjectDuration" name="upcomingProjectDuration" required>
                    </div>
                    <div class="form-group">
                        <label for="upcomingBudget">Budget:</label>
                        <input type="text" class="form-control" id="upcomingBudget" name="upcomingBudget" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Upcoming Project</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add Completed Project Modal -->
<div class="modal" id="addCompletedProjectModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Completed Project</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="add_completed_projects.php">
                    <div class="form-group">
                        <label for="completedProjectTitle">Project Title:</label>
                        <input type="text" class="form-control" id="completedProjectTitle" name="completedProjectTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="completedProjectDescription">Description:</label>
                        <textarea class="form-control" id="completedProjectDescription" name="completedProjectDescription" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="completedProjectLocation">Project Location:</label>
                        <input type="text" class="form-control" id="completedProjectLocation" name="completedProjectLocation" required>
                    </div>
                    <div class="form-group">
                        <label for="completedImplementingAgency">Implementing Agency:</label>
                        <input type="text" class="form-control" id="completedImplementingAgency" name="completedImplementingAgency" required>
                    </div>
                    <div class="form-group">
                        <label for="completedProjectDuration">Project Duration:</label>
                        <input type="text" class="form-control" id="completedProjectDuration" name="completedProjectDuration" required>
                    </div>
                    <div class="form-group">
                        <label for="completedBudget">Budget:</label>
                        <input type="text" class="form-control" id="completedBudget" name="completedBudget" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Completed Project</button>
                </form>
            </div>
        </div>
    </div>
</div>


    </div>

    <!-- Include Bootstrap JS and Popper.js (you can add custom JavaScript if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
</body>
</html>
