<?php if($_SERVER['REQUEST_METHOD']=='POST'){
    //Getting Values
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
$sql = "delete from tbl_pengajuancuti where KodePengajuanCuti='$kodecuti'";
//import db connection string
require_once("dbconnect.php");
//executing query to database
if (mysqli_query($con,$sql)){
    echo 'Pengajuan Cuti Berhasil Ditambahkan';
}else{
    echo 'Tidak Bisa Menambah Pengajuan Cuti';
}
//closing database
mysqli_close($con);
}