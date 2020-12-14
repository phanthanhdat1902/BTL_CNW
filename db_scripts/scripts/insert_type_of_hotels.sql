-- -----------------------------------------------------
-- Data for table `booking_db`.`type_of_hotels`
-- -----------------------------------------------------
START TRANSACTION;
USE `booking_db`;
INSERT INTO `booking_db`.`type_of_hotels` (`name`) VALUES ('Khu nghỉ dưỡng (Resort)');
INSERT INTO `booking_db`.`type_of_hotels` (`name`) VALUES ('Biệt thự (Villa)');
INSERT INTO `booking_db`.`type_of_hotels` (`name`) VALUES ('Khách sạn (Hotel)');
INSERT INTO `booking_db`.`type_of_hotels` (`name`) VALUES ('Căn hộ (Apartment)');
INSERT INTO `booking_db`.`type_of_hotels` (`name`) VALUES ('Du thuyền (Cruise)');
INSERT INTO `booking_db`.`type_of_hotels` (`name`) VALUES ('Nhà nghỉ (Guest house, Homestay, ...)');

COMMIT;