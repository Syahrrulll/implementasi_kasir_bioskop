CREATE TABLE `film` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `durasi` varchar(50) DEFAULT NULL,
  `genre` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `poster` varchar(50) DEFAULT NULL,
  `harga` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO users VALUES ('1','arul','123','2024-10-06 15:19:41');
INSERT INTO users VALUES ('6','Admin','pass123','2024-10-06 16:13:07');
INSERT INTO users VALUES ('7','icha','123','2024-10-06 21:21:51');
INSERT INTO users VALUES ('8','syahrull','123','2024-10-06 21:22:04');
INSERT INTO users VALUES ('15','pae','yahaha','2024-10-06 21:23:42');
INSERT INTO users VALUES ('17','coba','123','2024-10-06 21:24:30');
INSERT INTO users VALUES ('18','reyy','123','2024-10-07 12:13:36');


