<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Project Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Government Development Project Dashboard</h1>

        <!-- Current Status -->
        <div class="alert alert-success" role="alert">
            <strong>Status:</strong> In Progress
        </div>

        <!-- Milestones -->
        <h2>Milestones</h2>
        <ul>
            <li>Phase 1: Completed</li>
            <li>Phase 2: In Progress</li>
            <li>Phase 3: Not Started</li>
        </ul>

        <!-- Performance Metrics -->
        <h2>Performance Metrics</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="metric">
                    <h3>Cost Efficiency</h3>
                    <p>Cost efficiency metric details...</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="metric">
                    <h3>Time Efficiency</h3>
                    <p>Time efficiency metric details...</p>
                </div>
            </div>
        </div>

        <!-- JavaScript for Interactive Elements (e.g., charts) -->
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>

        <!-- Additional Information and Content Here -->

    </div>
    <?php
// Include the database connection file
include('footer.php');
?>
    <!-- Bootstrap and JavaScript Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Charting Library (e.g., Chart.js) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- Your Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>
