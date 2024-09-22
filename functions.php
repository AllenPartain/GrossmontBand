<?php
function Nav() {
    echo '
    <nav>
        <ul>
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
    </nav>';
}
    function SideBar() {
        // Check if the user is on a mobile device
        $isMobile = preg_match('/(android|iphone|ipad|ipod|mobile)/i', $_SERVER['HTTP_USER_AGENT']);

        // Only display the sidebar if the user is not on a mobile device
        if (!$isMobile) {
            echo '
            <div class="social-sidebar">
                <a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/ghs.music/" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>';
        }
}
?>
<style>
    /* Basic dropdown styling */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

</style>