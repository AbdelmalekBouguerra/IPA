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
                        <img src="./img/profile.jpg" style="width: 300px;" class="rounded " alt="...">
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="heading_content">
                            <h5 class="h5 regular t_title">Information personalles</h5>
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

                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <button type="submit" class="btn action_btn thm_btn">Envoyer le message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="typography_underline">
                    <h4 class="h4 medium">Heading with Underline</h4>
                    <p>Oxford easy peasy he nicked it A bit of how's your father hotpot excuse my French burke
                        gutted
                        mate, argy-bargy in my flat tosser the BBC bevvy get stuffed mate. The little rotter
                        it's all
                        gone to pot ruddy cracking goal nancy boy bits and bobs tomfoolery spiffing good time
                        zonked bum
                        bag baking cakes butty, blower you mug crikey Queen's English cor blimey guvnor loo bite
                        your
                        arm off amongst boot gosh sloshed say, mufty tinkety tonk old fruit faff about cheers
                        young
                        delinquent pukka matie boy off his nut what a plonker pardon you.</p>
                </div>
                <div class="highlight_text">
                    <h5 class="h5 regular">Highlights</h5>
                    <p>Lost the plot crikey my lady such a fibber what a plonker nice one have it cup of tea
                        mush bubble
                        and squeak, bobby zonked brilliant young delinquent chinwag codswallop loo car boot,
                        <span class="h_black">tickety-boo victoria sponge bender</span> blag old at public
                        school owt to
                        do with me lemon squeezy. Bamboozled starkers knees up owt to do with me bite your arm
                        off Eaton
                        what a plonker Charles daft <span class="h_green">Why you mug old, bubble and
                            squeak</span>
                        cracking goal bodge bonnet me old mucker say smashing spiffing good time cobblers
                        blatant.
                        Richard super me old mucker tomfoolery wellies starkers twit barney pear shaped cheeky,
                        bugger
                        cup of char bender grub posh a load of old tosh pukka haggle plastered, what a load of
                        rubbish
                        Jeffrey hunky-dory up the duff nice one fantastic bog Elizabeth. <span class="h_blue">Knackered
                            I spiffing good</span> time easy peasy pear shaped hotpot up the kyver cheesed off,
                        bog-standard blower I don't want no agro tosser the little rotter chinwag cor blimey
                        guvnor
                        jolly good.
                    </p>
                </div>
                <div class="highlight_text">
                    <h5 class="h5 regular">Text Tooltips</h5>
                    <p>He nicked it chip shop argy-bargy brilliant get stuffed mate absolutely bladdered
                        smashing, <span class="tooltips_one" data-toggle="tooltip" data-placement="top"
                            title="Your text here">vagabond codswallop tosser</span> hunky-dory cheers in my
                        flat bite
                        your arm off, cracking goal up <span class="tooltips_two" data-toggle="tooltip"
                            data-placement="top" title="Editar">the duff cheeky bugger zonked why</span>. Burke
                        cras
                        Richard grub say bits and bobs mush my lady tinkety tonk old fruit crikey fantastic
                        vagabond,
                        sloshed blower barney bender is bobby you mug daft argy-bargy.</p>
                </div>
                <div class="row dropcap_inner">
                    <div class="col-lg-5">
                        <div class="dropcap_content">
                            <h5 class="h5 regular">Big Text Dropcap</h5>
                            <p><span>K</span> aking cakes buggered my lady up the duff ummm I'm telling skive
                                off
                                Richard Oxford it's all gone to pot lavatory codswallop I don't get shirty with
                                me, lost
                                the plot up the kyver plastered mufty the full monty bleeding tosser cheeky what
                                a load
                                of rubbish excuse my french.!</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="dropcap_content">
                            <h5 class="h5 regular">Rectangle Dropcap</h5>
                            <p><span class="r_dropcap">A</span> aking cakes buggered my lady up the duff ummm
                                I'm
                                telling skive off Richard Oxford it's all gone to pot lavatory codswallop I
                                don't get
                                shirty with me, lost the plot up the kyver plastered mufty the full monty
                                bleeding
                                tosser cheeky what a load of rubbish excuse my french.!</p>
                        </div>
                    </div>
                </div>
                <div class="row typography_list">
                    <div class="col-lg-5 col-md-6">
                        <h5 class="h5 regular">Unordered Lists (Nested)</h5>
                        <ul class="list-unstyled unorderlist">
                            <li><a href="#">Option panel</a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Incredible Support</a>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Life time Update</a></li>
                                            <li><a href="#">Unlimited Colors</a></li>
                                            <li><a href="#">Translation Ready</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">List item two</a></li>
                                    <li><a href="#">List item three</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Option panel</a></li>
                            <li><a href="#">Easy to Customize</a></li>
                            <li><a href="#">User Friendly</a></li>
                            <li><a href="#">Incredible Support</a></li>
                            <li><a href="#">Customize</a></li>
                        </ul>
                        <div class="steps-panel">
                            <ul class="ordered-list">
                                <li>Go to <span class="direction_steps"><span class="direction_step">KbDoc
                                            Settings</span><span class="direction_step">Header</span> <span
                                            class="direction_step">Logo</span> </span></li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <h5 class="h5 regular">Ordered Lists (Nested)</h5>
                        <ol>
                            <li><a href="#">Option panel</a>
                                <ol>
                                    <li><a href="#">Incredible Support</a>
                                        <ol>
                                            <li><a href="#">Life time Update</a></li>
                                            <li><a href="#">Unlimited Colors</a></li>
                                            <li><a href="#">Translation Ready</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#">List item two</a></li>
                                    <li><a href="#">List item three</a></li>
                                </ol>
                            </li>
                            <li><a href="#">Option panel</a></li>
                            <li><a href="#">Easy to Customize</a></li>
                            <li><a href="#">User Friendly</a></li>
                            <li><a href="#">Incredible Support</a></li>
                            <li><a href="#">Customize</a></li>
                        </ol>
                        <div class="steps-panel">
                            <ol class="ordered-list">
                                <li>Go to <span class="direction_steps"><span class="direction_step">KbDoc
                                            Settings</span><span class="direction_step">Header</span> <span
                                            class="direction_step">Logo</span> </span></li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="blockquote_inner">
                    <h4 class="h4">Blockquote</h4>
                    <blockquote class="blockquote">
                        <p class="mb-0">Sloshed porkies it's your round bugger up the kyver say buggered cheeky
                            bugger
                            in my flat, say chinwag bobby blow off squiffy bleeder quaint spiffing owt to do
                            with me,
                            brilliant chimney pot excuse my French daft bog-standard lemon squeezy cheers. In my
                            flat
                            cup of tea cracking goal tinkety tonk old fruit pukka car boot fantastic golly
                            gosh.!</p>
                    </blockquote>
                    <h6 class="h6 regular">Single line blockquote:</h6>
                    <blockquote class="blockquote_two">
                        <h5 class="mb-0 h5"><span class="quote_icon">,,</span>Stay Hungry. Stay foolish.</h5>
                    </blockquote>
                    <h6 class="h6 regular">Multi line blockquote with a cite reference:</h6>
                    <blockquote class="blockquote_two">
                        <h5 class="mb-0 h5"><span class="quote_icon">,,</span>The HTML
                            <span>&lt;blockquote&gt;</span>
                            Element (or HTML Block Quotation Element) indicates that the enclosed text is an
                            extended
                            quotation. Usually, this is rendered visually by indentation (see Notes for how to
                            change
                            it). A URL for the source of the quotation may be given using the cite attribute,
                            while a
                            text representation of the source can be given using the <span>&lt;cite&lt;</span>
                            element.
                        </h5>
                    </blockquote>
                </div>
                <div class="button_inner">
                    <h4 class="h4">All Button Style</h4>
                    <h6 class="h6 m-0">Button sizes</h6>
                    <div class="button_inner_one">
                        <a href="#" class="action_btn btn_small">Docs</a>
                        <a href="#" class="action_btn btn_small_two">KbDoc</a>
                        <a href="#" class="action_btn btn_small_three">KbDoc</a>
                        <a href="#" class="action_btn btn_bg">KbDoc</a>
                        <a href="#" class="action_btn btn_radious_none">KbDoc</a>
                        <a href="#" class="action_btn btn_radious_45">KbDoc</a>
                    </div>
                </div>
                <div class="button_inner">
                    <h6 class="h6 m-0">Button border sizes</h6>
                    <div class="button_inner_one">
                        <a href="#" class="doc_border_btn btn_small">Docs</a>
                        <a href="#" class="doc_border_btn btn_small_two">KbDoc</a>
                        <a href="#" class="doc_border_btn doc_border_btn_two">KbDoc</a>
                        <a href="#" class="doc_border_btn btn_bg">KbDoc</a>
                        <a href="#" class="doc_border_btn btn_radious_none">KbDoc</a>
                        <a href="#" class="doc_border_btn btn_radious_45">KbDoc</a>
                    </div>
                </div>
                <div class="button_inner">
                    <h6 class="h6 m-0">Button with icon</h6>
                    <div class="button_inner_one">
                        <a class="nav_btn icon_btn" href="#"><i class="icon_profile"></i>Log In</a>
                        <a href="#" class="doc_border_btn arrow_btn_medium">View All Docs<i class="arrow_right"></i></a>
                        <a href="#" class="doc_border_btn arrow_btn_big">Live Chat Now<i class="icon_chat_alt"></i></a>
                        <a class="nav_btn icon_btn arrow_btn_small" href="#"><i class="icon_house_alt"></i>View
                            All
                            Docs</a>
                        <a class="nav_btn icon_btn arrow_btn_small_two" href="#"><i class="icon_documents_alt"></i>All
                            Docs</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="action_area_three">
            <div class="container">
                <div class="action_content_three text-center">
                    <h2>KbDoc will definitely make Your life easier</h2>
                    <a href="#" class="doc_border_btn doc_border_btn_two">Buy KbDoc Now</a>
                </div>
            </div>
        </section>
        <footer class="footer_area f_bg_color">
            <img class="p_absolute leaf" src="img/v.svg" alt="">
            <img class="p_absolute f_man" src="img/home_two/f_man.png" alt="">
            <img class="p_absolute f_cloud" src="img/home_two/cloud.png" alt="">
            <img class="p_absolute f_email" src="img/home_two/email-icon.png" alt="">
            <img class="p_absolute f_email_two" src="img/home_two/email-icon_two.png" alt="">
            <img class="p_absolute f_man_two" src="img/home_two/man.png" alt="">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget subscribe_widget">
                                <a href="index.html" class="f_logo"><img src="img/logo.png" alt=""></a>
                                <h4 class="c_head">Subscribe to our newsletter</h4>
                                <form action="#" class="footer_subscribe_form">
                                    <input type="email" placeholder="Email" class="form-control">
                                    <button type="submit" class="s_btn">Send</button>
                                </form>
                                <ul class="list-unstyled f_social_icon">
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_30">
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
                            <div class="f_widget link_widget">
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
                            <div class="f_widget link_widget pl_70">
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