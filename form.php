<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="form_func.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

        <button type="submit">Send Message</button>
    </form>
</body>
</html>



