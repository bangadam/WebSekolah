-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 01:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_schools`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `penulis`, `isi`, `tanggal`, `waktu`, `images`) VALUES
(9, 3, 'Ical dukung Jokowi, Agung Laksono makin panas', 'Admin', '<p><span style="font-family: arial; font-size: 15px; line-height: 25px;">Ketua penyelenggara rapat pimpinan nasional (Rapimnas) Golkar kubu&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/a/aburizal-bakrie/">Aburizal Bakrie</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;(Ical),&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/n/nurdin-halid/">Nurdin Halid</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">mengklaim kehadiran Menteri Hukum dan HAM&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/y/yasonna-h-laoly/">Yasonna Laoly</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">dan Menko Polhukam&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/l/luhut-panjaitan/">Luhut Pandjaitan</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;dalam pembukaan rapat pimpinan nasional (Rapimnas) Golkar pada Sabtu (23/1) lalu adalah bentuk pengakuan Pemerintah atas legal standing kepengurusan partai oleh kubu Bali.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Pemerintah sudah merestui&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/a/aburizal-bakrie/">Aburizal Bakrie</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;dan Idrus Marham memimpin&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/p/partai-golongan-karya/">Partai Golkar</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">," ucap Nurdin pada acara pembukaan Rapimnas Golkar di&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://www.merdeka.com/tag/j/jakarta/">Jakarta</a></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;convention Center (JCC) Senayan, Senin (25/1).</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Tidak hanya itu, dalam rapimnas ini Golkar kubu Ical juga mendeklarasikan diri untuk mendukung pemerintahan&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/j/joko-widodo/">Jokowi</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">-&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/m/muhammad-jusuf-kalla/">JK</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">. Seperti diketahui, perpecahan yang terjadi di internal Golkar sejak awal adalah soal sikap politik partai yang mendukung atau berada di luar pemerintah.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Namun, Ketua Umum&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/p/partai-golongan-karya/">Partai Golkar</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;hasil Munas Ancol,&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/a/agung-laksono/">Agung Laksono</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;tidak sependapat. Agung menilai tidak bisa kehadiran perwakilan pemerintah di rapimnas langsung diklaim sebagai bentuk dukungan terhadap kepengurusan Golkar kubu Aburizal Bakrie.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Kehadiran Menkum HAM kami apresiasi untuk lihat secara langsung Rapimnas di sana. Dan apa yang disampaikan pemerintah itu hak pemerintah, tapi kami yakin itu bukan pengakuan," kata Agung.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Agung menepis pemerintah akui Golkar kubu Ical dan dia meyakini pemerintah tetap menjaga netralitas. Kehadiran Yasonna dan Luhut hanya untuk memenuhi undangan Rapimnas Golkar, tidak lebih dari itu.&nbsp;</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Kami berkeyakinan itu bukan berarti pemerintah berpihak ke sana," tepis Agung.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Selain itu, Agung mengkritik keras wacana perluasan wewenang Dewan Pertimbangan (Watim). Dirinya menuding ada agenda tersembunyi yang dilakukan Ical.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Memperkuat kewenangan Wantim buat apa? Yang diperkuat itu kaderisasi, persatuan kesatuan, jujur menjalankan kepentingan partai bukan pribadi bisnisnya," timpalnya.&nbsp;</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Menurutnya, perluasan wewenang harus melalui Musyawarah Nasional. Rapimnas yang digelar Golkar kubu Ical dianggapnya tidak memiliki wewenang mengubah kewenangan Dewan Pertimbangan Golkar dan seharusnya Rapimnas digelar untuk memperkuat kader partai.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Apalagi Rapimnas tidak ada kekuasaannya untuk mengubah kewenangan Wantim, harus lewat Munas, dan sebaiknya perkuat partai, hubungan pusat daerah, bagaimana konsisten jalankan ideologi partai, bukan kewenangan wantim diperkuat," bebernya.&nbsp;</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Tidak hanya itu, Agung juga menanggapi dingin hasil Rapimnas kubu Aburizal Bakrie yang sepakat menggelar Munaslub pada Juni 2016. Agung tetap ngotot agar Munaslub harus menyertakan tim transisi yang telah dibentuk Mahkamah Partai Golkar (MPG).&nbsp;</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Kami tidak percaya Munaslub. Lebih baik melalui tim transisi yang objektif. Kalau tidak, ada niat macam-macam yang ikut. Sehingga kita hasilkan keputusan yang betul-betul berdasarkan AD/ART," tegas Agung.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Pokoknya kami di sini mendorong Munas secepatnya dilakukan sesuai putusan MPG yaitu melalui tim transisi," imbuhnya.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Menurutnya, jika kubu Ical berkukuh tidak menyertakan tim transisi maka Munaslub tidak diakui pihaknya. "Kalau tetap dilaksanakan Munaslub ya kami tidak mengakui," ujarnya.</span></p>', '2016-01-26', '06:44:53', '06_44_53_2016_01_26_Ical_dukung_Jokowi,_Agung_Laksono_makin_panas.jpg'),
(10, 3, 'Kriteria calon pendamping Ahok di Pilgub DKI', 'Admin', '<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Pemilihan Gubernur DKI&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://www.merdeka.com/tag/j/jakarta/">Jakarta</a></strong>&nbsp;memang baru akan digelar tahun depan, namun panasnya persaingan sudah mulai dirasakan sejak tahun lalu. Beberapa nama digadang-gadang disiapkan untuk menantang petahana&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/b/basuki-tjahaja-purnama/">Basuki Tjahaja Purnama</a></strong></strong>yang mengaku bakal bertarung melalui jalur independen.</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Nama Wali Kota&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://www.merdeka.com/tag/s/surabaya/">Surabaya</a></strong>&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/t/tri-rismaharini/">Tri Rismaharini</a></strong></strong>&nbsp;alias Risma, Wali Kota Bandung&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/r/ridwan-kamil/">Ridwan Kamil</a></strong></strong>, pengusaha&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/s/sandiaga-salahuddin-uno/">Sandiaga Uno</a></strong></strong>, hingga politisi Golkar&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/t/tantowi-yahya/">Tantowi Yahya</a></strong></strong>, diyakini bakal jadi pesaing kuat Ahok. Namun dari nama-nama tersebut, belum ada satupun yang memastikan bakal maju menantang Ahok.</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Tak kalah menarik teka teki sosok pendamping Ahok sebagai calon wakil gubernur yang akan menemaninya bertarung di Pilgub tahun depan. Tentu saja Ahok punya kriteria khusus untuk calon pendampingnya</p>', '2016-01-26', '06:47:29', '06_47_29_2016_01_26_Kriteria_calon_pendamping_Ahok_di_Pilgub_DKI.jpg'),
(11, 1, 'JK sebut Jokowi senang Golkar dukung pemerintah', 'Admin', '<p><span style="font-family: arial; font-size: 15px; line-height: 25px;">Wakil Presiden&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/m/muhammad-jusuf-kalla/">Jusuf Kalla</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;hadir dalam Rapimnas</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/p/partai-golongan-karya/">Partai Golkar</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">, Senin (25/1). JK hanya tertawa saat ditanya para wartawan apakah kehadirannya tersebut sepengetahuan Presiden</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/j/joko-widodo/">Jokowi</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">JK lantas menyatakan, jika urusan politik Presiden&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/j/joko-widodo/">Jokowi</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">&nbsp;pasti mengetahuinya.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Saya kira kalau urusan begini pasti Pak jokowi tahu," kata JK sambil tertawa di JCC,&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://www.merdeka.com/tag/j/jakarta/">Jakarta</a></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Menurutnya, Jokowi pastinya senang melihat&nbsp;</span><strong style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px; outline: none 0px; padding: 0px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://profil.merdeka.com/indonesia/p/partai-golongan-karya/">Partai Golkar</a></strong></strong><span style="font-family: arial; font-size: 15px; line-height: 25px;">kembali bersatu. Apalagi Golkar kini mendukung pemerintahan Jokowi-JK.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Inikan hubungan internal partai, Pak Jokowi pasti akan sangat senang untuk melihat kegiatan parpol yang lebih bersatu dan mendukung pemerintah," katanya.</span></p>', '2016-01-26', '06:48:09', '06_48_09_2016_01_26_JK_sebut_Jokowi_senang_Golkar_dukung_pemerintah.jpg'),
(12, 2, 'Setelah ARRC 2015, Yudhistira menatap MotoGP dengan Honda', 'Admin', '<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Ahmad Yudhistira, pembalap asal Kalimantan yang berhasil membawa harum nama Indonesia di ajang Asia Road Racing Championship (ARRC) 2015 akhirnya berlabuh ke Astra Honda Racing Team.</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Sukses bercokol di posisi ketiga klasemen akhir ARRC 2015 bersama tim Manual Tech KYT Kawasaki ini memutuskan berpindah ke Honda untuk menatap ajang MotoGP.</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">"Terima kasih semuanya perjuangan belum berakhir, 2016 start from today. Welcome to the red colours #team33." ujar Yudhistira lewat akun sosial medianya.</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Namun, tentu saja turun ke ajang balap motor paling bergengsi sedunia ini bukan hal yang mudah. Untuk langkah pertama, kemungkinan Yudhistira bakal turun di ajang FIM CEV 2016 dengan menggunakan motor CBR600RR.</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;"><em style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;">Ahmad Yudhistira pindah ke Astra Honda Racing Team&nbsp;<strong style="border: 0px none; margin: 0px; outline: none 0px; padding: 0px; background: none 0px 0px repeat scroll transparent;"><a style="border: 0px none; margin: 0px; outline: none medium; padding: 0px; color: #2b67a2; text-decoration: none; background: none 0px 0px repeat scroll transparent;" href="http://www.merdeka.com/tag/f/facebook/">Facebook</a></strong>.com/Haji.Ahmad.Yudhistira</em></p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Dengan andil besar Honda di gelaran Moto2 sebagai pemasok tunggal mesin di kelas tersebut, tak sulit bagi Yudhistira untuk berkiprah di Moto2 yang berada di bawah MotoGP. Besar kesempatan pembalap kelahiran Kota Banjarmasin ini untuk bergabung dengan tim Federal Oil Gresini. Dulunya tim ini juga pernah menggunakan pembalap Indonesia seperti Doni Tata dan Rafid Topan.</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Jika berhasil menorehkan prestasi mentereng di kancah Moto2, bukan tak mungkin tiga hingga empat tahun mendatang Yudhistira berhasil menjadi pembalap Indonesia pertama yang tampil di balap MotoGP.</p>\r\n<p>&nbsp;</p>\r\n<p style="font-family: arial; border: 0px none; font-size: 15px; margin: 0px 0px 10px; outline: none 0px; padding: 0px 0px 10px; width: 630px; line-height: 25px; background-image: none; background-attachment: scroll; background-size: initial; background-origin: initial; background-clip: initial; background-position: 0px 0px; background-repeat: repeat;">Terlebih lagi, mulai 2017 Indonesia bakal menjadi salah satu tuan rumah penyelenggaraan MotoGP di tiap musimnya.</p>', '2016-01-26', '06:56:29', '06_49_01_2016_01_26_Setelah_ARRC_2015,_Yudhistira_menatap_MotoGP_dengan_Honda.jpg'),
(13, 2, 'Memphis Depay kembali ke PSV Eindhoven', 'Admin', '<p><span style="font-family: arial; font-size: 15px; line-height: 25px;">Memphis Depay tak diturunkan sepanjang pertandingan ketika Manchester United menghadapi Southampton akhir pekan kemarin. Sehari kemudian, Depay berangkat ke Philips Stadium kandang PSV Eindhoven.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Kedatangan Depay di markas mantan klubnya, menurut Daily Mail, hanya untuk melihat mantan timnya bertanding melawan Twente FC. Selain itu, kunjungan ini juga sebagai kesempatan mengucapkan "Goodbye" kepada fans PSV yang telah mendukungnya selama ia bermain di sana.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Depay menyalami pendukung PSV Eindhoven di Philips Stadium</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Dalam kunjungannya tersebut, PSV sukses menggulung Twente dengan skor 4-2. Berbeda dengan MU yang justru kalah 0-1 dari Soton di kandang sendiri.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Depay sendiri sejak datang ke Old Trafford pada musim panas kemarin dengan harga 25 juta pounds belum memberikan dampak signifikan. Dari 28 pertandingan yang ia jalani, ia baru mengumpulkan lima gol. (dm/shd)</span></p>', '2016-01-26', '06:51:09', '06_51_09_2016_01_26_Memphis_Depay_kembali_ke_PSV_Eindhoven.jpg'),
(14, 1, 'Cerita tragis 2 Brimob tewas dilindas pencuri sawit', 'Admin', '<p><span style="font-family: arial; font-size: 15px; line-height: 25px;">Dua personel anggota Satuan Brimob Polda Sumatera Barat Brigadir Anasril (36) dan Brigadir Nanang Hariansyah (30) gugur dalam tugas. Keduanya tewas dilindas truk Dyna yang dikendarai Bagus Diantoro dan Anda Tandi, pencuri buah kelapa sawit milik PT Sumbar Andalas Kencana (SAK), Minggu (24/1) sekitar pukul 04.00 WIB.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Kabid Humas Polda Sumbar AKBP Syamsi mengatakan, peristiwa tersebut terjadi di Afdeling E6 Lokasi Perkebunan PT SAK Muaro Timpeh Kecamatan Padang Laweh, Kabupaten Dharmasraya.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Awalnya dua anggota Brimob yang memang di-BKO-kan di PT SAK itu hendak mengadang truk yang sudah diduga sebagai pencuri buah kelapa sawit. Namun, ketika itu pelaku malah menabrak kedua anggota," ujar Syamsi.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Kedua anggota Brimob tersebut mendapat tugas pengamanan di PT SAK, karena dapat laporan dari pimpinan kebun PT SAK Timur, Gunardi yang mendapat informasi dari Divisi Manager II Kasman bahwa telah terjadi pencurian buah kelapa sawit di lokasi tuangan kebun Afdeling E.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">Selanjutnya, Gunardi dan Kasman bersama dua orang personel Brimob Padang Panjang Brigadir Anasril dan Brigadir Nanang menuju lokasi dengan menggunakan Mobil Toyota Hilux BA 8841 BG.</span><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><br style="font-family: arial; font-size: 15px; line-height: 25px;" /><span style="font-family: arial; font-size: 15px; line-height: 25px;">"Dalam perjalanan menuju ke TKP dilihat portal Afdeling E telah rusak dan dibuka paksa, beberapa saat kemudian dilihat dua unit truk bak kayu jenis Mitsubishi Canter dan Dina Ryno bermuatan buah kelapa sawit menuju ke arah datangnya Mobil dari PT SAK," kata Syamsi.</span></p>', '2016-01-26', '06:56:10', '06_56_10_2016_01_26_Cerita_tragis_2_Brimob_tewas_dilindas_pencuri_sawit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id_bukutamu` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id_bukutamu`, `full_name`, `email`, `website`, `comment`) VALUES
(9, 'David Naista', 'hello.naistudio@gmail.com', 'http://naistudio.com', 'Sekolah ini sangat menginspirasi kami supaya bisa membuat karya yang lebih baik. sukses buat semuanya');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `mata_pelajaran` varchar(255) DEFAULT NULL,
  `alamat` text,
  `images` varchar(255) DEFAULT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_lengkap`, `nip`, `jenis_kelamin`, `golongan`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `alamat`, `images`, `status`) VALUES
(2, 'Amir Tumiran', '1207310551', 'Laki-laki', 'iv', '', 'Sumberrejo', '1982-01-03', 'Bahasa Inggris', 'Jakarta Selatan', '', 'PNS'),
(3, 'Suyanti Solehah', '1207310552', 'Perempuan', 'iv', '', 'Jakarta', '1880-03-23', 'Kejuruan TKJ', 'Jakarta Selatan no 32', '', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Informatika'),
(3, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Berita'),
(2, 'Olahraga'),
(3, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_lengkap`, `email`, `website`, `isi`) VALUES
(2, 'David Naista', 'davidnaista@mail.com', 'http://davidnaista.com', 'wah websitenya bagus'),
(3, 'David Naista', 'hello.naistudio@gmail.com', 'http://naistudio.com', 'apakah saya bisa mengadakan seminar di sekolah ini?');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_jurusan`, `nama_lengkap`, `nis`, `jenis_kelamin`, `alamat`, `nomor_hp`, `angkatan`, `images`, `status`) VALUES
(11, 1, 'Budiawan Munawarman', '1701', 'Laki-laki', 'Jakarta Barat', '', 2016, '', 'Siswa'),
(12, 1, 'Amin Sutarman', '1702', 'Laki-laki', 'Jakarta Timur', '', 2016, '', 'Siswa'),
(13, 1, 'Mulyanto Hakim', '1703', 'Laki-laki', 'Jakarta Timur', '', 2016, '', 'Siswa'),
(14, 1, 'David Naista', '1601', 'Laki-laki', 'Lampung Timur', '089631531651', 2015, '', 'Alumni'),
(15, 1, 'Sumiyanto Harian', '1602', 'Laki-laki', 'Jakarta Barat', '', 2015, '', 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `tentang` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`tentang`) VALUES
('<p>Sekolah ini berdiri sejak tahun 2016, dengan adanya sekolah ini. di harapkan siswa dapat mempelajari sesuatu yang baru yang tidak diajarkan dimanapun.</p>\r\n<p>Semoga semua siswa sukses kedepannya.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Salam,</p>\r\n<p><strong>Kepala Sekolah</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `no_hp`, `alamat`, `username`, `password`, `images`) VALUES
(1, 'David Naista', 'davidnaista83@gmail.com', '0892342834', 'asdfasdfasfjkshfkl', 'davidnaista', 'e790dbd9e39fccb7e51b64d54839101b', '06_29_38_2016_01_26_David_Naista.jpg'),
(2, 'Administrator', 'admin@mail.com', '', 'Jakarta Barat', 'admin', '21232f297a57a5a743894a0e4a801fc3', '06_31_50_2016_01_26_Administrator.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id_bukutamu`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
