-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 15.45
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asesmen1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asesor`
--

CREATE TABLE `asesor` (
  `id_asesor` int(11) NOT NULL,
  `nama_asesor` text NOT NULL,
  `skema_asesor` text NOT NULL,
  `userid_asesor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asesor`
--

INSERT INTO `asesor` (`id_asesor`, `nama_asesor`, `skema_asesor`, `userid_asesor`) VALUES
(3, 'Guntur Pratama', 'Web development', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `id_kategori` bigint(20) DEFAULT NULL,
  `id_penulis` text NOT NULL,
  `isi_berita` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `gambar`, `created_at`, `id_kategori`, `id_penulis`, `isi_berita`) VALUES
(16, 'Bawa Nama Padang, Aprizal Tamboresi Bakal Naik Ring', 'e944c91f4301112127a7ce46ee9712e6-petinju.jpg', '2022-08-21', 3, '3', 'Padang - Kota Padang punya petinju andalan, Aprizal Tamboresi. Lama tak naik ring akibat pandemi Covid-19, petinju yang akrab disapa Tambo itu bakal kembali menunjukkan kelasnya. Tambo akan bertanding dalam Kejuaraan Tinju Profesional HWK Big Fight Boxing Internasional tahun 2022.\r\n\r\nJika tak ada aral melintang, kejuaraan tersebut ditabuh di Balai Sarbini, Jakarta, pada 16 September 2022 mendatang. Dijadwalkan, Tambo bakal bertanding selama delapan ronde menghadapi petinju muda berbakat dari Maluku, Konstatinus Matakur B. '),
(17, ' DPRD Kabupaten Agam Kunjungi Kantor Balai Kota ', '51617a41a870ebc739c2bb9688b19ef5-dprdagam.jpg', '2022-08-23', 4, '4', 'Padang, - Rombongan DPRD Kabupaten Agam kunjungi kantor Kota Padang untuk silaturahmi serta sekaligus membahas Badan Anggaran (BANGGAR), strategi pengelolaan pengadaan dalam membangun Pemerintah Kota Padang  harus teliti, untuk memberikan dampak menghindari hal - hal yang merugi agar tidak terjadi.'),
(19, 'Wako : Keberadaan BKMT Cukup Penting Di Tengah Masyarakat', 'be8ed78fc9967a74669629aa49786f21-bmkt.jpg', '2222-02-22', 5, '4', 'Padang - Pengurus Badan Kontak Majelis Taklim (BKMT) Kecamatan Nanggalo dilantik, Rabu (24/8/2022). Wali Kota Padang menyebut, keberadaan BKMT cukup penting di tengah masyarakat. \r\n\r\n\"BKMT merupakan organisasi yang dapat merajut silaturahim dan menambah pendidikan bagi kita,\" ujar Plt Kadis Kominfo Al Amin saat mewakili Wali Kota Padang dalam pelantikan pengurus BKMT Nanggalo di Masjid Al Qadar di Jalan Teknologi, Siteba. '),
(20, 'Ternyata, 14 Kepala OPD di Padang Pernah Jadi', '939d4a6dc2a9b1a24b8a32d91f4059ec-opd.jpg', '9999-09-09', 4, '3', 'Padang - Empatbelas Kepala Organisasi Perangkat Daerah (OPD) di Pemko Padang rupanya pernah bekerja di luar rutinitas. Mereka pernah menjadi model pakaian dan berjalan di atas catwalk. \r\n\r\nYa, empatbelas kepala OPD itu menjadi model saat Rakernas Apeksi XV di Padang pada 8 Agustus lalu. Dalam kegiatan \"Ladies Program\", bak seorang model, sejumlah Kepala OPD wanita melenggak-lenggok di atas catwalk. Sedangkan model pria, berjalan dengan tampan di depan tamu. '),
(21, 'Betonisasi Jalan Lingkungan BBI Mulai Dikerjakan', '966392e2fecee4fd2603eb4a85c4ba4c-jalan.jpg', '2022-08-19', 4, '3', 'Betonisasi Jalan Lingkungan BBI Mulai Dikerjakan\r\n\r\nPadang---Pengerjaan jalan betonisasi di Perumahan Bungo Bumi Indah (BBI) RT 01 RW 12 Kelurahan Bungo Pasang, Kecamatan Koto Tangah, Kota Padang mulai dikerjakan,Minggu (21/8/2022).\r\n\r\nBetonisasi jalan lingkungan tersebut merupakan usulan dari dana Pokok Pikiran (Pokir) Anggota DPRD Provinsi Sumbar dari fraksi Gerindra Desrio Putra, ST yang diusulkan Manufer Putra Firdaus anggota DPRD Kota Padang, ungkap Ketua RW 12 Yunasra Rajo Bandaro'),
(22, 'Legislator dan Pengamat Dukung Penertiban di Pantai', '4a1d14b7a295ddcbdb072751a93312e4-legislator.jpg', '2022-08-21', 3, '4', 'Padang - Satpol PP Kota Padang sempat mendapat perlawanan dari sejumlah Pedagang Kaki Lima (PKL) di kawasan Lapau Panjang Cimpago (LPC) Pantai Padang, beberapa waktu lalu. Penegakan ketertiban umum yang dilakukan oleh Pasukan Penegak Perda di kawasan wisata itu pun mendapat respon positif dari berbagai pihak. \r\n\r\nSalah satunya dari pengamat perkotaan yang juga pengacara, Miko Kamal. Menurutnya, penertiban yang dilakukan Satpol PP sudah berada di trek yang benar. Penertiban dilakukan guna menciptakan keteraturan itu adalah hukum. Sedangkan hukum harus ditegakkan. Maka sudah menjadi kewajiban petugas untuk melakukan penegakan aturan.\r\n\r\n\"Hukum harus ditegakkan, apabila Hukum tidak ditegakkan maka banyak orang lain yang dirugikan karena tidak ada ketertiban,\" ungkap Miko Kamal, kemarin.\r\n\r\nMiko Kamal sangat menginginkan Satpol PP untuk tidak patah semangat dalam melaksanakan tugas dan tidak merasa keder dengan perlakuan yang ditunjukan oknum pedagang. \r\n\r\n\"Secara pribadi berharap, Satpol PP jangan patah semangat. Tidak takut melakukan tindakan-tindakan yang itu sudah benar secara hukum, karena manfaatnya jauh lebih besar ketika hukum ditegakkan dan itu bermanfaat bagi orang banyak,\" katanya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) NOT NULL,
  `nama_kategori` text DEFAULT NULL,
  `keterangan_kategori` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan_kategori`) VALUES
(3, 'Sosial', 'menyangkut isu sosial '),
(4, 'Pemerintahan', 'Pendidikan'),
(5, 'Pendidikan', 'sdafdfs'),
(6, 'Hiburan', ''),
(7, 'Kesehatan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `judul_kuliner` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `gambar_kuliner` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon_kuliner` text DEFAULT NULL,
  `email_kuliner` text DEFAULT NULL,
  `website` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `judul_kuliner`, `link`, `gambar_kuliner`, `alamat`, `telepon_kuliner`, `email_kuliner`, `website`) VALUES
(11, 'Rumah makan sederhana', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d997.319116808447!2d100.35614!3d-0.944293!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1c43a3476fad234!2sSeafood%20%26%20Pempek%20Mama%20Oky!5e0!3m2!1sid!2sid!4v1661434739801!5m2!1sid!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'b4ea9126f547314c5d8f0d62ee237ccc-swd.jpg', 'Jl. Rasuna Said No.81A, Rimbo Kaluang, Kec. Padang Bar., Kota Padang, Sumatera Barat', '0751447774', '', ''),
(12, 'V Coffe', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7978.593568804999!2d100.360497!3d-0.9264200000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x844e27e677e212de!2zMMKwNTUnMzUuMSJTIDEwMMKwMjEnMzcuOCJF!5e0!3m2!1sen!2sus!4v1661435045428!5m2!1sen!2sus\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'e9df3e016a3a8b2cdc80fe8120f44f88-afasdas.jpg', 'Jl. Raden Saleh No.3, Rimbo Kaluang, Kec. Padang Bar., Kota Padang, Sumatera Barat 25111', '082169009181', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`) VALUES
(3, 'Judang Rizky'),
(4, 'Judang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `role`) VALUES
(1, '', 'wahyua@gmail.com', 'wahyuuuu', 'Asesor'),
(2, 'Admin', 'admin@padang.go.id', 'b23cf2d0fb74b0ffa0cf4c70e6e04926', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `videoId` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `penulis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `judul`, `videoId`, `created_at`, `kategori_id`, `penulis_id`) VALUES
(1, 'WAKO PADANG - PELEPASAN JAM\'AH UMROH KORPRI PADANG', 'D4rSJBKNBbg', '2022-08-10', 4, 4),
(2, 'Pembukaan Indonesia City Expo Rakernas XV APEKSI 2022 di RTH Imam Bonjol Kota Padang (Recorded)', 'D2F1IUphd7I', '2022-08-10', 6, 4),
(3, 'Penutupan Rakernas XV Apeksi Tahun 2022 di Kota Padang', '7NlKYNwE4S8', '2022-08-16', 6, 3),
(6, 'asdsadsad sad', 'D2F1IUphd7I', '2022-08-02', 6, 4),
(7, 'adsd sadasd as', 'D2F1IUphd7I', '2022-08-01', 6, 4),
(8, 'wwwwwwwwwwwwwwwwwwwwww', 'D2F1IUphd7I', '2022-08-26', 6, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id_asesor`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id_asesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
