<?php
// session test if user connected
session_start();
if (!(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "")) {
    header('location:signin.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/tooltipster/css/tooltipster.bundle.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title><?php echo $_SESSION['sess_user_name'];?> Profile</title>
</head>

<body data-scroll-animation="true">
    <?php include "partials/preloader.html" ?>
    <div class="body_wrapper">
        <?php include "partials/navbar2.html" ?>

        <div class="breadcrumb_area_three">
            <img class="p_absolute one" src="img/typography/leaf_left.png" alt="">
            <img class="p_absolute two" src="img/typography/man_01.png" alt="">
            <img class="p_absolute three" src="img/typography/man_02.png" alt="">
            <img class="p_absolute four" src="img/typography/leaf_right.png" alt="">
            <div class="container">
                <div class="breadcrumb_text">
                    <h2>Bonjour! Voici Votre <span>Profile</span></h2>
                </div>
            </div>
        </div>
        <section class="typography_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="heading_content">
                            <h2 class="h5 regular t_title">Photo de profile</h2>
                        </div>
                        <img src="./img/profile.jpg" style="width: 300px;" class=" rounded-circle" alt=" ...">
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="heading_content">
                            <h5 class="h5 regular t_title">Information personalles</h5>
                            <form action="#" class="contact_form">
                                <div class="row contact_fill">
                                    <div class="col-lg-4 form-group">
                                        <h6>Nom</h6>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="<?php echo $_SESSION['sess_user_name'];?>" disabled>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <h6>Prenom</h6>
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Prenom" disabled>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <h6>Telephone</h6>
                                        <input type="tel" class="form-control" name="tel" id="phone"
                                            placeholder="+213xxxxxx" disabled>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <h6>Ancien mot de passe</h6>
                                        <input type="password" class="form-control" name="pas" id="phone">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <h6>Nouveau mot de passe</h6>
                                        <input type="password" class="form-control" name="pas" id="phone">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <h6>Confirmer le nouveau mdp</h6>
                                        <input type="password" class="form-control" name="pas" id="phone">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <button type="submit" class="btn action_btn thm_btn">changer le mot de
                                            passe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="action_area_three">
            <div class="container">
                <div class="action_content_three text-center">
                    <h2>Pour modifier votre Information personnelle</h2>
                    <h2>Contactez nous</h2>
                    <a href="contact.php" class="doc_border_btn doc_border_btn_two">Contact</a>
                </div>
            </div>
        </section>
        <?php include 'partials/footer.html'?>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.wavify.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/tooltipster/js/tooltipster.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>