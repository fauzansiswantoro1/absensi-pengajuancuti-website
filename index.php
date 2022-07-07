
<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Monitoring Pegawai</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">E-ABSENSI</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
           
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                                Monitoring Absensi
                            </a>
                            <a class="nav-link" href="TambahPegawai.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Tambah Pegawai
                            </a>
                            <a class="nav-link" href="PengajuanCuti.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pengajuan Cuti
                            </a>
                             <a class="nav-link" href="logout.php">
                                Logout
                            </a>

                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                
            <main>
                  
                    <div class="container-fluid">
                      
                        <h1 class="mt-4">Monitoring Absensi Pegawai</h1>
                  

                        <div class="card mb-4">
                    
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Absen</th>    
                                                <th>Kode Absensi</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Waktu Absen</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $ambilsemuadatastock = mysqli_query($conn,"select * from tbl_absensi");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                               $kodeabsensi = $data['KodeAbsensi'];
                                               $nip = $data['NIP'];
                                                $nama = $data['Nama'];
                                                $idb = $data['KodeAbsensi'];
                                                $jabatan = $data['Jabatan'];
                                                 $tglabsen = $data['TanggalAbsen'];
                                                $waktuabsen = $data['WaktuAbsen'];
                                                $status = $data['Status'];
                                            ?>

                                            <tr>
                                                <td><?=$tglabsen;?></td>
                                                <td><?=$kodeabsensi;?></td>
                                                <td><?=$nip;?></td>
                                                <td><?=$nama;?></td>
                                                <td><?=$jabatan;?></td>
                                                <td><?=$waktuabsen;?></td>
                                                <td><?=$status;?></td>
                                                <td> 
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$idb;?>">
                                                    Edit
                                                    </button>
                                                    
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$kodeabsensi;?>">
                                                    Delete
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                  <div class="modal fade" id="edit<?=$idb;?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Edit Status Absensi</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <form method="post">
                                        <div class="modal-body">
                                        <label for="Status">Status Absensi :</label>
                                        <select id="Status" name="Status">
                                            <option value="Terlambat">Terlambat</option>
                                            <option value="Tepat Waktu">Tepat Waktu</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Izin Sakit">Izin Sakit</option>
                                        </select>
                                        <input type="hidden" name="KodeAbsensi" value="<?=$kodeabsensi;?>">
                                        <button type="submit" class="btn btn-primary" name="updateabsensi">Submit</button>
                                        </div>
                                        </form>
                                    
                                    
                                        
                                      </div>
                                    </div>
                                  </div>

                                  <!-- Delete Modal -->
                                  <div class="modal fade" id="delete<?=$idb;?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Hapus Absensi?</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <form method="post">
                                        <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus absensi <?=$nama;?>?
                                        <input type="hidden" name="KodeAbsensi" value="<?=$kodeabsensi;?>">
                                        <br>
                                        <button type="submit" class="btn btn-danger" name="hapusabsensi">Hapus</button>
                                        </div>
                                        </form>
                                    
                                    
                                        
                                      </div>
                                    </div>
                                  </div>

                                            <?php
                                            };
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
      <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Absensi Pegawai</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
        <input type="text" name="KodeAbsensi" placeholder="Kode Absensi" class="form-control" required>
        <br>
        <input type="text" name="NIP" placeholder="Nomor Induk Pegawai" class="form-control" required>
        <br>
        <input type="text" name="Nama" placeholder="Nama Pegawai" class="form-control" required>
        <br>
        <input type="text" name="Jabatan" placeholder="Jabatan" class="form-control" required>
        <br>
        <input type="date" name="TanggalAbsen" class="form-control" required>
        <br>
        
        <button type="submit" class="btn btn-primary" name="addabsensi">Submit</button>
        </div>
        </form>
    
    
        
      </div>
    </div>
  </div>
</html>
