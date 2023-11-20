CREATE DATABASE gestion_alumnos;
USE gestion_alumnos;

CREATE TABLE  alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT,
    email VARCHAR(100)
);
INSERT INTO alumnos (nombre, apellido, edad, email) VALUES
    ('Ana', 'Lopez', 23, 'ana.lopez@example.com');
    ('Carlos', 'Martinez', 24, 'carlos.martinez@example.com');
    ('Laura', 'Garcia', 22, 'laura.garcia@example.com');
