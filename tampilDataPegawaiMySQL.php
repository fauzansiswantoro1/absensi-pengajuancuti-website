<?php
$host="localhost";
$user="root";
$password="";
$db="db_kantor";
$koneksi=new mysqli($host,$user,$password,$db) or die ("Gagal Koneksi");
$query = "select NIP, Nama, Jabatan, Golongan, TempatLahir, TanggalLahir, JenisKelamin, Agama, Alamat, Telephone from tbl_pegawai";
$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0){
    while ($record = mysqli_fetch_array($result)){
        echo $record["NIP"] ."*". $record["Nama"] ."*". $record["Jabatan"] ."*". $record["Golongan"] ."*". $record["TempatLahir"] ."*". $record["TanggalLahir"] ."*". $record["JenisKelamin"] ."*". $record["Agama"] ."*". $record["Alamat"] ."*". $record["Telephone"] .";";
    }
}
?>