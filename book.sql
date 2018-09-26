-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 10:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `id_post`, `tanggal`, `nama`, `pesan`) VALUES
(9, 4, '2018-09-26 11:45:06', 'dsa', 'sda'),
(10, 5, '2018-09-26 11:45:52', 'test', 'book'),
(11, 5, '2018-09-26 11:46:26', 'test', 'root@localhost'),
(12, 5, '2018-09-26 11:48:44', 'testlagi', 'guestbook,post,user'),
(13, 5, '2018-09-26 11:49:20', 'testlagi', 'komen,post,user');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul`, `penulis`, `sinopsis`, `gambar`, `tanggal`) VALUES
(2, 'Ceros And Batozar', 'Tere Liye', '<p>\r\n\r\nAwalnya kami hanya mengikuti karyawisata biasa seperti murid-murid sekolah lain. Hingga Ali, dengan kegeniusan dan keisengannya, memutuskan menyelidiki sebuah ruangan kuno. Kami tiba di bagian dunia paralel lainnya, menemui petarung kuat, mendapat kekuatan baru serta teknik-teknik menakjubkan.&nbsp;</p><p>Dunia paralel ternyata sangat luas, dengan begitu banyak orang hebat di dalamnya. Kisah ini tentang petualangan tiga sahabat. Raib bisa menghilang. Seli bisa mengeluarkan petir. Dan Ali bisa melakukan apa saja.\r\n\r\n<br></p>', '1.jpg', 2018),
(3, 'Negeri di Ujung Tanduk', 'Tere Liye', '<p>\r\n\r\nDi Negeri di Ujung Tanduk kehidupan semakin rusak, bukan karena orang jahat semakin banyak, tapi semakin banyak orang yang memilih tidak peduli lagi.<br><br>Di Negeri di Ujung Tanduk, para penipu menjadi pemimpin, para pengkhianat menjadi pujaan, bukan karena tidak ada lagi yang memiliki teladan, tapi mereka memutuskan menutup mata dan memilih hidup bahagia sendirian.<br><br>Tapi di Negeri di Ujung Tanduk setidaknya, kawan, seorang petarung sejati akan memilih jalan suci, meski habis seluruh darah di badan, menguap segenap air mata, dia akan berdiri paling akhir, demi membela kehormatan\r\n\r\n<br></p>', '2.jpg', 2013),
(4, 'Padang Bulan', 'Andrea Hirata', '<p>\r\n\r\nMelalui pergolakan nasib seorang perempuan dan huru-hara kecemburuan, Andrea Hirata kembali memilih sudut yang tidak terduga untuk menampilkan kisah yang inspiratif tentang kegigihan karakter-karakter di dalam novelnya. Novel <i>Padang Bulan</i>&nbsp;bermula dari kisah seorang gadis kecil berusia 14 tahun, Enong namanya, yang sangat gemar pada pelajaran bahasa Inggris, namun secara mendadak terpaksa harus berhenti sekolah dan mengambil alih seluruh tanggung jawab keluarga. Tersambung pada sekuel novel ini, <i>Cinta di Dalam Gelas,</i>perjalanan nasib anak perempuan kecil itu, melalui gaya khasnya: menertawakan kepedihan, memarodikan tragedi, mengkritik tanpa menjadi sarkastik, kisah Enong menjadi seperti panggung di dalam lembaran-lembaran kertas. Membaca novel ini seperti melihat sebuah gambar. <br><br>Dengan menceritakan kisah Enong seperti sebuah epos, Andrea berhasil memperlihatkan kepada pembaca kekuatan-kekuatan besar yang tersembunyi di dalam diri manusia, kekuatan yang sering tidak disadari seseorang berada di dalam dirinya. Enong jatuh, bangun, jatuh lagi, dan bangun lagi. Kisah Enong tidak sekadar kisah sebuah keluarga yang sederhana, namun tentang impian seorang anak kecil, tentang keberanian menjalani hidup, dan tentang seorang lelaki yang menjadi berantakan karena tragedi cinta pertama. <br><br>\"Cemburu adalah perahu Nabi Nuh yang tergenang di dalam hati yang karam. Lalu, naiklah ke geladak perahu itu, binatang yang berpasang-pasangan: perasaan tak berdaya-ingin mengalahkan, rencana jahat-penyesalan, kesedihan-gengsi....,\" kata lelaki itu.<br><br>Salman Faridi\r\n\r\n<br></p>', '3.jpg', 2011),
(5, '5 cm', 'Donny Dhirgantoro', '<p>\r\n\r\nLima sahabat telah menjalin persahabatan selama tujuh tahun. Mereka adalah Arial yang paling tampan, Riani sebagai satu-satunya wanita dalam kelompok itu, Zafran yang berlagak seperti seorang penyair, Ian yang paling subur badannya, dan Genta yang dianggap sebagai leader dalam kelompok itu. Kegemaran mereka adalah mengeksekusi hal-hal yang tidak mungkin dan mencoba segala hal, mulai dari kafe paling terkenal di Jakarta, sampai nonton layar tancap. Semuanya penggemar film, dari film Hollywood sampai film yang nggak kelasâ€”kecuali film India karena mereka punya prinsip bahwa semua persoalan di dunia atau masalah pasti ada jalan keluarnya, tapi bukan dalam bentuk joget.<br><br>Suatu saat, karena terdorong oleh rasa bosan di antara satu dan yang lain, mereka memutuskan untuk tidak saling berkomunikasi dan bertemu satu sama lain selama tiga bulan. Selama tiga bulan berpisah itulah telah terjadi banyak hal yang membuat hati mereka lebih kaya dari sebelumnya. Pertemuan setelah tiga bulan yang penuh dengan rasa kangen akhirnya terjadi dan dirayakan dengan sebuah perjalanan. Sebuah perjalanan yang penuh dengan keyakinan, mimpi, cita-cita, dan cinta. Sebuah perjalanan yang telah mengubah mereka menjadi manusia sesungguhnya, bukan Cuma seonggok daging yang bisa berbicara, berjalan, dan punya nama.<br><br><i><b>â€œAda yang pernah bilang kalau idealisme adalah kemewahan terakhir yang dimiliki oleh generasi mudaâ€¦.â€</b></i>\r\n\r\n<br></p>', '4.jpg', 2005),
(6, 'Habis Gelap Terbitlah Terang', 'R . A Kartini', '<p>\r\n\r\nBuku ini berisi/menceritakan perjalanan hidup seorang pahlawan wanita R.A Kartini, dan surat-suratnya yang ia tujukan kepada saudari dan sahabat-sahabatnya. Adapun isi dari surat-surat itu adalah tentang cita-citanya untuk memajukan kaum wanita, harapan-harapanya dan perjalanan hidupnya.\r\n\r\n<br></p>', '5.jpg', 1911);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'testing', 'admin@gmail.com'),
(2, 'kiki', 'qwe123', 'kiki@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komen`
--
ALTER TABLE `komen`
  ADD CONSTRAINT `komen_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
