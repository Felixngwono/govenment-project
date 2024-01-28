<?php
$projectId = 3; 
$projectTitle = "Agency";
$projectDescription = "Keroka, Kisii, Kenya. The Agency project is a development initiative aimed at improving energy and electricity infrastructure in the Keroka region. With an estimated budget of Ksh. 60,000,000, the project is expected to enhance the overall energy supply and accessibility in the area.";

// Additional project details
$projectLocation = "Keroka, Kisii, Kenya";
$implementingAgency = "Ministry of Energy and Electricity";
$projectDuration = "January 2024 - December 2026";
$projectBudget = "Estimated Ksh. 60,000,000";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More - <?php echo $projectTitle; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center"><?php echo $projectTitle; ?></h1>

        <div class="card">
            <div class="card-body">
                <p class="card-text"><?php echo $projectDescription; ?></p>
                <ul>
                    <li><strong>Project Location:</strong> <?php echo $projectLocation; ?></li>
                    <li><strong>Implementing Agency:</strong> <?php echo $implementingAgency; ?></li>
                    <li><strong>Project Duration:</strong> <?php echo $projectDuration; ?></li>
                    <li><strong>Project Budget:</strong> <?php echo $projectBudget; ?></li>
                </ul>
                <!-- Add more details, images, or links here -->
            </div>
        </div>

        <br>

        <a href="side bar.php" class="btn btn-primary">Back to Projects</a>
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
