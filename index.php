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
    </header>

    <?php echo Nav(); ?>

    <div class="banner">
        <h1>We Are The Royal Blue Regiment</h1>
        <h2>The Best Band In The Land Since 1920</h2>
    </div>
    <div class="slideshow-container">
        <style>
         @media only screen and (max-width: 768px) {
            .mySlides img {
              height: 43.5%;
            }
          }
        </style>
        <div class="mySlides fade">
            <img src="photos.jpg/GHS Band & Color Guard '24 - '25!-All photos-58242451768.jpg" style="width:100%; height:52.2%;">

        </div>
        <div class="mySlides fade">
            <img src="/photos.jpg/GHS Band & Color Guard '24 - '25!-All photos-59835591756.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="/photos.jpg/GHS Band & Color Guard '24 - '25!-All photos-61722684192.jpg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

    <div class="main-content">
        <h2>About Our Band</h2>
        <div style="text-align: center;">
            <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
                <iframe src="https://player.vimeo.com/video/508693805?h=d09c7c44bf" 
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>

        </div>
        <p>The Grossmont High School Band program, known as the Royal Blue Regiment, has been a pillar of musical excellence since 1970. We are dedicated to fostering a love for music in our students and delivering outstanding performances that create lifelong memories for our members and audience alike.</p>

        <h2>Our Ensembles</h2>
        <div class="ensemble-grid">
            <div class="ensemble-item">
                 <img src="photos.jpg/5434890-200.png" alt="Violin Icon" width="100" height="90">
                <h3>Marching Band</h3>
                <p>Our award-winning marching band performs at football games, competitions, and community events.</p>
            </div>
            <div class="ensemble-item">


                <img src="photos.jpg/2535504-200.png" alt="Violin Icon" width="100" height="90">
                <h3>Symphonic Band</h3>
                <p>Our symphonic band performs advanced wind band literature and participates in concert festivals.</p>     
            </div>
            <div class="ensemble-item">
                <img src="            photos.jpg/3852605-200.png
" alt="Violin Icon" width="100" height="90">
                <h3>Concert Band</h3>
                <p>Focusing on classical and contemporary wind band literature, our concert band performs several concerts throughout the year.</p>
            </div>
            <div class="ensemble-item">
                  <img src="photos.jpg/928-200.png" alt="Violin Icon" width="100" height="90">
                <h3>Beginning Band</h3>
                <p>Our beginning band introduces students to the fundamentals of playing wind instruments in an ensemble setting.</p>
            </div>
            <div class="ensemble-item">
                 <img src="photos.jpg/2603447-200.png" alt="Violin Icon" width="100" height="90">
                <h3>Jazz Band</h3>
                <p>Exploring the rich traditions of jazz, our jazz band performs at school events and local jazz festivals.</p>
            </div>
            <div class="ensemble-item">
                <img src="photos.jpg/4185941-600.png" alt="Violin Icon" width="100" height="90">
                <h3>Pep Band</h3>
                <p>Bringing spirit and energy to school events, our pep band keeps the crowd entertained and engaged.</p>
            </div>
            <div class="ensemble-item">
                <img src="photos.jpg/3961145-200.png" alt="Violin Icon" width="100" height="90">
                <h3>Orchestra</h3>
                <p>Our orchestra performs a diverse repertoire, ranging from classical symphonies to modern compositions.</p>
            </div>
            <div class="ensemble-item">
                 <img src="photos.jpg/1526-600.png" alt="Violin Icon" width="100" height="90">
                <h3>Color Guard</h3>
                <p>Adding visual excitement to our performances, the color guard combines dance and equipment work.</p>
            </div>

        <style>
            header {
                text-align: center;
                padding: 20px 0;
                position: relative;
                overflow: hidden;
            }

            .logo {
                max-width: 120px;
                border-radius: 50%;
                border: 3px solid #FFD700;
                box-shadow: 0 0 15px rgba(0,0,0,0.2);
            }
           </style>

           
           
         



            
        </div>
<hr>
        <div class="news-updates">
            <h2>News & Updates</h2>
            <p style="text-align: center;">Stay informed about the latest happenings in the Royal Blue Regiment:</p>
            <ul>
                <li><p>Chocolate Bar fundraiser - September 9, 2024</p></li>
                <li><p>Annual Military Inspection - October 23 - August 3, 2024</p></li>
                <li><a href="https://csbc.compsuite.io/events/60481" target="_blank" rel="noopener noreferrer">Valhalla Band Tournament - October 26, 2024</a></li>
                <li> <p>Halloween Rehearsal - October 30, 2024 </p></li>
            </ul>
        </div>

        <div id="join" class="join-section">
            <h2>Join the Royal Blue Regiment</h2>
            <p>Become part of our musical family! Whether you're a seasoned musician or just starting out, there's a place for you in the Grossmont High School Band.</p>
            <p>Contact our band director at <a href="mailto:band@grossmonthighschool.org">band@grossmonthighschool.org</a> for more information on how to join.</p>
            <a href="#" class="cta-button">Request Information</a>
        </div>
    </div>

    <?php SideBar(); ?>

    <footer>
        <div class="contact-info">
            <p>&copy; 2024 Grossmont High School Band. All rights reserved.</p>
            <p><a href="https://maps.app.goo.gl/vkTLYYJMbprMLBf99" target="_blank" style="color: white;">1100 Murray Dr, El Cajon, CA 92020</a> | Phone: (619) 668-6000</p>
            <p>Email:<a href="mailto:band@grossmonthighschool.org" style="color: gold;">band@grossmonthighschool.org</a></p>
        </div>
    </footer>

    <script>
        // ... (The JavaScript remains unchanged)
    </script>
</body>
</html>

    <script>
        let slideIndex = 1;
        let slideInterval;

        showSlides(slideIndex);
        startSlideshow();

        function startSlideshow() {
            slideInterval = setInterval(() => {
                showSlides(slideIndex += 1);
            }, 10000); // Change image every 10 seconds
        }

        function plusSlides(n) {
            clearInterval(slideInterval); // Stop the automatic slideshow
            showSlides(slideIndex += n);
            startSlideshow(); // Restart the automatic slideshow
        }

        function currentSlide(n) {
            clearInterval(slideInterval); // Stop the automatic slideshow
            showSlides(slideIndex = n);
            startSlideshow(); // Restart the automatic slideshow
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>
</body>
</html>