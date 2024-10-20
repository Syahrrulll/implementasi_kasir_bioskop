CREATE TABLE `film` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO film VALUES ('4','Luca','135','Drama, Petualangan','Luca Paguro seorang anak laki-laki berusia 13 tahun yang menyamar sebagai manusia, bersama sahabat barunya Alberto Scorfano dan Giulia Marcovaldo. Luca memiliki kemampuan untuk berubah bentuk menjadi manusia saat berada di darat.','luca_34.jpeg','35000');
INSERT INTO film VALUES ('5','Kimetsu No Yaiba: Mugen Ressha-hen','157','Fantasi, Anime','Tanjiro Kamado, bergabung dengan Inosuke Hashibira, seorang anak laki-laki yang dibesarkan oleh babi hutan yang memakai kepala babi hutan, dan Zenitsu Agatsuma, seorang anak laki-laki ketakutan yang mengeluarkan kekuatan sejatinya ketika dia tidur, di dalam Kereta Infinity dalam misi baru dengan seorang Pilar Api, Kyojuro Rengoku , Untuk mengalahkan iblis yang telah menyiksa orang-orang dan membunuh pembunuh iblis yang menentangnya.','Kimetsu_no_yaiba_el_trenito_en_partes_portes.webp','40000');
INSERT INTO film VALUES ('6','Maleficent','138','Fantasi, Drama','Maleficent adalah sosok peri baik hati, yang dikhianati oleh kekasih hatinya, Stefan. Tak lama lagi, ia akan memberi kutukan pada putrinya, Aurora, dalam rangka untuk membalas rasa haus akan keadilan.','images.jpg','40000');
INSERT INTO film VALUES ('24','Deadpool & Wolverine','128','Action, Adventure, Comedy','Deadpool ditawari tempat di Marvel Cinematic Universe oleh Otoritas Variasi Waktu, tetapi malah merekrut varian Wolverine untuk menyelamatkan alam semesta dari kepunahan.',' film-deadpool-wolverine-2024-.jpg','40000');
INSERT INTO film VALUES ('25','Alien: Romulus','112','Horror, Sci-fi, Thriller',' Saat mengais-ngais bagian dalam stasiun luar angkasa yang terbengkalai, sekelompok penjajah ruang angkasa muda berhadapan langsung dengan bentuk kehidupan yang paling mengerikan di alam semesta.',' film-alien-romulus-2024.jpg','40000');
INSERT INTO film VALUES ('26','Despicable Me 4','94','Adventure, Animation, Comedy','Gru, Lucy, Margo, Edith, dan Agnes menyambut anggota baru ke dalam keluarga, Gru Jr., yang berniat menyiksa ayahnya. Gru menghadapi musuh baru di Maxime Le Mal dan pacarnya Valentina, dan keluarganya terpaksa melarikan diri.',' despicable4.jpg','40000');
INSERT INTO film VALUES ('27','Inside Out 2','96','Adventure, Animation, Comedy','Sekuel yang menampilkan Riley memasuki masa puber dan mengalami emosi baru yang lebih kompleks sebagai hasilnya. Saat Riley mencoba beradaptasi dengan masa remajanya, emosi lamanya mencoba beradaptasi dengan kemungkinan tergantikan.',' film-inside-out-2-2024-lk21-d21.jpg','40000');
INSERT INTO film VALUES ('28','CHEONGSAM MERAH DARAH','78','Horror','Sekelompok teman yang bekerja sebagai pembersih rumah melakukan pekerjaan mereka di sebuah bungalo tua. Kemudian mereka mengetahui bahwa bungalo tersebut dihuni oleh roh pembalas dendam, dan mereka semua harus membayar dosa-dosa mereka di masa lalu.',' cheongsam.jpg','40000');
INSERT INTO film VALUES ('29','Tantra','135','Horror','Seorang gadis pemalu bernama Rekha memiliki kekuatan luar biasa untuk melihat roh. Ketika dia bertemu dengan seorang tantra yang jahat, dia tertarik untuk mengungkap misteri gaib yang gelap, yang membahayakan nyawanya.',' tantra.jpg','40000');
INSERT INTO film VALUES ('30','Aquaman And The Lost Kingdom','124','Action, Adventure, Fantasy','Black Manta berusaha membalas dendam pada Aquaman atas kematian ayahnya. Dengan menggunakan kekuatan Trisula Hitam, dia menjadi musuh yang tangguh. Untuk mempertahankan Atlantis, Aquaman menjalin aliansi dengan saudaranya yang dipenjara. Mereka harus melindungi kerajaan.',' aquaman.jpg','40000');
INSERT INTO film VALUES ('31','Spider-Man: No Way Home','178','Action, Adventure, Fantasy','Identitas rahasia Peter Parker terungkap ke seluruh dunia. Putus asa untuk meminta bantuan, Peter beralih ke Doctor Strange untuk membuat dunia lupa bahwa dia adalah Spider-Man. Mantra itu berjalan sangat salah dan menghancurkan multiverse, membawa penjahat mengerikan yang bisa menghancurkan dunia.',' film-spider-man-no-way-home.jpg','40000');
INSERT INTO film VALUES ('32','Spider-Man: Far From Home','129','Action, Adventure, Comedy','Peter Parker, sang pahlawan super Spider-Man yang dicintai, menghadapi empat monster elemen perusak saat berlibur di Eropa. Tak lama kemudian, dia menerima bantuan dari Mysterio, sesama pahlawan yang memiliki asal-usul misterius.',' SpiderManFarFromHomeTheatrical.jpg','40000');
INSERT INTO film VALUES ('33','Avengers: Endgame','181','Action, Adventure, Drama','Setelah peristiwa dahsyat di Avengers: Infinity War (2018), alam semesta hancur berantakan. Dengan bantuan para sekutu yang tersisa, para Avengers berkumpul sekali lagi untuk membalikkan tindakan Thanos dan mengembalikan keseimbangan alam semesta.',' Avengers_Endgame_poster.jpg','40000');
INSERT INTO film VALUES ('34','Spongebob Squarepants Presents The Tidal Zone','45','Adventure, Animation, Comedy','GrandPat melakukan perjalanan melalui dimensi dan garis waktu alternatif untuk pulang.',' The_Tidal_Zone.png','35000');
INSERT INTO film VALUES ('35','The Convert','120','Action, Drama','Seorang pengkhotbah awam tiba di sebuah pemukiman Inggris pada tahun 1830-an. Masa lalunya yang penuh kekerasan segera dipertanyakan dan imannya diuji, saat ia mendapati dirinya terjebak di tengah-tengah perang berdarah antara suku Maori.',' The_Convert_2024_film_poster.jpg','40000');
INSERT INTO film VALUES ('36','Panda Plan','99','Action, Comedy','Jackie Chan, bintang Kung Fu legendaris, diundang untuk mengadopsi seekor anak panda menggemaskan bernama Huhu. Dikenal karena pesona hingga matanya yang unik, Huhu menarik perhatian sindikat kejahatan internasional yang terkenal kejam. Bertekad untuk mendapatkan panda tersebut, mereka memberikan hadiah besar untuk kepala Huhu.\r\nMenghadapi situasi mencekam seperti ini, Jackie bekerja sama dengan agennya yang cerdas, David, dan pengasuh panda yang sangat berdedikasi, Xiaozhu.\r\nBersama-sama, trio dinamis ini menggunakan keterampilan dan taktik cerdas mereka untuk mengakali para penjahat dan menjaga Huhu tetap aman.',' pandaplan.jpg','40000');
INSERT INTO film VALUES ('37','Joker: Folie à Deux','138','Crime, Thriller, Musical','Joker: Folie a Deux menceritakan tentang Arthur Fleck (Joaquin Phoenix) yang ditahan di Arkham sambil menunggu persidangan atas kejahatannya sebagai Joker. Sambil berjuang dengan identitas gandanya, Arthur tidak hanya menemukan cinta sejati (Lady Gaga), tetapi juga menemukan musik yang selalu ada di dalam dirinya.',' joker.jpg','40000');
INSERT INTO film VALUES ('38','Venom: The Last Dance','109','Action','Eddie dan Venom kini sedang diburu. Dengan semakin dekatnya mereka, keduanya bersatu dan terpaksa mengambil keputusan berat. Apakah kali ini Eddie dan Venom akan berpisah?',' venom.jpg','40000');
INSERT INTO film VALUES ('39','The Wild Robot','102','Animation, Adventure','Petualangan epik ini mengikuti kisah sebuah robot, unit ROZZUM 7134, disingkat Roz, yang terdampar di sebuah pulau tak berpenghuni dan harus belajar beradaptasi dengan lingkungan yang keras dan perlahan membangun hubungan dengan hewan-hewan di pulau itu, serta menjadi orang tua angkat seekor angsa yatim piatu.',' wildrobot.jpg','40000');
INSERT INTO film VALUES ('40','Pantaskah Aku Berjilbab','105','Drama, Romance','Bercerita tentang Sofi (Nadya Arina) yang kehilangan figur Ayah dalam hidupnya. Kemudian ia harus menghadapi berbagai macam cobaan kehidupan, untungnya ia memiliki dukungan dari sahabatnya, Aqsa (Bryan Domani). Dari berbagai cobaan tersebut, ia kemudian mempertanyakan Pantaskah ia bahagia, dan Pantaskah ia Berhijab.',' pantaskah.jpg','40000');
INSERT INTO film VALUES ('41','Pulau Hantu','95','Horror','Dara (Taskya Namya) mengabaikan larangan Ibunya untuk pergi merayakan kelulusan bersama Pandu (Samo Rafael), Niki (Cindy Nirmala), Lathi (Hannah Hannon), dan Noah (Bukie B Mansyur) di sebuah kapal. Tanpa sadar kapal mereka terdampar di sebuah pulau tak bernama. Kerinduan menyelimuti Dara terhadap sang Ibu karena ia dan temannya terjebak disana. Apakah Dara dan teman temannya bisa keluar dari pulau itu?',' pulauhantu.jpg','40000');
INSERT INTO film VALUES ('42','Kuasa Gelap','96','Horror','Setelah kematian ibu dan adiknya dalam kecelakaan tragis, Thomas (Jerome Kurnia) bermaksud mengundurkan diri sebagai Romo. Namun dirinya justru diberi tugas terakhir untuk membantu Romo eksorsis, Rendra (Lukman Sardi), yang kesehatannya kian menurun, untuk mengusir iblis yang merasuki Kayla (Lea Ciarachel), sahabat mendiang adiknya.\r\nThomas dan Rendra berusaha sekuat tenaga untuk mengusir iblis yang bersemayam dalam tubuh Kayla. Ternyata sosok iblis itu sangat kuat. Bukan saja mengancam nyawa Kayla tetapi juga Maya (Astrid Tiar), ibu Kayla yang menyimpan masa lalu gelap hingga membuatnya dikejar rasa bersalah.\r\nKuasa Gelap adalah film horor pertama di Indonesia yg mengangkat ritual Gereja Katolik berdasarkan kasus nyata Eksorsisme.',' kuasagelap.jpg','40000');
INSERT INTO film VALUES ('43','Home Sweet Loan','112','Drama, Comedy','Kaluna (Yunita Siregar), pegawai bagian umum, bermimpi membeli rumah demi keluar dari rumah dengan tiga kepala keluarga, Ayah dan kedua kakaknya. Namun, gajinya yang tak pernah menyentuh dua digit membuatnya serasa bermimpi untuk memiliki rumah idaman yang minimal…nyerempet Jakarta. Dengan modal usaha ngirit, kerja sampingan sebagai model bibir, dan pinjaman kantor, Kaluna bersama tiga sahabatnya berjuang menemukan rumah yang sesuai. Di Tengah segala perjuangannya, Kaluna tiba-tiba harus dihadapkan pada keputusan finansial keluarga yang sulit. Kaluna dihadapkan pada pilihan antara memperjuangkan rumah atau keluarganya',' homesweet.jpg','40000');
INSERT INTO film VALUES ('44','Sumala','113','Horror, Thriller','Tanpa sepengetahuan Soedjiman (Darius Sinathrya) suaminya, Sulastri (Luna Maya) melakukan perjanjian dengan iblis supaya ia bisa memiliki anak. Ia melahirkan anak kembar, Kumala (Makayla Rose) yang bertahan hidup dan Sumala (Makayla Rose) yang meninggal. Kumala tumbuh menjadi anak yang baik hati tapi cacat fisik dan mental. Ia sering mendapat perlakuan buruk dari orang-orang sekitarnya. Suatu hari Sumala datang dari dunia kematian dan membuat perhitungan kepada mereka yang telah menyakiti Kumala.',' sumala.jpg','40000');
INSERT INTO film VALUES ('45','Jigra','153','Action','Misi sang kakak (Alia Bhatt) dalam usahanya menyelamatkan sang adik (Vedang Raina) yang menjadi korban salah tangkap.',' jigra.jpg','40000');
INSERT INTO film VALUES ('46','Canary Black','103','Action','Avery Graves (Kate Beckinsale) agen top yang diperas oleh teroris untuk mengkhianati negaranya sendiri demi menyelamatkan suaminya yang diculik.',' canary.jpg','40000');
INSERT INTO film VALUES ('47','Kemah Terlarang Kesurupan Massal','110','Horror','Diangkat dari kisah nyata, perkemahan Pramuka di Jogja tahun 2016. Rini (Callista Arum), siswi kelas 1 SMA Pandega, mengikuti perkemahan di hutan Wana Alus untuk membuktikan dirinya kuat dan mendekati Miko (Fatih Unru), ketua panitia yang diam-diam ia sukai. Meski awalnya dilarang oleh kuncen desa, Mbah Sonto (Landung Simatupang), izin akhirnya diberikan dengan syarat tidak mengusik tempat sajen. Namun, selama tiga hari perkemahan, kejadian di luar nalar terjadi. Pada malam puncak pementasan drama, Rini yang memerankan tokoh Roro Putri tiba-tiba kesurupan arwah asli Roro Putri (Nihna Fitria) dan memantik kesurupan massal di kalangan peserta lainnya. Keadaan menjadi kacau, banyak korban terluka hingga ada yang terancam nyawa. Miko, dewan ambalan, dan Mbah Sonto berjuang keras untuk menyelamatkan para siswa. Mampukah mereka mengatasi teror gaib ini dan membawa semua peserta pulang dengan selamat?',' kemah.jpg','40000');
INSERT INTO film VALUES ('48','Love in the Big City','118','Drama','Dikenal dengan lidahnya yang tajam dan sikapnya yang berani, Jae-hee (KIM Go-eun) selalu menjadi pusat gosip dan rumor kebencian. Sementara itu, Heung-soo (Steve Sanghyun NOH) bertekad untuk menjaga identitas pribadinya seumur hidup. Suatu hari, di gang belakang sebuah hotel, Jae-hee secara kebetulan menemukan rahasia Heung-soo. Bertentangan dengan kekhawatiran Heung-soo, Jae-hee menjaga rahasianya dan bahkan membantunya di saat-saat kritis. Saat kedua orang yang tidak cocok itu mulai saling bergantung, mereka diam-diam pindah bersama dan berusaha menemukan cinta di dunia yang penuh prasangka tempat mereka tinggal.',' loveinthebigcity.jpg','40000');
INSERT INTO film VALUES ('49','The Goat Life','171','Adventure, Drama','Seorang pria India yang sedang mencari pekerjaan mengikuti arahan pekerjaan ke Arab Saudi, hanya untuk mendapati dirinya dipaksa bekerja tanpa bayaran sebagai penggembala kambing di padang pasir terpencil.',' thegoatlife.jpg','40000');
INSERT INTO film VALUES ('50','Saving Bikini Vottom: The Sandy Cheeks Movie','82','Comedy, Advanture','Saving Bikini Bottom: The Sandy Cheeks Movie adalah sebuah film animasi Amerika Serikat tahun 2024 yang disutradarai oleh Liza Johnson. Film tersebut dirilis pada 2 Agustus 2024. Carolyn Lawrence dan Tom Kenny masing-masing menjadi pengisi suara Sandy Cheeks dan SpongeBob SquarePants.',' savingbikinibottom.jpeg','40000');
INSERT INTO film VALUES ('51','Arcane','52','Fiksi ilmiah, ','Di tengah perselisihan tajam antar sepasang kota kembar, Piltover dan Zaun, dua saudari bertempur sebagai musuh dalam perang antara teknologi sihir dan konflik keyakinan.',' Arcane_-_poster_29.webp','30000');
INSERT INTO film VALUES ('52','Encanto','109','Musik, Comedy, Fantasi','Encanto film disney yang mengisahkan keluarga Madrigal yang tinggal di rumah ajaib di Kolombia. Setiap anggota keluarga memiliki kekuatan magis kecuali Mirabel, yang akhirnya harus menyelamatkan keajaiban keluarganya saat kekuatan mereka mulai menghilang. Film ini menonjolkan tema penerimaan diri dan cinta keluarga, dengan musik khas Amerika Latin oleh Lin-Manuel Miranda. Encanto memenangkan Academy Award untuk Film Animasi Terbaik.',' disney-encanto.jpg','40000');
INSERT INTO film VALUES ('53','Raya and The Last Dragon','107','Animasi, Family, Comedy, Fantasi, Musical, Laga','Raya and the Last Dragon adalah Film yang berlatar di dunia fantasi Kumandra, di mana manusia dan naga pernah hidup berdampingan. Ceritanya mengikuti Raya, seorang pejuang muda yang berusaha menemukan naga terakhir, Sisu, untuk menyelamatkan tanahnya dari ancaman kegelapan yang disebut Druun. Dalam perjalanannya, Raya harus belajar mempercayai orang lain untuk mempersatukan kembali kerajaan yang terpecah. Film ini menonjolkan tema persatuan, kepercayaan, dan pengorbanan, dengan visual yang memukau dan budaya yang terinspirasi dari Asia Tenggara.',' Raya and The Last Dragon.jpg','40000');
INSERT INTO film VALUES ('54','Mencuri Raden Saleh','154','Laga, Comedy,Petualangan','Mencuri Raden Saleh adalah Film yang bercerita tentang sekelompok anak muda yang merencanakan pencurian besar untuk mencuri lukisan karya pelukis legendaris Raden Saleh dari istana presiden. Dipimpin oleh Piko, seorang pemalsu lukisan, kelompok ini terdiri dari ahli dengan keahlian berbeda-beda, seperti peretas, pembalap, dan petarung. Misi mereka penuh dengan ketegangan dan bahaya, karena melibatkan intrik politik dan pengkhianatan. Film ini menggabungkan aksi seru dengan elemen drama dan menampilkan sinematografi yang kuat serta tema persahabatan dan keberanian.',' Mencuri Raden Saleh.jpg','40000');
INSERT INTO film VALUES ('55','Merindu Cahaya de Amstel','107','Roman, Drama','Merindu Cahaya de Amstel adalah sebuah film drama religi Indonesia yang menceritakan kisah perjalanan spiritual seorang gadis Belanda bernama Marien Veenhoven yang kemudian memeluk agama Islam dan berganti nama menjadi Khadija. Film ini mengangkat tema tentang pencarian jati diri, cinta, dan perjuangan mempertahankan iman di tengah perbedaan budaya dan keyakinan.',' Merindu Cahaya de Amstel.jpg','40000');
INSERT INTO film VALUES ('56','Kaka Boss','120','Drama, Komedi','Kaka Boss adalah film komedi yang mengisahkan perjalanan seorang pemuda bernama Kaka, yang tiba-tiba terpilih menjadi bos di sebuah perusahaan besar. Kaka, yang sebelumnya adalah seorang karyawan biasa, harus menghadapi berbagai tantangan dan intrik di dunia bisnis yang kompetitif. Dengan gaya kepemimpinan yang unik dan humoris, Kaka mencoba membawa perubahan positif di tempat kerjanya. Film ini dipenuhi dengan momen-momen lucu dan menghibur, sambil menggambarkan pentingnya persahabatan, keberanian, dan kejujuran dalam menghadapi berbagai rintangan. Dengan alur cerita yang menarik dan karakter-karakter yang menggemaskan, Kaka Boss berhasil menyajikan hiburan yang menghibur bagi penonton dari segala usia.',' KAKA BOSS.jpeg','40000');
INSERT INTO film VALUES ('57','Agak Laen','119','Drama, Komedi','Agak Laen adalah film drama komedi yang menceritakan tentang dua sahabat, Roni dan Joni, yang memiliki kepribadian dan pandangan hidup yang sangat berbeda. Roni, seorang pemuda ambisius yang bercita-cita tinggi, berusaha mencapai impiannya di kota besar, sementara Joni, yang lebih santai dan humoris, lebih menikmati hidup apa adanya. Ketika mereka terjebak dalam berbagai situasi konyol dan penuh liku, mereka belajar tentang arti persahabatan, saling mendukung, dan menerima perbedaan satu sama lain. Film ini menyoroti tema kehidupan sehari-hari dengan sentuhan humor, serta menggambarkan perjalanan menemukan diri sendiri di tengah tantangan hidup. Agak Laen mengajak penonton untuk tertawa dan merenung tentang betapa berwarnanya perjalanan hidup.',' agak laen.jpeg','40000');
INSERT INTO film VALUES ('58','Laut Tengah','108','Drama, Religi','\"Laut Tengah\" adalah film drama yang mengikuti perjalanan seorang pemuda bernama Joni, yang berusaha mencari jati diri dan makna hidupnya di tengah krisis yang melanda keluarganya. Setelah kehilangan orang tuanya, Joni memutuskan untuk meninggalkan kampung halamannya dan menjelajahi kehidupan di pesisir Laut Tengah. Di sana, ia bertemu dengan berbagai karakter unik yang membantunya memahami arti cinta, kehilangan, dan harapan. Melalui pengalaman-pengalaman yang penuh emosi, Joni belajar untuk menghadapi masa lalu dan menemukan kekuatan dalam dirinya untuk melanjutkan hidup. Dengan latar belakang keindahan laut dan konflik batin yang mendalam, \"Laut Tengah\" menyajikan kisah yang menyentuh tentang pencarian diri dan keberanian untuk melangkah maju.',' Laut Tengah.jpeg','40000');


CREATE TABLE `jadwal` (
  `id_jadwal` int NOT NULL AUTO_INCREMENT,
  `jam_tayang` time DEFAULT NULL,
  `jam_berakhir` time DEFAULT NULL,
  `hari` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_film` int DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO jadwal VALUES ('2','21:36:00','22:36:00','Rabu','29');
INSERT INTO jadwal VALUES ('3','22:00:00','09:00:00','Senin','38');
INSERT INTO jadwal VALUES ('4','15:30:00','17:19:00','Selasa','52');
INSERT INTO jadwal VALUES ('5','20:00:00','21:47:00','Kamis','53');
INSERT INTO jadwal VALUES ('6','13:00:00','15:34:00','Sabtu','54');
INSERT INTO jadwal VALUES ('7','15:30:00','17:06:00','Jumat','27');
INSERT INTO jadwal VALUES ('8','20:00:00','21:47:00','Minggu','55');
INSERT INTO jadwal VALUES ('9','01:30:00','15:40:00','Senin','31');
INSERT INTO jadwal VALUES ('10','00:15:00','15:30:00','Senin','33');
INSERT INTO jadwal VALUES ('11','15:14:00','05:19:00','Senin','50');
INSERT INTO jadwal VALUES ('12','22:30:00','01:30:00','Minggu','26');
INSERT INTO jadwal VALUES ('13','01:30:00','15:00:00','Senin','37');
INSERT INTO jadwal VALUES ('14','12:00:00','14:00:00','Selasa','5');
INSERT INTO jadwal VALUES ('15','22:00:00','12:00:00','Selasa','35');
INSERT INTO jadwal VALUES ('16','04:00:00','06:30:00','Selasa','39');
INSERT INTO jadwal VALUES ('17','01:00:00','03:00:00','Rabu','28');
INSERT INTO jadwal VALUES ('18','22:00:00','12:00:00','Rabu','44');
INSERT INTO jadwal VALUES ('19','03:00:00','05:00:00','Rabu','24');
INSERT INTO jadwal VALUES ('20','13:00:00','14:52:00','Minggu','43');
INSERT INTO jadwal VALUES ('21','09:00:00','10:45:00','Sabtu','40');
INSERT INTO jadwal VALUES ('22','02:00:00','04:00:00','Senin','38');
INSERT INTO jadwal VALUES ('23','15:30:00','17:00:00','Minggu','4');
INSERT INTO jadwal VALUES ('24','20:00:00','21:52:00','Rabu','47');
INSERT INTO jadwal VALUES ('25','10:00:00','11:59:00','Kamis','56');
INSERT INTO jadwal VALUES ('26','13:00:00','15:00:00','Kamis','56');
INSERT INTO jadwal VALUES ('27','15:30:00','16:42:00','Kamis','58');


CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES ('1','arul','123','2024-10-06 15:19:41');
INSERT INTO users VALUES ('3','jule','123','2024-10-11 12:35:06');
INSERT INTO users VALUES ('6','Admin','pass123','2024-10-06 16:13:07');
INSERT INTO users VALUES ('7','icha','123','2024-10-06 21:21:51');
INSERT INTO users VALUES ('9','julee','123','2024-10-12 19:44:10');


