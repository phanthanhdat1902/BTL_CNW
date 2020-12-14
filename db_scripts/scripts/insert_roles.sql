-- -----------------------------------------------------
-- Data for table `booking_db`.`roles`
-- -----------------------------------------------------
START TRANSACTION;
USE `booking_db`;
INSERT INTO `booking_db`.`roles` (`name`) VALUES ('admin');
INSERT INTO `booking_db`.`roles` (`name`) VALUES ('hotel manager');
INSERT INTO `booking_db`.`roles` (`name`) VALUES ('hotel reservation clerk');
INSERT INTO `booking_db`.`roles` (`name`) VALUES ('tour manager');
INSERT INTO `booking_db`.`roles` (`name`) VALUES ('tour reservation clerk');
INSERT INTO `booking_db`.`roles` (`name`) VALUES ('tour advisor');

COMMIT;