-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Agu 2023 pada 13.55
-- Versi server: 8.0.34-cll-lve
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nazmaof2_cms-nazma-office-codeigniter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'nazmaoffice', '$2y$10$vD04zjip4eKE9AAqvoDuTe21.Jx/427E5f9CfbXPavB0pKQfF/kHa', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `photo` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `slug` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `tag` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `photo`, `date`, `slug`, `title`, `content`, `tag`, `created_at`) VALUES
(10, 'Screenshot_(58).png', '2023-05-05', 'pelatihan-foto-produk-man-4-sleman', 'Pelatihan  Foto Produk MAN 4 Sleman', '<p>Semangat pagi.... Sahabat NaZMa<br>Ada pelatihan foto produk untuk anak <a href=\"https://www.instagram.com/man4_sleman/\">@man4_sleman</a> di kolom komentar nihhhh....<br><br>Yukk merapat untuk mendapatkan info menarik?<br>????????????????????????????<br>DM IG <a href=\"https://www.instagram.com/nazma_office/\">@nazma_office</a><br>Tik Tok <a href=\"https://www.instagram.com/Nazma_Office/\">@Nazma_Office</a><br>WA 087834671064<br>LinkedIn Nazma_Office<br>Jasa konsultasi acara untuk pelatihan, seminar dan lain-lain<br><br>Jangan Lupa Like, Comment, Share, & stalking<br><a href=\"https://www.instagram.com/nazma_office/\">@nazma_office</a><br><a href=\"https://www.instagram.com/wiwit_ab/\">@wiwit_ab</a><br>untuk mendapatkan info menarik.<br>* Gratis Jasa Konsultasi Pelatihan</p>', 'pelatihan-foto-produk', '2023-06-29 04:09:32'),
(11, 'Screenshot_(60).png', '2023-06-03', 'pelatihan-manager-development-program', 'Pelatihan Manager Development Program', '<p>Hallo Sahabat NaZMa Office????<br>Mimin punya info nih agenda mimin di pelatihan Manager Development Program<br>Kalian juga bisa menambah skill dan keterampilan kalian di bidang ini ????????????<br>Yuk buruan daftar????????????<br><br>????????????????????????????<br>DM IG <a href=\"https://www.instagram.com/nazma_office/\">@nazma_office</a><br>Tik Tok <a href=\"https://www.instagram.com/Nazma_Office/\">@Nazma_Office</a><br>WA 087834671064<br>LinkedIn Nazma_Office<br>Jasa konsultasi acara untuk pelatihan, seminar dan lain-lain<br><br>Jangan Lupa Like, Comment, Share, & stalking<br><a href=\"https://www.instagram.com/nazma_office/\">@nazma_office</a><br><a href=\"https://www.instagram.com/wiwit_ab/\">@wiwit_ab</a><br>untuk mendapatkan info menarik.<br>* Gratis Jasa Konsultasi<br> </p>', 'pelatihan-manager-development-program', '2023-06-14 04:12:12'),
(12, 'Bimtek_DM_Tingkat_Lanjut_(1).jpg', '2023-06-20', 'bimbingan-teknis-digital-marketing-tingkat-lanjut-untuk-membimbing-umkm-sleman-memasuki-era-digital', 'Bimbingan Teknis Digital Marketing Tingkat Lanjut untuk Membimbing UMKM Sleman Memasuki Era Digital', '<p><strong>Sleman, 2023</strong> – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman menyelenggarakan Bimbingan Teknis (Bimtek) mengenai digital marketing lanjutan bagi para pelaku UMKM di wilayah Sleman khususnya Kapanewon Moyudan, Kapanewon Godean, dan Kalurahan Sidomulyo dengan bantuan tim NaZMa Office sebagai pemateri.</p><p>Bimbingan Teknis (Bimtek) Digital Marketing Tingkat Lanjut ini diresmikan dan dibuka langsung oleh Kepala Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman yaitu Bapak R. Haris Martapa, SE., MT. dan didampingi oleh Subkoor Jaringan Usaha dan Kemitraan yaitu Ibu Sri Wara Nusadari SE., MM..</p><p>Bapak Kepala Dinas Koperasi, mengatakan bahwa Bimtek ini akan berlangsung selama 2 hari di Hotel Grand Serela Yogyakarta dari tanggal 20-21 Juni 2023.</p><p>“Bimtek ini diharapkan akan meningkatkan kemampuan UMKM Sleman untuk memasarkan produknya di era digital ini”. tegasnya.</p><p>Bimtek ini adalah untuk mengembangkan kemampuan pelaku UMKM di era digital dengan materi Optimasi Strategi Pengembangan Business Model Canvas, Strategi Mengubah Ide Menjadi Content Writing dan Copy Writing, Digital Marketing Facebook Ads dan Facebook Marketplace, dan Branding Produk dengan Foto dan Video dalam Meningkatkan Audiens di Sosial Media.</p><p>Materi tersebut dipaparkan langsung oleh tim NaZMa Office yang merupakan anak-anak muda yang telah tersertifikasi, coach, dan trainer yang bersertifikat.</p><p>Setelah mengikuti paparan materi tersebut para pelaku UMKM langsung mempraktekkannya ke usaha mereka dan dibimbing langsung oleh para pemateri dari NaZMa Office.</p><p>Para pelaku UMKM sangat antusias dalam kegiatan ini, mereka sangat bersemangat untuk memasarkan produk mereka di media sosial.</p><p>“Bimtek ini sangat berbobot memberikan kesempatan belajar untuk UMKM muda, ibu rumah tangga, dan lapisan usaha lainnya. Pemateri yang dihadirkan expert dalam bidangnya tidak hanya berpendidikan tetapi juga profesional dalam bidang masing-masing, sehingga sangat bermanfaat bagi peserta” Ungkap Arum pemilik usaha Dapoer Si Mbok.</p><p>Pada penutupan Bimtek ini, ditutup langsung oleh Sekretaris Dinas Koperasi dan Usaha Kecil Menengah Kabupaten Sleman yaitu Ibu Siti Istiqomah Tjatur Sulistyaningtyas, ST., MT. dan Kepala Bidan Usaha Mikro yaitu Ibu Christina Rini Puspitasari, SP., M.Si..</p><p>Beliau berharap para pelaku UMKM Sleman dapat memanfaatkan ilmu yang telah diberikan oleh Dinas Koperasi, Usaha Kecil, dan Menengah dalam Bimtek Digital Marketing Tingkat Lanjut sehingga setelah pelatihan ini pelaku UMKM dapat mengembangkan usahanya di era digital.</p>', 'Bimbingan Teknis - Digital Marketing - UMKM - Sleman', '2023-07-31 04:09:32'),
(13, 'IMG_8561_1.jpg', '2023-07-10', 'bimtek-packaging-design-dan-branding-di-wilayah-sleman', 'BIMTEK Packaging, Design, dan Branding di Wilayah Sleman', '<p><strong>Sleman</strong> – Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan Bimbingan Teknis (BIMTEK) bagi para pelaku UMKM di wilayah Sleman khususnya Kapanewon Gamping dan Kapanewon Moyudan. BIMTEK yang dilaksanakan selama 2 hari pada Senin (10/07) dan Selasa (11/07) di Hotel Crystal Lotus, Yogyakarta ini mengangkat tema Packaging, Design, dan Branding. </p><p>Berbagai macam sektor UMKM ikut berpartisipasi dalam BIMTEK kali ini, baik dari sektor kuliner, fashion, craft/kerajinan hingga pertanian/tanaman. BIMTEK diselenggarakan dalam dua kelas berbeda sesuai kapanewon masing-masing UMKM dengan setiap kelasnya terdapat 20-21 peserta. Kegiatan BIMTEK dibuka oleh Sekretaris Dinas Koperasi dan Usaha Kecil Menengah Kabupaten Sleman yakni Ibu Siti Istiqomah Tjatur Sulistiyaningtyas, S.T., M.T. serta didampingi oleh Subkoor Jaringan Usaha dan Kemitraan Ibu Sri Wara Nusadari, S.E., M.M.</p><p>Kegiatan BIMTEK pada Kapanewon Moyudan dibuka oleh Bapak Panewu Moyudan yaitu  Bapak Harsonowasono, S.IP., MA yang berharap dengan adanya kegiatan BIMTEK ini Kapanewon Moyudan tidak tertinggal dengan kapanewon lainnya dan dapat meningkatkan branding sehingga produk UMKM di Kapanewon Moyudan lebih dikenal masyarakat serta dapat meningkatkan penjualan produknya. </p><p>Kegiatan BIMTEK mencakup materi yang berkaitan dengan Packaging, Design, dan Branding seperti Mind Mapping SWOT Analysis, Strategi Inovatif dalam Packaging untuk Meningkatkan Penjualan, Geurilla Marketing, serta Desain Logo, Typography & Feeds. BIMTEK dilaksanakan secara teorikal dan praktikal yang keduanya memiliki harapan seusai BIMTEK para pelaku UMKM bisa menerapkan langsung ilmu yang diperoleh pada usahanya masing-masing. </p><p>BIMTEK kali ini sangat diperlukan bagi pelaku UMKM untuk meningkatkan daya jual usaha terlebih pada ranah packaging dan branding produk. Hal tersebut dipertegas oleh salah satu pemateri yang mengatakan bahwa “Dengan memiliki branding produk yang bagus, maka akan memperkuat positioning dibenak para konsumen”. </p><p>Kegiatan BIMTEK pada kelas Kapanewon Gamping ditutup oleh Panewo Gamping yakni Bapak Drs. Yakti Yudanto, beliau menyampaikan rasa terima kasih yang sebesar-besarnya kepada Dinas terkait karena telah memberi kesempatan kepada para pelaku UMKM untuk memperoleh ilmu, pengetahun dan keterampilan tambahan. Harapan beliau semoga peserta dapat memanfaatkan kesempatan berharga ini. Sedangkan pada kelas Kapanewon Moyudan, BIMTEK ditutup oleh Ibu Christiana Rini Puspitasari, S.P., M.Si. yang memiliki harapan “UMKM harus tahan banting dan terus berjuang dalam menghadapi masalah. </p><p>Jika sudah memulai jangan sampai berhenti ditengah jalan. Branding itu jangan menggunakan nama yang seram karena nama mengandung doa dan harapan didalamnya. Dengan memiliki nama brand yang menarik dan mudah diingat semua orang, akan meningkatkan penjualan produknya”.</p><p> </p>', 'Bimbingan Teknis - Packaging - Design -  Branding - Dinkop - Sleman ', '2023-07-31 06:09:35'),
(14, 'IMG_9560_(1).jpg', '2023-08-09', 'bimbingan-teknis-strategi-pemasaran-di-wilayah-sleman', 'Bimbingan Teknis Strategi Pemasaran di Wilayah Sleman', '<p><strong>Sleman </strong>– Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman kembali menyelenggarakan Bimbingan Teknis (BIMTEK) bagi para pelaku UMKM di wilayah Sleman khususnya Kalurahan Tirtomartani. BIMTEK dilaksanakan selama dua hari pada Rabu (09/08) dan Kamis (10/08) di Bueno Colombo Hotel, Yogyakarta ini mengangkat tema Strategi Pemasaran Bagi Pelaku UMKM di Kalurahan Tirtomartani. Berbagai macam sektor UMKM ikut berpartisipasi dalam BIMTEK kali ini, baik dari sektor kuliner, fashion, hingga craft/kerajinan. BIMTEK untuk Kalurahan Tirtomartani ini dihadiri oleh 25 peserta. </p><p>Kegiatan BIMTEK dibuka oleh Kepala Bidang Usaha Mikro Dinas Koperasi dan Usaha Kecil Menengah Kabupaten Sleman Yakni Ibu Christiana Rini Puspitasari, S. P., M. Si.. Dalam sambutannya, beliau berpesan kepada para pelaku UMKM harus memiliki empat tugas untuk menunjang usahanya, antara lain (1) legalitas, (2) kualitas, (3) kuantitas, dan (4) kontinuitas. Dengan memiliki keempat tugas tersebut harapannya standar bisnis dapat meningkat. Disamping pelaku UMKM yang semakin melonjak, setiap UMKM dari kalurahan Tirtomartani dituntut untuk bisa inovatif karena persaingan UMKM yang semakin ketat. Perlu kemampuan yang baik untuk mengeksekusi inovasi yang dimiliki jangan sampai adanya inovasi baru menjebak diri sendiri para pelaku UMKM.</p><p>Kegiatan BIMTEK mencakup materi yang berkaitan dengan Strategi Pemasaran seperti Mind Mapping SWOT Analysis, Geurilla Marketing, Katalog Produk dan Praktik Foto Produk, serta Optimasi Bisnis dengan WA Bisnis. BIMTEK dilaksanakan secara teorikal dan praktikal yang keduanya memiliki harapan seusai BIMTEK para pelaku UMKM bisa menerapkan langsung ilmu yang diperoleh pada usahanya masing-masing. BIMTEK kali ini sangat diperlukan bagi pelaku UMKM untuk meningkatkan omset penjualan dengan strategi pemasaran yang maksimal dan sesuai target. Salah satu peserta UMKM memberikan tanggapan bahwa para UMKM sangat terbantu dengan adanya pelatihan yang di selenggarakan oleh Dinas Koperasi, Usaha Kecil, dan Menengah Kabupaten Sleman ini. Berharap untuk kedepannya agar ada pelatihan lagi dengan materi yang berbeda.</p>', 'Bimbingan Teknis - Strategi Pemasaran - UMKM - Dinkop Sleman', '2023-08-11 03:02:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `certifiedtrainers`
--

CREATE TABLE `certifiedtrainers` (
  `id` int NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `departement` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `certifiedtrainers`
--

INSERT INTO `certifiedtrainers` (`id`, `photo`, `name`, `departement`) VALUES
(5, 'Rizky,_M.Kom.jpg', 'Rizky, M.Kom', 'Trainer'),
(6, 'Gulam_Hazmin.jpg', 'Gulam Hazmin', 'Trainer'),
(7, 'MEILANY.jpg', 'Meilany', 'Trainer'),
(8, 'amri_.png', 'Amri', 'Trainer'),
(9, 'Kunto_Wibisono_01_.jpg', 'Kunto Wibisono', 'Trainer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `creativecrew`
--

CREATE TABLE `creativecrew` (
  `id` int NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `departement` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `creativecrew`
--

INSERT INTO `creativecrew` (`id`, `photo`, `name`, `departement`) VALUES
(5, 'Sukmadhia_Aqila_Risnuasa1.jpg', 'Sukmadhia Aqila Risnuasa', 'Creative Crew'),
(6, 'Astuti_Naviah_Apriliana.png', 'Astuti Naviah Apriliani', 'Creative Crew'),
(7, 'Risti_Yulia.jpg', 'Risti Yulia', 'Creative Crew'),
(8, 'Novia_Rahmawati.png', 'Novia Rahmawati', 'Creative Crew'),
(9, 'Silvia_Nur_Tiaswati1.jpg', 'Silvia Nur Tiaswati', 'Creative Crew'),
(10, 'Anisa_Mahda_Habsari.png', 'Anisa Mahda Habsari', 'Creative Crew'),
(11, 'Yandianto_Umbu_Jangi1.jpg', 'Yandianto Umbu Jangi', 'Creative Crew'),
(12, 'Ayu_Puspitarini.png', 'Ayu Puspitarini', 'Creative Crew'),
(13, 'Kharismawan_Bachrul_Arrochman.png', 'Kharismawan Bachrul Arrochman', 'Creative Crew'),
(14, 'IMG_1168.png', 'Moh Fauzi', 'Creative Crew');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `contributor` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `photo`, `title`, `time`, `location`, `price`, `contributor`, `link`) VALUES
(4, 'design_grafis_5_11.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office'),
(5, 'design_grafis_5_12.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office'),
(6, 'design_grafis_5_13.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office'),
(7, 'design_grafis_5_14.jpg', 'Pelatihan Pembuatan Logo dan Company Profile', 'Kamis, 23 Februari 2023, 08.00 WIB', 'Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Start at 2000k', 'NaZMa Office', 'https://linktr.ee/nazma_office');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partnership`
--

CREATE TABLE `partnership` (
  `id` int NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `departement` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partnership`
--

INSERT INTO `partnership` (`id`, `photo`, `name`, `departement`) VALUES
(1, 'logoukmindonesia1.jpg', 'UMKM INDONESIA', 'Usaha'),
(2, 'ukm_indonesia_21.jpg', 'UMKM INDONESIA', 'Usaha'),
(3, 'ukm_indonesia_12.jpg', 'UMKM INDONESIA', 'Usaha'),
(4, 'umkmnaikkelas1.jpg', 'UMKM INDONESIA', 'Usaha'),
(5, 'logo_amikom1.jpg', 'UNIVERSITAS AMIKOM YOGYAKARTA', 'Pendidikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `photo`, `title`, `description`, `date`, `location`) VALUES
(1, 'design_grafis_2.jpg', 'Bimtek Pemasaran Digital Marketing', 'Tim NaZMa mengisi salah satu pelatihan bagi UMKM di wilayah Yogyakarta yang dihadiri 100 peserta yang menghadirkan materi digital marketing guna memaksimalkan pemasaran di era digital', '2023-02-28', 'Kabupaten Sleman, Yogyakarta'),
(2, 'Screenshot_(56).png', 'Pelatihan Home Business Angkatan 11', '<p>Pelatihan Home Business Angkatan 11 Pembisnis muda di Yogyakarta berkumpul mengupgrade ilmu dan sharing pengalaman bisnisnya</p>', '2023-01-11', 'Kabupaten Sleman, Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimony`
--

CREATE TABLE `testimony` (
  `id` int NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimony`
--

INSERT INTO `testimony` (`id`, `photo`, `name`, `description`) VALUES
(1, 'profil1.jpg', 'Muhammad Afifudin', ' \"Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah yang kami miliki. Kami sangat merekomendasikan layanan IT mereka\"'),
(2, 'profil11.jpg', 'Muhammad Afifudin', ' \"Tim IT NaZMa sangat responsif dan selalu siap membantu kami dengan pertanyaan atau masalah yang kami miliki. Kami sangat merekomendasikan layanan IT mereka\"');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `certifiedtrainers`
--
ALTER TABLE `certifiedtrainers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `creativecrew`
--
ALTER TABLE `creativecrew`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `certifiedtrainers`
--
ALTER TABLE `certifiedtrainers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `creativecrew`
--
ALTER TABLE `creativecrew`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `partnership`
--
ALTER TABLE `partnership`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
