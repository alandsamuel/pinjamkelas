    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">
                    <i  class="fa fa-home" style="color:#3D3D3D; margin-right:10px;font-size:36px;"></i>
                    <i  class="fa fa-angle-right" style="color:#3D3D3D; margin-right:10px;font-size:36px;margin-left:10px;"></i>
                    Keluhan Fasilitas
                    </h4>

                    <?php
                    if($masuk==1){
                    echo"<div class='alert alert-info'>
                        <strong> Form Keluhan Fasilitas <b>Berhasil</b> dikirim. Terima kasih telah berpartisipasi dalam pengisian form tersebut.
                        </strong>
                    </div>";
                    } elseif ($masuk==0) {
                      echo"<div class='alert alert-danger'>
                        <strong> Form Keluhan Fasilitas <b>GAGAL</b> dikirim. Harap cek kembali form yang anda isi.
                        </strong>
                    </div>";
                    } else{
                      echo" ";
                    }
                    ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Form Keluhan Fasilitas Kelas
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                              <form action="" method="post">
                              <div class="form-group">
                                <label class="control-label col-sm-4">Lokasi ruang:</label>
                                <div class="col-sm-2">
                                  <!--<input type="text" class="form-control" id="ruang" placeholder="Pilih Ruangan">-->
                                  <select class="form-control" id="sel1" name='gedung'>
                                      <?php
                                        for ($g = 1; $g <= 5; $g++) {
                                          echo "<option>Gedung " . $g .  "</option>";
                                        }
                                      ?>
                                  </select><select class="form-control" id="sel1" name='lantai'>
                                      <?php
                                        for ($l = 1; $l <= 4; $l++) {
                                          echo "<option>Lantai " . $l .  "</option>";
                                        }
                                      ?>
                                  </select><select class="form-control" id="sel1" name='ruangan'>
                                      <?php
                                      for ($r = 1; $r <= 9; $r++) {
                                          echo "<option>Ruang ".$r."</option>";
                                        }
                                      ?>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-sm-4">Kondisi rusak:</label>
                                <div class="col-sm-4"> 
                                  <div class="col-sm-4">
                                    <label class="checkbox-inline"><input type="checkbox" value="ac">AC</label>
                                  </div>
                                  <div class="col-sm-4">
                                    <label class="checkbox-inline"><input type="checkbox" value="lampu">Lampu</label>
                                  </div>
                                  <div class="col-sm-4">
                                    <label class="checkbox-inline"><input type="checkbox" value="ohp">OHP</label>
                                  </div>
                                      <p style="color:#a9a9a9;">Pilih fasilitas dalam kondisi rusak.</p>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-4">Kritik dan Saran </label>
                                <div class="col-sm-4"> 
                                  <textarea class="form-control" rows="5" id="comment" name="saran"></textarea>
                                </div>
                              </div>
                              
                              <div class="form-group"> 
                                <div class="col-sm-offset-4 col-sm-4">
                                  <button type="submit" class="btn btn-default">Submit</button>
                                  <button type="cancel" class="btn btn-default">Cancel</button>
                                </div>
                              </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    //backend

    public function terimadata(){
        <?php 

        // Database connectiong
        $hostmysql = "localhost";
        $username = "root";
        $password = "";
        $database = "mrr_db";

        $con=mysqli_connect("$hostmysql","$username","$password","$database");

        if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
        } 

        $gedung=$_GET['gedung'];
        $lantai=$_GET['lantai'];
        $ruangan=$_GET['ruangan'];
        $ac=$_GET['ac'];
        $lampu=$_GET['lampu'];
        $ohp=$_GET['ohp'];
        $saran=$_GET['saran'];
        
        //reformating

        $lokasi = $gedung.$lantai.$ruangan;
        $komplain = $ac.",".$lampu.",".$ohp;

        $query = "INSERT INTO komplain('lokasi', 'komplen', 'saran') VALUES ('$lokasi','$komplain','$saran')";
        $query = $con->query('$query');

        if ($query === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    ?>

    <!-- CONTENT-WRAPPER SECTION END-->