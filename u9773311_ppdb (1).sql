-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2019 at 02:52 PM
-- Server version: 10.2.25-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u9773311_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `hari`, `tanggal`, `kegiatan`, `tempat`, `keterangan`) VALUES
(1, 'Senin - Minggu', '14 Mei - 07 Juli 2018', 'Pendaftaran Online SMK AL-MAHRUSIYAH', 'Dimana Saja Asalkan Bisa Online atau di Sekretariat Pendafataran SMK AL-MAHRUSIYAH', '2'),
(2, 'Senin - Minggu', '28 Juni - 07 Juli 2018', 'Penyerahan Berkas-berkas Ke Panitia PPDB SMK AL-MAHRUSIYAH', 'Sekretariat SMK AL-MAHRUSIYAH LIRBOYO KEDIRI', '3'),
(3, 'Senin - Rabu', '07 - 10 Mei 2018', 'Sosialisasi/Promosi PPDB', 'SMP / MTS / Pondok Pesantren Wilayah Kediri', '1'),
(4, 'Senin - Minggu', '28 Juni - 07 Juli 2018', 'Registrasi Pembayaran', 'KPA (Kantor Pusat Administrasi) SMK AL-MAHRUSIYAH LIRBOYO KEDIRI', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_panitia`
--

CREATE TABLE `tb_panitia` (
  `id` int(11) NOT NULL,
  `nama_panitia` varchar(40) NOT NULL,
  `keterangan_panitia` varchar(200) NOT NULL,
  `kontak_hp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_panitia`
--

INSERT INTO `tb_panitia` (`id`, `nama_panitia`, `keterangan_panitia`, `kontak_hp`) VALUES
(1, 'Syamsul Maarif, S.Sos.I, M.Pd', 'Kepala SMK AL-Mahrusiyah Kediri', ''),
(2, 'Imam Junaidi Abror, S.Kom', 'Ketua Panitia PPDB SMK AL-Mahrusiyah Kediri', '085655639665'),
(3, 'Atiyatul Karimah, S.Pd', 'Panitia PPDB SMK AL-Mahrusiyah Kediri', ''),
(4, 'Siaful Aminin, S.Pd.I', 'Panitia PPDB SMK AL-Mahrusiyah Kediri', ''),
(5, 'Moh. Beny Try Prasetyo, S.Pd', 'Panitia PPDB SMK AL-Mahrusiyah Kediri', ''),
(6, 'Kartindria Farid Nugroho, S.Si', 'Panitia PPDB SMK AL-Mahrusiyah Kediri', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `nisn` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nama_smp` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id` int(11) NOT NULL,
  `register_nomor_pendaftaran` varchar(50) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nkk` varchar(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `no_akta` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `kbk` varchar(100) NOT NULL,
  `domis` varchar(50) NOT NULL,
  `almt_jl` varchar(100) NOT NULL,
  `rt` varchar(15) NOT NULL,
  `nm_dsn` varchar(40) NOT NULL,
  `nm_ds` varchar(40) NOT NULL,
  `nm_kec` varchar(40) NOT NULL,
  `nm_kt` varchar(40) NOT NULL,
  `nm_prov` varchar(60) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tmpt_tinggal` varchar(70) NOT NULL,
  `moda_transport` varchar(50) NOT NULL,
  `no_kks` varchar(25) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `penerima_kps` varchar(40) NOT NULL,
  `no_kps` varchar(25) NOT NULL,
  `lyk_pip` varchar(40) NOT NULL,
  `penerima_kip` varchar(40) NOT NULL,
  `no_kip` varchar(20) NOT NULL,
  `nm_kip` varchar(40) NOT NULL,
  `terima_kip` varchar(40) NOT NULL,
  `alasan_pip` varchar(100) NOT NULL,
  `nm_bank` varchar(40) NOT NULL,
  `rek_bank` varchar(20) NOT NULL,
  `nm_rek` varchar(40) NOT NULL,
  `nm_ayh` varchar(40) NOT NULL,
  `glr_ayh` varchar(40) NOT NULL,
  `nik_ayh` varchar(30) NOT NULL,
  `lhr_ayh` varchar(15) NOT NULL,
  `pnddk_ayh` varchar(40) NOT NULL,
  `pkrj_ayh` varchar(40) NOT NULL,
  `spk_ayh` varchar(70) NOT NULL,
  `pghsl_ayh` varchar(40) NOT NULL,
  `bk_ayh` varchar(50) NOT NULL,
  `nm_ibu` varchar(40) NOT NULL,
  `nik_ibu` varchar(30) NOT NULL,
  `lhr_ibu` varchar(15) NOT NULL,
  `pnddk_ibu` varchar(40) NOT NULL,
  `pkrj_ibu` varchar(40) NOT NULL,
  `spk_ibu` varchar(70) NOT NULL,
  `pghsl_ibu` varchar(40) NOT NULL,
  `bk_ibu` varchar(40) NOT NULL,
  `nm_wali` varchar(40) NOT NULL,
  `stts_wali` varchar(50) NOT NULL,
  `nik_wali` varchar(30) NOT NULL,
  `lhr_wali` varchar(15) NOT NULL,
  `pnddk_wali` varchar(40) NOT NULL,
  `spk_wali` varchar(70) NOT NULL,
  `pghsl_wali` varchar(40) NOT NULL,
  `alt_wali` varchar(100) NOT NULL,
  `rt_wali` varchar(10) NOT NULL,
  `nm_dsn_wali` varchar(50) NOT NULL,
  `nm_ds_wali` varchar(50) NOT NULL,
  `nm_kec_wali` varchar(50) NOT NULL,
  `nm_kt_wali` varchar(50) NOT NULL,
  `nm_prov_wali` varchar(50) NOT NULL,
  `kode_pos_wali` varchar(50) NOT NULL,
  `tlp_wali` varchar(50) NOT NULL,
  `no_rumah` varchar(10) NOT NULL,
  `no_hpwa_ayah` varchar(50) NOT NULL,
  `no_hpwa_ibu` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tggi_bdn` varchar(10) NOT NULL,
  `brt_bdn` varchar(10) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `jarak_sekolahan` varchar(70) NOT NULL,
  `tempuh_sekolahan` varchar(70) NOT NULL,
  `jml_sdr` varchar(10) NOT NULL,
  `jenis_prestasi` varchar(15) NOT NULL,
  `tingkat_prestasi` varchar(15) NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL,
  `tahun_prestasi` varchar(10) NOT NULL,
  `penyelenggara_prestasi` varchar(100) NOT NULL,
  `jns_beasiswa` varchar(40) NOT NULL,
  `ket_beasiswa` varchar(100) NOT NULL,
  `awl_beasiswa` varchar(40) NOT NULL,
  `akhr_beasiswa` varchar(40) NOT NULL,
  `jrsn_smk` varchar(60) NOT NULL,
  `jns_pendaftaran` varchar(80) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `msk_skl` varchar(25) NOT NULL,
  `tgl_lulus` varchar(30) NOT NULL,
  `d_kelas` varchar(5) NOT NULL,
  `nama_smp` varchar(50) NOT NULL,
  `nama_smp2` varchar(50) NOT NULL,
  `no_un` varchar(35) NOT NULL,
  `no_ijazah` varchar(40) NOT NULL,
  `no_skhun` varchar(40) NOT NULL,
  `almt_smp` varchar(50) NOT NULL,
  `kota_smp` varchar(50) NOT NULL,
  `prov_smp` varchar(50) NOT NULL,
  `ring` enum('1','0') NOT NULL,
  `v_smp` enum('0','1') NOT NULL,
  `valid` enum('0','1') NOT NULL,
  `v_skhun` enum('0','1') NOT NULL,
  `v_raport` enum('0','1') NOT NULL,
  `v_kk` enum('0','1') NOT NULL,
  `v_akta` enum('0','1') NOT NULL,
  `v_foto` enum('0','1') NOT NULL,
  `v_regis` enum('0','1') NOT NULL,
  `v_semua` enum('0','1') NOT NULL,
  `prioritas` enum('0','1') NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id`, `register_nomor_pendaftaran`, `nama`, `jenis_kelamin`, `nisn`, `nkk`, `nik`, `tempat_lahir`, `tanggal_lahir`, `no_akta`, `agama`, `kewarganegaraan`, `kbk`, `domis`, `almt_jl`, `rt`, `nm_dsn`, `nm_ds`, `nm_kec`, `nm_kt`, `nm_prov`, `kode_pos`, `tmpt_tinggal`, `moda_transport`, `no_kks`, `anak_ke`, `penerima_kps`, `no_kps`, `lyk_pip`, `penerima_kip`, `no_kip`, `nm_kip`, `terima_kip`, `alasan_pip`, `nm_bank`, `rek_bank`, `nm_rek`, `nm_ayh`, `glr_ayh`, `nik_ayh`, `lhr_ayh`, `pnddk_ayh`, `pkrj_ayh`, `spk_ayh`, `pghsl_ayh`, `bk_ayh`, `nm_ibu`, `nik_ibu`, `lhr_ibu`, `pnddk_ibu`, `pkrj_ibu`, `spk_ibu`, `pghsl_ibu`, `bk_ibu`, `nm_wali`, `stts_wali`, `nik_wali`, `lhr_wali`, `pnddk_wali`, `spk_wali`, `pghsl_wali`, `alt_wali`, `rt_wali`, `nm_dsn_wali`, `nm_ds_wali`, `nm_kec_wali`, `nm_kt_wali`, `nm_prov_wali`, `kode_pos_wali`, `tlp_wali`, `no_rumah`, `no_hpwa_ayah`, `no_hpwa_ibu`, `email`, `tggi_bdn`, `brt_bdn`, `hobi`, `jarak_sekolahan`, `tempuh_sekolahan`, `jml_sdr`, `jenis_prestasi`, `tingkat_prestasi`, `nama_prestasi`, `tahun_prestasi`, `penyelenggara_prestasi`, `jns_beasiswa`, `ket_beasiswa`, `awl_beasiswa`, `akhr_beasiswa`, `jrsn_smk`, `jns_pendaftaran`, `nis`, `msk_skl`, `tgl_lulus`, `d_kelas`, `nama_smp`, `nama_smp2`, `no_un`, `no_ijazah`, `no_skhun`, `almt_smp`, `kota_smp`, `prov_smp`, `ring`, `v_smp`, `valid`, `v_skhun`, `v_raport`, `v_kk`, `v_akta`, `v_foto`, `v_regis`, `v_semua`, `prioritas`, `tanggal_daftar`) VALUES
(13, 'SMP000001', 'MUHAMMAD RIDWAN', 'LAKI-LAKI', '0076715862', '3515112701091731', '3515112602070001', 'SIDOARJO', '2007-02-26', '1016260207', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'PARENGAN', '0.17/0.04', 'KRATON', 'KRATON', 'KRIAN', 'SIDOARJO', 'JAWA TIMUR', '61262', 'Bersama Orang Tua', 'BIS', '-', '2', 'TIDAK', '-', 'TIDAK', 'TIDAK', '-', '-', 'TIDAK', '', '-', '', '-', 'SUGIANTO', '-', '3515110101740051', '1974', 'SMA Sederajat', 'Wiraswasta', 'PEDAGANG', '1.000.000 - 1.999.9999', 'Tidak', 'DWI WIDANARTI', '351511640810001', '1981', 'SMA Sederajat', 'Tidak Bekerja', 'TIDAK BEKERJA', 'Kurang dari 500.000', 'Tidak', '-', '-', '', '', '', '-', '', '-', '-', '-', '-', '-', '-', '-', '-', '-', '0857850499', '085785049990', '085785049990', '-', '-', '-', 'BULU TANGKIS', 'Kurang dari 1 Kilometer', 'O.10', '2', '', '', '', '', '', '', '-', '-', '-', '', 'Siswa Baru', '2860', '24', '12', '7', '', '', '1-19-05-11-0243-0055-2', '-', '-', 'SEKOLAH DASAR NEGERI KRATON', 'SIDOARJO', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2019-06-24 02:28:18'),
(14, 'MTS000001', 'SHOLAHUDDIN ANWAR', 'LAKI-LAKI', '0066101841', '3175060202100023', '3175060510060009', 'JAKARTA', '2006-10-05', '18.217/U/JT/2006', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'KP PEDAENGAN', '002/008', 'PENGGILINGAN', 'PENGGILINGAN', 'CAKUNG', 'JAKARTA TIMUR', 'DKI JAKARTA', '13940', 'Bersama Orang Tua', 'JALAN KAKI', '', '-2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SARBANI', '-', '3175060202710020', '1971', 'SMA Sederajat', 'Karyawan Swasta', 'MARKETING', '1.000.000 - 1.999.9999', 'Tidak', 'NURLAELA', '3175064705720022', '1972', 'SMA Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', 'SARBANI', 'AYAH', '3175060202710020', '1971', 'SMA Sederajat', 'MARKETING', '1.000.000 - 1.999.9999', 'KP PEDAENGAN ', '002/008', 'PENGGILINGAN ', 'PENGGILINGAN', 'CAKUNG', 'JAKARTA TIMUR', 'DKI JAKARTA', '13940', '0817755625', '-', '0817755625', '089607635498', '-', '161', '35', 'BERMAIN BOLA DAN BERENANG', 'Kurang dari 1 Kilometer', '00.03', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '24 ', '13', '7', '', '', '1-19-01-05-0272-0032-9', '0', '0', 'JL.RAYA PENGGILINGAN RT 02/07 KEL. PENGGILINGAN KE', 'JAKARTA TIMUR ', 'DKI JAKARTA', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2019-06-24 02:35:07'),
(15, 'SMP000001', 'ZACKY HASBI QUSYAIRY', 'LAKI-LAKI', '0.0067886959', '3520073010080001', '3520071004050004', 'BEKASI', '2006-04-10', '5133/2006', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DUSUN GEMBONG', 'VI/I', 'DUSUN GEMBONG', 'PLUMPUNG', 'PLASOSAN', 'MAGETAN', 'JAWA TIMUR', '63361', 'Bersama Orang Tua', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'HASAN BASRI', '-', '3520070106760003', '1975', 'SMA Sederajat', 'Wiraswasta', 'WIRASWASTA', '2.000.000 - 4.999.9999', 'Tidak', 'BINTI MUANAS', '3520075403850001', '1985', 'SMA Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081235109019', '081216298443', '-', '160', '45', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.10', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '24 JUNI 2019', '12 JUNI 2019', '7', '', '', '69-0012-0017-8', '-', '-', 'MADRASAH IBTIDAIYYAH PLUMPUNG', 'PLUMPUNG', 'MAGETAN', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2019-06-24 02:37:49'),
(16, 'MA000001', 'DEPA BAGUS PRASETYA', 'LAKI-LAKI', '0042624877', '1801241602110012', '1801241803040002', 'SIDOHARJO', '2004-03-18', 'K 18010446285', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'DUSUN XI DESA SIDOHARJO', '002/ 011', 'SIDO RAHAYU', 'SIDOHARJO', 'WAY PANJI', 'KABUPATEN LAMPUNG SELATAN', 'LAMPUNG', '35453', 'Asrama/Mondok', 'JALAN KAKI', '', '3', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUTOPO', '-', '1801240404610001', '1961', 'Putus SD', 'Petani', 'PETANI SAWAH', '2.000.000 - 4.999.9999', 'Tidak', 'SUGIATI', '1801246308680001', '1968', 'SD Sederajat', 'Pedagang Kecil', 'LAPAK PASAR', '2.000.000 - 4.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085378422733', '082377479898', '', '130', '40', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '2', 'Olahraga', '', 'FUTSAL', '2016', 'SEKOLAH', '', '', '', '', '', 'Siswa Baru', '-', '-', '30 MEI 2019', '10', '', '', '2-19-12-08-0602-0009-8', '-', '-', 'JL. KAUMAN NO. 01 RT. 04 RW. 06 KEC. WAWAY KARYA ', 'KABUPATEN LAMPUNG TIMUR 34183', 'LAMPUNG', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 03:02:59'),
(17, 'MTS000002', 'MUHAMAD FAREL FIRDAUS ', 'LAKI-LAKI', '0073622451', '3215232906090016', '3215230506070001', 'KARAWANG', '2007-06-05', '3215.AL.2008.020827', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'KRAJAN BARAT ', '002/001', 'MUKTIJAYA', 'MUKTIJAYA', 'CILAMAYA KULON', 'KARAWANG', 'JAWA BARAT', '-', 'Bersama Orang Tua', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'ACENG JAMALUDIN', '-', '3215230407770007', '1977', 'SMA Sederajat', 'Wiraswasta', 'PEDAGANG', '1.000.000 - 1.999.9999', 'Tidak', 'HAYIN DAILIA', '3215235605810001', '1981', 'SMP Sederajat', 'Tidak Bekerja', 'MENGURUS RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', 'ACENG JAMALUDIN', 'AYAH', '3215230407770007', '1977', 'SMA Sederajat', 'PEDAGANG', '1.000.000 - 1.999.9999', 'KRAJAN BARAT', '002/001', 'MUKTIJAYA', 'MUKTIJAYA', 'CILAMAYA KULON', 'KARAWANG', 'JAWA BARAT', '-', '085886687024', '-', '085886687024', '-', '-', '150', '50', 'BERMAIN BOLA', 'Kurang dari 1 Kilometer', '00.03', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '111232090041170023', '0', '12', '7', '', '', '16-5090-0006-3', '0', '0', 'JL.KH. WAHID HASYIM MERTAPADA KULON KECAMATAN ASTA', 'CIREBON', 'JAWA BARAT', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 03:13:00'),
(18, 'MA000001', 'LISYA EFITASARI', 'PEREMPUAN', '0038770112', '3506091302190020', '3506095012030004', 'KEDIRI', '2003-12-10', '2273/I/2004', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DSN PULEREJO', '002/002', 'PULEREJO', 'WONOREJO TRISULO', 'PLOSOKLATEN', 'KEDIRI', 'JAWA TIMUR', '64175', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'JALI', '-', '0', '0', 'SMP Sederajat', 'Lain-lain', '0', '', 'Tidak', 'SRIANI', '3506096802720004', '1972', 'SD Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', '1.000.000 - 1.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081217653509', '081217653509', '', '150', '50', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '2-19-05-04-0033-0009-8', '0', '0', 'JALAN MELATI 157 CENTONG TIMUR', 'KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 03:18:40'),
(20, 'MTS000003', 'MUHAMMAD ISMAIL HASAN', 'LAKI-LAKI', '0132308394', '1805080810130010', '1805080908070003', 'MORIS JAYA ', '2007-08-09', '1805CLI1202201034125', 'ISLAM', 'WNI', 'Tidak', 'HMP', '-', '003/001', 'MORIS JAYA', 'MORIS JAYA ', 'BANJAR AGUNG', 'TULANG BAWANG', 'LAMPUNG', '-', 'Bersama Orang Tua', 'JALAN KAKI', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MULYADI', '-', '1805080503730001', '1973', 'SD Sederajat', 'Petani', 'PETANI', '1.000.000 - 1.999.9999', 'Tidak', 'SITI HALIMAH', '1805085008810001', '1981', 'SMP Sederajat', 'Tidak Bekerja', 'MENGURUS RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', 'MULYADI', 'AYAH', '1805080503730001', '1973', 'SD Sederajat', 'PETANI', '1.000.000 - 1.999.9999', '-', '003/001', 'MORIS JAYA', 'MORIS JAYA', 'BANJAR AGUNG ', 'TULANG BAWANG', 'LAMPUNG', '-', '085245315874', '-', '085245315874', '-', '-', '138', '55', 'BERMAIN BOLA', 'Kurang dari 1 Kilometer', '00.03', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0132308394', '0', '13', '7', '', '', '0', '0', '0', 'RK 1 KAMPUNG MORIS JAYA ', 'TULANG BAWANG ', 'LAMPUNG ', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 03:41:45'),
(21, 'MDN000001', 'MITA NAFIA SAFIRA', 'PEREMPUAN', '', '3173010601093292', '3173016604010003', 'JAKARTA', '2001-04-26', '14826/DISP/JB/2002/2001', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'PEDONGKELAN ', '005/0016', 'KAPUK', 'KAPUK', 'CENGKARENG', 'JAKARTA BARAT', 'DKI JAKARTA', '11720', 'Bersama Orang Tua', ',MOBIL', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MASRURY', 'SLTA', '3173010202720010', '1972', 'SMA Sederajat', 'Buruh', 'BURUH', '5.000.000 - 20.000.000', 'Tidak', 'YUNINGSIH', '3173016604010003', '1978', 'SMP Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0896081686', '089608168657', '089608168657', 'mitanafia@gmail.com', '150', '45', 'NGAJI', 'Lebih dari 1 Kilometer', '20 MENIT', '2', 'lainnya', 'Kabupaten/Kota', 'PIDATO', '2015', 'SEKOLAH', '', '', '', '', '', 'Siswa Baru', '', '', '', 'TK-A', '', 'IAIT KEDIRI', 'BELUM JADI', 'BELUM JADi', 'BELUM JADi', 'DSN. JATI MULYA DS. BABAKAN KEC. LEBAKSIYU', 'TEGAL', 'JAWA TENGAH', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2019-06-24 03:43:19'),
(22, 'MA000002', 'ANA MAULIDA JAMILAH', 'PEREMPUAN', '0053133777', '3301201902090009', '3301205204050001', 'CILACAP', '2005-04-12', '17132/DIS/2009', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DSN KLEPUKEREP', '004/014', 'KLEPUKEREP', 'BULAKSARI', 'BANTARSARI', 'CILACAP', 'JAWA TENGAH', '53258', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SLAMET BISRI MUSTOFA', '-', '3301200804800004', '1980', 'SMA Sederajat', 'Petani', 'PETANI PADI DAN PALAWIJA', '2.000.000 - 4.999.9999', 'Tidak', 'SITI CHOMSATUN', '3301205204850005', '1985', 'SMA Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', '1.000.000 - 1.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082232306965', '085227823470', '', '150', '48', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '4', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '1-19-03-09-742-181-4', '0', '0', 'JALAN ABDUL KARIM LIRBOYO KOTA KEDIRI', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2019-06-24 03:45:54'),
(23, 'SMP000002', 'GALANG TAULADAN', 'LAKI-LAKI', '0.069542703', '1802072205054948', '1802072807050003', 'BANDAR SARI', '2006-07-28', '1802072807060003', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'LINGKUNGAN IV', '007/002', 'LINGKUNGAN IV', 'BANDAR JAYA BARAT', 'TERBANGGI BESAR', 'LAMPUNG TENGAH', 'LAMPUNG', '34161', 'Bersama Orang Tua', 'JALAN KAKI', '-', '4', 'TIDAK', '-', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'NURUDIN', '-', '180207100665009', '1966', 'SD Sederajat', 'Buruh', 'BURUH HARIAN', '500.000 - 999.999', 'Tidak', 'SAMIJAH', '1802074709700009', '1970', 'SD Sederajat', 'Buruh', 'BURUH', '500.000 - 999.999', 'Tidak', 'NUR ROHMAN', 'PAMAN', '1802040510760007', '1976', 'SMA Sederajat', 'PETANI', '2.000.000 - 4.999.9999', 'LINGKUNGAN 1 GEDONG SARI', '0.02/0.00', 'SEPUTIH JAYA', 'SEPUTIH JAYA', 'GUNUNG SUGIH ', 'LAMPUNG TENGAH', 'LAMPUNG', '-', '081379852322', '', '085384779882', '085384779882', '-', '150', '-', '-', 'Kurang dari 1 Kilometer', '0.10', '4', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '24', '12', '7', '', '', '1-19-12-03-803-010-7', '-', '-', 'SD ISLAM MAARIF 02', 'LAMPUNG TENGAH', 'LAMPUNG', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 03:48:20'),
(24, 'MTS000003', 'AHMAD DHIYAUL HAQQI', 'LAKI-LAKI', '0076919234', '3571011205069376', '3571013004070002', 'KEDIRI', '2007-04-30', '1866/IND/2007', 'ISLAM', 'WNI', 'Tidak', 'NDK', 'TUMPANG', '025/005', 'TUMPANG', 'POJOK', 'MOJOROTO', 'KEDIRI', 'JAWA TIMUR', '64117', 'Bersama Orang Tua', 'SEPEDA', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'JAYASIM', '-', '3571011707700001', '1970', 'SMA Sederajat', 'Pedagang Kecil', 'JUAL AYAM POTONG', '1.000.000 - 1.999.9999', 'Tidak', 'ULWIYATU DAROJATUL WALIDIYAH', '3571014103810001', '1981', 'SMP Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', '500.000 - 999.999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085233855788', '085320584976', '.', '142', '33', 'MASAK', 'Lebih dari 1 Kilometer', '00.30', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0076919234', '15', '12 JUNI 2019', '7', '', '', '1-19-05-54-0006-0001-8', '.', '.', 'MIS HIDAYATUL MUBTADIIN', 'KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 03:55:04'),
(25, 'SMP000002', 'SINTA TAHTA KHUMAIDA', 'PEREMPUAN', '0.0068193848', '3503061401110012', '3503066012060001', 'TRENGGALEK', '10-12-2006', '8159/BL/2010', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DUSUN TAMTU', '25/11', 'DUSUN TAMTU', 'SUKOWETAN', 'KARANGAN', 'TRENGGALEK', 'JAWA TIMUR', '66361', 'Bersama Orang Tua', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'ANWARI', '-', '3503062406770002', '1977', 'SMP Sederajat', 'Wiraswasta', 'WIRASWASTA', '2.000.000 - 4.999.9999', 'Tidak', 'SITI NURASIYAH', '3503064401870003', '1987', 'SMP Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082352552591', '082352552591', '-', '-', '-', '-', 'Kurang dari 1 Kilometer', '00.10', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '24 JUNI 2019', '25 MEI 2019', '7', '', '', '26-0200-0016-9', '-', '-', 'KARANGAN', 'TRENGGALEK', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 03:58:47'),
(27, 'MTS000004', 'AHMAD DHANIAL FIRDAUS', 'LAKI-LAKI', '0073900839', '3506031604150002', '3505020203070001', 'BLITAR', '2007-03-02', '18.117/TP/VIII/TAHUN 2007', 'ISLAM', 'WNI', 'Tidak', 'HMP', '0', '012/004', 'DSN. SUMBERSARI', 'JABANG', 'KRAS', 'KEDIRI', 'JAWA TIMUR', '64172', 'Bersama Orang Tua', 'HMP', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MOCH. ALI IMRON', 'S. Ag', '3505020211760001', '1976', 'D4/S1', 'Wiraswasta', 'PETERNAK', '2.000.000 - 4.999.9999', 'Tidak', 'TATIK ARIZAH', '3505026912790002', '1979', 'SMA Sederajat', 'Wiraswasta', 'PETERNAK', '2.000.000 - 4.999.9999', 'Tidak', '0', '0', '0', '0', 'Tidak Sekolah', '0', 'Kurang dari 500.000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '081554764006', '085735706716', '0', '150', '45', 'SEPAK BOLA', 'Kurang dari 1 Kilometer', '00.10', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0073900839', '24 JUNI 2019', '12 JUNI 2019', '7', '', '', '1-19-05-22-0653-0002-7', '0', '0', 'DESA BENDOSARI KECAMATAN KRAS', 'KABUPATEN KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2019-06-24 04:12:47'),
(28, 'SMP000003', 'TEGUH ADI NUGROHO', 'LAKI-LAKI', '0.0076575872', '1506062709120009', '1506061303070003', 'JAMBI', '13-3-2007', '582.0010166', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'TELUKPENGKAH', 'V/', 'TELUKPENGKAH', 'TELUKPENGKAH', 'TEBING TINGGI', 'TANJUNG JABUNG BARAT', 'JAMBI', '36552', 'Bersama Orang Tua', 'JALAN KAKI', '', '6', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SAINO', '-', '1506061808730002', '1973', 'SMP Sederajat', 'Wiraswasta', 'WIRASWASTA', '2.000.000 - 4.999.9999', 'Tidak', 'RATNA WATI', '150606500670004', '1976', 'SD Sederajat', 'Tidak Bekerja', 'MENGURUS RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081278412035', '082783118286', '-', '150', '45', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.10', '', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '24 JUNI 2019', '12 JUNI 2019', '7', '', '', '1-19-10-06-0121-0025-B', '-', '-', 'TEBING TINGGI', 'TANJUNG TBUNG BARAT', 'JAMBI', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 04:13:32'),
(29, 'MA000003', 'ACHMAD SYAIFUL MUBAROK', 'LAKI-LAKI', '0055361509', '3324110908084314', '3324111810050001', 'KENDAL', '2005-10-18', '3324-LT-29102015-0021', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'CREME CEPOKOMULYO', '004/006', 'CREME CEPOKOMULYO', 'CEPOKOMULYO', 'GEMUH', 'KENDAL', 'JAWA TENGAH', '51356', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUGIYANTO', '-', '3324110106680001', '1968', 'SMA Sederajat', 'Lain-lain', 'KAUR UMUM', '2.000.000 - 4.999.9999', 'Tidak', 'NUR FITRIYAH', '3324114710740001', '1974', 'SMA Sederajat', 'Tidak Bekerja', 'IRT', '1.000.000 - 1.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085974735338', '08979927703', '', '158', '50', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '0', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '29-252-002-7', '0', '0', 'JLN KH ABDUL WAHAB KM 02 BOJONGGEDE -NGAMPEL-KENDA', 'KENDAL', 'JAWA TENGAH', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 04:16:39'),
(30, 'MA000004', 'AUFAA ERIZA RAHARJO', 'PEREMPUAN', '0', '3329131608110001', '3329135901050003', 'BREBES', '2005-01-19', '2600/G/2005', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'JALAN CENDRAWASIH NO .280', '004/003', 'TANJUNG', 'TANJUNG', 'TANJUNG', 'BREBES', 'JAWA TENGAH', '52254', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUDI RAHARJO', 'S.Pd', '3329131209630003', '1963', 'D4/S1', 'PNS/TNI/POLRI', 'GURU SD', '5.000.000 - 20.000.000', 'Tidak', 'KHERIYAH', '3329135002690001', '1969', 'SMP Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '083898380282', '083837078258', '', '158', '50', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '32-0205-0060-5', '0', '0', 'JLN RAYA KARANG -SENGGOM', 'SONGGOM', 'JAWA TENGAH', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 04:36:36'),
(31, 'MA000005', 'MISTI NUR NAVIS SATUN NAJAH', 'PEREMPUAN', '0040476447', '1409030701087982', '1409034107040016', 'PETAI BARU', '2004-07-01', '27078/T/2007/477', 'ISLAM', 'INDONESIA', 'Maagh', 'HMP', 'JALAN POROS SYEHC AHMAD BUNDA', '013/005', 'PETAI BARU', 'PETAI BARU', 'SINGINGI', 'KUANTAN SINGINGI', 'RIAU', '29563', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'AMIN TOHARI', '-', '1409032411790001', '1979', 'SMP Sederajat', 'Lain-lain', 'SOPIR', '2.000.000 - 4.999.9999', 'Tidak', 'HARMI', '1409034911810006', '1981', 'SD Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082283647979', '082385734892', '', '158', '50', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '2-19-09-11-0121-0029-4', '0', '0', 'DESA SAMPANG RAYA KECAMATAN SINGGIGI', 'KUANTAN SINGINGI', 'RIAU', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 04:55:18'),
(32, 'MTS000005', 'MOH NABIL ZAMZAMI', 'LAKI-LAKI', '0068683224', '3506061911100611', '3506062603060002', 'KEDIRI', '2006-03-26', '5562/P/IV/2006', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', '0', '009/003', 'SILIR', 'SILIR', 'WATES', 'KEDIRI', 'JAWA TIMUR', '64174', 'Asrama/Mondok', 'JALAN KAKI', '0', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MOOH. TOHARI', '-', '3506060110760003', '1978', 'SMA Sederajat', 'Wiraswasta', 'BIRO JASA', '5.000.000 - 20.000.000', 'Tidak', 'NUR ANDAWIYAH', '3506065303790001', '1979', 'SMA Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', 'IKFINA HIMMATI ALFI BAITI', 'KAKAK', '3571016804940001', '1994', 'D4/S1', 'GURU', '1.000.000 - 1.999.9999', 'JL. JENG ESTI', '007/003', 'JENGGLIK', 'TAMANAN', 'MOJOROTO', 'KEDIRI', 'JAWA TIMUR', '64117', '085777789052', '', '085790444554', '085608211113', '', '160', '65', 'SEPAK BOLA', 'Kurang dari 1 Kilometer', '00.10', '3', 'lainnya', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0068683224', '15 JULI 2019', '20 JUNI 2019', '7', '', '', '1-19-05-72-0053-0011-6', '-', '-', 'MI MIFTAHUL HUDA', 'KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:01:58'),
(33, 'MA000005', 'SITI YULIA AGUSTIN', 'PEREMPUAN', '0.00433219133', '6105131206090024', '0106134400040004', 'SINTANG ', '2004-09-04', '5158/T.DIS.SKB/2006', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DUSUN SINAR BARU', '004/002', 'DUSUN SINAR BARU', 'SARAI ', 'SUNGAI TEBELIAN', 'KABUPATEN SINTANG', 'KALIMANTAN BARAT', '78655', 'Asrama/Mondok', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUTRISNO', '-', '61055131701770003', '1977', 'SMP Sederajat', 'Petani', 'PETANI SAWIT', '5.000.000 - 20.000.000', 'Tidak', 'NURHAYATI', '6105134503880002', '1988', 'SMP Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082152933328', '081256825289', '', '155', '45', 'SENI', 'Kurang dari 1 Kilometer', '00.15', '2', 'Seni', 'Kabupaten/Kota', 'KALIGRAFI', '2016', 'KABUPATEN', '', '', '', '', '', 'Siswa Baru', '.', '15 JULI 2019', '29 MEI 2019', '10', '', '', '2-19-13-06-077-058-7', '-', '-', 'JL SINTANG - PONTIANAK KM 10 BALAI AGUNG ', 'KABUPATEN SINTANG', 'KALIMANTAN BARAT', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:07:31'),
(34, 'MTS000005', 'EARLYDEA BINTANG MAHARANI', 'PEREMPUAN', '0066912195', '3578060201089102', '3578066612060004', 'SURABAYA', '2007-12-26', '20839/2008', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'KEMBANG KUNING KRAMAT JAYA 1/5', '015/006', 'KEMBANG KUNING', 'PAKIS', 'SAWAHAN', 'SURABAYA', 'JAWA TIMUR', '60256', 'Asrama/Mondok', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'ARIS BUDIARTANTO', '-', '3578060604780002', '1978', 'SMA Sederajat', 'Karyawan Swasta', 'KARYAWAN', '2.000.000 - 4.999.9999', 'Tidak', 'DEWI UMFI TRINILAKSMIDHATI', '3578085007770005', '1977', 'D4/S1', 'Karyawan Swasta', 'KARYAWAN SWASTA', '2.000.000 - 4.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081331460004', '081703406173', '.', '151', '38', 'MENGGAMBAR', 'Kurang dari 1 Kilometer', '00.05', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0066912195', '15 JULI 2019', '12 JUNI 2019', '7', '', '', '11-0070-042-7', '-', '-', 'SDIT EL-HAQ', 'SIDOARJO', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:09:02'),
(35, 'MA000006', 'FAIZ MUHYA', 'LAKI-LAKI', '0', '3324090808088696', '3324090806040003', 'KENDAL', '2004-06-08', '55133/TP/2009', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'NOROWITO', '003/004', 'NOROWITO', 'REJOSARI', 'BRANGSONG', 'KENDAL', 'JAWA TENGAH', '51371', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'ASARI', '-', '3324092807750002', '1975', 'SMA Sederajat', 'Petani', 'PETANI PADI', '2.000.000 - 4.999.9999', 'Tidak', 'SITI KOMSATUN', '3324095002740004', '1974', 'SD Sederajat', 'Petani', 'PETANI PADI', '500.000 - 999.999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '08179510577', '0', '', '158', '48', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '29-252-009-8', '0', '0', 'JLN KH ABDUL WAHAB KM 02 BOJONGGEDE -NGAMPEL-KENDA', 'KENDAL', 'JAWA TENGAH', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:09:30'),
(37, 'MA000007', 'SEPTIANI', 'PEREMPUAN', '0049869212', '3506010312102407', '3506014909030001', 'KEDIRI', '2003-09-09', '3506-LT-11072013-0347', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'PAGUNG', '002/006', 'PAGUNG', 'PAGUNG', 'SEMEN', 'KEDIRI', 'JAWA TIMUR', '24161', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUNARYO', '-', '3506011205730003', '1973', 'SMP Sederajat', 'Petani', 'PETANI PADI', '1.000.000 - 1.999.9999', 'Tidak', 'SUPPIPIN SRIWAHYUNI', '3506016807810003', '1981', 'SD Sederajat', 'Petani', 'PETANI PADI', '1.000.000 - 1.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085853368881', '0', '', '158', '50', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '22-0098-0069-4', '0', '0', 'SEMEN KEDIRI', 'KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:26:24'),
(38, 'MTS000006', 'ARINA NIHAYA AULIYA', 'PEREMPUAN', '0075663075', '3571010905110007', '3571016204070004', 'KEDIRI', '2007-04-22', '1828/IND/2007', 'ISLAM', 'INDONESIA', 'Tidak', 'NDK', '-', 'RT/RW 022/005', 'NGLEBAK', 'POJOK', 'MOJOROTO', 'KOTA KEDIRI', 'JAWA TIMUR', '64115', 'Bersama Orang Tua', 'SEPEDA', '-', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '-', '-', 'TIDAK', '', '', '', '', 'SAHURI', '-', '3571011210740005', '1974', 'SMA Sederajat', 'Karyawan Swasta', 'PERUSAHAAN RADIO', '1.000.000 - 1.999.9999', 'Tidak', 'PONIASRI ANISAH', '3571015104840006', '1984', 'SMP Sederajat', 'Tidak Bekerja', '-', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '081335632128', '082330266125', '-', '146', '51', 'MEMASAK', 'Lebih dari 1 Kilometer', '15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0075663075', '15 JULI 2019', '12 JUNI 2019', '7', '', '', '54000600027', '-', '-', 'JL. SUMBER TRETES NO.2 NGLEBAK TUMPANG MOJOROTO', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:26:32'),
(39, 'MA000007', 'MOKHAMAD SAEFUL ANWAR', 'LAKI-LAKI', '0043332892', '3305122402072825', '3305122503040003', 'KEBUMEN', '2004-03-25', '2213/ 2004', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'DUKUH GESIKAN', '005/003', 'GESIKAN', 'DEPOKREJO', 'KEBUMEN', 'KABUPATEN KEBUMEN', 'JAWA TENGAH', '54351', 'Asrama/Mondok', 'JALAN KAKI', 'K2F9YN', '2', 'YA', '', 'YA', 'YA', 'T6DB6B', 'MOKHAMAD SAEFUL ANWAR', 'YA', 'Pemegang PKH/KPS/KIP', 'BNI', '0731787212', 'MOKHAMAD SAEFUL ANWAR', 'MUH NAIBUL FAKIR', '-', '3305121505690007', '1969', 'SD Sederajat', 'Buruh', 'BURUH HARIAN LEPAS', '2.000.000 - 4.999.9999', 'Tidak', 'SITI FATIMAH', '3305124502770004', '1977', 'SD Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', '500.000 - 999.999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '083836140531', '081392610590', '', '150', '45', 'MELUKIS', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', 'lainnya', '', '', '', '', 'Siswa Baru', '-', '-', '29 MEI 2019', '10', '', '', '2-19-03-11-0502-0083-6', '-', '-', 'JALAN TENTARA PELAJAR NOMOR 29 KEBUMEN 54312', 'KABUPATEN KEBUMEN', 'JAWA TENGAH', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:29:23'),
(40, 'MA000007', 'WAHYUNING FUJI', 'PEREMPUAN', '0.044570335', '3329140112110013', '3329144411040010', 'BREBES', '2004-11-04', '31525/G/2005', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'RANCAWULUH', '003/006', 'RANCAWULUH', 'RANCAWULUH', 'BULAKAMBA', 'BREBES', 'JAWA TENGAH', '52253', 'Asrama/Mondok', 'JALAN KAKI', '-', '1', 'TIDAK', '', 'TIDAK', 'YA', 'ta64c1', 'WAHYUNING FUJI', 'TIDAK', 'Pemegang PKH/KPS/KIP', 'BNI', '', '', 'FATUROHMAN', '-', '3329142805700001', '1970', 'SD Sederajat', 'Wiraswasta', 'SOPIR', '5.000.000 - 20.000.000', 'Tidak', 'WASNAH', '3329144501790009', '1979', 'SD Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '085229760682', '-', '-', '145', '43', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '2', 'Olahraga', 'Kabupaten/Kota', 'OSN', '2019', 'KABUPATEN', '', '', '', '', '', 'Siswa Baru', '.', '0', '0', '10', '', '', '16-0522-0089-8', '-', '-', 'BUNTET PESANTREN KEC ASTANAJAPURA', 'KABUPATEN CIREBON', 'JAWA BARAT', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:40:27'),
(41, 'MA000008', 'ASNA ALWIYATUL MASLAHAH', 'PEREMPUAN', '0.035162584', '3506010312102862', '3506015906043000', 'KEDIRI', '2003-10-01', '14.511/X/2003', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'JALAN ARGOWILIS', '001/006', 'PAGUNG', 'PAGUNG', 'SEMEN', 'KEDIRI', 'JAWA TIMUR', '64161', 'Bersama Orang Tua', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MUSTAJAB', '-', '3506011702680001', '1968', 'SD Sederajat', 'Petani', 'PETANI', '1.000.000 - 1.999.9999', 'Tidak', 'SITI HALIMAH', '350601410170002', '1974', 'SD Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', '500.000 - 999.999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081588353702', '081588353702', '', '155', '40', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '2-19-05-04-506-005-4', '0', '0', 'JLN JOYOBOYO I/4 JAMSAREN', 'KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:49:17'),
(43, 'MA000008', 'RAFI MOHAMMAD', 'LAKI-LAKI', '0.043374953', '3516021303030651', '3516022208040003', 'MOJOKERTO', '2004-08-22', 'AL 7060014744', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'KESONO DUSUN KESONO', '004/002', 'KESONO', 'BAKALAN', 'GONDANG', 'MOJOKERTO', 'JAWA TIMUR', '61372', 'Asrama/Mondok', 'JALAN KAKI', '-', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MOHAMMAD IMRON', '-', '3516022302770001', '1977', 'SMA Sederajat', 'Wiraswasta', 'PETANI SAWAH', '5.000.000 - 20.000.000', 'Tidak', 'MAS IDAWATI', '3516025809800003', '1980', 'SMP Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '085607917759', '-', '', '165', '60', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '-', '0', '10', '', '', '2-19-05-12-0034-0020-5', '-', '-', 'JL RAYA KARANGKUTEN KECAMATAN GONDANG', 'KABUPATEN GONDANG', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 05:53:36'),
(44, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '', '', '', '', '', '', '0', '', '0', '2019-06-24 05:55:53'),
(45, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '', '', '', '', '', '', '0', '', '0', '2019-06-24 06:02:44'),
(46, 'SD000001', 'NN', 'PEREMPUAN', 'NN', 'LH', '1705060110000003', 'BATANG HARI', '2019-02-01', '1', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'SIMPANG SUNGAI RENGAS', '23/-09', 'HH', 'NN', ' NNN', 'NN', 'JAMBI', '36655', 'Bersama Orang Tua', 'JALAN', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MUKHLIS', 'gg', '11223', '1979', 'Putus SD', 'Petani', 'WIRASWASTA', '1.000.000 - 1.999.9999', 'Tidak', 'ELVERA RAHMAYANTI WAHYUNI', '2234', '1345667', 'SD Sederajat', 'Nelayan', 'IBU RUMAH TANGGA', '500.000 - 999.999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082181163365', '085758060411', '.', '', '', '', 'Kurang dari 1 Kilometer', '', '', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '1', '1', '1', '3', '', '', '122', 'E445', '1111', 'JALAN PELABUHAN RT 08 KELURAHAN SIMPANG SUNGAI REN', 'BATANG HARI', 'JAMBI', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:04:37'),
(47, 'MTS000007', 'AZALIA SYAFIQ SAFANA', 'PEREMPUAN', '0076765302', '3504031812060087', '3504836903070001', 'TULUNGAGUNG', '2007-03-29', '1920-751 JO.S.1927-564', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'JL PAHLAWAN 1/25', '001/002', 'KEDUNGWARU', 'KEDUNGWARU', 'KEDUNGWARU', 'TULUNGAGUNG', 'JAWA TIMUR', '66224', 'Asrama/Mondok', 'JALAN KAKI', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MUHSON', '-', '3504031908780001', '1978', 'D4/S1', 'Karyawan Swasta', 'ALFAMART', '5.000.000 - 20.000.000', 'Tidak', 'NUR AZIZAH', '3504035304770002', '1977', 'D4/S1', 'Tidak Bekerja', 'IBU RUMAH TANGGA', '500.000 - 999.999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081294655454', '085739871631', '-', '148', '33', 'MENYANYI', 'Kurang dari 1 Kilometer', '00.05', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0076765302', '15 JULI 2019', '12 JUNI 2019', '7', '', '', '25-0081-0039-2', '-', '-', 'SDN 01 KEDUNGWARU', 'TULUNGAGUNG', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:06:07'),
(49, 'MA000009', 'ANANDA MALVINA YUNIAR', 'LAKI-LAKI', '0.043219986', '6105012607100008', '6105017105040004', 'SINTANG', '2004-05-31', '3021/T.DIS.SKB/2005', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'JLN SINTANG PONTIANAK', '002/001', 'NENAK', 'BALAI AGUNG', 'SUNGAI TEBELIAN', 'SINTANG', 'KALIMANTAN BARAT', '78651', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'BUJANG SUHAINI', '-', '5105013108780001', '1978', 'SMA Sederajat', 'Wiraswasta', 'TUKANG KAYU', '5.000.000 - 20.000.000', 'Tidak', 'YUYUN HARIYANTI', '6105017009850003', '1985', 'D1', 'Tidak Bekerja', 'IBU RUMAH TANGGA', '1.000.000 - 1.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082311236537', '082311236537', '', '155', '44', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '2-19-13-06-077-035-6', '0', '0', 'JLN SINTANG PONTIANAK', 'SINTANG', 'KALIMANTAN BARAT', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2019-06-24 06:11:57'),
(50, 'MTS000008', 'RAYHAN SINATRIA OKTAV', 'LAKI-LAKI', '0061475496', '3503102810100015', '3503103010060002', 'TRENGGALEK', '2006-10-30', '3755/2006', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', '-', 'RT/RW 02/01', 'DAWUHAN PULE', 'SUKOREJO', 'GANDUSARI', 'TRENGGALEK', 'JAWA TIMUR', '66372', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'BENI SATRIA', 'SE', '3503102004800003', '1981', 'D4/S1', 'Wiraswasta', 'PEDAGANG', '5.000.000 - 20.000.000', 'Tidak', 'RIANI RATNA SIWI', '3503105007840006', '1984', 'SMA Sederajat', 'Wiraswasta', 'PEDAGANG', '5.000.000 - 20.000.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0355811205', '08121687034', '082232664888', 'benisatria77@yahoo.co,id', '141', '28', 'JALAN JALAN', 'Kurang dari 1 Kilometer', '15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0061475496', '15 JULI 2019', '12 JUNI 2019', '7', '', '', '0', '0', '0', 'SUKOREJO GANDUSARI', 'TRENGGALEK', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:12:09'),
(52, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0', '', '', '', '', '', '', '0', '', '0', '2019-06-24 06:18:58'),
(53, 'MA000011', 'ISMATU FAIROSA', 'PEREMPUAN', '0.043374953', '1803031310090003', '1801241803040002', 'GEDUNG KETAPANG', '2004-08-01', '474.1/2456.U/LU/2004', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'PURWODADI GEDUNG KETAPANG', '006/002', 'GEDUNG KETAPANG', 'GEDUNG KETAPANG', 'SUNGKAI SELATAN', 'LAMPUNG UTARA', 'LAMPUNG', '34554', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUPRIYANTO', '-', '1803031509690003', '1969', 'SMA Sederajat', 'Petani', 'PETANI KEBUN', '5.000.000 - 20.000.000', 'Tidak', 'LISTIYA', '1803035208760007', '1976', 'SD Sederajat', 'Wiraswasta', 'PEDAGANG/TOKO', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '085368346254', '082183000070', '-', '154', '72', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '-', '-', '10', '', '', '04-0509-0063-2', '-', '-', 'JL KH ABDUL KARIM LIRBOYO', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:19:53'),
(54, 'MTS000008', 'DANANG ARI SETIAWAN', 'LAKI-LAKI', '-', '3571010606070180', '3571012608060001', 'KEDIRI', '2006-08-26', '2973/IND/2006', 'ISLAM', 'WNI', 'Tidak', 'NDK', 'TUMPANG POJOK', '025/05', 'TUMPANG', 'POJOK', 'MOJOROTO', 'KEDIRI', 'JAWA TIMUR', '64115', 'Bersama Orang Tua', 'SEPEDA', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'HARIYONO', '-', '357101105830007', '1983', 'SMA Sederajat', 'Wiraswasta', 'SOPIR', '1.000.000 - 1.999.9999', 'Tidak', 'LISTIANI', '3571016409860003', '1986', 'SMA Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082257267921', '081336820171', '-', '140', '35', 'SEPAK BOLA', 'Lebih dari 1 Kilometer', '00.30', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0069061018', '15 JULI 2019', '12 JUNI 2019', '7', '', '', '1-19-05-54-0006-0004-5', '-', '-', 'MIS HIDAYATUL MUBTADIIN', 'KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:23:27'),
(55, 'MA000011', 'MUHAMMAD NURHUDDA', 'LAKI-LAKI', '0.048972198', '3313013009090005', '3313010908040001', 'KARANGANYAR', '2004-08-09', '4065/TP/2004', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DSN TROMBOL WETAN', '007/003', 'TROMBOL WETAN', 'JATIPURWO', 'JATIPURWO', 'KARANGANYAR', 'JAWA TENGAH', '57784', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'HERU KUSNADI', '-', '3313010405600002', '1960', 'SD Sederajat', 'Wiraswasta', 'JAMUR', '2.000.000 - 4.999.9999', 'Tidak', 'SUHARTI', '3313015608630001', '1963', 'SD Sederajat', 'Wiraswasta', 'JAMUR', '2.000.000 - 4.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085346315817', '085346315817', '', '160', '42', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '04-0509-0231-2', '0', '0', 'JALAN ABDUL KARIM LIRBOYO KOTA KEDIRI', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:29:35'),
(56, 'MA000012', 'SETIA DERMAWAN', 'LAKI-LAKI', '0.041557680', '1608031110070009', '1608032406040001', 'BUAY MADANG', '2004-06-24', 'AL 925.0127114', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'TANJUNG BULAN', '003/005', 'TANJUNG BULAN', 'TANJUNG BULAN', 'BUAY MADANG', 'OKU TIMUR', 'SUMATERA SELATAN', '32161', 'Asrama/Mondok', 'JALAN KAKI', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SISWANDI', '-', '1608032011720002', '1972', 'SD Sederajat', 'Petani', 'PETANI SAWAH', '5.000.000 - 20.000.000', 'Tidak', 'SUTIYEM', '1608035307740001', '1974', 'SD Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '081373272057', '-', '-', '163', '55', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '2', 'Olahraga', 'Kabupaten/Kota', 'JUARA VOLY', '2018', 'SEKOLAH', '', '', '', '', '', 'Siswa Baru', '-', '-', '-', '10', '', '', '-', '-', '-', 'DESA RANANAGUNG KEC BUAY MADANG TIMUR ', 'OKU TIMUR', 'SUMATERA SELATAN', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:35:59'),
(59, 'MA000013', 'NABILA TAZKIA', 'PEREMPUAN', '.0040693449', '6105132712090004', '6105136307040002', 'SINTANG', '2004-07-23', '2147/ T.DIS.SKB/2005', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'DUSUN MULYA JAYA', '004/002', 'MULYA JAYA', 'BANCOH', 'SUNGAI TEBELIAN', 'KABUPATEN SINTANG', 'KALIMANTAN BARAT', '78651', 'Asrama/Mondok', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUYATNO', '-', '6105130406750003', '1975', 'SD Sederajat', 'Petani', 'PETANI KARET', '2.000.000 - 4.999.9999', 'Tidak', 'SITI UMIHANIK', '6105134104750003', '1975', 'D4/S1', 'Lain-lain', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '081520460680', '081520460680', '', '155', '45', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '.', '15 JULI 2019', '7 MEI 2019', '10', '', '', '2-19-13-06-077-051-6', '-', '-', 'JL SINTANG - PONTIANAK KM 10 BALAI AGUNG ', 'KABUPATEN SINTANG', 'KALIMANTAN BARAT', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:48:15'),
(61, 'MA000014', 'YUNIA', 'PEREMPUAN', '0.036350557', '6105032212090009', '6105035007030002', 'MENTUIK', '2003-07-10', 'AL 737.0099826', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DSN KELINDANG', '003/-', 'KELINDANG', 'SUNGAI RAYA', 'SEPAUK', 'SINTANG', 'KALIMANTAN BARAT', '78662', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'ANDI', '-', '6105032302820001', '1982', 'SD Sederajat', 'Petani', 'KARET', '2.000.000 - 4.999.9999', 'Tidak', 'YULIANA', '6105036003830004', '1983', 'SD Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082354362866', '082354362866', '', '150', '40', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '2-19-13-06-077-03102', '0', '0', 'JLN SINTANG PONTIANAK', 'SINTANG', 'KALIMANTAN BARAT', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 06:51:03'),
(62, 'MA000015', 'IKHTANIA WAHYUNINGRUM', 'PEREMPUAN', '.0049926778', '3515132701095927', '351513610640002', 'SIDOARJO', '2004-06-21', '009297/ 2004', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'DUSUN JEGU', '004/005', 'JEGU', 'KRAMAT JEGU', 'TAMAN', 'KABUPATEN SIDOARJO', 'JAWA TIMUR', '61257', 'Asrama/Mondok', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'NUR SALIM', '-', '3515130505780009', '1978', 'SMP Sederajat', 'Wiraswasta', 'MONTIR', '2.000.000 - 4.999.9999', 'Tidak', 'SUPIAH', '3515135907780002', '1978', 'SMP Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '085233340415', '082301865774', '-', '155', '45', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '.', '15 JULI 2019', '29 MEI 2019', '10', '', '', '2-19-05-11-0158-0214-3', '-', '-', 'DSN. KWANGEN DS. JUNWANGI NO.43 KEC. KRIAN 61262', 'KABUPATEN SIDOARJO', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:03:53'),
(63, 'MA000016', 'QORIATUL AFIFAH', 'PEREMPUAN', '0.035851537', '3504050904053058', '3504054305030003', 'TULUNGAGUNG', '2003-05-03', '4120/A/2003', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'TALES', '004/003', 'KARANGANOM', 'KARANGANOM', 'KAUMAN', 'TULUNGAGUNG', 'JAWA TIMUR', '66261', 'Asrama/Mondok', 'JALAN KAKI', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUJARWANTO', '0', '350405045750002', '1975', 'SMP Sederajat', 'Petani', 'PETANI SAWAH', '5.000.000 - 20.000.000', 'Tidak', 'YAHMI', '3504054108790001', '1979', 'SD Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '085235399177', '-', '-', '145', '47', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '0', '10', '', '', '04-0509-0071-2', '-', '-', 'JL KH ABDUL KARIM LIRBOYO', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:06:21'),
(64, 'SMP000004', 'COBA_1', 'LAKI-LAKI', '0.00000', '5748764867458457', '3563578458756856', 'LAHIR', '2005-06-13', '32425T2452', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'TUYTRUTY', '005/07', 'JGHJ', 'GJXF', 'FGJXF', 'GFHJXF', 'GHKHK', '45345', 'Bersama Orang Tua', 'JXFJ', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'YJGHJ', 'hjf', '23523525235243552', '1980', 'D3', 'Buruh', 'FJHFXJ', '1.000.000 - 1.999.9999', 'Tidak', 'GDFBDBHZF', '3435325345357542', '1987', 'D1', 'Pensiunan', 'HFDJJ', '5.000.000 - 20.000.000', 'Grahita Sedang (C1)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '46346357357', '3465645737', '-', '324', '34', 'FHFH', 'Kurang dari 1 Kilometer', '00.10', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0.09684', '12 JULI 2019', '12 JUNI 2019', '7', '', '', '0.0978657', '0.069578040', '-', 'FHXGHZ', 'GJXJ', 'GJXJ', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:18:23'),
(65, 'MA000017', 'MAULANA AHMAD ZAENURI', 'LAKI-LAKI', '0.012046202', '6107080911070003', '6107081806010001', 'MAYA SOPA', '2001-06-18', 'AL.730.0024235', 'ISLAM', 'WNI', 'Tidak', 'HMP', '-', '002/001', 'DUSUN PAKUCING 1', 'GERANTUNG', 'MONTERADO', 'BENGKAYANG', 'KALIMANTAN BARAT', '0', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'SUYOTO', '-', '6107081109600001', '1960', 'SD Sederajat', 'Petani', 'PETANI KARET', '5.000.000 - 20.000.000', 'Tidak', 'JASNI', '6107084906620002', '1962', 'SD Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085348267453', '-', '', '155', '43', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '0', '10', '', '', '2-19-13-0079-0009-8', '-', '-', 'JL JOHANSYAH BAKRI', 'KABUPATEN MEMPAWAH', 'KALIMANTAN BARAT', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:19:37'),
(66, 'MA000018', 'LAYIN FIHRIYA AISYAWA', 'PEREMPUAN', '0.041572850', '3520072704090008', '3520074606040002', 'MAGETAN', '2004-06-06', '3390/IST/2004', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'DSN GROMBONG', '008/001', 'GROMBONG', 'PLUMPUNG', 'PLAOSAN', 'MAGETAN', 'JAWA TIMUR', '63361', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'LUKMAN HIDAYAT', '-', '3520070804670001', '1967', 'SD Sederajat', 'Wiraswasta', 'PETERNAK', '2.000.000 - 4.999.9999', 'Tidak', 'SITI ZULAIHAH', '3520076912770001', '1977', 'D4/S1', 'Lain-lain', 'GURU', '2.000.000 - 4.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081335494003', '081232072754', '', '165', '45', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '04-0509-0083-6', '0', '0', 'JALAN ABDUL KARIM LIRBOYO KOTA KEDIRI', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:22:16');
INSERT INTO `tb_registrasi` (`id`, `register_nomor_pendaftaran`, `nama`, `jenis_kelamin`, `nisn`, `nkk`, `nik`, `tempat_lahir`, `tanggal_lahir`, `no_akta`, `agama`, `kewarganegaraan`, `kbk`, `domis`, `almt_jl`, `rt`, `nm_dsn`, `nm_ds`, `nm_kec`, `nm_kt`, `nm_prov`, `kode_pos`, `tmpt_tinggal`, `moda_transport`, `no_kks`, `anak_ke`, `penerima_kps`, `no_kps`, `lyk_pip`, `penerima_kip`, `no_kip`, `nm_kip`, `terima_kip`, `alasan_pip`, `nm_bank`, `rek_bank`, `nm_rek`, `nm_ayh`, `glr_ayh`, `nik_ayh`, `lhr_ayh`, `pnddk_ayh`, `pkrj_ayh`, `spk_ayh`, `pghsl_ayh`, `bk_ayh`, `nm_ibu`, `nik_ibu`, `lhr_ibu`, `pnddk_ibu`, `pkrj_ibu`, `spk_ibu`, `pghsl_ibu`, `bk_ibu`, `nm_wali`, `stts_wali`, `nik_wali`, `lhr_wali`, `pnddk_wali`, `spk_wali`, `pghsl_wali`, `alt_wali`, `rt_wali`, `nm_dsn_wali`, `nm_ds_wali`, `nm_kec_wali`, `nm_kt_wali`, `nm_prov_wali`, `kode_pos_wali`, `tlp_wali`, `no_rumah`, `no_hpwa_ayah`, `no_hpwa_ibu`, `email`, `tggi_bdn`, `brt_bdn`, `hobi`, `jarak_sekolahan`, `tempuh_sekolahan`, `jml_sdr`, `jenis_prestasi`, `tingkat_prestasi`, `nama_prestasi`, `tahun_prestasi`, `penyelenggara_prestasi`, `jns_beasiswa`, `ket_beasiswa`, `awl_beasiswa`, `akhr_beasiswa`, `jrsn_smk`, `jns_pendaftaran`, `nis`, `msk_skl`, `tgl_lulus`, `d_kelas`, `nama_smp`, `nama_smp2`, `no_un`, `no_ijazah`, `no_skhun`, `almt_smp`, `kota_smp`, `prov_smp`, `ring`, `v_smp`, `valid`, `v_skhun`, `v_raport`, `v_kk`, `v_akta`, `v_foto`, `v_regis`, `v_semua`, `prioritas`, `tanggal_daftar`) VALUES
(67, 'MTS000009', 'AYU FANI RAMADHANI', 'PEREMPUAN', '0067467331', '1608030412070057', '1608025410060002', 'OKU TIMUR', '2006-10-14', '-', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'SUKARAJA', '007/002', 'SUKARAJA', 'SUKARAJA', 'BUAY MADANG', 'OKU TIMUR', 'SUMATERA SELATAN', '32161', 'Asrama/Mondok', 'JALAN KAKI', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'IMAM TURMUDI', '-', '1608031606760003', '1976', 'SMA Sederajat', 'Petani', 'PETANI', '1.000.000 - 1.999.9999', 'Tidak', 'SITI SAUDAH', '1608036008800002', '1980', 'SMA Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', 'SUJIONO', 'PAMAN', '1608031404720003', '1972', 'D4/S1', 'PETANI', '5.000.000 - 20.000.000', 'SUKARAJA', '008/002', 'SUKARAJA', 'SUKARAJA', 'BUAY MADANG', 'OKU TIMUR', 'SUMATERA SELATAN', '32161', '085383651791', '', '081272419180', '082185478867', '-', '151', '55', 'MENYANYI', 'Kurang dari 1 Kilometer', '00.05', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0067467331', '', '12 JUNI 2019', '7', '', '', '-', '-', '-', 'JL. KOTA BARU SUKARAJA KEC. BUAY MADANG', 'OKU TIMUR', 'SUMATERA SELATAN', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:24:41'),
(68, 'MA000017', 'MUHAMMAD YUSUF ZIDAN ZAMRI', 'LAKI-LAKI', '.0056857416', '3324110908084900', '3324112901050003', 'KENDAL', '2005-01-29', '332411.290105.0003', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'DUKUH CREME', '007/003', 'CREME', 'CEPOKOMULYO', 'GEMUH', 'KABUPATEN KENDAL', 'JAWA TENGAH', '51356', 'Asrama/Mondok', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MUHADLIRIN', '-', '3324112307760001', '1976', 'SMA Sederajat', 'Wiraswasta', 'TKI', '2.000.000 - 4.999.9999', 'Tidak', 'SITI ROKHANIYANIAH', '3324114306820007', '1983', 'SMP Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', 'SITI NGAESAH', 'NENEK', '3324114102450001', '1945', 'Putus SD', 'PETANI', '2.000.000 - 4.999.9999', 'DUKUH CERME ', 'RT.007 RW ', 'CERME', 'CEPOKOMULYO', 'GEMUH', 'KABUPATEN KENDAL', 'JAWA TENGAH', '51356', '', '', '+60108280176', '085694917386', '', '155', '43', 'OLAH RAGA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '.', '15 JULI 2019', '29 MEI 2019', '10', '', '', '2-19-03-29-0011-0016-9', '-', '-', 'JL. KYAI CABE RINGINARUM ', 'KABUPATEN KENDAL', 'JAWA TENGAH', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:31:51'),
(69, 'MA000019', 'PUTRI ROSYADATUN NAJWA', 'PEREMPUAN', '0.047418959', '3506252912100029', '3506255303040003', 'KEDIRI', '2004-03-13', '5160/III/2004', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'DSN DLOPO', '012/002', 'DLOPO', 'KARANGREJO', 'NGASEM', 'KOTA KEDIRI', 'JAWA TIMUR', '64182', 'Asrama/Mondok', 'JALAN KAKI', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'M.QODIRON', '-', '3506251203680003', '1963', 'SMP Sederajat', 'Wiraswasta', 'PEDAGANG', '2.000.000 - 4.999.9999', 'Tidak', 'BINTI LUTFIYA', '3506255607740002', '1974', 'SMP Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '081335803355', '085784991127', '-', '150', '73', 'MENULIS', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '0', '10', '', '', '04-0509-0017-8', '-', '-', 'JL KH ABDUL KARIM LIRBOYO', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:35:45'),
(70, 'MA000019', 'HABIBATUL MUNIROH', 'PEREMPUAN', '0.041046894', '3309160412069961', '3309165805049003', 'NGAWI', '2004-05-18', '3848/KLB/2004', 'ISLAM', 'INDONESIA', 'Tipes', 'HMP', 'DSN MAGERSARI', '022/008', 'MAGERSARI', 'MOJO', 'ANDONG', 'BOYOLALI', 'JAWA TENGAH', '57384', 'Asrama/Mondok', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MUH. MURSID ABADI', '-', '3309162211749003', '1974', 'SMP Sederajat', 'Wiraswasta', 'PEDAGANG', '2.000.000 - 4.999.9999', 'Tidak', 'NIKMATUR ROFIAH', '3309166308809004', '1980', 'SMA Sederajat', 'Wiraswasta', 'PENJAHIT', '1.000.000 - 1.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085229282399', '085229282399', '', '166', '52', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0', '0', '29 MEI 2019', '10', '', '', '04-0509-0009-8', '0', '0', 'JALAN ABDUL KARIM LIRBOYO KOTA KEDIRI', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:37:18'),
(71, 'SMP000005', 'SANICHO MAULANA PENGESTU', 'LAKI-LAKI', '0.0068970148', '3506103105050994', '3506101912060004', 'KEDIRI', '2006-12-18', '700.0098577', 'ISLAM', 'INDONESIA', 'Tidak', 'HMP', 'BLIMBING TIMUR', 'V/I', 'BLIMBING TIMUR', 'BLIMBING', 'GURAH', 'KEDIRI', 'JAWA TIMUR', '64181', 'Bersama Orang Tua', 'JALAN KAKI', '', '2', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'ALI KODIN', '-', '3506103008710002', '1971', 'SD Sederajat', 'Karyawan Swasta', 'KARYAWAN SWASTA', '1.000.000 - 1.999.9999', 'Tidak', 'SITI FATIMAH', '3506104610730003', '1973', 'SMP Sederajat', 'Karyawan Swasta', 'KARYAWAN SWASTA', '1.000.000 - 1.999.9999', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081246845817', '081246845817', '-', '155', '60', 'OLAHRAGA', 'Kurang dari 1 Kilometer', '00.10', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '24 JUNI 2019', '12 JUNI 2019', '7', '', '', '22-0669-0016-9', '-', '-', 'GURAH', 'KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:44:16'),
(72, 'MTS000010', 'MUHAMMAD FARIS KURNIAWAN', 'LAKI-LAKI', '0078242688', '1805081512140013', '1805082407070004', 'TULANG BAWANG', '2007-07-24', '474.1/845.ISTIMEWA/LU/2010', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'MORIS JAYA', '005/001', 'MORIS JAYA', 'MORIS JAYA', 'BANJAR AGUNG', 'TULANG BAWANG', 'LAMPUNG', '34595', 'Bersama Orang Tua', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'NUR AZIS', '-', '1805080406850005', '1985', 'SMP Sederajat', 'Wiraswasta', '-', '1.000.000 - 1.999.9999', 'Tidak', 'MAYASARI', '1805084109880006', '1988', 'SMA Sederajat', 'Lain-lain', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '-', '-', '0', '0', '', '0', 'Kurang dari 500.000', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '150', '45', 'MENULIS', 'Kurang dari 1 Kilometer', '00.05', '2', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '0078242688', '15 JULI 2019', '12 JUNI 2019', '7', '', 'MTS AL MAHRUSIYAH', '-', '.', '.', 'RK I KAMPUNG MORIS JAYA', 'TULANG BAWANG', 'LAMPUNG', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:46:12'),
(73, 'MA000020', 'UMI KHOTIMATUS SAADAH', 'PEREMPUAN', '0.039657121', '3505120906065958', '3505125611030002', 'BLITAR', '2003-11-16', 'AL.694.0249298', 'ISLAM', 'WNI', 'Tidak', 'HMP', 'LINGKUNGAN JINGGLONG', '002/005', 'JINGGLONG', 'JINGGLONG', 'SUTOJAYAN', 'BLITAR', 'JAWA TIMUR', '66172', 'Asrama/Mondok', 'JALAN KAKI', '', '1', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'MOH.SAMIRI', '-', '3505123012750003', '1975', 'SMA Sederajat', 'Wiraswasta', 'PEDAGANG', '5.000.000 - 20.000.000', 'Tidak', 'LILIK SUHENI', '3505125903800003', '1980', 'SMA Sederajat', 'Tidak Bekerja', 'IBU RUMAH TANGGA', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '085259223509', '082313588108', '-', '145', '50', 'MEMBACA', 'Kurang dari 1 Kilometer', '00.15', '1', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '-', '-', '-', '10', '', '', '04-0509-0024-9', '-', '-', 'JL KH ABDUL KARIM LIRBOYO', 'KOTA KEDIRI', 'JAWA TIMUR', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2019-06-24 07:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(250) NOT NULL,
  `tempat_sekolah` varchar(250) NOT NULL,
  `tanggal_ppdb` varchar(20) NOT NULL,
  `tutup_ppdb` varchar(20) NOT NULL,
  `tanggal_pengumuman` varchar(20) NOT NULL,
  `kuota` varchar(6) NOT NULL,
  `logo_sekolah` varchar(100) NOT NULL,
  `logo_dinas` varchar(50) NOT NULL,
  `background1` varchar(100) NOT NULL,
  `background2` varchar(100) NOT NULL,
  `background3` varchar(100) NOT NULL,
  `background4` varchar(100) NOT NULL,
  `text_background1` varchar(1000) NOT NULL,
  `text_background2` varchar(1000) NOT NULL,
  `text_background3` varchar(1000) NOT NULL,
  `jumlah_ruang` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `nama_sekolah`, `tempat_sekolah`, `tanggal_ppdb`, `tutup_ppdb`, `tanggal_pengumuman`, `kuota`, `logo_sekolah`, `logo_dinas`, `background1`, `background2`, `background3`, `background4`, `text_background1`, `text_background2`, `text_background3`, `jumlah_ruang`) VALUES
(1, 'SD AL-MAHRUSIYAH', 'Jl. KH.Abdul Karim no.9, Lirboyo, KEDIRI', '2019-06-01', '2019-06-14', '', '1000', 'Logo SMK Png.png', 'download.png', 'Untitled.jpg', 'Untitled.jpg', 'Untitled.jpg', 'Untitled.jpg', '<h4>Visi Sekolah</h4>\r\nTerwujudnya lembaga pendidikan yang  professional dan berwawasan lingkungan. \r\n<br><br><br>\r\n<h4>Misi Sekolah</h4>\r\n1.	Menyelenggarakan pendidikan berdasarkan iman dan taqwa.\r\n<br>2.	Menyelenggarakan pelayanan pendidikan regular dan inklusif.\r\n<br>3.	Meningkatkan kepedulian warga sekolah terhadap pelestarian fungsi lingkungan.\r\n<br>4.	Meningkatkan kepedulian warga sekolah terhadap pencegahan terjadinya kerusakan lingkungan.\r\n<br>5.	Meningkatkan kepedulian warga sekolah terhadap pencegahan  terjadinya pencemaran lingkungan.\r\n<br>6.	Menyelenggarakan pendidikan berwawasan lingkungan yang terintegrasi pada mata pelajaran.\r\n<br>7.	Menyelenggarakan Administrasi dan Proses Belajar Mengajar sesuai Standar Operasional Prosesur (SOP).\r\n<br>8.	Meningkatkan prestasi, sikap dan keterampilan peserta didik.                                  ', '', '', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswadaftar`
--

CREATE TABLE `tb_siswadaftar` (
  `id` int(11) NOT NULL,
  `no_un` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` varchar(40) NOT NULL,
  `reg_akta` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `abk` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `nama_dusun` varchar(20) NOT NULL,
  `nama_desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `tempat_tinggal` varchar(30) NOT NULL,
  `transportasi` varchar(17) NOT NULL,
  `no_kks` varchar(7) NOT NULL,
  `anak_ke` varchar(2) NOT NULL,
  `kps` varchar(5) NOT NULL,
  `no_kps` varchar(40) NOT NULL,
  `layak_pip` varchar(5) NOT NULL,
  `terima_kip` varchar(5) NOT NULL,
  `no_kip` varchar(10) NOT NULL,
  `nama_kip` varchar(40) NOT NULL,
  `terima_kartu_kip` varchar(5) NOT NULL,
  `alasan_pip` varchar(50) NOT NULL,
  `bank` varchar(40) NOT NULL,
  `no_rek_bank` varchar(20) NOT NULL,
  `nama_rek` varchar(50) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `status_ayah` varchar(15) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `tahun_lahir_ayah` varchar(20) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `penghasilan_ayah` varchar(30) NOT NULL,
  `bk_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `status_ibu` varchar(15) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `tahun_lahir_ibu` varchar(20) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `penghasilan_ibu` varchar(30) NOT NULL,
  `bk_ibu` varchar(20) NOT NULL,
  `nama_wali` varchar(40) NOT NULL,
  `nik_wali` varchar(20) NOT NULL,
  `tahun_lahir_wali` varchar(20) NOT NULL,
  `pendidikan_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `penghasilan_wali` varchar(30) NOT NULL,
  `bk_wali` varchar(20) NOT NULL,
  `tinggi_badan` varchar(4) NOT NULL,
  `berat_badan` varchar(4) NOT NULL,
  `jarak_sekolah` varchar(20) NOT NULL,
  `jarak_km` varchar(3) NOT NULL,
  `tempuh_jam` varchar(2) NOT NULL,
  `tempuh_menit` varchar(2) NOT NULL,
  `saudara_kandung` varchar(2) NOT NULL,
  `jenis_prestasi1` varchar(10) NOT NULL,
  `tingkat_prestasi1` varchar(15) NOT NULL,
  `nama_prestasi1` varchar(40) NOT NULL,
  `tahun_prestasi1` varchar(4) NOT NULL,
  `penyelenggara_prestasi1` varchar(40) NOT NULL,
  `jenis_prestasi2` varchar(10) NOT NULL,
  `tingkat_prestasi2` varchar(15) NOT NULL,
  `nama_prestasi2` varchar(40) NOT NULL,
  `tahun_prestasi2` varchar(4) NOT NULL,
  `penyelenggara_prestasi2` varchar(40) NOT NULL,
  `jenis_beasiswa1` varchar(21) NOT NULL,
  `keterangan_beasiswa1` varchar(40) NOT NULL,
  `mulai_tahun_bea1` varchar(4) NOT NULL,
  `akhir_tahun_bea1` varchar(4) NOT NULL,
  `jenis_beasiswa2` varchar(21) NOT NULL,
  `keterangan_beasiswa2` varchar(40) NOT NULL,
  `mulai_tahun_bea2` varchar(4) NOT NULL,
  `akhir_tahun_bea2` varchar(4) NOT NULL,
  `nama_smp` varchar(25) NOT NULL,
  `nama_smp2` varchar(40) NOT NULL,
  `alamat_smp` varchar(20) NOT NULL,
  `kabupaten_smp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswadaftar`
--

INSERT INTO `tb_siswadaftar` (`id`, `no_un`, `nama`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `reg_akta`, `jenis_kelamin`, `agama`, `kewarganegaraan`, `abk`, `alamat`, `rt`, `rw`, `nama_dusun`, `nama_desa`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `transportasi`, `no_kks`, `anak_ke`, `kps`, `no_kps`, `layak_pip`, `terima_kip`, `no_kip`, `nama_kip`, `terima_kartu_kip`, `alasan_pip`, `bank`, `no_rek_bank`, `nama_rek`, `no_tlp`, `no_hp`, `email`, `nama_ayah`, `status_ayah`, `nik_ayah`, `tahun_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `bk_ayah`, `nama_ibu`, `status_ibu`, `nik_ibu`, `tahun_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `bk_ibu`, `nama_wali`, `nik_wali`, `tahun_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `bk_wali`, `tinggi_badan`, `berat_badan`, `jarak_sekolah`, `jarak_km`, `tempuh_jam`, `tempuh_menit`, `saudara_kandung`, `jenis_prestasi1`, `tingkat_prestasi1`, `nama_prestasi1`, `tahun_prestasi1`, `penyelenggara_prestasi1`, `jenis_prestasi2`, `tingkat_prestasi2`, `nama_prestasi2`, `tahun_prestasi2`, `penyelenggara_prestasi2`, `jenis_beasiswa1`, `keterangan_beasiswa1`, `mulai_tahun_bea1`, `akhir_tahun_bea1`, `jenis_beasiswa2`, `keterangan_beasiswa2`, `mulai_tahun_bea2`, `akhir_tahun_bea2`, `nama_smp`, `nama_smp2`, `alamat_smp`, `kabupaten_smp`) VALUES
(5, '987654289909', 'SAMKHAN BARIK', '0.024823101', '', 'KEDIRI', '2002-12-15', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082334886599', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '987654289909', 'SAMKHAN BARIK', '0.024823101', '', 'KEDIRI', '2011-02-08', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082334886599', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '987654289909', 'SAMKHAN BARIK', '0.024823101', '', 'KEDIRI', '2019-06-14', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082334886599', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '878798798098-09-', 'SURYO NURHANUDDIN', '12345677890', '', 'KEDIRI', '2019-06-02', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '324354657', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '878798798098-09-', 'SURYO NURHANUDDIN', '12345677890', '', 'KEDIRI', '2019-06-02', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '324354657', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '878798798098-09-', 'SURYO NURHANUDDIN', '12345677890', '', 'KEDIRI', '2019-06-02', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '324354657', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '2343454559899648', 'SURYO NURHANUDDIN', '12345677890', '', 'KEDIRI', '2019-06-02', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '324354657', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '1-19-05-11-0243-0055', 'MUHAMMAD RIDWAN', '0076715862', '', 'SIDOARJO', '2007-02-26', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085785049990', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '1-19-01-05-0272-0032', 'SHOLAHUDDIN ANWAR', '0066101841', '', 'JAKARTA', '2006-10-05', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0817755625', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '69-0012-0017-8', 'ZACKY HASBI QUSYAIRY', '0.0067886959', '', 'BEKASI', '2006-04-10', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081235109019', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '2-19-12-08-0602-0009', 'DEPA BAGUS PRASETYA', '0042624877', '', 'SIDOHARJO', '2004-03-18', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085378422733', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '16-5090-0006-3', 'MUHAMAD FAREL FIRDAUS ', '0073622451', '', 'KARAWANG', '2007-06-05', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085886687024', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '2-19-05-04-0033-0009', 'LISYA EFITASARI', '0038770112', '', 'KEDIRI', '2003-12-10', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081217653509', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '1-19-05-22-0653-0002', 'AHMAD DHANIAL FIRDAUS', '0073900839', '', 'BLITAR', '2007-03-02', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081554764006', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SD ISLAM MIFTAHUL ULUM', '', ''),
(28, 'BELUM JADI', 'MITA NAFIA SAFIRA', '', '', 'JAKARTA', '2001-04-26', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '089608168657', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IAIT KEDIRI', '', ''),
(29, '1-19-03-09-742-181-4', 'ANA MAULIDA JAMILAH', '0053133777', '', 'CILACAP', '2005-04-12', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082232306965', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '1-19-12-03-803-010-7', 'GALANG TAULADAN', '0.069542703', '', 'BANDAR SARI', '2006-07-28', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085384779882', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '1-19-05-54-0006-0001', 'AHMAD DHIYAUL HAQQI', '0076919234', '', 'KEDIRI', '2007-04-30', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085233855788', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '26-0200-0016-9', 'SINTA TAHTA KHUMAIDA', '0.0068193848', '', 'TRENGGALEK', '10-12-2006', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082352552591', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '1-19-05-22-0653-0002', 'AHMAD DHANIAL FIRDAUS', '0073900839', '', 'BLITAR', '2007-03-02', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081554764006', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '1-19-10-06-0121-0025', 'TEGUH ADI NUGROHO', '0.0076575872', '', 'JAMBI', '13-3-2007', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081278412035', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '29-252-002-7', 'ACHMAD SYAIFUL MUBAROK', '0055361509', '', 'KENDAL', '2005-10-18', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085974735338', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, '32-0205-0060-5', 'AUFAA ERIZA RAHARJO', '0', '', 'BREBES', '2005-01-19', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '083898380282', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0.066346499', '', 'LUMAJANG', '2006-07-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '2-19-09-11-0121-0029', 'MISTI NUR NAVIS SATUN NAJAH', '0040476447', '', 'PETAI BARU', '2004-07-01', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082283647979', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '1-19-05-72-0053-0011', 'MOH NABIL ZAMZAMI', '0068683224', '', 'KEDIRI', '2006-03-26', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085790444554', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0.066346499', '', 'LUMAJANG', '2006-07-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MI NURUL ISLAM KOTA LUMAJANG', '', ''),
(43, '11-0070-042-7', 'EARLYDEA BINTANG MAHARANI', '0066912195', '', 'SURABAYA', '2007-12-26', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081331460004', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, '29-252-009-8', 'FAIZ MUHYA', '0', '', 'KENDAL', '2004-06-08', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '08179510577', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0066346499', '', 'LUMAJANG', '2006-07-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MI NURUL ISLAM KOTA LUMAJANG', '', ''),
(47, '0.4-0051-0011-6', 'ULUWWI UBAYDILLAH', '0.075470939', '', 'KAPUAS', '2007-12-13', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085345877303', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0066346499', '', 'LUMAJANG', '2006-07-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '22-0098-0069-4', 'SEPTIANI', '0049869212', '', 'KEDIRI', '2003-09-09', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085853368881', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '0', 'RAYHAN SINATRIA OKTAV', '0061475496', '', 'TRENGGALEK', '2006-10-30', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '08121687034', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', '', ''),
(51, '2-19-03-11-0502-0083', 'MOKHAMAD SAEFUL ANWAR', '0043332892', '', 'KEBUMEN', '2004-03-25', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '083836140531', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '04-0051-0011-6', 'ULUWWI UBAYDILLAH', '0.0075470939', '', 'KAPUAS', '2007-12-13', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085345877303', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '16-0522-0089-8', 'WAHYUNING FUJI', '0.044570335', '', 'BREBES', '2004-11-04', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085229760682', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0066346499', '', 'LUMAJANG', '2007-07-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '22-0314-0009-8', 'MUHAMMAD ANDRIANTO', '.0054090975', '', 'BLORA', '2005-12-16', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(56, '2-19-05-04-506-005-4', 'ASNA ALWIYATUL MASLAHAH', '0.035162584', '', 'KEDIRI', '2003-10-01', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081588353702', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, '22-0314-0009-8', 'MUHAMMAD ANDRIANTO', '.0054090975', '', 'BLORA', '2005-12-16', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(59, '2-19-13-06-077-051-6', 'NABILA TAZKIA SABRINA', '.0040693449', '', 'SINTANG', '2004-07-23', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081520460680', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAN 2 CIREBON', '', ''),
(61, '22-0314-0009-8', 'MUHAMMAD ANDRIANTO', '.0054090975', '', 'BLORA', '2005-12-16', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(62, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAN 2 CIREBON', '', ''),
(64, '22-0314-0009-8', 'MUHAMMAD ANDRIANTO', '.0054090975', '', 'BLORA', '2005-12-16', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(65, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAN 2 CIREBON', '', ''),
(66, '22-0314-0009-8', 'MUHAMMAD ANDRIANTO', '.0054090975', '', 'BLORA', '2005-12-16', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(67, '22-0314-0009-8', 'MUHAMMAD ANDRIANTO', '.0054090975', '', 'BLORA', '2005-12-16', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(68, '2-19-03-29-0011-0016', 'MUHAMMAD YUSUF ZIDANI ZAMRI', '.0056857416', '', 'KENDAL', '2005-01-29', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '+60108280176', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAN 2 CIREBON', '', ''),
(70, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(71, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IAIT KEDIRI', '', ''),
(72, '122', 'NN', 'NN', '', 'BATANG HARI', '2019-02-01', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082181163365', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(73, '25-0081-0039-2', 'AZALIA SYAFIQ SAFANA', '0076765302', '', 'TULUNGAGUNG', '2007-03-29', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081294655454', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IAIT KEDIRI', '', ''),
(75, '04-0051-0011-6', 'ULUWWI UBAYDILLAH', '0.0075470939', '', 'KAPUAS', '2007-12-13', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085345877303', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, '2-19-13-06-077-035-6', 'ANANDA MALVINA YUNIAR', '0.043219986', '', 'SINTANG', '2004-05-31', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082311236537', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, '0', 'RAYHAN SINATRIA OKTAV', '0061475496', '', 'TRENGGALEK', '2006-10-30', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '08121687034', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IAIT KEDIRI', '', ''),
(81, '22-0314-0009-8', 'MUHAMMAD ANDRIANTO', '0.054090975', '', 'BLORA', '16 DESEMBER 2005', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(82, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IAIT KEDIRI', '', ''),
(84, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IAIT KEDIRI', '', ''),
(85, '04-0509-0063-2', 'ISMATU FAIROSA', '0.043374953', '', 'GEDUNG KETAPANG', '2004-08-01', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085368346254', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, '1-19-05-54-0006-0004', 'DANANG ARI SETIAWAN', '-', '', 'KEDIRI', '2006-08-26', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082257267921', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, '04-0509-0231-2', 'MUHAMMAD NURHUDDA', '0.048972198', '', 'KARANGANYAR', '2004-08-09', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085346315817', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAN 2 CIREBON', '', ''),
(89, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAHASISWA', '', ''),
(90, '-', 'SETIA DERMAWAN', '0.041557680', '', 'BUAY MADANG', '2004-06-24', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081373272057', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAHASISWA', '', ''),
(92, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0066346499', '', 'LUMAJANG', '2006-07-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(93, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAHASISWA', '', ''),
(94, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0066346499', '', 'LUMAJANG', '2006-07-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(95, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAHASISWA', '', ''),
(98, '2-19-13-06-077-051-6', 'NABILA TAZKIA', '.0040693449', '', 'SINTANG', '2004-07-23', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081520460680', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, '2-19-13-06-077-03102', 'YUNIA', '0.036350557', '', 'MENTUIK', '2003-07-10', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082354362866', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 'BELUM JADI', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAN 2 CIREBON', '', ''),
(102, '1-19-05-04-0143-0016', 'NUR ZAKIATUL MUKARROMAH', '3054844760', '', 'SURABAYA', '2005-10-06', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '087851088639', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(103, '1-19-05-04-0143-0016', 'NUR ZAKIATUL MUKARROMAH', '3054844760', '', 'SURABAYA', '2005-10-06', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '087851088639', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(104, '2-19-05-11-0158-0214', 'IKHTANIA WAHYUNINGRUM', '.0049926778', '', 'SIDOARJO', '2004-06-21', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085233340415', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, '-', 'HAWA FITHRIYANI', '0.007652070', '', 'CIREBON', '2000-09-30', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '082126956313', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MAN 2 CIREBON', '', ''),
(106, '04-0509-0071-2', 'QORIATUL AFIFAH', '0.035851537', '', 'TULUNGAGUNG', '2003-05-03', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085235399177', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, '0.0978657', 'COBA_1', '0.00000', '', 'LAHIR', '2005-06-13', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '46346357357', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, '2-19-13-0079-0009-8', 'MAULANA AHMAD ZAENURI', '0.012046202', '', 'MAYA SOPA', '2001-06-18', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085348267453', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, '04-0509-0083-6', 'LAYIN FIHRIYA AISYAWA', '0.041572850', '', 'MAGETAN', '2004-06-06', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081335494003', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, '-', 'AYU FANI RAMADHANI', '0067467331', '', 'OKU TIMUR', '2006-10-14', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081272419180', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, '05-80-0001-0109-4', 'VINA FAKHRATUL HIMMA', '0066346499', '', 'LUMAJANG', '2008-06-24', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085231566448', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(112, '2-19-03-29-0011-0016', 'MUHAMMAD YUSUF ZIDAN ZAMRI', '.0056857416', '', 'KENDAL', '2005-01-29', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '+60108280176', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, '04-0509-0017-8', 'PUTRI ROSYADATUN NAJWA', '0.047418959', '', 'KEDIRI', '2004-03-13', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081335803355', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(114, '0.4-0051-0011-6', 'ULUWWI UBAYDILLAH', '0075470939', '', 'KAPUAS', '2007-12-13', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085345877303', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(115, '04-0509-0009-8', 'HABIBATUL MUNIROH', '0.041046894', '', 'NGAWI', '2004-05-18', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085229282399', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, '22-0669-0016-9', 'SANICHO MAULANA PENGESTU', '0.0068970148', '', 'KEDIRI', '2006-12-18', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '081246845817', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(117, '-', 'MUHAMMAD FARIS KURNIAWAN', '0078242688', '', 'TULANG BAWANG', '2007-07-24', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'MTS AL MAHRUSIYAH', '', ''),
(118, '04-0509-0024-9', 'UMI KHOTIMATUS SAADAH', '0.039657121', '', 'BLITAR', '2003-11-16', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '085259223509', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_smp`
--

CREATE TABLE `tb_smp` (
  `id` int(11) NOT NULL,
  `nama_smp` varchar(40) NOT NULL,
  `berjumlah` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_smp`
--

INSERT INTO `tb_smp` (`id`, `nama_smp`, `berjumlah`) VALUES
(8, 'SMP AL MAHRUSIYAH', ''),
(9, 'MTS AL MAHRUSIYAH', ''),
(10, 'SD AL MAHRUSIYAH', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` enum('admin','siswa','ppdb') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'adminkpa', '9ed318ba6d759c5409fb4a7a2d647156', 'admin'),
(4, 'ppdb', 'c4ca4238a0b923820dcc509a6f75849b', 'ppdb'),
(8, 'ppdb_tk', 'b83673d680bb598122a9513145605801', 'ppdb'),
(9, 'ppdb_sd', '814aba302fa490133467763a9e482603', 'ppdb'),
(10, 'ppdb_smp', '0453515da7f535ab2167eeea7a696bd6', 'ppdb'),
(11, 'ppdb_mts', 'c1e49de92a62c74ef466e91f2472f581', 'ppdb'),
(12, 'ppdb_ma', '3c1fe6d83e83a304b051426ecd362a30', 'ppdb'),
(13, 'ppdb_smk', '98e3296b978a69b96bbd85b8ad10bafb', 'ppdb'),
(14, 'ppdb_mdn', 'f1c6402b4432ca31e069d31823f0da76', 'ppdb'),
(15, 'ppdb_mdk', '7bf991681fa603582af97904214be58a', 'ppdb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswadaftar`
--
ALTER TABLE `tb_siswadaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_smp`
--
ALTER TABLE `tb_smp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswadaftar`
--
ALTER TABLE `tb_siswadaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tb_smp`
--
ALTER TABLE `tb_smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
