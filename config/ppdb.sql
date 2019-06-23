-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 05:55 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
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
  `no_hp` varchar(15) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
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
(1, 'SMK AL-MAHRUSIYAH', 'JL. NGAMPEL RAYA RT. 4 RW. 1 KEL. NGAMPEL KEC. MOJOROTO KOTA KEDIRI', '2018-05-12', '2018-07-07', '2018-07-08', '250', 'Logo SMK Png.png', 'download.png', 'Untitled.jpg', 'Untitled.jpg', 'Untitled.jpg', 'Untitled.jpg', '<h4>Visi Sekolah</h4>\r\nTerwujudnya lembaga pendidikan yang  professional dan berwawasan lingkungan. \r\n<br><br><br>\r\n<h4>Misi Sekolah</h4>\r\n1.	Menyelenggarakan pendidikan berdasarkan iman dan taqwa.\r\n<br>2.	Menyelenggarakan pelayanan pendidikan regular dan inklusif.\r\n<br>3.	Meningkatkan kepedulian warga sekolah terhadap pelestarian fungsi lingkungan.\r\n<br>4.	Meningkatkan kepedulian warga sekolah terhadap pencegahan terjadinya kerusakan lingkungan.\r\n<br>5.	Meningkatkan kepedulian warga sekolah terhadap pencegahan  terjadinya pencemaran lingkungan.\r\n<br>6.	Menyelenggarakan pendidikan berwawasan lingkungan yang terintegrasi pada mata pelajaran.\r\n<br>7.	Menyelenggarakan Administrasi dan Proses Belajar Mengajar sesuai Standar Operasional Prosesur (SOP).\r\n<br>8.	Meningkatkan prestasi, sikap dan keterampilan peserta didik.                                  ', '', '', '20');

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
(6, 'SEKOLAH LAIN', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` enum('admin','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'juned', '5367c26e01c1489644064a6369e7ffd5', 'admin'),
(3, 'adminkpa', '9ed318ba6d759c5409fb4a7a2d647156', 'admin'),
(4, 'adminppdb', '464887eedf9fcb515204861deddc56d5', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswadaftar`
--
ALTER TABLE `tb_siswadaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_smp`
--
ALTER TABLE `tb_smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
