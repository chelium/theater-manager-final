SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `theaterdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `movies` (
  `name` varchar(50) NOT NULL,
  `prices_key` int(11) NOT NULL,
  `theaters_key` int(11) NOT NULL,
  `schedules_key` int(11) NOT NULL,
  `revenues_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
