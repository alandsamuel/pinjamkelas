    <div class="content-wrapper" style="margin-top:80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" <?php echo form_open("auth/cek_login"); ?>
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="uname">Username:</label>
                        <div class="col-sm-8"> 
                          <input type="text" class="form-control" name="username" placeholder="Masukan username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="pwd">Password:</label>
                        <div class="col-sm-8"> 
                          <input type="password" class="form-control"  name="password" placeholder="Masukan password">
                        </div>
                      </div>
                      <div class="form-group"> 
                        <div class="col-sm-offset-6 col-sm-12">
                          <button type="submit" class="btn btn-default">Log In</button>
                        </div>
                      </div>
                    <?php echo form_close(); ?>
                    <br />
                </div>
                <div class="col-md-6">

                    <div class="col-md-12">
                        <div class="alert alert-info">
                            <strong>Silahkan login menggunakan akun Mahasiswa atau Dosen</strong>
                            <ul>
                                <li>Mahasiswa dapat mengirim komplain fasilitas dan melihat jadwal penggunaan ruang kelas</li>
                                <li>Dosen dapat melihat jadwal penggunaan dan memesan ruang kelas.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</body>
</html>