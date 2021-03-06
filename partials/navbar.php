<nav class="navbar navbar-expand-lg menu_one" id="sticky">
    <div class="container">
        <a class="navbar-brand sticky_logo" href="home.php">
            <img src="img/logo-ipa.png" alt="logo" style="width: 100px" />
            <img src="img/logo-ipa.png" alt="logo" style="width: 100px" />
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="menu_toggle">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="hamburger-cross">
                    <span></span>
                    <span></span>
                </span>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ml-auto">
                <li class="nav-item dropdown active">
                    <a href="home.php" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
                        aria-expanded="false">Accueil</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"></i>
                </li>
                <li class="nav-item dropdown">
                    <a href="help.php" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
                        aria-expanded="false">Help</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"></i>
                </li>
                <li class="nav-item dropdown">
                    <a href="contact.php" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
                        aria-expanded="false">Contact</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"></i>
                </li>
                <?php if (!($_SESSION["userRole"] == 'utilisateur')) {?>
                <li class="nav-item dropdown">
                    <a href="admin.php" class="nav-link dropdown-toggle" role="button" aria-haspopup="true"
                        aria-expanded="false">Admin</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"></i>
                </li>
                <?php } ?>
            </ul>
            <a class="nav_btn" href="profile.php">Profile</a>
        </div>
    </div>
</nav>