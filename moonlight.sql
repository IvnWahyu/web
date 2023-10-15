-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2023 pada 14.47
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonlight`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(3) NOT NULL,
  `saya` varchar(30) NOT NULL,
  `deskripsiPanjang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `saya`, `deskripsiPanjang`) VALUES
(1, 'Tentang Saya', '<p>Selamat datang di Portofolio Saya! Saya Ivan Wahyu Putratama, seorang mahasiswa informatika di Universitas Pembangunan Jaya yang berada di semester 5. Saya adalah pribadi yang bersemangat tentang dunia teknologi dan berkomitmen untuk terus belajar dan berkembang dalam bidang ini.</p>\r\n<p>Di samping perjalanan akademis saya, saya juga aktif terlibat dalam berbagai proyek dan eksplorasi di dunia IT. Semua pengalaman ini telah membantu saya mengembangkan keterampilan teknis yang kuat</p>\r\n<p>Terima kasih atas kunjungan Anda, dan kami berharap dapat berkolaborasi dengan Anda dalam masa depan!</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `subjudul` varchar(50) NOT NULL,
  `gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `nama`, `deskripsi`, `gbr`) VALUES
(1, 'IVAN WAHYU PUTRATAMA', '<p>Selamat datang di Portofolio Saya! Saya Ivan Wahyu Putratama, seorang mahasiswa informatika di Universitas Pembangunan Jaya yang berada di semester 5. Saya adalah seorang penggemar teknologi yang bersemangat untuk belajar dan berkembang di dunia IT. Di sini, Anda akan menemukan sebagian dari proyek-proyek dan pengetahuan yang telah saya kembangkan selama studi saya. Terima kasih telah mengunjungi situs saya</p>', 'author_image.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ivan Wahyu Putratama', 'ivanwahyuputratama4@gmail.com', 'kjsadnd', 'asdefdmnkfngnsdkjfsndkfsndb'),
(2, 'Ivan', 'ivanwahyu2813@gmail.com', 'eqdrfqDAQd', 'asdaDSSAdfesdafsdffkksndf glkjdngbljhgelag n dflaksgkk'),
(3, 'Ivan', 'ivanwahyu2813@gmail.com', 'eqdrfqDAQd', 'asdaDSSAdfesdafsdffkksndf glkjdngbljhgelag n dflaksgkk'),
(4, 'sfSF', 'ivanwahyuputratama4@gmail.com', 'dsFAASADF', 'sDFSDFSDFsdF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsiPendek` text NOT NULL,
  `gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `judul`, `deskripsiPendek`, `gbr`) VALUES
(1, 'Introduction to Cybersecurity', '<p>Dunia yang saling terhubung saat ini membuat semua orang lebih rentan terhadap serangan siber. Apakah Anda tertarik pada dunia baru keamanan siber yang relativitas sebagai seorang profesional, atau hanya tertarik untuk melindungi diri Anda sendiri secara online dan di media sosial, kursus pengantar ini adalah jawabannya. Kursus ini mengeksplorasi tren dunia maya, ancaman, dan topik keamanan siber yang lebih luas dengan cara yang penting bagi ANDA. Misalnya, Anda akan belajar cara melindungi privasi pribadi Anda secara online sambil mendapatkan wawasan tambahan tentang tantangan yang dihadapi perusahaan, serta lembaga pemerintah dan pendidikan saat ini. Tidak ada prasyarat yang diperlukan.</p>', 'gbr.jpg'),
(2, 'Cybersecurity Essentials', '<p>Satu pelanggaran saja dapat memiliki konsekuensi besar bagi sebuah perusahaan, merugikan hasil akhir dan menyebabkan gangguan dalam kehidupan sehari-hari jutaan orang. Itulah mengapa permintaan terhadap para profesional keamanan terus meningkat. Bergabunglah dan kembangkan pemahaman tentang kejahatan siber, prinsip keamanan, teknologi, dan prosedur yang digunakan untuk membela jaringan. Kemudian tentukan apakah Anda ingin mengejar peran profesional jaringan atau keamanan tingkat pemula. Direkomendasikan jika Anda berencana untuk belajar untuk Sertifikasi CCNA atau CyberOps Associate. Prasyarat: Pengantar Keamanan Siber atau pengetahuan setara yang direkomendasikan.</p>', 'gbr2,jpg'),
(3, 'Python', '<p>Kursus ini mengajarkan dasar-dasar pemrograman Python melalui tujuh pelajaran:</p>\r\n<p>Hello, Python: Pengenalan sintaksis Python dan tipe data.</p>\r\n<p>Functions and Getting Help: Cara memanggil dan membuat fungsi, serta menggunakan dokumentasi Python.</p>\r\n<p>Booleans and Conditionals: Pemahaman logika kondisional dengan boolean.</p>\r\n<p>Lists: Manipulasi dan penggunaan list dalam Python.</p>\r\n<p>Loops and List Comprehensions: Penggunaan loop dan list comprehensions.</p>\r\n<p>Strings and Dictionaries: Pemahaman tentang string dan kamus.</p>\r\n<p>Working with External Libraries: Cara mengimpor pustaka eksternal dan operator overloading.</p>', 'gbr.jpg'),
(4, 'Intro to Machine Learning', '<p>Ini adalah rangkuman singkat dari kursus atau tutorial terkait machine learning:</p>\r\n<p>How Models Work: Pengenalan machine learning.</p>\r\n<p>Basic Data Exploration: Memahami data.`</p>\r\n<p>Your First Machine Learning Model: Membangun model pertama.</p>\r\n<p>Model Validation: Mengukur kinerja model.</p>\r\n<p>Underfitting and Overfitting: Menyesuaikan model.</p>\r\n<p>Random Forests: Menggunakan algoritma machine learning canggih.</p>', 'gbr.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
