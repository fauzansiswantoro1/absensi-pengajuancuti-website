<?php if($_SERVER['REQUEST_METHOD']=='POST'){
    //Getting Values
    $kodeabsensi = $_POST['KodeAbsensi'];
	$nip = $_POST['NIP'];
	$namapegawai = $_POST['Nama'];
	$jabatan = $_POST['Jabatan'];
	$tglabsen = $_POST['TanggalAbsen'];
	$waktuabsen = $_POST['WaktuAbsen'];
    $status = $_POST['Status'];
$sql = "insert into tbl_absensi (KodeAbsensi, NIP, Nama, Jabatan, TanggalAbsen, WaktuAbsen, Status) values('$kodeabsensi','$nip','$namapegawai','$jabatan','$tglabsen','$waktuabsen','$status')";
//import db connection string
require_once("dbconnect.php");
//executing query to database
if (mysqli_query($con,$sql)){
    echo 'Absensi Berhasil Ditambahkan';
}else{
    echo 'Tidak Bisa Menambah Absensi';
}
//closing database
mysqli_close($con);
}