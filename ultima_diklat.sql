-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 11:09 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultima_diklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL,
  `file_path` varchar(300) NOT NULL,
  `header_document_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `keterangan` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_file`, `file_path`, `header_document_id`, `table_id`, `keterangan`) VALUES
(1, 'asssssssssssss', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `header_document`
--

CREATE TABLE `header_document` (
  `header_document_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_unit` int(200) NOT NULL,
  `detail_document` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_document`
--

INSERT INTO `header_document` (`header_document_id`, `name`, `type_unit`, `detail_document`) VALUES
('5d78659532659', 'Berkas Back Office ', 1, 1),
('5d7865c65d77b', 'Front Officexxx', 3, 2),
('5d786b1edf6a2', 'OB SISI', 6, 2),
('5d786b429f2ec', 'hmm', 8, 4),
('5d78a4ac81f94', 'Any', 3, 5),
('5d7a00ba720f4', 'syahril', 8, 6),
('5d7a03d8f2723', 'unit testing lagi', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id_table` int(11) NOT NULL,
  `kelompok` int(11) NOT NULL,
  `id_list` varchar(200) NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id_table`, `kelompok`, `id_list`, `list`) VALUES
(1, 1, '1.1.a', 'Tim Reformasi Birokrasi/Penanggung jawab Reformasi Birokrasi unit kerja telah dibentuk'),
(2, 1, '1.1.b', 'Tim Reformasi Birokrasi/Penanggung jawab Reformasi Birokrasi telah melaksanakan tugas sesuai rencana kerja Tim Reformasi Birokrasi'),
(3, 1, '1.1.c', 'Tim Reformasi Birokrasi/Penanggung jawab Reformasi Birokrasi telah melakukan monitoring dan evaluasi rencana kerja'),
(4, 1, '1.2.a', 'Road Map/Rencana Kerja Reformasi Unit Kerja telah disusun dan diformalkan'),
(5, 1, '1.2.b', 'Telah terdapat sosialisasi/internalisasi Road Map/Rencana Kerja Reformasi Birokrasi unit kerja kepada anggota organisasi'),
(6, 1, '1.2.c', 'Rencana Kerja Reformasi Birokrasi unit kerja selaras dengan Road Map'),
(7, 1, '1.3.a', 'Pelaksanaan PMPRB dilakukan oleh Asesor sesuai dengan ketentuan yang berlaku'),
(8, 1, '1.3.b', 'Apakah para asesor mencapai konsensus atas pengisian kertas kerja sebelum menetapkan nilai PMPRB instansi'),
(9, 1, '1.3.c', 'Rencana aksi tindak lanjut (RATL) telah dikomunikasikan dan dilaksanakan'),
(10, 1, '1.3.d', 'Penanggungjawab RB internal unit kerja telah melakukan pemantauan dan evaluasi pelaksanaan rencana kerja'),
(11, 2, '2.1.a', 'Telah dilakukan identifikasi'),
(12, 2, '2.1.b', 'Telah dilakukan revisi peraturan perundang-undangan yang tidak harmonis / tidak sinkron'),
(13, 2, '2.2.a', 'Sistem pengendalian dalam penyusunan peraturan perundang-undangan (25)'),
(14, 3, '3.1.a', 'Telah dilakukan evaluasi yang menganalisis kesesuaian struktur organisasi/unit kerja dengan kinerja yang akan dihasilkan'),
(15, 3, '3.1.b', 'Hasil assesment telah direviu oleh unit/bagian organisasi '),
(16, 3, '3.2.a', 'Penataan'),
(17, 4, '4.1.a', 'Peta proses bisnis sudah dijabarkan ke dalam prosedur operasional tetap (SOP)'),
(18, 4, '4.1.b', 'Prosedur operasional tetap (SOP) telah diterapkan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_type` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `user_type`) VALUES
(1, 'afendi', '76cf4079ac1b10a3f8c77ca4bd161b29', 1),
(3, 'unit', '3e34bdebd9bd5edda27e8728904a2552', 2),
(10, 'sisi', '8054da645a387dbfb06654d69f0d0201', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `header_document_id` (`header_document_id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indexes for table `header_document`
--
ALTER TABLE `header_document`
  ADD PRIMARY KEY (`header_document_id`),
  ADD KEY `detail_document` (`detail_document`);

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id_table`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_document`
--
ALTER TABLE `header_document`
  MODIFY `detail_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
