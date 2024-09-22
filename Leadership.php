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
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2 {
            font-family: 'Trebuchet MS', sans-serif;
            color: #ffff;
            text-align: center;
            margin-top: 40px;
        }
        .section {
            background-color: #ffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            overflow: hidden;
        }
        .section-header {
            padding: 15px;
            font-size: 24px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {

            font-weight: bold;

        }
        .icon {
            margin-right: 10px;
            
        }
    </style>
</head>
<body>
    <header>
        <img src="https://static.wixstatic.com/media/1a86e4_9c67898c2fbe43da97c32a89afa007fc~mv2_d_4743_4713_s_4_2.png/v1/fill/w_560,h_556,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/RBR%20Crest%203.png" alt="Grossmont High School Logo" class="logo">
        <h1>Grossmont High School Marching Band</h1>
    </header>

    <?php echo Nav(); ?>
<h1 style="color:black;"> Meet Our LeaderShip</h1>
    <div class="container">
        <div class="section">
            <div class="section-header">
                <i class="fas fa-users icon"></i>Executive Council
            </div>
            <table>
                <tr>
                    <th>Role</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-crown icon"></i>Band Director</td>
                    <td data-label="Name">James Villegas </td>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-user-tie icon"></i>Assistent Band Director/Drum Tec</td>
                    <td data-label="Name">Justin Kriebel</td>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-user-tie icon"></i>Assistent Band Director</td>
                    <td data-label="Name">Tyler Deardon</td>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-pen-fancy icon"></i>Secretary</td>
                    <td data-label="Name">April</td>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-drum icon"></i>Drum Major</td>
                    <td data-label="Name">Artur Harutyunyan </td>
                </tr>
            </table>
        </div>
        
        <div class="section">
        <div class="section-header">
            <i class="fas fa-drum icon"></i>Band Leadership
        </div>
        <table>
            <tr>
                        <th>Role</th>
                        <th>Name</th>
                    </tr>
            <tr>
                <td data-label="Role"><i class="fas fa-drum icon"></i>Assistent Drum Major</td>
                <td data-label="Name">Steven Quinto </td>
            </tr>
                    <tr>
                        <td data-label="Role"><i class="fas fa-star icon"></i>Brass Captain</td>
                        <td data-label="Name">Declan Ewbank</td>
                    </tr>
                    <tr>
                        <td data-label="Role"><i class="fas fa-star icon"></i>Flute Captain</td>
                        <td data-label="Name">Kaylani</td>
                    </tr>
                    <tr>
                        <td data-label="Role"><i class="fas fa-star icon"></i>Saxophone Captain</td>
                        <td data-label="Name">Allen Partain</td>
                    </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-star icon"></i>Drum Captain</td>
                    <td data-label="Name">Diego </td>
                </tr>
                </table>
            </div>
        
        <div class="section">
            <div class="section-header">
                <i class="fas fa-flag icon"></i>Color Guard Leadership
            </div>
            <table>
                <tr>
                    <th>Role</th>
                    <th>Name</th>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-star icon"></i>Captain</td>
                    <td data-label="Name">Jasmine McQueen</td>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-users icon"></i>Co-Captains</td>
                    <td data-label="Name">Annalise dosnberry</td>
                </tr>
                <tr>
                    <td data-label="Role"><i class="fas fa-tools icon"></i>Equipment Manager</td>
                    <td data-label="Name">Blair Robatto</td>
                </tr>
            </table>
        </div>

        

    </div>

    <footer>
        <div class="contact-info">
            <p>&copy; 2024 Grossmont High School Marching Band. All rights reserved.</p>
            <p><a href="https://maps.app.goo.gl/vkTLYYJMbprMLBf99" target="_blank"><i class="fas fa-map-marker-alt"></i> 1100 Murray Dr, El Cajon, CA 92020</a> | <i class="fas fa-phone"></i> (619) 668-6000</p>
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:band@grossmonthighschool.org">band@grossmonthighschool.org</a></p>
        </div>
    </footer>
</body>
</html>
