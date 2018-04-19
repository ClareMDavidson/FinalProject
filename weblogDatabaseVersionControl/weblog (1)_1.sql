-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2018 at 05:50 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogPost`
--

CREATE TABLE `blogPost` (
  `blogPostID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `datePosted` date NOT NULL,
  `keywords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogPost`
--

INSERT INTO `blogPost` (`blogPostID`, `title`, `content`, `datePosted`, `keywords`) VALUES
(1, 'Help!', 'I don\'t know who to talk to, or what to do. I tried talking to my family after the first night, but they all think I\'m making it up. But I\'m not. I **swear** I\'m not.<br />\r\n<br />\r\nI\'ve barely slept in three nights. Every time I close my eyes I hear *it* scratching inside the walls. Sometimes, I hear crying too, so I know it\'s not a rat. I\'d probably be happy if it *was* a rat!<br />\r\n<br />\r\nIt\'s not just the noises, either. When I woke up this morning, there were handprints on the walls. Please help!<br />\r\n<br />\r\n!(1_GiT.jpeg)', '2018-01-09', 'help, haunted, handprints, rats'),
(2, 'Calmer today', '!(2_GiT.jpg)<br />\r\nI actually managed to get some sleep last night. I don\'t know why, but there was no scratching or sobbing. The handprints I showed you last time have vanished. Please don\'t try to tell me that\'s normal. My walls are white. You can\'t get rid of marks like that without painting them over.<br />\r\n<br />\r\nAnyway, I thought I\'d tell you a bit more about where I live. The more you know, the more chance you can help. Right? So, here goes:<br />\r\n<br />\r\nI bought a flat in a converted hospital. It\'s a gorgeous gothic building in its own grounds. I\'ve been scrimping and saving for years for a deposit on my own place. I finally had enough and then these flats came on the market. It was meant to be! At least, I thought it was.<br />\r\n<br />\r\nI was so excited when I moved in and, for the first couple of weeks, everything was wonderful. I got chatting with my immediate neighbours and they seemed really nice. The guy right next door is super hot. I know, it\'s a total cliche, but I actually went and asked if I could borrow some sugar as an excuse to talk to him! I even managed to pluck up the courage to invite him to my flat warming party, but he said he had to get up early for work. I think he\'s a fireman or something. My flat warming party went great. I invited friends and family. Everything seemed wonderful.<br />\r\n<br />\r\nAnd then the noises started.<br />\r\n<br />\r\nI thought I was imagining it at first. Then I thought it was a rat. I asked my neighbour if he\'d heard anything, but he said he\'s a heavy sleeper. The next night, I heard the scratching again, but there was crying too. This horrid uncontrollable sobbing. It went on for days. I barely slept and, after three nights of it and my family dismissing me, I started this blog to try to make sense of it all. I still have no clue what\'s going on, but I\'m grateful I managed to get a good night\'s sleep. Please cross your fingers that this nightmare is over.', '2018-01-12', 'sleep, ghost, neighbour, hospital'),
(3, 'Asylum', '!(3_GiT.jpg)<br />\r\n<br />\r\nSo it turns out this building wasn\'t any old hospital, it really was an asylum! I did a bit of research and found out that it was opened around 1816 and, at one point, housed up to **3,200** patients **at a time!** That\'s a **lot** of potential ghosts haunting **my** flat!<br />\r\n<br />\r\nBefore it was converted into flats, a group of bloggers called PR0J3CT M4YH3M snuck in and took some (https://www.proj3ctm4yh3m.com/urbex/2013/05/31/urbex-lancaster-moor-hospital-aka-lancaster-asylum-lancashire-may-2013/)[photos]. Guys, this place was seriously spooky!<br />\r\n<br />\r\nI know some of you don\'t believe me, but what if my flat really is haunted? What am I supposed to do about it? Do priests even do exorcisms, or is that something that only happens in horror movies?<br />\r\n<br />\r\nI\'m going out of my mind here. I can\'t move. I sunk everything I have into buying this flat. I need serious suggestions for how to deal with my unwanted flat guest. Now!', '2018-01-19', 'ghost, asylum, history'),
(4, 'Things are getting weirder', '!(4_GiT.JPG)<br />\r\n<br />\r\nThis morning, after **another sleepless night**, I left the building to go to work and found thousands of bird feathers all over the lawn! It looked like a dozen birds (maybe more) had been killed, but there were **no bodies** and **no blood**.<br />\r\n<br />\r\nJust feathers.<br />\r\n<br />\r\nYou\'ve got to admit, that\'s *seriously* freaky.<br />\r\n<br />\r\nCould a ghost do that? Or am I dealing with something even more sinister? Please help!', '2018-01-25', 'ghost, feathers, help, weird'),
(5, 'Satanists?', '!(5_GiT.jpg)<br />\r\n<br />\r\nGuys, what if there\'s satanists living here? I did some research and apparently there are satanic rituals that involve (https://en.wikipedia.org/wiki/Animal_sacrifice)[animal sacrifice]. I thought I was freaked out by the idea of my flat being haunted, but this is even more scary. What if they don\'t stop at the birds?<br />\r\n<br />\r\nI got someone round to add a deadlock and an extra strong chain to my door. I already have a peep hole, so I\'m not going to let anyone in unless I know exactly who they are, or they have ID. I\'m literally afraid to leave my flat at the moment. I keep expecting to find something else horrific, whenever I go out to work. I can\'t sleep. The scratching and sobbing started again a few nights ago. There\'s something seriously evil going on in this building. I need to figure out what it is and how to stop it, otherwise I think I really am going to go insane.<br />\r\n<br />\r\nMaybe that\'s what this restless spirit wants... to drive everyone in this building as insane as they were. But if it\'s **not** a ghost and it **is** satanists, what could they want? I\'ve never had to deal with anything like this before. I\'m scared. I\'m even sleeping with the light on. Not that it\'s helping. It doesn\'t stop me from hearing the scratching and the crying. I\'m getting to the end of my wits here. I don\'t know how much more I can take.', '2018-02-01', 'satanists, ghosts, animal sacrifice'),
(6, 'Sorry!', 'I sounded a bit nuts in my last post, didn\'t I? Thanks for all the concerned comments. I ended up in tears on my neighbour (you know, the hunky fireman). He was so lovely about it all! He said he hadn\'t heard anything weird, so I guess that rules out a rat in the wall? I should probably still get pest control in, like TheBexter suggested. Anyway, my neighbour suggested that I go stay somewhere else for a few days, so I could get some good sleep. He thought maybe my imagination is running away with me due to insomnia. Do you think that sounds plausible? It made sense when he was saying it.<br />\r\n<br />\r\nI arranged a short trip away with a couple of girl friends. It was lovely. We got pampered, went shopping and got drunk! I got lots of sleep too and I feel so much better for it.<br />\r\n<br />\r\nTonight is my first night back in my flat. Fingers crossed nothing weird happens and it really was just my imagination.<br />\r\n<br />\r\n!(6_GiT.jpg)', '2018-02-12', 'pamper, neighbour, imagination, sleep'),
(7, 'NOT my imagination', 'I know I\'m not going mad, or imagining it. If I was going mad, I\'d have heard and seen weird things when I was away with the girls, wouldn\'t I? But I didn\'t. Everything was **TOTALLY NORMAL**. Then I come back home and on the **VERY FIRST NIGHT**, everything gets weird **AGAIN**. The scratching and crying started again and there was even screaming this time! It sounded like a woman. There were the black handprints on the wall again and some of my photo frames fell over all by themselves. The glass smashed in this photo of my sister!<br />\r\n<br />\r\n!(7_GiT.jpg)<br />\r\n<br />\r\nI am honestly not making this stuff up. I\'m so scared right now, I\'m actually going out of my mind. I\'m calling pest control first thing in the morning, to be absolutely sure there isn\'t a rat or bird in walls. But it\'s been a month and a half since the weirdness started, surely if there was, it would be dead and stinking the flat up by now?<br />\r\n<br />\r\nHas anyone else got any bright ideas? I\'m trying to think rationally, honestly I am. I wouldn\'t even describe myself as the kind of person who believes in ghosts. I\'m not superstitious, I don\'t think 13 is an unlucky number, I walk on cracks and I love black cats. But I don\'t know what else to think. I can\'t think of any rational explanation for everything that\'s been going on. I am open to any suggestions. I\'ll investigate anything. I just need this weirdness to stop so I can get some sleep and enjoy living here.', '2018-02-13', 'tired, ghost, rat, insane'),
(8, 'It\'s not rats...', '...or birds or anything else in the walls.<br />\r\n<br />\r\n!(8_GiT.jpg)<br />\r\n<br />\r\nThe (https://contact.rentokil.co.uk/uk-pest-control-v3/?location=Leeds&gclid=EAIaIQobChMI85z_wujD2gIVCCrTCh3FrA9KEAAYASAAEgIQQvD_BwE)[Rentokil] man came out this morning and searched my flat thoroughly. He said he couldn\'t see any sign of vermin at all, either in my flat or the building as a whole. So I had to pay to get **NO** answers.<br />\r\n<br />\r\nAny more ideas?', '2018-02-15', 'rats, birds, Rentokil');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentPostID` int(11) NOT NULL,
  `blogPostID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `timeCommented` time NOT NULL,
  `dateCommented` date NOT NULL,
  `commentScore` int(11) NOT NULL DEFAULT '0',
  `approved` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentPostID`, `blogPostID`, `username`, `userEmail`, `content`, `timeCommented`, `dateCommented`, `commentScore`, `approved`) VALUES
(1, 1, 'JabbaHutt', 'jabbahutt@starwars.com', 'Hi I\'m not sure if this is a prank or not but are you ok?', '12:43:00', '2018-01-10', 0, 'Yes'),
(2, 1, 'Harry22', 'Harry22@gmail.com', 'haha wow this is weird', '14:44:00', '2018-01-10', 0, 'Yes'),
(3, 1, 'TheBexter', 'becky@gmail.com', 'Seriously sounds like a rat or a pigeon trapped in your wall. I would recommend getting a pest control person round because if they die in a wall cavity it can cause a v. strong smell that doesn\'t go away. Trust me!!!', '09:45:00', '2018-01-11', 1, 'Yes'),
(5, 2, 'TheBexter', 'becky@gmail.com', 'Ok this definitely sounds like something weird is going on. Someone has got to be messing with you. I\'m so sorry it actually sounds quite traumatic but you\'ve got to think rationally about it- have you got any weird exes or have you pissed anyone off? There\'s got to be an explanation for this stuff.', '12:49:00', '2018-01-12', 0, 'Yes'),
(6, 2, 'Ghorgon', 'joe@medusa.co.uk', 'Do you live in the new flats in the old asylum? You said converted hospital but I defo recognise that photo, it\'s the old lunatic asylum. If I were you I\'d start flat shopping because that place is fucking terrifying!', '15:22:00', '2018-01-13', 0, 'Yes'),
(7, 2, 'Pawnstar99', 'john.smith@google.com', 'haha your fkd mate. wtf!! I\'d be sleeping somewere else if i were u! not rite.', '19:30:00', '2018-01-13', 0, NULL),
(8, 2, 'MaryBarry', 'mary.barry@gmail.com', 'Ok so I know this sounds weird but have you tried shining a uv light on the wall? maybe it\'s an old stain that shows up in certain light? just a thought. Keep posting about this because it sounds crazy, hope you\'re okay!', '11:08:00', '2018-01-14', 1, NULL),
(11, 8, 'test', 'test@test.com', 'I am a test comment. Feel free to delete me by not approving me, when you are testing comment moderating.', '16:45:00', '2018-04-19', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogPost`
--
ALTER TABLE `blogPost`
  ADD PRIMARY KEY (`blogPostID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentPostID`),
  ADD KEY `blogPostID` (`blogPostID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogPost`
--
ALTER TABLE `blogPost`
  MODIFY `blogPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blogPostID`) REFERENCES `blogPost` (`blogPostID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
