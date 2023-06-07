-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 02:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentlibrary`
--
CREATE DATABASE IF NOT EXISTS `studentlibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `studentlibrary`;
-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `isbn`, `img_url`) VALUES
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', '9780743273565', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/The_Great_Gatsby_Cover_1925_Retouched.jpg/800px-The_Great_Gatsby_Cover_1925_Retouched.jpg'),
(2, 'To Kill a Mockingbird', 'Harper Lee', '9780061120084', 'https://upload.wikimedia.org/wikipedia/commons/4/4f/To_Kill_a_Mockingbird_%28first_edition_cover%29.jpg'),
(3, '1984', 'George Orwell', '9780451524935', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/1984first.jpg/800px-1984first.jpg'),
(4, 'Pride and Prejudice', 'Jane Austen', '9780141439518', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/PrideAndPrejudiceTitlePage.jpg/800px-PrideAndPrejudiceTitlePage.jpg'),
(5, 'Atomic Habits', 'James Clear', '9781847941831', 'https://a.scdn.gr/images/sku_main_images/025252/25252436/20220131162609_atomic_habits.jpeg'),
(8, 'The Remarkable Rocket', 'Oscar Wilde', '9788439286936', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTbXQdV945y7bMftJilBqG-d8bmBB0CUQCKxYGZhTj5Nn-TPJXg'),
(10, 'The Third Door', 'Alex Banayan', '9780804136662', 'https://m.media-amazon.com/images/I/71emwkgq0bL._AC_UF1000,1000_QL80_.jpg'),
(12, 'The 48 Laws of Power', 'Robert Greene', '9788423991815', 'https://m.media-amazon.com/images/I/411yaMigwbL._AC_UF1000,1000_QL80_.jpg'),
(13, 'Wuthering Heights', 'Emily Brontë', '9780553212587', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Houghton_Lowell_1238.5_%28A%29_-_Wuthering_Heights%2C_1847.jpg/800px-Houghton_Lowell_1238.5_%28A%29_-_Wuthering_Heights%2C_1847.jpg'),
(16, 'Animal Farm', 'George Orwell', '9780451526342', 'https://upload.wikimedia.org/wikipedia/commons/f/fb/Animal_Farm_-_1st_edition.jpg'),
(17, 'The Catcher in the Rye', 'J.D. Salinger', '9780316769488', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/The_Catcher_in_the_Rye_%281951%2C_first_edition_cover%29.jpg/800px-The_Catcher_in_the_Rye_%281951%2C_first_edition_cover%29.jpg'),
(20, 'Lord of the Flies', 'William Golding', '9780399501487', 'https://m.media-amazon.com/images/I/81WUAoL-wFL._AC_UF1000,1000_QL80_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `username`, `email`, `password`, `date_joined`) VALUES
(18, 'User One', 'user1', 'user1@gmail.com', '$2y$10$2vRsqMwG5HcyyuIuTSK.9.Am9BzgJh7c30r2xaCnXzBfYyWAGmeza', '2023-06-07 12:48:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `loans_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
