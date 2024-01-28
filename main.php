<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects Tracker</title>
    <!-- Include Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="jumbotron text-center bg-primary text-white">
        <h1 class="display-4">Welcome to the Government Development Projects Tracker</h1>
        <p class="lead">Stay informed about ongoing and upcoming development initiatives.</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Accomplished Projects</h2>
                        <p class="card-text">Explore the government development projects that have been successfully completed.</p>
                        <a href="accomplished-projects.html" class="btn btn-success">View Accomplished Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Upcoming Projects</h2>
                        <p class="card-text">Discover the upcoming government development projects that are set to begin soon.</p>
                        <a href="upcoming-projects.html" class="btn btn-info">View Upcoming Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // You can add JavaScript functionality here if needed
    </script>
    <?php 
    include ("footer.php");
    ?>
</body>
</html>
