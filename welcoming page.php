
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects Tracker</title>
    <link rel="stylesheet" href="welcoming page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlNBYlFfncNDOpXMFXiG5eCDA/20/sZs8TNDCbA6QV0Hp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background-color: cadetblue;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
   <!-- Navigation Bar with Live Image Link -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Logo" width="100" height="100">
            Government Projects Tracker
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact us.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Explore Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_login.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Hero Section -->
  

    <!-- About Us Section -->
    <section id="about" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <p>We are dedicated to providing transparency and information about government development projects to empower citizens and stakeholders. Our mission is to ensure that everyone has access to information about the projects that shape the future of our nation.</p>
                </div>
                <div class="col-lg-6">
                  <img src="odhumo.jpg" alt="" srcset=""> 
                </div>
            </div>
        </div>
    </section>

    

    <!-- Featured Projects Section -->
    <section id="projects" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Featured Projects</h2>
            <p class="text-center">Explore some of the impactful government development projects below.</p>
            <div class="row">
               
            </div>
        </div>
    </section>
    <?php
// Include the database connection file
include('footer.php');
?>
  


    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr
