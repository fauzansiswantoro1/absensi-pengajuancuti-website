<?php
$host="localhost";
$user="root";
$password="";
$db="db_kantor";
$koneksi=new mysqli($host,$user,$password,$db) or die ("Gagal Koneksi");
$query = "select KodePengajuanCuti, NIP, Nama, Jabatan, Golongan, JenisCuti, AlasanCuti, DurasiCuti, TanggalMulaiCuti, TanggalCutiSelesai, AlamatKetikaCuti, Status from tbl_pengajuancuti";
$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0){
    while ($record = mysqli_fetch_array($result)){
        echo $record["KodePengajuanCuti"] ."*". $record["NIP"] ."*". $record["Nama"] ."*". $record["Jabatan"] ."*". $record["Golongan"] ."*". $record["JenisCuti"] ."*". $record["AlasanCuti"] ."*". $record["DurasiCuti"] ."*". $record["TanggalMulaiCuti"] ."*". $record["TanggalCutiSelesai"] ."*". $record["AlamatKetikaCuti"] ."*". $record["Status"] .";";
    }
}
?>