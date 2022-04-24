/*The name for the database is 'bravebank'
And everything that is entered into the 
the database should resemble this exactly. */

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/* 
Enter the information below for the table `transaction`
*/

CREATE TABLE `transaction` (
  `sno` int(4) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*Enter this for the table `users`
*/


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Below is dumping putting data for the `users` table
*/

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Thomas', 'thomas@gmail.com', 50000),
(2, 'Bradford', 'bradford@gmail.com', 30000),
(3, 'Cody', 'cody@gmail.com', 40000),
(4, 'Bill', 'bill@gmail.com', 50000),
(5, 'Phill', 'phill@gmail.com', 40000),
(6, 'Jake', 'jake@gmail.com', 30000),
(7, 'Jack', 'jack@gmail.com', 50000),
(8, 'Ken', 'ken@gmail.com', 40000),
(9, 'Finley', 'finley@gmail.com', 30000),
(10, 'Kennedy', 'kennedy@gmail.com', 50000);

/*The indexes for the dumped tables
*
*
*  The indexes for table `transaction`
*/

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


/* 
The indexes for the `users` table
*/

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/* The "AUTO_INCREMENT" for the dumped tables
   For "AUTO_INCREMENT" is used for whenver
   a new table should be generated as new 
   records are put into tables.
   The "AUTO_INCREMENT" for table `transaction` below
*/

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

-- The AUTO_INCREMENT for table `users`

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*
This code below is for the admin part of the website.
*/

CREATE TABLE `bravebank_admins` (
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `eMail` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  'password' char(64) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `hash_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


