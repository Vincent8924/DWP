SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `room_category` (
  `room_type` varchar(100) NOT NULL,
  `room_quantity` INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `room_category`(`room_type`, `room_quantity`, `picture`, `price`) 
VALUES ('Presidential Suite','5','room a/room a 1.png','500')

INSERT INTO `room_category`(`room_type`, `room_quantity`, `picture`, `price`) 
VALUES ('Specialty Suite','5','room b/room b 1.png','400')

INSERT INTO `room_category`(`room_type`, `room_quantity`, `picture`, `price`) 
VALUES ('Executive Suite','5','room c/room c 1.png','300')

INSERT INTO `room_category`(`room_type`, `room_quantity`, `picture`, `price`) 
VALUES ('Club Premier Room','5','room d/room d 1.png','200')

INSERT INTO `room_category`(`room_type`, `room_quantity`, `picture`, `price`) 
VALUES ('Deluxe Rooms','5','room e/room e 1.png','100')