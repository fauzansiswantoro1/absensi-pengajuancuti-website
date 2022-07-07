<?php

session_start();

//Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","db_kantor");

//Menambah Absensi Baru
if (isset($_POST['addabsensi'])){
	$namabarang = $_POST['namabarang'];
	$deskripsi = $_POST['deskripsi'];
	$stock = $_POST['stock'];

	$addtotable = mysqli_query($conn, "insert into stock (namabarang, deskripsi, stock) values('$namabarang','$deskripsi','$stock')");
	if($addtotable){
		header('location:index.php');
	} else {
		echo 'Gagal';
		header('location:index.php');
	}
};

//Menambah Pegawai Baru
if (isset($_POST['addpegawai'])){
	$nip = $_POST['NIP'];
	$namapegawai = $_POST['Nama'];
	$jabatan = $_POST['Jabatan'];
	 $golongan = $_POST['Golongan'];
	 $tempatlahir = $_POST['TempatLahir'];
	$tgllahir = $_POST['TanggalLahir'];
	$kelamin = $_POST['JenisKelamin'];
	 $agama = $_POST['Agama'];
	 $alamat = $_POST['Alamat'];
	$telp = $_POST['Telephone'];

	$addtotable = mysqli_query($conn, "insert into tbl_pegawai (NIP, Nama, Jabatan, Golongan, TempatLahir, TanggalLahir, JenisKelamin, Agama, Alamat, Telephone) values('$nip','$namapegawai','$jabatan','$golongan','$tempatlahir','$tgllahir','$kelamin','$agama','$alamat','$telp')");
	if($addtotable){
		header('location:TambahPegawai.php');
	} else {
		echo 'Gagal';
		header('location:TambahPegawai.php');
	}
};

//Menghapus Pegawai
if(isset($_POST['hapuspegawai'])){
	$nip = $_POST['NIP'];

	$hapus = mysqli_query($conn, "delete from tbl_pegawai where NIP='$nip'");

	if ($hapus) {
		header('location:TambahPegawai.php');
	} else {
		echo 'Gagal';
		header('location:TambahPegawai.php');
	}
}

//update data pegawai
if(isset($_POST['updatepegawai'])){
	$nip = $_POST['NIP'];
	$namapegawai = $_POST['Nama'];
	$jabatan = $_POST['Jabatan'];
	 $golongan = $_POST['Golongan'];
	 $tempatlahir = $_POST['TempatLahir'];
	$tgllahir = $_POST['TanggalLahir'];
	$kelamin = $_POST['JenisKelamin'];
	 $agama = $_POST['Agama'];
	 $alamat = $_POST['Alamat'];
	$telp = $_POST['Telephone'];

	$update = mysqli_query($conn,"update tbl_pegawai set Nama ='$namapegawai', Jabatan ='$jabatan', Golongan ='$golongan', TempatLahir ='$tempatlahir', TanggalLahir ='$tgllahir', JenisKelamin ='$kelamin', Agama ='$agama', Alamat ='$alamat', Telephone ='$telp' where NIP='$nip'");
	if($update){
		header('location:TambahPegawai.php');
	} else {
		echo 'Gagal';
		header('location:TambahPegawai.php');
	}
}

//Menambah pengajuan cuti
if (isset($_POST['addpengajuancuti'])){
	$kodecuti = $_POST['KodePengajuanCuti'];
	$nip = $_POST['NIP'];
	$namapegawai = $_POST['Nama'];
	$jabatan = $_POST['Jabatan'];
	$golongan = $_POST['Golongan'];
	$jeniscuti = $_POST['JenisCuti'];
    $alasan = $_POST['AlasanCuti'];
    $durasi = $_POST['DurasiCuti'];
    $tglmulai = $_POST['TanggalMulaiCuti'];
    $tglselesai = $_POST['TanggalCutiSelesai'];
    $alamat = $_POST['AlamatKetikaCuti'];
    $status = $_POST['Status'];

	$addtotable = mysqli_query($conn, "insert into tbl_pengajuancuti (KodePengajuanCuti, NIP, Nama, Jabatan, Golongan, JenisCuti, AlasanCuti, DurasiCuti, TanggalMulaiCuti, TanggalCutiSelesai, AlamatKetikaCuti, Status) values('$kodecuti','$nip','$namapegawai','$jabatan','$golongan','$jeniscuti','$alasan','$durasi','$tglmulai','$tglselesai','$alamat','$status')");
	if($addtotable){
		header('location:PengajuanCuti.php');
	} else {
		echo 'Gagal';
		header('location:PengajuanCuti.php');
	}
};

//Menghapus Pengajuancuti
if(isset($_POST['hapuspengajuancuti'])){
	$kodecuti = $_POST['KodePengajuanCuti'];

	$hapus = mysqli_query($conn, "delete from tbl_pengajuancuti where KodePengajuanCuti='$kodecuti'");

	if ($hapus) {
		header('location:PengajuanCuti.php');
	} else {
		echo 'Gagal';
		header('location:PengajuanCuti.php');
	}
}

//update data pengajuan cuti
if(isset($_POST['updatepengajuancuti'])){
	$kodecuti = $_POST['KodePengajuanCuti'];
	$status = $_POST['Status'];
	

	$update = mysqli_query($conn,"update tbl_pengajuancuti set Status ='$status' where KodePengajuanCuti='$kodecuti'");
	if($update){
		header('location:PengajuanCuti.php');
	} else {
		echo 'Gagal';
		header('location:PengajuanCuti.php');
	}
}



//update info absensi
if(isset($_POST['updateabsensi'])){
	$kodeabsensi = $_POST['KodeAbsensi'];
	$status = $_POST['Status'];

	$update = mysqli_query($conn,"update tbl_absensi set Status='$status' where KodeAbsensi='$kodeabsensi'");
	if($update){
		header('location:index.php');
	} else {
		echo 'Gagal';
		header('location:index.php');
	}
}

//Menghapus absensi
if(isset($_POST['hapusabsensi'])){
	$kodeabsensi = $_POST['KodeAbsensi'];

	$hapus = mysqli_query($conn, "delete from tbl_absensi where KodeAbsensi='$kodeabsensi'");

	if ($hapus) {
		header('location:index.php');
	} else {
		echo 'Gagal';
		header('location:index.php');
	}
}


?>