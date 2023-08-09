-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2023 pada 16.19
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akuntan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `foto_barang` varchar(100) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga`, `stok`, `foto_barang`, `id_jenis`, `id_merk`, `kode_supplier`) VALUES
(1, 'BRG0001', 'Samsung M21', 3000000, 5, 'barang_1675260040', 1, 1, 'PG01'),
(2, 'BRG0002', 'Xioami Poco 4', 4000000, 4, 'barang_1675260307', 1, 2, 'PG01'),
(3, 'BRG0003', 'Realme Narzo 4', 5000000, 6, 'barang_1675260485', 1, 5, 'PG01'),
(4, 'BRG0004', 'Vivo Y20', 4500000, 4, 'barang_1675260517', 1, 3, 'PG01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barang_keluar`, `kode_barang`, `tgl_keluar`, `jumlah`) VALUES
(1, 'BRG0001', '2023-01-31', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL,
  `jumlah` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `kode_barang`, `kode_supplier`, `jumlah`, `harga`) VALUES
(1, 'BRG0003', 'PG01', 1, 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `jenis_barang`) VALUES
(1, 'Ponsel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk_barang`
--

CREATE TABLE `merk_barang` (
  `id_merk` int(11) NOT NULL,
  `merk_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk_barang`
--

INSERT INTO `merk_barang` (`id_merk`, `merk_barang`) VALUES
(1, 'Samsung'),
(2, 'Xioami'),
(3, 'Vivo'),
(4, 'Opo'),
(5, 'Realme');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mp_aset`
--

CREATE TABLE `mp_aset` (
  `id` int(11) NOT NULL,
  `nama_aset` varchar(128) NOT NULL,
  `tanggal_perolehan` date NOT NULL,
  `jumlah_unit` varchar(128) NOT NULL,
  `umur_manfaat` varchar(128) NOT NULL,
  `harga_perolehan` varchar(128) NOT NULL,
  `akumulasi_penyusutan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mp_aset`
--

INSERT INTO `mp_aset` (`id`, `nama_aset`, `tanggal_perolehan`, `jumlah_unit`, `umur_manfaat`, `harga_perolehan`, `akumulasi_penyusutan`) VALUES
(1, 'Laptop Lenovo Ideapad 330', '2023-01-01', '1', '120', '8000000', '66666.66666666667'),
(2, 'Mesin Kasir', '2023-01-02', '1', '60', '6000000', '100000'),
(3, 'Motor Supra Bapa', '2023-01-30', '1', '60', '12000000', '200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mp_generalentry`
--

CREATE TABLE `mp_generalentry` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `naration` varchar(255) CHARACTER SET latin1 NOT NULL,
  `generated_source` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mp_generalentry`
--

INSERT INTO `mp_generalentry` (`id`, `date`, `naration`, `generated_source`) VALUES
(1, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(2, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(3, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(4, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(5, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(6, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(7, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(8, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(9, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(10, '2023-01-01', 'Saldo Awal', 'Opening balance'),
(11, '2023-01-05', 'Aktivitas operasi (pembayaran biaya operasi—gaji karyawan)', 'Journal Voucher'),
(12, '2023-01-08', 'Aktivitas operasi (penerimaan kas dari pelanggan)', 'Journal Voucher'),
(13, '2023-01-10', 'Aktivitas operasi (penjualan tunai barang dagangan)', 'Journal Voucher'),
(14, '2023-01-13', 'Aktivitas operasi (pembelian kredit)', 'Journal Voucher'),
(15, '2023-01-15', 'Aktivitas operasi (pembelian tunai barang habis pakai)', 'Journal Voucher'),
(16, '2023-01-18', 'Aktivitas operasi (penjualan kredit barang dagangan)', 'Journal Voucher'),
(17, '2023-01-20', 'Aktivitas operasi (pembayaran biaya operasi—gaji karyawan)', 'Journal Voucher'),
(18, '2023-01-23', 'Aktivitas operasi (pembayaran faktur kepada pemasok)', 'Journal Voucher'),
(19, '2023-01-27', 'Aktivitas operasi (penerimaan kas dari pelanggan)', 'Journal Voucher'),
(20, '2023-01-30', 'Penyesuaian atas beban yang masih harus dibayar—gaji dan upah', 'Journal Voucher'),
(21, '2023-01-30', 'Penyusutan Peralatan', 'Journal Voucher'),
(22, '2023-01-30', 'Penyesuaian atas persediaan', 'Journal Voucher');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mp_head`
--

CREATE TABLE `mp_head` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nature` varchar(50) CHARACTER SET latin1 NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 NOT NULL,
  `expense_type` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mp_head`
--

INSERT INTO `mp_head` (`id`, `name`, `nature`, `type`, `expense_type`) VALUES
(1, '[101010001] Bank BCA', 'Assets', '[101] Current Assets', '-'),
(2, '[101010002] Kas', 'Assets', '[101] Current Assets', '-'),
(3, '[101010003] Kas Kecil', 'Assets', '[101] Current Assets', '-'),
(4, '[101020001] Cek', 'Assets', '[101] Current Assets', '-'),
(5, '[101030001] Piutang Usaha', 'Assets', '[101] Current Assets', '-'),
(6, '[101040001] Alat Tulis Kantor', 'Assets', '[101] Current Assets', '-'),
(7, '[101040002] Persediaan Barang Habis Pakai', 'Assets', '[101] Current Assets', '-'),
(8, '[101050001] Asuransi Dibayar Dimuka', 'Assets', '[101] Current Assets', '-'),
(9, '[101050002] Pajak Dibayar Dimuka', 'Assets', '[101] Current Assets', '-'),
(10, '[101050003] Sewa Dibayar Dimuka', 'Assets', '[101] Current Assets', '-'),
(11, '[101060001] Persediaan Barang Dagang', 'Assets', '[101] Current Assets', '-'),
(12, '[102010001] Peralatan Kantor', 'Assets', '[102] Fixed Assets', '-'),
(13, '[102010002] Akumulasi Penyusutan Peralatan Kantor', 'Assets', '[102] Fixed Assets', '-'),
(14, '[102010003] Tanah', 'Assets', '[102] Fixed Assets', '-'),
(15, '[102010004] Akumulasi Penyusutan Tanah', 'Assets', '[102] Fixed Assets', '-'),
(16, '[102010005] Gedung', 'Assets', '[102] Fixed Assets', '-'),
(17, '[102010006] Akumulasi Penyusutan Gedung', 'Assets', '[102] Fixed Assets', '-'),
(18, '[103010001] Reksa Dana Saham', 'Assets', '[103] Long Term Investment', '-'),
(19, '[104010001] Good Will', 'Assets', '[104] Intagible Fixed Assets', '-'),
(20, '[201010001] Utang Wesel', 'Liability', '[201] Current Liabilities', '-'),
(21, '[201020001] Utang Usaha', 'Liability', '[201] Current Liabilities', '-'),
(22, '[201030001] Utang Gaji', 'Liability', '[201] Current Liabilities', '-'),
(23, '[201030002] Utang Bunga', 'Liability', '[201] Current Liabilities', '-'),
(24, '[201030003] Biaya Masih Harus Dibayar', 'Liability', '[201] Current Liabilities', '-'),
(25, '[201030004] Pendapatan Diterima Dimuka', 'Liability', '[201] Current Liabilities', '-'),
(26, '[201030005] Utang Pajak', 'Liability', '[201] Current Liabilities', '-'),
(27, '[202010001] Utang Bank', 'Liability', '[202] Long-term Liabilities', '-'),
(28, '[202010002] Utang Obligasi', 'Liability', '[202] Long-term Liabilities', '-'),
(29, '[303010001] Modal Usaha', 'Equity', '[301] Modal', '-'),
(30, '[303010002] Dividen', 'Equity', '[301] Modal', '-'),
(31, '[303010003] Ikhtisar Laba Rugi', 'Equity', '[301] Modal', '-'),
(32, '[303020001] Laba Ditahan', 'Equity', '[302] Laba Ditahan', '-'),
(33, '[401010001] Pendapatan Honorarium / Jasa', 'Revenue', '[401] Pendapatan Usaha', '-'),
(34, '[401010002] Penjualan Barang', 'Revenue', '[401] Pendapatan Usaha', '-'),
(35, '[401010003] Diskon Penjualan', 'Revenue', '[401] Pendapatan Usaha', '-'),
(36, '[401010004] Retur Penjualan', 'Revenue', '[401] Pendapatan Usaha', '-'),
(37, '[402010001] Pendapatan Sewa', 'Revenue', '[402] Pendapatan Diluar Usaha', '-'),
(38, '[402010002] Penjualan Non Produk', 'Revenue', '[402] Pendapatan Diluar Usaha', '-'),
(39, '[501010001] Bunga Akrual', 'Expense', '[501] Beban Usaha', NULL),
(40, '[501010002] Pajak Akrual', 'Expense', '[501] Beban Usaha', NULL),
(41, '[501030001] Beban Gaji &amp; Upah', 'Expense', '[501] Beban Usaha', NULL),
(42, '[501030002] Beban Transportasi', 'Expense', '[501] Beban Usaha', NULL),
(43, '[501030003] Beban Alat Tulis Kantor', 'Expense', '[501] Beban Usaha', NULL),
(44, '[501030004] Beban Asuransi', 'Expense', '[501] Beban Usaha', NULL),
(45, '[501030005] Beban Listrik, Air, Telepon dan Internet', 'Expense', '[501] Beban Usaha', NULL),
(46, '[501030006] Beban Sewa', 'Expense', '[501] Beban Usaha', NULL),
(47, '[501030007] Beban Administrasi', 'Expense', '[501] Beban Usaha', NULL),
(48, '[501030008] Beban Iklan', 'Expense', '[501] Beban Usaha', NULL),
(49, '[501040001] Penyusutan Bangunan', 'Expense', '[501] Beban Usaha', NULL),
(50, '[501040002] Penyusutan Sewa Guna Usaha', 'Expense', '[501] Beban Usaha', NULL),
(51, '[501040003] Penyusutan Perlengkapan Kantor', 'Expense', '[501] Beban Usaha', NULL),
(52, '[501040004] Beban Barang Habis Pakai', 'Expense', '[501] Beban Usaha', NULL),
(53, '[502010001] Beban Bunga Bank', 'Expense', '[502] Beban Diluar Usaha', NULL),
(54, '[502010002] Beban Administrasi Bank', 'Expense', '[502] Beban Diluar Usaha', NULL),
(55, '[502010003] Beban Pajak Penghasilan', 'Expense', '[502] Beban Diluar Usaha', NULL),
(56, '[601010001] Persediaan Awal', 'HPP', '[601] Harga Pokok Penjualan', '-'),
(57, '[601010002] Persediaan Akhir ', 'HPP', '[601] Harga Pokok Penjualan', '-'),
(58, '[601010003] Pembelian Barang', 'HPP', '[601] Harga Pokok Penjualan', '-'),
(59, '[601010004] Diskon Pembelian ', 'HPP', '[601] Harga Pokok Penjualan', '-'),
(60, '[601010005] Retur Pembelian', 'HPP', '[601] Harga Pokok Penjualan', '-'),
(61, '[601010006] Beban Pokok Penjualan', 'HPP', '[601] Harga Pokok Penjualan', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mp_hutang`
--

CREATE TABLE `mp_hutang` (
  `id` int(11) NOT NULL,
  `nama_hutang` varchar(128) NOT NULL,
  `tanggal_hutang` date NOT NULL,
  `penambahan` varchar(128) NOT NULL,
  `pengurangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mp_piutang`
--

CREATE TABLE `mp_piutang` (
  `id` int(11) NOT NULL,
  `nama_piutang` varchar(128) NOT NULL,
  `tanggal_piutang` date NOT NULL,
  `penambahan` varchar(128) NOT NULL,
  `pengurangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mp_sub_entry`
--

CREATE TABLE `mp_sub_entry` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `accounthead` int(11) NOT NULL,
  `amount` int(128) NOT NULL,
  `type` int(1) NOT NULL,
  `journal_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mp_sub_entry`
--

INSERT INTO `mp_sub_entry` (`id`, `parent_id`, `accounthead`, `amount`, `type`, `journal_type`) VALUES
(1, 1, 2, 36000000, 0, 0),
(2, 2, 5, 23000000, 0, 0),
(3, 3, 11, 60000000, 0, 0),
(4, 4, 7, 6000000, 0, 0),
(5, 5, 12, 110000000, 0, 0),
(6, 6, 13, 11000000, 1, 0),
(7, 7, 21, 22500000, 1, 0),
(8, 8, 22, 5000000, 1, 0),
(9, 9, 29, 50000000, 1, 0),
(10, 10, 32, 146500000, 1, 0),
(11, 11, 41, 3000000, 0, 0),
(12, 11, 22, 5000000, 0, 0),
(13, 11, 2, 8000000, 1, 0),
(14, 12, 2, 9500000, 0, 0),
(15, 12, 5, 9500000, 1, 0),
(16, 13, 2, 31500000, 0, 0),
(17, 13, 34, 31500000, 1, 0),
(18, 13, 61, 20500000, 0, 0),
(19, 13, 11, 20500000, 1, 0),
(20, 14, 11, 45000000, 0, 0),
(21, 14, 21, 45000000, 1, 0),
(22, 15, 7, 10000000, 0, 0),
(23, 15, 2, 10000000, 1, 0),
(24, 16, 5, 60000000, 0, 0),
(25, 16, 34, 60000000, 1, 0),
(26, 16, 61, 40000000, 0, 0),
(27, 16, 11, 40000000, 1, 0),
(28, 17, 41, 9000000, 0, 0),
(29, 17, 2, 9000000, 1, 0),
(30, 18, 21, 45000000, 0, 0),
(31, 18, 11, 900000, 1, 0),
(32, 18, 2, 44100000, 1, 0),
(33, 19, 2, 58200000, 0, 0),
(34, 19, 35, 1800000, 0, 0),
(35, 19, 5, 60000000, 1, 0),
(36, 20, 41, 4000000, 0, 1),
(37, 20, 22, 4000000, 1, 1),
(38, 21, 51, 1000000, 0, 1),
(39, 21, 13, 1000000, 1, 1),
(40, 22, 52, 8500000, 0, 1),
(41, 22, 7, 8500000, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `kode_supplier`, `nama_supplier`, `username`, `password`) VALUES
(1, 'PG01', 'Planet Gadget', 'supplier', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(10) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Admin', 'admin@gmail.com', 'tiny-winny.jpg', '$2y$10$S8ampsPXwlmsB3mo.Z9rHuG3gAg2ncZmDt.bX4MDD.MDWV1kYfOVO', 1, 1, 1642982363),
(4, 'Keuangan', 'user@gmail.com', 'LOGO.png', '$2y$10$glei7WhvdN7ylPT2q83Ax.DQqKLeH2zwL99lvAcsvuwEET91X52GW', 2, 1, 1642983030);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(6, 1, 3),
(13, 2, 7),
(14, 2, 8),
(15, 2, 9),
(21, 1, 12),
(22, 2, 12),
(23, 2, 13),
(24, 2, 14),
(25, 1, 13),
(26, 1, 14),
(27, 1, 7),
(28, 1, 8),
(29, 1, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(7, 'Data'),
(8, 'Akuntansi'),
(9, 'Laporan'),
(12, 'Persediaan'),
(13, 'Perhitungan'),
(14, 'Database');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(3, 2, 'Edit Profil', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Manajemen', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Manajemen', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Izin Akses', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(11, 7, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(15, 8, 'Daftar Akun', 'accounts', 'fas fa-fw fa-list-ol', 1),
(16, 8, 'Jurnal Umum', 'statements', 'fas fa-fw fa-swatchbook', 1),
(17, 8, 'Buku Besar', 'statements/leadgerAccounst', 'fas fa-fw fa-book', 1),
(18, 8, 'Neraca Saldo Awal', 'statements/trail_balance', 'fas fa-fw fa-balance-scale', 1),
(19, 9, 'Neraca Keuangan', 'statements/balancesheet', 'fas fa-fw fa-chart-pie', 1),
(20, 9, 'Laporan Laba Rugi', 'statements/income_statement', 'fas fa-fw fa-chart-bar', 1),
(21, 8, 'Neraca Saldo Akhir', 'statements/trail_balance_final', 'fas fa-fw fa-balance-scale', 1),
(22, 7, 'Daftar Hutang', 'data/hutang', 'fas fa-fw fa-book', 1),
(23, 7, 'Daftar Piutang', 'data/piutang', 'fas fa-fw fa-book', 1),
(24, 7, 'Daftar Aset', 'data', 'fas fa-fw fa-book', 1),
(25, 13, 'Pajak Penghasilan', 'perhitungan', 'fas fa-fw fa-book', 1),
(28, 14, 'Backup Database', 'database/take_backup', 'fas fa-fw fa-book', 1),
(30, 12, 'Data Barang', 'barang', 'fas fa-fw fa-book', 1),
(31, 12, 'Jenis Barang', 'jenis_barang', 'fas fa-fw fa-book', 1),
(32, 12, 'Merk Barang', 'merk_barang', 'fas fa-fw fa-book', 1),
(33, 12, 'Supplier Barang', 'supplier', 'fas fa-fw fa-book', 1),
(34, 12, 'Transaksi Barang Masuk', 'barang_masuk', 'fas fa-fw fa-book', 1),
(35, 12, 'Transaksi Barang Keluar', 'barang_keluar', 'fas fa-fw fa-book', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `merk_barang`
--
ALTER TABLE `merk_barang`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `mp_aset`
--
ALTER TABLE `mp_aset`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mp_generalentry`
--
ALTER TABLE `mp_generalentry`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mp_head`
--
ALTER TABLE `mp_head`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mp_hutang`
--
ALTER TABLE `mp_hutang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mp_piutang`
--
ALTER TABLE `mp_piutang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mp_sub_entry`
--
ALTER TABLE `mp_sub_entry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`parent_id`),
  ADD KEY `accounthead` (`accounthead`),
  ADD KEY `amount` (`amount`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `merk_barang`
--
ALTER TABLE `merk_barang`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mp_aset`
--
ALTER TABLE `mp_aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mp_generalentry`
--
ALTER TABLE `mp_generalentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `mp_head`
--
ALTER TABLE `mp_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `mp_hutang`
--
ALTER TABLE `mp_hutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mp_piutang`
--
ALTER TABLE `mp_piutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mp_sub_entry`
--
ALTER TABLE `mp_sub_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mp_sub_entry`
--
ALTER TABLE `mp_sub_entry`
  ADD CONSTRAINT `mp_sub_entry_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `mp_generalentry` (`id`),
  ADD CONSTRAINT `mp_sub_entry_ibfk_2` FOREIGN KEY (`accounthead`) REFERENCES `mp_head` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  ADD CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
