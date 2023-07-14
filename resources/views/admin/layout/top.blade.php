<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admi/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('admi/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>sendal</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('admi/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admi/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset("admi/css/demo.css") }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{ asset('admi/img/sidebar-5.jpg') }}">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Admin Sendal
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('admin/dashboard') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('frontend/home') }}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Landing Page</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="{{ url('admin/produk') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Produk</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('admin/pesanan') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Pesanan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('admin/kategori') }}">
                            <i class="nc-icon nc-atom"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">