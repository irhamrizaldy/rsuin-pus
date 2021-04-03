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
    <title>User Page</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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

                        <li class="nav-item hidden-sm-down">
                            <div style="color: white; margin-left: 20px; margin-top: 5px">
                                <h4>Welcome, <?= $_SESSION["nameUser"] ?></h4>
                            </div>
                        </li>
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
                        <h3 class="page-title mb-0 p-0">Janji Saya</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Janji Saya</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <button type="button" class="btn btn-outline-primary m-1 text-black">Semua</button>
                        <button type="button" class="btn btn-outline-info m-1 text-black">Aktif</button>
                        <button type="button" class="btn btn-outline-success m-1 text-black">Selesai</button>
                        <button type="button" class="btn btn-outline-secondary m-1 text-black">Batal</button>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-0">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive mt">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Dokter</th>
                                                <th class="border-top-0">Jadwal</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            include "dbh.inc.php";
                                            $sql = "SELECT appointment.id_dokter AS ap_iddoc, appointment.id_jadwal AS ap_jadwal, schedule.idSchedule AS sc_jadwal, schedule.dateSchedule AS sc_date, schedule.daySchedule AS sc_day, schedule.starttime AS sc_time, doctors.id_dokter AS doc_iddoc, doctors.nama_dokter AS doc_name, status_janji, id_pendaftaran, pembayaran FROM appointment INNER JOIN schedule ON appointment.id_jadwal = schedule.idSchedule INNER JOIN doctors ON appointment.id_dokter = doctors.id_dokter WHERE id_user = '" . $_SESSION['idUser'] . "'";
                                            $no = 0;
                                            $app_query = mysqli_query($conn, $sql);
                                            while ($rows = mysqli_fetch_array($app_query)) {
                                                $no++;
                                                $id_app = $rows["id_pendaftaran"];
                                                $payment = $rows["pembayaran"];
                                                $name_doc = $rows["doc_name"];
                                                $sc_date = $rows["sc_date"];
                                                $sc_day = $rows["sc_day"];
                                                $sc_time = $rows["sc_time"];
                                                $status = $rows["status_janji"];
                                            ?>
                                                <tr>
                                                    <!-- <td style="width:50px;"><span class="round">D</span></td> -->
                                                    <td class="align-middle"><?= $no ?></td>
                                                    <td class="align-middle"><?= $name_doc ?></td>
                                                    <td class="align-middle"><?= $sc_day ?>, <?= $sc_date ?></td>
                                                    <td class="align-middle"><?= $status ?></td>
                                                    <td class="align-middle"><button type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#myModal<?= $id_app ?>">Click here</button></td>
                                                </tr>
                                                <div class="modal fade" id="myModal<?= $id_app ?>" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Detail Janji Pasien</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form role="form">
                                                                    <div class="form-group">
                                                                        <label>Dokter</label>
                                                                        <input type="text" name="ndokter" class="form-control" value="<?= $name_doc ?>" disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Waktu</label>
                                                                        <input type="text" name="waktu" class="form-control" value="<?= $sc_day ?> - <?= $sc_time ?> , <?= $sc_date ?>" disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Pasien</label>
                                                                        <input type="text" name="npasien" class="form-control" value="<?= $_SESSION["nameUser"] ?>" disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input type="email" name="epasien" class="form-control" value="<?= $_SESSION["emailUser"] ?>" disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Telepon</label>
                                                                        <input type="text" name="tpasien" class="form-control" value="<?= $_SESSION["phoneUser"] ?>" disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Metode Pembayaran</label>
                                                                        <input type="text" name="mpasien" class="form-control" value="<?= $payment ?>" disabled>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default text-white" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent blogss -->
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
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="monster-html/js/pages/dashboards/dashboard1.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

</html>