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
  `room_no` varchar(100) NOT NULL PRIMARY KEY,
  `room_type` varchar(100) NOT NULL,
  `room_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `rating/comment` (
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
  `price` INT NOT NULL,
  `page ` varchar(200),
  `comment` varchar(500)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `admin` (
  `adminID` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) NOT NULL,
  `adminlastname` varchar(255) NOT NULL,
  `adminage` int(3) NOT NULL,
  `adminemail` varchar(255) NOT NULL,
  `admincontactnum` int(15) NOT NULL,
  `adminpassword` varchar(255) NOT NULL,  
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `member` (
  `UserID` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `UserLastName` varchar(255) NOT NULL,
  `UserEmail` varchar(255) NOT NULL,
  `UserPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `room_category`(`room_type`, `room_quantity`, `picture`, `price`,`page`,`comment`) 
VALUES 
  ('Presidential Suite', '5', 'room a/room a 1.png', '500','a room.php',
  'The space in the suite is 224 sqm / 2,411 sqf.<br/>
  <br/>
  The Club Lounge is open to guests and offers all of its amenities.'),

  ('Specialty Suite', '5', 'room b/room b 1.png', '400','b room.php',
  'There is 104 sqm / 1,119 sqf of flexibility in each suite.<br/>
  <br/>
  Gorgeous vistas of the garden.'),

  ('Executive Suite', '5', 'room c/room c 1.png', '300','c room.php',
  'There is 68 sqm / 731 sqf of independence in each suite.<br/>
  <br/>
  Each Executive Suite, which ranges in floor count from 12 to 19, features a roomy and cosy lounge and dining area.'),
  
  ('Club Premier Room', '5', 'room d/room d 1.png', '200','d room.php',
  'There is 52 sqm / 560 sqf of space available each room.<br/>
  <br/>
  Expansive vistas of city.'),

  ('Deluxe Rooms', '5', 'room e/room e 1.png', '100','e room.php',
  'There is 34 sqm / 365 sqf of independence in each room.<br/>
  <br/>
  Amazing views of the city.');


CREATE TABLE `user_order` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`first_name` varchar(200) NOT NULL,
	`last_name` varchar(200) NOT NULL,
	`room_type` varchar(100) NOT NULL,
	`booking_date` DATE NOT NULL,
	`check_in` DATE NOT NULL,
	`check_out` DATE NOT NULL,
	`days` INT NOT NULL,
	`method` varchar(200) NOT NULL,
	`price` INT NOT NULL,
	PRIMARY KEY (`id`)
);





