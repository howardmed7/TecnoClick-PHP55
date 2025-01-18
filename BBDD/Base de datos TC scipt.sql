CREATE DATABASE TecnoClick;
USE TecnoClick;

CREATE TABLE Usuario (
    IdUsuario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Credencial VARCHAR(50) NOT NULL,
    Correo VARCHAR(50) NOT NULL,
    TipoCuenta VARCHAR(50) NOT NULL,
    UNIQUE (Correo) -- Para asegurarte de que no haya correos duplicados
);

CREATE TABLE Producto (
    IdProducto INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Precio DECIMAL(10, 2) NOT NULL CHECK (Precio > 0) -- Asegura precios positivos
);

CREATE TABLE Compra (
    IdCompra INT AUTO_INCREMENT PRIMARY KEY,
    IdUsuario INT,
    EstadoCompra VARCHAR(50) NOT NULL,
    Fecha DATETIME NOT NULL,
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(IdUsuario)
);

CREATE TABLE DetalleCompra (
    IdDetalleCompra INT AUTO_INCREMENT PRIMARY KEY,
    IdProducto INT,
    IdCompra INT,
    Cantidad INT NOT NULL CHECK (Cantidad > 0), -- Asegura que la cantidad sea positiva
    FOREIGN KEY (IdProducto) REFERENCES Producto(IdProducto),
    FOREIGN KEY (IdCompra) REFERENCES Compra(IdCompra)
);

CREATE TABLE CaracteristicaProducto (
    IdCaracteristicaProducto INT AUTO_INCREMENT PRIMARY KEY,
    IdProducto INT,
    Nombre VARCHAR(50) NOT NULL,
    Valor VARCHAR(50) NOT NULL,
    FOREIGN KEY (IdProducto) REFERENCES Producto(IdProducto)
);

CREATE TABLE ResenaProducto (
    IdResenaProducto INT AUTO_INCREMENT PRIMARY KEY,
    IdProducto INT,
    IdUsuario INT,
    Comentario VARCHAR(255) NOT NULL,
    Puntuacion INT NOT NULL CHECK (Puntuacion >= 1 AND Puntuacion <= 5), -- Asegura que la puntuación esté en el rango 1-5
    Fecha DATETIME NOT NULL,
    FOREIGN KEY (IdProducto) REFERENCES Producto(IdProducto),
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(IdUsuario)
);