<?php
// Database configuration and connection
session_start();
include "connection.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO feedback ( name, email, subject, message) VALUES (?, ?, ?, ?, ?)";

    // Prepare and execute the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $categor, $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    

    <!-- Feedback Section -->
    <section class="container mt-5">
        <h1 class="text-center">Feedback</h1>

        

        <!-- Feedback Form -->
        <form id="feedbackForm" action="feedback.php" method="POST">
          

            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>

            <!-- Subject -->
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="subject" placeholder="Feedback Subject" required>
            </div>

            <!-- Message -->
            <div class="form-group">
            <label for="message">Message</label>
<textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Feedback Message" required></textarea>

            </div>

            <!-- Attachment Upload (if needed) -->
            <!-- Include file input field and instructions for uploading attachments -->

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2023 Felix Odhiambo</p>
    </footer>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for handling form submission (you need to implement this) -->
    <script>
        document.getElementById("feedbackForm").addEventListener("submit", function(event) {
            event.preventDefault();
            // Implement code to handle form submission here
            // You can use JavaScript or a server-side language like PHP to process the form data
            alert("Feedback submitted! Thank you.");
        });
    </script>
</body>
</html>
