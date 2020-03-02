-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 08:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guides_invites`
--

CREATE TABLE `guides_invites` (
  `user_id` int(11) DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remake` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp` datetime DEFAULT NULL COMMENT 'วันหมดอายุ',
  `status` tinyint(1) DEFAULT NULL COMMENT 'มีการกดเข้ามาลงทะเบียน : 0=ยัง, 1=มาแล้ว',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guides_invites`
--

INSERT INTO `guides_invites` (`user_id`, `id`, `name`, `email`, `remake`, `exp`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(NULL, 1, 'Tle', 'masa29@gamil.com', 'dsfdsf', '2020-02-11 08:23:14', 3, 'oLVc3RN6nb', '2020-02-11 00:53:14', '2020-02-11 00:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `guides_registrations`
--

CREATE TABLE `guides_registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `invite_id` int(11) NOT NULL COMMENT 'FK guides_invites->id : เชิญ',
  `first_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อเล่น',
  `first_name_en` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อภาษาอังกฤษ',
  `last_name_en` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'นามสกุลภาษาอังกฤษ',
  `sex` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เพศ',
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'อีเมล',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เบอร์โทร',
  `line_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ไลน์ไอดี',
  `passport_no` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เลข passport',
  `passport_exp` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'วันหมดอายุ passport',
  `home` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ที่อยู่ตามทะเบียนบ้าน',
  `home_street` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ถนน',
  `home_dtrict` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ตำบล/แขวง',
  `home_kat` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'อำเภอ/เขต',
  `home_country` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'จังหวัด',
  `home_zip` bigint(20) DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `home_accommodation` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ที่พักอาศัยเป็น',
  `address` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ที่อยู่ปัจจุบัน',
  `address_street` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ถนน',
  `address_drict` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ตำบล/แขวง',
  `address_kat` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'อำเภอ/เขต',
  `address_country` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'จังหวัด',
  `address_zip` bigint(20) DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `address_accommodation` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ที่พักอาศัยเป็น',
  `birdthday` date DEFAULT NULL COMMENT 'วันเกิด',
  `chainase` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ปีนักกษัตร',
  `zodiac` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ราศี',
  `age` bigint(20) DEFAULT NULL COMMENT 'อายุ',
  `hight` bigint(20) DEFAULT NULL COMMENT 'สูง',
  `weight` bigint(20) DEFAULT NULL COMMENT 'น้ำหนัก',
  `nationality` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สัญชาติ',
  `origin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เชื้อชาติ',
  `religion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ศาสนา',
  `id_card` bigint(20) DEFAULT NULL COMMENT 'บัตรประชาชน',
  `place` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สถานที่ออกบัตร',
  `expired_card` date DEFAULT NULL COMMENT 'วันหมดอายุของบัตรประชาชน',
  `tax_card` bigint(20) DEFAULT NULL COMMENT 'บัตรผู้เสียหายภาษี',
  `security_card` bigint(20) DEFAULT NULL COMMENT 'บัตรประกันสังคม',
  `soldier` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สภาพทางทหาร',
  `soldier_year` date DEFAULT NULL COMMENT 'จะเกณฑ์ในปี',
  `status` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สถานภาพ',
  `marry` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'กรณีแต่งงาน',
  `contact_person` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ติดต่อบุคคลอื่น',
  `workplace_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อสถานที่ทำงาน',
  `position_work` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ตำแหน่ง',
  `son_max` bigint(20) DEFAULT NULL COMMENT 'จำนวนบุตร',
  `son_studying` bigint(20) DEFAULT NULL COMMENT 'กำลังศึกษา',
  `son_not` bigint(20) DEFAULT NULL COMMENT 'ยังไเข้าศึกษา',
  `school_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อโรงเรียน',
  `school_subject` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สาขาวิชา',
  `school_start` date DEFAULT NULL COMMENT 'เริ่ม',
  `school_stop` date DEFAULT NULL COMMENT 'จบ',
  `school_gpa` double(8,2) DEFAULT NULL COMMENT 'เกรดเฉลี่ย',
  `vocational_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อสถาบันปวช.',
  `vocational_subject` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สาขาวิชา',
  `vocational_start` date DEFAULT NULL COMMENT 'เริ่ม',
  `vocational_stop` date DEFAULT NULL COMMENT 'จบ',
  `vocational_gpa` double(8,2) DEFAULT NULL COMMENT 'เกรดเฉลี่ย',
  `bachelor_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อสถาบันปวท./ปวส ',
  `bachelor_subject` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สาขาวิชา',
  `bachelor_start` date DEFAULT NULL COMMENT 'เริ่ม',
  `bachelor_stop` date DEFAULT NULL COMMENT 'จบ',
  `bachelor_gpa` double(8,2) DEFAULT NULL COMMENT 'เกรดเฉลี่ย',
  `diploma_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อสถาบันปริญญาตรี ',
  `diploma_subject` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สาขาวิชา',
  `diploma_start` date DEFAULT NULL COMMENT 'เริ่ม',
  `diploma_stop` date DEFAULT NULL COMMENT 'จบ',
  `diploma_gpa` double(8,2) DEFAULT NULL COMMENT 'เกรดเฉลี่ย',
  `postgraduate_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อสถาบันที่เรียนสูงกว่าปริญญาตรี ',
  `postgraduate_subject` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สาขาวิชา',
  `postgraduate_start` date DEFAULT NULL COMMENT 'เริ่ม',
  `postgraduate_stop` date DEFAULT NULL COMMENT 'จบ',
  `postgraduate_gpa` double(8,2) DEFAULT NULL COMMENT 'เกรดเฉลี่ย',
  `workplace` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สถานที่ทำงาน',
  `position_workplace` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ตำแหน่งงานเดิม',
  `work_other` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เกี่ยวกับงานเดิม',
  `work_saraly` bigint(20) DEFAULT NULL COMMENT 'เงินเดือนที่ทำงานเก่า',
  `work_start` date DEFAULT NULL COMMENT 'เริ่มทำงาน',
  `work_stop` date DEFAULT NULL COMMENT 'เวลาออกงาน',
  `because_out` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เหตุผลที่ออก',
  `speak_th` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'พูด(ภาษาไทย)',
  `read_th` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'อ่าน(ภาษาไทย)',
  `write_th` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เขียน(ภาษาไทย)',
  `speak_en` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'พูด(ภาษาอังกฤษ)',
  `read_en` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'อ่าน(ภาษาอังกฤษ)',
  `write_en` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เขียน(ภาษาอังกฤษ)',
  `speak_prc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'พูด(ภาษาจีน)',
  `read_prc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'อ่าน(ภาษาจีน)',
  `write_prc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เขียน(ภาษาจีน)',
  `languages_ot` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ภาษาอื่นๆ',
  `languages_v1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ภาษาอื่นๆ',
  `languages_v2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ภาษาอื่นๆ',
  `contact_family` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'กรณีฉุกเฉินบุคคลที่ติดต่อได้',
  `associated` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เกี่ยวข้องเป็น',
  `address_family` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ที่อยู่',
  `phone_family` bigint(20) DEFAULT NULL COMMENT 'เบอร์โทร',
  `disease` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'โรคประจำตัว',
  `identify` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ถ้ามีโปรดระบุ',
  `warranty_job` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ชื่อผู้ค้ำประกันการทำงาน',
  `office` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'สถานที่ทำงาน',
  `position_job` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ตำแหน่งงาน',
  `phone_job` bigint(20) DEFAULT NULL COMMENT 'เบอร์โทร',
  `about` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'เกี่ยวกับท่านเป็น',
  `profile` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปประจำตัว',
  `photo_card` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปสำเนาบัตรประชาชน',
  `photo_address` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปทะเบียนบ้าน',
  `photo_guide` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปบัตรไกด์',
  `photo_tl` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รูปบัตร tl',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_13_083801_create_users_roles_table', 1),
(3, '2019_12_13_084746_create_users_roles_permit_table', 1),
(4, '2019_12_22_031423_create_guides_table', 1),
(5, '2019_12_22_034201_create_guide_invites_table', 1),
(6, '2019_12_23_042759_create__bill_table', 1),
(7, '2019_12_26_094025_create_guide_registrations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_owner` tinyint(1) DEFAULT NULL,
  `new_password` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `status`, `email`, `phone`, `line`, `last_login_at`, `last_login_ip`, `is_owner`, `new_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ชง', 'chong', '$2y$10$Hh2Bl6sXl1v2iJgPL7O0deAKwH70uVa73F/o4GTRqe9IuWGxt1VKe', 1, 'chong@bkksoft.me', NULL, NULL, '2020-02-11 07:46:39', '127.0.0.1', 1, NULL, 'krbvRnxzOz', '2020-01-08 19:34:56', '2020-02-11 00:46:39'),
(2, 'K 13', 'manager', '$2y$10$/292w5Sg3WDqEe1fEsy2A.FqrLpRHwE2EwZUBWFvqOnlzVdL2FX22', 1, 'manager@pro.co', NULL, NULL, NULL, NULL, NULL, NULL, 'VsC9xGUvUQ', '2020-01-08 19:34:56', '2020-01-08 19:34:56'),
(3, 'Admin', 'admin', '$2y$10$7vX95ailmmZdHSdPE6L0YOUtMo3tMWozenv4IugSBdR6hztQntDS2', 1, 'admin@pro.co', NULL, NULL, NULL, NULL, NULL, NULL, 'oy72YOR6wB', '2020-01-08 19:34:56', '2020-01-08 19:34:56'),
(4, 'OP', 'op', '$2y$10$zZpMHsoYkAWdixykxfkNiOq4Geu9Bq31PsCK/VT/yDY.cVeF25hoe', 1, 'op@pro.co', NULL, NULL, NULL, NULL, NULL, NULL, 'o8C78wrtRr', '2020-01-08 19:34:56', '2020-01-08 19:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrator', '2020-01-08 19:34:56', '2020-01-08 19:34:56'),
(2, 'MD', 'Manager', '2020-01-08 19:34:56', '2020-01-08 19:34:56'),
(3, 'Author', 'Author / Tour Operation', '2020-01-08 19:34:56', '2020-01-08 19:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles_permit`
--

CREATE TABLE `users_roles_permit` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles_permit`
--

INSERT INTO `users_roles_permit` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `_bill`
--

CREATE TABLE `_bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'รายการเบิก',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'ราคา',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guides_invites`
--
ALTER TABLE `guides_invites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guides_registrations`
--
ALTER TABLE `guides_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles_permit`
--
ALTER TABLE `users_roles_permit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_bill`
--
ALTER TABLE `_bill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guides_invites`
--
ALTER TABLE `guides_invites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guides_registrations`
--
ALTER TABLE `guides_registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_roles_permit`
--
ALTER TABLE `users_roles_permit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `_bill`
--
ALTER TABLE `_bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
