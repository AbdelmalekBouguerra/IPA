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
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>IPA Contact</title>
</head>

<body data-spy="scroll" data-target="#navbar-example3" data-offset="86" data-scroll-animation="true">
    <?php include "partials/preloader.html" ?>
    <div class="body_wrapper">
        <?php include "partials/navbar.html" ?>
        <section class="breadcrumb_area breadcrumb_area_four">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
            <div class="breadcrumb_content_two text-center">
                <h2>Contact Page</h2>
            </div>
        </section>
        <section class="contact_area sec_pad">
            <div class="container">
                <div class="section_title text-left">
                    <h2 class="h_title wow fadeInUp">Besoin de nous parler ?</h2>
                </div>
                <div class="get_info_inner">
                    <div class="row get_info_item align-items-center justify-content-between">
                        <div class="col-lg-4 col-sm-5">
                            <div class="media">
                                <img src="img/email.png" alt="">
                                <div class="media-body">
                                    <h5 class="h5 bold">Email</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-7 d-flex align-items-center justify-content-between">
                            <div class="time">
                                Expected response time: <span>72 hours</span>
                            </div>
                            <a href="#info" class="doc_border_btn doc_border_btn_two">Email Us</a>
                        </div>
                    </div>
                </div>
                <div class="contact_info" id="info">
                    <div class="section_title text-left">
                        <h2 class="h_title wow fadeInUp">Commençons la conversation</h2>
                        <p>S'il vous plaît écrivez-nous, nous serons heureux de vous aider.</p>
                    </div>
                    <form action="#" class="contact_form">
                        <div class="row contact_fill">
                            <div class="col-lg-4 form-group">
                                <h6>Votre nom</h6>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter your name here">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Email</h6>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="info@KbDoc.com">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Telephone</h6>
                                <input type="tel" class="form-control" name="tel" id="phone" placeholder="+213">
                            </div>
                            <div class="col-lg-12 form-group">
                                <h6>Message</h6>
                                <textarea class="form-control message" id="message"
                                    placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" class="btn action_btn thm_btn">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
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
    <script src="js/anchor.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>