



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admindatabase` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--- Dumping data for table `admindatabase`
INSERT INTO `admindatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Joined_on`) VALUES
(1, 'Admin', 'admin@gmail.com', 'M', '1234567', '2000-10-17', '2021-08-14 18:30:00');



-- Table for userdatabase

CREATE TABLE `userdatabase` {
 `UserID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
}ENGINE=InnoDB DEFAULT CHARSET=latin1;

--- Dumping data for table `userdatabase`

INSERT INTO `userdatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Phone`, `Joined_on`)VALUES
(48, 'John', 'john@gmail.com', 'M', '1234', '2001-04-11', '4578962148', '2021-08-23 15:01:08'),
(49, 'Parker', 'parker@gmail.com', 'M', '45paker', '2005-05-06', '7943258617', '2021-08-23 15:02:49'),
(50, 'Nikita', 'nikita25@gmail.com', 'M', 'nikita26', '1999-06-09', '7718649523', '2021-08-23 15:04:02');


-- Indexes for table `userdatabase`
ALTER TABLE `userdatabase`
ADD PRIMARY KEY (`UserID`)
ADD UNIQUE KEY `Email`(`Email`);



ALTER TABLE `userdatabase`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;