SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Payment` (
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `method` varchar(200) NOT NULL,
  `card_name` varchar(200) NOT NULL,
  `card_number` int(200) NOT NULL,
  `card_expire_date` varchar(200) NOT NULL,
  `card_CVV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
