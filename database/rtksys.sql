-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 06, 2016 at 12:02 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.2
-- 
-- Database: `rtksys`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `barang`
-- 

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `id_jenis_barang` int(11) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `berat_barang` int(11) NOT NULL,
  `satuan_barang` varchar(4) NOT NULL,
  PRIMARY KEY  (`id_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `barang`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `customer`
-- 

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `tgl_lahir_cust` date NOT NULL,
  `email_cust` varchar(20) NOT NULL,
  `alamat_cust` varchar(20) NOT NULL,
  `notelp_cust` int(12) NOT NULL,
  PRIMARY KEY  (`id_cust`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `customer`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jenis barang`
-- 

CREATE TABLE `jenis barang` (
  `id_jenis barang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jenis_barang` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_jenis barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `jenis barang`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `kurir`
-- 

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_kurir` varchar(50) NOT NULL,
  `notelp_kurir` int(12) NOT NULL,
  `nopol` varchar(8) NOT NULL,
  PRIMARY KEY  (`id_kurir`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `kurir`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `pengiriman`
-- 

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `id_cust` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `via` varchar(10) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `almt_penerima` varchar(50) NOT NULL,
  `notelp_penerima` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_pengiriman`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `pengiriman`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tb_user`
-- 

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `tb_user`
-- 

INSERT INTO `tb_user` VALUES (4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'budi admin');
