-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2024 at 08:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--
CREATE DATABASE IF NOT EXISTS `data` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `data`;
--
-- Database: `exam_schedule`
--
CREATE DATABASE IF NOT EXISTS `exam_schedule` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `exam_schedule`;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_slot` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `komye`
--
CREATE DATABASE IF NOT EXISTS `komye` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `komye`;

-- --------------------------------------------------------

--
-- Table structure for table `bire`
--

CREATE TABLE `bire` (
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Database: `my_db`
--
CREATE DATABASE IF NOT EXISTS `my_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `my_db`;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `FirstName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`FirstName`, `LastName`, `Age`) VALUES
('obsa', 'Berhanu', 17);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"school_db\",\"table\":\"admininfo\"},{\"db\":\"school_db\",\"table\":\"teachers\"},{\"db\":\"school_db\",\"table\":\"students\"},{\"db\":\"school_db\",\"table\":\"homeroom_teachers\"},{\"db\":\"school_db\",\"table\":\"grade9table\"},{\"db\":\"school_db\",\"table\":\"allsubject\"},{\"db\":\"school_db\",\"table\":\"studentinformation\"},{\"db\":\"school_db\",\"table\":\"teacherassign\"},{\"db\":\"school_db\",\"table\":\"student_results\"},{\"db\":\"school_db\",\"table\":\"semester_dates\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'school_db', 'grade9table', '{\"CREATE_TIME\":\"2024-05-16 02:20:06\",\"col_order\":[0,1,2,3,4,5,6,7,8,9,10],\"col_visib\":[0,1,1,1,1,1,1,1,1,1,1]}', '2024-05-15 23:27:49'),
('root', 'school_db', 'homeroom_teachers', '{\"CREATE_TIME\":\"2024-05-18 09:09:54\",\"col_order\":[0,1,2],\"col_visib\":[0,1,1]}', '2024-05-19 04:06:59'),
('root', 'school_db', 'students', '{\"sorted_col\":\"`students`.`username` DESC\"}', '2024-05-22 09:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-09-03 18:05:23', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `scheduling`
--
CREATE DATABASE IF NOT EXISTS `scheduling` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `scheduling`;

-- --------------------------------------------------------

--
-- Table structure for table `1a`
--

CREATE TABLE `1a` (
  `schedule_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL,
  `saturday` varchar(255) DEFAULT NULL,
  `sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `1a`
--

INSERT INTO `1a` (`schedule_id`, `day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '2:00', 'English', 'Herrega', 'Saayinsii', 'Aadaa', 'Afaan Oromoo', 'BREAK', 'BREAK');

-- --------------------------------------------------------

--
-- Table structure for table `9a`
--

CREATE TABLE `9a` (
  `schedule_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL,
  `saturday` varchar(255) DEFAULT NULL,
  `sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `9a`
--

INSERT INTO `9a` (`schedule_id`, `day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '2:00', 'Chemistry', 'Physics', 'Afaan Oromoo', 'English', 'Mathematics', 'BREAK', 'BREAK'),
(2, '2:42', 'Physics', 'Chemistry', 'Mathematics', 'Afaan Oromoo', 'English', 'BREAK', 'BREAK'),
(3, '3:24', 'Mathematics', 'Afaan Oromoo', 'Physics', 'English', 'Chemistry', 'BREAK', 'BREAK'),
(4, '4:06', 'Break', 'Break', 'Break', 'Break', 'Break', 'BREAK', 'BREAK'),
(5, '4:20', 'Geograph', 'History', 'Civic', 'Mathematics', 'HPE', 'BREAK', 'BREAK'),
(6, '5:00', 'Biology', 'English', 'Geography', 'Physics', 'ICT', 'BREAK', 'BREAK'),
(7, '5:42', 'Mathematics', 'History', 'Civic', 'Chemistry', 'Biology', 'BREAK', 'BREAK');

-- --------------------------------------------------------

--
-- Table structure for table `9b`
--

CREATE TABLE `9b` (
  `schedule_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL,
  `saturday` varchar(255) DEFAULT NULL,
  `sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `9b`
--

INSERT INTO `9b` (`schedule_id`, `day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '2:00', 'English', 'Afaan Oromoo', 'Physics', 'Mathematics', 'ICT', 'BREAK', 'BREAK'),
(2, '2:42', 'Chemistry', 'Mathematics', 'Amharic', 'Geography', 'Civic', 'BREAK', 'BREAK'),
(3, '3:24', 'Physics', 'Chemistry', 'Mathematics', 'History', 'Amharic', 'BREAK', 'BREAK'),
(4, '4:06', 'Break', 'Break', 'Break', 'Break', 'Break', 'BREAK', 'BREAK'),
(5, '4:20', 'Mathematics', 'Geography', 'Civic', 'English', 'Chemistry', 'BREAK', 'BREAK'),
(6, '5:00', 'History', 'Mathematics', 'English', 'Biology', 'HPE', 'BREAK', 'BREAK'),
(7, '5:42', 'Biology', 'Afaan Oromoo', 'English', 'Mathematics', 'Physics', 'BREAK', 'BREAK');

-- --------------------------------------------------------

--
-- Table structure for table `10a`
--

CREATE TABLE `10a` (
  `schedule_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL,
  `saturday` varchar(255) DEFAULT NULL,
  `sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `11a`
--

CREATE TABLE `11a` (
  `schedule_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL,
  `saturday` varchar(255) DEFAULT NULL,
  `sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `11a`
--

INSERT INTO `11a` (`schedule_id`, `day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '6:30', 'Chemistry', 'Biology', 'History', 'English', 'Mathematics', 'BREAK', 'BREAK'),
(2, '7:12', 'English', 'Chemistry', 'Geography', 'History', 'Mathematics', 'BREAK', 'BREAK');

-- --------------------------------------------------------

--
-- Table structure for table `12a`
--

CREATE TABLE `12a` (
  `schedule_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL,
  `saturday` varchar(255) DEFAULT NULL,
  `sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `12a`
--

INSERT INTO `12a` (`schedule_id`, `day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, '6:30', 'Biology', 'Chemistry', 'Mathematics', 'English', 'History', 'BREAK', 'BREAK'),
(2, '7:12', 'English', 'Chemistry', 'Geography', 'History', 'Mathematics', 'BREAK', 'BREAK');

-- --------------------------------------------------------

--
-- Table structure for table `2017_2018`
--

CREATE TABLE `2017_2018` (
  `id` int(6) UNSIGNED NOT NULL,
  `dates` varchar(50) NOT NULL,
  `descriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2017_2018`
--

INSERT INTO `2017_2018` (`id`, `dates`, `descriptions`) VALUES
(1, 'september 06/01/2017', 'Registration of students'),
(2, 'september 12/01/2017', 'Start Education'),
(3, 'october 15/02/2017', 'Mid Exam'),
(4, 'December 01-15/04/2017', 'Break'),
(5, 'January 11-15/05/2017', 'Final Exam'),
(6, 'January 20/05/2017', 'Grade Submission'),
(7, 'January 25/05/2017', 'End of 1st Semester');

-- --------------------------------------------------------

--
-- Table structure for table `2024_2025`
--

CREATE TABLE `2024_2025` (
  `id` int(6) UNSIGNED NOT NULL,
  `dates` varchar(50) NOT NULL,
  `descriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `2025_2026`
--

CREATE TABLE `2025_2026` (
  `id` int(6) UNSIGNED NOT NULL,
  `dates` varchar(50) NOT NULL,
  `descriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `2025_2026`
--

INSERT INTO `2025_2026` (`id`, `dates`, `descriptions`) VALUES
(1, 'august 25/12/2024', 'Start students Registration'),
(2, 'September 22/12/2024', 'Start Education'),
(3, 'October 25/12/2024', 'Mid Exam'),
(4, 'December 02-15/12/2024', 'Break'),
(5, 'January 15-22/12/2024', 'Final Exam'),
(6, 'January 25/12/2024', 'Grade submission'),
(7, 'January 29/12/2024', 'End of 1st Semester'),
(8, 'February 12/12/2024', 'Start of 2nd Semester'),
(9, 'April 03/12/2024', 'Mid Exam'),
(10, 'June 07-15/12/2024', 'Final Exam'),
(11, 'June 20/12/2024', 'Grade submission'),
(12, 'June 25/12/2024', 'End of 2st Semester'),
(13, 'June 30/12/2024', 'End of Class'),
(16, 'January 29/12/2024', 'End of 1st Semester');

-- --------------------------------------------------------

--
-- Table structure for table `finalexam9`
--

CREATE TABLE `finalexam9` (
  `exam_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finalexam9`
--

INSERT INTO `finalexam9` (`exam_id`, `day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
(1, '2:00', '', '', 'Biology', 'Afaan Oromoo', 'Physics'),
(3, '3:30', '', '', 'Chemistry', 'English', 'Civic'),
(4, '4:30', '', '', 'Geography', 'History', 'Amharic'),
(5, '8:30', '', '', 'ICT', 'HPE', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `midexam9`
--

CREATE TABLE `midexam9` (
  `exam_id` int(11) NOT NULL,
  `examtype` varchar(255) DEFAULT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL,
  `saturday` varchar(255) DEFAULT NULL,
  `sunday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `midexam10`
--

CREATE TABLE `midexam10` (
  `exam_id` int(11) NOT NULL,
  `day_time` varchar(255) DEFAULT NULL,
  `monday` varchar(255) DEFAULT NULL,
  `tuesday` varchar(255) DEFAULT NULL,
  `wednesday` varchar(255) DEFAULT NULL,
  `thursday` varchar(255) DEFAULT NULL,
  `friday` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `midexam10`
--

INSERT INTO `midexam10` (`exam_id`, `day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES
(1, '2:30', '', '', 'Geography', 'Afaan Oromoo', 'Biology'),
(2, '3:30', '', '', 'Chemistry', 'Civic', 'Afaan Oromoo'),
(3, '4:30', '', '', 'Physics', 'History', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `day_time` varchar(10) DEFAULT NULL,
  `monday` varchar(16) DEFAULT NULL,
  `tuesday` varchar(16) DEFAULT NULL,
  `wednesday` varchar(16) DEFAULT NULL,
  `thursday` varchar(16) DEFAULT NULL,
  `friday` varchar(16) DEFAULT NULL,
  `saturday` varchar(16) DEFAULT NULL,
  `sunday` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`day_time`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
('02:00', 'Physics', 'Chemistry', 'Afaan Oromoo', 'Biology', 'English', 'break', 'break'),
('02:42', 'English', 'Chemistry', 'Afaan Oromoo', 'Biology', 'English', '', ''),
('02:42', 'English', 'Chemistry', 'Afaan Oromoo', 'Biology', 'English', 'BREAK', 'BREAK'),
('3:24', 'Chemistry', 'Physics', 'Afaan Oromoo', 'English', 'Mathematics', 'BREAK', 'BREAK');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `Dates` varchar(50) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`Dates`, `Description`) VALUES
('september 05/01/2017', 'registration'),
('september 05-07/01/2017', 'registration'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'lami', '1234', 'admin'),
(2, 'lamisaf', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1a`
--
ALTER TABLE `1a`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `9a`
--
ALTER TABLE `9a`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `9b`
--
ALTER TABLE `9b`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `10a`
--
ALTER TABLE `10a`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `11a`
--
ALTER TABLE `11a`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `12a`
--
ALTER TABLE `12a`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `2017_2018`
--
ALTER TABLE `2017_2018`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2024_2025`
--
ALTER TABLE `2024_2025`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2025_2026`
--
ALTER TABLE `2025_2026`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalexam9`
--
ALTER TABLE `finalexam9`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `midexam9`
--
ALTER TABLE `midexam9`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `midexam10`
--
ALTER TABLE `midexam10`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1a`
--
ALTER TABLE `1a`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `9a`
--
ALTER TABLE `9a`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `9b`
--
ALTER TABLE `9b`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `10a`
--
ALTER TABLE `10a`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `11a`
--
ALTER TABLE `11a`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `12a`
--
ALTER TABLE `12a`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `2017_2018`
--
ALTER TABLE `2017_2018`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `2024_2025`
--
ALTER TABLE `2024_2025`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2025_2026`
--
ALTER TABLE `2025_2026`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `finalexam9`
--
ALTER TABLE `finalexam9`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `midexam9`
--
ALTER TABLE `midexam9`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `midexam10`
--
ALTER TABLE `midexam10`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `schooldb`
--
CREATE DATABASE IF NOT EXISTS `schooldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `schooldb`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `mobile`) VALUES
(1, 'komy', 'bire', '0906792544'),
(2, 'sena', 'abebe', '0934232323'),
(3, 'obsa', 'cala', '0906792546'),
(4, 'anisa', 'obsa', '0906792678'),
(5, 'dawit', 'na', '0906678909');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `school_db`
--
CREATE DATABASE IF NOT EXISTS `school_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `school_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `Username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confirmpassword` varchar(50) DEFAULT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`Username`, `password`, `confirmpassword`, `code`) VALUES
('komy', 'komye', '1234', ''),
('waritu', 'wari', 'wari', ''),
('obsa', '1234', 'bire', ''),
(NULL, NULL, NULL, ''),
(NULL, NULL, NULL, ''),
('dawe', '1234', '1234', ''),
('abdi', '1234', '1234', ''),
('bona', '12345', '12345', ''),
('muslima', '1234', '1234', ''),
('dawit', '1234', '1234', ''),
('baro', '1234', '1234', ''),
('abel', '1234', '1234', ''),
('1', '123', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `allsubject`
--

CREATE TABLE `allsubject` (
  `subject` varchar(15) DEFAULT NULL,
  `description` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allsubject`
--

INSERT INTO `allsubject` (`subject`, `description`) VALUES
('Afan Oromo', 'general'),
('Biology', 'general'),
('Chemistry', 'Natural'),
('Physics', 'general'),
('Civics', 'general'),
('Economics', 'general'),
('English', 'general'),
('Geography', 'general'),
('Physical Educat', 'general'),
('ICT', 'general'),
('Mathematics', 'general'),
('English', 'common'),
('Mathematics', 'common'),
('Civics', 'common'),
('Physical Educat', 'common'),
('ICT', 'common'),
('Geography', 'social'),
('Economics', 'social'),
('Biology', 'Natural'),
('Chemistry', 'Natural'),
('Physics', 'Natural'),
('agriculture', 'common'),
('Mathematics', 'common'),
('History', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `grade9table`
--

CREATE TABLE `grade9table` (
  `id` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Program` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `parentname` varchar(100) NOT NULL,
  `parentPhone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade9table`
--

INSERT INTO `grade9table` (`id`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Program`, `Age`, `parentname`, `parentPhone`, `address`, `grade`) VALUES
(1, 'kena', 'fikadu', 'kenea', 'Female', 'natural', 15, 'gelete', '0910824429', 'shambu', '9A'),
(2, 'obsa', 'berhanu', 'hailu', 'Male', 'natural', 15, 'obsa kenea', '0910824429', 'addis', '9A'),
(3, 'abdi', 'garoma', 'chala', 'Male', 'general', 16, 'obsa kenea', '0910824429', 'dambidolo', '9A'),
(4, 'Komarsan', 'fikadu', 'kenea', 'Female', 'natural', 22, 'obsa kenea', '0910824429', 'xafo', '9B'),
(5, 'kena', 'fikadu', 'kenea', 'Female', 'natural', 15, 'gelete', '0910824429', 'shambu', '9A'),
(6, 'Komarsan', 'fikadu', 'kenea', 'Female', 'natural', 22, 'obsa kenea', '0910824429', 'xafo', '9A'),
(7, 'obsa', 'berhanu', 'hailu', 'Male', 'natural', 15, 'obsa kenea', '0910824429', 'addis', '9B'),
(8, 'abdi', 'garoma', 'chala', 'Male', 'general', 16, 'obsa kenea', '0910824429', 'dambidolo', '9B'),
(9, 'kena', 'fikadu', 'kenea', 'Female', 'natural', 15, 'gelete', '0910824429', 'shambu', '9A'),
(10, 'obsa', 'berhanu', 'hailu', 'Male', 'natural', 15, 'obsa kenea', '0910824429', 'addis', '9A'),
(11, 'Komarsan', 'fikadu', 'kenea', 'Female', 'natural', 22, 'obsa kenea', '0910824429', 'xafo', '9B'),
(12, 'abdi', 'garoma', 'chala', 'Male', 'general', 16, 'obsa kenea', '0910824429', 'dambidolo', '9B'),
(13, 'kena', 'fikadu', 'kenea', 'Female', 'natural', 15, 'gelete', '0910824429', 'shambu', '9A'),
(14, 'obsa', 'berhanu', 'hailu', 'Male', 'natural', 15, 'obsa kenea', '0910824429', 'addis', '9A'),
(15, 'Komarsan', 'fikadu', 'kenea', 'Female', 'natural', 22, 'obsa kenea', '0910824429', 'xafo', '9A');

-- --------------------------------------------------------

--
-- Table structure for table `grade10table`
--

CREATE TABLE `grade10table` (
  `id` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Program` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `parentname` varchar(100) NOT NULL,
  `parentPhone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade10table`
--

INSERT INTO `grade10table` (`id`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Program`, `Age`, `parentname`, `parentPhone`, `address`, `grade`) VALUES
(1, 'kena', 'chala', 'abdi', 'Male', 'social', 22, 'berhanu hailu', '0910824429', 'addis', '10A'),
(2, 'lami', 'hirphasa', 'milkesa', 'Male', 'social', 17, 'hiphasa milkesa', '0910824429', 'xafo', '11A'),
(3, 'obsa', 'Berhanu', 'Hailu', 'Male', 'social', 17, 'berhanu hailu', '0910824429', 'nekemte', '11B'),
(4, 'Kule', 'yewalashet', 'Dube', 'Female', 'natural', 20, 'Bontu', '09876543', 'kuyu', '11B'),
(5, 'Kule', 'yewalashet', 'Dube', 'Female', 'natural', 20, 'Bontu', '09876543', 'kuyu', '11B'),
(6, 'lami', 'hirphasa', 'milkesa', 'Male', 'social', 17, 'hiphasa milkesa', '0910824429', 'xafo', '11B');

-- --------------------------------------------------------

--
-- Table structure for table `grade11table`
--

CREATE TABLE `grade11table` (
  `id` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Program` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `parentname` varchar(100) NOT NULL,
  `parentPhone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade11table`
--

INSERT INTO `grade11table` (`id`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Program`, `Age`, `parentname`, `parentPhone`, `address`, `grade`) VALUES
(1, 'obsa', 'Berhanu', 'Hailu', 'Male', 'social', 17, 'berhanu hailu', '0910824429', 'nekemte', '11A');

-- --------------------------------------------------------

--
-- Table structure for table `grade12table`
--

CREATE TABLE `grade12table` (
  `id` int(6) UNSIGNED NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Program` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `parentname` varchar(100) NOT NULL,
  `parentPhone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homeroom_teachers`
--

CREATE TABLE `homeroom_teachers` (
  `id` int(6) UNSIGNED NOT NULL,
  `class` varchar(50) NOT NULL,
  `teacher_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeroom_teachers`
--

INSERT INTO `homeroom_teachers` (`id`, `class`, `teacher_name`) VALUES
(3, '9A', 'mrs Dawit Obsa'),
(4, '9B', 'mrs komarsan Berhanu'),
(6, '10A', 'mrs Gelete Fikadu');

-- --------------------------------------------------------

--
-- Table structure for table `semester_dates`
--

CREATE TABLE `semester_dates` (
  `id` int(11) NOT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `opening_date` date DEFAULT NULL,
  `midterm_schedule` date DEFAULT NULL,
  `final_exam_date` date DEFAULT NULL,
  `closing_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester_dates`
--

INSERT INTO `semester_dates` (`id`, `semester`, `registration_date`, `opening_date`, `midterm_schedule`, `final_exam_date`, `closing_date`) VALUES
(6, 'First Semester', '2024-05-17', '2024-05-08', '2024-05-08', '2024-05-23', '2024-06-06'),
(7, 'First Semester', '2024-05-01', '2024-05-23', '2024-05-31', '2024-05-29', '2024-06-05'),
(8, 'First Semester', '2024-05-01', '2024-05-23', '2024-05-31', '2024-05-29', '2024-06-05'),
(13, 'First Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(14, 'Second Semester', '2024-05-15', '2024-05-23', '2024-04-29', '2024-05-15', '2024-04-30'),
(15, 'First Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(16, 'Second Semester', '2024-05-15', '2024-05-23', '2024-04-29', '2024-05-15', '2024-04-30'),
(17, 'First Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(18, 'Second Semester', '2024-05-15', '2024-05-23', '2024-04-29', '2024-05-15', '2024-04-30'),
(19, 'First Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(20, 'Second Semester', '2024-05-15', '2024-05-23', '2024-04-29', '2024-05-15', '2024-04-30'),
(21, 'First Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(22, 'Second Semester', '2024-05-15', '2024-05-23', '2024-04-29', '2024-05-15', '2024-04-30'),
(23, 'First Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(24, 'Second Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(25, 'First Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(26, 'Second Semester', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(27, 'First Semester', '2024-05-08', '2024-05-24', '2024-05-24', '2024-05-16', '2024-05-15'),
(28, 'Second Semester', '2024-05-25', '2024-05-18', '2024-05-09', '2024-05-10', '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `position`, `email`) VALUES
(1, 'dawit obsa', 'english teacher', 'davee@gmail.com'),
(2, 'Komarsan Berhanu', 'History Teacher', 'komybire471@gmail.com'),
(3, 'Gelete Fikadu', 'Chemistry Teacher', 'galo@gmail.com'),
(4, 'kenasa chala', 'guard', 'berhanu@gmail.com'),
(5, 'kenasa chala', 'history Teacher', 'ddddddddd@gmail.com'),
(6, 'chaltu Abebe', 'secretary', 'kodibire@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentinformation`
--

CREATE TABLE `studentinformation` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `averageScore` decimal(5,2) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinformation`
--

INSERT INTO `studentinformation` (`id`, `firstName`, `middleName`, `averageScore`, `rank`) VALUES
(1, 'obsa', 'Berhanu', 87.67, 1),
(3, 'gelete', 'fikadu', 78.50, 5),
(4, 'Kule', 'yewalashet', 72.00, 3),
(5, 'kena', 'chala', 82.00, 2),
(6, 'lami', 'hirphasa', 83.60, 2),
(7, 'muslima', 'lama', 84.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(15) DEFAULT NULL,
  `MiddleName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Gender` char(15) DEFAULT NULL,
  `Program` varchar(15) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `grade` varchar(15) DEFAULT NULL,
  `parentname` varchar(15) DEFAULT NULL,
  `parentPhone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Program`, `Age`, `grade`, `parentname`, `parentPhone`, `address`, `username`, `password`) VALUES
(31, 'kena', 'fikadu', 'kenea', 'female', 'natural', 15, '9th', 'gelete', '0910824429', 'shambu', 'hunde', ''),
(33, 'obsa', 'berhanu', 'hailu', 'male', 'natural', 15, '9th', 'obsa kenea', '0910824429', 'addis', 'obsako', ''),
(34, 'gelete', 'fikadu', 'tilaye', 'female', 'natural', 23, '12th', 'obsa kenea', '0910824429', 'gimbi', 'galate', ''),
(37, 'Kule', 'yewalashet', 'Dube', 'female', 'natural', 20, '11th', 'Bontu', '09876543', 'kuyu', 'kule', ''),
(39, 'Komarsan', 'fikadu', 'kenea', 'female', 'natural', 22, '9th', 'obsa kenea', '0910824429', 'xafo', 'ko', '1234'),
(42, 'kulani', 'chala', 'Hailu', 'female', 'natural', 16, '11th', 'obsa kenea', '0910824429', 'xafo', 'kule', ''),
(43, 'muslima', 'lama', 'robe', 'female', 'general', 17, '10th', 'obsa kenea', '0910824429', 'moyale', 'muslim', ''),
(44, 'kena', 'chala', 'bokka', 'female', 'natural', 17, '11th', 'chala boka', '0910824429', 'addis abeba', 'kechala', 'RKbfKUNT');

-- --------------------------------------------------------

--
-- Table structure for table `student_results`
--

CREATE TABLE `student_results` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `quiz` float NOT NULL,
  `midterm` float NOT NULL,
  `assignment` float NOT NULL,
  `final` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_results`
--

INSERT INTO `student_results` (`id`, `firstName`, `middleName`, `subject`, `quiz`, `midterm`, `assignment`, `final`, `total`) VALUES
(1, 'obsa', 'Berhanu', 'Mathematics', 7, 23, 10, 43, 83),
(2, 'obsa', 'Berhanu', 'English', 20, 23, 10, 40, 93),
(3, 'obsa', 'Berhanu', 'History', 7, 30, 10, 40, 87),
(4, 'gelete', 'fikadu', 'Chemistry', 9, 23, 10, 40, 82),
(5, 'gelete', 'fikadu', 'Mathematics', 7, 20, 8, 40, 75),
(6, 'Kule', 'yewalashet', 'Mathematics', 8, 20, 9, 40, 77),
(7, 'Kule', 'yewalashet', 'English', 8, 18, 9, 45, 80),
(8, 'Kule', 'yewalashet', 'Physics', 8, 18, 9, 40, 75),
(9, 'Kule', 'yewalashet', 'Chemistry', 8, 18, 9, 35, 70),
(10, 'Kule', 'yewalashet', 'History', 8, 18, 9, 35, 70),
(11, 'Kule', 'yewalashet', 'Geography', 8, 18, 9, 35, 70),
(12, 'Kule', 'yewalashet', 'Physical Education', 8, 18, 9, 35, 70),
(13, 'Kule', 'yewalashet', 'ICT', 8, 18, 9, 35, 70),
(14, 'Kule', 'yewalashet', 'Afan Oromo', 8, 18, 9, 35, 70),
(15, 'Kule', 'yewalashet', 'Amharic', 8, 18, 9, 35, 70),
(16, 'Kule', 'yewalashet', 'Agriculture', 8, 18, 9, 35, 70),
(17, 'kena', 'chala', 'History', 10, 23, 9, 40, 82),
(18, 'kena', 'chala', 'Chemistry', 10, 23, 9, 40, 82),
(19, 'kena', 'chala', 'English', 10, 23, 9, 40, 82),
(20, 'kena', 'chala', 'Mathematics', 10, 23, 9, 40, 82),
(21, 'kena', 'chala', 'Physics', 10, 23, 9, 40, 82),
(22, 'lami', 'hirphasa', 'Mathematics', 8, 25, 9, 40, 82),
(23, 'lami', 'hirphasa', 'English', 10, 25, 9, 40, 84),
(24, 'lami', 'hirphasa', 'History', 10, 25, 9, 40, 84),
(25, 'lami', 'hirphasa', 'Chemistry', 10, 25, 9, 40, 84),
(26, 'lami', 'hirphasa', 'Physics', 10, 25, 9, 40, 84),
(27, 'muslima', 'lama', 'Mathematics', 9, 25, 10, 40, 84),
(28, 'muslima', 'lama', 'English', 9, 25, 10, 40, 84),
(29, 'muslima', 'lama', 'Physical Education', 9, 25, 10, 40, 84),
(30, 'muslima', 'lama', 'Physics', 9, 25, 10, 40, 84),
(31, 'obsa', 'Berhanu', 'Mathematics', 8, 23, 7, 45, 83),
(32, 'obsa', 'Berhanu', 'Mathematics', 8, 23, 7, 45, 83),
(33, 'kena', 'chala', 'Mathematics', 7, 23, 10, 50, 90),
(34, 'kena', 'chala', 'Physical Education', 7, 23, 10, 50, 90),
(35, 'kena', 'chala', 'Physics', 7, 23, 10, 50, 90),
(36, 'kena', 'chala', 'English', 7, 23, 10, 50, 90),
(37, 'Komarsan', 'fikadu', 'Mathematics', 8, 23, 10, 50, 91);

-- --------------------------------------------------------

--
-- Table structure for table `teacherassign`
--

CREATE TABLE `teacherassign` (
  `teacher` varchar(15) DEFAULT NULL,
  `subject` varchar(15) DEFAULT NULL,
  `class` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherassign`
--

INSERT INTO `teacherassign` (`teacher`, `subject`, `class`) VALUES
('dawit', 'mathemathics', '9A AND 9B'),
('baro', 'Chemistry', '11 & 12'),
('komarsan berhan', 'History', '11 & 12'),
('komarsan berhan', 'History', '11 & 12'),
('komarsan berhan', 'History', '11 & 12'),
('komarsan berhan', 'History', '11 & 12'),
('mrs kenesa chal', 'agriculture', '11 & 12'),
('dawit obsa', 'Mathematics', '11 & 12'),
('Mrs Gabrel Many', 'English', '9A AND 9B'),
('komarsan berhan', 'Mathematics', '11A and 11B'),
('komarsan berhan', 'History', '9A AND 9B'),
('maru', 'biology', '9A');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `FirstName` varchar(15) DEFAULT NULL,
  `MiddleName` varchar(15) DEFAULT NULL,
  `LastName` varchar(15) DEFAULT NULL,
  `Email` varchar(15) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`FirstName`, `MiddleName`, `LastName`, `Email`, `Age`, `Phone`, `Username`, `password`) VALUES
('Berhanu ', 'Hailu', 'Becho', 'berhanu@gmail.c', 40, '09876543', 'behailu', 'YOw7THpx'),
('Berhanu ', 'Hailu', 'Becho', 'berhanu@gmail.c', 40, '09876543', 'behailu', 'i5tQxldJ'),
('Komarsan', 'Hailu', 'Becho', 'komybire471@gma', 15, '09876543', 'komybire', 'komy'),
('dawit ', 'obsa', 'kenea', 'davee@gmail.com', 21, '0910824429', 'daobsa', 'PmF498TC'),
('mohaz', 'black', 'abdi', 'davee@gmail.com', 34, '098765532', 'mame', '1234'),
('abebe', 'bekkele', 'chala', 'komybire471@gma', 40, '09876543', 'abex', '1234'),
('Baro', 'Name', 'bayata', 'berhanu@gmail.c', 24, '09876543', 'baro', '1234'),
('1', '2', '?', 'berhanu@gmail.c', 21, '098766534', '12', 'Jah3wrXl');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assignment`
--

CREATE TABLE `teacher_assignment` (
  `TeacherName` varchar(100) DEFAULT NULL,
  `Subject` varchar(15) DEFAULT NULL,
  `Class` varchar(15) DEFAULT NULL,
  `Program` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_assignment`
--

INSERT INTO `teacher_assignment` (`TeacherName`, `Subject`, `Class`, `Program`) VALUES
('mrs Gelete Fika', 'Chemistry', '9A AND 9B', ''),
('mrs Gelete Fikadu', 'Mathematics', '9A AND 9B', 'natural'),
('mrs Gelete Fikadu', 'Mathematics', '9A AND 9B', 'natural'),
('mrs Getahun Fikadu', 'english', '11 & 12', 'natural'),
('mrs Getahun Fikadu', 'english', '11 & 12', 'natural'),
('mrs Dawit Obsa', 'Mathematics', '9 AND 10', 'social'),
('mrs Dawit Obsa', 'Mathematics', '9 AND 10', 'social'),
('mrs Dawit Obsa', 'Mathematics', '9 AND 10', 'social'),
('mrs Dawit Obsa', 'Mathematics', '9 AND 10', 'social'),
('mrs Dawit Obsa', 'Mathematics', '9 AND 10', 'social'),
('mrs Dawit Obsa', 'Mathematics', '9 AND 10', 'social'),
('mrs komarsan Berhanu', 'History', '9 & 10', 'General'),
('mrs komarsan Berhanu', 'History', '9 & 10', 'General'),
('mrs komarsan Berhanu', 'History', '9 & 10', 'General');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade9table`
--
ALTER TABLE `grade9table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade10table`
--
ALTER TABLE `grade10table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade11table`
--
ALTER TABLE `grade11table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade12table`
--
ALTER TABLE `grade12table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeroom_teachers`
--
ALTER TABLE `homeroom_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_dates`
--
ALTER TABLE `semester_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinformation`
--
ALTER TABLE `studentinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_results`
--
ALTER TABLE `student_results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade9table`
--
ALTER TABLE `grade9table`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `grade10table`
--
ALTER TABLE `grade10table`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grade11table`
--
ALTER TABLE `grade11table`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grade12table`
--
ALTER TABLE `grade12table`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeroom_teachers`
--
ALTER TABLE `homeroom_teachers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semester_dates`
--
ALTER TABLE `semester_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentinformation`
--
ALTER TABLE `studentinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `student_results`
--
ALTER TABLE `student_results`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `testdatabase`
--
CREATE DATABASE IF NOT EXISTS `testdatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testdatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `tide` varchar(75) NOT NULL,
  `createdom` date NOT NULL,
  `department` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `usertype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
--
-- Database: `university`
--
CREATE DATABASE IF NOT EXISTS `university` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `university`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `department` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`firstname`, `lastname`, `age`, `department`, `id`) VALUES
('dawit', 'obsa', 21, 'SWE', 'RU3341/14-0'),
('komarsan', 'berhanu', 21, 'SWE', 'RU3491/14-0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
