-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2020 at 06:14 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `veaptv`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_documents_tb`
--

CREATE TABLE `account_documents_tb` (
  `doc_id` bigint(20) NOT NULL,
  `account_id` bigint(10) NOT NULL,
  `doc_link` varchar(100) NOT NULL,
  `doc_type` varchar(10) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_information_tb`
--

CREATE TABLE `account_information_tb` (
  `info_id` bigint(10) NOT NULL,
  `account_id` bigint(10) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_info_tb`
--

CREATE TABLE `account_info_tb` (
  `account_id` bigint(10) NOT NULL,
  `event_code` varchar(25) DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `broadcast_link` varchar(250) DEFAULT NULL,
  `live_poll_link` varchar(250) DEFAULT NULL,
  `poll_flag` tinyint(1) NOT NULL DEFAULT '1',
  `info_flag` tinyint(1) NOT NULL DEFAULT '1',
  `media_flag` tinyint(1) NOT NULL DEFAULT '1',
  `survey_flag` tinyint(1) NOT NULL DEFAULT '1',
  `logo_link` varchar(250) DEFAULT NULL,
  `background_link` varchar(250) DEFAULT NULL,
  `accent_color` varchar(10) DEFAULT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_info_tb`
--

INSERT INTO `account_info_tb` (`account_id`, `event_code`, `event_name`, `broadcast_link`, `live_poll_link`, `poll_flag`, `info_flag`, `media_flag`, `survey_flag`, `logo_link`, `background_link`, `accent_color`, `status_flag`, `created_at`, `updated_at`) VALUES
(1, 'veapTV', 'VeapTV', NULL, NULL, 1, 1, 1, 1, NULL, NULL, '#97191C', 4, '2020-11-21 18:18:35', '2020-11-21 10:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `account_media_tb`
--

CREATE TABLE `account_media_tb` (
  `media_id` bigint(10) NOT NULL,
  `account_id` bigint(10) NOT NULL,
  `photo_link` varchar(100) NOT NULL,
  `photo_type` varchar(10) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_surveys_tb`
--

CREATE TABLE `account_surveys_tb` (
  `survey_id` bigint(10) NOT NULL,
  `account_id` bigint(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_users_tb`
--

CREATE TABLE `account_users_tb` (
  `user_id` bigint(10) NOT NULL,
  `account_id` bigint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_no` varchar(25) NOT NULL,
  `activation_code` varchar(20) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `account_videos_tb`
--

CREATE TABLE `account_videos_tb` (
  `video_id` bigint(10) NOT NULL,
  `account_id` bigint(10) NOT NULL,
  `video_url` varchar(100) NOT NULL,
  `video_link` varchar(100) NOT NULL,
  `video_type` varchar(10) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions_tb`
--

CREATE TABLE `survey_questions_tb` (
  `question_id` bigint(10) NOT NULL,
  `survey_id` bigint(10) NOT NULL,
  `question` varchar(100) NOT NULL,
  `question_optional` varchar(250) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `survey_question_opt_tb`
--

CREATE TABLE `survey_question_opt_tb` (
  `id` bigint(10) NOT NULL,
  `question_id` bigint(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status_flag` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_documents_tb`
--
ALTER TABLE `account_documents_tb`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `account_information_tb`
--
ALTER TABLE `account_information_tb`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `account_info_tb`
--
ALTER TABLE `account_info_tb`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `account_media_tb`
--
ALTER TABLE `account_media_tb`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `account_surveys_tb`
--
ALTER TABLE `account_surveys_tb`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `account_users_tb`
--
ALTER TABLE `account_users_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `account_videos_tb`
--
ALTER TABLE `account_videos_tb`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `survey_questions_tb`
--
ALTER TABLE `survey_questions_tb`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `survey_question_opt_tb`
--
ALTER TABLE `survey_question_opt_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_documents_tb`
--
ALTER TABLE `account_documents_tb`
  MODIFY `doc_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_information_tb`
--
ALTER TABLE `account_information_tb`
  MODIFY `info_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_info_tb`
--
ALTER TABLE `account_info_tb`
  MODIFY `account_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_media_tb`
--
ALTER TABLE `account_media_tb`
  MODIFY `media_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_surveys_tb`
--
ALTER TABLE `account_surveys_tb`
  MODIFY `survey_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_users_tb`
--
ALTER TABLE `account_users_tb`
  MODIFY `user_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_videos_tb`
--
ALTER TABLE `account_videos_tb`
  MODIFY `video_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_questions_tb`
--
ALTER TABLE `survey_questions_tb`
  MODIFY `question_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_question_opt_tb`
--
ALTER TABLE `survey_question_opt_tb`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;
