-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 03:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantor`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('123@email.com', '123'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `KodeAbsensi` varchar(30) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jabatan` varchar(16) NOT NULL,
  `TanggalAbsen` varchar(12) NOT NULL,
  `WaktuAbsen` varchar(12) NOT NULL,
  `Status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`KodeAbsensi`, `NIP`, `Nama`, `Jabatan`, `TanggalAbsen`, `WaktuAbsen`, `Status`) VALUES
('1232442341234', '19082010102', 'Muhamad Fauzan', 'SEKRETARIS', '21-06-2022', '16:53:39', 'Tepat Waktu'),
('200100200', '19082010002', 'Izzah Tazkiyah', 'KETUA', '19-12-2020', '20:33:11', 'Tepat Waktu'),
('20193842938', '19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', '13-12-2020', '17:44:42', 'Terlambat'),
('234543423425', '19082010002', 'Izzah Tazkiyah', 'KETUA', '21-06-2022', '18:47:06', 'Terlambat'),
('3023123121', '19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', '29-05-2022', '23:40:33', 'Terlambat'),
('3423412312', '19082010002', 'Izzah Tazkiyah', 'KETUA', '21-06-2022', '19:11:41', 'Terlambat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `KodeAdmin` varchar(6) NOT NULL,
  `NamaAdmin` varchar(30) NOT NULL,
  `PwdAdmin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`KodeAdmin`, `NamaAdmin`, `PwdAdmin`) VALUES
('ADM001', 'ADMIN', 'ADMIN'),
('ADM002', 'USER', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_golongan`
--

CREATE TABLE `tbl_golongan` (
  `KodeGolongan` varchar(12) NOT NULL,
  `NamaGolongan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_golongan`
--

INSERT INTO `tbl_golongan` (`KodeGolongan`, `NamaGolongan`) VALUES
('KD001', 'I/A'),
('KD002', 'I/B'),
('KD003', 'I/C'),
('KD004', 'II/A'),
('KD005', 'II/B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `KodeJabatan` varchar(12) NOT NULL,
  `NamaJabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`KodeJabatan`, `NamaJabatan`) VALUES
('JB0001', 'KETUA'),
('JB0002', 'SEKRETARIS'),
('JB0003', 'HRD'),
('JB0004', 'KEPALA DEPARTMENT'),
('JB0005', 'OB'),
('JB0006', 'BENDAHARA'),
('JB0007', 'PENGHIBUR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jeniscuti`
--

CREATE TABLE `tbl_jeniscuti` (
  `KodeCuti` varchar(16) NOT NULL,
  `JenisCuti` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jeniscuti`
--

INSERT INTO `tbl_jeniscuti` (`KodeCuti`, `JenisCuti`) VALUES
('C001', 'CUTI TAHUNAN'),
('C002', 'CUTI SAKIT'),
('C003', 'CUTI BESAR'),
('C004', 'CUTI HAMIL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `NIP` varchar(12) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `Golongan` varchar(7) NOT NULL,
  `TempatLahir` varchar(12) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `JenisKelamin` varchar(16) NOT NULL,
  `Agama` varchar(12) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Telephone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`NIP`, `Nama`, `Jabatan`, `Golongan`, `TempatLahir`, `TanggalLahir`, `JenisKelamin`, `Agama`, `Alamat`, `Telephone`) VALUES
('129312312312', 'Fahp Jelek', 'PENGHIBUR', 'IIIB', 'Surabaya', '2022-06-26', 'Laki-Laki', 'BUDHA', 'Kenjeran', '0210349534'),
('19082010002', 'Izzah Tazkiyah', 'KETUA', 'II/B', 'Surabaya', '2000-12-18', 'Perempuan', 'ISLAM', 'Jl.Waru, Sidoarjo, Jawa Timur', '081287374758'),
('19082010003', 'Real Ananda Kristi', 'BENDAHARA', 'I/C', 'Surabaya', '2001-06-13', 'Laki-Laki', 'ISLAM', 'Jl. Rungkut Madya, Surabaya', '08181293284'),
('19082010009', 'Mia Khalifa', 'PENGHIBUR', 'IVB', 'Jakarta', '2022-05-16', 'Perempuan', 'HINDU', 'JL jalanan mojokerto', '0210349534'),
('19082010011', 'Upin Ipin', 'PENGHIBUR', 'IVB', 'Jakarta', '2015-06-09', 'Laki-Laki', 'KATOLIK', 'JL jalanan durian runtuh', '08129384723'),
('19082010030', 'Muhammad Fachri Ali Haidar', 'KEPALA DEPARTMENT', 'II/A', 'Surabaya', '2000-11-28', 'Laki-Laki', 'ISLAM', 'Jl. Rungkut Madya, Surabaya, Jawa timur', '08189283747'),
('19082010101', 'Stefanus Azek azek', 'OB', 'VB', 'Mojokerto', '1994-01-27', 'Laki-Laki', 'ISLAM', 'JL jalanan mojokerto', '081213123123'),
('19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', 'I/A', 'Jakarta', '2001-01-18', 'Laki-Laki', 'ISLAM', 'Jl. Pancawarga 1/35, Jakarta Timur', '081296238548'),
('19082010103', 'Muhammad Syaifullah', 'HRD', '3C', 'Jakarta', '1959-11-26', 'Laki-Laki', 'ISLAM', 'Jakarta', '0812312414123'),
('19082010108', 'Orang Utan', 'Kepala Rumah Tangga', 'VB', 'Mojokerto', '2022-05-21', 'Laki-Laki', 'ISLAM', 'JL jalanan mojokerto', '081213123123'),
('19082010109', 'Dewi', 'Ibu rumah tangga', 'VB', 'Mojokerto', '2022-05-18', 'Perempuan', 'ISLAM', 'JL jalanan mojokerto', '081212344343'),
('19082012223', 'Nanana Nananana', 'IMPORTANT', 'IIIB', 'Surabaya', '2014-02-18', 'Perempuan', 'PROTESTAN', 'JL jalanan dimanamana', '0923231123'),
('19082013339', 'Yayeet', 'PELAWAK', 'IIIB', 'Surabaya', '2004-06-16', 'Laki-Laki', 'BUDHA', 'JL jalanan dimanamana', '021492448534'),
('190820666', 'Testing Integrasi', 'BOS BESAR', '2B', 'Surabaya', '0000-00-00', 'Laki-Laki', 'ISLAM', 'Durian Runtuh Surabaya', '081217243'),
('19082077777', 'Evan Jelek', 'BOS BESAR', '2B', 'Surabaya', '1995-06-28', 'Laki-Laki', 'ISLAM', 'Dirumah', '0812327324'),
('1908208888', 'Sayangku', 'BOS BESAR', '2B', 'Jakarta', '2020-02-18', 'Perempuan', 'HINDU', 'Jakarta Monas', '08123424234'),
('190877777', 'Real Jelek', 'BOS BESAR', '2B', 'Surabaya', '2022-06-23', 'Laki-Laki', 'BUDHA', 'Rungkut Aye aye', '021983242342'),
('199999999', 'Test dari web ke sqlserver', 'CHEF', 'VB', 'Jakarta', '2022-06-07', 'Laki-Laki', 'ISLAM', 'JL jalanan mojokerto', '081213123123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawaiaktif`
--

CREATE TABLE `tbl_pegawaiaktif` (
  `NIP` varchar(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `Golongan` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pegawaiaktif`
--

INSERT INTO `tbl_pegawaiaktif` (`NIP`, `Nama`, `Jabatan`, `Golongan`) VALUES
('19082010002', 'Izzah Tazkiyah', 'KETUA', 'II/B'),
('19082010003', 'Real Ananda Kristi', 'BENDAHARA', 'I/C'),
('19082010030', 'Muhammad Fachri Ali Haidar', 'KEPALA DEPARTEMEN', 'II/A'),
('19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', 'I/A'),
('19082010105', 'Cyntia Tester', 'HRD', 'I/B'),
('2000121291391', 'Sugab', 'KEPALA DEPARTMENT', 'II/B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawaicuti`
--

CREATE TABLE `tbl_pegawaicuti` (
  `KodePegawaiCuti` varchar(16) NOT NULL,
  `KodePengajuanCuti` varchar(16) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jabatan` varchar(12) NOT NULL,
  `Golongan` varchar(12) NOT NULL,
  `JenisCuti` varchar(12) NOT NULL,
  `AlasanCuti` varchar(150) NOT NULL,
  `DurasiCuti` varchar(12) NOT NULL,
  `TanggalMulaiCuti` varchar(12) NOT NULL,
  `TanggalCutiSelesai` varchar(12) NOT NULL,
  `AlamatKetikaCuti` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuancuti`
--

CREATE TABLE `tbl_pengajuancuti` (
  `KodePengajuanCuti` varchar(16) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jabatan` varchar(16) NOT NULL,
  `Golongan` varchar(12) NOT NULL,
  `JenisCuti` varchar(12) NOT NULL,
  `AlasanCuti` varchar(150) NOT NULL,
  `DurasiCuti` varchar(12) NOT NULL,
  `TanggalMulaiCuti` date NOT NULL,
  `TanggalCutiSelesai` date NOT NULL,
  `AlamatKetikaCuti` varchar(150) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuancuti`
--

INSERT INTO `tbl_pengajuancuti` (`KodePengajuanCuti`, `NIP`, `Nama`, `Jabatan`, `Golongan`, `JenisCuti`, `AlasanCuti`, `DurasiCuti`, `TanggalMulaiCuti`, `TanggalCutiSelesai`, `AlamatKetikaCuti`, `Status`) VALUES
('123123124', '19082010102', 'Muhamad Fauzan', 'SEKRETARIS', '2B', 'CUTI SAKIT', 'COVID', '30 Hari', '2022-06-21', '2022-07-21', 'Jakarta Timur', 'Diterima'),
('20123434985', '19082010002', 'Izzah Tazkiyah', 'KETUA', 'II/B', 'CUTI HAMIL', 'Hamil Tua', '45 Hari', '2022-05-27', '2022-07-08', 'Surabaya Jawa Timur', 'Ditolak'),
('20123948223', '19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', 'I/A', 'CUTI HARI RA', 'Lebaran', '30 Hari', '2022-05-29', '2022-06-29', 'Surabaya Jawa Timur', '*Menunggu Persetujuan*'),
('203324235245234', '19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', 'IIIB', 'CUTI BESAR', 'Capek Pak', '30 Hari', '2022-05-29', '2022-06-29', 'Jakarta', '*Menunggu Persetujuan*'),
('32312323', '19082010102', 'Muhamad Fauzan', 'SEKRETARIS', '2B', 'CUTI SAKIT', 'Covid-19', '5 hari', '2022-06-25', '2022-06-25', 'jakarta', 'Diterima'),
('3345534343', '19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', '4B', 'CUTI BESAR', 'Capek Pak', '30 Hari', '2022-06-21', '2022-07-21', 'Jakarta', 'Disetujui'),
('434234222', '19082010002', 'Izzah Tazkiyah', 'KETUA', 'II/B', 'CUTI HARI RA', 'Lebaran', '30 Hari', '2022-06-21', '2022-07-21', 'Surabaya', 'Diterima'),
('56453453244', '19082010102', 'Muhamad Fauzan Siswantoro', 'SEKRETARIS', 'IVB', 'CUTI BESAR', 'Capek Pak', '30 Hari', '2022-06-21', '2022-07-21', 'Jakarta', 'Diterima'),
('6432742374', '19082010002', 'Izzah Tazkiyah', 'KETUA', 'II/B', 'CUTI SAKIT', 'Batuk', '5 Hari', '2022-06-21', '2022-06-26', 'Sidoarjo', 'Diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`KodeAbsensi`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`KodeAdmin`);

--
-- Indexes for table `tbl_golongan`
--
ALTER TABLE `tbl_golongan`
  ADD PRIMARY KEY (`KodeGolongan`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`KodeJabatan`);

--
-- Indexes for table `tbl_jeniscuti`
--
ALTER TABLE `tbl_jeniscuti`
  ADD PRIMARY KEY (`KodeCuti`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `tbl_pegawaiaktif`
--
ALTER TABLE `tbl_pegawaiaktif`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `tbl_pegawaicuti`
--
ALTER TABLE `tbl_pegawaicuti`
  ADD PRIMARY KEY (`KodePegawaiCuti`);

--
-- Indexes for table `tbl_pengajuancuti`
--
ALTER TABLE `tbl_pengajuancuti`
  ADD PRIMARY KEY (`KodePengajuanCuti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
