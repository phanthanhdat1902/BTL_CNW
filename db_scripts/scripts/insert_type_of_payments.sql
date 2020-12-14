-- -----------------------------------------------------
-- Data for table `booking_db`.`type_of_payments`
-- -----------------------------------------------------
START TRANSACTION;
USE `booking_db`;
INSERT INTO `booking_db`.`type_of_payments` (`name`) VALUES ('Tiền mặt');
INSERT INTO `booking_db`.`type_of_payments` (`name`) VALUES ('Chuyển khoản');
INSERT INTO `booking_db`.`type_of_payments` (`name`) VALUES ('Ví điện tử');
INSERT INTO `booking_db`.`type_of_payments` (`name`) VALUES ('Thẻ Tín dụng/Ghi nợ');

COMMIT;