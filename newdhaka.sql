-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2026 at 11:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdhaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readStatus` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_infos`
--

CREATE TABLE `basic_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favIcon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fbLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instraLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youTubeLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_infos`
--

INSERT INTO `basic_infos` (`id`, `title`, `favIcon`, `logo`, `contact`, `email`, `address`, `fbLink`, `instraLink`, `youTubeLink`, `created_at`, `updated_at`) VALUES
(1, 'New Dhaka', 'fav1780824216.png', 'logo1780824561.png', '+88 02-55036456-58, 55036692, 55036696, 55036698', 'info@maguragroup.com.bd', 'Plot No.-314/A, Road-18, Block-E, Bashundhara Residential Area, Dhaka 1229, Bangladesh.', 'https://www.facebook.com/magura.group.mg', 'https://x.com/GroupMagura?lang=en', 'https://www.youtube.com/channel/UCheM1ziE-laJUnfxVoaYu0g', NULL, '2026-06-07 09:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maillingAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferedLoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferedSize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carparkingReq` int NOT NULL,
  `expectedHOD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferedFlr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numOfbedRoom` int NOT NULL,
  `numOfBathRoom` int NOT NULL,
  `readStatus` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_datails`
--

CREATE TABLE `company_datails` (
  `id` bigint UNSIGNED NOT NULL,
  `companyName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyEmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_datails`
--

INSERT INTO `company_datails` (`id`, `companyName`, `companyEmail`, `phone`, `address`, `logo`, `created_at`, `updated_at`) VALUES
(1, '-', 'example@gmail.com', '-', '-', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDetails` longtext COLLATE utf8mb4_unicode_ci,
  `longDetails` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mainMenuID` int NOT NULL,
  `mainMenuName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subMenuID` int NOT NULL,
  `subMenuName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `shortDetails`, `longDetails`, `image`, `mainMenuID`, `mainMenuName`, `subMenuID`, `subMenuName`, `created_at`, `updated_at`) VALUES
(1, 'BACKGROUND', '<p><br></p>', '<p><b>DCF STUDIO LTD.</b> emerged as a visionary venture founded by\r\nthree close-knit friends who originally met at Dhaka College.\r\nSpecializing in the realms of interior design, architecture,\r\nconstruction, and real estate, the company has swiftly risen to\r\nprominence due to its dynamic and innovative approach to\r\ntransforming spaces. With an unyielding passion for creating\r\ncaptivating environments that seamlessly blend aesthetic\r\nbrilliance with functional design, DCF STUDIO LTD. has\r\nsuccessfully etched its name in the industry. Drawing from their\r\nformative college experiences and leveraging their shared\r\naspirations, the founders have cultivated a company that thrives\r\non creativity, collaboration, and a deep understanding of the\r\ndiverse needs of their clients.<br></p>', 'contImg1695197976.jpg', 2, 'About DCF Studio Ltd.', 2, 'About us', '2023-04-30 13:50:45', '2023-10-22 08:53:09'),
(2, 'WHO WE ARE', NULL, '<p><span style=\"font-size: 1rem;\">At DCF STUDIO LTD, we are passionate creators of exceptional living spaces. With a decade-long legacy, we have become industry pioneers, driven by innovation and a commitment to excellence.</span><br></p><p><span style=\"font-size: 1rem;\">We specialize in developing and selling thoughtfully designed flats. Our focus is on crafting architectural marvels that redefine modern living. From premium materials to cutting-edge technologies, we meticulously craft each space for an unparalleled experience.</span><br></p><p><span style=\"font-size: 1rem;\">Our commitment extends beyond the flats themselves. We create vibrant communities where residents can thrive, fostering connections and a sense of belonging. With exclusive amenities and a customer-centric approach, we go beyond providing shelter - we create homes where memories are made.</span><br></p><p><span style=\"font-size: 1rem;\">At DCF STUDIO LTD, integrity, transparency, and customer satisfaction are at the heart of everything we do. Our dedicated team works closely with customers, ensuring their involvement and satisfaction every step of the way.</span><br></p><p><span style=\"font-size: 1rem;\">Join us at DCF STUDIO LTD and discover a world where visionary design and exceptional craftsmanship meet. Experience the difference in our exceptional living spaces and let us help you find your perfect home.</span><br></p>', 'contImg1695198136.jpg', 2, 'About DCF Studio Ltd.', 2, 'About us', '2023-04-30 14:08:33', '2023-10-22 08:57:39'),
(3, 'OUR APPROACH', NULL, '<p><span style=\"font-size: 1rem;\">At&nbsp;</span><span style=\"font-weight: 700; color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">DCF STUDIO LTD</span><span style=\"font-size: 1rem;\">, our approach is rooted in three key principles - innovation, quality craftsmanship, and customer satisfaction. We embrace innovative design concepts, employ skilled artisans, and prioritize the needs and preferences of our valued customers. With this approach, we create exceptional living spaces that exceed expectations and stand the test of time.</span><br></p>', 'contImg1682864028.jpg', 2, 'About DCF Studio Ltd.', 2, 'About us', '2023-04-30 14:13:11', '2023-10-22 08:56:20'),
(4, 'OUR LOGO', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; background-color: rgb(253, 253, 253);\">The concept for our logo is derived from the shape of human hands, the shape they make when held with the palms facing each other.</span><br style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; background-color: rgb(253, 253, 253);\"><br style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; background-color: rgb(253, 253, 253);\">Usually, when we hold an object in our palms, it is something we care about, something valuable to us. Like when a blow of air attempts to put off a candle that gives us light, we protect it with our palms. When a tiny bird falls from its nest, we hold it up and protect it in our palms. When a sculptor sculpts a masterpiece, he shapes it using his fingers and palms. Hence, our logo depicts the amount of care and emotion we put into each and every creation.</span><br style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; background-color: rgb(253, 253, 253);\"><br style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; background-color: rgb(253, 253, 253);\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; background-color: rgb(253, 253, 253);\">Moreover, it is a symbol that inspires us on a daily basis to be caring towards our clients and protect their interests by providing an uncompromising level of service and superior products.</span><br></p>', 'contImg1695197627.jpg', 2, 'About DCF Studio Ltd.', 2, 'About us', '2023-04-30 14:14:54', '2023-10-22 08:57:59'),
(5, 'VISION', NULL, 'At DCF STUDIO LTD., our mission is to transform spaces through innovative interior design, architecture, and construction. We blend creativity with functionality, creating environments that inspire and elevate. Our goal is to set new industry benchmarks, enriching lives and communities while staying true to our clients\' unique visions.', NULL, 2, 'About DCF Studio Ltd.', 3, 'Vision, Mission & Values', '2023-04-30 14:39:44', '2023-10-22 09:01:29'),
(6, 'MISSION', NULL, 'At DCF STUDIO LTD., our mission is to transform spaces through\r\ninnovative interior design, architecture, and construction. We\r\nblend creativity with functionality, creating environments that\r\ninspire and elevate. Our goal is to set new industry benchmarks,\r\nenriching lives and communities while staying true to our clients\'\r\nunique visions.', NULL, 2, 'About DCF Studio Ltd.', 3, 'Vision, Mission & Values', '2023-04-30 14:43:38', '2023-10-22 09:02:44'),
(7, 'VALUES', NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-size: 1rem;\"><b>Integrity</b>: We uphold the highest standards of integrity in all our interactions, fostering trust and transparency with our customers, partners, and stakeholders. We are committed to honest and ethical practices, ensuring that every decision we make aligns with our principles.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-size: 1rem;\"><b>Excellence</b>: We strive for excellence in every aspect of our work, from design and construction to customer service. We pursue perfection, paying meticulous attention to detail and delivering superior craftsmanship that surpasses expectations. We continuously challenge ourselves to innovate and improve, setting new benchmarks for quality.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-size: 1rem;\"><b>Customer</b>-Centricity: Our customers are at the heart of everything we do. We listen, understand their needs, and tailor our solutions to exceed their expectations. We prioritize open communication, providing a personalized experience that fosters long-lasting relationships and customer satisfaction.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-size: 1rem;\"><b>Collaboration</b>: We believe in the power of collaboration and teamwork. We value the diverse perspectives and expertise of our employees, partners, and stakeholders. By fostering a collaborative environment, we encourage creativity, innovation, and the ability to overcome challenges together.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-size: 1rem;\"><b>Sustainability</b>: We are committed to sustainable practices that minimize our environmental footprint and contribute to a greener future. We integrate energy-efficient technologies, utilize eco-friendly materials, and promote sustainable building practices to create homes that are not only beautiful but also environmentally responsible.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-size: 1rem;\"><b>Community</b>: We are dedicated to creating vibrant and inclusive communities. We prioritize the well-being and happiness of our residents, fostering a sense of belonging and connection. We actively engage with the local community, supporting social initiatives and giving back to society.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-size: 1rem;\">These values guide our decisions and actions, shaping our company culture and driving us towards achieving our vision of creating exceptional living spaces and making a positive impact in the real estate industry.</span><br></p>', NULL, 2, 'About DCF Studio Ltd.', 3, 'Vision, Mission & Values', '2023-04-30 14:46:02', '2023-10-22 09:03:49'),
(8, 'MR. KHONDOKER MONIR UDDIN', '<h4 class=\"board-member-desig text-uppercase\" style=\"font-family: &quot;DIN Next LT Pro&quot;, sans-serif; line-height: 1.1; color: rgb(127, 123, 121); margin-bottom: 10px; font-size: 16px;\">MANAGING DIRECTOR</h4>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'contImg1698844819.jpg', 2, 'About DCF Studio Ltd.', 4, 'Associates', '2023-04-30 15:12:41', '2023-11-01 23:20:19'),
(10, 'MR. SAIF KHONDOKER', '<h4 class=\"board-member-desig text-uppercase\" style=\"font-family: &quot;DIN Next LT Pro&quot;, sans-serif; line-height: 1.1; color: rgb(127, 123, 121); margin-bottom: 10px; font-size: 16px;\">DIRECTOR</h4>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'contImg1698844755.jpg', 2, 'About DCF Studio Ltd.', 4, 'Associates', '2023-04-30 15:15:54', '2023-11-01 23:19:15'),
(12, 'MR. M HABIBUL BASIT', '<h4 class=\"board-member-desig text-uppercase\" style=\"line-height: 1.1; margin-bottom: 10px;\">CHIEF EXECUTIVE OFFICER</h4>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'contImg1698844022.jpg', 2, 'About DCF Studio Ltd.', 4, 'Associates', '2023-05-01 05:48:45', '2023-11-01 23:07:02'),
(14, 'MR. MIR MAHMUD ALI DILIP', '<h4 class=\"board-member-desig text-uppercase\" style=\"line-height: 1.1; margin-bottom: 10px;\">EXECUTIVE DIRECTOR</h4>', '<p>Mr. Mir Mahmud Ali Dilip is a stellar real estate professional with a broad experience of over 34 years. His leadership has resulted in numerous signature projects, such as the world class Apollo Hospitals Dhaka, International School Dhaka (ISD), and Delhi Public School, Dhaka. Digonto - the first true condominium of Bangladesh, The Glass House – The first steel and glass structure and many more.<br style=\"\"><br style=\"\">He is currently the Executive Director of the Planning and Coordination team at SHL.<br></p>', 'contImg1698844514.jpg', 2, 'About DCF Studio Ltd.', 4, 'Associates', '2023-05-01 05:54:26', '2023-11-01 23:15:14'),
(23, 'Prime Locations', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">We offer a selection from the most lucrative locations across the city. Our project locations are selected intelligently, keeping in mind the things that matter to you most.</span><br></p>', NULL, 1, 'Home', 17, 'Hero Section-2', '2023-05-01 08:28:27', '2023-05-01 09:38:39'),
(24, 'Top Consultants', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">We engage the leading consultants in their respective fields from both home and abroad, to ensure that every facet of a project is designed to perfection. After all, the best designs can only come from the best minds.</span><br></p>', NULL, 1, 'Home', 17, 'Hero Section-2', '2023-05-01 10:03:06', '2023-05-01 10:03:06'),
(25, 'Highest Quality Materials', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">We continuously explore material sourcing globally to enhance the comfort and lifestyle of our clients. Each material used in our projects is selected with the utmost attention to quality,&nbsp;suitability and durability.</span><br></p>', NULL, 1, 'Home', 17, 'Hero Section-2', '2023-05-01 10:03:44', '2023-05-01 10:03:44'),
(26, 'Uncompromised Safety', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">Our priority to safety is second to none. Structural, electro-mechanical and fire safety stand paramount in our planning and construction methodology, in order to ensure your safety in your sanctuary.</span><br></p>', NULL, 1, 'Home', 17, 'Hero Section-2', '2023-05-01 10:04:27', '2023-05-01 10:04:27'),
(27, 'On-time Delivery', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">Our experienced team of highly qualified engineers and management professionals work relentlessly in perfect synergy. At Shanta, delivering uncompromised quality, on time, has become our mantra.</span><br></p>', NULL, 1, 'Home', 17, 'Hero Section-2', '2023-05-01 10:05:03', '2023-05-01 10:05:03'),
(28, 'Professional Management', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">A safe, clean and comfortable living environment can only be maintained by a team of professionals with an eye for perfection. Our Facility Management team will ensure your desire to live in a beautiful community remains fulfilled.</span><br></p>', NULL, 1, 'Home', 17, 'Hero Section-2', '2023-05-01 10:05:31', '2023-05-01 10:05:31'),
(30, 'LANDOWNERS', NULL, '<p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem;\">Are you a landowner with untapped potential in your property? A.H.N. Builder\'s Limited is here to unlock its true value. With our expertise in real estate development, we specialize in transforming raw land into thriving communities. Collaborate with us and witness your land\'s transformation into beautifully designed buildings that stand as testaments to our craftsmanship. Our experienced team will guide you through the entire development process, ensuring that your land reaches its full potential while respecting your vision. </span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem;\">Contact us today at <b><u>ahnbuilderslimited@gmail.com</u></b> or fill out the form below to take the first step towards maximizing your land\'s value with A.H.N. Builder\'s Limited.</span><br></p>', 'contImg1695293525.jpg', 5, 'Contact', 13, 'Landowners', '2023-05-01 13:44:03', '2023-09-21 20:52:05'),
(31, 'BUYERS', NULL, '<p><font color=\"#000000\" face=\"Roboto, sans-serif\">Imagine stepping into your dream apartment, a sanctuary that combines luxury, comfort, and convenience. At A.H.N. Builder\'s Limited, we make this dream a reality. As a leading name in the real estate industry, we are committed to providing exceptional apartments for discerning buyers like you.</font></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem;\">Our apartments are meticulously designed with meticulous attention to detail, creating a space that exudes sophistication and elegance. From the moment you enter, you\'ll be greeted by spacious living areas, tasteful finishes, and premium materials that create an ambiance of luxury. Each apartment is thoughtfully crafted to meet your desires for both style and functionality.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem;\">With a range of options to choose from, you\'ll find the perfect apartment to suit your lifestyle. Whether you\'re looking for a cozy one-bedroom retreat or a spacious family-oriented layout, our diverse selection ensures there\'s something for everyone. Open floor plans, abundant natural light, and thoughtful spatial arrangements create a harmonious living environment that you\'ll be proud to call home.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem;\">Beyond the walls of your apartment, we provide a host of amenities designed to enhance your daily life. From well-equipped fitness centers to serene outdoor spaces, we strive to offer a complete living experience. Our prime locations provide convenient access to essential amenities, ensuring that everything you need is just a stone\'s throw away.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem;\">At A.H.N. Builder\'s Limited, our commitment to exceptional customer service sets us apart. Our dedicated team of professionals is here to guide you through every step of the buying process, providing personalized assistance and addressing your concerns with care and attention.</span><br></p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif; font-size: 1rem;\">Discover the joy of owning an extraordinary apartment that reflects your aspirations. Contact A.H.N. Builder\'s Limited today and let us help you find the perfect haven that you\'ve always dreamed of. Your ideal apartment awaits, and we\'re here to make it a reality.</span><br></p>', 'contImg1684399386.jpg', 5, 'Contact', 14, 'Buyers', '2023-05-01 13:45:28', '2023-05-18 18:43:06'),
(32, 'CUSTOMERS', NULL, '<p><font color=\"#000000\" face=\"Roboto, sans-serif\">Experience the epitome of luxury living with A.H.N. Builder\'s Limited. Our exceptional collection of apartments is designed to redefine your expectations and elevate your lifestyle to new heights. Immerse yourself in the sheer beauty and meticulous craftsmanship of our residences, where every detail is thoughtfully curated to create a truly captivating living space. Discover the perfect fusion of elegance, comfort, and convenience as you explore our diverse range of apartments tailored to meet your unique preferences. With A.H.N. Builder\'s Limited, you can expect nothing less than extraordinary. Contact us now and embark on a journey to find your dream apartment, where luxury becomes your everyday reality.</font><br></p>', 'contImg1695293480.jpg', 5, 'Contact', 15, 'Customers', '2023-05-01 13:47:05', '2023-09-21 20:51:20'),
(33, 'CONTACT US', NULL, '<p>Have questions, comments, or inquiries about our services? We\'re here to assist you every step of the way. At A.H.N. Builder\'s Limited, we specialize in developing quality buildings and providing exceptional living spaces. Whether you\'re interested in partnering with us or exploring our range of homes, our dedicated team is ready to help. Contact us today for personalized service and expert guidance.</p><p><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\"><span style=\"font-weight: 700;\">Contact:</span>&nbsp;01977 153 567</span><br style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\"><span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\"><span style=\"font-weight: 700;\">Email:</span>&nbsp;ahnbuilderslimited@gmail.com</span><br></p>', 'contImg1684393478.jpg', 5, 'Contact', 16, 'Contact Us', '2023-05-01 13:48:42', '2023-05-18 17:25:59'),
(34, 'Mustafa Kamal Mohiuddin', '<p>Chairman</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'contImg1698844451.jpg', 2, 'About', 4, 'Associates', '2023-05-02 13:56:47', '2026-06-07 10:04:53'),
(38, 'Residential Buildings', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697969276.jpeg', 6, 'Services', 22, 'Architectural Design', '2023-10-22 10:07:56', '2023-10-22 10:36:06'),
(39, 'Commercial Buildings', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697969355.jpg', 6, 'Services', 22, 'Architectural Design', '2023-10-22 10:09:15', '2023-10-22 10:35:56'),
(40, 'Industrial Buildings', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697969400.jpg', 6, 'Services', 22, 'Architectural Design', '2023-10-22 10:10:00', '2023-10-22 10:35:46'),
(41, 'Mixed Use Development', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697969444.jpg', 6, 'Services', 22, 'Architectural Design', '2023-10-22 10:10:44', '2023-10-22 10:35:13'),
(42, 'Residential', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971707.jpg', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:48:27', '2023-10-22 10:48:27'),
(43, 'Office Spaces', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971744.webp', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:49:04', '2023-10-22 10:49:04'),
(44, 'Shopping mall', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971778.jpg', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:49:38', '2023-10-22 10:49:38'),
(45, 'Bank', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971811.jpg', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:50:11', '2023-10-22 10:50:11'),
(46, 'Stalls And Pavilions', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971846.jpeg', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:50:46', '2023-10-22 10:50:46'),
(47, 'Trading Points', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971882.jpg', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:51:22', '2023-10-22 10:51:22'),
(48, 'Industrial Spaces', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971922.jpg', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:52:02', '2023-10-22 10:52:02'),
(49, 'Other Public Spaces', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697971963.webp', 6, 'Services', 23, 'Interior Design', '2023-10-22 10:52:43', '2023-10-22 10:52:43'),
(50, 'Residential Buildings', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972559.jpg', 6, 'Services', 25, 'Construction', '2023-10-22 11:02:39', '2023-10-22 11:02:39'),
(51, 'Industrial Buildings', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972613.jpg', 6, 'Services', 25, 'Construction', '2023-10-22 11:03:33', '2023-10-22 11:03:33'),
(52, 'Industrial Buildings', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972614.jpg', 6, 'Services', 25, 'Construction', '2023-10-22 11:03:34', '2023-10-22 11:03:34'),
(53, 'Mixed Use Development', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972663.jpg', 6, 'Services', 25, 'Construction', '2023-10-22 11:04:23', '2023-10-22 11:04:23'),
(54, 'Interior Rendering', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972761.jpg', 6, 'Services', 28, '3d Visualization', '2023-10-22 11:06:01', '2023-10-22 11:06:01'),
(55, 'Exterior Rendering', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972808.jpg', 6, 'Services', 28, '3d Visualization', '2023-10-22 11:06:48', '2023-10-22 11:06:48'),
(56, 'Animation', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972848.jpg', 6, 'Services', 28, '3d Visualization', '2023-10-22 11:07:28', '2023-10-22 11:07:28'),
(57, '3D Modeling', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697972905.jpg', 6, 'Services', 28, '3d Visualization', '2023-10-22 11:08:25', '2023-10-22 11:08:25'),
(58, 'Home Furniture', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697973129.jpg', 6, 'Services', 31, 'Furniture', '2023-10-22 11:12:09', '2023-10-22 11:12:09'),
(59, 'Office Furniture', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697973173.jpg', 6, 'Services', 31, 'Furniture', '2023-10-22 11:12:53', '2023-10-22 11:12:53'),
(60, 'Hospital Furniture', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697973214.jpg', 6, 'Services', 31, 'Furniture', '2023-10-22 11:13:34', '2023-10-22 11:13:34'),
(61, 'Shop Furniture', NULL, '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 'contImg1697973251.jpg', 6, 'Services', 31, 'Furniture', '2023-10-22 11:14:11', '2023-10-22 11:14:11'),
(63, 'Company Name', NULL, NULL, '1.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:24:33', '2023-10-23 10:24:33'),
(64, 'Company Name', NULL, NULL, '2.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:25:45', '2023-10-23 10:25:45'),
(65, 'Company Name', NULL, NULL, '3.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:26:33', '2023-10-23 10:26:33'),
(66, 'Company Name', NULL, NULL, '4.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:27:09', '2023-10-23 10:27:09'),
(67, 'Company Name', NULL, NULL, '5.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:27:59', '2023-10-23 10:27:59'),
(68, 'Company Name', NULL, NULL, '6.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:29:26', '2023-10-23 10:29:26'),
(69, 'Company Name', NULL, NULL, '7.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:30:09', '2023-10-23 10:30:09'),
(70, 'Company Name', NULL, NULL, '8.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:30:23', '2023-10-23 10:30:23'),
(71, 'Company Name', NULL, NULL, '9.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:31:34', '2023-10-23 10:31:34'),
(72, 'Company Name', NULL, NULL, '10.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:32:18', '2023-10-23 10:32:18'),
(73, 'Company Name', NULL, NULL, '11.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:32:54', '2023-10-23 10:32:54'),
(74, 'Company Name', NULL, NULL, '12.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:33:42', '2023-10-23 10:33:42'),
(75, 'Company Name', NULL, NULL, '13.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:34:29', '2023-10-23 10:34:29'),
(76, 'Company Name', NULL, NULL, '14.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:35:13', '2023-10-23 10:35:13'),
(77, 'Company Name', NULL, NULL, '15.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:35:54', '2023-10-23 10:35:54'),
(78, 'Company Name', NULL, NULL, '16.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:36:26', '2023-10-23 10:36:26'),
(79, 'Company Name', NULL, NULL, '17.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:37:04', '2023-10-23 10:37:04'),
(80, 'Company Name', NULL, NULL, 'contImg1780825322.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 10:37:35', '2026-06-07 09:42:02'),
(81, 'Company Name', NULL, NULL, 'contImg1780825365.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 11:34:29', '2026-06-07 09:42:45'),
(82, 'Company Name', NULL, NULL, 'contImg1780825349.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-10-23 11:35:16', '2026-06-07 09:42:29'),
(84, 'XYZ', NULL, NULL, 'contImg1780825336.jpg', 7, 'Clients', 32, 'OUR VALUED CLIENTS', '2023-11-11 20:53:25', '2026-06-07 09:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `land_owners`
--

CREATE TABLE `land_owners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactperson` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landsize` int NOT NULL,
  `roadwidth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `readStatus` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL),
(2, 'About', NULL, NULL),
(3, 'Projects', NULL, NULL),
(4, 'Blogs & News', NULL, NULL),
(5, 'Contact', NULL, NULL),
(6, 'Services', NULL, NULL),
(7, 'Clients', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `readStatus` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `readStatus`, `created_at`, `updated_at`) VALUES
(4, 'Noman', 'admin@gmail.com', NULL, NULL, 'Noman...', 0, '2023-10-24 03:09:02', '2023-10-24 03:09:02'),
(5, 'Noman', 'admin@gmail.com', NULL, NULL, 'Noman...', 0, '2023-10-24 03:09:10', '2023-10-24 03:09:10'),
(6, 'Noman', 'admin@gmail.com', NULL, NULL, 'Noman...', 0, '2023-10-24 03:09:13', '2023-10-24 03:09:13'),
(7, 'Noman', 'admin@gmail.com', NULL, NULL, 'Noman...\r\n.................', 0, '2023-10-24 03:09:31', '2023-10-24 03:09:31'),
(8, 'Nowab Shorif', '08923983', NULL, NULL, 'Hello', 0, '2023-10-31 22:54:30', '2023-10-31 22:54:30'),
(9, 'Andrew Hooks', 'andrew.hooks@webmasterdawgs.com', '(888) 955-8777', 'Website Issues', 'Hi! I just visited your site and noticed some errors, let me know if you need help and a free report.', 0, '2023-11-04 17:14:12', '2023-11-04 17:14:12'),
(11, 'Nowab Shorif', 'nsanoman@gmail.com', '01839317038', 'Checking', 'Checking', 0, '2023-11-11 22:32:11', '2023-11-11 22:32:11'),
(12, 'Ashley Brooks', '555-555-5555', NULL, NULL, 'hey don\'t mean to bug you but if you\'re interested in ranking your site dcfstudioltd.com on Google we can hook you up at a good price.. just fill out the quick form at http://www.seo-xperts.top', 0, '2023-11-16 11:43:10', '2023-11-16 11:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2023_03_06_141559_create_raw_materials_table', 4),
(18, '2023_01_21_195309_create_expense_heads_table', 5),
(19, '2023_03_06_161615_create_clients_table', 5),
(23, '2023_03_07_113844_create_project_materials_table', 7),
(25, '2023_03_07_165048_create_expenses_table', 8),
(31, '2023_03_06_184313_create_flats_table', 11),
(32, '2023_03_09_154623_create_installments_table', 12),
(33, '2023_03_09_093039_create_flat_sales_table', 13),
(52, '2014_10_12_000000_create_users_table', 14),
(53, '2014_10_12_100000_create_password_resets_table', 14),
(54, '2019_08_19_000000_create_failed_jobs_table', 14),
(55, '2019_12_14_000001_create_personal_access_tokens_table', 14),
(56, '2023_01_12_130149_create_company_datails_table', 14),
(57, '2023_01_21_065809_create_roles_table', 14),
(58, '2023_03_29_143646_create_basic_infos_table', 14),
(59, '2023_04_01_140549_create_projects_table', 14),
(60, '2023_04_01_151635_create_news_events_table', 14),
(61, '2023_04_01_162428_create_contacts_table', 14),
(62, '2023_04_02_113254_create_project_galleries_table', 14),
(63, '2023_04_02_113635_create_messages_table', 14),
(64, '2023_04_02_113934_create_land_owners_table', 14),
(65, '2023_04_02_114650_create_buyers_table', 14),
(66, '2023_04_02_115721_create_sliders_table', 14),
(67, '2023_04_02_115844_create_applications_table', 14),
(68, '2023_04_02_123641_create_news_event_galleries_table', 14),
(75, '2023_04_29_161131_create_menus_table', 15),
(76, '2023_04_29_165711_create_contents_table', 15),
(77, '2023_04_29_175324_create_sub_menus_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `writter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `heading`, `shortDescription`, `description`, `source`, `link`, `writter`, `date`, `type`, `created_at`, `updated_at`) VALUES
(4, 'Elevate Your Living Space: 7 Expert Tips for Residential Interior Design in Dubai', 'Dubai is a place full of luxury and innovative designs. Whether the designs are showcased in the infrastructures, clothing or art. The design is everywhere and everyone is surrounded by stunning designs in Dubai. So why not create an exceptional design for the residential too? The place where you live should also be a safe haven with a beautiful interior. As you will be spending your most time relaxing and unwinding at home. Here are mention of the 7 expert tips to achieve the desired Residential Interior Design Dubai:', '<p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\">Dubai is a place full of luxury and innovative designs. Whether the designs are showcased in the infrastructures, clothing or art. The design is everywhere and everyone is surrounded by stunning designs in Dubai. So why not create an exceptional design for the residential too? The place where you live should also be a safe haven with a beautiful interior. As you will be spending your most time relaxing and unwinding at home. Here are mention of the 7 expert tips to achieve the desired Residential Interior Design Dubai:</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><span style=\"font-weight: bolder;\">&nbsp;</span></p><ol style=\"padding-left: 20px; color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><li><span style=\"font-weight: bolder;\">Maximize Natural Light</span></li></ol><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\"><span style=\"font-weight: bolder;\">&nbsp;</span>In Dubai, you get maximum sunlight throughout the months in a year. There are more months of summer than the winter. Which means you get more chances of having natural lights at your residence. Large windows, glass walls and strategically placed mirrors can help maximize natural light. Making your living space feel more open, inviting and energy-efficient. Maximizing the natural lights at your space also makes you feel more energetic throughout the day.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><span style=\"font-weight: bolder;\">&nbsp;</span></p><ol start=\"2\" style=\"padding-left: 20px; color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><li><span style=\"font-weight: bolder;\">Choose a Neutral Color Palette</span></li></ol><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\"><span style=\"font-weight: bolder;\">&nbsp;</span>When choosing a neutral color palette for the Residential Interior Design Dubai. You are choosing to have more fun choices with the furniture and other accessory choices around the house. The neutral color palette includes beige, cream and soft gray as the base colors. You can add any other pop of colors with furniture or artwork when you have neutral interior color choices. This will bring life to the overall look of the interior design.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><span style=\"font-weight: bolder;\">&nbsp;</span></p><ol start=\"3\" style=\"padding-left: 20px; color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><li><span style=\"font-weight: bolder;\">Embrace the Essence of Dubai’s Culture</span></li></ol><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\"><span style=\"font-weight: bolder;\">&nbsp;</span>If you are residing in Dubai and looking for a change in your residential interior. Then you must include some element that represents Dubai, it can be some local culture or heritage. Consider adding traditional Arabic architecture such as arches, Mashrabiya screens and decorative calligraphy. Embracing the essence of Dubai’s culture in your Residential Interior Design Dubai will add a touch of uniqueness in your living space. And it is always a good thing to add some element to represent the place you are residing in.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: center;\"><span style=\"font-weight: bolder;\">&nbsp;</span></p><ol start=\"4\" style=\"padding-left: 20px; color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><li><span style=\"font-weight: bolder;\">Incorporate Luxurious Materials</span></li></ol><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\"><span style=\"font-weight: bolder;\">&nbsp;</span>Dubai is known for being the most luxurious place in the world. So why not include some luxurious materials for the residents? The luxurious feel and touch can be created by incorporating those elements in the interior design.&nbsp; Indulge in high-end materials like marble, granite and high-quality wood. These materials not only exude opulence but also offer durability and longevity, ensuring that your interior design stands the test of time.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><span style=\"font-weight: bolder;\">&nbsp;</span></p><ol start=\"5\" style=\"padding-left: 20px; color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><li><span style=\"font-weight: bolder;\">Invest in Custom Furniture</span></li></ol><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\"><span style=\"font-weight: bolder;\">&nbsp;</span>You can also focus on including custom furniture for your interior to look more lavish and stunning. There are many bespoke furniture shops in Dubai where you can ask for any design or type of furniture you have in mind. Consider investing in the custom made furniture where all your needs are met. After all you would want to incorporate furniture which is functional and stylish at the same time. Adding custom furniture are smart choices for Residential Interior Design Dubai.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\">&nbsp;</p><ol start=\"6\" style=\"padding-left: 20px; color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><li><span style=\"font-weight: bolder;\">Create Zen-Like Spaces</span></li></ol><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\"><span style=\"font-weight: bolder;\">&nbsp;</span>The Dubai lifestyle is pretty fast paced where everything happens in a minute. And in that you would like to have your own space where you can actually relax and unwind. Create a zen-like space in your residence where you can find peace. This is a spot only created for your relaxation. You can incorporate many things such as a fresh pot of plants with comforting sitting arrangements to unwind at the end of the day.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><span style=\"font-weight: bolder;\">Why do you need a good interior for your residence?</span><br><span style=\"font-weight: bolder;\">&nbsp;</span></p><ul style=\"padding-left: 20px; color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><li>A well-designed interior creates a comfortable and inviting environment making your home a more pleasant place to live.</li><li>Good interior design enhances the visual appeal of your home making it more beautiful and visually pleasing.</li><li>Your home’s interior reflects your personal style and taste allowing you to express your personality and individuality.</li><li>Effective use of space can make even smaller residences feel more spacious and open.</li><li>A well-designed interior ensures that you’re satisfied with your living space for years to come, reducing the need for frequent renovations or updates.</li><li>Thoughtful interior design optimizes the layout and arrangement of furniture and fixtures, making everyday tasks more efficient and enjoyable.</li></ul><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><span style=\"font-weight: bolder;\">&nbsp;</span><span style=\"font-weight: bolder;\">At Falcon Interior, The Finest In Residential Interior Design</span></p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><span style=\"font-weight: bolder;\">&nbsp;</span>Planning for the residential interior can become quite overwhelming. Because your residence is a safe haven for you to rest and unwind. And you must be having a lot of ideas in mind and would like all of them put together in one good design. All you need is a good interior designer who will help you with the designing process. A professional design is worth investing in because it takes you a long way ahead. Even in the future the design will look as great as the designed piece right now. Elevating your living space with the help of designers will allow you to achieve the vision you have for your home.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\">At&nbsp;<a href=\"https://www.falconinterior.com/\" style=\"color: rgb(31, 34, 48);\">Falcon Interior</a>, you are creating the finest designs for your interior design at home. We have expert designers who will help you achieve that in a matter of seconds. But also initially we take time to completely understand your vision. In which we do one on one consultation on how the designs are going to be. As we would like to create even better interior designs for you. All your designs can come alive with Falcon Interior. A well-designed interior ensures that you’re satisfied with your living space for years to come.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px; text-align: justify;\">With years of experience in the industry, we have created numerous designs to suit our clients needs. We have the right skills and professionals who can guide you on creating the best designs for your interior. Whether it is Residential Interior Design in Dubai or commercial designs. We do all types of design work with interior fit-out solutions. We have everything to make your space a living space and make it look stunning with the designs.</p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><em>Falcon Interior is just a call away!</em></p><p style=\"color: rgb(119, 119, 119); font-family: Lato; font-size: 14px;\"><em>Dial us and get the best quotation for your designs today.</em></p>', 'https://www.falconinterior.com/2023/10/07/7-expert-tips-for-residential-interior-design-in-dubai/', 'https://www.falconinterior.com/2023/10/07/7-expert-tips-for-residential-interior-design-in-dubai/', 'Admin', '23rd Oct 2023', '2', '2023-10-23 06:15:48', '2023-10-23 06:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `news_event_galleries`
--

CREATE TABLE `news_event_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `newsEventID` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_event_galleries`
--

INSERT INTO `news_event_galleries` (`id`, `newsEventID`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'NE16829512610.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(2, 1, 'NE16829512611.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(3, 1, 'NE16829512612.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(4, 1, 'NE16829512613.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(5, 1, 'NE16829512614.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(6, 1, 'NE16829512615.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(7, 1, 'NE16829512616.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(8, 1, 'NE16829512617.jpg', '2023-05-01 14:27:41', '2023-05-01 14:27:41'),
(9, 3, 'NE16830383330.jpg', '2023-05-02 14:38:53', '2023-05-02 14:38:53'),
(10, 3, 'NE16830383331.jpg', '2023-05-02 14:38:53', '2023-05-02 14:38:53'),
(11, 3, 'NE16830383332.jpg', '2023-05-02 14:38:53', '2023-05-02 14:38:53'),
(12, 3, 'NE16830383333.jpg', '2023-05-02 14:38:53', '2023-05-02 14:38:53'),
(13, 3, 'NE16830383334.jpg', '2023-05-02 14:38:53', '2023-05-02 14:38:53'),
(14, 3, 'NE16830383335.jpg', '2023-05-02 14:38:53', '2023-05-02 14:38:53'),
(15, 4, 'NE16980417480.webp', '2023-10-23 06:15:48', '2023-10-23 06:15:48'),
(16, 4, 'NE16980417481.webp', '2023-10-23 06:15:48', '2023-10-23 06:15:48'),
(17, 4, 'NE16980417482.webp', '2023-10-23 06:15:48', '2023-10-23 06:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locationLink` longtext COLLATE utf8mb4_unicode_ci,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `qoute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryID` int NOT NULL,
  `categoryName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `address`, `area`, `locationLink`, `details`, `features`, `qoute`, `categoryID`, `categoryName`, `created_at`, `updated_at`) VALUES
(12, 'Rose Garden', 'Plot # 39071, Khanka Sharif Road, Habibnagar, South Rayerbag, Kadamtoli, Dhaka-1362 (DSCC)', 'Khanka Sharif', NULL, '<h4><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	East &amp; </span>South Facing</span></h4><h4><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>16 Katha</span></h4><h4><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>14\' Wide East &amp; 12\' South Side&nbsp;</span></h4><h4><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>63 Nos</span></h4><h4><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>07 Nos</span></h4><h4><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1250, 1260, 1270 sft (±)</span></h4><h4><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos</span></h4><h4><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>22 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>02 Nos</span></h4><h4><span style=\"font-weight: bolder;\">No. of Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; &nbsp;&nbsp; 07 Nos<br></span></h4><h4><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 9, 'OFFICE FIT OUT', '2023-05-14 16:30:31', '2023-10-21 14:51:29'),
(13, 'King\'s Palace', 'Plot # 34830, 34831, New Vision College Road, Mujahidnagar, South Rayerbag, Kadamtoli, Dhaka-1362 (DSCC)', 'Mujahidnagar', NULL, '<h4><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>West Facing</span></h4><h4><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>5.5 Katha</span></h4><h4><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>12\' West Side&nbsp;</span></h4><h4><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; :<span style=\"white-space: pre;\">	</span>18 Nos</span></h4><h4><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>02 Nos</span></h4><h4><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1575 sft (±)</span></h4><h4><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>09 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 10, 'HOSPITALITY', '2023-05-14 16:33:28', '2023-10-21 14:50:58'),
(14, 'White Palace', 'Plot # 39010, 14 Feet Road, Mujahidnagar, South Rayerbag, Kadamtoli, Dhaka-1362 (DSCC)', 'Mujahidnagar', NULL, '<h4><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>South Facing</span></h4><h4><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>5.5 Katha</span></h4><h4><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>12\' Wide South Side&nbsp;</span></h4><h4><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>27 Nos</span></h4><h4><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>03 Nos</span></h4><h4><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1200 sft (±)</span></h4><h4><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>09 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 11, 'BEAUTY SALON & SPA', '2023-05-14 16:35:08', '2023-10-21 14:50:31'),
(15, 'White Heaven', 'Plot # 39010, 39013, 14 Feet Road, Mujahidnagar, South Rayerbag, Kadamtoli, Dhaka-1362 (DSCC)', 'Mujahidnagar', NULL, '<h4><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>West &amp; North Facing</span></h4><h4><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>5.5 Katha</span></h4><h4><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>14\' West &amp; 12\' North Side&nbsp;</span></h4><h4><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>18 Nos</span></h4><h4><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>02 Nos</span></h4><h4><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1550 sft (±)</span></h4><h4><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>04 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">No. of Shop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 04 Nos.<br></span></h4><h4><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 19, 'RESIDENTIAL', '2023-05-14 16:36:50', '2023-10-21 14:49:58'),
(17, 'White Mansion', 'Plot # 39038, 14 Feet Road, Mujahidnagar, South Rayerbag, Kadamtoli, Dhaka-1362 (DSCC)', 'Mujahidnagar', NULL, '<h4><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>West &amp; South Facing</span></h4><h4><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>15 Katha</span></h4><h4><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>14\' West &amp; 10\' South Side&nbsp;</span></h4><h4><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>63 Nos</span></h4><h4><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>7 Nos</span></h4><h4><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1200 sft (±)</span></h4><h4><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>21 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>02 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 21, 'MEDICAL CENTER/ CLINIC', '2023-05-14 16:40:45', '2023-10-21 14:49:08'),
(19, 'Paradise Palace', 'Plot # 39483, Paradise School Road, Merajnagar, B-Block, South Rayerbag, kadamtoli, Dhaka-1362 (DSCC)', 'Merajnagar', NULL, '<h4><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>North &amp; West Facing</span></h4><h4><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>13 Katha</span></h4><h4><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>20\' North &amp; 12\' West Side&nbsp;</span></h4><h4><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>45 Nos</span></h4><h4><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>05 Nos</span></h4><h4><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1450 sft (±)</span></h4><h4><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>21 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>02 Nos.</span></h4><h4><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 10, 'HOSPITALITY', '2023-05-14 16:50:19', '2023-10-21 14:49:36'),
(20, 'Modina Tower', '1028, Modinabag, South Rayerbag, Kadamtoli, Dhaka-1362 (DSCC).', 'Modinabag', NULL, '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>South Facing</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>8 Katha</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>12\' South Side&nbsp;</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>36 Nos</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>04 Nos</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1250 sft (±)</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>18 Nos.</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 9, 'OFFICE FIT OUT', '2023-05-19 15:21:13', '2023-10-21 14:48:42');
INSERT INTO `projects` (`id`, `name`, `address`, `area`, `locationLink`, `details`, `features`, `qoute`, `categoryID`, `categoryName`, `created_at`, `updated_at`) VALUES
(21, 'Haritage Park', '3739, Khanka Sharif Road, Habibnagar, South Rayerbag, Dhaka-1362 (DSCC).', 'Khanka Sharif', NULL, '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>East Facing</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>8.5 Katha</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>16\'East Side&nbsp;</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>36 Nos</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>04 Nos</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>1250 sft (±)</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>36 Nos.</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>02 Nos.</span></h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><span style=\"font-weight: bolder;\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</span></h4>', '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\"><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate Light &amp; Ventilation in everywhere.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Climate Resoinsive.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Design Ample.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High speed capacity elevators.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Fire safety system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Adequate parking space.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Aesthetic landscape design.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">B.N.B.C. According to earthquake resistance.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Controlled access entry for enhanced security.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24 hours C.C. Camera security system.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">24-hour emergency maintenance services.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">High-speed internet and cable TV connectivity.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Mosque for prayers.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Community room for events and gatherings.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></span></font></li></ul><ul><li><font color=\"#ffffff\"><span style=\"font-family: &quot;Segoe UI&quot;;\"><span style=\"font-weight: bolder;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 9, 'OFFICE FIT OUT', '2023-05-19 15:25:26', '2023-10-21 14:48:02'),
(22, 'Mujahid Tower', '3560, Mujahidnagar, South Rayerbag, Kadamtoli, Dhaka-1362 (DSCC)', 'Mujahidnagar', NULL, '<h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Orientation of the Land<span style=\"white-space: pre;\">	</span>:<span style=\"white-space: pre;\">	</span>North Facing</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Land Area<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>6 Katha</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Building Height<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>G+09 Storied</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Road Width<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>12\' North Side&nbsp;</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">No. of apartment<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>36 Nos</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">No. of unit per floor<span style=\"white-space: pre;\">	</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>04 Nos</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Size of Flat<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>950 sft (±)</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">No. of Stair<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Total Parking<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>12 Nos.</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">No. of Elevator<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>01 Nos.</h4><h4 style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(33, 37, 41);\">Consultant<span style=\"white-space: pre;\">		</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<span style=\"white-space: pre;\">	</span>Bond Design &amp; Development Ltd.</h4>', '<h4 style=\"\"><ul style=\"\"><li style=\"\"><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Adequate Light &amp; Ventilation in everywhere.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Climate Resoinsive.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Design Ample.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">High speed capacity elevators.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Fire safety system.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Adequate parking space.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Aesthetic landscape design.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">B.N.B.C. According to earthquake resistance.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Controlled access entry for enhanced security.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">24 hours C.C. Camera security system.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">24-hour emergency maintenance services.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">High-speed internet and cable TV connectivity.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Mosque for prayers.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Community room for events and gatherings.</span></font></li></ul><ul style=\"\"><li><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Rooftop terrace or garden for outdoor relaxation or socializing.</span></font></li></ul><ul style=\"\"><li style=\"\"><font color=\"#000000\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Complete foundation, superstructure design, supervision and construction of the building is carried out by experienced design and structural engineers of repute and professional expertise.</span></font></li></ul></h4>', 'We don\'t just build buildings, we build relationships that last a lifetime.', 11, 'BEAUTY SALON & SPA', '2023-05-19 15:27:50', '2023-10-21 14:47:20'),
(29, 'Test', 'Test', 'Test', 'Test', '<p>tezt</p>', '<p>t</p>', 't', 9, 'OFFICE FIT OUT', '2023-11-11 21:37:49', '2023-11-11 21:37:49'),
(30, 'DHAKA INTERIOR', 'Gulshan 1, DHaka', 'Gulshan', NULL, '<p>nhjj</p>', '<p>jhhhgfgh</p>', 'Where can I get some?', 9, 'OFFICE FIT OUT', '2023-11-11 21:42:23', '2023-11-11 21:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `project_galleries`
--

CREATE TABLE `project_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `projectID` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_galleries`
--

INSERT INTO `project_galleries` (`id`, `projectID`, `image`, `created_at`, `updated_at`) VALUES
(9, 2, 'prj16829461950.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(10, 2, 'prj16829461951.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(11, 2, 'prj16829461952.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(12, 2, 'prj16829461953.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(13, 2, 'prj16829461954.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(14, 2, 'prj16829461955.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(15, 2, 'prj16829461956.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(16, 2, 'prj16829461957.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(17, 2, 'prj16829461958.jpg', '2023-05-01 13:03:15', '2023-05-01 13:03:15'),
(35, 4, 'prj16839818190.jpg', '2023-05-13 22:43:39', '2023-05-13 22:43:39'),
(36, 4, 'prj16839818191.jpg', '2023-05-13 22:43:39', '2023-05-13 22:43:39'),
(37, 4, 'prj16839818192.jpg', '2023-05-13 22:43:39', '2023-05-13 22:43:39'),
(38, 4, 'prj16839818193.jpg', '2023-05-13 22:43:39', '2023-05-13 22:43:39'),
(39, 5, 'prj16839915270.jpg', '2023-05-14 01:25:27', '2023-05-14 01:25:27'),
(40, 5, 'prj16839915271.jpg', '2023-05-14 01:25:27', '2023-05-14 01:25:27'),
(41, 5, 'prj16839915272.jpg', '2023-05-14 01:25:27', '2023-05-14 01:25:27'),
(42, 5, 'prj16839915273.jpg', '2023-05-14 01:25:27', '2023-05-14 01:25:27'),
(43, 6, 'prj16839925760.jpg', '2023-05-14 01:42:56', '2023-05-14 01:42:56'),
(44, 6, 'prj16839925761.jpg', '2023-05-14 01:42:56', '2023-05-14 01:42:56'),
(45, 6, 'prj16839925762.jpg', '2023-05-14 01:42:56', '2023-05-14 01:42:56'),
(46, 6, 'prj16839925763.jpg', '2023-05-14 01:42:56', '2023-05-14 01:42:56'),
(47, 6, 'prj16839925764.jpg', '2023-05-14 01:42:56', '2023-05-14 01:42:56'),
(48, 7, 'prj16839928970.jpg', '2023-05-14 01:48:17', '2023-05-14 01:48:17'),
(49, 7, 'prj16839928971.jpg', '2023-05-14 01:48:17', '2023-05-14 01:48:17'),
(50, 7, 'prj16839928972.jpg', '2023-05-14 01:48:17', '2023-05-14 01:48:17'),
(51, 7, 'prj16839928973.jpg', '2023-05-14 01:48:17', '2023-05-14 01:48:17'),
(52, 8, 'prj16840453140.jpg', '2023-05-14 16:21:54', '2023-05-14 16:21:54'),
(60, 10, 'prj16840455770.jpg', '2023-05-14 16:26:17', '2023-05-14 16:26:17'),
(64, 11, 'prj16840457060.jpg', '2023-05-14 16:28:26', '2023-05-14 16:28:26'),
(97, 1, 'prj16842216240.jpg', '2023-05-16 17:20:24', '2023-05-16 17:20:24'),
(113, 1, 'prj16842247150.jpg', '2023-05-16 18:11:55', '2023-05-16 18:11:55'),
(114, 1, 'prj16842247151.jpg', '2023-05-16 18:11:55', '2023-05-16 18:11:55'),
(115, 1, 'prj16842247152.jpg', '2023-05-16 18:11:55', '2023-05-16 18:11:55'),
(116, 8, 'prj16842386240.jpeg', '2023-05-16 22:03:44', '2023-05-16 22:03:44'),
(117, 8, 'prj16842386241.jpg', '2023-05-16 22:03:44', '2023-05-16 22:03:44'),
(119, 8, 'prj16842388780.jpg', '2023-05-16 22:07:58', '2023-05-16 22:07:58'),
(123, 9, 'prj16842424710.jpg', '2023-05-16 23:07:51', '2023-05-16 23:07:51'),
(124, 9, 'prj16842424711.jpg', '2023-05-16 23:07:51', '2023-05-16 23:07:51'),
(125, 9, 'prj16842424712.jpeg', '2023-05-16 23:07:51', '2023-05-16 23:07:51'),
(126, 9, 'prj16842424713.jpg', '2023-05-16 23:07:51', '2023-05-16 23:07:51'),
(130, 10, 'prj16842437070.jpg', '2023-05-16 23:28:27', '2023-05-16 23:28:27'),
(131, 10, 'prj16842437071.jpg', '2023-05-16 23:28:27', '2023-05-16 23:28:27'),
(132, 10, 'prj16842437072.jpg', '2023-05-16 23:28:27', '2023-05-16 23:28:27'),
(133, 11, 'prj16842449490.jpg', '2023-05-16 23:49:09', '2023-05-16 23:49:09'),
(134, 11, 'prj16842449491.png', '2023-05-16 23:49:09', '2023-05-16 23:49:09'),
(135, 11, 'prj16842449492.jpg', '2023-05-16 23:49:09', '2023-05-16 23:49:09'),
(136, 12, 'prj16843027580.jpg', '2023-05-17 15:52:38', '2023-05-17 15:52:38'),
(137, 12, 'prj16843027581.jpg', '2023-05-17 15:52:38', '2023-05-17 15:52:38'),
(139, 13, 'prj16843036430.jpg', '2023-05-17 16:07:23', '2023-05-17 16:07:23'),
(140, 13, 'prj16843036431.jpg', '2023-05-17 16:07:23', '2023-05-17 16:07:23'),
(142, 14, 'prj16843044330.jpg', '2023-05-17 16:20:33', '2023-05-17 16:20:33'),
(150, 15, 'prj16843054221.jpg', '2023-05-17 16:37:02', '2023-05-17 16:37:02'),
(151, 15, 'prj16843054222.jpg', '2023-05-17 16:37:02', '2023-05-17 16:37:02'),
(153, 16, 'prj16843098190.jpg', '2023-05-17 17:50:19', '2023-05-17 17:50:19'),
(154, 16, 'prj16843098191.jpg', '2023-05-17 17:50:19', '2023-05-17 17:50:19'),
(155, 16, 'prj16843098192.jpg', '2023-05-17 17:50:19', '2023-05-17 17:50:19'),
(156, 16, 'prj16843098193.jpg', '2023-05-17 17:50:19', '2023-05-17 17:50:19'),
(164, 17, 'prj16843120602.jpg', '2023-05-17 18:27:40', '2023-05-17 18:27:40'),
(167, 19, 'prj16843128511.jpg', '2023-05-17 18:40:51', '2023-05-17 18:40:51'),
(168, 19, 'prj16843128512.jpg', '2023-05-17 18:40:51', '2023-05-17 18:40:51'),
(170, 18, 'prj16843262110.jpg', '2023-05-17 22:23:31', '2023-05-17 22:23:31'),
(174, 18, 'prj16843365610.jpg', '2023-05-18 01:16:01', '2023-05-18 01:16:01'),
(175, 18, 'prj16843365611.jpg', '2023-05-18 01:16:01', '2023-05-18 01:16:01'),
(176, 18, 'prj16843365612.jpg', '2023-05-18 01:16:01', '2023-05-18 01:16:01'),
(178, 20, 'prj16844736731.jpg', '2023-05-19 15:21:13', '2023-05-19 15:21:13'),
(179, 20, 'prj16844736732.jpg', '2023-05-19 15:21:13', '2023-05-19 15:21:13'),
(189, 23, 'prj16844772000.jpg', '2023-05-19 16:20:00', '2023-05-19 16:20:00'),
(190, 23, 'prj16844772001.jpg', '2023-05-19 16:20:00', '2023-05-19 16:20:00'),
(191, 23, 'prj16844772002.jpg', '2023-05-19 16:20:00', '2023-05-19 16:20:00'),
(192, 23, 'prj16844772003.jpg', '2023-05-19 16:20:00', '2023-05-19 16:20:00'),
(193, 24, 'prj16844774870.jpg', '2023-05-19 16:24:47', '2023-05-19 16:24:47'),
(194, 24, 'prj16844774871.jpeg', '2023-05-19 16:24:47', '2023-05-19 16:24:47'),
(195, 24, 'prj16844774872.jpg', '2023-05-19 16:24:47', '2023-05-19 16:24:47'),
(196, 24, 'prj16844774873.jpg', '2023-05-19 16:24:47', '2023-05-19 16:24:47'),
(197, 25, 'prj16844776500.jpg', '2023-05-19 16:27:30', '2023-05-19 16:27:30'),
(198, 25, 'prj16844776501.jpg', '2023-05-19 16:27:30', '2023-05-19 16:27:30'),
(199, 25, 'prj16844776502.jpeg', '2023-05-19 16:27:30', '2023-05-19 16:27:30'),
(200, 25, 'prj16844776503.jpg', '2023-05-19 16:27:30', '2023-05-19 16:27:30'),
(201, 26, 'prj16844777940.jpg', '2023-05-19 16:29:54', '2023-05-19 16:29:54'),
(202, 26, 'prj16844777941.jpg', '2023-05-19 16:29:54', '2023-05-19 16:29:54'),
(203, 26, 'prj16844777942.png', '2023-05-19 16:29:54', '2023-05-19 16:29:54'),
(204, 26, 'prj16844777943.jpg', '2023-05-19 16:29:54', '2023-05-19 16:29:54'),
(205, 27, 'prj16844781140.jpg', '2023-05-19 16:35:14', '2023-05-19 16:35:14'),
(206, 27, 'prj16844781141.jpg', '2023-05-19 16:35:14', '2023-05-19 16:35:14'),
(207, 27, 'prj16844781142.jpg', '2023-05-19 16:35:14', '2023-05-19 16:35:14'),
(208, 27, 'prj16844781143.jpg', '2023-05-19 16:35:14', '2023-05-19 16:35:14'),
(218, 22, 'prj16978996650.jpg', '2023-10-21 14:47:45', '2023-10-21 14:47:45'),
(219, 22, 'prj16978996651.jpg', '2023-10-21 14:47:45', '2023-10-21 14:47:45'),
(220, 22, 'prj16978996652.jpg', '2023-10-21 14:47:45', '2023-10-21 14:47:45'),
(221, 22, 'prj16978996653.jpg', '2023-10-21 14:47:45', '2023-10-21 14:47:45'),
(222, 22, 'prj16978996654.jpg', '2023-10-21 14:47:45', '2023-10-21 14:47:45'),
(223, 22, 'prj16978996655.jpeg', '2023-10-21 14:47:45', '2023-10-21 14:47:45'),
(224, 21, 'prj16978996960.jpg', '2023-10-21 14:48:16', '2023-10-21 14:48:16'),
(225, 21, 'prj16978996961.jpg', '2023-10-21 14:48:16', '2023-10-21 14:48:16'),
(226, 21, 'prj16978996962.jpg', '2023-10-21 14:48:16', '2023-10-21 14:48:16'),
(227, 21, 'prj16978996963.jpg', '2023-10-21 14:48:16', '2023-10-21 14:48:16'),
(228, 20, 'prj16978997220.jpg', '2023-10-21 14:48:42', '2023-10-21 14:48:42'),
(229, 20, 'prj16978997221.jpg', '2023-10-21 14:48:42', '2023-10-21 14:48:42'),
(230, 20, 'prj16978997222.jpg', '2023-10-21 14:48:42', '2023-10-21 14:48:42'),
(231, 20, 'prj16978997223.jpeg', '2023-10-21 14:48:42', '2023-10-21 14:48:42'),
(232, 17, 'prj16978997480.jpg', '2023-10-21 14:49:08', '2023-10-21 14:49:08'),
(233, 17, 'prj16978997481.jpg', '2023-10-21 14:49:08', '2023-10-21 14:49:08'),
(234, 17, 'prj16978997482.jpg', '2023-10-21 14:49:08', '2023-10-21 14:49:08'),
(235, 17, 'prj16978997483.jpeg', '2023-10-21 14:49:08', '2023-10-21 14:49:08'),
(236, 19, 'prj16978997760.jpg', '2023-10-21 14:49:36', '2023-10-21 14:49:36'),
(237, 19, 'prj16978997761.jpeg', '2023-10-21 14:49:36', '2023-10-21 14:49:36'),
(238, 19, 'prj16978997762.jpg', '2023-10-21 14:49:36', '2023-10-21 14:49:36'),
(239, 19, 'prj16978997773.jpeg', '2023-10-21 14:49:37', '2023-10-21 14:49:37'),
(240, 15, 'prj16978997980.jpg', '2023-10-21 14:49:58', '2023-10-21 14:49:58'),
(241, 15, 'prj16978997981.jpg', '2023-10-21 14:49:58', '2023-10-21 14:49:58'),
(242, 15, 'prj16978997982.jpeg', '2023-10-21 14:49:58', '2023-10-21 14:49:58'),
(243, 14, 'prj16978998310.jpg', '2023-10-21 14:50:31', '2023-10-21 14:50:31'),
(244, 14, 'prj16978998311.jpg', '2023-10-21 14:50:31', '2023-10-21 14:50:31'),
(246, 13, 'prj16978998580.jpg', '2023-10-21 14:50:58', '2023-10-21 14:50:58'),
(247, 13, 'prj16978998581.jpg', '2023-10-21 14:50:58', '2023-10-21 14:50:58'),
(248, 13, 'prj16978998582.jpg', '2023-10-21 14:50:58', '2023-10-21 14:50:58'),
(249, 12, 'prj16978998890.webp', '2023-10-21 14:51:29', '2023-10-21 14:51:29'),
(250, 12, 'prj16978998891.webp', '2023-10-21 14:51:29', '2023-10-21 14:51:29'),
(251, 12, 'prj16978998892.webp', '2023-10-21 14:51:29', '2023-10-21 14:51:29'),
(252, 12, 'prj16978998893.webp', '2023-10-21 14:51:29', '2023-10-21 14:51:29'),
(253, 12, 'prj16978998894.webp', '2023-10-21 14:51:29', '2023-10-21 14:51:29'),
(256, 29, 'prj16996990690.jpg', '2023-11-11 21:37:49', '2023-11-11 21:37:49'),
(257, 29, 'prj16996990691.jpg', '2023-11-11 21:37:49', '2023-11-11 21:37:49'),
(258, 29, 'prj16996990692.jpg', '2023-11-11 21:37:49', '2023-11-11 21:37:49'),
(259, 29, 'prj16996990693.jpg', '2023-11-11 21:37:49', '2023-11-11 21:37:49'),
(260, 29, 'prj16996990694.jpg', '2023-11-11 21:37:49', '2023-11-11 21:37:49'),
(261, 30, 'prj16996993430.jpg', '2023-11-11 21:42:23', '2023-11-11 21:42:23'),
(262, 30, 'prj16996993431.jpg', '2023-11-11 21:42:23', '2023-11-11 21:42:23'),
(263, 30, 'prj16996993432.jpg', '2023-11-11 21:42:23', '2023-11-11 21:42:23'),
(264, 30, 'prj16996993433.jpg', '2023-11-11 21:42:23', '2023-11-11 21:42:23'),
(265, 30, 'prj16996993434.jpg', '2023-11-11 21:42:23', '2023-11-11 21:42:23'),
(266, 30, 'prj16996993435.png', '2023-11-11 21:42:23', '2023-11-11 21:42:23'),
(267, 14, 'prj17808274480.jpg', '2026-06-07 10:17:28', '2026-06-07 10:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Manager', NULL, NULL),
(3, 'General User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(24, 'sldr16951970482.jpg', '2023-09-20 18:04:08', '2023-09-20 18:04:08'),
(25, 'sldr16951970483.jpg', '2023-09-20 18:04:08', '2023-09-20 18:04:08'),
(27, 'sldr16996970970.jpg', '2023-11-11 21:04:57', '2023-11-11 21:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `menuID` int NOT NULL,
  `menuName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subMenuName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDetails` longtext COLLATE utf8mb4_unicode_ci,
  `longDetails` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `menuID`, `menuName`, `subMenuName`, `title`, `shortDetails`, `longDetails`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Home', 'Hero Section-1', 'WITNESS, AS WE TRANSFORM YOUR LAND TO A LANDMARK', NULL, '<span style=\"color: rgb(0, 0, 0); font-family: Roboto, sans-serif;\">Partner with the best Artisan, to transform your land into a milestone of aesthetic marvel and superior value.</span>', 'submb1682930608.jpg', '2023-04-30 09:10:22', '2023-05-01 08:51:56'),
(2, 2, 'About', 'About us', 'About us', NULL, NULL, 'submb1697965680.webp', NULL, '2023-10-22 09:08:00'),
(3, 2, 'About', 'Vision, Mission & Values', 'Vision, Mission & Values', NULL, NULL, 'submb1697965716.webp', NULL, '2023-10-22 09:08:36'),
(4, 2, 'About', 'Associates', 'Associates', NULL, NULL, 'submb1697965616.webp', NULL, '2023-10-22 09:06:56'),
(9, 3, 'Projects', 'OFFICE FIT OUT', 'OFFICE FIT OUT', NULL, NULL, 'submb1683105245.png', '2023-04-30 09:41:54', '2023-10-21 09:02:27'),
(10, 3, 'Projects', 'HOSPITALITY', 'HOSPITALITY', NULL, NULL, 'submb1683105272.png', '2023-04-30 09:43:01', '2023-10-21 09:01:19'),
(11, 3, 'Projects', 'BEAUTY SALON & SPA', 'BEAUTY SALON & SPA', NULL, NULL, 'submb1682847837.png', '2023-04-30 09:43:57', '2023-10-21 08:57:14'),
(12, 4, 'Blogs & News', 'Blogs & News', 'STAY UPDATED WITH US', NULL, NULL, 'submb1683619784.jpg', '2023-04-30 09:46:53', '2023-05-09 08:09:44'),
(13, 5, 'Contact', 'Landowners', 'Landowners', NULL, NULL, 'submb1683619817.jpeg', '2023-04-30 09:54:48', '2023-05-18 18:46:59'),
(14, 5, 'Contact', 'Buyers', 'Buyers', NULL, NULL, 'submb1682848578.jpeg', '2023-04-30 09:56:18', '2023-04-30 09:56:18'),
(15, 5, 'Contact', 'Customers', 'Customers', NULL, NULL, 'submb1683619881.jpg', '2023-04-30 09:57:32', '2023-05-09 08:11:21'),
(16, 5, 'Contact', 'Contact Us', 'Contact Us', '<p><br></p><p>                                        </p>', '<p><br></p><p>                                            \r\n                                        </p>', 'submb1683619904.jpg', '2023-04-30 09:59:02', '2023-05-18 18:49:18'),
(17, 1, 'Home', 'Hero Section-2', 'WHY NEW DHAKA', NULL, 'At NEW DHAKA, we take great pride in offering exceptional homes for our valued customers. Our flats are designed and constructed with the highest standards of quality, using eco-friendly materials and modern technology to ensure durability and energy efficiency. We believe in providing our customers with the best possible experience, which is why we offer personalized support throughout the entire process, from selecting the right flat to completing the paperwork. We understand that buying a home is a significant investment, which is why we offer flexible payment plans to suit your budget. With NEW DHAKA, you can rest assured that you\'re getting a great value for your money. Contact us today to learn more about our available flats and see why we\'re the top choice for homebuyers.', 'submb1682931078.jpg', '2023-05-01 08:51:18', '2026-06-07 10:02:42'),
(18, 1, 'Home', 'Hero Section-3', NULL, NULL, NULL, 'submb1682931175.jpg', '2023-05-01 08:52:55', '2023-05-01 08:52:55'),
(19, 3, 'Projects', 'RESIDENTIAL', 'RESIDENTIAL', NULL, NULL, NULL, '2023-10-21 09:07:21', '2023-10-21 09:07:21'),
(20, 3, 'Projects', 'RETAIL', 'RETAIL', NULL, NULL, NULL, '2023-10-21 09:08:20', '2023-10-21 09:08:20'),
(21, 3, 'Projects', 'MEDICAL CENTER/ CLINIC', 'MEDICAL CENTER/ CLINIC', NULL, NULL, NULL, '2023-10-21 09:09:23', '2023-10-21 09:09:23'),
(22, 6, 'Services', 'Architectural Design', 'Architectural Design', NULL, NULL, 'submb1697900999.webp', '2023-10-21 15:09:59', '2023-10-21 15:09:59'),
(23, 6, 'Services', 'Interior Design', 'Interior Design', NULL, NULL, 'submb1697972060.webp', '2023-10-21 15:10:33', '2023-10-22 10:54:20'),
(24, 6, 'Services', 'Building Development', 'Building Development', NULL, NULL, 'submb1697972079.jpg', '2023-10-21 15:11:05', '2023-10-22 10:54:39'),
(25, 6, 'Services', 'Construction', 'Construction', NULL, NULL, 'submb1697972117.jpeg', '2023-10-21 15:11:25', '2023-10-22 10:55:17'),
(26, 6, 'Services', 'Land Development', 'Land Development', NULL, NULL, 'submb1697972158.jpg', '2023-10-21 15:11:53', '2023-10-22 10:55:58'),
(27, 6, 'Services', 'Real Estate', 'Real Estate', NULL, NULL, 'submb1697972181.jpg', '2023-10-21 15:12:24', '2023-10-22 10:56:21'),
(28, 6, 'Services', '3d Visualization', '3d Visualization', NULL, NULL, 'submb1697972212.jpg', '2023-10-21 15:12:57', '2023-10-22 10:56:52'),
(29, 6, 'Services', 'Supplying', 'Supplying', NULL, NULL, 'submb1697972245.jpg', '2023-10-21 15:13:22', '2023-10-22 10:57:25'),
(31, 6, 'Services', 'Furniture', 'Furniture', NULL, NULL, 'submb1697973081.jpg', '2023-10-22 11:11:21', '2023-10-22 11:11:21'),
(32, 7, 'Clients', 'OUR VALUED CLIENTS', NULL, NULL, NULL, 'submb1780826472.jpg', '2023-10-23 10:01:29', '2026-06-07 10:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `roleid` int NOT NULL,
  `role_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationalid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roleid`, `role_name`, `name`, `address`, `email`, `contact_no`, `reference_by`, `nationalid`, `agreement_paper`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'Admin', '--', 'admin@gmail.com', '01839317038', 'Nowab Shorif', NULL, NULL, NULL, '$2y$10$GDmehxnj3m7w/WoOwbycZuhWXM1gRVtErbUA4RMWKsQjJGxiFAA2y', NULL, NULL, '2023-05-03 09:09:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_datails`
--
ALTER TABLE `company_datails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `land_owners`
--
ALTER TABLE `land_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_event_galleries`
--
ALTER TABLE `news_event_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_galleries`
--
ALTER TABLE `project_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_datails`
--
ALTER TABLE `company_datails`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `land_owners`
--
ALTER TABLE `land_owners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_event_galleries`
--
ALTER TABLE `news_event_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `project_galleries`
--
ALTER TABLE `project_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
