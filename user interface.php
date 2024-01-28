<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects Tracker</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Chart.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- Include Font Awesome CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <style>
        /* Custom CSS for the scrollable sidebar */
        /* Add your CSS styles here */

        /* Ensure HTML and body have 100% height */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar (Bootstrap Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Government Projects Tracker</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Budget Section -->
    <section class="budget-section py-5">
        <div class="container">
            <h2 class="text-center">Project Budget</h2>
            <!-- Budget details go here -->
            <p>Total Budget: $10,000,000</p>
            <!-- Add more budget details as needed -->
        </div>
    </section>

    <!-- Funding Section -->
    <section class="funding-section py-5">
        <div class="container">
            <h2 class="text-center">Funding Sources</h2>
            <!-- Funding details go here -->
            <p>Funding Sources:</p>
            <!-- Add more funding source details as needed -->
        </div>
    </section>

    <!-- Data Visualization Section (Chart) -->
    <section class="data-visualization py-5">
        <div class="container">
            <h2 class="text-center">Project Status Chart</h2>
            <!-- Chart container -->
            <canvas id="projectChart" width="400" height="400"></canvas>
        </div>
    </section>

    <!-- Social Sharing Buttons -->
    <div class="social-sharing">
        <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank">
            Share on Facebook
        </a>
        <a href="https://twitter.com/intent/tweet?url=YOUR_URL&text=Check out this project!" target="_blank">
            Share on Twitter
        </a>
    </div>

    <!-- Accessibility Features -->
    <div class="accessibility-features">
        <!-- Include accessibility features here -->
    </div>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2023 Felix Odhiambo</p>
    </footer>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for Data Visualization -->
    <script>
        var ctx = document.getElementById('projectChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Completed', 'Ongoing', 'Planned'],
                datasets: [{
                    data: [30, 50, 20],
                    backgroundColor: ['green', 'blue', 'orange'],
                }]
            }
        });
    </script>
</body>
</html>
