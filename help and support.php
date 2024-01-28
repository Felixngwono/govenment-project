<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and Support</title>
    <!-- Include Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="help and support.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <style>
    footer{
        background-color: black;
    }
 </style>
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

    <!-- Help and Support Section -->
    <section class="container mt-5">
        <h1 class="text-center">Help and Support</h1>

        <!-- Frequently Asked Questions (FAQs) -->
        <h2>Frequently Asked Questions (FAQs)</h2>
        <p>No FAQs available at the moment.</p>

        <!-- User Guides and Tutorials -->
        <h2>User Guides and Tutorials</h2>
        <p>No tutorials available at the moment.</p>

        <!-- Contact Information -->
        <h2>Contact Information</h2>
        <p>
            For support and inquiries, please contact us at:<br>
           <a href="www.gmail.com"> Email:felixngwono@mail.com</a><br>
            Phone: +254700369300
        </p>

        <!-- Live Chat Support -->
        <h2>Live Chat Support</h2>
        <p>Our live chat support is currently offline. Please use the contact information above.</p>

        <!-- Knowledge Base -->
        <h2>Knowledge Base</h2>
        <p>Explore our knowledge base for answers to common questions and helpful articles.</p>
        <a href="#">Go to Knowledge Base</a>

        <!-- Troubleshooting Tips -->
        <h2>Troubleshooting Tips</h2>
        <p>Here are some common issues and solutions that may help you resolve problems on your own.</p>
        <a href="#">View Troubleshooting Tips</a>

       

        <!-- Updates and Announcements -->
        <h2>Updates and Announcements</h2>
        <p>Stay informed about the latest updates, news, and announcements related to our platform.</p>
        <a href="#">View Updates</a>

        <!-- Community Forums -->
        <h2>Community Forums</h2>
        <p>Join our community forums to discuss projects, share insights, and get help from others.</p>
        <a href="forum.php">Go to Forums</a>

        <!-- Terms of Service and Privacy Policy -->
        <h2>Terms of Service and Privacy Policy</h2>
        <p>Review our terms of service and privacy policy to understand your rights and responsibilities.</p>
        <a href="terms of service.php">Terms of Service</a> 

        <!-- Accessibility Information -->
        <h2>Accessibility Information</h2>
        <p>Learn more about our accessibility features to ensure an inclusive user experience.</p>
        <a href="accessibility features.php">Accessibility Features</a>

        <!-- Feedback and Support History -->
        <h2>Feedback and Support History</h2>
        <p>View your support ticket history and check the status of your previous inquiries.</p>
        <a href="view history.php">View History</a>

        <!-- Social Media Links -->
        <h2>Follow Us on Social Media</h2>
        <p>Connect with us on social media to stay updated and interact with our community.</p>
        <div class="container">
        <div class="social-icons">
            <a href="https://twitter.com/felixodhiambo" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://wa.me/+254700369300" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/felixodhiambo/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/felixodhiambo" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/felixodhiambo/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com/felixodhiambo/" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>

    </section>

    <footer class="text-center py-4">
    <div class="container">
        <div class="social-icons">
            <a href="https://twitter.com/felixodhiambo" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://wa.me/+254700369300" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/felixodhiambo/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/felixodhiambo" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/felixodhiambo/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com/felixodhiambo/" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        
        <div class="dropdown">
            <button class="dropbtn">What We Do</button>
            <div class="dropdown-content">
                <a href="#">Tracking government projects</a>
                <a href="#">Providing transparency and accountability</a>
                <a href="#">fostering equality</a>
            </div>
        </div>

        <div class="contact-form">
            <input type="email" id="user_email" name="user_email" placeholder="Your email" required>
            <textarea id="message" name="message" placeholder="Your message" required></textarea>
            <button type="submit" onclick="sendMessage()">Send Message</button>
        </div>
    </div>
    <p>&copy; 2023 Felix Odhiambo</p>
    </footer>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
