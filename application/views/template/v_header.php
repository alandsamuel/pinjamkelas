<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Peminjaman Ruang Kelas</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Anda telah login sebagai, 
                    &nbsp;&nbsp;
                    <strong><?php echo $username; ?></strong>
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <div class="col-md-4 col-mm-12" style="text-align:center; margin-top:5px;">
                    <img src="<?php echo base_url(); ?>assets/img/logo2.png" width="80%">
                </div>
                <div class="col-md-6 col-mm-12">
                    <strong>
                        <h1 id="judul" style="text-align:left;">Peminjaman Ruang Kelas</h1>
                        <h4 id="juduldesc" style="text-align:left;">Universitas Gunadarma</h4>
                    </strong>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="margin-top:-35px;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right" style="font-weight:900;">
                            <li><a href="<?php echo base_url(); ?><?php
                                if ($level == "dosen") {
                                    echo "index.php/dosen/home";
                                }
                                elseif($level == "mhs") {
                                    echo "index.php/mahasiswa/home";
                                }elseif($level == "admin") {
                                    echo "index.php/admin/home";
                                }
                                ?>
                            ">Home</a></li><!-- class="menu-top-active"  -->
                            <li><a href="<?php echo base_url(); ?><?php
                                if ($level == "dosen") {
                                    echo "index.php/dosen/home/about";
                                }
                                elseif($level == "mhs") {
                                    echo "index.php/mahasiswa/home/about";
                                }elseif($level == "admin") {
                                    echo "index.php/admin/home/about";
                                }
                                ?>
                                ">About</a></li>
                            <li><a href="<?php echo base_url(); ?><?php
                                if ($level == "dosen") {
                                    echo "index.php/dosen/home/Contact";
                                }
                                elseif($level == "mhs") {
                                    echo "index.php/mahasiswa/home/Contact";
                                }elseif($level == "admin") {
                                    echo "index.php/admin/home/Contact";
                                }
                                ?>">Contact</a></li>
                            <li><a href="<?php echo base_url(); ?><?php 
                                if ($level == "dosen") {
                                    echo "index.php/dosen/home/logout";
                                }
                                elseif($level == "mhs") {
                                    echo "index.php/mahasiswa/home/logout";
                                }elseif($level == "admin") {
                                    echo "index.php/admin/home/logout";
                                }
                                ?>
                                ">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->