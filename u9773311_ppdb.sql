-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2019 at 07:31 PM
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
  `prioritas` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id`, `register_nomor_pendaftaran`, `nama`, `jenis_kelamin`, `nisn`, `nkk`, `nik`, `tempat_lahir`, `tanggal_lahir`, `no_akta`, `agama`, `kewarganegaraan`, `kbk`, `domis`, `almt_jl`, `rt`, `nm_dsn`, `nm_ds`, `nm_kec`, `nm_kt`, `nm_prov`, `kode_pos`, `tmpt_tinggal`, `moda_transport`, `no_kks`, `anak_ke`, `penerima_kps`, `no_kps`, `lyk_pip`, `penerima_kip`, `no_kip`, `nm_kip`, `terima_kip`, `alasan_pip`, `nm_bank`, `rek_bank`, `nm_rek`, `nm_ayh`, `glr_ayh`, `nik_ayh`, `lhr_ayh`, `pnddk_ayh`, `pkrj_ayh`, `spk_ayh`, `pghsl_ayh`, `bk_ayh`, `nm_ibu`, `nik_ibu`, `lhr_ibu`, `pnddk_ibu`, `pkrj_ibu`, `spk_ibu`, `pghsl_ibu`, `bk_ibu`, `nm_wali`, `stts_wali`, `nik_wali`, `lhr_wali`, `pnddk_wali`, `spk_wali`, `pghsl_wali`, `alt_wali`, `rt_wali`, `nm_dsn_wali`, `nm_ds_wali`, `nm_kec_wali`, `nm_kt_wali`, `nm_prov_wali`, `kode_pos_wali`, `tlp_wali`, `no_rumah`, `no_hpwa_ayah`, `no_hpwa_ibu`, `email`, `tggi_bdn`, `brt_bdn`, `hobi`, `jarak_sekolahan`, `tempuh_sekolahan`, `jml_sdr`, `jenis_prestasi`, `tingkat_prestasi`, `nama_prestasi`, `tahun_prestasi`, `penyelenggara_prestasi`, `jns_beasiswa`, `ket_beasiswa`, `awl_beasiswa`, `akhr_beasiswa`, `jrsn_smk`, `jns_pendaftaran`, `nis`, `msk_skl`, `tgl_lulus`, `d_kelas`, `nama_smp`, `nama_smp2`, `no_un`, `no_ijazah`, `no_skhun`, `almt_smp`, `kota_smp`, `prov_smp`, `ring`, `v_smp`, `valid`, `v_skhun`, `v_raport`, `v_kk`, `v_akta`, `v_foto`, `v_regis`, `v_semua`, `prioritas`) VALUES
(1, 'MT20190515000001', 'DAFTAR MTS', 'LAKI-LAKI', '0.1234569', '1234567891234567', '1234567891234567', 'KEDIRI', '2019-05-15', '124879', 'ISLAM', 'INDOG', 'Tidak', 'HMP', 'ALAMAT JALAN', '014/004', 'BANDAR', 'DESA', 'KECAMATAN', 'KABUPATEN', 'NAPROV', '64114', 'Bersama Orang Tua', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'AYAH', '-', '1234', '20/11/1999', 'Putus SD', 'Tidak Bekerja', 'BURUH KETIK', 'Kurang dari 500.000', 'Tidak', 'IBU', '12345677', '20/01/1994', 'Tidak Sekolah', 'Tidak Bekerja', 'NGANGGUR', 'Lebih dari 20.000.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '771815', '123', '1234', 'email@terdaftar.com', '170', '75', 'BOY', 'Kurang dari 1 Kilometer', '00.15', '11', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '1234', '098', '098', '10', '', 'SMP MUHAMADIYAH', '2-15-17-13-7', '12349784', '987456', 'ASAL', 'KOTA', 'PROVINSI', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'SD20190613000001', 'ABDUL SD', 'LAKI-LAKI', '0.123456911', '1234567891234567', '1234567891234567', 'KEDIRI', '2019-06-13', '124879', 'ISLAM', 'INDO', 'Laras (E)', 'NDK', 'ALAMAT JALAN', '014/004', 'BANDAR', 'DESA', 'KECAMATAN', 'KABUPATEN', 'NAPROV', '64114', 'Bersama Orang Tua', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'NAMA AYAH', '-', '1234', '20/11/1999', 'Tidak Sekolah', 'Pensiunan', 'BURUH KETIK', 'Kurang dari 500.000', 'Tidak', 'IBU', '12345677', '20/01/1994', 'Tidak Sekolah', 'Nelayan', 'NGANGGUR', 'Kurang dari 500.000', 'Autis (Q)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Kurang dari 1 Kilometer', '', '', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '', '', '', '10', '', '', '', '', '', '', '', '', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'SP20190613000001', 'NAMA SMP', 'PEREMPUAN', '0.123456911', '1234567891234567', '1234567891234567', 'KEDIRI', '2019-06-13', '124879', 'ISLAM', 'INDO', 'Tidak', 'HMP', 'ALAMAT JALAN', '014/004', 'BANDAR', 'DESA', 'KECAMATAN', 'KABUPATEN', 'NAPROV', '64114', 'Bersama Wali', 'JALAN KAKI', '', '', 'TIDAK', '', 'TIDAK', 'TIDAK', '', '', 'TIDAK', '', '', '', '', 'NAMA AYAH', '-', '1234', '20/11/1999', 'SD Sederajat', 'Buruh', 'BURUH KETIK', '5.000.000 - 20.000.000', 'Tidak', 'IBU', '12345677', '20/01/1994', 'S3', 'Pedagang Kecil', 'NGANGGUR', 'Kurang dari 500.000', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1234568 / 9876468', '666890 / 098647', 'email@terdaftar.com', '', '', '', 'Kurang dari 1 Kilometer', '', '', '', '', '', '', '', '', '', '', '', '', 'Siswa Baru', '1234', '098', '098', '', '', 'SMP MUHAMADIYAH', '2-15-17-13-8', '12349784', '987456', 'ASAL', 'KOTA', 'PROVINSI', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

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
(1, 'AL-MAHRUSIYAH', 'Jl. KH.Abdul Karim no.9, Lirboyo, KEDIRI', '2019-06-01', '2019-06-14', '2019-06-15', '1000', 'Logo SMK Png.png', 'download.png', 'Untitled.jpg', 'Untitled.jpg', 'Untitled.jpg', 'Untitled.jpg', '<h4>Visi Sekolah</h4>\r\nTerwujudnya lembaga pendidikan yang  professional dan berwawasan lingkungan. \r\n<br><br><br>\r\n<h4>Misi Sekolah</h4>\r\n1.	Menyelenggarakan pendidikan berdasarkan iman dan taqwa.\r\n<br>2.	Menyelenggarakan pelayanan pendidikan regular dan inklusif.\r\n<br>3.	Meningkatkan kepedulian warga sekolah terhadap pelestarian fungsi lingkungan.\r\n<br>4.	Meningkatkan kepedulian warga sekolah terhadap pencegahan terjadinya kerusakan lingkungan.\r\n<br>5.	Meningkatkan kepedulian warga sekolah terhadap pencegahan  terjadinya pencemaran lingkungan.\r\n<br>6.	Menyelenggarakan pendidikan berwawasan lingkungan yang terintegrasi pada mata pelajaran.\r\n<br>7.	Menyelenggarakan Administrasi dan Proses Belajar Mengajar sesuai Standar Operasional Prosesur (SOP).\r\n<br>8.	Meningkatkan prestasi, sikap dan keterampilan peserta didik.                                  ', '', '', '20');

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
(1, '2-15-17-13-7', 'DAFTAR MTS', '0.1234569', '', 'KEDIRI', '2019-05-15', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SMP MUHAMADIYAH', '', ''),
(2, '', 'ABDUL SD', '0.123456911', '', 'KEDIRI', '2019-06-13', '', 'Laki-laki', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '2-15-17-13-8', 'NAMA SMP', '0.123456911', '', 'KEDIRI', '2019-06-13', '', 'Perempuan', 'ISLAM', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1234568 / 98764', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'SMP MUHAMADIYAH', '', '');

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
(4, 'MTS AL-MAHRUSIYAH', ''),
(5, 'SMP AL-MAHRUSIYAH', ''),
(7, 'MA AL-MAHRUSIYAH', '');

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
(13, 'ppdb_smk', '98e3296b978a69b96bbd85b8ad10bafb', 'ppdb');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswadaftar`
--
ALTER TABLE `tb_siswadaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_smp`
--
ALTER TABLE `tb_smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
