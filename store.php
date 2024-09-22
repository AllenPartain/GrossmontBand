<?php require($_SERVER['DOCUMENT_ROOT'] . '/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Grossmont High School Band</title>
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .iframe-container {
            position: relative;
            padding-bottom: 75%; /* Adjust based on iframe aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }
        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .iframe-container {
                padding-bottom: 56.25%; /* 16:9 aspect ratio */
            }
        }

        @media (max-width: 2000px) {
            .iframe-container {
                padding-bottom: 1100%; /* 1:1 aspect ratio */
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="https://static.wixstatic.com/media/1a86e4_9c67898c2fbe43da97c32a89afa007fc~mv2_d_4743_4713_s_4_2.png" alt="Grossmont High School Logo" class="logo">
        <h1>Grossmont High School Band</h1>
    </header>
    <?php echo Nav(); ?>

    <div class="iframe-container">
        <iframe src="https://apparelnow.com/gima-apparel/" allowfullscreen></iframe>
        <a href="https://apparelnow.com/gima-apparel/" target="_blank" class="overlay"></a>
    </div>

    <footer>
        <div class="contact-info">
            <p>&copy; 2024 Grossmont High School Band. All rights reserved.</p>
            <p><a 

                   href="https://maps.app.goo.gl/vkTLYYJMbprMLBf99" target="_blank" style="color: white;">1100 Murray Dr, El Cajon, CA 92020</a> | Phone: (619) 668-6000</p>

            <p>Email:<a href="mailto:band@grossmonthighschool.org" style="color: gold;">band@grossmonthighschool.org</a></p>


        </div>
    </footer>
</body>
</html>
