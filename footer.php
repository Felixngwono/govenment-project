<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Add your custom CSS styles here */
       /* Add your custom CSS styles here */

/* Add your custom CSS styles here */
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.container {
    flex: 1;
}

footer {
    margin-top: auto;
}


/* Your existing CSS styles */
/* Add your custom CSS styles here */
body {
    font-family: 'Arial', sans-serif;
    box-sizing: border-box;
}

footer {
    background-color: black;
    color: #ecf0f1;
    padding: 20px 0;
    text-align: center;
    margin-top: auto;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.social-icons a {
    color: #ecf0f1;
    margin: 0 10px;
    font-size: 20px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #3498db;
}

.contact-form {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    text-align: center;
}

.contact-form input,
.contact-form textarea {
    padding: 10px;
    margin: 10px;
    width: 200px;
    font-size: 14px;
}

.contact-form button {
    padding: 10px;
    background-color: #3498db;
    color: #ecf0f1;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 14px;
}

.contact-form button:hover {
    background-color: #2980b9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #34495e;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #ecf0f1;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #2980b9;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropbtn {
    font-size: 12px;
}

    </style>

<footer>
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

<script>
    function sendMessage() {
        var userEmail = document.getElementById('user_email').value;
        var message = document.getElementById('message').value;

        // Displaying a success message (replace this with actual sending logic)
        alert("Message sent successfully!\n\nUser Email: " + userEmail + "\nMessage: " + message);

        // Simulate sending the message to the admin's email
        var adminEmail = "felixngwono@gmail.com";
        var subject = "New Message from Website";
        var mailtoLink = "mail to:" + adminEmail + "?subject=" + subject + "&body=" + message;

        // Open the default email client with the admin's email and message
        window.location.href = mailtoLink;
    }
</script>

</body>
</html>
