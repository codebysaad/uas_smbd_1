CREATE DATABASE db_hotel

USE db_hotel;

CREATE TABLE Kamar (
idKmr Varchar(50) PRIMARY KEY,
nomorKmr int,
jenisKmr Varchar(50),
lantai int,
harga real,
fasilitas Varchar(150),
isAvailable bit)

CREATE TABLE Pelanggan (
idPel Varchar(50) PRIMARY KEY,
nik Varchar(15),
nama Varchar(50),
alamat Varchar(100),
noHp Varchar(13))

CREATE TABLE Reservasi (
idReservasi Varchar(50) PRIMARY KEY,
idKmr Varchar(50) FOREIGN KEY(idKmr) REFERENCES Kamar(idKmr),
idPel Varchar(50) FOREIGN KEY(idPel) REFERENCES Pelanggan(idPel),
tglCheckin date,
tglCheckout date)

ALTER TABLE Pelanggan
ALTER COLUMN nik Varchar(15)

/*CREATE TRIGGER GeneratePayment
ON TransCheckin
AFTER INSERT
AS
BEGIN
INSERT INTO Payment VALUES()*/