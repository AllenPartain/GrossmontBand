<?php require($_SERVER['DOCUMENT_ROOT'] . '/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            font-size: 18px;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 1200px;
            width: 90%;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #003366;
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        h3 {
            color: #003366;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: left;
            text-transform: uppercase;
            border-bottom: 2px solid #003366;
            padding-bottom: 10px;
        }

        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .contact-info, .contact-form {
            flex: 1;
            min-width: 300px;
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

        .contact-item p {
            font-size: 18px;
            margin: 0;
            color: #555;
        }

        .map-container {
            height: 400px;
            margin-top: 30px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 768px) {
            .container {
                padding: 40px;
            }

            .contact-info, .contact-form {
                min-width: 48%;
            }

            .map-container {
                height: 500px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                padding: 50px;
            }

            h2 {
                font-size: 36px;
            }

            h3 {
                font-size: 30px;
            }

            .map-container {
                height: 600px;
            }
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
        </div>

        <div id="map" class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6708.7595280986125!2d-116.99009192336226!3d32.782188373661484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d95761f1dba2f9%3A0x1f022bfaf61bda43!2s1100%20Murray%20Dr%2C%20El%20Cajon%2C%20CA%2092020!5e0!3m2!1sen!2sus!4v1723680447418!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
