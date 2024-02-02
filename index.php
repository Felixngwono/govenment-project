<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects Tracker</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>
        body{
   
        font-size: 14px;

        }
    /* Make the carousel images occupy full width */
    .carousel-inner img {
        width: 100%;
        height: 500px; /* Maintain the aspect ratio */
        margin: auto; /* Center the images */
    }
    
    /* Customize navigation links */
    .navbar-nav .nav-link {
        color: blue; /* Default color for the links */
        transition: color 0.3s ease; /* Smooth color transition */
        position: relative; /* Position relative for pseudo-element */
    }

    .navbar-nav:hover {
        color: darkorange; /* Color when hovered */
    }

    .navbar-nav .nav-link::after {
        content: '';
        color:green;
        display: block;
        width: 0;
        height: 2px;
        background: darkblue; /* Dashed line color */
        position: absolute;
        bottom: 0;
        left: 0;
        transition: width 0.3s ease; /* Smooth width transition */
    }

    .navbar-nav .nav-link:hover::after {
        width: 100%; /* Display dashed line when hovered */
    }
</style>




</head>
<body>
    <div class="jumbotron text-center bg-primary text-white">
        <h1 class="display-3">Welcome to the Government Development Projects Tracker</h1>
        <p class="lead">Stay informed about ongoing and upcoming development initiatives.</p>
    </div>

    <!-- Navigation Links -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-between w-100">
                <li class="nav-item">
                    <a class="nav-link" href=" #"><span style="color:cyan ;"><i class="fas fa-home"></i></span> <span style="color: blue;">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About us.php"><span style="color:cyan ;"><i class="fas fa-info-circle"></i></span> <span style="color: blue;">About Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact us.php"><span style="color:cyan ;"><i class="fas fa-envelope"></i></span><span style="color: blue;"> Contact Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="location.php"><span style="color:cyan ;"><i class="fas fa-map-marker"></i></span><span style="color: blue;"> Location</span></a>
                </li>
                <li class="nav-item">
    <a class="nav-link" href="notification.php"><span style="color:cyan ;"> <i class="fas fa-bell"></i> </span><span style="color: darkblue;"><span style="color:cyan ;"><span style="color: blue;">Notifications</span>
        <span id="notificationBadge" class="badge badge-pill badge-secondary"></span>
    </a>
</li>

              
            </ul>
        </div>
    </div>
</nav>
    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="odhumo.jpg" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="ohunye.jpg" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="pwani.jpg" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="noah.avif" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="siaya.jpg" alt="Image 5">
            </div>
            <div class="carousel-item">
                <img src="wanga.jpg" alt="Image 6">
            </div>
            <div class="carousel-item">
                <img src="unnamed.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="at.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="oria.webp" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="about.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="singaporee.jpg" alt="Image 7">
            </div>
            <div class="carousel-item">
                <img src="sakaja.jpg" alt="Image 7">
            </div>
        </div>
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Accomplished Projects</h2>
                        <p class="card-text">Explore the government development projects that have been successfully completed.</p>
                        <a href="completed projects.php" class="btn btn-success">View Accomplished Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Upcoming Projects</h2>
                        <p class="card-text">Discover the upcoming government development projects that are set to begin soon.</p>
                        <a href="upcoming projects.php" class="btn btn-info">View Upcoming Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Automatically advance the carousel every 3 seconds
        $(document).ready(function() {
            $('#imageCarousel').carousel({
                interval: 3000 // 3 seconds
            });
        });
    </script>
    

<script>
    // Function to check for new projects
    function checkForNewProjects() {
        // You should implement this function to fetch the count of new projects from your server
        // This can be done using AJAX to communicate with your backend
        // For simplicity, let's assume a variable 'newProjectCount' is returned from the server
        var newProjectCount = 3; // Replace this with the actual count from your server

        // Update the notification count and style
        if (newProjectCount > 0) {
            $('#notificationBadge').text(newProjectCount).show();
            // You can add additional styling for the badge, such as changing color
            $('#notificationBadge').addClass('badge-danger');
        } else {
            // Hide the badge if there are no new projects
            $('#notificationBadge').hide();
        }
    }

    // Call the function when the page loads
    $(document).ready(function () {
        checkForNewProjects();

        // You can also set an interval to periodically check for new projects
        // Adjust the interval based on your requirements
        setInterval(checkForNewProjects, 60000); // Check every 60 seconds
    });
</script>

    <?php 
    include ("footer.php");
    ?>
</body>
</html>
