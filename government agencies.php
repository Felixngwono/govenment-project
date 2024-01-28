<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects Tracker</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <!-- Bootstrap Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Gov Projects Tracker</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="side bar.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="About Us.php">About Us</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="Contact Us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Government Agencies</h2>
                <!-- Bootstrap List Group for Agencies -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">Ministry of Transportation and Infrastructure</h4>
                        <p class="list-group-item-text">Responsible for road construction, bridge development, and public transportation projects.</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">Ministry of Education</h4>
                        <p class="list-group-item-text">Oversees school construction, educational curriculum development, and teacher training initiatives.</p>
                    </a>
                    <!-- Add more government agencies here -->
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Development Projects</h2>
                <!-- Bootstrap List Group for Projects -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">Road Construction Project</h4>
                        <p class="list-group-item-text">Ministry of Transportation and Infrastructure is executing this project to build new roads and improve transportation.</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">School Renovation Program</h4>
                        <p class="list-group-item-text">Ministry of Education is renovating existing schools to provide a better learning environment for students.</p>
                    </a>
                    <!-- Add more development projects here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
