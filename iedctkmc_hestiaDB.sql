-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2019 at 10:51 AM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iedctkmc_hestiaDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(9) UNSIGNED NOT NULL,
  `cat_name` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pswd` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `username`, `pswd`) VALUES
(1, 'technical-cs', 'cse@hestia.live', '$2y$13$6xYxoDdIspGds4aZhJ.tneoetclRMGnUpcWBHTmNSphVWoSfnfKvq'),
(2, 'technical-arch', 'arch@hestia.live', '$2y$13$FDiJ2XzNchtzIthpJX03u.u1KmfFLeLvug/6d3QyoKNpzyYbJ3joO'),
(3, 'technical-chem', 'chem@hestia.live', '$2y$13$gAqy8WGfcrTmI5vZCPxPju8vTkjJiI6oyrQVOjHbIzcAOY55GuQM2'),
(4, 'technical-civil', 'civil@hestia.live', '$2y$13$TorwnNj/0oh9DKpTbMUhbu3jKwvW4Ch56iI/ZiV1.PVff9tCSF7hS'),
(5, 'technical-ec', 'ec@hestia.live', '$2y$13$TcydtUI7VT2XEzGL32cAXe8.Fh2fkDtiP4gdCnygvHvFblbVHqTQG'),
(6, 'technical-eee', 'eee@hestia.live', '$2y$13$nNwUc0EXJPrxj60WWe28EOUQNrsbRs7IP5/wi7tPzrehtHhYYhaUO'),
(7, 'technical-mech', 'mech@hestia.live', '$2y$13$d0dJbgonkS/yQPZVeaYxleI5d4.3cwbzAUG4qX1Cvky5G79SidkIa'),
(8, 'technical-mca', 'mca@hestia.live', '$2y$13$o0WMitmbCW0rViJQdSJ3Se5s4XCaCCysHs3T4Xofw.AX0D7s7efZC'),
(9, 'technical-robotics', 'robotics@hestia.live', '$2y$13$XBbnhqiZYAXjjhaRgFN5weFVI/hmuJr.hNPbsSLndVX2Hfmsu13Ty'),
(10, 'cultural-dance', 'dance@hestia.live', '$2y$13$g2QJfh6hBqHx9NAr23KN0eZRJN/WH3txgEFIeAcHx7gGviaSy5GeG'),
(11, 'cultural-film', 'film@hestia.live', '$2y$13$Qe1ZtffklXqzu5cwMeQKTunvGYIClUOMGlMaQ6WmuTO/GRmAli.gW'),
(12, 'cultural-music', 'music@hestia.live', '$2y$13$WJWjiOQh.rlvEL8ynIwLouJcII2L44h3iOpPPVG8QPTt/U3xpTjJ2'),
(13, 'cultural-fine-arts', 'fine.arts@hestia.live', '$2y$13$s64p9K7zRjPcRvDxMFr9Eel4NkfH/hPrO/jxNlZgYrbCC83w4Umri'),
(14, 'cultural-sports', 'sports@hestia.live', '$2y$13$VLgThMQdGURO6D/8RmhrHOPhN0uTEBjauTo/TlnWZlhDT2AAgyRL2'),
(15, 'cultural-literacy', 'literacy@hestia.live', '$2y$13$3..RedId79aYd7BAMJXUR..Vry4h15HbJ53ULIgcK.Oy8G7132C0S'),
(16, 'workshops', 'workshops@hestia.live', '$2y$13$GRiB2iX/l0YyZ6nWtHTxq.KykYpBEKWGiKf0yBoD95kcaiu3BYjhq'),
(17, 'online', 'online.events@hestia.live', '$2y$13$dRuYk0I5L.5gjNRvP3bTEOyyrOgvSv7VWihlq4mOXoRQBHpE3w1eq'),
(18, 'general', 'general.events@hestia.live', '$2y$13$k/5Iktxn.pINFgJDfcEAR.7E3/QcIMY0eXFHfaX8cQMECq0FUYs4O');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(9) UNSIGNED NOT NULL,
  `cat_id` int(9) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `short_desc` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `min_memb` int(9) DEFAULT NULL,
  `max_memb` int(9) DEFAULT NULL,
  `venue` varchar(255) NOT NULL,
  `reg_fee` int(10) DEFAULT NULL,
  `prize` varchar(10) NOT NULL,
  `file1` varchar(60) DEFAULT NULL,
  `file2` varchar(60) DEFAULT NULL,
  `co1_name` varchar(100) NOT NULL,
  `co1_no` varchar(20) NOT NULL,
  `co2_name` varchar(100) NOT NULL,
  `co2_no` varchar(20) NOT NULL,
  `seats` int(10) NOT NULL,
  `reg_start` datetime NOT NULL,
  `reg_end` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `pswd` char(60) NOT NULL,
  `link` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `cat_id`, `title`, `short_desc`, `details`, `min_memb`, `max_memb`, `venue`, `reg_fee`, `prize`, `file1`, `file2`, `co1_name`, `co1_no`, `co2_name`, `co2_no`, `seats`, `reg_start`, `reg_end`, `username`, `pswd`, `link`) VALUES
(1, 18, 'Denovo', '\"In a world of innovation and creativity, words like crazy, weird and eccentric are compliments.\" - Michael Kouly', '<p>Working on something crazy and innovative? Think these outlandish ideas can change the world? For all those brave and talented innovators out there, Hestia\'19 proudly presents \'Denovo\', a one-of-a-kind project presentation extravaganza. Fame and fortune await all those who dare to venture beyond the ordinary and come up with pioneering solutions to our mundane problems. So be sure to grab this unique opportunity to pitch your creations against the best teams from across the country in a showdown of wits, where only the crem&eacute;-de la-crem&eacute; will come out on top.</p>\r\n<p><strong>RULES:</strong></p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Team members should be limited to five</li>\r\n<li>Deadlines should be strictly followed</li>\r\n<li>The abstract should include the working principle of the project</li>\r\n<li>All material requirements of the project should be met by the participants</li>\r\n<li>Plagiarism of any manner will not be entertained</li>\r\n<li>Decisions of the judging panel will be final</li>\r\n</ul>\r\n<p><br />The primary themes of DENOVO are given below but not restricted to:</p>\r\n<ul style=\"list-style-type: circle;\">\r\n<li>Software projects</li>\r\n<li>Android apps</li>\r\n<li>Hardware Projects</li>\r\n<li>Web based projects</li>\r\n<li>Image processing projects</li>\r\n<li>Information security projects</li>\r\n<li>Cloud Computing projects</li>\r\n<li>Big Data Analytics</li>\r\n<li>Power management projects</li>\r\n</ul>\r\n<p>The submitted projects will pass through a peer review process. The selected project group will be invited to showcase their project with demonstrated model during the Fest. The best two projects will be awarded with attractive prizes and mentorship.<br />Participants need to submit a video of max. 2 mins length explaining the project along with the abstract.</p>\r\n<p><strong>Judging Criteria</strong>:</p>\r\n<ul>\r\n<li>The project should be unique and original.</li>\r\n<li>External aid besides mentorship in meeting the project requirements and project accomplishments will be considered as a demerit.</li>\r\n<li>Adhere to the key elements- Concept, knowledge, skill, relevance,feasibility.</li>\r\n<li>Impact of the project as a boon to society.</li>\r\n<li>Presentation skills of the team.</li>\r\n<li>USP of the idea used and the level to which it was implemented and displayed as a project</li>\r\n</ul>', 4, 4, '', 1000, '75K', 'Link to Abstract (pdf)', 'Link to Video', 'Neethu E V', '9544695845', 'Abraham Mulamootil', '9947871688', 30, '2019-03-14 00:00:00', '2019-03-20 00:00:00', 'denovo', '$2y$13$L6.nhnKcY7h./ebYgWCdz.eBfn1Z7dTeWfuWDoh8.7PbhLa6kN51i', 'denovo'),
(2, 9, 'Robo War', '\"Wage the war, with your machine, to built the future\"', '<p>Competitors bring their robots ready to battle and are pitted against their competitors\' robots in one-on-one knockout matches.The aim is to push the opponent\'s &nbsp;bot off the arena. First round winners will qualify for higher levels.</p>\r\n<p><strong>Rules and regulations</strong> :</p>\r\n<ul><li>The size of the arena should be 2.5&times;2.5 m</li><li>Dimensions &nbsp;of robot should be within 55&times;55&times;40 cm ( tolerance of 10% on dimensions)</li><li>The weight of the robot shouldn\'t exceed 25 Kg</li><li>The bot can be wired or wireless. If wired length of wire shouldn\'t exceed 5m.</li><li> There should be no entanglement of the wires during the match. If there happens to be one, a reset would be announced by the judge.</li><li>The robot can have flippers &amp; lifting devices, cutters, etc.</li><li>Use of weapons designed to cause invisible damage to other robot tesla coil, Van de graff generators, stun guns or similar devices are excluded.</li><li>Flammable liquids, gases, explosives are also excluded.</li><li>The mode of mobility can be rolling. Jumping, Hopping &amp; flying are not allowed.</li><li>Max of 5 students per team. Spot registration will be available.</li><li>In case of disputes, decision of the event in charge will be final</li><li>Organisers possess the right to change the rules if necessary</li><li>There should be minimum of 3 participants or else the event will be void</p>\r\n </ul>', 3, 5, '', 500, '30K', NULL, NULL, 'Athul Krishnan G', '9895067703', 'Sayuj Jayadev', '9400604321', 20, '2019-03-14 00:00:00', '2019-03-28 00:00:00', 'robo_war', '$2y$13$cilaCT3eTddeV.HF7kEWIe3dkmSOYxAfqfMmzVYPys7laDwrCSfqC', 'robo_war'),
(3, 9, 'Drone Dash', 'Tired of roads..?', '<p>The time has come to boost the motors in air &amp; conquer the circuit. *HESTIA\'19* presents to you *DRONE DASH* to show your talents in aero modelling and drone racing.Make your drone the ultimate eagle of the sky..!!</p>\r\n<p><strong>Rules:</strong></p>\r\n<ul>\r\n<li>Maximum 4 members per team.</li>\r\n<li>The dimensions of the drone must not exceed 400mm*400mm*300mm.</li>\r\n<li>The drone must not be automated and must be controlled manually.</li>\r\n<li>Teams should bring there own remote controls that operate at 2.4GHz.</li>\r\n<li>Ready-made motors, remote control units, electronic speed controllers and propellers are allowed, although ready to use kits are strictly prohibited.</li>\r\n<li>FPV drones are preferred, though not compulsory.</li>\r\n<li>A maximum of 10mins will be given to complete the entire circuit.</li>\r\n</ul>\r\n<p><strong>Judging Criteria</strong></p>\r\n<ul>\r\n  <li>The circuit will consist of obstacles and checkpoints. Reaching each checkpoint will earn you points.</li><li>The drones are not allowed to land once the circuit has begun.</li><li> Crash landing will force the drone to move back to the previous checkpoint.</li><li>Failure to cross an obstacle in 3 attempts will force him to skip that segment.</li><li>In addition to the points earned, the performance of each team will be timed. Shorter timings will earn the team higher points.</li><li>In case of a tie, the cost effective design of the drone will be considered to determine the winner.</li>\r\n</ul>\r\n<p>\r\n  So why wait.?&nbsp; Beat the battle and be ready to have *prizes worth *25k*\r\n</p>', 2, 4, '', 1000, '25K', NULL, NULL, 'Nimya CP', '9495732554', 'Thomas Kuruvila', '9496800215', 20, '2019-03-14 00:00:00', '2019-03-28 00:00:00', 'drone_dash', '$2y$13$nmbPaueqP3FJB82jrAeoE.DOONipQYFMmKcdRscbkE7kVVSzj4djC', 'drone_dash'),
(4, 10, 'Choreo Night', 'It\'s time to get your crew spirit at its peak, for the event of skills and expressions, moves and energy, emotions and coordination is back!', '<p><strong>Rules and Regulations</strong>:</p>\r\n<ol>\r\n<li>A team may comprise of a minimum of 5 to a maximum of 25 members including backstage crew.</li>\r\n<li>The soundtrack in MP3 format must be submitted to the coordinators in a pen drive at least an hour prior to the event.</li>\r\n<li>Maximum time allotted for each performance is 12 minutes.</li>\r\n<li>Each participant must carry with them their college ID.</li>\r\n<li>The decision of the judges and the coordinators shall be final and binding.</li>\r\n<li>Properties, if any, should be arranged by the contestants themselves. If any special arrangements are required, the coordinators should be informed prior to the competition.&nbsp;</li>\r\n<li>Any kind of fluid, powder, flame or heavy object is not allowed on stage and will lead to direct disqualification of the team.</li>\r\n<li>Obscenity, vulgarity or any indecent display of any kind will entail immediate disqualification.</li>\r\n<li>Violation of any rules will lead to immediate disqualification.</li>\r\n<li>Failure to be present at the time of event leads to disqualification.</li>\r\n</ol>', 5, 25, '', 200, '100K', NULL, NULL, 'Amal Jyothi', '9495512675', 'Adhil Rasheed', '9496645408', 0, '2019-03-14 00:00:00', '2019-03-27 00:00:00', 'choreo.night', '$2y$13$cuBNddjuxbPdDxqDRcb3oeIx6KJuU5E1enkmdtiD24aDVSXFhNrrS', 'choreo_night');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(9) UNSIGNED NOT NULL,
  `event_id` int(9) UNSIGNED NOT NULL,
  `reg_email` varchar(20) NOT NULL,
  `member_email` varchar(20) NOT NULL,
  `file1` varchar(150) DEFAULT NULL,
  `file2` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `event_id` int(9) UNSIGNED NOT NULL,
  `label` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `event_id` int(9) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `email`, `phone`, `college`) VALUES
('Amal Jossy', 'amaljossy1@gmail.com', '9496863169', 'TKM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);

--
-- Constraints for table `time`
--
ALTER TABLE `time`
  ADD CONSTRAINT `time_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
