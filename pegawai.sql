-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 03:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--
CREATE DATABASE IF NOT EXISTS `pegawai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pegawai`;

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(5) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nip`, `nama`, `jam`, `tanggal`, `status`, `keterangan`) VALUES
(28, '102', 'Wahyu', '20:32:08', '2017-06-08', 'Izin', '-------'),
(29, '103', 'Bayu', '20:32:32', '2017-06-08', 'Hadir', 'Terlambat'),
(30, '101', 'Ridho', '20:35:58', '2017-06-08', 'Sakit', '-------');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `img`, `nama`, `telepon`, `email`, `alamat`, `username`, `password`, `level`) VALUES
(100, 'Bayu.jpg', 'Bayu Aprilananda Sujatmoko', '081372892902', '15523090@students.uii.ac.id', 'Jl kaliurang 1', 'admin', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `kode` varchar(5) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `informasi` text NOT NULL,
  `id_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`kode`, `img`, `judul`, `tanggal`, `informasi`, `id_admin`) VALUES
('b001', 'berita1.jpg', 'Informatika Perkuat Jejaring Internasional', '2017-06-04', 'Hendrik, M.Eng, Ketua Program Studi (Prodi) Teknik Informatika sebagai anggota Delegasi Fakultas Teknologi Industri Universitas Islam Indonesia (FTI-UII), melakukan rangkaian kunjungan inisiasi kerjasama ke berbagai Perguruan Tinggi di Jepang, yaitu ke Hokkaido Information University (HIU), Kumamoto University dan Kansai University. (26 April 2017)\r\n\r\n"Kunjungan tersebut sebagai upaya meningkatkan rekognisi dan jejaring Internasional antara Prodi Teknik Informatika (TF) FTI UII dengan Perguruan Tinggi di Jepang" demikian disampaikan dalam rilisnya Prodi Teknik Informatika (5 Mei 2017).\r\n\r\nProf. Jun Nishihira, M.D, Ph.D, Vice President HIU, menerima langsung Delegasi FTI-UII ini dipimpin oleh Dr. Imam Djati Widodo, Dekan FTI UII. Turut serta Dr. Teduh Dirgahayu, Dosen Teknik informatika sekaligus Ketua Pascasarjana, Dr.Eng. Hendra Setiawan, Ketua Prodi Teknik Elektro dan Yuli Augusti Rochman, M.Eng., Ketua Prodi Teknik Industri.\r\n\r\n"Insya Allah, pada bulan September 2017 Prodi Teknik Informatika akan mengirimkan mahasiswanya untuk mengikuti program student exchange di HIU, dengan sumber pendanaan melalui skema Sakura Science Plan" ujar Hendrik.\r\n\r\nHendrik menambahkan "selain diskusi dengan saling mempresentasikan profil masing-masing institusi, juga dilakukan diskusi terkait bentuk-bentuk kerjasama yang mungkin dilakukan oleh kedua belah pihak. Salah satu bentuk kegiatan kerjasama yang akan dilakukan berkaitan dengan mahasiswa adalah program kompetisi bersama".\r\n\r\n"Kompetisi tersebut meliputi pemrograman, desain web dan pembuatan film pendek, sudah berlangsung selama 7 tahun atara HIU dan Rajamangala University of Technology Tanyaburi (RMUTT)-Thailand" ujarnya.\r\n\r\nDalam diskusi tersebut Prof. Yuichi Anada, sebagai penanggung jawab kegiatan ini menjanjikan untuk mengusahakan agar mahasiswa TF FTI-UII, dapat bergabung dengan rekan-rekan mahasiswa dari HIU maupun RMUTT.  "Namun pada bulan September tahun ini, kemungkinan Mahasiswa Teknik Informatika FTI UII baru dapat hadir menjadi observer" tegas Prof. Yuichi Anada\r\n\r\n"Semoga kegiatan ini dapat terealisir sehingga mahasiswa Mahasiswa Teknik Informatika FTI UII memiliki lebih banyak kesempatan berinteraksi dan menjalin jejaring internasional" pungkas Hendrik.\r\n', 100),
('b002', 'berita2.jpg', 'Tujuh Kebiasaan Wirausaha Sukses', '2017-06-04', '"Lakukan hal yang paling penting dalam hidup, jelaslah tentang prioritas anda dan bertindaklah, percaya pada prinsip yang benar dan  nilai terdalam dari kita sendiri, serta dahulukan yang utama".\r\nHal tersebut disampaikan oleh Wahyudi Sutrisno, ST., MM., saat menjadi narasumber kebiasaan wirausaha sukses yang merupakan Kegiatan Pengabdian Masyarakat atas kerjasama Fakultas Teknologi Industri Universitas Islam Indonesia (FTI UII) dengan Pemerintahan Desa Widodomartani Kecamatan Ngemplak Kabupaten Sleman (9 Mei 2017).\r\nWahyudi Sutrisno, ST., MM., menjelaskan tentang attitude menjadi seorang pengusaha yaitu terdapat Tujuh Kebiasaan Wirausaha Sukses meliputi, "menjadi proaktif, mulai dengan tujuan akhir, dahulukan yang utama, berpikir menang-menang, berusaha mengerti terlebih dahulu, baru di mengerti, wujudkan sinergi, serta asahlah gergaji" ujar Dosen Program Studi Teknik Industri tersebut.\r\nSelain memberi motivasi kita harus memberi contoh supaya jelas dan bisa ditiru hal itu diungkapkan Wahyudi saat menjawab dari salah satu peserta dalam diskusi â€œBagaimana cara memberi motivasi kepada teman-teman pengusaha termasuk bawahanâ€.\r\nKegiatan ini merupakan salah satu Rangkaian Milad Universitas Islam Indonesia ke-74, yang dilaksanakan di Balai Desa Widodomartani ini diikuti oleh 33 peserta utusan dari Kelompok Usaha Bersama (KUBE), Kelompok Petani Ternak Sapi Taruna Mandiri Dusun Ngaliyan.\r\n', 100),
('b003', 'berita3.jpg', 'Reuni FTT 84, gagas Galang Dana Sosial', '2017-06-04', 'Banyak cara untuk menyambung tali silaturahmi.,diantaranya dengan reuni, saling memberi hadiah, atau dengan pemberian yang lain. Sambunglah silaturahmi itu dengan berlemah lembut, berkasih sayang, wajah berseri, memuliakan, dan dengan segala hal yang sudah dikenal manusia dalam membangun silaturahmi. Dengan silaturahmi, pahala yang besar insha Allah akan diproleh dariNya. Silaturahim menyebabkan seseorang dapat masuk ke dalam surga. Silaturahim juga menyebabkan seorang hamba tidak akan putus hubungan dengan Allah di dunia dan akhirat.\r\nHal tersebut menjadi salah satu alasan alumni Fakultas Teknik Tekstil (sekarang Program Studi Teknik Kimia) mengadakan reuni, setelah 33 tahun yang lalu mencatatkan diri sebagai bagian dari citivas akademik atau keluarga UII.\r\nDalam sambutannya M Abdul Najib mengagas mengalang Dana Sosial, yang kepentingannya untuk kemaslahatan bersama. Tampak hadir, beberapa dedengkot alumni FTT, diantaranya Ir Siti Wartiningsih, M.Pd, Ir Nuki W, Ir. H. Suratno dan Ir. H. Muhammad Abdul Najid, MBA, sebagai promotor kegiatan reuni yang diadakan di bilangan sebuah rumah makan di kawasan Jalan Magelang Sleman Yogyakarta (30 April 2017). Jerri Irgo\r\n', 100);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` varchar(10) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`) VALUES
('10', 'Administration'),
('20', 'Marketing'),
('30', 'IT'),
('40', 'Human Resources'),
('50', 'Finances');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `min_gaji` int(20) NOT NULL,
  `max_gaji` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`, `min_gaji`, `max_gaji`) VALUES
('account', 'Accountant', 2000000, 4000000),
('adm', 'Administration', 2000000, 3000000),
('hr', 'Human Resources', 2000000, 3000000),
('it_prog', 'IT Programmer', 2000000, 4000000),
('mark', 'Marketing', 2000000, 3500000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gaji` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `id_departemen` varchar(10) NOT NULL,
  `id` int(5) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `img`, `nama`, `telepon`, `email`, `jabatan`, `alamat`, `gaji`, `username`, `password`, `id_jabatan`, `id_departemen`, `id`, `level`) VALUES
('101', 'no-image.png', 'Ridho', '081372892902', '15523073@students.uii.ac.id', 'IT Programmer', 'Jl kaliurang', 2900000, 'ridho', '12345678', 'it_prog', '30', 100, 2),
('102', 'no-image.png', 'Wahyu', '081372892902', '15523077@students.uii.ac.id', 'IT Programmer', 'Jl kaliurang 1', 3000000, 'wahyu', '12345678', 'it_prog', '30', 100, 2),
('103', 'Bayu.jpg', 'Bayu', '081275191997', '15523090@students.uii.ac.id', 'Human Resources', 'Jl Kaliurang', 3000000, 'bayu', '12345678', 'hr', '40', 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_cuti`
--

CREATE TABLE `pengajuan_cuti` (
  `id` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `lama` int(10) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `id_admin` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip_pegawai` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_cuti`
--

INSERT INTO `pengajuan_cuti` (`id`, `keterangan`, `lama`, `dari`, `sampai`, `status`, `id_admin`, `nama`, `nip_pegawai`) VALUES
(5, 'Pulang Kampung', 10, '2017-06-05', '2017-06-10', 'Tidak Disetujui', 100, 'Ridho', '101'),
(6, 'Seminar', 2, '2017-06-05', '2017-06-06', 'Disetujui', 100, 'Wahyu', '102'),
(7, 'Seminar lagi gan', 2, '2017-06-07', '2017-06-08', 'Disetujui', 100, 'Wahyu', '102'),
(8, 'Mudik lebaran', 10, '2017-06-07', '2017-06-16', 'Disetujui', 100, 'Bayu', '103');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_departemen` (`id_departemen`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pengajuan_cuti`
--
ALTER TABLE `pengajuan_cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`nip_pegawai`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pengajuan_cuti`
--
ALTER TABLE `pengajuan_cuti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawai_ibfk_3` FOREIGN KEY (`id_departemen`) REFERENCES `departemen` (`id_departemen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_cuti`
--
ALTER TABLE `pengajuan_cuti`
  ADD CONSTRAINT `pengajuan_cuti_ibfk_1` FOREIGN KEY (`nip_pegawai`) REFERENCES `pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_cuti_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
