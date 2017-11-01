    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"><i  class="fa fa-home" style="color:#3D3D3D; margin-right:10px;font-size:36px;"></i>Home</h4>
                </div>
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        Selamat Datang di Website Peminjaman Ruang Kelas Universitas Gunadarma.
                    </div>
                </div>
                <div class="col-md-6 col-sm-2 col-xs-6">
                    <a href="<?php echo base_url(); ?><?php
                                if ($level == "dosen") {
                                    echo "index.php/dosen/home/class_status?gedung=1&lantai=1";
                                }
                                elseif($level == "mhs") {
                                    echo "index.php/mahasiswa/home/class_status?gedung=1&lantai=1";
                                }elseif($level == "admin") {
                                    echo "index.php/admin/home/class_status?gedung=1&lantai=1";
                                }
                                ?>
                    ">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-table dashboard-div-icon" ></i>
                        <div class="progress progress-striped active"></div>
                        <h4>Cek Kelas Kosong </h4>
                        <p>Anda dapat melakukan pemesanan kelas di sini.</p>
                    </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-2 col-xs-6">
                    <a href="<?php echo base_url(); ?><?php
                                if ($level == "dosen") {
                                    echo "index.php/dosen/home/complain";
                                }
                                elseif($level == "mhs") {
                                    echo "index.php/mahasiswa/home/complain";
                                }elseif($level == "admin") {
                                    echo "index.php/admin/home/complain";
                                }
                                ?>
                    ">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-lightbulb-o dashboard-div-icon" ></i>
                        <div class="progress progress-striped active"></div>
                        <h4>Fasilitas Kelas </h4>
                        <p>Anda dapat menyampaiakan komplain kelas di sini.</p>
                    </div>
                    </a>
                </div>
            </div>
            <!--akhir menu horizontal-->

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <strong> Syarat dan ketentuan:</strong>
                        <ul>
                            <li>
                                Setiap kelas hanya memiliki satu akun untuk melakukan peminjaman ruang kelas.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->