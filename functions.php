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
                    <a href="/GIMA.php">GIMA</a>
                </div>
            </li>
            <li><a href="/calander.php">Calendar</a></li>
            <li><a href="/store.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
    </nav>';
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