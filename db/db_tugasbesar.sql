-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 12:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugasbesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_materi`
--

CREATE TABLE `isi_materi` (
  `id_isi` int(30) NOT NULL,
  `id_materi` varchar(30) NOT NULL,
  `id_bagian` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `judul_isi` varchar(100) NOT NULL,
  `gambar_materi` varchar(100) NOT NULL,
  `isi_materi` text NOT NULL,
  `link_youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_materi`
--

INSERT INTO `isi_materi` (`id_isi`, `id_materi`, `id_bagian`, `no`, `judul_isi`, `gambar_materi`, `isi_materi`, `link_youtube`) VALUES
(1, 'P', 'Perkenalan', '1', 'Perkenalan Photoshop:\r\nBagian 1', 'Perkenalan-P.png', 'Adobe Photoshop adalah software editing dan desain grafis yang digunakan oleh ribuan orang dalam berbagai peran di seluruh dunia. Tidak hanya untuk foto tetapi Anda dapat menggunakan Photoshop untuk merancang website, mengedit video, dan membuat karya seni 3D. \r\n<br> <br>\r\nSebelum Anda mulai menggunakan Photoshop, anda terlebih dahulu mendowload softwarenya. Setelah selesai mendownload, install software photoshop pada desktop atau laptop anda.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rCwA-Do2wW0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'P', 'Perkenalan', '2', 'Perkenalan Photoshop: Bagian 2', 'Photoshop.png', 'Sebagai pemula di Photoshop, penting untuk memahami anatomi interface photoshop sebelum Anda mulai. Saat Anda membuka programnya, Anda akan melihat menu utama di bagian atas, seperti program lain. Di sepanjang sisi kiri, Anda akan melihat sidebar yang menunjukkan tools utama. Di sisi kanan, Anda akan melihat tools warna (color) dan layer.\r\n\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yDlFvT9dCPo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'P', 'Layer', '1', 'Penggunaan Layer', 'Photoshop.png', 'Layer adalah fitur penting untuk dipahami ketika Anda belajar cara menggunakan Photoshop, bahkan untuk tutorial Photoshop yang paling dasar. Memiliki pengetahuan dasar tentang fitur ini dapat membantu anda dalam menguasai softwarenya.</p>\r\n<p>\r\nAnda bisa membayangkan Layer layaknya lembaran kaca yang ditumpuk satu sama lain. Saat Anda menggunakan banyak layer, lebih mudah untuk mengedit satu bagian dari gambar Anda tanpa mengacaukan bagian yang lainnya.</p>\r\n<p>\r\nAnda dapat dengan mudah menambah atau menghapus layer, serta meng”hide” atau meminimize mereka dengan mengklik ikon bola mata di sebelah kiri setiap nama layer.</p>\r\n\r\n<p>\r\nPada contoh di atas, Anda dapat melihat adanya tiga jenis layer : satu untuk logo di bagian bawah, satu untuk teks, dan satunya lagi untuk gambar background. Kami sangat menyarankan Anda memberi nama layer yang anda buat agar nantinya tidak bingung. Cukup klik 2 kali layer yang anda inginkan lalu sisipkan nama yang anda mau.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Oddr0Sf9cJE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'P', 'Layer', '2', 'Membuat dan Duplikasi Layer', '', ' Untuk menambah atau menghapus layer:\r\nDari bilah menu atas, pilih Layer> New> Layer ...\r\n\r\nUntuk memilih layer:\r\nLayer yang dipilih disorot dengan warna biru. Untuk mengedit bagian tertentu dari gambar Anda, Anda harus memilih layer tertentu.\r\n\r\nAnda juga akan melihat ada simbol \"mata\" di samping setiap layer: Klik simbol itu untuk menyalakan dan mematikan mata, sehingga mengubah visibilitas layer saat Anda bekerja.\r\n\r\nUntuk menduplikasi layer:\r\nPertama, pilih layer atau grup di panel Layer. Selanjutnya, seret layer atau grup ke tombol Create a New Layer, atau klik kanan layer untuk memilih \"Duplicate Layer\" atau \"Duplicate Group.\" Masukkan nama untuk layer atau grup baru, dan klik OK.\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ezhdL_fFUZ0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'P', 'Warna dan Swatch', '1', 'Alat Warna dan Swatch', '', 'Apa Kegunaannya: Alat Warna dan Swatch memungkinkan Anda menggunakan, memodifikasi, menyalin, dan menyimpan warna kustom untuk konten Anda. Meskipun ini mungkin tampak seperti elemen yang cukup jelas, ia sebenarnya memiliki fitur canggih yang akan membuat konten visual Anda tetap hidup dan menyatukan skema warna Anda.\r\n\r\nDi Mana Letaknya: Alat Warna & Swatch memiliki modul sendiri di sudut kanan atas layar Photoshop Anda, secara default.\r\n\r\n\r\n\r\nUntuk membuat warna kustom Anda sendiri:\r\nBuka Color Picker dengan mengklik dua kali pada kotak bagian atas baik di modul Warna, atau di menu di sebelah kiri.\r\n\r\ndata:image/png;base64,R0lGODlhAQABAAD/\r\n\r\nDari sana, Anda akan melihat spektrum warna vertikal dengan slider di atasnya, yang dapat Anda sesuaikan untuk membuat warna kustom Anda sendiri. Atau, jika Anda sudah memiliki warna tertentu yang Anda tahu nilai heksinya (contohnya # 1fb1ee), kemudian masukkan dalam kotak yang sesuai untuk menemukan warna itu secara otomatis. Anda juga dapat memilih contoh warna berdasarkan nilai RGB atau CMYK.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zpE0UGhM7IA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, 'I', 'Perkenalan', '1', 'Perkenalan Illustrator: Bagian 1', 'Illustrator.png', ' Sebelum kita masuk ke materi tutorial Adobe Illustrator Dasar untuk pemula, sebaiknya kita kenalan dulu dengan software ini. Karena mungkin ada teman-teman yang masih bertanya-tanya tentang keunggulan software ini.</p>\r\n<p>\r\nJadi Adobe Illustrator ini merupakan software yang hasil gambarnya berbentuk vector. Nah Adobe Illustrator ini bisa digunakan untuk banyak hal seperti desain logo, illustrasi vector wajah, interface game, flat desain karakter, IU/UX, web desain, dll. Pokoknya software ini sangat famous dan banyak digunakan oleh artist diluar negeri. Kenapa famous diluar negeri? Karena di Indonesia kebanyakan menggunakan software Corel Draw yang digunakan untuk kebutuhan percetakan. \r\n</p>\r\n<p>\r\nMenurut saya sebagai pemula yang sama sekali belum mengenal seluruh tools di Adobe Illustrator, kita tidak perlu langsung mempelajari seluruh kegunaan toolsanya. Kenapa? Karena itu akan membuat kita kesulitan mengingat fungsi tools dan mmbuat kita jadi kesel dan malas untuk lanjut belajar lagi.\r\n</p>\r\n<p>\r\nJadi menurut saya, lebih baik kita belajar hal yang penting dan paling sering digunakan saja. Karena ini adalah fondasi awal yang akan kamu gunakan di Adobe Illustrator bahkan saat kamu sudah menjadi desainer profesional. Jadi langkah ini adalah dasar yang benar-benar harus kita pelajari sebagai pemula. \r\n\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3qFySlBXuTs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, 'I', 'Perkenalan', '2', 'Perkenalan Illustrator: Bagian 2', 'Illustrator.png', 'Adobe Illustrator merupakan sebuah software desain grafis, pengolah dan pengedit gambar yang berbasis vektor. Adobe Illustrator dikembangkan oleh sebuah perusahaan besar perangkat lunak, yaitu Adobe Systems, yang bermarkas di San Jose, California, AS.\r\n</p>\r\n<p>\r\nAdobe Illustrator adalah standar software desain grafis yang digunakan oleh para designer profesional saat ini. Karena memang Adobe Illustrator memiliki banyak sekali tools yang khusus untuk itu. Ditambah, Adobe Illustrator juga dapat terintegrasi dengan software Adobe lainnya. Seperti After Effect, Adobe Premiere, dan lainnya.\r\n</p>\r\n<p>\r\nSelain itu, Adobe Illustrator dapat menangani file-file gambar atau desain yang berukuran besar. Karena memang software ini dirancang dengan performa yang handal. Tetapi, juga harus didukung perangkat yang memadai.\r\n</p>\r\n<p>\r\nAdobe Illustrator juga menjadi primadonanya para animator. Karena dengan terintegrasinya Adobe Illustrator ke software Adobe After Effect, banyak sekali animator menggunakan Adobe Illustrator untuk membuat rancangan desain animasinya disini.\r\n</p>\r\n<p>\r\nJadi, kalian tinggal pilih. Mau belajar Adobe Illustrator tentang apa dan untuk apa.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Qd_zL4MABlE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, 'I', 'Tools', '1', 'Penggunaan Shape', '', 'Dalam Membuat karya di Adobe Illustrator, kamu tidak harus pandai menggambar lho! Hal ini dikarenakan software seperti Adobe Illustrator, Corel Draw dan Adobe Photoshop sebenarnya hanya memanfaatkan fungsi tools yang ada di software tersebut.\r\n</p>\r\n<p>\r\nHal ini sangat penting untuk kamu kuasai karena dengan modal shape berbentuk persegi, lingkaran dan segitiga saja kamu bisa membuat beragam bentuk baru seperti karakter, pemandangan dan desain lainnya.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cYoTNWTlxXk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, 'I', 'Tools', '2', 'Penggunaan Pen Tools', '', 'Untuk memaksimalkan penggunaan Shape Tool, kita memerlukan Pen Tool nihh teman-teman. Pen Tool digunakan untuk membuat bentuk yang tidak diciptakan oleh bentuk yang ada di Shape Tool. Pen Tool juga berfungsi agar kita dapat menggambar sesuatu yang bentuknya sesuai dengan keinginan kita. Misalnya kita tracing wajah, nah bentuk rambut, mata, hidung, telinga dan lainnya kan tidak bisa diciptakan dengan Shape Tool tapi bentuk tersebut bisa dibuat dengan Pen Tool. Contohnya seperti gelombang yang saya buat dengan Pen Tool pada gambar dibawah ini.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/j69a3-shkGE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'I', 'Tools', '3', 'Penggunaan Shape Builder Tools', '', 'Tool ini adalah tool yang paling saya suka hehe. Fungsinya adalah untuk membuat objek baru dari gabungan beberapa objek maupun menghapus bentuk/garis dari gabungan objek yang ada.\r\n</p>\r\n<p>\r\nPada gambar diatas dapat kita lihat perbandingan bentuk pada gambar yang sebelah kiri (sebelum menggunakan Shape Builder Tool) dan sebelah kanan (sesudah menggunakan Shape Builder Tool). Sebelum menggunakan tool ini, seleksi dulu ya objek yang ingin dipisahkan atau dibentuk objek baru. Pada gambar di atas kita juga melihat bahwa Shape Builder Tool ini dapat menghapus line atau garis diantara objek yang sudah kita seleksi sebelumya.\r\n\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RTnT-PDPp7g\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, 'I', 'Warna', '1', 'Warna Gradasi', '', 'Gradasi pada Adobe Illustrator ada 3 jenis nih teman-teman. Yang pertama dan ketiga pada gambar dibawah ini adalah gradasi yang dihasilkan oleh Gradient Tool. Gradasi pada Gradient Tool terdiri atas gradasi linear seperti gambar pertama dan gradasi radial (lingkaran) seperti gambar ketiga.\r\n</p>\r\n<p>\r\nSelain menggunakan Gradient Tool, kita dapat membuat gradasi warna dengan menggunakan Mesh Tool. Gradasi pada Mesh Tool ini dapat menggradasikan lebih dari 2 warna yang hasilnya seperti gambar kedua dibawah ini.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rfXudXyxUzM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, 'I', 'Warna', '2', 'Mewarnai Objek Menggunakan Live Paint Bucket', '', 'Gradasi pada Adobe Illustrator ada 3 jenis nih teman-teman. Yang pertama dan ketiga pada gambar dibawah ini adalah gradasi yang dihasilkan oleh Gradient Tool. Gradasi pada Gradient Tool terdiri atas gradasi linear seperti gambar pertama dan gradasi radial (lingkaran) seperti gambar ketiga.\r\n</p>\r\n<p>\r\nSelain menggunakan Gradient Tool, kita dapat membuat gradasi warna dengan menggunakan Mesh Tool. Gradasi pada Mesh Tool ini dapat menggradasikan lebih dari 2 warna yang hasilnya seperti gambar kedua dibawah ini.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-Lx78SoVzec\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, 'F', 'Perkenalan', '1', 'Perkenalan FIGMA: Bagian 1', 'Figma.png', 'Figma adalah salah satu design tool dan keunggulan dari Figma adalah web based. Sehingga jika kamu pengguna windows, linux ataupun mac, kamu bisa menggunakan design tool ini.\r\n</p>\r\n<p>\r\nUntuk menggunakan tool ini, Kamu cukup membuka Figma.com,lalu melakukan registrasi,dan kamu siap untuk menggunakan nya', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/wE-eGh8gWAk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(14, 'F', 'Design Project', '1', 'Frame', '', 'Pilih frame dan pilih ukurannya sesuai dengan jenis aplikasi yang akan dibuat. Di pembahasan kali ini Saya akan memilih Phone – Android. Setelah kalian memilih ukurannya maka tampilannya akan seperti ini. Sekarang saatnya kita mulai mendesain aplikasi kita. Pertama – tama kita akan membuat tampilan awal aplikasi kesehatan, caranya pilih rectangle dan tarik dari atas ke bawah di frame warna putih tersebut</p>\r\n\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/CxAgmrdQKmI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(15, 'F', 'Design Project', '2', 'Membuat Rectangle', '', 'Setelah itu klik kotak tersebut Dan kalian bisa ganti warnanya disebelah kanan di bagian fill sesuai keinginan kalian. Agar lebih menarik kalian bisa ganti warnanya dengan linier dan kalian pilih 2 warna yang pas.\r\n</p>\r\n<p>\r\nJika sudah pas warnanya kalian bisa tambahkan tulisan dengan klik tombol T diatas dan drag dari kiri ke kanan. tulis nama aplikasi kalian, misalnya ‘DOKTERKU’', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LiF3eTyAiKA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `nama` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`nama`, `nama_lengkap`, `email`, `password`) VALUES
('abdhabsab', 'bhasbhabs', 'abcd@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('Agus112', 'Agus Salim', 'agussalim@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('FadliJTD', 'Fadli', 'fadlihakurung@gmail.com', '87654321'),
('Khalid', 'Ahmad Rizal Khalid', 'khalid99@gmail.com', '12345678'),
('M Yulian', 'Muhammad Yulian', 'yulian77@gmail.com', '12345678'),
('Wahid Irhamna', 'Wahid Irhamna bin Abdurrahman', 'wahidirm1@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` varchar(100) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `gambar_materi` varchar(100) NOT NULL,
  `deskripsi_materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `gambar_materi`, `deskripsi_materi`) VALUES
('F', 'FIGMA', 'FIGMA.png', 'Figma is a vector graphics editor and prototyping tool which is primarily web-based, with additional offline features enabled by desktop applications for macOS and Windows. The Figma Mirror companion apps for Android and iOS allow viewing Figma prototypes in real-time on mobile devices.'),
('I', 'ILLUSTRATOR', 'Illustrator.png', 'Adobe Illustrator is a vector graphics editor and design program developed and marketed by Adobe Inc. Originally designed for the Apple Macintosh, development of Adobe Illustrator began in 1985. Along with Creative Cloud, Illustrator CC was released.'),
('P', 'PHOTOSHOP', 'Photoshop.png', 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Inc. for Windows and macOS. It was originally created in 1988 by Thomas and John Knoll. Since then, the software has become the industry standard not only in raster graphics editing, but in digital art as a whole.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_materi`
--
ALTER TABLE `isi_materi`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_materi`
--
ALTER TABLE `isi_materi`
  MODIFY `id_isi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
