-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 07:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_masyarakat`
--

CREATE TABLE `data_masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `sts` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_masyarakat`
--

INSERT INTO `data_masyarakat` (`nik`, `nama`, `alamat`, `tempat`, `tanggallahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `sts`) VALUES
('3526011809970006', 'Nawawi', 'Jl. Pesareyan Martajasah', 'Bangkalan', '1997-09-18', 'laki-laki', 'islam', 'Mahasiswa', 'menikah'),
('3526011809970007', 'Mohammad Nawawi', 'Jl Pesareyan', 'Bangkalan', '1997-12-09', 'laki-laki', 'islam', 'Mahasiswa', 'belum-menikah'),
('3526011809970008', 'Junaidi', 'Jl. Keleyan', 'Socah', '1990-12-09', 'laki-laki', 'islam', 'Petani', 'menikah'),
('3526011809970009', 'Sitelo0', 'jl buntu', 'buntu', '2010-01-01', 'laki-laki', 'katolik', 'Mahasiswa', 'menikah');

-- --------------------------------------------------------

--
-- Table structure for table `data_rekapitulasi`
--

CREATE TABLE `data_rekapitulasi` (
  `id` int(11) NOT NULL,
  `nama_desa` varchar(128) NOT NULL,
  `pend_l` int(11) NOT NULL,
  `pend_p` int(11) NOT NULL,
  `kep_keluarga` int(11) NOT NULL,
  `pend_kk` int(11) NOT NULL,
  `wajib_ktp_l` int(11) NOT NULL,
  `wajib_ktp_p` int(11) NOT NULL,
  `el_ktp_l` int(11) NOT NULL,
  `el_ktp_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_rekapitulasi`
--

INSERT INTO `data_rekapitulasi` (`id`, `nama_desa`, `pend_l`, `pend_p`, `kep_keluarga`, `pend_kk`, `wajib_ktp_l`, `wajib_ktp_p`, `el_ktp_l`, `el_ktp_p`) VALUES
(1, 'Socah', 3559, 3499, 1970, 2018, 2546, 2638, 2342, 2427),
(5, 'Keleyan', 4358, 4491, 2325, 2395, 3170, 3383, 2911, 3129),
(6, 'Bilaporah', 3609, 3636, 1912, 1940, 2592, 2711, 2169, 2273),
(7, 'Parseh', 5090, 4990, 2555, 2657, 3597, 3602, 2617, 2752),
(8, 'Jaddih', 7139, 7367, 3582, 3770, 5239, 5609, 3623, 4019),
(9, 'Buluh', 2398, 2574, 1314, 1355, 1760, 1956, 1534, 1614),
(10, 'Junganyar', 1799, 1762, 925, 1037, 1274, 1273, 1222, 1209),
(11, 'Dakiring', 1531, 1532, 756, 776, 1081, 1119, 1021, 1032),
(12, 'Petaonan', 2040, 2150, 1038, 1081, 1538, 1638, 1216, 1295),
(13, 'Pernajuh', 585, 595, 301, 321, 424, 444, 387, 432),
(14, 'Sanggraagung', 3831, 3892, 1811, 1894, 2690, 2834, 1996, 2052);

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `subjek` varchar(128) NOT NULL,
  `kritiksaran` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritiksaran`
--

INSERT INTO `kritiksaran` (`id`, `email`, `subjek`, `kritiksaran`, `date_created`) VALUES
(4, 'tikp2.e24m.nawawi@gmail.com', '123123', '123123', 1559487129),
(5, 'setyoawan8@gmail.com', 'Jalan', 'jalan rusak', 1563442429);

-- --------------------------------------------------------

--
-- Table structure for table `lakib_renstra`
--

CREATE TABLE `lakib_renstra` (
  `id` int(11) NOT NULL,
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lakib_renstra`
--

INSERT INTO `lakib_renstra` (`id`, `file`) VALUES
(7, 'RENSTRA_SOCAH_2018-2023d.doc');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `nama`, `link`) VALUES
(5, 'Bilaporah', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31675.96509109275!2d112.71904885100362!3d-7.068387133626528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80435069de0e1%3A0x148671d86b1a714f!2sBilaporah%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559383774635!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(6, 'Buluh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15836.899452991767!2d112.71127567267668!3d-7.099916624710419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd804039ea21de9%3A0xf1750a717120a4c8!2sBuluh%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559383811854!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(7, 'Dakiring', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15837.589189531978!2d112.67928572267343!3d-7.079854124010094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd806ed9f2c4b81%3A0xea3bb412b890be42!2sDakiring%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559383843853!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(8, 'Jaddih', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15837.330875642197!2d112.73175673594461!3d-7.087374368104552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8046ac0041cb5%3A0xfb07fbe3ad42445f!2sJaddih%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559383930249!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(9, 'Junganyar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7918.607178967165!2d112.68788217643416!3d-7.090763929516641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd806bf9b62ca03%3A0xa666f81fc4ac5f05!2sJunganyar%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559383964305!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(10, 'Keleyan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31675.849867357458!2d112.69986990409163!3d-7.070067773199246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8042a5a1a22f5%3A0x8807ecd157453a4e!2sKeleyan%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559383985445!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(11, 'Parseh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31675.017236430776!2d112.74865535101247!3d-7.082200634275516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd804f455f18087%3A0xf406fe4e90e21bd8!2sParseh%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559384013565!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(12, 'Pernajuh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15838.196539359982!2d112.66952017267063!3d-7.062141073393994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd806508dcc6439%3A0x69be0a32bbb6bf10!2sPernajuh%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559384044976!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(13, 'Petaonan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15837.781298861843!2d112.68655372267256!3d-7.074256123815167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8068c6ed6ae5f%3A0x457bb8d3574ade52!2sPetaonan%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559384077734!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(14, 'SanggraAgung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31673.869821387092!2d112.75336730102323!3d-7.098886635062868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd804846e2d8393%3A0x959861baa7f29e4f!2sSanggra+Agung%2C+Socah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559384136693!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(16, 'Socah', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63350.514889160615!2d112.69643382388267!3d-7.078702512878488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8043bd3bd5345%3A0x4027a76e3cd8b90!2sSocah%2C+Bangkalan+Regency%2C+East+Java!5e0!3m2!1sen!2sid!4v1559384154812!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_log`
--

CREATE TABLE `tabel_log` (
  `id` int(11) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_user` varchar(255) NOT NULL,
  `log_tipe` int(11) NOT NULL,
  `log_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_log`
--

INSERT INTO `tabel_log` (`id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(1, '2019-06-03 09:02:17', 'tikp2.e24m.nawawi@gmail.com', 4, 'Menghapus Data Masyarakat'),
(2, '2019-06-03 09:19:53', 'tikp2.e24m.nawawi@gmail.com', 2, 'Menambah data Masyarakat'),
(3, '2019-07-18 11:27:23', 'tikp2.e24m.nawawi@gmail.com', 4, 'Menghapus LakibRenstra'),
(4, '2019-07-18 11:29:35', 'tikp2.e24m.nawawi@gmail.com', 2, 'Menambah File LakibRenstra'),
(5, '2019-07-18 11:33:24', 'tikp2.e24m.nawawi@gmail.com', 4, 'Menghapus LakibRenstra'),
(6, '2019-07-18 11:35:38', 'tikp2.e24m.nawawi@gmail.com', 2, 'Menambah File LakibRenstra'),
(7, '2019-07-18 18:26:48', 'tikp2.e24m.nawawi@gmail.com', 3, 'Mengubah Akses'),
(8, '2019-07-18 18:26:53', 'tikp2.e24m.nawawi@gmail.com', 3, 'Mengubah Akses'),
(9, '2019-07-18 18:48:24', 'tikp2.e24m.nawawi@gmail.com', 4, 'Menghapus LakipRenstra'),
(10, '2019-07-18 18:48:27', 'tikp2.e24m.nawawi@gmail.com', 4, 'Menghapus LakipRenstra'),
(11, '2019-07-18 18:48:29', 'tikp2.e24m.nawawi@gmail.com', 4, 'Menghapus LakipRenstra'),
(12, '2019-07-18 18:49:42', 'tikp2.e24m.nawawi@gmail.com', 2, 'Menambah File LakipRenstra'),
(13, '2019-07-18 18:59:24', 'tikp2.e24m.nawawi@gmail.com', 4, 'Menghapus Data Masyarakat'),
(14, '2019-07-19 16:49:52', 'tikp2.e24m.nawawi@gmail.com', 2, 'Menambah data Masyarakat'),
(15, '2019-07-21 17:27:36', 'tikp2.e24m.nawawi@gmail.com', 2, 'Menambah data Masyarakat'),
(16, '2019-07-22 16:13:27', 'tikp2.e24m.nawawi@gmail.com', 3, 'Mengubah Akses'),
(17, '2019-07-22 16:13:33', 'tikp2.e24m.nawawi@gmail.com', 3, 'Mengubah Akses'),
(18, '2019-07-24 15:42:32', 'socahkecamatan45@gmail.com', 3, 'Mengubah Akses'),
(19, '2019-07-24 17:39:19', 'socahkecamatan45@gmail.com', 3, 'Edit Data Masyarakat'),
(20, '2019-07-24 17:39:36', 'socahkecamatan45@gmail.com', 3, 'Edit Data Masyarakat'),
(21, '2019-07-24 17:41:16', 'socahkecamatan45@gmail.com', 3, 'Edit Data Masyarakat'),
(22, '2019-07-31 14:22:56', 'socahkecamatan45@gmail.com', 3, 'Mengubah Akses'),
(23, '2019-08-02 13:05:28', 'socahkecamatan45@gmail.com', 3, 'Edit Data Rekapitulasi'),
(24, '2019-08-02 13:05:40', 'socahkecamatan45@gmail.com', 3, 'Edit Data Rekapitulasi'),
(25, '2019-08-02 13:11:46', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(26, '2019-08-02 13:11:46', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(27, '2019-08-02 13:11:59', 'socahkecamatan45@gmail.com', 4, 'Menghapus Data Rekapitulasi'),
(28, '2019-08-02 13:12:13', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(29, '2019-08-02 13:12:23', 'socahkecamatan45@gmail.com', 4, 'Menghapus Data Rekapitulasi'),
(30, '2019-08-02 13:12:25', 'socahkecamatan45@gmail.com', 4, 'Menghapus Data Rekapitulasi'),
(31, '2019-08-02 14:45:42', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(32, '2019-08-02 16:25:55', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(33, '2019-08-02 16:27:49', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(34, '2019-08-02 16:30:01', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(35, '2019-08-02 16:32:05', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(36, '2019-08-02 16:33:35', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(37, '2019-08-02 16:35:20', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(38, '2019-08-02 16:38:41', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(39, '2019-08-02 16:40:23', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(40, '2019-08-02 16:41:39', 'socahkecamatan45@gmail.com', 2, 'Menambah data Rekapitulasi'),
(41, '2019-08-02 16:43:02', 'socahkecamatan45@gmail.com', 3, 'Edit Data Rekapitulasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Mohamad Nawawi', 'tikp2.e24m.nawawi@gmail.com', 'orang2.png', '$2y$10$cc/WzPo9KBw.0VqGocy.fuPSbF5vE0xjrEQpbMjTjRoBzadosMrFG', 1, 1, 1552395095),
(4, 'Setyo Awan Prakoso', 'setyoawan8@gmail.com', 'orang1.png', '$2y$10$0TfhXom4/g35ice0E2Xr0Oa.crwsxqKZO5cvDqyXBEFR7OsyeVM2y', 1, 1, 1552559618),
(14, 'Bertha Samahita Kartika', 'tata.ita88@gmail.com', 'default.jpg', '$2y$10$S2bopJ2E7FeAuwZ3VLxeGOz/8FMhQwRVtSWKQoLRmx1zQXkfzZOgu', 2, 1, 1554363798),
(18, 'mohammad nawawi', 'idnawawi2@gmail.com', 'default.jpg', '$2y$10$T30/KKTeHaib6DXN/3dqR.k9xIStWzRB9/2VPj8sbOMc9PTYsn/VO', 2, 0, 1558968198),
(19, 'Awan', 'mesint06@gmail.com', 'default.jpg', '$2y$10$nmANZpRBE020GYiN/NzXxObNaH4kh1XFs0yq0Z3dxCnH0ogLu.EX2', 2, 1, 1561353528),
(20, 'Admin Socah', 'socahkecamatan45@gmail.com', 'default.jpg', '$2y$10$jrYBjCaJ3e4k9YxOiMIESuanqLUDjS6YBTfeIIaImIu/HD0BqftxW', 1, 1, 1563978930),
(21, 'Admin Socah', 'socahkecamatan@gmail.com', 'default.jpg', '$2y$10$4yyY3XQZiGLOFmcFYKfuIu2UAfRhwKtVq9auw5n4YUsFb6lGyuLvW', 1, 1, 1563979778);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(7, 1, 3),
(11, 2, 3),
(12, 1, 2),
(13, 2, 2),
(14, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Data'),
(3, 'User'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit\"', 1),
(4, 4, 'Menu Management', 'menu', 'fas fa-fw fa-folder\"', 1),
(5, 4, 'Submenu Management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 1, 'Data Rekapitulasi', 'admin/datarekapitulasi', 'fas fa-fw fa-users', 1),
(9, 3, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 2, 'Grafik Masyarakat', 'data', 'fas fa-fw fa-chart-pie', 1),
(11, 2, 'Grafik Rekapitulasi', 'data/grafikrekapitulasi', 'fas fa fw fa-chart-pie', 1),
(12, 2, 'Data Masyarakat', 'data/datamasyarakat', 'fas fa-fw fa-users', 1),
(13, 1, 'Input Data Masyarakat', 'admin/inputmasyarakat', 'fas fa-fw fa-keyboard', 1),
(14, 1, 'Data Masyarakat', 'admin/datamasyarakat', 'fas fa-fw fa-users', 1),
(15, 2, 'Map', 'data/map', 'fas fa-fw fa-map-marker-alt', 1),
(16, 1, 'Input Map', 'admin/inputmap', 'far fa-fw fa-keyboard', 1),
(17, 3, 'Kritik/Saran', 'user/kritiksaran', 'fas fa-fw fa-comments', 1),
(18, 2, 'Lakip-Renstra', 'data/lakiprenstra', 'fas fa-fw fa-pencil-ruler', 1),
(19, 1, 'Input Lakip-Renstra', 'admin/inputlakiprenstra', 'fas fa-fw fa-pencil-ruler', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(2, 'tata.ita88@gmail.com', '6TGPVeveYNX+rbiKEDLRJ0Yx8cbgI/dMyiU0SwsITqM=', 1554363798),
(4, 'nawawigaming@gmail.com', 'AC+23qyAeRY9Igwmd8iWYGj5S8AiGpgNVIn4js6ruw4=', 1554369898),
(5, 'idnawawi2@gmail.com', 'DmX5f46sSU90BpNH/5Z9ydAJ5Raaga+ULeoHUU+zizQ=', 1558968198),
(7, 'tikp2.e24m.nawawi@gmail.com', 'vn5qhliZyCD7yuPlMKP4Vd8eIhjEC1ehRxDUHeHZPgQ=', 1561362953),
(8, 'tikp2.e24m.nawawi@gmail.com', 'ZmlKgpQK6BG5gTPF+v2VphR0ySug9Xuf8sK84yHU7/8=', 1563643462),
(9, 'tikp2.e24m.nawawi@gmail.com', 'MDbif/GrWaXDQVzsmHf12A5U7x0pR4uXv+AGlML4ZZE=', 1564145444),
(10, 'tikp2.e24m.nawawi@gmail.com', 'G9e4tsflr2m3nsU5m19roU2o36GYHVbpkujYBd5WtO4=', 1564146634);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_masyarakat`
--
ALTER TABLE `data_masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `data_rekapitulasi`
--
ALTER TABLE `data_rekapitulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lakib_renstra`
--
ALTER TABLE `lakib_renstra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_log`
--
ALTER TABLE `tabel_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_rekapitulasi`
--
ALTER TABLE `data_rekapitulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lakib_renstra`
--
ALTER TABLE `lakib_renstra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
