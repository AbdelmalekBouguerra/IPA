<?php
include "./config/config.php";
// delete account ==================================
if(isset($_POST['idDeleteAccount'])) {
    $idDeleteAccount = trim($_POST['idDeleteAccount']);
    echo "<script>
        console.log('i enterd heeeeres');
    </script>";
    try {
        $query = "DELETE FROM `users` WHERE id=:id;";
        $stmt = $connection->prepare($query);
        $stmt->bindParam('id', $idDeleteAccount, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
    }
}
// ===================================================
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IPA Admin Panel</title>
    <!-- base:css -->
    <link rel="stylesheet" href="admin/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin/css/vertical-layout-light/style.css">
    <link href="./vendor/tabulator/dist/css/tabulator_bootstrap5.min.css" rel="stylesheet">

    <!-- endinject -->
    <link rel="shortcut icon" href="./img/logo-ipa.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="admin.html"><img src="./img/logo-white-ipa.png" alt="logo"
                            style=" width: 50px;" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="admin.html"><img src="./img/logo-white-ipa.png"
                            alt="logo" style=" width: 50px;" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="typcn typcn-th-menu"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="img/profile.jpg" alt="profile" />
                            <span
                                class="nav-profile-name"><?php session_start(); echo $_SESSION['sess_user_name'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="typcn typcn-cog-outline text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="typcn typcn-eject text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-date dropdown">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                            <h6 class="date mb-0"><?php  echo date("F j, Y"); ?> </h6>
                            <i class="typcn typcn-calendar"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            href="home.php">
                            <i class="typcn typcn-arrow-left mx-0"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close typcn typcn-times"></i>
                <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                            aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove typcn typcn-delete-outline"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="events py-4 border-bottom px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                            <p class="text-gray mb-0">build a js based app</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">
                            <i class="typcn typcn-device-desktop menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acounts.php">
                            <i class="typcn typcn-user-outline menu-icon"></i>
                            <span class="menu-title">Gestion comptes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="typcn typcn-ticket menu-icon"></i>
                            <span class="menu-title">Gestion tickets</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="form-elements" style="">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="tickets.php">non trait??</a></li>
                                <li class="nav-item"><a class="nav-link" href="tickets-encour.php">Encour de
                                        traitement</a></li>
                                <li class="nav-item"><a class="nav-link" href="tickets-refuse.php">refuse</a>
                                <li class="nav-item"><a class="nav-link" href="tickets-ferme.php">ferm??</a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="materiel.php">
                            <i class="typcn typcn-device-desktop menu-icon"></i>
                            <span class="menu-title">Gestion materiel</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fournisseur.php">
                            <i class="typcn typcn-contacts menu-icon"></i>
                            <span class="menu-title">Gestion fournisseur</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">
                            <i class="typcn typcn-group-outline menu-icon"></i>
                            <span class="menu-title">Gestion Service</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="departement.php">
                            <i class="typcn typcn-group-outline menu-icon"></i>
                            <span class="menu-title">Gestion Departement</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="direction.php">
                            <i class="typcn typcn-group-outline menu-icon"></i>
                            <span class="menu-title">Gestion Direction</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <?php include './partials/model-add-acc.php'; ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <button type='button' data-toggle='modal' data-target='#add-account'
                            class='btn mb-3 ml-3 btn-inverse-success btn-fw' id="addAcc"> Ajoute un
                            utilsateur</button>
                        <div id="example-table" style="width: 1610px;"></div> <!-- here the table -->
                    </div>
                    <div class="row d-flex justify-content-center">
                        <h3 class="text-danger"><?php echo $msg_error?></h1>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ??
                                    2022 Assia Boutakhedmit rights reserved.</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- container-scroller -->
    <?php include 'partials/model-ticket-accounts.php'; ?>
    <!-- base:js -->
    <script src=" admin/vendors/js/vendor.bundle.base.js"> </script> <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="admin/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="admin/js/off-canvas.js"></script>
    <script src="admin/js/hoverable-collapse.js"></script>
    <script src="admin/js/template.js"></script>
    <script src="admin/js/settings.js"></script>
    <script src="admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="admin/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script type="text/javascript" src="./vendor/tabulator/dist/js/tabulator.min.js"></script>
    <script>
    //custom formatter definition
    var deleteIcon = function(cell, formatterParams, onRendered) { //plain text value

        var id2 = cell.getData().id;
        var row = cell.getData();
        return '<form method="POST" id="deleteAccount' + id2 + '">' +
            '<input type="hidden" name="idDeleteAccount" value="' + id2 + '">' +
            '<button type=\'button\' class=\'btn btn-inverse-danger btn-fw mr-3\' onClick="deleteAccount(this);"> Supprimer' +
            '</button>' +
            '<button type=\'button\' data-toggle=\'modal\' data-target=\'#add-account\' onClick=\'editAccount(this,"' +
            id2 + '")\';' +
            'style="margin-left: 10px;" class=\'btn btn-inverse-info btn-fw\'> Modifier </button>' +
            '</form>';

    };

    document.getElementById("addAcc").addEventListener("click", e => {
        document.getElementById("addingAccountForm").reset();
        var element = document.getElementById("idEditAccount");

        //If it isn't "undefined" and it isn't "null", then it exists.
        if (typeof(element) != 'undefined' && element != null) {
            element.parentNode.removeChild(element);
        }
    })
    // delete  user
    var id = "";

    function deleteAccount(e) {
        if (confirm("Vous etes sur ?")) {
            // console.log("parent id :" + e.parentNode.id);

            document.getElementById(e.parentNode.id).submit();
        } else {
            return false;
        }
    }

    function editAccount(e, id) {
        let data = table.getRow(id).getData();
        document.getElementById('nom').value = data.nom;
        document.getElementById('prenom').value = data.prenom;
        document.getElementById('Fonction').value = data.fonction;
        document.getElementById('IdService').value = data.idService;
        document.getElementById('matricule').value = data.matricule;
        document.getElementById('email').value = data.email;
        document.getElementById('userName').value = data.userName;
        document.getElementById('userRole').value = data.userRole;
        document.getElementById('userPassword').value = data.userPassword;
        document.getElementById('confirmPassword').value = data.userPassword;

        let form = document.getElementById("addingAccountForm");

        // creating input:hidden
        // check if exist old hidden value
        var element = document.getElementById("idEditAccount");

        //If it isn't "undefined" and it isn't "null", then it exists.
        if (typeof(element) != 'undefined' && element != null) {
            element.parentNode.removeChild(element);
        }
        let hiddenId = document.createElement("input");
        hiddenId.id = "idEditAccount";
        hiddenId.type = "hidden";
        hiddenId.name = "idEditAccount";
        hiddenId.value = id;

        form.appendChild(hiddenId);
    }
    //create Tabulator on DOM element with id "example-table"
    var table = new Tabulator("#example-table", {
        ajaxURL: "src/accounts.php", //ajax URL
        height: 633,
        layout: "fitColumns", //fit columns to width of table (optional)
        columns: [ //Define Table Columns
            {
                title: "nom",
                field: "nom",
                width: 150
            },
            {
                title: "prenom",
                field: "prenom",
                width: 150
            },
            {
                title: "matricule",
                field: "matricule",
                width: 150
            },
            {
                title: "email",
                field: "email",
                width: 150
            },
            {
                title: "fonction",
                field: "fonction",
                width: 150
            },
            {
                title: "userName",
                field: "userName",
                width: 150
            },
            {
                title: "userRole",
                field: "userRole",
                width: 150
            },
            {
                title: "Action",
                headerHozAlign: "center",
                formatter: deleteIcon,
                hozAlign: "center",
            },
        ],
    });
    </script>
</body>

</html>