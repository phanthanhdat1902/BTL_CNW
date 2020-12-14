

-- -----------------------------------------------------
-- Table `booking_db`.`cities`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`cities` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`cities` (
  `id_city` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `number_of_hotels` INT NULL DEFAULT 0,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_city`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`locations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`locations` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`locations` (
  `id_location` INT NOT NULL AUTO_INCREMENT,
  `country` VARCHAR(255) NULL DEFAULT NULL,
  `id_city` INT NOT NULL,
  `district` VARCHAR(255) NULL DEFAULT NULL,
  `street` VARCHAR(255) NULL DEFAULT NULL,
  `number` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_location`),
  INDEX `City-Location_idx` (`id_city` ASC)  ,
  CONSTRAINT `fk_locations_cities`
    FOREIGN KEY (`id_city`)
    REFERENCES `booking_db`.`cities` (`id_city`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`areas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`areas` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`areas` (
  `id_area` INT NOT NULL AUTO_INCREMENT,
  `id_city` INT NOT NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `number_of_hotels` INT NULL DEFAULT 0,
  PRIMARY KEY (`id_area`),
  INDEX `City-Area_idx` (`id_city` ASC)  ,
  CONSTRAINT `fk_areas_cities`
    FOREIGN KEY (`id_city`)
    REFERENCES `booking_db`.`cities` (`id_city`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`utilities`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`utilities` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`utilities` (
  `id_utility` INT NOT NULL AUTO_INCREMENT,
  `family_room` INT NULL DEFAULT NULL,
  `private_beach` INT NULL DEFAULT NULL,
  `car_park` INT NULL DEFAULT NULL,
  `pool` INT NULL DEFAULT NULL,
  `free_airport_transportation` INT NULL DEFAULT NULL,
  `children_amusement_park` INT NULL DEFAULT NULL,
  `package_service` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_utility`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`service_rooms`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`service_rooms` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`service_rooms` (
  `id_service` INT NOT NULL AUTO_INCREMENT,
  `free_breakfast` INT NULL DEFAULT NULL,
  `free_wifi` INT NULL DEFAULT NULL,
  `booking_cancelling` INT NULL DEFAULT NULL,
  `vat_included` INT NULL DEFAULT NULL,
  `free_transportation` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_service`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`theme_hotels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`theme_hotels` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`theme_hotels` (
  `id_theme` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `description` VARCHAR(255) NULL DEFAULT NULL,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  `number_of_hotels` INT NULL DEFAULT 0,
  PRIMARY KEY (`id_theme`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`type_of_hotels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`type_of_hotels` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`type_of_hotels` (
  `id_type_of_hotel` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  PRIMARY KEY (`id_type_of_hotel`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`hotels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`hotels` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`hotels` (
  `id_hotel` INT NOT NULL AUTO_INCREMENT,
  `id_location` INT NOT NULL,
  `id_area` INT NOT NULL,
  `id_utility` INT NOT NULL,
  `id_theme` INT NOT NULL DEFAULT 1,
  `id_type_of_hotel` INT NOT NULL DEFAULT 1,
  `title` VARCHAR(255) NULL DEFAULT NULL,
  `description` VARCHAR(255) NULL DEFAULT NULL,
  `term_checkin` VARCHAR(255) NULL DEFAULT NULL,
  `term_checkout` VARCHAR(255) NULL DEFAULT NULL,
  `term_transportation` LONGTEXT NULL DEFAULT NULL,
  `term_receiving_room` LONGTEXT NULL DEFAULT NULL,
  `term_entertainment` LONGTEXT NULL DEFAULT NULL,
  `term_surcharge` LONGTEXT NULL DEFAULT NULL,
  `term_note` LONGTEXT NULL DEFAULT NULL,
  `image_1` VARCHAR(255) NULL DEFAULT NULL,
  `image_2` VARCHAR(255) NULL DEFAULT NULL,
  `image_3` VARCHAR(255) NULL DEFAULT NULL,
  `image_4` VARCHAR(255) NULL DEFAULT NULL,
  `image_5` VARCHAR(255) NULL DEFAULT NULL,
  `video_linked` VARCHAR(255) NULL DEFAULT NULL,
  `score` FLOAT NULL DEFAULT 0.0,
  `number_of_reviews` INT NULL DEFAULT 0,
  PRIMARY KEY (`id_hotel`),
  INDEX `ID_Location_idx` (`id_location` ASC)  ,
  INDEX `ID_Area_idx` (`id_area` ASC)  ,
  INDEX `Utility--Hotel_idx` (`id_utility` ASC)  ,
  INDEX `hotel_has_theme_idx` (`id_theme` ASC)  ,
  INDEX `hotel_is_of_type_idx` (`id_type_of_hotel` ASC)  ,
  CONSTRAINT `fk_hotels_locations`
    FOREIGN KEY (`id_location`)
    REFERENCES `booking_db`.`locations` (`id_location`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_hotels_areas`
    FOREIGN KEY (`id_area`)
    REFERENCES `booking_db`.`areas` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_hotels_utilities`
    FOREIGN KEY (`id_utility`)
    REFERENCES `booking_db`.`utilities` (`id_utility`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_hotels_theme_hotels`
    FOREIGN KEY (`id_theme`)
    REFERENCES `booking_db`.`theme_hotels` (`id_theme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_hotels_type_of_hotels`
    FOREIGN KEY (`id_type_of_hotel`)
    REFERENCES `booking_db`.`type_of_hotels` (`id_type_of_hotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`type_of_views`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`type_of_views` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`type_of_views` (
  `id_type_of_view` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id_type_of_view`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`type_of_rooms`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`type_of_rooms` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`type_of_rooms` (
  `id_type_of_room` INT NOT NULL,
  `id_hotel` INT NOT NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `id_type_of_view` INT NOT NULL,
  `adult_capacity` INT NULL DEFAULT NULL,
  `children_capacity` INT NULL DEFAULT NULL,
  `size` INT NULL DEFAULT NULL,
  `type_of_bed` VARCHAR(255) NULL DEFAULT NULL,
  `type_of_toilet` VARCHAR(255) NULL DEFAULT NULL,
  `image` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_type_of_room`),
  INDEX `ID_Hotel_idx` (`id_hotel` ASC)  ,
  INDEX `type_of_room_has_type_of_view_idx` (`id_type_of_view` ASC)  ,
  CONSTRAINT `fk_type_of_rooms_hotels`
    FOREIGN KEY (`id_hotel`)
    REFERENCES `booking_db`.`hotels` (`id_hotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_type_of_rooms_type_of_views`
    FOREIGN KEY (`id_type_of_view`)
    REFERENCES `booking_db`.`type_of_views` (`id_type_of_view`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`packages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`packages` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`packages` (
  `id_type_of_room` INT NOT NULL,
  `id_service` INT NOT NULL,
  `price_per_night` CHAR(40) NULL DEFAULT NULL,
  PRIMARY KEY (`id_type_of_room`, `id_service`),
  INDEX `ID_Service_idx` (`id_service` ASC)  ,
  CONSTRAINT `fk_packages_service_rooms`
    FOREIGN KEY (`id_service`)
    REFERENCES `booking_db`.`service_rooms` (`id_service`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_packages_type_of_rooms`
    FOREIGN KEY (`id_type_of_room`)
    REFERENCES `booking_db`.`type_of_rooms` (`id_type_of_room`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`combos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`combos` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`combos` (
  `id_combo` INT NOT NULL AUTO_INCREMENT,
  `id_hotel` INT NOT NULL,
  `id_type_of_room` INT NOT NULL,
  `id_service` INT NOT NULL,
  `discount` INT NULL DEFAULT NULL,
  `start_date` DATE NULL DEFAULT NULL,
  `end_date` DATE NULL DEFAULT NULL,
  `minimum_number_of_rooms` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_combo`),
  INDEX `ID_Hotel_idx` (`id_hotel` ASC)  ,
  INDEX `ID_Service_idx` (`id_service` ASC, `id_type_of_room` ASC)  ,
  CONSTRAINT `fk_combos_hotels`
    FOREIGN KEY (`id_hotel`)
    REFERENCES `booking_db`.`hotels` (`id_hotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_combos_packages`
    FOREIGN KEY (`id_service` , `id_type_of_room`)
    REFERENCES `booking_db`.`packages` (`id_service` , `id_type_of_room`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`rooms`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`rooms` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`rooms` (
  `id_room` INT NOT NULL AUTO_INCREMENT,
  `id_type_of_room` INT NOT NULL,
  `id_hotel` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `availability` INT NULL,
  `checkin_date` DATE NULL DEFAULT NULL,
  `checkout_date` DATE NULL DEFAULT NULL,
  `note` LONGTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id_room`),
  INDEX `ID_Hotel_idx` (`id_hotel` ASC)  ,
  INDEX `ID_Type_Of_Room_idx` (`id_type_of_room` ASC)  ,
  CONSTRAINT `fk_rooms_hotels`
    FOREIGN KEY (`id_hotel`)
    REFERENCES `booking_db`.`hotels` (`id_hotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rooms_type_of_rooms`
    FOREIGN KEY (`id_type_of_room`)
    REFERENCES `booking_db`.`type_of_rooms` (`id_type_of_room`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`roles` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`roles` (
  `id_role` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`users` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `id_role` INT NOT NULL,
  `username` VARCHAR(16) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `google_account` VARCHAR(255) NULL DEFAULT NULL,
  `facebook_account` VARCHAR(255) NULL DEFAULT NULL,
  `create_time` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  INDEX `ID_Role_idx` (`id_role` ASC)  ,
  CONSTRAINT `fk_users_roles`
    FOREIGN KEY (`id_role`)
    REFERENCES `booking_db`.`roles` (`id_role`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`review_hotels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`review_hotels` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`review_hotels` (
  `id_user` INT NOT NULL,
  `id_hotel` INT NOT NULL,
  `score` INT NULL DEFAULT NULL,
  `content` LONGTEXT NULL DEFAULT NULL,
  `create_time` TIMESTAMP NULL DEFAULT NULL,
  INDEX `ID_User_idx` (`id_user` ASC)  ,
  INDEX `ID_Hotel_idx` (`id_hotel` ASC)  ,
  PRIMARY KEY (`id_user`, `id_hotel`),
  CONSTRAINT `fk_review_hotels_users`
    FOREIGN KEY (`id_user`)
    REFERENCES `booking_db`.`users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_review_hotels_hotels`
    FOREIGN KEY (`id_hotel`)
    REFERENCES `booking_db`.`hotels` (`id_hotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`tour_transportations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`tour_transportations` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`tour_transportations` (
  `id_transportation` INT NOT NULL AUTO_INCREMENT,
  `bus` INT NULL DEFAULT NULL,
  `train` INT NULL DEFAULT NULL,
  `airplane` INT NULL DEFAULT NULL,
  `ship` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_transportation`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`service_tours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`service_tours` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`service_tours` (
  `id_service` INT NOT NULL AUTO_INCREMENT,
  `tour_guide` INT NULL DEFAULT NULL,
  `insurance` INT NULL DEFAULT NULL,
  `meal` INT NULL DEFAULT NULL,
  `ticket` INT NULL DEFAULT NULL,
  `transportation` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id_service`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`theme_tours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`theme_tours` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`theme_tours` (
  `id_theme` INT NOT NULL,
  `name` VARCHAR(255) NULL,
  PRIMARY KEY (`id_theme`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`tours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`tours` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`tours` (
  `id_tour` INT NOT NULL AUTO_INCREMENT,
  `id_transportation` INT NOT NULL,
  `id_city` INT NOT NULL,
  `id_service` INT NOT NULL,
  `id_theme` INT NOT NULL,
  `score` FLOAT NULL DEFAULT NULL,
  `number_of_reviews` INT NULL DEFAULT NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `minimum_number_of_adults` INT NULL DEFAULT NULL,
  `code` VARCHAR(45) NULL DEFAULT NULL,
  `number_of_days` INT NULL DEFAULT NULL,
  `number_of_nights` INT NULL DEFAULT NULL,
  `link_to_description` VARCHAR(255) NULL DEFAULT NULL,
  `term_surcharge` LONGTEXT NULL DEFAULT NULL,
  `term_price_included` LONGTEXT NULL DEFAULT NULL,
  `term_price_not_included` LONGTEXT NULL DEFAULT NULL,
  `term_cancelling` LONGTEXT NULL DEFAULT NULL,
  `term_note` LONGTEXT NULL DEFAULT NULL,
  `term_single_room_surchage_price` CHAR(40) NULL DEFAULT NULL,
  `price_per_adult` CHAR(40) NULL DEFAULT NULL,
  `price_per_child` CHAR(40) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tour`),
  INDEX `tour_is_at_city_idx` (`id_city` ASC)  ,
  INDEX `tour_has_transporation_idx` (`id_transportation` ASC)  ,
  INDEX `tour_has_service_idx` (`id_service` ASC)  ,
  INDEX `fk_tours_theme_tours_idx` (`id_theme` ASC)  ,
  CONSTRAINT `fk_tours_tour_transportations`
    FOREIGN KEY (`id_transportation`)
    REFERENCES `booking_db`.`tour_transportations` (`id_transportation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tours_cities`
    FOREIGN KEY (`id_city`)
    REFERENCES `booking_db`.`cities` (`id_city`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tours_service_tours`
    FOREIGN KEY (`id_service`)
    REFERENCES `booking_db`.`service_tours` (`id_service`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tours_theme_tours`
    FOREIGN KEY (`id_theme`)
    REFERENCES `booking_db`.`theme_tours` (`id_theme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`review_tours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`review_tours` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`review_tours` (
  `id_user` INT NOT NULL,
  `id_tour` INT NOT NULL,
  `score` INT NULL DEFAULT NULL,
  `content` LONGTEXT NULL DEFAULT NULL,
  `create_time` TIMESTAMP NULL DEFAULT NULL,
  INDEX `review_is_written_by_user_idx` (`id_user` ASC)  ,
  INDEX `review_is_for_tour_idx` (`id_tour` ASC)  ,
  PRIMARY KEY (`id_tour`, `id_user`),
  CONSTRAINT `fk_review_tours_users`
    FOREIGN KEY (`id_user`)
    REFERENCES `booking_db`.`users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_review_tours_tours`
    FOREIGN KEY (`id_tour`)
    REFERENCES `booking_db`.`tours` (`id_tour`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`tour_consulting_requests`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`tour_consulting_requests` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`tour_consulting_requests` (
  `id_request` INT NOT NULL AUTO_INCREMENT,
  `hotel_name` VARCHAR(255) NULL DEFAULT NULL,
  `start_date` DATE NULL DEFAULT NULL,
  `end_date` DATE NULL DEFAULT NULL,
  `number_of_adults` INT NULL DEFAULT NULL,
  `number_of_children` INT NULL DEFAULT NULL,
  `note` LONGTEXT NULL DEFAULT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `phone_number` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_request`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`departures`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`departures` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`departures` (
  `id_departure` INT NOT NULL,
  `id_tour` INT NOT NULL,
  `start_date` DATE NULL DEFAULT NULL,
  `end_date` DATE NULL DEFAULT NULL,
  `holiday_surcharge` CHAR(40) NULL DEFAULT NULL,
  PRIMARY KEY (`id_departure`),
  INDEX `departture_is_for_tour_idx` (`id_tour` ASC)  ,
  CONSTRAINT `fk_departures_tours`
    FOREIGN KEY (`id_tour`)
    REFERENCES `booking_db`.`tours` (`id_tour`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`type_of_payments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`type_of_payments` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`type_of_payments` (
  `id_type_of_payment` INT NOT NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_type_of_payment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`order_hotels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`order_hotels` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`order_hotels` (
  `id_order` INT NOT NULL,
  `id_user` INT NOT NULL,
  `id_type_of_room` INT NOT NULL,
  `id_service` INT NOT NULL,
  `id_type_of_payment` INT NOT NULL,
  `id_hotel` INT NOT NULL,
  `price` CHAR(40) NULL DEFAULT NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `phone_number` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `note` LONGTEXT NULL DEFAULT NULL,
  `number_of_adult` INT NULL DEFAULT NULL,
  `number_of_chidren` INT NULL DEFAULT NULL,
  `start_date` DATE NULL DEFAULT NULL,
  `end_date` DATE NULL DEFAULT NULL,
  `status` INT NULL,
  PRIMARY KEY (`id_order`),
  INDEX `order_is_of_user_idx` (`id_user` ASC)  ,
  INDEX `order_is_of_hotel_idx` (`id_hotel` ASC)  ,
  INDEX `order_is_of_type_of_rooom_idx` (`id_type_of_room` ASC, `id_service` ASC)  ,
  INDEX `order_has_type_of_payment_idx` (`id_type_of_payment` ASC)  ,
  CONSTRAINT `fk_order_hotels_users`
    FOREIGN KEY (`id_user`)
    REFERENCES `booking_db`.`users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_hotels_hotels`
    FOREIGN KEY (`id_hotel`)
    REFERENCES `booking_db`.`hotels` (`id_hotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_hotels_packages`
    FOREIGN KEY (`id_type_of_room` , `id_service`)
    REFERENCES `booking_db`.`packages` (`id_type_of_room` , `id_service`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_hotels_type_of_payments`
    FOREIGN KEY (`id_type_of_payment`)
    REFERENCES `booking_db`.`type_of_payments` (`id_type_of_payment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`order_tours`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`order_tours` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`order_tours` (
  `id_order` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `id_tour` INT NOT NULL,
  `id_type_of_payment` INT NOT NULL,
  `number_of_adults` INT NULL DEFAULT NULL,
  `number_of_children` INT NULL DEFAULT NULL,
  `start_date` DATE NULL DEFAULT NULL,
  `end_date` DATE NULL DEFAULT NULL,
  `price` VARCHAR(40) NULL DEFAULT NULL,
  `name` VARCHAR(255) NULL DEFAULT NULL,
  `phone_number` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `note` LONGTEXT NULL DEFAULT NULL,
  `status` INT NULL,
  PRIMARY KEY (`id_order`),
  INDEX `order_is_of_user_idx` (`id_user` ASC)  ,
  INDEX `order_is_of_tour_idx` (`id_tour` ASC)  ,
  INDEX `order_has_type_of_payment_idx` (`id_type_of_payment` ASC)  ,
  CONSTRAINT `fk_order_tours_users`
    FOREIGN KEY (`id_user`)
    REFERENCES `booking_db`.`users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_tours_tours`
    FOREIGN KEY (`id_tour`)
    REFERENCES `booking_db`.`tours` (`id_tour`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_tours_type_of_payments`
    FOREIGN KEY (`id_type_of_payment`)
    REFERENCES `booking_db`.`type_of_payments` (`id_type_of_payment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `booking_db`.`starter_packages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `booking_db`.`starter_packages` ;

CREATE TABLE IF NOT EXISTS `booking_db`.`starter_packages` (
  `id_hotel` INT NOT NULL,
  `id_type_of_room` INT NOT NULL,
  `id_service` INT NOT NULL,
  PRIMARY KEY (`id_hotel`, `id_type_of_room`, `id_service`),
  INDEX `fk_starter_packages_packages_idx` (`id_type_of_room` ASC, `id_service` ASC)  ,
  CONSTRAINT `fk_starter_packages_hotels`
    FOREIGN KEY (`id_hotel`)
    REFERENCES `booking_db`.`hotels` (`id_hotel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_starter_packages_packages`
    FOREIGN KEY (`id_type_of_room` , `id_service`)
    REFERENCES `booking_db`.`packages` (`id_type_of_room` , `id_service`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `booking_db`;

DELIMITER $$

USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`hotels_AFTER_INSERT` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`hotels_AFTER_INSERT` AFTER INSERT ON `hotels` FOR EACH ROW
BEGIN
	declare rowcount int;
    
    select count(*)
    into rowcount
    from areas
    where areas.id_area = new.id_area and areas.number_of_hotels is null;
    
	if rowcount > 0 then
        update areas
		set areas.number_of_hotels = 1
		where new.id_area = areas.id_area;
    else
        update areas
		set areas.number_of_hotels = areas.number_of_hotels+1
		where new.id_area = areas.id_area;
    end if; 
    
    select count(*)
    into rowcount
    from cities
    where ( select id_city from new join locations on new.id_location = locations.id_location) = cities.id_city
			and cities.number_of_hotels is null;
    
    if rowcount > 0 then
        update cities
		set cities.number_of_hotels = 1
		where ( select id_city from new join locations on new.id_location = locations.id_location) = cities.id_city;
    else
		update cities
		set cities.number_of_hotels = cities.number_of_hotels+1
		where ( select id_city from new join locations on new.id_location = locations.id_location) = cities.id_city;
    end if; 
    
    select count(*)
    into rowcount
    from theme_hotels
    where theme_hotels.id_theme = new.id_theme and theme_hotels.number_of_hotels is null;
    
    if rowcount > 0 then
        update theme_hotels
		set theme_hotels.number_of_hotels = 1
		where new.id_theme = theme_hotels.id_theme;
    else
		update theme_hotels
		set theme_hotels.number_of_hotels = theme_hotels.number_of_hotels+1
		where new.id_theme = theme_hotels.id_theme;
    end if; 
END$$


USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`hotels_BEFORE_DELETE` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`hotels_BEFORE_DELETE` BEFORE DELETE ON `hotels` FOR EACH ROW
BEGIN
    update areas
    set areas.number_of_hotels = areas.number_of_hotels-1
	where old.id_area = areas.id_area;
    
    update cities
    set cities.number_of_hotels = cities.number_of_hotels-1
    where ( select id_city from old join locations on old.id_location = locations.id_location) = cities.id_city;
    
    update hotel_themes
    set hotel_themes.number_of_hotels = hotel_themes.number_of_hotels-1
	where old.id_theme = hotel_themes.id_theme;
END$$


USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`review_hotels_AFTER_INSERT` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`review_hotels_AFTER_INSERT` AFTER INSERT ON `review_hotels` FOR EACH ROW
BEGIN
	update hotels
    set hotels.score = (hotels.score*hotels.number_of_reviews + new.score) 
                       / (hotels.number_of_reviews+1)
	where hotels.id_hotel = new.id_hotel;
    
    update hotels
    set hotels.number_of_reviews = hotels.number_of_reviews+1
    where hotels.id_hotel = new.id_hotel;
END$$


USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`review_hotels_BEFORE_UPDATE` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`review_hotels_BEFORE_UPDATE` BEFORE UPDATE ON `review_hotels` FOR EACH ROW
BEGIN
	update hotels
    set hotels.score = (hotels.score*hotels.number_of_reviews - old.score + new.score) 
                       / (hotels.number_of_reviews)
	where hotels.id_hotel = old.id_hotel;
END$$


USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`review_hotels_BEFORE_DELETE` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`review_hotels_BEFORE_DELETE` BEFORE DELETE ON `review_hotels` FOR EACH ROW
BEGIN
	update hotels
    set hotels.score = (hotels.score*hotels.number_of_reviews - old.score) 
                       / (hotels.number_of_reviews-1)
	where hotels.id_hotel = old.id_hotel;
    
    update hotels
    set hotels.number_of_reviews = hotels.number_of_reviews-1
    where hotels.id_hotel = old.id_hotel;
END$$


USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`review_tours_AFTER_INSERT` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`review_tours_AFTER_INSERT` AFTER INSERT ON `review_tours` FOR EACH ROW
BEGIN
	update tours
    set tours.score = (tours.score*tours.number_of_reviews + new.score) 
                       / (tours.number_of_reviews+1)
	where tours.id_tour = new.id_tour;
    
    update tours
    set tours.number_of_reviews = tours.number_of_reviews+1
    where tours.id_tour = new.id_tour;
END$$


USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`review_tours_BEFORE_UPDATE` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`review_tours_BEFORE_UPDATE` BEFORE UPDATE ON `review_tours` FOR EACH ROW
BEGIN
	update tours
    set tours.score = (tours.score*tours.number_of_reviews - old.score + new.score) 
                       / (tours.number_of_reviews)
	where tours.id_tour = old.id_tour;
END$$


USE `booking_db`$$
DROP TRIGGER IF EXISTS `booking_db`.`review_tours_BEFORE_DELETE` $$
USE `booking_db`$$
CREATE DEFINER = CURRENT_USER TRIGGER `booking_db`.`review_tours_BEFORE_DELETE` BEFORE DELETE ON `review_tours` FOR EACH ROW
BEGIN
	update tours
    set tours.score = (tours.score*tours.number_of_reviews - old.score) 
                       / (tours.number_of_reviews-1)
	where tours.id_tour = old.id_tour;
    
    update tours
    set tours.number_of_reviews = tours.number_of_reviews-1
    where tours.id_tour = old.id_tour;
END$$


DELIMITER ;
