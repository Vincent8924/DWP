SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `room_category` (
  `room_type` varchar(100) NOT NULL,
  `room_quantity` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;