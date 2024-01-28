<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Projects Forum</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include your custom CSS for additional styling -->
    <link rel="stylesheet" href="forum.css">
</head>
<body>
    <header>
        <!-- Bootstrap Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Government Projects Forum</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="sidebar.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact us.php">Contact Us</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="container mt-5">
        <h1 class="text-center">Government Projects Forum</h1>

        <!-- Forum Categories -->
        <div class="forum-categories">
            <h2>Categories</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">Infrastructure Projects</a></li>
                <li class="list-group-item"><a href="#">Social Welfare Initiatives</a></li>
                <li class="list-group-item"><a href="#">Environmental Programs</a></li>
                <!-- Add more categories -->
            </ul>
        </div>

        <!-- Discussion Threads -->
        <div class="discussion-threads">
            <h2>Infrastructure Projects</h2>
            <!-- Discussion Thread 1 -->
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Road Expansion Project</a></h3>
                    <p class="card-text">Discussion content here...</p>
                </div>
            </div>
            <!-- Discussion Thread 2 -->
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title"><a href="#">Bridge Construction</a></h3>
                    <p class="card-text">Discussion content here...</p>
                </div>
            </div>
            <!-- Add more discussion threads -->
        </div>
    </section>


    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
