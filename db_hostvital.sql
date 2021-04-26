-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 04:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hostvital`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obat_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontenhtml` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ditinjau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `nama`, `deskripsi`, `kontenhtml`, `ditinjau`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Rematik', 'Rematik atau penyakit yang ditandai dengan nyeri sendi disebut juga rheumatoid arthritis. Penyakit ini merupakan penyakit autoimun ketika sistem imun pada tubuh seseorang menyerang sel-sel tubuhnya sendiri.\r\n\r\nDalam hal ini, area persendian adalah area yang diserang oleh sistem imun pengidap rheumatoid arthritis. Akibatnya, peradangan kronik dan rasa nyeri yang hebat pada sendi-sendi yang terserang terjadi.\r\n\r\nSampai saat ini penyebab utama seseorang bisa mengidap penyakit rematik belum ditemukan, tetapi faktor genetik dipercaya memiliki peran dalam timbulnya penyakit ini. Faktor risiko yang meningkatkan seseorang mengalami penyakit ini, antara lain:', 'Pengertian Rematik\r\nRematik atau penyakit yang ditandai dengan nyeri sendi disebut juga rheumatoid arthritis. Penyakit ini merupakan penyakit autoimun ketika sistem imun pada tubuh seseorang menyerang sel-sel tubuhnya sendiri.\r\n\r\nDalam hal ini, area persendian adalah area yang diserang oleh sistem imun pengidap rheumatoid arthritis. Akibatnya, peradangan kronik dan rasa nyeri yang hebat pada sendi-sendi yang terserang terjadi.\r\n\r\nFaktor Risiko Rematik\r\nSampai saat ini penyebab utama seseorang bisa mengidap penyakit rematik belum ditemukan, tetapi faktor genetik dipercaya memiliki peran dalam timbulnya penyakit ini. Faktor risiko yang meningkatkan seseorang mengalami penyakit ini, antara lain:\r\n- Jenis kelamin yaitu wanita.\r\n- Usia 40-60 tahun.\r\n- Riwayat di keluarga.\r\n- Kebiasaan merokok.\r\n- Obesitas.\r\n- Paparan dari lingkungan kerja seperti asbes maupun silika, meskipun sampai saat ini masih sulit untuk dijelaskan secara pasti.\r\n\r\nPenyebab Rematik\r\nRheumatoid arthritis disebabkan oleh adanya kesalahan pada sistem imun seseorang yang menyerang sinovium atau sebuah membran yang melapisi sendi-sendi dalam tubuh. Akibatnya, sinovium menjadi meradang dan menyebabkan kerusakan pada tulang rawan dan tulang di sekitar sendi. Tendon dan ligamen yang berada di sekitar sendi menjadi lemah dan merenggang. Seiring berjalannya waktu, sendi pun akan kehilangan bentuk dan mengalami perubahan posisi dari yang seharusnya.\r\n\r\nGejala Rematik\r\nSeseorang dengan penyakit rheumatoid arthritis biasanya memiliki tanda dan gejala berupa bengkak dan radang pada sendi, serta terdapat kekakuan pada sendi yang memburuk pada pagi hari dan setelah lama diistirahatkan. Selain gejala pada sendi, biasanya pengidap rheumatoid arthritis juga memiliki kondisi tubuh yang tidak prima, sering kelelahan, lesu dan lemas, sering mengalami demam yang tidak dapat dijelaskan penyebabnya, dan mengalami penurunan berat badan.\r\n\r\nPada perjalanan awal, penyakit biasanya yang diserang oleh penyakit ini adalah sendi-sendi kecil seperti pada jari-jari tangan maupun jari-jari kaki. Penyakit ini akan berkembang seiring berjalannya waktu. Hal ini menimbulkan pengaruh terhadap sendi-sendi yang lebih besar seperti pergelangan tangan, pergelangan kaki, bahu, siku, dan pinggul.\r\n\r\nKurang lebih 40 persen pengidap rheumatoid arthritis memiliki tanda dan gejala yang tidak menimpa persendian melainkan struktur lain seperti kulit, mata, paru-paru, jantung, ginjal, sel-sel saraf, sumsum tulang, dan pembuluh darah.\r\n\r\nTanda dan gejala dari rheumatoid arthritis sangat beragam dari tingkat keparahannya dan dapat datang dan pergi. Seiring berjalannya waktu, rheumatoid arthritis ini menyebabkan deformitas dan pergeseran poses sendi.\r\n\r\nDiagnosis Rematik\r\nPenyakit rheumatoid arthritis ini cukup sulit untuk didiagnosis pada fase awal, karena tanda dan gejalanya menyerupai penyakit-penyakit yang lain. Pada pemeriksaan fisik, dokter akan melakukan pemeriksaan pada tulang dan sendi dan mencari adanya pembengkakkan pada area tersebut. Selain itu, penegakan diagnosis bisa dibantu dengan beberapa pemeriksaan penunjang, yaitu melakukan pemeriksaan melalui spesimen darah. Melalui pemeriksaan darah, dilakukan pengecekan ada atau tidaknya suatu rheumatoid faktor pada diri seseorang.\r\n\r\nPengobatan Rematik\r\nPenanganan dari penyakit ini adalah dengan menurunkan dan menghilangkan peradangan yang terjadi. Meski begitu, penyakit rheumatoid arthritis ini sendiri tidak dapat disembuhkan secara total. Obat-obatan yang dapat diberikan kepada pengidap rheumatoid arthritis, antara lain:\r\n\r\n- Obat anti radang golongan nonsteroid.\r\n- Obat anti radang golongan steroid.\r\n- Vitamin dan suplemen lainnya.\r\n\r\nSelain obat-obatan pengidap rheumatoid arthritis disarankan untuk menjalani fisioterapi untuk membantu mengembalikan kelenturan dari sendi-sendi yang sakit. Pada keadaan yang cukup parah, penanganan dengan jalan pembedahan pun menjadi suatu opsi bagi pengidap rheumatoid arthritis.\r\n\r\nPencegahan Rematik\r\nPenyakit rheumatoid arthritis ini sampai saat ini tidak dapat dicegah, karena penyebab pasti dari penyakit ini sendiri masih belum diketahui. Namun, tidak ada salahnya untuk menghindari faktor risiko yang dapat dihindari dan menjalani hidup yang sehat.\r\n\r\nKapan Harus ke Dokter?\r\nJika kamu menunjukkan gejala rematik yang berpengaruh pada kesehatan sendi dan menimbulkan rasa nyeri, segera hubungi dokter untuk mendapatkan penanganan lebih lanjut.', 'Hostvital', 'diagnosis-1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rumahsakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `spesialis`, `rumahsakit`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'dr. Cici Cantik, SpBP', 'Bedah Plastik', 'Premier Bintaro', 'Senin - Rabu (10:00 - 16:00) dan Jumat (16:00 - 20:00)', 'dokter-1.png', NULL, NULL),
(2, 'dr. Stephen Marbun, SpBS', 'Bedah Saraf', 'Siloam Simatupang', 'Senin - Selasa (15:00 - 19:00) dan Kamis - Sabtu (18:00 - 21:00)', 'dokter-2.png', NULL, NULL),
(3, 'dr. Caca, SpPD', 'Penyakit Dalam', 'Pondok Indah', 'Senin - Jumat (15:00 - 20:00)', 'dokter-3.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamarinap`
--

CREATE TABLE `kamarinap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rumahsakit` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tersedia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamarinap`
--

INSERT INTO `kamarinap` (`id`, `id_rumahsakit`, `nama`, `deskripsi`, `tersedia`, `harga`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'Premier', 'AC, 1 Bed, 1 Kamar mandi dengan air panas & dingin, Bedside cabinet, Kulkas, Kursi tunggu, Overbed Table, Meja TV, Lemari pakaian, Dispenser, Meja, Sofabed, Smart TV 72\", Bed Penunggu, Telepon, Ruang keluarga, 1 set meja makan.', 3, 2500000, 'kamar-1.jpg', NULL, NULL),
(2, 1, 'Suite', 'AC, 1 Bed, 1 Kamar mandi dengan air panas & dingin, Bedside cabinet, Kulkas, Kursi tunggu, Overbed Table, Meja TV, Lemari pakaian, Bed Penunggu, Telepon.', 12, 1000000, 'kamar-2.jpg', NULL, NULL),
(3, 1, 'Kelas 1', 'AC, 1 Bed, 1 Kamar mandi dengan air panas & dingin, Bedside cabinet, Kulkas, Kursi tunggu, Overbed Table, Meja TV, Telepon.', 1, 800000, 'kamar-3.jpg', NULL, NULL),
(4, 2, 'VIP', 'AC, 1 Bed, 1 Kamar mandi dengan air panas & dingin, Bedside cabinet, Kulkas, Kursi tunggu, Overbed Table, Meja TV, Lemari pakaian, Dispenser, Meja, Sofabed, Smart TV 72\", Bed Penunggu, Telepon, Ruang keluarga, 1 set meja makan.', 1, 2000000, 'kamar-1.jpg', NULL, NULL),
(5, 2, 'Kelas 1', 'AC, 1 Bed, 1 Kamar mandi dengan air panas & dingin, Bedside cabinet, Kulkas, Kursi tunggu, Overbed Table, Meja TV, Telepon.', 0, 900000, 'kamar-3.jpg', NULL, NULL),
(6, 3, 'Kelas 1', 'AC, 1 Bed, 1 Kamar mandi dengan air panas & dingin, Bedside cabinet, Kulkas, Kursi tunggu, Overbed Table, Meja TV, Telepon.', 11, 1000000, 'kamar-3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_03_175942_create_dokter_table', 1),
(5, '2021_04_03_212154_create_rumahsakit_table', 1),
(6, '2021_04_04_161942_create_kamarinap_table', 1),
(7, '2021_04_03_210022_create_obat_table', 2),
(8, '2021_04_03_211947_create_diagnosis_table', 2),
(9, '2021_04_23_014922_create_cart_table', 3),
(10, '2021_04_23_015926_create_transactions_table', 3),
(11, '2021_04_23_023715_add_qty_and_harga_to_cart_table', 3),
(12, '2021_04_23_031149_add_code_to_cart_table', 3),
(13, '2021_04_23_054428_add_qty_and_total_to_transactions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `perluresepdokter` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama`, `jenis`, `harga`, `perluresepdokter`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Panadol Advance 100mg', 'Pil', 30000, 0, 'Bisa meredakan apa saja?\r\nDemam, Sakit kepala, Sakit gigi, Nyeri yang mengganggu.\r\n\r\nTersedia Dalam Format Apa?\r\nPil.\r\n\r\nPanadol tersedia dalam 2 variant: Extra dan Regular.\r\n\r\nFitur apakah yang Panadol punya?\r\nPanadol membantu meredakan demam sakit kepala, sakit gigi dan nyeri yang mengganggu secara cepat dan efektif.\r\n\r\nFitur lain:\r\nTanpa gluten, lactose dan gula, Kandungan parasetamol, Tidak mengandung Ibuprofen.\r\n\r\nApakah ingrediennya?\r\nBahan aktif: Parasetamol 500mg.', 'obat-1.jpg', NULL, NULL),
(2, 'Panadol Paracetamol 100mg', 'Kapsul', 15000, 0, 'Bisa meredakan apa saja?\r\nDemam, Sakit kepala, Sakit gigi, Nyeri yang mengganggu.\r\n\r\nTersedia Dalam Format Apa?\r\nPil.\r\n\r\nPanadol tersedia dalam 2 variant: Extra dan Regular.\r\n\r\nFitur apakah yang Panadol punya?\r\nPanadol membantu meredakan demam sakit kepala, sakit gigi dan nyeri yang mengganggu secara cepat dan efektif.\r\n\r\nFitur lain:\r\nTanpa gluten, lactose dan gula, Kandungan parasetamol, Tidak mengandung Ibuprofen.\r\n\r\nApakah ingrediennya?\r\nBahan aktif: Parasetamol 500mg.', 'obat-2.jpg', NULL, NULL),
(3, 'Paracetamol Farmina 500mg', 'Tablet', 55000, 1, 'Bisa meredakan apa saja?\r\nDemam, Sakit kepala, Sakit gigi, Nyeri yang mengganggu.\r\n\r\nTersedia Dalam Format Apa?\r\nPil.\r\n\r\nPanadol tersedia dalam 2 variant: Extra dan Regular.\r\n\r\nFitur apakah yang Panadol punya?\r\nPanadol membantu meredakan demam sakit kepala, sakit gigi dan nyeri yang mengganggu secara cepat dan efektif.\r\n\r\nFitur lain:\r\nTanpa gluten, lactose dan gula, Kandungan parasetamol, Tidak mengandung Ibuprofen.\r\n\r\nApakah ingrediennya?\r\nBahan aktif: Parasetamol 500mg.', 'obat-3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakit`
--

CREATE TABLE `rumahsakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `googlemapembed` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rumahsakit`
--

INSERT INTO `rumahsakit` (`id`, `nama`, `website`, `notelp`, `googlemapembed`, `alamat`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit Premier Bintaro', 'www.ramsaysimedarby.co.id', '+62 817 777 742', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.905164409354!2d106.72153501476944!3d-6.276198495457379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa9d8b042767%3A0x2a7956b6a6d3c3c3!2sPremier%20Bintaro%20Hospital!5e0!3m2!1sen!2sid!4v1616555891121!5m2!1sen!2sid', 'Jl. Moh. Husni Thamrin No.1, Pd. Jaya, Kec. Pd. Aren, Kota Tangerang Selatan, Banten 15224', 'Sebagai bagian dari Ramsay Sime Darby Health Care, RS Premier Bintaro senantiasa berupaya meningkatkan kualitas pelayanan disemua bidang secara berkesinambungan.\r\n\r\nMerupakan suatu tanggung jawab dan komitmen bagi kami untuk mengedepankan layanan kesehatan bermutu dan memperjelas arah tujuan pelayanan bahwa RS Premier Bintaro berupaya memberikan pelayanan kesehatan yang terbaik dibandingkan dengan pemberi jasa layanan kesehatan yang ada di Indonesia.\r\n\r\nRS Premier Bintaro telah meraih Akreditasi Internasional dari JCI (Joint Commision International) yang merupakan badan Akreditasi Internasional bagian dari Joint Commission Accreditation of Health Care Organizations (JCAHO-USA). RS Premier Bintaro merupakan rumah sakit pertama di Indonesia yang terakreditasi menggunakan standar terbaru JCI (edisi ke-empat).', 'rs-1.jpg', NULL, NULL),
(2, 'Rumah Sakit Siloam Simatupang', 'www.siloamhospitals.com', '(021) 2953 1900', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.783895070592!2d106.78215571476949!3d-6.292108395446016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1daf170dcab%3A0xfa9eef08dab4559!2sSiloam%20Hospitals%20TB%20Simatupang!5e0!3m2!1sen!2sid!4v1617780422136!5m2!1sen!2sid', 'Jl. R.A.Kartini No.8, RT.10/RW.4, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Jakarta 12430', 'Terletak di kawasan bisnis di Jakarta Selatan, Siloam Hospitals Simatupang telah menjadi rumah sakit swasta yang dipercaya masyarakat setempat dan orang asing yang tinggal di daerah Jakarta Selatan. \r\n\r\nRumah sakit ini menyediakan semua jenis layanan kesehatan berkualitas, terutama melalui layanan unggulan di bidang kardiologi, neurosains, ortopedi, dan radiasi onkologi. Dengan perlengkapan dan peralatan kedokteran berteknologi modern, para dokter spesialis, dokter umum, suster, dan staf penunjang di Siloam Hospitals Simatupang berkomitmen untuk memberikan perawatan dan layanan kesehatan berstandar internasional kepada pasien.', 'rs-2.jpg', NULL, NULL),
(3, 'Rumah Sakit Pondok Indah', 'www.rspondokindah.co.id', '(021) 7657525', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.846288657531!2d106.779373614717!3d-6.283927695451853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a5749fd305%3A0x6d5b2c92cd82061b!2sPondok%20Indah%20Hospital!5e0!3m2!1sen!2sid!4v1618848837811!5m2!1sen!2sid', 'Jl. Metro Duta Kav. UE, Pondok Indah, Kec. Kby. Lama, Daerah Khusus Ibukota Jakarta 12310', 'Kami berkomitmen memberi layanan kesehatan prima dengan menghadirkan layanan kesehatan terdepan yang didukung oleh teknologi medis dan sistem informasi rumah sakit digital terkini. Kami percaya, komitmen ini akan menjamin layanan yang lebih baik dan lebih cepat, baik untuk diagnosis, tindakan korektif, maupun tindakan penyelamatan jiwa. \r\n\r\nKomitmen ini juga tercermin dari konsistensi kami mengimplementasikan standar akreditasi nasional dan internasional di seluruh rumah sakit di bawah naungan RS Pondok Indah Group. \r\n\r\nSelain itu, kami juga berupaya berkontribusi untuk masyarakat melalui program tanggung jawab sosial perusahaan yang berfokus pada empat pilar, yaitu kesehatan, lingkungan, pendidikan, dan bantuan sosial.', 'rs-3.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `obat_id`, `qty`, `total`, `nama_lengkap`, `no_telpon`, `alamat`, `metode_pembayaran`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 30000, 'Meutia Aulia Fitri', '085283242430', 'Jalan Kakaktua Blok C23', 'transfer_bank', 'assets/buktipembayaran/NnZyyzNrcPYkOFvau6hj5zTWJXU2syAdb7oEMc4J.png', '2021-04-24 09:14:35', '2021-04-24 09:14:35'),
(2, 1, 1, 30000, 'Meutia Aulia Fitri', '22222', 'Jalan Kakaktua Blok C23', 'transfer_bank', 'assets/buktipembayaran/vnycS1KUYWKlyBYYdUFOdMTk1AkiSAGz1GOQPeqa.jpg', '2021-04-26 07:41:14', '2021-04-26 07:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Meutia', 'Aulia', 'meutia', 'meutia@gmail.com', NULL, '$2y$10$ia7lCSw0TIbJUZg01hgclOLvCIBWZxuqnnJGo/ZVEBgV6Lhsvh5DC', NULL, '2021-04-18 22:28:51', '2021-04-18 22:28:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kamarinap`
--
ALTER TABLE `kamarinap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamarinap`
--
ALTER TABLE `kamarinap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rumahsakit`
--
ALTER TABLE `rumahsakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
