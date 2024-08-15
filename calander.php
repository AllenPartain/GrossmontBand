<?php require($_SERVER['DOCUMENT_ROOT'] . '/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grossmont High School Band</title>
   <link href="/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <img src="https://static.wixstatic.com/media/1a86e4_9c67898c2fbe43da97c32a89afa007fc~mv2_d_4743_4713_s_4_2.png/v1/fill/w_560,h_556,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/RBR%20Crest%203.png" alt="Grossmont High School Logo" class="logo">
        <h1>Grossmont High School Band</h1>
    </header>

    <?php 
  echo  Nav();
  ?>
    <title>Band Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .calendar-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        iframe {
            border: none;
            width: 100%;
            height: 600px;
        }
    </style>
</head>
<body>
    <div class="calendar-container">
        <h1 >Upcoming Band Events</h1>
        <style>
            h1 {
              text-align: center;
            }
        </style>
        <iframe src="https://calendar.google.com/calendar/embed?src=fiihnpf5btgqrao8adbhir836r3259kt%40import.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <br>
      <br>
      <br>
      <br>
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
