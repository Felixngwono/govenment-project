<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Options</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(house.jpg);
            background-attachment: fixed;
           
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #f8f9fa; /* Light gray background */
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;
            width: 70vh;
        }
        .jumbotron {
            background-color: #007bff; /* Bootstrap primary color */
            color: #ffffff; /* White text */
            text-align: center;
            margin-bottom: 1px;
        }
        .btn-secondary, .btn-primary {
            margin-top: 5px;
        }
        .moving-text {
            font-size: 30px;
            color: orange;
            font-weight: bold;
            animation: moveLeftRight 3s infinite alternate;
        }
        @keyframes moveLeftRight {
            from {
                transform: translateX(10px);
                text-align: center;
            }
            to {
                transform: translateX(50px);
                text-align: center;
                text-overflow: ellipsis;
            }
        }
    </style>
</head>
<body>
    <div class="jumbotron">
       
        <div class="moving-text"><h1>Administrator</h1></div>
        <p class="lead">Explore the power of administration</p>
    </div>

    <div class="container">
        <div class="col-md-6">
            <p class="mt-3"><a href="side bar.php" class="btn btn-secondary btn-lg btn-block">Go to Main Page</a></p>
            <p><a href="admin dashboard.php" class="btn btn-primary btn-lg btn-block">Go to Admin Dashboard</a></p>
            </div>
        
    </div>
    <?php
    include "footer.php"
    ?>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
