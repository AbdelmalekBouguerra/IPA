<?php 
// session test if user connected
session_start();
if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
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
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>KbDoc - Forum Topics</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>KbDoc</span></h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>

    <div class="click_capture"></div>

    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one" id="sticky">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="index.html">
                    <img src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                    <img src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
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
                        <li class="nav-item dropdown submenu">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                               <li class="nav-item"><a href="index.html" class="nav-link">Light Knowledgebase</a></li>
                                <li class="nav-item"><a href="index-helpdesk.html" class="nav-link">Help Desk</a></li>
                            <li class="nav-item"><a href="index-3.html" class="nav-link">Cool Knowledgebase</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu mega_menu tab-demo">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Docs</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-5 tabHeader">
                                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                aria-orientation="vertical">
                                                <li class="nav-item active">
                                                    <a class="nav-link active" id="v-pills-doc-tab" data-toggle="pill"
                                                        href="#v-pills-doc" role="tab" aria-controls="v-pills-doc"
                                                        aria-selected="true">Doc Topics</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-code-tab" data-toggle="pill"
                                                        href="#v-pills-code" role="tab" aria-controls="v-pills-code"
                                                        aria-selected="false">Shortcodes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-layout-tab" data-toggle="pill"
                                                        href="#v-pills-layout" role="tab" aria-controls="v-pills-layout"
                                                        aria-selected="false">Layouts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill"
                                                        href="#v-pills-tour" role="tab" aria-controls="v-pills-tour"
                                                        aria-selected="false">Tour</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-content-tab" data-toggle="pill"
                                                        href="#v-pills-content" role="tab"
                                                        aria-controls="v-pills-content"
                                                        aria-selected="false">Content</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill"
                                                        href="#v-pills-pages" role="tab" aria-controls="v-pills-pages"
                                                        aria-selected="false">Other Pages</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="tab-content tabContent" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-doc" role="tabpanel"
                                                    aria-labelledby="v-pills-doc-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li>
                                                                <a href="doc-archive.html">Doc Archive</a>
                                                            </li>
                                                            <li>
                                                                <a href="doclist.html">Doc Topic</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doclist.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-code" role="tabpanel"
                                                    aria-labelledby="v-pills-code-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="tab.html">Tabs</a></li>
                                                            <li><a href="accordion.html">Accordion</a></li>
                                                            <li><a href="notice.html">Notice</a></li>
                                                            <li><a href="tab.html">Tables</a></li>
                                                            <li><a href="image-pointing.html">Image Lightbox</a></li>
                                                        </ul>
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="tooltip.html">Tooltip</a></li>
                                                            <li><a href="lightbox.html">Lightbox</a></li>
                                                            <li><a href="can-use.html">Can I Use</a></li>
                                                            <li><a href="footnote.html">Footnote</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doclist.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-layout" role="tabpanel"
                                                    aria-labelledby="v-pills-layout-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="layouts.html">Both Sidebar</a></li>
                                                            <li><a href="layout-leftsidebar.html">Left Sidebar</a></li>
                                                            <li><a href="layout-full.html">Full-wdith</a></li>
                                                            <li><a href="sticky-menu.html">Sticky menu</a></li>
                                                            <li><a href="simple-footer.html">Simple Footer</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-tour" role="tabpanel"
                                                    aria-labelledby="v-pills-tour-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list w_100">
                                                            <li><a href="image-pointing.html">Image Hotspot</a></li>
                                                            <li><a href="tour.html">Application Interface</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-content" role="tabpanel"
                                                    aria-labelledby="v-pills-content-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="typography.html">Typography</a></li>
                                                            <li><a href="code.html">Code</a></li>
                                                            <li><a href="image.html">Image</a></li>
                                                            <li><a href="video.html">Video</a></li>
                                            <li><a href="keyboard-shortcuts.html">Keyboard Shortcuts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="#">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-pages" role="tabpanel"
                                                    aria-labelledby="v-pills-pages-tab">
                                                    <div class="d-flex">
                                                        <ul class="list-unstyled tab_list">
                                                            <li><a href="doclist.html">Doc Topics</a>
                                                            </li>
                                                            <li><a href="Onepage.html">Onepage</a>
                                                            </li>
                                                            <li><a href="cheatsheet.html">Cheatseet</a>
                                                            </li>
                                                            <li><a href="changelog.html">Changelog</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="text">
                                                        <a href="#">
                                                            <p>More Categories</p>
                                                        </a>
                                                        <a href="doclist.html">
                                                            <p>All docs</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="signin.html" class="nav-link">Sign In</a></li>
                                <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
                                <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                                <li class="nav-item"><a href="error.html" class="nav-link">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu active">
                            <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Forum
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                                <li class="nav-item active"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                                <li class="nav-item"><a href="forum-single.html" class="nav-link">Forum Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item active"><a href="blog-grid-two.html" class="nav-link">Blog Grid
                                        Two</a></li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="nav_btn" href="#">Free Trail</a>
                </div>
            </div>
        </nav>

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
                                <option value="1">Doc Archive</option>
                                <option value="2">Doc List</option>
                                <option value="3">KbDoc</option>
                            </select>
                        </div>
                        <button type="submit"><i class="icon_search"></i></button>
                    </div>
                </form>
            </div>
        </section>

        <section class="page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog with sidebar</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-sm-5">
                        <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="doc_blog_grid_area sec_pad forum-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="communities-boxes">
                            <div class="kbDoc-com-box">
                                <div class="icon-container">
                                    <img src="img/home_support/rc1.png" alt="communinity-box">
                                </div>

                                <div class="kbDoc-com-box-content">
                                    <h3 class="title"><a href="#"> Getting Started</a></h3>
                                    <p class="total-post">453 Posts</p>
                                </div>
                                <!-- /.kbDoc-com-box-content -->
                            </div>
                            <!-- /.kbDoc-com-box -->

                            <div class="kbDoc-com-box">
                                <div class="icon-container">
                                    <img src="img/home_support/rc2.png" alt="communinity-box">
                                </div>

                                <div class="kbDoc-com-box-content">
                                    <h3 class="title"><a href="#"> Integrations</a></h3>
                                    <p class="total-post">624 Posts</p>
                                </div>
                                <!-- /.kbDoc-com-box-content -->
                            </div>
                            <!-- /.kbDoc-com-box -->

                            <div class="kbDoc-com-box">
                                <div class="icon-container">
                                    <img src="img/home_support/rc3.png" alt="communinity-box">
                                </div>

                                <div class="kbDoc-com-box-content">
                                    <h3 class="title"><a href="#"> Solar System</a></h3>
                                    <p class="total-post">120 Posts</p>
                                </div>
                                <!-- /.kbDoc-com-box-content -->
                            </div>
                            <!-- /.kbDoc-com-box -->

                            <div class="kbDoc-com-box">
                                <div class="icon-container">
                                    <img src="img/home_support/rc4.png" alt="communinity-box">
                                </div>

                                <div class="kbDoc-com-box-content">
                                    <h3 class="title"><a href="#"> Cloud Server</a></h3>
                                    <p class="total-post">235 Posts</p>
                                </div>
                                <!-- /.kbDoc-com-box-content -->
                            </div>
                            <!-- /.kbDoc-com-box -->

                        </div>
                        <!-- /.communities-boxes -->

                        <div class="answer-action">
                            <div class="action-content">
                                <div class="image-wrap">
                                    <img src="img/home_support/answer.png" alt="answer action">
                                </div>

                                <div class="content">
                                    <h2 class="ans-title">Can’t find an answer?</h2>
                                    <p>
                                        Make use of a qualified tutor to get the answer
                                    </p>
                                </div>
                            </div>
                            <!-- /.action-content -->

                            <div class="action-button-container">
                                <a href="#" class="action_btn btn-ans">Ask a Question</a>
                            </div>
                            <!-- /.action-button-container -->
                        </div>
                        <!-- /.answer-action -->

                        <div class="post-header">
                            <div class="support-info">
                                <ul class="support-total-info">
                                    <li class="open-ticket"><i class="icon_info_alt"></i>576 Open</li>
                                    <li class="close-ticket"><i class="icon_check"></i><a href="#">2,974 Closed</a></li>
                                </ul>
                            </div>
                            <!-- /.support-info -->

                            <div class="support-category-menus">
                                <ul class="category-menu">
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAuthor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Author
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuAuthor">
                                                <h3 class="title">Filter by author</h3>

                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Filter users">
                                                </form>

                                                <div class="all-users">
                                                    <a class="dropdown-item" href="#0" data-rel="richard">
                                                        <img src="img/home_support/fl1.png" alt="user">
                                                        Richard Tea
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="druid">
                                                        <img src="img/home_support/fl2.png" alt="user">
                                                        Druid Wensleydale
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="weir">
                                                        <img src="img/home_support/fl3.png" alt="user">
                                                        Weir Doee
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="giles">
                                                        <img src="img/home_support/fl4.png" alt="user">
                                                        Giles Posture
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="theodore">
                                                        <img src="img/home_support/fl5.png" alt="user">
                                                        Theodore Handle
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="mann">
                                                        <img src="img/home_support/fl6.png" alt="user">
                                                        Guy Mann
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="dylan">
                                                        <img src="img/home_support/fl7.png" alt="user">
                                                        Dylan Meringue
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="fletch">
                                                        <img src="img/home_support/fl8.png" alt="user">
                                                        Fletch Skinner
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Label
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLabel">
                                                <h3 class="title">Filter by label</h3>

                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Filter users">
                                                </form>

                                                <div class="all-users">
                                                    <a class="dropdown-item" data-rel="kbDoc" href="#0">
                                                        <span class="color-purple"></span>
                                                        KbDoc
                                                    </a>
                                                    <a class="dropdown-item" data-rel="improvement" href="#0">
                                                        <span class="color-yellow">
                                                        </span>
                                                        Improvement !
                                                    </a>
                                                    <a class="dropdown-item" data-rel="css" href="#0">
                                                        <span class="color-ass"></span>
                                                        CSS
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="feature">
                                                        <span class="color-green"></span>
                                                        Feature
                                                    </a>
                                                    <a class="dropdown-item" data-rel="spider" href="#0">
                                                        <span class="color-orange"></span>
                                                        Spider theme
                                                    </a>
                                                    <a class="dropdown-item" href="#0" data-rel="open">
                                                        <span class="color-theme"></span>
                                                        Open
                                                    </a>
                                                    <a class="dropdown-item" data-rel="bug" href="#0">
                                                        <span class="color-pink"></span>
                                                        Bug !
                                                    </a>
                                                    <a class="dropdown-item" data-rel="doc" href="#0">
                                                        <span class="color-light-green"></span>
                                                        Docs
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuAssignee" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Assignee
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuAssignee">
                                                <h3 class="title">Filter by author</h3>

                                                <form action="#" class="cate-search-form">
                                                    <input type="text" placeholder="Filter users">
                                                </form>

                                                <div class="all-users">
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl1.png" alt="user">
                                                        Richard Tea
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl2.png" alt="user">
                                                        Druid Wensleydale
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl3.png" alt="user">
                                                        Weir Doee
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl4.png" alt="user">
                                                        Giles Posture
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl5.png" alt="user">
                                                        Theodore Handle
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl6.png" alt="user">
                                                        Guy Mann
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl7.png" alt="user">
                                                        Dylan Meringue
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="img/home_support/fl8.png" alt="user">Fletch Skinner
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Sort
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <h3 class="title">Sort by</h3>
                                                <div class="short-by">
                                                    <a class="dropdown-item active-short" href="#0">Newest</a>
                                                    <a class="dropdown-item" href="#0">Oldest</a>
                                                    <a class="dropdown-item" href="#0">Most commented</a>
                                                    <a class="dropdown-item" href="#0">Least commented</a>
                                                    <a class="dropdown-item" href="#0">Recently updated</a>
                                                    <a class="dropdown-item" href="#0">Least recently updated</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.support-category-menus -->
                        </div>
                        <!-- /.post-header -->

                        <div class="community-posts-wrapper bb-radius">
                            <div class="community-post style-two kbDoc richard bug">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp2.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Workspace/Org Administration</a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm1.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 3 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two improvement kbDoc open druid">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp1.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title"><a href="forum-single.html">Course do not display properly</a> </h3>
                                        <div class="cat-wrap">
                                            <a class="badge" href="#">Docbuzz</a>
                                        </div>
                                        <span class="com-featured">
                                            <i class="icon_check"></i>
                                        </span>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm2.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 5 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->

                            <div class="community-post style-two css feature improvement weir">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp3.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title"><a href="forum-single.html">How to add a different logo image to the NON
                                                Sticky header?</a></h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm3.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 4 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->


                            <div class="community-post style-two feature kbDoc spider richard">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp4.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">
                                                Sticky navbar is shown, but state is inactive
                                            </a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-yellow" href="#">Improvement !</a>
                                            <a class="badge color-ass" href="#">CSS</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm4.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 4 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->


                            <div class="community-post style-two spider open weir">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp5.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">
                                                Performance issue uikit v3 and C3js
                                            </a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm5.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 5 days ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post style-two -->


                            <div class="community-post style-two bug feature doc open druid dylan">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp6.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Course do not display properly</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-green" href="#">Feature</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm6.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two spider doc open giles fletch">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp10.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Apps/Integrations/APIs</a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm7.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                        <span class="com-featured">
                                            <i class="icon_check"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two kbDoc bug open dylan">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp7.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Course do not display properly</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-orange" href="#">Spider theme</a>
                                            <a class="badge color-theme" href="#">Open</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm8.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two giles mann">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp8.png" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">UK-form-custom / select / multiple </a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm9.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two theodore fletch">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp9.png" alt="community post">
                                    </div>

                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Change “courses” in URL permalink base</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-pink" href="#">Bug!</a>
                                        </div>

                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm10.png" alt="cmm">
                                                <a href="#">WordPress Theme</a>
                                            </li>
                                            <li><i class="icon_calendar"></i>updated 6 days ago</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two mann">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp2.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Disable animations for ui testing</a>
                                        </h3>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm2.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                            <div class="community-post style-two theodore">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp6.jpg" alt="community post">
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <a href="forum-single.html">Lightbox zoom on mobile device</a>
                                        </h3>
                                        <div class="cat-wrap">
                                            <a class="badge color-green" href="#">Feature</a>
                                        </div>
                                        <ul class="meta">
                                            <li><img src="img/home_support/cmm11.png" alt="cmm"><a href="#">WordPress
                                                    Theme</a></li>
                                            <li><i class="icon_calendar"></i>updated 6 days agoe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li><a href="#"><i class="icon_chat_alt"></i>20</a></li>
                                        <li><a href="#"><i class="icon_star"></i>5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.community-post -->

                        </div>
                        <!-- /.community-posts-wrapper -->

                        <div class="pagination-wrapper">
                            <div class="view-post-of">
                                <p>Viewing 8 topics - 1 through 10 (of 342 total)</p>
                            </div>
                            <ul class="post-pagination">
                                <li class="prev-post pegi-disable"><a href="#"><i class="arrow_carrot-left"></i></a>
                                </li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">15</a></li>
                                <li class="next-post"><a href="#"><i class="arrow_carrot-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.pagination-wrapper -->

                    </div>
                    <!-- /.col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="forum_sidebar">
                            <div class="widget status_widget">
                                <h4 class="c_head">Information</h4>
                                <p class="status">Support is <span class="offline">Offline</span></p>

                                <div class="open-hours">
                                    <h4 class="title-sm">Our office hours</h4>
                                    <p>Monday - Friday / 10am - 6pm (UTC +4) NewYork</p>
                                    <ul class="current-time list-unstyled">
                                        <li>
                                            <h4 class="title-sm">Your time</h4>
                                            <p>10:30:15 PM</p>
                                        </li>
                                        <li>
                                            <h4 class="title-sm">Your time</h4>
                                            <p>10:30:15 PM</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.open-hours -->

                            </div>

                            <div class="widget usefull_links_widget">
                                <h4 class="c_head">Usefull Links</h4>
                                <ul class="list-unstyled usefull-links">
                                    <li><i class="icon_lightbulb_alt"></i><a href="#">FAQs</a></li>
                                    <li><i class="icon_clock_alt"></i><a href="#">Popular</a></li>
                                    <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                                    <li><i class="icon_info_alt"></i><a href="#">Unanswered</a></li>
                                </ul>
                            </div>
                            <div class="widget ticket_widget">
                                <h4 class="c_head">Ticket Categories</h4>

                                <ul class="list-unstyled ticket_categories">
                                    <li><img src="img/home_support/cmm5.png" alt="category"><a href="#">Docs WordPress
                                            Theme</a> <span class="count">10</span></li>
                                    <li><img src="img/home_support/cmm4.png" alt="category"><a href="#">Product Landing
                                            Page</a><span class="count count-fill">13</span><span
                                            class="count">54</span></li>
                                    <li><img src="img/home_support/cmm2.png" alt="category"><a href="#">Knowledge base
                                            Template</a><span class="count">142</span></li>
                                    <li><img src="img/home_support/cmm8.png" alt="category"><a href="#">Startup and App
                                            WP Theme</a> <span class="count">13</span></li>
                                    <li><img src="img/home_support/cmm9.png" alt="category"><a href="#">Clean Email
                                            Template</a> <span class="count">123</span></li>
                                    <li><img src="img/home_support/cmm10.png" alt="category"><a href="#">Apps WordPress
                                            Theme</a> <span class="count">18</span></li>
                                </ul>
                            </div>

                            <div class="widget tag_widget">
                                <h4 class="c_head">Tags</h4>
                                <ul class="list-unstyled w_tag_list style-light">
                                    <li><a href="#">Swagger</a></li>
                                    <li><a href="#">KbDoc</a></li>
                                    <li><a href="#">weCare</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Download</a></li>
                                    <li><a href="#">Doc</a></li>
                                    <li><a href="#">Product board</a></li>
                                    <li><a href="#">WordPress</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">ui/ux</a></li>
                                    <li><a href="#">Doc Design</a></li>
                                    <li><a href="#">DocAll</a></li>
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
                        <img src="img/home_support/chat-smile.png" alt="">
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
            <img class="p_absolute leaf" src="img/v.svg" alt="">
            <img class="p_absolute f_man wow fadeInRight" data-wow-delay="0.6s" src="img/home_two/f_man.png" alt="">
            <img class="p_absolute f_cloud" src="img/home_two/cloud.png" alt="">
            <img class="p_absolute f_email" src="img/home_two/email-icon.png" alt="">
            <img class="p_absolute f_email_two" src="img/home_two/email-icon_two.png" alt="">
            <img class="p_absolute f_man_two wow fadeInLeft" data-wow-delay="0.3s" src="img/home_two/man.png" alt="">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget subscribe_widget wow fadeInUp">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
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
<?php 
} else { 
  header('location:signin.php');
}
?>