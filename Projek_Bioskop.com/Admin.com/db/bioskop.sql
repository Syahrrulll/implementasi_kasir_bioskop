CREATE TABLE `film` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `deskripsi` text,
  `durasi` time DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `harga` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO film VALUES ('4','Luca','Drama, Petualangan','Luca Paguro seorang anak laki-laki berusia 13 tahun yang merupakan monster laut muda yang bisa berubah bentuk menjadi manusia saat berada di darat. Luca mengalami musim panas yang tak terlupakan di Portorosso, Riviera Italia bersama sahabat barunya, Alberto Scorfano dan Giulia Marcovaldo. ','01:35:00',' luca_34.jpeg','35000');
INSERT INTO film VALUES ('5','Kimetsu No Yaiba: Mugen Ressha-hen','Fantasi, Anime','Tanjiro Kamado dan adiknya, Nezuko, bergabung dengan Flame Hashira Kyojuro Rengoku, salah satu pendekar terkuat di Demon Slayer Corps, untuk membasmi iblis di atas Kereta Mugen. Namun, mereka terjebak dalam sihir yang membuat mereka tertidur dan masuk ke alam mimpi. ','01:57:00',' Kimetsu_no_yaiba_el_trenito_en_partes_portes.webp','40');
INSERT INTO film VALUES ('6','Maleficent','Fantasi, Drama','Maleficent adalah sosok peri baik hati yang kemudian berubah menjadi jahat karena kekecewaannya kepada orang yang dicintainya. Sosok peri jahat yang melekat pada Maleficent ternyata masih memiliki sisi baik yaitu ingin melindungi kerajaan Moors dan kasih sayangnya kepada puteri Aurora.','01:38:00',' images.jpg','35');


CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_add` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO users VALUES ('1','Admin','pass123','2024-10-11 12:02:09');
INSERT INTO users VALUES ('2','icha','123','2024-10-11 12:03:22');
INSERT INTO users VALUES ('3','jule','123','2024-10-11 12:35:06');
INSERT INTO users VALUES ('4','naya','123','2024-10-11 12:39:45');
INSERT INTO users VALUES ('9','julee','123','2024-10-12 19:44:10');


