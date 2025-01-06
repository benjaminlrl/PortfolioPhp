<!-- HEADER -->
<header>
    <div class="topbar-wrapper-acceuil">
        <div class="item-logo drop1">
            <a href="index.php"><h3>Benjamin.</h3></a>
        </div>
        <?php 
            if ($langue === "français") { 
                echo "
                <div class='items-link'>
                    <a href='projets.php' class='item-link drop3'>";
                if (isset($_SESSION['user_email'])) {
                    echo "Projets";
                }
                echo "</a>
                    <a href='index.php' class='item-link drop3'>Accueil</a>
                    <a href='login.php' class='item-link drop4'>";
                if (isset($_SESSION['user_email'])) {
                    echo "Se déconnecter";
                } else {
                    echo "Se connecter";
                }
                echo "</a>
                </div>";
            }
        ?>
        <?php 
            if ($langue === "english") { 
                echo "
                <div class='items-link'>
                    <a href='projets.php' class='item-link drop3'>";
                if (isset($_SESSION['user_email'])) {
                    echo "Projects";
                }
                echo "</a>
                    <a href='index.php' class='item-link drop3'>Home</a>
                    <a href='login.php' class='item-link drop4'>";
                if (isset($_SESSION['user_email'])) {
                    echo "Logout";
                } else {
                    echo "Login";
                }
                echo "</a>
                </div>";
            }
        ?>
        <div class='items-contact'>
            <a href='https://github.com/benjaminlrl' class='item-contact drop5' target='_blank'><i class='fa-brands fa-github'></i></a>
            <a href='https://www.linkedin.com/in/benjamin-lorieul-15b5a32bb' class='item-contact drop6' target='_blank'><i class='fa-brands fa-linkedin'></i></a>
            <a href='https://www.strava.com/athletes/125066471' class='item-contact drop7' target='_blank'><i class='fa-brands fa-discord'></i></a>
            <span class="drop7"></span>
            <div class="language-selector">
                <button class="dropdown-btn drop8" id="dropdown-toggle"><i class="fa-solid fa-language"></i></button>
                <div class="dropdown-content" id="dropdown-menu">
                    <a href="?langue=français">Français</a>
                    <a href="?langue=english">English</a>
                </div>
            </div>
        </div>
    </div>
</header>