<?php
// session test if user connected
session_start();
if (!(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "")) {
    header('location:signin.php');
}
include 'src/ticket.php';

// deleting a ticket 
if(isset($_POST['idDeletedTicket'])) {
    $idDeletedTicket = trim($_POST['idDeletedTicket']);
    try {
        $query = "DELETE FROM ticket WHERE id=:id;";
        $stmt = $connection->prepare($query);
        $stmt->bindParam('id', $idDeletedTicket, PDO::PARAM_INT);
        $stmt->execute();
        header("Refresh:0");
    } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
    }
}

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
    <!-- chosen -->
    <link rel="stylesheet" href="./vendor/chosen_v1.8.7/chosen.min.css">
    <title> Accueil - Institut Pasteur d'Algérie</title>
</head>

<body data-scroll-animation="true">
    <?php include "partials/preloader.html" ?>
    <div class="click_capture"></div>

    <div class="body_wrapper">
        <?php include "partials/navbar.php" ?>

        <section class="breadcrumb_area">
            <h2 class="container" style="font-size: 50px;padding-left: 80px;margin-left: 400px;">
                Bonjours:
                <?php echo $_SESSION['sess_user_name'] ?> dans votre Platforme.
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
                                <a data-toggle="modal" data-target="#exampleModalCenter"
                                    class="action_btn btn-ans">STAR</a>
                            </div>
                            <!-- /.action-button-container -->
                        </div>
                        <!-- /.answer-action -->

                        <div class="post-header">
                            <div class="support-info">
                                <ul class="support-total-info">
                                    <li class="open-ticket">
                                        <i class="icon_info_alt"></i><?php echo $openCount?> Open
                                    </li>
                                    <li class="close-ticket">
                                        <i class="icon_check"></i><?php echo $closeCount?> Closed
                                    </li>
                                </ul>
                            </div>
                            <!-- /.support-info -->
                            <!-- /.support-category-menus -->
                        </div>
                        <!-- /.post-header -->

                        <div class="community-posts-wrapper bb-radius">

                            <?php 
                            foreach ($tickets as $ticket) { ?>
                            <div class="community-post style-two kbDoc richard bug">
                                <div class="post-content">
                                    <div class="author-avatar">
                                        <img src="img/home_support/cp2.jpg" alt="community post" />
                                    </div>
                                    <div class="entry-content">
                                        <h3 class="post-title">
                                            <form action="bonCommande.php" id="bc<?php echo $ticket["id"]; ?>"
                                                method="post">
                                                <input type="hidden" name="id" value="<?php echo $ticket["id"]; ?>">
                                                <input type="hidden" name="descriptionTicket"
                                                    value="<?php echo $ticket["descriptionTicket"]; ?>">
                                                <input type="hidden" name="typeTicket"
                                                    value="<?php echo $ticket["typeTicket"]; ?>">
                                                <input type="hidden" name="materiel"
                                                    value="<?php echo $ticket["materiel"]; ?>">
                                                <input type="hidden" name="time" value="<?php echo $ticket["time"]; ?>">
                                                <a href="javascript:;"
                                                    onclick="document.getElementById('bc<?php echo $ticket['id']; ?>').submit()">
                                                    <p><?php echo "Bon commande #" . $ticket["id"]; ?></p>
                                                </a>
                                            </form>

                                        </h3>
                                        <ul class="meta">
                                            <li>
                                                <img src="img/home_support/cmm1.png" alt="cmm" />
                                                <a><?php echo$ticket["typeTicket"]; ?></a>
                                            </li>
                                            <li><i class="icon_calendar">
                                                </i>
                                                <?php
                                                $date = $ticket["time"];
                                                // $diff = $date->diff((new DateTime()));
                                                echo 'actualisé le ' . $date;
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-meta-wrapper">
                                    <ul class="post-meta-info">
                                        <li>
                                            <!-- <form method="POST" action="#" name="" onSubmit=""> -->
                                            <!-- <input type="hidden" name="idEditedTicket" -->
                                            <!-- value=<?php //echo $ticket["id"];?>> -->
                                            <button data-toggle="modal" data-target="#exampleModalCenter" type="button"
                                                class="btn btn-outline-info">
                                                <i class="icon_pencil-edit"></i>
                                            </button>
                                            <!-- </form> -->
                                        </li>
                                        <li>
                                            <form method="POST" action="" name="postDeleteTicket"
                                                onSubmit="deleteTicket(event);">
                                                <input type="hidden" name="idDeletedTicket"
                                                    value=<?php echo $ticket["id"];?>>
                                                <button type="submit" class="btn btn-outline-danger">
                                                    <i class="icon_trash_alt"></i>
                                                </button>
                                            </form>
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
                                    <h4 class="title-sm">Cellule système Informatique</h4>
                                    <p> Monsieur FEDDI Fouad / + 213 (0) 23 36 75 38 Alger</p>
                                </div>
                                <!-- /.open-hours -->
                            </div>

                            <div class="widget usefull_links_widget">
                                <h4 class="c_head">utiles</h4>
                                <ul class="list-unstyled usefull-links">
                                    <li>
                                        <i class="icon_lightbulb_alt"></i><a href="#"> IPA </a>
                                    </li>
                                    <li>
                                        <i class="icon_clock_alt"></i><a href="#">votre temps </a>
                                    </li>
                                    <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                                    <li>
                                        <i class="icon_info_alt"></i><a href="#">Sans réponse</a>
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
                        <h2 class="action-title">Contactez nous</h2>
                    </div>
                    <a href="./contact.php" class="action_btn"> <i class="arrow_right"></i></a>
                </div>
                <!-- /.action-content-wrapper -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.call-to-action -->
        <?php include 'partials/footer.html'?>
    </div>
    <!-- including model of tickets -->w
    <?php include 'partials/model-ticket.php'; ?>

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
    <script src="./vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>
    <script src="./vendor/chosen_v1.8.7/chosen.proto.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(function () {
            $(".chzn-select").chosen({
                width: "100%"
            });
        });
    </script>

    <!-- delet and edit ticket scirpt -->
    <script>
        function deleteTicket() {

            if (!window.confirm("Vous êtes sûr de supprimer cette ticket Ce processus est irréversible ?")) {
                event.preventDefault();
                console.log("submit prevented");
            }
        }
    </script>
</body>

</html>
?>