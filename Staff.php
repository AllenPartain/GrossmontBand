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
</head>
<body>
    <header>
        <img src="https://static.wixstatic.com/media/1a86e4_9c67898c2fbe43da97c32a89afa007fc~mv2_d_4743_4713_s_4_2.png/v1/fill/w_560,h_556,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/RBR%20Crest%203.png" alt="Grossmont High School Logo" class="logo">
        <h1>Grossmont High School Band</h1>
    </header>

    <?php echo Nav(); ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        header {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
        }
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            top-padding: 10px;
        }
        h2 {
            color: #003366;
        }
        .director-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .staff-member {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .staff-member img {
            width: 150px;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
        }
        .staff-member-content {
            max-width: 800px;
        }
        .staff-member h2 {
            margin: 0 0 10px;
            font-size: 1.5em;
            color: #333;
        }
        .staff-member p {
            margin: 0 0 10px;
            line-height: 1.6;
            color: #555;
        }
        h1, h3 {
            text-align: center;
        }
        .container {
            margin-bottom: 50px;
        }
    </style>



    <div class="content-container">
        <h1>Meet Our Staff</h1>
        <hr>
        <div class="container">
            <div class="staff-member">
                <img src="https://static.wixstatic.com/media/43613e_312b172767e8453a8b283c91f2841f69~mv2.jpeg/v1/crop/x_79,y_106,w_293,h_390/fill/w_201,h_269,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/E73E5986-3255-47A3-AEAF-61EC33586E5D.jpeg" alt="James Villegas playing banjo">
                <div class="staff-member-content">
                    <h2>James Villegas - Band Director</h2>
                    <p>I have been a part of our music family for many years. In fact, I taught some of our seniors way back when they were in the 4th grade when I was previously the band director at Spring Valley Middle School!</p>
                    <p>Being in an ensemble is one of the greatest adventures we can have. You start as a beginner learning Hot Cross Buns, or twirling a flag and before you know it you're sitting with friends and being a part of the greatest music ever, be it from your favorite movie to Beethoven.</p>
                    <p>My own adventure started in the 5th grade and continued through military bands, Pepperdine University, and Grad school in Western Washington where I studied orchestral and choral conducting while leading the trombone choir, and athletic band. Along the way I marched in the Mid West, toured Japan, sat in with the Count Basie Orchestra, played for a president and even royalty. I started teaching in Washington state, and I've taught in the San Diego area since 2004. I even proudly provided a youth marching band and color guard that soon became part of the local Keep the Spirit of '45 Alive Organization that helps to honor WWII Veterans.</p>
                    <p>Here at Grossmont you can look forward to the greatest halftime shows, parades, orchestral concerts, ROTC events and more... it's up to you how far you'll go or what you can achieve. It's my job to support you and guide you along the way.</p>
                    <p>Music is the ultimate lifelong learning experience. We learn, we grow, we make friends we call family. At Grossmont we will start you on that journey and set you up for life.</p>
                </div>
            </div>
        </div>

        <hr>
        <div class="container">
            <div class="staff-member">
                <img src="photos.jpg/IMG_20240907_175831_172.jpg" alt="Tyler Deardon">
                <div class="staff-member-content">
                    <h2>Justin Kriebel - Marching Instructor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>

        <hr>
        <div class="container">
            <div class="staff-member">
                <img src="https://static.wixstatic.com/media/43613e_a94bbc13eb0c4822ac998fb2f867d19f~mv2.jpg/v1/crop/x_437,y_113,w_832,h_1123/fill/w_203,h_274,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/Tyler%20Gold%202018.jpg" alt="Tyler Deardon">
                <div class="staff-member-content">
                    <h2>Tyler Deardon - Marching Instructor</h2>
                    <p>Tyler has been involved in music since the fifth grade with Mr. Villegas as his first band director teaching him how to play the trumpet. As he got into middle school, Tyler joined the first-ever Spring Valley Middle School Marching Band that became well known throughout the community. His interest in music inspired him to learn more about High Brass Instruments and gain the skills needed to play them. As he went into Steele Canyon High School, he was very active in all band events from marching competitions, pops concerts, and musicals. In the fall semester of his junior year, Steele Canyon went to Championships for their show entitled "Toys." With being active in his band, he also found the time to go back and help out at his old middle school by teaching the children the proper etiquette of marching. He helped to inspire and prepare young teenagers for their future musical careers going into high school. Going into college he joined Cuyamaca Symphonic Band for a few years. In 2018, he joined Gold Drum and Bugle Corps for their show called "Through our Eyes" competing all across the United States and winning Bronze Medal in Open Class at the Drum Corps International World Championships.</p>
                </div>
            </div>
        </div>

        <hr>
        <div class="container">
            <div class="staff-member">
                <img src="https://sos-campmobile.pstatic.net/e/361ae4/g_d0hUd018svc1kunnv2v3s8gd_i78sqq.jpg?type=s480_gif" alt="Fae Beach">
                <div class="staff-member-content">
                    <h2>Fae Beach - Color Guard Instructor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
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
