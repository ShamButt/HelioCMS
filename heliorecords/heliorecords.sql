-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 11:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heliorecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
`id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `artist` text NOT NULL,
  `produced` text NOT NULL,
  `detail` text NOT NULL,
  `genre` text NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `image`, `title`, `category`, `artist`, `produced`, `detail`, `genre`, `tag`) VALUES
(1, 'http://localhost/heliorecords/custom/images/WILD-LIFE-VOL.1-500x600.jpg', 'Wild Life Volume 1', 'SINGLE ALBUM', 'BENI HAZE', 'NA', 'Today we’ve got an exclusive new mix from up and coming producer Beni Haze. Hailing from Roanoke, VA, Beni Haze has been around the circuit for a minute. He was actually in a group “Pnuma Trio” with Alex B. (Paper Diamond) that you should probably check out if you’re not already familiar. This 15 minute mix is the first volume of his 3 part Wild Life Mix series and is chocked full of dope music that everyone can enjoy. Be sure to keep an eye out for a new EP from Beni that will be dropping later this year, and the other 2 volumes of his Wild Life Mix series that we will be premiering later.\r\n\r\nYou can stream and download Beni Haze Wild Life Mix Vol. 1 below and check out the guest mix he did for us back in December. Enjoy.', 'Dance', 'FREE'),
(2, 'http://localhost/heliorecords/custom/images/WILD-LIFE-VOL.2-500x600.jpg', 'Wild Life Volume 2', 'SINGLE ALBUM', 'BENI HAZE', 'NA', 'Our latest Run The Trap Exclusive is the second volume of Beni Haze Wild Life Mixes. The producer from Roanoke, VA absolutely brings it with this mix and is the second of three volumes in his Wild Life series. This 15 minute mix is full of trap music bangers from What So Not, Brillz, and more. Keep an eye out for an EP from Beni that is dropping later this year and the third volume of his Wild Life Mix series that we will be premiering later.', 'Dance', 'FREE'),
(3, 'http://localhost/heliorecords/custom/images/wild3.jpg', 'Wild Life Volume 3', 'SINGLE ALBUM', 'BENI HAZE', 'NA', 'Our dude Beni Haze is back with the third and final installment of his Wild Life Mini Mix Series. Coming through with an assortment of trap music and hip hop heat, combined with a variety of special edits and intricacies along the way. If you don’t know about Beni, you should check out exclusive interview with him here, and know that he’s collaborated with the likes of Pusha T, Kyle, and more; as well as serving as one of the members of Pnuma Trio with Alex B (Paper Diamond), and a current member of Mansions On the Moon.', 'DanceFree', 'FREE');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `twitter_link` varchar(200) NOT NULL,
  `insta_link` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `short_detail` text NOT NULL,
  `soundcloud_link` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `genre`, `image`, `fb_link`, `twitter_link`, `insta_link`, `detail`, `short_detail`, `soundcloud_link`, `email`) VALUES
(1, 'Beni Haze', 'Producer, SONGWRITER AND DJ', 'http://localhost/heliorecords/custom/images/BH_FACE.png', '', 'https://twitter.com/benihaze', 'https://instagram.com/henibaze/', 'Beni Haze hails from the lover''s state, Virginia, home to a couple of the country''s most celebrated producers. The Neptunes and Timbaland. Pharrell and fellow N.E.R.D. member Shae Haley discovered Beni via his band Mansions on the Moon. Through his studio experiences he began to delve deeper into the world of production, collaborating with the likes of Chad Hugo, Diplo, Juicy J, Pusha T, and Paper Diamond. While music genres try to build boundaries to separate themselves from each other, Beni Haze lives to explore ways to unite them together through his songwriting, production, and live DJ performances.', 'Beni Haze hails from the lover''s state, Virginia, home to a couple of the country''s most celebrated producers. The Neptunes and Timbaland. Pharrell and fellow N.E.R.D. member Shae Haley discovered Beni via his band Mansions on the Moon. Through his studio experiences he...', '', 'benihaze@heliorecords.com'),
(2, 'Deffie', 'Super Producer AND DJ', 'http://localhost/heliorecords/custom/images/deffie.png', 'https://www.facebook.com/deffiedeff', 'https://twitter.com/deffiedeff', 'https://instagram.com/deffiedeff', 'Deffie is Mike Perry, a 20-year-old producer based in Los Angeles, California. Fortunate enough to have a computer lab filled with iMacs in middle school, he began to fiddle around with GarageBand, and thus began his love with music production. It wasn''t until 2012 when he joined small Orange County based hip-hop group when he saw what it was truly like to work in a group environment, but he parted ways before moving to Los Angeles in 2013. He found a home in production collective Film Noir at the onset of 2015, and began to flourish while working with breakout artists such as Masego, amassing a sizable following online throughout the year. Fresh off of a European mini-tour with friends MIKKOH and R.O.M, his music has been supported by the likes of labels such as SOULECTION, Team Supreme, Film Noir, ZenSupremacy, Kolossus and artists such as ESTA, Oshi, Medasin, Andre Power, KRNE, and Josh Pan. His sound is influenced by Mr. Carmack, Flying Lotus, Kaytranada, and Pharrell Williams.', 'Deffie is Mike Perry, a 20-year-old producer based in Los Angeles, California. Fortunate enough to have a computer lab filled with iMacs in middle school, he began to fiddle around with GarageBand, and thus began his love with music production. It wasn''t until 2012 when he joined...', '', 'deffie@heliorecords.com'),
(3, 'Mickey Bardot', 'Raper And Actor', 'http://localhost/heliorecords/custom/images/Mickey.jpg', '', '', '', 'Mickey is a rapper and actor based in Los Angeles, California.', 'Mickey is a rapper and actor based in Los Angeles, California.', '', ' mickeybardot@heliorecords.com'),
(4, 'K?YN', 'SongWriter/Singer/Rapper/Model/Entertainer', 'http://localhost/heliorecords/custom/images/pp-small.jpg', '', 'https://twitter.com/itskaynmusic', 'https://www.instagram.com/itskayn904', 'Songwriter/ Singer / Rapper/ Model/ Entertainer known by his stage name as KAYN is from Jacksonville, Florida. Helio found this young 23 year old artist with the help of affiliations, including co-owner Beni Haze. K?YN has performed with hip hop’s new wave of elite artists including 2-Chainz, T.I., Fetti Wap. Wakka FLAKKA, Yo Gotti, Kevin Gates, and many other modern day rap legends. With the help of his life long friend SM TRACKS (ATL based producer extraordinaire) he has established a quick fan base in the South, and as one of the newest artist in the Helio family, his music is quickly gaining traction across the U.S.', 'Songwriter/ Singer / Rapper/ Model/ Entertainer known by his stage name as KAYN is from Jacksonville, Florida.\r\n\r\nHelio found this young 23 year old artist with the help of affiliations, including co-owner Beni Haze. K?YN has performed with hip hop’s new wave of elite...', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news_and_events`
--

CREATE TABLE IF NOT EXISTS `latest_news_and_events` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  `seen` int(11) NOT NULL,
  `detail` text NOT NULL,
  `interview` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_news_and_events`
--

INSERT INTO `latest_news_and_events` (`id`, `title`, `image`, `date`, `seen`, `detail`, `interview`) VALUES
(1, 'FOUR TALENTS AT THE MENSION: A POOL SIDE INTERVIEW', 'http://localhost/heliorecords/custom/images/4_4.png', '2016-04-05', 133, '[L to R: Deffie, Oshi, Medasin, Taja] It’s a sunny day in Austin, Texas, halfway through the city-wide music festival, when I cruise up north to the suburbs, away from the desperate mixtape throwers and showcase shuffles. I’m meeting with some of the strongest, most buzzworthy and talented acts on SoundCloud, although don’t call them “SoundCloud producers” because it’s', 'Koi interview nai hua'),
(3, 'HIPHOPDX PREMIERE: THE LADIES GOT BENI HAZQ “SIDEWAYS”', 'http://localhost/heliorecords/custom/images/post-1024x860.png', '2016-01-27', 92, 'We asked Beni how the song came about, check out what he said: Sideways was made all in one night at Pulse studios, whose great team and studios have become a new home for creativity and collaboration. This is how I met Sirah who is incredibly dope.  I brought on board my close friends and co-producers Deffie and Sunny Norway. ', 'No interview till now'),
(4, '(DC) FAST FT.DEFFIE', 'http://localhost/heliorecords/custom/images/avatar.jpg', '2016-01-19', 138, 'Mmm. I needed this. You need this. This is exactly the kinda vibe you’ll wanna go into the weekend with: silky smooth, chilled out, and demonstratively sexy. Sean Price is a Dallas based producer that goes by the name?(dc), long-form as Dream Child, and he’s got an ear for creamy beats that you’d normally expect from a seasons vet. He’s', 'No interview'),
(5, 'DEFFIE INTERVIEW', 'http://localhost/heliorecords/custom/images/image1.jpg', '2016-01-19', 126, 'Deffie grew up in south Orange County, California, and got his introduction to production messing around on his school computers. He later went on to start multiple local different rap groups, and produce for various artists. He’s been producing since the age of 12 (Deffie’s 19, now). As a solo artist, he’s had releases with a number of labels including', 'Nill'),
(6, 'DANCE PRODUCER BENI HAZE: “I’M GOING TO BE MYSELF. I’M A WHITE NERDY KID WHO’S LEGALLY BLIND” ', 'http://localhost/heliorecords/custom/images/benihaze.jpg', '2016-01-19', 163, 'Up-and-coming producer Beni Haze has been a fixture in certain areas of the music scene for a while now; although you might not necessarily recognize his name in conjunction with dance music (that’ll change soon, we’d wager), he played keyboard in Pnuma Trio with Paper Diamond’s Alex B., and he’s most recently been seen in Mansions on the Moon with\r\n\r\n', 'Nill'),
(7, 'Deffie x Masego – “Toot That Thang”', 'http://localhost/heliorecords/custom/images/artworks.jpg', '2016-01-19', 105, 'We’re a week late, but it’s never too late for the groove. Virginia artist Masego pairs with Los Angeles producer Deffie for a smooth summer jam, “Toot That Thang.” With the backdrop of a sunset in the distance and the smell of a cookout in the air, Masego channels his inner Pharrell and “comes together tenderly” with a woman to dance the', 'nill'),
(8, 'DEFFIE & R.O.M. DELIVER A STUNNING REMIX OF PHARRELL’S “FRONTIN” [PREMIERE]', 'http://localhost/heliorecords/custom/images/palm-tree.png', '2016-02-19', 106, 'Electronic savants Deffie & R.O.M. have been proving themselves as a production dream team since the debut of their exceptional Resonance EP back in November and with every subsequent release since (including that massive tune Grandmaster that was released a few days ago..). Today, EARMILK has been given the opportunity to premiere an exquisite future-bass reinterpretation of the Pharrell Williams classic “Frontin” courtesy of the dynamic duo', ''),
(9, 'PREMIERE: BENI HAZE MELTING IN VEGAS? FEAT. KYLE', 'http://localhost/heliorecords/custom/images/benihaze.jpg', '2015-12-19', 156, 'Beni Haze is the Virginia-bred former member of electronic group Pnuma Trio, which he toured and dropped music for, along with Paper Diamond and drummer Lane Shaw. More recently, Haze along with Shaw formed the band known as Mansions on the Moon, receiving props and studio time from the like of the Neptunes and Timbaland. After working dolo on tracks', ''),
(10, 'PREMIERE: BENI HAZE FEATURING JUICY J', 'http://localhost/heliorecords/custom/images/premiere_beni.png', '2016-05-15', 170, 'On the heels of his last single Its On Me? featuring Pusha T, budding Virginia producer Beni Haze teams up with Juicy J and Kyle for another party starter. The EDM-inspired track which is co-produced by Sunny Norway finds Juicy spitting some bars about popping bottles and throwing big faces through Auto-Tune. To tie it all together, Beni sings on', '');

-- --------------------------------------------------------

--
-- Table structure for table `past_events`
--

CREATE TABLE IF NOT EXISTS `past_events` (
`id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `location` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date DEFAULT NULL,
  `entrydate` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  `googlemaplink` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_events`
--

INSERT INTO `past_events` (`id`, `image`, `title`, `startTime`, `endTime`, `location`, `startDate`, `endDate`, `entrydate`, `month`, `googlemaplink`) VALUES
(1, 'http://localhost/heliorecords/custom/images/BL-Camp-Trill-Deffie.jpg', 'CAMP TRILL SUMMER SEASON FINALE', '12:00:00', '06:00:00', 'VERMONT AVE, 239 STREET VERMONT AVE 90004 ', '2015-11-05', '2015-11-18', 22, 'October', 'http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=239+street+Vermont+Ave+90004'),
(2, 'http://localhost/heliorecords/custom/images/Europe-Deffie.jpg', 'THE GOOD VIBE PYRMDPLAZA', '22:00:00', '05:00:00', 'PYRMD PLAZA, PARIS, FRANCE ', '2015-10-16', '2015-10-17', 0, '', ''),
(3, 'http://localhost/heliorecords/custom/images/12145158_1666975306876654_983799227_n.jpg', 'EUROPE MINI – TOUR 2015', NULL, NULL, 'RINSE FRANCE, PARIS, FRANCE ', '2015-10-24', NULL, 0, '', ''),
(4, 'http://localhost/heliorecords/custom/images/mavericks-live.jpg', 'MAVERICKS LIVE', NULL, NULL, 'MAVERICKS LIVE, 2 INDEPENDENT DRIVE\r\nJACKSONVILLE, FL 32202-5035 UNITED STATES ', '2015-04-15', NULL, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_video`
--

CREATE TABLE IF NOT EXISTS `youtube_video` (
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube_video`
--

INSERT INTO `youtube_video` (`video`) VALUES
('http://www.youtube.com/embed/xMVzkBQ0mmc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news_and_events`
--
ALTER TABLE `latest_news_and_events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `past_events`
--
ALTER TABLE `past_events`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `latest_news_and_events`
--
ALTER TABLE `latest_news_and_events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `past_events`
--
ALTER TABLE `past_events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
