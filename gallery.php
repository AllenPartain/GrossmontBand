<?php require($_SERVER['DOCUMENT_ROOT'] . '/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Grossmont High School Band</title>
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .instagram-gallery {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .instagram-post {
            width: calc(33.333% - 10px);
            background-color: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            margin-bottom: 20px;
        }
        .post-images {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 100%;
        }
        .post-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }
        .post-image.active {
            display: block;
        }
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0,0,0,0.5);
            color: white;
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
        }
        .nav-arrow.prev { left: 10px; }
        .nav-arrow.next { right: 10px; }
        .post-content {
            padding: 10px;
        }
        .like-button {
            background: none;
            border: none;
            color: #262626;
            font-size: 1.2em;
            cursor: pointer;
        }
        .like-button.liked {
            color: #ed4956;
        }
        .likes {
            font-size: 0.9em;
            margin-top: 5px;
        }
        @media (max-width: 900px) {
            .instagram-post {
                width: calc(50% - 10px);
            }
        }
        @media (max-width: 600px) {
            .instagram-post {
                width: 100%;
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
    
    <br><br><br><br>

    <div class="instagram-gallery">
        <?php
        $image_sets = [
            [
                'https://snworksceo.imgix.net/drt/255451f5-6f58-4c47-86a0-c4dfcec8a1b7.sized-1000x1000.jpg?w=1000&dpr=2',
                'https://www.daysoftheyear.com/wp-content/uploads/marching-band-day.jpg',
            ],
            [
                'https://tbdbitl.osu.edu/sites/default/files/2024-02/DSC05294.JPG',
                'https://ttn-media.s3.amazonaws.com/wp-content/uploads/2023/09/18141049/TUvsAkron-2-scaled.jpg',
            ],
            [
                'https://www.elpasotimes.com/gcdn/presto/2018/09/08/PTX1/b022ff5d-87ef-4b0c-9ce9-fbb3340f08e5-3_Eastlake_vs._Montwood_Football.jpg?width=660&height=436&fit=crop&format=pjpg&auto=webp',
                'https://www.macombdaily.com/wp-content/uploads/2023/10/tmd-l-BrdakBlakegameday-02-e1696645037163.jpg?w=1024',
            ],
            [
                'https://snworksceo.imgix.net/drt/255451f5-6f58-4c47-86a0-c4dfcec8a1b7.sized-1000x1000.jpg?w=1000&dpr=2',
                'https://www.daysoftheyear.com/wp-content/uploads/marching-band-day.jpg',
            ],
            [
                'https://tbdbitl.osu.edu/sites/default/files/2024-02/DSC05294.JPG',
                'https://ttn-media.s3.amazonaws.com/wp-content/uploads/2023/09/18141049/TUvsAkron-2-scaled.jpg',
            ],
            [
                'https://www.elpasotimes.com/gcdn/presto/2018/09/08/PTX1/b022ff5d-87ef-4b0c-9ce9-fbb3340f08e5-3_Eastlake_vs._Montwood_Football.jpg?width=660&height=436&fit=crop&format=pjpg&auto=webp',
                'https://www.macombdaily.com/wp-content/uploads/2023/10/tmd-l-BrdakBlakegameday-02-e1696645037163.jpg?w=1024',
            ],
        ];

        foreach ($image_sets as $index => $images): ?>
            <div class="instagram-post" data-post-id="<?php echo $index; ?>">
                <div class="post-images">
                    <?php foreach ($images as $imgIndex => $image): ?>
                        <img src="<?php echo $image; ?>" alt="Band Image" class="post-image <?php echo $imgIndex === 0 ? 'active' : ''; ?>" data-index="<?php echo $imgIndex; ?>">
                    <?php endforeach; ?>
                    <a href="#" class="nav-arrow prev" onclick="changeImage(<?php echo $index; ?>, -1); return false;"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="nav-arrow next" onclick="changeImage(<?php echo $index; ?>, 1); return false;"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer>
        <div class="contact-info">
            <p>&copy; 2024 Grossmont High School Band. All rights reserved.</p>
            <p><a href="https://maps.app.goo.gl/vkTLYYJMbprMLBf99" target="_blank" style="color: white;">1100 Murray Dr, El Cajon, CA 92020</a> | Phone: (619) 668-6000</p>
            <p>Email: <a href="mailto:band@grossmonthighschool.org" style="color: gold;">band@grossmonthighschool.org</a></p>
        </div>
    </footer>

    <script>
    let likes = {};

    function toggleLike(button) {
        const post = button.closest('.instagram-post');
        const postId = post.dataset.postId;
        const likesElement = post.querySelector('.likes');
        
        if (!likes[postId]) {
            likes[postId] = 0;
        }

        if (button.classList.contains('liked')) {
            button.classList.remove('liked');
            likes[postId]--;
        } else {
            button.classList.add('liked');
            likes[postId]++;
        }
        likesElement.textContent = likes[postId] + (likes[postId] === 1 ? ' like' : ' likes');
    }

    function changeImage(postIndex, direction) {
        const post = document.querySelectorAll('.instagram-post')[postIndex];
        const images = post.querySelectorAll('.post-image');
        let activeIndex = parseInt(post.querySelector('.post-image.active').dataset.index);
        
        images[activeIndex].classList.remove('active');
        activeIndex = (activeIndex + direction + images.length) % images.length;
        images[activeIndex].classList.add('active');
    }
    </script>
    <?php SideBar(); ?>
</body>
</html>
