<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> <?= $title; ?> </title>
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/dist/scss/style-gue.scss">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url() ?>/public/dist/js/adminlte.js"></script>
    <script src="<?= base_url() ?>public/plugins/chart.js/Chart.min.js"></script>
    <script src="<?= base_url() ?>public/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>public/dist/js/pages/dashboard3.js"></script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?= base_url() ?>public/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?= base_url() ?>public/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?= base_url() ?>public/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-light-warning elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url() ?>public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <h4 class="brand-text font-weight-light text-center text-light">MANPRO-APP</h4>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>public/dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?= $this->session->userdata('name') ?>
                        </a>
                        <small class="text-light">Your login as Admin</small>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin" class="nav-link <?= ($page == 'dashboard') ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <span class="badge badge-info right">87</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">MENU</li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Pendaftaran
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>pendaftaran/rawat-jalan" class="nav-link <?= ($page == 'rawat_jalan') ? 'active' : '' ?>">
                                        <i class="fas fa-ambulance nav-icon"></i>
                                        <p>Rawat Jalan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>pendaftaran/rawat-inap" class="nav-link <?= ($page == 'rawat_inap') ? 'active' : '' ?>">
                                        <i class="fas fa-clinic-medical nav-icon"></i>
                                        <p>Rawat Inap</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    IGD
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>igd/bedigd" class="nav-link <?= ($page == 'bedigd' || $page == 'pendaftaranigd' ) ? 'active' : '' ?>">
                                        <i class="fas fa-user-plus"></i>
                                        <p>Daftar IGD</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?= base_url() ?>igd/rekammedisawal" class="nav-link <?= ($page == 'rekammedisawal' ) ? 'active' : '' ?>">
                                        <i class="fas fa-stethoscope"></i>
                                        <p>Rekam Medis IGD</p>
                                    </a>
                                </li>



                                <li class="nav-item has treeview">
                                    <a href="<?= base_url() ?>pendaftaran/rawat-inap" class="nav-link <?= ($page == 'datapasieninap') ? 'active' : '' ?>">
                                        <i class="fas fa-user-injured"></i>
                                        <p> Data Pasien <i class="right fas fa-angle-left"></i></p>
                                    </a>
                                        <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              <i class="far fa-dot-circle nav-icon"></i>
                                              <p>Rawat Jalan</p>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="<?= base_url() ?>igd/datapasieninap" class="nav-link <?= ($page == 'datapasieninap') ? 'active' : '' ?>">
                                              <i class="far fa-dot-circle nav-icon"></i>
                                              <p>Rawat Inap</p>
                                            </a>
                                          </li>
                                         
                                        </ul>
                                </li>

                                <li class="nav-item has treeview active">
                                    <a href="<?= base_url() ?>pendaftaran/rawat-inap" class="nav-link <?= ($page == 'inventoryigd') ? 'active' : '' ?>">
                                        <i class="fas fa-database"></i>
                                        <p> DATA IGD <i class="right fas fa-angle-left"></i></p>
                                    </a>
                                        <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                            <a href="<?= base_url() ?>igd/inventoryigd" class="nav-link">
                                              <i class="far fa-dot-circle nav-icon"></i>
                                              <p>Inventory</p>
                                            </a>
                                          </li>
                                          <li class="nav-item">
                                            <a href="<?= base_url() ?>igd/jadwaligd" class="nav-link">
                                              <i class="far fa-dot-circle nav-icon"></i>
                                              <p>Jadwal</p>
                                            </a>
                                          </li>

                                         
                                        </ul>
                                </li>
                            </ul>
                        </li>

                        

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>pendaftaran/rawat-jalan" class="nav-link <?= ($page == 'rawat_jalan') ? 'active' : '' ?>">
                                        <i class="fas fa-book-medical nav-icon"></i>
                                        <p>Rekam Medis Jalan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>pendaftaran/rawat-inap" class="nav-link <?= ($page == 'rawat_inap') ? 'active' : '' ?>">
                                        <i class="fas fa-book-medical nav-icon"></i>
                                        <p>Rekam Medis Inap</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>