<?php require($_SERVER['DOCUMENT_ROOT'] . '/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Grossmont High School Band - Staff and GIMA</title>
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 80px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        h2, h3 {
            color: #003366;
            text-align: center;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 200px;
        }

        .contact-info, .contact-form {
            flex-basis: 48%;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-item i {
            font-size: 24px;
            color: #003366;
            margin-right: 15px;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form input, .contact-form textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .contact-form button {
            background-color: #003366;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .map-container {
            height: 100px;
            margin-bottom: 300px;
        }

        .social-sidebar {
            text-align: center;
            margin-bottom: 30px;
        }

        .social-icon {
            font-size: 24px;
            color: #003366;
            margin: 0 10px;
            text-decoration: none;
        }

        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <img src="https://static.wixstatic.com/media/1a86e4_9c67898c2fbe43da97c32a89afa007fc~mv2_d_4743_4713_s_4_2.png/v1/fill/w_560,h_556,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/RBR%20Crest%203.png" alt="Grossmont High School Logo" class="logo">
        <h1>Grossmont High School Band</h1>
    </header>

    <?php echo Nav(); ?>

    <div class="container">
        <h2>Contact Us</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>1100 Murray Dr, El Cajon, CA 92020</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <p>(619) 668-6000</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:band@grossmonthighschool.org">band@grossmonthighschool.org</a></p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <p>Mon-Fri: 8:00 AM - 4:00 PM</p>
                </div>
            </div>
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="process_form.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>

        <div id="map" class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6708.7595280986125!2d-116.99009192336226!3d32.782188373661484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d95761f1dba2f9%3A0x1f022bfaf61bda43!2s1100%20Murray%20Dr%2C%20El%20Cajon%2C%20CA%2092020!5e0!3m2!1sen!2sus!4v1723680447418!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php SideBar(); ?>

    <footer>
        <div class="contact-info">
            <p>&copy; 2024 Grossmont High School Band. All rights reserved.</p>
            <p><a href="https://maps.app.goo.gl/vkTLYYJMbprMLBf99" target="_blank">1100 Murray Dr, El Cajon, CA 92020</a> | Phone: (619) 668-6000</p>
            <p>Email: <a href="mailto:band@grossmonthighschool.org" style="color: gold;">band@grossmonthighschool.org</a></p>
        </div>
    </footer>
</body>

</html>
