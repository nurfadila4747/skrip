-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 12:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishutpkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode_buku` varchar(25) NOT NULL,
  `nama_buku` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `size` int(11) NOT NULL,
  `ekstensi` varchar(25) NOT NULL,
  `berkas` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kode_buku`, `nama_buku`, `title`, `size`, `ekstensi`, `berkas`) VALUES
('3444434', 'Nur Fadila Safitri', 'LAPORAN PROPOSAL_lia.pdf', 1037631, 'pdf', 'file/LAPORAN PROPOSAL_lia.pdf'),
('4', 'Revisi', 'LAPORAN PROPOSAL_lia.pdf', 1037631, 'pdf', 'file/LAPORAN PROPOSAL_lia.pdf'),
('BG01', 'Implementasi Metode Klasifikasi ABC pada Warehouse Management System PT. Cakrawala Tunggal Sejahtera', '501-862-1-SM.pdf', 1683613, 'pdf', 'file/501-862-1-SM.pdf'),
('BG02', 'Pendahuluan Algoritma', '(1) Pendahuluan.pdf', 1137037, 'pdf', 'file/(1) Pendahuluan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kawasan`
--

CREATE TABLE `tb_kawasan` (
  `id_kawasan` int(20) NOT NULL,
  `kota` varchar(250) NOT NULL,
  `hl` varchar(250) NOT NULL,
  `hpt` varchar(250) NOT NULL,
  `hp` varchar(250) NOT NULL,
  `hpk` varchar(250) NOT NULL,
  `ksa` varchar(250) NOT NULL,
  `jumlah` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kawasan`
--

INSERT INTO `tb_kawasan` (`id_kawasan`, `kota`, `hl`, `hpt`, `hp`, `hpk`, `ksa`, `jumlah`) VALUES
(1, 'KABUPATEN BERAU', '369,331.16', '647,619.38', '503,655.93', '47,173.36', '500.18', ' 1,568,280.01 '),
(2, 'KOTA BALIKPAPAN', '16,067.67', ' - ', '1,625.11', ' - ', ' - ', ' 17,692.78 '),
(3, 'KOTA BONTANG', '4,521.85', '', '', '84.39', '629.35', ' 5,235.59 '),
(4, 'KOTA SAMARINDA', ' - ', ' - ', '537.87', ' - ', ' - ', ' 537.87 '),
(5, 'KABUPATEN  KUTAI BARAT', '54,972.77', '263,686.25', '308,980.45', '11,846.09', '4,785.23', ' 644,270.79 '),
(6, 'KABUPATEN  KUTAI TIMUR', '344,553.00', '731,242.05', '840,967.35', '58,275.41', '184,576.50', ' 2,159,614.31 '),
(7, 'KABUPATEN KUTAI KARTANEGARA', '216,911.55', '493,336.36', '737,293.09', '30,937.89', '131,567.56', ' 1,610,046.45 '),
(8, 'KABUPATEN MAHAKAM ULU', '703,709.80', '683,280.98', '217,812.15', '2,813.58', '6,598.12', ' 1,614,214.63 '),
(9, 'KABUPATEN  PASER', '109,923.75', '140,708.52', '230,898.94', '9,768.50', '106,066.35', ' 597,366.06 '),
(10, 'KABUPATEN PENAJAM PASER UTARA', '0.59', '24,436.94', '88,763.76', '33,442.64', '7,575.63', ' 154,219.56 ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pbph`
--

CREATE TABLE `tb_pbph` (
  `id_pbph` int(250) NOT NULL,
  `nama_perusahaan` varchar(250) NOT NULL,
  `sertifikasi` varchar(250) NOT NULL,
  `statusrkt` varchar(250) NOT NULL,
  `statuspbph` varchar(250) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `buffer_zone` varchar(250) NOT NULL,
  `kelerengan` varchar(250) NOT NULL,
  `kppn` varchar(250) NOT NULL,
  `kpsl` varchar(250) NOT NULL,
  `sempadan_sungai` varchar(250) NOT NULL,
  `kebun_benih` varchar(250) NOT NULL,
  `karst` varchar(250) NOT NULL,
  `rawa` varchar(250) NOT NULL,
  `mata_air` varchar(250) NOT NULL,
  `koridor_satwaliar` varchar(250) NOT NULL,
  `kawasan_lindunglain` varchar(250) NOT NULL,
  `rawan_erosi` varchar(250) NOT NULL,
  `kantong_satwa` varchar(250) NOT NULL,
  `konservasi_insitu` varchar(250) NOT NULL,
  `ekowisata` varchar(250) NOT NULL,
  `tangkapan_air` varchar(250) NOT NULL,
  `hutan_adat` varchar(250) NOT NULL,
  `total_kalindung` varchar(250) NOT NULL,
  `sum_total` varchar(250) NOT NULL,
  `luas_PBPH` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pbph`
--

INSERT INTO `tb_pbph` (`id_pbph`, `nama_perusahaan`, `sertifikasi`, `statusrkt`, `statuspbph`, `jenis`, `keterangan`, `buffer_zone`, `kelerengan`, `kppn`, `kpsl`, `sempadan_sungai`, `kebun_benih`, `karst`, `rawa`, `mata_air`, `koridor_satwaliar`, `kawasan_lindunglain`, `rawan_erosi`, `kantong_satwa`, `konservasi_insitu`, `ekowisata`, `tangkapan_air`, `hutan_adat`, `total_kalindung`, `sum_total`, `luas_PBPH`) VALUES
(1, ' PT. ACK RIMBA LESTARI (DH.PT.AGRO CITY KALTIM) ', ' BELUM ', ' Belum Membuat ', ' Berakhir ', ' HA ', '', '4,335', '', '300', '', '368', '', '', '', '', '', '', '', '', '', '', '', '', '5,003', '5,003', '16,470'),
(2, ' PT. ADITYA KIRANA MANDIRI ', ' PHPL ', ' Proses ', ' Aktif ', ' HA ', '', '2,251', '', '320', '', '1,113', '', '', '', '', '', '', '', '', '1,069', '', '', '', '4,753', '4,753', '42,700'),
(3, ' PT. AMINDO WANA PERSADA ', ' PHPL ', ' Belum Membuat ', ' Aktif ', ' HA ', '', '3,885', '1,601', '304', '', '498', '', '', '', '', '', '', '', '', '', '', '', '', '6,288', '6,288', '43,680'),
(4, ' PT. AQUILA SILVA ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(5, ' PT. BALIKPAPAN WANA LESTARI ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '4,105', '3,661', '662', '', '5,669', '309', '', '', '', '', '', '', '', '', '', '', '', '14,406', '14,406', '140,845'),
(6, ' PT. BARITO NUSANTARA INDAH ', ' PHPL ', '', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(7, ' PT. BELAYAN RIVER TIMBER ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(8, ' KUD. BERINGIN MULYA ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HA ', '', '1,969', '402', '433', '', '287', '', '', '', '', '', '', '', '', '504', '', '', '', '3,595', '3,595', '23,635'),
(9, ' PT. BORNEO KARYA INDAH MANDIRI ', ' PHPL ', '', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(10, ' PT. DAISY TIMBER ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(11, ' PT. DAYA MAJU LESTARI (DH.PT.MARIMUN TIMBER IDS) ', '', ' Sudah Final ', ' Aktif ', ' HA ', '', '1,970', '', '594', '', '2,962', '', '', '', '', '', '', '', '224', '953', '', '', '', '6,703', '6,703', ''),
(12, ' PT. DEWATA WANATAMA LESTARI (d.h.PT DARMA PUTERA WAHANA PRATAMA) ', ' BELUM ', ' Belum Membuat ', ' Evaluasi Kinerja Pemenuhan Komitmen (6 bulan) ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, ' PT. GREATY SUKSES  ABADI ', ' PHPL ', ' Belum Membuat ', ' Evaluasi Kinerja Pemenuhan Komitmen (6 bulan) ', ' HA ', '', '', '', '423', '', '468', '', '', '', '', '', '', '', '', '423', '', '', '', '1,314', '1,314', '16,865'),
(14, ' PT. GREATY SUKSES ABADI UNIT SUNGAI TELAKAI ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(15, ' PT. GUNUNG GAJAH ABADI ', ' PHPL ', ' Proses ', ' Aktif ', ' HA ', '', '77', '2,801', '', '', '675', '', '', '', '550', '', '', '', '426', '700', '', '', '', '5,229', '5,229', '74,980'),
(16, ' PT. HANURATA ', 'PHPL', 'Final', 'Aktif', 'HA', 'tuplah dominan: HLKS (60%)', '', '', '735', '1,823', '191', '', '17,212', '', '', '', '', '', '', '', '', '', '', '19,961', '19,961', '86,440'),
(17, ' PT. HARAPAN KALTIM LESTARI ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '490', '', '580', '', '50', '', '', '', '', '', '', '', '', '', '', '', '', '1,120', '1,120', '44,430'),
(18, ' PT. INHUTANI I (UNIT LABANAN) ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '1,089', '', '1,210', '', '1,064', '', '920', '281', '', '', '210', '', '', '', '446', '', '', '5,220', '5,220', '138,210'),
(19, ' PT. INHUTANI I UNIT MERAANG ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '2,233', '9,513', '460', '', '1,924', '', '', '', '', '', '', '', '', '', '', '', '', '15,630', '14,130', '70,700'),
(20, ' PT. INHUTANI I UNIT SAMBARATA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '1,965', '2,112', '1,400', '240', '', '', '', '', '', '', '', '', '', '', '', '', '5,717', '5,717', '106,020'),
(21, ' PT. INHUTANI I UNIT SEGAH HULU ', '', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, ' PT. INTERTROPIC ADITAMA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '4,259', '', '3,856', '', '', '', '', '', '', '', '', '', '', '', '', '8,115', '8,115', '46,230'),
(23, ' PT. ITCI KARTIKA UTAMA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '400', '551', '311', '', '1,347', '', '', '', '', '100', '', '', '', '', '', '', '', '2,709', '2,709', '173,395'),
(24, ' PT. JAYA TIMBER TRADING INDUSTRI ', '', '', ' Tidak Aktif ', ' HA ', '', '6,538', '', '300', '352', '', '', '', '', '', '', '', '', '', '1,000', '', '', '', '8,190', '8,190', '53,200'),
(25, ' PT. KARYA LESTARI ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '925', '540', '', '1,981', '102', '', '', '', '', '3', '', '', '55', '112', '', '', '3,718', '3,718', '49,123'),
(26, ' PT. KARYA WIJAYA SUKSES ', ' PHPL ', ' Belum Membuat ', ' Aktif ', ' HA ', '', '4,965', '1,084', '600', '', '285', '', '', '', '', '', '', '', '', '', '', '', '', '6,934', '6,934', '22,320'),
(27, ' PT. KEDAP SAYAAQ ', 'PHPL', '', 'Aktif', 'HA', 'tuplah dominan: HLKS (81,77%)', '', '689', '288', '271', '517', '', '', '', '', '', '', '', '', '', '', '', '', '1,765', '1,765', '18,000'),
(28, ' PT. KEDUNG MADU TROPICAL WOOD ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '2,181', '', '', '', '865', '', '', '', '', '', '', '', '', '1,133', '', '', '', '', '4,179', '50,400'),
(29, ' PT. KEMAKMURAN BERKAH TIMBER ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(30, ' PT. KIANI LESTARI ', ' BELUM ', ' Sudah Final ', ' Evaluasi Kinerja Pemenuhan Komitmen (6 bulan) ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(31, ' PT. MARDHIKA INSAN MULIA (UNIT LABANAN) ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(32, ' PT. MARDHIKA INSAN MULIA (UNIT TABALAR) ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '2,124', '', '450', '962', '532', '', '9', '', '', '', '', '', '', '', '', '', '', '4,077', '4,077', '25,630'),
(33, ' KSU. MAYANG PUTRI PRIMA ', ' BELUM ', ' Belum Membuat ', ' Dicabut ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, ' PT. MELAPI TIMBER ', ' BELUM ', ' Belum Membuat ', ' Dicabut ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, ' PT. MUTIARA KALJA PERMAI (SK.506) ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '1,172.60', '', '94.1', '', '419.3', '', '', '', '', '', '', '', '', '799.6', '', '', '', '2,486', '2,486', '65,875'),
(36, ' PT. MUTIARA KALJA PERMAI (SK.553) ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '1,910', '', '600', '', '1,196', '', '', '', '', '', '577', '', '', '', '', '', '', '4,283', '4,283', '75,120'),
(37, ' PT. NADILA INDODAYA ', ' PHPL ', '', ' Aktif ', ' HA ', '', '593', '', '1,562', '', '477', '', '', '', '', '', '', '', '', '', '', '', '', '2,632', '2,632', '44,090'),
(38, ' PT. NARKATA RIMBA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '999', '617', '1,009', '', '753', '', '', '', '', '', '', '', '', '', '', '', '', '3,378', '3,378', '65,925'),
(39, ' PT. OCEANIS TIMBER PRODUCT ', ' PHPL ', '', ' Aktif ', ' HA ', '', '', '', '406', '605', '3,759', '', '', '', '', '', '', '', '', '', '', '', '', '4,770', '4,770', '67,030'),
(40, ' PT. PANAMBANGAN ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '1,052', '', '380', '', '773', '', '', '', '', '', '', '', '', '', '', '', '', '2,205', '2,205', '43,240'),
(41, ' CV. PARI JAYA MAKMUR ', ' PHPL ', '', ' Aktif ', ' HA ', '', '', '', '300', '', '248', '', '', '', '', '', '', '', '', '', '', '', '', '548', '548', '12,730'),
(42, ' KOP. PONDOK PESANTREN DARUSSALAM ', ' PHPL ', ' Belum Membuat ', ' Aktif ', ' HA ', '', '', '', '556', '', '2,328', '', '', '', '', '', '', '', '', '', '', '', '', '2,884', '2,884', '21,690'),
(43, ' PT. PUJI SEMPURNA RAHARJA ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, ' PT. RATAH TIMBER ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', ' -   ', ' -   '),
(45, ' PT. RIMBA KARYA RAYATAMA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', ' -   ', ' -   '),
(46, ' PT. RIZKI KACIDA REANA ', 'PHPL', '', 'Aktif', 'HA', 'tuplah dominan: HLKS (87.9%)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, ' PT. RODAMAS Tbr KALIMANTAN ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', ' -   ', ' -   '),
(48, ' PT. SEGARA INDOCHEM ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', ' -   ', ' -   '),
(49, ' PT. SEROJA UNIVERSUM NARWASTU ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HA ', '', '1797', '', '300', '', '90', '', '', '', '', '', '', '', '', '', '', '', '', '2187', '2,187', '36,500'),
(50, ' PT. SUMALINDO LESTARI JAYA IV ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '4085', '', '600', '300', '707', '', '', '', '', '', '', '', '', '5331', '', '', '', '11023', '11,023', '63,550'),
(51, ' PT. SUMALINDO LESTARI JAYA V ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '2257', '2284', '600', '', '923', '', '', '', '', '', '', '', '', '', '', '', '', '6064', '6,064', '59,860'),
(52, ' PT. TIMBER DANA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '1208', '1200', '1851', '', '1287', '', '', '', '33', '', '', '', '105', '', '', '', '', '5684', '5,684', '72,330'),
(53, ' PT. TRIWIRAASTA BARATA ', ' PHPL ', ' Proses ', ' Aktif ', ' HA ', '', '', '', '258', '455', '1726', '', '', '', '', '', '', '', '', '', '', '', '', '2439', '2,439', '53,430'),
(54, ' PT. UTAMA DAMAI INDAH TIMBER ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', ' -   ', ' -   '),
(55, ' PT. WANA BHAKTI PERSADA UTAMA ', '', 'Final', 'Evaluasi', 'HA', 'Menembuskan laporan aktifitas lapangan ke Dishut', '', '810', '700', '', '508', '', '', '', '', '', '', '', '', '', '', '', '', '2018', '2,018', '44,402'),
(56, ' PT. WANGSA KARYA LESTARI ', ' BELUM ', '', ' Aktif ', ' HA ', '', '3763', '1004', '630', '', '554', '', '', '', '', '', '', '', '', '', '', '', '', '5951', '5,951', '41,430'),
(57, ' PT. WIDYA ARTHA PERDANA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HA ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', ' -   ', ' -   '),
(58, ' PT. TELAGA MAS KALIMANTAN COMPANY ', 'BELUM', 'Belum Membuat', 'Aktif', 'HA', 'Baru', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, ' PT. ACACIA ANDALAN UTAMA (SK 620) ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '356', '205', '513', '', '', '', '', '', '', '', '', '', '', '', '', '2721', '1,074', ''),
(60, ' PT. ACASIA ANDALAN UTAMA (SK 87) ', ' PHPL ', ' Belum Membuat ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(61, ' PT. BAKAYAN JAYA ABADI ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '349.94', '1,134.00', '902.37', '', '', '', '', '', '', '', '', '', '', '', '', '2,387.13', '2,386', '15,475'),
(62, ' PT. BELANTARA PERSADA ', '', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(63, ' PT. BELANTARA PUSAKA ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '48', '273', '159', '483', '921', '', '', '', '324', '', '58', '', '', '', '', '', '', '2266', '2,266', '15,610'),
(64, ' PT. BELANTARA SUBUR ', '', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '705.89', '600.89', '479.63', '', '', '', '', '', '', '', '', '', '', '', '21.76', '1,808.17', '1,808', '16,375'),
(65, ' PT. BHINNEKA WANA ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '150', '1050', '365', '', '', '139', '', '', '', '', '', '', '', '', '', '2005', '1,704', '9,945'),
(66, ' PT. BORNEO KUTAI LESTARI ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '342', '605', '690', '', '', '', '', '', '683', '', '', '', '', '', '', '2320', '2,320', '18,835'),
(67, ' PT. PERMATA HIJAU KHATULISTIWA (d.h. PT. BHUANA INTI ENERGI ', '', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(68, ' PT. CAHAYA MITRA WIRATAMA ', ' BELUM ', ' Belum Membuat ', ' Aktif ', ' HT ', '', '', '', '852', '702', '715', '', '', '', '', '', '', '', '', '', '', '', '', '2269', '2,269', '18,290'),
(69, ' PT. DHARMA HUTANI MAKMUR ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '1210', '2022', '950', '', '', '', '', '', '', '', '', '', '', '', '', '4182', '4,182', '41,545'),
(70, ' PT. DIVA PERDANA PESONA ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '1659', '', '1212', '786', '1150', '', '', '', '', '', '', '', '', '', '', '', '', '4807', '4,807', '29,485'),
(71, ' PT. FAJAR SURYA SWADAYA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '2250', '3757', '4827', '', '537', '', '', '', '', '', '', '', '', '', '', '11371', '11,371', '18,290'),
(72, ' PT. HANUJAYA HUTANINDO ', 'PHPL', 'Final', 'Aktif', 'HT', 'Kayu Getah & Pertukangan', '', '1,172.45', '279.96', '296.97', '511.02', '', '1,306.45', '', '', '', '', '', '', '', '', '', '', '3,681.38', '3,567', '13,792'),
(73, ' PT. HUTAN BERAU LESTARI ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '2242', '890', '156', '263', '', '223', '', '', '', '', '', '', '', '', '', '', '3774', '3,774', '12,002'),
(74, ' PT. HUTAN KUSUMA ', 'BELUM', 'Final', 'Aktif', 'HT', 'SK pengeluaran dari lampiran II', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, ' PT. HUTAN MAHLIGAI ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '960', '364', '530', '', '', '', '', '', '', '', '', '', '', '', '', '1854', '1,854', '11,273'),
(76, ' PT. INDOSUBUR SUKSES MAKMUR ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '556.65', '556.19', '525.43', '1,769.00', '', '', '', '12.51', '', '2955.14', '', '', '', '', '', '', '6,375.25', '6,375', '28,238'),
(77, ' PT. INHUTANI I BATUAMPAR - MENTAWIR ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(78, ' PT. INHUTANI I LONG NAH ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '1052', '', '1715', '', '', '13331', '', '', '', '', '', '', '', '', '', '16099', '16,098', '48,215'),
(79, ' PT. INHUTANI II TANAH GROGOT ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '107', '479', '733', '', '', '', '', '', '', '', '', '', '', '', '', '1534', '1,319', '15,336'),
(80, ' PT. ITCI HUTANI MANUNGGAL ', ' PHPL ', '', ' Aktif ', ' HT ', '', '177', '1034', '1063', '562', '2193', '', '', '', '', '', '50', '', '', '', '', '', '', '5079', '5,079', '40,912'),
(81, ' PT. JAYA BUMI PASER ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, ' PT. KELAWIT HUTANI LESTARI ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '366', '607', '878', '', '', '', '', '', '', '', '', '', '', '', '', '1851', '1,851', '9,180'),
(83, ' PT. KELAWIT WANA LESTARI I ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '2719', '1061', '349', '', '', '', '', '', '', '', '', '', '', '', '', '4129', '4,129', '27,690'),
(84, ' PT. KELAWIT WANA LESTARI II ', ' BELUM ', ' Belum Membuat ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(85, ' PT. MAHAKAM PERSADA SAKTI ', 'PHPL', 'Final', 'Aktif', 'HT', 'Tidak ada kegiatan kemitraan kehutaan', '', '', '499.5', '336.97', '1,458.33', '', '', '', '', '', '1,518.16', '', '', '', '', '', '', '3,812.76', '3,813', '25,410'),
(86, ' PT. MITRA MULIA MAHAKAM ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '773.03', '70.43', '167.63', '189.05', '472.87', '', '', '', '7.7', '', '', '', '', '', '', '', '', '1,635.70', '1,681', '10,350'),
(87, ' PT. MULTI KUSUMA CEMERLANG (d.h. PT. BARITO PACIFIC TIMBER UNIT BENGALON) ', ' BELUM ', ' Proses ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(88, ' PT. OCEANIS TIMBER PRODUCT ', ' PHPL ', '', ' Aktif ', ' HT ', '', '', '', '880', '828', '552', '', '', '', '', '', '', '', '', '', '', '', '', '2260', '2,260', '16,600'),
(89, ' PT. PERMATA BORNEO ABADI ', 'PHPL', 'Final', 'Aktif', 'HT', 'Tidak ada kegiatan kemitraan kehutaan', '', '121', '7216', '', '3753', '', '', '', '', '', '', '', '', '', '', '', '', '11090', '11,090', '49,000'),
(90, ' PT. RIMBA RAYA LESTARI ', ' BELUM ', ' Sudah Final ', ' Evaluasi Kinerja Pemenuhan Komitmen (6 bulan) ', ' HT ', '', '', '', '465', '1644', '146', '', '', '', '', '', '', '', '', '', '', '', '', '2255', '2,255', '17,330'),
(91, ' PT. SANTAN BORNEO ABADI ', 'PHPL', 'Final', 'Aktif', 'HT', 'Tidak ada kegiatan kemitraan kehutaan', '790', '', '', '', '1379', '', '1943', '', '', '', '7334', '', '', '', '', '', '', '11446', '11,446', '37,825'),
(92, ' PT. SENDAWAR ADHI KARYA ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '1311', '2345', '730', '', '', '', '', '', '', '', '', '', '', '', '', '4386', '4,386', '25,400'),
(93, ' PT. SILVA RIMBA LESTARI ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '1101', '', '5628', '2355', '1310', '', '', '2235', '', '', '', '', '', '', '', '', '', '12629', '12,629', '88,000'),
(94, ' PT. SILVA SELARAS UTAMA ', ' BELUM ', ' Proses ', ' Aktif ', ' HT ', '', '155', '', '810', '331', '859', '', '', '', '', '', '11555', '', '', '', '', '', '', '13710', '13,710', '35,640'),
(95, ' PT. SUMALINDO ALAM LESTARI I (DH.SUMALINDO LJ I) ', ' PHPL ', ' Belum Membuat ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(96, ' PT. SUMALINDO ALAM LESTARI II (DH.SUMALINDO LJ II) ', ' PHPL ', '', ' Aktif ', ' HT ', '', '212', '794', '3110', '1596', '1256', '', '', '', '', '', '', '', '', '', '', '', '', '7137', '6,968', '24,500'),
(97, ' PT. SUMALINDO HUTANI JAYA I ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '454.75', '117.6', '913.32', '', '', '', '', '', '', '', '', '', '', '', '', '1,485.66', '1,486', '10,976'),
(98, ' PT. SUMALINDO HUTANI JAYA II ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '576', '2630', '6371', '', '3059', '', '', '', '52', '', '', '', '', '', '', '', '', '18023', '12,688', '70,300'),
(99, ' PT. SURYA HUTANI JAYA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(100, ' PT. SWADAYA PERKASA ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '598', '490', '1112', '', '', '', '', '', '', '', '', '', '', '', '', '2200', '2,200', '17,925'),
(101, ' PT. SYLVADUTA CORPORATION ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '1327', '', '680', '', '', '', '', '', '', '', '', '', '', '', '', '2007', '2,007', '47,025'),
(102, ' PT. TAMAN DAULAT WANANUSA ', ' BELUM ', ' Belum Membuat ', ' Dicabut ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, ' PT. TANJUNG REDEB HUTANI ', ' PHPL ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '789.44', '675.97', '9,461.35', '', '2,055.22', '', '32.82', '1,003.78', '', '', '', '', '', '32,815.32', '', '46,801.08', '46,834', '185,840'),
(104, ' PT. TIRTA MAHAKAM RESOURCES ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(105, ' PT. WANA KALTIM LESTARI ', ' BELUM ', ' Sudah Final ', ' Aktif ', ' HT ', '', '405.21', '', '583.17', '', '646.24', '', '', '', '', '', '543.41', '', '', '', '', '', '', '2,178.03', '2,178', '16,280'),
(106, ' PT. TAMAN DAULAT WANANUSA ', '', '', ' Dicabut ', ' HT ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' -   ', ' -   '),
(107, ' PT. RESTORASI HABITAT ORANGUTAN INDONESIA ', '', ' Proses ', '', ' RE ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, ' PT. ELBANA ABADI JAYA ', ' BELUM ', ' Belum Membuat ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, 'PT. TRIMURTTI MADINA MULIA', 'BELUM', 'Belum Membuat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, 'PT. MADYAKARA PACIFIK RAYA', '', 'Belum Membuat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, 'PT. AUSTRAL BYNA', 'BELUM', 'Belum Membuat', '', 'HA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(112, 'PT. BARITO PUTRA', 'BELUM', 'Belum Membuat', '', 'HA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, 'PT. GUNUNG MURO WAHANJAYA', 'BELUM', 'Belum Membuat', '', 'HA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(114, 'PT. KREASI PRIMA LESTARI', 'BELUM', '', '', 'HA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(115, 'PT. MITRA PERDANA PALANGKA', 'BELUM', '', '', 'HA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, 'PT. SAMUDERA REJEKI PERKASA', 'BELUM', '', '', 'HA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, 'PT. WANA INTI KAHURIPAN INTIGA', 'BELUM', '', '', 'HA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(118, 'PT. HUTAN RINDANG BANUA', 'BELUM', '', '', 'HT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(119, 'PT. LENTERA SAWIT MAKMUR', 'BELUM', '', '', 'HT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(120, ' PT. BALIKPAPAN FOREST INDUSTRIES', '', '', '', 'HA', '', '4417', '', '584', '', '1108', '', '', '', '', '', '739', '', '', '', '', '', '', '6848', '6,848', '140,845'),
(121, ' PT. INHUTANI II UMH SEMAMU ', '', '', '', ' HA ', '', '3373', '11271', '305', '300', '2104', '', '', '', '', '', '', '', '', '', '', '', '', '17353', '17,353', '71,375'),
(122, ' PT. RHOI ', '', '', '', ' HA ', '', '8493', '', '', '', '774', '', '', '', '', '', '', '', '', '', '', '', '', '9267', '9,267', '86,450'),
(123, 'PT. SUMALINDO LESTARI JAYA TBK', '', '', '', 'HA', '', '9320', '4115', '600', '', '791', '', '', '', '', '', '', '', '', '', '', '', '', '14,826', '14,826', '69,765'),
(124, 'PT. BEKAYAN JAYA ABADI', 'BELUM', 'Final', 'Aktif', 'HT', 'Tidak ada kegiatan kemitraan kehutaan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','KepalaSeksi','Perusahaan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Nur Fadila Safitri', 'dila', 'ok', 'Administrator'),
(2, 'Nanang Hayani', 'sks', '123', 'KepalaSeksi'),
(3, 'Andre Aja wkk', 'andre', '1', 'Perusahaan'),
(4, 'Bayuuuuuu', 'bayu', '1', 'Perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permintaan`
--

CREATE TABLE `tb_permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `jekel` varchar(250) NOT NULL,
  `tempat_lh` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `hubungi` varchar(50) NOT NULL,
  `jenis_surat` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_permintaan`
--

INSERT INTO `tb_permintaan` (`id_permintaan`, `nama_lengkap`, `nik`, `jekel`, `tempat_lh`, `tgl_lahir`, `alamat`, `hubungi`, `jenis_surat`, `status`) VALUES
(87, 'hahh', '6408041010920007', 'Laki - Laki', 'Benua Baru', '2021-09-08', 'Parianum', '081352171954', 'Surat Keterangan Pindah', 'Selesai'),
(108, 'Amin Rais', '12345678', 'Laki - Laki', 'Kutai Timur', '2021-09-08', 'Parianum', 'serahku86@gmail.com', 'Surat Keterangan Pindah', 'Selesai'),
(114, 'Amin Rais', '11919198129182', 'Laki - Laki', 'Benua Baru', '2021-09-09', 'Parianum', '081352171954', 'Surat Keterangan Kamatian', 'Selesai'),
(123, 'Amin Rais', '6408030000000000', 'Laki - Laki', 'Benua Baru', '2021-09-10', 'Parianum', '081352171954', 'Surat Keterangan Domisili', 'Selesai'),
(124, 'Amin Rais', '', 'Laki - Laki', 'Benua Baru', '2021-09-09', 'Parianum', '081352171954', 'Surat Keterangan Lahir', ''),
(125, 'Amin Rais', '6408123456789000000', 'Laki - Laki', 'Benua Baru', '2021-09-10', 'Parianum', '081352171954', 'Surat Keterangan Pindah', ''),
(126, 'Amin Rais', '12345678', 'Laki - Laki', 'Benua Baru', '2021-09-10', 'Parianum', '081352171954', 'Surat Keterangan Kamatian', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pokok`
--

CREATE TABLE `tb_pokok` (
  `id_pokok` int(20) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `nosk` varchar(250) NOT NULL,
  `luassk` varchar(250) NOT NULL,
  `ket` varchar(250) NOT NULL,
  `provinsi` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `info` varchar(250) NOT NULL,
  `sumber1` varchar(250) NOT NULL,
  `sumber2` varchar(250) NOT NULL,
  `jenissk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pokok`
--

INSERT INTO `tb_pokok` (`id_pokok`, `nama`, `jenis`, `nosk`, `luassk`, `ket`, `provinsi`, `tgl`, `info`, `sumber1`, `sumber2`, `jenissk`) VALUES
(1, 'PT. Barito Pacific Timber (Unit Bengalon)', 'HT', '519/MENHUT-II/2009', '18.045,00 Ha', 'TTB geser dari peta kerja. cek persekutuan dengan Kelawit. Sebagian TBT. lainnya cek', 'Kaltim', '0000-00-00', 'SK Definitif', 'Ditkuh', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(2, 'PT. Wana Kaltim Lestari', 'HT', '06/Kpts-II/1998', '16.280,00 Ha', 'Cek apakah Temu gelang dan ada overlap. cek apakah msh bagian Wana Kaltim Lestari', 'Kaltim', '0000-00-00', '', 'Ditkuh', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(3, 'PT. Belantara Pusaka', 'HT', '20/Kpts-II/98', '14.010,00 Ha', 'Pedoman (proses tata batas). Pedoman (Proses TBT)', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014', 'SK DEFINITIF'),
(4, 'PT. Belantara Persada', 'HT', '779/Kpts-II/1997', '17.150,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(5, 'PT. Kelawit Hutani Lestari', 'HT', 'SK.644/Menlhk/Setjen/HPL.0/2/2018', '9.180,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(6, 'PT. Inhutani I Batuampar - Ment', 'HT', '239/Kpts-II/98', '16.521,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(7, 'PT. Sumalindo Lestari Jaya Ii (Site Gonpu Ii)', 'HT', '722/Kpts-II/96', '24.500,00 Ha', 'Diplot berdasarkan peta kerja', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(8, 'PT. Kelawit Wana Lestari', 'HT', '169/Menhut-II/05', '22.065,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(9, 'PT. Inhutani I Long Nah', 'HT', '611/Kpts-II/1997', '50.259,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK SEMENTARA'),
(10, 'PT. Sylvaduta Corporation', 'HT', '415/MENHUT-II/2009', '47.025,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(11, 'PT. Sumalindo Alam Lestari Unit 1(Addendum)', 'HT', '267/MENHUT-II/2009', '32.550,00 Ha', 'TBT. Cek apakah temu gelang', 'Kaltim', '0000-00-00', '', 'Ditkuh', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(12, 'PT. Swadaya Perkasa', 'HT', 'S.429/Menhut-VI/2009', '24.850,00 Ha', 'Berdasarkan WA tahun 2011', 'Kaltim', '0000-00-00', '', 'Ditkuh', 'Mila per 14 Ags 2014l', 'PENCADANGAN'),
(13, 'PT. Tirta Mahakam Resources Tbk', 'HT', '328/Menhut-II/2010', '43.240,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(14, 'PT. Surya Hutani Jaya', 'HT', '156/Kpts-II/96', '183.300,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(15, 'PT. Sumalindo Hutani Jaya I', 'HT', '407/Kpts-II/96', '10.000,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(16, 'PT. Inhutani I Melak', 'HT', '255/Kpts-V/1992', '4.900,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(17, 'PT. Sendawar Adhi Karya', 'HT', '2/MENHUT-II/2008', '25.400,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(18, 'PT. Sumalindo Hutani Jaya Ii', 'HT', '675/Kpts-II/1997', '70.300,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(19, 'PT. Bhinneka Wana', 'HT', '61/Kpts-II/97', '9.945,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(20, 'PT. Acacia Andalan Utama (Sk 620)', 'HT', '620/MENHUT II/2010', '21.965,00 Ha', 'Pedoman. cek hasil TBT', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(21, 'PT. Buana Inti Energi', 'HT', '631/MENHUT II/2010', '26.345,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', ''),
(22, 'PT. Mahakam Persada Sakti', 'HT', '619/MENHUT II/2010', '25.410,00 Ha', 'Temu gelang', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(23, 'PT. Acasia Andalan Utama', 'HT', '87/Menhut-VI/2007', '37.349,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(24, 'PT. Kelawit Wana Lestari', 'HT', '301/Menhut-II/2011', '27.690,00 Ha', 'Diplot berdasarkan peta kerja. cek hasil TBT. cek sekutu dgn Barito Pasifik. Diplot berdasarkan peta kerja. cek hasil TBT', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(25, 'PT. Hutan Mahligai', 'HT', '47/Menhut II/2006', '11.275,00 Ha', 'Diplot berdasarkan penetapan Timber Dana dan peta kerja Hutan Mahligai. cek hasil TBT', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(26, 'PT. Bakayan Jaya Abadi', 'HT', '236/Menhut-II/2011', '15.665,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(27, 'PT. Cahaya Mitra Wiratama', 'HT', '449/Menhut-II/2011', '20.878,00 Ha', 'Pedoman. cek apakah telah TBT', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(28, 'PT. Silva Rimba Lestari', 'HT', '165/Menhut-II/2011', '88.000,00 Ha', 'TBT. cek apakah temu gelang. Sungai di RBI geser (sdh dicek thd citra Bing). Disesuaikan thd bts kws', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(29, 'PT. Dharma Hutani Makmur', 'HT', '', '41.327,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', ''),
(30, 'PT. Tanjung Redep Hutani', 'HT', '329/Menhut-II/2011', '187.920,00 Ha', 'TBT', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(31, 'PT. Fajar Surya Swadaya', 'HT', 'S. 259/VII-WP3H/2012 tgl 27-02-2012', ' -   ', 'Sebagian TBT. cek Temu Gelang. TBT 2010 sebelah timur aneh sungai ngawur', 'Kaltim', '0000-00-00', '', 'Ditkuh', 'Mila per 14 Ags 2014l', ''),
(32, 'PT. Oceanias Timber Product', 'HT', '298/Menhut-II/2012', '15.935,00 Ha', 'Diplot berdasar revisi pedoman dan hsl tbt', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(33, 'PT. Borneo Kutai Lestari', 'HT', '679/Menhut-II/2013', '18.835,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(34, 'PT. Diva Perdana Pesona', 'HT', '479/Menhut-II/2014', '48.235,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(35, 'PT. Widya Artha Perdana', 'HA', '439/Menhut-II/2009', '14.800,00 Ha', '', 'Kaltim. Kaltara', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(36, 'PT. Intertropic Aditama', 'HA', '161/Menhut-II/2005', '46.230,00 Ha', 'Perlu dicek apakah sdh Temu Gelang. Cek batas persekutuan RE', 'Kaltim', '0000-00-00', '', '', 'Konsultan Nono', 'SK DEFINITIF'),
(37, 'PT. Rimba Karya Rayatama (Sk186-Kutai Barat)', 'HA', '186/Menhut-II/2006', '40.630,00 Ha', 'Cek apakah temu gelang', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(38, 'PT. Kedap Sayaaq', 'HA', '292/Menhut-II/2008', '18.000,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(39, 'PT. Aquila Silva', 'HA', '548/Menhut-II/2009', '55.300,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(40, 'PT. Inhutani I (Sambarata)', 'HA', 'SK 195/Menhut-II/06', '106.020,00 Ha', 'Sebagian diplot berdasarkan peta kerja. sebagian given. Beda dgn hsl tbt Tanjung Redeb Hutani', 'Kaltim. Kaltara', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(41, 'PT. Aditya Kirana Mandiri', 'HA', '862/Kpts-VI/1999', '42.700,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(42, 'PT. Amindo Wana Persada', 'HA', '940/Kpts-VI/99', '43.680,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(43, 'PT. Wana Bhakti Persada U.', 'HA', '864/Kpts-VI/99', '44.402,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(44, 'PT. Mardhika Insan Mulia', 'HA', '1003/Kpts-VI/99; 938/Kpts-VI/99', '46.080,00 Ha', 'cek apakah temu gelang.Batas blm match dengan persekutuan', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(45, 'PT. Utama Damai Indah Tbr', 'HA', 'SK 52/Menhut-II/05', '49.250,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(46, 'PT. Karya', 'HA', '846/Kpts-VI/99', '47.063,00 Ha', 'Perlu cek dengan hasil TBT. batas fungsi pada peta kerja sangat berbeda', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(47, 'PT. Penambangan', 'HA', 'SK.411/Menhut-II/04', '43.240,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(48, 'PT. Indosubur Sukses Makmur', 'HA', '763/Menhut-II/2014', '28.655,00 Ha', 'Temu gelang. saat ini menjadi PT. Indosubur Sukses Makmur', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(49, 'PT. Wangsa Karya', 'HA', '543/Menhut-II/2006', '41.530,00 Ha', 'Diplot berdasarkan peta kerja', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(50, 'PT. Belayan River Timber', 'HA', '853/Kpts-VI/99', '97.500,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(51, 'PT. Oceanis Timber', 'HA', 'SK 456/Menhut-II/05', '67.030,00 Ha', 'Temu Gelang. TBT lama perlu dicek blm sama. Cek batas persekutuan RE', 'Kaltim', '0000-00-00', '', '', 'Konsultan Nono', 'SK DEFINITIF'),
(52, 'PT. Inhutani I (Unit Meraang)', 'HA', 'SK 561/Menhut-II/06', '70.700,00 Ha', 'Diplot dari rencana TBT. cek apakah temy gelang. dan cek batas fungsi', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(53, 'KUD. Beringin Mulya', 'HA', '32/Menhut-II/2013', '23.635,00 Ha', 'Cek SHP. Sudah terbaru atau belum', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(54, 'PT. Daya Maju Lestari (eks Marimun Timber Industri)', 'HA', '101/Kpts-II/2000', '73.625,00 Ha', 'Sebagian TBT terplot. lainnya blm. data blm ketemu', 'Kaltim', '0000-00-00', '', 'Ditkuh', '', 'SK DEFINITIF'),
(55, 'PT. Harapan Kaltim', 'HA', 'SK.187/Menhut-II/06', '44.430,00 Ha', 'Cek apakah temu gelang', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(56, 'PT. Inhutani I (Unit Segah Hulu)', 'HA', 'SK 44/Menhut-II/06', '54.230,00 Ha', '', 'Kaltim. Kaltara', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(57, 'PT. Sumalindo  Jaya IV', 'HA', '582/Menhut-II/2009', '100.000,00 Ha', 'Diplot berdasarkan peta kerja', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(58, 'PT. Mardhika Insan Mulia (Unit Tabalar)', 'HA', '240/Menhut-II/2008', '25.630,00 Ha', 'Pedoman', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(59, 'PT. Rizki Kacida Reana (Sk 60)', 'HA', '60/Menhut-II/2009', '55.150,00 Ha', 'Diplot berdasarkan TBT Tanjung Redeb Hutani dan pedoman Inhutani Sambarata', 'Kaltim. Kaltara', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(60, 'PT. Sumalindo  Jaya Ii', 'HA', '400/Menhut-II/2004', '267.600,00 Ha', 'Temu gelang. telah ditetapkan', 'Kaltim. Kaltara', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(61, 'PT. Rimba Karya Rayatama (Sk 384-Malinau)', 'HA', '384/Menhut-II/2009', '143.970,00 Ha', '', 'Kaltim. Kaltara', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(62, 'PT. Kemakmuran Berkah Timber', 'HA', '217/Menhut-II/2008', '82.810,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(63, 'PT. Karya Wijaya Sukses', 'HA', 'SK 192/Menhut-II/06', '22.320,00 Ha', 'Diplot berdasarkan peta kerja. cek hasil TBT', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(64, 'PT. Sumalindo Jaya V', 'HA', '321/Menhut-II/2009', ' -   ', 'Diplot berdasarkan peta kerja. Ada penyesuaian dgn bts Rodamas dan Karya Wijaya', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(65, 'PT. Rimba Sempana Makmur', 'HA', 'SK 73/Menhut-II/06', '27.425,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(66, 'PT. Gunung Gajah Abadi', 'HA', '261/Kpts-II/1997', '81.000,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(67, 'PT. Barito Nusantara Indah', 'HA', '42/Menhut-II/2009', '94.685,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(68, 'PT. Mutiara Kalja Permai', 'HA', '506/Menhut-II/2009', '56.000,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(69, 'PT. Ratah Timber', 'HA', '359/Menhut-II/2009', '93.425,00 Ha', 'Diplot berdasarkan peta kerja. Sebagian diplot berdasarkan hsl tbt. sebagian dari peta kerja', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(70, 'PT. Greaty Sukses  Abadi', 'HA', '634/Menhut-II/2009', '16.885,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(71, 'KOP. Pondok Pesantren Darussalam', 'HA', '112/Kpts-II/94', '21.690,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(72, 'PT. Nadila Indodaya', 'HA', '503/Menhut-II/2006', '44.090,00 Ha', 'Temu Gelang. Proses penetapan batas alam sesuai citra (RBI) geser. Proses penetapan', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(73, 'PT. Borneo Karya Indah Mandiri', 'HA', '101 Tahun 2002', '50.860,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(74, 'PT. Seroja Universum Narwastu', 'HA', '97/Menhut-II/2008', '36.500,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(75, 'PT. Alam Sarana Abadi', 'HA', '', '97.250,00 Ha', '', 'Kaltim. Kaltara', '0000-00-00', '', '', '', 'SP 2'),
(76, 'PT. Inhutani I (Unit Labanan)', 'HA', 'SK 484/Menhut-II/06', '138.210,00 Ha', 'Diplot berdasarkan peta kerja', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(77, 'PT. Greaty Sukses Abadi Unit Sungai Telakai. PT', 'HA', '24/Menhut-II/2013', '39.190,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SP 1'),
(78, 'PT. Kiani  (Eks Pt Gpi)', 'HA', 'SK.434/Menhut-II/2012', '134.950,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(79, 'PT. Rodamas Tbr Kalimantan', 'HA', '59/Menhut-II/2014', '69.620,00 Ha', 'SK PERPANJANGAN. Ada penyesuaian dengan bts Karya Wijaya. Sebagian TBT. cek apakah Temu Gelang', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(80, 'PT. Daisy Timber', 'HA', '928/Menhut-II/2013', '30.170,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(81, 'PT. Mutiara_Kalja_Permai (Dh Wana Rimba Kencana)', 'HA', '', ' -   ', '', 'Kaltim', '0000-00-00', '', '', '', 'WA'),
(82, 'PT. Narkata Rimba', 'HA', '278/Menhut-II/2008', '41.540,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(83, 'PT. Triwira Asta Barata', 'HA', '323/Menhut-II/2010', '53.430,00 Ha', 'Sebagian TBT. Batas Luar TBT', 'Kaltim', '0000-00-00', '', '', 'Konsultan Nono', ''),
(84, 'PT. Kedung Madu Tropical Wood', 'HA', '269?mENHUT-ii/2007', '50.400,00 Ha', 'Diplot berdasarkan pedoman tbt', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(85, 'PT. Segara Indochem & Pt Segara Timber', 'HA', '990/Kpts-IV/1999', '85.725,00 Ha', 'Diplot berdasarkan peta kerja dan penyesuaian dengan PT. Kedung Madu', 'Kaltim', '0000-00-00', '', '', '', 'SK DEFINITIF'),
(86, 'PT. Restorasi Habitat Orangutan Indonesia. PT.', '', 'SK. 464/Menhut-II/2010', '86.450,00 Ha', '', 'Kalimantan Timur', '0000-00-00', '', '', '', ''),
(87, 'PT. Hutan Berau Lestari', 'HT', 'SK.777/Menhut-II/2014', '12.002,00 Ha', 'Diplot dari rencana TBT Inhutani. cek apakah temu gelang dan cek TBT asli. Pedoman. cek hasil TBT. Diplot dari rencana TBT Inhutani dan UDIT', 'Kalimantan Timur', '0000-00-00', '', '', '', ''),
(88, 'PT. Hanujaya Hutanindo', 'HA', '685/Menhut II/2013', '86.440,00 Ha', 'Cek Temu Gelang', 'Kaltim', '0000-00-00', '', 'Ditkuh', '', 'SK DEFINITIF'),
(89, 'PT. Permata Borneo Abadi', 'HT', 'SK.84/Menhut-II/2011', '49.000,00 Ha', 'Temu gelang', 'Kaltim', '0000-00-00', '', '', '', ''),
(90, 'PT. Segara Indochem & Pt Segara Timber Blok II', 'HA', '990/Kpts-IV/1999', ' -   ', 'Diplot berdasarkan peta kerja', 'Kaltim', '0000-00-00', '', '', '', ''),
(91, 'PT. Segara Indochem & Pt Segara Timber Blok IIIA', 'HA', '990/Kpts-IV/1999', ' -   ', 'Diplot berdasarkan peta kerja', 'Kaltim', '0000-00-00', '', '', '', ''),
(92, 'PT. Sumalindo Hutani Jaya Ii', 'HT', '675/Kpts-II/1997', '70.300,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(93, 'PT. Sylvaduta Corporation', 'HT', '415/MENHUT-II/2009', '47.025,00 Ha', '', 'Kaltim', '0000-00-00', '', '', 'Mila per 14 Ags 2014l', 'SK DEFINITIF'),
(94, 'PT. Itci Hutani Manunggal', 'HT', '', ' -   ', '', '', '0000-00-00', '', '', '', ''),
(95, 'PT. Balikpapan Wana Lestari (BFI)', 'HA', '', ' -   ', '', '', '0000-00-00', '', '', '', ''),
(96, 'PT. Acacia Andalan Utama', 'HT', '', ' -   ', '', '', '0000-00-00', '', '', '', ''),
(97, 'PT. Bekayan Jaya Abadi', 'HT', '', ' -   ', '', '', '0000-00-00', '', '', '', ''),
(98, 'CV. Pari Jaya Makmur', 'HA', '', ' -   ', '', '', '0000-00-00', '', '', '', ''),
(99, 'PT. Itci Kartika Utama', 'HA', '160/Menhut-II/2012', '173.395,00 Ha', '', 'Kaltim', '0000-00-00', '', '', '', ''),
(100, 'PT. Telaga Mas Kalimantan', 'HA', '', '', '', '', '0000-00-00', '', '', '', ''),
(101, 'PT. Silva Selaras Utama', 'HT', '', '', '', '', '0000-00-00', '', '', '', ''),
(102, 'PT. Timber Dana', 'HA', '', '', '', '', '0000-00-00', '', '', '', ''),
(103, 'PT. Rimba Raya Lestari', 'HT', '', '', '', '', '0000-00-00', '', '', '', ''),
(104, 'PT. Inhutani II Unit Tanah Grogot', 'HT', '', '', '', '', '0000-00-00', '', '', '', ''),
(105, 'PT. Jaya Bumi Paser', 'HT', '', '', '', '', '0000-00-00', '', '', '', ''),
(106, 'PT. Santan Borneo Abadi', 'HT', '', '', '', '', '0000-00-00', '', '', '', ''),
(121, 'nama', 'jenis', 'nosk', 'luassk', 'ket', 'provinsi', '0000-00-00', 'info', 'sumber1', 'sumber2', 'jenissk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rkt`
--

CREATE TABLE `tb_rkt` (
  `id_izin` varchar(20) NOT NULL,
  `id_umum` int(30) NOT NULL,
  `keperluan` enum('Pulang','Pergi') NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_out` date NOT NULL,
  `tgl_in` date NOT NULL,
  `status` set('1','0') NOT NULL,
  `berkas` varchar(2000) NOT NULL,
  `aut_izin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rkt`
--

INSERT INTO `tb_rkt` (`id_izin`, `id_umum`, `keperluan`, `keterangan`, `tgl_out`, `tgl_in`, `status`, `berkas`, `aut_izin`) VALUES
('RKT001', 3, '', 'Tidak ada kegiatan kemitraan kehutaan', '2023-02-28', '2023-03-23', '1', 'Revisi Skripsi Yuniati-J19160056 (2023).pdf', 1),
('RKT002', 2, '', 'aaaaa', '2023-03-20', '2023-03-22', '1', 'Revisi Skripsi Yuniati-J19160056 (2023).pdf', 1),
('RKT003', 2, '', 'aaaa', '2023-03-07', '2023-03-16', '1', 'aktifkuliah.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sukel`
--

CREATE TABLE `tb_sukel` (
  `id_keluar` varchar(20) NOT NULL,
  `id_pengguna` int(5) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `perihal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sumas`
--

CREATE TABLE `tb_sumas` (
  `id_masuk` varchar(10) NOT NULL,
  `id_pengguna` int(5) NOT NULL,
  `pengirim` varchar(250) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `perihal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sumas`
--

INSERT INTO `tb_sumas` (`id_masuk`, `id_pengguna`, `pengirim`, `tgl_surat`, `tgl_terima`, `perihal`) VALUES
('78273827', 1, 'Kiani Lestari', '2023-03-15', '2023-03-31', 'Penyelesaian Penelitian Skripsi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_telegram`
--

CREATE TABLE `tb_telegram` (
  `id_telegram` int(11) NOT NULL,
  `telegram` varchar(50) NOT NULL,
  `id_chat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_telegram`
--

INSERT INTO `tb_telegram` (`id_telegram`, `telegram`, `id_chat`) VALUES
(1, 'Informasi Keamanan Dishut Kaltim', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tb_umum`
--

CREATE TABLE `tb_umum` (
  `id_umum` int(30) NOT NULL,
  `umum_id` varchar(100) NOT NULL,
  `id_kawasan` int(20) NOT NULL,
  `pbphh` varchar(250) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_umum`
--

INSERT INTO `tb_umum` (`id_umum`, `umum_id`, `id_kawasan`, `pbphh`, `jenis`, `alamat`, `email`, `notelp`) VALUES
(1, '339/Kpts-II/1998', 1, 'PT. Hutan Kusuma', 'HT', 'Wisma Idola Tunggal Jalan Letjen S.Parman Kav 67, Silpi Jakarta Barat', 'HutanKusuma01@gmail.com', '(021) 5306448'),
(2, '20/Kpts-II/1998', 2, 'PT. Belantara Pusaka', 'HT', 'Wisma Indocement Lantai 12 Jl. Jend. Sudirman Kav. 70-71', 'belantarapusaka.pt@gmail.com', '(021) 2510461'),
(3, 'SK.581/MENLHK/SETJEN/HPL.0/9/2021', 3, 'PT. Belantara Persada', 'HA&HT', 'Wisma Indocement Lantai 12 Jl. Jend. Sudirman Kav. 70-71', 'belantara.kaltim@gmail.com', '(021) 6338670'),
(4, 'SK.116/Menhut-II/2014', 1, 'PT. Narkata Rimba', 'HA', 'JI. Syahrani Dahlan No. 09. Komplek Pesona Mahakam Kel. Harapan Baru. Kec.Loa Janan Ilir. Samarinda.', 'phsamarinda1@gmail.com', '0541-7268020'),
(5, ' -', 7, 'PT. ITCI Hutani Manunggal', 'HA&HT', ' Jl.Mulawarman', 'ictii@gamil.com', '  97786775656'),
(6, 'SK.97/Menhut-ll/2008', 1, 'PT. Seroja Universum Narwastu', 'HA', 'Jl. K. H. Anang Hasyim Komplek PWI Blok B No. 35. RT. 20, Air hitam, Samarinda', 'ptsunarwastu@gmail.com', '(0541)2088234'),
(7, 'SK.525/MENLHK/SETJEN/HPL.0/8/2021', 1, 'PT. Ratah Timber', 'HA&HT', 'Grand ITC Permata Hijau Blok Sapphire No. 7 & 8, Jl. Letjen. Soepeno (Arteri Permata Hijau), Jakarta', 'ratah.jkt@ratah.co.id', '021-53663137'),
(8, 'SK.892/MENLHK/SETJEN/PLA.0/10/2019', 1, 'PT. Acacia Andalan Utama', 'HT', 'Jl. H.M. Ardan No.65, RT.01, Kel. Sempaja Utara, Kec. Samarinda Utara, Kota Samarinda, Prov. Kaliman', 'IUPHHK-HTI@acaciaandalanutama.com', '0'),
(9, 'SK.187/MENLHK/SETJEN/HPL.0/2/2019', 1, 'PT. Daya Maju Lestari', 'HA&HT', 'Jl. Aipda KS Tubun Raya No.66 C', 'ptdaya.maju.lestari@gmail.com', '021-53672792'),
(10, 'SK.310/MENLHK/SETJEN/HPL.0/5/2021', 1, 'KOPERASI. Pontren Darussalam', 'HA', 'Jl. K. H. Anang Hasyim Komplek PWI Blok B No.35, Air Hitam', 'kppdarussalam@gmail.com', '(0541)2088234'),
(11, '15/1/IUPHHK-HTI/PMDN/2017', 1, 'PT. Mitra Mulia Mahakam', 'HT', 'Jl. P. Hidayatullah No 88 Samarinda', 'forestry@kppgroup.co.id', '541747822'),
(12, 'SK.571/Menlhk/Setjen/HPL.0/9/2021', 1, 'PT. Inhutani I Unit Labanan', 'HA', ' Jl. KH. Ahmad Dahlan No. 69, Kebayoran Baru, Jakarta Selatan', 'inhutani1.direksi@inhutani1.co.id ', '(021) 7243788 ? 7200'),
(13, ' -', 1, 'PT. Sumalindo Hutani Jaya I', ' -', ' -', ' -', '  -'),
(14, 'SK.219/MENLHK/SETJEN/HPL.0/5/2020', 1, 'PT. Inhutani I Unit Batu Ampar - Mentawir', 'HT', 'Jl. KH. Ahmad Dahlan No. 69 Kebayoran Baru', 'inhutani1.direksi@inhutani1.co.id', '(021) 7243788'),
(15, 'SK.156/Kpts-II/1996', 1, 'PT. Surya Hutani Jaya', 'HT', 'Desa Puan Cepak HTI Camp 38, Kec. Muara Kaman', 'iuphhk-hti@suryahutanijaya.com', '0541-739260'),
(16, ' -', 1, 'PT. Inhutani I Unit Meraang', ' -', ' -', ' -', '  -'),
(17, 'SK.762/Menlhk/Setjen/HPL.3/9/2021', 1, 'PT. Sumalindo Alam Lestari Unit II', 'HT', 'Kompleks Perkantoran Duta Merlin Blok A  No. 46-49, Jl. Gajah Mada No. 3-5', 'umsalunit2@gmail.com', '021-6338670'),
(18, '2/1/IUPHHK-PB/PMDN/2016', 1, 'PT. Tanjung Redep Hutani', 'HT', 'Jl. H.A.R.M Ayoeb RT XIII Gunung Tabur', 'tanjungredephutaniberau@gmail.com', '(+62) 85333219888'),
(19, 'SK. 553/Menhut-II/2013', 1, 'PT. Mutiara Kalja Permai Unit I (d.h. Wana Rimba Kencana)', 'HA', 'Jl. Basuki Rahmat No.2C', 'mutiarakaljapermai@yahoo.co.id', '0541-746231'),
(20, '846/Kpts-VI/99', 1, 'PT. Karya Lestari', 'HA', 'Jl. Kartini No.26 Samarinda ', 'ptkaryalestari@ymail.com', '(0541)742756'),
(21, '331/MENLHK/SETJEN/HPL.0/5/2019', 1, 'PT. Inhutani I Unit Long Nah', 'HT', 'Jl. K.H Ahmad Dahlan No.69 Kebayoran Baru, Jakarta Selatan', 'inhutani1.direksi@inhutani1.co.id', '(021)7200402'),
(22, ' -', 1, 'PT. Sumalindo Hutani Jaya II', ' -', ' -', ' -', '  -'),
(23, '195/Menhut-II/06', 1, 'PT. Inhutani I Unit Sambarata', 'HA', 'Jl. K.H Ahmad Dahlan No.69 Kebayoran Baru, Jakarta Selatan', 'inhutani1.direksi@inhutani1.co.id', '(021) 7243788'),
(24, ' -', 1, 'PT. Kelawit Hutani Lestari', ' -', ' -', ' -', '  -'),
(25, '845/Kpts-II/1999', 1, 'KUD. Beringin Mulya', 'HA', 'Desa Sido Mulyo Kec. Tabang, Kab. Kutai Kartanegara', 'beringinmulya99@gmail.com', ' -'),
(26, 'SK.767/Menlhk/Setjen/HPL.3/9/2021', 1, 'PT. Taman Daulat Wananusa', 'HT', 'Jl. Gajah Mada No. 156 N', 'herugiantotdw@gmail.com', '0541-733177'),
(27, 'SK.428/Kpts-II/2012', 1, 'PT. Fajar Surya Swadaya', 'HT', 'Jl. Aipda KS Tubun Raya No.66 C', 'fajarsuryaswadaya@gmail.com', '021-53672792'),
(28, 'SK.560/MENLHK/SETJEN/PLA.0/11/2018', 1, 'PT. Diva Perdana Pesona', 'HT', ' -', 'naro.wibowo@indikamultiproperti.co.id', '(+62)85216265495'),
(29, 'SK.777/Menhut-II/2014', 1, 'PT. Hutan Berau Lestari', 'HT', 'Wisma Indocement Lantai 12 Jl. Jend. Sudirman Kav. 70-71', 'hutanberaulestari.pt@gmail.com', '021-2510461'),
(30, '9/1/IUPHHK-HTI/PMDN/2015', 1, 'PT. Hanujaya Hutanindo', 'HT', 'Jl. P. Hidayatullah No 88 Samarinda', 'forestry@kppgroup.co.id', '0541-747822'),
(31, '990/Kpts-VI/1999', 1, 'PT. Segara Indochem', 'HA', 'Jl. Basuki Rahmat No.2C Samarinda', 'pt_segara_indochem@yahoo.co.id', '0541-746231'),
(32, '582/Menhut-II/09', 1, 'PT. Sumalindo Lestari Jaya IV', 'HA', 'Jl. Dr. Cipto Mangunkusumo, Sengkotek Loa Janan', 'headoffice@sanimardani.com', '021-29681717'),
(33, '1003/Kpts-VI/1999', 1, 'PT. Mardhika Insan Mulia', 'HA', 'Jl. Ramania Dalam Kel. Sidodadi RT.45 No.10 Kec. Samarinda Ulu', 'mardhika.kelay@gmail.com', '0541-202049'),
(34, '411/Menhut-ll/04', 1, 'PT. Panambangan', 'HA&HT', 'Jl. Kap. P. Tendean No.39 Mampang Prapatan', 'pt.panambangan@gmail.com', '021-5271879'),
(35, '853/Kpts-VI/99', 1, 'PT. Belayan River Timber', 'HA', 'Jl. Raya Samarinda - Tenggarong, Loa Kumbar, Loa Duri, Kec. Loa Janan', 'phsamarinda2@gmail.com', '0541-7268020'),
(36, 'SK.439/Menhut-II/2006', 1, 'PT. Widya Artha Perdana', 'HA', 'Jl. Karang Anyar RT. 04 No. 10 Tanjung Redeb', 'ptwidyaarthaperdana@gmail.com', '0554-2020937'),
(37, 'SK.548/MENHUT-2/2009', 1, 'PT. Aquila Silva', 'HA', 'Rukan Permata Senayan Blok C/12 Grogol Utara, Kebayoran Lama, Jakarta Selatan', 'itemkopi@gmail.com', '021-57948946'),
(38, '42/Menhut-II/09', 1, 'PT. Barito Nusantara Indah', 'HA', 'Wisma Barito Pacific Tower B Lantai 10', 'baritonusantaraindah2021@gmail.com', '(0541) 7201126'),
(39, 'SK.179/Menhut-II/2014', 1, 'PT. Balikpapan Wana Lestari', 'HA', 'Wisma Korindo, JL.M.T Haryono Kav.62 Jakarta Selatan, Indonesia', 'bfisotek@gmail.com', '(+62)8115929718'),
(40, 'SK.928/Menhut-II/2013', 1, 'PT. Daisy Timber', 'HA', 'Gedung Pesona 2th Floor, Suite 205 Jl. Ciputat Raya No. 20 Kebayoran Lama Jakarta Selatan', 'ibastomi598@gmail.com', '0554-24787'),
(41, 'SK.413/1/KLHK/2020', 1, 'PT. Silva Selaras Utama', 'HA&HT', 'Perumahan Citraland Blok D1/02, Kec. Sungai Pinang, Samarinda, Kalimantan Timur', 'silvaselarasutama@gmail.com', '0541-2838618'),
(42, 'SK.408/MENLHK/SETJEN/HPL.0/7/2021', 1, 'PT. Borneo Karya Indah Mandiri', 'HA', 'Jl. Hidayatullah No. 88 , Kota Samarinda', 'forestry@kppgroup.co.id', '(+62)541741355'),
(43, 'SK.298/1/KLHK/2020', 1, 'PT. Jaya Bumi Paser', 'HT', ' -', 'naro.wibowo@indikamultiproperti.co.id', '(+62)85216265495'),
(44, ' -', 1, 'PT. Tirta Mahakam Resources', ' -', ' -', ' -', '  -'),
(45, '576/MenLHK/Setjen/PLA.2/10/2017', 1, 'PT. Wana Kaltim Lestari', 'HA&HT', 'Kompleks Perkantoran Duta Merlin Blok.A No.46-49 Jl. Gajah Mada No.3-5 ', 'wanakaltimlestari@gmail.com', '021-6338670'),
(46, '864/Kpts-VI/1999', 1, 'PT. Wana Bakti Persada Utama', 'HA', 'Jl. Pulau Manimbora no.88  Tanjung Redep - Berau', 'vestol93@yahoo.co.id', '0554-2034779'),
(47, '61/Kpts-II/1997', 1, 'PT. Bhinneka Wana', 'HT', 'Wisma Idola Tunggal Jalan Letjen S.Parman Kav 67', 'Esanugraheni@gmail.com', ' -'),
(48, 'SK.161/Menhut-II/05', 1, 'PT. Intertropic Aditama', 'HA', 'Jl. Veteran No 1/7', 'ptintertropicaditama@gmail.com', '0541-205024'),
(49, 'SK.652/MENLHK/SETJEN/HPL.3/9/2021', 1, 'PT. Inhutani II Tanah Grogot', 'HT', 'Jl. Tebet Timur Raya No. 7', 'umht_tgt03@yahoo.co.id', '021-57852991'),
(50, '348/Menhut-II/08', 1, 'PT. Wangsa Karya Lestari', 'HA', 'Kawasan Industri Bekasi Fajar MM 2100 Jl. Sumbawa Kav. B5 Cikarang Barat', 'wkl@permatadoor.com', '021-898006'),
(51, 'SK.400/Menhut-II/2004', 1, 'PT. Sumalindo Lestari Jaya II', 'HA', 'Jl. Dr. Cipto Mangunkusumo, Sengkotek Loa Janan', 'logging3.div@sljglobal.com', '0541-261277'),
(52, 'SK.679/Menhut-II/2013', 1, 'PT. Borneo Kutai Lestari', 'HT', 'GRAND SLIPI TOWER, Level 42 G-H, Jl. Letjen S. Parman Kav  Babakan Kav. 22-24 Kelurahan Palmerah, Ke', 'borneo.kutai.lestari18@gmail.com', '021-2929-8878'),
(53, 'SK.217/MENHUT-II/2008', 1, 'PT. Kemakmuran Berkah Timber', 'HA', 'Gedung Panin Lt. 5, Jl. Jend. Sudirman No. 1, Gelora, Kec. Tanah Abang Kota, Jakarta Pusat, Senayan-', 'kbt.jkt@kemakmuranberkah.co.id ', '021-72799208 - 72799'),
(54, '407/MenLHK/Setjen/PLA.2/9/2018', 1, 'PT. Mardhika Insan Mulia Tabalar', 'HA', 'Jl. Ramania Dalam Kel. Sidodadi RT.45 No.10 Kec. Samarinda Ulu', 'mardhika.tabalar@gmail.com', '021-57945202'),
(55, 'SK.300/MENHUT-II/2007', 1, 'PT. Rimba Raya Lestari', 'HA&HT', 'Jl. Danau Indah Barat Blok B-3 No. 19 Sunter', 'deviyana17@yahoo.co.id', '(+62)81349625115'),
(56, 'SK.2/MENHUT-II/2008', 1, 'PT. Sendawar Adhi Karya', 'HT', 'Jl. Untung Suropati Perum Karpotek/ GTL Blok J No. 13-15, Kelurahan Karang Asam Ulu, Kecamatan Sunga', 'pt.sendawaradhikarya@gmail.com', ' -'),
(57, 'SK.578/MenLHK/Setjen/PLA.2/10/2017', 1, 'PT. Permata Borneo Abadi', 'HT', 'Menara Batavia Lanta', 'andys_rissa@permataabadi.com', '(021) 57930281'),
(58, 'SK.313/Menhut-II/2011', 1, 'PT. Santan Borneo Abadi', 'HT', 'Menara Batavia Lantai 17, Jl. KH Mas Mansyur Kav. 126', 'wilhelmus_suli@santanborneo.com', '0542-8511690'),
(59, 'SK.755/MENLHK/SETJEN/HPL.3/9/2021', 1, 'PT. Oceanias Timber Products', 'HT', 'BWK Building Lt.6, Jl. Asemka No. 24-26, DKI Jakarta 11110', 'oceantimberpro@gmail.com', '(021) 6929205'),
(60, 'SK.59/MENHUT-II/2014', 1, 'PT. Roda Mas Timber Kalimantan', 'HA', ' Ruko Grand ITC Permata Hijau Blok Sapphire No. 7-8. Jln. Arteri Raya Permata Hijau, Kebayoran Lama ', 'rodamas.jkt@rodamastimber.co.id ', '(021) 53664930 - 536'),
(61, 'SK.160/Menhut-II/2012', 1, 'PT. ITCI Kartika Utama (ITCIKU)', 'HA&HT', 'Jl. Jend. Sudirman No. 24', 'itci@arsari.co.id', '021-5732284'),
(62, 'SK.414/Menlhk/Setjen/HPL.0/7/2021', 1, 'PT. Nadila Indodaya', 'HA', 'Komp. KFC Jl. Danau Bedugul No. 9', 'forestry@kppgroup.co.id', '0541-747822'),
(63, 'SK.257/MENLHK/SETJEN/HPL.0/6/2020', 1, 'PT. Timberdana', 'HA', 'Gedung South Quarter Tower A Lt. 11 Unit C, JI. RA.Kartini Kav.8 RT.010 RW.04 Cilandak', 'tdajkt@gmail.com ', '021-22722125'),
(64, 'SK.646/MENLHK/SETJEN/HPL.0/8/2019', 1, 'PT. Greaty Sukses Abadi Unit Sungai Telakai', 'HA', 'Balikpapan Superblock (BSB) Blok A No. 28-29 Jl. Jend. Sudirman', 'greatysuksesabadigsa@gmail.com', '(0542) 7586878'),
(65, 'SK.184/MENLHK/SETJEN/HPL.0/4/2020', 1, 'PT. Harapan Kaltim Lestari', 'HA', 'Jl. Pangeran Antasari No. 45', 'mmarida7@gmail.com', '(+62)82125161163'),
(66, '784/Kpts-II/1996', 1, 'PT. Belantara Subur', 'HT', 'Jl. Sotek/Bongan KM.15, RT.009 Sotek, Kel. Sotek Kec. Penajam Paser Utara', 'bsht.perencanaan@korindo.co.id', '(+62)8115970560'),
(67, ' -', 1, 'PT. Puji Sempurna Raharja', 'HA', 'Jl. Pramuka Kav. 72', 'pujisempurnaraharja.psr@gmail.com', '021-4219889'),
(68, 'SK.699/Menlhk/Setjen/HPL.0/9/2016', 1, 'PT. Dharma Hutani Makmur', 'HT', 'Sahid Sudirman Center 17th Fl. Suite 17E Jl. Jend. Sudirman No. 86', 'helenaimelda78@gmail.com', '021- 27889019'),
(69, 'SK.236/Menhut-II/2011', 1, 'PT. Bakayan Jaya Abadi', 'HT', 'Menara Batavia Lantai 17, Jl. KH Mas Mansyur Kav. 126', 'raraandieda27@gmail.com', '0542-8511690'),
(70, 'umum_id', 0, 'pbphh', 'jenis', 'alamat', 'email', 'notelp'),
(71, ' -', 1, 'PT. Kelawit Wanalestari I', ' -', ' -', ' -', ' -'),
(72, 'SK.619/Menhut-II/2010', 1, 'PT. Mahakam Persada Sakti', 'HT', 'Menara Batawia Lantai 17, Jl. KH Mas Mansyur Kav. 126', 'riahman_sinaga@mahakampersada.com', '0542-511691'),
(73, 'SK.98/Menhut-II/2006', 1, 'CV. Pari Jaya Makmur', 'HA', 'Jl. K. H. Anang Hasyim Komplek PWI Blok B No. 35 Air Hitam Samarinda', 'parijayamakmur@gmail.com', '0541-2088234'),
(74, '52/Menhut-II/05', 1, 'PT. Utama Damai Indah Timber', 'HA', 'Jl. Kartini No.26 Samarinda ', 'pt.udit@yahoo.co.id', '0541-742756'),
(75, 'SK.269/Menhut II/2007', 1, 'PT. Kedungmadu Tropical Wood', 'HA', 'Jl. Basuki Rahmat No. 2C', 'kedungmadu@yahoo.com', '0541-746231'),
(76, ' -', 1, 'PT. Silva Rimba Lestari', '', '', '', ''),
(77, ' -', 1, 'PT. Swadaya Perkasa', '', '', '', ''),
(78, ' -', 1, 'PT. Indosubur Sukses Makmur', '', '', '', ''),
(79, ' -', 1, 'PT. Kiani Lestari', '', '', '', ''),
(80, ' -', 1, 'PT. Sylvaduta Corporation', '', '', '', ''),
(81, ' -', 1, 'PT. Rimba Karya Rayatama', '', '', '', ''),
(82, ' -', 1, 'PT. Kedap Sayaag', '', '', '', ''),
(83, ' -', 1, 'PT. Sumalindo Lestari Jaya V', '', '', '', ''),
(84, ' -', 1, 'PT. Permata Hijau Khatulistiwa', '', '', '', ''),
(85, ' -', 1, 'PT. Darma Putera Wahana Pratama', '', '', '', ''),
(86, ' -', 1, 'PT. Trimurti Madina Mulia', '', '', '', ''),
(87, ' -', 1, 'PT. Pakar Mula Bhakti', '', '', '', ''),
(88, ' -', 1, 'PT. Telakai Mandiri Sejahtera', '', '', '', ''),
(89, ' -', 1, 'PT. Sumber Mas Timber', '', '', '', ''),
(90, ' -', 1, 'PT. Anangga Pundinusa', '', '', '', ''),
(91, ' -', 1, 'PT. Rimba Sempana Makmur', '', '', '', ''),
(92, ' -', 1, 'PT. Karya Wijaya Sukses', '', '', '', ''),
(93, ' -', 1, 'PT. Multi Kusuma Cemerlang', '', '', '', ''),
(94, ' -', 1, 'PT. Marimun Timber and Industries', '', '', '', ''),
(95, ' -', 1, 'PT. Darma Putera Wahana Pratama', '', '', '', ''),
(96, ' -', 1, 'PT. Sumalindo Lestari Jaya (Site Gonpu I)', '', '', '', ''),
(97, ' -', 1, 'PT. Madyakara Pacifik Raya', '', '', '', ''),
(98, ' -', 1, 'PT. ITCI Hutani Manunggal (IKN)', '', '', '', ''),
(99, ' -', 1, 'PT. Kreasi Prima Lestari', '', '', '', ''),
(100, ' -', 1, 'PT. Sumalindo Alam Lestari Unit I', '', '', '', ''),
(101, ' -', 1, 'PT. Sumalindo Lestari Jaya', '', '', '', ''),
(102, ' -', 1, 'PT. Balikpapan Forest Industries', '', '', '', ''),
(103, ' -', 1, 'PT. Telaga Mas Kalimantan Company', '', '', '', ''),
(104, ' -', 1, 'PT. ITCI Kayan Hutani', '', '', '', ''),
(105, ' -', 1, 'PT. Buana Inti Energi', '', '', '', ''),
(106, ' -', 1, 'PT. Melapi Timber', '', '', '', ''),
(107, ' -', 1, 'PT. Sumalindo Lestari Jaya Tbk', '', '', '', ''),
(108, ' -', 1, 'PT. Puji Sempurna Raharja', '', '', '', ''),
(109, ' -', 1, 'PT. Greaty Sukses Abadi', '', '', '', ''),
(110, ' -', 1, 'PT. Cahaya Mitra Wiratama', '', '', '', ''),
(111, ' -', 1, 'PT. Wahana Subur Persada?', '', '', '', ''),
(112, ' -', 1, 'PT. Kelawit Wanalestari II', '', '', '', ''),
(113, ' -', 1, 'PT. ACK Rimba Lestari (d.h. Agro City Kaltim)', '', '', '', ''),
(114, ' -', 1, 'KSU. Mayang Putri Prima?', '', '', '', ''),
(115, ' -', 1, 'PT. Triwiraasta Bharata', '', '', '', ''),
(116, ' -', 1, 'PT. Acacia Andalan Utama II', '', '', '', ''),
(117, ' -', 1, 'PT. Amindo Wana Persada', '', '', '', ''),
(118, ' -', 1, 'PT. Restorasi Habitat Orangutan Indonesia', '', '', '', ''),
(119, ' -', 1, 'PT. Gunung Gajah Abadi', '', '', '', ''),
(120, ' -', 1, 'PT. Barito Pacific Timber (Unit Bengalon)', '', '', '', ''),
(121, ' -', 1, 'PT. Aditya Kirana Mandiri', '', '', '', ''),
(122, ' -', 1, 'PT. Barito Pacific Timber (Unit Bengalon)', '', '', '', ''),
(123, ' -', 1, 'PT. Hutan Mahligai', '', '', '', ''),
(124, ' -', 1, 'PT. Dewata Wanatama Lestari', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tb_kawasan`
--
ALTER TABLE `tb_kawasan`
  ADD PRIMARY KEY (`id_kawasan`);

--
-- Indexes for table `tb_pbph`
--
ALTER TABLE `tb_pbph`
  ADD PRIMARY KEY (`id_pbph`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_permintaan`
--
ALTER TABLE `tb_permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `tb_pokok`
--
ALTER TABLE `tb_pokok`
  ADD PRIMARY KEY (`id_pokok`);

--
-- Indexes for table `tb_rkt`
--
ALTER TABLE `tb_rkt`
  ADD PRIMARY KEY (`id_izin`),
  ADD KEY `id_santri` (`id_umum`);

--
-- Indexes for table `tb_sukel`
--
ALTER TABLE `tb_sukel`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tb_sumas`
--
ALTER TABLE `tb_sumas`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tb_telegram`
--
ALTER TABLE `tb_telegram`
  ADD PRIMARY KEY (`id_telegram`);

--
-- Indexes for table `tb_umum`
--
ALTER TABLE `tb_umum`
  ADD PRIMARY KEY (`id_umum`),
  ADD KEY `id_kawasan` (`id_kawasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kawasan`
--
ALTER TABLE `tb_kawasan`
  MODIFY `id_kawasan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pbph`
--
ALTER TABLE `tb_pbph`
  MODIFY `id_pbph` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_permintaan`
--
ALTER TABLE `tb_permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tb_pokok`
--
ALTER TABLE `tb_pokok`
  MODIFY `id_pokok` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `tb_telegram`
--
ALTER TABLE `tb_telegram`
  MODIFY `id_telegram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_umum`
--
ALTER TABLE `tb_umum`
  MODIFY `id_umum` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rkt`
--
ALTER TABLE `tb_rkt`
  ADD CONSTRAINT `tb_rkt_ibfk_1` FOREIGN KEY (`id_umum`) REFERENCES `tb_umum` (`id_umum`);

--
-- Constraints for table `tb_sukel`
--
ALTER TABLE `tb_sukel`
  ADD CONSTRAINT `tb_sukel_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`);

--
-- Constraints for table `tb_sumas`
--
ALTER TABLE `tb_sumas`
  ADD CONSTRAINT `id_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
