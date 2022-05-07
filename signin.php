<?php include "src/login.php";?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Connexion - IPA</title>
</head>

<body data-scroll-animation="true">
    <?php include 'partials/preloader.html' ?> 
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_left signin_left">
                    <h2>Accéder à votre compte pour mettre des tickets et bien d'autres fonctionnalités.</h2>
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3>Connectez-vous à la plateforme Help desk IPA</h3>
                        </div>
                        <form action="" method="post" class="row login_form">
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Votre Nom d'utilsateur</div>
                                <input name="username" type="text" class="form-control" id="email" placeholder="username">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Votre Mot de pass</div>
                                <div class="confirm_password">
                                    <input name="password" id="confirm-password" name="confirm-password" type="password" class="form-control" placeholder="mot de pass" autocomplete="off">
                                </div>
                            </div>
                            <p class="text-danger"><?php echo $msg; ?></p>
                            <div class="col-lg-12 text-center">
                                <button name="Login" type="submit" class="btn action_btn thm_btn">CONNEXION</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>