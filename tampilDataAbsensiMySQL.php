<?php
$host="localhost";
$user="root";
$password="";
$db="db_kantor";
$koneksi=new mysqli($host,$user,$password,$db) or die ("Gagal Koneksi");
$query = "select KodeAbsensi, NIP, Nama, Jabatan, TanggalAbsen, WaktuAbsen, Status from tbl_absensi";
$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0){
    while ($record = mysqli_fetch_array($result)){
        echo $record["KodeAbsensi"] ."*". $record["NIP"] ."*". $record["Nama"] ."*". $record["Jabatan"] ."*". $record["TanggalAbsen"] ."*". $record["WaktuAbsen"] ."*". $record["Status"] .";";
    }
}
?>