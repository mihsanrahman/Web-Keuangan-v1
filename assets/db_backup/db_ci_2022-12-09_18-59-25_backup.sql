SET foreign_key_checks = 0;
#
# TABLE STRUCTURE FOR: mp_aset
#

DROP TABLE IF EXISTS `mp_aset`;

CREATE TABLE `mp_aset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_aset` varchar(128) NOT NULL,
  `tanggal_perolehan` date NOT NULL,
  `jumlah_unit` varchar(128) NOT NULL,
  `umur_manfaat` varchar(128) NOT NULL,
  `harga_perolehan` varchar(128) NOT NULL,
  `akumulasi_penyusutan` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: mp_generalentry
#

DROP TABLE IF EXISTS `mp_generalentry`;

CREATE TABLE `mp_generalentry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `naration` varchar(255) CHARACTER SET latin1 NOT NULL,
  `generated_source` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=355 DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: mp_head
#

DROP TABLE IF EXISTS `mp_head`;

CREATE TABLE `mp_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nature` varchar(50) CHARACTER SET latin1 NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `expense_type` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (47, '[1100] Kas Ditangan', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (48, '[1200] Piutang Usaha', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (49, '[1300] Perlengkapan', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (50, '[1400] Persediaan Barang Dagang', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (52, '[1502] PPN Masukan', 'Assets', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (54, '[1601] Tanah', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (57, '[1603] Peralatan', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (58, '[1701] Akumulasi Penyusutan Gedung', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (59, '[1702] Akumulasi Penyusutan Peralatans', 'Assets', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (60, '[2100] Hutang Usaha', 'Liability', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (62, '[2202] PPN Keluaran', 'Liability', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (64, '[2301] Hutang Bank', 'Liability', 'Tetap', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (65, '[3101] Modal', 'Equity', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (66, '[4101] Pendapatan Penjualan', 'Revenue', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (67, '[4102] Pendapatan Jasa', 'Revenue', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (68, '[6101] Beban Gaji', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (69, '[6102] Beban Iklan', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (70, '[6103] Beban Listrik, Air, dan Telepon', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (71, '[6104] Beban Operasional Lainnya', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (72, '[6201] Beban Penyusutan Gedung', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (73, '[6202] Beban Penyusutan Peralatan', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (74, '[6300] Beban Sewa', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (75, '[6400] Beban Perlengkapan', 'Expense', 'Lancar', 'Beban Kas');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (78, '[4103] Persediaan Awal', 'HPP', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (80, '[4105] Persediaan Akhir', 'HPP', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (82, '[4104] Pembelian', 'Revenue', 'Lancar', '-');
INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES (83, '[1602] Gedung', 'Assets', 'Tetap', '-');


#
# TABLE STRUCTURE FOR: mp_hutang
#

DROP TABLE IF EXISTS `mp_hutang`;

CREATE TABLE `mp_hutang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hutang` varchar(128) NOT NULL,
  `tanggal_hutang` date NOT NULL,
  `penambahan` varchar(128) NOT NULL,
  `pengurangan` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: mp_piutang
#

DROP TABLE IF EXISTS `mp_piutang`;

CREATE TABLE `mp_piutang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_piutang` varchar(128) NOT NULL,
  `tanggal_piutang` date NOT NULL,
  `penambahan` varchar(128) NOT NULL,
  `pengurangan` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: mp_sub_entry
#

DROP TABLE IF EXISTS `mp_sub_entry`;

CREATE TABLE `mp_sub_entry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `accounthead` int(11) NOT NULL,
  `amount` int(128) NOT NULL,
  `type` int(1) NOT NULL,
  `journal_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`parent_id`),
  KEY `accounthead` (`accounthead`),
  KEY `amount` (`amount`),
  CONSTRAINT `mp_sub_entry_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `mp_generalentry` (`id`),
  CONSTRAINT `mp_sub_entry_ibfk_2` FOREIGN KEY (`accounthead`) REFERENCES `mp_head` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=274 DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES (3, 'Admin', 'admin@gmail.com', 'LOGO1.png', '$2y$10$S8ampsPXwlmsB3mo.Z9rHuG3gAg2ncZmDt.bX4MDD.MDWV1kYfOVO', 1, 1, 1642982363);
INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES (4, 'Keuangan', 'user@gmail.com', 'LOGO.png', '$2y$10$glei7WhvdN7ylPT2q83Ax.DQqKLeH2zwL99lvAcsvuwEET91X52GW', 2, 1, 1642983030);


#
# TABLE STRUCTURE FOR: user_access_menu
#

DROP TABLE IF EXISTS `user_access_menu`;

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (1, 1, 1);
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (2, 1, 2);
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (6, 1, 3);
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (13, 2, 7);
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (14, 2, 8);
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (15, 2, 9);
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (18, 2, 10);
INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES (19, 1, 11);


#
# TABLE STRUCTURE FOR: user_menu
#

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_menu` (`id`, `menu`) VALUES (1, 'Admin');
INSERT INTO `user_menu` (`id`, `menu`) VALUES (2, 'User');
INSERT INTO `user_menu` (`id`, `menu`) VALUES (3, 'Menu');
INSERT INTO `user_menu` (`id`, `menu`) VALUES (7, 'Data');
INSERT INTO `user_menu` (`id`, `menu`) VALUES (8, 'Akuntansi');
INSERT INTO `user_menu` (`id`, `menu`) VALUES (9, 'Laporan');
INSERT INTO `user_menu` (`id`, `menu`) VALUES (10, 'Perhitungan');
INSERT INTO `user_menu` (`id`, `menu`) VALUES (11, 'Database');


#
# TABLE STRUCTURE FOR: user_role
#

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_role` (`id`, `role`) VALUES (1, 'Administrator');
INSERT INTO `user_role` (`id`, `role`) VALUES (2, 'Member');


#
# TABLE STRUCTURE FOR: user_sub_menu
#

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (3, 2, 'Edit Profil', 'user/edit', 'fas fa-fw fa-user-edit', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (4, 3, 'Menu Manajemen', 'menu', 'fas fa-fw fa-folder', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (5, 3, 'Submenu Manajemen', 'menu/submenu', 'fas fa-fw fa-folder-open', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (7, 1, 'Izin Akses', 'admin/role', 'fas fa-fw fa-user-tie', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (11, 7, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (15, 8, 'Daftar Akun', 'accounts', 'fas fa-fw fa-list-ol', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (16, 8, 'Jurnal Umum', 'statements', 'fas fa-fw fa-swatchbook', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (17, 8, 'Buku Besar', 'statements/leadgerAccounst', 'fas fa-fw fa-book', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (18, 8, 'Neraca Saldo Awal', 'statements/trail_balance', 'fas fa-fw fa-balance-scale', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (19, 9, 'Laporan Posisi Keuangan', 'statements/balancesheet', 'fas fa-fw fa-chart-pie', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (20, 9, 'Laporan Laba Rugi', 'statements/income_statement', 'fas fa-fw fa-chart-bar', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (21, 8, 'Neraca Saldo Akhir', 'statements/trail_balance_final', 'fas fa-fw fa-balance-scale', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (22, 7, 'Daftar Hutang', 'data/hutang', 'fas fa-fw fa-book', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (23, 7, 'Daftar Piutang', 'data/piutang', 'fas fa-fw fa-book', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (24, 7, 'Daftar Aset', 'data', 'fas fa-fw fa-book', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (25, 10, 'Pajak Penghasilan', 'perhitungan', 'fas fa-fw fa-book', 1);
INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES (28, 11, 'Backup Database', 'database', 'fas fa-fw fa-book', 1);


SET foreign_key_checks = 1;
