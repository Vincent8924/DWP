SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `order` (
  `booking_date` DATE NOT NULL,
  `check_in` DATE NOT NULL,
  `check_out` DATE NOT NULL,
  `days` INT NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `total_price` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;