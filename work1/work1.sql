-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 08:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work1`
--

-- --------------------------------------------------------

--
-- Table structure for table `doge_page`
--

CREATE TABLE `doge_page` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `dis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doge_page`
--

INSERT INTO `doge_page` (`id`, `img`, `dis`) VALUES
(1, 'Dogs_Pictures_Information/australian_hound.jpg', 'The Afghan Hound is a hound that is distinguished by its thick, fine, silky coat and its tail with a ring curl at the end. The breed is selectively bred for its unique features in the cold mountains of Afghanistan.'),
(2, 'Dogs_Pictures_Information/australian_shepherd.jpg', 'The Australian Shepherd is a breed of herding dog from the United States. Developed in California in the 19th century, it is claimed the breed descends from a variety of herding breeds including collies imported into California with sheep from Australia and New Zealand, the breed taking its name from the former. Originally used solely as a herding dog, the Australian Shepherd has become one of the most popular companion dog breeds in the United States.'),
(3, 'Dogs_Pictures_Information/german_shepherd.jpg', 'The breed was officially known as the \"Alsatian Wolf Dog\" in the UK from after the First World War until 1977 when its name was changed back to German Shepherd.Despite its wolf-like appearance, the German Shepherd is a relatively modern breed of dog, with its origin dating to 1899.'),
(4, 'Dogs_Pictures_Information/golden-retriever.jpg', 'The Golden Retriever is a medium-large gun dog that was bred to retrieve shot waterfowl, such as ducks and upland game birds, during hunting and shooting parties. The name \"retriever\" refers to the breed\'s ability to retrieve shot game undamaged due to their soft mouth.'),
(5, 'Dogs_Pictures_Information/icelandic_sheepdog.jpg', 'The Icelandic Sheepdog is a breed of dog of spitz type originating from the dogs brought to Iceland by the Vikings. It is of similar type to the Norwegian Buhund, the Shetland Sheepdog, and the Welsh Corgi. They are commonly used to herd sheep in the Icelandic countryside.'),
(6, 'Dogs_Pictures_Information/irish_setter.jpg', 'The Irish Setter is a setter, a breed of gundog, and family dog. The term Irish Setter is commonly used to encompass the show-bred dog recognised by the American Kennel Club as well as the field-bred Red Setter recognised by the Field Dog Stud Book.'),
(7, 'Dogs_Pictures_Information/maltese.jpg', 'One of the oldest of the European toy breeds, the Maltese has been a lap dog to royalty for centuries. This all-white dog has silky hair instead of fur, often making it more tolerable for those who are allergic. Maltese love to be pampered, cuddled and held, and typically form strong attachments. They are gentle and affectionate, and are easy to train, especially when training is started early. Maltese have a medium energy level and do well indoors or in Small Living Spaces.'),
(8, 'Dogs_Pictures_Information/pharoah_hound.jpg', 'The Pharaoh Hound is a Maltese breed of hunting dog. In Maltese it is called Kelb tal-Fenek, which means \"rabbit dog\"; it is traditionally used for hunting rabbit in the rocky terrain of the Maltese Islands.'),
(9, 'Dogs_Pictures_Information/samoyed.jpg', 'The Samoyed is a breed of medium-sized herding dogs with thick, white, double-layer coats. They are related to the laika, a spitz-type dog. It takes its name from the Samoyedic peoples of Siberia. These nomadic reindeer herders bred the fluffy white dogs to help with herding.'),
(10, 'Dogs_Pictures_Information/siberian_husky.jpeg', 'The Siberian Husky is a medium-sized working sled dog breed. The breed belongs to the Spitz genetic family. It is recognizable by its thickly furred double coat, erect triangular ears, and distinctive markings, and is smaller than the similar-looking Alaskan Malamute.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doge_page`
--
ALTER TABLE `doge_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doge_page`
--
ALTER TABLE `doge_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
