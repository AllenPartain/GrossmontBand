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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        header {
            background-color: #1a237e;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .logo {
            max-width: 120px;
            border-radius: 50%;
            border: 3px solid #FFD700;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        h1 {
            margin: 20px 0;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .total-progress {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
        }
        .total-progress h2 {
            color: #1a237e;
            margin-top: 0;
        }
        .total-bar {
            background-color: #e0e0e0;
            height: 30px;
            border-radius: 15px;
            margin-top: 10px;
            overflow: hidden;
            position: relative;
        }
        .total-progress-fill {
            background-color: #4CAF50;
            height: 100%;
            border-radius: 15px;
            width: 0; /* Start with 0% width */
            transition: width 2s ease-in-out; /* Animate the width over 2 seconds */
        }
        .total-amount {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        .fundraiser-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
            display: flex;
            align-items: center;
        }
        .fundraiser-icon {
            font-size: 3em;
            margin-right: 20px;
            color: #1a237e;
        }
        .fundraiser-details {
            flex-grow: 1;
        }
        .fundraiser-details h2 {
            margin-top: 0;
            color: #1a237e;
        }
        .progress-bar {
            background-color: #e0e0e0;
            height: 20px;
            border-radius: 10px;
            margin-top: 10px;
        }
        .progress {
            background-color: #4CAF50;
            height: 100%;
            border-radius: 10px;
            text-align: right;
            padding-right: 5px;
            color: white;
            font-weight: bold;
        }
        .cta-button {
            display: inline-block;
            background-color: #FFD700;
            color: #1a237e;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #FFC107;
        }
        footer {
            background-color: #1a237e;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
        .musical-notes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        .note {
            position: absolute;
            font-size: 24px;
            opacity: 0.2;
            animation: float 10s linear infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="total-progress">
            <h2>Total Fundraising Progress</h2>
            <div class="total-bar">
                <div class="total-progress-fill"></div>
                <div class="total-amount">$0 / $18,000</div>
            </div>
        </div>

        <div class="fundraiser-item">
            <img src="https://usafundraising.com/wp-content/uploads/2021/03/Otis-Spunkmeyer-pdf.jpg" alt="Cookie Doe" style="width: 100px; margin-right: 20px;">
            <div class="fundraiser-details">
                <h2>Cookies</h2>
                <p>Join us for an evening of fantastic music performed by the Royal Blue Regiment.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 49%;">49%</div>
                </div>
                <p>Goal: $10,000 | Raised: $4,000</p>
                <a href="#" target="_blank"class="cta-button">Get Cookies</a>
            </div>
        </div>
        <div class="fundraiser-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW0sbscjsmJcrHjqehcLLxwxHRnGXCSzqOBQ&s" alt="Chocolate Bar Icon" style="width: 100px; margin-right: 20px;">
            <div class="fundraiser-details">
                <h2>Chocolate Bar Sale</h2>
                <p>Delicious chocolate bars perfect for gifts or a sweet treat.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 75%;">75%</div>
                </div>
                <p>Goal: $5,000 | Raised: $3,750</p>
                <a href="#" target="_blank" class="cta-button">Buy Chocolate</a>
            </div>
        </div>

        <div class="fundraiser-item">
            <img src="https://images.teams.prepsportswear.com/pi?p=5078%2Froyal_front&d=nlcvinyl%2Fvinyl_8&param=GROSSMONT%7CFOOTHILLERS%7CEL%20CAJON%7CCALIFORNIA%7C2025%7C&bg=F2F2F2ff&color=FFB300ff%7CF8F8F8ff&h=480&output=png" alt="Merchandise Icon" style="width: 100px; margin-right: 20px;">
            <div class="fundraiser-details">
                <h2>Band Merchandise</h2>
                <p>Show your support with Royal Blue Regiment t-shirts, hoodies, and more!</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 60%;">60%</div>
                </div>
                <p>Goal: $3,000 | Raised: $1,800</p>
                <a href="https://apparelnow.com/gima-apparel/" target="_blank" class="cta-button">Shop Now</a>
                                </div>
                            </div>
                        </div>

                        <footer>
                            <p>&copy; 2024 Royal Blue Regiment. All Rights Reserved.</p>
                        </footer>


                        <script>
                            // Simulate progress update (for demo purposes)
                            document.addEventListener('DOMContentLoaded', function() {
                                setTimeout(function() {
                                    const totalProgressFill = document.querySelector('.total-progress-fill');
                                    const totalAmount = document.querySelector('.total-amount');
                                    const totalRaised = 1800 + 3750 + 4000; // Calculate total raised
                                    const percentage = (totalRaised / 18000) * 100; // Calculate percentage
                                    totalProgressFill.style.width = `${percentage}%`; // Set width dynamically
                                    totalAmount.textContent = `$${totalRaised} / $18,000`; // Update total amount
                                }, 1000);
                            });
                        </script>
                    </body>
                    </html>

