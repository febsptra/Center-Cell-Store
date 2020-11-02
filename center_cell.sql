-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 01:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `center_cell`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `no_brg` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `kategori_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(40) NOT NULL,
  `hrg_beli` double NOT NULL,
  `hrg_jual` double NOT NULL,
  `laba` double NOT NULL,
  `stok_brg` varchar(3) NOT NULL,
  `keterangan` text NOT NULL,
  `promo` varchar(30) NOT NULL,
  `foto_brg` varchar(70) NOT NULL,
  `bp` varchar(30) NOT NULL,
  `sp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`no_brg`, `nama_supplier`, `kategori_brg`, `nama_brg`, `hrg_beli`, `hrg_jual`, `laba`, `stok_brg`, `keterangan`, `promo`, `foto_brg`, `bp`, `sp`) VALUES
(11, 'Sinar Aksesories', 'Anti Gores', 'Anti Gores Samsung J5 ', 3000, 15000, 12000, '4', 'Glass Smile Premium Quality\r\nKualitas Lem yang sangat nempel\r\nSangat Mudah Dipasang\r\nDilengkapi Dengan Tisu Lap\r\nKualitas Kaca yang sangat Bening\r\nTidak Gampang Pecah\r\nTidak Gampang ke gores\r\nMelindungi Layar Gadget Dari Goresan', '', 'tempred_glass.jpg', '', ''),
(12, 'Sinar Aksesories', 'Anti Gores', 'Antigores Samsung J7 PRO', 3000, 15000, 12000, '0', 'Glass Smile Premium Quality\r\nKualitas Lem yang sangat nempel\r\nSangat Mudah Dipasang\r\nDilengkapi Dengan Tisu Lap\r\nKualitas Kaca yang sangat Bening\r\nTidak Gampang Pecah\r\nTidak Gampang ke gores\r\nMelindungi Layar Gadget Dari Goresan', '', 'tempred_glass1.jpg', '', ''),
(13, 'Sinar Aksesories', 'Anti Gores', 'Anti Gores Oppo F1', 5000, 15000, 10000, '1', 'KELEBIHAN DARI TEMPERED GLASS INI :\r\n\r\nAda harga ada kualitas. Kami jamin temperglass kami sesuai deskripsi di bawah\r\n\r\n*Mudah di pasang\r\nDitaruh aja langsung menempel sendiri. Tidak perlu di tekan tekan keras. Juga TANPA BEKAS LEM ketika dilepas.\r\n\r\n*Ketahanan 9H Hardness\r\nmemiliki tingkat kekerasan layar yang sangat kuat, tahan goresan dan benturan. Lindungi layar LCD berharga dengan temperglass ini. Harga LCD bisa 10-20x lipat harga temperglass.\r\n\r\n*Sensitif\r\nMembuat layar gadget anda sangat nyaman disentuh dan tidak mempengaruhi sensitivitas layar anda sama sekali.\r\n\r\n*Anti-Shattered\r\nTempered Glass pecah, tidak akan menjadi pecahan kaca yang tajam dan berbahaya, hanya retak dan masih menempel dengan potongan yang lain. Segera ganti antigores jika sudah mulai retak.\r\n\r\n*Super Tipis\r\nsangat tipis hanya 0.3mm', '', 'tempred_glass9.jpg', '', ''),
(14, 'Sinar Aksesories', 'Anti Gores', 'Anti Gores Oppo A3s', 3000, 15000, 12000, '1', 'KELEBIHAN DARI TEMPERED GLASS INI :\r\n\r\nAda harga ada kualitas. Kami jamin temperglass kami sesuai deskripsi di bawah\r\n\r\n*Mudah di pasang\r\nDitaruh aja langsung menempel sendiri. Tidak perlu di tekan tekan keras. Juga TANPA BEKAS LEM ketika dilepas.\r\n\r\n*Ketahanan 9H Hardness\r\nmemiliki tingkat kekerasan layar yang sangat kuat, tahan goresan dan benturan. Lindungi layar LCD berharga dengan temperglass ini. Harga LCD bisa 10-20x lipat harga temperglass.\r\n\r\n*Sensitif\r\nMembuat layar gadget anda sangat nyaman disentuh dan tidak mempengaruhi sensitivitas layar anda sama sekali.\r\n\r\n*Anti-Shattered\r\nTempered Glass pecah, tidak akan menjadi pecahan kaca yang tajam dan berbahaya, hanya retak dan masih menempel dengan potongan yang lain. Segera ganti antigores jika sudah mulai retak.\r\n\r\n*Super Tipis\r\nsangat tipis hanya 0.3mm', '', 'tempred_glass3.jpg', '', ''),
(15, 'Sinar Aksesories', 'Anti Gores', 'Anti Gores Oppo F7', 3000, 15000, 12000, '0', 'KELEBIHAN DARI TEMPERED GLASS INI :\r\n\r\nAda harga ada kualitas. Kami jamin temperglass kami sesuai deskripsi di bawah\r\n\r\n*Mudah di pasang\r\nDitaruh aja langsung menempel sendiri. Tidak perlu di tekan tekan keras. Juga TANPA BEKAS LEM ketika dilepas.\r\n\r\n*Ketahanan 9H Hardness\r\nmemiliki tingkat kekerasan layar yang sangat kuat, tahan goresan dan benturan. Lindungi layar LCD berharga dengan temperglass ini. Harga LCD bisa 10-20x lipat harga temperglass.\r\n\r\n*Sensitif\r\nMembuat layar gadget anda sangat nyaman disentuh dan tidak mempengaruhi sensitivitas layar anda sama sekali.\r\n\r\n*Anti-Shattered\r\nTempered Glass pecah, tidak akan menjadi pecahan kaca yang tajam dan berbahaya, hanya retak dan masih menempel dengan potongan yang lain. Segera ganti antigores jika sudah mulai retak.\r\n\r\n*Super Tipis\r\nsangat tipis hanya 0.3mm', '', 'tempred_glass4.jpg', '', ''),
(16, 'Sinar Aksesories', 'Anti Gores', 'Anti Gores VIVO Y91', 3000, 15000, 12000, '0', 'KELEBIHAN DARI TEMPERED GLASS INI :\r\n\r\nAda harga ada kualitas. Kami jamin temperglass kami sesuai deskripsi di bawah\r\n\r\n*Mudah di pasang\r\nDitaruh aja langsung menempel sendiri. Tidak perlu di tekan tekan keras. Juga TANPA BEKAS LEM ketika dilepas.\r\n\r\n*Ketahanan 9H Hardness\r\nmemiliki tingkat kekerasan layar yang sangat kuat, tahan goresan dan benturan. Lindungi layar LCD berharga dengan temperglass ini. Harga LCD bisa 10-20x lipat harga temperglass.\r\n\r\n*Sensitif\r\nMembuat layar gadget anda sangat nyaman disentuh dan tidak mempengaruhi sensitivitas layar anda sama sekali.\r\n\r\n*Anti-Shattered\r\nTempered Glass pecah, tidak akan menjadi pecahan kaca yang tajam dan berbahaya, hanya retak dan masih menempel dengan potongan yang lain. Segera ganti antigores jika sudah mulai retak.\r\n\r\n*Super Tipis\r\nsangat tipis hanya 0.3mm', '', 'tempred_glass5.jpg', '', ''),
(17, 'Sinar Aksesories', 'Anti Gores', 'Anti Gores VIVO V5', 3000, 35000, 32000, '0', 'KELEBIHAN DARI TEMPERED GLASS INI :\r\n\r\nAda harga ada kualitas. Kami jamin temperglass kami sesuai deskripsi di bawah\r\n\r\n*Mudah di pasang\r\nDitaruh aja langsung menempel sendiri. Tidak perlu di tekan tekan keras. Juga TANPA BEKAS LEM ketika dilepas.\r\n\r\n*Ketahanan 9H Hardness\r\nmemiliki tingkat kekerasan layar yang sangat kuat, tahan goresan dan benturan. Lindungi layar LCD berharga dengan temperglass ini. Harga LCD bisa 10-20x lipat harga temperglass.\r\n\r\n*Sensitif\r\nMembuat layar gadget anda sangat nyaman disentuh dan tidak mempengaruhi sensitivitas layar anda sama sekali.\r\n\r\n*Anti-Shattered\r\nTempered Glass pecah, tidak akan menjadi pecahan kaca yang tajam dan berbahaya, hanya retak dan masih menempel dengan potongan yang lain. Segera ganti antigores jika sudah mulai retak.\r\n\r\n*Super Tipis\r\nsangat tipis hanya 0.3mm', '', 'tempred_glass6.jpg', '', ''),
(18, 'Sinar Aksesories', 'Anti Gores', 'Anti Gores Xiaomi Redmi Note 5', 3000, 15000, 12000, '0', 'KELEBIHAN DARI TEMPERED GLASS INI :\r\n\r\nAda harga ada kualitas. Kami jamin temperglass kami sesuai deskripsi di bawah\r\n\r\n*Mudah di pasang\r\nDitaruh aja langsung menempel sendiri. Tidak perlu di tekan tekan keras. Juga TANPA BEKAS LEM ketika dilepas.\r\n\r\n*Ketahanan 9H Hardness\r\nmemiliki tingkat kekerasan layar yang sangat kuat, tahan goresan dan benturan. Lindungi layar LCD berharga dengan temperglass ini. Harga LCD bisa 10-20x lipat harga temperglass.\r\n\r\n*Sensitif\r\nMembuat layar gadget anda sangat nyaman disentuh dan tidak mempengaruhi sensitivitas layar anda sama sekali.\r\n\r\n*Anti-Shattered\r\nTempered Glass pecah, tidak akan menjadi pecahan kaca yang tajam dan berbahaya, hanya retak dan masih menempel dengan potongan yang lain. Segera ganti antigores jika sudah mulai retak.\r\n\r\n*Super Tipis\r\nsangat tipis hanya 0.3mm', '', 'tempred_glass7.jpg', '', ''),
(19, 'Raja Gadget', 'Charger', 'Charger Samsung Universal 5V J1.J2,J3,J5', 12000, 35000, 23000, '0', 'Travel Adapter 15W adalah charger yang kompatibel dengan semua HP merk Samsung yang menggunakan socket USB Micro 2.0, Dapat digunakan sebagai penganti charger asli bawaan HP anda yang hilang atau rusak. Kapasitas 2 Ampere yang bisa mengisi baterai HP anda lebih cepat dan efisien. Dibuat dengan komponen terbaik sehingga aman untuk smartphone anda.\r\n\r\nKualitas KW Grade A.\r\n\r\nSpesifikasi:\r\nINPUT : AC 110-240V 0,5A\r\nOUTPUT : DC 5V 2A\r\n\r\nKelengkapan : Adaptor dan Kabel\r\n\r\nWarna: PUTIH', '', 's8.jpg', '', ''),
(20, 'Raja Gadget', 'Charger', 'Charger Samsung S10plus Fast Charging Ti', 15000, 45000, 30000, '10', 'charger samsung S10+ support fast charging tipe C warna hitam', '', 'batch-upload_57df1456-9407-4181-9fac-d3ed2682540c.jpeg', '', ''),
(21, 'Raja Gadget', 'Charger', 'Charger Samsung Galaxy Note 10 Plus ORIG', 15000, 45000, 30000, '1', '- Merek : Original Samsung RESMI SEIN\r\n- Model : EP-TA800\r\n- Serial Number : GH44-03055A\r\n- Input : 100-240 V Frekuensi 50-60Hz 0.7A\r\n- Output : 5V-3A /9V-2.77A\r\n11V-2.25A (25 WAT)\r\n- Data Cable Cepat USB-C Ke Tipe-C\r\n- Support SAMSUNG FAST CHARGING / SUPER CHARGER\r\n- KOMPATIBLE : SAMSUNG A70 , SAMSUNG A80 , SAMSUNG NOTE 10 DAN SAMSUNG USB TYPE C LAINYA', '', '774632506_fbb72d9b-262e-4f05-96e4-03828e99c3ee_2048_2048.jpg', '0', '0'),
(22, 'Raja Gadget', 'Charger', 'Charger OPPO VOOC Original 2A Super Fast', 17000, 45000, 28000, '0', 'Spesifikasi:\r\n\r\n- AK779GB\r\n\r\n- Input : 100-240V~50/60Hz , 0.6A\r\n\r\n- Output : 5V / 4A ( real 2A)\r\n\r\n- VOOC Flash Charge ( Pengisian Super Cepat )\r\n\r\n- Pack : Original\r\n\r\n- Cable : Micro 7pin\r\n', '', '1551148_8cfa5954-ffb8-44ee-b910-941eb5c56a4e_1080_1080.jpg', '', ''),
(23, 'Raja Gadget', 'Charger', 'Charger VIVO S1 Fast Charging Original', 17000, 45000, 28000, '0', 'Spesifikasi :\r\n* Input : 100-240VAC , 50/60Hz , 0.5A\r\n* Output : 5V / 2000mA', '', 'batch-upload_480b29f8-bfa0-4746-8600-7fa5152a97ae.png', '', ''),
(24, 'Raja Gadget', 'Charger', 'Charger ces xiomi fast charging 3A micro', 15000, 45000, 30000, '2', 'Charger xiomi fast charging 3A kabel micro', '', 'batch-upload_0b056baa-a694-4f32-a9c6-b1373684d0c6.jpg', '0', '0'),
(25, 'AP AKSESORIS HP', 'Case', 'CAFELE Case Samsung S9 S9 Plus - Luxury ', 10000, 15000, 5000, '1', 'Deskipsi CAFELE Case Samsung S9 S9 Plus - Luxury Fashion Transparent TPU :\r\n- Bahan terbuat dari TPU premium sehingga tidak mudah longgar atau sobek\r\n- Bagian belakang berwarna TRANSPARANT BENING dengan kombinasi warna metalic pada bagian pinggir case\r\n- Bahan Jelly transparent tidak mudah berubah menjadi kuning ataupun kusam\r\n- Melindungi kamera hp kesayangan anda karena pada bagian kamera sudah lebih tinggi 0,3mm dari casingnya.\r\n- Menutupi sempurna bagian samping dan belakang\r\n- Mudah untuk dipasang dan dilepaskan\r\n- Menunjukan warna asli dari handphone anda\r\n- List warna pada bagian pinggir casing membuat Samsung Note 8 anda terlihat lebih elegan dan mewah\r\n- Melindungi handphone kesayangan anda dari benturan maupun goresan\r\n- Tidak licin pada saat digenggam\r\n\r\n- CASE ORIGINAL CAFELE 100%\r\n- Pengiriman selalu menggunakan EXTRA Bubble Wrap [FREE]\r\n\r\nWARNA READY STOCK :\r\n- BLACK\r\n- BLUE\r\n- RED\r\n- ROSE GOLD\r\n- SILVER\r\n- GOLD\r\n- PURPLE (NEW COLOR) >> s9 plus kosong', '', '26874603_5e3b6842-8a8a-4f59-b49b-de1b9fc786db_1604_1722.jpg', '0', '0'),
(26, 'AP AKSESORIS HP', 'Case', 'SAMSUNG S10 PLUS Case Dove Transparan Sl', 10000, 15000, 5000, '5', 'Casing Premium Bagian Belakang Dove Black Transparan , Kelebihan :\r\n- Bagian belakang dove black\r\n- Bagian belakang transparan tampil elegant\r\n- Penuh warna glosy di List sekelilingnya\r\n- Slim dan pas di gengam di tangan\r\n- Anti lecet karena menggunakan Kualitas bahan terbaik\r\n- Lepas pasang sangat mudah , tidak keras / kasar.', '', '3948159_c8c489ce-34b0-496d-bc39-c03151d27c24_1114_1114.jpg', '0', '0'),
(27, 'Arto moro cell', 'Case', 'Case OPPO A3S Autofocus Invisible Iring ', 7000, 13000, 6000, '1', '1. Soft case dengan bahan TPU kualitas tinggi , untuk melindungi handphone mu dari goresan, air, kotoran, maupun bekas sidik jadi, sangat nyaman digenggam dan kamu tidak perlu khawatir akan licin\r\n\r\n2. Desain baru dengan invisible iring! Iring ini tidak seperti iring yang biasa, setelah ditutup iring ini sangat flat, tidak akan mengganggu karena rata dengan casing.\r\n\r\n3. Tombal on/off dan volume tertutup, 100% terlindungi.\r\n\r\n4. Lokasi tombal sangat akurat, 100% pas dengan handphone mu\r\n\r\n5. Ketebalan pas untuk kebanyakan orang, cukup melindungi hpmu dan juga tidak terlalu tebal ^^\r\n\r\n6. Terdapat jalur udara di dalam case sehingga tidak membuat smartphone kamu cepat panas', '', '15895998_120f2734-d5ce-43cc-8112-c826f3eb240a_569_569.jpg', '0', '0'),
(28, 'Arto moro cell', 'Case', 'Mirror anticrack case oppo  kaca - SILVE', 7000, 15000, 8000, '2', 'SEMUA CASE DILAPISI PLASTIK ANTILECET DAN HARUS DIBUKA SEBELUM DIGUNAKAN\r\n.\r\nBahan jelly tebal tidak seperti toko-toko sebelah yang tipis!\r\n.\r\nPilihan warna: -SILVER\r\n-ROSEGOLD', '', '375037_8910e71a-e19c-4be0-b930-a9d1d75a58fb_1080_1080.jpg', '', ''),
(29, 'Raja Gadget', 'Case', 'Smartfish Casing Soft Case Lucu Elmo Mil', 11000, 35000, 24000, '3', '1?Factory Outlet\r\n2?High Quality And 100% Brand New Phone Case\r\n3?Perfect Fit For Your Phone\r\n4?Effectively Prevent Dust And Your Screen,Scratches,Shockproof\r\n', '', '49022238_e2cb6f66-e955-4d0f-8af4-c830842df18e_850_850.jpg', '', ''),
(30, 'Arto moro cell', 'Case', 'Softcase Xiaomi clear premium shining ch', 7000, 15000, 8000, '3', 'Jelly TPU bagian dalam memiliki dot dot kecil\r\nCase tipis dan slim\r\nTidak menimbulkan kesan bulky\r\nSoft Jelly nyaman dalam genggaman tidak licin\r\nPasti Pas\r\nAnti scratch dan anti debu mudah dibersihkan\r\nMelindungi kaca kamera krn lubang case dibagian belakang lebih tinggi dr kamera..\r\n\r\nBahan :\r\n- lembut dan nyaman digenggam\r\n- aman untuk boddy hp\r\n- bahan lentur dan soft\r\n', '', '69962437_d780dae7-68ec-452f-a380-9168eaf13952_766_766.jpg', '', ''),
(31, 'Davinci Elektronik', 'Headset', 'HEADSET PHILIPS MAGNET AT-036', 35000, 50000, 15000, '6', 'Spesifikasi Produk :\r\n*PANJANG KABEL : 1 m\r\n*Impedance : 32 ohms\r\n*Sensitivity (1kHz) : 94dB SPL/mW\r\n*Frequency response : 20Hz-20kHz\r\n*Interface : 3.5mm Jack\r\n', '', '22330998_8b5251a5-8fe2-4ae6-8412-78b003c4b947_1000_1000.jpg', '', ''),
(32, 'Davinci Elektronik', 'Headset', 'HEADSET EARPHONE EXTRA BASS ORI', 15000, 25000, 10000, '8', 'HE 07 di design untuk anda yang menyukai music dengan extra Bass,\r\ndesign yang unik dan bergaya fun serta Rock , memberikan sebuah style untuk pemakaian sehari-hari.\r\n\r\ndengan tombol pick up, untuk mengangkat telepon dan menutup .\r\n\r\ntwo tone colour, kombinasi 2 warna\r\nkaret peredam ,untuk meredam suara music di dalam telinga, sehingga memberikan kepuasan dalam mendengar kan music serta merasakan Bass.\r\n\r\n3.5 mm jack cocok untuk semua jenis smartphone yang tersedia earphone jack , ipod and computer.\r\n\r\nmicrophone, memudahkan anda untuk melakukan panggilan dengan HE 07\r\ntanpa harus melepaskan handsfree.\r\nAyo diorder sekarang, di jamin Original.', '', '52722681_e89caabc-2f28-4bb9-860d-907d009a1369_1242_1242.jpg', '3', '3'),
(33, 'Davinci Elektronik', 'Headset', 'headphone sony extra bass mdr-xb450ap ha', 20000, 35000, 15000, '3', 'Satuan 30mm Dinamis\r\nFrequency Response 5Hz-22,000Hz\r\nSensitivitas 102 dB / mW\r\nImpedansi (pada 1 kHz) 24\r\nKabel 1.2m Litz Wire, Y-Type\r\nPlug L berbentuk berlapis emas Empat-konduktor Stereo Mini\r\nApprox. Berat (tidak termasuk kabel.) 165g\r\n\r\nMikropon\r\nUnit / Jenis Listrik Kondensor\r\nDirectivity Omni Direction\r\nTingkat terbuka sirkuit tegangan 40dB (0dB = 1V / Pa)\r\nFrekuensi efektif Mikrofon 20Hz-20,000', '', '1858209_334d6aaa-8c0c-40c6-a344-ffa7ef9c5e74.jpg', '2', '2'),
(34, 'Davinci Elektronik', 'Headset', 'INBEX Earphone In-Ear Earbud Headphone D', 15000, 35000, 20000, '14', 'Fitur:\r\nHeadphone earbud ultra-lembut Ergo Fit ultra-lembut sesuai langsung dengan telinga Anda\r\n\r\nRespons frekuensi yang lebih luas untuk kenikmatan mendengarkan yang lebih lengkap\r\n\r\nKabel 1m yang panjang nyaman pada pakaian dan tas\r\n\r\nRespon Frekuensi - 5 - 24.000 Hz dan Impedansi - 16 ohm\r\n\r\nSpesifikasi:\r\nWarna: putih\r\nBahan: TPE + ABS + magnet\r\nPanjang: 1m\r\nJenis: In-ear berkabel 3.5mm, termasuk mikrofon, tombol putar / jeda', '', '54790226_a9400d0a-9a89-4af9-889b-847d5950942b_800_800.jpg', '0', '0'),
(36, 'Davinci Elektronik', 'Headset', 'dbE GM180 7.1 Virtual Surround Gaming 2', 36000, 60000, 24000, '18', 'Menggunakan jack USB, GM180 dapat digunakan ke :\r\n- Smartphone dengan USB OTG.. Type C ke 3.5mm tidak dapat digunakan ke headphone ini\r\n- Laptop\r\n- PC\r\n\r\nSpesifikasi :\r\nHeadphone Driver : 50mm\r\nImpedance : 32 Ohm +- 5%\r\nFreq Response : 20 - 20 kHz\r\nSensitivity : 112 dB +- 3 dB\r\nCable Length : 220 cm\r\nJack Plug USB\r\nMic Impedance : 2.2 k Ohm', '', '25376801_950a8fa7-6e20-4db9-b377-91532d86bc1a_700_700.jpg', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `barang_rusak`
--

CREATE TABLE `barang_rusak` (
  `no` int(11) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp(),
  `kategori_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(40) NOT NULL,
  `harga_beli` varchar(8) NOT NULL,
  `jumlah_rusak` varchar(3) NOT NULL,
  `total_harga` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_rusak`
--

INSERT INTO `barang_rusak` (`no`, `tgl`, `kategori_brg`, `nama_brg`, `harga_beli`, `jumlah_rusak`, `total_harga`) VALUES
(1, '2020-07-02 18:05:51', 'Anti Gores', 'Anti Gores J1', '36500', '5', '400000'),
(3, '2020-07-02 18:19:03', 'Headset', 'dbE GM180 7.1 Virtual Surround Gaming 2', '35000', '3', '105000');

--
-- Triggers `barang_rusak`
--
DELIMITER $$
CREATE TRIGGER `barang_rusak` BEFORE INSERT ON `barang_rusak` FOR EACH ROW BEGIN
UPDATE barang SET 
stok_brg = stok_brg-NEW.jumlah_rusak
WHERE nama_brg = NEW.nama_brg;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_rusak` AFTER DELETE ON `barang_rusak` FOR EACH ROW BEGIN 
UPDATE barang
 SET 
 stok_brg = stok_brg + OLD.jumlah_rusak
 WHERE nama_brg = OLD.nama_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `password`, `nama_toko`, `nama_pemilik`, `alamat`, `kota`, `email`, `no_hp`, `foto`) VALUES
(1, 'cust01', 'cust01', 'Jaya Phone Cell', 'Jaya Makmur', 'Jl. Belitung Darat, Kuin Cerucuk, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70128', 'Banjarbaru', 'cust01@gmail.com', '081351665225', 'cust01.jpg'),
(2, 'cust02', 'cust02', 'Pribadi Cell', 'Abdi Pribadi', 'Jl.Ayani km.05 rt.66 no.14 ', 'Banjarmasin', 'cust02@gmail.com', '081351559998', 'cust02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp(),
  `username` varchar(30) NOT NULL,
  `nama_brg` text NOT NULL,
  `hrg_jual` varchar(8) NOT NULL,
  `laba` varchar(8) NOT NULL,
  `jumlah_jual` varchar(3) NOT NULL,
  `total_harga` varchar(8) NOT NULL,
  `total_laba` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_transaksi`, `kode_transaksi`, `tgl`, `username`, `nama_brg`, `hrg_jual`, `laba`, `jumlah_jual`, `total_harga`, `total_laba`) VALUES
(150, 'TRS-693802', '2020-07-02 16:49:04', 'cust01', 'HEADSET EARPHONE EXTRA BASS ORI', '25000', '10000', '1', '25000', '10000'),
(151, 'TRS-693802', '2020-07-02 16:49:04', 'cust01', 'headphone sony extra bass mdr-xb450ap ha', '35000', '15000', '1', '35000', '15000'),
(152, 'TRS-481629', '2020-07-02 16:49:04', 'cust01', 'headphone sony extra bass mdr-xb450ap ha', '35000', '15000', '1', '35000', '15000'),
(153, 'TRS-481629', '2020-07-02 16:49:04', 'cust01', 'HEADSET EARPHONE EXTRA BASS ORI', '25000', '10000', '1', '25000', '10000'),
(154, 'TRS-163870', '2020-07-02 16:51:46', '', 'HEADSET EARPHONE EXTRA BASS ORI', '25000', '10000', '1', '25000', '10000');

--
-- Triggers `detail_penjualan`
--
DELIMITER $$
CREATE TRIGGER `delete_penjualan` AFTER DELETE ON `detail_penjualan` FOR EACH ROW BEGIN 
UPDATE barang
 SET 
 stok_brg = stok_brg + OLD.jumlah_jual,
 bp = bp - OLD.jumlah_jual,
 sp = sp - 1
 WHERE nama_brg = OLD.nama_brg;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penjualan_barang` BEFORE INSERT ON `detail_penjualan` FOR EACH ROW BEGIN
UPDATE barang SET 
stok_brg = stok_brg-NEW.jumlah_jual, 
bp = bp+NEW.jumlah_jual,
sp = sp+1
WHERE nama_brg = NEW.nama_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `no` int(3) NOT NULL,
  `id_pegawai` varchar(15) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `foto` text NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`no`, `id_pegawai`, `password`, `nama_lengkap`, `alamat`, `email`, `no_hp`, `foto`, `jabatan`) VALUES
(0, 'pgw02', 'pgw02', 'Pegawai Dua', 'Jl. Ayani Komp.Banjar indah No.145', 'pgw02@app.com', '081523665545', 'pgw02.png', 'Gudang'),
(4, 'pgw01', 'pgw01', 'Pegawai Satu1', 'l. Mangga Dua Raya No.11, RT.11/RW.5, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14430', 'user@app.com', '081523665533', 'pgw01.png', 'Admin'),
(5, 'pgw03', 'pegawai03', 'Pegawai Tig4', 'l. Mangga Dua Raya No.11, RT.11/RW.5, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14430', 'pegawai03@gmail.com', '081523665533', 'pgw03.png', 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `kode_pembelian` varchar(10) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `kategori_brg` varchar(30) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `no_brg` varchar(8) NOT NULL,
  `hrg_beli` varchar(9) NOT NULL,
  `jumlah_beli` varchar(6) NOT NULL,
  `total_harga` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`kode_pembelian`, `tgl_pembelian`, `nama_supplier`, `kategori_brg`, `nama_brg`, `no_brg`, `hrg_beli`, `jumlah_beli`, `total_harga`) VALUES
('PMB0001', '2020-05-22', 'Davinci Elektronik', 'Headset', 'dbE GM180 7.1 Virtual Surround Gaming He', '36', '35000', '10', '350000'),
('PMB0002', '2020-05-22', 'Davinci Elektronik', 'Headset', 'Sennheiser HD 206 / HD206 / HD-206 Headp', '35', '35000', '5', '175000'),
('PMB0003', '2020-05-23', 'Davinci Elektronik', 'Headset', 'Sennheiser HD 206 / HD206 / HD-206 Headp', '35', '35000', '3', '105000'),
('PMB0004', '2020-05-27', 'Sinar Aksesories', 'Anti Gores', 'Anti Gores Samsung J5 ', '11', '3000', '4', '12000'),
('PMB0005', '2020-05-27', 'Raja Gadget', 'Case', 'Smartfish Casing Soft Case Lucu Elmo Mil', '29', '11000', '3', '33000'),
('PMB0006', '2020-05-27', 'Arto moro cell', 'Case', 'Softcase Xiaomi clear premium shining ch', '30', '7000', '3', '21000'),
('PMB0008', '2020-06-04', 'Davinci Elektronik', 'Headset', 'dbE GM180 7.1 Virtual Surround Gaming He', '36', '35000', '5', '175000'),
('PMB0009', '2020-06-04', 'Pusat Accessories JK', 'Lainya', 'Batrai Samsung J5 ', '38', '15000', '2', '30000'),
('PMB0011', '2020-06-07', 'Davinci Elektronik', 'Headset', 'HEADSET PHILIPS MAGNET AT-036', '31', '35000', '5', '175000'),
('PMB0012', '2020-06-09', 'Davinci Elektronik', 'Headset', 'HEADSET EARPHONE EXTRA BASS ORI', '32', '15000', '10', '150000'),
('PMB0013', '2020-06-10', 'Davinci Elektronik', 'Headset', 'INBEX Earphone In-Ear Earbud Headphone D', '34', '15000', '10', '150000'),
('PMB0014', '2020-06-15', 'Davinci Elektronik', 'Headset', 'headphone sony extra bass mdr-xb450ap ha', '33', '20000', '3', '60000'),
('PMB0015', '2020-06-15', 'Arto moro cell', 'Case', 'Mirror anticrack case oppo  kaca - SILVE', '28', '7000', '2', '14000'),
('PMB0016', '2020-06-15', 'Davinci Elektronik', 'Headset', 'headphone sony extra bass mdr-xb450ap ha', '33', '20000', '2', '40000'),
('PMB0017', '2020-07-03', 'Raja Gadget', 'Charger', 'Charger Samsung S10plus Fast Charging Ti', '20', '15000', '10', '150000');

--
-- Triggers `pembelian`
--
DELIMITER $$
CREATE TRIGGER `delete_pembelian` AFTER DELETE ON `pembelian` FOR EACH ROW BEGIN 
UPDATE barang
 SET stok_brg = stok_brg - OLD.jumlah_beli
 WHERE no_brg = OLD.no_brg;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pembelian_barang` AFTER INSERT ON `pembelian` FOR EACH ROW BEGIN
     UPDATE barang
	 SET stok_brg = stok_brg + NEW.jumlah_beli
     WHERE no_brg = NEW.no_brg;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_pembelian` BEFORE UPDATE ON `pembelian` FOR EACH ROW BEGIN
     UPDATE barang SET stok_brg = stok_brg - (OLD.jumlah_beli - NEW.jumlah_beli)
     WHERE no_brg = NEW.no_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no` int(11) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `jumlah_pembayaran` varchar(10) NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no`, `kode_transaksi`, `username`, `nama_toko`, `alamat`, `kota`, `no_hp`, `tgl_transaksi`, `jumlah_pembayaran`, `status_pembayaran`) VALUES
(25, 'TRS-163870', 'cust01', 'Jaya Phone Cell', 'l. Mangga Dua Raya No.11, RT.11/RW.5, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14430', 'Banjarbaru', '081523665533', '2020-07-02 16:51:46', '25000', 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_dibayar`
--

CREATE TABLE `penjualan_dibayar` (
  `no` int(11) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah_pembayaran` varchar(8) NOT NULL,
  `an` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan_dibayar`
--

INSERT INTO `penjualan_dibayar` (`no`, `kode_transaksi`, `username`, `nama_toko`, `alamat`, `kota`, `no_hp`, `tgl_pembayaran`, `jumlah_pembayaran`, `an`, `metode_pembayaran`, `foto`, `status_pembayaran`) VALUES
(25, 'TRS-156207', 'cust01', 'Jaya Phone Cell', 'Jl. Belitung Darat, Kuin Cerucuk, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70128', 'Banjarbaru', '081351665225', '2020-07-02', '75000', 'Jaya Wijaya', 'BRI Transfer', 'TRS-156207.JPG', 'Lunas'),
(26, 'TRS-930518', 'cust01', 'Jaya Phone Cell', 'Jl. Belitung Darat, Kuin Cerucuk, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70128', 'Banjarbaru', '081351665225', '2020-07-02', '370000', 'Jaya Wijaya', 'Pilih Metode', 'TRS-930518.JPG', 'Lunas'),
(29, 'TRS-693802', 'cust01', 'Jaya Phone Cell', 'Jl. Belitung Darat, Kuin Cerucuk, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70128', 'Banjarbaru', '081351665225', '2020-07-02', '60000', 'Jaya Wijaya', 'BRI Transfer', 'TRS-693802.jpg', 'Menunggu Diferivikasi'),
(30, 'TRS-481629', 'cust01', 'Jaya Phone Cell', 'Jl. Belitung Darat, Kuin Cerucuk, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70128', 'Banjarbaru', '081351665225', '2020-07-02', '60000', 'Jaya Wijaya', 'BRI Transfer', 'TRS-481629.jpg', 'Menunggu Diferivikasi');

-- --------------------------------------------------------

--
-- Table structure for table `retur_barang`
--

CREATE TABLE `retur_barang` (
  `no` int(11) NOT NULL,
  `id_customer` varchar(15) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tgl_retur` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_brg` varchar(40) NOT NULL,
  `jumlah_brg` varchar(4) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retur_barang`
--

INSERT INTO `retur_barang` (`no`, `id_customer`, `nama_toko`, `alamat`, `no_hp`, `tgl_retur`, `nama_brg`, `jumlah_brg`, `status`) VALUES
(5, '1', 'Jaya Phone Cell', 'Jl. Belitung Darat, Kuin Cerucuk, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70128', '081351665225', '2020-07-02 16:19:53', 'HEADSET EARPHONE EXTRA BASS ORI', '4', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `no` int(11) NOT NULL,
  `kode_supplier` varchar(18) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`no`, `kode_supplier`, `nama_supplier`, `alamat`, `no_hp`) VALUES
(1, 'suppjkt01', 'Sinar Aksesories', 'Jl. Tebah III No.14, RT.14/RW.3, Gunung, Kec. Kby.', '081351559998'),
(3, 'suppjkt2', 'Raja Gadget', 'Jl. Mangga Dua Raya No.11, RT.11/RW.5, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', '081523665444'),
(4, 'suppjkt3', 'Arto moro cell', 'Jl. Mangga Dua Raya No.11, RT.11/RW.5, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', '081351551212'),
(5, 'suppjkt04', 'AP AKSESORIS HP', 'Jl. Petir Utama No.8, RT.011/RW.003, Duri Kosambi, Kec. Cipondoh, Kota Jakarta Barat, Banten 15147', '081351550404'),
(6, 'suppjkt05', 'Davinci Elektronik', 'Jl. Petir Utama No.50, RT.010/RW.003, Duri Kosambi, Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11750', '089823665555'),
(7, 'SUPP-07352', 'Pusat Accessories JKT', 'Jl. Casablanca No.11, RT.11/RW.5, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta', '081523665778');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no_brg`);

--
-- Indexes for table `barang_rusak`
--
ALTER TABLE `barang_rusak`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `no` (`id_customer`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD UNIQUE KEY `kode_pembelian` (`kode_pembelian`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `penjualan_dibayar`
--
ALTER TABLE `penjualan_dibayar`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `retur_barang`
--
ALTER TABLE `retur_barang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `no_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `barang_rusak`
--
ALTER TABLE `barang_rusak`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `penjualan_dibayar`
--
ALTER TABLE `penjualan_dibayar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `retur_barang`
--
ALTER TABLE `retur_barang`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
