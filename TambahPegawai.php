
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
                        <h1 class="mt-4">Tambah Pegawai</h1>
                        

                       <div class="card mb-4">
                            <div class="card-header">
                          <!-- Button to Open the Modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah Pegawai
                          </button>                              
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Golongan</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Alamat</th>
                                                <th>Telephone</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            $ambilsemuadatastock = mysqli_query($conn,"select * from tbl_pegawai");
                                            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                                                $nip = $data['NIP'];
                                               $namapegawai = $data['Nama'];
                                               $jabatan = $data['Jabatan'];
                                                $golongan = $data['Golongan'];
                                                $tempatlahir = $data['TempatLahir'];
                                               $tgllahir = $data['TanggalLahir'];
                                               $kelamin = $data['JenisKelamin'];
                                                $agama = $data['Agama'];
                                                $alamat = $data['Alamat'];
                                               $telp = $data['Telephone'];
                                            ?>

                                            <tr>
                                                <td><?=$nip;?></td>
                                                <td><?=$namapegawai;?></td>
                                                <td><?=$jabatan;?></td>
                                                <td><?=$golongan;?></td>
                                                <td><?=$tempatlahir;?></td>
                                                <td><?=$tgllahir;?></td>
                                                <td><?=$kelamin;?></td>
                                                <td><?=$agama;?></td>
                                                <td><?=$alamat;?></td>
                                                <td><?=$telp;?></td>
                                                <td> 
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$nip;?>">
                                                    Edit
                                                    </button>
                                                    
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$nip;?>">
                                                    Delete
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                  <div class="modal fade" id="edit<?=$nip;?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Edit Pegawai</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <form method="post">
                                        <div class="modal-body">
                                        <input type="text" name="Nama" placeholder="Nama Pegawai" class="form-control" required>
                                        <br>
                                        <input type="text" name="Jabatan" placeholder="Jabatan" class="form-control" required>
                                        <br>
                                        <input type="text" name="Golongan" placeholder="Golongan" class="form-control" required>
                                        <br>
                                        <input type="text" name="TempatLahir" placeholder="Tempat Lahir" class="form-control" required>
                                        <br>
                                        <input placeholder="Tanggal Lahir" name="TanggalLahir" class="textbox-n" type="text" onfocusin="(this.type='date')" onfocusout="(this.type='text')"  id="date">
                                        <br><br>
                                        <label for="JenisKelamin">Jenis Kelamin :</label>
                                        <select id="JenisKelamin" name="JenisKelamin">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <br><br>
                                        <label for="Agama">Agama :</label>
                                        <select id="Agama" name="Agama">
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="PROTESTAN">PROTESTAN</option>
                                            <option value="KATOLIK">KATOLIK</option>
                                            <option value="HINDU">HINDU</option>
                                            <option value="BUDHA">BUDHA</option>
                                            <option value="KHONGHUCU">KHONGHUCU</option>
                                        </select>
                                        <br><br>
                                        <input type="text" name="Alamat" placeholder="Alamat" class="form-control" required>
                                        <br>
                                        <input type="text" name="Telephone" placeholder="Telephone" class="form-control" required>
                                        <br>
                                        <input type="hidden" name="NIP" value="<?=$nip;?>">
                                        <button type="submit" class="btn btn-primary" name="updatepegawai" onclick='jacascript:alert("Pegawai Berhasil Diupdate")'>Submit</button>
                                        </div>
                                        </form>
                                    
                                    
                                        
                                      </div>
                                    </div>
                                  </div>

                                            <!-- Delete Modal -->
                                <div class="modal fade" id="delete<?=$nip;?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">Hapus Pegawai?</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <form method="post">
                                        <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus Pegawai <?=$namapegawai;?>?
                                        <input type="hidden" name="NIP" value="<?=$nip;?>">
                                        <br>
                                        <button type="submit" class="btn btn-danger" name="hapuspegawai">Hapus</button>
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
          <h4 class="modal-title">Tambah Pegawai</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
        <input type="text" name="NIP" placeholder="Nomor Induk Pegawai" class="form-control" required>
        <br>
        <input type="text" name="Nama" placeholder="Nama Pegawai" class="form-control" required>
        <br>
        <input type="text" name="Jabatan" placeholder="Jabatan" class="form-control" required>
        <br>
        <input type="text" name="Golongan" placeholder="Golongan" class="form-control" required>
        <br>
        <input type="text" name="TempatLahir" placeholder="Tempat Lahir" class="form-control" required>
        <br>
        <input placeholder="Tanggal Lahir" name="TanggalLahir" class="textbox-n" type="text" onfocusin="(this.type='date')" onfocusout="(this.type='text')"  id="date">
        <br><br>
        <label for="JenisKelamin">Jenis Kelamin :</label>
        <select id="JenisKelamin" name="JenisKelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br><br>
        <label for="Agama">Agama :</label>
        <select id="Agama" name="Agama">
            <option value="ISLAM">ISLAM</option>
            <option value="PROTESTAN">PROTESTAN</option>
            <option value="KATOLIK">KATOLIK</option>
            <option value="HINDU">HINDU</option>
            <option value="BUDHA">BUDHA</option>
            <option value="KHONGHUCU">KHONGHUCU</option>
        </select>
        <br><br>
        <input type="text" name="Alamat" placeholder="Alamat" class="form-control" required>
        <br>
        <input type="text" name="Telephone" placeholder="Telephone" class="form-control" required>
        <br>
        
        <button type="submit" class="btn btn-primary" name="addpegawai" onclick='jacascript:alert("Pegawai Berhasil Ditambah!")'>Submit</button>
        </div>
        </form>
    
    
        
      </div>
    </div>
    
</html>
