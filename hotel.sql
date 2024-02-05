SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Contact` (
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Comment` (
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `room_type` varchar(200) NOT NULL,
  `rating` int NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `room_status` (
  `room_no` INT NOT NULL PRIMARY KEY,
  `room_type` varchar(100) NOT NULL,
  `room_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Rating/Comment` (
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `rating` int NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `room_category` (
  `room_type` varchar(100) NOT NULL,
  `room_quantity` INT NOT NULL,
  `picture` varchar(100) NOT NULL,
  `price ` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `room_category`(`room_type`, `room_quantity`, `picture`, `price`) 
VALUES 
  ('Presidential Suite', '5', 'room a/room a 1.png', '500'),
  ('Specialty Suite', '5', 'room b/room b 1.png', '400'),
  ('Executive Suite', '5', 'room c/room c 1.png', '300'),
  ('Club Premier Room', '5', 'room d/room d 1.png', '200'),
  ('Deluxe Rooms', '5', 'room e/room e 1.png', '100');

CREATE TABLE `order` (
  `room_type` varchar(100) NOT NULL,
  `booking_date` DATE NOT NULL,
  `check_in` DATE NOT NULL,
  `check_out` DATE NOT NULL,
  `days` INT NOT NULL,
  `total_price` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user_order`(
`first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `booking_date` DATE NOT NULL,
  `check_in` DATE NOT NULL,
  `check_out` DATE NOT NULL,
  `days` INT NOT NULL,
  `method` varchar(200) NOT NULL,
  `price` INT NOT NULL
)


