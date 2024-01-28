<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Project Status</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Government Development Project Status</h1>

        <!-- Current Status -->
        <div class="alert alert-success" role="alert">
            <strong>Status:</strong> In Progress
        </div>

        <!-- Search Functionality -->
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for projects..." id="searchInput">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="searchButton">Search</button>
            </div>
        </div>

        <!-- Milestones -->
        <h2>Milestones</h2>
        <ul>
            <li>Phase 1: Completed</li>
            <li>Phase 2: In Progress</li>
            <li>Phase 3: Not Started</li>
        </ul>

        <!-- Timeline -->
        <h2>Timeline</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Phase</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Phase 1</td>
                    <td>2023-01-15</td>
                    <td>2023-04-30</td>
                </tr>
                <tr>
                    <td>Phase 2</td>
                    <td>2023-05-15</td>
                    <td>2023-09-30</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        <!-- Budget Status -->
        <h2>Budget Status</h2>
        <p><strong>Total Allocated Budget:</strong> ksh. 10,000,000</p>
        <p><strong>Total Expenditure:</strong> ksh. 4,000,000</p>

        <!-- Interactive Chart -->
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>

        <!-- Additional Information and Content Here -->

    </div>

    <!-- Bootstrap and JavaScript Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Charting Library (e.g., Chart.js) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- Your Custom JavaScript -->
    <script src="script.js"></script>

    <script>
        // Add your interactive JavaScript code here
        // For example, handling search functionality, dynamic content loading, etc.
    </script>
</body>

</html>
