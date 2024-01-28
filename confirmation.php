<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation - Government Development Projects Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        if (isset($_SESSION['submission_status']) && $_SESSION['submission_status'] === 'success') {
            echo '<div class="alert alert-success text-center">Message sent successfully!</div>';
        } elseif (isset($_SESSION['submission_status']) && $_SESSION['submission_status'] === 'error') {
            echo '<div class="alert alert-danger text-center">Message submission failed. Please try again.</div>';
        } else {
            echo '<div class="alert alert-info text-center">Message sent successfully!</div>';
        }
        ?>
        <p class="text-center"><a href="contact us.php">Back to Contact Us</a></p>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
