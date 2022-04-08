<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Griya Husada</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.min.css') ?>">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bundles/datatables/datatables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/bundles/select2/dist/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bundles/pretty-checkbox/pretty-checkbox.min.css">

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <!-- <link rel='shortcut icon' type='image/x-icon' href='<?= base_url('assets/img/favicon.ico') ?>' /> -->
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                                <span class="badge headerBadge1">
                                    6 </span> </a>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                                <div class="dropdown-header">
                                    Messages
                                    <div class="float-right">
                                        <a href="#">Mark All As Read</a>
                                    </div>
                                </div>
                                <div class="dropdown-list-content dropdown-list-message">
                                    <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                                        </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                                Deo</span>
                                            <span class="time messege-text">Please check your mail !!</span>
                                            <span class="time">2 Min Ago</span>
                                        </span>
                                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                            <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                        </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                                Smith</span> <span class="time messege-text">Request for leave
                                                application</span>
                                            <span class="time">5 Min Ago</span>
                                        </span>
                                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                            <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                                        </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                                Ryan</span> <span class="time messege-text">Your payment invoice is
                                                generated.</span> <span class="time">12 Min Ago</span>
                                        </span>
                                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                            <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                                        </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                                Smith</span> <span class="time messege-text">hii John, I have upload
                                                doc
                                                related to task.</span> <span class="time">30
                                                Min Ago</span>
                                        </span>
                                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                            <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                                        </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                                Joshi</span> <span class="time messege-text">Please do as specify.
                                                Let me
                                                know if you have any query.</span> <span class="time">1
                                                Days Ago</span>
                                        </span>
                                    </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                            <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                        </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                                Smith</span> <span class="time messege-text">Client Requirements</span>
                                            <span class="time">2 Days Ago</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="dropdown-footer text-center">
                                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>


            </nav>