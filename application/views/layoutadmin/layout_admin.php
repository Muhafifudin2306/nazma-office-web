<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/NaZMa_Logo_Transparent.png">
    <title>
        <?= $page_title; ?>
    </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/admin/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/admin/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/stisla/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/stisla/css/components.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="NaZMa_Logo_Transparent"
                                src="<?= base_url() ?>assets/img/NaZMa_Logo_Transparent.png"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi,
                                <?= $username; ?>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('admin/auth/logout'); ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">ADMINPANEL</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">ADP</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="nav-link" href="<?= site_url('admin/adminpanel') ?>"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        <!-- <li <?= $role != 'A' ? "hidden" : null ?>>
                            <a class="nav-link" href="<?= site_url('kategori') ?>"><i class="fas fa-th"></i> <span>Kategori</span> </a>
                        </li> -->
                        <li>
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i> <span>General Settings
                                </span> </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= site_url('admin/project') ?>"><i
                                            class="fas fa-square"></i> <span>Project</span> </a></li>
                                <li><a class="nav-link" href="<?= site_url('admin/testimony') ?>"><i
                                            class="fas fa-square"></i> <span>Testimony</span> </a></li>
                                <li><a class="nav-link" href="<?= site_url('admin/certifiedtrainers') ?>"><i
                                            class="fas fa-square"></i> <span> Certified Trainers</span> </a></li>
                                <li><a class="nav-link" href="<?= site_url('admin/creativecrew') ?>"><i
                                            class="fas fa-square"></i> <span>Creative Crew</span> </a></li>
                                <li><a class="nav-link" href="<?= site_url('admin/partnership') ?>"><i
                                            class="fas fa-square"></i> <span>Partnership</span> </a></li>
                                <li><a class="nav-link" href="<?= site_url('admin/blog') ?>"><i
                                            class="fas fa-square"></i> <span>Blog and Gallery</span> </a></li>
                                <li><a class="nav-link" href="<?= site_url('admin/event') ?>"><i
                                            class="fas fa-square"></i> <span>Event</span> </a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <?= $contents; ?>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; NaZMa Office
                    <?= date('Y'); ?> | Template By <a href="https://github.com/stisla/stisla">Stisla</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>



    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/admin/stisla/assets/js/stisla.js') ?>"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('assets/admin/node_modules/jquery-sparkline/jquery.sparkline.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/node_modules/chart.js/dist/Chart.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/node_modules/owl.carousel/dist/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/node_modules/summernote/dist/summernote-bs4.js') ?>"></script>
    <script src="<?= base_url('assets/admin/node_modules/chocolat/dist/js/jquery.chocolat.min.js') ?>"></script>
    <script src="<?= base_url('assets/alert/dist/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/alert/alert.js') ?>"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>assets/admin/stisla/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/admin/stisla/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/admin/stisla/js/jquery.min.js"></script>

    <!-- DataTable JS -->
    <script src="<?= base_url('assets/admin/node_modules/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>">
    </script>
    <script src="<?= base_url('assets/admin/node_modules/tables/js/datatable-init/datatable-basic.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/stisla/page/modules-datatables.js') ?>"></script>
    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>assets/admin/stisla/js/page/index.js"></script>
</body>

</html>