<?php
// session test if user connected
session_start();
if (!(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "")) {
    header('location:signin.php');
}
include 'src/ticket.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="img/logo-ipa.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css" />
    <link rel="stylesheet" href="assets/slick/slick.css" />
    <link rel="stylesheet" href="assets/slick/slick-theme.css" />
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css" />
    <link rel="stylesheet" href="assets/animation/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <title> Accueil - Institut Pasteur d'Algérie</title>
</head>

<body data-scroll-animation="true">
    <?php include "partials/preloader.html" ?>
    <div class="click_capture"></div>

    <div class="body_wrapper">
        <?php include "partials/navbar.html" ?>

        <section class="breadcrumb_area">
            <h2 class="container" style="font-size: 50px;padding-left: 30px;margin-left: 400px;">
                Bonjours:
                <?php echo $_SESSION['sess_user_name'] ?> Lorem ipsum dolor sit amet.
            </h2>

            <img class="p_absolute bl_left" src="img/v.svg" alt="" />
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="" />
            <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="" />
            <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="" />
            <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="" />
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="" />
            <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt="" />
        </section>

        <section class="page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">

                    </div>

                </div>
            </div>
        </section>
        <section class="doc_blog_grid_area sec_pad forum-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <!-- /.communities-boxes -->

                        <div class="answer-action">
                            <div class="action-content">
                                <div class="image-wrap">
                                    <img src="img/home_support/answer.png" alt="answer action" />
                                </div>

                                <div class="content">
                                    <h2 class="ans-title">Commancer votre creation de ticket</h2>
                                    <p>Clicker sur STAR pour lancer le bon de commande </p>
                                </div>
                            </div>
                            <!-- /.action-content -->

                            <div class="action-button-container">
                                <a href="C:\wamp64\www\IPA\model-ticket.html" 
                                    class="action_btn btn-ans">STAR</a>
                            </div>
                            <!-- /.action-button-container -->
                        </div>
                        <!-- /.answer-action -->

                        <div class="post-header">
                            <div class="support-info">
                                <ul class="support-total-info">
                                    <li class="open-ticket">
                                        <i class="icon_info_alt"></i>576 Open
                                    </li>
                                    <li class="close-ticket">
                                        <i class="icon_check"></i><a href="#">2,974 Closed</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.support-info -->
                            <!-- /.support-category-menus -->
                        </div>
                        <!-- /.post-header -->

                        <div class="community-posts-wrapper bb-radius">

                            <?php
                            // hya ntstiw doka  
                            foreach ($tickets as $ticket) { ?>
                            <div class="community-post style-two kbDoc richard bug">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp2.jpg" alt="community post" />
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a
                                                href="forum-single.html"><?php echo "Bon commande " . $ticket["id"]; ?></a>
                                        </h3>
                                        <ul class="meta">
                                            <li>
                                                <img src="img/home_support/cmm1.png" alt="cmm" /><a
                                                    href="#"><?php echo "Type de ticket est " . $ticket["typeTicket"]; ?>
                                                </a>
                                            </li>
                                            <li><i class="icon_calendar"></i>updated 3 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li>
                                            <a href="#"><i class="icon_chat_alt"></i>20</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon_star"></i>5</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- /.community-post -->
                        </div>
                        <!-- /.community-posts-wrapper -->

                        <!-- <div class="pagination-wrapper">
                <div class="view-post-of">
                  <p>Viewing 8 topics - 1 through 10 (of 342 total)</p>
                </div>
                <ul class="post-pagination">
                  <li class="prev-post pegi-disable">
                    <a href="#"><i class="arrow_carrot-left"></i></a>
                  </li>
                  <li><a href="#" class="active">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">15</a></li>
                  <li class="next-post">
                    <a href="#"><i class="arrow_carrot-right"></i></a>
                  </li>
                </ul>
              </div> -->
                        <!-- /.pagination-wrapper -->
                    </div>
                    <!-- /.col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="forum_sidebar">
                            <div class="widget status_widget">
                                <h4 class="c_head">Information</h4>
                                <div class="open-hours">
                                    <h4 class="title-sm">Our office hours</h4>
                                    <p>Monday - Friday / 10am - 6pm (UTC +4) NewYork</p>
                                </div>
                                <!-- /.open-hours -->
                            </div>

                            <div class="widget usefull_links_widget">
                                <h4 class="c_head">Usefull Links</h4>
                                <ul class="list-unstyled usefull-links">
                                    <li>
                                        <i class="icon_lightbulb_alt"></i><a href="#">FAQs</a>
                                    </li>
                                    <li>
                                        <i class="icon_clock_alt"></i><a href="#">Popular</a>
                                    </li>
                                    <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                                    <li>
                                        <i class="icon_info_alt"></i><a href="#">Unanswered</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget ticket_widget">
                                <h4 class="c_head">Ticket Categories</h4>

                                <ul class="list-unstyled ticket_categories">
                                    <li>
                                        <img src="img/home_support/cmm5.png" alt="category" /><a href="#">Docs WordPress
                                            Theme</a>
                                        <span class="count">10</span>
                                    </li>
                                    <li>
                                        <img src="img/home_support/cmm4.png" alt="category" /><a href="#">Product
                                            Landing Page</a><span class="count count-fill">13</span><span
                                            class="count">54</span>
                                    </li>
                                    <li>
                                        <img src="img/home_support/cmm2.png" alt="category" /><a href="#">Knowledge base
                                            Template</a><span class="count">142</span>
                                    </li>
                                    <li>
                                        <img src="img/home_support/cmm8.png" alt="category" /><a href="#">Startup and
                                            App WP Theme</a>
                                        <span class="count">13</span>
                                    </li>
                                    <li>
                                        <img src="img/home_support/cmm9.png" alt="category" /><a href="#">Clean Email
                                            Template</a>
                                        <span class="count">123</span>
                                    </li>
                                    <li>
                                        <img src="img/home_support/cmm10.png" alt="category" /><a href="#">Apps
                                            WordPress Theme</a>
                                        <span class="count">18</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
            </div>
        </section>

        <div class="call-to-action">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="action-content-wrapper">
                    <div class="action-title-wrap title-img">
                        <img src="img/home_support/chat-smile.png" alt="" />
                        <h2 class="action-title">New to Communities?</h2>
                    </div>
                    <a href="#" class="action_btn">Join the community <i class="arrow_right"></i></a>
                </div>
                <!-- /.action-content-wrapper -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.call-to-action -->
        <footer class="footer_area f_bg_color">
            <img class="p_absolute leaf" src="img/v.svg" alt="" />
            <img class="p_absolute f_man wow fadeInRight" data-wow-delay="0.6s" src="img/home_two/f_man.png" alt="" />
            <img class="p_absolute f_cloud" src="img/home_two/cloud.png" alt="" />
            <img class="p_absolute f_email" src="img/home_two/email-icon.png" alt="" />
            <img class="p_absolute f_email_two" src="img/home_two/email-icon_two.png" alt="" />
            <img class="p_absolute f_man_two wow fadeInLeft" data-wow-delay="0.3s" src="img/home_two/man.png" alt="" />
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget subscribe_widget wow fadeInUp">
                                <a href="index.html" class="f_logo"><img src="img/logo.png" alt="" /></a>
                                <h4 class="c_head">Subscribe to our newsletter</h4>
                                <form action="#" class="footer_subscribe_form">
                                    <input type="email" placeholder="Email" class="form-control" />
                                    <button type="submit" class="s_btn">Send</button>
                                </form>
                                <ul class="list-unstyled f_social_icon">
                                    <li>
                                        <a href="#"><i class="social_facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="social_twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="social_vimeo"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="social_linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_30 wow fadeInUp" data-wow-delay="0.2s">
                                <h3 class="f_title">Company</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">KbDoc for Good</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title">Support</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="index-3.html">Help Desk</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">Integrations</a></li>
                                    <li><a href="#">Reports</a></li>
                                    <li><a href="#">iOS & Android</a></li>
                                    <li><a href="#">Messages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_70 wow fadeInUp" data-wow-delay="0.6s">
                                <h3 class="f_title">Doc Pages</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="doclist.html">Doc Topic</a></li>
                                    <li><a href="#">Free Training</a></li>
                                    <li><a href="doc-archive.html">Doc Archive</a></li>
                                    <li><a href="changelog.html">Changelog</a></li>
                                    <li><a href="Onepage.html">Onepage Docs</a></li>
                                    <li><a href="#">Conversion Tracking</a></li>
                                    <li><a href="cheatsheet.html">Cheatseet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border_bottom"></div>
                </div>
            </div>
            <div class="footer_bottom text-center">
                <div class="container">
                    <p>© 2020 All Rights Reserved by <a href="index.html">KbDoc</a></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- including model of tickets -->w
    <?php include 'partials/model-ticket.html'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.wavify.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
?>