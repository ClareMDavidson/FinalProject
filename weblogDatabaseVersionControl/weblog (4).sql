-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2018 at 11:26 PM
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
  `datePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogPost`
--

INSERT INTO `blogPost` (`blogPostID`, `title`, `content`, `datePosted`) VALUES
(1, 'Help!', 'I don\'t know who to talk to, or what to do. I tried talking to my family after the first night, but they all think I\'m making it up. But I\'m not. I **swear** I\'m not.<br />\r\n<br />\r\nI\'ve barely slept in three nights. Every time I close my eyes I hear *it* scratching inside the walls. Sometimes, I hear crying too, so I know it\'s not a rat. I\'d probably be happy if it *was* a rat!<br />\r\n<br />\r\nIt\'s not just the noises, either. When I woke up this morning, there were handprints on the walls. Please help!<br />\r\n<br />\r\n!(1_GiT.jpeg)', '2018-01-09'),
(2, 'Calmer today', '!(2_GiT.jpg)<br />\r\nI actually managed to get some sleep last night. I don\'t know why, but there was no scratching or sobbing. The handprints I showed you last time have vanished. Please don\'t try to tell me that\'s normal. My walls are white. You can\'t get rid of marks like that without painting them over.<br />\r\n<br />\r\nAnyway, I thought I\'d tell you a bit more about where I live. The more you know, the more chance you can help. Right? So, here goes:<br />\r\n<br />\r\nI bought a flat in a converted hospital. It\'s a gorgeous gothic building in its own grounds. I\'ve been scrimping and saving for years for a deposit on my own place. I finally had enough and then these flats came on the market. It was meant to be! At least, I thought it was.<br />\r\n<br />\r\nI was so excited when I moved in and, for the first couple of weeks, everything was wonderful. I got chatting with my immediate neighbours and they seemed really nice. The guy right next door is super hot. I know, it\'s a total cliche, but I actually went and asked if I could borrow some sugar as an excuse to talk to him! I even managed to pluck up the courage to invite him to my flat warming party, but he said he had to get up early for work. I think he\'s a fireman or something. My flat warming party went great. I invited friends and family. Everything seemed wonderful.<br />\r\n<br />\r\nAnd then the noises started.<br />\r\n<br />\r\nI thought I was imagining it at first. Then I thought it was a rat. I asked my neighbour if he\'d heard anything, but he said he\'s a heavy sleeper. The next night, I heard the scratching again, but there was crying too. This horrid uncontrollable sobbing. It went on for days. I barely slept and, after three nights of it and my family dismissing me, I started this blog to try to make sense of it all. I still have no clue what\'s going on, but I\'m grateful I managed to get a good night\'s sleep. Please cross your fingers that this nightmare is over.', '2018-01-12'),
(3, 'Asylum', '!(3_GiT.jpg)<br />\r\n<br />\r\nSo it turns out this building wasn\'t any old hospital, it really was an asylum! I did a bit of research and found out that it was opened around 1816 and, at one point, housed up to **3,200** patients **at a time!** That\'s a **lot** of potential ghosts haunting **my** flat!<br />\r\n<br />\r\nBefore it was converted into flats, a group of bloggers called PR0J3CT M4YH3M snuck in and took some (https://www.proj3ctm4yh3m.com/urbex/2013/05/31/urbex-lancaster-moor-hospital-aka-lancaster-asylum-lancashire-may-2013/)[photos]. Guys, this place was seriously spooky!<br />\r\n<br />\r\nI know some of you don\'t believe me, but what if my flat really is haunted? What am I supposed to do about it? Do priests even do exorcisms, or is that something that only happens in horror movies?<br />\r\n<br />\r\nI\'m going out of my mind here. I can\'t move. I sunk everything I have into buying this flat. I need serious suggestions for how to deal with my unwanted flat guest. Now!', '2018-01-19'),
(4, 'Things are getting weirder', '!(4_GiT.JPG)<br />\r\n<br />\r\nThis morning, after **another sleepless night**, I left the building to go to work and found thousands of bird feathers all over the lawn! It looked like a dozen birds (maybe more) had been killed, but there were **no bodies** and **no blood**.<br />\r\n<br />\r\nJust feathers.<br />\r\n<br />\r\nYou\'ve got to admit, that\'s *seriously* freaky.<br />\r\n<br />\r\nCould a ghost do that? Or am I dealing with something even more sinister? Please help!', '2018-01-25'),
(5, 'Satanists?', '!(5_GiT.jpg)<br />\r\n<br />\r\nGuys, what if there\'s satanists living here? I did some research and apparently there are satanic rituals that involve (https://en.wikipedia.org/wiki/Animal_sacrifice)[animal sacrifice]. I thought I was freaked out by the idea of my flat being haunted, but this is even more scary. What if they don\'t stop at the birds?<br />\r\n<br />\r\nI got someone round to add a deadlock and an extra strong chain to my door. I already have a peep hole, so I\'m not going to let anyone in unless I know exactly who they are, or they have ID. I\'m literally afraid to leave my flat at the moment. I keep expecting to find something else horrific, whenever I go out to work. I can\'t sleep. The scratching and sobbing started again a few nights ago. There\'s something seriously evil going on in this building. I need to figure out what it is and how to stop it, otherwise I think I really am going to go insane.<br />\r\n<br />\r\nMaybe that\'s what this restless spirit wants... to drive everyone in this building as insane as they were. But if it\'s **not** a ghost and it **is** satanists, what could they want? I\'ve never had to deal with anything like this before. I\'m scared. I\'m even sleeping with the light on. Not that it\'s helping. It doesn\'t stop me from hearing the scratching and the crying. I\'m getting to the end of my wits here. I don\'t know how much more I can take.', '2018-02-01'),
(6, 'Sorry!', 'I sounded a bit nuts in my last post, didn\'t I? Thanks for all the concerned comments. I ended up in tears on my neighbour (you know, the hunky fireman). He was so lovely about it all! He said he hadn\'t heard anything weird, so I guess that rules out a rat in the wall? I should probably still get pest control in, like TheBexter suggested. Anyway, my neighbour suggested that I go stay somewhere else for a few days, so I could get some good sleep. He thought maybe my imagination is running away with me due to insomnia. Do you think that sounds plausible? It made sense when he was saying it.<br />\r\n<br />\r\nI arranged a short trip away with a couple of girl friends. It was lovely. We got pampered, went shopping and got drunk! I got lots of sleep too and I feel so much better for it.<br />\r\n<br />\r\nTonight is my first night back in my flat. Fingers crossed nothing weird happens and it really was just my imagination.<br />\r\n<br />\r\n!(6_GiT.jpg)', '2018-02-12'),
(7, 'NOT my imagination', 'I know I\'m not going mad, or imagining it. If I was going mad, I\'d have heard and seen weird things when I was away with the girls, wouldn\'t I? But I didn\'t. Everything was **TOTALLY NORMAL**. Then I come back home and on the **VERY FIRST NIGHT**, everything gets weird **AGAIN**. The scratching and crying started again and there was even screaming this time! It sounded like a woman. There were the black handprints on the wall again and some of my photo frames fell over all by themselves. The glass smashed in this photo of my sister!<br />\r\n<br />\r\n!(7_GiT.jpg)<br />\r\n<br />\r\nI am honestly not making this stuff up. I\'m so scared right now, I\'m actually going out of my mind. I\'m calling pest control first thing in the morning, to be absolutely sure there isn\'t a rat or bird in walls. But it\'s been a month and a half since the weirdness started, surely if there was, it would be dead and stinking the flat up by now?<br />\r\n<br />\r\nHas anyone else got any bright ideas? I\'m trying to think rationally, honestly I am. I wouldn\'t even describe myself as the kind of person who believes in ghosts. I\'m not superstitious, I don\'t think 13 is an unlucky number, I walk on cracks and I love black cats. But I don\'t know what else to think. I can\'t think of any rational explanation for everything that\'s been going on. I am open to any suggestions. I\'ll investigate anything. I just need this weirdness to stop so I can get some sleep and enjoy living here.', '2018-02-13'),
(8, 'It\'s not rats...', '...or birds or anything else in the walls.<br />\r\n<br />\r\n!(8_GiT.jpg)<br />\r\n<br />\r\nThe (https://contact.rentokil.co.uk/uk-pest-control-v3/?location=Leeds&gclid=EAIaIQobChMI85z_wujD2gIVCCrTCh3FrA9KEAAYASAAEgIQQvD_BwE)[Rentokil] man came out this morning and searched my flat thoroughly. He said he couldn\'t see any sign of vermin at all, either in my flat or the building as a whole. So I had to pay to get **NO** answers.<br />\r\n<br />\r\nAny more ideas?', '2018-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `blogPostKeyword`
--

CREATE TABLE `blogPostKeyword` (
  `blogPostID` int(11) NOT NULL,
  `keywordID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogPostKeyword`
--

INSERT INTO `blogPostKeyword` (`blogPostID`, `keywordID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(3, 6),
(3, 9),
(3, 10),
(4, 6),
(4, 11),
(4, 1),
(4, 12),
(5, 13),
(5, 6),
(5, 14),
(6, 14),
(6, 7),
(6, 16),
(6, 5),
(7, 17),
(7, 6),
(7, 4),
(7, 18),
(8, 4),
(8, 19),
(8, 20);

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
(8, 2, 'MaryBarry', 'mary.barry@gmail.com', 'Ok so I know this sounds weird but have you tried shining a uv light on the wall? maybe it\'s an old stain that shows up in certain light? just a thought. Keep posting about this because it sounds crazy, hope you\'re okay!', '11:08:00', '2018-01-14', 1, 'Yes'),
(14, 3, 'JabbaHutt', 'jabbahutt@starwars.com', 'You can get psychics to come and check out places you think are haunted, maybe do that??? and in the meantime have you got anywhere else you could stop?! Sounds freaky!', '18:47:00', '2018-01-19', 0, 'Yes'),
(15, 3, 'MaryBarry', 'mary.barry@gmail.com', 'Ummmm you definitely need to speak to your landlord, if you didn\'t know it was an old asylum when you moved in then it\'s a bit unfair....', '20:19:00', '2018-01-19', 0, 'Yes'),
(16, 3, 'OlaKitten', 'kitty@purrfecttreats.com', 'You need to get a priest in there asap! Leave it too long & you could get possessed if it\'s an evil spirit. Don\'t mess about with this stuff.', '10:38:00', '2018-01-20', 0, 'Yes'),
(17, 3, 'Ghorgon', 'joe@medusa.co.uk', 'I knew it was the old mental hospital!', '18:49:00', '2018-01-20', 0, 'Yes'),
(18, 4, 'Ghorgon', 'joe@medusa.co.uk', 'Freaky stuff- you could have some serial bird killer on your hands...', '13:47:00', '2018-01-25', 0, 'Yes'),
(19, 4, 'KatyaZam', 'katya.zam@gmail.com', 'Does your block of flats have a caretaker? Maybe get them to investigate. Sounds disgusting.', '18:53:00', '2018-01-26', 0, 'Yes'),
(20, 5, 'MaryBarry', 'mary.barry@gmail.com', 'Satanists are real and there is a definite possibility some are using the emotional power of the site to do rituals. If they\'re sacrificing animals who knows what they\'re going to move onto... I\'m not joking, you need to watch your back and maybe put up some cameras if you want to get to the bottom of this. Hope you\'re holding up ok.', '18:54:00', '2018-02-01', 0, 'Yes'),
(21, 5, 'JabbaHutt', 'jabbahutt@starwars.com', 'I\'ve been following your blog thinking it\'s some elaborate prank but this sounds like you need some help. If you genuinely can\'t sleep you should talk to a doctor. It\'s strange your neighbour doesn\'t hear the noises... you don\'t think he could be involved?', '21:39:00', '2018-02-01', 0, 'Yes'),
(22, 5, 'Iglu22', 'iglu22@yahoo.com', '@JabbaHutt I\'m not convinced that this isn\'t some weirdo\'s idea of a sick joke, been reading back and she seems a bit desperate for attention if you ask me...', '13:18:00', '2018-02-02', 0, 'Yes'),
(23, 5, 'JabbaHutt', 'jabbahutt@starwars.com', '@Iglu22 don\'t be so skeptical there\'s some weird stuff that happens and for all we know she could be getting pranked herself by some sicko- I say check out the neighbours.', '18:55:00', '2018-02-02', 0, 'Yes'),
(24, 6, 'JabbaHutt', 'jabbahutt@starwars.com', 'Ok maybe that neighbour isn\'t the weirdo but I still think you need to be careful who else is in the building cos if he hasn\'t heard scratching maybe someone is just targeting your flat... Hope you don\'t get any more strangeness anyway, sounds pretty stressful.', '19:01:00', '2018-02-12', 0, 'Yes'),
(25, 6, 'OlgaDaPolg', 'olga@dapolg.me.uk', 'Sooooo you think your flat is haunted/attacked by satanists and you go on holiday?! HAH what a joke', '20:13:00', '2018-02-12', 0, 'Yes'),
(26, 6, 'MaryBarry', 'mary.barry@gmail.com', 'I\'ve been looking up cults and witchcraft in Britain and there are some real hotspots- particularly in rural areas, where is this building? Have you seen any more feathers?', '12:20:00', '2018-02-13', 0, 'Yes'),
(27, 6, 'TheBexter', 'becky@gmail.com', 'Good- I do really think you should still get a pest control person round, maybe the feathers are from trapped pigeons or something? Bit of a reach but maybe they roost nearby or something. Worth considering.', '19:02:00', '2018-02-13', 0, 'Yes'),
(28, 7, 'Katie78', 'katiemurphy@google.co.uk', 'I think you\'re having us on. You\'re getting slightly twitter famous and you\'re having a great time- give it up!!!', '23:03:00', '2018-02-13', 0, 'Yes'),
(29, 7, 'MaryBarry', 'mary.barry@gmail.com', 'Look this isn\'t a ghost. There\'s no such thing as ghouls and monsters, only people and people are worse. It\'s definitely a person and they\'re either deliberately freaking you out or doing it by accident. I think the latter, and I think they\'re up to no good trying to summon something or perform some kind of ritual. If witchcraft and satanism is taking place in your building then there\'s a chance they\'ve opened a rift to the other side through which any spirits can travel and become trapped. Seek spiritual guidance & move out as soon as possible! (Also don\'t feed the trolls, they\'ve not experienced anything like what we have...)', '11:03:00', '2018-02-14', 0, 'Yes'),
(30, 7, 'KyotoK', 'kyotok@yahoo.com', 'Ummm @MaryBarry you don\'t believe in ghosts but you think it\'s a trapped spirit? Isn\'t that a ghost? and what do you mean what you\'ve experienced? Don\'t tell me you\'re living in the same block of flats as this lunatic hahahah', '19:04:00', '2018-02-14', 0, 'Yes'),
(31, 7, 'Jonah556', 'jonah_smith@gmail.com', 'If there\'s something strange in you neighborhood<br />\r\nWho you gonna call?', '20:14:00', '2018-02-14', 0, 'Yes'),
(32, 7, 'Jonah556', 'jonah_smith@gmail.com', 'GHOSTBUSTERS!', '20:16:00', '2018-02-14', 0, 'Yes'),
(33, 7, 'JabbaHutt', 'jabbahutt@starwars.com', 'Look I really think you need to just move out, if you didn\'t have any weirdness on your break then it\'s definitely something in that building- probably a weird neighbour. Could you stop with a friend? your sister?', '09:06:00', '2018-02-15', 0, 'Yes'),
(34, 7, 'MaryBarry', 'mary.barry@gmail.com', 'OK @KyotoK I see what you\'re trying to do and what you are, you stay in your lane. Some people are not intelligent enough to have truths revealed to them.', '11:40:00', '2018-02-15', 0, 'Yes'),
(35, 8, 'TheBexter', 'becky@gmail.com', 'Ok, that\'s weird. Time to move. Something is up. I did a quick google of your place and there are some records of some strange things happening in the days it was a hospital. Even if there is no \'ghost\' or \'satanists\' there\'s a bad energy to the place and you won\'t be settled or happy there with all these memories of sleepless nights and fear. Take care of yourself. x', '19:33:00', '2018-02-15', 0, 'Yes'),
(36, 8, 'JabbaHutt', 'jabbahutt@starwars.com', 'I think you should get one of those webcams that you can stream to your phone and set it up outside your flat door, then you will be able to see if someone is messing with you. They\'re only about Â£20 on amazon.', '12:17:00', '2018-02-16', 0, 'Yes'),
(37, 8, 'KatyaZam', 'katya.zam@gmail.com', 'I say you should get a friend to stop over, see if any weirdness happens then- then you\'ll have a witness.', '13:34:00', '2018-02-16', 0, 'Yes'),
(38, 8, 'Jumanji99', 'jermaine.taylor@google.com', 'Just stop trolling us all and go back to your sad life. This is so obviously fake guys... what a joker.', '19:34:00', '2018-02-16', 0, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE `keyword` (
  `keywordID` int(11) NOT NULL,
  `keyword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`keywordID`, `keyword`) VALUES
(14, 'animal sacrifice'),
(9, 'asylum'),
(19, 'birds'),
(11, 'feathers'),
(6, 'ghost'),
(3, 'handprints'),
(2, 'haunted'),
(1, 'help'),
(10, 'history'),
(8, 'hospital'),
(16, 'imagination'),
(18, 'insane'),
(7, 'neighbour'),
(15, 'pamper'),
(4, 'rats'),
(20, 'Rentokil'),
(13, 'satanists'),
(5, 'sleep'),
(17, 'tired'),
(12, 'weird');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogPost`
--
ALTER TABLE `blogPost`
  ADD PRIMARY KEY (`blogPostID`);

--
-- Indexes for table `blogPostKeyword`
--
ALTER TABLE `blogPostKeyword`
  ADD KEY `blogPostID` (`blogPostID`),
  ADD KEY `keywordID` (`keywordID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentPostID`),
  ADD KEY `blogPostID` (`blogPostID`);

--
-- Indexes for table `keyword`
--
ALTER TABLE `keyword`
  ADD PRIMARY KEY (`keywordID`),
  ADD UNIQUE KEY `keyword` (`keyword`);

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
  MODIFY `commentPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `keyword`
--
ALTER TABLE `keyword`
  MODIFY `keywordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogPostKeyword`
--
ALTER TABLE `blogPostKeyword`
  ADD CONSTRAINT `blogpostkeyword_ibfk_1` FOREIGN KEY (`blogPostID`) REFERENCES `blogPost` (`blogPostID`),
  ADD CONSTRAINT `blogpostkeyword_ibfk_2` FOREIGN KEY (`keywordID`) REFERENCES `keyword` (`keywordID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blogPostID`) REFERENCES `blogPost` (`blogPostID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
