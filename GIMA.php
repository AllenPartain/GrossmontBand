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
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
        }

        .section {
            margin-bottom: 40px;
        }

        .flex-container {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .flex-container img {
            width: 150px;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
        }

        .content {
            max-width: 800px;
        }

        .content h2 {
            margin: 0 0 10px;
            font-size: 1.5em;
            color: #333;
        }

        .content p {
            margin: 0 0 10px;
            line-height: 1.6;
            color: #555;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .staff-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .staff-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .staff-card h3 {
            margin: 10px 0 5px;
            font-size: 1.2em;
            color: #333;
        }

        .staff-card p {
            margin: 0;
            color: #555;
        }
        footer {
            color: white;
            text-align: center;
            padding: 10px 20px;
        }

        footer .contact-info {
            max-width: 1000px;
            margin: 0 auto;
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
        <div class="section">
            <div class="flex-container">
                <img src="https://www.guhsd.net/pictures/Bond%20Website/GHS%20Logo.png" alt="GIMA Logo">
                <div class="content">
                    <h2>Grossmont Instrumental Music Association (GIMA)</h2>
                    <p>GIMA is a parent-run booster club for the music program at Grossmont High School. They are a registered non-profit organization that helps support the needs and goals of the students involved in concert band, marching band, orchestra, color guard, percussion ensemble, and more. GIMA is always looking for help, whether it is volunteering your time or donating your money.</p>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="card-container">
                <div class="staff-card">
                    <img src="https://coresos-phinf.pstatic.net/a/355ahb/h_8dbUd018svcp0d6qmvfqtm9_qw0nka.jpg?type=s480_gif" alt="Amber">
                    <h3>Amber</h3>
                </div>
                <div class="staff-card">
                    <img src="https://sos-campmobile.pstatic.net/e/36d262/i_b47Ud018svccsr56a00amt4_3h07cs.jpg?type=s480_gif" alt="Krystal">
                    <h3>Krystal</h3>
                </div>
                <div class="staff-card">
                    <img src="https://coresos-phinf.pstatic.net/a/2jji9j/j_ic8Ud018svc19nlj4lvy8of9_ijezmi.jpg?type=s75" alt="Kacy">
                    <h3>Kacy</h3>
                </div>
                <div class="staff-card">
                    <img src="https://coresos-phinf.pstatic.net/a/31bb64/c_c4hUd018svcbqox41ddhvby_i01zrs.jpg?type=s75" alt="Theresa">
                    <h3>Theresa</h3>
                </div>
                <div class="staff-card">
                    <img src="path/to/image5.jpg" alt="Staff Member 5">
                    <h3>Staff Member 5</h3>
                </div>
                <div class="staff-card">
                    <img src="path/to/image6.jpg" alt="Staff Member 6">
                    <h3>Staff Member 6</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="social-sidebar">
        <a href="" class="social-icon"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/ghs.music/" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
    </div>

    <footer>
        <div class="contact-info">
            <p>&copy; 2024 Grossmont High School Band. All rights reserved.</p>
            <p><a href="https://maps.app.goo.gl/vkTLYYJMbprMLBf99" target="_blank">1100 Murray Dr, El Cajon, CA 92020</a> | Phone: (619) 668-6000</p>
            <p>Email: <a href="mailto:band@grossmonthighschool.org" style="color: gold;">band@grossmonthighschool.org</a></p>
        </div>
    </footer>
</body>

</html>
