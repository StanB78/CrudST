<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        header {
            background-color: #007bff;
            padding: 20px;
            color: white;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 30px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            width: 100%;
        }

        .contact-form input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .contact-info {
            text-align: center;
            margin-top: 30px;
            font-size: 18px;
            color: #555;
        }

        .contact-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Contact Us</h1>
</header>

<div class="container">
    <h2>We'd love to hear from you!</h2>
    <p>If you have any questions or feedback, please fill out the form below, and we will get back to you as soon as possible.</p>

    <form action="mailto:1189600@student.roc-nijmegen.nl" method="post" enctype="text/plain" class="contact-form">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <input type="submit" value="Send Message">
    </form>
</div>

<div class="contact-info">
    <p><strong>Email:</strong> <a href="mailto:1189600@student.roc-nijmegen.nl">1189600@student.roc-nijmegen.nl</a></p>
</div>
</body>
</html>

