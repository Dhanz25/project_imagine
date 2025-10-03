-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2025 pada 20.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuliner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat_kuliner`
--

CREATE TABLE `tempat_kuliner` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `link_maps` varchar(255) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `harga_min` int(11) DEFAULT NULL,
  `harga_max` int(11) DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempat_kuliner`
--

INSERT INTO `tempat_kuliner` (`id_tempat`, `nama_tempat`, `alamat`, `link_maps`, `kategori`, `harga_min`, `harga_max`, `jam_buka`, `jam_tutup`, `deskripsi`, `gambar`) VALUES
(1, 'Bakso Soto Sami Asih', 'JL. Pramuka No.23, Sodagaran, Purwokerto Kulon, Kec. Purwokerto Sel.', 'https://maps.app.goo.gl/uT5pT3GcqQcEeKnn7', 'Street Food', 25000, 50000, '11:00:00', '21:00:00', 'Bakso Soto Sami Asih adalah salah satu bakso legendaris Purwokerto yang buka sejak tahun 1974 dan sampai sekarang menjadi destinasi populer di Purwokerto bagi para wisatawan. Keistimewaan tekstur bakso kenyal, kaldu kental, 2 jenis bakso (telur & urat). Ciri khas soto penggunaan sambal kacang.\r\n', 'bakso sami asih.jpg,bakso sami asih1.jpg'),
(2, 'Bakso Pekih', 'Jl. Pekih, Purwokerto, Sokanegara, Kec. Purwokerto Timur.', 'https://maps.app.goo.gl/Njg6HdEKx3ochkAJ6', 'Street Food', 25000, 50000, '09:00:00', '20:00:00', 'Bakso pekih dibuka sejak tahun 1985 keunggulan dari Bakso Pekih ini yaitu beragam pilihan\r\nmenu mulai dari bakso urat, bakso halus, bakso telur, hingga bakso spesial dengan\r\ntambahan daging sapi pilihan.', 'bakso pekih.jpg,_bakso-pekih.jpeg,pekih.jpg,bakso_peki1.jpg'),
(3, 'Es Duren Pak Kasdi', 'Jl. DR. Soeparno No.57, Purwokerto Wetan, Grendeng, Kec. Purwokerto Utara.', 'https://maps.app.goo.gl/8ZAbkLKqGxhacoHY9', 'Street Food', 25000, 50000, '09:00:00', '18:00:00', 'Es Duren pak kasdi berdiri sejak 1969 menyediakan beragam menu seperti es duren kopyor, es duren campur, es campur, es campur kopyor, es kopyor dan menu komplit dengan isian es campur duren kopyor.', 'Es Duren Pak Kasdi.jpg,es_duren.jpeg,es duren.jpeg,es-campur-duren.jpg'),
(4, 'Gubug Makan Mang Engking', 'Jl. Profesor DR. HR Boenyamin, Sumampir Wetan, Pabuaran, Kec. Purwokerto Utara.', 'https://maps.app.goo.gl/sWmKRGnHcJgZfW298', 'Restoran', NULL, NULL, '10:00:00', '21:00:00', 'Gubug Makan Mang Engking berdiri sejak Oktober 2002 dengan 22 cabang, termasuk di Purwokerto. Restoran ini menyajikan hidangan laut dengan bumbu khas Sunda, berkonsep pedesaan dengan kolam ikan di tengah area makan untuk menghadirkan suasana alami.', 'gubug mang engking.jpg,mang-engking.jpg,mang_engking.jpg'),
(5, 'Es Cream & Coffe Brasil', 'Jl. Jendral Suprapto No.25, Kauman Lama, Purwokerto Lor, Kec. Purwokerto Timur.', 'https://maps.app.goo.gl/HrHSg9yxu9Mw9KG1A', 'Cafe', NULL, NULL, '07:00:00', '17:00:00', 'Es brasil Telah ada sejak akhir 1960-an memiliki cita rasa khas dan lokal tanpa pengawet dan pewarna buatan selain menyediakan es krim spesial yang hanya ada di purwokerto di sini juga menyediakan es krim kemasan siap makan seperti es kotak, es lilin, es puter cup, es krim cup, es rujak dan es krim cone', 'Es Cream & Coffe Brazil.jpeg,es-brasil.jpg,photo0jpg.jpg'),
(6, 'Lodeh Iwak Kali', 'Jl. Stadion Mini 1 (Belakang pasar burung kongsen) Karangbawang, Purwokerto Kulon, Kec. Purwokerto Selatan.', 'https://maps.app.goo.gl/524vikrXkNpGSQex5', 'Restoran', NULL, NULL, '10:00:00', '22:00:00', 'Lodeh Iwak Kali adalah rumah makan di Purwokerto dengan desain klasik yang menghadirkan suasana tradisional. Menyediakan hidangan prasmanan, termasuk iwak kali yang dapat dipilih sesuai selera dan ditimbang sesuai porsi.', 'Lodeh Iwak.webp,lodeh-iwak_kali.jpg,lodeh_iwak_kali1.jpeg,lodeh-iwak-kali.jpeg'),
(7, 'Mampir Pawon', 'Jl. Gelora Indah I, Mangunjaya, Purwokerto, Kec. Purwokerto Timur.', 'https://maps.app.goo.gl/zVwk5GeidrdjqpvZA', 'Restoran', NULL, NULL, '10:00:00', '22:00:00', 'Mampir Pawon adalah rumah makan di Purwokerto yang berdiri sejak April 2023 dengan konsep prasmanan. Menunya beragam dan dimasak secara tradisional menggunakan pawon serta kayu bakar, menghadirkan nuansa yang kini sudah jarang ditemukan.', 'mampir pawon.jpg,mampir-pawon.webp,mampir_pawon.webp,mampir_pawon1.webp'),
(8, 'Raja Soto Lama H. Suradi', 'Jl. Mayjend. Sutoyo No.55, RT. 04/01, Sawangan, Kedungwuluh, Kec. Purwokerto\r\nBarat.', 'https://maps.app.goo.gl/oZSdss2jamwxpfju8', 'Street Food', NULL, NULL, '08:00:00', '21:00:00', 'Tempat makan ini pertama kali berdiri pada tahun 1978. Menu yang sering di pesan yaitu\r\nsoto daging. Selain soto daging tersedia soto ayam, soto babat iso, soto sekengkel urat ,\r\ndan soto campur.', 'soto h suradi.jpg,raja-soto-lama-h-suradi.jpg,photo2jpg.jpg,etalase-soto-lama-hsuradi.jpg'),
(9, 'Tengkleng Ndeso', 'Jl. Prof. Dr. Suharso, Arcawinangun, Kec. Purwokerto Timur.\r\n', 'https://maps.app.goo.gl/vfZ3y5q661wzibkf8', 'Restoran', NULL, NULL, '10:00:00', '22:00:00', 'Tengkleng Ndeso di Purwokerto menyajikan kuliner khas dengan konsep bebas pilih menikmati hidangan sesuai selera. Menu andalannya antara lain tengkleng kambing, tongseng sapi bersantan, dan sop daging sapi, semuanya ditawarkan dengan harga terjangkau.', 'Tengkleng ndeso.webp,tengkleng_ndeso.jpg'),
(10, 'Warung Sate Sawunggalih Banaran', 'Jl. Yos Sudarso No.30, Dusun I, Pasir Kidul, Kec. Purwokerto Barat.', 'https://maps.app.goo.gl/kKVJgJnYU3AD3ZYs5', 'Street Food', NULL, NULL, '06:00:00', '21:00:00', 'Warung Sate Sawunggalih Banaran adalah salah satu spot kuliner legendaris yang ada di\r\nPurwokerto.Daya tarik dari warung sate Sawunggalih banaran yaitu aneka olahan kambing\r\nyang tidak bau dan empuk', 'sate suwanggalih.jpg,sate+sawunggalih.jpg,sate-banaran.jpg'),
(11, 'Soto Sutri', 'Jl. Pramuka No.09, Dusun II, Sokaraja Kulon, Kec. Sokaraja', 'https://maps.app.goo.gl/SGzP8Jh61wAGqxsK8', 'Street Food', NULL, NULL, '07:00:00', '16:00:00', 'Soto Sutri sudah berdiri sejak April 1984, dan saat ini Soto Sutri dilanjutkan oleh anaknya.\r\nBerawal dari resep turun temurun, Soto Sutri Sokaraja memiliki keunikan dan kekhasan\r\nrasanya yang membuatnya sangat istimewa.\r\nkeunikan rasa yang dihasilkan dari perpaduan rempah-rempah tradisional. Kuah sotonya\r\nyang begitu gurih dan penuh dengan cita rasa rempah yang khas.', 'soto sutri.jpg,soto_sutri.webp,soto_sutri1.jpeg'),
(12, 'Mie Gacoan Purwokerto', 'Arcawinangun, Kec. Purwokerto Timur.', 'https://share.google/9escDOdRuJg0Qk4kf', 'Restoran', NULL, NULL, '01:00:00', '00:00:00', 'Mie Gacoan Suparno Purwokerto resmi buka 24 jam mulai hari ini. Sejak dibuka pada 27 September 2021, outlet ini selalu ramai berkat lokasi strategis di jalur antara Unsoed dan UMP serta harga menu yang terjangkau.', 'gacoan.jpg,gacoan.webp,gacoan1.webp');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tempat_kuliner`
--
ALTER TABLE `tempat_kuliner`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tempat_kuliner`
--
ALTER TABLE `tempat_kuliner`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
