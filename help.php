<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-select.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>KbDoc</title>
</head>

<body data-spy="scroll" data-target="#navbar-example3" data-offset="86" data-scroll-animation="true" class="doc">
    <?php include "partials/preloader.html" ?>

    <div class="body_wrapper">
        <?php include "partials/navbar.html" ?>
        <div class="mobile_main_menu" id="sticky">
            <div class="container">
                <div class="mobile_menu_left">
                    <button type="button" class="navbar-toggler mobile_menu_btn">
                        <span class="menu_toggle ">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <a class="sticky_logo" href="index.html">
                        <img src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                        <img src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                    </a>
                </div>
                <div class="mobile_menu_right">
                    <a class="nav_btn" href="#">Free Trail</a>
                </div>
            </div>
        </div>
        <div class="click_capture"></div>
        <div class="side_menu">
            <div class="mobile_menu_header">
                <div class="close_nav">
                    <i class="arrow_left"></i>
                    <i class="icon_close"></i>
                </div>
                <div class="mobile_logo">
                    <a href="#"><img src="img/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="mobile_nav_wrapper">
                <nav class="mobile_nav_top">
                    <ul class="navbar-nav menu ml-auto">
                        <li class="nav-item dropdown submenu">
                            <a href="#" class="nav-link">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index.html" class="nav-link">Light Knowledgebase</a></li>
                                <li class="nav-item"><a href="index-helpdesk.html" class="nav-link">Help Desk</a></li>
                                <li class="nav-item"><a href="index-3.html" class="nav-link">Cool Knowledgebase</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu active">
                            <a href="#" class="nav-link">Docs</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="doc-archive.html" class="nav-link">Doc Archive</a></li>
                                <li class="nav-item"><a href="doclist.html" class="nav-link">DocTopics</a></li>
                                <li class="nav-item dropdown submenu active">
                                    <a href="#" class="nav-link">Shortcodes</a>
                                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="accordion.html"
                                                class="nav-link active">Accordion</a></li>
                                        <li class="nav-item"><a href="tab.html" class="nav-link">Tabs</a></li>
                                        <li class="nav-item"><a href="notice.html" class="nav-link">Notices</a></li>
                                        <li class="nav-item"><a href="table.html" class="nav-link">Tables</a></li>
                                        <li class="nav-item"><a href="tooltip.html" class="nav-link">Tooltip</a></li>
                                        <li class="nav-item"><a href="image-pointing.html" class="nav-link">Image
                                                Hotspots</a></li>
                                        <li class="nav-item"><a href="lightbox.html" class="nav-link">Lightbox</a></li>
                                        <li class="nav-item"><a href="can-use.html" class="nav-link">Can I Use</a></li>
                                        <li class="nav-item"><a href="changelog.html" class="nav-link">Changelog</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a href="#" class="nav-link">Layouts</a>
                                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="layouts.html" class="nav-link">Both Sidebar</a>
                                        </li>
                                        <li class="nav-item"><a href="layout-leftsidebar.html" class="nav-link">Left
                                                Sidebar</a></li>
                                        <li class="nav-item"><a href="layout-full.html" class="nav-link">Full-wdith</a>
                                        </li>
                                        <li class="nav-item"><a href="sticky-menu.html" class="nav-link">Sticky menu</a>
                                        </li>
                                        <li class="nav-item"><a href="simple-footer.html" class="nav-link">Simple
                                                Footer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="#" class="nav-link">Pages</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="Onepage.html" class="nav-link">Onepage</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="signin.html" class="nav-link">Sign In</a></li>
                                <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
                                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                                <li class="nav-item"><a href="error.html" class="nav-link">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a href="#" class="nav-link">Forum</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                                <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                                <li class="nav-item"><a href="forum-single.html" class="nav-link">Forum Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link" href="#">
                                Products
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu dropdown_menu_two">
                                <li class="nav-item">
                                    <a href="doc-archive.html" class="nav-link">
                                        <img src="img/tick.png" alt="">
                                        <div class="text">
                                            <h5>KbDoc</h5>
                                            <p>Launch Simple Websites</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="doclist.html" class="nav-link">
                                        <img src="img/sheet.png" alt="">
                                        <div class="text">
                                            <h5>docall</h5>
                                            <p>Digital Assets Subscription</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">
                                        <img src="img/shopping-bag.png" alt="">
                                        <div class="text">
                                            <h5>Docenvato</h5>
                                            <p>Tutorials & Courses</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">
                                        <img src="img/gear.png" alt="">
                                        <div class="text">
                                            <h5>Tools</h5>
                                            <p>Hire a Freelancer</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link" href="#">
                                Blog
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                                </li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="mobile_nav_bottom">
                    <aside class="doc_left_sidebarlist">
                        <h2>KbDoc Documentation</h2>
                        <div class="scroll">
                            <ul class="list-unstyled nav-sidebar">
                                <li class="nav-item">
                                    <a href="doclist.html" class="nav-link"><img src="img/side-nav/home.png"
                                            alt="">Home</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="shortcode.html" class="nav-link"><img src="img/side-nav/briefcase.png"
                                            alt="briefcase">Shortcodes</a>
                                    <span class="icon"><i class="arrow_carrot-down"></i></span>
                                    <ul class="list-unstyled dropdown_nav">
                                        <li><a href="tab.html">Tabs</a></li>
                                        <li><a href="accordion.html" class="active">Accordion</a></li>
                                        <li><a href="doclist.html">Doclist</a></li>
                                        <li><a href="notice.html">Notices</a></li>
                                        <li><a href="table.html">Table</a></li>
                                        <li><a href="lightbox.html">Image Lightbox</a></li>
                                        <li><a href="tooltip.html">Tooltip</a></li>
                                        <li><a href="can-use.html">Can I use</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts.html" class="nav-link"><img src="img/side-nav/coding.png"
                                            alt="">Layouts</a>
                                    <span class="icon"><i class="arrow_carrot-down"></i></span>
                                    <ul class="list-unstyled dropdown_nav">
                                        <li><a href="layouts.html">Both Sidebar</a></li>
                                        <li><a href="layout-leftsidebar.html">Left Sidebar</a></li>
                                        <li><a href="layout-full.html">Full-width</a></li>
                                        <li><a href="sticky-menu.html">Sticky Menu</a></li>
                                        <li><a href="simple-footer.html">Simple Footer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="tour.html" class="nav-link"><img src="img/side-nav/chat1.png"
                                            alt="">Tour</a>
                                    <span class="icon"><i class="arrow_carrot-down"></i></span>
                                    <ul class="list-unstyled dropdown_nav">
                                        <li><a href="image-pointing.html">Image Hotspots</a></li>
                                        <li><a href="tour.html">Application Interface</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="typography.html" class="nav-link"><img src="img/side-nav/document.png"
                                            alt="">Content</a>
                                    <span class="icon"><i class="arrow_carrot-down"></i></span>
                                    <ul class="list-unstyled dropdown_nav">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="code.html">Code</a></li>
                                        <li><a href="image.html">Image</a></li>
                                        <li><a href="video.html">Video</a></li>
                                        <li><a href="keyboard-shortcuts.html">Keyboard Shortcuts</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="changelog.html" class="nav-link"><img src="img/side-nav/document2.png"
                                            alt="">Change Log</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled nav-sidebar coding_nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/account.png" alt="">Account</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/coding.png"
                                            alt="">Development</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled nav-sidebar bottom_nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/united-states.png" alt="">Unlted
                                        States</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/edit.png" alt="">English </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><img src="img/side-nav/users.png" alt="">Sign In <i
                                            class="arrow_right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <section class="breadcrumb_area">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="">
            <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="">
            <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="">
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
            <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt="">
            <div class="container custom_container">
                <form action="#" class="banner_search_form banner_search_form_two">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                        <div class="input-group-append">
                            <select class="custom-select" id="inlineFormCustomSelect">
                                <option selected>All Category</option>
                                <option value="1">Doclist</option>
                                <option value="2">DocArchive</option>
                                <option value="3">KbDoc</option>
                            </select>
                        </div>
                        <button type="submit"><i class="icon_search"></i></button>
                    </div>
                </form>
            </div>
        </section>
        <section class="page_breadcrumb">
            <div class="container custom_container">
                <div class="row">
                    <div class="col-sm-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">KbDoc WordPress Theme</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-sm-5">
                        <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="doc_documentation_area" id="sticky_doc">
            <div class="overlay_bg"></div>
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-3 doc_mobile_menu display_none">
                        <aside class="doc_left_sidebarlist">
                            <div class="open_icon" id="left">
                                <i class="arrow_carrot-right"></i>
                                <i class="arrow_carrot-left"></i>
                            </div>
                            <div class="scroll">
                                <ul class="list-unstyled nav-sidebar">
                                    <li class="nav-item">
                                        <a href="doclist.html" class="nav-link"><img src="img/side-nav/home.png"
                                                alt="">Home</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href="shortcode.html" class="nav-link"><img src="img/side-nav/briefcase.png"
                                                alt="briefcase">Shortcodes</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li><a href="tab.html">Tabs</a></li>
                                            <li><a href="accordion.html" class="active">Accordion</a></li>
                                            <li><a href="notice.html">Notices</a></li>
                                            <li><a href="table.html">Table</a></li>
                                            <li><a href="lightbox.html">Image Lightbox</a></li>
                                            <li><a href="tooltip.html">Tooltip</a></li>
                                            <li><a href="can-use.html">Can I use</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts.html" class="nav-link"><img src="img/side-nav/coding.png"
                                                alt="">Layouts</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li><a href="layouts.html">Both Sidebar</a></li>
                                            <li><a href="layout-leftsidebar.html">Left Sidebar</a></li>
                                            <li><a href="layout-full.html">Full-width</a></li>
                                            <li><a href="sticky-menu.html">Sticky Menu</a></li>
                                            <li><a href="simple-footer.html">Simple Footer</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tour.html" class="nav-link"><img src="img/side-nav/chat1.png"
                                                alt="">Tour</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li><a href="image-pointing.html">Image Hotspots</a></li>
                                            <li><a href="tour.html">Application Interface</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="typography.html" class="nav-link"><img src="img/side-nav/document.png"
                                                alt="">Content</a>
                                        <span class="icon"><i class="arrow_carrot-down"></i></span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="code.html">Code</a></li>
                                            <li><a href="image.html">Image</a></li>
                                            <li><a href="video.html">Video</a></li>
                                            <li><a href="keyboard-shortcuts.html">Keyboard Shortcuts</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="changelog.html" class="nav-link"><img src="img/side-nav/document2.png"
                                                alt="">Change Log</a>
                                    </li>
                                </ul>
                                <ul class="list-unstyled nav-sidebar coding_nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/account.png"
                                                alt="">Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/coding.png"
                                                alt="">Development</a>
                                    </li>
                                </ul>
                                <ul class="list-unstyled nav-sidebar bottom_nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/united-states.png"
                                                alt="">Unlted States</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/edit.png" alt="">English
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><img src="img/side-nav/users.png" alt="">Sign In <i
                                                class="arrow_right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <div class="shortcode_info" id="post">
                            <div class="shortcode_title">
                                <h1>Shortcodes</h1>
                                <p><span>Welcome to KbDoc !</span> Get familiar with the Stripe products and explore
                                    their features:</p>
                            </div>
                            <div class="toggle_shortcode">
                                <div class="shortcode_title">
                                    <h4 class="s_title load-order-2" id="toggle">Toggle</h4>
                                    <p>Switch from one effect, feature, or state to another by using a toggle.</p>
                                </div>
                                <a class="toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" role="button"
                                    aria-expanded="false" aria-controls="multiCollapseExample1">Super Professional</a>
                                <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                    <div class="card card-body toggle_body"> A short rod of wood or plastic sewn to one
                                        side of a coat or other garment, pushed through a hole or loop on the other side
                                        and twisted so as to act as a fastener. </div>
                                </div>
                                <a class="toggle_btn mt-1 collapsed" data-toggle="collapse"
                                    href="#multiCollapseExample2" role="button" aria-expanded="false"
                                    aria-controls="multiCollapseExample2">Dashboard</a>
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body toggle_body">
                                        He lost his bottle arse fanny around do one cheesed off crikey bevy mufty the
                                        full monty nancy boy cup of tea spend a penny, golly gosh what a plonker.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion_shortcode">
                                <div class="shortcode_title">
                                    <h4 class="s_title load-order-2" id="accordions">Accordion</h4>
                                    <p>The accordion is a graphical control element comprising a vertically stacked list
                                        of items, such as labels or thumbnails.</p>
                                </div>
                                <div id="accordion">
                                    <div class="card doc_accordion">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Meaning of Accordion<i class="icon_plus"></i><i
                                                        class="icon_minus-06"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion">
                                            <div class="card-body toggle_body">
                                                An accordion is similar in purpose to a tabbed interface, a list of
                                                items where exactly one item is expanded into a panel (i.e. list items
                                                are shortcuts to access separate panels).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card doc_accordion">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Online Marketing<i class="icon_plus"></i><i
                                                        class="icon_minus-06"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion">
                                            <div class="card-body toggle_body">
                                                He lost his bottle arse fanny around do one cheesed off crikey bevy
                                                mufty the full monty nancy boy cup of tea spend a penny, golly gosh what
                                                a plonker.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card doc_accordion">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Amazing Support <i class="icon_plus"></i><i
                                                        class="icon_minus-06"></i>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body toggle_body">
                                                He lost his bottle arse fanny around do one cheesed off crikey bevy
                                                mufty the full monty nancy boy cup of tea spend a penny, golly gosh what
                                                a plonker.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <footer>
                                <div class="border_bottom"></div>
                                <div class="row feedback_link">
                                    <div class="col-lg-6">
                                        <h6><i class="icon_mail_alt"></i>Still stuck? <a href="#" data-toggle="modal"
                                                data-target="#exampleModal3">How can we help?</a></h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>Was this page helpful? <a href="#" class="h_btn">Yes</a><a href="#"
                                                class="h_btn">No</a></p>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 doc_right_mobile_menu">
                        <div class="open_icon" id="right">
                            <i class="arrow_carrot-left"></i>
                            <i class="arrow_carrot-right"></i>
                        </div>
                        <div class="doc_rightsidebar scroll">
                            <select id="mySelect" name="os">
                                <option value="windows" data-content="<i class='fab fa-windows'></i> Windows">Windows
                                </option>
                                <option value="ios" data-content="<i class='fab fa-apple'></i> Ios">Ios</option>
                                <option value="linux" data-content="<i class='fab fa-linux'></i> Linux">Linux</option>
                            </select>
                            <div id="font-switcher" class="d-flex justify-content-between align-items-center">
                                <div id="rvfs-controllers" class="fontsize-controllers group"></div>
                                <a href="javascript:window.print()" class="print"><i class="icon_printer"></i></a>
                            </div>
                            <div class="doc_switch">
                                <label for="something" class="tab-btn tab-btns"><i
                                        class="icon_lightbulb_alt"></i></label>
                                <input type="checkbox" name="something" id="something" class="tab_switcher">
                                <label for="something" class="tab-btn"><i class="far fa-moon"></i></label>
                            </div>
                            <h6>On this page:</h6>
                            <nav class="list-unstyled doc_menu" id="navbar-example3">
                                <a href="#toggle" class="nav-link">Toggle</a>
                                <a href="#accordions" class="nav-link">Accordion</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="simple_footer">
            <img class="leaf_right" src="img/home_one/leaf_footter.png" alt="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <p>© 2020 All Rights Reserved by <a href="index.html">KbDoc</a></p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ul class="list-unstyled f_social_icon">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_vimeo"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- How can we help? Form Modal -->
    <div class="modal fade img_modal" id="exampleModal3" tabindex="-3" role="dialog" aria-hidden="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class=" icon_close"></i>
        </button>
        <div class="modal-dialog help_form" role="document">
            <div class="modal-content">
                <div class="shortcode_title">
                    <h1>How can we help?</h1>
                    <p>A premium WordPress theme with integrated Knowledge Base,<br>providing 24/7 community based
                        support.</p>
                </div>
                <form action="#" class="contact_form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="Message" id="massage" placeholder="Massage"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn action_btn">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap-select.min.js"></script>
    <script src="assets/font-size/js/rv-jquery-fontsize-2.0.3.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/anchor.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>