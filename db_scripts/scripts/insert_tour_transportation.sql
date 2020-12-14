-- -----------------------------------------------------
-- Data for table `booking_db`.`tour_transportations`
-- -----------------------------------------------------
START TRANSACTION;
USE `booking_db`;
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 0, 0, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 0, 0, 1);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 0, 1, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 0, 1, 1);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 1, 0, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 1, 0, 1);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 1, 1, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (0, 1, 1, 1);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 0, 0, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 0, 0, 1);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 0, 1, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 0, 1, 1);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 1, 0, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 1, 0, 1);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 1, 1, 0);
INSERT INTO `booking_db`.`tour_transportations` (`bus`, `train`, `airplane`, `ship`) VALUES (1, 1, 1, 1);

COMMIT;