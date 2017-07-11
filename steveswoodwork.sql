-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 06:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steveswoodwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `boxes`
--

CREATE TABLE `boxes` (
  `product_id` smallint(3) UNSIGNED NOT NULL,
  `box_number` smallint(3) UNSIGNED NOT NULL,
  `price` float(6,2) UNSIGNED DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `availability` enum('available','sold','custom') NOT NULL,
  `type` enum('standard','humidor','jewelry') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxes`
--

INSERT INTO `boxes` (`product_id`, `box_number`, `price`, `title`, `description`, `youtube`, `availability`, `type`) VALUES
(1, 31, 700.00, 'Yellowheart with Ebony trim', 'This custom wooden memory box is made with solid Yellow-heart wood, and Ebony as a trim. If your looking for something to stand out\r\nthis one will do it. Bright and beautiful with a Buffed lacquer finish, and machined solid brass gold plated hinges.\r\nYou can add personal engraving, just call me 209-505-5988.', 'https://www.youtube.com/embed/U7iK-JbuNeA?rel=0 ', 'available', 'humidor'),
(2, 98, 800.00, 'Quilted Maple', 'This handcrafted keepsake box is made with highly figured quilted Maple, All solid 3/4\" thick, brusso hinges, and 15 coats of lacquer, sanded and buffed to a musical instrument quality finish.', 'https://www.youtube.com/embed/vbbbIxYlclc?rel=0 ', 'available', 'standard'),
(3, 95, 1400.00, 'Myrtle with Ebony Trim', 'The Oregon Myrtle-wood tree grows uncultivated, only in a small area along the Pacific Coast.\r\nNo large stands of this unique tree are to be found. Nearly all of the remaining Myrtle-wood is scattered in small groves throughout the lower valleys along the rivers of Southwestern Oregon and the southern Pacific Coast. Centuries are required to grow a Myrtle-wood tree large enough to yield board-lumber.\r\nA time may come when the supply of highly figured Myrtle-wood will be depleted and the manufacturing of the articles from this wood may cease. The highly-prized pieces of today will be handed down through generations, as heirlooms which will be preserved for us by our descendent\'s.\r\nHighly figured all solid 3/4\" thick Myrtle-wood keepsake box with Ebony trim. Brusso machine quadrant hinges, and quality lock. Dovetail construction, and 12 coats of acrylic lacquer, sanded and buffed to musical instrument quality.', 'https://www.youtube.com/embed/2MbhtOFGLhw?rel=0 ', 'available', 'standard'),
(4, 40, NULL, 'Figured Myrtle w/Gaboon Ebony & Walnut Trim', 'The Oregon Myrtle-wood tree grows uncultivated, only in a small area along the Pacific Coast.\r\nNo large stands of this unique tree are to be found. Nearly all of the remaining Myrtle-wood is scattered in small groves throughout the lower valleys along the rivers of Southwestern Oregon and the southern Pacific Coast. Centuries are required to grow a Myrtle-wood tree large enough to yield board-lumber.\r\nA time may come when the supply of highly figured Myrtle-wood will be depleted and the manufacturing of the articles from this wood may cease. The highly-prized pieces of today will be handed down through generations, as heirlooms which will be preserved for us by our descendent\'s.\r\nHighly figured all solid 3/4\" thick Myrtle-wood keepsake box with Ebony and Walnut trim. Brusso machine quadrant hinges, brass lifting handles, and quality lock. Dovetail construction, and 12 coats of acrylic lacquer, sanded and buffed to musical instrument quality. Nickle plated solid brass hardware.', 'https://www.youtube.com/embed/4n_3L1jMazo?rel=0', 'sold', 'standard'),
(5, 84, NULL, 'Cocobolo with French Polish ', 'One of a kind Mexican Cocobolo. The finish is buffed Shellac sometimes called a French Polish. Brusso hinges with 95 degree stop,100% all solid 3/4\" thick. Cocobolo is a true rosewood and one of the world\'s most attractive exotic woods, exhibiting a wide range of rich colors including shades of orange, yellow, red and brown, accompanied by black striping. Cocobolo grows mainly in the Pacific regions of Mexico and Central America. Cocobolo supplies are getting limited. Because of the wood\'s beauty and high value, the trees yielding this wood have been heavily exploited: they are rare. Only relatively small amounts of this prized wood reach the world market and it is expensive. Cocobolo wood is unique and beautiful but also has a density so great that it will sink in water. Very heavy to hold, hard to believe it\'s wood. Truly unmatched, this wood is one of natures unique creations.', 'https://www.youtube.com/embed/3azX9YmCVFE?rel=0', 'sold', 'standard'),
(6, 44, NULL, 'Myrtle Burl', 'The Oregon Myrtle-wood tree grows uncultivated, only in a small area along the Pacific Coast.\r\nNo large stands of this unique tree are to be found. Nearly all of the remaining Myrtle-wood is scattered in small groves throughout the lower valleys along the rivers of Southwestern Oregon and the southern Pacific Coast. Centuries are required to grow a Myrtle-wood tree large enough to yield board-lumber. A time may come when the supply of highly figured Myrtle-wood will be depleted and the manufacturing of the articles from this wood may cease. The highly-prized pieces of today will be handed down through generations, as heirlooms which will be preserved for us by our descendent\'s. Highly figured all solid 3/4\" thick Myrtle Burl wood memory/keepsake box with Macassar Ebony trim. Dovetail construction, Brusso quadrant hinges, high quality lock, brass Handles makes this keepsake box something to love and display as a family heirloom for many generations. 12 coats of acrylic lacquer, sanded and buffed to musical instrument quality. The Latin name for Macassar Ebony is Diospryus celibica. Diospyros, in Latin, originally meant “fruit of the God’s” and is referenced in Ezekiel 27:15. A wood of great importance World wide that has been used by many Kings.', 'https://www.youtube.com/embed/UPC2i9u7jgE?rel=0', 'sold', 'standard'),
(7, 1, NULL, 'Figured Western Black Walnut', 'his Keepsake or Jewelry Box is made with hard to find unique Figured Western Black Walnut. It has a oil finish and is absolutely Beautiful. This box is made from 12\" wide lumber all one piece top and bottom.100% 1/2\" thick, with the best gold plated brass hinges and steel pin. The highly figured Western Black Walnut was air dried for 10 years. Very rare and hard to find with multiple colors created from the tree location by a river. One branch from a very old tree, we will not find this again. We built this Box with strength in construction that will last many generations. Dove Tails and Dowels will keep it together almost forever.', NULL, 'custom', 'standard'),
(8, 2, NULL, 'Figured Black Walnut w/Ebony Trim', '', NULL, 'custom', 'standard'),
(9, 3, NULL, 'Crotch Walnut w/Ebony Trim', '', NULL, 'custom', 'standard'),
(10, 90, 1200.00, 'Royal Blue over Oak', 'Large Keepsake box, made with 3/4\" thick Oak, blue lacquer, and 13 coats clear Lacquer. Sanded and buffed to a brilliant glass like finish. Lock and Handles makes this keepsake box very stunning.', 'https://www.youtube.com/embed/MCSblnuSfC8?rel=0', 'available', 'standard'),
(11, 101, NULL, 'Handcrafted custom Humidor, Walnut Burl', 'Handcrafted Humidor, Walnut burl, exebition grade. Walnut burl is 3/8\" thick, and laminated on 5/8\" thick Spanish Ceder. Indian Ebony trim,15 coats acrilic lacquer, sanded and buffed to musical instrument quality. Brusso quadrant hinges, high quality lock. Dove tail construction.', 'https://www.youtube.com/embed/_e796Rs1fZ0?rel=0', 'custom', 'humidor'),
(12, 29, NULL, 'Figured Black Walnut. Engraved Wooden Jewelry Box.', 'This Figured Black Walnut engraved wooden Jewelry Box was made for a customer. Special quote engraved on the inside of the lid.', NULL, 'custom', 'jewelry');

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `page` enum('jewelry','humidor','engraving') NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`page`, `title`, `description`) VALUES
('humidor', 'Handcrafted Cigar Humidors', 'Our entire line of humidors combine detailed craftsmanship with authentic Spanish cedar to provide the perfect environment for storing your favorite cigars. In this section you can browse through some of the cigar humidors we have built. Many of our humidors are custom built per order, so if you have a specific humidor you would like please contact us. '),
('jewelry', 'Handcrafted Jewelry Boxes<br />\r\nThis page shows how we add multiple trays to make a Jewelry Box.', 'We add one Tray and side rails to make it a Jewelry Box. The Wood will match the box. Please allow two additional week for delivery. You can order up to three trays by special request. One tray allows for much storage area under the tray. In most cases an additional $75.00 is charged to custom build your tray.\r\nSee examples below. This is our generic tray design, but with a phone call we can change this to your desired configuration.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boxes`
--
ALTER TABLE `boxes`
  MODIFY `product_id` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
