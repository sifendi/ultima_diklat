-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2019 at 06:58 AM
-- Server version: 10.2.26-MariaDB-cll-lve
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
-- Database: `resr5454_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL,
  `file_path` varchar(300) NOT NULL,
  `header_document_id` varchar(110) NOT NULL,
  `table_id` int(11) NOT NULL,
  `keterangan` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_file`, `file_path`, `header_document_id`, `table_id`, `keterangan`) VALUES
(10, '6c4595943c11e38267c89b187e231c4b.PDF', '5d7f5af2c4793', 1, 'qty'),
(15, 'c0da90246c7817ba8f0915828d1522ec.pdf', '5d7f99fad4f76', 1, '1.1'),
(16, '71e48c5023ef1ab1f30f428aa4a15a96.pdf', '5d7f99fad4f76', 2, '1.1.b'),
(17, '9fffe55e16a0daeac422240228511a51.pdf', '5d7f9c0ac1926', 1, 'oke'),
(20, '7da1caa1d82b102ff0caaa1b8e66f62c.png', '5d7f5af8b8bdc', 106, 'new');

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
('5d7f5af8b8bdc', 'AKTA', 2, 13),
('5d7f9eb5d8190', 'unit 1 th 2020', 2, 24),
('5d80329cdd1f5', 'unittest', 2, 26),
('5d8078cde87c0', 'PMPRB 2019', 1, 29);

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
(18, 4, '4.1.b', 'Prosedur operasional tetap (SOP) telah diterapkan'),
(19, 4, '4.1.c', 'Peta proses bisnis dan Prosedur operasional telah dievaluasi dan disesuaikan dengan perkembangan tuntutan efisiensi, dan efektivitas birokrasi'),
(20, 4, '4.2.a', 'Sudah dilakukan pengembangan e-government untuk meningkatkan kualitas pelayanan kepada masyarakat (misal: website untuk penyediaan informasi kepada masyarakat, sistem pengaduan)'),
(21, 4, '4.2.b', 'Sudah dilakukan pengembangan e-government untuk meningkatkan kualitas pelayanan kepada masyarakat dalam tingkatan transaksional (masyarakat dapat mengajukan perijinan melalui website, melakukan pembayaran, dll)'),
(22, 4, '4.3.a', 'Menerapkan kebijakan keterbukaan informasi publik'),
(23, 4, '4.3.b', 'Melakukan monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik'),
(24, 4, '4.4.a', 'Kualitas Pengelolaan Arsip'),
(25, 5, '5.1.a', 'Analisis jabatan dan analisis beban kerja telah dilakukan'),
(26, 5, '5.1.b', 'Perhitungan kebutuhan pegawai telah dilakukan'),
(27, 5, '5.1.c', 'Analisis jabatan dan analisis beban kerja telah sesuai kebutuhan unit kerja dan selaras dengan kinerja utama'),
(28, 5, '5.1.d', 'Perhitungan kebutuhan pegawai telah dilakukan sesuai kebutuhan unit kerja'),
(29, 5, '5.2.a', 'Proses penerimaan pegawai transparan, objektif, akuntabel dan bebas KKN (2)'),
(30, 5, '5.3.a', 'Telah diidentifikasi kebutuhan pengembangan kompetensi'),
(31, 5, '5.3.b', 'Telah dilakukan pengembangan pegawai berbasis kompetensi sesuai dengan rencana  dan kebutuhan pengembangan kompetensi'),
(32, 5, '5.4.a', 'Promosi jabatan dilakukan secara terbuka (6)'),
(33, 5, '5.5.a', 'Penerapan Penetapan kinerja individu'),
(34, 5, '5.5.b', 'Terdapat penilaian kinerja individu yang terkait dengan kinerja organisasi '),
(35, 5, '5.5.c', 'Ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level diatasnya'),
(36, 5, '5.5.d', 'Pengukuran kinerja individu dilakukan secara periodik'),
(37, 5, '5.5.e', 'Telah dilakukan monitoring dan evaluasi atas pencapaian kinerja individu.'),
(38, 5, '5.5.f', 'Hasil penilaian kinerja individu telah dijadikan dasar untuk pengembangan karir individu/pemberian reward and punishment lainnya'),
(39, 5, '5.6.a', ' Aturan disiplin/kode etik/kode perilaku instansi telah diimplementasikan'),
(40, 5, '5.6.b', 'Adanya monitoring dan evaluasi atas pelaksanaan aturan disiplin/kode etik/kode perilaku instansi'),
(41, 5, '5.7.a', 'Unit kerja telah mengimplementasikan Standar Kompetensi Jabatan (SKJ)'),
(42, 5, '5.7.b', 'Unit kerja telah melaksanakan evaluasi jabatan  berdasarkan SKJ'),
(45, 5, '5.8.a', 'Sistem informasi kepegawaian dapat diakses oleh pegawai'),
(46, 6, '6.1.a', 'Apakah pimpinan terlibat secara langsung pada saat penyusunan Renstra'),
(47, 6, '6.1.b', 'Apakah pimpinan terlibat secara langsung pada saat penyusunan Penetapan Kinerja'),
(48, 6, '6.1.c', 'Apakah pimpinan memantau pencapaian kinerja secara berkala'),
(49, 6, '6.1.d', 'Pimpinan unit kerja telah memahami kinerja yang harus dicapai dalam jangka menengah '),
(50, 6, '6.1.e', 'Pimpinan unit kerja memahami kinerja yang diperjanjikan di setiap tahun'),
(51, 6, '6.1.f', 'Pimpinan unit kerja memantau pencapaian kinerja secara berkala'),
(52, 6, '6.2.a', 'Apakah terdapat upaya peningkatan kapasitas SDM yang menangani akuntabilitas kinerja'),
(53, 6, '6.2.b', 'Pemutakhiran data kinerja dilakukan secara berkala'),
(54, 6, '6.2.c', 'Unit kerja telah memanfaatkan sistem Pengukuran Kinerja  berbasis elektronik'),
(55, 7, '7.1.a', 'Telah dilakukan public campaign '),
(56, 7, '7.1.b', 'Penanganan gratifikasi telah diimplementasikan'),
(57, 7, '7.1.c', 'Telah dilakukan evaluasi atas kebijakan penanganan gratifikasi'),
(58, 7, '7.1.d', 'Hasil evaluasi atas penanganan gratifikasi telah ditindaklanjuti '),
(59, 7, '7.1.e.1', '- Kepala Daerah/Menteri/ Kepala Lembaga'),
(60, 7, '7.1.e.2', '- Eselon I/II'),
(61, 7, '7.1.e.3', '- Lainnya'),
(62, 7, '7.1.e.4', 'Jumlah yang sudah melaporkan'),
(63, 7, '7.1.f.1', 'Jumlah Eselon III'),
(64, 7, '7.1.f.2', 'Jumlah Eselon IV'),
(65, 7, '7.1.f.3', 'Jumlah Fungsional Golongan IV'),
(66, 7, '7.1.f.4', 'Jumlah yang sudah melaporkan'),
(67, 7, '7.2.a', 'Telah dibangun lingkungan pengendalian'),
(68, 7, '7.2.b', 'Telah dilakukan penilaian risiko atas organisasi'),
(69, 7, '7.2.c', 'Telah dilakukan kegiatan pengendalian untuk meminimalisir risiko yang telah diidentifikasi'),
(70, 7, '7.2.d', 'SPI telah diinformasikan dan dikomunikasikan kepada seluruh pihak terkait'),
(71, 7, '7.2.e', 'Telah dilakukan pemantauan pengendalian intern'),
(72, 7, '7.2.f', 'Unit kerja telah melakukan evaluasi atas Penerapan SPI'),
(73, 7, '7.3.a', 'Penanganan pengaduan masyarakat telah diimplementasikan'),
(74, 7, '7.3.b', 'Hasil penanganan pengaduan masyarakat telah ditindaklanjuti '),
(75, 7, '7.3.c.1', 'Jumlah pengaduan masyarakat yang harus ditindaklanjuti'),
(76, 7, '7.3.c.2', 'Jumlah pengaduan masyarakat yang sedang diproses'),
(77, 7, '7.3.c.3', 'Jumlah pengaduan masyarakat yang  selesai ditindaklanjuti'),
(78, 7, '7.3.d', 'Telah dilakukan evaluasi atas penanganan pengaduan masyarakat'),
(79, 7, '7.3.e', 'Hasil evaluasi atas penanganan pengaduan masyarakat telah ditindaklanjuti '),
(80, 7, '7.4.a', 'Whistle Blowing System telah disosialisasikan'),
(81, 7, '7.5.a', 'Penanganan Benturan Kepentingan telah disosialisasikan'),
(82, 7, '7.5.b', 'Penanganan Benturan Kepentingan telah diimplementasikan'),
(83, 7, '7.5.c', 'Telah dilakukan evaluasi atas Penanganan Benturan Kepentingan'),
(84, 7, '7.5.d', 'Hasil evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti'),
(85, 7, '7.6.a', 'Telah dilakukan pembangunan zona integritas'),
(86, 7, '7.7.a', 'Aparat Pengawasan Intern Pemerintah (APIP) (1,5)'),
(87, 8, '8.1.a', 'Terdapat kebijakan standar pelayanan'),
(88, 8, '8.1.b', 'Standar pelayanan telah dimaklumatkan'),
(89, 8, '8.1.c', 'Terdapat SOP bagi pelaksanaan standar pelayanan'),
(90, 8, '8.1.d', 'Dilakukan reviu dan perbaikan atas standar pelayanan'),
(91, 8, '8.1.e', 'Dilakukan reviu dan perbaikan atas SOP'),
(92, 8, '8.2.a', 'Telah dilakukan sosialisasi/pelatihan dalam upaya penerapan Budaya Pelayanan Prima (contoh: kode etik, estetika, capacity building, pelayanan prima)'),
(93, 8, '8.2.b', 'Informasi tentang pelayanan mudah diakses melalui berbagai media '),
(94, 8, '8.2.c', 'Telah terdapat sistem punishment(sanksi)/reward bagi pelaksana layanan serta pemberian kompensasi kepada penerima layanan bila layanan tidak sesuai standar'),
(95, 8, '8.2.d', 'Telah terdapat sarana layanan terpadu/terintegrasi'),
(96, 8, '8.2.e', 'Terdapat inovasi pelayanan'),
(97, 8, '8.3.a', 'Terdapat media pengaduan pelayanan'),
(98, 8, '8.3.b', 'Terdapat SOP pengaduan pelayanan'),
(99, 8, '8.3.c', 'Terdapat unit yang mengelola pengaduan pelayanan'),
(100, 8, '8.3.d', 'Telah dilakukan tindak lanjut atas seluruh pengaduan pelayanan untuk perbaikan kualitas pelayanan'),
(101, 8, '8.3.e', 'Telah dilakukan evaluasi atas penanganan keluhan / masukan'),
(102, 8, '8.4.a', 'Dilakukan survey kepuasan masyarakat terhadap pelayanan'),
(103, 8, '8.4.b', 'Hasil survey kepuasan masyarakat dapat diakses secara terbuka'),
(104, 8, '8.4.c', 'Dilakukan tindak lanjut atas hasil survey kepuasan masyarakat'),
(105, 8, '8.5.a', 'Telah memiliki rencana penerapan teknologi informasi dalam pemberian pelayanan'),
(106, 8, '8.5.b', 'Telah menerapkan teknologi informasi dalam memberikan pelayanan'),
(107, 8, '8.5.c', 'Telah dilakukan perbaikan secara terus menerus');

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
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', 999),
(14, 'unit1', '917e92199cde751f08b388e9ffe2dae6', 1),
(15, 'unit2', '917e92199cde751f08b388e9ffe2dae6', 2),
(16, 'rilha', '917e92199cde751f08b388e9ffe2dae6', 3),
(18, 'DPMPTSP', '917e92199cde751f08b388e9ffe2dae6', 1);

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
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `header_document`
--
ALTER TABLE `header_document`
  MODIFY `detail_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
