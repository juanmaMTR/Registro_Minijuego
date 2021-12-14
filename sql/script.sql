--Se crea la base de datos de Minijuegos
CREATE DATABASE BD_Minijuegos;
--Usamos la base de datos que hemos creado
USE BD_Minijuegos;
--Creamos la tabla Usuario
CREATE TABLE Usuario(
    idUsuario smallint UNSIGNED AUTO_INCREMENT  NOT NULL PRIMARY KEY,
    nombreUsuario varchar(60) NOT NULL,
    contraseña varchar(50) NOT NULL,
    nombre varchar(40) NOT NULL,
    apellidos varchar(40) NOT NULL,
    correo varchar(150) NOT NULL,
    tipo char(1)
);
--Creamos la tabla Minijuegos
CREATE TABLE Minijuegos(
    idMinijuego smallint UNSIGNED AUTO_INCREMENT  NOT NULL PRIMARY KEY,
    nombreMinijuego varchar(60) NOT NULL,
    url varchar(100) NOT NULL
);
--Creamos la tabla Preferencias que sale de una relación M:N
CREATE TABLE Preferencias(
    idUsuario smallint UNSIGNED  NOT NULL ,
    idMinijuego smallint UNSIGNED  NOT NULL ,
    CONSTRAINT FK_idUsuario FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario),
    CONSTRAINT FK_idMinijuego FOREIGN KEY (idMinijuego) REFERENCES Minijuegos(idMinijuego),
    CONSTRAINT PK_preferencias PRIMARY KEY (idUsuario,idMinijuego)
);
--INSERT INTO--
INSERT INTO Minijuegos(nombreMinijuego,url) 
VALUES  ('Tabla Periodica','/minijuegos/tablaPeriodica'),
        ('Flash Cards','/minijuegos/flashCards'),
        ('Ligas','/minijuegos/ligas'),
        ('Crazy Ball','/minijuegos/crazyBall'),
        ('Reciclaje','/minijuegos/reciclaje');