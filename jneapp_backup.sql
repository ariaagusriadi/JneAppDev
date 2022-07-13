-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2022 at 05:42 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jneapp_backup`
--

-- --------------------------------------------------------

--
-- Table structure for table `jneadmin__module`
--

CREATE TABLE `jneadmin__module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jneadmin__module`
--

INSERT INTO `jneadmin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `url`, `created_at`, `updated_at`) VALUES
('968e0aa2-032d-40ef-beaa-d70a25c7df3b', 'JneAdmin', 'JneAdmin-admin', 'JneAdmin', 'JneAdmin', 'Admin', '#3ec70b', 'jne/admin', '2022-06-16 08:40:33', '2022-06-16 01:40:33'),
('968e97e3-3d86-47a5-b536-b3bdd1340167', 'JneSurat', 'JneSurat-unit', 'JneSurat-Unit', 'JneSurat', 'Unit', '#37e2d5', 'jnesurat/unit', '2022-06-16 08:02:57', '2022-06-16 08:02:57'),
('9691c9c2-8237-44bb-bd7e-987def102d22', 'JneSurat', 'JneSurat-tatausaha', 'JneSurat-TataUsaha', 'JneSurat', 'Tata usaha', '#413f42', 'JneSurat/tatausaha', '2022-06-17 22:09:54', '2022-06-17 22:09:54'),
('9692181b-491f-4cbf-9327-46a62ed5052e', 'JneSurat', 'JneSurat-ceo', 'JneSurat-Ceo', 'JneSurat', 'Ceo', '#990000', 'JneSurat/ceo', '2022-06-18 01:48:58', '2022-06-18 01:48:58'),
('9696e4c5-9e7a-4dd6-bfa4-0ed7723425ed', 'JneMail', 'JneMail-unit', 'JneMail-unit', 'JneMail', 'Unit', '#f15412', 'JneMail/unit', '2022-06-20 11:04:34', '2022-06-20 11:04:34'),
('9696f39a-4410-4824-9cf7-feaa2c8bc55f', 'JneMail', 'JneMail-tatausaha', 'JneMail-tatausaha', 'JneMail', 'tata usaha', '#ff06b7', 'JneMail/tatausaha', '2022-06-20 11:46:02', '2022-06-20 11:46:02'),
('9698ed52-af3d-48e8-89f9-3b4941a913b7', 'JneMail', 'JneMail-Jr-SuperVisior-Devisi-Operasional', 'JneMail-Jr-SuperVisior-Devisi-Operasional', 'JneMail', 'Jr-SuperVisior-Devisi-Operasional', '#f8b400', 'JneMail/Jr-SuperVisior-Devisi-Operasional', '2022-06-21 11:20:08', '2022-06-21 11:20:08'),
('9699e644-36d6-4bde-9378-036be71d8f76', 'JneMail', 'JneMail-Jr-SuperVisior-Devisi-Keuangan', 'JneMail-Jr-SuperVisior-Devisi-Keuangan', 'JneMail', 'Jr-SuperVisior-Devisi-Keuangan', '#809a6f', 'JneMail/Jr-SuperVisior-Devisi-Keuangan', '2022-06-22 08:17:53', '2022-06-22 01:17:53'),
('9699f51f-ff39-4d88-9694-1c1d912f2b48', 'JneMail', 'JneMail-kepalacabang', 'JneMail-kepalacabang', 'JneMail', 'kepalacabang', '#15133c', 'JneMail/kepalacabang', '2022-06-21 23:37:46', '2022-06-21 23:37:46'),
('969a06d0-27f7-413b-bca4-4d15e6f81872', 'JneMail', 'JneMail-custumerservice', 'JneMail-custumerservice', 'JneMail', 'custumerservice', '#ff5757', 'JneMail/custumerservice', '2022-06-22 00:27:14', '2022-06-22 00:27:14'),
('969ce399-9fa6-4635-b6d9-8830eb9eccb8', 'JneQr', 'Jne-Qr', 'JneQr', 'JneQr', 'tanda tangan digital', '#47b5ff', 'jneqr/new-qr', '2022-06-23 17:37:53', '2022-06-23 10:37:53'),
('969eb828-91d4-4062-bd9b-19b935f32049', 'JnePegawai', 'Jne-pegawai', 'JnePegawai', 'JnePegawai', 'Pegawai', '#87805e', 'jne/pegawai', '2022-06-24 08:26:26', '2022-06-24 08:26:26'),
('96a2c2a5-d116-49a8-8662-dc0c52be6631', 'JneArchives', 'JneArchives-tatausaha', 'JneArchives-tatausaha', 'JneArchives', 'tata usaha', '#a10035', 'JneArchives/tatausaha', '2022-06-26 08:39:05', '2022-06-26 08:39:05'),
('96a2e2c4-fe84-42dd-8c58-45a77be5e0ce', 'JneArchives', 'JneArchives-pegawai', 'JneArchives-pegawai', 'JneArchives', 'Pegawai', '#003b03', 'JneArchives/pegawai', '2022-06-26 10:08:54', '2022-06-26 10:08:54'),
('96a4b668-2702-4305-9f23-381732351adf', 'JneLembur', 'JneLembur-kordinator-bidang', 'JneLembur-kordinator-bidang', 'JneLembur', 'kordinator-bidang', '#7746f9', 'JneLembur/kordinator-bidang', '2022-06-27 15:19:31', '2022-06-27 08:19:31'),
('96a61f7e-880c-48d4-a28f-1d91814a1d61', 'JneLembur', 'JneLembur-junior-supervisor', 'JneLembur-junior-supervisor', 'JneLembur', 'junior supervisor', '#541212', 'JneLembur/junior-supervisor', '2022-06-28 00:46:11', '2022-06-28 00:46:11'),
('96a8eda2-914d-4819-8a35-c9e5be76c2a1', 'JneLembur', 'JneLembur-HRD', 'JneLembur-HRD', 'JneLembur', 'HRD', '#77024d', 'jnelembur/hrd', '2022-06-29 17:16:29', '2022-06-29 10:16:29'),
('96b5c5db-d79b-4721-984b-1385756704b0', 'JnePermohonan', 'JnePermohonan-devisi', 'JnePermohonan-devisi', 'JnePermohonan', 'devisi', '#f7ec09', 'JnePermohonan/devisi', '2022-07-05 19:28:47', '2022-07-05 19:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `jneadmin__pegawai`
--

CREATE TABLE `jneadmin__pegawai` (
  `id` char(36) NOT NULL,
  `unitkerja_id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jneadmin__pegawai`
--

INSERT INTO `jneadmin__pegawai` (`id`, `unitkerja_id`, `nama`, `nik`, `email`, `jenis_kelamin`, `foto`, `remember_token`, `password`, `created_at`, `updated_at`) VALUES
('968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '968dd493-b7d7-467f-89a0-438fda4ab7c0', 'aria agus riadi', '1234567812345678', 'ariagames100@gmail.com', 'Laki-Laki', 'JneAdmin/Foto/Pegawai-1655363751-dXvjh.png', 'pfnTpnVnxFj3b08ZS0SXuZYNEaguLFzZXTvHeRmIYbBQtDNZ0eHC4rMGyM9w', '$2y$10$M0xhrF7LUSryDG3OEV.Vm.JvK5QkLcOPNK0goBSMpzFZF5W2/7jBq', '2022-07-13 05:41:48', '2022-06-16 00:15:51'),
('96c41b85-48da-4336-ba45-8145561fce58', '968dd8cc-916e-468b-b650-460814bf3716', 'DILA', '1234567812345678', 'dila@gmail.com', 'Perempuan', 'JneAdmin/Foto/Pegawai-1657690194-BT8WG.png', '56HXUKjoE1nyUJL0cS18LYXNcnOLmiqZFADrRlx4STw5iNTKoW7XFN7ToOSw', '$2y$10$Lnxfpb.qBw9XnQXEGEnG8.CyU7zcrbhFnWm1hz0z4ktwM8Wk8XLG.', '2022-07-13 05:42:00', '2022-07-12 22:29:55'),
('96c41bc2-b4f6-4787-8d7c-f9b8b8e28191', '968dd8cc-916e-468b-b650-460814bf3716', 'ZAKI KHAIROL IMAN', '1234567812345678', 'ZAKIKHAIROLIMAN@gmail.com', 'Laki-Laki', 'JneAdmin/Foto/Pegawai-1657690235-BEUW9.png', NULL, '$2y$10$YuSZ6nccTDQusUg8kwi7G.ghx9Xb50XZAO1kxJy.gFzLK1UbJ2EP2', '2022-07-13 05:30:35', '2022-07-12 22:30:35'),
('96c41bf8-ecb3-4a87-b309-a4ffb47aeca1', '968dd8cc-916e-468b-b650-460814bf3716', 'FITRI KURNIAWATI', '1234567812345678', 'FITRIKURNIAWATI@gmail.com', 'Perempuan', 'JneAdmin/Foto/Pegawai-1657690270-fwPrP.png', NULL, '$2y$10$oUSzaKIz4ReqOB3LRep7AeEriTH73/Txqt4ntbvAmlpOnMnPf6G2K', '2022-07-13 05:31:10', '2022-07-12 22:31:10'),
('96c41df0-d6b9-4760-b713-ec6b9fc0c19d', '968dd8cc-916e-468b-b650-460814bf3716', 'ANGGUN SAFITRI', '1234567812345678', 'ANGGUNSAFITRI@gmail.com', 'Perempuan', 'JneAdmin/Foto/Pegawai-1657690600-rMwBY.png', NULL, '$2y$10$89W.QjLARn5zwiaDZimtw.Yw2WJ9C.urNxDpCSNjgNuGqqngahb/G', '2022-07-13 05:36:40', '2022-07-12 22:36:40'),
('96c41ea5-d35a-458b-89f3-f39a4ef8c952', '968dd8cc-916e-468b-b650-460814bf3716', 'SYARIFAH PUTRI SEVHIA LISTY', '1234567812345678', 'SYARIFAHPUTRISEVHIALISTY@gmail.com', 'Perempuan', 'JneAdmin/Foto/Pegawai-1657690719-sP0dV.png', NULL, '$2y$10$o2vZn5EzyneonfLpfmE6Cedry9KLp788Nvm1lDNhOUsbYowB37kkG', '2022-07-13 05:38:39', '2022-07-12 22:38:39'),
('96c41ee3-2d96-4b6f-b29e-0475b2500ce0', '968dd8cc-916e-468b-b650-460814bf3716', 'Maulidi Rusla', '1234567812345678', 'MaulidiRusla@gmail.com', 'Perempuan', 'JneAdmin/Foto/Pegawai-1657690759-nHwol.png', NULL, '$2y$10$/aWTwa9b1n6qBEFG8/3Dgut2aUA.x4n1Pd5UyIaK/LQPVmKkvKS8e', '2022-07-13 05:39:19', '2022-07-12 22:39:19'),
('96c41f22-39cd-4803-a7e5-f1f5cc931263', '968dd8cc-916e-468b-b650-460814bf3716', 'DIMAS ARLI PRATAMA', '1234567812345678', 'DIMASARLIPRATAMA@gmail.com', 'Laki-Laki', 'JneAdmin/Foto/Pegawai-1657690800-mnpQP.png', NULL, '$2y$10$bgtlWB5Rpqj0oPhPG5skRORX3RmcSR.K1vVdUf.FPzuj/rLx9PfNO', '2022-07-13 05:40:00', '2022-07-12 22:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `jneadmin__role`
--

CREATE TABLE `jneadmin__role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `id_module` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jneadmin__role`
--

INSERT INTO `jneadmin__role` (`id`, `id_pegawai`, `id_module`, `updated_at`, `created_at`) VALUES
('968e1404-a2fc-4d1c-8f2b-dff719cbdfa4', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '968e0aa2-032d-40ef-beaa-d70a25c7df3b', '2022-06-16 01:54:13', '2022-06-16 01:54:13'),
('968e97ef-15b6-434e-94c8-38e99132a560', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '968e97e3-3d86-47a5-b536-b3bdd1340167', '2022-06-16 08:03:05', '2022-06-16 08:03:05'),
('9691c9cf-c5b6-493f-996f-fbc20044f17a', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '9691c9c2-8237-44bb-bd7e-987def102d22', '2022-06-17 22:10:02', '2022-06-17 22:10:02'),
('9692183b-d8a6-4754-8f9a-1a0c2dd8f59c', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '9692181b-491f-4cbf-9327-46a62ed5052e', '2022-06-18 01:49:19', '2022-06-18 01:49:19'),
('9696e4cf-7252-4207-9895-72f8f6f73b7b', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '9696e4c5-9e7a-4dd6-bfa4-0ed7723425ed', '2022-06-20 11:04:40', '2022-06-20 11:04:40'),
('9696f3a2-df38-42d6-a856-bef81198b9d7', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '9696f39a-4410-4824-9cf7-feaa2c8bc55f', '2022-06-20 11:46:07', '2022-06-20 11:46:07'),
('9698ed5f-107e-4bed-8a38-9c24444709ca', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '9698ed52-af3d-48e8-89f9-3b4941a913b7', '2022-06-21 11:20:16', '2022-06-21 11:20:16'),
('9699e64d-23d6-4530-8e39-1d798614c099', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '9699e644-36d6-4bde-9378-036be71d8f76', '2022-06-21 22:56:19', '2022-06-21 22:56:19'),
('9699f52a-5bd1-4299-8588-bc814e3044de', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '9699f51f-ff39-4d88-9694-1c1d912f2b48', '2022-06-21 23:37:53', '2022-06-21 23:37:53'),
('969a06db-88cb-4657-b16d-6ef6703a1eb2', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '969a06d0-27f7-413b-bca4-4d15e6f81872', '2022-06-22 00:27:21', '2022-06-22 00:27:21'),
('969ce3d8-b4cb-40e9-8a4d-2915c81bcac8', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '969ce399-9fa6-4635-b6d9-8830eb9eccb8', '2022-06-23 10:36:56', '2022-06-23 10:36:56'),
('969eb833-8642-4abc-9b10-2b2651767d74', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-06-24 08:26:33', '2022-06-24 08:26:33'),
('96a2c2b2-1c3d-41a6-af62-86e235720cbc', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96a2c2a5-d116-49a8-8662-dc0c52be6631', '2022-06-26 08:39:13', '2022-06-26 08:39:13'),
('96a2e2e5-76f8-49d0-b10d-3d772e5c9a8b', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96a2e2c4-fe84-42dd-8c58-45a77be5e0ce', '2022-06-26 10:09:15', '2022-06-26 10:09:15'),
('96a4b674-0e3c-493c-85d8-d1fb93f3eef1', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96a4b668-2702-4305-9f23-381732351adf', '2022-06-27 07:56:38', '2022-06-27 07:56:38'),
('96a61f8d-4c65-45f8-af1e-0f4fe8f43cca', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96a61f7e-880c-48d4-a28f-1d91814a1d61', '2022-06-28 00:46:20', '2022-06-28 00:46:20'),
('96a8edb0-b526-4a24-a15a-6b286a2040c8', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96a8eda2-914d-4819-8a35-c9e5be76c2a1', '2022-06-29 10:14:24', '2022-06-29 10:14:24'),
('96b5c5e8-29ec-40de-b56a-5307738f53d5', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96b5c5db-d79b-4721-984b-1385756704b0', '2022-07-05 19:28:55', '2022-07-05 19:28:55'),
('96c41f6b-efa0-41fc-b481-061147c366c7', '96c41b85-48da-4336-ba45-8145561fce58', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-07-12 22:40:49', '2022-07-12 22:40:49'),
('96c41f74-ba5f-4289-87bc-1b77f25c604e', '96c41bc2-b4f6-4787-8d7c-f9b8b8e28191', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-07-12 22:40:55', '2022-07-12 22:40:55'),
('96c41f93-b816-458f-a45e-c21470631589', '96c41bf8-ecb3-4a87-b309-a4ffb47aeca1', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-07-12 22:41:15', '2022-07-12 22:41:15'),
('96c41f9a-c06b-4c75-b146-3fcd763a24f3', '96c41df0-d6b9-4760-b713-ec6b9fc0c19d', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-07-12 22:41:19', '2022-07-12 22:41:19'),
('96c41fa3-152c-4e94-ac6d-7187716ab850', '96c41ea5-d35a-458b-89f3-f39a4ef8c952', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-07-12 22:41:25', '2022-07-12 22:41:25'),
('96c41fac-205d-49dc-a256-c8912ab0fa3d', '96c41ee3-2d96-4b6f-b29e-0475b2500ce0', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-07-12 22:41:31', '2022-07-12 22:41:31'),
('96c41fb4-0841-4aed-aae8-6581b639bbfa', '96c41f22-39cd-4803-a7e5-f1f5cc931263', '969eb828-91d4-4062-bd9b-19b935f32049', '2022-07-12 22:41:36', '2022-07-12 22:41:36'),
('96c41fc3-22f4-403c-8fb8-f4f01d5ae8ab', '96c41b85-48da-4336-ba45-8145561fce58', '968e0aa2-032d-40ef-beaa-d70a25c7df3b', '2022-07-12 22:41:46', '2022-07-12 22:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `jneadmin__unitkerja`
--

CREATE TABLE `jneadmin__unitkerja` (
  `id` char(36) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jneadmin__unitkerja`
--

INSERT INTO `jneadmin__unitkerja` (`id`, `nama_unit`, `created_at`, `updated_at`) VALUES
('968dccb6-1cca-4458-bc20-a16b4a02f27e', 'tata usaha', '2022-06-15 22:34:50', '2022-06-15 22:34:50'),
('968dd493-b7d7-467f-89a0-438fda4ab7c0', 'admin', '2022-06-15 22:56:50', '2022-06-15 22:56:50'),
('968dd8cc-916e-468b-b650-460814bf3716', 'Ceo', '2022-06-16 06:11:54', '2022-06-15 23:11:54'),
('968ed9b9-76d2-4a0a-a611-dafc4cbdb88f', 'Cabang Sandai', '2022-06-16 11:07:03', '2022-06-16 11:07:03'),
('9696c042-c4e3-4206-8453-e0ba70530b06', 'Cabang Tayap', '2022-06-20 16:23:23', '2022-06-20 09:23:23'),
('96a4c0bc-4ad4-4455-9a13-30895d151511', 'kordinator bidang', '2022-06-27 08:25:23', '2022-06-27 08:25:23'),
('96aad537-09ae-48c7-a996-76a201866541', 'HRD', '2022-06-30 08:57:37', '2022-06-30 08:57:37'),
('96aad550-cc15-4549-bd78-3e5936bfa3f0', 'JUNIOR  SUPERVISOR', '2022-06-30 08:57:54', '2022-06-30 08:57:54'),
('96c0c4f4-8fda-4a13-9687-8639c780e755', 'cabang sukadana', '2022-07-11 13:40:46', '2022-07-11 06:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `jnearchives__pengajuan`
--

CREATE TABLE `jnearchives__pengajuan` (
  `id` char(36) NOT NULL,
  `nama_dokumen` varchar(255) DEFAULT NULL,
  `file_dokumen` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnearchives__persetujuan`
--

CREATE TABLE `jnearchives__persetujuan` (
  `id` char(36) NOT NULL,
  `nama_dokumen` varchar(255) DEFAULT NULL,
  `file_dokumen` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnelembur__log`
--

CREATE TABLE `jnelembur__log` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `id_pengajuan` char(36) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnelembur__pengajuan`
--

CREATE TABLE `jnelembur__pengajuan` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `id_unitkerja` char(36) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `file_list_karyawan` varchar(255) DEFAULT NULL,
  `file_list_terima` varchar(255) DEFAULT NULL,
  `file_formulir` varchar(255) DEFAULT NULL,
  `file_formulir_jr` varchar(255) DEFAULT NULL,
  `file_formulir_v1` varchar(255) DEFAULT NULL,
  `file_perintah` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnemail__log`
--

CREATE TABLE `jnemail__log` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `id_pengiriman_surat` char(36) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnemail__pengiriman__surat`
--

CREATE TABLE `jnemail__pengiriman__surat` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `id_unitkerja` char(36) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `subject` text,
  `tujuan` varchar(255) DEFAULT NULL,
  `balasan_surat` varchar(255) DEFAULT NULL,
  `subject_balasan` text,
  `file_surat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnesurat__format__draft`
--

CREATE TABLE `jnesurat__format__draft` (
  `id` char(36) NOT NULL,
  `nama_format_surat` varchar(255) DEFAULT NULL,
  `file_format_surat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnesurat__format__unit`
--

CREATE TABLE `jnesurat__format__unit` (
  `id` char(36) NOT NULL,
  `nama_format_surat` varchar(255) DEFAULT NULL,
  `file_format_surat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jnesurat__log`
--

CREATE TABLE `jnesurat__log` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `id_pengajuan` char(36) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jnesurat__log`
--

INSERT INTO `jnesurat__log` (`id`, `id_pegawai`, `id_pengajuan`, `status`, `keterangan`, `updated_at`, `created_at`) VALUES
('96c1f98c-2aa2-49d6-a9f1-dfaccd76b651', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96c1f88f-3d12-4ec8-b085-b0596db32a1a', '301', 'ditanda tangani oleh ceo', '2022-07-11 21:03:15', '2022-07-11 21:03:15'),
('96c22f43-dab1-483f-a2ee-18ed81ee2c54', '968df0d6-7e8f-4d54-86fc-5e5783e23c4f', '96bfe0ab-3be7-45f5-8d16-0f0d934612de', '201', 'diterima oleh tatausaha, dan diteruskan ke direktur', '2022-07-11 23:33:27', '2022-07-11 23:33:27'),
('96c24c34-7728-497b-b851-d12fb7950a09', '968ed9f7-e184-4fd9-b9f8-a4254271e89d', '96c24c34-6301-473c-865b-f977f5355d3b', '101', 'pengajuan oleh unit', '2022-07-12 00:54:23', '2022-07-12 00:54:23'),
('96c24c81-5eab-46f4-a61a-b89d1b061372', '9691f1dc-93f7-41bc-843d-4c4fd962b0b5', '96c24c34-6301-473c-865b-f977f5355d3b', '201', 'diterima oleh tatausaha, dan diteruskan ke direktur', '2022-07-12 00:55:13', '2022-07-12 00:55:13'),
('96c24d07-34b6-4265-84a8-a71aed414dfb', '9694addf-69f0-4188-96e6-a72f4b0502c7', '96c24c34-6301-473c-865b-f977f5355d3b', '301', 'ditanda tangani oleh ceo', '2022-07-12 00:56:41', '2022-07-12 00:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `jnesurat__pengajuan`
--

CREATE TABLE `jnesurat__pengajuan` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) DEFAULT NULL,
  `id_unitkerja` char(36) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `nama_pengajuan` varchar(255) DEFAULT NULL,
  `keperluan_pengajuan` varchar(255) DEFAULT NULL,
  `file_pengantar` varchar(255) DEFAULT NULL,
  `file_lampiran` varchar(255) DEFAULT NULL,
  `draft_surat` varchar(255) DEFAULT NULL,
  `draft_surat_ttd` varchar(255) DEFAULT NULL,
  `nomor_surat` varchar(255) DEFAULT NULL,
  `perihal_surat` varchar(255) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `keterangan_surat` text,
  `file_surat_pdf` varchar(255) DEFAULT NULL,
  `keterangan_surat_ceo` text,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jneadmin__module`
--
ALTER TABLE `jneadmin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jneadmin__pegawai`
--
ALTER TABLE `jneadmin__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jneadmin__role`
--
ALTER TABLE `jneadmin__role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jneadmin__unitkerja`
--
ALTER TABLE `jneadmin__unitkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnearchives__pengajuan`
--
ALTER TABLE `jnearchives__pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnearchives__persetujuan`
--
ALTER TABLE `jnearchives__persetujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnelembur__log`
--
ALTER TABLE `jnelembur__log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnelembur__pengajuan`
--
ALTER TABLE `jnelembur__pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnemail__log`
--
ALTER TABLE `jnemail__log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnemail__pengiriman__surat`
--
ALTER TABLE `jnemail__pengiriman__surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnesurat__format__draft`
--
ALTER TABLE `jnesurat__format__draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnesurat__format__unit`
--
ALTER TABLE `jnesurat__format__unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnesurat__log`
--
ALTER TABLE `jnesurat__log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jnesurat__pengajuan`
--
ALTER TABLE `jnesurat__pengajuan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
