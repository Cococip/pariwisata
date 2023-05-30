-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 04:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(10) NOT NULL,
  `nama_fasilitas` varchar(25) DEFAULT NULL,
  `ket_fasilitas` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `ket_fasilitas`, `foto`) VALUES
(1, 'Ruang Kepala Sekolah', 'SD N 1 Gaden Memiliki 1 Ruang Kepala Sekolah                    ', '2054000068_ruang kepsek.jpg'),
(2, 'Ruang Guru', 'SD N 1 Gaden Memiliki 1 Ruang Kepala Sekolah                    ', '1887152868_ruang guru.jpg'),
(3, 'Ruang Kelas', 'SD N 1 Gaden Memiliki 6 Ruang Kelas                     ', '896349487_ruang kelas.jpg'),
(4, 'Ruang UKS', 'SD N 1 Gaden Memiliki 1 Ruang UKS                    ', '1708408349_uks.jpg'),
(5, 'Perpustakaan', 'SD N 1 Gaden Memiliki 1 Perpustakaan                     ', '149917756_perpustakaan.jpg'),
(6, 'Tempat Parkir Siswa', 'SD N 1 Gaden Memiliki Tempat Parkir Siswa yang Luas                    ', '1432520666_parkir siswa.jpg'),
(7, 'Tempat Parkir Guru', 'SD N 1 Gaden Memiliki 1 Tempat Parkir Guru                    ', '11907557_parkir guru.jpg'),
(8, 'Kamar Mandi Siswa', 'SD N 1 Gaden Memiliki 4 Kamar Mandi Siswa                    ', '1277164320_toilet.jpg'),
(9, 'Halaman Sekolah', '                    	SD N 1 Gaden Memiliki Halaman Sekolah yang sangat Luas                    ', '657590656_halaman sekolah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `ket_foto`, `foto`) VALUES
(17, '1                    ', '641507252_1.jpg'),
(18, '2                    ', '1325021623_2.jpg'),
(19, '3                    ', '1922557853_3.jpg'),
(21, '4                    ', '1391052947_4.jpg'),
(22, '5                    ', '2135689392_5.jpg'),
(23, '6                    ', '1537983285_6.jpg'),
(24, '7                    ', '246820710_7.jpg'),
(25, '8                    ', '80486625_8.jpg'),
(26, '9                    ', '1421223808_9.jpg'),
(27, '10                    ', '580632827_10.jpg'),
(28, '11                    ', '1572470816_11.jpg'),
(29, '12                    ', '1098786079_12.jpg'),
(30, '13              ', '2129987539_13.jpg'),
(31, '14                    ', '1034314722_14.jpg'),
(32, ' 15                   ', '39431102_15.jpg'),
(33, '16                    ', '603323418_16.jpg'),
(34, '17                    ', '1309026568_18.jpg'),
(35, '18                    ', '1955195996_19.jpg'),
(36, '19                    ', '1528430193_20.jpg'),
(37, '20                    ', '346159347_21.jpg'),
(38, '21                    ', '439452476_22.jpg'),
(39, '22                    ', '1018570489_25.jpg'),
(40, '23                    ', '93599898_26.jpg'),
(41, '24                    ', '298018109_27.jpg'),
(42, '25                    ', '688723484_28.jpg'),
(43, '26                    ', '68345491_29.jpg'),
(44, '27                    ', '1470414409_30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(15) NOT NULL,
  `nama_kegiatan` varchar(100) DEFAULT NULL,
  `ket_kegiatan` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `ket_kegiatan`, `foto`) VALUES
(1, 'Outbon', 'Bersama keluarga SD N 1 Gaden melaksanakan Outbon                     ', '569766936_2.jpg'),
(2, 'Pramuka', 'Kegiatan Pramuka SD Negeri 1 Gaden                    ', '396628913_11.jpg'),
(3, 'Karya Wisata', 'Kegiatan Karya Wisata Guru SD Negeri 1 Gaden                    ', '1791006992_18.jpg'),
(4, 'gsfc', 'AFS                    	\r\n                    ', '1237008761_11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `namak` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `namak`, `isi`) VALUES
(1, 'yayaya', 'bagus banget rekomendari untuk wisata edukasi daerah jogja'),
(2, 'riska', 'ini adalah latfrom yang bagus'),
(3, 'db_hor', 'fdgdggad'),
(7, 'key', 'bagus bangettttt'),
(8, 'riska', 'halllo'),
(9, 'veeeeee', 'mantul'),
(10, 'rpl', 'ini bagus'),
(11, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `nama_p` varchar(200) NOT NULL,
  `ket_p` text NOT NULL,
  `fotop` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`id_pelatihan`, `nama_p`, `ket_p`, `fotop`) VALUES
(1, 'PELATIHAN 1', 'Pelatihan 1', '2012350239_Husain Basyaiban.png'),
(3, 'jkahadad', '                    	afadfaeef                    ', '86922237_Dalang Pelo.png'),
(4, 'PELATIHAN 3', 'Pelatihan 3', '1481677515_Bonbonsantoso.png'),
(5, 'PELATIHAN 4', 'ini adalah pelatihan 4\r\n                    ', '570206146_Upin & Ipin Official.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama_peng` varchar(200) NOT NULL,
  `umur_peng` date NOT NULL,
  `alamat_peng` text NOT NULL,
  `telp_peng` varchar(20) NOT NULL,
  `pekerjaan_peng` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id_pengunjung`, `nama_peng`, `umur_peng`, `alamat_peng`, `telp_peng`, `pekerjaan_peng`, `username`, `password`) VALUES
(3, 'riska', '2023-05-17', '                    	                    	                    	                    	ashajsadhafdad                                                                                ', '08985319471', 'mahasiswa', 'riska', '276b6c4692e78d4799c12ada515bc3e4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `nama`, `email`, `subject`, `pesan`) VALUES
(13, 'reza', 'admin@jogjaku.com', 'ini', 'vdadfasffsfsafs'),
(14, 'reza', 'admin@jogjaku.com', 'ini', 'vdadfasffsfsafs'),
(15, 'reza', 'admin@jogjaku.com', 'ini', 'vdadfasffsfsafs'),
(16, 'reza', 'admin@jogjaku.com', 'ini', 'vdadfasffsfsafs'),
(17, 'Alfian', 'admin@jogjaku.com', 'ini', 'ggsrrgrgssrg'),
(18, 'Alfian', 'admin@jogjaku.com', 'ini', 'ggsrrgrgssrg'),
(19, 'Alfian', 'admin@jogjaku.com', 'ini', 'ini adalah pesan\r\n'),
(20, 'Alfian', 'admin@jogjaku.com', 'ini', 'ini adalah pesan\r\n'),
(21, 'riska', 'riskadesti123@gmail.com', 'ini', 'ini adalah pesan'),
(22, 'riska', 'riskadesti123@gmail.com', 'ini', 'kamu siapaaaaa'),
(23, 'riska', 'riskadesti123@gmail.com', 'ini', 'masukkkkkk?'),
(24, 'riska', 'riskadesti123@gmail.com', 'ini', 'sfadfa'),
(25, 'riska', 'riskadesti123@gmail.com', 'ini', 'afafdf'),
(26, 'riska', 'riskadesti123@gmail.com', 'ini', 'aadada'),
(27, 'riska', 'riskadesti123@gmail.com', 'ini', 'dadad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(10) NOT NULL,
  `nama_prestasi` varchar(25) DEFAULT NULL,
  `ket_prestasi` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nama_prestasi`, `ket_prestasi`, `foto`) VALUES
(2, 'lari Jauh', 'juaraharapan\r\n                                    ', '550441661_1.png'),
(4, 'Pramuka', 'Juara Pengampu Terbaik        	\r\n                                        ', '1523974193_12.jpg'),
(5, 'Mocopat', 'qwREEEEEEEEEEEE                    	\r\n                                        ', '1977836723_28.jpg'),
(6, 'paDUAN sUARA', 'SAHFSUJHGFUKJ                	\r\n                    ', '43155105_10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_ptofil` int(11) NOT NULL,
  `deskripsi1` text NOT NULL,
  `judul` text NOT NULL,
  `foto1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_ptofil`, `deskripsi1`, `judul`, `foto1`) VALUES
(1, '                                                                                        Pesona Kalipetir Mah Abang adalah tempat wisata yang didirikan pada tahun 2016 oleh kelompok sadar wisata Desa Margosari yang terletak di Dusun Kalipetir Kidul, Margosari, Pengasih, Kulon Progo.                                                                                ', 'PESONA KALI PETIR', '1014820738_Lagu Anak Indonesia Balita.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil2`
--

CREATE TABLE `tb_profil2` (
  `id_profil2` int(11) NOT NULL,
  `judul2` text NOT NULL,
  `deskripsi2` text NOT NULL,
  `foto2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil2`
--

INSERT INTO `tb_profil2` (`id_profil2`, `judul2`, `deskripsi2`, `foto2`) VALUES
(1, 'JUDUL 2', 'DESKRIPSI 2', '488363548_Bonbonsantoso.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil3`
--

CREATE TABLE `tb_profil3` (
  `id_profil3` int(11) NOT NULL,
  `judul3` text NOT NULL,
  `deskripsi3` text NOT NULL,
  `foto3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil3`
--

INSERT INTO `tb_profil3` (`id_profil3`, `judul3`, `deskripsi3`, `foto3`) VALUES
(1, 'JUDUL 3', 'INI DESKRIPSI 3', '527760952_Gamelancer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'sdn1gaden', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_ptofil`);

--
-- Indexes for table `tb_profil2`
--
ALTER TABLE `tb_profil2`
  ADD PRIMARY KEY (`id_profil2`);

--
-- Indexes for table `tb_profil3`
--
ALTER TABLE `tb_profil3`
  ADD PRIMARY KEY (`id_profil3`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_ptofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_profil2`
--
ALTER TABLE `tb_profil2`
  MODIFY `id_profil2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_profil3`
--
ALTER TABLE `tb_profil3`
  MODIFY `id_profil3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
