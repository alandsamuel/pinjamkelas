<?php 

//format hari
$formhari = date('l');
$formmhari = date('d/M/Y');
switch ($formhari) {
    case 'Monday':
        $hari='Senin';
        break;

    case 'Tuesday':
        $hari='Selasa';
        break;

    case 'Wednesday':
        $hari='Rabu';
        break;

    case 'Thursday':
        $hari='Kamis';
        break;

    case 'Friday':
        $hari='Jumat';
        break;

    case 'Saturday':
        $hari='Sabtu';
        break;
    
    default:
        $hari='Minggu';
        break;
}

$tanggal = $hari." ".$formmhari;

$lantai = $_GET['lantai'];
$gedung = $_GET['gedung'];

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);
?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">
                    <i  class="fa fa-home" style="color:#3D3D3D; margin-right:10px;font-size:36px;"></i>
                    <i  class="fa fa-angle-right" style="color:#3D3D3D; margin-right:10px;font-size:36px;"></i>
                    <i  class="fa fa-search" style="color:#3D3D3D; margin-right:10px;font-size:32px;"></i>
                    CEK KELAS
                    </h4>
                    <form class="form-inline">
                        <div class="form-group">
                            <label>Pilih lokasi ruang kelas:</label>
                            <form action="" method="post">
                            <select class="form-control" name="gedung">
                                <option value="1">Gedung</option>
                                <option value="1">Gedung 1</option>
                                <option value="2">Gedung 2</option>
                                <option value="3">Gedung 3</option>
                                <option value="4">Gedung 4</option>
                                <option value="5">Gedung 5</option>
                            </select>
                            
                        </div>
                        <div class="form-group">
                        
                            <select class="form-control" name="lantai">
                                <option value="1">Lantai</option>
                                <option value="1">Lantai 1</option>
                                <option value="2">Lantai 2</option>
                                <option value="3">Lantai 3</option>
                                <option value="4">Lantai 4</option>
                            </select>
                            <input type="submit">
                        </form>

                        </div>
                    </form>
                    <hr />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kelas tersedia untuk hari <strong><?php echo" ".$tanggal." "; ?></strong>.
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Ruang</th>
                                            <th colspan="10">Jam Mata Kuliah</th>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                            $kelas = 0;
                                            $maxkelas = 9;
                                            while($kelas<$maxkelas){
                                            $kelas++;
                                            $kkelas = 'G111';
                                            echo"<tr>
                                            <th>".$kkelas."</th>";
                                            $jam=0;
                                                while($jam<10){
                                                $jam++;
                                                $ququ = "SELECT kode_kelas,jam FROM kelas where (jam,ruang,hari) IN (('$jam','$kkelas','$hari'))";
                                                $cari = $con->query("$ququ");

                                                    if (mysqli_num_rows($cari) > 0) {
                                                    //cek + keluarkan data

                                                            while($row = mysqli_fetch_assoc($cari)) {
                                                            
                                                                echo"<td>".$row['kode_kelas']."</td>";}                                
                                                            
                                                            } 
                                                        else {
                                                            if ($level == "admin"){
                                                                echo "<td bgcolor='#ccffcc'><a style='color:#000;text-decoration:none;'>Tersedia</a></td>";
                                                            } elseif ($level == "mhs") {
                                                                echo "<td bgcolor='#ccffcc'><a style='color:#000;text-decoration:none;'>Tersedia</a></td>";
                                                            } elseif ($level == "dosen") {
                                                                echo "<td bgcolor='#ccffcc'><a href='class_booking' style='color:#000;text-decoration:none;'>Tersedia</a></td>";
                                                            }
                                                        }
                                                }
                                            echo"</tr>";
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="alert alert-info">
                            <strong> Keterangan:</strong>
                            <ul>
                                <li>
                                    Abu-abu untuk ruang kelas terisi
                                </li>
                                <li>
                                    Hijau untuk ruang kelas belum terisi
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->