-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 04:08 PM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `tag` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `image`, `title`, `content`, `tag`, `author`, `post_date`) VALUES
(1, '1834156506.jpg', '3 Gejala Awal Osteoporosis yang Perlu Diwaspadai', 'KOMPAS.com – Osteoporosis adalah kondisi ketika tulang secara perlahan kehilangan kepadatannya. Meskipun tulang Anda biasanya sangat kuat, bagian rangka penyangga tubuh ini tetap saja terdiri dari jaringan hidup yang terus menerus rusak dan terbentuk kembali. Seiring bertambahnya usia, tulang yang tua mungkin akan rusak lebih cepat daripada pembentukan tulang baru. Baca juga: 12 Makanan yang Mengandung Vitamin K Tinggi Hal ini menyebabkan tulang Anda berlubang dan menjadi lebih rapuh. Nah, kondisi inilah yang disebut osteoporosis. Mengobati osteoporosis pada tahap paling awal adalah cara terbaik untuk mencegah beberapa konsekuensi yang lebih serius, seperti kehilangan tinggi badan atau patah tulang. Mempelajari gejala awal osteoporosis dapat membantu Anda mengambil langkah yang tepat untuk menjaga tulang tetap kuat. Terima kasih telah membaca Kompas.com. Dapatkan informasi, inspirasi dan insight di email kamu. Daftarkan email Gejala awal osteoporosis Tanda-tanda awal tulang keropos mungkin sulit dideteksi. Sering kali orang-orang tidak tahu bahwa mereka memiliki tulang yang lemah sampai mengalami patah tulang pinggul, tulang belakang, atau pergelangan tangan. Namun, beberapa kondisi bisa juga dicurigai sebagai gejala awal osteoporosis. Ini mungkin termasuk: 1. Gusi menyusut Melansir NIH, osteoporosis mungkin saja berkaitan dengan kondisi mulut. Ini karena gigi dan gusi ditopang oleh tulang rahang. Baca juga: 9 Makanan yang Mengandung Kalsium Tinggi Ketika osteoporosis menyerang, tulang rahang akan kehilangan kepadatannya, sehingga garis gusi bisa terlihat menyusut. Untuk itu, jangan ragu untuk meminta dokter gigi Anda memeriksa pengeroposan tulang di rahang. 2. Kekuatan genggaman melemah Kekuatan genggaman tangan yang melemah juga bisa mejadi gejala awal osteoporosis. Dalam sebuah studi yang terbitkan dalam Jurnal Orthopaedic Surgery pada 2018, para peneliti menemukan bahwa kekuatan genggaman yang rendah dapat dikaitkan dengan kepadatan mineral tulang yang rendah. Jadi, ketika gejala ini terus-terusan Anda alami, sebaiknya jangan dibiarkan begitu saja. Segerakan berkonsultasi dengan dokter mengenai adanya kemungkinan gejala osteoporosis. Melemahnya kekuatan genggaman bisa menjadi gejala osteoporosis tahap awal, terutama pada wanita pascamenopause. Baca juga: 10 Makanan yang Mengandung Vitamin D Tinggi Lagi pula, kekuatan genggaman yang melemah dapat meningkatkan risiko Anda jatuh dan mengalami cidera, termasuk patah tulang. 3. Kuku mudah patah dan rapuh Kekuatan kuku dapat pula menandakan kesehatan tulang. Ini karena kuku dan tulang tersusun dari bahan mineral yang sama, yaitu kalsium. Dilansir dari Health Line, kondisi kuku yang melemah, mudah patah, dan rapuh bisa menjadi gejala awal osteoporosis. Tetapi, perhatikan bahwa kuku mudah patah dan rapuh juga bisa disebabkan oleh faktor luar, seperti cedera saat berkebun, berenang, atau melakukan berbagai aktivitas lainnya. Selain perubahan kepadatan tulang, osteoporosis biasanya tidak menimbulkan banyak gejala awal. Jadi, kesempatan terbaik Anda untuk mendeteksi osteoporosis pada tahap awal adalah pergi ke dokter, terutama jika Anda memiliki riwayat keluarga osteoporosis. Baca juga: Sudahi Perdebatan, Ini Waktu Berjemur yang Tepat Hasil Kajian Perdoski Gejala osteoporosis stadium lanjut Ketika kondisi tulang semakin memburuk secara signifikan, Anda mungkin baru akan mengalami gejala osteoporosis yang lebih jelas. Ini termasuk: Hilangnya tinggi badan Osteoporosis dapat memicu fraktur kompresi atau melemah dan menekuknya tulang belakang. Menekuknya tulang belakang ini dapat membuat tinggi badan menjadi berkurang dan menjadi gejala osteoporosis yang khas. Patah tulang karena jatuh Fraktur atau patah tulang adalah salah satu tanda tulang rapuh yang paling umum. Patah tulang dapat terjadi dengan jatuh atau gerakan kecil seperti saat melangkah keluar dari trotoar. Beberapa patah tulang osteoporosis bahkan dapat dipicu oleh bersin atau batuk yang kuat. Baca juga: 9 Makanan yang Baik untuk Kesehatan Tulang Sakit punggung atau leher Osteoporosis dapat menyebabkan fraktur kompresi pada tulang belakang. Fraktur ini bisa sangat menyakitkan karena tulang belakang yang bengkok dapat menjepit saraf yang keluar dari sumsum tulang belakang. Gejala nyeri dapat berkisar dari nyeri ringan hingga nyeri yang melemahkan. Postur membungkuk Kompresi tulang belakang juga dapat menyebabkan gejala osteoporosis berupa lengkungan pada punggung bagian atas. Kondisi punggung membungkuk ini disebut dengan kifosis dan dapat menimbulkan sakit pada punggung dan leher. Kifosis dapat menyebabkan nyeri punggung dan leher dan bahkan memengaruhi pernapasan karena tekanan ekstra pada saluran napas dan terbatasnya ekspansi paru-paru Anda.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"3 Gejala Awal Osteoporosis yang Perlu Diwaspadai\", Klik untuk baca: https://health.kompas.com/read/2021/05/21/100500268/3-gejala-awal-osteoporosis-yang-perlu-diwaspadai?page=all#page2.\r\nPenulis : Irawan Sapto Adhi\r\nEditor : Irawan Sapto Adhi', 'health', 'Kiki', '2021-05-22'),
(2, '60251c4205c76.png', 'Cara Menurunkan Berat Badan dalam Seminggu dengan Aman', 'KOMPAS.com - Memiliki berat badan ideal merupakan impian banyak orang. Banyak orang menginginkan berat badan ideal secara sekejap, tanpa mempelajari terlebih dahulu risiko yang mungkin bisa dihadapinya. Memang, menurunkan berat badan dalam jangka waktu satu minggu bisa dilakukan. Baca juga: 5 Penyebab Diet Keto Gagal Turunkan Berat Badan Namun, cara ini tidak disarankan oleh para ahli kesehatan. Dilansir dari Healthline dan Medical News Today, secara teknis, kita bisa menurunkan berat badan hingga 4,5 kg dalam jangka waktu satu minggu. Namun, hal ini sangat berisiko apabila tidak diawasi oleh tenaga kesehatan. Terima kasih telah membaca Kompas.com. Dapatkan informasi, inspirasi dan insight di email kamu. Daftarkan email Beberapa risiko yang mungkin dihadapi karena penurunan berat badan secara drastis meliputi peningkatan batu empedu, dehidrasi, ketidakseimbangan elektrolit, sakit kepala, lelah, dan terganggunya siklus haid. Lalu, berapa penurunan berat badan yang disarankan? Menurut Centers for Disease Control and Prevention, jumlah penurunan berat badan yang aman adalah sekitar 1 hingga 2 pon atau setara dengan 0,5 kg hingga 1 kg per minggu. Namun, hasilnya akan berbeda pada tiap individu tergantung pola dan kondisi tubuh masing-masing. Ada beberapa cara yang bisa dilakukan untuk menurunkan berat badan dalam waktu satu minggu secara aman.\r\n1. Kurangi konsumsi karbohidrat Salah satu cara untuk menurunkan berat badan dengan cepat adalah dengan mengurangi gula dan pati, atau karbohidrat. Cara ini bisa dilakukan dengan pola makan rendah karbohidrat dan menggantinya dengan biji-bijian. Baca juga: 7 Penyebab Berat Badan Naik Saat Puasa, Bisa Jadi Bahan Evaluasi Menurut sebuah studi berjudul “The Effects of a Low-Carbohydrate Ketogenic Diet and a Low-Fat Diet on Mood, Hunger, and Other Self-Reported Symptoms”, diet rendah karbohidrat akan menurunkan rasa lapar sehingga konsumsi kalori pun menjadi rendah. Di samping itu, konsumsi makanan karbohidrat kompleks dan rendah kalori, seperti biji-bijian, akan mendapat membuat kenyang lebih lama. Hal ini disebabkan, kandungan serat yang tinggi pada biji-bijian dan waktu mencerna yang lama. Cara ini pun terbukti dapat menurunkan berat badan. Sebuah publikasi berjudul “Effects of weight loss during a very low carbohydrate diet on specific adipose tissue depots and insulin sensitivity in older adults with obesity: a randomized clinical trial” menunjukkan bahwa diet karbohidrat memang terbukti dapat menurunkan berat badan pada orang lansia. Namun, sampai saat ini belum ada penelitian komprehensif mengenai dampak jangka panjang dari diet ini.\r\n2. Konsumsi protein dalam jumlah cukup Setiap makanan yang dikonsumsi harus mengandung gizi seimbang, yang mencakup protein, lemak, karbohidrat kompleks, dan sayuran. Merangkum sebuah studi berjudul “Preserving Healthy Muscle during Weight Loss”, protein dalam jumlah yang disarankan sangat penting untuk membantu menjaga kesehatan dan massa otot. Baca juga: 3 Cara Cegah Berat Badan Naik saat Lebaran Untuk pria, konsumsi protein yang disarankan sebanyak 56 - 91 gram per hari, sedangkan wanita sebesar 46 - 75 gram per hari. Beberapa makanan yang menjadi sumber protein antara lain daging, ikan, telur, dan biji-bijian.\r\n3. Konsumsi sayuran Selain protein yang cukup, konsumsi sayuran juga sangat penting. Sayuran mengandung banyak nutrisi yang dibutuhkan tubuh. Konsumsi sayuran dalam jumlah banyak pun tidak masalah karena tidak akan meningkatkan kalori atau karbohidrat secara drastis. Beberapa sayur yang disarankan antara lain brokoli, bayam, tomat, dan sayuran lainnya.\r\n4. Tetap konsumsi lemak sehat Meskipun sedang masa diet, tubuh tetap membutuhkan asupan lemak. Minyak zaitun dan minyak alpukat adalah pilihan yang bagus untuk dimasukkan ke dalam menu makan harian. Konsumsi makanan dengan tinggi lemak jenuh pun diperbolehkan, tetapi dengan jumlah yang perlu dibatasi. Baca juga: 3 Alasan Perbanyak Minum Air Putih Bisa Bantu Turunkan Berat Badan\r\n5. Olahraga secara teratur Olahraga dapat membantu menurunkan berat badan lebih cepat. Salah satu olahraga yang disarankan adalah mengangkat beban. Beberapa studi, seperti \"Resistance Training Conserves Fat-free Mass and Resting Energy Expenditure Following Weight Loss” menunjukkan bahwa angkat beban terbukti dapat membantu menurunkan berat badan. Selain itu, olahraga kardio lainnya, seperti berlari, bersepeda, atau berenang bisa menjadi pilihan karena juga dapat membakar kalori lebih cepat.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Cara Menurunkan Berat Badan dalam Seminggu dengan Aman\", Klik untuk baca: https://health.kompas.com/read/2021/05/22/120000768/cara-menurunkan-berat-badan-dalam-seminggu-dengan-aman?page=all#page2.\r\nPenulis : Galih Pangestu Jati\r\nEditor : Resa Eka Ayu Sartika\r\n', 'diet', 'Felix', '2021-05-23'),
(3, '5fe07b3f8403d.jpg', '6 Makanan yang Harus Dihindari saat Radang Tenggorokan', 'KOMPAS.com - Radang tenggorokan adalah kondisi ketika tenggorokan terasa kering, sakit, dan gatal. Penyakit ini tergolong kondisi yang sangat umum. Dilansir dari Healthline, ada dua penyebab munculnya radang tenggorokan, yakni infeksi dan faktor lingkungan, seperti udara yang kering. Baca juga: 4 Obat Radang Tenggorokan Sebagian besar kasus radang tenggorokan biasanya akan sembuh dengan sendirinya. Namun, semuanya tergantung kondisi tubuh penderita dan jenis radang yang dialami. Terima kasih telah membaca Kompas.com. Dapatkan informasi, inspirasi dan insight di email kamu. Daftarkan email Radang tenggorokan dibagi menjadi tiga jenis, tergantung oleh bagian tenggorokan yang diserang. Berikut ini tiga jenis radang tenggorokan. Faringitis memengaruhi area tepat di belakang mulut. Tonsilitis adalah pembengkakan dan kemerahan pada amandel, jaringan lunak di bagian belakang mulut. Laringitis adalah pembengkakan dan kemerahan pada kotak suara, atau laring. Saat mengalami salah satu dari tiga jenis radang tersebut, biasanya penderita mengalami kesusahan dalam menelan makanan dan minuman. Dirangkum dari Medical News Today, penderita disarankan untuk mengonsumsi beberapa jenis makanan yang lembut, seperti pisang, sup, bubur, dan lain sebagainya. Di samping itu, ada beberapa makanan yang harus dihindari karena dapat memperparah radang tenggorokan. Berikut ini daftar makanan yang harus dihindari agar tenggorokan tidak mengalami iritasi. \r\n1. Makanan yang renyah dan keras Makanan yang cenderung memiliki tekstur keras, seperti kerupuk, roti kering, kacang-kacangan, atau sayuran mentah, dapat membuat sakit tenggorokan semakin tidak nyaman. Baca juga: 4 Makanan Pantangan Penderita Radang Tenggorokan Sebaiknya, penderita disarankan untuk mengonsumsi makanan-makanan bertekstur halus agar mudah ditelan. \r\n2. Buah dan jus jeruk Banyak orang beralih ke jus jeruk saat mereka sedang radang tenggorokan. Namun, jus jeruk ternyata dapat membuat sakit tenggorokan semakin parah karena keasamannya. Keasaman pada jus jeruk dapat mengiritasi permukaan tenggorokan yang sudah lunak. Selain itu, penelitian lain berjudul “Vitamin C in the Prevention and Treatment of the Common Cold” mengatakan bahwa konsumsi vitamin C belum terbukti menyembuhkan sakit tenggorokan. \r\n3. Makanan asam dan asinan Meskipun tampak segar dan menggoda, makanan asam dan asinan sebaiknya dihindari. Makanan yang dibuat dengan cuka atau garam, seperti acar, dapat memperburuk radang sakit tenggorokan. Seperti buah jeruk, makanan ini mengandung tingkat keasaman tinggi sehingga dapat menyebabkan iritasi pada tenggorokan yang lunak. \r\n4. Jus dan saus tomat Sama seperti jus jeruk, tomat juga mengandung asam. Baca juga: 7 Makanan untuk Penderita Radang Tenggorokan Oleh karena itu, tomat menjadi pilihan yang buruk bagi penderita sakit tenggorokan. \r\n5. Bumbu tertentu Beberapa bumbu dapat meredakan sakit tenggorokan. Namun, beberapa bumbu lainnya, seperti cabai, saus pedas, dan pala, malah dapat memperparah peradangan. Dilansir dari Naturally Sassy, bumbu-bumbu ini memicu kelenjar ludah untuk memproduksi lendir di tenggorokan. Penumpukan lendir menyebabkan penderita lebih sering mengeluarkan dahak sehingga menyebabkan ketidaknyamanan. Oleh karena itu, bumbu-bumbu tersebut perlu dihindari. Sebagai gantinya, gunakan bumbu-bumbu yang memiliki cita rasa halus, seperti bawang putih, kunyit, dan lain sebagainya. \r\n6. Alkohol Minuman dan obat kumur yang mengandung alkohol dapat menyebabkan sensasi perih di tenggorokan. Selain itu, alkohol juga menyebabkan dehidrasi sehingga memperparah kondisi orang yang sakit tenggorokan.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"6 Makanan yang Harus Dihindari saat Radang Tenggorokan\", Klik untuk baca: https://health.kompas.com/read/2021/05/20/160000168/6-makanan-yang-harus-dihindari-saat-radang-tenggorokan?page=all#page2.\r\nPenulis : Galih Pangestu Jati\r\nEditor : Resa Eka Ayu Sartika\r\n', 'health', 'Irfanda', '2021-05-23');

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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_riwayat` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_riwayat`, `review`, `timestamp`) VALUES
(2, 2, 'test', '2021-05-26 14:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatinap`
--

CREATE TABLE `riwayatinap` (
  `id_riwayat` int(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namars` varchar(255) NOT NULL,
  `tipekamar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keter` enum('review','uploadbayar','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayatinap`
--

INSERT INTO `riwayatinap` (`id_riwayat`, `id_user`, `namars`, `tipekamar`, `harga`, `status`, `keter`) VALUES
(1, 1, 'Rumah Sakit Premiere Bintaro', 'Premiere', 3000000, 'Success', 'review'),
(2, 1, 'Rumah Sakit Premiere Bintaro', 'Suite A', 2000000, 'Need Approve', 'uploadbayar');

-- --------------------------------------------------------

--
-- Table structure for table `riwayatobat`
--

CREATE TABLE `riwayatobat` (
  `id_riwayat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `namabel` varchar(255) NOT NULL,
  `namabat` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ket` enum('selesai','on proccess') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayatobat`
--

INSERT INTO `riwayatobat` (`id_riwayat`, `id_user`, `namabel`, `namabat`, `jumlah`, `harga`, `total`, `ket`) VALUES
(1, 1, 'Meutia Aulia Fitri', 'Panadol Advance 100 Mg', 2, 30000, 60000, 'selesai');

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
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `riwayatinap`
--
ALTER TABLE `riwayatinap`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `riwayatobat`
--
ALTER TABLE `riwayatobat`
  ADD PRIMARY KEY (`id_riwayat`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayatinap`
--
ALTER TABLE `riwayatinap`
  MODIFY `id_riwayat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayatobat`
--
ALTER TABLE `riwayatobat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
