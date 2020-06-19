CREATE DATABASE db_utspop;

CREATE TABLE tb_album (
	album_id INT(11) NOT NULL AUTO_INCREMENT,
	album_name VARCHAR(100) DEFAULT NULL,
	album_text VARCHAR(100) DEFAULT NULL,
	photo_id INT(11) DEFAULT NULL,
	PRIMARY KEY(album_id),
	FOREIGN KEY(photo_id) REFERENCES tb_photos(photo_id)
);


CREATE TABLE tb_photos (
	photo_id INT(11) NOT NULL AUTO_INCREMENT,
	photo_date date DEFAULT NULL,
	photo_title VARCHAR(100) DEFAULT NULL,
	photo_text text DEFAULT NULL,
	post_id INT(11) NOT NULL,
	PRIMARY KEY(poto_id),
	FOREIGN KEY(post_id) REFERENCES tb_post(post_id)
);




CREATE TABLE tb_post (
	post_id INT(11) NOT NULL AUTO_INCREMENT,
	post_date date DEFAULT NULL,
	slug VARCHAR(25) DEFAULT NULL,
	post_judul VARCHAR(100) DEFAULT NULL,
	post_text text DEFAULT NULL,
	cat_id INT(11) NOT NULL,
	PRIMARY KEY(post_id),
	FOREIGN KEY(cat_id) REFERENCES tb_category(cat_id)

);


CREATE TABLE tb_category (
	cat_id INT(11) NOT NULL AUTO_INCREMENT,
	cat_name VARCHAR(100) DEFAULT NULL,
	cat_text VARCHAR(100) DEFAULT NULL,
	PRIMARY KEY(cat_id)
);


CREATE TABLE tb_user (
	id INT(10) NOT NULL AUTO_INCREMENT,
	username VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

