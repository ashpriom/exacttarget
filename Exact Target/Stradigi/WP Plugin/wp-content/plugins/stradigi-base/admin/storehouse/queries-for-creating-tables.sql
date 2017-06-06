SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */

--
-- Database: `snapshot_synstudio`
--
-----------------------------------------------------------
--
-- Table structure for table `syn1_syn_classroom`
--

CREATE TABLE IF NOT EXISTS `syn1_syn_classroom` (
`classroom_id` int(11) NOT NULL,
  `classroom_name_en` varchar(45) NOT NULL,
  `classroom_name_fr` varchar(45) NOT NULL,
  `classroom_capacity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syn1_syn_classroom`
--

INSERT INTO `syn1_syn_classroom` (`classroom_id`, `classroom_name_en`, `classroom_name_fr`, `classroom_capacity`) VALUES
(1, 'Class 1', 'Salle 1', 25),
(5, 'Class 4', 'Salle 4', 23),
(6, 'Class 3', 'Salle 3', 78),
(7, 'Class 5', 'Salle 5', 30),
(8, 'Class 6', 'Salle 6', 24),
(9, 'Class 2', 'Salle 2', 50);

-- --------------------------------------------------------

--
-- Table structure for table `syn1_syn_semester`
--

CREATE TABLE IF NOT EXISTS `syn1_syn_semester` (
`semester_id` int(11) NOT NULL,
  `semester_name_en` varchar(45) DEFAULT NULL,
  `semester_name_fr` varchar(45) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syn1_syn_semester`
--

INSERT INTO `syn1_syn_semester` (`semester_id`, `semester_name_en`, `semester_name_fr`, `start_date`, `end_date`) VALUES
(1, 'Summer 2015', 'Eté 2015', '2015-07-02', '2015-09-22'),
(8, 'Fall 2015', 'Autumne 2015', '2016-10-01', '2016-12-07'),
(9, 'Winter 2016', 'Hiver 2016', '2016-01-04', '2016-04-07'),
(10, 'Summer 2016', 'Eté 16', '2016-05-24', '2016-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `syn1_syn_classinstance`
--

CREATE TABLE IF NOT EXISTS `syn1_syn_classinstance` (
`classinstance_id` int(11) NOT NULL,
  `class_semester_id` int(11) NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `start_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classinstance_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=743 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syn1_syn_classinstance`
--

INSERT INTO `syn1_syn_classinstance` (`classinstance_id`, `class_semester_id`, `classroom_id`, `start_timestamp`, `end_timestamp`, `classinstance_status`) VALUES
(647, 8, 6, '2015-10-27 01:00:00', '2015-10-27 02:30:00', 1),
(649, 8, 6, '2015-11-10 01:00:00', '2015-11-10 02:30:00', 1),
(656, 6, 1, '2015-11-10 00:00:00', '2015-11-10 02:00:00', 1),
(661, 6, 1, '2015-12-15 00:00:00', '2015-12-15 02:00:00', 1),
(666, 7, 6, '2015-09-02 02:30:00', '2015-09-02 04:00:00', 1),
(669, 7, 6, '2015-09-10 02:30:00', '2015-09-10 04:00:00', 1),
(670, 7, 6, '2015-09-16 02:30:00', '2015-09-16 04:00:00', 1),
(671, 7, 6, '2015-09-17 02:30:00', '2015-09-17 04:00:00', 1),
(672, 7, 6, '2015-09-23 02:30:00', '2015-09-23 04:00:00', 1),
(673, 7, 6, '2015-09-24 02:30:00', '2015-09-24 04:00:00', 1),
(674, 7, 6, '2015-09-30 02:30:00', '2015-09-30 04:00:00', 1),
(675, 7, 6, '2015-10-01 02:30:00', '2015-10-01 04:00:00', 1),
(676, 7, 6, '2015-10-07 02:30:00', '2015-10-07 04:00:00', 1),
(677, 7, 6, '2015-10-08 02:30:00', '2015-10-08 04:00:00', 1),
(678, 7, 6, '2015-10-14 02:30:00', '2015-10-14 04:00:00', 1),
(679, 7, 6, '2015-10-15 02:30:00', '2015-10-15 04:00:00', 1),
(680, 7, 6, '2015-10-21 02:30:00', '2015-10-21 04:00:00', 1),
(681, 7, 6, '2015-10-22 02:30:00', '2015-10-22 04:00:00', 1),
(682, 7, 6, '2015-10-28 02:30:00', '2015-10-28 04:00:00', 1),
(683, 7, 6, '2015-10-29 02:30:00', '2015-10-29 04:00:00', 1),
(684, 7, 6, '2015-11-04 02:30:00', '2015-11-04 04:00:00', 1),
(685, 7, 6, '2015-11-05 02:30:00', '2015-11-05 04:00:00', 1),
(686, 7, 6, '2015-11-11 02:30:00', '2015-11-11 04:00:00', 1),
(687, 7, 6, '2015-11-12 02:30:00', '2015-11-12 04:00:00', 1),
(688, 7, 6, '2015-11-18 02:30:00', '2015-11-18 04:00:00', 1),
(689, 7, 6, '2015-11-19 02:30:00', '2015-11-19 04:00:00', 1),
(690, 10, 7, '2015-09-28 01:30:00', '2015-09-28 10:30:00', 1),
(691, 10, 7, '2015-10-05 01:30:00', '2015-10-05 10:30:00', 1),
(701, 10, 7, '2015-12-14 01:30:00', '2015-12-14 10:30:00', 1),
(702, 10, 7, '2015-12-21 01:30:00', '2015-12-21 10:30:00', 1),
(704, 1, 7, '2016-01-13 14:00:00', '2016-01-13 16:00:00', 1),
(713, 1, 7, '2016-03-16 14:00:00', '2016-03-16 16:00:00', 1),
(714, 1, 7, '2016-03-23 14:00:00', '2016-03-23 16:00:00', 1),
(715, 1, 7, '2016-03-30 14:00:00', '2016-03-30 16:00:00', 1),
(716, 5, 7, '2015-10-01 15:30:00', '2015-10-01 17:00:00', 1),
(719, 5, 7, '2015-10-22 01:30:00', '2015-10-22 02:30:00', 1),
(721, 5, 7, '2015-11-05 01:30:00', '2015-11-05 02:30:00', 1),
(723, 5, 7, '2015-11-19 01:30:00', '2015-11-19 02:30:00', 1),
(724, 5, 7, '2015-11-26 01:30:00', '2015-11-26 02:30:00', 1),
(725, 5, 7, '2015-12-03 01:30:00', '2015-12-03 02:30:00', 1),
(726, 5, 7, '2015-12-10 01:30:00', '2015-12-10 02:30:00', 1),
(727, 5, 7, '2015-12-17 01:30:00', '2015-12-17 02:30:00', 1),
(728, 5, 7, '2015-12-24 01:30:00', '2015-12-24 02:30:00', 1),
(729, 4, 1, '2016-01-06 12:30:00', '2016-01-06 15:30:00', 1),
(730, 4, 1, '2016-01-13 12:30:00', '2016-01-13 15:30:00', 1),
(731, 4, 1, '2016-01-20 12:30:00', '2016-01-20 15:30:00', 1),
(732, 4, 1, '2016-01-27 12:30:00', '2016-01-27 15:30:00', 1),
(733, 4, 1, '2016-02-03 12:30:00', '2016-02-03 15:30:00', 1),
(734, 4, 1, '2016-02-10 12:30:00', '2016-02-10 15:30:00', 1),
(735, 4, 1, '2016-02-17 12:30:00', '2016-02-17 15:30:00', 1),
(736, 4, 1, '2016-02-24 12:30:00', '2016-02-24 15:30:00', 1),
(737, 4, 1, '2016-03-02 12:30:00', '2016-03-02 15:30:00', 1),
(738, 4, 1, '2016-03-09 12:30:00', '2016-03-09 15:30:00', 1),
(739, 4, 1, '2016-03-16 12:30:00', '2016-03-16 15:30:00', 1),
(740, 4, 1, '2016-03-23 12:30:00', '2016-03-23 15:30:00', 1),
(741, 4, 1, '2016-03-30 12:30:00', '2016-03-30 15:30:00', 1),
(742, 4, 1, '2016-04-06 12:30:00', '2016-04-06 15:30:00', 1);

-----------------------------------------------------------

--
-- Table structure for table `syn1_syn_class_semester`
--

CREATE TABLE IF NOT EXISTS `syn1_syn_class_semester` (
`class_semester_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_semester_name_en` varchar(127) DEFAULT NULL,
  `class_semester_name_fr` varchar(127) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syn1_syn_class_semester`
--

INSERT INTO `syn1_syn_class_semester` (`class_semester_id`, `class_id`, `semester_id`, `teacher_id`, `class_semester_name_en`, `class_semester_name_fr`) VALUES
(1, 581, 8, 7166, '', ''),
(4, 10810, 9, 2541, 'Section A', 'Section A'),
(5, 10810, 9, 8803, 'Section B', 'Section B'),
(6, 10810, 9, 6677, 'A', 'A'),
(7, 6502, 10, 2537, 'A', 'A'),
(8, 627, 10, 2539, 'A', 'A'),
(10, 8788, 1, 2537, '', ''),
(11, 0, 0, 0, '', ''),
(12, 0, 0, 0, '', '');

-----------------------------------------------------------

--
-- Table structure for table `syn1_syn_attendance`
--

CREATE TABLE IF NOT EXISTS `syn1_syn_attendance` (
`attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `classinstance_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-----------------------------------------------------------

--
-- Table structure for table `syn1_syn_student`
--

CREATE TABLE IF NOT EXISTS `syn1_syn_student` (
`student_id` int(11) NOT NULL,
  `student_first` varchar(45) NOT NULL,
  `student_last` varchar(45) NOT NULL,
  `student_email` varchar(127) NOT NULL,
  `student_address1` varchar(45) DEFAULT NULL,
  `student_address2` varchar(45) DEFAULT NULL,
  `student_city` varchar(45) DEFAULT NULL,
  `student_prov` varchar(15) DEFAULT NULL,
  `student_phone` varchar(45) DEFAULT NULL,
  `student_postal` varchar(45) DEFAULT NULL,
  `student_language` varchar(45) DEFAULT NULL,
  `student_type` varchar(45) DEFAULT NULL,
  `student_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syn1_syn_student`
--

INSERT INTO `syn1_syn_student` (`student_id`, `student_first`, `student_last`, `student_email`, `student_address1`, `student_address2`, `student_city`, `student_prov`, `student_phone`, `student_postal`, `student_language`, `student_type`, `student_status`) VALUES
(3, 'Janis', 'Joplin', 'janis@bigbrother', '74 1st Street', '', 'Pointe Claire', 'QC', '514 777-7777', 'H2N 3V4', 'FR', 'Regular', 1),
(4, 'David', 'Bowie', 'david@bowie.com', '111 22 Ave', 'Apt 33', 'NDG', 'QC', '438 111-2222', 'H6E 3B5', 'EN', 'Regular', 1),
(5, 'Mick', 'Jagger', 'mick@rollingstones.com', '77 88 Street', '', 'Montreal', 'QC', '514 333-3333', 'H7B 4V2', 'FR', 'Full Time', 1),
(8, 'Syed', 'Priom', 'sa.priom@gmail.com', '2022 rue Bossuet', '', 'Montreal', 'QC', '4389292026', 'H1N 2R7', 'EN', 'Regular', 1),
(9, 'Wayne', 'Rooney', 'rooney@manutd.com', 'Manchester', '', 'Manchester', 'Manchester', '2342342342', 'n/a', 'EN', 'Full Time', 1),
(13, 'Humphrey', 'Bogart', 'humphrey@wb.com', 'west side, A', 'Frontenac', 'Los Angeles', 'Los Angeles', '1032221234', '23T 11J', 'EN', 'Full Time', 1);

-----------------------------------------------------------

--
-- Table structure for table `syn1_syn_enrollment`
--

CREATE TABLE IF NOT EXISTS `syn1_syn_enrollment` (
`enrollment_id` int(11) NOT NULL,
  `class_semester_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `enrollment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syn1_syn_enrollment`
--

INSERT INTO `syn1_syn_enrollment` (`enrollment_id`, `class_semester_id`, `student_id`, `enrollment_date`) VALUES
(5, 4, 5, '2015-09-22 19:07:59'),
(6, 4, 9, '2015-09-22 19:57:26');

-----------------------------------------------------------

--
-- AUTO_INCREMENT for table `syn1_syn_attendance`
--
ALTER TABLE `syn1_syn_attendance`
MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `syn1_syn_classinstance`
--
ALTER TABLE `syn1_syn_classinstance`
MODIFY `classinstance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=743;
--
-- AUTO_INCREMENT for table `syn1_syn_classroom`
--
ALTER TABLE `syn1_syn_classroom`
MODIFY `classroom_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `syn1_syn_class_semester`
--
ALTER TABLE `syn1_syn_class_semester`
MODIFY `class_semester_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `syn1_syn_enrollment`
--
ALTER TABLE `syn1_syn_enrollment`
MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `syn1_syn_semester`
--
ALTER TABLE `syn1_syn_semester`
MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `syn1_syn_student`
--
ALTER TABLE `syn1_syn_student`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;

--
-- Indexes for table `syn1_syn_attendance`
--
ALTER TABLE `syn1_syn_attendance`
 ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `syn1_syn_classinstance`
--
ALTER TABLE `syn1_syn_classinstance`
 ADD PRIMARY KEY (`classinstance_id`);

--
-- Indexes for table `syn1_syn_classroom`
--
ALTER TABLE `syn1_syn_classroom`
 ADD PRIMARY KEY (`classroom_id`);

--
-- Indexes for table `syn1_syn_class_semester`
--
ALTER TABLE `syn1_syn_class_semester`
 ADD PRIMARY KEY (`class_semester_id`);

--
-- Indexes for table `syn1_syn_enrollment`
--
ALTER TABLE `syn1_syn_enrollment`
 ADD PRIMARY KEY (`enrollment_id`);

--
-- Indexes for table `syn1_syn_semester`
--
ALTER TABLE `syn1_syn_semester`
 ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `syn1_syn_student`
--
ALTER TABLE `syn1_syn_student`
 ADD PRIMARY KEY (`student_id`);