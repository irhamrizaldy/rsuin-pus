<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>User Profile Page</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../admin/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="monster-html/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="../index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../admin/assets/images/logo-text.JPG" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li> -->
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <?php
                        if (isset($_SESSION["usernameUser"])) { ?>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    include "dbh.inc.php";
                                    $image_query = mysqli_query($conn, "SELECT usersPhoto FROM users WHERE usersId = '" . $_SESSION['idUser'] . "'");
                                    while ($rows = mysqli_fetch_array($image_query)) {
                                        $img_name = $rows["usersPhoto"];
                                    ?>
                                        <img src="../assets/foto/<?= $img_name ?>" alt="user" class="profile-pic me-2"><?= ($_SESSION["nameUser"]) ?>
                                    <?php
                                    }
                                    ?>
                                </a>
                                <!-- <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul> -->
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Profil Saya</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="janji-saya.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span class="hide-menu">Janji Saya</span></a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href='../includes/logout.inc.php' class="btn btn-danger text-white mt-4"><i class="mr-3 fas fa-power-off" aria-hidden="true"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Data Pasien</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pasien</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <button type="button" class="btn btn-danger d-none d-md-inline-block text-white" data-toggle="modal" data-target="#myModal<?= $_SESSION["idUser"] ?>">Edit Profile</button>
                        </div>
                        <div class="modal fade" id="myModal<?= $_SESSION["idUser"] ?>" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Data Pasien</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="../includes/update-profile-user.inc.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="iduser" value="<?= $_SESSION["idUser"] ?>">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="<?= $_SESSION["emailUser"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" value="<?= $_SESSION["phoneUser"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <?php
                                                include "dbh.inc.php";
                                                $image_query = mysqli_query($conn, "SELECT usersPhoto FROM users WHERE usersId = '" . $_SESSION['idUser'] . "'");
                                                while ($rows = mysqli_fetch_array($image_query)) {
                                                    $img_name = $rows["usersPhoto"];
                                                ?>
                                                    <label>Profile Picture</label><br>
                                                    <img src="../assets/foto/<?= $img_name ?>" width="150" /><br>
                                                    <br><input type="file" id="foto" name="foto">
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success text-white" name="submit">Update</button>
                                                <button type="button" class="btn btn-default text-white" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <?php
                                include "dbh.inc.php";
                                $image_query = mysqli_query($conn, "SELECT usersPhoto FROM users WHERE usersId = '" . $_SESSION['idUser'] . "'");
                                while ($rows = mysqli_fetch_array($image_query)) {
                                    $img_name = $rows["usersPhoto"];
                                ?>
                                    <center class="mt-4"> <img src="../assets/foto/<?= $img_name ?>" class="rounded-circle" width="150" />
                                    <?php
                                }
                                    ?>
                                    <h4 class="card-title mt-2"><?= ($_SESSION["nameUser"]) ?></h4>
                                    <h6 class="card-subtitle">Pasien</h6>
                                    </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" id="name" name="name" placeholder="<?= $_SESSION["nameUser"] ?>" class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" id="email" name="email" placeholder="<?= $_SESSION["emailUser"] ?>" class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Phone</label>
                                        <div class="col-md-12">
                                            <input type="text" id="phone" name="phone" placeholder="<?= $_SESSION["phoneUser"] ?>" class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- <script src="../../assets/plugins/jquery/dist/jquery.min.js"></script> -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="monster-html/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="monster-html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="monster-html/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="monster-html/js/custom.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

</html>