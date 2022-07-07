<?php if($_SERVER['REQUEST_METHOD']=='POST'){
    //Getting Values
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
$sql = "delete from tbl_pegawai where NIP='$nip'";
//import db connection string
require_once("dbconnect.php");
//executing query to database
if (mysqli_query($con,$sql)){
    echo 'Pegawai Berhasil Didelete';
}else{
    echo 'Tidak Bisa delete Pegawai';
}
//closing database
mysqli_close($con);
}