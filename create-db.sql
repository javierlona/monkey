CREATE DATABASE MONKEDIA;

USE MONKEDIA;

create table CLIENTS (
	id VARCHAR(10) NOT NULL,
	company_name VARCHAR(150) NOT NULL,
		CONSTRAINT clients_id_pk PRIMARY KEY (id),
		CONSTRAINT clients_id_uk UNIQUE (id)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into CLIENTS (id, company_name) values ('14-9669507', 'Howe, Kuhic and Stoltenberg');
insert into CLIENTS (id, company_name) values ('39-9771484', 'Klocko, Huel and Rosenbaum');
insert into CLIENTS (id, company_name) values ('61-1496867', 'Swaniawski, Toy and Schmitt');
insert into CLIENTS (id, company_name) values ('25-4445517', 'Waelchi, Lang and Upton');
insert into CLIENTS (id, company_name) values ('62-7816562', 'Thiel, Klein and West');
insert into CLIENTS (id, company_name) values ('57-4633139', 'Olson LLC');
insert into CLIENTS (id, company_name) values ('76-3496764', 'Mayer LLC');
insert into CLIENTS (id, company_name) values ('21-2440854', 'Beier-Zulauf');
insert into CLIENTS (id, company_name) values ('10-6095255', 'Rau, Legros and Kuhn');
insert into CLIENTS (id, company_name) values ('10-5859348', 'Lemke-Fay');
insert into CLIENTS (id, company_name) values ('23-3624304', 'Shields Inc');
insert into CLIENTS (id, company_name) values ('74-3063994', 'Bauch-Schaden');
insert into CLIENTS (id, company_name) values ('68-2844981', 'Thiel-Hackett');
insert into CLIENTS (id, company_name) values ('41-1903635', 'Fritsch, Herman and Willms');
insert into CLIENTS (id, company_name) values ('86-0737835', 'McGlynn-Hartmann');
insert into CLIENTS (id, company_name) values ('23-7049456', 'Barrows, Farrell and Hickle');
insert into CLIENTS (id, company_name) values ('40-6610893', 'Shields, Rippin and Fisher');
insert into CLIENTS (id, company_name) values ('95-8956669', 'Bogisich LLC');
insert into CLIENTS (id, company_name) values ('68-4250649', 'Kling Inc');
insert into CLIENTS (id, company_name) values ('34-7981071', 'Larkin LLC');
insert into CLIENTS (id, company_name) values ('12-1904106', 'Kovacek, Kunze and O''Conner');
insert into CLIENTS (id, company_name) values ('45-7541466', 'Lemke LLC');
insert into CLIENTS (id, company_name) values ('99-9108667', 'Lemke, Swift and Rath');
insert into CLIENTS (id, company_name) values ('96-7555787', 'Blick Inc');
insert into CLIENTS (id, company_name) values ('26-8110674', 'Hessel and Sons');
insert into CLIENTS (id, company_name) values ('40-4791334', 'Marvin, Mills and Kunde');
insert into CLIENTS (id, company_name) values ('43-6219639', 'Gottlieb Inc');
insert into CLIENTS (id, company_name) values ('36-4526367', 'Tillman, Muller and Blick');
insert into CLIENTS (id, company_name) values ('81-3055719', 'Rempel LLC');
insert into CLIENTS (id, company_name) values ('07-7519133', 'Kreiger, Kris and Sporer');
insert into CLIENTS (id, company_name) values ('56-6638418', 'Luettgen-Adams');
insert into CLIENTS (id, company_name) values ('96-3853881', 'Franecki-Pfeffer');
insert into CLIENTS (id, company_name) values ('01-2858707', 'Durgan, Kshlerin and Hodkiewicz');
insert into CLIENTS (id, company_name) values ('04-6997469', 'Ratke, Strosin and Schamberger');
insert into CLIENTS (id, company_name) values ('84-8529283', 'Boyer Group');
insert into CLIENTS (id, company_name) values ('63-9132309', 'Muller and Sons');
insert into CLIENTS (id, company_name) values ('62-8476135', 'Yost LLC');
insert into CLIENTS (id, company_name) values ('68-1975451', 'Hammes and Sons');
insert into CLIENTS (id, company_name) values ('70-1771896', 'Bashirian, Konopelski and Kozey');
insert into CLIENTS (id, company_name) values ('68-4752869', 'Turcotte-Powlowski');
insert into CLIENTS (id, company_name) values ('41-5896593', 'Will, Feeney and Buckridge');
insert into CLIENTS (id, company_name) values ('47-8508664', 'Kuhic-Krajcik');
insert into CLIENTS (id, company_name) values ('78-8111868', 'Douglas-Corkery');
insert into CLIENTS (id, company_name) values ('55-1735228', 'Gibson-Waters');
insert into CLIENTS (id, company_name) values ('75-9880865', 'Stamm, Nader and Leuschke');
insert into CLIENTS (id, company_name) values ('91-9401863', 'Monahan, Runolfsdottir and Dickens');
insert into CLIENTS (id, company_name) values ('41-4602471', 'Runolfsdottir-Collier');
insert into CLIENTS (id, company_name) values ('27-6997787', 'Lueilwitz Inc');
insert into CLIENTS (id, company_name) values ('08-5408046', 'Connelly Inc');
insert into CLIENTS (id, company_name) values ('60-9692497', 'Mann, Thiel and Larkin');
insert into CLIENTS (id, company_name) values ('07-9280189', 'Bednar Group');
insert into CLIENTS (id, company_name) values ('11-1038369', 'Lindgren-Pfeffer');
insert into CLIENTS (id, company_name) values ('29-8744750', 'Torp, Aufderhar and Waelchi');
insert into CLIENTS (id, company_name) values ('70-2146913', 'Kessler, Mills and Wilkinson');
insert into CLIENTS (id, company_name) values ('35-8448586', 'Schiller-Bradtke');
insert into CLIENTS (id, company_name) values ('18-2529173', 'Feeney Inc');
insert into CLIENTS (id, company_name) values ('03-1543149', 'Borer-Kessler');
insert into CLIENTS (id, company_name) values ('78-5215090', 'Schultz LLC');
insert into CLIENTS (id, company_name) values ('21-8465180', 'Jaskolski Inc');
insert into CLIENTS (id, company_name) values ('71-7268476', 'Keeling, Shields and Ernser');
insert into CLIENTS (id, company_name) values ('54-7580574', 'Simonis-Reichel');
insert into CLIENTS (id, company_name) values ('98-9955825', 'Hirthe Group');
insert into CLIENTS (id, company_name) values ('08-9906212', 'Weimann, Nader and Crooks');
insert into CLIENTS (id, company_name) values ('29-6595093', 'Hermann Group');
insert into CLIENTS (id, company_name) values ('30-0534542', 'Morar, Thompson and Willms');
insert into CLIENTS (id, company_name) values ('83-7315132', 'Hane-Beahan');
insert into CLIENTS (id, company_name) values ('14-0552780', 'Durgan-Turner');
insert into CLIENTS (id, company_name) values ('82-4453718', 'Reynolds and Sons');
insert into CLIENTS (id, company_name) values ('77-5325593', 'Medhurst-Heidenreich');
insert into CLIENTS (id, company_name) values ('14-8984590', 'Collins, Von and Kozey');
insert into CLIENTS (id, company_name) values ('62-8157754', 'Nienow Group');
insert into CLIENTS (id, company_name) values ('36-2404164', 'Borer Group');
insert into CLIENTS (id, company_name) values ('54-7720509', 'Denesik, Cassin and Raynor');
insert into CLIENTS (id, company_name) values ('16-8960017', 'Johnson and Sons');
insert into CLIENTS (id, company_name) values ('90-7122200', 'Grady, Ferry and Bauch');
insert into CLIENTS (id, company_name) values ('54-6784707', 'Turner-Terry');
insert into CLIENTS (id, company_name) values ('17-8566277', 'Ritchie, Heidenreich and Walsh');
insert into CLIENTS (id, company_name) values ('21-0228856', 'Bahringer-Green');
insert into CLIENTS (id, company_name) values ('81-1349759', 'Stark, Zboncak and Thiel');
insert into CLIENTS (id, company_name) values ('52-2732531', 'Hills-Wehner');
insert into CLIENTS (id, company_name) values ('03-9743818', 'Medhurst-Haag');
insert into CLIENTS (id, company_name) values ('00-4263223', 'Doyle-Nitzsche');
insert into CLIENTS (id, company_name) values ('14-2594523', 'Donnelly Inc');
insert into CLIENTS (id, company_name) values ('00-8278237', 'Hoppe, Jerde and Goyette');
insert into CLIENTS (id, company_name) values ('24-6157983', 'Hickle and Sons');
insert into CLIENTS (id, company_name) values ('59-8085523', 'Friesen-Grant');
insert into CLIENTS (id, company_name) values ('04-8360407', 'Funk-Raynor');
insert into CLIENTS (id, company_name) values ('11-4998362', 'Stanton Inc');
insert into CLIENTS (id, company_name) values ('15-5028572', 'Zemlak, Purdy and Douglas');
insert into CLIENTS (id, company_name) values ('70-4949605', 'Morissette-Thompson');
insert into CLIENTS (id, company_name) values ('01-5177135', 'Collins, Bradtke and Bednar');
insert into CLIENTS (id, company_name) values ('07-2562322', 'Gorczany LLC');
insert into CLIENTS (id, company_name) values ('58-2226916', 'Stoltenberg, Hauck and Zulauf');
insert into CLIENTS (id, company_name) values ('44-3184568', 'Jast and Sons');
insert into CLIENTS (id, company_name) values ('60-2960878', 'Beier Inc');
insert into CLIENTS (id, company_name) values ('97-1145392', 'Beatty, Mertz and Armstrong');
insert into CLIENTS (id, company_name) values ('89-5724198', 'Bogan and Sons');
insert into CLIENTS (id, company_name) values ('69-8714698', 'Ziemann-Walker');
insert into CLIENTS (id, company_name) values ('71-5774084', 'Hane Inc');
insert into CLIENTS (id, company_name) values ('81-9894662', 'Halvorson-Wilderman');

CREATE TABLE ADMINS (
  admin_id INT(11) NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  hashed_password VARCHAR(255) NOT NULL,
    CONSTRAINT admins_id_pk PRIMARY KEY (admin_id),
		CONSTRAINT email_uk UNIQUE (email),
		CONSTRAINT username_uk UNIQUE (username)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO ADMINS
  VALUES('0', 'Monkey', 'Monkedia', 'mmonkedia@gmail.com', 'monkey', '$2y$10$fHnIaV4PF/M3QwRAdo.70eCt6dXKQvi1LshqNkurfZuHxVoDLHxmC');

ALTER TABLE ADMINS ADD INDEX username_idx (username);

ALTER DATABASE MONKEDIA CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE USER 'monkey'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON MONKEDIA.* TO 'monkey'@'localhost';
FLUSH PRIVILEGES;
