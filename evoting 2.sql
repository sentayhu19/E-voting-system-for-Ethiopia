CREATE TABLE `NEBE`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `NEBE_User_name` VARCHAR(255) NULL,
    `NEBE_password` VARCHAR(255) NULL
);
ALTER TABLE
    `NEBE` ADD PRIMARY KEY `nebe_id_primary`(`id`);
CREATE TABLE `Voter`(
    `Voter Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Voter_First_Name` VARCHAR(255) NOT NULL,
    `Voter_Last_Name` VARCHAR(255) NOT NULL,
    `Voter_gender` VARCHAR(255) NOT NULL,
    `Voter_sub_city` VARCHAR(255) NOT NULL,
    `Voter_password` VARCHAR(255) NOT NULL,
    `Voter_User name` VARCHAR(255) NOT NULL,
    `Voter_wereda` INT NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `Voter_ketena` INT NOT NULL
);
ALTER TABLE
    `Voter` ADD PRIMARY KEY `voter_voter id_primary`(`Voter Id`);
CREATE TABLE `View Result`(
    `Valid_count` VARCHAR(255) NOT NULL
);
CREATE TABLE `Polling Stations`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `station_id` INT NOT NULL,
    `station_wereda` INT NOT NULL,
    `station_user name` VARCHAR(255) NOT NULL,
    `station_password` VARCHAR(255) NOT NULL,
    `station_ketena` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Polling Stations` ADD PRIMARY KEY `polling stations_id_primary`(`id`);
CREATE TABLE `Individual candidates`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `candidate_id` INT NOT NULL,
    `candidate_symbol` VARCHAR(255) NOT NULL,
    `candidate_name` VARCHAR(255) NOT NULL,
    `candidates_password` VARCHAR(255) NOT NULL,
    `candidate_user_name` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Individual candidates` ADD PRIMARY KEY `individual candidates_id_primary`(`id`);
CREATE TABLE `Poltical Parties`(
    `party_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `party_symbol` BLOB NOT NULL,
    `party_name` VARCHAR(255) NOT NULL,
    `party_name_in_abbrivation` VARCHAR(255) NOT NULL,
    `party_password` INT NOT NULL,
    `party_user name` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Poltical Parties` ADD PRIMARY KEY `poltical parties_party_id_primary`(`party_id`);
CREATE TABLE `Constituency`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `region` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `Constituency` ADD PRIMARY KEY `constituency_id_primary`(`id`);
CREATE TABLE `Party Members`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `firstName` VARCHAR(255) NOT NULL,
    `fatherName` VARCHAR(255) NOT NULL,
    `picture` BLOB NOT NULL
);
ALTER TABLE
    `Party Members` ADD PRIMARY KEY `party members_id_primary`(`id`);
ALTER TABLE
    `View Result` ADD CONSTRAINT `view result_valid_count_foreign` FOREIGN KEY(`Valid_count`) REFERENCES `NEBE`(`id`);