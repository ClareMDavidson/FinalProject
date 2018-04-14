-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2018 at 08:25 PM
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
(1, 'Test', 'Test', '2018-04-07', 'Test'),
(2, 'Test 2', 'Another test blogpost.', '2018-04-07', 'test'),
(3, 'Test', 'Testing', '2018-04-08', 'test'),
(4, 'Test', 'Testing', '2018-04-08', 'test'),
(5, 'Test', 'Testing', '2018-04-08', 'test'),
(6, 'Test', 'Testing', '2018-04-08', 'test'),
(7, 'Test', 'Longer test post to see what it looks like. This isn\'t very exciting.', '2018-04-08', 'exciting, test, blah'),
(8, 'Another test', 'Hello, my name is Clare and I am testing our blog app.', '2018-04-08', 'testing'),
(9, 'My first proper blog post', 'Maybe. Not that I can think of anything to say. Hello gang!\r\nHello Victoria!\r\nHello world!\r\nYou\'re all ace.', '2018-04-08', 'hello'),
(10, 'test', 'test. Have I broken it?', '2018-04-08', 'test'),
(11, 'another test', 'yet another test', '2018-04-08', 'test'),
(12, 'Yet another test', 'How many test posts can we write? We need some \'proper\' content at some point soon!\r\n\r\nOut of interest, can we put line breaks in? Will that work?\r\n\r\nLet\'s find out!', '2018-04-08', 'curious, test, bored'),
(13, 'Test #whatever', 'test', '2018-04-08', 'test'),
(14, 'Test line breaks', 'Testing line breaks.\r\nAre they preserved this time?\r\nWho knows!\r\nLet\'s find out!', '2018-04-09', 'testing, newline'),
(15, 'line breaks again', 'another line break test.\r\nI\'ll figure it out.\r\nHonest!', '2018-04-09', 'bored'),
(16, 'another test for line breaks', 'Will this time work?<br />\r\nPlease let it work!<br />\r\nI\'m bored now.', '2018-04-09', 'bored'),
(17, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, eam prima graeco cetero cu. Quas harum viris has an. At pri labore ponderum. Mutat euismod per ad, cu posse convenire torquatos vim, ad dicat tamquam platonem nec. Illud malis voluptaria mel ad, etiam assentior et eam.<br />\r\n<br />\r\nUsu te ferri tollit. An ius dolor exerci perpetua, autem porro libris at vis, quo legimus inermis persecuti ei. Ex persius maiorum sit. Stet offendit an quo, ius erant causae constituam an. Blandit theophrastus qui ex.<br />\r\n<br />\r\nDecore possim erroribus no ius. Ne suas illud ignota nec. Iusto assentior sea et. No agam paulo blandit qui, duo latine oblique ex. Sed ad insolens adipisci honestatis.<br />\r\n<br />\r\nIn sit porro constituam eloquentiam, ex mea quando integre commune. Id per tale possit nostro, tollit euismod urbanitas eum et. Sint congue eu usu, malis facilisis consectetuer at qui. Ut his idque simul epicuri, quo dicant everti habemus te. Te mea fugit tincidunt, cu his atqui perfecto postulant.<br />\r\n<br />\r\nPlacerat pericula tincidunt vim ei, facete assueverit repudiandae in sea. Suavitate instructior te sit, vix ornatus fierent id. Bonorum scribentur an eum, posse partem recusabo te pro. Omnium prodesset constituam ex mei, sale latine abhorreant ea vix. Eos aeque oblique ei, diceret offendit perpetua cu mei, esse regione blandit pro ut. Exerci consulatu quo te, id nec exerci perfecto. Vim nusquam probatus at, ad eos facete consequat voluptatibus.', '2018-04-09', 'test'),
(18, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, eam prima graeco cetero cu. Quas harum viris has an. At pri labore ponderum. Mutat euismod per ad, cu posse convenire torquatos vim, ad dicat tamquam platonem nec. Illud malis voluptaria mel ad, etiam assentior et eam.<br />\r\n<br />\r\nUsu te ferri tollit. An ius dolor exerci perpetua, autem porro libris at vis, quo legimus inermis persecuti ei. Ex persius maiorum sit. Stet offendit an quo, ius erant causae constituam an. Blandit theophrastus qui ex.<br />\r\n<br />\r\nDecore possim erroribus no ius. Ne suas illud ignota nec. Iusto assentior sea et. No agam paulo blandit qui, duo latine oblique ex. Sed ad insolens adipisci honestatis.<br />\r\n<br />\r\nIn sit porro constituam eloquentiam, ex mea quando integre commune. Id per tale possit nostro, tollit euismod urbanitas eum et. Sint congue eu usu, malis facilisis consectetuer at qui. Ut his idque simul epicuri, quo dicant everti habemus te. Te mea fugit tincidunt, cu his atqui perfecto postulant.<br />\r\n<br />\r\nPlacerat pericula tincidunt vim ei, facete assueverit repudiandae in sea. Suavitate instructior te sit, vix ornatus fierent id. Bonorum scribentur an eum, posse partem recusabo te pro. Omnium prodesset constituam ex mei, sale latine abhorreant ea vix. Eos aeque oblique ei, diceret offendit perpetua cu mei, esse regione blandit pro ut. Exerci consulatu quo te, id nec exerci perfecto. Vim nusquam probatus at, ad eos facete consequat voluptatibus.', '2018-04-09', 'test'),
(19, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, eam prima graeco cetero cu. Quas harum viris has an. At pri labore ponderum. Mutat euismod per ad, cu posse convenire torquatos vim, ad dicat tamquam platonem nec. Illud malis voluptaria mel ad, etiam assentior et eam.<br />\r\n<br />\r\nUsu te ferri tollit. An ius dolor exerci perpetua, autem porro libris at vis, quo legimus inermis persecuti ei. Ex persius maiorum sit. Stet offendit an quo, ius erant causae constituam an. Blandit theophrastus qui ex.<br />\r\n<br />\r\nDecore possim erroribus no ius. Ne suas illud ignota nec. Iusto assentior sea et. No agam paulo blandit qui, duo latine oblique ex. Sed ad insolens adipisci honestatis.<br />\r\n<br />\r\nIn sit porro constituam eloquentiam, ex mea quando integre commune. Id per tale possit nostro, tollit euismod urbanitas eum et. Sint congue eu usu, malis facilisis consectetuer at qui. Ut his idque simul epicuri, quo dicant everti habemus te. Te mea fugit tincidunt, cu his atqui perfecto postulant.<br />\r\n<br />\r\nPlacerat pericula tincidunt vim ei, facete assueverit repudiandae in sea. Suavitate instructior te sit, vix ornatus fierent id. Bonorum scribentur an eum, posse partem recusabo te pro. Omnium prodesset constituam ex mei, sale latine abhorreant ea vix. Eos aeque oblique ei, diceret offendit perpetua cu mei, esse regione blandit pro ut. Exerci consulatu quo te, id nec exerci perfecto. Vim nusquam probatus at, ad eos facete consequat voluptatibus.', '2018-04-09', 'test'),
(20, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, eam prima graeco cetero cu. Quas harum viris has an. At pri labore ponderum. Mutat euismod per ad, cu posse convenire torquatos vim, ad dicat tamquam platonem nec. Illud malis voluptaria mel ad, etiam assentior et eam.<br />\r\n!(56737f86fe23d346f9cd7574ad395791.jpg)\r\nUsu te ferri tollit. An ius dolor exerci perpetua, autem porro libris at vis, quo legimus inermis persecuti ei. Ex persius maiorum sit. Stet offendit an quo, ius erant causae constituam an. Blandit theophrastus qui ex.<br />\r\n<br />\r\nDecore possim erroribus no ius. Ne suas illud ignota nec. Iusto assentior sea et. No agam paulo blandit qui, duo latine oblique ex. Sed ad insolens adipisci honestatis.<br />\r\n<br />\r\nIn sit porro constituam eloquentiam, ex mea quando integre commune. Id per tale possit nostro, tollit euismod urbanitas eum et. Sint congue eu usu, malis facilisis consectetuer at qui. Ut his idque simul epicuri, quo dicant everti habemus te. Te mea fugit tincidunt, cu his atqui perfecto postulant.<br />\r\n<br />\r\nPlacerat pericula tincidunt vim ei, facete assueverit repudiandae in sea. Suavitate instructior te sit, vix ornatus fierent id. Bonorum scribentur an eum, posse partem recusabo te pro. Omnium prodesset constituam ex mei, sale latine abhorreant ea vix. Eos aeque oblique ei, diceret offendit perpetua cu mei, esse regione blandit pro ut. Exerci consulatu quo te, id nec exerci perfecto. Vim nusquam probatus at, ad eos facete consequat voluptatibus.', '2018-04-09', 'test'),
(21, 'The final project', 'Today, I heard something strange in the basement. Bumps and rustling....', '2018-04-09', 'scary, strange, basement'),
(22, 'Test', 'Lorem ipsum dolor sit amet, te his detraxit pertinax. Mea nullam rationibus id, per diceret inciderint ex, ne vivendo propriae gloriatur nec. Ad duo reque novum. Ne erat assum appellantur sea, illud fugit atqui ea sed, aeque menandri pro ne.<br />\r\n<br />\r\nVidisse epicurei pri id, eam in ferri causae. Verear splendide democritum sit eu, singulis expetendis argumentum eam ut. Sed eros nusquam ea. Vis unum iudicabit te. Elit utinam mediocritatem vel ei, his liber animal at. Te meis oratio expetendis quo, ut senserit inciderint nam, cu quo oratio impetus lucilius.<br />\r\n<br />\r\nFacer nihil aliquando te vel, admodum menandri qui ex. Ea consulatu consetetur omittantur vel. Vel in decore dissentiunt. Ea aliquid molestie vis. Urbanitas persequeris duo eu, usu et iusto invenire. Nec ut magna dicta.<br />\r\n<br />\r\nSensibus efficiendi sadipscing duo ex, cum at stet philosophia, ad usu velit incorrupte. Ut vim admodum minimum atomorum, sit ea error aperiam fabulas. Eleifend dignissim quaerendum at vim. Dico periculis nec et, mei in viris elitr.', '2018-04-09', 'testing, newline, lorem Ipsum'),
(23, 'Testing inserting images', 'This is a blog post to test if we can insert images. I am going to add in some pseudo code, which is based on markdown. The PHP will then turn the pseudo code into html, when the post is pulled out of the database and a model is instantiated.!(56737f86fe23d346f9cd7574ad395791.jpg)Let\'s try it!', '2018-04-10', 'images, testing'),
(24, 'Test post', 'Testing the session stuff', '2018-04-11', 'sessions'),
(25, 'post to test images again', 'I am going to put an image in my blog post.<br />\r\n!(5842ab6da6515b1e0ad75b0a.png)', '2018-04-11', ''),
(26, 'post to test images again', 'I am going to put an image in my blog post.<br />\r\n!(5842ab6da6515b1e0ad75b0a.png)', '2018-04-11', ''),
(27, 'post to test images again', 'I am going to put an image in my blog post.<br />\r\n!(5842ab6da6515b1e0ad75b0a.png)', '2018-04-11', ''),
(28, 'test', 'testing images.<br />\r\n!(Kindle_cover_small.jpg)', '2018-04-11', ''),
(29, 'Cats are cute', 'Have a cute cat picture to start your day.<br />\r\n!(sun-image-friends-pics-quote-wish-animals_other_good-morning-kitty_72781-001.jpg)', '2018-04-11', ''),
(30, 'Cats are cute', 'Have a cute cat picture to start your day.<br />\r\n!(sun-image-friends-pics-quote-wish-animals_other_good-morning-kitty_72781-001.jpg)', '2018-04-11', ''),
(31, 'Testing new blog posts & comments', 'Lorem ipsum dolor sit amet, odio tota volutpat ut vis, ei his vulputate consetetur. Persecuti intellegebat ex has. Quo clita option verterem cu. Qui eros veri delenit at, mel no libris legendos dissentiet. Sea id falli mazim signiferumque, rebum vidisse signiferumque pro et, sed eu novum tamquam rationibus. In qui ferri detracto conceptam, ut prompta utroque habemus eam, qui ceteros maiorum ei.<br />\r\n<br />\r\nEsse eruditi accusamus ne nec, has te vocibus civibus. Ut malis elitr habemus eos. Nullam quaestio expetenda cum in, sumo partiendo maiestatis per ad. Adhuc eirmod his ne, odio tritani mel id. Odio voluptua vel ut, est odio agam appellantur ei, cum adipisci argumentum at.<br />\r\n<br />\r\nEpicurei nominati honestatis duo ea, alterum volumus signiferumque vix ne. Usu dicant forensibus ullamcorper an, ea justo conceptam nec. Mea ad eligendi lobortis explicari, no augue petentium consulatu per. Mel eu everti tractatos complectitur, iisque deterruisset ut usu. Illum postea interesset vel ea, propriae quaestio platonem mel at, qui ipsum deterruisset te. Ne detracto adipisci inimicus qui, sonet utamur et per.<br />\r\n<br />\r\nVis an duis dicant interpretaris, ius ei elit legere posidonium, et vel tantas bonorum. Equidem scribentur eos te. Duo etiam interpretaris et. Eam ad purto luptatum, fabulas senserit eam ut, in sit sale nusquam delectus.', '2018-04-12', 'lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `blogPostID` int(11) NOT NULL,
  `commentPostID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `timeCommented` time NOT NULL,
  `dateCommented` date NOT NULL,
  `commentScore` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`blogPostID`, `commentPostID`, `username`, `userEmail`, `content`, `timeCommented`, `dateCommented`, `commentScore`) VALUES
(20, 2, 'test test test', 'test@test.com', 'test test test', '11:37:00', '2018-04-11', 0),
(20, 3, 'test test test', 'test@test.com', 'test test test', '11:41:00', '2018-04-11', 0),
(20, 4, 'test test test', 'test@test.com', 'test test test', '11:42:00', '2018-04-11', 0),
(31, 5, 'At ludus veniam pri. Ne per falli apeirian, est cu', 'test@test.com', 'At ludus veniam pri. Ne per falli apeirian, est cu dictas alienum periculis. Ex vel dolorum blandit, eam eu autem iracundia philosophia, an has altera offendit. Vel nulla iusto te. Vel in tempor verear nostrum.\r\n\r\nQuo in tantas delicatissimi, ponderum postulant definitiones ea quo, ea mel quidam molestie. Solum ceteros duo id, verear aliquam appareat per in, mel an quem discere scriptorem. Cu mea essent vivendum imperdiet. Atqui singulis mei et, nec cu hendrerit forensibus.\r\n\r\nCum repudiare consequat et, cu qui dicit aliquam sadipscing, vis eu nullam commodo nominati. Cu nam novum adipisci urbanitas, sed homero appetere id. Ei sit vide albucius, mediocrem theophrastus an sit. Sit ea timeam ornatus recteque, per reque commune in, odio disputationi an eam.', '08:03:00', '2018-04-12', 0),
(31, 6, 'Quo in tantas delicatissimi, ponderum postulant de', 'test@test.com', 'Quo in tantas delicatissimi, ponderum postulant definitiones ea quo, ea mel quidam molestie. Solum ceteros duo id, verear aliquam appareat per in, mel an quem discere scriptorem. Cu mea essent vivendum imperdiet. Atqui singulis mei et, nec cu hendrerit forensibus.<br />\r\n<br />\r\nCum repudiare consequat et, cu qui dicit aliquam sadipscing, vis eu nullam commodo nominati. Cu nam novum adipisci urbanitas, sed homero appetere id. Ei sit vide albucius, mediocrem theophrastus an sit. Sit ea timeam ornatus recteque, per reque commune in, odio disputationi an eam.', '08:06:00', '2018-04-12', 0),
(31, 7, 'I am a test comment.\r\nI am a test comment, line 2.', 'test@test.com', 'I am a test comment.<br />\r\nI am a test comment, line 2.<br />\r\nI am a test comment, line 3.', '08:09:00', '2018-04-12', 0),
(31, 8, 'Test', 'test@test.com', 'I am a test comment.', '08:20:00', '2018-04-12', 0),
(31, 9, 'Clare', 'clare@davidson.me.uk', 'this is a test comment.<br />\r\nTest comment line 2.', '10:21:00', '2018-04-12', 0),
(31, 10, 'Clare', 'clare@davidson.me.uk', 'test test test', '10:38:00', '2018-04-12', 0);

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
  MODIFY `blogPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
