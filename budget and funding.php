<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Development Projects - Budget and Funding</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="budget and funding.css">
</head>
<body>
    <header>
        <!-- Navigation Bar (Bootstrap Navbar) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Government Projects Tracker</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="side bar.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about us.php">About Us</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="contact us.php">Contact Us</a></li>
                    </ul>
                </div> 
            </div>
        </nav>
    </header>

    <!-- Budget Section -->
    <section class="budget-section py-5">
        <div class="container">
            <h2 class="text-center">Project Budget</h2>
            <!-- Budget details go here -->
            <p>Total Budget: ksh. 10,000,000</p>
            <p>Budget Breakdown:</p>
            <ul>
                <li>Labor: ksh. 4,000,000</li>
                <li>Materials: ksh. 3,000,000</li>
                <li>Equipment: ksh. 1,000,000</li>
                <li>Admin Expenses: ksh. 500,000</li>
                <li>Contingency Funds: ksh. 1,500,000</li>
            </ul>
        </div>
    </section>

    <!-- Funding Section -->
    <section class="funding-section py-5">
        <div class="container">
            <h2 class="text-center">Funding Sources</h2>
            <!-- Funding details go here -->
            <p>Funding Sources:</p>
            <ul>
                <li>Government Allocations: ksh. 7,000,000</li>
                <li>International Grants: ksh. 2,000,000</li>
                <li>Public-Private Partnerships: ksh. 1000,000</li>
            </ul>
            <p>Funding Timeline:</p>
            <ul>
                <li>2023: ksh. 4,000,000</li>
                <li>2024: ksh. 4,000,000</li>
                <li>2025: ksh. 2,000,000</li>
            </ul>
        </div>
    </section>

    <?php
// Include the database connection file
include('footer.php');
?>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
