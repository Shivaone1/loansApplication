-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 01:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basantfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `cust_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_signature_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_aadharno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_document_aadhar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_document_pan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_document_bankdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_panno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address_pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_branch_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_branche_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `cust_id`, `cust_status`, `cust_title`, `cust_fname`, `cust_mname`, `cust_lname`, `gardian_title`, `gardian_fname`, `gardian_mname`, `gardian_lname`, `cust_email_address`, `cust_gender`, `cust_date_of_birth`, `cust_mobile`, `cust_profile_pic`, `cust_signature_pic`, `cust_aadharno`, `cust_document_aadhar`, `cust_document_pan`, `cust_document_bankdt`, `cust_panno`, `current_address_detail`, `current_address_city`, `current_address_pincode`, `permanent_address_detail`, `permanent_address_city`, `permanent_address_pincode`, `cust_account_number`, `cust_bank_holder_name`, `cust_bank_ifsc_code`, `cust_bank_branch_code`, `cust_bank_branche_name`, `cust_bank_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(158, '779640448', 'Active', '/', 'Barbara Beard', 'Lucas Santos', 'Olson', 'Brother', 'Anjolie', 'Amy Hoffman', 'Cummings', 'gysis@mailinator.com', 'male', '2032-01-21', '9658745454', '/storage/customer/1666937837_224.jpg', '/storage/customer/1666937837_152.jpg', '4521-3652-8965', '/storage/customer/1666937796_aadharcard.jpg', '/storage/customer/1666937796_pancard.jpg', '/storage/customer/1666937796_cancel check.jpg', 'SHISL8547S', 'Consectetur eos eni', 'Reprehenderit omnis', 'Deleniti occaecat fa', 'Adipisci perspiciati', 'Qui deleniti aliquip', 'Aliquam ipsum nobis', 'Ivory Dixon', 'Wendy Rios', 'Shay Nunez', 'Azalia Peters', 'Mariam Klein', 'Quia officiis aliqui', '2022-10-28 00:46:36', '2022-10-28 05:26:05', '2022-10-28 05:26:05'),
(171, '734654044', 'Active', '/', 'Cassandra Barr', 'Hall Clayton', 'Washington', 'Father', 'Teegan', 'Lacey Bird', 'Mercado', 'syrymixoma@mailinator.com', 'female', '2011-04-08', '9839201133', '/storage/customer/1667303464_454.jpg', '/storage/customer/1667303465_224.jpg', '1111-1111-1111', '/storage/customer/1667303465_224.jpg', '/storage/customer/1667303465_224.jpg', '/storage/customer/1667303465_224.jpg', 'SHSLI7458S', 'Vero ut voluptas fac', 'Error sed adipisicin', 'Assumenda perferendi', 'Doloremque in qui ni', 'Eum consequatur Rat', 'Corporis quae expedi', '32123123123', 'Flynn Carroll', 'SHIS5456456', '879878', 'Rashad Oneill', 'Libero illo aut nost', '2022-11-01 06:21:05', '2022-11-01 06:21:05', NULL),
(172, '520440448', 'Active', '/', 'Wylie Rivers', 'Marah Edwards', 'Berry', 'Husband', 'Shea', 'Bo Melendez', 'Hayden', 'bihoq@mailinator.com', 'female', '2030-08-25', '9856745454', '/storage/customer/1667365203_152.jpg', '/storage/customer/1667365204_signature.png', '1236-4554-8547', '/storage/customer/1667365204_152.jpg', '/storage/customer/1667365204_224.jpg', '/storage/customer/1667365204_152.jpg', 'SBILI5469S', 'Ut est optio ut ad', 'Voluptatem beatae nu', 'Id lorem veniam per', 'Aperiam id proident', 'Distinctio Aut ipsa', 'Est quo similique d', 'Vladimir Prince', 'Angela Stark', 'Abbot Collier', 'Cadman Bowen', 'Tate Chapman', 'Labore veniam minus', '2022-11-01 23:30:04', '2022-11-01 23:30:04', NULL),
(173, '653904044', 'Active', '/', 'Daria Caldwell', 'Emily Summers', 'Holman', 'Mather', 'Brody', 'Xaviera Kirkland', 'Stewart', 'zysisevivu@mailinator.com', 'male', '1971-12-01', '6985646464', '/storage/customer/1667365390_12.jpg', '/storage/customer/1667365390_signature.png', '5469-5896-1236', '/storage/customer/1667365390_aadharcard.jpg', '/storage/customer/1667365390_pancard.jpg', '/storage/customer/1667365390_cancel check.jpg', 'SHISI8787S', 'Optio quia consequa', 'Magna ducimus quo n', 'Facere iste quidem n', 'Vitae eum sed amet', 'Quae id qui in quis', 'Adipisicing id nulla', 'Dakota Acosta', 'Cole Beasley', 'Cairo Diaz', 'Nicholas Tucker', 'Jackson Reid', 'Laborum Facere offi', '2022-11-01 23:33:10', '2022-11-01 23:33:10', NULL),
(174, '669274044', 'Active', '/', 'Lavinia Bradley', 'Caesar Park', 'Ferguson', 'Father', 'Alexa', 'Daquan Sandoval', 'Figueroa', 'hoky@mailinator.com', 'male', '2013-03-20', '9856578787', '/storage/customer/1667366927_15.jpg', '/storage/customer/1667366927_signature.png', '4125-4587-9658', '/storage/customer/1667366927_aadharcard.jpg', '/storage/customer/1667366927_pancard.jpg', '/storage/customer/1667366927_cancel check.jpg', 'SHISH7458S', 'Ea provident accusa', 'Cum quibusdam volupt', 'Veniam nihil volupt', 'Et omnis ullam dolor', 'Consequatur obcaeca', 'Vitae exercitation m', '2121111111', 'Courtney Ellis', 'Brynn Mills', 'Zeph Hughes', 'Velma Sanchez', 'Nobis recusandae Ac', '2022-11-01 23:58:47', '2022-11-01 23:58:47', NULL),
(175, '670734044', 'Active', '/', 'Gwendolyn Gentry', 'Mallory Cantu', 'Hale', 'wife', 'Serena', 'Ila Sherman', 'Stevenson', 'lyca@mailinator.com', 'female', '2009-11-22', '9658787877', '/storage/customer/1667367286_4512.jpg', '/storage/customer/1667367286_signature.png', '2541-3652-7854', '/storage/customer/1667367073_aadharcard.jpg', '/storage/customer/1667367073_pancard.jpg', '/storage/customer/1667367073_cancel check.jpg', 'SHISL5214S', 'Optio sapiente volu', 'Cillum vel ut repreh', 'Doloremque molestiae', 'Qui pariatur Facili', 'Dolorem cillum et se', 'Dolorem labore conse', 'Kenyon Combs', 'Colette Reese', 'Jaden Porter', 'TaShya Owen', 'Maya Horn', 'Magnam sunt tempor', '2022-11-02 00:01:13', '2022-11-02 00:04:46', NULL),
(176, '674624044', 'Active', '/', 'Harding Little', 'Barbara Pierce', 'Joseph', 'Sister', 'Calvin', 'April Guy', 'Montoya', 'naqyfe@mailinator.com', 'female', '1967-10-27', '9658745666', '/storage/customer/1667367462_6444.jpg', '/storage/customer/1667367462_signature.png', '1254-8569-5632', '/storage/customer/1667367462_5145.jpg', '/storage/customer/1667367462_224.jpg', '/storage/customer/1667367462_224.jpg', 'SHISL1545S', 'Praesentium dignissi', 'Cillum consectetur e', 'Cumque minim recusan', 'Nobis ipsum at excep', 'Elit in anim dolore', 'Aliqua Autem repreh', 'Quinlan Aguilar', 'Nicholas Mcclure', 'Stacey Horn', 'Shana Knox', 'Linda Huff', 'Eveniet laudantium', '2022-11-02 00:07:42', '2022-11-02 00:07:42', NULL),
(177, '721494044', 'Active', '/', 'Len Campos', 'Colin Livingston', 'Gonzales', 'Husband', 'Aidan', 'Griffith Stafford', 'Rios', 'haletowyca@mailinator.com', 'male', '1960-01-18', '+1 (872) 723-3569', '/storage/customer/1667377146_454.jpg', '/storage/customer/1667377146_1666178690_855878.png', '1111-1111-4444', '/storage/customer/1667372149_aadharcard.jpg', '/storage/customer/1667372149_pancard.jpg', '/storage/customer/1667372149_cancel check.jpg', 'SHISL7458S', 'Irure porro dignissi', 'Molestiae exercitati', 'Repudiandae quas dol', 'Reiciendis dolor ea', 'Dicta temporibus qui', 'Adipisicing ipsum d', 'Rhea Stevens', 'Reese Mueller', 'Mikayla Payne', 'Kaye Jenkins', 'Vernon Nixon', 'Beatae quis cupidita', '2022-11-02 01:25:49', '2022-11-02 02:49:06', NULL),
(178, '772684044', 'Active', '/', 'Jonas Castillo', 'Owen Mayo', 'Rollins', 'Father', 'Oliver', 'Simone Berger', 'Bruce', 'figy@mailinator.com', 'male', '2007-08-03', '9856464646', '/storage/customer/1667377268_224.jpg', '/storage/customer/1667377268_signature.png', '1121-4584-6235', '/storage/customer/1667377268_aadharcard.jpg', '/storage/customer/1667377268_pancard.jpg', '/storage/customer/1667377268_cancel check.jpg', 'SHISI8547S', 'Aliqua Ullam reicie', 'Quis illo in velit d', 'In provident dignis', 'Non quisquam delenit', 'Ut beatae ut veniam', 'Minus eligendi sit d', '996322132132312', 'Aspen Salazar', 'Charlotte Mays', '571321321231231', 'Logan Trevino', 'Quisquam do consequa', '2022-11-02 02:51:08', '2022-11-02 02:51:08', NULL),
(179, '816434044', 'Active', '/', 'Brittany Klein', 'Reuben Delacruz', 'Sparks', 'Mather', 'Candace', 'Noble Terry', 'Russo', 'zuporeneh@mailinator.com', 'male', '2007-05-27', '9658464646', '/storage/customer/1667381643_152.jpg', '/storage/customer/1667381643_454.jpg', '123645548547', '/storage/customer/1667381643_224.jpg', '/storage/customer/1667381643_454.jpg', '/storage/customer/1667381643_224.jpg', 'SHISI5236S', 'Ea possimus neque q', 'Saepe dignissimos mo', 'Ad ut ipsum enim occ', 'Nemo corrupti quam', 'Consectetur rem des', 'Eu tenetur quia sit', '2123123123123131231321', 'Hedley Pacheco', 'Kaitlin Bowman', '71', 'Shea Valdez', 'Sed laboris nisi com', '2022-11-02 04:04:03', '2022-11-02 04:04:03', NULL),
(180, '403594044', 'Active', '/', 'Lance Duke', 'Stephanie Carver', 'Molina', 'Mather', 'Charde', 'Channing Young', 'Lawson', 'micyde@mailinator.com', 'male', '2016-01-25', '6959899898', '/storage/customer/1667384035_152.jpg', '/storage/customer/1667384035_signature.png', '365298547854', '/storage/customer/1667384035_aadharcard.jpg', '/storage/customer/1667384035_pancard.jpg', '/storage/customer/1667384035_signature.png', 'SLHKS5236S', 'Rerum velit cum modi', 'Reprehenderit ipsa', 'In autem aut non ut', 'Enim ea at autem vol', 'Sit autem non minim', 'Praesentium architec', '45454654646', 'Clinton Bishop', 'SKHI8545454', '659898', 'Patrick Schroeder', 'Laboris ad magnam qu', '2022-11-02 04:43:55', '2022-11-02 04:43:55', NULL),
(181, '732204044', 'Active', '/', 'Amanda Skinner', 'Darrel Travis', 'Branch', 'wife', 'Ulysses', 'Yael Forbes', 'Morgan', 'filide@mailinator.com', 'other', '2023-01-25', '8569847778', '/storage/customer/1667473220_5145.jpg', '/storage/customer/1667473220_signature.png', '121231231321', '/storage/customer/1667473220_aadharcard.jpg', '/storage/customer/1667473220_pancard.jpg', '/storage/customer/1667473220_cancel check.jpg', 'SSHID5623D', 'Expedita magni moles', 'Mollit veniam asper', 'Sunt neque quae id a', 'Non voluptates amet', 'Dolorem ipsa do con', 'Animi sint earum vo', '11111212112', 'Stewart Wilkerson', 'SIHL2212124', '232323', 'Magee Salazar', 'Explicabo Sit non', '2022-11-03 05:30:20', '2022-11-03 05:30:20', NULL),
(182, '737134044', 'Active', '/', 'Cullen Douglas', 'Lani Hansen', 'Cook', 'wife', 'Orlando', 'Jameson Dotson', 'Petty', 'jihowil@mailinator.com', 'other', '1984-12-09', '8569787878', '/storage/customer/1667473713_4512.jpg', '/storage/customer/1667473713_signature.png', '212121212121', '/storage/customer/1667473713_aadharcard.jpg', '/storage/customer/1667473713_pancard.jpg', '/storage/customer/1667473713_cancel check.jpg', 'SHILS8569S', 'Dolorum veritatis ni', 'Rem animi minus qui', 'Animi earum aut con', 'Qui iste voluptas cu', 'Harum maiores facili', 'Necessitatibus est v', '54465454564', 'Gloria Romero', 'SIHS8569855', '455465', 'Trevor King', 'Inventore voluptatum', '2022-11-03 05:38:33', '2022-11-03 05:38:33', NULL),
(183, '749864044', 'Active', '/', 'Madeson Mendoza', 'Justin Warner', 'Santos', 'Father', 'Kirk', 'Grace Davidson', 'Holman', 'sixe@mailinator.com', 'other', '1986-04-06', '5987787878', '/storage/customer/1667474986_152.jpg', '/storage/customer/1667474986_signature.png', '521463258965', '/storage/customer/1667474986_aadharcard.jpg', '/storage/customer/1667474986_pancard.jpg', '/storage/customer/1667474986_cancel check.jpg', 'SIHLI9658S', 'Placeat ipsum quia', 'Autem saepe voluptas', 'Sed est dolores tene', 'Distinctio Placeat', 'Alias et enim volupt', 'Incididunt nihil sed', '11121212121', 'Allegra Moss', 'SHIL5545454', '854564', 'Lee Stanton', 'Eu et repellendus I', '2022-11-03 05:59:46', '2022-11-03 05:59:46', NULL),
(184, '758544044', 'Active', '/', 'Merrill Henson', 'Tad Cash', 'Morales', 'Mather', 'Davis', 'Rebekah Davis', 'Mendoza', 'latula@mailinator.com', 'other', '1987-09-21', '9859898989', '/storage/customer/1667475854_152.jpg', '/storage/customer/1667475854_signature.png', '125454545454', '/storage/customer/1667475854_aadharcard.jpg', '/storage/customer/1667475854_pancard.jpg', '/storage/customer/1667475854_cancel check.jpg', 'SHILS0000S', 'Ex qui reiciendis ra', 'Aspernatur magni par', 'Ea aut nihil eiusmod', 'Dolore eum quisquam', 'Dolorum voluptas vel', 'Non beatae facilis f', '11112121212', 'Henry Simmons', 'ILJS3232323', '546454', 'Olivia Huff', 'Perferendis maiores', '2022-11-03 06:14:14', '2022-11-03 06:14:14', NULL),
(185, '759784044', 'Active', '/', 'Merrill Henson', 'Tad Cash', 'Morales', 'Mather', 'Davis', 'Rebekah Davis', 'Mendoza', 'latula@mailinator.com', 'female', '1987-09-21', '9859898000', '/storage/customer/1667475978_152.jpg', '/storage/customer/1667475978_signature.png', '125454545000', '/storage/customer/1667475978_15.jpg', '/storage/customer/1667475978_15.jpg', '/storage/customer/1667475978_15.jpg', 'SHILS0000P', 'Ex qui reiciendis ra', 'Aspernatur magni par', 'Ea aut nihil eiusmod', 'Dolore eum quisquam', 'Dolorum voluptas vel', 'Non beatae facilis f', '11112121212', 'Henry Simmons', 'ILJS3232323', '546454', 'Olivia Huff', 'Perferendis maiores', '2022-11-03 06:16:18', '2022-11-03 06:16:18', NULL),
(186, '667476048', 'Active', '/', 'Merrill Henson', 'Tad Cash', 'Morales', 'Mather', 'Davis', 'Rebekah Davis', 'Mendoza', 'latula@mailinator.com', 'female', '1987-09-21', '9859898001', '/storage/customer/1667476048_152.jpg', '/storage/customer/1667476048_signature.png', '125454545002', '/storage/customer/1667476048_15.jpg', '/storage/customer/1667476048_152.jpg', '/storage/customer/1667476048_152.jpg', 'SHILS0000O', 'Ex qui reiciendis ra', 'Aspernatur magni par', 'Ea aut nihil eiusmod', 'Dolore eum quisquam', 'Dolorum voluptas vel', 'Non beatae facilis f', '11112121212', 'Henry Simmons', 'ILJS3232323', '546454', 'Olivia Huff', 'Perferendis maiores', '2022-11-03 06:17:28', '2022-11-03 06:17:28', NULL),
(187, '166747735', 'Active', '/', 'Erica Tran', 'Grace Delacruz', 'Leach', 'Brother', 'Ahmed', 'Fletcher Chandler', 'Espinoza', 'guwymecy@mailinator.com', 'other', '1986-12-31', '0199989898', '/storage/customer/1667477356_152.jpg', '/storage/customer/1667477356_signature.png', '121265898569', '/storage/customer/1667477356_224.jpg', '/storage/customer/1667477356_224.jpg', '/storage/customer/1667477356_224.jpg', 'LILSK5896S', 'Incididunt voluptate', 'Quaerat quia corpori', 'Architecto et ab qui', 'Officia saepe fugit', 'Qui velit dicta mol', 'Dolorum recusandae', '12121212122', 'Larissa Bernard', 'SILL5989898', '212312', 'Genevieve Frye', 'Id aliquid lorem rep', '2022-11-03 06:39:16', '2022-11-03 06:39:16', NULL),
(188, '202274638', 'Active', '/', 'Clio Mcpherson', 'Amber Mcintosh', 'Shannon', 'Sister', 'Neil', 'Tashya Hatfield', 'Welch', 'dapir@mailinator.com', 'male', '1960-01-02', '8989898410', '/storage/customer/1667478183_224.jpg', '/storage/customer/1667478183_224.jpg', '212121219990', '/storage/customer/1667478183_15.jpg', '/storage/customer/1667478183_15.jpg', '/storage/customer/1667478183_15.jpg', 'SLJIL5219S', 'Quibusdam suscipit e', 'Fuga Ut id aliqua', 'Veniam neque quam q', 'Sint ea mollit offi', 'Quo qui molestiae mi', 'Sapiente sapiente si', '11112121211', 'Dale Carter', 'WERT4456454', '797787', 'Allistair Stuart', 'Doloremque sint even', '2022-11-03 06:53:03', '2022-11-03 06:53:03', NULL),
(189, '202256174', 'Active', '/', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', '/storage/customer/1667546232_152.jpg', '/storage/customer/1667546232_152.jpg', '212312312123', '/storage/customer/1667546232_152.jpg', '/storage/customer/1667546232_152.jpg', '/storage/customer/1667546232_224.jpg', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 01:47:12', '2022-11-04 01:47:12', NULL),
(190, '202252766', 'DeActivate', '/', 'Shiva', 'Molly Oneil', 'singh', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656567', '/storage/customer/1667548651_152.jpg', '/storage/customer/1667548651_signature.png', '212312312120', '/storage/customer/1667548651_15.jpg', '/storage/customer/1667548651_15.jpg', '/storage/customer/1667548651_15.jpg', 'SHILD5686E', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 02:27:31', '2022-11-04 02:27:31', NULL),
(191, '202295043', 'Active', 'Mr', 'Shiva', 'Molly Oneil', 'singh', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656564', '/storage/customer/1668424951_0012.jpg', '/storage/customer/1667548802_signature.png', '212312312125', '/storage/customer/1667548802_1245.jpg', '/storage/customer/1667548802_1245.jpg', '/storage/customer/1667548802_1245.jpg', 'SHILD5686Q', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 02:30:02', '2022-11-14 05:52:31', NULL),
(192, '202288407', 'Active', 'Ms', 'Scott Donovan', 'Oren Manning', 'Cole', 'Sister', 'Miriam', 'Axel Trujillo', 'Arnold', 'xetinyn@mailinator.com', 'male', '1961-12-10', '5210002658', '/storage/customer/1667549137_152.jpg', '/storage/customer/1667549137_152.jpg', '212312312313', '/storage/customer/1667549137_15.jpg', '/storage/customer/1667549137_152.jpg', '/storage/customer/1667549137_224.jpg', 'SHILL4125S', 'Deserunt irure dolor', 'Tenetur ea repudiand', 'In obcaecati ea dolo', 'Dolore et eum et et', 'Et officia proident', 'Nihil soluta sunt re', '11212211212', 'Bevis Burton', 'SILK5454545', '555555', 'Candice Love', 'Reprehenderit obcaec', '2022-11-04 02:35:37', '2022-11-04 02:35:37', NULL),
(193, '202278487', 'Active', 'Ms', 'Scott Donovan', 'Oren Manning', 'Cole', 'Sister', 'Miriam', 'Axel Trujillo', 'Arnold', 'xetinyn@mailinator.com', 'male', '1961-12-10', '5210002652', '/storage/customer/1667549373_152.jpg', '/storage/customer/1667549373_224.jpg', '212312392313', '/storage/customer/1667549373_15.jpg', '/storage/customer/1667549373_152.jpg', '/storage/customer/1667549373_152.jpg', 'SHILL4125Q', 'Deserunt irure dolor', 'Tenetur ea repudiand', 'In obcaecati ea dolo', 'Dolore et eum et et', 'Et officia proident', 'Nihil soluta sunt re', '11212211212', 'Bevis Burton', 'SILK5454545', '555555', 'Candice Love', 'Reprehenderit obcaec', '2022-11-04 02:39:33', '2022-11-04 02:39:33', NULL),
(194, '202223650', 'DeActivate', 'Ms', 'Scott Donovan', 'Oren Manning', 'Cole', 'Sister', 'Miriam', 'Axel Trujillo', 'Arnold', 'xetinyn@mailinator.com', 'male', '1961-12-10', '5210002699', '/storage/customer/1667549457_152.jpg', '/storage/customer/1667549457_224.jpg', '212312392323', '/storage/customer/1667549457_12.jpg', '/storage/customer/1667549457_12 (3).jpg', '/storage/customer/1667549457_12 (3).jpg', 'SHILL4125T', 'Deserunt irure dolor', 'Tenetur ea repudiand', 'In obcaecati ea dolo', 'Dolore et eum et et', 'Et officia proident', 'Nihil soluta sunt re', '11212211212', 'Bevis Burton', 'SILK5454545', '555555', 'Candice Love', 'Reprehenderit obcaec', '2022-11-04 02:40:57', '2022-11-04 02:40:57', NULL),
(195, '202266459', 'Active', 'Ms', 'Scott Donovan', 'Oren Manning', 'Cole', 'Sister', 'Miriam', 'Axel Trujillo', 'Arnold', '', 'male', '1961-12-10', '5210002690', '/storage/customer/1667549585_152.jpg', '/storage/customer/1667549585_15.jpg', '212312392344', '/storage/customer/1667549585_15.jpg', '/storage/customer/1667549585_152.jpg', '/storage/customer/1667549585_152.jpg', 'SHILL4125P', 'Deserunt irure dolor', 'Tenetur ea repudiand', 'In obcaecati ea dolo', 'Dolore et eum et et', 'Et officia proident', 'Nihil soluta sunt re', '11212211212', 'Bevis Burton', 'SILK5454545', '555555', 'Candice Love', 'Reprehenderit obcaec', '2022-11-04 02:43:05', '2022-11-04 02:43:05', NULL),
(196, '202244712', 'Active', 'Ms', 'Scarlett Owens', 'Dawn Jacobson', 'Pennington', 'wife', 'Madeline', 'Jennifer Reid', 'Gillespie', 'juwofykoke@mailinator.com', 'other', '2031-03-19', '9999999999', '/storage/customer/1667549970_152.jpg', '/storage/customer/1667549970_152.jpg', '123123123122', '/storage/customer/1667549970_15.jpg', '/storage/customer/1667549970_152.jpg', '/storage/customer/1667549970_224.jpg', 'SHILI8569S', 'Nam mollit explicabo', 'Culpa ipsam id in i', 'Explicabo Eligendi', 'Consectetur quia pe', 'Obcaecati odit excep', 'Esse sunt nisi est', '12312312312', 'Channing Randolph', 'SLHI5454545', '231212', 'Adria Bullock', 'Harum dolor officia', '2022-11-04 02:49:30', '2022-11-04 02:49:30', NULL),
(197, '202227721', 'Active', 'Ms', 'Quentin Patton', 'Sybil Evans', 'Rosa', 'Brother', 'Nicole', 'Rebekah Pace', 'Jacobson', 'guzopysoh@mailinator.com', 'female', '1986-03-24', '6325656565', '/storage/customer/1667556237_15.jpg', '/storage/customer/1667556237_signature.png', '232123123121', '/storage/customer/1667556237_152.jpg', '/storage/customer/1667556237_152.jpg', '/storage/customer/1667556237_152.jpg', 'SIHLI1245S', 'Fugiat est ullam in', 'Nulla perspiciatis', 'Facilis minim eum ve', 'Esse culpa dolore d', 'Eveniet soluta aute', 'Consectetur itaque v', '11221212122', 'Tarik Harrell', 'SHIL4851214', '787878', 'Katell Russo', 'Autem alias quia adi', '2022-11-04 04:33:57', '2022-11-04 04:33:57', NULL),
(198, '202239867', 'Active', 'Ms', 'Quentin Patton', 'Sybil Evans', 'Rosa', 'Brother', 'Nicole', 'Rebekah Pace', 'Jacobson', 'guzopysoh@mailinator.com', 'female', '1986-03-24', '6325656567', '/storage/customer/1667556321_224.jpg', '/storage/customer/1668425175_signature.png', '232123123123', '/storage/customer/1667556321_15.jpg', '/storage/customer/1667556321_152.jpg', '/storage/customer/1667556321_152.jpg', 'SIHLI1245P', 'Fugiat est ullam in', 'Nulla perspiciatis', 'Facilis minim eum ve', 'Esse culpa dolore d', 'Eveniet soluta aute', 'Consectetur itaque v', '11221212122', 'Tarik Harrell', 'SHIL4851214', '787878', 'Katell Russo', 'Autem alias quia adi', '2022-11-04 04:35:21', '2022-11-14 05:56:15', NULL),
(199, '20225522', 'DeActivate', 'Ms', 'Quentin Patton', 'Sybil Evans', 'Rosa', 'Brother', 'Nicole', 'Rebekah Pace', 'Jacobson', 'guzopysoh@mailinator.com', 'Male', '1986-03-24', '6325656560', '/storage/customer/1667818215_15.jpg', '/storage/customer/1667818215_signature.png', '232123123120', '/storage/customer/1667556461_15.jpg', '/storage/customer/1667556461_15.jpg', '/storage/customer/1667556461_15.jpg', 'SIHLI1245O', 'Fugiat est ullam in', 'Nulla perspiciatis', 'Facilis minim eum ve', 'Esse culpa dolore d', 'Eveniet soluta aute', 'Consectetur itaque v', '11221212122', 'Tarik Harrell', 'SHIL4851214', '787878', 'Katell Russo', 'Autem alias quia adi', '2022-11-04 04:37:41', '2022-11-07 05:20:15', NULL),
(200, '202294312', 'Active', 'Prof', 'Noble Atkinson', 'Blair Hale', 'Clayton', 'Father', 'Riley', 'Aspen Mercer', 'Randolph', 'zaqigefi@mailinator.com', 'Male', '1962-11-07', '9984162555', '/storage/customer/1667886767_1245.jpg', '/storage/customer/1667886767_signature.png', '212312123123', '/storage/customer/1667558122_152.jpg', '/storage/customer/1667558122_224.jpg', '/storage/customer/1667558122_12 (3).jpg', 'SHLJI1255D', 'Ex unde esse asperna', 'Dolorum ea dolor omn', 'Tenetur esse dolore', 'Sunt laboris fugit', 'Et dolore nulla cupi', 'Omnis aut nihil id', '56565655555', 'Charlotte Pacheco', 'SHIL4565454', '545645', 'Acton Kirby', 'Quo saepe Nam dicta', '2022-11-04 05:05:22', '2022-11-08 00:22:47', NULL),
(201, '202229867', 'Active', 'Prof', 'Stewart Cotton', 'Zenia Tyson', 'Powers', 'Sister', 'Dara', 'Grant Gentry', 'Osborn', 'tafyly@mailinator.com', 'Female', '1965-10-15', '9985652326', '/storage/customer/1667888367_6444.jpg', '/storage/customer/1667888367_signature.png', '121212154845', '/storage/customer/1667558867_224.jpg', '/storage/customer/1667558867_152.jpg', '/storage/customer/1667558867_4512.jpg', 'SILHI6235D', 'Exercitationem conse', 'Quae dignissimos qui', 'Voluptatem autem a a', 'Ea voluptatem maiore', 'Qui et laudantium v', 'Consequuntur id volu', '95224555555', 'Serena Chan', 'SHPP5555555', '555555', 'Salvador Gould', 'Eum enim dolorem min', '2022-11-04 05:17:47', '2022-11-08 00:49:27', NULL),
(202, '202289505', 'Active', 'Ms', 'Dale Workman', 'Galvin Mcclain', 'Dickerson', 'Brother', 'Daphne', 'Brynne Flynn', 'Bender', 'febinovixy@mailinator.com', 'Female', '2009-12-14', '6986555446', '/storage/customer/1667818801_12.jpg', '/storage/customer/1667818801_signature.png', '121212126545', '/storage/customer/1667635570_152.jpg', '/storage/customer/1667635570_pancard.jpg', '/storage/customer/1667635570_cancel check.jpg', 'SHILW5263D', 'Voluptas eveniet ne', 'Consequatur quis nos', 'Cumque nulla laudant', 'Odit minus esse omn', 'Eligendi rerum sit n', 'Nihil impedit offic', '23598754454', 'Reese Lang', 'IWPL2001124', '857745', 'Alexandra Sellers', 'Do earum amet dolor', '2022-11-05 02:36:10', '2022-11-07 05:30:01', NULL),
(203, '202266235', 'Active', 'Prof', 'Colette Mason', 'Kasimir Golden', 'Griffin', 'Husband', 'Jack', 'Gwendolyn Simon', 'William', 'gyjuf@mailinator.com', 'Male', '2014-04-18', '9565656500', '/storage/customer/1667885245_15.jpg', '/storage/customer/1667885245_signature.png', '121454545454', '/storage/customer/1667800890_aadharcard.jpg', '/storage/customer/1667800890_pancard.jpg', '/storage/customer/1667800890_cancel check.jpg', 'SHILI2032D', 'Dolorum ratione fugi', 'Placeat quasi possi', 'Quod duis nulla veri', 'Quis deleniti verita', 'Maxime quaerat odit', 'Beatae distinctio A', '11111111111', 'Ivy Browning', 'SIHL0210211', '565454', 'Candace Manning', 'A totam repellendus', '2022-11-07 00:31:30', '2022-11-07 23:57:25', NULL),
(204, '202266809', 'Active', 'Prof', 'Colby Kirk', 'Germane Carson', 'Chen', 'Husband', 'Brendan', 'Wayne Lara', 'Tate', 'ditonow@mailinator.com', 'Female', '1980-12-08', '8956565656', '/storage/customer/1667894112_4512.jpg', '/storage/customer/1667894112_signature.png', '255532556545', '/storage/customer/1667887668_aadharcard.jpg', '/storage/customer/1667887668_pancard.jpg', '/storage/customer/1667887668_cancel check.jpg', 'SHILD5689D', 'Rerum quis officia o', 'Impedit ullamco qui', 'Libero ea facere qui', 'Deserunt quis tempor', 'Et in quis exercitat', 'Dolorem veniam hic', '20000063222', 'Shaeleigh Horne', 'HICD1212121', '454545', 'Laith Moran', 'Beatae nulla quisqua', '2022-11-08 00:37:48', '2022-11-08 02:25:12', NULL),
(205, '202287908', 'Active', 'Mr', 'Victoria Delgado', 'Akeem Garza', 'Flores', 'Father', 'Cole', 'Jason Prince', 'Moore', 'pynudel@mailinator.com', 'Female', '1994-03-15', '9565646454', '/storage/customer/1667970850_6444.jpg', '/storage/customer/1667970634_1666178690_855878.png', '544545487870', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', 'SHISD4125S', 'Cupidatat mollitia s', 'Dolores sunt cumque', 'Culpa aut consequatu', 'Quas veniam qui adi', 'Voluptatem Sint et', 'Veniam earum et sun', NULL, 'Ursula Cleveland', NULL, NULL, 'Judah Byrd', 'Officia occaecat min', '2022-11-08 01:37:28', '2022-11-08 23:44:10', NULL),
(206, '202274881', 'Active', 'Mr', 'Deanna Burke', 'Shaeleigh Lewis', 'Marquez', 'Brother', 'Patricia', 'Inga Russell', 'Hammond', 'racov@mailinator.com', 'Female', '2012-02-05', '7854545454', '/storage/customer/1667892199_152.jpg', '/storage/customer/1667892199_signature.png', '549787454545', '/storage/customer/1667891382_15.jpg', '/storage/customer/1667891382_15.jpg', '/storage/customer/1667891382_15.jpg', 'LKLIL5480S', 'Aut dolores ab ipsum', 'Voluptas doloribus a', 'Sit molestiae sed N', 'Labore porro ipsa c', 'Aliquip recusandae', 'Voluptas vel minima', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-08 01:39:42', '2022-11-08 01:53:19', NULL),
(207, '202223657', 'Active', 'Mr', 'Ima Browning', 'Kelsey Pope', 'Bernard', 'Sister', 'Avye', 'Lucy Mccall', 'Garrett', 'syso@mailinator.com', 'female', '1968-09-20', '9839201135', '/storage/customer/1668141423_021.jpg', '/storage/customer/1667972405_1666178690_855878.png', '201221221212', '/storage/customer/1667972405_021.jpg', '/storage/customer/1667972405_121.jpg', '/storage/customer/1667972405_224.jpg', 'HLILD2012D', 'Facilis explicabo R', 'Id voluptatum id as', 'Soluta nisi id ipsa', 'Rerum et doloremque', 'Aliquam sapiente est', 'Excepturi ipsam saep', NULL, 'Oren Riley', NULL, NULL, 'Ria Sparks', 'Sunt sed neque dolo', '2022-11-09 00:10:05', '2022-11-10 23:07:03', NULL),
(208, '202276879', 'Active', 'Mr', 'Cally Finch', 'Evangeline Benjamin', 'Skinner', 'Husband', 'Willa', 'Jaime Lloyd', 'Talley', 'myryx@mailinator.com', 'other', '1963-09-19', '9877676344', '/storage/customer/1668423553_00120.jpg', '/storage/customer/1668423553_signature.png', '112342342342', '/storage/customer/1668423553_aadharcard.jpg', '/storage/customer/1668423553_bankfrotpage.jpg', '/storage/customer/1668423553_cancel check.jpg', 'SHILS3487S', 'Atque porro corrupti', 'Saepe aut quos quasi', 'Aliquam ducimus vel', 'Quis esse ut laudan', 'Quam lorem ea fugit', 'Dolor veritatis ut e', '21122321221', 'Kiara Frost', 'SHIL3438293', '893278', 'Amerika', 'Sunt sunt ab recusa', '2022-11-14 05:29:13', '2022-11-14 05:29:13', NULL),
(209, '20227886', 'Active', 'Mr', 'Stacy Morin', 'Eve Mckinney', 'Hale', 'Sister', 'Wayne', 'Ria Lindsey', 'King', 'pysyjeno@mailinator.com', 'female', '2004-12-20', '8976546789', '/storage/customer/1668573426_152.jpg', '/storage/customer/1668573426_412121.png', '234234234324', '/storage/customer/1668573426_aadharcard.jpg', '/storage/customer/1668573426_pancard.jpg', '/storage/customer/1668573426_855878.png', 'AILIW3498H', 'Temporibus porro dol', 'Proident laborum ex', 'Labore ullamco volup', 'Reprehenderit dolor', 'Omnis ut fuga Neque', 'Mollitia quaerat seq', NULL, 'Kiona Tucker', NULL, '899889', 'Casey York', 'Quia rerum qui qui e', '2022-11-15 23:07:06', '2022-11-15 23:07:06', NULL),
(210, '20229174', 'Active', 'Prof', 'Damon Pena', 'Timothy Battle', 'Mcpherson', 'Father', 'Desiree', 'Fulton Keller', 'Herrera', 'nalekocimy@mailinator.com', 'Female', '2025-04-23', '8978787878', '/storage/customer/1669103927_021.jpg', '/storage/customer/1669103927_signature.png', '676767676767', '/storage/customer/1669103927_aadharcard.jpg', '/storage/customer/1669103927_pancard.jpg', '/storage/customer/1669103927_bankfrotpage.jpg', 'SHILJ8898D', 'Consectetur in nece', 'Quis quis in ex repr', 'Similique veniam od', 'Fugiat architecto ut', 'Nemo fugiat enim ne', 'Dicta architecto eu', NULL, 'Daquan Webb', NULL, NULL, 'Katell Wall', 'Obcaecati amet mole', '2022-11-22 02:28:47', '2022-11-22 04:10:48', NULL),
(211, '202268695', 'Active', 'Ms', 'Vera Newton', 'Kimberly Mejia', 'Whitley', 'Father', 'Adara', 'Maggie Ross', 'Lindsay', 'wuhet@mailinator.com', 'male', '1989-06-07', '8768787878', '/storage/customer/1669960459_121.jpg', '/storage/customer/1669960459_signature.png', '762772638276', '/storage/customer/1669960459_aadharcard.jpg', '/storage/customer/1669960459_pancard.jpg', '/storage/customer/1669960459_cancel check.jpg', 'ELSPS2349K', 'Qui eu totam consect', 'Nobis impedit dolor', 'Omnis aliquid vel di', 'Et vero quisquam des', 'Incidunt sed volupt', 'Laboris sunt nobis f', '67878787878', 'Mari Banks', 'SHIL1232323', '233232', 'Samuel Odom', 'Reprehenderit sint', '2022-12-02 00:24:19', '2022-12-02 00:24:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers_logs`
--

CREATE TABLE `customers_logs` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `cust_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_mname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_mname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardian_lname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_email_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_profile_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_signature_pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_aadharno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_document_aadhar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_document_pan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_document_bankdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_panno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address_detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address_pincode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address_pincode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_account_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_holder_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_ifsc_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_branch_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_branche_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_bank_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_logs`
--

INSERT INTO `customers_logs` (`ID`, `cust_id`, `cust_status`, `cust_title`, `cust_fname`, `cust_mname`, `cust_lname`, `gardian_title`, `gardian_fname`, `gardian_mname`, `gardian_lname`, `cust_email_address`, `cust_gender`, `cust_date_of_birth`, `cust_mobile`, `cust_profile_pic`, `cust_signature_pic`, `cust_aadharno`, `cust_document_aadhar`, `cust_document_pan`, `cust_document_bankdt`, `cust_panno`, `current_address_detail`, `current_address_city`, `current_address_pincode`, `permanent_address_detail`, `permanent_address_city`, `permanent_address_pincode`, `cust_account_number`, `cust_bank_holder_name`, `cust_bank_ifsc_code`, `cust_bank_branch_code`, `cust_bank_branche_name`, `cust_bank_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CUST1667478063', 'Active', 'Prof', 'Clio Mcpherson', 'Amber Mcintosh', 'Shannon', 'Sister', 'Neil', 'Tashya Hatfield', 'Welch', 'dapir@mailinator.com', 'male', '1960-01-02', '8989898415', 'profile pic', 'signature', '212121219999', 'Aadhar', 'pan', 'bank doc', 'SLJIL5210S', 'Quibusdam suscipit e', 'Fuga Ut id aliqua', 'Veniam neque quam q', 'Sint ea mollit offi', 'Quo qui molestiae mi', 'Sapiente sapiente si', '11112121211', 'Dale Carter', 'WERT4456454', '797787', 'Allistair Stuart', 'Doloremque sint even', '2022-11-03 06:51:03', '2022-11-03 06:51:03', NULL),
(2, 'CUST1667478183', 'Active', 'Prof', 'Clio Mcpherson', 'Amber Mcintosh', 'Shannon', 'Sister', 'Neil', 'Tashya Hatfield', 'Welch', 'dapir@mailinator.com', 'male', '1960-01-02', '8989898415', 'profile pic', 'signature', '212121219999', 'Aadhar', 'pan', 'bank doc', 'SLJIL5210S', 'Quibusdam suscipit e', 'Fuga Ut id aliqua', 'Veniam neque quam q', 'Sint ea mollit offi', 'Quo qui molestiae mi', 'Sapiente sapiente si', '11112121211', 'Dale Carter', 'WERT4456454', '797787', 'Allistair Stuart', 'Doloremque sint even', '2022-11-03 06:53:03', '2022-11-03 06:53:03', NULL),
(3, 'CUST37013', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 00:17:59', '2022-11-04 00:17:59', NULL),
(4, 'CUST14516', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 00:18:24', '2022-11-04 00:18:24', NULL),
(5, 'CUST86763', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 00:21:54', '2022-11-04 00:21:54', NULL),
(6, 'CUST22161', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 00:26:54', '2022-11-04 00:26:54', NULL),
(7, 'CUST47038', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 00:51:44', '2022-11-04 00:51:44', NULL),
(8, 'CUST2277194', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 01:02:30', '2022-11-04 01:02:30', NULL),
(10, 'CUST222256567', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 01:03:19', '2022-11-04 01:03:19', NULL),
(11, 'CUST202232169', 'Active', 'Mr', 'Ronan Daugherty', 'Molly Oneil', 'Wagner', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656565', 'profile pic', 'signature', '212312312123', 'Aadhar', 'pan', 'bank doc', 'SHILD5686S', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-04 01:03:44', '2022-11-04 01:03:44', NULL),
(12, 'CUST202294312', 'Active', 'Prof', 'Noble Atkinson', 'Blair Hale', 'Clayton', 'Father', 'Riley', 'Aspen Mercer', 'Randolph', 'zaqigefi@mailinator.com', 'other', '1962-11-07', 'Ut ut nisi', '/storage/customer/1667633118_4512.jpg', '/storage/customer/1667633118_signature.png', '212312123123', '/storage/customer/1667558122_152.jpg', '/storage/customer/1667558122_224.jpg', '/storage/customer/1667558122_12 (3).jpg', 'SHLJI1255D', 'Lorem eveniet sed e', 'Necessitatibus nesci', 'Irure adipisicing de', 'Sunt laboris fugit', 'Et dolore nulla cupi', 'Omnis aut nihil id', '56565655555', 'Charlotte Pacheco', 'SHIL4565454', '545645', 'Acton Kirby', 'Quo saepe Nam dicta', '2022-11-05 01:55:18', '2022-11-05 01:55:18', NULL),
(13, 'CUST202294312', 'Active', 'Prof', 'Noble Atkinson', 'Blair Hale', 'Clayton', 'Father', 'Riley', 'Aspen Mercer', 'Randolph', 'zaqigefi@mailinator.com', 'other', '1962-11-07', 'Ut ut nisi', '/storage/customer/1667633234_4512.jpg', '/storage/customer/1667633234_signature.png', '212312123123', '/storage/customer/1667558122_152.jpg', '/storage/customer/1667558122_224.jpg', '/storage/customer/1667558122_12 (3).jpg', 'SHLJI1255D', 'Lorem eveniet sed e', 'Necessitatibus nesci', 'Irure adipisicing de', 'Sunt laboris fugit', 'Et dolore nulla cupi', 'Omnis aut nihil id', '56565655555', 'Charlotte Pacheco', 'SHIL4565454', '545645', 'Acton Kirby', 'Quo saepe Nam dicta', '2022-11-05 01:57:15', '2022-11-05 01:57:15', NULL),
(14, 'CUST202294312', 'Active', 'Prof', 'Noble Atkinson', 'Blair Hale', 'Clayton', 'Father', 'Riley', 'Aspen Mercer', 'Randolph', 'zaqigefi@mailinator.com', 'other', '1962-11-07', '9839201133', '/storage/customer/1667633307_152.jpg', '/storage/customer/1667633307_signature.png', '212312123123', '/storage/customer/1667558122_152.jpg', '/storage/customer/1667558122_224.jpg', '/storage/customer/1667558122_12 (3).jpg', 'SHLJI1255D', 'Lorem eveniet sed e', 'Necessitatibus nesci', 'Irure adipisicing de', 'Sunt laboris fugit', 'Et dolore nulla cupi', 'Omnis aut nihil id', '56565655555', 'Charlotte Pacheco', 'SHIL4565454', '545645', 'Acton Kirby', 'Quo saepe Nam dicta', '2022-11-05 01:58:27', '2022-11-05 01:58:27', NULL),
(15, 'CUST202229867', 'Active', 'Prof', 'Stewart Cotton', 'Zenia Tyson', 'Powers', 'Sister', 'Dara', 'Grant Gentry', 'Osborn', 'tafyly@mailinator.com', 'male', '1965-10-15', '8597987975', '/storage/customer/1667633706_12.jpg', '/storage/customer/1667633706_signature.png', '121212154845', '/storage/customer/1667558867_224.jpg', '/storage/customer/1667558867_152.jpg', '/storage/customer/1667558867_4512.jpg', 'SILHI6235D', 'Exercitationem conse', 'Quae dignissimos qui', 'Voluptatem autem a a', 'Ea voluptatem maiore', 'Qui et laudantium v', 'Consequuntur id volu', '95224555555', 'Serena Chan', 'SHPP5555555', '555555', 'Salvador Gould', 'Eum enim dolorem min', '2022-11-05 02:05:06', '2022-11-05 02:05:06', NULL),
(16, 'CUST202229867', 'Active', 'Prof', 'Stewart Cotton', 'Zenia Tyson', 'Powers', 'Sister', 'Dara', 'Grant Gentry', 'Osborn', 'tafyly@mailinator.com', 'male', '1965-10-15', '9985652326', '/storage/customer/1667634308_6444.jpg', '/storage/customer/1667634308_1666178690_855878.png', '121212154845', '/storage/customer/1667558867_224.jpg', '/storage/customer/1667558867_152.jpg', '/storage/customer/1667558867_4512.jpg', 'SILHI6235D', 'Exercitationem conse', 'Quae dignissimos qui', 'Voluptatem autem a a', 'Ea voluptatem maiore', 'Qui et laudantium v', 'Consequuntur id volu', '95224555555', 'Serena Chan', 'SHPP5555555', '555555', 'Salvador Gould', 'Eum enim dolorem min', '2022-11-05 02:15:08', '2022-11-05 02:15:08', NULL),
(17, 'CUST202289505', 'Active', 'Ms', 'Dale Workman', 'Galvin Mcclain', 'Dickerson', 'Brother', 'Daphne', 'Brynne Flynn', 'Bender', 'febinovixy@mailinator.com', 'other', '2009-12-14', '6986555446', '/storage/customer/1667800368_224.jpg', '/storage/customer/1667800368_1666178690_855878.png', '121212126545', '/storage/customer/1667635570_152.jpg', '/storage/customer/1667635570_pancard.jpg', '/storage/customer/1667635570_cancel check.jpg', 'SHILW5263D', 'Voluptas eveniet ne', 'Consequatur quis nos', 'Cumque nulla laudant', 'Odit minus esse omn', 'Eligendi rerum sit n', 'Nihil impedit offic', '23598754454', 'Reese Lang', 'IWPL2001124', '857745', 'Alexandra Sellers', 'Do earum amet dolor', '2022-11-07 00:22:49', '2022-11-07 00:22:49', NULL),
(18, 'CUST202289505', 'Active', 'Ms', 'Dale Workman', 'Galvin Mcclain', 'Dickerson', 'Brother', 'Daphne', 'Brynne Flynn', 'Bender', 'febinovixy@mailinator.com', 'other', '2009-12-14', '6986555446', '/storage/customer/1667809063_6444.jpg', '/storage/customer/1667809063_signature.png', '121212126545', '/storage/customer/1667635570_152.jpg', '/storage/customer/1667635570_pancard.jpg', '/storage/customer/1667635570_cancel check.jpg', 'SHILW5263D', 'Voluptas eveniet ne', 'Consequatur quis nos', 'Cumque nulla laudant', 'Odit minus esse omn', 'Eligendi rerum sit n', 'Nihil impedit offic', '23598754454', 'Reese Lang', 'IWPL2001124', '857745', 'Alexandra Sellers', 'Do earum amet dolor', '2022-11-07 02:47:43', '2022-11-07 02:47:43', NULL),
(19, 'CUST202266235', 'Active', 'Prof', 'Colette Mason', 'Kasimir Golden', 'Griffin', 'Husband', 'Jack', 'Gwendolyn Simon', 'William', 'gyjuf@mailinator.com', 'other', '2014-04-18', '9565656500', '/storage/customer/1667817846_152.jpg', '/storage/customer/1667817846_signature.png', '121454545454', '/storage/customer/1667800890_aadharcard.jpg', '/storage/customer/1667800890_pancard.jpg', '/storage/customer/1667800890_cancel check.jpg', 'SHILI2032D', 'Dolorum ratione fugi', 'Placeat quasi possi', 'Quod duis nulla veri', 'Quis deleniti verita', 'Maxime quaerat odit', 'Beatae distinctio A', '11111111111', 'Ivy Browning', 'SIHL0210211', '565454', 'Candace Manning', 'A totam repellendus', '2022-11-07 05:14:06', '2022-11-07 05:14:06', NULL),
(20, 'CUST202266235', 'Active', 'Prof', 'Colette Mason', 'Kasimir Golden', 'Griffin', 'Husband', 'Jack', 'Gwendolyn Simon', 'William', 'gyjuf@mailinator.com', 'Female', '2014-04-18', '9565656500', '/storage/customer/1667817953_54451.jpg', '/storage/customer/1667817953_signature.png', '121454545454', '/storage/customer/1667800890_aadharcard.jpg', '/storage/customer/1667800890_pancard.jpg', '/storage/customer/1667800890_cancel check.jpg', 'SHILI2032D', 'Dolorum ratione fugi', 'Placeat quasi possi', 'Quod duis nulla veri', 'Quis deleniti verita', 'Maxime quaerat odit', 'Beatae distinctio A', '11111111111', 'Ivy Browning', 'SIHL0210211', '565454', 'Candace Manning', 'A totam repellendus', '2022-11-07 05:15:53', '2022-11-07 05:15:53', NULL),
(21, 'CUST20225522', 'DeActivate', 'Ms', 'Quentin Patton', 'Sybil Evans', 'Rosa', 'Brother', 'Nicole', 'Rebekah Pace', 'Jacobson', 'guzopysoh@mailinator.com', 'cust_gender', '1986-03-24', '6325656560', '/storage/customer/1667818012_152.jpg', '/storage/customer/1667818012_signature.png', '232123123120', '/storage/customer/1667556461_15.jpg', '/storage/customer/1667556461_15.jpg', '/storage/customer/1667556461_15.jpg', 'SIHLI1245O', 'Fugiat est ullam in', 'Nulla perspiciatis', 'Facilis minim eum ve', 'Esse culpa dolore d', 'Eveniet soluta aute', 'Consectetur itaque v', '11221212122', 'Tarik Harrell', 'SHIL4851214', '787878', 'Katell Russo', 'Autem alias quia adi', '2022-11-07 05:16:52', '2022-11-07 05:16:52', NULL),
(22, 'CUST20225522', 'DeActivate', 'Ms', 'Quentin Patton', 'Sybil Evans', 'Rosa', 'Brother', 'Nicole', 'Rebekah Pace', 'Jacobson', 'guzopysoh@mailinator.com', 'Male', '1986-03-24', '6325656560', '/storage/customer/1667818215_15.jpg', '/storage/customer/1667818215_signature.png', '232123123120', '/storage/customer/1667556461_15.jpg', '/storage/customer/1667556461_15.jpg', '/storage/customer/1667556461_15.jpg', 'SIHLI1245O', 'Fugiat est ullam in', 'Nulla perspiciatis', 'Facilis minim eum ve', 'Esse culpa dolore d', 'Eveniet soluta aute', 'Consectetur itaque v', '11221212122', 'Tarik Harrell', 'SHIL4851214', '787878', 'Katell Russo', 'Autem alias quia adi', '2022-11-07 05:20:15', '2022-11-07 05:20:15', NULL),
(23, 'CUST202289505', 'Active', 'Ms', 'Dale Workman', 'Galvin Mcclain', 'Dickerson', 'Brother', 'Daphne', 'Brynne Flynn', 'Bender', 'febinovixy@mailinator.com', 'Female', '2009-12-14', '6986555446', '/storage/customer/1667818801_12.jpg', '/storage/customer/1667818801_signature.png', '121212126545', '/storage/customer/1667635570_152.jpg', '/storage/customer/1667635570_pancard.jpg', '/storage/customer/1667635570_cancel check.jpg', 'SHILW5263D', 'Voluptas eveniet ne', 'Consequatur quis nos', 'Cumque nulla laudant', 'Odit minus esse omn', 'Eligendi rerum sit n', 'Nihil impedit offic', '23598754454', 'Reese Lang', 'IWPL2001124', '857745', 'Alexandra Sellers', 'Do earum amet dolor', '2022-11-07 05:30:02', '2022-11-07 05:30:02', NULL),
(24, 'CUST202266235', 'Active', 'Prof', 'Colette Mason', 'Kasimir Golden', 'Griffin', 'Husband', 'Jack', 'Gwendolyn Simon', 'William', 'gyjuf@mailinator.com', 'cust_gender', '2014-04-18', '9565656500', '/storage/customer/1667885052_4512.jpg', '/storage/customer/1667885052_signature.png', '121454545454', '/storage/customer/1667800890_aadharcard.jpg', '/storage/customer/1667800890_pancard.jpg', '/storage/customer/1667800890_cancel check.jpg', 'SHILI2032D', 'Dolorum ratione fugi', 'Placeat quasi possi', 'Quod duis nulla veri', 'Quis deleniti verita', 'Maxime quaerat odit', 'Beatae distinctio A', '11111111111', 'Ivy Browning', 'SIHL0210211', '565454', 'Candace Manning', 'A totam repellendus', '2022-11-07 23:54:12', '2022-11-07 23:54:12', NULL),
(25, 'CUST202266235', 'Active', 'Prof', 'Colette Mason', 'Kasimir Golden', 'Griffin', 'Husband', 'Jack', 'Gwendolyn Simon', 'William', 'gyjuf@mailinator.com', 'Male', '2014-04-18', '9565656500', '/storage/customer/1667885245_15.jpg', '/storage/customer/1667885245_signature.png', '121454545454', '/storage/customer/1667800890_aadharcard.jpg', '/storage/customer/1667800890_pancard.jpg', '/storage/customer/1667800890_cancel check.jpg', 'SHILI2032D', 'Dolorum ratione fugi', 'Placeat quasi possi', 'Quod duis nulla veri', 'Quis deleniti verita', 'Maxime quaerat odit', 'Beatae distinctio A', '11111111111', 'Ivy Browning', 'SIHL0210211', '565454', 'Candace Manning', 'A totam repellendus', '2022-11-07 23:57:25', '2022-11-07 23:57:25', NULL),
(26, 'CUST202294312', 'Active', 'Prof', 'Noble Atkinson', 'Blair Hale', 'Clayton', 'Father', 'Riley', 'Aspen Mercer', 'Randolph', 'zaqigefi@mailinator.com', 'Female', '1962-11-07', '9839201133', '/storage/customer/1667885340_6444.jpg', '/storage/customer/1667885340_signature.png', '212312123123', '/storage/customer/1667558122_152.jpg', '/storage/customer/1667558122_224.jpg', '/storage/customer/1667558122_12 (3).jpg', 'SHLJI1255D', 'Lorem eveniet sed e', 'Necessitatibus nesci', 'Irure adipisicing de', 'Sunt laboris fugit', 'Et dolore nulla cupi', 'Omnis aut nihil id', '56565655555', 'Charlotte Pacheco', 'SHIL4565454', '545645', 'Acton Kirby', 'Quo saepe Nam dicta', '2022-11-07 23:59:00', '2022-11-07 23:59:00', NULL),
(27, 'CUST202294312', 'Active', 'Prof', 'Noble Atkinson', 'Blair Hale', 'Clayton', 'Father', 'Riley', 'Aspen Mercer', 'Randolph', 'zaqigefi@mailinator.com', 'Male', '1962-11-07', '9984162555', '/storage/customer/1667886767_1245.jpg', '/storage/customer/1667886767_signature.png', '212312123123', '/storage/customer/1667558122_152.jpg', '/storage/customer/1667558122_224.jpg', '/storage/customer/1667558122_12 (3).jpg', 'SHLJI1255D', 'Ex unde esse asperna', 'Dolorum ea dolor omn', 'Tenetur esse dolore', 'Sunt laboris fugit', 'Et dolore nulla cupi', 'Omnis aut nihil id', '56565655555', 'Charlotte Pacheco', 'SHIL4565454', '545645', 'Acton Kirby', 'Quo saepe Nam dicta', '2022-11-08 00:22:48', '2022-11-08 00:22:48', NULL),
(28, 'CUST202266809', 'Active', 'Prof', 'Colby Kirk', 'Germane Carson', 'Chen', 'Husband', 'Brendan', 'Wayne Lara', 'Tate', 'ditonow@mailinator.com', 'Female', '1980-12-08', '8956565656', '/storage/customer/1667888285_152.jpg', '/storage/customer/1667888285_signature.png', '255532556545', '/storage/customer/1667887668_aadharcard.jpg', '/storage/customer/1667887668_pancard.jpg', '/storage/customer/1667887668_cancel check.jpg', 'SHILD5689D', 'Rerum quis officia o', 'Impedit ullamco qui', 'Libero ea facere qui', 'Deserunt quis tempor', 'Et in quis exercitat', 'Dolorem veniam hic', '20000063222', 'Shaeleigh Horne', 'HICD1212121', '454545', 'Laith Moran', 'Beatae nulla quisqua', '2022-11-08 00:48:05', '2022-11-08 00:48:05', NULL),
(29, 'CUST202229867', 'Active', 'Prof', 'Stewart Cotton', 'Zenia Tyson', 'Powers', 'Sister', 'Dara', 'Grant Gentry', 'Osborn', 'tafyly@mailinator.com', 'Female', '1965-10-15', '9985652326', '/storage/customer/1667888367_6444.jpg', '/storage/customer/1667888367_signature.png', '121212154845', '/storage/customer/1667558867_224.jpg', '/storage/customer/1667558867_152.jpg', '/storage/customer/1667558867_4512.jpg', 'SILHI6235D', 'Exercitationem conse', 'Quae dignissimos qui', 'Voluptatem autem a a', 'Ea voluptatem maiore', 'Qui et laudantium v', 'Consequuntur id volu', '95224555555', 'Serena Chan', 'SHPP5555555', '555555', 'Salvador Gould', 'Eum enim dolorem min', '2022-11-08 00:49:27', '2022-11-08 00:49:27', NULL),
(30, 'CUST202274881', 'Active', 'Mr', 'Deanna Burke', 'Shaeleigh Lewis', 'Marquez', 'Brother', 'Patricia', 'Inga Russell', 'Hammond', 'racov@mailinator.com', 'Female', '2012-02-05', '7854545454', '/storage/customer/1667892199_152.jpg', '/storage/customer/1667892199_signature.png', '549787454545', '/storage/customer/1667891382_15.jpg', '/storage/customer/1667891382_15.jpg', '/storage/customer/1667891382_15.jpg', 'LKLIL5480S', 'Aut dolores ab ipsum', 'Voluptas doloribus a', 'Sit molestiae sed N', 'Labore porro ipsa c', 'Aliquip recusandae', 'Voluptas vel minima', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-08 01:53:19', '2022-11-08 01:53:19', NULL),
(31, 'CUST202266809', 'Active', 'Prof', 'Colby Kirk', 'Germane Carson', 'Chen', 'Husband', 'Brendan', 'Wayne Lara', 'Tate', 'ditonow@mailinator.com', 'Female', '1980-12-08', '8956565656', '/storage/customer/1667894112_4512.jpg', '/storage/customer/1667894112_signature.png', '255532556545', '/storage/customer/1667887668_aadharcard.jpg', '/storage/customer/1667887668_pancard.jpg', '/storage/customer/1667887668_cancel check.jpg', 'SHILD5689D', 'Rerum quis officia o', 'Impedit ullamco qui', 'Libero ea facere qui', 'Deserunt quis tempor', 'Et in quis exercitat', 'Dolorem veniam hic', '20000063222', 'Shaeleigh Horne', 'HICD1212121', '454545', 'Laith Moran', 'Beatae nulla quisqua', '2022-11-08 02:25:12', '2022-11-08 02:25:12', NULL),
(32, 'CUST202287908', 'Active', 'Mr', 'Victoria Delgado', 'Akeem Garza', 'Flores', 'Father', 'Cole', 'Jason Prince', 'Moore', 'pynudel@mailinator.com', 'Female', '1994-03-15', '9565646454', '/storage/customer/1667896240_1245.jpg', '/storage/customer/1667896240_signature.png', '544545487870', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', 'SHISD4125S', 'Cupidatat mollitia s', 'Dolores sunt cumque', 'Culpa aut consequatu', 'Quas veniam qui adi', 'Voluptatem Sint et', 'Veniam earum et sun', NULL, 'Ursula Cleveland', NULL, NULL, 'Judah Byrd', 'Officia occaecat min', '2022-11-08 03:00:40', '2022-11-08 03:00:40', NULL),
(33, 'CUST202287908', 'Active', 'Mr', 'Victoria Delgado', 'Akeem Garza', 'Flores', 'Father', 'Cole', 'Jason Prince', 'Moore', 'pynudel@mailinator.com', 'Female', '1994-03-15', '9565646454', '/storage/customer/1667896240_1245.jpg', '/storage/customer/1667970617_signature.png', '544545487870', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', 'SHISD4125S', 'Cupidatat mollitia s', 'Dolores sunt cumque', 'Culpa aut consequatu', 'Quas veniam qui adi', 'Voluptatem Sint et', 'Veniam earum et sun', NULL, 'Ursula Cleveland', NULL, NULL, 'Judah Byrd', 'Officia occaecat min', '2022-11-08 23:40:18', '2022-11-08 23:40:18', NULL),
(34, 'CUST202287908', 'Active', 'Mr', 'Victoria Delgado', 'Akeem Garza', 'Flores', 'Father', 'Cole', 'Jason Prince', 'Moore', 'pynudel@mailinator.com', 'Female', '1994-03-15', '9565646454', '/storage/customer/1667896240_1245.jpg', '/storage/customer/1667970634_1666178690_855878.png', '544545487870', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', 'SHISD4125S', 'Cupidatat mollitia s', 'Dolores sunt cumque', 'Culpa aut consequatu', 'Quas veniam qui adi', 'Voluptatem Sint et', 'Veniam earum et sun', NULL, 'Ursula Cleveland', NULL, NULL, 'Judah Byrd', 'Officia occaecat min', '2022-11-08 23:40:34', '2022-11-08 23:40:34', NULL),
(35, 'CUST202287908', 'Active', 'Mr', 'Victoria Delgado', 'Akeem Garza', 'Flores', 'Father', 'Cole', 'Jason Prince', 'Moore', 'pynudel@mailinator.com', 'Female', '1994-03-15', '9565646454', '/storage/customer/1667970850_6444.jpg', '/storage/customer/1667970634_1666178690_855878.png', '544545487870', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', '/storage/customer/1667891248_15.jpg', 'SHISD4125S', 'Cupidatat mollitia s', 'Dolores sunt cumque', 'Culpa aut consequatu', 'Quas veniam qui adi', 'Voluptatem Sint et', 'Veniam earum et sun', NULL, 'Ursula Cleveland', NULL, NULL, 'Judah Byrd', 'Officia occaecat min', '2022-11-08 23:44:10', '2022-11-08 23:44:10', NULL),
(36, 'CUST202273650', 'Active', 'Mr', 'Ima Browning', 'Kelsey Pope', 'Bernard', 'Sister', 'Avye', 'Lucy Mccall', 'Garrett', 'syso@mailinator.com', 'female', '1968-09-20', '9839201135', '/storage/customer/1668141423_021.jpg', '/storage/customer/1667972405_1666178690_855878.png', '201221221212', '/storage/customer/1667972405_021.jpg', '/storage/customer/1667972405_121.jpg', '/storage/customer/1667972405_224.jpg', 'HLILD2012D', 'Facilis explicabo R', 'Id voluptatum id as', 'Soluta nisi id ipsa', 'Rerum et doloremque', 'Aliquam sapiente est', 'Excepturi ipsam saep', NULL, 'Oren Riley', NULL, NULL, 'Ria Sparks', 'Sunt sed neque dolo', '2022-11-10 23:07:03', '2022-11-10 23:07:03', NULL),
(37, 'CUST202295043', 'Active', 'Mr', 'Shiva', 'Molly Oneil', 'singh', 'wife', 'Keefe', 'Echo Compton', 'Summers', 'cykukekys@mailinator.com', 'male', '1992-08-06', '6565656564', '/storage/customer/1668424951_0012.jpg', '/storage/customer/1667548802_signature.png', '212312312125', '/storage/customer/1667548802_1245.jpg', '/storage/customer/1667548802_1245.jpg', '/storage/customer/1667548802_1245.jpg', 'SHILD5686Q', 'Amet repudiandae mo', 'Ut hic cum doloremqu', 'Quod ipsum laboris e', 'Quia ullam non conse', 'Quasi debitis assume', 'Delectus sunt non v', '11212121212', 'Arsenio Gonzalez', 'SLIL4454545', '456456', 'Hakeem Keller', 'Asperiores cupiditat', '2022-11-14 05:52:31', '2022-11-14 05:52:31', NULL),
(38, 'CUST202239867', 'Active', 'Ms', 'Quentin Patton', 'Sybil Evans', 'Rosa', 'Brother', 'Nicole', 'Rebekah Pace', 'Jacobson', 'guzopysoh@mailinator.com', 'female', '1986-03-24', '6325656567', '/storage/customer/1667556321_224.jpg', '/storage/customer/1668425175_signature.png', '232123123123', '/storage/customer/1667556321_15.jpg', '/storage/customer/1667556321_152.jpg', '/storage/customer/1667556321_152.jpg', 'SIHLI1245P', 'Fugiat est ullam in', 'Nulla perspiciatis', 'Facilis minim eum ve', 'Esse culpa dolore d', 'Eveniet soluta aute', 'Consectetur itaque v', '11221212122', 'Tarik Harrell', 'SHIL4851214', '787878', 'Katell Russo', 'Autem alias quia adi', '2022-11-14 05:56:15', '2022-11-14 05:56:15', NULL),
(39, 'CUST202252464', 'Active', 'Mr', 'Stacy Morin', 'Eve Mckinney', 'Hale', 'Sister', 'Wayne', 'Ria Lindsey', 'King', 'pysyjeno@mailinator.com', 'female', '2004-12-20', '8976546789', '/storage/customer/1668573426_152.jpg', '/storage/customer/1668573426_412121.png', '234234234324', '/storage/customer/1668573426_aadharcard.jpg', '/storage/customer/1668573426_pancard.jpg', '/storage/customer/1668573426_855878.png', 'AILIW3498H', 'Temporibus porro dol', 'Proident laborum ex', 'Labore ullamco volup', 'Reprehenderit dolor', 'Omnis ut fuga Neque', 'Mollitia quaerat seq', NULL, 'Kiona Tucker', NULL, '899889', 'Casey York', 'Quia rerum qui qui e', '2022-11-15 23:08:09', '2022-11-15 23:08:09', NULL),
(40, '20229174', 'Active', 'Prof', 'Damon Pena', 'Timothy Battle', 'Mcpherson', 'Father', 'Desiree', 'Fulton Keller', 'Herrera', 'nalekocimy@mailinator.com', 'Female', '2025-04-23', '8978787878', '/storage/customer/1669103927_021.jpg', '/storage/customer/1669103927_signature.png', '676767676767', '/storage/customer/1669103927_aadharcard.jpg', '/storage/customer/1669103927_pancard.jpg', '/storage/customer/1669103927_bankfrotpage.jpg', 'SHILJ8898D', 'Consectetur in nece', 'Quis quis in ex repr', 'Similique veniam od', 'Fugiat architecto ut', 'Nemo fugiat enim ne', 'Dicta architecto eu', NULL, 'Daquan Webb', NULL, NULL, 'Katell Wall', 'Obcaecati amet mole', '2022-11-22 04:10:48', '2022-11-22 04:10:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gold`
--

CREATE TABLE `gold` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `cust_id` varchar(255) NOT NULL,
  `gold_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gold_type` varchar(255) NOT NULL,
  `gold_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gold_qnt` varchar(255) NOT NULL,
  `gold_gross_wt` varchar(255) NOT NULL,
  `gold_ston_wt` varchar(255) NOT NULL,
  `gold_net_wt` varchar(255) NOT NULL,
  `gold_purity` varchar(255) NOT NULL,
  `gold_market_wt` varchar(255) NOT NULL,
  `gold_rate` varchar(255) NOT NULL,
  `gold_remark` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gold`
--

INSERT INTO `gold` (`ID`, `cust_id`, `gold_id`, `gold_type`, `gold_name`, `gold_qnt`, `gold_gross_wt`, `gold_ston_wt`, `gold_net_wt`, `gold_purity`, `gold_market_wt`, `gold_rate`, `gold_remark`, `created_at`, `updated_at`) VALUES
(1, '737134044', '38346', 'Ring', 'Gold nek', '3', '12', '1.6', '10.4', '22', '1', '5499', 'gold sdk', '2022-12-02 06:49:14', '2022-12-02 06:49:14'),
(2, '737134044', '12209', 'Nek Ring', 'gold ds', '2', '22', '2.5', '19.5', '24', '1', '5125', 'Gold use', '2022-12-02 06:59:58', '2022-12-02 06:59:58'),
(3, '403594044', '89676', 'watch', 'Gold Watch', '3', '11.2', '1.92', '9.28', '22', '1', '5333', 'watch gift', '2022-12-03 02:29:12', '2022-12-03 02:29:12'),
(4, '816434044', '20829', 'Ring', 'Nek Ring', '2', '13.4', '2.1', '11.3', '18', '1', '4923', 'gold', '2022-12-03 02:38:26', '2022-12-03 02:38:26'),
(5, '667476048', '55373', 'Ring', 'Gold lhl', '3', '8.4', '1.1', '7.300000000000001', '22', '1', '6540', 'ksdhsds', '2022-12-03 03:01:40', '2022-12-03 03:01:40'),
(6, '816434044', '51941', 'Ring', 'Gold braslet', '1', '15.6', '2.7', '12.899999999999999', '22', '1', '5613', 'Gold curent market price', '2022-12-03 06:44:01', '2022-12-03 06:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `golds`
--

CREATE TABLE `golds` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `gold_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gold_type` varchar(255) NOT NULL,
  `gold_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gold_qnt` varchar(255) NOT NULL,
  `gold_gross_wt` varchar(255) NOT NULL,
  `gold_ston_wt` varchar(255) NOT NULL,
  `gold_net_wt` varchar(255) NOT NULL,
  `gold_purity` varchar(255) NOT NULL,
  `gold_market_wt` varchar(255) NOT NULL,
  `gold_rate` varchar(255) NOT NULL,
  `gold_remark` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golds`
--

INSERT INTO `golds` (`ID`, `gold_id`, `gold_type`, `gold_name`, `gold_qnt`, `gold_gross_wt`, `gold_ston_wt`, `gold_net_wt`, `gold_purity`, `gold_market_wt`, `gold_rate`, `gold_remark`, `created_at`, `updated_at`) VALUES
(1, 'Gold Loan', 'chain', 'Gold Ring', '2', '6', '7', '8', '5', '6', '15000', 'Gold item', NULL, NULL),
(2, '56558', 'Ring', 'Braslet', '5', '5.5', '3', '5.6', '22', '3', '10000', 'gold sell', NULL, NULL),
(3, '56458', 'Angithi', 'angithi', '6', '5.5', '4', '6.6', '24', '4', '10000', 'gold sell', NULL, NULL),
(4, '56858', 'chain', 'chain', '4', '5.5', '6', '7.6', '20', '4', '10000', 'gold sell', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loaninterestmasters`
--

CREATE TABLE `loaninterestmasters` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `month_plan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_intrest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month_overdue_penalty_intrest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaninterestmasters`
--

INSERT INTO `loaninterestmasters` (`ID`, `month_plan`, `month_intrest`, `month_overdue_penalty_intrest`, `created_at`, `updated_at`) VALUES
(1, '6', '15', '5', '2022-11-19 04:04:30', '2022-11-19 04:04:30'),
(2, '12', '15', '5', '2022-11-19 04:04:47', '2022-11-19 04:04:47'),
(3, '18', '15', '8', '2022-11-19 04:05:47', '2022-11-19 04:05:47'),
(4, '36', '14', '5', '2022-11-19 04:06:07', '2022-11-19 04:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `ID` bigint(20) NOT NULL,
  `cust_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_id` bigint(255) DEFAULT NULL,
  `loan_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_scheme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_amount` varchar(255) NOT NULL,
  `loan_purpose` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(255) DEFAULT NULL COMMENT '0=request, 1=confirmed, 2=released, 3=completed, 4=denied',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`ID`, `cust_id`, `loan_id`, `loan_type`, `loan_scheme`, `loan_amount`, `loan_purpose`, `status`, `created_at`, `updated_at`) VALUES
(1, '737134044', 21587, '1', 'BPL', '650000', 'signh', 0, '2022-12-02 06:49:14', '2022-12-02 06:49:14'),
(2, '737134044', 12936, '1', 'BUL', '570000', 'Rsdkjs', 1, '2022-12-02 06:59:58', '2022-12-02 06:59:58'),
(3, '403594044', 61928, '1', 'BUL', '670000', 'asdasd', 2, '2022-12-03 02:29:12', '2022-12-03 02:29:12'),
(4, '816434044', 54023, '1', 'BUL', '640000', 'SDlisd', 3, '2022-12-03 02:38:26', '2022-12-03 02:38:26'),
(5, '667476048', 24266, 'Gold Loan', 'BUL', '650000', 'Pkklsuls', 4, '2022-12-03 03:01:40', '2022-12-03 03:01:40'),
(6, '816434044', 95199, 'Gold Loan', 'BUL', '350000', 'To Personal Use', 1, '2022-12-03 06:44:01', '2022-12-03 06:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `loanschemes`
--

CREATE TABLE `loanschemes` (
  `scheme_id` bigint(20) UNSIGNED NOT NULL,
  `scheme_code` varchar(255) NOT NULL,
  `scheme_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheme_minamount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheme_maxamount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheme_ltv_funding` varchar(255) NOT NULL,
  `scheme_per_grm_rate` varchar(255) NOT NULL,
  `scheme_applicable_intrest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheme_interest_computation` varchar(255) NOT NULL,
  `scheme_days` varchar(255) NOT NULL COMMENT '0 - 30',
  `scheme_days_over` varchar(255) NOT NULL COMMENT '61 - 90',
  `scheme_processing_fee` varchar(255) NOT NULL,
  `scheme_min_processing_fee` varchar(255) NOT NULL,
  `scheme__max_processing_fee` varchar(255) NOT NULL,
  `scheme_service_tax_gst` varchar(255) NOT NULL,
  `scheme_min_interest` varchar(255) NOT NULL,
  `scheme_minimum_loan_tenure` varchar(255) NOT NULL,
  `scheme_maximum_loan_tenure` varchar(255) NOT NULL,
  `scheme_grace_period` varchar(255) NOT NULL,
  `scheme_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheme_loan_review_period` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loanschemes`
--

INSERT INTO `loanschemes` (`scheme_id`, `scheme_code`, `scheme_name`, `scheme_minamount`, `scheme_maxamount`, `scheme_ltv_funding`, `scheme_per_grm_rate`, `scheme_applicable_intrest`, `scheme_interest_computation`, `scheme_days`, `scheme_days_over`, `scheme_processing_fee`, `scheme_min_processing_fee`, `scheme__max_processing_fee`, `scheme_service_tax_gst`, `scheme_min_interest`, `scheme_minimum_loan_tenure`, `scheme_maximum_loan_tenure`, `scheme_grace_period`, `scheme_type`, `scheme_loan_review_period`, `created_at`, `updated_at`) VALUES
(1, 'BUL', 'Basant Ultimate Loan(BUL)', '200000', '1000000', '75', 'By System', 'day1', 'Per Day Basis', '0 - 30', '61 - 90', '0.25', '250', '1000', '18', 'Rs.200', '7 Days', '360', '0 Days', 'Non-EMI', 'After 90 Days', NULL, NULL),
(2, 'BPL', 'Basant Premier Loan(BPL)', '100000', '1000000', '75', 'By System', 'day2', 'Per Day Basis', '0 - 30', '61 - 90', '0.25', '125', '750', '18', 'Rs.120', '7 Days', '360', '0 Days', 'Non-EMI', 'After 90 Days', NULL, NULL),
(3, 'BAL', 'Basant Advantage Loan(BAL)', '3000', '1000000', '75', 'By System', 'day1', 'Per Day Basis', '0 - 30', '61 - 90', '0.25', '100', '500', '18', 'Rs.100', '7 Days', '360', '0 Days', 'Non-EMI', 'After 90 Days', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `loan_type_id` bigint(20) UNSIGNED NOT NULL,
  `loan_type_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_type_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`loan_type_id`, `loan_type_name`, `loan_type_description`, `created_at`, `updated_at`) VALUES
(1, 'Gold Loan', 'Gold Ring', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `ID` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`ID`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_08_080156_create_page5s_table', 2),
(6, '2022_09_12_103232_create_customers_table', 3),
(7, '2022_09_16_044901_add_deleted_at_to_customers_table', 4),
(8, '2022_09_16_094800_create_services_table', 5),
(9, '2022_09_21_101011_create_page2s_table', 5),
(10, '2022_11_03_103324_create_customers_logs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `page2s`
--

CREATE TABLE `page2s` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schemedetails`
--

CREATE TABLE `schemedetails` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_long_term` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_term` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_mode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_loan_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_roi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_emi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_intrest_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schemedetails`
--

INSERT INTO `schemedetails` (`ID`, `product_name`, `product_long_term`, `product_term`, `product_mode`, `product_loan_amount`, `product_roi`, `product_emi`, `product_intrest_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gold', '365', '20', 'Online', '500000', '5000', '5000', '14%', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_purity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_current_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_offer_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shiva', 'shiva@gmail.com', NULL, '$2y$10$AP9lS8MircqkvHQgUBDDfew8CQHeaNJcfRfysfGZsukW4T9dB/1J2', 'eDrfiWgWR5yqhz9NmgcxB6of2pYCw8thoGIRxRIBxnTic3w3Ae3XCsb0yt6p', '2022-09-07 23:36:35', '2022-09-07 23:36:35'),
(2, 'Swati', 'swati@gmail.com', NULL, '$2y$10$hg.CQ/YxREfXTKxjS0Npnu1JaZyPtehuUVlO/TzKxotjzci2Y.sfK', NULL, '2022-09-08 00:23:29', '2022-09-08 00:23:29'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$zLNUUCFsTt5gT8ydO6gnqeZZmUUmfTfWYtMvRZrSn43HyAevfZnx2', NULL, '2022-09-08 22:50:27', '2022-09-08 22:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers_logs`
--
ALTER TABLE `customers_logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gold`
--
ALTER TABLE `gold`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `golds`
--
ALTER TABLE `golds`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loaninterestmasters`
--
ALTER TABLE `loaninterestmasters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `loanschemes`
--
ALTER TABLE `loanschemes`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`loan_type_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `page2s`
--
ALTER TABLE `page2s`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schemedetails`
--
ALTER TABLE `schemedetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `customers_logs`
--
ALTER TABLE `customers_logs`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gold`
--
ALTER TABLE `gold`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `golds`
--
ALTER TABLE `golds`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loaninterestmasters`
--
ALTER TABLE `loaninterestmasters`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loanschemes`
--
ALTER TABLE `loanschemes`
  MODIFY `scheme_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `loan_type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `page2s`
--
ALTER TABLE `page2s`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schemedetails`
--
ALTER TABLE `schemedetails`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
