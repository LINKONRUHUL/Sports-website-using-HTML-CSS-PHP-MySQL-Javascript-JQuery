-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2015 at 07:40 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sportszone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE IF NOT EXISTS `admin_panel` (
  `name` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`name`, `nickname`, `email`, `password`, `job`, `user_id`) VALUES
('Mahamudul hasan', 'shuvro', 'iamshuvro13@gmail.com', '123456', 'student', 1),
('shuvro', 'protty', 'iamshuvro@gmail.com', '1234', 'student', 2),
('masum', 'shuvro', 'masum@gmail.com', '123456', 'student', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `id_post`, `date`) VALUES
(20, 'Guest', '', 'andjda', 1, '2015-06-24 17:02:29'),
(19, 'shuvro', '', 'what a ', 2, '2015-05-17 07:28:50'),
(18, 'shuvro', '', 'what a match it is\n', 1, '2015-04-20 10:02:38'),
(17, 'shuvro', '', 'this ', 1, '2015-03-18 06:44:57'),
(16, 'shuvro', '', 'what a match !', 1, '2015-03-18 05:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(400) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`picture_id`, `picture`, `heading`) VALUES
(13, 'http://localhost/sportszone/upload/12341426647559Shahid-Afridi.jpg', 'Pakistan win the match'),
(12, 'http://localhost/sportszone/upload/12341426647432neymar-0a.jpg', 'Neymar gets 2 goal'),
(11, 'http://localhost/sportszone/upload/1234142664739966749.jpg', 'what a match by south africa'),
(10, 'http://localhost/sportszone/upload/12341426647368208481.jpg', 'What a interesting match it is ');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `score_id` int(100) NOT NULL AUTO_INCREMENT,
  `team1` varchar(200) NOT NULL,
  `team1_pic` varchar(200) NOT NULL,
  `score1` varchar(200) NOT NULL,
  `wicket1` varchar(200) NOT NULL,
  `team2` varchar(200) NOT NULL,
  `team2_pic` varchar(200) NOT NULL,
  `score2` varchar(200) NOT NULL,
  `wicket2` varchar(200) NOT NULL,
  `cricket` text NOT NULL,
  PRIMARY KEY (`score_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `score`
--


-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `heading` varchar(1000) NOT NULL,
  `status` text NOT NULL,
  `date` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_id` int(100) NOT NULL,
  `shortcut_status` text NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`heading`, `status`, `date`, `image`, `status_id`, `news_id`, `shortcut_status`) VALUES
('HOLDER PUTS WEST INDIES IN SIGHT OF QUARTERFINALS', 'The penultimate group stage clash of the ICC Cricket World Cup 2015 that pitted the West Indies against the United Arab Emirates was a do-or-die encounter for Jason Holderâ€™s men. The West Indies knew it needed to win, and win big, to keep its hopes of a quarterfinal berth alive.\r\n\r\nLed by Holder himself, who returned 4 for 27 in 10 overs to keep UAE to 175, the West Indies cantered to a six-wicket win in just 30.3 overs at the McLean Park on Sunday (March 15). Now, unless the last league stage match between Ireland-Pakistan match ends in a tie or is washed out, the West Indies will make its way into the quarterfinals, having raised its net run-rate above both the other teams in the fray.', 'Tuesday 17th of March 2015 07:15:09 AM', 'http://localhost/sportszone/upload/1234142657650967271.jpg', 76, 2, 'The penultimate group stage clash of the ICC Cricket World Cup 2015 that pitted the West Indies against the United Arab Emirates was a do-or-die encounter for Jason Holderâ€™s men. The West Indies knew it needed to win, and win big, to keep its hopes of a quarterfinal berth alive'),
('RAINA, DHONI GUIDE INDIA TO SIXTH WIN', 'In the four One-Day Internationals leading up to the World Cup, India managed just 267, 153, 69 for 2 and 200 in the tri-series in Australia, contriving even to lose to England. Since, then, it has racked up a perfect record, going six for six in the league phase of the ICC Cricket World Cup 2015, topping Pool B, when Zimbabwe was shaded by six wickets.\r\n\r\nOn an emotional day when Brendan Taylor stood, hand on heart, for the Zimbabwe national anthem one final time, and then raised his bat to a roaringly appreciative crowd after scoring his eighth ODI hundred, Zimbabwe fought, first putting 287 on the board, then scalping early wickets.\r\n\r\nBut, India just had too much firepower in its ranks. The largely untested middle order was summoned to earn its bread, and Suresh Raina and Mahendra Singh Dhoni put together a typically energetic partnership, having come together at 92 for 4.', 'Tuesday 17th of March 2015 07:16:08 AM', 'http://localhost/sportszone/upload/1234142657656867255.jpg', 77, 3, 'In the four One-Day Internationals leading up to the World Cup, India managed just 267, 153, 69 for 2 and 200 in the tri-series in Australia, contriving even to lose to England. Since, then, it has racked up a perfect record, going six for six in the league phase of the ICC Cricket World Cup 2015, topping Pool B, when Zimbabwe was shaded by six wickets.'),
('SRI LANKA V SOUTH AFRICA PREVIEW, SYDNEY', 'Itâ€™s come down to this now; 12 days, 7 games and 3 victories stand between eight teams and the label of World Cup winners. After a prolonged period of foreplay that involved 42 games, cricketâ€™s pinnacle event has reached the business end, as it were. This is the point of no return, there are no more second chances, no further opportunity to right a wrong. This is when you either shape up, or ship out.\r\n\r\nSri Lanka has been here many times in the past. More often than not, it has surmounted this hurdle, an obstacle that can make nervy boys out of solid men. South Africa has been here too, many times in the past. It has been nothing but the nervy boys.', 'Tuesday 17th of March 2015 07:21:06 AM', 'http://localhost/sportszone/upload/1234142657686667324.jpg', 78, 1, 'Itâ€™s come down to this now; 12 days, 7 games and 3 victories stand between eight teams and the label of World Cup winners. After a prolonged period of foreplay that involved 42 games, cricketâ€™s pinnacle event has reached the business end, as it were.'),
('Liverpool moved within two points of the Champions League places', 'Swansea dominated the first half but, thanks to Simon Mignolet''s fine saves from Bafetimbi Gomis and Gylfi Sigurdsson, it was goalless at the interval.Swansea dominated the first half but, thanks to Simon Mignolet''s fine saves from Bafetimbi Gomis and Gylfi Sigurdsson, it was goalless at the interval.', 'Tuesday 17th of March 2015 07:31:31 AM', 'http://localhost/sportszone/upload/12341426577491messi3.jpg', 80, 4, 'Swansea dominated the first half but, thanks to Simon Mignolet''s fine saves from Bafetimbi Gomis and Gylfi Sigurdsson, it was goalless at the interval.'),
('Messi wins the match again', 'what a match by messi what a match by messi. what a match by messi. what a match by messi .what a match by messi what a match by messi.', 'Wednesday 18th of March 2015 03:56:40 AM', 'http://localhost/sportszone/upload/12341426651000messi2.jpg', 86, 5, 'what a match by messi'),
('south africa wins the match', 'The Proteas have never won a knockout match at the World Cup, but De Villiers says history will have no bearing in Sydney on Wednesday.', 'Wednesday 18th of March 2015 04:00:17 AM', 'http://localhost/sportszone/upload/12341426651217_81698057_abdevilliersgetty_624.jpg', 87, 6, 'The Proteas have never won a knockout match at the World Cup, but De Villiers says history will have no bearing in Sydney on Wednesday.'),
('What a interesting match it is ', 'A lively Danny Welbeck went close to doubling the lead before half-time.\r\nA lively Danny Welbeck went close to doubling the lead before half-time.\r\n', 'Wednesday 18th of March 2015 04:02:20 AM', 'http://localhost/sportszone/upload/12341426651340athlitiko.jpg', 88, 7, 'A lively Danny Welbeck went close to doubling the lead before half-time.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `country`) VALUES
(1, 'shuvro', 'shuvro@gmail.com', '12345', 'bangladesh'),
(2, 'sazol', 'sazol@gmail.com', '1234', 'bangladesh'),
(3, 'protty', 'protty@gmail.com', '1', 'bangladesh'),
(27, 'protty', 'protty@gmail.com', '1234', 'Bangladesh'),
(26, 'shuvro', 'shuvro@gmail.com', '1', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `video_link`
--

CREATE TABLE IF NOT EXISTS `video_link` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(500) NOT NULL,
  `video_link` varchar(500) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `video_link`
--

INSERT INTO `video_link` (`video_id`, `heading`, `video_link`, `status`) VALUES
(2, 'Chris Gayle fires World Cup record double century', 'https://www.youtube.com/v/cpMzA02vlG8', 'This was the fifth double century in one-day international history and the quickest as Gayle, with 16 sixes and 10 fours, made the most of his reprieve to set up a 73-run win over Zimbabwe.\r\nYet it could have been so different had Aussie umpire Steve Davis upheld an lbw appeal in the first over.\r\nThere were clearly two noises when Gayle was struck on the pad, but when Zimbabwe reviewed the decision it became clear the ball had struck both of his pads.'),
(3, 'south africa wins the match', 'https://www.youtube.com/v/gL7CXivAZsI', 'south africa wins the match south africa wins the match south africa wins the match south africa wins the match south africa wins the match south africa wins the match south africa wins the match south africa wins the match v south africa wins the match south africa wins the match south africa wins the match v  south africa wins the match  south africa wins the match'),
(5, 'Top ten goal of world cup football 2014', 'https://www.youtube.com/v/opG62egiKIk', 'Top ten goal of world cup football 2014.Top ten goal of world cup football 2014.Top ten goal of world cup football 2014.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
