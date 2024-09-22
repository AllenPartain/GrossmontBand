<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grossmont High School Band</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
        .navbar {
            background: linear-gradient(45deg, #002244, #003366, #004488);
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-bottom: 4px solid #FFD700;
            position: relative;
            overflow: hidden;
        }
        .navbar::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
       
            animation: shimmer 10s infinite linear;
        }
        @keyframes shimmer {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .container {
            width: 90%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        .logo {
            max-width: 120px;
            height: auto;
            transition: transform 0.3s, filter 0.3s;
        }
        .logo:hover {
            transform: scale(1.1) rotate(5deg);
            filter: drop-shadow(0 0 10px rgba(255,215,0,0.7));
        }
        .nav-links {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 15px;
            padding: 0;
            margin: 0;
        }
        .nav-links li {
            display: inline;
        }
        .nav-links a {
            text-decoration: none;
            color: #FFFFFF;
            font-weight: bold;
            font-size: 16px;
            padding: 10px 15px;
            transition: all 0.3s;
            border-radius: 25px;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }
        .nav-links a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
          
            transition: 0.5s;
        }
        .nav-links a:hover::before {
            left: 100%;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background: #003366;
            min-width: 160px;
          
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
        }
        .dropdown-content a {
            color: #FFFFFF;
            padding: 12px 16px;
            display: block;
            text-align: left;
            transition: background 0.3s;
        }
        .dropdown-content a:hover {
            background: #004488;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <img src="https://static.wixstatic.com/media/1a86e4_9c67898c2fbe43da97c32a89afa007fc~mv2_d_4743_4713_s_4_2.png/v1/fill/w_560,h_556,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/RBR%20Crest%203.png" alt="Grossmont High School Logo" class="logo">
                <ul class="nav-links">
                    <li><a href="/index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">About</a>
                        <div class="dropdown-content">
                            <a href="/Staff.php">Staff</a>
                            <a href="Leadership.php">Leadership</a>
                        </div>
                    </li>
                    <li><a href="/calander.php">Calendar</a></li>
                    <li><a href="/Fundraiser.php">Fundraiser</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="/GIMA.php">GIMA</a></li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>


