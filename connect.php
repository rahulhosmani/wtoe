<?php 
session_start();
$server	    = 'localhost';
$username	= 'root';
$password	= 'root';
$database	= 'salespoint';

if(!($conn=mysqli_connect($server, $username, $password)))
{
 	exit('Error: could not establish database connection');
}
else
{
    mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS salespoint;") or die(mysql_error());
}
if(!mysqli_select_db($conn,$database))
{
 	exit('Error: could not select the database');
}
else
{
   
  mysqli_query($conn,"CREATE TABLE IF NOT EXISTS `customers` 
(
  `gender` char(1) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `dob` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(96) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
);") or die(mysql_error());

      mysqli_query($conn,"CREATE TABLE IF NOT EXISTS `address_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(96) NOT NULL,
  `street` varchar(64) NOT NULL,
  `suburb` varchar(32) DEFAULT NULL,
  `postcode` varchar(10) NOT NULL,
  `city` varchar(32) NOT NULL,
  `province` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  foreign key(`email`) references customers(email) ON DELETE CASCADE ON UPDATE CASCADE
)  ;") or die(mysql_error());  

mysqli_query($conn,"CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(96) NOT NULL,
  `enquir` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
)  ;") or die(mysql_error());  

       
}
?>